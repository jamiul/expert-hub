<?php

namespace App\Livewire\Project;

use App\Models\Expertise;
use App\Models\Project;
use Illuminate\Validation\Rules\File;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use WireElements\Pro\Components\Modal\Modal;

class EditModal extends Modal
{
    public $project;
    public $budget_start_amount;
    public $title;
    public $description;
    public $availableSkills = [];
    public $skillLimit = 10;
    public $selectedSkills = [];
    public $skill = '';

    public function mount(Project $project)
    {
        $this->project = $project;
        $this->budget_start_amount = $project->budget_start_amount;
        $this->title = $project->title;
        $this->description = $project->description;
        $this->selectedSkills = $this->project->skills->pluck('id')->toArray();
        $this->availableSkills = Expertise::isChild()->pluck('name', 'id')->toArray();
    }
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255', 'min:15'],
            'description' => ['required', 'max:5000', 'min:500'],
            'selectedSkills' => ['required', 'array', 'max:15', 'min:1'],
            'budget_start_amount' => ['required', 'numeric', 'max:50000', 'min:50'],
            // 'attachments.*' => [
            //     File::types(['jpg', 'png', 'jpeg', 'pdf', 'docx', 'xlsx'])
            // ]
        ];
    }

    public function messages()
    {
        return [
            'selectedSkills.required' => 'Please select some skills',
            'type.required' => 'Please select how do you want to pay',
        ];
    }

    public function updateProject()
    {
        $this->validate();
        $this->setProject();
        $this->project->save();
        $this->saveSkills();
        // $this->uploadAttachments();
        toast('success', 'Project has been updated successfully');
        return redirect()->route('client.eois.index', $this->project);
    }

    public function setProject()
    {
        $this->project->title = $this->title;
        $this->project->description = $this->description;
        $this->project->budget_start_amount = $this->budget_start_amount;
    }

    public function saveSkills()
    {
        if ($this->selectedSkills) {
            $this->project->skills()->sync($this->selectedSkills);
        }
    }

    public function uploadAttachments()
    {
        if ($this->attachments) {
            foreach ($this->attachments as $attachment) {
                $fileName = $attachment->getClientOriginalName() . '-' . time() . '.' . $attachment->extension();
                $this->project->addMedia($attachment->getRealPath())
                    ->usingName($fileName)
                    ->toMediaCollection('attachments');
            }
        }
    }

    public function deleteAttachment(Media $media)
    {
        $media->delete();
    }
    
    public function render()
    {
        return view('livewire.project.edit-modal');
    }

    public static function attributes(): array
    {
        return [
            'size' => '6xl',
        ];
    }
}
