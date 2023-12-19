<?php

namespace App\Livewire\Admin\About;

use App\Models\AboutUs;
use Livewire\Component;
use Livewire\WithFileUploads;

class Story extends Component
{
    use WithFileUploads;

    public $storyPage;
    public $story_title;
    public $story_subtitle;
    public $story_description;
    public $story_image;

    public function rules()
    {
        return [
            'story_title' => ['required','string'],
            'story_subtitle' => ['required','string'],
            'story_description' => ['required','string'],
            'story_image' => ['required','image'],
        ];
    }

    public function mount()
    {
        $this->storyPage = AboutUs::first();
        if (is_null($this->storyPage)) {
            $this->storyPage = AboutUs::create();
        }
        $this->story_title = $this->storyPage->story_title;
        $this->story_subtitle = $this->storyPage->story_subtitle;
        $this->story_description = $this->storyPage->story_description;
    }

    public function saveStory()
    {
        $data = $this->validate();

        $this->storyPage->update([
            'story_title' => $data['story_title'],
            'story_subtitle' => $data['story_subtitle'],
            'story_description' => $data['story_description'],
        ]);

        $this->storyPage->addMedia($this->story_image->getRealPath())
            ->usingName($this->story_image->getClientOriginalName())
            ->toMediaCollection('story_image');

        return redirect()->to('/admin/about-us');
    }
    public function render()
    {
        return view('livewire.admin.about.story');
    }
}
