<?php

namespace App\Livewire;

use App\Models\MessageRecipient;
use Illuminate\Support\Carbon;
use Livewire\Component;

class NewMessageCount extends Component
{
    public function markAsSeen($id)
    {
        MessageRecipient::where('id', $id)->update(['seen_at' => Carbon::now()]);
        $this->dispatch('show-new-message', $id);

        return redirect('messaging');
    }

    public function render()
    {
        $unreadMessages = MessageRecipient::with('message')->whereNull('seen_at')->where('recipient_profile_id', auth()->user()->profile->id)->get();
        $unreadMessageCount = MessageRecipient::whereNull('seen_at')->where('recipient_profile_id', '=', auth()->user()->profile->id)->count();
        
        return view('livewire.new-message-count', compact('unreadMessages', 'unreadMessageCount'));
    }
}
