<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="login-card">
                <h3 class="text-center form-title">Log in to EduExHub</h3>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form wire:submit="login">
                    <x-form.input type="email" label="Email Address" wire:model="email" placeholder="name@example.com"/>
                    <x-form.password label="Password" wire:model="password" placeholder="Your password"/>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <x-form.check name="remember" wire:model="remember">
                            Keep me logged in
                        </x-form.check>
                        <a class="link-button" href="{{ route('password.request') }}">Forgot Password?</a>
                    </div>
                    <div class="d-grid mt-3">
                        <button class="btn btn-md btn-primary" type="submit">Login</button>
                    </div>
                </form>
                <p class="auth-footer">Don’t have an account, <a class="link-button" href="{{ route('auth.registration') }}">Register Now</a></p>
            </div>
        </div>
    </div>
</div>