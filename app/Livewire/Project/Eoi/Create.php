<?php

namespace App\Livewire\Project\Eoi;

use Livewire\Component;

class Create extends Component
{
    public $amount = '';

    public $cover_letter = '';

    public $attachments = [];

    public function render()
    {
        return view('livewire.project.eoi.create');
    }
}
