@extends('frontend.layouts.app')

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sidebar-layout left-sidebar-layout client-profile">
                        <div class="page-sidebar">
                            {{-- Profile summary --}}
                            <div class="profile-edit-widget user-bio-edit-widget">
                                <div class="user-profile-picture">
                                    <img src="{{ $profile->picture ? $profile->picture : asset('dummy-user.png')}}">
                                    <button
                                        onclick="Livewire.dispatch('modal.open', {component: 'profile.picture.update'})">
                                        Edit
                                    </button>
                                </div>
                                <div class="user-profile-info">
                                    <h3 class="h6">{{ $profile->user->full_name ?? '' }}</h3>
                                    <p class="text-sm fw-medium text-muted">
                                        {{ $profile->expertField ? $profile->expertField->name : '' }}
                                    </p>
                                    <p class="text-sm d-flex align-items-center justify-content-center">
                                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                             viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M12.5009 11.8654C12.9985 11.8654 13.4239 11.6882 13.7771 11.3339C14.1303 10.9795 14.3069 10.5536 14.3069 10.056C14.3069 9.55839 14.1297 9.133 13.7754 8.7798C13.4211 8.4266 12.9951 8.25 12.4975 8.25C11.9999 8.25 11.5745 8.42717 11.2213 8.7815C10.8681 9.13583 10.6915 9.56179 10.6915 10.0594C10.6915 10.557 10.8687 10.9824 11.223 11.3356C11.5774 11.6888 12.0033 11.8654 12.5009 11.8654ZM12.4992 19.5135C14.4556 17.7622 15.9527 16.0824 16.9906 14.474C18.0284 12.8657 18.5473 11.457 18.5473 10.2481C18.5473 8.42498 17.9681 6.92627 16.8098 5.7519C15.6515 4.57753 14.2146 3.99035 12.4992 3.99035C10.7838 3.99035 9.34698 4.57753 8.18865 5.7519C7.03031 6.92627 6.45115 8.42498 6.45115 10.2481C6.45115 11.457 6.97006 12.8657 8.00787 14.474C9.04571 16.0824 10.5428 17.7622 12.4992 19.5135ZM12.4992 21.5096C9.98257 19.3288 8.0954 17.2993 6.8377 15.4211C5.58001 13.5429 4.95117 11.8186 4.95117 10.2481C4.95117 7.94038 5.69765 6.07213 7.1906 4.64328C8.68353 3.21443 10.4531 2.5 12.4992 2.5C14.5454 2.5 16.3149 3.21443 17.8078 4.64328C19.3008 6.07213 20.0473 7.94038 20.0473 10.2481C20.0473 11.8186 19.4184 13.5429 18.1607 15.4211C16.903 17.2993 15.0159 19.3288 12.4992 21.5096Z"
                                                fill="#191D24" fill-opacity="0.5"/>
                                        </svg>
                                        <span>{{ $profile->user->country->name ?? '' }}</span>
                                    </p>
                                    <p class="text-sm d-flex align-items-center justify-content-center">
                                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                             viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M15.9731 16.5269L17.0269 15.4731L13.25 11.6959V6.99998H11.75V12.3038L15.9731 16.5269ZM12.5016 21.5C11.1877 21.5 9.95268 21.2506 8.79655 20.752C7.6404 20.2533 6.63472 19.5765 5.7795 18.7217C4.92427 17.8669 4.24721 16.8616 3.74833 15.706C3.24944 14.5504 3 13.3156 3 12.0017C3 10.6877 3.24933 9.45268 3.748 8.29655C4.24667 7.1404 4.92342 6.13472 5.77825 5.2795C6.6331 4.42427 7.63834 3.74721 8.79398 3.24833C9.94959 2.74944 11.1844 2.5 12.4983 2.5C13.8122 2.5 15.0473 2.74933 16.2034 3.248C17.3596 3.74667 18.3652 4.42342 19.2205 5.27825C20.0757 6.1331 20.7527 7.13834 21.2516 8.29398C21.7505 9.44959 22 10.6844 22 11.9983C22 13.3122 21.7506 14.5473 21.252 15.7034C20.7533 16.8596 20.0765 17.8652 19.2217 18.7205C18.3669 19.5757 17.3616 20.2527 16.206 20.7516C15.0504 21.2505 13.8156 21.5 12.5016 21.5ZM12.5 20C14.7166 20 16.6041 19.2208 18.1625 17.6625C19.7208 16.1041 20.5 14.2166 20.5 12C20.5 9.78331 19.7208 7.89581 18.1625 6.33748C16.6041 4.77914 14.7166 3.99998 12.5 3.99998C10.2833 3.99998 8.39581 4.77914 6.83748 6.33748C5.27914 7.89581 4.49998 9.78331 4.49998 12C4.49998 14.2166 5.27914 16.1041 6.83748 17.6625C8.39581 19.2208 10.2833 20 12.5 20Z"
                                                fill="#191D24" fill-opacity="0.5"/>
                                        </svg>
                                        <span>@php
                                                $date = Carbon\Carbon::now();
                                                $date->setTimezone(new DateTimeZone($profile->timezone));
                                                $formattedDate = $date->format('h:ia');
                                            @endphp
                                            {{ $formattedDate }} {{ $profile->timezone }}</span>
                                    </p>
                                    <div class="my-4 complete-profile-status-edit-widget">
                                        <p class="text-sm d-flex align-items-center mb-1 gap-3">Complete your profile
                                            {{-- <a class="icon-btn icon-btn-md" href="{{ route('expert.profile.edit') }}">
                                                <x-icon.edit />
                                            </a> --}}
                                        </p>
                                        <div progress-status="40%" class="complete-profile-status-progress-bar"></div>
                                    </div>
                                </div>
                            </div>
                            <livewire:profile.edit.language/>
                            <div class="profile-edit-widget user-education-edit-widget">
                                <h4 class="widget-title">Expertise
                                    {{-- <button wire:click="$dispatch('modal.open', { component: 'profile.language.create'})"
                                        class="icon-btn icon-btn-md">
                                        <x-icon.add />
                                    </button> --}}
                                </h4>
                                <div class="widget-content">
                                    <div class="tag-list light-tag-list">
                                        @forelse ($profile->expertises as $skill)
                                            <span class="tag">{{ $skill->name }}</span>
                                        @empty
                                            <p>No data</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            {{-- Education --}}
                            <livewire:profile.edit.education/>
                        </div>
                        <div class="page-content">

                            <livewire:profile.biography/>

                            <div class="page-block mt-40">
                                <livewire:profile.consultation/>
                            </div> <!--Consultation--->

                            <div class="page-block mt-40">
                                <div class="consultant-prof edux-consultant-prof card card-24">
                                    <div class="d-flex gap-2 edux-add-modal-steps mb-3">
                                        <div class="edux-tool-tips">
                                            <x-icon.icon-trainer fill="#0036E3"/>
                                            <h3 style="font-size:24px" class="mb-0">Training
                                                ({{ $profile->trainings->count() }})</h3>
                                            <button class="icon-btn">
                                                <x-icon.info fill="#C8C5D4"/>
                                            </button>
                                        </div>

                                        <a href="/training/create"
                                           class="icon-btn icon-btn-md border">
                                            <x-icon.add/>
                                        </a>
                                    </div>
                                    @forelse ($profile->trainings as $training)
                                        <div class="card p-3 mb-3">
                                            <h6 class="h-5 mb-3">{{ $training->title }}</h6>
                                            <div class="d-flex">
                                                @foreach ($training->instructors as $expert)
                                                    <x-expert.mini-card :expert="$expert"/>
                                                @endforeach
                                            </div>
                                            <div class="training-card-summary">
                                                <div class="custom-table text-sm">
                                                    <div class="tr">
                                                        <div class="td fw-medium">Seminar Dates</div>
                                                        <div class="td">{{ $training->start_date->format('d M Y') }}
                                                            - {{ $training->end_date->format('d M Y') }}</div>
                                                    </div>
                                                    <div class="tr">
                                                        <div class="td fw-medium">Time & Location</div>
                                                        <div class="td">10.15am AEST, Sydney, Australia</div>
                                                    </div>
                                                    <div class="tr">
                                                        <div class="td fw-medium">Training Mode</div>
                                                        <div class="td">
                                                            <div class="d-flex align-items-center gap-2">
                                                                @if($training->mode == \App\Enums\TrainingMode::Zoom)
                                                                    <div>
                                                                        <x-icon.video/>
                                                                    </div>
                                                                @elseif($training->mode == \App\Enums\TrainingMode::FaceToFace)
                                                                    <x-icon.face-to-face/>
                                                                @endif
                                                                <div> {{ $training->mode }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tr">
                                                        <div class="td fw-medium">Language</div>
                                                        <div class="td">{{ $training->language?->name }}</div>
                                                    </div>
                                                    <div class="tr">
                                                        <div class="td fw-medium">Training Category</div>
                                                        <div class="td">{{ $training->category?->name }}</div>
                                                    </div>
                                                    <div class="tr">
                                                        <div class="td fw-medium">Training Fee</div>
                                                        <div class="td">USD {{ $training->fee }}</div>
                                                    </div>
                                                    <div class="tr">
                                                        <div class="td fw-medium">Partner Institute</div>
                                                        <div class="td">
                                                            @foreach ($training->partners as $partner)
                                                                <a class="text-decoration-underline"
                                                                   href="#">{{ $partner->name }}</a> @if (!$loop->last)
                                                                    |@endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <p> No data</p>
                                    @endforelse
                                </div>

                            </div> <!--Training --->

                            <div class="page-block mt-40">
                                <div class="card card-24">
                                    <div class="card-body">
                                        <div class="page-block-heading d-flex justify-content-between gap-3 mb-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <x-icon.user-tie fill="#0036E3"/>
                                                <h3 class="mb-0 h4 fw-bold text-primary">Current Project </h3>
                                                <div class="tooltip-wrapper bottom-left">
                                                    <i class="tooltip-icon">
                                                        <x-icon.info fill="#191D24B2"/>
                                                    </i>
                                                    <div class="tooltip-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Voluptas,
                                                        voluptates.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="users-projects-list">

                                            <div class="users-project-item bb-1 py-4">
                                                <div class="users-project-item-header">
                                                    <div class="users-project-item-title">
                                                        <h3 class="h6 mb-1">Development of Innovative Public Health
                                                            Curriculum</h3>
                                                        <p class="text-dark-70 m-0">Public Health Institute of Sydney,
                                                            Sydney, Australia <span
                                                                class="mx-2">|</span> 2015 -
                                                            Present</p>
                                                    </div>

                                                </div>
                                                <div class="users-project-item-body">
                                                    <p class="my-2">I led a groundbreaking project in collaboration with
                                                        Public
                                                        Health Institute of Sydney to develop an innovative public
                                                        health curriculum. This project aimed to revamp the university's
                                                        existing curriculum to align with the latest research,
                                                        pedagogical trends, and industry demands. Key highlights of this
                                                        project included:</p>
                                                    <p class="my-2">Conducting a comprehensive needs assessment to
                                                        identify gaps in
                                                        the current curriculum and the evolving requirements of the
                                                        public health field.</p>
                                                    <p class="my-2">Collaborating with a team of subject matter experts
                                                        to design a
                                                        competency-based curriculum that emphasised practical skills and
                                                        interdisciplinary learning.</p>
                                                </div>
                                            </div>

                                            <div class="users-project-item bb-1 py-4">
                                                <div class="users-project-item-header">
                                                    <div class="users-project-item-title">
                                                        <h3 class="h6 mb-1">Development of Innovative Public Health
                                                            Curriculum</h3>
                                                        <p class="text-dark-70 m-0">Public Health Institute of Sydney,
                                                            Sydney, Australia <span
                                                                class="mx-2">|</span> 2015 -
                                                            Present</p>
                                                    </div>

                                                </div>
                                                <div class="users-project-item-body">
                                                    <p class="my-2">I led a groundbreaking project in collaboration with
                                                        Public
                                                        Health Institute of Sydney to develop an innovative public
                                                        health curriculum. This project aimed to revamp the university's
                                                        existing curriculum to align with the latest research,
                                                        pedagogical trends, and industry demands. Key highlights of this
                                                        project included:</p>
                                                    <p class="my-2">Conducting a comprehensive needs assessment to
                                                        identify gaps in
                                                        the current curriculum and the evolving requirements of the
                                                        public health field.</p>
                                                    <p class="my-2">Collaborating with a team of subject matter experts
                                                        to design a
                                                        competency-based curriculum that emphasised practical skills and
                                                        interdisciplinary learning.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div> <!--Current Project -->

                            <div class="page-block mt-40">
                                <div class="card card-24">
                                    <div class="card-body">
                                        <div class="page-block-heading d-flex justify-content-between gap-3 mb-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <x-icon.user-tie fill="#0036E3"/>
                                                <h3 class="mb-0 h4">Previous Projects (0) </h3>
                                                <div class="tooltip-wrapper bottom-left">
                                                    <i class="tooltip-icon">
                                                        <x-icon.info fill="#191D24B2"/>
                                                    </i>
                                                    <div class="tooltip-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Voluptas,
                                                        voluptates.
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="icon-btn icon-btn-md border" data-bs-toggle="modal"
                                                    data-bs-target="#addPreviousProject">
                                                <x-icon.add/>
                                            </button>
                                        </div>

                                        <div class="users-projects-list">

                                            <div class="users-project-item bb-1 py-4">
                                                <div class="users-project-item-header">
                                                    <div class="users-project-item-title">
                                                        <h3 class="h6 mb-1">Development of Innovative Public Health
                                                            Curriculum</h3>
                                                        <p class="text-dark-70 m-0">Public Health Institute of Sydney,
                                                            Sydney, Australia <span
                                                                class="mx-2">|</span> 2015 -
                                                            Present</p>
                                                    </div>
                                                    <div>
                                                        <button class="icon-btn icon-btn-md border">
                                                            <x-icon.edit/>
                                                        </button>
                                                        <button class="icon-btn icon-btn-md border"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteWorkExperience">
                                                            <x-icon.delete/>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="users-project-item-body">
                                                    <p class="my-2">I led a groundbreaking project in collaboration with
                                                        Public
                                                        Health Institute of Sydney to develop an innovative public
                                                        health curriculum. This project aimed to revamp the university's
                                                        existing curriculum to align with the latest research,
                                                        pedagogical trends, and industry demands. Key highlights of this
                                                        project included:</p>
                                                    <p class="my-2">Conducting a comprehensive needs assessment to
                                                        identify gaps in
                                                        the current curriculum and the evolving requirements of the
                                                        public health field.</p>
                                                    <p class="my-2">Collaborating with a team of subject matter experts
                                                        to design a
                                                        competency-based curriculum that emphasised practical skills and
                                                        interdisciplinary learning.</p>
                                                </div>
                                            </div>

                                            <div class="users-project-item bb-1 py-4">
                                                <div class="users-project-item-header">
                                                    <div class="users-project-item-title">
                                                        <h3 class="h6 mb-1">Development of Innovative Public Health
                                                            Curriculum</h3>
                                                        <p class="text-dark-70 m-0">Public Health Institute of Sydney,
                                                            Sydney, Australia <span
                                                                class="mx-2">|</span> 2015 -
                                                            Present</p>
                                                    </div>
                                                    <div>
                                                        <button class="icon-btn icon-btn-md border">
                                                            <x-icon.edit/>
                                                        </button>
                                                        <button class="icon-btn icon-btn-md border"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteWorkExperience">
                                                            <x-icon.delete/>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="users-project-item-body">
                                                    <p class="my-2">I led a groundbreaking project in collaboration with
                                                        Public
                                                        Health Institute of Sydney to develop an innovative public
                                                        health curriculum. This project aimed to revamp the university's
                                                        existing curriculum to align with the latest research,
                                                        pedagogical trends, and industry demands. Key highlights of this
                                                        project included:</p>
                                                    <p class="my-2">Conducting a comprehensive needs assessment to
                                                        identify gaps in
                                                        the current curriculum and the evolving requirements of the
                                                        public health field.</p>
                                                    <p class="my-2">Collaborating with a team of subject matter experts
                                                        to design a
                                                        competency-based curriculum that emphasised practical skills and
                                                        interdisciplinary learning.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div> <!--Previous Projects (0) -->

                            <div class="page-block mt-40">
                                <livewire:profile.edit.experience/>
                            </div> <!---Work Experience-->

                            <div class="page-block mt-40">
                                <div class="card card-24">
                                    <div class="card-body">
                                        <div class="page-block-heading d-flex justify-content-between gap-3 mb-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <x-icon.microphone fill="#0036E3"/>
                                                <h3 class="mb-0 h4">Conferences and Media Interview</h3>
                                                <div class="tooltip-wrapper bottom-left">
                                                    <i class="tooltip-icon">
                                                        <x-icon.info fill="#191D24B2"/>
                                                    </i>
                                                    <div class="tooltip-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Voluptas,
                                                        voluptates.
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="icon-btn icon-btn-md border" data-bs-toggle="modal"
                                                    data-bs-target="#addConferences">
                                                <x-icon.add/>
                                            </button>
                                        </div>

                                        <div class="users-projects-list">

                                            <div class="users-project-item bb-1 py-4">
                                                <div class="users-project-item-header">
                                                    <div class="users-project-item-title">
                                                        <h3 class="h6 mb-1"><a href="">Front Row & On the Mic: Climate
                                                                Change Summit Highlights & Media Conversations
                                                                with Activists</a></h3>
                                                        <p class="text-dark-70 m-0">Public Health Institute of
                                                            Sydney</p>
                                                    </div>
                                                    <div>
                                                        <button class="icon-btn icon-btn-md border">
                                                            <x-icon.edit/>
                                                        </button>
                                                        <button class="icon-btn icon-btn-md border"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteWorkExperience">
                                                            <x-icon.delete/>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="users-project-item-body mt-2">
                                                    <div class="tag-list">
                                                        <span class="tag">Conference</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="users-project-item bb-1 py-4">
                                                <div class="users-project-item-header">
                                                    <div class="users-project-item-title">
                                                        <h3 class="h6 mb-1"><a href="">Front Row & On the Mic: Climate
                                                                Change Summit Highlights & Media Conversations
                                                                with Activists</a></h3>
                                                        <p class="text-dark-70 m-0">Public Health Institute of
                                                            Sydney</p>
                                                    </div>
                                                    <div>
                                                        <button class="icon-btn icon-btn-md border">
                                                            <x-icon.edit/>
                                                        </button>
                                                        <button class="icon-btn icon-btn-md border"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteWorkExperience">
                                                            <x-icon.delete/>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="users-project-item-body mt-2">
                                                    <div class="tag-list">
                                                        <span class="tag">Conference</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div> <!--Conferences and Media Interview -->

                            <div class="page-block mt-40">
                                <div class="card card-24">
                                    <div class="card-body">
                                        <div class="page-block-heading d-flex justify-content-between gap-3 mb-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <x-icon.microphone fill="#0036E3"/>
                                                <h3 class="mb-0 h4">Awards and Honors</h3>
                                                <div class="tooltip-wrapper bottom-left">
                                                    <i class="tooltip-icon">
                                                        <x-icon.info fill="#191D24B2"/>
                                                    </i>
                                                    <div class="tooltip-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Voluptas,
                                                        voluptates.
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="icon-btn icon-btn-md border" data-bs-toggle="modal"
                                                    data-bs-target="#addAwards">
                                                <x-icon.add/>
                                            </button>
                                        </div>
                                        <div class="owl-carousel awards-carousel">
                                            <div class="portfolio__card">
                                                <figure class="position-relative">
                                                    <img
                                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/port1.jpg') }}"
                                                        class="img-fluid rounded" alt="Portfolio Thumbnail">
                                                </figure>
                                                <h4 class="fs-6 fw-medium title">
                                                    <a href="#">Comparative Analysis of Public Health Curricula</a>
                                                </h4>
                                                <div class="tags">
                                                    <span>Public Health</span>
                                                    <span>Infectious Diseases</span>
                                                </div>
                                            </div>
                                            <div class="portfolio__card">
                                                <figure class="position-relative">
                                                    <img
                                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/port2.jpg') }}"
                                                        class="img-fluid rounded" alt="Portfolio Thumbnail">
                                                </figure>
                                                <h4 class="fs-6 fw-medium title">
                                                    <a href="#">Comparative Analysis of Public Health Curricula</a>
                                                </h4>
                                                <div class="tags">
                                                    <span>Public Health</span>
                                                    <span>Infectious Diseases</span>
                                                </div>
                                            </div>
                                            <div class="portfolio__card">
                                                <figure class="position-relative">
                                                    <img
                                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/port3.jpg') }}"
                                                        class="img-fluid rounded" alt="Portfolio Thumbnail">
                                                </figure>


                                                <h4 class="fs-6 fw-medium title">
                                                    <a href="#">Comparative Analysis of Public Health Curricula</a>
                                                </h4>
                                                <div class="tags">
                                                    <span>Public Health</span>
                                                    <span>Infectious Diseases</span>
                                                </div>
                                            </div>
                                            <div class="portfolio__card">
                                                <figure class="position-relative">
                                                    <img
                                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/port1.jpg') }}"
                                                        class="img-fluid rounded" alt="Portfolio Thumbnail">
                                                </figure>
                                                <h4 class="fs-6 fw-medium title">
                                                    <a href="#">Comparative Analysis of Public Health Curricula</a>
                                                </h4>
                                                <div class="tags">
                                                    <span>Public Health</span>
                                                    <span>Infectious Diseases</span>
                                                </div>
                                            </div>
                                            <div class="portfolio__card">
                                                <figure class="position-relative">
                                                    <img
                                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/port3.jpg') }}"
                                                        class="img-fluid rounded" alt="Portfolio Thumbnail">
                                                </figure>
                                                <h4 class="fs-6 fw-medium title">
                                                    <a href="#">Comparative Analysis of Public Health Curricula</a>
                                                </h4>
                                                <div class="tags">
                                                    <span>Public Health</span>
                                                    <span>Infectious Diseases</span>
                                                </div>
                                            </div>
                                        </div><!--.//carousel-->

                                    </div>
                                </div>
                            </div> <!--Conferences and Media Interview -->

                            <div class="page-block mt-40">
                                <div class="card card-24">
                                    <div class="card-body">
                                        <div class="page-block-heading mb-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <x-icon.quote-right/>
                                                <h3 class="h5 mb-0">Reviews & Rating</h3>


                                                <button class="icon-btn">
                                                    <x-icon.info fill="#C8C5D4"/>
                                                </button>
                                            </div>

                                        </div>

                                        <div class="card border-0 border-bottom rounded-0">
                                            <div class="card-body px-0">
                                                <div class="">
                                                    <p class="fst-italic">Prof. Michael Kassiou played a pivotal role in
                                                        the development of
                                                        our university curriculum. His expertise, creativity, and
                                                        dedication to ensuring our program met the highest standards
                                                        were truly outstanding. We are grateful for his contributions
                                                        and highly recommend his services to any educational
                                                        institution.</p>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img
                                                            src="<?php echo e(asset('assets/frontend/img/chat-avatar.png')); ?>">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 fw-medium">Dr. Danial</p>
                                                        <p class="text-sm mb-0">Dean | School of Business | EduEx
                                                            University </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--Reviews & Rating-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal : add Previous Project-->
    <div class="modal fade" id="addPreviousProject" tabindex="-1" aria-labelledby="addPreviousProjectLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <div class="modal-header p-40 pb-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Add Previous Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-40 pt-2">
                    <form action="">
                        <x-form.input type="text" readonly label="Project ID" name="type"
                                      placeholder="Type Here" value=""/>
                        <x-form.input type="text" readonly label="Address" name="type" placeholder="Type"
                                      value=""/>
                        <div class="row">
                            <div class="col-md-6">
                                <x-form.select label="Start Year" name="title">
                                    <option value="">Select Year</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Prof">Prof</option>
                                </x-form.select>
                            </div>
                            <div class="col-md-6">
                                <x-form.select label="End Year" name="title">
                                    <option value="">Select Year</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Prof">Prof</option>
                                </x-form.select>
                            </div>
                        </div>
                        <x-form.textarea label="Description" name="bio" placeholder="Type"/>
                        <div class="image-upload-flat mb-2">
                            <label for="upload-file" class="text-center">
                                <span> <x-icon.image width="50px" height="50px" fill="#0059C999"/> </span>
                                <span class="fw-medium">Clik to upload or drag & drop</span>
                                <span class="text-sm">Drag & drop any images or documents that might be helpful in explaining your brief here</span>

                            </label>
                            <input type="file" id="upload-file" class="d-none">
                        </div>
                        <x-form.input type="text" readonly label="Organisation Verified Email" name="type"
                                      placeholder="Type"
                                      value=""/>

                    </form>
                </div>
                <div class="modal-footer p-40 pt-3">
                    <button type="button" class="btn btn-md btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-md btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->
    <!-- Modal : add Conferences-->
    <div class="modal fade" id="addConferences" tabindex="-1" aria-labelledby="addConferencesLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <div class="modal-header p-40 pb-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Add Conferences and Media Interview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-40 pt-2">
                    <form action="">
                        <x-form.choice-static wire:model="category" label="Category">
                            <option value="">Select</option>
                            <option value="Mr">Media Interview</option>
                        </x-form.choice-static>

                        <x-form.input type="text" label="Title" name="type" placeholder="Type"
                                      value=""/>

                        <x-form.input type="text" label="Link" name="type" placeholder="Type"
                                      value=""/>

                    </form>
                </div>
                <div class="modal-footer p-40 pt-3">
                    <button type="button" class="btn btn-md btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-md btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->
    <!-- Modal : add Conferences-->
    <div class="modal fade" id="addAwards" tabindex="-1" aria-labelledby="addAwardsLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <div class="modal-header p-40 pb-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Add Awards and Honors</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-40 pt-2">
                    <form action="">
                        <div class="image-upload-flat mb-2">
                            <label for="upload-file" class="text-center">
                                <span> <x-icon.image width="50px" height="50px" fill="#0059C999"/> </span>
                                <span class="fw-medium">Clik to upload or drag & drop</span>
                                <span class="text-sm">Drag & drop any images or documents that might be helpful in explaining your brief here</span>

                            </label>
                            <input type="file" id="upload-file" class="d-none">
                        </div>


                        <x-form.input type="text" label="Title of the Award/Honor" name="type" placeholder="Type"
                                      value=""/>


                        <x-form.choice-static class="mb-1" wire:model="skillset" label="Skillset" multiple>
                            <option value="">Architecture</option>
                            <option value="Mr">LMS</option>
                        </x-form.choice-static>

                        <p class="text-sm text-dark-70 mb-2">Suggestion skills: Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design,
                            Research and Analysis, skill development</p>

                        <x-form.input type="text" label="Relevant Web Link" name="type" placeholder="Type"
                                      value=""/>

                    </form>
                </div>
                <div class="modal-footer p-40 pt-3">
                    <button type="button" class="btn btn-md btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-md btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->
    
@endsection




@push('bottom_scripts')

    <script>
        jQuery(document).ready(function () {
            jQuery(".awards-carousel").owlCarousel({
                loop: true,
                nav: true,
                dots: false,
                items: 3
            });
        })
    </script>
@endpush
