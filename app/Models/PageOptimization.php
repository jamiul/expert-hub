<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageOptimization extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'page_id',
        'title',
        'keywords',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function sitePage(): HasOne
    {
        return $this->hasOne(SitePage::class, 'id', 'page_id');
    }
}
