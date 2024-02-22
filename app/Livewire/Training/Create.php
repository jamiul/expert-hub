<?php

namespace App\Livewire\Training;

use App\Enums\TrainingMode;
use App\Models\Country;
use App\Models\Expertise;
use App\Models\Language;
use App\Models\Profile;
use App\Models\State;
use App\Models\Training;
use App\Models\University;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{
    public $trainingTitle;
    public $trainingFee;
    public $expertiseId;
    public $partnerInstituteId = [];
    public $countryId;
    public $stateId;
    public $countries;
    public $states;
    public $startDate;
    public $startTime;
    public $endDate;
    public $endTime;
    public $trainingMode;
    public $link;
    public $languageId;
    public $summary;
    public $outline;
    public $outcomes;
    public $assesments;
    public $activities;
    public $resources;
    public $prescribedMaterials;
    public $recommendedReading;

    // To generate form field
    public $languages;
    public $availableExpertiseFields;
    public $partnerInstitutes;

    // public $instructorSearch;
    public $expertIds = [];
    public $selectedExperts;

    public $currentStep = 1;

    public function mount()
    {
        $this->countries = Country::pluck('name', 'id')->toArray();
        $this->states = State::pluck('name', 'id')->toArray();
        $this->languages = Language::select('id', 'name')->get();
        $this->availableExpertiseFields = Expertise::expertise()->isParent()->pluck('name', 'id')->toArray();
        $this->partnerInstitutes = University::pluck('name', 'id')->toArray();
    }

    public function rules()
    {
        return [

            // 'trainingTitle' => ['required'],
            // 'trainingFee' => ['required', 'integer'],
            // 'expertiseId' => ['nullable', 'exists:expertises,id'],
            // 'partnerInstituteId' => ['nullable', 'exists:universities,id'],

            // 'countryId' => ['nullable', 'exists:countries,id'],
            // 'stateId' => ['nullable', 'exists:states,id'],            
            // 'startDate' => ['nullable', 'date_format:d M Y'],
            // 'startTime' => ['nullable', 'date_format:H:i'],
            // 'endDate' => ['nullable', 'date_format:d M Y', 'after_or_equal:startDate'],
            // 'endTime' => ['nullable', 'date_format:H:i'],
            // 'trainingMode' => ['nullable', Rule::in(TrainingMode::cases())],
            // 'link' => ['nullable', 'url'],
            // 'languageId' => ['nullable', 'exists:languages,id'],

            // 'summary' => ['nullable', 'string', 'max:200'],
            // 'outline' => ['nullable', 'string', 'max:200'],
            // 'outcomes' => ['nullable', 'string', 'max:200'],
            // 'assesments' => ['nullable', 'string', 'max:200'],
            // 'activities' => ['nullable', 'string', 'max:200'],
            // 'resources' => ['nullable', 'string', 'max:200'],
            // 'prescribedMaterials' => ['nullable', 'string', 'max:200'],
            // 'recommendedReading' => ['nullable', 'string', 'max:200'],
        ];
    }

    public function messages()
    {
        return [
            'startTime.date_format' => 'Time format should be like: 09:05 AM',
            'endTime.date_format' => 'Time format should be like: 09:05 AM',

        ];
    }

    #[On('select-expert')] 
    public function updateExpertList($id)
    {        
        $this->expertIds[]= $id;        
        $this->selectedExperts = Profile::expert()->with('user', 'education')->whereIn('id', $this->expertIds)->get();        
    }

    public function removeExpert($id) {

        $index = array_search($id, $this->expertIds);

        if ($index !== false) {            
            unset($this->expertIds[$index]);
        }        

        if (count($this->expertIds) > 0) {
            $this->selectedExperts = Profile::expert()->with('user', 'education')->whereIn('id', $this->expertIds)->get();                
        } else {
            $this->selectedExperts = null;
        }
    }

    public function submitForm()
    {
        // $this->validate();

        $training = Training::create([
            'expert_id' => auth()->user()->profile->id,
            'title' => $this->trainingTitle,
            'fee' => $this->trainingFee,
            'country_id' => $this->countryId,
            'state_id' => $this->stateId,
            'mode' => $this->trainingMode,
            'link' => $this->link,
            'language_id' => $this->languageId,
            'expertise_id' => $this->expertiseId,
            'summary' => $this->summary,
            'outline' => $this->outline,
            'outcomes' => $this->outcomes,
            'assesments' => $this->assesments,
            'activities' => $this->activities,
            'resources' => $this->resources,
            'prescribed_materials' => $this->prescribedMaterials,
            'recommended_reading' => $this->recommendedReading,
            'start_date' => Carbon::parse($this->startDate)->format('Y-m-d'),
            'end_date' => Carbon::parse($this->endDate)->format('Y-m-d'),
            'start_time' => Carbon::parse($this->startTime)->format('H:i'),
            'end_time' => Carbon::parse($this->endTime)->format('H:i'),
            'status' => 'Active',
        ]);

        $training = Training::find($training->id);
        $training->instructors()->sync($this->expertIds);
        $training->partners()->sync($this->partnerInstituteId);

        return redirect()->route('trainings.show', $training);
    }

    public function validateStepOne()
    {
        $this->validate([

            'trainingTitle' => ['required'],
            'expertIds' => ['required'],
            'trainingFee' => ['required', 'integer'],
            'expertiseId' => ['nullable', 'exists:expertises,id'],
            'partnerInstituteId' => ['nullable', 'exists:universities,id'],
        ]);
    }

    public function validateStepTwo()
    {
        $this->validate([

            'countryId' => ['nullable', 'exists:countries,id'],
            'stateId' => ['nullable', 'exists:states,id'],
            'startDate' => ['nullable', 'date_format:d M Y'],
            'startTime' => ['nullable', 'date_format:H:i'],
            'endDate' => ['nullable', 'date_format:d M Y', 'after_or_equal:startDate'],
            'endTime' => ['nullable', 'date_format:H:i'],
            'trainingMode' => ['nullable', Rule::in(TrainingMode::cases())],
            'link' => ['nullable', 'url'],
            'languageId' => ['nullable', 'exists:languages,id'],
        ]);
    }

    public function validateStepThree()
    {
        $this->validate([

            'summary' => ['nullable', 'string', 'max:2000'],
            'outline' => ['nullable', 'string', 'max:2000'],
            'outcomes' => ['nullable', 'string', 'max:2000'],
            'assesments' => ['nullable', 'string', 'max:2000'],
            'activities' => ['nullable', 'string', 'max:2000'],
            'resources' => ['nullable', 'string', 'max:2000'],
            'prescribedMaterials' => ['nullable', 'string', 'max:2000'],
            'recommendedReading' => ['nullable', 'string', 'max:2000'],
        ]);
    }

    public function validateStepFour()
    {
        $this->validate([

            'summary' => ['nullable', 'string', 'max:2000'],
            'outline' => ['nullable', 'string', 'max:2000'],
            'outcomes' => ['nullable', 'string', 'max:2000'],
            'assesments' => ['nullable', 'string', 'max:2000'],
            'activities' => ['nullable', 'string', 'max:2000'],
            'resources' => ['nullable', 'string', 'max:2000'],
            'prescribedMaterials' => ['nullable', 'string', 'max:2000'],
            'recommendedReading' => ['nullable', 'string', 'max:2000'],
        ]);
    }

    public function next()
    {
        if ($this->currentStep == 1) {

            $this->validateStepOne();
        }


        if ($this->currentStep == 2) {

            $this->validateStepTwo();
        }

        if ($this->currentStep == 3) {

            $this->validateStepThree();
        }

        if ($this->currentStep == 4) {

            $this->validateStepFour();
            $this->submitForm();
        }            

        if ($this->currentStep < 4) {
            $this->currentStep += 1;
        }
    }

    public function back()
    {
        if ($this->currentStep > 1) {
            $this->currentStep -= 1;
        }
    }
        
    public function render()
    {        
        return view('livewire.training.create');
    }
}
