<?php

namespace App\Livewire\Profile\Consultation;

use DateTimeZone;
use App\Models\Expertise;
use Illuminate\Support\Arr;
use App\Models\Consultation;
use Livewire\WithFileUploads;
use Livewire\Form as BaseForm;
use App\Models\ConsultationSlot;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;

class Form extends BaseForm
{
    use WithFileUploads;

    public $consultation;
    public $platform_fee = '';
    public $total_fee = '';
    public $imageUrl = '';
    public $confirmSlots = [];

    public $previewExpertise = '';
    public $expertiseSkills = [];

    #[Validate('nullable')]
    public $profile_id;
    #[Validate('nullable')]
    public $expertise_id = '';
    #[Validate('array')]
    public $expertise_skills = '';

    #[Validate('nullable')]
    public $hourly_rate = '';

    #[Validate('nullable')]
    public $time_zone = '';

    #[Validate('nullable')]
    public $description = '';

    #[Validate('nullable')]
    public $status = '';

    #[Validate('nullable|image')]
    public $image;


    #[Validate('nullable')]
    public $day = '';

    #[Validate('nullable')]
    public $time;
    public $selectedHours = [];
    public $timezoneIndetifiers = [];
    public $daysInWeek = ['Select Day', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

    public function mount()
    {
        $this->imageUrl = $this->profile()->consultation()?->getFirstMediaUrl('image');
        $this->timezoneIndetifiers = DateTimeZone::listIdentifiers();
    }

    public function saveExpertise()
    {
        $this->validate([
            'profile_id' => 'nullable',
            'expertise_id' => 'required',
            'expertise_skills' => 'required',
        ], [
            'expertise_id.required' => 'Please Add Consultation Title.',
            'expertise_skills.required' => 'Please Add Consultation Skillsets.',
        ]);
    }

    public function saveServiceFee()
    {
        $this->validate([
            'hourly_rate' => ['required', 'numeric', 'min:50', 'max:1000'],
        ], [
            'hourly_rate.required' => 'Please add hourly rate.'
        ]);
    }

    public function saveAvailability()
    {
        $this->validate([
            'time_zone' => 'required',
            'day' => 'nullable'
        ]);
    }

    public function saveSummary()
    {
        $data = $this->validate();
        $this->previewExpertise = Expertise::where('id', $data['expertise_id'])->value('name');
        $this->expertiseSkills = Expertise::whereIn('id', $data['expertise_skills'])->get();

        $requiredOrNull = $this->imageUrl == '' ? 'required' : 'nullable';
        $this->validate([
            'description' => 'required|max:2000',
            'image' => $requiredOrNull . '|max:2048'
        ], [
            'description.required' => 'Please add Description.',
            'image.required' => 'Please add image.'
        ]);
    }

    #[Computed]
    public function previewService()
    {
        $data = $this->validate();
    }

    public function add()
    {
        $data = $this->validate();
        $data['profile_id'] = $this->profile()->id;

        $consultation = $this->profile()->consultation()->create(Arr::except($data, ['expertise_skills', 'day', 'time', 'image']));

        if (!is_null($this->image)) {

            $consultation->addMedia($this->image->getRealPath())
                ->usingName($this->image->getClientOriginalName())
                ->toMediaCollection('image');
        }

        $consultation->skills()->attach($data['expertise_skills'], ['active' => true]);

        // Add consultation slots
        $this->addConsultationSlots($consultation->id);

        $this->reset();
    }

    protected function prepareSlotsData($consultationId)
    {
        $slots = [];

        foreach ($this->confirmSlots as $day => $times) {
            foreach ($times as $time) {
                $slots[] = [
                    'consultation_id' => $consultationId,
                    'profile_id' => $this->profile()->id,
                    'day' => $day,
                    'time' => $time,
                    'status' => 'available'
                ];
            }
        }

        ConsultationSlot::insert($slots);
    }

    public function addConsultationSlots($consultationId)
    {
        $this->prepareSlotsData($consultationId);
    }

    public function updateConsultationSlots()
    {
        // Delete existing slots for the given consultation
        $this->consultation->slots()->delete();

        $this->prepareSlotsData($this->consultation->id);
    }


    public function editConsultationSlot($hour)
    {
        // Ensure $this->selectedHours is a collection
        if (!($this->selectedHours instanceof \Illuminate\Support\Collection)) {
            $this->selectedHours = collect($this->selectedHours);
        }

        if ($this->selectedHours->contains($hour)) {
            $this->selectedHours = $this->selectedHours->reject(function ($selectedHour) use ($hour) {
                return $selectedHour === $hour;
            });
        } else {
            $this->selectedHours[] = $hour;
        }
    }


    public function addConsultationSlot($hour)
    {
        // Toggle the selection
        if (in_array($hour, $this->selectedHours)) {
            $this->selectedHours = array_diff($this->selectedHours, [$hour]);
        } else {
            $this->selectedHours[] = $hour;
        }
    }

    public function set(Consultation $consultation)
    {
        $this->consultation = $consultation;
        $this->expertise_id = $consultation->expertise_id;
        $this->hourly_rate = $consultation->hourly_rate;
        $this->time_zone = $consultation->time_zone;
        $this->description = $consultation->description;
        $this->imageUrl = $consultation->image;
        $this->expertise_skills = $consultation->skills->pluck('id');
        $this->confirmSlots = $consultation->slots->groupBy('day')->mapWithKeys(function ($slots) {
            return [$slots->first()['day'] => $slots->pluck('time', 'id')->toArray()];
        })->toArray();

        $this->day = "";
    }

    public function updatedDate()
    {
        if (!is_null($this->consultation)) {
            $filteredSlots = $this->consultation->slots->where('day', $this->day);
            $this->selectedHours = $filteredSlots->pluck('time');
        }
    }

    public function update()
    {
        $data = $this->validate();
        $data['time'] = $this->selectedHours;
        $data['profile_id'] = $this->profile()->id;

        $this->consultation->update(Arr::except($data, ['expertise_skills', 'day', 'time', 'image']));

        if (!is_null($this->image)) {
            $this->consultation->addMedia($this->image->getRealPath())
                ->usingName($this->image->getClientOriginalName())
                ->toMediaCollection('image');
        }

        $this->consultation->skills()->sync($data['expertise_skills']);
        $this->updateConsultationSlots();

        $this->reset();
    }

    public function setSlots()
    {
        $this->validate([
            'day' => 'required',
        ], [
            'day.required' => 'Please select Day.'
        ]);

        if (count($this->selectedHours) > 5) {
            return $this->addError('error', 'Please select maximum 5 schedule per day');
        }

        if (count($this->selectedHours) === 0) {
            return $this->addError('error', 'Please select at least one hour.');
        }

        if (!isset($this->confirmSlots) || !is_array($this->confirmSlots)) {
            $this->confirmSlots = [];
        }

        $this->confirmSlots[$this->day] = $this->selectedHours;
        $this->resetSlots();
    }


    public function resetSlots()
    {
        $this->day = '';
        $this->selectedHours = [];
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
}
