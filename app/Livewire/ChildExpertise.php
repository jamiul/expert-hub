<?php

namespace App\Livewire;

use App\Models\Expertise;
use Livewire\Component;

class ChildExpertise extends Component
{
    public $childExpertise;

    public function mount()
    {
        // Fetch child experts
        $this->childExpertise = Expertise::whereNotNull('parent_id')->get();
    }

    public function render()
    {
        return view('livewire.dropdown-list.child-expertise');
    }
}
