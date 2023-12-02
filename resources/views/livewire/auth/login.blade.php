<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="login-card">
                <h3 class="text-center form-title">Log in to EduExHub</h3>
                <form wire:submit="login">
                    <x-form.input type="email" label="Email Address" name="email" placeholder="name@example.com"/>
                    <x-form.input type="password" label="Password" name="password" placeholder="Your password"/>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <x-form.check name="remember">
                            Keep me logged in
                        </x-form.check>
                        <a class="link-button" href="#">Forgot Password?</a>
                    </div>
                    <button class="button button-block button-primary" type="submit">Login</button>
                </form>
                <p class="auth-footer">Don’t have an account, <a class="link-button" href="{{ route('auth.registration') }}">Register Now</a></p>
            </div>
        </div>
    </div>
</div>