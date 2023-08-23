<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seminar extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'seminar_date',
        'seminar_mode_id',
        'seminar_software_id',
        'software_description',
        'language_id',
        'organiser_certificate',
        'user_id',
        'instructor_descriptions',
        'slug',
        'course_objectives',
        'learning_outcomes',
        'teaching_learning_methods',
        'teaching_resources',
        'seat',
        'active',
    ];
}
