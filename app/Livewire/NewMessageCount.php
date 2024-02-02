<?php

namespace App\Livewire;

use App\Models\MessageRecipient;
use Livewire\Component;

class NewMessageCount extends Component
{
    public function markAsSeen($recipientId)
    {           
        return redirect()->route('messaging', $recipientId);
    }


    public function render()
    {
        $unreadMessages = MessageRecipient::with('message')->whereNull('seen_at')->where('recipient_profile_id', auth()->user()->profile->id)->latest()->get();
        
        $unreadMessageCount = MessageRecipient::whereNull('seen_at')->where('recipient_profile_id', '=', auth()->user()->profile->id)->count();
        
        return view('livewire.new-message-count', compact('unreadMessages', 'unreadMessageCount'));
    }
}
