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
    public function country() {
        return $this->belongsTo(ScholarshipCountry::class, 'country_id');
    }
    public function whoCanApply() {
        return $this->belongsTo(ScholarshipWhoCanApply::class, 'whoCanApply_id');
    }
    public function fieldStudy() {
        return $this->belongsTo(ScholarshipFieldStudy::class, 'fieldStudy_id');
    }
    public function qualification() {
        return $this->belongsTo(ScholarshipQualification::class, 'qualification_id');
    }
    public function city() {
        return $this->belongsTo(ScholarshipCity::class, 'city_id');
    }

}
