<?php

namespace App\Livewire\Profile;

use App\Models\Expertise;
use App\Models\Language;
use Livewire\Component;
use Livewire\WithFileUploads;

class Wizard extends Component
{
    use WithFileUploads;

    public int $currentStep = 1;
    
    public $availableExpertFieldGroups = [];
    public $expertise_id;

    public $availableSkillGroups = [];
    public $availableSkills = [];
    public $selectedSkillGroups = [];
    public $selectedSkills = [];
    public $skill = '';

    public $language = '';
    public $availableLanguages = [];
    public $selectedLanguages = [];



    public $educationQualifications;
    public $qualification_name = '';
    public $field_of_study = '';
    public $university = '';
    public $start_year = '';
    public $end_year = '';

    public $availableConsultationTypes = [
        'Consultation',
        'Media Interview',
        'TV Interview',
        'Keynote Speaker',
    ];
    
    public $consultationService = false;
    public $showExistingConsultationService = false;
    public $additionalConsultationService = false;
    public $noConsultationService = true;
    public $consultation_type = '';
    public $value = '';
    public $consultationServices;
    public $photo;

    public $biography;
    public $research_profile_1;
    public $research_profile_2;

    public $picture;

    public function mount()
    {
        $this->availableExpertFieldGroups = Expertise::expertise()->isParent()->get();
        $this->availableSkillGroups = Expertise::skill()->isParent()->pluck('id')->toArray();
        $skills = Expertise::skill()->get();
        $skills->each(function($skill){
            $this->availableSkills[$skill->id] = [
                'name' => $skill->name,
                'parent_id' => $skill->parent_id,
            ];
        });
        // dd($this->availableSkills);
       
        // $this->availableExpertFields = Expertise::expertise()->get();
        // $this->selectedLanguages = $this->profile()->languages()->pluck('language_id')->toArray();
        // $this->selectedExpertises = $this->profile()->expertises()->pluck('expertise_id')->toArray();
        // $this->availableExpertises = Expertise::whereNotIn('id', array_keys($this->selectedExpertises))->pluck('name', 'id')->toArray();
        // $this->educationQualifications = $this->profile()->educationQualifications;
        // $this->consultationServices = $this->profile()->consultationServices;
        // if ($this->consultationServices->count() > 0) {
        //     $this->showExistingConsultationService = true;
        //     $this->noConsultationService = false;
        //     $this->consultationService = false;
        // }
        // $this->biography = $this->profile()->biography;
        // $this->research_profile_1 = $this->profile()->research_profiles[0] ?? '';
        // $this->research_profile_2 = $this->profile()->research_profiles[1] ?? '';
    }

    public function render()
    {
        return view('livewire.profile.wizard');
    }

    public function back()
    {
        if ($this->currentStep > 1) {
            $this->currentStep -= 1;
        }
    }

    public function next()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'expertise_id' => ['required'],
                'selectedSkills' => ['required', 'array'],
            ]);
        }
        // if ($this->currentStep == 2) {
        //     $this->validate([
        //         'selectedExpertises' => ['required', 'array']
        //     ]);
        // }
        // if ($this->currentStep == 3) {
        //     $this->validate([
        //         'educationQualifications' => ['required', 'array']
        //     ]);
        // }
        // if ($this->currentStep == 5) {
        //     $this->saveBiography();
        // }

        if ($this->currentStep < 6) {
            $this->currentStep += 1;
        }

    }

    public function messages()
    {
        return [
            'selectedLanguages.required' => 'Please add at least one Language',
            'selectedExpertises.required' => 'Please select some Expertises',
            'educationQualifications.required' => 'Please add some Education Qualifications',
            'selectedSkills.required' => 'The skills field is required',
        ];
    }

    public function searchLanguage()
    {
        if ($this->language) {
            $availableLanguages = Language::where('name', 'like', '%' . $this->language . '%')
                ->whereNotIn('id', array_keys($this->selectedLanguages))
                ->limit(3)
                ->get();
            $this->availableLanguages = $availableLanguages;
        } else {
            $this->availableLanguages = [];
        }
    }

    public function addLanguage($id)
    {
        $language = Language::find($id);
        if ($language) {
            $this->profile()->languages()->firstOrCreate([
                'name' => $language->name,
                'language_id' =>  $language->id,
            ]);
            $this->selectedLanguages[$language->id] = $language->name;
            $this->reset('language', 'availableLanguages');
        }
    }

    public function removeLanguage($id)
    {
        $language = $this->profile()->languages()->where('language_id', $id)->first();
        $language->delete();
        unset($this->selectedLanguages[$id]);
    }


    public function addEducationQualification()
    {
        $data = $this->validate([
            'qualification_name' => ['required'],
            'field_of_study' => ['required'],
            'university' => ['required'],
            'start_year' => ['required'],
            'end_year' => ['required'],
        ]);
        $this->profile()->educationQualifications()->create($data);
        $this->reset('qualification_name', 'field_of_study', 'university', 'start_year', 'end_year');
        $this->educationQualifications = $this->profile()->educationQualifications;
    }

    public function removeEducationQualification($id)
    {
        $educationQualification = $this->profile()->educationQualifications()->where('id', $id)->first();
        $educationQualification->delete();
        $this->educationQualifications = $this->profile()->educationQualifications;
    }

    public function searchSkill()
    {
        if ($this->skill) {
            $availableSkills = Expertise::where('name', 'like', '%' . $this->skill . '%')
                ->whereNotIn('id', array_keys($this->selectedSkills))
                ->limit(5)
                ->get()
                ->pluck('name', 'id')->toArray();
            $this->availableSkills = $availableSkills;
        } else {
            $this->availableSkills = [];
        }
    }

    public function addSkill($id)
    {
        $skill = $this->availableSkills[$id];
        if ($skill) {
            $this->selectedSkills[$id] = $skill;
            ksort($this->selectedSkills);
            if(!in_array($skill['parent_id'], $this->selectedSkillGroups)){
                $this->selectedSkillGroups[] = $skill['parent_id'];
                $this->selectedSkillGroups = array_values($this->selectedSkillGroups);
            }
            unset($this->availableSkills[$id]);
            $this->reset('skill');
        }
        // dd($this->selectedSkills);
    }

    public function removeSkill($id)
    {
        $skill = $this->selectedSkills[$id];
        if ($skill){
            unset($this->selectedSkills[$id]);
            $this->availableSkills[$id] = $skill;
            ksort($this->availableSkills);
        }
        $this->selectedSkillGroups = [];
        foreach($this->selectedSkills as $skill){
            if (!in_array($skill['parent_id'], $this->selectedSkillGroups)) {
                $this->selectedSkillGroups[] = $skill['parent_id'];
                $this->selectedSkillGroups = array_values($this->selectedSkillGroups);
            }
        }
    }

    public function saveBiography()
    {
        $this->validate([
            'biography' => ['required'],
        ]);
        $research_profiles = [
            $this->research_profile_1,
            $this->research_profile_2,
        ];
        $this->profile()->update([
            'biography' => $this->biography,
            'research_profiles' => $research_profiles,
        ]);
    }

    public function removePicture()
    {
        $this->reset('picture');
    }

    public function previewProfile()
    {
        $this->validate([
            'picture' => ['required', 'image'],
        ]);
        $pictureName = $this->picture->getClientOriginalName() . '-' . time() . '.' . $this->picture->extension();
        $this->picture->storeAs('profile-picture', $pictureName);
        $this->profile()->update([
            'picture' => $pictureName,
        ]);
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
}
