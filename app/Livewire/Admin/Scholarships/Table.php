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
    use WithPagination;

    public $perPage = 6;

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
        $this->render();
    }

    public function render()
    {
        $scholarships = Scholarship::orderByDesc('id')->paginate($this->perPage);
        return view('livewire.admin.scholarships.table', [
            'scholarships' => $scholarships,
        ]);
    }
}
