@extends('frontend.layouts.app')

@section('content')
    <div class="find-consultant databasepading mt-60">
        <div class="container">
            <div class="row">
                @livewire('experts.filter')
                @livewire('experts.lists')
            </div>
        </div>
    </div>
    @include('frontend.expert.partials._slider')
@endsection

@push('bottom_scripts')
@vite('resources/js/expert.js')
@vite('resources/js/find-project.js')
@endpush
