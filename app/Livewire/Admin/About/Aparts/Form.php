<?php

namespace App\Livewire\Admin\About\Aparts;

use App\Models\AboutUs;
use App\Enums\ProfileType;
use App\Models\AboutApart;
use Livewire\WithFileUploads;
use Livewire\Form as BaseForm;
use Livewire\Attributes\Validate;

class Form extends BaseForm
{
    use WithFileUploads;

    public $aboutApart;
    public $msg;

    #[Validate('required|max:500')]
    public $set_title = '';

    #[Validate('required|max:1000')]
    public $description = '';

    #[Validate('nullable|image|max:1024')]
    public $icon;

    #[Validate('required|string')]
    public $type = '';

    #[Validate('nullable')]
    public $about_us_id = '';

    public function create()
    {
        $data = $this->validate();

        // count client and expert
        $countClient = AboutApart::where('type', ProfileType::Client)->count();
        $countExpert = AboutApart::where('type', ProfileType::Expert)->count();

        // prevent: you can not create more than 6 client or expert
        if(($data['type'] == ProfileType::Client->value)) {
            if($countClient >= 6) {
                return $this->msg = 'You can not add more than 6 client';
            }
        }

        if(($data['type'] == ProfileType::Expert->value)) {
            if($countExpert >= 6) {
                return $this->msg = 'You can not add more than 6 client';
            }
        }
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
