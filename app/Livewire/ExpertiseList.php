<?php

namespace App\Livewire;

use App\Models\Expertise;
use Livewire\Component;

class ExpertiseList extends Component
{
    public $expertiseList;

    public function mount()
    {
        // Fetch the data
        $this->expertiseList = Expertise::with('childrens')
            ->whereNull('parent_id')
            ->get();
    }

    public function render()
    {
        return view('livewire.dropdown-list.expertise-list');
    }
}
