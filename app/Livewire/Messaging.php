<?php

namespace App\Livewire;

use App\Enums\MessagingEnum;
use App\Events\NewMessageCreated;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\MessageRecipient;
use App\Models\Participant;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\File;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Route;

class Messaging extends Component
{
    use WithFileUploads;

    public $messageBody;
    public $currentConversation;
    // public $currentConversationCreator;
    // public $files = [];
    public $messageAttachment = [];
    public $messageAttachmentTemporaryUrls = [];


    public function rules()
    {
        return [
            'messageBody' => [
                'required',
                'string',
                'min:' . MessagingEnum::MessageBodyMin->value,
                'max:' . MessagingEnum::MessageBdyMax->value
            ],            
            'messageAttachment.*' => [                
                'nullable',
                'file',
                'mimes:jpg,bmp,png,pdf,xlsx,docx,doc',
                // File::types(['image', 'pdf','docx','xlsx']), 
                // File::image()->max(1 * 1024),
                'max:10240',                
            ],
        ];
    }

    public function messages()
    {
        return [
            'messageAttachment.*.mimes' => 'Supported file types are image,pdf,doc,xlsx',
            'messageAttachment.*.max' => 'File size should not be greater than 5MB',            
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
        
        // unset so that attached file get removed from message sending box    
        unset($this->messageAttachmentTemporaryUrls);   
        
        $data = $this->validate();
        // toast('warning', 'Testing', $this);
    //    dd($data);
        

        $message = Message::create([
            'conversation_id' => $this->currentConversation->id, 'sender_profile_id' => Auth::user()->profile->id,
            'content' => $data['messageBody'],
            // 'content' => 'sss',
        ]);
        
         // file upload start
         if ($this->messageAttachment) {
            foreach ($this->messageAttachment as $file) {
                $fileName = $file->getClientOriginalName() . '-' . time() . '.' . $file->extension();
                $message->addMedia($file->getRealPath())
                    ->usingName($fileName)
                    ->toMediaCollection();
            }

            // Update message that it has an attachment
            $message->update(['has_attachment' => true]);

            
        }        
        // file upload end

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

    // public function updated($propertyName)
    // {
    //    $data = $this->validateOnly($propertyName);
    //    dd($data);
    // }

    public function updatedMessageAttachment()
    {
        // dump($this->messageAttachment);
        
    //     $this->validate(['messageAttachment.*' => [                
    //         'nullable',
            
    //             File::types(['image', 'pdf','docx','xlsx'])
    //         , 
    //         'max:10240',
    //     ],
    // ]);
        
        
        $this->validateOnly('messageAttachment.*');
                
        foreach ($this->messageAttachment as $file)
        $this->messageAttachmentTemporaryUrls[] = $file->temporaryUrl();
        // dump($this->messageAttachmentUrls);
    }

   
    public function render()
    {
        $currentUsersConversations = Participant::with('conversation.messages')->where('profile_id', Auth::user()->profile->id)->get();
        return view('livewire.messaging', compact('currentUsersConversations'));
    }
}
