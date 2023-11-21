<?php

namespace App\Repositories;

use App\Models\Training;
use Auth;

class TrainingRepository
{
    public Training $model;

    /**
     * @param Training $model
     */
    public function __construct(Training $model)
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
