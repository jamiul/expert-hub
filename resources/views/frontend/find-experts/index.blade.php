@extends('frontend.layouts.app')

@section('content')
<section class="my-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sidebar-layout left-sidebar-layout find-expert-page-layout">
                    @livewire('experts.filter')
                    @livewire('experts.lists')
                </div>
            </div>
        </div>
    </div>
</section>
    @include('frontend.find-experts.partials._slider')
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
