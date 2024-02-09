<?php

namespace App\Livewire\Profile;

use App\Enums\ProfileStatus;
use App\Helpers\PaymentHelper;
use App\Models\Expertise;
use App\Models\ExpertKYC;
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

    public $expertCategories = [];
    public $expert_category_id;

    public $expertises = [];
    public $expertise_id;

    public $availableSkills = [];
    public $skills = [];

    public $hourly_rate = '';

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
        $this->expertCategories = Expertise::expertise()->isParent()->get();
        $this->expert_category_id = $this->profile()->expert_category_id;
        $this->expertise_id = $this->profile()->expertise_id;
        if($this->expert_category_id){
            $this->expertises = Expertise::where('parent_id', $this->expert_category_id)->get();
        }
        $this->skills = $this->profile()->expertises->pluck('id')->toArray();
        $this->availableSkills = Expertise::skill()->isChild()->pluck('id', 'name')->toArray();
        $this->hourly_rate = $this->profile()->hourly_rate;
        $this->biography = $this->profile()->biography;
        $this->pictureUrl = $this->profile()->picture;

        $this->availableStates = State::get();
        $user = auth()->user();
        $this->dob = $user->expert_kyc?->individual_dob;
        $this->gender = $user->expert_kyc?->individual_gender;
        $this->state = $user->expert_kyc?->individual_registered_address_state;
        $this->city = $user->expert_kyc?->individual_registered_address_city;
        $this->postcode = $user->expert_kyc?->individual_registered_address_postal_code;
        $this->address_line_1 = $user->expert_kyc?->individual_registered_address_line1;
        $this->address_line_2 = $user->expert_kyc?->individual_registered_address_line2;
    }

    public function updatedExpertCategoryId()
    {
        $this->expertises = Expertise::where('parent_id', $this->expert_category_id)->get();
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
            $this->saveStepOne();
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
        if($this->currentStep == 5){
            $this->saveKyc();
        }
        if ($this->currentStep == 6) {
            $this->validate([
                'biography' => ['required', 'min:200', 'max:2000'],
                'picture' => $this->rules()['picture'],
            ]);
            $this->profile()->update(['biography' => $this->biography]);
            if($this->picture){
                $this->profile()->addMedia($this->picture->getRealPath())
                    ->preservingOriginal()
                    ->usingName($this->picture->getClientOriginalName())
                    ->toMediaCollection('picture');
            }
            $this->profile()->update([
                'status' => ProfileStatus::InReview,
            ]);
            toast('success', "Profile Details Saved Successfully");
            return redirect()->route('expert.profile.edit');
        }

        if ($this->currentStep < 6) {
            $this->currentStep += 1;
        }

    }

    public function saveKyc()
    {
        $this->validate([
            'dob' => ['required'],
            'address_line_1' => ['required'],
            'city' => ['required'],
            'postcode' => ['required'],
            'state' => ['required'],
        ]);
        $user = User::find(auth()->user()->id);

        ExpertKYC::updateOrCreate(
            ['user_id' => $user->id],
            [
                'country' => $user->country->name,
                'individual_first_name' => $user->first_name,
                'individual_last_name' => $user->last_name,
                'individual_email' => $user->email,
                'individual_gender' => $this->gender,
                'individual_dob' => Carbon::parse($this->dob),
                'individual_phone' => $user->phone,
                'individual_registered_address_country' => $user->country->name,
                'individual_registered_address_state' => $this->state,
                'individual_registered_address_city' => $this->city,
                'individual_registered_address_postal_code' => $this->postcode,
                'individual_registered_address_line1' => $this->address_line_1,
                'individual_registered_address_line2' => $this->address_line_2,
                'status' => 'unverified',
            ]
        );

        return PaymentHelper::expertRegisterToStripe($user);
    }

    public function saveStepOne()
    {
        $this->validate([
            'expert_category_id' => ['required'],
            'expertise_id' => ['required'],
            'skills' => ['required', 'array', 'max:10', 'min:1'],
            'hourly_rate' => ['required'],
        ]);
        $this->profile()->update([
            'expert_category_id' => $this->expert_category_id,
            'expertise_id' => $this->expertise_id,
            'hourly_rate' => $this->hourly_rate,
        ]);
        $this->profile()->expertises()->sync($this->skills);
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
            'skills' => ['required', 'array'],
            'hourly_rate' => ['required', 'numeric', 'min:50', 'max:1000'],
            'biography' => ['required', 'min:200', 'max:2000'],
            'picture' => [
                $required,
                'image',
                File::image()->max(1 * 1024),
            ],
        ];
    }

    public function updatedSkills()
    {
        $this->validate([
            'skills' => ['required', 'array', 'max:10', 'min:1'],
        ]);
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

    public function removePicture()
    {
        $this->reset('picture');
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
}
