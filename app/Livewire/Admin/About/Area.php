<?php

namespace App\Livewire\Admin\About;

use App\Enums\AboutUsEnum;
use App\Models\AboutUs;
use Livewire\Component;

class Area extends Component
{
    public $areaAboutPage;
    public $area_title = '';
    public $area_subtitle = '';
    public $area_description = '';

    public function rules()
    {
        return [
            'area_title' => [
                'required',
                'string',
                'min:' . AboutUsEnum::TitleMin->value,
                'max:' . AboutUsEnum::TitleMax->value
            ],
            'area_subtitle' => [
                'required',
                'string',
                'min:' . AboutUsEnum::SubtitleMin->value,
                'max:' . AboutUsEnum::SubtitleMax->value
            ],
            'area_description' => [
                'required',
                'string',
                'min:' . AboutUsEnum::DescriptionMin->value,
                'max:' . AboutUsEnum::DescriptionMax->value

            ],
        ];
    }

    public function messages()
    {
        return [
            'area_title.required' => 'Please add title',
            'area_subtitle.required' => 'Please add subtitle',
            'area_description.required' => 'Please add description',
        ];
    }

    public function mount()
    {
        $this->areaAboutPage = AboutUs::first();
        if (is_null($this->areaAboutPage)) {
            $this->areaAboutPage = AboutUs::create();
        }
        $this->area_title = $this->areaAboutPage->area_title;
        $this->area_subtitle = $this->areaAboutPage->area_subtitle;
        $this->area_description = $this->areaAboutPage->area_description;
    }

    public function saveArea()
    {
        $data = $this->validate();

        $this->areaAboutPage->update([
            'area_title' => $data['area_title'],
            'area_subtitle' => $data['area_subtitle'],
            'area_description' => $data['area_description'],
        ]);

        session()->flash('success', 'Area successfully updated.');
        return redirect()->to('/admin/about-us');
    }

    public function render()
    {
        return view('livewire.admin.about.area');
    }
}