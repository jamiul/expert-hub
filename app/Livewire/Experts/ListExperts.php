<?php

namespace App\Livewire\Experts;

use App\Models\Profile;
use App\Models\Service;
use App\Models\User;
use App\Models\UserFavorite;
use Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

use function JmesPath\search;

class ListExperts extends Component
{
    use WithPagination;

    public $limit = 4;
    #[Url]
    public $page = 1;
    public $totalPages = 0;
    public $totalExperts = 0;

    public $filterArray = [];

    #[On('handleChangePageExperts')]
    public function handleChangePageExperts($page)
    {
        $this->page = $page;
    }

    #[On('handleCompleteSubmitFilter')]
    public function handleCompleteSubmitFilter($filters)
    {
        $this->filterArray = [
            'search' => $filters['search'],
            'expertsByArea' => $filters['selectedExpertsByArea'],
            'categoriesByExpertise' => $filters['selectedCategoriesByExpertise'],
            'availableFor' => $filters['selectedAvailableFor'],
            'hourlyRate' => $filters['selectedHourlyRate'],
            'location' => $filters['selectedLocation'],
            'rating' => $filters['rating'],
        ];
    }

    #[On('handleCompleteClearFilter')]
    public function handleCompleteClearFilter()
    {
        $this->filterArray = [];
    }


    #[On('handleFavoriteExpert')]
    public function handleFavoriteExpert($data)
    {
        try {
            $userFavorite = UserFavorite::where('user_id', auth()->id())
                ->where('favoriteable_id', $data['favoriteable_id'])
                ->where('favoriteable_type', 'expert_favorite')
                ->first();

            if ($userFavorite) {
                $userFavorite->delete();
            } else {
                UserFavorite::create([
                    'user_id' => auth()->id(),
                    'favoriteable_id' => $data['favoriteable_id'],
                    'favoriteable_type' => 'expert_favorite',
                ]);
            }
        } catch (\Exception $e) {
            \Log::error('Error inserting into UserFavorite table: ' . $e->getMessage());
        }
    }

    public function render()
    {
        // $experts = User::with(['profile', 'educationDetails'])
        //     ->where('user_type', '=', 'expert');
        $experts = Profile::expert()->with('user', 'education');

        // $favoriteExperts = UserFavorite::where('user_id', auth()->id())->where('favoriteable_type', '=', 'expert_favorite')->get();

        $perPage = $this->limit;
        $skip = ($this->page - 1) * $perPage;

        if (!empty($this->filterArray['hourlyRate'])) {
            $hourlyRate = implode('-', $this->filterArray['hourlyRate']);
            $experts = $experts->whereHas('profile', function ($q) use ($hourlyRate) {
                $q->whereBetween('hourly_rate', explode('-', $hourlyRate));
            });
        }

        if (!empty($this->filterArray['location'])) {
            $experts = $experts->whereIn('country_id', $this->filterArray['location']);
        }

        if (isset($this->filterArray['expertsByArea']) && $this->filterArray['expertsByArea']) {
            $experts = $experts->where(function ($query) {
                foreach ($this->filterArray['expertsByArea'] as $id) {
                    $query->orWhereJsonContains('expertise_id', $id);
                }
            });
        }

        if (isset($this->filterArray['availableFor']) && $this->filterArray['availableFor']) {
            $experts = $experts->where(function ($query) {
                foreach ($this->filterArray['availableFor'] as $id) {
                    $query->orWhereJsonContains('available_for', $id);
                }
            });
        }

        if (isset($this->filterArray['search']) && $this->filterArray['search']) {
            $experts = $experts->where('name', 'like', '%' . $this->filterArray['search'] . '%');
        };

        if (!empty($this->filterArray['rating']) && $this->filterArray['rating']) {
            $experts = $experts->whereHas('profile', function ($q) {
                $q->where('rating', '<=', $this->filterArray['rating']);
            });
        };

        if (!empty($this->filterArray['categoriesByExpertise']) && $this->filterArray['categoriesByExpertise']) {
            $experts = $experts->whereHas('profile', function ($query) {
                $query->where(function ($subQuery) {
                    foreach ($this->filterArray['categoriesByExpertise'] as $id) {
                        $subQuery->orWhereJsonContains('skills', $id);
                    }
                });
            });
        }

        $this->totalPages = ceil($experts->count() / $this->limit);
        $this->totalExperts = $experts->count();

        $experts = $experts
            ->skip($skip)
            ->take($perPage)
            ->get();

        return view('livewire.experts.list-experts', compact('experts'));
    }
}
