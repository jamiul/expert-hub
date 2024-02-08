<?php

namespace App\Livewire\ExpertProfile\Consultation;

use Carbon\Carbon;
use App\Models\BookingSlot;
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
        $consultation_bookings = ConsultationBooking::create([
            'consultation_id' => $this->consultation->id,
            'client_id' => auth()->user()->id,
            // 'expert_id' => $this->consultation->expert->id,
            'amount' => $this->consultation->hourly_rate * count($this->timeIds),
            'status' => 'pending'
        ]);

        foreach ($this->timeIds  as $time) {
            BookingSlot::create([
                'consultation_booking_id' => $consultation_bookings->id,
                'title' => 'This is a title',
                'consultation_time' => Carbon::parse($this->date)->format('Y-m-d'),
                'amount' => $this->consultation->hourly_rate,
                'status' => 'pending',
            ]);
        }

        return redirect()->route('client.payment.pay',['reference' => 'consultation', 'id' => $consultation_bookings->id]);
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
            $this->timeIds[] = $id;
        }
    }

    public function profile()
    {
        return auth()->user()->profile;
    }
    public function render()
    {
        return view('livewire.expert-profile.consultation.form');
    }
}
