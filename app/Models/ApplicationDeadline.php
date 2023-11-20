<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplicationDeadline extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'scholarship_id',
        'start_date',
        'end_date',
    ];

    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class, 'scholarship_id');
    }
}
