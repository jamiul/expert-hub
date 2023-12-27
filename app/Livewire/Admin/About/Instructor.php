<?php

namespace App\Livewire\Admin\About;

use App\Models\User;
use App\Models\AboutUs;
use App\Models\Profile;
use Livewire\Component;

class Instructor extends Component
{
    public $instructor_title = '';
    public $instructor_subtitle;
    public $instructor_list = [];
    public $instructors = [];
    public $instructorPage;
    public $expertId;
    public $search = '';

    public function rules()
    {
        return [
            'instructor_title' => ['required', 'string'],
            'instructor_subtitle' => ['required', 'string'],
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

    public function removeExpert($id)
    {
        $index = array_search($id, $this->instructor_list);

        if ($index !== false) {
            unset($this->instructor_list[$index]);
        }
        $data = $this->validate();

        $this->instructorPage->update([
            'instructor_title' => $data['instructor_title'],
            'instructor_subtitle' => $data['instructor_subtitle'],
            'instructor_list' => $this->instructor_list,
        ]);

    }

    public function render()
    {
        $this->instructors = Profile::expert()
            ->with('user')
            ->whereHas('user', function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%');
            })
            ->get();
        // $this->instructors = Profile::expert()->with('user')->get();
        return view('livewire.admin.about.instructor');
    }
}
