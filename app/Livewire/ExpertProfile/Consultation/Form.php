<?php

namespace App\Livewire\ExpertProfile\Consultation;

use Carbon\Carbon;
use App\Models\Consultation;
use Livewire\Form as BaseForm;
use App\Models\ConsultationBooking;

class Form extends BaseForm
{
    public $consultation;
    public $availabeSlots;
    public $date = '';
    public $formattedDate = '';
    public $selectedTimes = [];
    public $timeIds = [];

    public function set(Consultation $consultation)
    {
        $this->consultation = $consultation;
        $dateTime = Carbon::parse($this->date);
        $this->formattedDate = $dateTime->format('l, jS M');
        $dayOfWeek = $dateTime->format('l');
        $this->availabeSlots = $this->consultation->slots->groupBy('date')->mapWithKeys(function ($slots, $date) use ($dayOfWeek) {
            if ($date === $dayOfWeek) {
                return [$date => $slots->pluck('time', 'id')->toArray()];
            } else {
                return [];
            }
        })->toArray();
    }

    public function add()
    {
        // dd($this->date, $this->selectedTimes, $this->timeIds);
        // foreach ($this->timeIds as $day => $times) {
            // dd($times);
            foreach ($this->timeIds  as $time) {
                $slots[] = [
                    'slot_id' => $time,
                    'profile_id' => 2,
                    'note' => 'note',
                    'status' => 'pending',
                    'active' => true,
                ];
            }
        // }

        // dd($slots);

        ConsultationBooking::insert($slots);
    }

    public function pickDate()
    {
        $dateTime = Carbon::parse($this->date);
        $this->formattedDate = $dateTime->format('l, jS M');
        $dayOfWeek = $dateTime->format('l');
        $this->availabeSlots = $this->consultation->slots->groupBy('day')->mapWithKeys(function ($slots, $day) use ($dayOfWeek) {
            if ($day === $dayOfWeek) {
                return [$day => $slots->pluck('time', 'id')->toArray()];
            } else {
                return [];
            }
        })->toArray();

    }

    //@TODO optimize the code
    public function selectedSlot($id, $time)
    {
        // dd($time);
        if (!($this->selectedTimes instanceof \Illuminate\Support\Collection)) {
            $this->selectedTimes = collect($this->selectedTimes);
            $this->timeIds = collect($this->timeIds);
        }

        if ($this->selectedTimes->contains($time) && $this->timeIds->contains($id)) {
            $this->selectedTimes = $this->selectedTimes->reject(function ($selectedHour) use ($time) {
                return $selectedHour === $time;
            });
            $this->timeIds = $this->timeIds->reject(function ($selectedIds) use ($id) {
                return $selectedIds === $id;
            });
        } else {
            $this->selectedTimes[] = $time;
            $this->timeIds [] = $id;
        }
    }
    public function render()
    {
        return view('livewire.expert-profile.consultation.form');
    }
}
