<?php

namespace App\Livewire\Profile\Language;

use App\Livewire\Profile\Language\Form;
use App\Models\Language;
use Livewire\Attributes\Validate;
use WireElements\Pro\Components\Modal\Modal;

class Edit extends Modal
{
    public int|Language $language;

    #[Validate('required')]
    public $proficiency = '';

    public function mount(Language $language)
    {
        $this->language = $language;
        $profileLanguage = $this->profile()->languages()->where('language_id', $language->id)->first();
        $this->proficiency = $profileLanguage->pivot->proficiency;
    }

    public function updateLanguage()
    {
        $data = $this->validate();

        $this->profile()->languages()->updateExistingPivot($this->language->id, [
            'proficiency' => $data['proficiency'],
        ]);
        $this->reset();
        $this->dispatch('refresh')->to(\App\Livewire\Profile\Language::class);
        $this->dispatch('refresh')->to(\App\Livewire\Profile\Edit\Language::class);
        $this->close();
    }

    public function profile()
    {
        return auth()->user()->profile;
    }

    public function render()
    {
        return view('livewire.profile.language.edit');
    }
}
