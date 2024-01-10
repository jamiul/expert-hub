<?php

namespace App\Http\Controllers\Frontend;

use App\Events\ConversationCreated;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\Participant;
use Auth;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
                
        public function store()
        {   
            $conversationCreator = Auth::user();
            $participantProfileIDs = [$conversationCreator->profile->id, 2]; //TODO:receive the second user from UI

            $conversation = Conversation::create(['profile_id' => $conversationCreator->profile->id, 'title' => $conversationCreator->first_name]);
            
            foreach($participantProfileIDs as $participantProfileID) {
                Participant::create(['conversation_id' => $conversation->id, 'profile_id' => $participantProfileID]);
            }

            //TODO: receive `content` from UI
            Message::create(['conversation_id' => $conversation->id, 'profile_id' => $conversationCreator->profile->id, 
            'content' => "I want to discuss with you about a project"]);
            
            // ConversationCreated::dispatch();
        
            return $conversation;
        }

        public function fetch()
        {
            
        }
    
}
