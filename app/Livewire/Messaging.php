<?php

namespace App\Livewire;

use App\Models\Participant;
use Auth;
use Livewire\Component;

class Messaging extends Component
{
    public function getConversationMessages($conversationId)
    {
        dd($conversationId);
    }

    public function render()
    {
        $currentUsersConversations = Participant::with('conversation.messages')->where('profile_id', Auth::user()->profile->id)->get();
        
        return view('livewire.messaging', compact('currentUsersConversations'));
    }
}