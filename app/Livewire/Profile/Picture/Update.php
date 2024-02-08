<?php

namespace App\Livewire\Profile\Picture;

use App\Models\Profile;
use Illuminate\Validation\Rules\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireElements\Pro\Components\Modal\Modal;

class Update extends Modal
{
    use WithFileUploads;
    
    public $profile;
    public $pictureUrl;
    public $picture;

    public function mount()
    {
        $this->profile = auth()->user()->profile;
        $this->pictureUrl = $this->profile->picture;
    }

    public function update()
    {
        if ($this->picture) {
            $this->profile->addMedia($this->picture->getRealPath())
                ->preservingOriginal()
                ->usingName($this->picture->getClientOriginalName())
                ->toMediaCollection('picture');
        }
        toast('success', 'Picture Updated Successfully');
        if($this->profile->user->isClient()){
            return redirect()->route('client.profile.edit');
        }
        return redirect()->route('expert.profile.edit');
    }

    public function updatedPicture()
    {
        $required = $this->pictureUrl == '' ? 'required' : 'nullable';
        $this->validate([
            'picture' => [
                $required,
                'image',
                File::image()->max(1 * 1024),
            ],
        ]);
        $this->pictureUrl = $this->picture->temporaryUrl();
    }

    public function render()
    {
        return view('livewire.profile.picture.update');
    }
}
