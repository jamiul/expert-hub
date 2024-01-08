<?php

namespace App\Livewire\About;

use App\Models\AboutUs;
use App\Models\Profile;
use Livewire\Component;

class Team extends Component
{
    public $about;
    public $teamList;
    public $teamList2;
    public $teamList3;
    public $title;
    public $subtitle;
    public $description;

    private function fetchProfileData($ids)
    {
        return Profile::whereIn('id', $ids)
        ->with('user' ,'expertField')
        ->get();

    }

    public function mount()
    {
        $this->about = AboutUs::first();
        // team list
        $this->teamList = $this->fetchProfileData($this->about->team_list);

        $this->teamList2 = $this->teamList->splice(0, 2);
        $this->teamList3 = $this->teamList;
    }

    public function render()
    {
        return view('livewire.about.team');
    }
}
