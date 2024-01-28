<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ExpertKYC extends Model implements HasMedia 
{
    use SoftDeletes;
    use InteractsWithMedia;

    protected $table = 'expert_kyc';

    protected $guarded = [];

}
