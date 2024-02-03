@extends('frontend.layouts.app')
@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="edux-sidebar-layout scholarship-database-page-layout">
                        <div class="scholarship-database-content-col">
                            <div class="scholarship-database-content-list">
                                <div class="edux-scholarship-top-item">
                                    <div class="scholarship-database-content-list-item">
                                        <div class="scholarship-university-logo">
                                            <div>
                                                @if ($scholarship->university?->logo)
                                                    <img src="{{ asset($scholarship->university?->logo) }}"/>
                                                @else
                                                    <img src="{{ asset('assets/university-logo/university_of_melbourne.png') }}"/>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="scholarship-university-info">
                                            <h3 class="h6 mb-1"> {{ $scholarship->title }} </h3>
                                            @if (isset($scholarship->university))
                                            <p class="mb-0 text-sm fw-medium">{{$scholarship->university->name}} | {{$scholarship->country?->name}}</p>
                                            @endif
                                        </div>
                                        <div class="scholarship-action">
                                            <div class="d-flex justify-content-end flex-wrap">
                                                <button wire:click="favourite({{ $scholarship->id }})" class="btn btn-outline-light m-1 {{ $scholarship->favourited() ? 'favourited' : ''}}">
                                                    <x-icon.favorite/>
                                                </button>
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-light m-1" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                        <x-icon.share/>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" target="_blank" href="https://linkedin.com/shareArticle?u={{ route('scholarship-database.show', $scholarship) }}">
                                                                <x-icon.linkedin/>Linkedin
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('scholarship-database.show', $scholarship) }}">
                                                                <x-icon.facebook/>Facebook
                                                            </a>
                                                        </li>
                                                        <li x-data="{ scholarshipUrl: '{{ route('scholarship-database.show', $scholarship) }}' }">
                                                            <button class="dropdown-item" x-clipboard="scholarshipUrl">
                                                                <x-icon.copy/>Copy Link
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scholarship-details pt-3">
                                        <div class="edux-custom-table custom-table text-sm">
                                            <div class="tr">
                                                <div class="td">Application Deadline</div>
                                                <div class="td fw-small">
                                                    {{ $scholarship->deadline ? $scholarship->deadline->format('d F Y') : 'Avaiable' }}
                                                </div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Study area</div>
                                                <div class="td fw-small">
                                                    {{ $scholarship->studyAreas->count() ? $scholarship->studyAreas->implode('name', ', ') : 'N/A' }}
                                                </div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Study Level</div>
                                                <div class="td fw-small">
                                                    {{ $scholarship->studyLevels->count() ? $scholarship->studyLevels->implode('name.value', ', ') : 'N/A'}}
                                                </div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Student type</div>
                                                <div class="td fw-small">{{ $scholarship->student_type ? $scholarship->student_type : 'n/a' }}</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Scholarship Website</div>
                                                <div class="td fw-small">
                                                    @if($scholarship->link)
                                                    <a target="_blank" class="text-decoration-underline" href="{{ $scholarship->link }}">Click Here</a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="tr">
                                                <a class="edux-btn-primary  mt-3" href="{{ route('find.experts') }}">Find Experts</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col text-center">
                    {{-- @include('frontend.scholarship._instructor') --}}
                </div>
            </div>
        </div>
    </section>
@endsection
@push('bottom_scripts')
@vite('resources/js/owl.carousel.min.js')
@vite('resources/js/scholarship-database.js')
@endpush
