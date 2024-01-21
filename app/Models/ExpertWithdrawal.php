<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpertWithdrawal extends Model {
    use SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'source_type',
        'bank_id',
        'account_holder_name',
        'account_holder_type',
        'account_type',
        'bank_name',
        'country',
        'currency',
        'fingerprint',
        'last4',
        'routing_number',
        'is_default',
        'status'
    ];
}
