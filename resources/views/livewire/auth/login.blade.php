<section class="expert-login-area mx-auto my-5">
    <div class="container">
        <div class="sign-up register">
            <div class="container">
                <div class="register-form">
                    <h3>Log in to EduExHub</h3>
                    <div class="container">
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