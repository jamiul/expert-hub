<?php

namespace App\Livewire\Profile;

use App\Models\Expertise;
use App\Models\University;
use Livewire\Component;
use Livewire\WithFileUploads;

class Wizard extends Component
{
    use WithFileUploads;

    public int $currentStep = 2;
    public $educations = [];
    
    public $availableExpertFieldGroups = [];
    public $expertise_id;

    public $availableSkillGroups = [];
    public $availableSkills = [];
    public $selectedSkillGroups = [];
    public $selectedSkills = [];
    public $skillSearchResult = [];
    public $skill = '';

    public $hourly_rate = '';
    public $platform_fee = '';
    public $total_fee = '';

    public $biography;
    public $picture;
    public $pictureUrl = '';

    public $institutions;
    public $institution = 'Australian Catholic University';
    public function mount()
    {
        $this->educations = $this->profile()->education;
        $this->institutions = University::where('country_id', 14)->get();
        $this->availableExpertFieldGroups = Expertise::expertise()->isParent()->get();
        $this->expertise_id = $this->profile()->expertise_id;
        $this->profile()->expertises->each(function($skill){
            $this->selectedSkills[$skill->id] = [
                'name' => $skill->name,
                'parent_id' => $skill->parent_id,
            ];
            if (!in_array($skill['parent_id'], $this->selectedSkillGroups)) {
                $this->selectedSkillGroups[] = $skill['parent_id'];
                $this->selectedSkillGroups = array_values($this->selectedSkillGroups);
            }
        });
        $this->availableSkillGroups = Expertise::skill()->isParent()->pluck('id')->toArray();
        $skills = Expertise::skill()->get();
        $skills->each(function($skill){
            $this->availableSkills[$skill->id] = [
                'name' => $skill->name,
                'parent_id' => $skill->parent_id,
            ];
        });

        $this->hourly_rate = $this->profile()->hourly_rate;
        $this->platform_fee = $this->profile()->hourly_rate * .1;
        $this->total_fee = $this->profile()->hourly_rate + $this->platform_fee;
        $this->biography = $this->profile()->biography;
        $picture = $this->profile()->getMedia('picture');
        $this->pictureUrl = $picture ? $picture[0]->getUrl() : '';
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
            $this->saveSkill();
        }
        if ($this->currentStep == 5) {
            $this->validate([
                'hourly_rate' => ['required','numeric','min:10','max:1000'],
            ]);
            $this->profile()->update(['hourly_rate' => $this->hourly_rate]);
        }
        if ($this->currentStep == 6) {
            $this->validate([
                'biography' => ['required'],
                'picture' => ['sometimes'],
            ]);
            $this->profile()->update(['biography' => $this->biography]);
            if($this->picture){
                $this->profile()->addMedia($this->picture->getRealPath())
                    ->preservingOriginal()
                    ->usingName($this->picture->getClientOriginalName())
                    ->toMediaCollection('picture');
            }
            return redirect('/figma/expert-dashboard');
        }

        if ($this->currentStep < 6) {
            $this->currentStep += 1;
        }

    }

    public function saveSkill()
    {
        $this->validate([
            'expertise_id' => ['required'],
            'selectedSkills' => ['required', 'array'],
        ]);
        $this->profile()->update(['expertise_id' => $this->expertise_id]);
        $expertises = array_keys($this->selectedSkills);
        $this->profile()->expertises()->sync($expertises);
    }

    public function updatedHourlyRate()
    {
        $this->platform_fee = $this->hourly_rate * 0.1;
        $this->total_fee = $this->hourly_rate + $this->platform_fee;
    }

    public function updatedPicture()
    {
        $this->pictureUrl = $this->picture->temporaryUrl();
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

    public function updatedSkill()
    {
        if ($this->skill) {
            $this->searchSkill();
        } else {
            $this->skillSearchResult = [];
        }
    }

    public function searchSkill()
    {
        $this->skillSearchResult = Expertise::skill()->isChild()->where('name', 'like', '%' . $this->skill . '%')
            ->whereNotIn('id', array_keys($this->selectedSkills))
            ->limit(20)
            ->get()
            ->pluck('name', 'id')->toArray();
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
            if($this->skill){
                $this->searchSkill();
            }
            // $this->reset('skill');
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
