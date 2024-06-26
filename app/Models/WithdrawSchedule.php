<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class WithdrawSchedule extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo( User::class );
    }

    public function expert_withdrawal(): BelongsTo
    {
        return $this->belongsTo( ExpertWithdrawal::class );
    }
}
