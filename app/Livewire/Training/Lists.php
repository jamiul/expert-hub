<?php

namespace App\Livewire\Training;

use App\Models\Training;
use App\Repositories\TrainingRepository;
use Carbon;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;

    public $limit = 4;

    public $filtersArray;
    public $trainingRepository;

    public function __construct()
    {
        $this->filtersArray = request()->only(
            'search',
            'skillCategories',
            'trainingDate',
            'trainingMode',
            'language',
            'country'
        );
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    #[On('training-filter')]
    public function reloadFilter(array $filtersArray)
    {
        $this->filtersArray = $filtersArray;
        $this->resetPage();
    }

    public function updateFavorite(string|int $id, bool $status)
    {
        $trainingRepository = app(TrainingRepository::class);
        $trainingRepository->updateFavorite($id, $status);
    }

    public function render()
    {
        $trainings = Training::with([
            'language', 'trainingDates', 'trainingMode',
            'trainingInstructors.user', 'projectCategory',
        ])->withCount('userFavorite');

        if (isset($this->filtersArray['search']) && $this->filtersArray['search']) {
            $trainings = $trainings->where('title', 'like', '%' . $this->filtersArray['search'] . '%');
        }
        if (isset($this->filtersArray['skillCategories']) && $this->filtersArray['skillCategories']) {
            $trainings = $trainings->whereIn('skill_id', $this->filtersArray['skillCategories']);
        }
        if (isset($this->filtersArray['trainingDate']) && $this->filtersArray['trainingDate']) {
            $trainingDate = $this->filtersArray['trainingDate'];
            $trainingDate = Carbon::parse($trainingDate)->format('Y-m-d');
            
            $trainings = $trainings->whereHas('trainingDates', function ($q) use ($trainingDate) {
                $q->whereDate('date_start', '<=', $trainingDate);
                $q->whereDate('date_end', '>=', $trainingDate);
            });
        }
        if (isset($this->filtersArray['trainingMode']) && $this->filtersArray['trainingMode']) {
            $trainings = $trainings->whereIn('training_mode_id', $this->filtersArray['trainingMode']);
        }
        if (isset($this->filtersArray['language']) && $this->filtersArray['language']) {
            $trainings = $trainings->where('language_id', $this->filtersArray['language']);
        }
        if (isset($this->filtersArray['country']) && $this->filtersArray['country']) {
            $trainings = $trainings->whereIn('country_id', $this->filtersArray['country']);
        }

        $trainings = $trainings->paginate($this->limit);

        return view('livewire.training.lists', [
            'trainings' => $trainings,
        ]);
    }
}
