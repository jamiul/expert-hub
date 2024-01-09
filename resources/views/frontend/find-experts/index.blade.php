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
