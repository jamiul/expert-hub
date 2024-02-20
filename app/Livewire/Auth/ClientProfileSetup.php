<?php

namespace App\Livewire\Auth;

use App\Enums\ProfileStatus;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ClientProfileSetup extends Component
{
    public int $currentStep = 2;

    #[Validate('required')]
    public $current_job_title = '';
    #[Validate('required')]
    public $current_job_organization = '';
    #[Validate('required')]
    public $current_job_sector = '';

    public function completeRegistration()
    {
        $this->validate();
        $this->profile()->update([
            'current_job_title' => $this->current_job_title,
            'current_job_organization' => $this->current_job_organization,
            'current_job_sector' => $this->current_job_sector,
            'status' => ProfileStatus::Approved,
        ]);

        toast('success', "Profile Details Saved Successfully");
        return redirect()->route('client.profile.edit');
    }

    public function profile()
    {
        return auth()->user()->profile;
    }

    public function render()
    {
        return view('livewire.auth.client-profile-setup');
    }
}
