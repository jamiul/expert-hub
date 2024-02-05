<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Expert Gate</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('logo/expert-gate-favicon.ico') }}">
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
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
        <link rel="stylesheet" href="{{ asset('vendor/wire-elements-pro/css/bootstrap-overlay-component.css') }}">
        @stack('top_styles')
    </head>
    <body>
        @auth
            @if(auth()->user()->isClient())
                @include('frontend.layouts.partials.client-nav')
            @endif
            @if(auth()->user()->isExpert())
                @include('frontend.layouts.partials.expert-nav')
            @endif
        @endauth
        @guest
            @include('frontend.layouts.partials.nav')
        @endguest
        @yield('content')
        @include('frontend.layouts.partials.footer')
        @vite('resources/js/filepond.js')
        @vite('resources/js/choices.min.js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @vite('resources/js/owl.carousel.min.js')
        @livewire('modal-pro')
        <script src="{{ asset('vendor/wire-elements-pro/js/overlay-component.js') }}"></script>
        <script>
            function toggleClasses(parentSelector, className) {
                var parentElement = document.querySelector(parentSelector);
                if (parentElement) {
                    // Toggle the specified class on the parent element
                    parentElement.classList.toggle(className);
                } else {
                    console.error('Parent element not found!');
                }
            }

            function submenuTrigger(element, event) {
                event.preventDefault();
                element.parentElement.classList.toggle("active-sub-menu");
            }
        </script>
        @stack('bottom_scripts')
        <x-toaster/>
        @include('frontend.layouts.notify')
        <script>
    function setRating(element) {
        // Add "active" class to the clicked element
        element.classList.add("active");

        // Get the parent element and its data-category attribute
        var parentElement = element.parentElement;
        var category = parentElement.getAttribute("data-category");

        // Get all the siblings of the parent element
        var siblings = Array.from(parentElement.children);

        // Remove "active" class from all siblings
        siblings.forEach(function (sibling) {
            if (sibling !== element) {
                sibling.classList.remove("active");
            }
        });

        // Add "rating-selected" class to the parent element
        parentElement.classList.add("rating-selected");

        // Log the selected rating and category (for demonstration purposes)
        console.log(
            "Category:",
            category,
            "Rating:",
            element.previousElementSibling.value
        );
    }
</script>
    </body>
</html>
