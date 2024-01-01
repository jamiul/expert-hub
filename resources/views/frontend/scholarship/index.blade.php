@extends('frontend.layouts.app')
@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sidebar-layout scholarship-database-page-layout">

                        @livewire('scholarship.filter')
                        @livewire('scholarship.lists')

                    </div>
                </div>
            </div>

            <div class="row mt-60">
                <div class="col text-center">
                    @include('frontend.scholarship._instructor')
                </div>
            </div>
        </div>
    </section>
@endsection
@push('bottom_scripts')
@vite('resources/js/owl.carousel.min.js')
@vite('resources/js/scholarship-database.js')
@endpush
