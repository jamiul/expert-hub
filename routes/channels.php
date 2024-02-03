<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

use App\Models\Conversation;

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


Broadcast::channel('messaging.{conversationId}', function ($user, $conversationId) {
    $conversationParticipants = Conversation::with('participants')->where('id', $conversationId)->first()->participants;

    foreach ($conversationParticipants as $participant) {
        if ($user->profile->id === $participant->profile_id) {
            return true;
        }
    }
    
    return false;
});


Broadcast::channel('message-typing.{conversationId}', function ($user, $conversationId) {
    
    $conversationParticipants = Conversation::with('participants')->where('id', $conversationId)->first()->participants;

    foreach ($conversationParticipants as $participant) {
        if ($user->profile->id === $participant->profile_id) {            
            return true;
        }
    }
    
    return false;
  });

Broadcast::channel('online-status', function ($user) {   
        
    return $user->profile;
  });
  
