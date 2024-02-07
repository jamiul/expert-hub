<?php

namespace App\Models;

use App\Enums\DisputeStatus;
use App\Enums\ProfileType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dispute extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'status' => DisputeStatus::class,
        'winner' => ProfileType::class,
    ];
}
