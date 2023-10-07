<footer class=" fs-13 mt-auto p-1 p-sm-2 p-lg-4" style="background-color:#275846;">
    <div class="footer-content">
        <div class="aiz-footer-widget">
            <div class="container mt-xl-5 mt-5" class="margin-top">
                {{-- <div class="aiz-front-widget ">
                    <img src="{{ customAsset(getSetting('footer_logo')) }}" height="40" class="mb-4">
                    <div class="fs-14 text-white">
                        @php
                            echo getSetting('about_description_footer');
                        @endphp
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="aiz-front-widget mb-5">
                            <h4 class="title text-white">{{ getSetting('widget_one') }}</h4>
                            <ul class="menu">
                                @if (!empty(getSetting('widget_one_labels')))
                                    @foreach (json_decode(getSetting('widget_one_labels'), true) as $key => $value)
                                        <li>
                                            <a class="text-white"
                                                href="{{ json_decode(getSetting('widget_one_links'), true)[$key] }}">{{ $value }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-12">
                        <div class="aiz-front-widget mb-5">
                            <h4 class="title text-white">{{ getSetting('widget_two') }}</h4>
                            <ul class="menu">
                                @if (!empty(getSetting('widget_two_labels')))
                                    @foreach (json_decode(getSetting('widget_two_labels'), true) as $key => $value)
                                        <li>
                                            <a class="text-white"
                                                href="{{ json_decode(getSetting('widget_two_links'), true)[$key] }}">{{ $value }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="aiz-front-widget mb-5">
                            <h4 class="title text-white">{{ getSetting('widget_three') }}</h4>
                            <ul class="menu text-white">
                                @if (!empty(getSetting('widget_three_labels')))
                                    @foreach (json_decode(getSetting('widget_three_labels'), true) as $key => $value)
                                        <li>
                                            <a class="text-white"
                                                href="{{ json_decode(getSetting('widget_three_links'), true)[$key] }}">{{ $value }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="aiz-front-widget mb-5">
                            <h4 class="title text-white">{{ getSetting('widget_four') }}</h4>
                            <ul class="menu">
                                @if (!empty(getSetting('widget_four_labels')))
                                    @foreach (json_decode(getSetting('widget_four_labels'), true) as $key => $value)
                                        <li>
                                            <a class="text-white"
                                                href="{{ json_decode(getSetting('widget_four_links'), true)[$key] }}">{{ $value }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </div><!-- .aiz-footer-widget -->
        <div class="container">
            <hr style="background-color:white; filter: drop-shadow(0px 10px 30px rgba(0, 0, 0, 0.08));border-color: #fff;opacity: 1;">
        </div>
        <div class="aiz-footer-copyright fs-12 pb-xl-4 pb-7">
            <div class="container">
                <div class="row align-items-center justify-content-center gutters-3">
                    <div class="col-xl-4 col-sm-6">
                        @if (getSetting('language_switcher') == 'on')
                            <div class=" col-lg-12 col-12 fs-16 p-0 text-white">
                                {!! getSetting('copyright_text') !!}
                            </div>
                        @else
                            <div class="col text-secondary">
                                {!! getSetting('copyright_text') !!}
                            </div>
                        @endif
                    </div>
                    <div class="col-xl-4 col-sm-6 p-0">
                        <div class="aiz-front-widget d-lg-flex px-3 align-items-center">
                            <h5 class="text-white fs-16 mr-lg-2">{{ getSetting('social_widget_title') }}</h5>

                            <ul class="list-inline apps">

                                 @if (!empty(getSetting('facebook_link')))
                                    <li class="list-inline-item">
                                        <a href="{{ getSetting('facebook_link') }}" target="_blank"
                                            class="facebook"><i class="lab la-facebook-f"></i></a>
                                    </li>
                                @endif
                                @if (!empty(getSetting('twitter_link')))
                                    <li class="list-inline-item">
                                        <a href="{{ getSetting('twitter_link') }}" target="_blank" class="twitter"><i
                                                class="lab la-twitter"></i></a>
                                    </li>
                                @endif
                                @if (!empty(getSetting('instagram_link')))
                                    <li class="list-inline-item">
                                        <a href="{{ getSetting('instagram_link') }}" target="_blank"
                                            class="instagram"><i class="lab la-instagram"></i></a>
                                    </li>
                                @endif
                                @if (!empty(getSetting('youtube_link')))
                                    <li class="list-inline-item">
                                        <a href="{{ getSetting('youtube_link') }}" target="_blank" class="youtube"><i
                                                class="lab la-youtube"></i></a>
                                    </li>
                                @endif
                                @if (!empty(getSetting('linkedin_link')))
                                    <li class="list-inline-item">
                                        <a href="{{ getSetting('linkedin_link') }}" target="_blank"
                                            class="linkedin"><i class="lab la-linkedin-in"></i></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    @if (getSetting('app_link_section_show') == 'on')
                        <div class="col-xl-4 col-sm-12">
                            <div class="aiz-front-widget d-lg-flex ml-lg-2  align-items-center ">
                                <h5 class="fs-16 text-white mr-lg-2">{{ translate('Mobile Apps') }}</h5>
                                <ul class="list-inline apps">
                                    @if (!empty(getSetting('app_link_android')))
                                        <li class="list-inline-item">
                                            <a href="{{ getSetting('app_link_android') }}" target="_blank"
                                                class="facebook"><i class="lab la-android"></i></a>
                                        </li>
                                    @endif
                                    @if (!empty(getSetting('app_link_apple')))
                                        <li class="list-inline-item">
                                            <a href="{{ getSetting('app_link_apple') }}" target="_blank"
                                                class="twitter"><i class="lab la-apple"></i></a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom border-top rounded-top bg-white shadow-lg"
    style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important;">
    <div class="d-flex justify-content-around align-items-center">
        <a href="{{ route('home') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
            <i class="las la-home fs-20 {{ areActiveRoutes(['home'], 'opacity-100 text-primary') }} opacity-60"></i>
            <span
                class="d-block fs-10 fw-600 {{ areActiveRoutes(['home'], 'opacity-100 fw-600') }} opacity-60">{{ translate('Home') }}</span>
        </a>
        <a href="{{ route('frontend.notifications') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
            <span class="d-inline-block position-relative px-2">
                <i
                    class="las la-bell fs-20 {{ areActiveRoutes(['frontend.notifications'], 'opacity-100 text-primary') }} opacity-60"></i>
                @php $notiNum = \App\Utility\NotificationUtility::getMyNotifications(10,true,true); @endphp
                @if ($notiNum > 0)
                    <span
                        class="badge badge-circle badge-primary position-absolute absolute-top-right">{{ $notiNum }}</span>
                @endif
            </span>
            <span
                class="d-block fs-10 fw-600 {{ areActiveRoutes(['frontend.notifications'], 'opacity-100 fw-600') }} opacity-60">{{ translate('Notifications') }}</span>
        </a>
        <a href="{{ route('all.messages') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
            <span class="d-inline-block position-relative px-2">
                <i
                    class="las la-comment-dots fs-20 {{ areActiveRoutes(['all.messages'], 'opacity-100 text-primary') }} opacity-60"></i>
                @php
                    $unseenChatThreads = chatThreads();
                    $unseenChatThreadCount = count($unseenChatThreads);
                @endphp
                @if ($unseenChatThreadCount > 0)
                    <span
                        class="badge badge-circle badge-primary position-absolute absolute-top-right">{{ $unseenChatThreadCount }}</span>
                @endif
            </span>
            <span
                class="d-block fs-10 fw-600 {{ areActiveRoutes(['all.messages'], 'opacity-100 fw-600') }} opacity-60">{{ translate('Messages') }}</span>
        </a>
        @if (Auth::check())
            @if (isClient() || isExpert())
                <a href="javascript:void(0)"
                    class="text-reset flex-grow-1 mobile-side-nav-thumb pb-2 pt-3 text-center"
                    data-toggle="class-toggle" data-target=".aiz-mobile-side-nav">
                    <span class="d-block mx-auto">
                        @if (Auth::user()->photo != null)
                            <img src="{{ customAsset(Auth::user()->photo) }}" class="rounded-circle size-20px">
                        @else
                            <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                class="rounded-circle size-20px">
                        @endif
                        @if (Cache::has('user-is-online-' . Auth::user()->id))
                            <span class="badge badge-dot badge-success badge-circle badge-status"></span>
                        @else
                            <span class="badge badge-dot badge-secondary badge-circle badge-status"></span>
                        @endif
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @else
                <a href="{{ route('admin.dashboard') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
                    <span class="d-block mx-auto">
                        @if (Auth::user()->photo != null)
                            <img src="{{ customAsset(Auth::user()->photo) }}" class="rounded-circle size-20px">
                        @else
                            <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                class="rounded-circle size-20px">
                        @endif
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @endif
        @else
            <a href="{{ route('login') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
                <span class="d-block mx-auto">
                    <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                        class="rounded-circle size-20px">
                </span>
                <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
            </a>
        @endif
    </div>
</div>
@if (Auth::check())
    @if (isClient())
        <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035 sidebar-right">
            <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle"
                data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
            <div class="collapse-sidebar bg-white">
                @include('frontend.user.client.inc.sidebar')
            </div>
        </div>
    @elseif(isExpert())
        <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035 sidebar-right">
            <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle"
                data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
            <div class="collapse-sidebar bg-white">
                @include('frontend.user.expert.inc.sidebar')
            </div>
        </div>
    @endif
@endif
