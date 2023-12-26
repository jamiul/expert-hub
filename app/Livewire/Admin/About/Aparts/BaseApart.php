<?php

namespace App\Livewire\Admin\About\Aparts;

use App\Models\AboutUs;
use App\Models\AboutApart;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Validator;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class BaseApart extends Component
{
    use InteractsWithConfirmationModal;

    public $aparts;
    public $aboutUsApart;
    public $apart_title = '';
    public $apart_subtitle = '';

    public function mount()
    {
        $this->aboutUsApart = AboutUs::first();
        if (is_null($this->aboutUsApart)) {
            $this->aboutUsApart = AboutUs::create();
        }
        $this->apart_title = $this->aboutUsApart->apart_title ?? '';
        $this->apart_subtitle = $this->aboutUsApart->apart_subtitle ?? '';
        $this->aparts = AboutApart::get();
    }

    public function saveApart()
    {
        $validated = Validator::make(
            ['apart_title' => $this->apart_title, 'apart_subtitle' => $this->apart_subtitle],
            ['apart_title' => ['required', 'string'], 'apart_subtitle' => ['required', 'string']],
            ['required' => 'Please add :attribute'],
        )->validate();

        $this->aboutUsApart->update([
            'apart_title' => $validated['apart_title'],
            'apart_subtitle' => $validated['apart_subtitle'],
        ]);

        return redirect()->to('/admin/about-us');
    }

    public function deleteApart($id)
    {
        $this->askForConfirmation(
            callback: function () use ($id) {
                $aboutApart = AboutApart::find($id);
                if($aboutApart){
                    $aboutApart->delete();
                }
                $this->refreshAboutApart();
            },
        );
    }

    #[On('refresh')]
    public function refreshAboutApart()
    {
        $this->aparts = AboutApart::get();
    }

    public function render()
    {
        return view('livewire.admin.about.aparts.base-apart');
    }
}
