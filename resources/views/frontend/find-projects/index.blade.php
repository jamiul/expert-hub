@extends('frontend.layouts.app')

@section('content')
<section class="page-section-sm find-project-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sidebar-layout left-sidebar-layout find-projects-layout">
                    @livewire('find-projects.filter')
                    @livewire('find-projects.lists')
                </div>
            </div>
        </div>
    </div>
</section>

<div class="project-work-steps">
    <livewire:require-steps :$title />
</div>

@endsection

@push('bottom_scripts')
@vite('resources/js/expert.js')
@vite('resources/js/find-project.js')
@endpush
