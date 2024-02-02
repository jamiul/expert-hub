<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Message extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;

    protected $guarded = [];

    public function messageRecipients()
    {
        return $this->hasMany(MessageRecipient::class);
    }

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'sender_profile_id');
    }
}
