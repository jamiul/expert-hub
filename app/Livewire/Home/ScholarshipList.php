<?php

namespace App\Livewire\Home;

use App\Models\Scholarship;
use Livewire\Component;

class ScholarshipList extends Component
{
    public $scholarships = '';

    public function mount()
    {
        $this
        ->scholarships = Scholarship::with('university', 'country')
            ->take(8)
            ->get();
    }

    public function render()
    {
        return view('livewire.home.scholarship-list');
    }
}
