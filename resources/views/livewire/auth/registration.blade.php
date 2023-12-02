<div class="container">
    <div class="row {{ $currentStep != 1 ? 'd-none' : '' }}">
        <div class="col-6">
            <div class="registration-card">
                <h3 class="text-center form-title">Join as an Expert or Client</h3>
                @error('type')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="register {{ $currentStep != 1 ? 'd-none' : '' }}">
            <div class="container">
                <div class="register-form">
                    <h3>Join as an Expert or Client</h3>
                    @error('type')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    <label class="register-ac">
                        <div class="register-img">
                            <div class="register-icon">
                                <img src="{{ asset('assets/frontend/img/register1.png') }}">
                            </div>
                            <h4>I’m an Expert</h4>
                        </div>
                        <div class="register-radio">
                            <input type="radio" wire:model="type" value="Expert">
                        </div>
                    </label>
                    <label class="register-ac">
                        <div class="register-img">
                            <div class="register-icon">
                                <img src="{{ asset('assets/frontend/img/register2.png') }}">
                            </div>
                            <h4>I’m a Client</h4>
                        </div>
                        <div class="register-radio">
                            <input type="radio" wire:model="type" value="Client">
                        </div>
                    </label>
                    <div class="mt-3">
                        <button class="py-3 button button-block button-primary" wire:click="typeSelected" type="button">Create Account</button>
                    </div>
                    <p class="auth-footer">Already have an account, <a class="link-button" href="{{ route('auth.login') }}">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="registration-card">
                <h3 class="text-center form-title">Sign Up</h3>
                <div class="link-open">
                    <ul>
                        <li><a href="#"><img src="{{ asset('assets/frontend/img/google.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/frontend/img/apple.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/frontend/img/linkedin.png') }}"></a></li>
                    </ul>
                </div>
                <div class="or-border">
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
                    <x-form.check name="send_tips">
                        Send me emails with tips on how to find projects that fit my expertise.
                    </x-form.check>
                    <x-form.check name="terms_agreed" required>
                        Yes, I understand and agree to the <a href="#">EduEXHub Terms of Service</a> ,including the<a href="#">User Agreement</a> and <a href="#">Privacy Policy .</a>
                    </x-form.check>
                    <button class="button button-block button-primary" type="submit">Join as an Expert</button>
                </form>
                <p class="auth-footer">Already have an account, <a class="link-button" href="{{ route('auth.login') }}">Sign In</a></p>
            </div>
        </div>
    </div>
</div>