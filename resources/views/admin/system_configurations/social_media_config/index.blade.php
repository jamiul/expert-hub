@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col">
            <div class="pb-4 d-flex">
                <h4 class="mr-3 h6">{{translate('Social Media & Other 3rd Party Configuration')}}</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Facebook Login -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate("Facebook Login")}}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="facebook_login">
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-2">
                                    <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input type="checkbox" @if (getSetting('facebook_login_activation_checkbox') == 1) checked @endif name="facebook_login_activation_checkbox">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('APP ID')}}</label>
                            <input type="hidden" name="types[]" value="FACEBOOK_APP_ID">
                            <input type="text" name="FACEBOOK_APP_ID" class="form-control"
                                   value="{{env('FACEBOOK_APP_ID')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('APP SECRET')}}</label>
                            <input type="hidden" name="types[]" value="FACEBOOK_APP_SECRET">
                            <input type="text" name="FACEBOOK_APP_SECRET" class="form-control"
                                   value="{{env('FACEBOOK_APP_SECRET')}}">
                        </div>
                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google Login -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate("Google Login")}}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="google_login">
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-2">
                                    <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input type="checkbox"  @if (getSetting('google_login_activation_checkbox') == 1) checked @endif name="google_login_activation_checkbox">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('GOOGLE CLIENT ID')}}</label>
                            <input type="hidden" name="types[]" value="GOOGLE_CLIENT_ID">
                            <input type="text" name="GOOGLE_CLIENT_ID" class="form-control"
                                   value="{{env('GOOGLE_CLIENT_ID')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('GOOGLE CLIENT SECRET')}}</label>
                            <input type="hidden" name="types[]" value="GOOGLE_CLIENT_SECRET">
                            <input type="text" name="GOOGLE_CLIENT_SECRET" class="form-control"
                                   value="{{env('GOOGLE_CLIENT_SECRET')}}">
                        </div>
                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Twitter Login -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate("Twitter Login")}}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="twitter_login">
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-2">
                                    <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input type="checkbox"  @if (getSetting('twitter_login_activation_checkbox') == 1) checked @endif name="twitter_login_activation_checkbox">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('TWITTER CLIENT ID')}}</label>
                            <input type="hidden" name="types[]" value="TWITTER_CLIENT_ID">
                            <input type="text" name="TWITTER_CLIENT_ID" class="form-control"
                                   value="{{env('TWITTER_CLIENT_ID')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('TWITTER CLIENT SECRET')}}</label>
                            <input type="hidden" name="types[]" value="TWITTER_CLIENT_SECRET">
                            <input type="text" name="TWITTER_CLIENT_SECRET" class="form-control"
                                   value="{{env('TWITTER_CLIENT_SECRET')}}">
                        </div>
                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- LinkedIn Login -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate("LinkedIn Login")}}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="linkedin_login">
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-2">
                                    <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input type="checkbox"  @if (getSetting('linkedin_login_activation_checkbox') == 1) checked @endif name="linkedin_login_activation_checkbox">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('LINKEDIN CLIENT ID')}}</label>
                            <input type="hidden" name="types[]" value="LINKEDIN_CLIENT_ID">
                            <input type="text" name="LINKEDIN_CLIENT_ID" class="form-control"
                                   value="{{env('LINKEDIN_CLIENT_ID')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('LINKEDIN CLIENT SECRET')}}</label>
                            <input type="hidden" name="types[]" value="LINKEDIN_CLIENT_SECRET">
                            <input type="text" name="LINKEDIN_CLIENT_SECRET" class="form-control"
                                   value="{{env('LINKEDIN_CLIENT_SECRET')}}">
                        </div>
                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google Analytics -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate("Google Analytics")}}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="google_analytics">
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-2">
                                    <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input type="checkbox"  @if (getSetting('google_analytics_activation_checkbox') == 1) checked @endif name="google_analytics_activation_checkbox">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('TRACKING ID')}}</label>
                            <input type="hidden" name="types[]" value="GOOGLE_ANALYTICS_TRACKING_ID">
                            <input type="text" name="GOOGLE_ANALYTICS_TRACKING_ID" class="form-control"
                                   value="{{env('GOOGLE_ANALYTICS_TRACKING_ID')}}">
                        </div>
                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google reCAPTCHA -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate("Google reCAPTCHA")}}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="google_recaptcha">
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-2">
                                    <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input type="checkbox"  @if (getSetting('google_recaptcha_activation_checkbox') == 1) checked @endif name="google_recaptcha_activation_checkbox">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('Site KEY')}}</label>
                            <input type="hidden" name="types[]" value="CAPTCHA_KEY">
                            <input type="text" name="CAPTCHA_KEY" class="form-control"
                                   value="{{env('CAPTCHA_KEY')}}">
                        </div>
                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- facebook Chat -->
        <div class="col-lg-12">
          <div class="card">
          	<div class="card-header">
          		<h6 class="fw-600 mb-0">{{ translate('Facebook Chat') }}</h6>
          	</div>
          	<div class="card-body">
          		<div class="row gutters-10">
          			<div class="col-lg-6">
          				<div class="card shadow-none bg-light">
                      <div class="card-header">
                          <h5 class="mb-0 h6">{{translate('Facebook Chat Setting')}}</h5>
                      </div>
                      <div class="card-body">
                          <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                                enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="social_media_type" value="facebook_chat">
                              <div class="form-group mb-3">
                                  <div class="row">
                                      <div class="col-2">
                                          <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-2">
                                          <label class="aiz-switch aiz-switch-success mb-0">
                                              <input type="checkbox"  @if (getSetting('facebook_chat_activation_checkbox') == 1) checked @endif name="facebook_chat_activation_checkbox">
                                              <span></span>
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group mb-3">
                                  <label for="types">{{translate('FACEBOOK PAGE ID')}}</label>
                                  <input type="hidden" name="types[]" value="FACEBOOK_PAGE_ID">
                                  <input type="text" name="FACEBOOK_PAGE_ID" class="form-control"
                                         value="{{env('FACEBOOK_PAGE_ID')}}">
                              </div>
                              <div class="form-group mb-3 text-right">
                                  <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                              </div>
                          </form>
                      </div>
          				</div>
          			</div>
          			<div class="col-lg-6">
                  <div class="card shadow-none bg-light">
                      <div class="card-header">
                          <h5 class="mb-0 h6">{{ translate('Please be carefull when you are configuring Facebook chat. For incorrect configuration you will not get messenger icon on your user-end site.') }}</h5>
                      </div>
                        <div class="card-body">
                            <ul class="list-group mar-no">
                                <li class="list-group-item text-dark">1. {{ translate('Login into your facebook page') }}</li>
                                <li class="list-group-item text-dark">2. {{ translate('Find the About option of your facebook page') }}.</li>
                                <li class="list-group-item text-dark">3. {{ translate('At the very bottom, you can find the \“Facebook Page ID\”') }}.</li>
                                <li class="list-group-item text-dark">4. {{ translate('Go to Settings of your page and find the option of \"Advance Messaging\"') }}.</li>
                                <li class="list-group-item text-dark">5. {{ translate('Scroll down that page and you will get \"white listed domain\"') }}.</li>
                                <li class="list-group-item text-dark">6. {{ translate('Set your website domain name') }}.</li>
                            </ul>
                        </div>
          				</div>
          			</div>
          		</div>
          	</div>
          </div>
        </div>

        <!-- facebook Pixel -->
        <div class="col-lg-12">
          <div class="card">
          	<div class="card-header">
          		<h6 class="fw-600 mb-0">{{ translate('Facebook Pixel') }}</h6>
          	</div>
          	<div class="card-body">
          		<div class="row gutters-10">
          			<div class="col-lg-6">
          				<div class="card shadow-none bg-light">
                      <div class="card-header">
                          <h5 class="mb-0 h6">{{translate('Facebook Pixel Setting')}}</h5>
                      </div>
                      <div class="card-body">
                          <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                                enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="social_media_type" value="fb_pixel">
                              <div class="form-group mb-3">
                                  <div class="row">
                                      <div class="col-2">
                                          <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-2">
                                          <label class="aiz-switch aiz-switch-success mb-0">
                                              <input type="checkbox"  @if (getSetting('fb_pixel_activation_checkbox') == 1) checked @endif name="fb_pixel_activation_checkbox">
                                              <span></span>
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group mb-3">
                                  <label for="types">{{translate('Pixel ID')}}</label>
                                  <input type="hidden" name="types[]" value="FACEBOOK_PIXEL_ID">
                                  <input type="text" name="FACEBOOK_PIXEL_ID" class="form-control"
                                         value="{{env('FACEBOOK_PIXEL_ID')}}">
                              </div>
                              <div class="form-group mb-3 text-right">
                                  <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                              </div>
                          </form>
                      </div>
          				</div>
          			</div>
          			<div class="col-lg-6">
                  <div class="card shadow-none bg-light">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Please be carefull when you are configuring Facebook pixel.') }}</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group mar-no">
                            <li class="list-group-item text-dark">1. {{ translate('Log in to Facebook and go to your Ads Manager account') }}.</li>
                            <li class="list-group-item text-dark">2. {{ translate('Open the Navigation Bar and select Events Manager') }}.</li>
                            <li class="list-group-item text-dark">3. {{ translate('Copy your Pixel ID from underneath your Site Name and paste the number into Facebook Pixel ID field') }}.</li>
                        </ul>
                    </div>
  	              </div>
          			</div>
          		</div>
          	</div>
          </div>
        </div>

        <!-- facebook Comment -->
        <div class="col-lg-12">
          <div class="card">
          	<div class="card-header">
          		<h6 class="fw-600 mb-0">{{ translate('Facebook Comment') }}</h6>
          	</div>
          	<div class="card-body">
          		<div class="row gutters-10">
          			<div class="col-lg-6">
          				<div class="card shadow-none bg-light">
                      <div class="card-header">
                          <h5 class="mb-0 h6">{{translate('Facebook Comment Setting')}}</h5>
                      </div>
                      <div class="card-body">
                          <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                                enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="social_media_type" value="fb_comment">
                              <div class="form-group mb-3">
                                  <div class="row">
                                      <div class="col-2">
                                          <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-2">
                                          <label class="aiz-switch aiz-switch-success mb-0">
                                              <input type="checkbox"  @if (getSetting('fb_comment_activation_checkbox') == 1) checked @endif name="fb_comment_activation_checkbox">
                                              <span></span>
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group mb-3">
                                  <label for="types">{{translate('Facebook App ID')}}</label>
                                  <input type="hidden" name="types[]" value="FACEBOOK_COMMENT_APP_ID">
                                  <input type="text" name="FACEBOOK_COMMENT_APP_ID" class="form-control"
                                         value="{{env('FACEBOOK_COMMENT_APP_ID')}}">
                              </div>
                              <div class="form-group mb-3 text-right">
                                  <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                              </div>
                          </form>
                      </div>
          				</div>
          			</div>
          			<div class="col-lg-6">
                  <div class="card shadow-none bg-light">
                      <div class="card-header">
                          <h5 class="mb-0 h6">{{ translate('Please be carefull when you are configuring Facebook Comment. For incorrect configuration you will not get comment section on your user-end site.') }}</h5>
                      </div>
                      <div class="card-body">
                          <ul class="list-group mar-no">
                              <li class="list-group-item text-dark">
                                  1. {{ translate('Login into your facebook page') }}
                              </li>
                              <li class="list-group-item text-dark">
                                  2. {{ translate('After then go to this URL https://developers.facebook.com/apps/') }}.
                              </li>
                              <li class="list-group-item text-dark">
                                  3. {{ translate('Create Your App') }}.
                              </li>
                              <li class="list-group-item text-dark">
                                  4. {{ translate('In Dashboard page you will get your App ID') }}.
                              </li>
                          </ul>
                      </div>
                  	</div>
          			</div>
          		</div>
          	</div>
          </div>
        </div>

    </div>

@endsection
