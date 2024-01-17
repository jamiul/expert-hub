<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function messageRecipients()
    {
        return $this->hasMany(MessageRecipient::class);
    }

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
}
