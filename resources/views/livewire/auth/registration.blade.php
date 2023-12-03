<div class="container mb-5">
    <div class="row justify-content-center {{ $currentStep != 1 ? 'd-none' : '' }}">
        <div class="col-6">
            <div class="registration-card">
                <h3 class="text-center form-title">Join as an Expert or Client</h3>
                @error('type')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <label class="usertype-radio">
                    <div class="usertype-label">
                        <div class="usertype-icon">
                            <img src="{{ asset('assets/frontend/img/register1.png') }}">
                        </div>
                        <h4>I’m an Expert</h4>
                    </div>
                    <input class="form-check-input" type="radio" wire:model="type" value="Expert">
                </label>
                <label class="usertype-radio">
                    <div class="usertype-label">
                        <div class="usertype-icon">
                            <img src="{{ asset('assets/frontend/img/register2.png') }}">
                        </div>
                        <h4>I’m an Client</h4>
                    </div>
                    <input class="form-check-input" type="radio" wire:model="type" value="Client">
                </label>
                <div class="mt-3">
                    <button class="py-3 button button-block button-primary" wire:click="typeSelected" type="button">Create Account</button>
                </div>
                <p class="auth-footer">Already have an account, <a class="link-button" href="{{ route('auth.login') }}">Sign In</a></p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center {{ $currentStep != 2 ? 'd-none' : '' }}">
        <div class="col-6">
            <div class="registration-card">
                <h3 class="text-center form-title">Sign Up</h3>
                <div class="social-registration-block">
                    <ul>
                        <li><a href="#"><img src="{{ asset('assets/frontend/img/google.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/frontend/img/apple.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/frontend/img/linkedin.png') }}"></a></li>
                    </ul>
                </div>
                <div class="separator">
                    <span>OR</span>
                </div>
                <form wire:submit="save">
                    <div class="d-flex">
                        <x-form.select class="me-3" label="Title" name="title">
                            <option value="">Your title</option>
                            @foreach ($titles as $title)
                                <option value="{{ $title }}">{{ $title }}</option>
                            @endforeach
                        </x-form.select>
                        <x-form.input class="me-3" type="text" label="First Name" name="first_name" placeholder="Your first name"/>
                        <x-form.input type="text" label="Last Name" name="last_name" placeholder="Your last name"/>
                    </div>
                    <x-form.input type="email" label="Email Address" name="email" placeholder="name@example.com"/>
                    <x-form.input type="password" label="Password" name="password" placeholder="Your password (8 or more characters)"/>
                    <x-form.select label="Country" name="country_id">
                        <option value="">Select country</option>
                        @foreach ($countries as $id => $country)
                            <option value="{{ $id }}">{{ $country }}</option>
                        @endforeach
                    </x-form.select>
                    <div class="registration-checkboxes">
                        <x-form.check name="send_tips">
                            Send me emails with tips on how to find projects that fit my expertise.
                        </x-form.check>
                        <x-form.check name="terms_agreed" required>
                            Yes, I understand and agree to the <a href="#">EduEXHub Terms of Service</a> ,including the<a href="#">User Agreement</a> and <a href="#">Privacy Policy .</a>
                        </x-form.check>
                    </div>
                    <div class="mt-3">
                        <button class="button button-block button-primary" type="submit">Join as an Expert</button>
                    </div>
                </form>
                <p class="auth-footer">Already have an account, <a class="link-button" href="{{ route('auth.login') }}">Sign In</a></p>
            </div>
        </div>
    </div>
</div>