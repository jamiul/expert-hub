<?php

namespace App\Livewire\Profile\Consultation;

use Illuminate\Support\Arr;
use Livewire\WithFileUploads;
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
    public $expertise_id;

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

    #[Validate('image|max:1024')]
    public $image;

    #[Validate('array')]
    public $expertise_skills;

    public function mount()
    {
        $this->imageUrl = $this->profile()->consultation()?->getFirstMediaUrl('image');
    }

    public function add()
    {
        $data = $this->validate();
        $data['profile_id'] = $this->profile()->id;

        $consultation = $this->profile()->consultation()->create(Arr::except($data, 'expertise_skills'));

        if (!is_null($this->image)) {
            // $this->profile()->consultation()?->clearMediaCollection('image');

            $consultation->addMedia($this->image->getRealPath())
                ->usingName($this->image->getClientOriginalName())
                ->toMediaCollection('image');
        }

        $consultation->skills()->attach($data['expertise_skills'], ['active' => true]);

        $this->reset();

    }

    public function updated()
    {
        dd($this->hourly_rate);
        if($this->hourly_rate){
            $this->platform_fee = $this->hourly_rate * 0.1;
            $this->total_fee = $this->hourly_rate + $this->platform_fee;
        }else{
            $this->platform_fee = 0;
            $this->total_fee = 0;
        }

    }

    public function profile()
    {
        return auth()->user()->profile;
    }
}
