<?php

namespace App\Livewire\Admin\About;

use App\Models\User;
use App\Models\AboutUs;
use Livewire\Component;

class Team extends Component
{
    public $teamListPage, $teamMembers, $teamId;
    public $team_title, $team_subtitle, $team_description, $team_list;

    public function rules()
    {
        return [
            'team_title' => ['required', 'string'],
            'team_subtitle' => ['required', 'string'],
            'team_description' => ['required', 'string'],
            'team_list' => ['array'],
        ];
    }

    public function mount()
    {
        $this->teamListPage = AboutUs::first();
        if (is_null($this->teamListPage)) {
            $this->teamListPage = AboutUs::create();
        }
        $this->team_title = $this->teamListPage->team_title;
        $this->team_subtitle = $this->teamListPage->team_subtitle;
        $this->team_description = $this->teamListPage->team_description;
        $this->team_list = $this->teamListPage->team_list;
    }
    public function addTeam($id)
    {
        $this->teamId = $id;
        array_push($this->team_list, $this->teamId);
    }

    public function saveTeam()
    {
        $data = $this->validate();

        $this->teamListPage->update([
            'team_title' => $data['team_title'],
            'team_subtitle' => $data['team_subtitle'],
            'team_description' => $data['team_description'],
            'team_list' => $this->team_list,
        ]);

        return redirect()->to('/admin/about-us');
    }

    public function removeTeam($id)
    {
        $index = array_search($id, $this->team_list);

        if ($index !== false) {
            unset($this->team_list[$index]);
        }
        $data = $this->validate();

        $this->teamListPage->update([
            'team_title' => $data['team_title'],
            'team_subtitle' => $data['team_subtitle'],
            'team_description' => $data['team_description'],
            'team_list' => $this->team_list,
        ]);

    }

    public function render()
    {
        $this->teamMembers = User::where('active_profile', 'Expert')->get();
        return view('livewire.admin.about.team');
    }
}
