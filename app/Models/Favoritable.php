<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Favoritable
{
    public function favourites(): MorphMany
    {
        return $this->morphMany(Favourite::class, 'loveable');
    }

    public function favourite($redirectUrlIfNotAuthenticated)
    {
        if (!auth()->user()) {
            session(['url.intended' => $redirectUrlIfNotAuthenticated]);
            return redirect()->route('auth.login');
        }

        $attributes = ['profile_id' => auth()->user()->profile->id];
        $record = $this->favourites()->where($attributes)->first();
        if ($record) {
            $record->delete();
        } else {
            $this->favourites()->create($attributes);
        }
    }

    public function favourited()
    {
        if (!auth()->user()) {
            return null;
        }
        $attributes = ['profile_id' => auth()->user()->profile->id];
        return $this->favourites()->where($attributes)->exists();
    }
}