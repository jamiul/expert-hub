<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conversation extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function messageRecipients()
    {
        return $this->hasMany(MessageRecipient::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'creator_profile_id');
    }

    public function project()
    {
        if($this->reference_id && $this->reference_type == Project::class){
            return Project::find($this->reference_id);
        }
        return null;
    }
}
