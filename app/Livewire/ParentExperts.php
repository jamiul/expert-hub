<?php

namespace App\Livewire;

use App\Models\Experts;
use Livewire\Component;

class ParentExperts extends Component
{
    public $parentExperts;

    public function mount()
    {
        // Fetch parent experts
        $this->parentExperts = Experts::whereNull('parent_id')->get();
    }

    public function render()
    {
        return view('livewire.parent-experts');
    }
}
