<section class="page-section-sm profile-setup">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="user-registration-layout">
                    @include('livewire.auth.expert-steps')
                    <div class="progress-step-content-wrapper">
                        @if($currentStep === 1)
                            <div class="progress-step-content">
                                <div class="auth-card" style="max-width: 731px">
                                    <div class="auth-card-title mb-40">
                                        <h1 class="h4 text-center">Sign Up</h1>
                                    </div>
                                    <form wire:submit="createAccount">
                                        <div class="social-auth col-items-2">
                                            <div class="social-auth-item">
                                                <a href="#">
                                                    <x-icon.logo-google/>
                                                    Google</a>
                                            </div>
                                            <div class="social-auth-item">
                                                <a href="#">
                                                    <x-icon.logo-linkedin-fill/>
                                                    LinkedIn</a>
                                            </div>
                                        </div>
                                        {{--social-auth--}}
                                        <div class="separator">
                                            <span>OR</span>
                                        </div>
                                        <x-form.select label="Title" wire:model.change="title">
                                            <option value="">Your title</option>
                                            @foreach ($titles as $title)
                                                <option value="{{ $title }}">{{ $title }}</option>
                                            @endforeach
                                        </x-form.select>
                                        <x-form.input type="text" label="Full Name" wire:model.blur="name"
                                                      placeholder="Your full name"/>
                                        <x-form.input type="email" label="Email Address"
                                                      wire:model.live.debounce.1000="email"
                                                      placeholder="name@example.com"/>
                                        <x-form.phone label="Phone" wire:model.blur="phone"
                                                      placeholder="Your phone number"/>
                                        <x-form.password type="password" label="Password"
                                                         wire:model.live.debounce="password"
                                                         placeholder="Your password (8 or more characters)"/>
                                        <x-form.password type="password" label="Confirm Password"
                                                         wire:model.live.debounce="password_confirmation"
                                                         placeholder="Your password (8 or more characters)"/>
                                        <x-form.choice label="Country" wire:model.change="country_id">
                                            <option value="">Select country</option>
                                            @foreach ($countries as $id => $country)
                                                <option value="{{ $id }}">{{ $country }}</option>
                                            @endforeach
                                        </x-form.choice>
                                        <div class="registration-checkboxes">
                                            <x-form.check wire:model.boolean.change="terms">
                                                Yes, I understand and agree to the <a target="_blank"
                                                                                      href="{{ route('terms-of-service') }}">Expert
                                                    Gate Terms of Service</a>,
                                                including the <a target="_blank" href="{{ route('user-agreement') }}">User
                                                    Agreement</a> and <a target="_blank"
                                                                         href="{{ route('privacy-policy') }}">Privacy
                                                    Policy.</a>
                                            </x-form.check>
                                        </div>
                                        <div class="d-grid mt-3">
                                            <button class="btn btn-md btn-primary" type="submit">Create Account</button>
                                        </div>
                                    </form>
                                    <div class="auth-card-bottom">
                                        <p class="">Already have an account, <a class="link-button"
                                                                                href="{{ route('auth.login') }}">Sign
                                                In</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>