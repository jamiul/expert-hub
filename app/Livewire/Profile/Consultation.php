<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Livewire\Attributes\On;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Consultation extends Component
{
    use InteractsWithConfirmationModal;

    public $consultations = [];
    public function mount()
    {
        $this->consultations = $this->profile()->consultation;
    }

    #[On('refresh')]
    public function updateConsultationList()
    {
        $this->consultations = $this->profile()->consultation;
    }

    public function deleteConsultation($id)
    {
        $this->askForConfirmation(
            callback: function () use ($id) {
                $education = $this->profile()->consultation()->where('id', $id)->first();
                $education->delete();
                $this->updateConsultationList();
            },
        );
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
    public function render()
    {
        return view('livewire.profile.consultation');
    }
}
