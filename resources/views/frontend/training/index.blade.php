@extends('frontend.layouts.app')

@section('content')
<section class="my-60">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sidebar-layout left-sidebar-layout find-projects-layout">

                    @livewire('training.filter')
                    @livewire('training.lists')

                </div>
            </div>
        </div>
    </div>
</section>

@livewire('experts.slider')

@endsection

@push('bottom_scripts')
@vite('resources/js/owl.carousel.min.js')
@vite('resources/js/scholarship-database.js')
@endpush
