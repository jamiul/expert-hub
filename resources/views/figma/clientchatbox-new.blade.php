@extends('frontend.layouts.front-client-dashboard-layoutmain')
@section('content')

    <div class="container-fluid">
        <div class="chatbox-wrapper">
            <div class="chatbox-contact-area">
                <div class="chatbox-contact-wrapper">
                    <div class="chatbox-contact-filter-area">
                        <h5>Chat</h5>
                        <div class="chatbox-contact-filter-box">
                            <form action="">
                                <x-form.search label="" wire:model="skill" placeholder="Search people, group etc"/>
                            </form>
                            <div class="dropdown">
                                <button class="icon-btn" data-bs-toggle="dropdown" aria-expanded="true">
                                    <x-icon.filter/>
                                </button>


                                <ul class="dropdown-menu dropdown-show edux-dropdown-show">
                                    <li>
                                        <a class="dropdown-item dropdown-heading active" href="#">
                                            <span>
                                               <x-icon.check/>
                                            </span>
                                            <span>All</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item dropdown-heading " href="#"> <span>
                                                  <x-icon.chat/>
                                            </span> <span>Unread</span> </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item dropdown-heading " href="#">
                                            <span>
                                                  <x-icon.heart/>
                                            </span> <span>Favourites</span> </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item dropdown-heading">
                                            <span>
                                                 <x-icon.archive/>
                                            </span>
                                            <span>Archive</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="chatbox-contact-list">
                        <div class="chatbox-contact-person user-online user-selected"
                             onclick="toggleClasses('.chatbox-wrapper', 'chatbox-mobile-view-activated')">
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
                        </div>
                        <div class="chatbox-contact-person user-away">
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
                        </div>
                        <div class="chatbox-contact-person">
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
                        </div>
                        <div class="chatbox-contact-person">
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
                        </div>
                        <div class="chatbox-contact-person">
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
                        </div>
                        <div class="chatbox-contact-person">
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
                        </div>
                        <div class="chatbox-contact-person">
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
                        </div>
                        <div class="chatbox-contact-person">
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
                        </div>
                        <div class="chatbox-contact-person">
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
                        </div>

                    </div>
                </div>
            </div>
            <div class="chatbox-content-area">
                <div class="chatbox-recipient-area">
                    <div class="chatbox-recipient-inner">
                        <div class="chatbox-mobile-view-controller">
                            <button class="icon-btn"
                                    onclick="removeClass('.chatbox-wrapper', 'chatbox-mobile-view-activated')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19"
                                     fill="none">
                                    <path
                                        d="M5.86875 10.25L10.0688 14.45L9 15.5L3 9.5L9 3.5L10.0688 4.55L5.86875 8.75H15V10.25H5.86875Z"
                                        fill="#0036E3"/>
                                </svg>
                            </button>
                        </div>
                        <div class="chatbox-recipient-thumb">
                            <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}"
                                 alt="avatar">
                        </div>

                        <div class="chatbox-recipient-info">
                            <h3>Michel Jhon </h3>
                            <p class="chatbox-recipient-time">5:32 AM GMT+6 | Australia </p>
                            <p class="chatbox-recipient-expertise">Curriculum Expert</p>
                        </div>
                        <div class="advance-chat-options">
                            <button class="icon-btn">
                                <x-icon.call/>
                            </button>

                            <button class="icon-btn">
                                <x-icon.video-call/>
                            </button>

                            <button class="icon-btn conversation-summary-trigger"
                                    onclick="toggleClasses('.chatbox-content-area', 'chatbox-conversation-summary-show')">
                                <x-icon.info/>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="chatbox-conversation-area">
                    <div class="chatbox-conversation-inner">
                        <div class="chatbox-message-list">
                            <div class="chatbox-conversation-message recipient-message"
                                 ondblclick="showMobileMessageAction(this)">
                                <div class="conversation-user-thumb">
                                    <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}"
                                         alt="avatar">
                                </div>
                                <div class="conversation-user-message">
                                    <div class="conversation-message-header">
                                        <h6>Michel Jhon</h6>
                                        <time> 6:50 PM</time>
                                    </div>
                                    <div class="conversation-message-body">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                            necl</p>
                                    </div>
                                </div>
                                <div class="conversation-user-message-action">
                                    <div class="dropdown">
                                        <button class="icon-btn message-action-trigger"
                                                role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <x-icon.three-dots/>
                                        </button>
                                        <div class="dropdown-menu dropdown-show">

                                            <button class="dropdown-item dropdown-heading"
                                                    onclick="startMessageEdit()">
                                                <span> <x-icon.edit/></span> <span>Edit</span>
                                            </button>

                                            <button class="dropdown-item dropdown-heading">
                                                <span> <x-icon.copy/></span> <span>Copy</span>
                                            </button>

                                            <button class="dropdown-item dropdown-heading">
                                                <span>  <x-icon.reply/>  </span> <span>Reply</span>
                                            </button>


                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="chatbox-conversation-message recipient-message">
                                <div class="conversation-user-thumb">
                                    <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}"
                                         alt="avatar">
                                </div>
                                <div class="conversation-user-message">
                                    <div class="conversation-message-header">
                                        <h6>Michel Jhon</h6>
                                        <time> 6:50 PM</time>
                                    </div>
                                    <div class="conversation-message-body">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                            necl</p>
                                    </div>
                                </div>
                                <div class="conversation-user-message-action">
                                    <button class="icon-btn message-action-trigger"
                                            role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <x-icon.three-dots/>
                                    </button>
                                </div>

                            </div>
                            <div class="chatbox-conversation-message">
                                <div class="conversation-user-thumb">
                                    <img src="{{ asset('assets/frontend/img/chat-avatar2.png') }}"
                                         alt="avatar">
                                </div>
                                <div class="conversation-user-message">
                                    <div class="conversation-message-header">
                                        <h6>Michel Jhon</h6>
                                        <time> 6:50 PM</time>
                                    </div>
                                    <div class="conversation-message-body">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                            necl</p>
                                    </div>
                                </div>
                                <div class="conversation-user-message-action">
                                    <button class="icon-btn message-action-trigger"
                                            role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <x-icon.three-dots/>
                                    </button>
                                </div>

                            </div>
                            <div class="chatbox-conversation-message">
                                <div class="conversation-user-thumb">
                                    <img src="{{ asset('assets/frontend/img/chat-avatar2.png') }}"
                                         alt="avatar">
                                </div>
                                <div class="conversation-user-message">
                                    <div class="conversation-message-header">
                                        <h6>Michel Jhon</h6>
                                        <time> 6:50 PM</time>
                                    </div>
                                    <div class="conversation-message-body">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor.</p>
                                    </div>
                                </div>
                                <div class="conversation-user-message-action">
                                    <button class="icon-btn message-action-trigger"
                                            role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <x-icon.three-dots/>
                                    </button>
                                </div>

                            </div>
                            <div class="chatbox-conversation-message recipient-message">
                                <div class="conversation-user-thumb">
                                    <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}"
                                         alt="avatar">
                                </div>
                                <div class="conversation-user-message">
                                    <div class="conversation-message-header">
                                        <h6>Michel Jhon</h6>
                                        <time> 6:50 PM</time>
                                    </div>
                                    <div class="conversation-message-body">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                    </div>
                                </div>
                                <div class="conversation-user-message-action">
                                    <button class="icon-btn message-action-trigger"
                                            role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <x-icon.three-dots/>
                                    </button>
                                </div>

                            </div>
                            <div class="separator"><span>12 Oct 2023</span></div>
                            <div class="chatbox-conversation-message recipient-message">
                                <div class="conversation-user-thumb">
                                    <img src="{{ asset('assets/frontend/img/chat-avatar.png') }}"
                                         alt="avatar">
                                </div>
                                <div class="conversation-user-message">
                                    <div class="conversation-message-header">
                                        <h6>Michel Jhon</h6>
                                        <time> 6:50 PM</time>
                                    </div>
                                    <div class="conversation-message-body">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                    </div>
                                </div>
                                <div class="conversation-user-message-action">
                                    <button class="icon-btn message-action-trigger"
                                            role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <x-icon.three-dots/>
                                    </button>
                                </div>

                            </div>
                            <div class="chatbox-conversation-message message-typing">
                                <div class="conversation-user-thumb">
                                    <img src="{{ asset('assets/frontend/img/chat-avatar2.png') }}"
                                         alt="avatar">
                                </div>
                                <div class="conversation-user-message">
                                    <div class="loader">
                                        <svg height="10" width="40">
                                            <circle class="dot" cx="10" cy="5" r="3" style="fill:grey;"/>
                                            <circle class="dot" cx="20" cy="5" r="3" style="fill:grey;"/>
                                            <circle class="dot" cx="30" cy="5" r="3" style="fill:grey;"/>
                                        </svg>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="chatbox-message-editor">
                            <button class="insert-emoji-btn">
                                <x-icon.sentiment-satisfied/>
                            </button>
                            <button class="chatbox-message-editor-expand-trigger"
                                    onclick="toggleClasses('.chatbox-message-editor textarea', 'message-editor-expanded')">
                                <x-icon.expand/>
                            </button>

                            <textarea name="" id="" cols="30" rows="10"
                                      placeholder="Type your message..."></textarea>


                            <div class="chatbox-message-editor-helper">
                                <div class="message-editor-styling-action">
                                    <button class="icon-btn">
                                        <x-icon.format-bold/>
                                    </button>

                                    <button class="icon-btn">
                                        <x-icon.format-italic/>
                                    </button>
                                    <button class="icon-btn">
                                        <x-icon.format-underlined/>

                                    </button>
                                    <button class="icon-btn">
                                        <x-icon.code/>
                                    </button>
                                </div>
                                <div class="message-editor-functional-action">
                                    <button class="icon-btn">
                                        <x-icon.alternate-email/>
                                    </button>
                                    <button class="icon-btn">
                                        <x-icon.attach-file/>
                                    </button>

                                    <button class="icon-btn">
                                        <x-icon.settings/>
                                    </button>
                                    <button class="icon-btn send-message">
                                        <x-icon.send/>
                                    </button>
                                </div>
                            </div>

                            <div class="chatbox-message-mobile-action">

                                <button onclick="startMobileMessageEdit()"><span>  <x-icon.edit/> </span>
                                    <span>Edit</span></button>
                                <button><span> <x-icon.copy/> </span> <span>Copy</span></button>

                                <button><span> <x-icon.reply/> </span> <span>Reply</span></button>

                                <button class="dropdown-toggle" id="moreOptions" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    <span> <x-icon.three-dots/></span> <span>More</span>
                                </button>
                                {{--            <ul class="dropdown-menu edux-dropdown-option" aria-labelledby="moreOptions">--}}
                                {{--                <li><a class="dropdown-item" href="#">Option 1</a></li>--}}
                                {{--                <li><a class="dropdown-item" href="#">Option 2</a></li>--}}
                                {{--                <li><a class="dropdown-item" href="#">Option 3</a></li>--}}
                                {{--            </ul>--}}

                            </div>

                        </div>
                    </div>


                </div>
                <div class="chatbox-conversation-summary">
                    <div class="chatbox-conversation-summary-inner">
                        <div class="chatbox-recipient-card user-online">
                            <div class="chatbox-recipient-card-thumb">
                                <img src="{{ asset('assets/frontend/img/chat-avatar1.png') }}" alt="avatar">
                            </div>
                            <div class="chatbox-recipient-card-info">
                                <h3 class="h6">Michel Jhon</h3>
                                <p>Chill Intuative | Australia</p>
                                <p>5:32 AM GMT+6 | Australia </p>
                                <ul>
                                    <li class="icon-briefcase">Marketing plan for our upcoming university commerce.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-wrapper">
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item edux-accordion-item">
                                    <button class="edux-btn-accordion" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        Files & Links
                                    </button>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                         aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body single-file-links">
                                            <div class="duex-single-file-links">
                                                <div class="message-iconic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                                         viewBox="0 0 33 32" fill="none">
                                                        <path
                                                            d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z"
                                                            fill="#C8C5D5"/>
                                                    </svg>
                                                </div>
                                                <div class="edux-message-iconic-text">
                                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/
                                                            a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                                    <div class="date-space">
                                                        <span>40.00 KB</span>
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-body single-file-links">
                                            <div class="duex-single-file-links">
                                                <div class="message-iconic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                                         viewBox="0 0 33 32" fill="none">
                                                        <path
                                                            d="M14.8828 22.6666H9.54948C7.70504 22.6666 6.13281 22.0166 4.83281 20.7166C3.53281 19.4166 2.88281 17.8444 2.88281 15.9999C2.88281 14.1555 3.53281 12.5833 4.83281 11.2833C6.13281 9.98325 7.70504 9.33325 9.54948 9.33325H14.8828V11.9999H9.54948C8.43837 11.9999 7.49392 12.3888 6.71615 13.1666C5.93837 13.9444 5.54948 14.8888 5.54948 15.9999C5.54948 17.111 5.93837 18.0555 6.71615 18.8333C7.49392 19.611 8.43837 19.9999 9.54948 19.9999H14.8828V22.6666ZM10.8828 17.3333V14.6666H21.5495V17.3333H10.8828ZM17.5495 22.6666V19.9999H22.8828C23.9939 19.9999 24.9384 19.611 25.7161 18.8333C26.4939 18.0555 26.8828 17.111 26.8828 15.9999C26.8828 14.8888 26.4939 13.9444 25.7161 13.1666C24.9384 12.3888 23.9939 11.9999 22.8828 11.9999H17.5495V9.33325H22.8828C24.7273 9.33325 26.2995 9.98325 27.5995 11.2833C28.8995 12.5833 29.5495 14.1555 29.5495 15.9999C29.5495 17.8444 28.8995 19.4166 27.5995 20.7166C26.2995 22.0166 24.7273 22.6666 22.8828 22.6666H17.5495Z"
                                                            fill="#C8C5D5"/>
                                                    </svg>
                                                </div>
                                                <div class="edux-message-iconic-text">
                                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/
                                                            a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                                    <div class="date-space">
                                                        <span>40.00 KB</span>
                                                        <span>01/10/2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-body single-file-links">
                                            <div class="duex-single-file-links">
                                                <div class="message-iconic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                                         viewBox="0 0 33 32" fill="none">
                                                        <path
                                                            d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z"
                                                            fill="#C8C5D5"/>
                                                    </svg>
                                                </div>
                                                <div class="edux-message-iconic-text">
                                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/
                                                            a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                                    <div class="date-space">
                                                        <span>40.00 KB</span>
                                                        <span>30/09/2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="accordion-item edux-accordion-item">
                                    <button class="edux-btn-accordion collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                        People
                                    </button>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body single-file-links">
                                            <div class="duex-single-file-links">
                                                <div class="message-iconic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                                         viewBox="0 0 33 32" fill="none">
                                                        <path
                                                            d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z"
                                                            fill="#C8C5D5"/>
                                                    </svg>
                                                </div>
                                                <div class="edux-message-iconic-text">
                                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/
                                                            a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                                    <div class="date-space">
                                                        <span>40.00 KB</span>
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="accordion-body single-file-links">
                                            <div class="duex-single-file-links">
                                                <div class="message-iconic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                                         viewBox="0 0 33 32" fill="none">
                                                        <path
                                                            d="M14.8828 22.6666H9.54948C7.70504 22.6666 6.13281 22.0166 4.83281 20.7166C3.53281 19.4166 2.88281 17.8444 2.88281 15.9999C2.88281 14.1555 3.53281 12.5833 4.83281 11.2833C6.13281 9.98325 7.70504 9.33325 9.54948 9.33325H14.8828V11.9999H9.54948C8.43837 11.9999 7.49392 12.3888 6.71615 13.1666C5.93837 13.9444 5.54948 14.8888 5.54948 15.9999C5.54948 17.111 5.93837 18.0555 6.71615 18.8333C7.49392 19.611 8.43837 19.9999 9.54948 19.9999H14.8828V22.6666ZM10.8828 17.3333V14.6666H21.5495V17.3333H10.8828ZM17.5495 22.6666V19.9999H22.8828C23.9939 19.9999 24.9384 19.611 25.7161 18.8333C26.4939 18.0555 26.8828 17.111 26.8828 15.9999C26.8828 14.8888 26.4939 13.9444 25.7161 13.1666C24.9384 12.3888 23.9939 11.9999 22.8828 11.9999H17.5495V9.33325H22.8828C24.7273 9.33325 26.2995 9.98325 27.5995 11.2833C28.8995 12.5833 29.5495 14.1555 29.5495 15.9999C29.5495 17.8444 28.8995 19.4166 27.5995 20.7166C26.2995 22.0166 24.7273 22.6666 22.8828 22.6666H17.5495Z"
                                                            fill="#C8C5D5"/>
                                                    </svg>
                                                </div>
                                                <div class="edux-message-iconic-text">
                                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/
                                                            a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                                    <div class="date-space">
                                                        <span>40.00 KB</span>
                                                        <span>01/10/2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-body single-file-links">
                                            <div class="duex-single-file-links">
                                                <div class="message-iconic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                                         viewBox="0 0 33 32" fill="none">
                                                        <path
                                                            d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z"
                                                            fill="#C8C5D5"/>
                                                    </svg>
                                                </div>
                                                <div class="edux-message-iconic-text">
                                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/
                                                            a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                                    <div class="date-space">
                                                        <span>40.00 KB</span>
                                                        <span>30/09/2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="accordion-item edux-accordion-item">
                                    <button class="edux-btn-accordion collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                        Personal Note
                                    </button>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body single-file-links">
                                            <div class="duex-single-file-links">
                                                <div class="message-iconic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                                         viewBox="0 0 33 32" fill="none">
                                                        <path
                                                            d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z"
                                                            fill="#C8C5D5"/>
                                                    </svg>
                                                </div>
                                                <div class="edux-message-iconic-text">
                                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/
                                                            a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                                    <div class="date-space">
                                                        <span>40.00 KB</span>
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-body single-file-links">
                                            <div class="duex-single-file-links">
                                                <div class="message-iconic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                                         viewBox="0 0 33 32" fill="none">
                                                        <path
                                                            d="M14.8828 22.6666H9.54948C7.70504 22.6666 6.13281 22.0166 4.83281 20.7166C3.53281 19.4166 2.88281 17.8444 2.88281 15.9999C2.88281 14.1555 3.53281 12.5833 4.83281 11.2833C6.13281 9.98325 7.70504 9.33325 9.54948 9.33325H14.8828V11.9999H9.54948C8.43837 11.9999 7.49392 12.3888 6.71615 13.1666C5.93837 13.9444 5.54948 14.8888 5.54948 15.9999C5.54948 17.111 5.93837 18.0555 6.71615 18.8333C7.49392 19.611 8.43837 19.9999 9.54948 19.9999H14.8828V22.6666ZM10.8828 17.3333V14.6666H21.5495V17.3333H10.8828ZM17.5495 22.6666V19.9999H22.8828C23.9939 19.9999 24.9384 19.611 25.7161 18.8333C26.4939 18.0555 26.8828 17.111 26.8828 15.9999C26.8828 14.8888 26.4939 13.9444 25.7161 13.1666C24.9384 12.3888 23.9939 11.9999 22.8828 11.9999H17.5495V9.33325H22.8828C24.7273 9.33325 26.2995 9.98325 27.5995 11.2833C28.8995 12.5833 29.5495 14.1555 29.5495 15.9999C29.5495 17.8444 28.8995 19.4166 27.5995 20.7166C26.2995 22.0166 24.7273 22.6666 22.8828 22.6666H17.5495Z"
                                                            fill="#C8C5D5"/>
                                                    </svg>
                                                </div>
                                                <div class="edux-message-iconic-text">
                                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/
                                                            a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                                    <div class="date-space">
                                                        <span>40.00 KB</span>
                                                        <span>01/10/2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-body single-file-links">
                                            <div class="duex-single-file-links">
                                                <div class="message-iconic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                                         viewBox="0 0 33 32" fill="none">
                                                        <path
                                                            d="M7.29308 27.3334C6.61957 27.3334 6.04948 27.1 5.58281 26.6334C5.11615 26.1667 4.88281 25.5966 4.88281 24.9231V7.07702C4.88281 6.40351 5.11615 5.83341 5.58281 5.36675C6.04948 4.90008 6.61957 4.66675 7.29308 4.66675H25.1391C25.8127 4.66675 26.3827 4.90008 26.8494 5.36675C27.3161 5.83341 27.5494 6.40351 27.5494 7.07702V24.9231C27.5494 25.5966 27.3161 26.1667 26.8494 26.6334C26.3827 27.1 25.8127 27.3334 25.1391 27.3334H7.29308ZM7.29308 25.3334H25.1391C25.2417 25.3334 25.3358 25.2906 25.4212 25.2052C25.5067 25.1197 25.5494 25.0257 25.5494 24.9231V7.07702C25.5494 6.97444 25.5067 6.8804 25.4212 6.79492C25.3358 6.70945 25.2417 6.66672 25.1391 6.66672H7.29308C7.1905 6.66672 7.09647 6.70945 7.01098 6.79492C6.92551 6.8804 6.88278 6.97444 6.88278 7.07702V24.9231C6.88278 25.0257 6.92551 25.1197 7.01098 25.2052C7.09647 25.2906 7.1905 25.3334 7.29308 25.3334ZM9.21618 22.3334H23.3186L18.934 16.4872L15.1905 21.359L12.5238 17.9488L9.21618 22.3334Z"
                                                            fill="#C8C5D5"/>
                                                    </svg>
                                                </div>
                                                <div class="edux-message-iconic-text">
                                                    <p><a href="#">https://www.eduexhub.com/ab/ messages/att/
                                                            a49d7ac7-37bc-436b-8db0 -bebc05270a33</a></p>
                                                    <div class="date-space">
                                                        <span>40.00 KB</span>
                                                        <span>30/09/2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

<script>

    function toggleClasses(parentSelector, className) {
        var parentElement = document.querySelector(parentSelector);
        if (parentElement) {
            // Toggle the specified class on the parent element
            parentElement.classList.toggle(className);
        } else {
            console.error('Parent element not found!');
        }
    }

    function removeClass(elementSelector, className) {
        var element = document.querySelector(elementSelector);

        if (element) {
            // Remove the specified class from the element
            element.classList.remove(className);
        } else {
            console.error('Element not found!');
        }
    }

    function startMessageEdit() {
        var parentSelector = document.querySelector('.chatbox-wrapper');

        // Check if the edit mode is not already activated
        if (!parentSelector.classList.contains('chatbox-editmode-activated')) {
            // Create and append the .chatbox-overly div
            var overlyDiv = document.createElement('div');
            overlyDiv.classList.add('chatbox-overly');
            parentSelector.appendChild(overlyDiv);

            // Add the class to .chatbox-wrapper
            parentSelector.classList.add('chatbox-editmode-activated');

            // Add click event listener to .chatbox-overly
            overlyDiv.addEventListener('click', stopMessageEdit);
        }
    }

    function startMobileMessageEdit() {
        startMessageEdit();
        removeClass('.chatbox-message-mobile-action', 'chatbox-message-mobile-action-activated')
    }

    function stopMessageEdit() {
        var parentSelector = document.querySelector('.chatbox-wrapper');

        // Remove the .chatbox-overly div
        var overlyDiv = document.querySelector('.chatbox-overly');
        if (overlyDiv) {
            overlyDiv.remove();
        }

        // Remove the class from .chatbox-wrapper
        parentSelector.classList.remove('chatbox-editmode-activated');
    }

    function showMobileMessageAction(element) {
        element.classList.toggle("chatbox-selected-message");
        toggleClasses(".chatbox-message-mobile-action", "chatbox-message-mobile-action-activated");
    }


    // Function to add class based on window size

    function updateClass() {
        console.log("HI");
        var chatboxContentArea = document.querySelector('.chatbox-content-area');
        var chatboxConversationSummaryShow = 'chatbox-conversation-summary-show';

        if (window.innerWidth > 1200) {
            // Add the class if window size is greater than 800px
            chatboxContentArea.classList.add(chatboxConversationSummaryShow);
        } else {
            // Remove the class if window size is 800px or smaller
            chatboxContentArea.classList.remove(chatboxConversationSummaryShow);
        }
    }

    // Wait for the DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function () {
        // Initial call to set the class based on the window size
        updateClass();

        // Event listener to update the class when the window is resized
        window.addEventListener('resize', updateClass);
    });
</script>
