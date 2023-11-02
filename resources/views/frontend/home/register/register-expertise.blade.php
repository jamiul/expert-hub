@extends('frontend.layouts.front-layout')

@section('content')
    @include('frontend.home.register.partials._breadcrumb')
    @include('frontend.home.register.partials._register-expertise')

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
