<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/sass/bootstrap.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/components.css') }}">
        <style>
            .auth-nav{
                width: 100%;
                height: 70px;
                margin-bottom: 40px;
                padding-left: 32px;
                box-shadow: 8px 8px 32px 0px rgba(14, 0, 98, 0.06);
            }
            .login-card{
                max-width: 540px;
            }
            .registration-card{
                max-width: 640px;
            }
            .login-card,
            .registration-card{
                margin: auto;
                box-shadow: 12px 12px 48px 0px #0e006221;
                padding: 40px;
                border-radius: 12px;
            }
            .form-title{
                font-size: 28px;
                font-weight: 500;
                color: #303744;
                margin: 0 0 40px;
            }
            .auth-footer{
                margin-top: 40px;
                font-size: 16px;
                color: #303744;
                font-weight: 400;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="auth-nav d-flex align-items-center">
                        <a href="/"><img src="{{ asset('assets/frontend/img/logo.png') }}" /></a>
                    </nav>
                </div>
            </div>
        </div>
        @yield('content')
    </body>
</html>