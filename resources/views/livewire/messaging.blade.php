<div class="container-fluid">
    <div class="chatbox-wrapper">
        <div class="chatbox-contact-area">
            <div class="chatbox-contact-wrapper">
                <div class="chatbox-contact-filter-area">
                    <h5>Chat</h5>
                    <div class="chatbox-contact-filter-box">
                        <form action="">
                            <x-form.search label="" wire:model.live.debounce="search" placeholder="Search people, group etc" />
                        </form>
                        <div class="dropdown">
                            <button class="icon-btn" data-bs-toggle="dropdown" aria-expanded="true">
                                <x-icon.filter />
                            </button>


                            <ul class="dropdown-menu dropdown-show edux-dropdown-show">
                                <li>
                                    <a class="dropdown-item dropdown-heading {{$filterType == 'all' ?  'active' : ''}}" wire:click="filter('all')" href="#">
                                        <span>
                                            <x-icon.check />
                                        </span>
                                        <span>All</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item dropdown-heading {{$filterType == 'unread' ?  'active' : ''}}" wire:click="filter('unread')"  href="#"> <span>
                                            <x-icon.chat />
                                        </span> <span>Unread</span> </a>
                                </li>

                                <li>
                                    <a class="dropdown-item dropdown-heading " href="#">
                                        <span>
                                            <x-icon.heart />
                                        </span> <span>Favourites</span> </a>
                                </li>

                                <li>
                                    <a class="dropdown-item dropdown-heading">
                                        <span>
                                            <x-icon.archive />
                                        </span>
                                        <span>Archive</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="chatbox-contact-list">
                    @if ($currentUsersConversations)

                    @forelse($currentUsersConversations as $conversation)
                    
                    @php $unreadMessageCount = $conversation->conversation->messageRecipients->where('recipient_profile_id', Auth::user()->profile->id)->whereNull('seen_at')->count() @endphp
                    
                    <div class="chatbox-contact-person  {{ $conversation->conversation->id == $currentConversation->id ? 'user-selected' : '' }}  profile-{{ $conversation->conversation->participants->where('profile_id', '!=', Auth::user()->profile->id)->first()->profile->id}}-status"  wire:key="{{ $conversation->id }}" wire:click="getConversationMessages('{{ $conversation->conversation->id }}')" onclick="toggleClasses('.chatbox-wrapper', 'chatbox-mobile-view-activated')" wire:ignore>
                        <div class="chatbox-contact-thumb">
                            <img class="rounded-circle" src="{{$conversation->conversation->participants->where('profile_id', '!=', Auth::user()->profile->id)->first()->profile->picture}}" alt="avatar">
                        </div>
                        <div class="chatbox-contact-info">
                            <div class="chatbox-contact-info-header">
                                <h6>{{$conversation->conversation->participants->where('profile_id', '!=', Auth::user()->profile->id)->first()->profile->user->full_name}}</h6>
                                <time>{{ Carbon\Carbon::parse($conversation->conversation->messages->last()->created_at)->diffForHumans() }}</time>
                            </div>
                            <div class="last-message-hints">
                                <p>{{$conversation->conversation->messages->last()->content}}</p>
                            </div>
                            <span class="{{$unreadMessageCount > 0 ? 'unread-message-count' : '' }}  ">{{ $unreadMessageCount > 0 ? $unreadMessageCount : ''  }}</span>
                        </div>
                    </div>

                    @empty

                    @endforelse

                    @endif

                    <!-- <div class="chatbox-contact-person user-away">
                            <div class="chatbox-contact-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar1.png') }}" alt="avatar">
                            </div>
                            <div class="chatbox-contact-info">
                                <div class="chatbox-contact-info-header">
                                    <h6>Black, Marvin</h6>
                                    <time>Sunday</time>
                                </div>
                                <div class="last-message-hints">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci alias at
                                        culpa</p>
                                </div>
                                <span class="unread-message-count">2</span>
                            </div>
                        </div> -->

                    <!-- <div class="chatbox-contact-person">
                            <div class="chatbox-contact-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar1.png') }}" alt="avatar">
                            </div>
                            <div class="chatbox-contact-info">
                                <div class="chatbox-contact-info-header">
                                    <h6>Black, Marvin</h6>
                                    <time>12/11/2023</time>
                                </div>
                                <div class="last-message-hints">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci alias at
                                        culpa</p>
                                </div>
                                <span class="unread-message-count">2</span>
                            </div>
                        </div> -->

                    <!-- <div class="chatbox-contact-person">
                            <div class="chatbox-contact-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar1.png') }}" alt="avatar">
                            </div>
                            <div class="chatbox-contact-info">
                                <div class="chatbox-contact-info-header">
                                    <h6>Black, Marvin</h6>
                                    <time>7: 30 am</time>
                                </div>
                                <div class="last-message-hints">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci alias at
                                        culpa</p>
                                </div>
                                <span class="unread-message-count">2</span>
                            </div>
                        </div> -->
                    <!-- <div class="chatbox-contact-person">
                            <div class="chatbox-contact-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar1.png') }}" alt="avatar">
                            </div>
                            <div class="chatbox-contact-info">
                                <div class="chatbox-contact-info-header">
                                    <h6>Black, Marvin</h6>
                                    <time>7: 30 am</time>
                                </div>
                                <div class="last-message-hints">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci alias at
                                        culpa</p>
                                </div>
                                <span class="unread-message-count">2</span>
                            </div>
                        </div> -->

                    <!-- <div class="chatbox-contact-person">
                            <div class="chatbox-contact-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar1.png') }}" alt="avatar">
                            </div>
                            <div class="chatbox-contact-info">
                                <div class="chatbox-contact-info-header">
                                    <h6>Black, Marvin</h6>
                                    <time>7: 30 am</time>
                                </div>
                                <div class="last-message-hints">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci alias at
                                        culpa</p>
                                </div>
                                <span class="unread-message-count">2</span>
                            </div>
                        </div> -->

                    <!-- <div class="chatbox-contact-person">
                            <div class="chatbox-contact-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar1.png') }}" alt="avatar">
                            </div>
                            <div class="chatbox-contact-info">
                                <div class="chatbox-contact-info-header">
                                    <h6>Black, Marvin</h6>
                                    <time>7: 30 am</time>
                                </div>
                                <div class="last-message-hints">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci alias at
                                        culpa</p>
                                </div>
                                <span class="unread-message-count">2</span>
                            </div>
                        </div> -->

                    <!-- <div class="chatbox-contact-person">
                            <div class="chatbox-contact-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar1.png') }}" alt="avatar">
                            </div>
                            <div class="chatbox-contact-info">
                                <div class="chatbox-contact-info-header">
                                    <h6>Black, Marvin</h6>
                                    <time>7: 30 am</time>
                                </div>
                                <div class="last-message-hints">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci alias at
                                        culpa</p>
                                </div>
                                <span class="unread-message-count">2</span>
                            </div>
                        </div> -->

                    <!-- <div class="chatbox-contact-person">
                            <div class="chatbox-contact-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar1.png') }}" alt="avatar">
                            </div>
                            <div class="chatbox-contact-info">
                                <div class="chatbox-contact-info-header">
                                    <h6>Black, Marvin</h6>
                                    <time>7: 30 am</time>
                                </div>
                                <div class="last-message-hints">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci alias at
                                        culpa</p>
                                </div>
                                <span class="unread-message-count">2</span>
                            </div>
                        </div> -->

                </div>
            </div>
        </div>

        <div class="chatbox-content-area chatbox-conversation-summary-show">
            <div class="chatbox-recipient-area">
                <div class="chatbox-recipient-inner">
                    <div class="chatbox-mobile-view-controller">
                        <button class="icon-btn" onclick="removeClass('.chatbox-wrapper', 'chatbox-mobile-view-activated')">
                            <x-icon.arrow-back />
                        </button>
                    </div>

                    @if($currentConversation)
                    <div class="chatbox-recipient-thumb">
                        <img class="rounded-circle" src="{{$currentConversation?->participants->where('profile_id', '!=', Auth::user()->profile->id)->first()->profile->picture}}" alt="avatar">
                    </div>


                    <div class="chatbox-recipient-info">
                        <h3>{{$currentConversation?->participants->where('profile_id', '!=', Auth::user()->profile->id)->first()->profile->user->full_name}}</h3>
                        <p class="chatbox-recipient-time">5:32 AM GMT+6 | Australia </p>
                        <p class="chatbox-recipient-expertise">Curriculum Expert</p>
                    </div>
                    @endif

                    <div class="advance-chat-options">
                        <button class="icon-btn">
                            <x-icon.call />
                        </button>

                        <button class="icon-btn">
                            <x-icon.video-call />
                        </button>

                        <button class="icon-btn conversation-summary-trigger" onclick="toggleClasses('.chatbox-content-area', 'chatbox-conversation-summary-show')">
                            <x-icon.info />
                        </button>
                    </div>
                </div>
            </div>
            <div class="chatbox-conversation-area">
                <div class="chatbox-conversation-inner">
                    <div class="chatbox-message-list">
                        {{-- dd($currentConversation->messages) --}}
                        <!-- TODO: Improve here, remove the if conditional -->
                        @if($currentConversation)
                        @forelse($currentConversation->messages as $conversationMessage)

                        <div class="chatbox-conversation-message  {{ ($conversationMessage->sender_profile_id == auth()->user()->profile->id) ? 'recipient-message' : '' }} " onclick="showMobileMessageAction(this)">
                            <div class="conversation-user-thumb">
                                <img class="rounded-circle" src="{{ $conversationMessage->profile->getFirstMediaUrl('picture') }}" alt="avatar">
                            </div>
                            <div class="conversation-user-message">
                                <div class="conversation-message-header">
                                    <h6>{{ $conversationMessage->profile->user->first_name }}</h6>
                                    <time> {{ Carbon\Carbon::parse($conversationMessage->created_at)->diffForHumans() }}</time>
                                </div>
                                <div class="conversation-message-body">
                                    @if(!$conversationMessage->has_attachment)
                                    <p>{{$conversationMessage->content}}</p>
                                    @endif

                                    @if($conversationMessage->has_attachment)
                                    <div class="chatbox-uploaded-media-wrapper">
                                        {{$conversationMessage->content}}
                                        @forelse($conversationMessage->getMedia() as $file)
                                        <div class="chatbox-uploaded-media-item">
                                            <div>
                                                <x-icon.file />
                                            </div>
                                            <div>
                                                <a href="{{$file->getUrl()}}" download>{{$file->getAttribute('name')}}</a>
                                            </div>
                                        </div>
                                        @empty

                                        @endforelse

                                    </div>
                                    @endif


                                </div>
                            </div>


                            <!-- TODO:NEL: add conversation-user-message-action -->
                            @if($conversationMessage->sender_profile_id === Auth::user()->profile->id)
                            <div class="conversation-user-message-action">
                                <div class="dropdown">
                                    <button class="icon-btn message-action-trigger" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <x-icon.three-dots />
                                    </button>
                                    <div class="dropdown-menu dropdown-show">

                                        <button class="dropdown-item dropdown-heading" wire:click="$dispatch('modal.open', {component: 'messaging.edit-message' , arguments: {'message': {{$conversationMessage}} }})">
                                            <span> <x-icon.edit /></span> <span>Edit</span>
                                        </button>

                                        <button class="dropdown-item dropdown-heading">
                                            <span> <x-icon.copy /></span> <span>Copy</span>
                                        </button>

                                        <button class="dropdown-item dropdown-heading">
                                            <span> <x-icon.reply /> </span> <span>Reply</span>
                                        </button>


                                    </div>
                                </div>

                            </div>
                            @endif

                            <!-- TODO:NEL: add conversation-user-message-action end-->

                        </div>

                        @empty

                        @endforelse
                        @endif

                        <!-- <div class="chatbox-conversation-message recipient-message">
                            <div class="conversation-user-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}" alt="avatar">
                            </div>
                            <div class="conversation-user-message">
                                <div class="conversation-message-header">
                                    <h6>Michel Jhon</h6>
                                    <time> 6:50 PM</time>
                                </div>
                                <div class="conversation-message-body">
                                    <p>Dummy message 1</p>
                                </div>
                            </div>
                            <div class="conversation-user-message-action">
                                <button class="icon-btn message-action-trigger" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <x-icon.three-dots />
                                </button>
                            </div>

                        </div> -->

                        <!-- <div class="chatbox-conversation-message">
                            <div class="conversation-user-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar2.png') }}" alt="avatar">
                            </div>
                            <div class="conversation-user-message">
                                <div class="conversation-message-header">
                                    <h6>Michel Jhon</h6>
                                    <time> 6:50 PM</time>
                                </div>
                                <div class="conversation-message-body">
                                    <p>Dummay message 2</p>
                                </div>
                            </div>
                            <div class="conversation-user-message-action">
                                <button class="icon-btn message-action-trigger" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <x-icon.three-dots />
                                </button>
                            </div>

                        </div> -->

                        <!-- <div class="chatbox-conversation-message">
                            <div class="conversation-user-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar2.png') }}" alt="avatar">
                            </div>
                            <div class="conversation-user-message">
                                <div class="conversation-message-header">
                                    <h6>Michel Jhon</h6>
                                    <time> 6:50 PM</time>
                                </div>
                                <div class="conversation-message-body">
                                    <p>Dummy message 3</p>
                                </div>
                            </div>
                            <div class="conversation-user-message-action">
                                <button class="icon-btn message-action-trigger" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <x-icon.three-dots />
                                </button>
                            </div>

                        </div> -->

                        <!-- <div class="chatbox-conversation-message recipient-message">
                            <div class="conversation-user-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}" alt="avatar">
                            </div>
                            <div class="conversation-user-message">
                                <div class="conversation-message-header">
                                    <h6>Michel Jhon</h6>
                                    <time> 6:50 PM</time>
                                </div>
                                <div class="conversation-message-body">
                                    <p>Dummy message 4 </p>
                                </div>
                            </div>
                            <div class="conversation-user-message-action">
                                <button class="icon-btn message-action-trigger" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <x-icon.three-dots />
                                </button>
                            </div>

                        </div> -->

                        <!-- <div class="separator"><span>12 Oct 2023</span></div> -->

                        <!-- <div class="chatbox-conversation-message recipient-message">
                            <div class="conversation-user-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}" alt="avatar">
                            </div>
                            <div class="conversation-user-message">
                                <div class="conversation-message-header">
                                    <h6>Michel Jhon</h6>
                                    <time> 6:50 PM</time>
                                </div>
                                <div class="conversation-message-body">
                                    <p>Dummay message 5 </p>
                                </div>
                            </div>
                            <div class="conversation-user-message-action">
                                <button class="icon-btn message-action-trigger" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <x-icon.three-dots />
                                </button>
                            </div>

                        </div> -->

                        <!-- TODO:NEL: add message typing -->

                        <!-- <div class="chatbox-conversation-message message-typing d-none" wire:ignore> -->
                        <div class="chatbox-conversation-message message-typing d-none" id="message-typing" wire:ignore>
                            <div class="conversation-user-thumb">
                                <img src="" id="message-writer" alt="">
                            </div>
                            <div class="conversation-user-message ">
                                <div class="loader ">
                                    <svg height="10" width="40">
                                        <circle class="dot" cx="10" cy="5" r="3" style="fill:grey;" />
                                        <circle class="dot" cx="20" cy="5" r="3" style="fill:grey;" />
                                        <circle class="dot" cx="30" cy="5" r="3" style="fill:grey;" />
                                    </svg>
                                </div>
                            </div>

                        </div>

                        <!-- TODO:NEL: add message typing end-->

                    </div>
                    <div class="chatbox-message-editor">
                        <button class="insert-emoji-btn">
                            <x-icon.sentiment-satisfied />
                        </button>
                        <button class="chatbox-message-editor-expand-trigger" onclick="toggleClasses('.chatbox-message-editor textarea', 'message-editor-expanded')">
                            <x-icon.expand />
                        </button>

                        <textarea name="messageBody" id="messageBody" wire:keydown.enter.prevent="sendMessage" wire:model="messageBody" cols="30" rows="10" placeholder="Type your message..."></textarea>

                        @if($messageAttachmentTemporaryUrls)
                        {{-- dd($messageAttachment) --}}
                        <div class="chatbox-uploaded-media-wrapper">
                            @forelse($messageAttachmentTemporaryUrls as $key => $messageAttachmentTemporaryUrl)

                            <div class="chatbox-uploaded-media-item">
                                <div>
                                    <x-icon.file />
                                </div>
                                <div>
                                    <a href="{{ $messageAttachmentTemporaryUrl }}">{{$messageAttachment[$key]->getClientOriginalName()}}</a>

                                </div>
                                <!-- <button>
                                    <x-icon.close />
                                </button> -->
                            </div>


                            @empty

                            @endforelse
                        </div>
                        @endif


                        <div class="chatbox-message-editor-helper">
                            <div class="message-editor-styling-action">
                                <button class="icon-btn">
                                    <x-icon.format-bold />
                                </button>

                                <button class="icon-btn">
                                    <x-icon.format-italic />
                                </button>
                                <button class="icon-btn">
                                    <x-icon.format-underlined />

                                </button>
                                <button class="icon-btn">
                                    <x-icon.code />
                                </button>
                            </div>


                            @error('messageAttachment.*')
                            <div class="form-input-error-message">{{ $message }}</div>
                            @enderror


                            <div class="message-editor-functional-action">
                                {{-- <div class="dropdown d-inline-block">--}}
                                {{-- <button class="icon-btn" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">--}}
                                {{-- <x-icon.alternate-email/>--}}
                                {{-- </button>--}}
                                {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">--}}
                                {{-- <button class="dropdown-item">Room</button>--}}
                                {{-- <button class="dropdown-item">Fabio Rossi</button>--}}
                                {{-- <button class="dropdown-item">Shuvo Reza</button>--}}
                                {{-- </div>--}}
                                {{-- </div>--}}


                                <label class="icon-btn">
                                    <input type="file" name="messageAttachment[]" id="messageAttachment" multiple wire:model.live="messageAttachment" class='d-none' onclick="toggleClasses('.chatbox-message-editor', 'media-uploaded')">

                                    <x-icon.attach-file />
                                </label>
                                <div class="dropdown d-inline-block">
                                    <button class="icon-btn" id="chatbox-editor-settings" data-bs-toggle="dropdown" aria-expanded="false">
                                        <x-icon.settings />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="chatbox-editor-settings">
                                        <p class="text-sm fw-medium">Pressing Enter Key will :</p>
                                        <x-form.radio label="" wire:model="gender" :options="['send-message' => 'Send message', 'line-break' => 'Add a line break']" />
                                        <p class="text-sm fw-medium mb-0">You can use Ctrl + Enter to send</p>
                                    </div>
                                </div>

                                <button class="icon-btn send-message" id="sendMessageButton" wire:click.prevent="sendMessage">
                                    <x-icon.send />
                                </button>
                            </div>
                        </div>

                        <div class="chatbox-message-mobile-action">

                            <button onclick="startMobileMessageEdit()"><span> <x-icon.edit /> </span>
                                <span>Edit</span></button>
                            <button><span> <x-icon.copy /> </span> <span>Copy</span></button>

                            <button><span> <x-icon.reply /> </span> <span>Reply</span></button>

                            {{-- <button class="dropdown-toggle" id="moreOptions" data-bs-toggle="dropdown"--}}
                            {{-- aria-expanded="false">--}}
                            {{-- <span> <x-icon.three-dots/></span> <span>More</span>--}}
                            {{-- </button>--}}
                            {{-- <ul class="dropdown-menu edux-dropdown-option" aria-labelledby="moreOptions">--}}
                            {{-- <li><a class="dropdown-item" href="#">Option 1</a></li>--}}
                            {{-- <li><a class="dropdown-item" href="#">Option 2</a></li>--}}
                            {{-- <li><a class="dropdown-item" href="#">Option 3</a></li>--}}
                            {{-- </ul>--}}

                        </div>

                    </div>
                </div>


            </div>
            @if($currentConversation)
            <div class="chatbox-conversation-summary">
                <div class="chatbox-conversation-summary-inner">
                    <!-- Adding user-online class according to pusher event -->
                    <div class="chatbox-recipient-card profile-{{ $currentConversation?->participants->where('profile_id', '!=', Auth::user()->profile->id)->first()->profile->id}}-status" wire:ignore>
                        <div class="chatbox-recipient-card-thumb">
                            @php
                                $receiver = $currentConversation?->participants->where('profile_id', '!=', Auth::user()->profile->id)->first();
                            @endphp
                            <img class="rounded-circle" src="{{$receiver->profile->picture}} " alt="avatar">
                        </div>
                        <div class="chatbox-recipient-card-info">
                            <h3 class="h6">{{ $receiver->profile->user->full_name }}</h3>
                            @if($receiver->profile->current_organization)
                            <p>{{ $receiver->profile->current_organization}} | {{ $receiver->profile->user->country->name }}</p>
                            @endif
                            <p>{{ now()->timezone('Australia/Sydney')->format('h:i A') }} GMT{{ now()->timezone('Australia/Sydney')->format('p') }} | {{ $receiver->profile->user->country->name }} </p>
                            <ul>
                                <li class="icon-briefcase">{{ $currentConversation->project() ?  $currentConversation->project()->title : ''}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-wrapper">
                        <div class="chatbox-summary-accordion accordion" id="accordionExample">

                            <div class="accordion-item border-0">
                                <button class="accordion-button chatbox-summary-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Files & Links
                                </button>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                    @forelse($currentConversation->messages as $conversationMessage)
                                    
                                    @if($conversationMessage->has_attachment)

                                    @forelse($conversationMessage->getMedia() as $file)
                                        
                                        <div class="chatbox-summary-file-link-card">
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                                    <path d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z" fill="#C8C5D5" />
                                                </svg>
                                            </div>
                                            <div class="">
                                                <p><a href="{{$file->getUrl()}}" download>{{$file->getAttribute('name')}}</a></p>
                                                <div class="file-link-card-footer">
                                                    <div>{{$file->human_readable_size}}</div>
                                                    <div>{{ Carbon\Carbon::parse($conversationMessage->created_at)->diffForHumans() }}</div>
                                                </div>
                                            </div>
                                        </div>

                                        @empty

                                        @endforelse
                                        
                                        @endif

                                        @empty

                                        @endforelse

                                        <!-- <div class="chatbox-summary-file-link-card">
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                                    <path d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z" fill="#C8C5D5" />
                                                </svg>
                                            </div>
                                            <div class="">
                                                <p><a href="#">https://www.eduexhub.com/ab/ messages/att/
                                                        a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                                <div class="file-link-card-footer">
                                                    <div>40.00 KB</div>
                                                    <div>01/10/2023</div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <!-- <div class="chatbox-summary-file-link-card">
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                                    <path d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z" fill="#C8C5D5" />
                                                </svg>
                                            </div>
                                            <div class="">
                                                <p><a href="#">https://www.eduexhub.com/ab/ messages/att/
                                                        a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                                <div class="file-link-card-footer">
                                                    <div>40.00 KB</div>
                                                    <div>30/09/2023</div>
                                                </div>
                                            </div>
                                        </div> -->

                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item border-0">
                                <button class="accordion-button chatbox-summary-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    People
                                </button>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                        <div class="chatbox-recipient-card mb-0 align-items-center user-online">
                                            <div class="chatbox-recipient-card-thumb">
                                                <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}" alt="avatar">
                                            </div>
                                            <div class="chatbox-recipient-card-info">
                                                <p class="fw-medium">Michel Jhon</p>
                                                <p class="mb-0">Owner</p>
                                            </div>
                                        </div>
                                        <div class="chatbox-recipient-card align-items-center user-online">
                                            <div class="chatbox-recipient-card-thumb">
                                                <img src="{{ asset('assets/frontend/img/chat-avatar2.png') }}" alt="avatar">
                                            </div>
                                            <div class="chatbox-recipient-card-info">
                                                <p class="fw-medium">Jane Dow</p>
                                                <p class="mb-0">Admin (You)</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-primary btn-md w-100">Add People</button>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border-0">
                                <button class="accordion-button chatbox-summary-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Personal Note
                                </button>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                        <x-form.textarea label="" wire:model="bio" placeholder="Type Here" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endif
        </div>

    </div>

</div>

@script
<script type="module">
    let conversation_id = '{!! $currentConversation?->id !!}';


    // Livewire.on('conversationSelected', currentConversationId => {

    //     conversation_id = currentConversationId;
    //     alert('livewire'+conversation_id);
    // })




    //    $wire.on('conversationSelected', ({currentConversationId}) => {
    //     // conversation_id = currentConversationId;
    //         alert(currentConversationId);
    //     });











    // Livewire.on('NewMessageCreated', () => {
    // // ...
    // console.log('new message');
    // dd('created');
    // })

    // WIll fix latter start
    $wire.on(`echo-private:messaging.${conversation_id},NewMessageCreated`, () => {

        // $wire.$refresh();
        scrollToBottom('.chatbox-message-list');

        // setTimeout(function () {
        // scrollToBottom('.chatbox-message-list');
        // }, 2000)
    });
    // WIll fix latter end




    $('#messageBody').on('keydown', function() {


        let channel = Echo.private("message-typing." + conversation_id);

        setTimeout(() => {
            channel.whisper('typing', {

                conversation_id: conversation_id,
                userImage: "{!! auth()->user()->profile->getFirstMediaUrl('picture') !!}"
            })
        }, 300)
    })




    let listenChannel = Echo.private("message-typing." + conversation_id);


    listenChannel.listenForWhisper('typing', (e) => {

        if (e.conversation_id == conversation_id) {

            $("#message-writer").attr("src", e.userImage);
            $('.message-typing').removeClass('d-none');
            scrollToBottom('.chatbox-message-list');

        } else {
            $('.message-typing').addClass('d-none');

        }

        setTimeout(() => {
            $('.message-typing').addClass('d-none');

        }, 1000)


    });



    // Online/Offline status 
    
    Echo.join('online-status')
        .here((profiles) => {

            
            for (var i=0; i<profiles.length; i++){
                if('{{auth()->user()->profile->id}}' != profiles[i].id) {
                    $(".profile-"+profiles[i].id+"-status").addClass('user-online');
                    
                }
            }
        })
        .joining((profile) => {            
            
            $(".profile-"+profile.id+"-status").addClass('user-online');
        })
        .leaving((profile) => {
            
            $(".profile-"+profile.id+"-status").removeClass('user-online');
        })
        .listen('OnlineStatus', (e) => {
            // console.log(e);
        })

    
</script>
@endscript