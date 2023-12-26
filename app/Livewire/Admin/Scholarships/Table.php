<?php

namespace App\Livewire\Admin\Scholarships;

use App\Models\Scholarship;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    // use WithPagination;

    public $scholarships;

    public function mount()
    {
        $this->scholarships = Scholarship::get();
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    #[On('refresh')]
    public function refreshScholarship()
    {
        $this->scholarships = Scholarship::get();
    }

    public function render()
    {
        // $scholarships = Scholarship::paginate(5);
        return view('livewire.admin.scholarships.table');
        // return view('livewire.admin.scholarships.table', [
        //     'scholarships' => $scholarships,
        // ]);
    }
}
