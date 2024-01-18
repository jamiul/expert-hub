<?php

namespace App\Livewire;

use App\Enums\MessagingEnum;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\MessageRecipient;
use App\Models\Participant;
use Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class Messaging extends Component
{
    public $conversationMessages;
    public $messageBody;
    public $currentConversation;

    public function rules()
    {
        return [
            'messageBody' => [
                'required',
                'string',
                'min:' . MessagingEnum::MessageBodyMin->value,
                'max:' . MessagingEnum::MessageBdyMax->value
            ],

        ];
    }

    public function mount()
    {
        //When i click new message i can get unread_message_id->message_id->conversation
        //

        // $newMessageConversation = MessageRecipient::with('message.conversation')->where('id', 3)->first();
        // $this->conversationMessages = $newMessageConversation->message->conversation->messages;


        $participant = Participant::with('conversation.messages')->where('profile_id', Auth::user()->profile->id)->first();
        // $this->conversationMessages = $participant?->conversation;
        $this->currentConversation =  $participant?->conversation;
        // dd($this->conversationMessages);

        //the new message that i will write for clicking a conversation


    }

    public function sendMessage()
    {
        DB::transaction(function () {
            $data = $this->validate();

            $message = Message::create([
                'conversation_id' => $this->currentConversation->id, 'sender_profile_id' => Auth::user()->profile->id,
                'content' => $data['messageBody'],
            ]);

            $participants = $this->currentConversation->participants;

            foreach ($participants as $participant) {
                if (Auth::user()->profile->id !== $participant->profile_id) {
                    MessageRecipient::create(['message_id' => $message->id, 'recipient_profile_id' => $participant->profile_id]);
                }
            }
        });


        $this->reset('messageBody');
    }

    public function getConversationMessages($conversationId)
    {
        // dd($conversationId);
        $this->conversationMessages = Conversation::with('messages')->where('id', $conversationId)->first();
        $this->currentConversation = $this->conversationMessages;
    }

    #[On('show-new-message')]
    public function getNewMessages($recipientId)
    {
        // dd('getnewMessage:'.$this->currentConversation->id); //TODO: why i am getting $this->currentConversation->id here?
        $newMessageRecipient = MessageRecipient::with('message.conversation')->where('id', $recipientId)->first();
        // $this->conversationMessages = $newMessageConversation->message->conversation->messages;        
        $this->conversationMessages = $newMessageRecipient->message->conversation;
    }

    public function render()
    {
        $currentUsersConversations = Participant::with('conversation.messages')->where('profile_id', Auth::user()->profile->id)->get();

        return view('livewire.messaging', compact('currentUsersConversations'));
    }
}
