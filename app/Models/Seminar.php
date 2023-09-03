<?php

namespace App\Models;

use Carbon\Carbon;
use App\Scopes\SeminarScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seminar extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
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
        'status',
        'zoom_link',
        'created_by',
        'updated_by',
        'deleted_by',
        'project_category_id'
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::addGlobalScope(new SeminarScope);

    //     static::creating(function ($model) {
    //         if (!isRoleAdmin()) {
    //             $model->user_id = Auth::id();
    //         }
    //         $model->created_by = Auth::id();
    //         $model->updated_by = Auth::id();
    //         $model->application_datetime = Carbon::now()->format('Y-m-d H:i:s');
    //     });
    //     static::updating(function ($model) {
    //         $model->updated_by = Auth::id();
    //     });
    //     static::deleting(function ($model) {
    //         $model->deleted_by = Auth::id();
    //     });
    // }


    public function seminar_dates()
    {
        return $this->hasMany(SeminarDate::class);
    }

    public function seminar_instructors()
    {
        return $this->hasMany(SeminarInstructor::class);
    }
}
