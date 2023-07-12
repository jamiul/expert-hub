<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Scholarships;

class BookmarkedService extends Model
{
    public function freelancer(){
        return $this->belongsTo(Service::class);
    }
}
