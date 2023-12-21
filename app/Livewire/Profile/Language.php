<?php

namespace App\Livewire\Profile;

use App\Models\Language as AvailableLanguage;
use Livewire\Component;

class Language extends Component
{
    public $availableLanguages = [];
    public $languages = [];
    public $language = null;
    public $language_id = '';
    public $proficiency = '';

    public function mount()
    {
        $this->availableLanguages = AvailableLanguage::pluck('name', 'id')->toArray();
        $this->languages = $this->profile()->languages;
    }

    public function addLanguage()
    {
        $data = $this->validate([
            'language_id' => ['required'],
            'proficiency' => ['required'],
        ]);
        $this->profile()->languages()->attach($data['language_id'], ['proficiency' => $data['proficiency']]);
        $this->reset('language_id', 'proficiency');
        $this->languages = $this->profile()->languages;
        $this->dispatch('languageAdded');
    }

    public function editLanguage($id)
    {
        $this->languages = $this->profile()->languages;
        $language = $this->profile()->languages()->where('language_id', $id)->first();
        $this->language = $language;
        $this->language_id = $language->id;
        $this->proficiency = $language->pivot->proficiency;
        $this->dispatch('openEditLanguageModal');
    }

    public function updateLanguage()
    {
        $data = $this->validate([
            'language_id' => ['required'],
            'proficiency' => ['required'],
        ]);
        $this->profile()->languages()->updateExistingPivot($this->language->id, [
            'proficiency' => $data['proficiency'],
        ]);
        $this->languages = $this->profile()->languages;
        $this->reset('language_id', 'proficiency');
        $this->dispatch('languageUpdated');
    }

    public function deleteLanguage($id)
    {
        $this->languages = $this->profile()->languages;
        $language = $this->profile()->languages()->where('language_id', $id)->first();
        $this->language = $language;
    }

    public function destroyLanguage()
    {
        $this->profile()->languages()->detach($this->language->id);
        $this->languages = $this->profile()->languages;
        $this->dispatch('languageDeleted');
    }

    public function profile()
    {
        return auth()->user()->profile;
    }

    public function render()
    {
        return view('livewire.profile.language');
    }
}
