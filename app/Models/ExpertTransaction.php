<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpertTransaction extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function client() {
        return $this->belongsTo(User::class, 'client_id', 'id');
    }
}
