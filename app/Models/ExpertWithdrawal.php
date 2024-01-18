<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpertWithdrawal extends Model {
    use SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'type',
        'country',
        'account_holder_type',
        'account_holder_name',
        'account_type',
        'routing_number',
        'account_number',
        'currency',
        'default',
        'status'
    ];
}
