<?php

namespace App\Livewire\Admin\About;

use App\Models\User;
use App\Enums\CmnEnum;
use App\Models\AboutUs;
use App\Models\Profile;
use Livewire\Component;

class Instructor extends Component
{
    public $instructor_title = '';
    public $instructor_subtitle;
    public $instructor_list = [];
    public $instructors = [];
    public $experts = [];
    public $instructorPage;
    public $expertId;
    public $search = '';

    public function rules()
    {
        return [
            'instructor_title' => [
                'required',
                'string',
                'min:' . CmnEnum::TITLE_MIN,
                'max:' . CmnEnum::TITLE_MAX
            ],
            'instructor_subtitle' => [
                'required',
                'string',
                'min:' . CmnEnum::SUBTITLE_MIN,
                'max:' . CmnEnum::SUBTITLE_MAX
            ],
            'instructor_list' => ['array'],
        ];
    }

    public function messages()
    {
        return [
            'instructor_title.required' => 'Please add title',
            'instructor_subtitle.required' => 'Please add subtitle',
        ];
    }

    public function mount()
    {
        $this->instructorPage = AboutUs::first();
        if (is_null($this->instructorPage)) {
            $this->instructorPage = AboutUs::create();
        }
        $this->instructor_title = $this->instructorPage->instructor_title;
        $this->instructor_subtitle = $this->instructorPage->instructor_subtitle;
        $this->instructor_list = $this->instructorPage->instructor_list ?? [];

        $this->updateExpertList();
    }

    public function addExpert($id)
    {
        $this->expertId = $id;
        array_push($this->instructor_list, $this->expertId);
        $this->updateExpertList();
    }

    public function saveExpert()
    {
        $data = $this->validate();

        if (count($this->experts) > 7) {
            return $this->addError('experts', 'You can only select up to 7 experts.');
        }

        if (count($this->experts) < 6) {
            return $this->addError('experts', 'Please select minimum 6 experts');
        }

        $this->instructorPage->update([
            'instructor_title' => $data['instructor_title'],
            'instructor_subtitle' => $data['instructor_subtitle'],
            'instructor_list' => $this->instructor_list,
        ]);

        session()->flash('success', 'Expert successfully updated.');
        return redirect()->to('/admin/about-us');
    }

    public function removeExpert($id)
    {
        $index = array_search($id, $this->instructor_list);

        if ($index !== false) {
            unset($this->instructor_list[$index]);
        }

        $this->updateExpertList();

        $data = $this->validate();

        $this->instructorPage->update([
            'instructor_title' => $data['instructor_title'],
            'instructor_subtitle' => $data['instructor_subtitle'],
            'instructor_list' => $this->instructor_list,
        ]);

        $this->dispatch('instructor')->self();

        // if ($index === false) {
        //     session()->flash('success', 'Expert has been removed.');
        //     return redirect()->to('/admin/about-us');
        // }
    }

    private function updateExpertList()
    {
        if (count($this->instructor_list) > 0) {
            $this->experts = Profile::whereIn('id', $this->instructor_list)
                ->with('user')
                ->get();
        }
    }

    public function render()
    {
        $this->instructors = Profile::whereNotIn('id', $this->instructor_list)->expert()
            ->with('user')
            ->whereHas('user', function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%');
            })
            ->take(3)->orderBy('id', 'desc')->get();
        return view('livewire.admin.about.instructor');
    }
}
