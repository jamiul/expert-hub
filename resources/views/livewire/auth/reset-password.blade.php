<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="login-card">
                <h3 class="text-center form-title">Set new Password</h3>
                <form wire:submit="resetPassword">
                    <x-form.input type="email" label="Email Address" wire:model.blur="email" placeholder="name@example.com"/>
                    <x-form.password type="password" label="Password" wire:model.live.debounce="password" placeholder="New password (8 or more characters)"/>
                    <x-form.password type="password" label="Confirm Password" wire:model.live.debounce="password_confirmation" placeholder="New password (8 or more characters)"/>
                    <div class="d-grid mt-3">
                        <button class="btn btn-md btn-primary" type="submit">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>