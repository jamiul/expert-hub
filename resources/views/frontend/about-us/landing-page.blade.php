@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.about-us.partials._banner')
    @include('frontend.about-us.partials._info')
    @include('frontend.about-us.partials._slider')
    @include('frontend.about-us.partials._mission')
    @include('frontend.about-us.partials._eduexhub')
    @include('frontend.about-us.partials._team')
    @include('frontend.about-us.partials._story')
@endsection

@push('bottom_scripts')
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>
@endpush
