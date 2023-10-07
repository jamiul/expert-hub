@extends('frontend.layouts.app')
@push('top_styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/default/css/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100&display=swap" rel="stylesheet">
@endpush
@section('content')
    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="row mb-5">
                @section('content')
                    <div class="border-bottom">
                        <div class="container mt-4">
                            {{-- breadcrumb  --}}
                            @include('frontend.project.breadcrumb')
                        </div>
                    </div>
                    <section class="py-4 py-lg-5">
                        <div class="container">
                            <div class="mx-lg-5 mx-xl-5 mx-md-5 ">
                                <div class="row ">
                                    <div class="col-xl-9 col-md-7 col-lg-8 pr-lg-0 border shadow-sm">
                                        @include('frontend.project.left-side')
                                    </div>
                                    <div class="col-xl-3 col-md-5  mt-lg-0 mt-sm-3 col-lg-5 pl-0 shadow-sm border">
                                        @include('frontend.project.right-side')
                                    </div>
                                </div>
                            </div>
                            <div class="mx-4">
                                @include('frontend.project.projects')
                            </div>
                        </div>
                    </section>
                @endsection
            </div>
        </div>
    </section>
@endsection
