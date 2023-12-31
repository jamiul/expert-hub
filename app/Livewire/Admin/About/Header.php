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
    public string $header_title = '';
    public $header_image;
    public $headerImageUrl = '';


    public function rules()
    {
        $requiredOrNull = $this->headerImageUrl == '' ? 'required' : 'nullable';
        return [
            'header_title' => [
                'required',
                'string',
                'min:' . AboutUsEnum::SubtitleMin->value,
                'max:' . AboutUsEnum::SubtitleMax->value
            ],
            'header_image' => [
                $requiredOrNull,
                'image',
                'max:' . AboutUsEnum::ImageSize->value,
                'dimensions:min_width=1920,min_height=380'
            ],
        ];
    }

    public function messages()
    {
        return [
            'header_title.required' => 'Please add title',
        ];
    }

    public function mount()
    {
        $this->aboutPage = AboutUs::first();
        if (is_null($this->aboutPage)) {
            $this->aboutPage = AboutUs::create();
        }
        $this->header_title = $this->aboutPage->header_title ?? '';
        $this->headerImageUrl = $this->aboutPage->getFirstMediaUrl('header_image');
    }

    public function save()
    {
        $data = $this->validate();

        $this->aboutPage->update([
            'header_title' => $data['header_title'],
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
