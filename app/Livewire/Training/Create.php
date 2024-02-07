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
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Create extends Component
{
    public $trainingTitle;
    public $trainingFee;
    public $expertiseId;
    public $partnerInstituteId;
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

            'trainingTitle' => ['required'],
            'trainingFee' => ['required', 'integer'],
            'expertiseId' => ['nullable', 'exists:expertises,id'],
            'partnerInstituteId' => ['nullable', 'exists:universities,id'],
            'countryId' => ['nullable', 'exists:countries,id'],
            'stateId' => ['nullable', 'exists:states,id'],            
            'startDate' => ['nullable', 'date_format:d M Y'],
            'startTime' => ['nullable', 'date_format:h:i A'],
            'endDate' => ['nullable', 'date_format:d M Y'],
            'endTime' => ['nullable', 'date_format:h:i A'],
            'trainingMode' => ['nullable', Rule::in(TrainingMode::cases())],
            'link' => ['nullable', 'url'],
            'languageId' => ['nullable', 'exists:languages,id'],
            'summary' => ['nullable', 'string', 'max:200'],
            'outline' => ['nullable', 'string', 'max:200'],
            'outcomes' => ['nullable', 'string', 'max:200'],
            'assesments' => ['nullable', 'string', 'max:200'],
            'activities' => ['nullable', 'string', 'max:200'],
            'resources' => ['nullable', 'string', 'max:200'],
            'prescribedMaterials' => ['nullable', 'string', 'max:200'],
            'recommendedReading' => ['nullable', 'string', 'max:200'],
        ];
    }

    public function messages()
    {
        return [
            'startTime.date_format' => 'Time format should be like: 09:05 AM',
            'endTime.date_format' => 'Time format should be like: 09:05 AM',

        ];
    }

    public function submitForm()
    {        
        $this->validate();
        
        $training = Training::create([

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
        $training->instructors()->sync(auth()->user()->profile->id);
        $training->partners()->sync($this->partnerInstituteId);
        toast('success', "Training Details Saved Successfully");
        $this->reset();
    }

    
    public function render()
    {
        // $expertList = Profile::expert()->with('user', 'education')->get();
        return view('livewire.training.create');
    }
}
