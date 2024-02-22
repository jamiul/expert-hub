<section class="page-section-sm">

    <div class="container mb-5">
        <div class="row justify-content-center {{ $currentStep != 1 ? 'd-none' : '' }}">
            <div class="col">
                <div class="registration-card" x-data="{ buttonText: 'Apply as an Expert'}">
                    <h3 class="text-center form-title">Join as an Expert or Client</h3>
                    @error('type')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                    <label class="usertype-radio">
                        <div class="usertype-label">
                            <div class="usertype-icon">
                                <img src="{{ asset('assets/frontend/img/register1.png') }}">
                            </div>
                            <p>I’m an Expert</p>
                        </div>
                        <input x-on:click="buttonText = 'Apply as an Expert'" class="form-check-input" type="radio"
                               wire:model.live="type" value="{{ App\Enums\ProfileType::Expert->value }}">
                    </label>
                    <label class="usertype-radio">
                        <div class="usertype-label">
                            <div class="usertype-icon">
                                <img src="{{ asset('assets/frontend/img/register2.png') }}">
                            </div>
                            <p>I’m a Client</p>
                        </div>
                        <input x-on:click="buttonText = 'Apply as a Client'" class="form-check-input" type="radio"
                               wire:model.live="type" value="{{ App\Enums\ProfileType::Client->value }}">
                    </label>
                    <div class="d-grid mt-3">
                        <button x-text="buttonText" class="btn btn-md btn-primary" wire:click="typeSelected"
                                type="button">Apply as an Expert
                        </button>
                    </div>
                    <p class="auth-footer">Already have an account, <a class="link-button"
                                                                       href="{{ route('auth.login') }}">Sign In</a></p>
                </div>
            </div>
        </div>
        <div class="row {{ $currentStep != 2 ? 'd-none' : '' }}">
            <div class="col justify-content-center">
                <div class="auth-card">
                    <div class="card-body">
                        <div class="auth-card-title">
                            <h1 class="h4">Sign Up</h1>
                        </div>
                        <form wire:submit="save">
                            <div class="social-auth col-items-2">
                                <div class="social-auth-item">
                                    <a href="#">
                                        <x-icon.logo-google/>
                                        Google
                                    </a>
                                </div>

                                <div class="social-auth-item">
                                    <a href="#">
                                        <x-icon.logo-linkedin-fill/>
                                        LinkedIn
                                    </a>
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

                            <x-form.input type="text" label="First Name" wire:model.live="first_name"
                                          placeholder="Your first name"/>

                            <x-form.input type="text" label="Last Name" wire:model.blur="last_name"
                                          placeholder="Your last name"/>

                            <x-form.input type="email" label="Email Address" wire:model.live.debounce.1000="email"
                                          placeholder="name@example.com"/>
                            <x-form.input type="tel" label="Phone (Optional)" wire:model.blur="phone"
                                          placeholder="Your phone number"/>
                            <x-form.password type="password" label="Password" wire:model.live.debounce="password"
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
                                <x-form.check wire:model.boolean.change="terms_agreed">
                                    Yes, I understand and agree to the <a target="_blank"
                                                                          href="{{ route('terms-of-service') }}">Expert
                                        Gate Terms of Service</a>,
                                    including the <a target="_blank" href="{{ route('user-agreement') }}">User
                                        Agreement</a> and <a target="_blank" href="{{ route('privacy-policy') }}">Privacy
                                        Policy.</a>
                                </x-form.check>
                            </div>
                            <div class="d-grid mt-3">
                                <button class="btn btn-md btn-primary" type="submit">Create Account</button>
                            </div>
                        </form>
                        <div class="auth-card-bottom">
                            <p class="">Already have an account, <a class="link-button"
                                                                    href="{{ route('auth.login') }}">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
