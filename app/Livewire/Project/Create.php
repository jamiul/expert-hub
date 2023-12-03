<?php

namespace App\Livewire\Project;

use App\Enums\OptionGroupEnum;
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

    public $name;
    public $description;
    public $attachments = [];

    public $availableSkills = [];
    public $selectedSkills = [];
    public $skill = '';

    public $type = '';

    public $currency = 'USD';
    public $budget;
    public $availableBudgets = [];

    public function mount()
    {
        $this->availableBudgets = [10,20,30];
    }

    public function save()
    {
        $data = $this->validate();
        $attachments = [];
        foreach($this->attachments as $attachment){
            $fileName = $attachment->getClientOriginalName() . '-' . time() . '.' . $attachment->extension();
            $attachment->storeAs('project', $fileName);
            $attachments[] = $fileName;
            // show attachment asset('storage/project/' . $project->attachments[0])
        }
        $project = Project::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'attachments' => $attachments,
            'skills' => array_values($data['selectedSkills']),
            'type' => $data['type'],
            'currency' => $data['currency'],
            'budget' => $data['budget'],
            'project_category_id' => 1,
            'client_user_id' => Auth::user()->id,
            'slug' => Str::slug($data['name'], '-') . date('Ymd-his'),
        ]);

        return redirect()->to('/');
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'description' => ['required'],
            'selectedSkills' => ['required', 'array'],
            'type' => ['required'],
            'currency' => ['required'],
            'budget' => ['required'],
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
            $this->validateOnly('name');
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
            $this->validateOnly('budget');
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

    public function updatedCurrency()
    {
        if($this->currency === 'AUD'){
            $this->availableBudgets = Option::where('group', OptionGroupEnum::BudgetAUD)->where('status', 1)->pluck('value')->toArray();
        }
        if($this->currency === 'USD'){
            $this->availableBudgets = Option::where('group', OptionGroupEnum::BudgetUSD)->where('status', 1)->pluck('value')->toArray();
        }
    }
}
