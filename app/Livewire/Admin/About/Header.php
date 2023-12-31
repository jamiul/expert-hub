<?php

namespace App\Livewire\Admin\About;

use App\Models\AboutUs;
use Livewire\Component;
use App\Enums\AboutUsEnum;
use Livewire\WithFileUploads;

class Header extends Component
{
    use WithFileUploads;

    public $aboutPage;
    public string $header_subtitle = '';
    public $header_image;
    public $headerImageUrl = '';


    public function rules()
    {
        $requiredOrNull = $this->headerImageUrl == '' ? 'required' : 'nullable';
        return [
            'header_subtitle' => [
                'required',
                'string',
                'min:' . AboutUsEnum::SubtitleMin->array_values,
                'max:' . AboutUsEnum::SubtitleMax->array_values
            ],
            'header_image' => [
                $requiredOrNull,
                'image',
                'max:' . AboutUsEnum::ImageSize->array_values,
                'dimensions:min_width=1920,min_height=380'
            ],
        ];
    }

    public function messages()
    {
        return [
            'header_subtitle.required' => 'Please add subtitle',
        ];
    }

    public function mount()
    {
        $this->aboutPage = AboutUs::first();
        if (is_null($this->aboutPage)) {
            $this->aboutPage = AboutUs::create();
        }
        $this->header_subtitle = $this->aboutPage->header_subtitle ?? '';
        $this->headerImageUrl = $this->aboutPage->getFirstMediaUrl('header_image');
    }

    public function save()
    {
        $data = $this->validate();

        $this->aboutPage->update([
            'header_subtitle' => $data['header_subtitle'],
        ]);

        if (!is_null($this->header_image)) {
            $this->aboutPage->clearMediaCollection('header_image');

            $this->aboutPage->addMedia($this->header_image->getRealPath())
                ->usingName($this->header_image->getClientOriginalName())
                ->toMediaCollection('header_image');
        }

        session()->flash('success', 'Header successfully updated.');
        return redirect()->to('/admin/about-us');
    }

    public function render()
    {
        return view('livewire.admin.about.header');
    }
}
