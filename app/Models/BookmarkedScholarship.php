<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Scholarships;

class BookmarkedScholarship extends Model
{
    public function scholarship(){
        return $this->belongsTo(Scholarship::class,);
    }
}
