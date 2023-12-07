@extends('frontend.layouts.app')

@section('content')
    @include('frontend.home.partials._product_slider')
    @include('frontend.home.partials._require_main')
    @include('frontend.home.partials._expert_main')
    @include('frontend.home.partials._categories_main')
    @include('frontend.home.partials._team')
    @include('frontend.home.partials._eduexhub')
    @include('frontend.home.partials._scholarship')
    @include('frontend.home.partials._academic_block')
    @include('frontend.home.partials._skillsets')
@endsection

@push('bottom_scripts')
    <script>
        $(document).ready(function () {
            $(".at-title").click(function () {
                $(this).toggleClass("active").next(".at-tab").slideToggle().parent().siblings().find(".at-tab").slideUp().prev().removeClass("active");
            });
            $(".carousel-inner .thumb").click(function () {
                if(!$(this).hasClass('active'))
                {
                    $(".carousel-inner .thumb").removeClass("active");
                    $(this).addClass("active");
                }
            });
        });
    </script>
@endpush
