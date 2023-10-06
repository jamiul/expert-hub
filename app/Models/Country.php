<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(
            'alphabetical',
            function (Builder $builder) {
                $builder->orderBy('name', 'asc');
            }
        );
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
