@extends('frontend.layouts.app')

@section('content')
<section class="my-60">
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

<div class="mb-60">
    <livewire:require-steps :$title />
</div>

@endsection

@push('bottom_scripts')
<script>
    function toggleAccordion(header) {
        header.classList.toggle("accordion-item-active");
        var content = header.nextElementSibling;
        content.style.display = (content.style.display === 'block') ? 'none' : 'block';
    }
</script>
@vite('resources/js/expert.js')
@vite('resources/js/find-project.js')
@endpush
