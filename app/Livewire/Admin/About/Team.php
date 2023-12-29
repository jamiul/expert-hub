<?php

namespace App\Livewire\Admin\About;

use App\Enums\CmnEnum;
use App\Models\AboutUs;
use App\Models\Profile;
use Livewire\Component;
use Livewire\Attributes\On;

class Team extends Component
{
    public $teamListPage;
    public $teamList = [];
    public $experts = [];
    public $teamId;
    public $team_title = '';
    public $team_subtitle = '';
    public $team_description = '';
    public $team_list = [];
    public $search = '';

    public function rules()
    {
        return [
            'team_title' => [
                'required',
                'string',
                'min:' . CmnEnum::TITLE_MIN,
                'max:' . CmnEnum::TITLE_MAX
            ],
            'team_subtitle' => [
                'required',
                'string',
                'min:' . CmnEnum::SUBTITLE_MIN,
                'max:' . CmnEnum::SUBTITLE_MAX
            ],
            'team_description' => [
                'required',
                'string',
                'min:' . CmnEnum::DESCRIPTION_MIN,
                'max:' . CmnEnum::DESCRIPTION_MAX
            ],
            'team_list' => ['array'],
        ];
    }

    public function messages()
    {
        return [
            'team_title.required' => 'Please add title',
            'team_subtitle.required' => 'Please add subtitle',
            'team_description.required' => 'Please add description',
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
        $this->team_list = $this->teamListPage->team_list ?? [];
        $this->refreshTeamList();
    }
    public function addTeam($id)
    {
        $this->teamId = $id;
        array_push($this->team_list, $this->teamId);
        $this->refreshTeamList();
    }

    public function saveTeam()
    {
        $data = $this->validate();

        if (count($this->teamList) > 5) {
            return $this->addError('team', 'You can only select up to 5 experts.');
        }

        $this->teamListPage->update([
            'team_title' => $data['team_title'],
            'team_subtitle' => $data['team_subtitle'],
            'team_description' => $data['team_description'],
            'team_list' => $this->team_list,
        ]);

        session()->flash('success', 'Team successfully updated.');
        return redirect()->to('/admin/about-us');
    }

    public function removeTeam($id)
    {
        $index = array_search($id, $this->team_list);

        if ($index !== false) {
            unset($this->team_list[$index]);
        }

        $this->refreshTeamList();

        $this->teamListPage->update([
            'team_list' => $this->team_list,
        ]);

        if (count($this->team_list) == 0) {
            session()->flash('success', 'Team has been removed.');
            return redirect()->to('/admin/about-us');
        }
    }

    #[On('refresh')]
    public function refreshTeamList()
    {
        if (count($this->team_list) > 0) {
            $this->teamList = Profile::whereIn('id', $this->team_list)
                ->with('user')
                ->get();
        }
    }

    public function render()
    {
        $this->experts = Profile::whereNotIn('id', $this->team_list)->expert()
            ->with('user')
            ->whereHas('user', function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%');
            })
            ->take(3)->orderBy('id', 'desc')->get();

        return view('livewire.admin.about.team');
    }
}
