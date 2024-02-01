<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Milestone extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function eoi() {
        return $this->belongsTo(Eoi::class);
    }

    public function contract() {
        return $this->belongsTo(Contract::class);
    }
}
