<?php

namespace App\Livewire\Profile\Consultation;

use App\Models\Consultation;
use Illuminate\Support\Arr;
use Livewire\WithFileUploads;
use App\Models\ConsultationSlot;
use Livewire\Attributes\Validate;
use Livewire\Form as BaseForm;

class Form extends BaseForm
{
    use WithFileUploads;

    public $consultation;
    public $platform_fee = '';
    public $total_fee = '';
    public $imageUrl = '';

    #[Validate('required')]
    public $expertise_id = '';

    #[Validate('nullable')]
    public $profile_id;

    #[Validate('required')]
    public $hourly_rate = '';

    #[Validate('required')]
    public $time_zone = '';

    #[Validate('required')]
    public $description = '';

    #[Validate('nullable')]
    public $status = '';

    #[Validate('nullable|image|max:1024')]
    public $image;

    #[Validate('array')]
    public $expertise_skills = '';
    #[Validate('nullable')]
    public $date = '';

    #[Validate('nullable')]
    public $time;
    public $selectedHours = [];

    public $day;
    public $daysInWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    // public $daysInWeek = ['Monday' => 0, 'Tuesday' => 1, 'Wednesday' => 2, 'Thursday' => 3, 'Friday' => 4, 'Saturday' => 5, 'Sunday' => 6];


    public function mount()
    {
        $this->imageUrl = $this->profile()->consultation()?->getFirstMediaUrl('image');
    }

    public function add()
    {
        $data = $this->validate();
        $data['profile_id'] = $this->profile()->id;

        $consultation = $this->profile()->consultation()->create(Arr::except($data, ['expertise_skills', 'date', 'time']));

        if (!is_null($this->image)) {

            $consultation->addMedia($this->image->getRealPath())
                ->usingName($this->image->getClientOriginalName())
                ->toMediaCollection('image');
        }

        $consultation->skills()->attach($data['expertise_skills'], ['active' => true]);

        // Add consultation slots
        $this->addConsultationSlots($consultation->id, $data['date'], $this->selectedHours);

        $this->reset();
    }

    public function addConsultationSlots($consultationId, $date, $times)
    {
        $profileId = $this->profile()->id;

        foreach ($times as $time) {
            // Create a new slot
            $time = (string) $time;
            ConsultationSlot::create([
                'consultation_id' => $consultationId,
                'profile_id' => $profileId,
                'date' => $date,
                'time' => $time,
                'status' => 'available'
            ]);
        }
    }

    public function updateConsultationSlots($date, $times)
    {
        // dd($date, $times);
        $profileId = $this->profile()->id;

        // Delete existing slots for the given date and consultation
        $this->consultation->slots()->delete();

        // Create updated slots
        $this->consultation->slots()->createMany(
            collect($times)->map(function ($time) use ($profileId, $date) {
                return [
                    'profile_id' => $profileId,
                    'date' => $date,
                    'time' => $time,
                    'status' => 'available',
                    'active' => true
                ];
            })->all()
        );
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
        $this->date = $consultation->slots->pluck('date')->toArray();
        // $this->date = is_array($consultation->slots->pluck('date')) ? $consultation->slots->pluck('date') : [$consultation->slots->pluck('date')];
        $this->selectedHours = $consultation->slots->pluck('time');
        $this->time = $consultation->slots->pluck('time');
    }

    public function update()
    {
        $data = $this->validate();
        $data['time'] = $this->selectedHours;
        // $data['date'] = $this->date;
        $data['profile_id'] = $this->profile()->id;

        // dd($data);
        $this->consultation->update(Arr::except($data, ['expertise_skills', 'date', 'time']));

        if (!is_null($this->image)) {

            $this->consultation->addMedia($this->image->getRealPath())
                ->usingName($this->image->getClientOriginalName())
                ->toMediaCollection('image');
        }
        $this->consultation->skills()->sync($data['expertise_skills']);
        $this->updateConsultationSlots($data['date'], $data['time']);

        $this->reset();
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
}
