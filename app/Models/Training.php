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
        'project_category_id',
        'partner_institute',
        'country_id',
    ];

    public function trainingDates()
    {
        return $this->hasMany(TrainingDate::class);
    }

    /**
     * Wrong way
     */
    public function trainingInstructors()
    {
        return $this->hasMany(TrainingInstructor::class);
    }

    /**
     * Right way
     */
    public function instructors()
    {
        return $this->belongsToMany(User::class, 'training_instructors');
    }

    public function trainingMode()
    {
        return $this->belongsTo(TrainingMode::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function projectCategory()
    {
        return $this->belongsTo(ProjectCategory::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    /**
     * Get all of the training's favorites.
     */
    public function favorites()
    {
        return $this->morphMany(UserFavorite::class, 'favoriteable');
    }

    /**
     * Get all of the training's favorites of user.
     */
    public function userFavorite()
    {
        return $this->morphOne(UserFavorite::class, 'favoriteable')
            ->where('user_id', auth()->id());
    }
}
