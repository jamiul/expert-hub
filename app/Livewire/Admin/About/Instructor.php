<?php

namespace App\Livewire\Admin\About;

use App\Models\User;
use App\Models\AboutUs;
use Livewire\Component;

class Instructor extends Component
{
    public $instructor_title, $instructor_subtitle, $instructor_list;
    public $instructors, $instructorPage, $expertId;

    public function rules()
    {
        return [
            'instructor_title' => ['required','string'],
            'instructor_subtitle' => ['required','string'],
            'instructor_list' => ['array'],
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
        $this->instructor_list = $this->instructorPage->instructor_list;
    }

    public function addExpert($id)
    {
        $this->expertId = $id;
        array_push($this->instructor_list, $this->expertId);
    }

    public function saveExpert()
    {
        $data = $this->validate();

        $this->instructorPage->update([
            'instructor_title' => $data['instructor_title'],
            'instructor_subtitle' => $data['instructor_subtitle'],
            'instructor_list' => $this->instructor_list,
        ]);

        return redirect()->to('/admin/about-us');
    }

    public function render()
    {
        $this->instructors = User::where('active_profile', 'Expert')->get();
        return view('livewire.admin.about.instructor');
    }
}
