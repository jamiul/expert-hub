<?php

namespace App\Http\Controllers\Frontend;

use App\Events\ConversationCreated;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\MessageRecipient;
use App\Models\Participant;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConversationController extends Controller
{


    public function index()
    {        
        return view('frontend.messaging.index');
    }

    public function showConversation($conversationId)
    {        
        $conversationParticipants =  Conversation::where('id', $conversationId)->firstOrFail()->participants;
        
        foreach($conversationParticipants as $participant) {
           if(Auth::user()->profile->id == $participant->profile_id){
            return view('frontend.messaging.index');
           } 
        }
        
        return back();
    }
    

    public function store($id)
    {        
        
        if($id == Auth::user()->profile->id){
            return back();
        }
        
        // dump($id);
        // dd(Auth::user()->profile->id);
        
        DB::transaction(function () use ($id) {
            // dd($id);
            $authUser = Auth::user();
            $participantProfileIDs = [$authUser->profile->id, $id]; //TODO:receive the second user from UI
            
            $conversation = Conversation::create(['creator_profile_id' => $authUser->profile->id, 'title' => $authUser->name]);

            foreach ($participantProfileIDs as $participantProfileID) {
                Participant::create(['conversation_id' => $conversation->id, 'profile_id' => $participantProfileID]);
            }

            //TODO: receive `content` from UI
            $message = Message::create([
                'conversation_id' => $conversation->id, 'sender_profile_id' => $authUser->profile->id,
                'content' => "I want to discuss with you about a project"
            ]);

            MessageRecipient::create(['conversation_id' => $conversation->id, 'message_id' => $message->id, 'recipient_profile_id' => $id]); //TODO:take participant profile id dynamically
        });

        // ConversationCreated::dispatch();

        
    }
}
