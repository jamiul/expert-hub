<?php

namespace App\Livewire\Admin\About;

use App\Enums\CmnEnum;
use App\Models\AboutUs;
use Livewire\Component;
use Livewire\WithFileUploads;

class Story extends Component
{
    use WithFileUploads;

    public $storyPage;
    public $headerImageUrl = '';
    public $story_title = '';
    public $story_subtitle = '';
    public $story_description = '';
    public $story_image;

    public function rules()
    {
        $requiredOrNull = $this->headerImageUrl == '' ? 'required' : 'nullable';
        return [
            'story_title' => [
                'required',
                'string',
                'min:' . CmnEnum::TITLE_MIN,
                'max:' . CmnEnum::TITLE_MAX
            ],
            'story_subtitle' => [
                'required',
                'string',
                'min:' . CmnEnum::SUBTITLE_MIN,
                'max:' . CmnEnum::SUBTITLE_MAX
            ],
            'story_description' => [
                'required',
                'string',
                'min:' . CmnEnum::DESCRIPTION_MIN,
                'max:' . CmnEnum::DESCRIPTION_MAX
            ],
            'story_image' => [
                $requiredOrNull,
                'image'
            ],
        ];
    }

    public function messages()
    {
        return [
            'story_title.required' => 'Please add title',
            'story_subtitle.required' => 'Please add subtitle',
            'story_description.required' => 'Please add description',
            'story_image.required' => 'Please add image',
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
        $this->headerImageUrl = $this->storyPage->getFirstMediaUrl('story_image');
    }

    public function saveStory()
    {
        $data = $this->validate();

        $this->storyPage->update([
            'story_title' => $data['story_title'],
            'story_subtitle' => $data['story_subtitle'],
            'story_description' => $data['story_description'],
        ]);

        if (!is_null($this->story_image)) {
            $this->storyPage->clearMediaCollection('story_image');

            $this->storyPage->addMedia($this->story_image->getRealPath())
                ->usingName($this->story_image->getClientOriginalName())
                ->toMediaCollection('story_image');
        }

        session()->flash('success', 'Story successfully updated.');
        return redirect()->to('/admin/about-us');
    }

    public function render()
    {
        return view('livewire.admin.about.story');
    }
}
