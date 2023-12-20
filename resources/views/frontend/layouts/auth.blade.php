<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EduExHub</title>
        @vite(['resources/sass/bootstrap.scss', 'resources/js/app.js'])
        @vite('resources/css/app.css')
        @vite('resources/css/auth.css')
        @vite('resources/css/components.css')
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
        <script>
            function openModal(id){
                const modal = new bootstrap.Modal(document.getElementById(id))
                modal.show();
            }
            function closeModal(id){
                const modal = new bootstrap.Modal(document.getElementById(id));
                modal.hide();
                document.body.classList.remove('modal-open');
                document.body.style.overflow = 'initial';
                document.querySelectorAll(".modal-backdrop").forEach(el => el.remove());
            }
        </script>
    </body>
</html>