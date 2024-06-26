<?php

namespace App\Models;

use App\Enums\OptionGroupEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Option extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'group' => OptionGroupEnum::class,
    ];
}
