<?php

namespace App\Livewire\Admin\About;

use App\Enums\ProjectType;
use App\Models\AboutUs;
use Livewire\Component;
use App\Models\AboutApart;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Support\Facades\Validator;

class Apart extends Component
{
    use WithFileUploads;

    public $apartAboutPage, $aboutAparts, $set_title, $description, $type, $aboutApartId;
    public $apart_title, $about_us_id, $icon;
    public $apart_subtitle;

    public function rules()
    {
        return [
            'set_title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'icon' => ['required', 'image'],
            'type' => ['required', 'string'],
            // 'type' => [new Enum(ProjectType::class)],
        ];
    }

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->set_title = '';
        $this->description = '';
        $this->icon = '';
        $this->type = '';
    }

    public function closeModal()
    {
        $this->resetFields();
    }

    public function mount()
    {
        $this->apartAboutPage = AboutUs::first();
        if (is_null($this->apartAboutPage)) {
            $this->apartAboutPage = AboutUs::create();
        }
        $this->apart_title = $this->apartAboutPage->apart_title;
        $this->apart_subtitle = $this->apartAboutPage->apart_subtitle;
    }

    public function saveApart()
    {
        $validated = Validator::make(
            ['apart_title' => $this->apart_title, 'apart_subtitle' => $this->apart_subtitle],
            ['apart_title' => ['required', 'string'], 'apart_subtitle' => ['required', 'string']],
            ['required' => 'The :attribute field is required'],
        )->validate();

        $this->apartAboutPage->update([
            'apart_title' => $validated['apart_title'],
            'apart_subtitle' => $validated['apart_subtitle'],
        ]);

        return redirect()->to('/admin/about-us');
    }

    public function storeApartDetails()
    {
        $data = $this->validate();

        try {
            $aboutApart = AboutApart::create([
                'about_us_id' => $this->apartAboutPage->id,
                'set_title' => $data['set_title'],
                'description' => $data['description'],
                'type' => $data['type'],
            ]);

            $aboutApart->addMedia($this->icon->getRealPath())
                ->usingName($this->icon->getClientOriginalName())
                ->toMediaCollection('icon');

            session()->flash('success', 'About Apart Created Successfully!!');
            $this->resetFields();
            $this->dispatch('close-modal');
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }

    public function render()
    {
        $this->aboutAparts = AboutApart::select('id', 'set_title', 'description', 'icon', 'type')->get();
        return view('livewire.admin.about.apart');
    }

    public function editApart($id)
    {
        try {
            $aboutApart = AboutApart::findOrFail($id);
            if ($aboutApart) {
                $this->about_us_id = $aboutApart->about_us_id;
                $this->set_title = $aboutApart->set_title;
                $this->description = $aboutApart->description;
                $this->type = $aboutApart->type;
                $this->icon = $aboutApart->icon;
                $this->aboutApartId = $aboutApart->id;
            } else {
                session()->flash('error', 'About Apart not found');
                // return redirect()->to('/admin/about-us');
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }

    public function updateAboutApart()
    {
        $this->validate();
        try {
            AboutApart::whereId($this->aboutApartId)->update([
                'about_us_id' => $this->apartAboutPage->id,
                'set_title' => $this->set_title,
                'description' => $this->description,
                'icon' => $this->icon,
                'type' => $this->type,
            ]);

            // Retrieve the updated AboutApart model instance
            $aboutApart = AboutApart::find($this->aboutApartId);

            $aboutApart->addMedia($this->icon->getRealPath())
                ->usingName($this->icon->getClientOriginalName())
                ->toMediaCollection('icon');

            session()->flash('success', 'Apart Updated Successfully!!');
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('success', 'Something goes wrong!!');
        }
    }

    public function deleteApart($id)
    {
        $this->aboutApartId = $id;
    }

    public function destroyApart()
    {
        AboutApart::find($this->aboutApartId)->delete();
        session()->flash('message', 'Apart Deleted Successfully');
        $this->dispatch('close-modal');
    }
}
