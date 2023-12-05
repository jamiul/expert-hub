<?php

namespace App\Livewire\Project;

use App\Enums\OptionGroupEnum;
use App\Enums\ProjectStatus;
use App\Models\Expertise;
use App\Models\Option;
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
    public $selectedSkills = [];
    public $skill = '';

    public $type = '';

    public $budget_start_amount;
    public $budget_end_amount;

    public function save()
    {
        $data = $this->validate();
        $attachments = [];

        $project = Project::create([
            'user_id' => Auth::user()->id,
            'title' => $data['title'],
            'slug' => Str::slug($data['title'], '-') . date('Ymd-his'),
            'description' => $data['description'],
            'type' => $data['type'],
            'currency_id' => 1,
            'budget_start_amount' => $data['budget_start_amount'],
            'budget_end_amount' => $data['budget_end_amount'],
            'status' => ProjectStatus::Published,
        ]);
        foreach($this->selectedSkills as $id => $name){
            $project->skills()->create([
                'expertise_id' => $id,
            ]);
        }
        foreach ($this->attachments as $attachment) {
            $fileName = $attachment->getClientOriginalName() . '-' . time() . '.' . $attachment->extension();
            $attachment->storeAs('project', $fileName);
            $project->files()->create([
                'name' => $fileName,
                'type' => $attachment->extension(),
            ]);
            // show attachment asset('storage/project/' . $project->attachments[0])
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

    public function render()
    {
        return view('livewire.project.create');
    }

    public function next()
    {
        if($this->currentStep === 1){
            $this->validateOnly('title');
        }
        if($this->currentStep === 2){
            $this->validateOnly('description');
        }
        if($this->currentStep === 3){
            $this->validateOnly('selectedSkills');
        }
        if($this->currentStep === 4){
            $this->validateOnly('type');
        }
        if($this->currentStep === 5){
            $this->validateOnly('budget_start_amount');
        }
        $this->currentStep += 1;
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
