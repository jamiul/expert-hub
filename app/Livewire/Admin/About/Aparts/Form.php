<?php

namespace App\Livewire\Admin\About\Aparts;

use App\Models\AboutApart;
use App\Models\AboutUs;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Form as BaseForm;

class Form extends BaseForm
{
    use WithFileUploads;

    public $aboutApart;

    #[Validate('required|max:500')]
    public $set_title = '';

    #[Validate('required|max:1000')]
    public $description = '';

    #[Validate('image|max:1024')]
    public $icon;

    #[Validate('required|string')]
    public $type = '';

    #[Validate('nullable')]
    public $about_us_id = '';

    public function create()
    {
        $data = $this->validate();

        $aboutApart = AboutApart::create([
            'about_us_id' => AboutUs::first()->id,
            'set_title' => $data['set_title'],
            'description' => $data['description'],
            'type' => $data['type'],
        ]);

        if ($this->icon) {
            $aboutApart->addMedia($this->icon->getRealPath())
                ->usingName($this->icon->getClientOriginalName())
                ->toMediaCollection('icon');
        }

        $this->reset();
    }

    public function set(AboutApart $aboutApart)
    {
        $this->aboutApart = $aboutApart;
        $this->about_us_id = $aboutApart->about_us_id;
        $this->set_title = $aboutApart->set_title;
        $this->description = $aboutApart->description;
        $this->type = $aboutApart->type;
    }

    public function update()
    {
        $data = $this->validate();

        AboutApart::whereId($this->aboutApart->id)->update([
            'about_us_id' => $this->aboutApart->about_us->id,
            'set_title' => $data['set_title'],
            'description' => $data['description'],
            'type' => $data['type'],
        ]);

        if ($this->icon) {
            $this->aboutApart->addMedia($this->icon->getRealPath())
                ->usingName($this->icon->getClientOriginalName())
                ->toMediaCollection('icon');
        }

        $this->reset();
    }
}
