<?php

namespace App\Livewire\Profile;

use App\Models\Expertise;
use App\Models\State;
use App\Models\University;
use App\Models\User;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
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
    public $skillSearchResult = [];
    public $skill = '';

    public $hourly_rate = '';
    public $platform_fee = '';
    public $total_fee = '';

    public $biography;
    public $picture;
    public $pictureUrl = '';

    public $availableStates;
    public $dob;
    public $gender;
    public $state;
    public $city;
    public $postcode;
    public $address_line_1;
    public $address_line_2;

    public function mount()
    {
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
        $this->pictureUrl = $this->profile()->picture;

        $this->availableStates = State::get();
        $user = auth()->user();
        $this->dob = $user->dob;
        $this->gender = $user->gender;
        $this->state = $user->state;
        $this->city = $user->city;
        $this->postcode = $user->postcode;
        $this->address_line_1 = $user->address_line_1;
        $this->address_line_2 = $user->address_line_2;
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
        if ($this->currentStep == 2) {
            if($this->profile()->education->count() == 0){
                return toast('success', 'Please add education', $this);
            }
        }
        if ($this->currentStep == 3) {
            if($this->profile()->experiences->count() == 0){
                return toast('info', 'Please add experience', $this);
            }
        }
        if ($this->currentStep == 4) {
            if($this->profile()->languages->count() == 0){
                return toast('info', 'Please add language', $this);
            }
        }
        if ($this->currentStep == 5) {
            $this->validateOnly('hourly_rate');
            $this->profile()->update(['hourly_rate' => $this->hourly_rate]);
        }
        if($this->currentStep == 6){
            $this->saveKyc();
        }
        if ($this->currentStep == 7) {
            $this->validate([
                'biography' => ['required'],
                'picture' => $this->rules()['picture'],
            ]);
            $this->profile()->update(['biography' => $this->biography]);
            if($this->picture){
                $this->profile()->addMedia($this->picture->getRealPath())
                    ->preservingOriginal()
                    ->usingName($this->picture->getClientOriginalName())
                    ->toMediaCollection('picture');
            }
            return redirect()->route('expert.dashboard');
        }

        if ($this->currentStep < 7) {
            $this->currentStep += 1;
        }

    }

    public function saveKyc()
    {
        $user = User::find(auth()->user()->id);
        $user->update([
            'dob' => Carbon::parse($this->dob),
            'gender' => $this->gender,
            'state' => $this->state,
            'city' => $this->city,
            'postcode' => $this->postcode,
            'address_line_1' => $this->address_line_1,
            'address_line_2' => $this->address_line_2,
        ]);
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
        if($this->hourly_rate){
            $this->platform_fee = $this->hourly_rate * 0.1;
            $this->total_fee = $this->hourly_rate + $this->platform_fee;
        }else{
            $this->platform_fee = 0;
            $this->total_fee = 0;
        }
        
    }

    public function updatedPicture()
    {
        $this->validateOnly('picture');
        $this->pictureUrl = $this->picture->temporaryUrl();
    }

    public function rules()
    {
        $required = $this->pictureUrl == '' ? 'required' : 'nullable';
        return [
            'expertise_id' => ['required'],
            'selectedSkills' => ['required', 'array'],
            'hourly_rate' => ['required', 'numeric', 'min:10', 'max:1000'],
            'biography' => ['required'],
            'picture' => [
                $required,
                'image', 
                File::image()->max(1 * 1024),
                Rule::dimensions()->maxWidth(1000)->maxHeight(1000)->ratio(1),
            ],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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
        }
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

    public function removePicture()
    {
        $this->reset('picture');
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
}
