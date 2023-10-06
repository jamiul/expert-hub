<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function user_roles()
    {
        return $this->hasMany(UserRole::class);
    }
}
