<?php

namespace App\Livewire;

use App\Enums\MessagingEnum;
use App\Events\NewMessageCreated;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\MessageRecipient;
use App\Models\Participant;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;
use Route;

class Messaging extends Component
{
    public $messageBody;
    public $currentConversation;
    public $currentConversationCreator;


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
        // Load conversation when user visit messaging interface without selecting any notification
        $participant = Participant::with('conversation.messages')->where('profile_id', Auth::user()->profile->id)->first();
        $this->currentConversation =  $participant?->conversation;

        // Load conversation when user visit messaging interface with selecting a new message notification        
        if (Route::current()->parameter('id')) {

            $recipientId = Route::current()->parameter('id');
            $newMessageRecipient = MessageRecipient::with('conversation')->where('id', $recipientId)->first();

            if ($newMessageRecipient?->recipient_profile_id !== Auth::user()->profile->id) {
                return;
            }

            $this->currentConversation = $newMessageRecipient->conversation; //only for selecting notification message conversation            
        }

        // Mark all unread message as read --either for first conversation (when user visit /messaging) or for selected conversation
        $unreadMessages = MessageRecipient::where('conversation_id', $this->currentConversation->id)
            ->where('recipient_profile_id', Auth::user()->profile->id)->whereNull('seen_at')->get();

        foreach ($unreadMessages as $unreadMessage) {
            $unreadMessage->update(['seen_at' => Carbon::now()]);
        }
    }

    public function sendMessage()
    {
        // ToDelete: Debugging purpose, delete when you are done
        // $data = $this->validate();

        // NewMessageCreated::dispatch($this->currentConversation);

        // return;
        // ToDelete: Debugging purpose, delete when you are done


        //TODO::Implement transaction
        // DB::transaction(function () { 


        $data = $this->validate();

        $message = Message::create([
            'conversation_id' => $this->currentConversation->id, 'sender_profile_id' => Auth::user()->profile->id,
            'content' => $data['messageBody'],
            // 'content' => 'sss',
        ]);

        $participants = $this->currentConversation->participants;

        foreach ($participants as $participant) {
            if (Auth::user()->profile->id !== $participant->profile_id) {
                MessageRecipient::create([
                    'conversation_id' => $this->currentConversation->id,
                    'message_id' => $message->id, 'recipient_profile_id' => $participant->profile_id
                ]);
            }
        }

        NewMessageCreated::dispatch($this->currentConversation);

        // }); //TODO::Implement transaction -- end

        $this->reset('messageBody');
    }

    public function getListeners()
    {
        return [
            "echo-private:messaging.{$this->currentConversation?->id},NewMessageCreated" => 'showNewMessage',
        ];
    }


    public function showNewMessage($event)
    {
        $messageRecipients = $this->currentConversation->messages->last()->messageRecipients;

        if ($this->currentConversation->id === $event['conversation_id']) {

            foreach ($messageRecipients as $messageRecipient) {
                if (is_null($messageRecipient->seen_at) && ($messageRecipient->recipient_profile_id === Auth::user()->profile->id)) {
                    $messageRecipient->update(['seen_at' => Carbon::now()]);
                }
            }
        }

        $this->currentConversation = Conversation::with('messages')->where('id', $this->currentConversation->id)->first();
    }


    public function getConversationMessages($conversationId)
    {
        $conversation = Conversation::with(['messages', 'messageRecipients'])->where('id', $conversationId)->first();

        $unreadMessages = $conversation->messageRecipients->where('recipient_profile_id', Auth::user()->profile->id)->whereNull('seen_at');

        foreach ($unreadMessages as $unreadMessage) {
            $unreadMessage->update(['seen_at' => Carbon::now()]);
        }

        $this->currentConversation = $conversation;
    }


    public function render()
    {
        $currentUsersConversations = Participant::with('conversation.messages')->where('profile_id', Auth::user()->profile->id)->get();
        return view('livewire.messaging', compact('currentUsersConversations'));
    }
}
