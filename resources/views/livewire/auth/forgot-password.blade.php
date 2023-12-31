<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="login-card">
                <h3 class="text-center form-title">Forgot your password?</h3>
                <p>No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. </p>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form wire:submit="sendPasswordResetLink">
                    <x-form.input type="email" label="Email Address" wire:model.blur="email" placeholder="name@example.com"/>
                    <div class="d-grid mt-3">
                        <button class="btn btn-md btn-primary" type="submit">Email Password Reset Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
