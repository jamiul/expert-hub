@extends('frontend.layouts.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="login-card">
                <h3 class="text-center form-title">EduExHub Admin</h3>
                <form action="{{ route('admin.projects') }}">
                    {{-- <x-form.input type="email" label="Email Address" name="email" placeholder="name@example.com"/> --}}
                    {{-- <x-form.input type="password" label="Password" name="password" placeholder="Your password"/> --}}
                    <div class="d-flex justify-content-between align-items-baseline">
                        {{-- <x-form.check name="remember">
                            Keep me logged in
                        </x-form.check> --}}
                    </div>
                    <button class="button button-block button-primary" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection