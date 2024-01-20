<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpertPayout extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'payout_id',
        'amount',
        'arrival_date',
        'balance_transaction',
        'currency',
        'description',
        'destination_id',
        'method',
        'type',
        'status'
    ];
}
