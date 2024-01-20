<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpertTransaction extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        'transaction_id',
        'milestone_id',
        'client_id',
        'expert_id',
        'type',
        'description',
        'amount',
        'charge_type',
        'parent',
        'status'
    ];

    public function client() {
        return $this->belongsTo(User::class, 'client_id', 'id');
    }
}
