@extends('frontend.layouts.app')

@section('content')
    @livewire('project.eoi.index', ['project' => $project])
    
    <script>
        function toggleAccordion(header) {
            header.classList.toggle("accordion-item-active");
            var content = header.nextElementSibling;
            content.style.display = (content.style.display === 'block') ? 'none' : 'block';
        }
    </script>
@endsection
