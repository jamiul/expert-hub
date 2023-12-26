<?php

namespace App\Livewire\Admin\Scholarships;

use App\Models\Scholarship;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public function mount()
    {
        
        // dd($this->scholarships);
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    public function render()
    {
        $scholarships = Scholarship::paginate(5);
        return view('livewire.admin.scholarships.table', [
            'scholarships' => $scholarships,
        ]);
    }
}
