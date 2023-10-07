@extends('frontend.layouts.app')
@push('top_styles')
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/aboutUs.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/home.css') }}">
@endpush
@section('content')
    <div class="container-main-projects-banner">
        <div class="mb-4 mt-lg-1 pb-lg-4" style="background:#275846">
            <div class="row rounded-0 px-2 mx-4">
                <div class="col-lg-6 col-sm-12 my-auto">
                    <h3 class="text-white fw-700 fs-30 mt-3 site-font ">Welcome to {{ config('app.name') }}
                    </h3>
                    <p class="fw-400 text-white text-justify fs-18 mb-2 site-font">{{ config('app.name') }}is a one stop
                        education expert
                        hub, featuring top academic experts across diverse fields. Whether it's a personal or institutional
                        project or media interviews, our pool of top academic experts is here to assist.
                    </p>
                    <a href="register?type=2"
                        class="btn rounded border site-font fs-20 mt-lg-3 frequently-qsn-title  text-white">Get Started
                    </a>

                </div>
                <div class="col-lg-2 col-sm-12 "></div>
                <div class="col-lg-4 col-sm-12 ">
                    <img class="banner-img  "
                        src="{{ asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="whyFreeEdu-container-main mb-5 " style="background-color:#F2F7F2">
        <section>
            @include('frontend.aboutUs.about-eduExHub')
        </section>
        <hr>
        <section class="">
            @include('frontend.aboutUs.make-impressive')
        </section>
        <hr>
        {{-- EduExperts – find the right work for you --}}
        <section>
            @include('frontend.aboutUs.eduExpert-steps')

        </section>
        {{-- Clients – find the best client for you --}}
        @include('frontend.aboutUs.client-steps')
        <hr>

        {{-- Reviews – how reviews work on EduExHub --}}
        @include('frontend.aboutUs.reviews')
        {{-- FAQS --}}
        @include('frontend.aboutUs.faq')

    </div>
    </div>
    </div>

    <script>
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>
@endsection
