@extends('frontend.layouts.app')

@section('content')
    <section class="page-section-sm pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sidebar-layout left-sidebar-layout find-expert-page-layout">
                        <div class="page-sidebar">
                            @livewire('experts.filter')
                        </div>
                        <div class="page-content p-0" wire:loading.class="opacity-25">
                            @livewire('experts.lists')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="margin-bottom: 18px" class="section-title-wrapper mx-auto text-center">
                        <h2 class="section-title">EXPERTS</h2>
                        <p class="section-title-lead">Meet Our Top Experts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @livewire('experts.slider')
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="" style="width: 195px" class="btn btn-md btn-outline-primary border-2">View All</a>
                </div>
            </div>
        </div>
    </section>

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
