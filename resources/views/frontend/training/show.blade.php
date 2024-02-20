@extends('frontend.layouts.app')

@section('content')
<section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sidebar-layout left-sidebar-layout training-details-layout">
                        <div class="page-sidebar">
                            <div class="sidebar-widget bb-1 mb-4">
                                <button class="btn btn-primary btn-md w-100" onclick="Livewire.dispatch('modal.open', {component: 'training.register', arguments: {'training': {{$training}} }})">
                                    Register Now</button>
                                <button class="btn btn-outline-primary border-2 btn-md w-100 mt-2 btn-has-icon">
                                    <x-icon.chat width="20" height="20" fill="#0036E3"/>
                                    Message Now
                                </button>
                                <div class="mt-2 share-widget">
                                    <button class="btn btn-outline-light border-2 btn-md btn-icon w-100">
                                        <x-icon.heart width="24" height="24" fill="#0036E3"/>
                                    </button>
                                    <button class="btn btn-outline-light border-2 btn-md btn-icon w-100">
                                        <x-icon.share width="24" height="24" fill="#0036E3"/>
                                    </button>
                                </div>
                                <p class="text-sm my-3"><strong class="fw-medium">Note:</strong> You will be asked to
                                    sign up/sign in to ExpertGate before continuing</p>
                            </div>

                            <div class="sidebar-widget">
                                <div class="training-summary-widget">
                                    <div>
                                        <p class="m-0 text-sm">Seminar Dates</p>
                                        <p class="m-0 text-sm fw-medium">{{ $training->start_date->format('d F Y') }} - {{ $training->end_date->format('d F Y') }}</p>
                                    </div>
                                    <div>
                                        <p class="m-0 text-sm">Training Fee</p>
                                        <p class="m-0 text-sm fw-medium">AUD {{ $training->fee }}</p>
                                    </div>
                                    <div>
                                        <p class="m-0 text-sm">Training Mode</p>
                                        <div class="d-flex align-items-center gap-2">
                                            <div>
                                                @if($training->mode == \App\Enums\TrainingMode::Zoom)
                                                <x-icon.video fill="#0036E3"/>
                                                @elseif($training->mode == \App\Enums\TrainingMode::FaceToFace)
                                                <x-icon.face-to-face fill="#0036E3"/>
                                                @endif
                                            </div>
                                            <div>
                                                <p class="m-0 text-sm fw-medium text-primary">{{ $training->mode?->value }}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div>
                                        <p class="m-0 text-sm">Language</p>
                                        <p class="m-0 text-sm fw-medium">{{ $training->language?->name }}</p>
                                    </div>
                                    <div>
                                        <p class="m-0 text-sm">Training Category</p>
                                        <p class="m-0 text-sm fw-medium">{{ $training->category?->name }}</p>
                                    </div>
                                    <div>
                                        <p class="m-0 text-sm">Partner Institute</p>
                                        @foreach ($training->partners as $partner)
                                            <p class="m-0 text-sm fw-medium">
                                                <a class="text-decoration-underline" href="#">
                                                    {{ $partner->name }}
                                                </a>
                                            </p>
                                        @endforeach
                                    </div>
                                    <div>
                                        <p class="m-0 text-sm">Time & Location</p>
                                        <p class="m-0 text-sm fw-medium">{{ $training->start_time }} AEST, {{ $training->state?->name }}, {{ $training->country?->name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content">
                            <div class="training-details-header">
                                <div class="training-title">
                                    <h2 class="h6">
                                        {{ $training->title }}
                                    </h2>
                                </div>
                                <div class="training-action">
                                    <button class="btn btn-md btn-icon btn-outline-light">
                                        <x-icon.share fill="#0036E3"/>
                                    </button>
                                </div>
                            </div>

                            <div class="page-content-accordion-wrapper mt-20">
                                <div class="page-content-accordion-item" x-data="{ isOpen: true }"
                                     :class="{ 'accordion-item-active': isOpen }">
                                    <div class="page-content-accordion-title" x-on:click="isOpen = !isOpen">
                                        <h3 class="h6">Summary of the Course</h3>
                                        <button>
                                            <x-icon.chevron-top/>
                                        </button>
                                    </div> <!--page-content-accordion-title-->
                                    <div x-show="isOpen" class="page-content-accordion-body">
                                        <p>{{ $training->summary ?? '' }}</p>
                                    </div> <!--page-content-accordion-body-->
                                </div> <!--page-content-accordion-item-->

                                <div class="page-content-accordion-item" x-data="{ isOpen: false }"
                                     :class="{ 'accordion-item-active': isOpen }">
                                    <div class="page-content-accordion-title" x-on:click="isOpen = !isOpen">
                                        <h3 class="h6">Instructors</h3>
                                        <button>
                                            <x-icon.chevron-top/>
                                        </button>
                                    </div> <!--page-content-accordion-title-->
                                    <div x-show="isOpen" class="page-content-accordion-body">
                                        @foreach ($training->instructors as $instructor)
                                            <div class="expert-card py-3">
                                                <div class="expert-card-header mb-2">
                                                    <div class="expert-thumb">
                                                        <div class="expert-thumb-box">
                                                            <img src="{{ $instructor->picture }}"/>
                                                        </div>
                                                    </div> <!--expert-thumb-->
                                                    <div class="expert-info">
                                                        <h3 class="h6 expert-name mb-0">{{ $instructor->user->full_name ?? '' }}</h3>
                                                        <ul class="expert-meta">
                                                            {{-- <li>Melbourne University</li> --}}
                                                            <li>{{ $instructor->user->country?->name }}</li>
                                                        </ul>

                                                    </div><!--expert-info-->
                                                    <div class="expert-card-action">
                                                        <button x-data="{ isFavorited: false }"
                                                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                :class="{ 'favorited': isFavorited }"
                                                                @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                                            <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                                        </button>
                                                        <button class="btn btn-md btn-icon btn-outline-light">
                                                            <x-icon.message-line/>
                                                        </button>
                                                        <button class="btn btn-md btn-outline-primary border-2"> Invite Project</button>
                                                    </div>
                                                </div>
                                                <div class="expert-card-body">
                                                    <div class="expert-summary py-3">
                                                        <p class="mb-0">{{ $instructor->biography ?? '' }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div> <!--page-content-accordion-body-->
                                </div> <!--page-content-accordion-item-->

                                <div class="page-content-accordion-item" x-data="{ isOpen: false }"
                                     :class="{ 'accordion-item-active': isOpen }">
                                    <div class="page-content-accordion-title" x-on:click="isOpen = !isOpen">
                                        <h3 class="h6">Learning Outcomes</h3>
                                        <button>
                                            <x-icon.chevron-top/>
                                        </button>
                                    </div> <!--page-content-accordion-title-->
                                    <div x-show="isOpen" class="page-content-accordion-body">
                                        @foreach ($training->instructors as $instructor)
                                            <div class="expert-card py-3">
                                                <div class="expert-card-header mb-2">
                                                    <div class="expert-thumb">
                                                        <div class="expert-thumb-box">
                                                            <img src="{{ $instructor->picture }}"/>
                                                        </div>
                                                    </div> <!--expert-thumb-->
                                                    <div class="expert-info">
                                                        <h3 class="h6 expert-name mb-0">{{ $instructor->user->full_name ?? '' }}</h3>
                                                        <ul class="expert-meta">
                                                            <li>Melbourne University</li>
                                                            <li>{{ $instructor->user->country?->name }}</li>
                                                        </ul>

                                                    </div><!--expert-info-->
                                                    <div class="expert-card-action">
                                                        <button x-data="{ isFavorited: false }"
                                                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                :class="{ 'favorited': isFavorited }"
                                                                @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                                            <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                                        </button>
                                                        <button class="btn btn-md btn-icon btn-outline-light">
                                                            <x-icon.message-line/>
                                                        </button>
                                                        <button class="btn btn-md btn-outline-primary border-2"> Invite Project</button>
                                                    </div>
                                                </div>
                                                <div class="expert-card-body">
                                                    <div class="expert-summary py-3">
                                                        <p class="mb-0">{{ $instructor->biography ?? '' }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div> <!--page-content-accordion-body-->
                                </div> <!--page-content-accordion-item-->


                                <div class="page-content-accordion-item" x-data="{ isOpen: false }"
                                     :class="{ 'accordion-item-active': isOpen }">
                                    <div class="page-content-accordion-title" x-on:click="isOpen = !isOpen">
                                        <h3 class="h6">Course Outline</h3>
                                        <button>
                                            <x-icon.chevron-top/>
                                        </button>
                                    </div> <!--page-content-accordion-title-->
                                    <div x-show="isOpen" class="page-content-accordion-body">
                                        <p>{{ $training->outline ?? '' }}</p>
                                    </div> <!--page-content-accordion-body-->
                                </div> <!--page-content-accordion-item-->

                                <div class="page-content-accordion-item" x-data="{ isOpen: false }"
                                     :class="{ 'accordion-item-active': isOpen }">
                                    <div class="page-content-accordion-title" x-on:click="isOpen = !isOpen">
                                        <h3 class="h6">Assessments</h3>
                                        <button>
                                            <x-icon.chevron-top/>
                                        </button>
                                    </div> <!--page-content-accordion-title-->
                                    <div x-show="isOpen" class="page-content-accordion-body">
                                        <p>{{ $training->assesments ?? '' }}</p>
                                    </div> <!--page-content-accordion-body-->
                                </div> <!--page-content-accordion-item-->

                                <div class="page-content-accordion-item" x-data="{ isOpen: false }"
                                     :class="{ 'accordion-item-active': isOpen }">
                                    <div class="page-content-accordion-title" x-on:click="isOpen = !isOpen">
                                        <h3 class="h6">Teaching and learning Activities</h3>
                                        <button>
                                            <x-icon.chevron-top/>
                                        </button>
                                    </div> <!--page-content-accordion-title-->
                                    <div x-show="isOpen" class="page-content-accordion-body">
                                        <p>{{ $training->activities ?? '' }}</p>
                                    </div> <!--page-content-accordion-body-->
                                </div> <!--page-content-accordion-item-->

                                <div class="page-content-accordion-item" x-data="{ isOpen: false }"
                                     :class="{ 'accordion-item-active': isOpen }">
                                    <div class="page-content-accordion-title" x-on:click="isOpen = !isOpen">
                                        <h3 class="h6">Training Resources</h3>
                                        <button>
                                            <x-icon.chevron-top/>
                                        </button>
                                    </div> <!--page-content-accordion-title-->
                                    <div x-show="isOpen" class="page-content-accordion-body">
                                        <p>{{ $training->resources ?? '' }}</p>
                                    </div> <!--page-content-accordion-body-->
                                </div> <!--page-content-accordion-item-->

                                <div class="page-content-accordion-item" x-data="{ isOpen: false }"
                                     :class="{ 'accordion-item-active': isOpen }">
                                    <div class="page-content-accordion-title" x-on:click="isOpen = !isOpen">
                                        <h3 class="h6">Prescribed Textbook and Software</h3>
                                        <button>
                                            <x-icon.chevron-top/>
                                        </button>
                                    </div> <!--page-content-accordion-title-->
                                    <div x-show="isOpen" class="page-content-accordion-body">
                                        <p>{{ $training->prescribed_materials ?? '' }}</p>
                                    </div> <!--page-content-accordion-body-->
                                </div> <!--page-content-accordion-item-->

                                <div class="page-content-accordion-item" x-data="{ isOpen: true }"
                                     :class="{ 'accordion-item-active': isOpen }">
                                    <div class="page-content-accordion-title" x-on:click="isOpen = !isOpen">
                                        <h3 class="h6">Recommended Reading</h3>
                                        <button>
                                            <x-icon.chevron-top/>
                                        </button>
                                    </div> <!--page-content-accordion-title-->
                                    <div x-show="isOpen" class="page-content-accordion-body">
                                        <p>{{ $training->recommended_reading ?? '' }}</p>
                                    </div> <!--page-content-accordion-body-->
                                </div> <!--page-content-accordion-item-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

