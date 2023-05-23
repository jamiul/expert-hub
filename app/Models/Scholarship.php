<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scholarship extends Model
{
    use SoftDeletes;

    public function category() {
        return $this->belongsTo(ScholarshipCategory::class, 'category_id');
    }
    public function level() {
        return $this->belongsTo(ScholarshipLevel::class, 'level_id');
    }
    public function university() {
        return $this->belongsTo(ScholarshipUniversity::class, 'university_id');
    }

}
