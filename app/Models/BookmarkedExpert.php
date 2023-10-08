<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookmarkedExpert extends Model
{
    public function expert()
    {
        return $this->belongsTo(User::class, 'expert_user_id');
    }
}
