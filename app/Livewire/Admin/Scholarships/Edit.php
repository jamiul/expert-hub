<?php

namespace App\Livewire\Admin\Scholarships;

use App\Livewire\Admin\Scholarships\Form;
use App\Models\Country;
use App\Models\Expertise;
use App\Models\Scholarship;
use App\Models\University;
use WireElements\Pro\Components\Modal\Modal;

class Edit extends Modal
{
    public int|Scholarship $scholarship;

    public Form $form;

    public $countries;
    public $universities;
    public $studyAreas;

    public function mount(Scholarship $scholarship)
    {
        $this->scholarship = $scholarship;
        $this->form->set($this->scholarship);

        $this->countries = Country::get();
        $this->universities = University::get();
        $this->studyAreas = Expertise::expertise()->isParent()->get();
    }

    public function editScholarship()
    {
        $this->form->update();
        $this->dispatch('refresh')->to(Table::class);
        $this->close();
    }

    public function render()
    {
        return view('livewire.admin.scholarships.edit');
    }
}
