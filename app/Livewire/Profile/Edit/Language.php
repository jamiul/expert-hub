<?php

namespace App\Livewire\Profile\Edit;

use Livewire\Attributes\On;
use Livewire\Component;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Language extends Component
{
    use InteractsWithConfirmationModal;

    public $languages = [];
    public $editable = true;

    public function mount()
    {
        $this->languages = $this->profile()->languages;
    }

    #[On('refresh')]
    public function updateLanguageList()
    {
        $this->languages = $this->profile()->languages;
    }

    public function deleteLanguage($id)
    {
        $this->languages = $this->profile()->languages;
        $this->askForConfirmation(
            callback: function () use ($id) {
                $language = $this->profile()->languages()->where('language_id', $id)->first();
                $this->profile()->languages()->detach($language->id);
                $this->updateLanguageList();
            },
        );
    }

    public function profile()
    {
        return auth()->user()->profile;
    }

    public function render()
    {
        return view('livewire.profile.edit.language');
    }
}
