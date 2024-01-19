<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'fingerprint',
        'stripe_payment_id',

        'funding',
        'brand',
        'exp_month',
        'exp_year',
        'last4',

        'address_line1_check',
        'address_postal_code_check',
        'three_d_secure_usage',
        'cvc_check',

        'line1',
        'line2',
        'city',
        'postal_code',
        'state',
        'country',

        'name',
        'email',
        'phone',

        'wallet',

        'is_default',
        'livemode',
        'status'
    ];
}
