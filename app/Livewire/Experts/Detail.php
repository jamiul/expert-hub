<?php

namespace App\Livewire\Experts;

use Livewire\Component;

class Detail extends Component
{
    public function render(string $name)
    {
        return view('livewire.experts.detail', compact('name'));
    }
}
