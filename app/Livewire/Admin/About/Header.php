<?php

namespace App\Livewire\Admin\About;

use App\Models\AboutUs;
use Livewire\Component;
use Livewire\WithFileUploads;

class Header extends Component
{
    use WithFileUploads;
    
    public $aboutPage;
    public $header_subtitle;
    public $header_image;

    public function rules()
    {
        return [
            'header_subtitle' => ['required','string'],
            'header_image' => ['required','image'],
        ];
    }

    public function mount()
    {
        $this->aboutPage = AboutUs::first();
        if (is_null($this->aboutPage)) {
            $this->aboutPage = AboutUs::create();
        }
        $this->header_subtitle = $this->aboutPage->header_subtitle;
    }

    public function save()
    {
        $data = $this->validate();

        $this->aboutPage->update([
            'header_subtitle' => $data['header_subtitle'],
        ]);

        $this->aboutPage->addMedia($this->header_image->getRealPath())
            ->usingName($this->header_image->getClientOriginalName())
            ->toMediaCollection('header_image');

        return redirect()->to('/admin/about-us');
    }

    public function render()
    {
        return view('livewire.admin.about.header');
    }
}
