<?php

namespace App\Livewire;

use App\Models\Expertise;
use Livewire\Component;

class ParentExpertise extends Component
{
    public $parentExpertise;

    public function mount()
    {
        // Fetch parent experts
        $this->parentExpertise = Expertise::whereNull('parent_id')->get();
    }

    public function render()
    {
        return view('livewire.dropdown-list.parent-expertise');
    }
}
