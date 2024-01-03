<?php

namespace App\Livewire\Experts;

use App\Models\Profile;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;

    public $perPage = 5;

    public $filtersArray;

    public function mount()
    {
        $this->filtersArray = request()->only(
            'search',
            'minimumHourlyRate',
            'maximumHourlyRate',
            'selectedCountries',
            'fields',
            'skills',
        );
    }

    #[On('expert-filter')]
    public function reloadFilter(array $filtersArray)
    {
        $this->filtersArray = $filtersArray;
        $this->resetPage();
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }
    
    public function render()
    {
        $experts = Profile::expert()->with('user', 'education');
        if (!empty($this->filtersArray['minimumHourlyRate'])) {
            $experts = $experts->where('hourly_rate', '>=' ,$this->filtersArray['minimumHourlyRate']);
        }

        if (!empty($this->filtersArray['maximumHourlyRate'])) {
            $experts = $experts->where('hourly_rate', '<=' ,$this->filtersArray['maximumHourlyRate']);
        }

        if (!empty($this->filtersArray['selectedCountries'])) {
            $experts = $experts->whereHas('user', function($query){
                $query->whereHas('country', function($query){
                    $query->whereIn('name', $this->filtersArray['selectedCountries']);
                });
            });
        }

        if (isset($this->filtersArray['search']) && $this->filtersArray['search']) {
            $experts = $experts->whereHas('user', function($query){
                $query->where('first_name', 'like', '%' . $this->filtersArray['search'] . '%');
            });
        };
        if (isset($this->filtersArray['fields']) && $this->filtersArray['fields']) {
            $experts = $experts->whereHas('expertField', function($query){
                $query->whereIn('name', $this->filtersArray['fields']);
            });
        };
        if (isset($this->filtersArray['skills']) && $this->filtersArray['skills']) {
            $experts = $experts->whereHas('expertises', function($query){
                $query->whereIn('name', $this->filtersArray['skills']);
            });
        };
        $experts = $experts->orderByDesc('id')->paginate($this->perPage);
        
        return view('livewire.experts.lists', compact('experts'));
    }
}
