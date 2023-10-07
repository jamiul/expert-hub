<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Scholarships;

class BookmarkedService extends Model
{
    public function expert()
    {
        return $this->belongsTo(Service::class);
    }
}
