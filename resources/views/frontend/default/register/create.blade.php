<form class="" id="reg-form" method="POST" action="{{ route('register.mail.store') }}">
  @csrf
  <div class="form-group">
    <label class="form-label" for="email">{{ translate('Email address') }}</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
      id="signinSrEmail" placeholder="{{ translate('Email address') }}" required>
    @error('email')
    <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
  </div>

  @if(get_setting('google_recaptcha_activation_checkbox') == 1)
  <div class="form-group">
    <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
  </div>
  @endif

  <div class="mb-5">
    <button type="submit"
      class="btn btn-block btn-primary rounded-1">{{ translate('Registration') }}</button>
  </div>

  @if(\App\Utility\SettingsUtility::get_settings_value('facebook_login_activation_checkbox') == 1 ||
  \App\Utility\SettingsUtility::get_settings_value('twitter_login_activation_checkbox') == 1 ||
  \App\Utility\SettingsUtility::get_settings_value('google_login_activation_checkbox') == 1 ||
  \App\Utility\SettingsUtility::get_settings_value('linkedin_login_activation_checkbox') == 1)
  <div class="mb-5">
    <div class="separator mb-3">
      <span class="bg-white px-3">{{ translate('Or Login With') }}</span>
    </div>

    <ul class="list-inline social colored text-center">
      @if (\App\Utility\SettingsUtility::get_settings_value('facebook_login_activation_checkbox') == 1)
      <li class="list-inline-item">
        <a href="{{ route('social.login', ['provider' => 'facebook']) }}" class="facebook"
          title="Facebook"><i class="lab la-facebook-f"></i></a>
      </li>
      @endif
      @if (\App\Utility\SettingsUtility::get_settings_value('twitter_login_activation_checkbox') == 1)
      <li class="list-inline-item">
        <a href="{{ route('social.login', ['provider' => 'twitter']) }}" class="twitter" title="Twitter"><i
            class="lab la-twitter"></i></a>
      </li>
      @endif
      @if (\App\Utility\SettingsUtility::get_settings_value('google_login_activation_checkbox') == 1)
      <li class="list-inline-item">
        <a href="{{ route('social.login', ['provider' => 'google']) }}" class="google" title="Google"><i
            class="lab la-google"></i></a>
      </li>
      @endif
      @if (\App\Utility\SettingsUtility::get_settings_value('linkedin_login_activation_checkbox') == 1)
      <li class="list-inline-item">
        <a href="{{ route('social.login', ['provider' => 'linkedin']) }}" class="linkedin"
          title="Linkedin"><i class="lab la-linkedin-in"></i></a>
      </li>
      @endif
    </ul>
  </div>
  @endif

  <div class="text-center">
    <p class="text-muted mb-0">{{ translate("Already have an account?") }}</p>
    <a href="{{ route('login') }}">{{ translate('Login to your account') }}</a>
  </div>
</form>