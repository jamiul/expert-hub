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
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Route;

class Messaging extends Component
{
    use WithFileUploads, WithPagination;

    public $messageBody;
    public $currentConversation;
    public $currentUsersConversations;
    // public $files = [];
    public $messageAttachment = [];
    public $messageAttachmentTemporaryUrls = [];
    public $filtersArray;
    #[Url()]
    public $search = null;

    public $filterType = null;


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
                return back();
            }

            $this->currentConversation = $newMessageRecipient->conversation; //only for selecting notification message conversation     
        }

        // Nel test start 
        if (Route::current()->getName() == 'messaging.conversation') {

            $conversationId = Route::current()->parameter('conversation_id');
            // dd($conversationId);

            $conversation = Conversation::with(['messages', 'messageRecipients'])->where('id', $conversationId)->first();

            $unreadMessages = $conversation->messageRecipients->where('recipient_profile_id', Auth::user()->profile->id)->whereNull('seen_at');

            foreach ($unreadMessages as $unreadMessage) {
                $unreadMessage->update(['seen_at' => Carbon::now()]);
            }

            $this->currentConversation = $conversation;

            // blade file will receive this - to get aware about new selected conversation
            // $this->dispatch('conversationSelected', $this->currentConversation->id);
        }
        // Nel test end

        // Mark all unread message as read --either for first conversation (when user visit /messaging) or for selected conversation
        if ($this->currentConversation) {
            $unreadMessages = MessageRecipient::where('conversation_id', $this->currentConversation->id)
                ->where('recipient_profile_id', Auth::user()->profile->id)->whereNull('seen_at')->get();

            foreach ($unreadMessages as $unreadMessage) {
                $unreadMessage->update(['seen_at' => Carbon::now()]);
            }
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

        $message = Message::create([
            'conversation_id' => $this->currentConversation->id, 'sender_profile_id' => Auth::user()->profile->id,
            'content' => $data['messageBody'],
            
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
        // Generating following array item for multiple conversation
        // "echo-private:messaging.{$this->currentConversation?->id},NewMessageCreated" => 'showNewMessage',
        $conversationMessageListeners = [];

        $participants = Auth::user()->profile->participants;
        foreach ($participants as $participant) {
            $conversationMessageListeners["echo-private:messaging.{$participant->conversation_id},NewMessageCreated"] =  'showNewMessage';
        }

        return $conversationMessageListeners;

        // return [
        //     "echo-private:messaging.{$this->currentConversation?->id},NewMessageCreated" => 'showNewMessage',
        //     // "echo-private:messaging.1,NewMessageCreated" => 'showNewMessage',
        //     // "echo-private:messaging.2,NewMessageCreated" => 'showNewMessage',
        //     // "echo-private:messagindd,NewMessageCreatedooo" => 'showNewMessagepppp',
        //     // "echo-private:messaginga, NewMessageCreated" => 'showNewMessage',
        //     // "echo-private:messaging, NewMessageCreated" => 'showNewMessage',
        //     // "echo-private:messaging.{$this->currentConversation?->id},.client-typo" => "topi",
        //     // "echo-private:message-typing, client-typo" => "topi",
        // ];
    }

    // public function getListeners()
    // {


    //     return [

    //         "echo-private:message-typing.{$this->currentConversation?->id}, .client-typo" => "topi",
    //     ];
    // }

    // #[On('echo-private:message-typing.{$this->currentConversation?->id}, .client-typing')]
    // #[On('echo-private:message-typing, client-typing')]
    // #[On('post-created')]
    // public function topi()
    // {
    //     dd('typing');
    // }


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


    /**
     * TODO:
     * For the time being this method is shortened and rest of the code taken into mount
     * 
     * */
    // public function getConversationMessages($conversationId)
    // {
    //     $conversation = Conversation::with(['messages', 'messageRecipients'])->where('id', $conversationId)->first();

    //     $unreadMessages = $conversation->messageRecipients->where('recipient_profile_id', Auth::user()->profile->id)->whereNull('seen_at');

    //     foreach ($unreadMessages as $unreadMessage) {
    //         $unreadMessage->update(['seen_at' => Carbon::now()]);
    //     }

    //     $this->currentConversation = $conversation;

    //     session(['sessionConversationId' => $this->currentConversation->id]);

    //     // blade file will receive this - to get aware about new selected conversation
    //     $this->dispatch('conversationSelected', $this->currentConversation->id); 
    // }

    public function getConversationMessages($conversationId)
    {
        return redirect()->route('messaging.conversation', $conversationId);
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

        // Setting to initial state to remove any previously added item - 
        // otherwise previously added item will also show as attachment in message box although they are not
        $this->messageAttachmentTemporaryUrls = [];

        foreach ($this->messageAttachment as $file)
            $this->messageAttachmentTemporaryUrls[] = $file->temporaryUrl();
        // dump($this->messageAttachmentUrls);
    }

    #[On('updateMessage')] 
    public function refreshCurrentConversation()
    {
        $this->currentConversation = $this->currentConversation;       
    }

    public function filter($filterType = null)
    {
        $this->filterType = $filterType;

        if ($filterType == 'all') {
            $this->resetFilter();
            return;
        }

        $filters = [
            'search' => $this->search,
            'filterType' => $this->filterType,

        ];

        $this->doFilter($filters);
    }

    public function resetFilter()
    {
        $this->search = '';
        $this->filterType = null;

        $this->filter();
    }

    public function doFilter($filters)
    {
        $this->filtersArray = $filters;
        $this->resetPage();
    }

    public function updatedSearch()
    {
        $this->filter();
    }


    public function render()
    {
        $this->currentUsersConversations = Participant::with(['conversation', 'conversation.messageRecipients', 'profile.user'])
            ->where('profile_id', Auth::user()->profile->id);

        if (isset($this->filtersArray['search']) && $this->filtersArray['search']) {

            $this->currentUsersConversations = $this->currentUsersConversations->whereHas('conversation', function ($query) {
                $query->whereHas('participants', function ($query) {
                    $query->whereHas('profile', function ($query) {
                        $query->whereHas('user', function ($query) {
                            $query->where('title', 'like', '%' . $this->filtersArray['search'] . '%')->orWhere('first_name', 'like', '%' . $this->filtersArray['search'] . '%')->orWhere('last_name', 'like', '%' . $this->filtersArray['search'] . '%');
                        });
                    });
                });
            });
        }


        if (isset($this->filtersArray['filterType']) && $this->filtersArray['filterType'] == 'unread') {

            $this->currentUsersConversations = $this->currentUsersConversations->whereHas('conversation', function ($query) {
                $query->whereHas('messages', function ($query) {
                    $query->whereHas('messageRecipients', function ($query) {

                        $query->where('recipient_profile_id', Auth::user()->profile->id)->whereNull('seen_at');
                    });
                });
            });
        }

        $this->currentUsersConversations = $this->currentUsersConversations->latest()->get();

        return view('livewire.messaging');
    }
}
