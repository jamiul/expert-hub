<?php

namespace App\Livewire\Profile\Language;

use App\Models\Language;
use Livewire\Attributes\Validate;
use WireElements\Pro\Components\Modal\Modal;

class Create extends Modal
{
    public $availableLanguages = [];
    
    #[Validate('required')]
    public $language_id = '';

    #[Validate('required')]
    public $proficiency = '';

    public function mount()
    {
        $selectedLanguages = auth()->user()->profile->languages->pluck('id')->toArray();
        $this->availableLanguages = Language::whereNotIn('id', $selectedLanguages)->pluck('name', 'id')->toArray();
    }

    public function addLanguage()
    {
        $data = $this->validate();
        $this->profile()->languages()->attach($data['language_id'], ['proficiency' => $data['proficiency']]);
        $this->reset();
        $this->dispatch('refresh')->to(\App\Livewire\Profile\Language::class);
        $this->close();
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
    
    public function render()
    {
        return view('livewire.profile.language.create');
    }
}
