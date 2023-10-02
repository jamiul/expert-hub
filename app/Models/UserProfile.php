<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use SoftDeletes;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function national()
    {
        return $this->hasOne(Country::class, 'nationality', 'id');
    }

    public function specialistAt()
    {
        return $this->belongsTo(ConsultantCategory::class, 'specialist')->withTrashed();
    }
}
