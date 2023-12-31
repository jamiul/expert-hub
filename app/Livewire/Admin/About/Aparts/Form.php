<?php

namespace App\Livewire\Admin\About\Aparts;

use App\Models\AboutUs;
use App\Enums\AboutUsEnum;
use App\Enums\ProfileType;
use App\Models\AboutApart;
use Livewire\WithFileUploads;
use Livewire\Form as BaseForm;
use Livewire\Attributes\Validate;

class Form extends BaseForm
{
    use WithFileUploads;

    public $aboutApart;
    public $iconUrl = '';
    public $set_title = '';
    public $description = '';
    public $icon;
    public $type = '';

    #[Validate('nullable')]
    public $about_us_id = '';


    public function mount()
    {
        $this->aboutApart = AboutApart::first();
        if (is_null($this->aboutApart)) {
            $this->aboutApart = AboutApart::create();
        }
        $this->iconUrl = $this->aboutApart->getFirstMediaUrl('icon');
    }
    public function create()
    {
        $data = $this->validate([
            'set_title' => 'required|max:50',
            'description' => 'required|max:500',
            'icon' => 'required|image|max:' . AboutUsEnum::ICON_SIZE->value. '|dimensions:min_width=25,min_height=25',
            'type' => 'required|string',
        ]);

        // count client and expert
        $countClient = AboutApart::where('type', ProfileType::Client)->count();
        $countExpert = AboutApart::where('type', ProfileType::Expert)->count();

        // prevent: you can not create more than 6 client or expert
        if(($data['type'] == ProfileType::Client->value)) {
            if($countClient >= 6) {
                return $this->addError('apart', 'You can not add more than 6 client.');
            }
        }

        if(($data['type'] == ProfileType::Expert->value)) {
            if($countExpert >= 6) {
                return $this->addError('apart', 'You can not add more than 6 expert');
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
        $data = $this->validate([
            'set_title' => 'required|max:50',
            'description' => 'required|max:500',
            'icon' => [
                'nullable',
                'image',
                'max:' . AboutUsEnum::ICON_SIZE->value,
                'dimensions:min_width=25,min_height=25',
            ],
            'type' => 'required|string',
        ]);

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
