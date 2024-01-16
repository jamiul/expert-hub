<?php

namespace App\Http\Controllers\Frontend;

use App\Events\ConversationCreated;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\MessageRecipient;
use App\Models\Participant;
use Auth;
use Illuminate\Http\Request;

class ConversationController extends Controller
{


    public function index()
    {
        // $currentUsersConversations = Participant::with('conversation.messages')->where('profile_id', Auth::user()->profile->id)->get();
        
        return view('frontend.messaging.index');
    }

    public function store()
    {
        $conversationCreator = Auth::user();
        $participantProfileIDs = [$conversationCreator->profile->id, 2]; //TODO:receive the second user from UI

        $conversation = Conversation::create(['creator_profile_id' => $conversationCreator->profile->id, 'title' => $conversationCreator->first_name]);

        foreach ($participantProfileIDs as $participantProfileID) {
            Participant::create(['conversation_id' => $conversation->id, 'profile_id' => $participantProfileID]);
        }

        //TODO: receive `content` from UI
        $message = Message::create([
            'conversation_id' => $conversation->id, 'creator_profile_id' => $conversationCreator->profile->id,
            'content' => "I want to discuss with you about a project"
        ]);

        MessageRecipient::create(['message_id' => $message->id, 'recipient_profile_id' => 2]); //TODO:take participant profile id dynamically
        // ConversationCreated::dispatch();

        return $conversation;
    }
}
