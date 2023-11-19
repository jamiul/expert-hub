<?php

namespace App\Repositories;

use App\Models\Scholarship;
use Auth;

class ScholarshipRepository
{
    public Scholarship $model;

    /**
     * @param Scholarship $model
     */
    public function __construct(Scholarship $model)
    {
        $this->model = $model;
    }

    public function updateFavorite(string|int $id, bool $status)
    {
        $currentUser = Auth::user();
        if ($currentUser) {
            $training = $this->model->findOrFail($id);

            // Add new
            if ($status) {
                $training->favorites()->create([
                    'user_id' => $currentUser->id,
                ]);
            }
            // Remove exist
            else {
                $training->favorites()
                    ->where('user_id', $currentUser->id)
                    ->delete();
            }
        }

        return true;
    }
}
