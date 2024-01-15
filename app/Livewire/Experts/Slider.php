<?php

namespace App\Livewire\Experts;

use App\Models\AboutUs;
use App\Models\Profile;
use Livewire\Component;

class Slider extends Component
{
    public $about = [];
    public $experts = [];
    public $instructor_title = '';
    public $instructor_subtitle = '';

    private function fetchProfileData($ids)
    {
        return Profile::whereIn('id', $ids)
                    ->with('user' ,'expertField')
                    ->limit(6)
                    ->get();
    }

    public function mount()
    {
        $this->about = AboutUs::first();
        $this->instructor_subtitle = $this->about->instructor_subtitle ?? '';
        $this->instructor_title = $this->about->instructor_title ?? '';

        // expert list
        $this->experts = $this->fetchProfileData($this->about->instructor_list);
    }

    public function render()
    {
        return view('livewire.experts.slider');
    }
}
