<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingPartner extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function university()
    {
        return $this->belongsTo(University::class, 'partner_id');
    }
}
