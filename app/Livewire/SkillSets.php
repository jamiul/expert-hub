<?php

namespace App\Livewire;

use App\Models\Expertise;
use Livewire\Component;

class SkillSets extends Component
{
    public $tab = 'field';
    public $expertFields = [];
    public $expertSkills = [];
    public $expertFieldsCount;
    public $expertSkillsCount;
    public $perRowExpert = 5;
    public $perRowSkill = 4;
    public $expertLimit;
    public $skillLimit;


    public function mount()
    {
        $this->expertFields = Expertise::expertise()->isParent()->orderBy('name')->get();
        $this->expertSkills = Expertise::skill()->isParent()->orderBy('name')->get();
        $this->expertFieldsCount = $this->expertFields->count();
        $this->expertSkillsCount = $this->expertSkills->count();
    }

    public function render()
    {
        return view('livewire.skill-sets');
    }
}
