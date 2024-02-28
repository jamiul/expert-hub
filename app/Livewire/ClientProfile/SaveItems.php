<?php

namespace App\Livewire\ClientProfile;

use App\Models\Profile;
use App\Models\Training;
use App\Models\Favourite;
use App\Models\Scholarship;
use Livewire\WithPagination;
use WireElements\Pro\Components\Modal\Modal;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class SaveItems extends Modal
{
    use InteractsWithConfirmationModal;
    use WithPagination;

    public $perPage = 5;

    public $project;

    public function mount($project = null)
    {
        if ($project) {
            $this->project = auth()->user()->profile->projects()->where('id', $project)->first();
        } else {
            $this->project = 0;
        }
    }

    public function favouriteProfile(Profile $profile)
    {
        $this->askForConfirmation(
            callback: function () use ($profile) {
                $redirectUrlIfNotAuthenticated = route('auth.login');
                $profile->favourite($redirectUrlIfNotAuthenticated);
            },
            prompt: [
                'title' => __('Unfavourite'),
                'message' => __('Are you sure you want to unfavourite this expert?'),
                'confirm' => __('Unfavourite'),
                'cancel' => __('Cancel'),
            ],
        );
    }

    public function favouriteScholarship(Scholarship $scholarship)
    {
        $this->askForConfirmation(
            callback: function () use ($scholarship) {
                $redirectUrlIfNotAuthenticated = route('scholarship-database');
                $scholarship->favourite($redirectUrlIfNotAuthenticated);
            },
            prompt: [
                'title' => __('Unfavourite'),
                'message' => __('Are you sure you want to unfavourite this expert?'),
                'confirm' => __('Unfavourite'),
                'cancel' => __('Cancel'),
            ],
        );
    }

    public function favouriteTraining(Training $training)
    {
        $this->askForConfirmation(
            callback: function () use ($training) {
                $redirectUrlIfNotAuthenticated = route('find.trainings');
                $training->favourite($redirectUrlIfNotAuthenticated);
            },
            prompt: [
                'title' => __('Unfavourite'),
                'message' => __('Are you sure you want to unfavourite this expert?'),
                'confirm' => __('Unfavourite'),
                'cancel' => __('Cancel'),
            ],
        );
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    public function render()
    {
        $favouriteExpertIDs = Favourite::where('loveable_type', 'App\Models\Profile')
            ->pluck('loveable_id');

        $favouriteExperts = Profile::expert()->with('user', 'education')
            ->whereIn('id', $favouriteExpertIDs)
            ->orderByDesc('id')
            ->paginate($this->perPage);

        $favouriteScholarshipIDs = Favourite::where('loveable_type', 'App\Models\Scholarship')
            ->pluck('loveable_id');

        $favouriteScholarships = Scholarship::query()
            ->whereIn('id', $favouriteScholarshipIDs)
            ->orderByDesc('id')
            ->paginate($this->perPage);

        $favouriteTrainingsIDs = Favourite::where('loveable_type', 'App\Models\Training')->pluck('loveable_id');

        $favouriteTrainings = Training::query()
            ->whereIn('id', $favouriteTrainingsIDs)
            ->orderByDesc('id')
            ->paginate($this->perPage);

        return view('livewire.client-profile.save-items',
            compact(
                'favouriteExperts',
                'favouriteScholarships',
                'favouriteTrainings'
            )
        );
    }
}
