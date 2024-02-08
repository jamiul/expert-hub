<?php

namespace App\Models;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientTransaction extends Model
{
    use SoftDeletes, Searchable;

    protected $guarded = [];

    public function expert() {
        return $this->belongsTo(User::class, 'expert_id', 'id');
    }

    public function client() {
        return $this->belongsTo(User::class, 'client_id', 'id');
    }

}
