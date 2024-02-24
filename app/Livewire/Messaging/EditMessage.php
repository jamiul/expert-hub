<?php

namespace App\Livewire\Messaging;

use App\Enums\MessagingEnum;
use App\Livewire\Messaging;
use App\Models\Message;
use WireElements\Pro\Components\Modal\Modal;

class EditMessage extends Modal
{   
    public $message;
    public $updatedMessage;

    public function rules()
    {
        return [
            'updatedMessage' => [
                'required',
                'string',
                'min:' . MessagingEnum::MessageBodyMin->value,
                'max:' . MessagingEnum::MessageBdyMax->value
            ],
           
        ];
    }
    
    
    public function mount(Message $message)
    {                
        $this->message= $message;
        $this->updatedMessage = $message->content;        
    }

    public function updateMessage()
    {
        $data = $this->validate();

        if($this->message->sender_profile_id === auth()->user()->profile->id) {
            $this->message->update(['content' => $data['updatedMessage']]);
            $this->close();
            $this->dispatch('updateMessage')->to(Messaging::class);
        }        
    }

    

    public function render()
    {
        return view('livewire.messaging.edit-message');
    }
}
