<?php

namespace App\Livewire\Training;

use App\Models\Profile;
use Livewire\Attributes\On;
use WireElements\Pro\Components\Modal\Modal;

class InstructorList extends Modal
{
    public $expertList;
    public $instructorSearch;

    public $expertIds = [];


    // #[Modelable] 
    // public $ids = [];
    
    public function mount()
    {
        // dd($expertList);
        // $this->expertList = Profile::expert()->with('user', 'education')->get();
    }

    #[On('select-expert')] 
    public function updateExpertList($id)
    {
        // dump('$this->ids');
        $this->expertIds[] = $id;
        
        // $this->expertList = Profile::expert()->with('user', 'education')->whereIn('id', [1, 2, 3])->get();
        // dd($this->expertList);
    }

    public function render()
    {       
        $this->expertList = Profile::expert()->with('user', 'education')->whereNotIn('id', $this->expertIds);

        if($this->instructorSearch) {
            $this->expertList = $this->expertList->whereHas('user', function ($query) {
                $query->where('title', 'like', '%' . $this->instructorSearch . '%')->
                orWhere('first_name', 'like', '%' . $this->instructorSearch . '%')->
                orWhere('last_name', 'like', '%' . $this->instructorSearch . '%');
            });
        }

        $this->expertList = $this->expertList->get();

        return view('livewire.training.instructor-list');
    }
}
