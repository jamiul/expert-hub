<?php

namespace App\Livewire\About;

use Livewire\Component;
use App\Models\AboutApart;

class ApartSet extends Component
{
    public $aboutApart;
    public $title = '';
    public $subtitle = '';
    public $showReadMoreButton = null;
    public $tab = 'expert';

    public function mount()
    {
        $this->aboutApart = AboutApart::with('about_us')->get();
    }

    public function readLess()
    {
        $this->showReadMoreButton = null;
    }

    public function readMore($id)
    {
        $this->showReadMoreButton = $id;
    }

    public function render()
    {
        return view('livewire.about.apart-set');
    }
}
