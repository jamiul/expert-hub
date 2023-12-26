<?php

namespace App\Livewire\Admin\About\Aparts;

use Livewire\WithFileUploads;
use App\Livewire\Admin\About\Aparts\Form;
use WireElements\Pro\Components\Modal\Modal;
use App\Livewire\Admin\About\Aparts\BaseApart;

class Create extends Modal
{
    use WithFileUploads;

    public Form $form;
    public BaseApart $baseApart;

    public function addApart()
    {
        $this->form->create();
        $this->dispatch('refresh')->to(BaseApart::class);
        $this->close();
    }

    public function render()
    {
        return view('livewire.admin.about.aparts.create');
    }
}
