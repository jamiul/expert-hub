<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('assets/frontend/default/css/header.css') }}">
</head>

<body>
    <header class="aiz-header bg-white @if (getSetting('header_stikcy') == 'on') sticky-top @endif">
        <div class="aiz-navbar me-auto ps-lg-0 py-0px fs-15 position-relative" style="margin-bottom:-1px;">
            <div class="container-fluid py-5px px-lg-5 d-none d-md-block">
                <div class="d-flex align-items-center justify-content-between">

                    @if (!Auth::check())
                        <div class="col-4 p-0">
                            <a href="{{ route('register') }}?type=2"
                                class="py-3 px-1 text-dark">{{ translate('Find an expert') }}</a>
                            <a href="{{ route('register') }}?type=1"
                                class="py-3 px-1 text-dark">{{ translate('Become an expert') }}</a>
                        </div>
                    @else
                        <div class="logo ml-4 ">
                            <a href="{{ route('home') }}" class="d-inline-block">
                                <img src="{{ customAsset(\App\Utility\SettingsUtility::getSettingsValue('system_logo_black')) }}"
                                    height="" class="  w-100" style="max-height:30px;">
                            </a>
                        </div>
                    @endif
                    <div class="d-flex justify-content-between w-lg-84 pl-4">
                        <div class="search">
                            <div class="front-header-search d-flex align-items-center bg-white px-3 px-lg-0">
                                @if (Auth::check())
                                    <form action="{{ route('search') }}" method="GET" class="flex-grow-1">
                                        <div class="input-group">
                                            <a class="text-reset bg-soft-secondary fs-12 rounded-left d-lg-none p-2"
                                                href="javascript:void(0);" data-toggle="class-toggle"
                                                data-target=".front-header-search">
                                                <i class="las la-arrow-left la-2x"></i>
                                            </a>
                                            <div class="input-group-prepend d-none d-sm-block">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('I am looking for') }}" name="keyword"
                                                    style="border-top-left-radius: 0.5rem;border-bottom-left-radius: 0.5rem;">
                                            </div>
                                            <select class="form-control aiz-selectpicker  rounded-left-0"
                                                name="type">
                                                <option value="expert"
                                                    @isset($type) @if ($type == 'expert') selected @endif @endisset>
                                                    {{ translate('Experts') }}
                                                </option>
                                                <option value="project"
                                                    @isset($type) @if ($type == 'project') selected @endif @endisset>
                                                    {{ translate('Projects') }}
                                                </option>
                                                <option value="service"
                                                    @isset($type) @if ($type == 'service') selected @endif @endisset>
                                                    {{ translate('Services') }}
                                                </option>
                                            </select>
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-icon btn-primary"
                                                    style="border-top-right-radius: 0.5rem;border-bottom-right-radius: 0.5rem;">
                                                    <i class="las la-search la-rotate-270"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                @endif

                            </div>
                        </div>
                        <div class="menu pr-2">
                            <nav class="navbar-expand">
                                <ul class="navbar-nav ms-auto align-items-center">
                                    <li class="nav-item d-lg-none">
                                        <a class="p-2 d-inline-block" href="javascript:void(0);"
                                            data-toggle="class-toggle" data-target=".front-header-search">
                                            <i class="las la-search la-flip-horizontal la-2x"></i>
                                        </a>
                                    </li>
                                    @if (!Auth::check())
                                        <li class="nav-item d-none d-lg-block">
                                            <a class="nav-link"
                                                href="{{ route('login') }}">{{ translate('Log In') }}</a>
                                        </li>
                                        <li class="nav-item ms-xl-3">
                                            <a class="nav-link"
                                                href="{{ route('register') }}">{{ translate('Sign Up') }}</a>
                                        </li>
                                        <li class="nav-item ms-xl-3">
                                            <a class="btn text-white " style="background-color:#275846;"
                                                href="{{ route('register') }}">{{ translate('Post a Project') }}</a>
                                        </li>
                                    @elseif (isAdmin())
                                        <li class="nav-item d-none d-lg-block">
                                            <a class="nav-link fw-700"
                                                href="{{ route('admin.dashboard') }}">{{ translate('My Panel') }}</a>
                                        </li>
                                    @elseif (isClient() || isExpert())
                                        <li class="dropdown d-none d-lg-block">
                                            <a class="dropdown-toggle no-arrow position-relative p-2"
                                                data-toggle="dropdown" href="javascript:void(0);" role="button"
                                                aria-haspopup="false" aria-expanded="false">
                                                {{-- <i class="las la-bell la-2x"></i> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                                                    viewBox="0 0 18 20">
                                                    <g id="Group_22092" data-name="Group 22092"
                                                        transform="translate(-3 -292.65)">
                                                        <path id="Path_25812" data-name="Path 25812"
                                                            d="M12,292.65a7.273,7.273,0,0,0-7.223,7.311v3.5A2.66,2.66,0,0,0,3,305.848a2.806,2.806,0,0,0,2.777,2.8H18.223a2.806,2.806,0,0,0,2.777-2.8,2.658,2.658,0,0,0-1.777-2.383v-3.5A7.273,7.273,0,0,0,12,292.651Zm5.223,7.311c0,1.328,0,2.728-.008,4.031a.99.99,0,0,0,.937,1.051.787.787,0,0,1,.848.8.767.767,0,0,1-.777.8H5.777a.767.767,0,0,1-.777-.8.787.787,0,0,1,.848-.8.99.99,0,0,0,.938-1.049c-.021-1.323-.008-2.692-.008-4.033a5.223,5.223,0,1,1,10.445,0Z"
                                                            fill="#5a6780" />
                                                        <path id="Path_25813" data-name="Path 25813"
                                                            d="M10,310.65a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Z"
                                                            fill="#5a6780" />
                                                    </g>
                                                </svg>

                                                @php $notiNum = \App\Utility\NotificationUtility::getMyNotifications(10,true,true); @endphp
                                                @if ($notiNum != 0)
                                                    <span
                                                        class="badge badge-circle badge-primary position-absolute absolute-top-right">
                                                        {{-- get numbers of unseen notification --}}
                                                        {{ $notiNum }}
                                                    </span>
                                                @endif

                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0">
                                                <div class="p-3 bg-light border-bottom">
                                                    <h6 class="mb-0">{{ translate('Notifications') }}</h6>
                                                </div>
                                                <ul class="list-group list-group-raw c-scrollbar-light"
                                                    style="overflow-y:auto;max-height:300px;">
                                                    {{-- get 10 unseen notifications as array --}}
                                                    @php $notificationList = \App\Utility\NotificationUtility::getMyNotifications(10, false, false, false); @endphp
                                                    @forelse ($notificationList as $notificationItem)
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-start hov-bg-soft-primary">
                                                            <a href="{{ $notificationItem['link'] }}"
                                                                class="media text-inherit">
                                                                <span class="avatar avatar-sm mr-3">
                                                                    <img
                                                                        src="{{ $notificationItem['sender_photo'] }}">
                                                                </span>
                                                                <div class="media-body">
                                                                    <p class="mb-1">
                                                                        {{ $notificationItem['message'] . ' ' . $notificationItem['sender_name'] }}
                                                                    </p>
                                                                    <small
                                                                        class="text-muted">{{ $notificationItem['date'] }}</small>
                                                                </div>
                                                            </a>
                                                            @if ($notificationItem['seen'] == false)
                                                                <button class="btn p-0" data-toggle="tooltip"
                                                                    data-title="{{ translate('New') }}">
                                                                    <span
                                                                        class="badge badge-md  badge-dot badge-circle badge-primary"></span>
                                                                </button>
                                                            @endif
                                                        </li>
                                                    @empty
                                                        <li class="list-group-item">
                                                            <div class="text-center">
                                                                <i class="las la-frown la-4x mb-4 opacity-40"></i>
                                                                <h4 class="h5">{{ translate('No Notifications') }}
                                                                </h4>
                                                            </div>
                                                        </li>
                                                    @endforelse
                                                </ul>
                                                <div class="border-top">
                                                    <a href="{{ route('frontend.notifications') }}"
                                                        class="btn btn-link btn-block">{{ translate('View All Notifications') }}</a>
                                                </div>
                                            </div>
                                        </li>
                                        @php
                                            $unseenChatThreads = chatThreads();
                                            $unseenChatThreadCount = count($unseenChatThreads);
                                        @endphp
                                        <li class="dropdown d-none d-lg-block ml-2 mr-2">
                                            <a class="dropdown-toggle no-arrow position-relative p-2"
                                                data-toggle="dropdown" href="javascript:void(0);" role="button"
                                                aria-haspopup="false" aria-expanded="false">
                                                {{-- <i class="las la-comment-dots la-2x"></i> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                                                    viewBox="0 0 18 19">
                                                    <g id="Layer_2" data-name="Layer 2"
                                                        transform="translate(-2 -3)">
                                                        <g id="message-square">
                                                            <path id="Path_25814" data-name="Path 25814"
                                                                d="M17,3H5A3,3,0,0,0,2,6V21a1,1,0,0,0,1.51.86L8,19.14A1,1,0,0,1,8.55,19H17a3,3,0,0,0,3-3V6A3,3,0,0,0,17,3Zm1,13a1,1,0,0,1-1,1H8.55A3,3,0,0,0,7,17.43l-3,1.8V6A1,1,0,0,1,5,5H17a1,1,0,0,1,1,1Z"
                                                                fill="#5a6780" />
                                                            <rect id="Rectangle_16201" data-name="Rectangle 16201"
                                                                width="10" height="2" rx="1"
                                                                transform="translate(6 8)" fill="#5a6780" />
                                                            <rect id="Rectangle_16202" data-name="Rectangle 16202"
                                                                width="10" height="2" rx="1"
                                                                transform="translate(6 12)" fill="#5a6780" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                @if ($unseenChatThreadCount > 0)
                                                    <span
                                                        class="badge badge-circle badge-primary position-absolute absolute-top-right">{{ $unseenChatThreadCount }}</span>
                                                @endif
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0">
                                                <div class="p-3 bg-light border-bottom">
                                                    <h6 class="mb-0">{{ translate('Messages') }}</h6>
                                                </div>

                                                <div class="c-scrollbar-light"
                                                    style="overflow-y:auto;max-height:300px;">
                                                    @forelse ($unseenChatThreads as $key => $chatThreadId)
                                                        @php
                                                            $chat = \App\Models\Chat::where('chat_thread_id', $chatThreadId)
                                                                ->latest()
                                                                ->first();
                                                        @endphp
                                                        @if ($chat != null)
                                                            <a href="{{ route('all.messages') }}"
                                                                class="chat-user-item p-3 d-block text-inherit hov-bg-soft-primary">
                                                                <div class="media">
                                                                    <span class="avatar avatar-sm mr-3 flex-shrink-0">
                                                                        @if (isClient())
                                                                            @if ($chat->chatThread->receiver->photo != null)
                                                                                <img
                                                                                    src="{{ customAsset($chat->chatThread->receiver->photo) }}">
                                                                            @else
                                                                                <img
                                                                                    src="{{ asset('assets/frontend/default/img/avatar-place.png') }}">
                                                                            @endif
                                                                            @if (Cache::has('user-is-online-' . $chat->chatThread->receiver->id))
                                                                                <span
                                                                                    class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                                                                            @else
                                                                                <span
                                                                                    class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                                                            @endif
                                                                        @else
                                                                            @if ($chat->chatThread->sender->photo != null)
                                                                                <img
                                                                                    src="{{ customAsset($chat->chatThread->sender->photo) }}">
                                                                            @else
                                                                                <img
                                                                                    src="{{ asset('assets/frontend/default/img/avatar-place.png') }}">
                                                                            @endif
                                                                            @if (Cache::has('user-is-online-' . $chat->chatThread->sender->id))
                                                                                <span
                                                                                    class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                                                                            @else
                                                                                <span
                                                                                    class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                                                            @endif
                                                                        @endif
                                                                    </span>
                                                                    <div class="media-body minw-0">
                                                                        @if (isClient())
                                                                            <h6 class="mt-0 mb-1 fs-14 text-truncate">
                                                                                {{ $chat->chatThread->receiver->name }}
                                                                            </h6>
                                                                        @else
                                                                            <h6 class="mt-0 mb-1 fs-14 text-truncate">
                                                                                {{ $chat->chatThread->sender->name }}
                                                                            </h6>
                                                                        @endif
                                                                        @if ($chat->message != null)
                                                                            <div
                                                                                class="fs-12 text-truncate opacity-60">
                                                                                {{ $chat->message }}</div>
                                                                        @else
                                                                            <div
                                                                                class="fs-12 text-truncate opacity-60">
                                                                                {{ translate('Attachments') }}</div>
                                                                        @endif
                                                                    </div>
                                                                    <div class="ml-2 text-right">
                                                                        <div class="opacity-60 fs-10 mb-1">
                                                                            {{ Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        @endif
                                                    @empty
                                                        <div class="text-center">
                                                            <i class="las la-frown la-4x mb-4 opacity-40"></i>
                                                            <h4 class="h5">{{ translate('No New Messages') }}</h4>
                                                        </div>
                                                    @endforelse
                                                </div>
                                                <div class="border-top">
                                                    <a href="{{ route('all.messages') }}"
                                                        class="btn btn-link btn-block">{{ translate('View All Messages') }}</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown ml-3 d-none d-lg-block">
                                            <button class="btn p-0 dropdown-toggle no-arrow" type="button"
                                                data-toggle="dropdown">
                                                <span class="avatar avatar-sm border">
                                                    @if (Auth::user()->photo != null)
                                                        <img src="{{ customAsset(Auth::user()->photo) }}">
                                                    @else
                                                        <img
                                                            src="{{ asset('assets/frontend/default/img/avatar-place.png') }}">
                                                    @endif
                                                </span>
                                                <span class="ml-2 text-left d-none d-xl-inline-block">
                                                    <span class="h6 d-block mb-0">{{ Auth::user()->name }}</span>
                                                    @if (Auth::check() && isExpert())
                                                        <span
                                                            class="small fw-500 text-muted">{{ singlePrice(Auth::user()->profile->balance) }}</span>
                                                    @endif
                                                </span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <div class="px-3 py-2">
                                                    <span class="h6 d-block mb-0">{{ Auth::user()->name }}</span>
                                                    <span
                                                        class="small text-muted d-block text-truncate">{{ Auth::user()->email }}</span>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ route('dashboard') }}">
                                                    <i class="las la-tachometer-alt"></i>
                                                    {{ translate('Dashboard') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('logout') }}">
                                                    <i class="las la-sign-out-alt"></i>
                                                    {{ translate('Log Out') }}
                                                </a>
                                            </div>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>


                </div>
            </div>
            @if (!Auth::check())
                <nav class="navbar navbar-expand-lg  bg-dark w-100">
                    <!-- Container wrapper -->

                    <div class="container-fluid ml-3">
                        <div class="logo">
                            <a href="{{ route('home') }}" class="d-inline-block p-1">
                                <img src="{{ customAsset(getSetting('header_logo')) }}" height=""
                                    class="mh-40px w-100 logo-for-small-responsive">
                            </a>
                        </div>
                        <!-- Toggle button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <img class=" " src="{{ asset('/assets/frontend/default/img/menu.png') }}"
                                    alt="Image" />
                            </span>
                        </button>
                        </button> <!-- Collapsible wrapper -->
                        <div class="collapse navbar-collapse px-4" id="navbarSupportedContent">

                            <!-- Left links -->
                            <ul class="navbar-nav ms-auto ps-lg-0 " style="padding-left: 0.15rem">

                                <!-- Navbar dropdown -->
                                <li class="nav-item ml-lg-2">
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ url('/search?keyword=&type=expert') }}">{{ __('Find Experts') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ url('/search?keyword=&type=project') }}">{{ __('Find Projects') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ url('/search?keyword=&type=media-expert') }}">{{ __('Experts Database for Media') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ route('scholarship-search') }}?keyword=&type=scholarships">{{ __('Scholarships Database') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ url('/search?keyword=&type=training') }}">{{ __('Find Trainings ') }}</a>
                                </li>
                                <li class="nav-item dropdown  text-white">
                                    <a class="nav-link " href="{{ route('about-us') }}">
                                        {{ __('About Us') }}
                                    </a>
                                    <div class="dropdown-menu mega_area" aria-labelledby="mega_product">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <div id="howToFindJob" class="mt-2 w-75 mega-menu-item">
                                                            <a class="dropdown-item"
                                                                href="{{ route('how-to-find-job') }}">{{ translate('How to find job') }}</a>
                                                            <p>{{ translate('Learn about how to grow your independent career.') }}
                                                            </p>
                                                        </div>

                                                        <div id="review" class="w-75 mega-menu-item">
                                                            <a class="dropdown-item drpd-item"
                                                                href="{{ route('review') }}">{{ translate('Reviews') }}</a>
                                                            <p>{{ translate("See what it's like to collaborate on scholarship australia") }}
                                                            </p>
                                                        </div>
                                                        <div id="wayToEarn" class="w-75 mega-menu-fj-item">
                                                            <a class="dropdown-item"
                                                                href="ways-to-earn">{{ translate('Ways to earn') }}</a>
                                                            <p>
                                                                {{ translate('Learn why Scholarship australia has the right opportunities for you.') }}
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div id="howToHire" class="w-75 mt-2 mega-menu-item">
                                                            <a class="dropdown-item"
                                                                href="{{ route('how-to-hire') }}">{{ translate('How to Hire') }}</a>
                                                            <p>{{ 'Learn about the different ways to get work done.' }}
                                                            </p>
                                                        </div>


                                                        <div id="successStories" class="w-75 mega-menu-item">
                                                            <a class="dropdown-item succes-dmenu"
                                                                href="{{ route('success-stories') }}">{{ translate('Success Stories') }}
                                                            </a>
                                                            <p>{{ translate('Discover how to team work strategically and grow together') }}
                                                            </p>
                                                        </div>
                                                        <div id='promoteYourself' class="w-78 mega-menu-fj-item">
                                                            <a class="dropdown-item "
                                                                href="{{ route('promote') }}">{{ translate('Find ways to promote yourself') }}</a>
                                                            <p>{{ translate('Explore the kind of work available in your field.') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <h5>Where work gets done</h5>
                                                <div class="mt-1">

                                                    <div class="about-mega-menu-right c-pointer">
                                                        <p>
                                                            Guides
                                                        </p>
                                                        <h3> Getting Started as a Consultant</h3>
                                                    </div>
                                                    <div class="about-mega-menu-right">
                                                        <p>
                                                            Guides
                                                        </p>
                                                        <h3>Growing Your consultant Career</h3>
                                                    </div>
                                                    <div class="about-mega-menu-right">
                                                        <p>
                                                            Guides
                                                        </p>
                                                        <h3> Hiring & Working with Independent Talent</h3>
                                                    </div>
                                                    <a href="" class="about-mega-menu-sm">See more</a> <img
                                                        src="{{ asset('assets/frontend/default/img/whyScholarship/reviews/arrow.svg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <p class="d-flex justify-content-center" style="color:red">This page’s
                                            contents is not ours, it is for
                                            inspiration only - to be modified shortly.</p>
                                    </div>
                                </li>

                                </li>
                            </ul>
                            <!-- Left links -->
                        </div>
                    </div>


                    <!-- Collapsible wrapper -->

                    <!-- Container wrapper -->
                </nav>
            @endif
        </div>
    </header>

    <script>
        document.getElementById('review').addEventListener('click', function() {
            window.location.href = " {{ route('review') }}";
        });
        document.getElementById('howToFindJob').addEventListener('click', function() {
            window.location.href = "{{ route('how-to-find-job') }}";
        });
        document.getElementById('howToHire').addEventListener('click', function() {
            window.location.href = "{{ route('how-to-hire') }}";
        });
        document.getElementById('successStories').addEventListener('click', function() {
            window.location.href = "{{ route('success-stories') }}";
        });
        document.getElementById('promoteYourself').addEventListener('click', function() {
            window.location.href = "{{ route('promote') }}";
        });
    </script>

</body>

</html>