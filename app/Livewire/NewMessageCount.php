<?php

namespace App\Livewire;

use App\Models\MessageRecipient;
use Illuminate\Support\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class NewMessageCount extends Component
{
    public function markAsSeen($recipientId)
    {        
        // $this->dispatch('show-new-message', recipientId: $recipientId); 

        // $newMessageRecipient = MessageRecipient::with('conversation')->where('id', $recipientId)->first();
        // $conversationId = $newMessageRecipient->conversation->id;
        // // dd($conversationId $newMessageRecipient->conversation->id);
        // $unreadMessages = MessageRecipient::where('conversation_id', $conversationId)->
        // where('recipient_profile_id', auth()->user()->profile->id)->whereNull('seen_at')->get();
        
        // foreach($unreadMessages as $unreadMessage){
        //     $unreadMessage->update(['seen_at' => Carbon::now()]);
        // }

        // return redirect('messaging');
    }

    // #[On('show-new-message-th')]
    // public function getNewMessages($recipientId)
    // {
    //     dd('from NewMessageCount:' .$recipientId);
    // }

    public function render()
    {
        $unreadMessages = MessageRecipient::with('message')->whereNull('seen_at')->where('recipient_profile_id', auth()->user()->profile->id)->get();
        // dd($unreadMessages);
        //TODO:: Handle this latter;
        // $unreadMessageCount = MessageRecipient::whereNull('seen_at')->where('recipient_profile_id', '=', auth()->user()->profile->id)->count();
        $unreadMessageCount = 0; 
        // dd($unreadMessageCount);
        return view('livewire.new-message-count', compact('unreadMessages', 'unreadMessageCount'));
    }
}
