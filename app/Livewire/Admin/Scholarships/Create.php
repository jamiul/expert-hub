<?php

namespace App\Livewire\Admin\Scholarships;

use App\Livewire\Admin\Scholarships\Form;
use App\Livewire\Admin\Scholarships\Table;
use App\Models\Country;
use App\Models\Expertise;
use App\Models\University;
use WireElements\Pro\Components\Modal\Modal;

class Create extends Modal
{
    public Form $form;

    public $countries;
    public $universities;
    public $studyAreas;

    public function mount()
    {
        $this->countries = Country::get();
        $this->universities = University::get();
        $this->studyAreas = Expertise::expertise()->isParent()->get();
    }
    
    public function addScholarship()
    {
        $this->form->create();
        $this->dispatch('refresh')->to(Table::class);
        $this->close();
    }
    public function render()
    {
        return view('livewire.admin.scholarships.create');
    }
}
