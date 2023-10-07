<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'training_mode_id',
        'training_software_id',
        'software_description',
        'language_id',
        'organiser_certificate',
        'user_id',
        'instructor_descriptions',
        'attachment',
        'slug',
        'course_objectives',
        'learning_outcomes',
        'teaching_learning_methods',
        'teaching_resources',
        'seat',
        'status',
        'zoom_link',
        'created_by',
        'updated_by',
        'deleted_by',
        'project_category_id'
    ];

    public function trainingDates()
    {
        return $this->hasMany(TrainingDate::class);
    }

    public function trainingInstructors()
    {
        return $this->hasMany(TrainingInstructor::class);
    }
}
