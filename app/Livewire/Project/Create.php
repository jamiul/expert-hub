<?php

namespace App\Livewire\Project;

use App\Enums\ProjectStatus;
use App\Enums\ProjectType;
use App\Models\Expertise;
use App\Models\Profile;
use App\Models\Project;
use App\Notifications\ProjectPostNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    use WithFileUploads;

    public Project $project;

    public $title;
    public $description;
    public $attachments = [];

    public $availableExpertiseFields = [];
    public $expertise_id;

    public $suggestedSkills;
    public $availableSkills = [];
    public $skillLimit = 8;
    public $selectedSkills = [];
    public $skill = '';

    public $type = '';

    public $budget_start_amount;
    public $budget_end_amount;

    public function mount(Project $project)
    {
        $this->availableExpertiseFields = Expertise::expertise()->isParent()->pluck('name', 'id')->toArray();
        $this->availableSkills = Expertise::skill()->isChild()->pluck('id', 'name')->toArray();
        $this->suggestedSkills = Expertise::skill()->isChild()->limit(8)->pluck('name');
        $this->project = $project;
        $this->title = $this->project->title;
        $this->description = $this->project->description;
        $this->expertise_id = $this->project->expertise_id;
        $this->type = $this->project->type ? $this->project->type : ProjectType::Fixed;
        $this->budget_start_amount = $this->project->budget_start_amount;
        $this->budget_end_amount = $this->project->budget_end_amount;
        $this->selectedSkills = $this->project->skills->pluck('id')->toArray();
        // dd($this->project->attachments);
    }

    public function save()
    {
        $this->validate();
        $this->setProject();
        $this->project->profile_id = Auth::user()->profile->id;
        $this->project->status = ProjectStatus::Published;
        $this->project->save();
        $this->saveSkills();
        $this->uploadAttachments();
        $this->notify();
        toast('success', 'Job has been posted successfully');
        session()->flash('activeTab', 'invite-expert');
        return redirect()->route('client.eois.index', $this->project);
    }

    public function saveAsDraft()
    {
        $this->setProject();
        if($this->project->id === null){
            $this->project->profile_id = Auth::user()->profile->id;
        }
        $this->project->status = ProjectStatus::Draft;
        $this->project->save();
        $this->saveSkills();
        $this->uploadAttachments();
        toast('success', 'Job has been saved as Draft!');
        return redirect()->route('client.projects');
    }

    public function setProject()
    {
        $this->project->title = $this->title;
        $this->project->slug = $this->title ? Str::slug($this->title, '-') . time() : '';
        $this->project->description = $this->description;
        $this->project->expertise_id = $this->expertise_id;
        $this->project->type = $this->type;
        $this->project->currency_id = 1;
        $this->project->budget_start_amount = $this->budget_start_amount;
        $this->project->budget_end_amount = $this->budget_end_amount;
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

    public function notify()
    {
        $experts = Profile::expert()->with('user')->get();
        $experts->each(function($expert){
            $expert->user->notify(new ProjectPostNotification($this->project));
        });
    }

    public function rules()
    {
        return [
            'expertise_id' => ['required'],
            'title' => ['required', 'string', 'max:255', 'min:15'],
            'description' => ['required', 'max:5000', 'min:500'],
            'selectedSkills' => ['required', 'array', 'max:8', 'min:1'],
            'type' => ['required'],
            'budget_start_amount' => ['required', 'numeric','max:50000', 'min:50'],
            'budget_end_amount' => ['nullable', 'numeric'],
            'attachments.*' => [
                    File::types(['jpg','png','jpeg', 'pdf','docx','xlsx'])
                ]
        ];
    }

    public function messages()
    {
        return [
            'selectedSkills.required' => 'Please select some skills',
            'type.required' => 'Please select how do you want to pay',
        ];
    }
    public function updatedSelectedSkills()
    {
        $this->validate([
            'selectedSkills' => ['required', 'array', 'max:8', 'min:1'],
        ]);
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.project.create');
    }
}
