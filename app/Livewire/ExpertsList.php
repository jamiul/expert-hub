<?php

namespace App\Livewire;

use App\Models\Experts;
use Livewire\Component;

class ExpertsList extends Component
{
    public $experts;

    public function mount()
    {
        // Fetch the data
        $this->experts = Experts::with('childrens')
            ->whereNull('parent_id')
            ->get();
    }

    public function render()
    {
        return view('livewire.experts-list');
    }
}
