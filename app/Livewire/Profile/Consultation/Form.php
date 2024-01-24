<?php

namespace App\Livewire\Profile\Consultation;

use Livewire\Form as BaseForm;
use Livewire\Attributes\Validate;

class Form extends BaseForm
{
    public $consultation;

    #[Validate('nullable')]
    public $expertise_id;

    #[Validate('nullable')]
    public $profile_id;

    #[Validate('nullable')]
    public $hourly_rate;

    #[Validate('nullable')]
    public $description = '';

    public function add()
    {
        $data = $this->validate();

        $this->profile()->consultation()->create($data);
        $this->reset();

    }

    public function profile()
    {
        return auth()->user()->profile;
    }
}
