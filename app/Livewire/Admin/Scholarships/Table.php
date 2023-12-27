<?php

namespace App\Livewire\Admin\Scholarships;

use App\Models\Scholarship;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Table extends Component
{
    use InteractsWithConfirmationModal;
    // use WithPagination;

    public $scholarships;

    public function mount()
    {
        $this->refreshScholarship();
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    public function deleteScholarship($id)
    {
        $this->askForConfirmation(
            callback: function () use ($id) {
                $scholarship = Scholarship::find($id);
                if($scholarship){
                    $scholarship->delete();
                }
                $this->refreshScholarship();
            },
        );
    }

    #[On('refresh')]
    public function refreshScholarship()
    {
        $this->scholarships = Scholarship::orderByDesc('id')->get();
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
