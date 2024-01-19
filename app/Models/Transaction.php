<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        'reference_id',
        'reference_type',
        'payment_intent_id',
        'object',
        'amount',
        'amount_capturable',
        'amount_received',
        'application_fee_amount',
        'currency',
        'customer_id',
        'description',
        'latest_charge_id',
        'on_behalf_of',
        'payment_method',
        'payment_method_types',
        'transfer_group',
        'metadata',
        'created_time',
        'canceled_at',
        'cancellation_reason',
        'status',
        'livemode'
    ];
}
