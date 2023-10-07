@include('frontend.layouts.partials.head')

<div class="aiz-main-wrapper d-flex flex-column">

    @include('frontend/default.inc.header')

    <!-- ========== MAIN CONTENT ========== -->

    <div class="p-0 m-0 bg-white">
        @yield('content')
    </div>

    <!-- ========== END MAIN CONTENT ========== -->

    @include('frontend/default.inc.footer')

</div>


@if (get_setting('show_website_popup') == 'on')
    <div class="modal website-popup removable-session d-none" data-key="website-popup" data-value="removed">
        <div class="absolute-full bg-black opacity-60"></div>
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md">
            <div class="modal-content position-relative border-0 rounded-0">
                <div class="aiz-editor-data">
                    {!! get_setting('website_popup_content') !!}
                </div>
                @if (get_setting('show_subscribe_form') == 'on')
                    <div class="pb-5 pt-4 px-5">
                        <form class="" method="POST" action="{{ route('subscribers.store') }}">
                            @csrf
                            <div class="form-group mb-0">
                                <input type="email" class="form-control"
                                       placeholder="{{ translate('Your Email Address') }}" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">
                                {{ translate('Subscribe Now') }}
                            </button>
                        </form>
                    </div>
                @endif
                <button class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session"
                        data-key="website-popup" data-value="removed" data-toggle="remove-parent"
                        data-parent=".website-popup">
                    <i class="la la-close fs-20"></i>
                </button>
            </div>
        </div>
    </div>
@endif

@yield('modal')

@if (get_setting('facebook_chat_activation_checkbox') == 1)
    <script type="text/javascript">
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v3.3'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="fb-root"></div>
    <!-- Your customer chat code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="{{ env('FACEBOOK_PAGE_ID') }}">
    </div>
@endif

@include('frontend.layouts.partials.footer-scripts')
