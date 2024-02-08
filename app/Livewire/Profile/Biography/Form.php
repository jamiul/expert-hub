<?php

namespace App\Livewire\Profile\Biography;

use App\Models\Profile;
use Livewire\Attributes\Validate;
use Livewire\Form as BaseForm;

class Form extends BaseForm
{
    #[Validate('required|min:500|max:2000')]
    public $biography = '';

    public function update()
    {
        $data = $this->validate();
        $this->profile()->update($data);
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
