<?php

namespace App\Livewire\Experts;

use App\Models\ExpertDetailProfile;
use App\Models\Expertise;
use App\Models\Language;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Livewire\Component;

class DetailsExpert extends Component
{
    public $name;

    public function render()
    {
        $user = User::with([
            'userProfile.educationQualifications',
            'expertDetailProfile',
            'userProfile.languages',
            'profile',
            'workExperiences',
            'projectUsers',
            'userProfile.expertises',
            'bookExperts',
            'testimonials',
            'bookExperts.expertises'
        ])->where('user_name', $this->name)->first();
        $arr_languages = [];
        $arr_skills = [];
        $skills = [];
        if (!empty($user->userProfile)) {
            $languages = $user->userProfile->languages;
            foreach ($languages as $language) {
                array_push($arr_languages, Language::where('id', $language->language_id)->first());
            }

            $skills = $user->userProfile->expertises;
            foreach ($skills as $skill) {
                array_push($arr_skills, Expertise::where('id', $skill->expertise_id)->first());
            }
        }

        $arr_projects = [];
        $projects = $user->projectUsers;
        foreach ($projects as $project) {
            array_push($arr_projects, Project::where('id', $project->project_id)->first());
        }

        $date = new \DateTime();
        $date->setTimezone(new \DateTimeZone($user->date_time_zone ?? 'Australia/Sydney'));

        return view('livewire.experts.details-expert', compact(['user', 'skills', 'date', 'arr_languages', 'arr_projects', 'arr_skills']));
    }
}
