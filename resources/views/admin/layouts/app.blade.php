<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Expert Gate</title>
        <script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-clipboard@2.x.x/dist/alpine-clipboard.js" defer></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        @vite(['resources/sass/bootstrap.scss', 'resources/js/app.js'])
        @vite('resources/css/filepond.css')
        @vite('resources/css/choices.css')
        @vite('resources/css/app.css')
        @vite('resources/css/style.css')
        @vite('resources/css/owl.carousel.min.css')
        @vite('resources/css/owl.theme.default.css')
        @vite('resources/css/client-dashboard.css')
        @vite('resources/css/auth.css')
        @vite('resources/css/components.css')
        @vite('resources/css/scholarship.css')
        <link rel="stylesheet" href="{{ asset('vendor/wire-elements-pro/css/bootstrap-overlay-component.css') }}">
    </head>
    <body>
        <div class="admin-layout" sidebar-size="small">
            <!-- start header -->
            <div class="admin-header">
                @include('admin.layouts.partials.header')
            </div>
            <!-- end header -->
            <!-- start left sidebar -->
            <div class="admin-sidebar">
                @include('admin.layouts.partials.sidebar')
            </div>
            <!-- end left sidebar -->
            <main class="admin-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
        </div>
        @vite('resources/js/filepond.js')
        @vite('resources/js/choices.min.js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @vite('resources/js/owl.carousel.min.js')
        @livewire('modal-pro')
        <script src="{{ asset('vendor/wire-elements-pro/js/overlay-component.js') }}"></script>
        <script>
            function submenuTrigger(element, event) {
                event.preventDefault();
                element.parentElement.classList.toggle("active-sub-menu");
            }

            function toggleClasses(parentSelector, className) {
                var parentElement = document.querySelector(parentSelector);
                if (parentElement) {
                    // Toggle the specified class on the parent element
                    parentElement.classList.toggle(className);
                } else {
                    console.error('Parent element not found!');
                }
            }

            function removeClass(elementSelector, className) {
                var element = document.querySelector(elementSelector);

                if (element) {
                    // Remove the specified class from the element
                    element.classList.remove(className);
                } else {
                    console.error('Element not found!');
                }
            }
        </script>
        <x-toaster/>
    </body>
</html>
