<?php

namespace App\Models;

use Carbon\Carbon;
use App\Scopes\SeminarScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageOptimization extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        's_page_id',
        'title',
        'keywords',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',
        
    ];
    public function site_pages()
    {
        return $this->hasOne(SitePage::class , 'id','s_page_id');
    }




   
}
