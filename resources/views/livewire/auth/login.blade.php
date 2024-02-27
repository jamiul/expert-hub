<section class="page-section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="auth-card">
                    <div class="card-body">
                        <div class="auth-card-title">
                            <h1 class="h4">Log in to ExpertGate</h1>
                        </div>
                        <x-auth-session-status class="mb-4" :status="session('status')"/>
                        <form wire:submit="login">
                            <x-form.input type="email" label="Email Address" wire:model="email"
                                          placeholder="name@example.com"/>
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
                        <div class="separator">
                            <span>OR</span>
                        </div>
                        <div class="social-auth">
                            <div class="social-auth-item">
                                <a href="{{ route('google.redirect') }}">
                                    <x-icon.logo-google/>
                                    Google</a>
                            </div>
                            <div class="social-auth-item">
                                <a href="{{ route('linkedin.redirect') }}">
                                    <x-icon.logo-linkedin-fill/>
                                    LinkedIn</a>
                            </div>
                        </div>
                        <p class="auth-card-bottom">
                            Don’t have an account, join as an
                            <a class="link-button" href="{{ route('auth.expert.registration') }}">Expert</a> or
                            <a class="link-button" href="{{ route('auth.client.registration') }}">Client</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
