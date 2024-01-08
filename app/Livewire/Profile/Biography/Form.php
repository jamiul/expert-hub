<?php

namespace App\Livewire\Profile\Biography;

use App\Models\Profile;
use Livewire\Attributes\Validate;
use Livewire\Form as BaseForm;

class Form extends BaseForm
{
    #[Validate('required')]
    public $biography = '';

    public function create()
    {
        $data = $this->validate();
        $this->profile()->create($data);
        $this->reset();
    }

    public function set(Profile $profile)
    {
        $this->biography = $profile->biography;
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
}
