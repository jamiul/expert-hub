<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="login-card">
                <h3 class="text-center form-title">EduExHub Admin</h3>
                <form wire:submit="login">
                    <x-form.input type="email" label="Email Address" wire:model.live="email" placeholder="name@example.com"/>
                    <x-form.input type="password" label="Password" wire:model.live="password" placeholder="Your password"/>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <x-form.check wire:model.live="remember">
                            Keep me logged in
                        </x-form.check>
                    </div>
                    <button class="button button-block button-primary" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>