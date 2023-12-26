<?php

namespace App\Livewire\Admin\About\Aparts;

use App\Livewire\Admin\About\Aparts\Form;
use App\Models\AboutApart;
use Livewire\WithFileUploads;
use WireElements\Pro\Components\Modal\Modal;

class Edit extends Modal
{
    use WithFileUploads;

    public int|AboutApart $aboutApart;

    public Form $form;

    public function mount(AboutApart $aboutApart)
    {
        $this->aboutApart = $aboutApart;
        $this->form->set($this->aboutApart);
    }

    public function editApart()
    {
        $this->form->update();
        $this->dispatch('refresh')->to(BaseApart::class);
        $this->close();
    }

    public function render()
    {
        return view('livewire.admin.about.aparts.edit');
    }
}
