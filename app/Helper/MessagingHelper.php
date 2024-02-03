<?php

use App\Models\Conversation;
use App\Models\Message;
use App\Models\MessageRecipient;
use App\Models\Participant;
use App\Models\Profile;

function createConversation(Profile $sender, Profile $receiver, $message, $reference=null)
{
    $participantProfileIDs = [$sender->id, $receiver->id]; //TODO:receive the second user from UI

    $conversation = Conversation::create([
        'creator_profile_id' => $sender->id, 
        'title' => $sender->user->first_name,
        'reference_id' => $reference ? $reference->id : null,
        'reference_type' => $reference ? $reference::class : null,
    ]);

    foreach ($participantProfileIDs as $participantProfileID) {
        Participant::create(['conversation_id' => $conversation->id, 'profile_id' => $participantProfileID]);
    }

    $message = Message::create([
        'conversation_id' => $conversation->id, 'sender_profile_id' => $sender->id,
        'content' => $message,
    ]);

    MessageRecipient::create(['conversation_id' => $conversation->id, 'message_id' => $message->id, 'recipient_profile_id' => $receiver->id]);

    return $conversation;
}