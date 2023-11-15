<section class="expert-login-area mx-auto my-5">
    <div class="container">
        <div class="sign-up register">
            <div class="container">
                <div class="register-form">
                    <h3>Log in to EduExHub</h3>
                    @error('type')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    <div class="{{ $currentStep != 1 ? 'd-none' : '' }}">
                        <label class="register-ac">
                            <div class="register-img">
                                <div class="register-icon">
                                    <img src="{{ asset('assets/frontend/img/register1.png') }}" alt="">
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
                                    <img src="{{ asset('assets/frontend/img/register-star.png') }}" alt="">
                                </div>
                                <h4>I’m a client</h4>
                            </div>
                            <div class="register-radio">
                                <input type="radio" wire:model="type" value="Client">
                            </div>
                        </label>
                        <div class="mt-3">
                            <button wire:click="typeSelected" class="button button-block button-primary">Next</button>
                        </div>
                    </div>

                    <div class="container {{ $currentStep != 2 ? 'd-none' : '' }}">
                        <form id="form" wire:submit="login">
                            <div class="register-sign-up">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="@error('email') err @enderror" type="email" placeholder="name@example.com" wire:model="email">
                                    @error('email')
                                        <div class="err-msg">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="@error('password') err @enderror" type="password" placeholder="Your password (8 or more characters)" wire:model="password">
                                    @error('password')
                                        <div class="err-msg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="sendemail">
                                <div class="sendemaicheck">
                                    <input type="checkbox" wire:model="remember">
                                    <p>Keep me logged in</p>
                                </div>
                            </div>
                            <div class="forget-password mt-3">
                                <a href="#">Forgot Password?</a>
                            </div>
                            <div class="mt-3">
                                <button class="button button-block button-primary" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="or-area">
                        <p>OR</p>
                    </div>
                    <div class="singup">
                        <p>Don’t have an account, <a href="{{ route('auth.registration') }}">Register Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>