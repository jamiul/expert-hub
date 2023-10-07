<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Frontend\Controller;
use App\Models\Chat;
use App\Models\ChatThread;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show user chats'])->only('admin_chat_index');
    }

    public function index(Request $request)
    {
        $bidder = User::where('user_name', $request->user_name)->first();
        $existingChatThread = ChatThread::where('sender_user_id', Auth::user()->id)->where('receiver_user_id', $bidder->id)->first();

        if ($existingChatThread == null) {
            $existingChatThread = new ChatThread;
            $existingChatThread->thread_code = $bidder->id . date('Ymd') . Auth::user()->id;
            $existingChatThread->sender_user_id = Auth::user()->id;
            $existingChatThread->receiver_user_id = $bidder->id;
            $existingChatThread->save();
        }

        return redirect()->route('all.messages');
    }

    public function chatIndex()
    {
        $chatThreads = ChatThread::where('sender_user_id', Auth::user()->id)->orWhere('receiver_user_id', Auth::user()->id)->get();

        return view('frontend.user.messages', compact('chatThreads'));
    }

    public function adminChatIndex(Request $request)
    {
        $sortSearch = null;
        $chatThreads = ChatThread::orderBy('created_at', 'desc');
        if ($request->has('search')) {
            $sortSearch = $request->search;
            $userIds = User::where(
                function ($user) use ($sortSearch) {
                    $user->where('name', 'like', '%' . $sortSearch . '%')->orWhere('email', 'like', '%' . $sortSearch . '%');
                }
            )->pluck('id')->toArray();
            $chatThreads = $chatThreads->where(
                function ($chatThread) use ($userIds) {
                    $chatThread->whereIn('sender_user_id', $userIds)->orWhereIn('receiver_user_id', $userIds);
                }
            );
            $chatThreads = $chatThreads->paginate(10);
        } else {
            $chatThreads = $chatThreads->paginate(12);
        }


        return view('admin.chats.index', compact('chatThreads', 'sortSearch'));
    }

    public function adminChatDetails($id)
    {
        $chatThread = ChatThread::findOrFail(decrypt($id));
        $chats = $chatThread->chats;

        return view('admin.chats.show', compact('chats', 'chatThread'));
    }

    public function chatView($id)
    {
        $chatThread = ChatThread::findOrFail($id);
        foreach ($chatThread->chats as $key => $chat) {
            if ($chat->sender_user_id != Auth::user()->id) {
                $chat->seen = 1;
                $chat->save();
            }
        }
        $chats = $chatThread->chats()->latest()->limit(20)->get();

        return view('frontend.partials.chat-messages', compact('chats', 'chatThread'));
    }

    public function getOldMessages(Request $request)
    {
        $chat = Chat::findOrFail($request->first_message_id);
        $chats = Chat::where('id', '<', $chat->id)->where('chat_thread_id', $chat->chat_thread_id)->latest()->limit(20)->get();
        if (count($chats) > 0) {
            return array('messages' => view('frontend.partials.chat-messages-part', compact('chats'))->render(),
                'first_message_id' => $chats->last()->id);
        } else {
            return array('messages' => "",
                'first_message_id' => 0);
        }
    }

    public function chatRefresh($id)
    {
        $chatThread = ChatThread::findOrFail($id);
        $chats = $chatThread->chats()->where('sender_user_id', '!=', Auth::user()->id)->where('seen', 0)->get();
        foreach ($chats as $key => $value) {
            $value->seen = 1;
            $value->save();
        }

        return array('messages' => view('frontend.partials.chat-messages-left-single', compact('chats'))->render(),
            'count' => count($chats));
    }


    public function chatReply(Request $request)
    {
        $chat = new Chat;
        $chat->chat_thread_id = $request->chat_thread_id;
        $chat->sender_user_id = Auth::user()->id;
        $chat->message = $request->message;
        if ($request->attachment != null) {
            $chat->attachment = json_encode(explode(',', $request->attachment));
        }
        $chat->save();
        return view('frontend.partials.chat-messages-right-single', compact('chat'));
    }

    public function interviewStatus(Request $request)
    {
        $chatThread = ChatThread::findOrFail($request->chat_thread_id);
        if ($chatThread->interview == 1) {
            $chatThread->interview = 0;
        } else {
            $chatThread->interview = 1;
        }
        if ($chatThread->save()) {
            return 1;
        } else {
            return 0;
        }
    }

    public function blockStatus(Request $request)
    {
        $chatThread = ChatThread::findOrFail($request->chat_thread_id);
        if ($chatThread->active == 1) {
            $chatThread->active = 0;
        } else {
            $chatThread->active = 1;
        }
        if ($chatThread->save()) {
            return 1;
        } else {
            return 0;
        }
    }
}
