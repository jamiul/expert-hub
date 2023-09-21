<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SitePage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'url',
        'urer_id',
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    public function descriptions(): HasMany
    {
        return $this->hasMany(PageOptimization::class, 'page_id', 'id');
    }
}
