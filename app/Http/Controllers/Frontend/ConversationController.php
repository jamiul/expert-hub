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

    public function store($id)
    {        
        // if($id === Auth::user()->profile->id){
        //     dd('please chose a different user other than current user');
        // }
        // dd($id);
        
        DB::transaction(function () use ($id) {
            // dd($id);
            $authUser = Auth::user();
            $participantProfileIDs = [$authUser->profile->id, $id]; //TODO:receive the second user from UI

            $conversation = Conversation::create(['creator_profile_id' => $authUser->profile->id, 'title' => $authUser->first_name]);

            foreach ($participantProfileIDs as $participantProfileID) {
                Participant::create(['conversation_id' => $conversation->id, 'profile_id' => $participantProfileID]);
            }

            //TODO: receive `content` from UI
            $message = Message::create([
                'conversation_id' => $conversation->id, 'sender_profile_id' => $authUser->profile->id,
                'content' => "I want to discuss with you about a project"
            ]);

            MessageRecipient::create(['conversation_id' => $conversation->id, 'message_id' => $message->id, 'recipient_profile_id' => 2]); //TODO:take participant profile id dynamically
        });

        // ConversationCreated::dispatch();

        
    }
}
