<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
                
        public function store()
        {

            $conversation = Conversation::create(['title' => 'Neloy', 'profile_id' => 1]);
        
            // $users = collect(request('users'));
            // $users->push(auth()->user()->id);
        
            // $group->users()->attach($users);
        
            return $conversation;
        }
    
}
