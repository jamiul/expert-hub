<?php

namespace App\Livewire\ExpertProfile\Consultation;

use App\Models\Consultation;
use Carbon\Carbon;
use Livewire\Form as BaseForm;

class Form extends BaseForm
{
    public $consultation;
    public $availabeSlots;
    public $date = '';
    public $formattedDate = '';
    public $selectedTimes = [];

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

    public function bookSlot()
    {
        // dd($this->date);
    }

    public function pickDate()
    {
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

    public function selectedSlot($time)
    {
        $this->selectedTimes [] = $time;
        // dd($this->selectedTimes);
    }
    public function render()
    {
        return view('livewire.expert-profile.consultation.form');
    }
}
