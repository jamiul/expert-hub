<?php

namespace App\Livewire\Training;

use App\Models\Profile;
use Livewire\Component;
use App\Models\Training;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Illuminate\Support\Carbon;

class Lists extends Component
{
    use WithPagination;

    public $limit = 4;

    public $filtersArray;

    public function __construct()
    {
        $this->filtersArray = request()->only(
            'search',
            'categories',
            'date',
            'mode',
            'selectedLanguages',
            'selectedCountries'
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

    public function favourite(Training $training)
    {
        $redirectUrlIfNotAuthenticated = route('find.trainings');
        $training->favourite($redirectUrlIfNotAuthenticated);
    }

    public function render()
    {
        $trainings = Training::query();

        if (isset($this->filtersArray['search']) && $this->filtersArray['search']) {
            $trainings = $trainings->where('title', 'like', '%' . $this->filtersArray['search'] . '%');
        }

        if (isset($this->filtersArray['categories']) && $this->filtersArray['categories']) {
            $trainings = $trainings->whereHas('category', function($query){
                $query->whereIn('name', $this->filtersArray['categories']);
            });
        }
        if (isset($this->filtersArray['date']) && $this->filtersArray['date']) {
            $trainingDate = Carbon::parse($this->filtersArray['date']);
            $trainings = $trainings->whereDate('start_date', '>', $trainingDate);
        }
        if (isset($this->filtersArray['mode']) && $this->filtersArray['mode']) {
            $trainings = $trainings->whereIn('mode', $this->filtersArray['mode']);
        }

        if (isset($this->filtersArray['selectedLanguages']) && $this->filtersArray['selectedLanguages']) {
            $trainings = $trainings->whereHas('language', function($query){
                $query->whereIn('name', $this->filtersArray['selectedLanguages']);
            });
        }

        if (isset($this->filtersArray['selectedCountries']) && $this->filtersArray['selectedCountries']) {
            $trainings = $trainings->whereHas('country', function($query){
                $query->whereIn('name', $this->filtersArray['selectedCountries']);
            });
        }

        $trainings = $trainings->paginate($this->limit);

        return view('livewire.training.lists', [
            'trainings' => $trainings,
        ]);
    }
}
