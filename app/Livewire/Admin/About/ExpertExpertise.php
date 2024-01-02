<?php

namespace App\Livewire\Admin\About;

use Livewire\Component;

class ExpertExpertise extends Component
{
    public $expert;
    public $expertises = [];
    public $showMore = false;
    public $expertiseCount;

    public function mount($expert)
    {
        $this->expert = $expert;
    }

    public function render()
    {
        $this->expertises = $this->showMore
            ? $this->expert->expertises
            : $this->expert->expertises->take(3);

        $this->expertiseCount = count($this->expert->expertises) - count($this->expert->expertises->take(3));
        return view('livewire.admin.about.expert-expertise');
    }

    public function toggleShowMore()
    {
        $this->showMore = !$this->showMore;
    }
}
