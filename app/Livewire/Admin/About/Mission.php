<?php

namespace App\Livewire\Admin\About;

use App\Enums\CmnEnum;
use App\Models\AboutUs;
use Livewire\Component;
use Livewire\WithFileUploads;

class Mission extends Component
{
    use WithFileUploads;

    public $missionAbout;
    public $missionImageUrl = '';
    public $mission_title;
    public $mission_subtitle;
    public $mission_description;
    public $mission_image;

    public function rules()
    {
        $requiredOrNull = $this->missionImageUrl == '' ? 'required' : 'nullable';

        return [
            'mission_title' => [
                'required',
                'string',
                'min:' . CmnEnum::TITLE_MIN,
                'max:' . CmnEnum::TITLE_MAX
            ],
            'mission_subtitle' => [
                'required',
                'string',
                'min:' . CmnEnum::SUBTITLE_MIN,
                'max:' . CmnEnum::SUBTITLE_MAX
            ],
            'mission_description' => [
                'required',
                'string',
                'min:' . CmnEnum::DESCRIPTION_MIN,
                'max:' . CmnEnum::DESCRIPTION_MAX
            ],
            'mission_image' => [
                $requiredOrNull,
                'image',
                'max:' . CmnEnum::IMAGE_SIZE,
                'dimensions:min_width=540,min_height=600'
            ],
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
