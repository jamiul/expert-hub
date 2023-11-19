<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{
    protected $fillable = [
        'user_id',
        'favoriteable_id',
        'favoriteable_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the owning favoriteable models.
     */
    public function favoriteable()
    {
        return $this->morphTo();
    }
}
