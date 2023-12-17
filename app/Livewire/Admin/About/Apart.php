<?php

namespace App\Livewire\Admin\About;

use Livewire\Component;
use App\Models\AboutApart;

class Apart extends Component
{
    public $apartAboutPage;
    public $title;
    public $sub_title;
    public $set_title;
    public $description;
    public $icon;
    public $type;
    public $active;

    public function rules()
    {
        return [
            'title' => ['required','string'],
            'sub_title' => ['required','string'],
            'set_title' => ['required','string'],
            'description' => ['required','string']
        ];
    }

    public function mount()
    {
        $this->apartAboutPage = AboutApart::first();
        if (is_null($this->apartAboutPage)) {
            $this->apartAboutPage = AboutApart::create();
        }
        $this->title = $this->apartAboutPage->title;
        $this->sub_title = $this->apartAboutPage->sub_title;
        $this->set_title = $this->apartAboutPage->set_title;
        $this->description = $this->apartAboutPage->description;
    }

    public function saveApart()
    {
        $data = $this->validate();

        $this->apartAboutPage->update([
            'title' => $data['title'],
            'sub_title' => $data['sub_title'],
            'set_title' => $data['set_title'],
            'description' => $data['description'],
        ]);

        return redirect()->to('/admin/about-us');
    }

    public function render()
    {
        return view('livewire.admin.about.apart');
    }
}
