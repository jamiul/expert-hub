<?php

namespace App\Livewire\Admin\About;

use App\Models\AboutUs;
use Livewire\Component;
use Livewire\WithFileUploads;

class Mission extends Component
{
    use WithFileUploads;

    public $missionAbout;
    public $mission_title;
    public $mission_subtitle;
    public $mission_description;
    public $mission_image;

    public function rules()
    {
        return [
            'mission_title' => ['required','string'],
            'mission_subtitle' => ['required','string'],
            'mission_description' => ['required','string'],
            'mission_image' => ['nullable','image'],
        ];
    }

    public function messages()
    {
        return [
            'mission_title.required' => 'Please add title',
            'mission_subtitle.required' => 'Please add subtitle',
            'mission_description.required' => 'Please add description',
        ];
    }

    public function mount()
    {
        $this->missionAbout = AboutUs::first();
        if (is_null($this->missionAbout)) {
            $this->missionAbout = AboutUs::create();
        }
        $this->mission_title = $this->missionAbout->mission_title;
        $this->mission_subtitle = $this->missionAbout->mission_subtitle;
        $this->mission_description = $this->missionAbout->mission_description;
    }

    public function saveMission()
    {
        $data = $this->validate();

        $this->missionAbout->update([
            'mission_title' => $data['mission_title'],
            'mission_subtitle' => $data['mission_subtitle'],
            'mission_description' => $data['mission_description'],
        ]);

        $this->missionAbout->addMedia($this->mission_image->getRealPath())
            ->usingName($this->mission_image->getClientOriginalName())
            ->toMediaCollection('mission_image');

        return redirect()->to('/admin/about-us');
    }

    public function render()
    {
        return view('livewire.admin.about.mission');
    }
}
