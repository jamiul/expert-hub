<style type="text/css">
.dropdown:hover .dropdown-menu {}

.mega-menu-head {
  display: flex !important;
  flex-basis: auto;
  justify-content: space-between !important;
  flex-direction: row;
}

.mega_menu {
  position: static;
}

.mega_area {
  position: absolute;
  left: 0;
  right: 0;
  width: 100%;
}

.mega-menu-item a {
  font-weight: 600;
  font-size: 16px;
  color: black;
  margin: 0;

}

.mega-menu-item {
  padding: 10px 0;
  margin-left: 10px;
}

.mega-menu-item p {
  font-weight: normal;
  font-size: 14px;
  color: gray;
  padding-left: 22px;
  margin: 0;


}

.mega-menu-item:hover,
.about-mega-menu-right:hover,
.mega-menu-fj-item:hover {
  background-color: #F2F7F2;
  border-radius: 10px;

}

.about-mega-menu-right {
  width: 60%;
  height: auto;
  color: #222;
  border: 1px solid #e0e0e0;
  border-radius: 6px;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  margin: 10px 0 10px 0;
  padding: 10px 20px 15px;
  font-size: 14px;
  line-height: 1.5em;
}

.about-mega-menu-right p {
  color: #a0a0a0;
  font-size: 12px;
  line-height: 20px;
  margin-bottom: 5px;
}

.about-mega-menu-right h3 {
  color: #000;
  font-size: 14px;
  line-height: 20px;
  margin-bottom: 5px;
}

.mega-menu-fj-item {
  padding: 10px 0;
  margin-bottom: 30px;
}

.mega-menu-fj-item a {
  color: #001e00;
  margin-bottom: 5px;
  font-size: 16px;
}

.mega-menu-fj-item p {
  color: #5e6d55;
  margin-bottom: 10px;
  font-size: 13px;
  line-height: 21px;
  padding-left: 22px;
}

.about-mega-menu-sm {
  color: #1f57c3;
  font-family: Neuemontreal, sans-serif;
  font-weight: 700;
  font-size: 16px;
  letter-spacing: 0.6px;
}
</style>
<header class="aiz-header bg-white @if(get_setting('header_stikcy') == 'on') sticky-top @endif">
  <div class="aiz-navbar me-auto ps-lg-0 py-0px fs-15 position-relative" style="padding-left: 0.15rem">
    <div class="container-fluid py-5px px-lg-5 d-none d-md-block">
      <div class="d-flex align-items-center justify-content-between">

        @if (!Auth::check())
        <div class="col-4 p-0">
          <a href="{{ route('register') }}?type=2" class="py-3 px-1 text-dark">{{ translate('I want to Hire') }}</a>
          <a href="{{ route('register') }}?type=1" class="py-3 px-1 text-dark">{{ translate('I want to Work') }}</a>
        </div>
        @else
        <div class="logo">
          <a href="{{ route('home') }}" class="d-inline-block">
            <img src="{{ custom_asset(\App\Utility\SettingsUtility::get_settings_value('system_logo_black')) }}"
              height="" class="mh-40px w-100">
          </a>
        </div>
        @endif
        <div class="d-flex justify-content-between w-lg-84 pl-4">
          <div class="search">
            <div class="front-header-search d-flex align-items-center bg-white px-3 px-lg-0">
              @if (Auth::check())
              <form action="{{ route('search') }}" method="GET" class="flex-grow-1">
                <div class="input-group">
                  <a class="text-reset bg-soft-secondary fs-12 rounded-left d-lg-none p-2" href="javascript:void(0);"
                    data-toggle="class-toggle" data-target=".front-header-search">
                    <i class="las la-arrow-left la-2x"></i>
                  </a>
                  <div class="input-group-prepend d-none d-sm-block">
                    <input type="text" class="form-control" placeholder="{{ translate('I am looking for') }}"
                      name="keyword" style="border-top-left-radius: 0.5rem;border-bottom-left-radius: 0.5rem;">
                  </div>
                  <select class="form-control aiz-selectpicker  rounded-left-0" name="type">
                    <option value="freelancer" @isset($type) @if ($type=='freelancer' ) selected @endif @endisset>
                      {{ translate('Freelancers') }}</option>
                    <option value="project" @isset($type) @if ($type=='project' ) selected @endif @endisset>
                      {{ translate('Projects') }}</option>
                    <option value="service" @isset($type) @if ($type=='service' ) selected @endif @endisset>
                      {{ translate('Services') }}</option>
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
          <div class="menu pr-4">
            <nav class="navbar-expand">
              <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item d-lg-none">
                  <a class="p-2 d-inline-block" href="javascript:void(0);" data-toggle="class-toggle"
                    data-target=".front-header-search">
                    <i class="las la-search la-flip-horizontal la-2x"></i>
                  </a>
                </li>
                @if (!Auth::check())
                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="{{ route('login') }}">{{ translate('Log In') }}</a>
                </li>
                <li class="nav-item ml-xl-3">
                  <a class="nav-link" href="{{ route('register') }}">{{ translate('Sign Up') }}</a>
                </li>
                <li class="nav-item ml-xl-3">
                  <a class="btn text-white " style="background-color:#275846;"
                    href="{{ route('register') }}">{{ translate('Post a Project') }}</a>
                </li>
                @elseif (isAdmin())
                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link fw-700" href="{{ route('admin.dashboard') }}">{{ translate('My Panel') }}</a>
                </li>
                @elseif (isClient() || isFreelancer())
                <li class="dropdown d-none d-lg-block">
                  <a class="dropdown-toggle no-arrow position-relative p-2" data-toggle="dropdown"
                    href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                    {{-- <i class="las la-bell la-2x"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                      <g id="Group_22092" data-name="Group 22092" transform="translate(-3 -292.65)">
                        <path id="Path_25812" data-name="Path 25812"
                          d="M12,292.65a7.273,7.273,0,0,0-7.223,7.311v3.5A2.66,2.66,0,0,0,3,305.848a2.806,2.806,0,0,0,2.777,2.8H18.223a2.806,2.806,0,0,0,2.777-2.8,2.658,2.658,0,0,0-1.777-2.383v-3.5A7.273,7.273,0,0,0,12,292.651Zm5.223,7.311c0,1.328,0,2.728-.008,4.031a.99.99,0,0,0,.937,1.051.787.787,0,0,1,.848.8.767.767,0,0,1-.777.8H5.777a.767.767,0,0,1-.777-.8.787.787,0,0,1,.848-.8.99.99,0,0,0,.938-1.049c-.021-1.323-.008-2.692-.008-4.033a5.223,5.223,0,1,1,10.445,0Z"
                          fill="#5a6780" />
                        <path id="Path_25813" data-name="Path 25813" d="M10,310.65a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Z"
                          fill="#5a6780" />
                      </g>
                    </svg>

                    @php $noti_num = \App\Utility\NotificationUtility::get_my_notifications(10,true,true); @endphp
                    @if($noti_num != 0)
                    <span class="badge badge-circle badge-primary position-absolute absolute-top-right">
                      {{--get numbers of unseen notification --}}
                      {{ $noti_num }}
                    </span>
                    @endif

                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0">
                    <div class="p-3 bg-light border-bottom">
                      <h6 class="mb-0">{{ translate('Notifications') }}</h6>
                    </div>
                    <ul class="list-group list-group-raw c-scrollbar-light" style="overflow-y:auto;max-height:300px;">
                      {{--get 10 unseen notifications as array --}}
                      @php $notification_list =
                      \App\Utility\NotificationUtility::get_my_notifications(10,false,false,false); @endphp
                      @forelse ($notification_list as $notification_item)
                      <li class="list-group-item d-flex justify-content-between align-items-start hov-bg-soft-primary">
                        <a href="{{ $notification_item['link'] }}" class="media text-inherit">
                          <span class="avatar avatar-sm mr-3">
                            <img src="{{ $notification_item['sender_photo'] }}">
                          </span>
                          <div class="media-body">
                            <p class="mb-1">{{ $notification_item['message'].' '.$notification_item['sender_name'] }}
                            </p>
                            <small class="text-muted">{{ $notification_item['date']  }}</small>
                          </div>
                        </a>
                        @if($notification_item['seen'] == false)
                        <button class="btn p-0" data-toggle="tooltip" data-title="{{ translate('New') }}">
                          <span class="badge badge-md  badge-dot badge-circle badge-primary"></span>
                        </button>
                        @endif
                      </li>
                      @empty
                      <li class="list-group-item">
                        <div class="text-center">
                          <i class="las la-frown la-4x mb-4 opacity-40"></i>
                          <h4 class="h5">{{ translate('No Notifications') }}</h4>
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
                $unseen_chat_threads = chat_threads();
                $unseen_chat_thread_count = count($unseen_chat_threads);
                @endphp
                <li class="dropdown d-none d-lg-block ml-2 mr-2">
                  <a class="dropdown-toggle no-arrow position-relative p-2" data-toggle="dropdown"
                    href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                    {{-- <i class="las la-comment-dots la-2x"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19">
                      <g id="Layer_2" data-name="Layer 2" transform="translate(-2 -3)">
                        <g id="message-square">
                          <path id="Path_25814" data-name="Path 25814"
                            d="M17,3H5A3,3,0,0,0,2,6V21a1,1,0,0,0,1.51.86L8,19.14A1,1,0,0,1,8.55,19H17a3,3,0,0,0,3-3V6A3,3,0,0,0,17,3Zm1,13a1,1,0,0,1-1,1H8.55A3,3,0,0,0,7,17.43l-3,1.8V6A1,1,0,0,1,5,5H17a1,1,0,0,1,1,1Z"
                            fill="#5a6780" />
                          <rect id="Rectangle_16201" data-name="Rectangle 16201" width="10" height="2" rx="1"
                            transform="translate(6 8)" fill="#5a6780" />
                          <rect id="Rectangle_16202" data-name="Rectangle 16202" width="10" height="2" rx="1"
                            transform="translate(6 12)" fill="#5a6780" />
                        </g>
                      </g>
                    </svg>
                    @if($unseen_chat_thread_count > 0)
                    <span
                      class="badge badge-circle badge-primary position-absolute absolute-top-right">{{ $unseen_chat_thread_count }}</span>
                    @endif
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0">
                    <div class="p-3 bg-light border-bottom">
                      <h6 class="mb-0">{{ translate('Messages') }}</h6>
                    </div>

                    <div class="c-scrollbar-light" style="overflow-y:auto;max-height:300px;">
                      @forelse ($unseen_chat_threads as $key => $chat_thread_id)
                      @php
                      $chat = \App\Models\Chat::where('chat_thread_id', $chat_thread_id)->latest()->first();
                      @endphp
                      @if ($chat != null)
                      <a href="{{ route('all.messages') }}"
                        class="chat-user-item p-3 d-block text-inherit hov-bg-soft-primary">
                        <div class="media">
                          <span class="avatar avatar-sm mr-3 flex-shrink-0">
                            @if (isClient())
                            @if ($chat->chatThread->receiver->photo != null)
                            <img src="{{ custom_asset($chat->chatThread->receiver->photo) }}">
                            @else
                            <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                            @endif
                            @if(Cache::has('user-is-online-' . $chat->chatThread->receiver->id))
                            <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                            @else
                            <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                            @endif
                            @else
                            @if ($chat->chatThread->sender->photo != null)
                            <img src="{{ custom_asset($chat->chatThread->sender->photo) }}">
                            @else
                            <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                            @endif
                            @if(Cache::has('user-is-online-' . $chat->chatThread->sender->id))
                            <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                            @else
                            <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                            @endif
                            @endif
                          </span>
                          <div class="media-body minw-0">
                            @if (isClient())
                            <h6 class="mt-0 mb-1 fs-14 text-truncate">{{ $chat->chatThread->receiver->name }}</h6>
                            @else
                            <h6 class="mt-0 mb-1 fs-14 text-truncate">{{ $chat->chatThread->sender->name }}</h6>
                            @endif
                            @if ($chat->message != null)
                            <div class="fs-12 text-truncate opacity-60">{{ $chat->message }}</div>
                            @else
                            <div class="fs-12 text-truncate opacity-60">{{ translate('Attachments') }}</div>
                            @endif
                          </div>
                          <div class="ml-2 text-right">
                            <div class="opacity-60 fs-10 mb-1">
                              {{ Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}</div>
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
                  <button class="btn p-0 dropdown-toggle no-arrow" type="button" data-toggle="dropdown">
                    <span class="avatar avatar-sm border">
                      @if (Auth::user()->photo != null)
                      <img src="{{custom_asset(Auth::user()->photo)}}">
                      @else
                      <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                      @endif
                    </span>
                    <span class="ml-2 text-left d-none d-xl-inline-block">
                      <span class="h6 d-block mb-0">{{ Auth::user()->name }}</span>
                      @if (Auth::check() && isFreelancer())
                      <span class="small fw-500 text-muted">{{single_price(Auth::user()->profile->balance)}}</span>
                      @endif
                    </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right"
                    aria-labelledby="dropdownMenuButton">
                    <div class="px-3 py-2">
                      <span class="h6 d-block mb-0">{{ Auth::user()->name }}</span>
                      <span class="small text-muted d-block text-truncate">{{ Auth::user()->email }}</span>
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
      <div class="container-fluid  ">
        <!-- Toggle button -->
        <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#navbarExampleOnHover" aria-controls="navbarExampleOnHover" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        </button> <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse mega-menu-head" id="navbarExampleOnHover">
          <div class="logo">
            <a href="{{ route('home') }}" class="d-inline-block">
              <img src="{{ custom_asset(get_setting('header_logo')) }}" height="" class="mh-40px w-100">
            </a>
          </div>
          <!-- Left links -->
          <ul class="navbar-nav me-auto ps-lg-0 " style="padding-left: 0.15rem">

            <!-- Navbar dropdown -->
            <li class="nav-item">
            <li class="dropdown mega_menu ">
              <a class=" dropdown-toggle nav-link text-white " type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ translate('Find Academic Jobs') }}
              </a>
              <div class="dropdown-menu mega_area" aria-labelledby="dropdownMenuButton">
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <div class="w-75  mega-menu-fj-item">
                      <a class="dropdown-item"
                        href="{{ route('skills') }}?keyword=&type=project">{{ translate('Find work for your skills') }}</a>
                      <p>{{translate('Show clients you’re the one they want.')}}</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6  ">
                    <div class="w-75 mega-menu-fj-item">
                      <a class="dropdown-item" href="waysToEarn">{{ translate('Ways to earn') }}</a>
                      <p>
                        {{translate('Learn why Scholarship australia has the right opportunities for you.')}}</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="w-75 mega-menu-fj-item">
                      <a class="dropdown-item pe-2"
                        href="{{route('promote')}}">{{ translate('Find ways to promote yourself') }}</a>
                      <p>{{translate('Explore the kind of work available in your field.')}}</p>
                    </div>
                  </div>

                </div>

              </div>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white"
                href="{{ url('/search?keyword=&type=freelancer') }}">{{ translate('Find Consultants') }}</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link text-white"
                href="{{ route('search') }}?keyword=&type=project">{{ translate('Find Scholarships') }}</a>
            </li>


            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('blog')}}">{{ translate('Resources') }}</a>
            </li>
            <li class="dropdown mega_menu">
              <a class=" dropdown-toggle nav-link text-white " type="button" id="mega_about" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{ translate('About Us') }}
              </a>
              <div class="dropdown-menu mega_area" aria-labelledby="mega_about">

                <div class="row ">
                  <div class="col-lg-6 col-sm-6">
                    <div class="row ">
                      <div class="col-6">
                        <div class="w-75 mega-menu-item" action="{{route('success-stories')}}">
                          <a class="dropdown-item " href="">{{ translate('Success Stories') }}
                          </a>
                          <p>Discover how to team work strategically and grow together</p>
                        </div>
                        <div class="w-75 mega-menu-item">
                          <a class="dropdown-item" href="{{route('how-to-hire')}}">{{ translate('How to Hire') }}</a>
                          <p>Learn about the different ways to get work done.</p>
                        </div>

                      </div>
                      <div class="col-6">
                        <div class="w-75 mega-menu-item">
                          <a class="dropdown-item " href="{{route('review')}}">{{translate('Reviews')}}</a>
                          <p>See what it's like to collaborate on scholarship australia</p>
                        </div>

                        <div class="mt-2 w-75 mega-menu-item">
                          <a class="dropdown-item"
                            href="{{route('how-to-find-job')}}">{{ translate('How to find job') }}</a>
                          <p>Learn about how to grow your independent career.</p>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 py-3">
                    <h5>Where work gets done</h5>
                    <div class="mt-1">

                      <div class="about-mega-menu-right">
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
                        src="{{my_asset('assets/frontend/default/img/whyScholarship/reviews/arrow.svg')}}" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </li>

          </ul>
          <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>
    @endif
  </div>
</header>