<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientTransaction extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        'transaction_id',
        'milestone_id',
        'user_id',
        'type',
        'description',
        'amount',
        'charge_type',
        'parent',
        'status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
