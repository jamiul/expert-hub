<?php

namespace App\Livewire\Project;

use App\Enums\ProjectStatus;
use App\Models\Expertise;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public int $currentStep = 1;

    public $title;
    public $description;
    public $attachments = [];

    public $availableSkills = [];
    public $skillLimit = 10;
    public $selectedSkills = [];
    public $skill = '';

    public $type = '';

    public $budget_start_amount;
    public $budget_end_amount;

    public function mount()
    {
        $this->availableSkills = Expertise::isChild()->pluck('name', 'id')->toArray();
    }

    public function save()
    {
        $data = $this->validate();

        $project = Project::create([
            'profile_id' => Auth::user()->profile->id,
            'title' => $data['title'],
            'slug' => Str::slug($data['title'], '-') . date('Ymd-his'),
            'description' => $data['description'],
            'type' => $data['type'],
            'currency_id' => 1,
            'budget_start_amount' => $data['budget_start_amount'],
            'budget_end_amount' => $data['budget_end_amount'],
            'status' => ProjectStatus::Published,
        ]);
        foreach($this->selectedSkills as $id){
            $project->skills()->attach([
                'expertise_id' => $id,
            ]);
        }
        foreach ($this->attachments as $attachment) {
            $fileName = $attachment->getClientOriginalName() . '-' . time() . '.' . $attachment->extension();
            $project->addMedia($attachment->getRealPath())
                ->usingName($fileName)
                ->toMediaCollection('attachments');
        }

        return redirect()->to('/');
    }

    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['required'],
            'selectedSkills' => ['required', 'array'],
            'type' => ['required'],
            'budget_start_amount' => ['required', 'numeric'],
            'budget_end_amount' => ['nullable', 'numeric'],
        ];
    }

    public function messages()
    {
        return [
            'selectedSkills.required' => 'Please select some skills',
            'type.required' => 'Please select how do you want to pay',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.project.create');
    }

    public function searchSkill()
    {
        if ($this->skill) {
            $availableSkills = Expertise::where('name', 'like', '%' . $this->skill . '%')
                ->whereNotIn('id', array_keys($this->selectedSkills))
                ->limit(5)
                ->get()
                ->pluck('name', 'id')->toArray();
            $this->availableSkills = $availableSkills;
        } else {
            $this->availableSkills = [];
        }
    }

    public function addSkill($id)
    {
        $skill = Expertise::find($id);
        if ($skill) {
            $this->selectedSkills[$skill->id] = $skill->name;
            ksort($this->selectedSkills);
            $this->reset('skill', 'availableSkills');
        }
    }

    public function removeSkill($id)
    {
        unset($this->selectedSkills[$id]);
    }
}
