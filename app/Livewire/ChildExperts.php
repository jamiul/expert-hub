<?php

namespace App\Livewire;

use App\Models\Expertise;
use App\Models\Experts;
use Livewire\Component;

class ChildExperts extends Component
{
    public $childExperts;

    public function mount()
    {
        // Fetch child experts
        $this->childExperts = Expertise::whereNotNull('parent_id')->get();
    }

    public function render()
    {
        return view('livewire.child-experts');
    }
}
