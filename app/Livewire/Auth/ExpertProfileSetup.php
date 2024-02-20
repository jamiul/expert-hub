<?php

namespace App\Livewire\Auth;

use App\Enums\ProfileStatus;
use App\Models\Expertise;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\File;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ExpertProfileSetup extends Component
{
    use WithFileUploads;
    
    public int $currentStep = 2;

    public $expertCategories = [];
    #[Validate()]
    public $expert_category_id;

    public $expertises = [];
    #[Validate()]
    public $expertise_id;

    public $availableSkills = [];
    #[Validate()]
    public $skills = [];

    #[Validate()]
    public $resume;
    public $resumeUrl = '';
    public $picture;
    public $pictureUrl = '';

    public $externalProfileType;
    public $externalProfileUrl;

    public function mount()
    {
        $this->expertCategories = Expertise::expertise()->isParent()->get();
        $this->expert_category_id = $this->profile()->expert_category_id;
        $this->expertise_id = $this->profile()->expertise_id;
        if ($this->expert_category_id) {
            $this->expertises = Expertise::where('parent_id', $this->expert_category_id)->get();
        }
        $this->availableSkills = Expertise::skill()->isChild()->pluck('id', 'name')->toArray();
        $this->skills = $this->profile()->expertises->pluck('id')->toArray();
        $this->resumeUrl = $this->profile()->resume;
        $this->pictureUrl = $this->profile()->picture;
    }

    public function updatedExpertCategoryId()
    {
        $this->expertises = Expertise::where('parent_id', $this->expert_category_id)->get();
    }

    public function updatedSkills()
    {
        $this->validateOnly('skills');
    }

    public function updatedResume()
    {
        $this->validateOnly('resume');
    }

    public function removeResume()
    {
        $this->resume = '';
    }

    public function updatedPicture()
    {
        $this->validateOnly('picture');
        $this->pictureUrl = $this->picture->temporaryUrl();
    }

    public function next()
    {
        if($this->currentStep == 2){
            $this->saveStepTwo();
        }
        if ($this->currentStep < 3) {
            $this->currentStep += 1;
        }
    }

    public function back()
    {
        if ($this->currentStep > 2) {
            $this->currentStep -= 1;
        }
    }

    public function saveStepTwo()
    {
        $this->validate();
        $this->profile()->update([
            'expert_category_id' => $this->expert_category_id,
            'expertise_id' => $this->expertise_id,
        ]);
        $this->profile()->expertises()->sync($this->skills);
    }

    public function completeRegistration()
    {
        $this->validate();
        if ($this->resume) {
            $this->profile()->addMedia($this->resume->getRealPath())
                ->preservingOriginal()
                ->usingName($this->resume->getClientOriginalName() . '-' . $this->profile()->user->username)
                ->toMediaCollection('resume');
        }
        if ($this->picture) {
            $this->profile()->addMedia($this->picture->getRealPath())
                ->preservingOriginal()
                ->usingName($this->picture->getClientOriginalName() . '-' . $this->profile()->user->username)
                ->toMediaCollection('picture');
        }
        $this->profile()->externalProfiles()->create([
            'type' => $this->externalProfileType,
            'url' => $this->externalProfileUrl,
        ]);
        $this->profile()->update([
            'status' => ProfileStatus::InReview,
        ]);

        event(new Registered(auth()->user()));

        return redirect()->route('verification.notice');
    }

    public function rules()
    {
        if ($this->currentStep == 2) {
            return [
                'expert_category_id' => ['required'],
                'expertise_id' => ['required'],
                'skills' => ['required', 'array', 'max:8', 'min:1'],
            ];
        }
        if ($this->currentStep == 3) {
            $resumeRequired = $this->resumeUrl == '' ? 'required' : 'nullable';
            $pictureRequired = $this->pictureUrl == '' ? 'required' : 'nullable';
            return [
                'resume' => [
                    $resumeRequired,
                    File::types(['pdf'])->max(5 * 1024),
                ],
                'picture' => [
                    $pictureRequired,
                    'image',
                    File::image()->max(1 * 1024),
                ],
                'externalProfileType' => ['required'],
                'externalProfileUrl' => ['required'],
            ];
        }
    }

    public function profile()
    {
        return auth()->user()->profile;
    }

    public function render()
    {
        return view('livewire.auth.expert-profile-setup');
    }
}
