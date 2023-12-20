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
        $this->dispatch('languageAdded', 'addLanguage');
    }

    public function editLanguage($id)
    {
        $language = $this->profile()->languages()->where('id', $id)->first();
        $this->language = $language;
        $this->language_id = $language->language_id;
        $this->proficiency = $language->proficiency;
        $this->dispatch('openEditLanguageModal', 'editLanguage');
    }

    public function updateLanguage()
    {
        $data = $this->validate([
            'language_id' => ['required'],
            'proficiency' => ['required'],
        ]);
        $this->language->update($data);
        $this->languages = $this->profile()->languages;
        $this->reset('language_id', 'proficiency');
        $this->dispatch('closeEditLanguageModal', 'editLanguage');
    }

    public function removeLanguage($id)
    {
        $language = $this->profile()->languages()->where('id', $id)->first();
        $language->delete();
        $this->language = $this->profile()->language;
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
