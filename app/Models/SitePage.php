<?php

namespace App\Models;

use Carbon\Carbon;
use App\Scopes\SeminarScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SitePage extends Model
{
    use HasFactory, SoftDeletes;
// public $timestamps=false;
    protected $fillable = [
        'title',
        'url',
        'urer_id',
        'created_at',
        'updated_at',
        'deleted_at',
        
    ];
    public function description()
    {
        return $this->hasMany(PageOptimization::class , 's_page_id','id');
    }

}
