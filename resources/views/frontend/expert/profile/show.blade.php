@extends('frontend.layouts.app')

@section('content')
    <section class="page-section-sm expert-details-page">
        <div class="container">
            <div class="edux-billing-method-area">
                <div class="col">
                    <div class="sidebar-layout left-sidebar-layout find-projects-layout">
                        <div class="page-sidebar">
                            <div class="profile-widget user-bio-widget">
                                <div class="user-profile-picture">
                                    <img src="{{ $expert->picture ? $expert->picture : asset('dummy-user.png')}}">
                                </div>
                                <div class="user-profile-info">
                                    <h3 class="h6">{{ $expert->user->full_name ?? '' }}</h3>
                                    <p class="text-primary">{{ $expert->expertField?->name}}</p>
                                    <p class="text-sm d-flex align-items-center justify-content-center">
                                        <x-icon.location fill="#191D2480" width="25" height="24"/>
                                        <span> Sydney, {{ $expert->user->country->name }}</span>
                                    </p>
                                    <p class="text-sm d-flex align-items-center justify-content-center">
                                        <x-icon.clock fill="#191D2480" width="25" height="24"/>
                                        <span>
                                            @php
                                                $date = Carbon\Carbon::now();
                                                $date->setTimezone(new DateTimeZone($expert->timezone));
                                                $formattedDate = $date->format('h:ia');
                                            @endphp
                                            {{ $formattedDate }} {{ $expert->timezone }}</span>
                                    </p>
                                    {{-- @TODO project need to be dynamic --}}
                                    @auth
                                        @if(isset($eoi))
                                        @else
                                            <button
                                                onclick="Livewire.dispatch('modal.open', { component: 'project.invite', arguments: { 'expert': {{ $expert->id }}, 'project': 0 }})"
                                                class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon">
                                                Invite to Project
                                            </button>
                                        @endif
                                        <button class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon"
                                                onclick="Livewire.dispatch('modal.open', { component: 'project.invite-message', arguments: { 'expert': {{ $expert->id }}, 'project': 0 }})"
                                        >
                                            <x-icon.message-line fill="#0036E3" width="25" height="24"/>
                                            Chat with Michael
                                        </button>
                                    @endauth
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="widget-title">Languages</h4>
                                <div class="widget-content text-sm">
                                    @foreach($expert->languages as $language)
                                        <div class="d-flex gap-2 align-items-center py-1">
                                            <x-icon.globe fill="#0036E3"/>
                                            <div>
                                                <p class="m-0 fw-medium">{{ $language->pivot->proficiency }}
                                                    in {{ $language->name }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="profile-widget user-skills-widget">
                                <h4 class="widget-title">Skillsets</h4>

                                <div class="user-profile-skills">
                                    <ul class=""
                                        x-data="{ showAllTags: false, buttonText: ' + {{ $expert->expertises->count() - 4 }}' + ' More' }"
                                        :class="{ 'showing-less-tag': !showAllTags }">
                                        @if (count($expert->expertises) > 0)
                                            @foreach ($expert->expertises as $expertise)
                                                <li>{{ $expertise->name }}</li>
                                            @endforeach
                                        @endif
                                        @if ($expert->expertises->count() > 4)
                                            <button
                                                x-on:click="showAllTags = !showAllTags; buttonText = showAllTags ? 'Show Less' : ' + {{ $expert->expertises->count() - 4 }}' + ' More' "
                                                x-text="buttonText" class="all-tags-trigger"></button>
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            <div class="profile-widget user-education-widget">
                                <h4 class="widget-title">Education</h4>
                                <div class="widget-content">
                                    @forelse ($expert->education as $education)
                                        <div
                                            class="user-education-box-item {{ $loop->last ? 'mb-0' : 'edux-border-bottom' }}">
                                            <p class="text-sm fw-medium mt-1 mb-0">{{ $education->degree }}</p>
                                            <p class="text-sm fst-italic mb-0">{{ $education->institution }}</p>
                                            <p class="text-sm mb-1">
                                                <strong>{{ $education->start_year . '-' }} {{ $education->end_year ?? 'Continuing' }}</strong>
                                            </p>
                                        </div>
                                    @empty
                                        <div class="user-education-box-item edux-border-bottom">
                                            {{ 'No Data' }}
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                            <div class="profile-widget user-others-profile-widget">
                                <h4 class="widget-title">Other Profiles</h4>

                                <p class="d-flex align-items-center gap-2 text-sm mb-2 fw-medium text-primary"><a
                                        href="#">
                                        <x-icon.logo-linkedin width="16" height="16" fill="#0036E3"/>
                                        LinkedIn</a></p>
                                <p class="d-flex align-items-center gap-2 text-sm mb-2 fw-medium text-primary"><a
                                        href="#">
                                        <x-icon.briefcase width="16" height="16" fill="#0036E3"/>
                                        Work Profile</a></p>
                                <p class="d-flex align-items-center gap-2 text-sm mb-2 fw-medium text-primary"><a
                                        href="#">
                                        <x-icon.briefcase width="16" height="16" fill="#0036E3"/>
                                        Google Scholar </a></p>
                            </div>
                        </div>

                        <div class="page-content">
                            @if(isset($eoi))
                                <div class="card card-24 mb-40" style="background-color: #F4F6F9;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between gap-3 mb-3">
                                            <h3 class="mb-0 h5">
                                                EOI Details
                                            </h3>
                                            <p class="mb-0">
                                                Proposed <span class="fw-medium">${{ $eoi->amount }}</span>
                                            </p>
                                        </div>
                                        <p>
                                            {{ $eoi->cover_letter }}
                                        </p>
                                    </div>
                                </div>
                            @else
                                <div class="consultant-details border-0 p-0 shadow-none">
                                    <div class="consultant-details-left">
                                        <h3 class="h5">
                                            <span>About</span>
                                        </h3>
                                        @auth
                                            <p class="d-inline-flex align-items-center">
                                                <span>${{ $expert->hourly_rate }}/hour</span>
                                            </p>
                                        @endauth
                                    </div>
                                    <p>
                                        {{ $expert->biography ?? '' }}
                                    </p>
                                </div>
                            @endif

                            <livewire:expert-profile.consultation.lists :expert="$expert"/>

                            <div class="page-block mt-40">
                                <div x-data="{ isOpen: true }"
                                     :class="{ 'accordion-item-active': isOpen }" class="profile-block-card">
                                    <div x-on:click="isOpen = !isOpen" class="profile-block-card-header">
                                        <div class="profile-block-card-title">
                                            <x-icon.briefcase-time fill="#0036E3"/>
                                            <h3 class="h5 mb-0">Training
                                                ({{ $expert->trainings->count() }})</h3>
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
                                        <div class="profile-block-card-action">
                                            <button class="icon-btn icon-btn-md border bg-primary">
                                                <x-icon.chevron-top fill="#fff"/>
                                            </button>
                                        </div>
                                    </div>
                                    <div x-show="isOpen" class="profile-block-card-body">
                                        @forelse ($expert->trainings as $training)
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
                                                            <div class="td">{{ $training->language->name }}</div>
                                                        </div>
                                                        <div class="tr">
                                                            <div class="td fw-medium">Training Category</div>
                                                            <div class="td">{{ $training->category->name }}</div>
                                                        </div>
                                                        <div class="tr">
                                                            <div class="td fw-medium">Training Fee</div>
                                                            <div class="td">USD {{ $training->fee }}</div>
                                                        </div>
                                                        <div class="tr">
                                                            <div class="td fw-medium">Partner Institute</div>
                                                            <div class="td">
                                                                @foreach ($training->partners as $partner)
                                                                    <a class="text-inherit"
                                                                       href="#">{{ $partner->name }}</a> @if (!$loop->last)
                                                                        |@endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <button style="width: 126px" class="btn btn-sm btn-primary">
                                                            Accept Offer
                                                        </button>
                                                        <button style="width: 115px" class="btn btn-sm btn-danger">
                                                            Decline Offer
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <p> No data</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>

                            <div class="page-block mt-40">
                                <div x-data="{ isOpen: true }"
                                     :class="{ 'accordion-item-active': isOpen }" class="profile-block-card">
                                    <div x-on:click="isOpen = !isOpen" class="profile-block-card-header">
                                        <div class="profile-block-card-title">
                                            <x-icon.user-tie fill="#0036E3"/>
                                            <h3 class="h5 mb-0">Current Project</h3>
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
                                        <div class="profile-block-card-action">
                                            <button class="icon-btn icon-btn-md border bg-primary">
                                                <x-icon.chevron-top fill="#fff"/>
                                            </button>
                                        </div>
                                    </div>
                                    <div x-show="isOpen" class="profile-block-card-body">
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

                            </div>
                            <div class="page-block mt-40">
                                <div x-data="{ isOpen: true }"
                                     :class="{ 'accordion-item-active': isOpen }" class="profile-block-card">
                                    <div x-on:click="isOpen = !isOpen" class="profile-block-card-header">
                                        <div class="profile-block-card-title">
                                            <x-icon.user-tie/>
                                            <h3 class="h5 mb-0">Previous Projects (2)</h3>
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
                                        <div class="profile-block-card-action">
                                            <button class="icon-btn icon-btn-md border bg-primary">
                                                <x-icon.chevron-top fill="#fff"/>
                                            </button>
                                        </div>
                                    </div>
                                    <div x-show="isOpen" class="profile-block-card-body">
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

                            </div>

                            <div class="page-block mt-40">
                                <div x-data="{ isOpen: true }"
                                     :class="{ 'accordion-item-active': isOpen }" class="profile-block-card">
                                    <div x-on:click="isOpen = !isOpen" class="profile-block-card-header">
                                        <div class="profile-block-card-title">
                                            <x-icon.user-tie/>
                                            <h3 class="h5 mb-0">Work Experience</h3>
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
                                        <div class="profile-block-card-action">
                                            <button class="icon-btn icon-btn-md border bg-primary">
                                                <x-icon.chevron-top fill="#fff"/>
                                            </button>
                                        </div>
                                    </div>
                                    <div x-show="isOpen" class="profile-block-card-body">
                                        @forelse ($expert->experiences as $experience)
                                            <div class="card card-24 border-0 {{ $loop->last ? '' : 'mb-0' }}">
                                                <div class="card-body py-3 ps-0 pb-2">
                                                    <div class="d-flex gap-3 justify-content-sm-between">
                                                        <div class="mb-2">
                                                            <h6 class="">{{  $experience->title  }}</h6>
                                                            <p class="mb-0">
                                                                <i>{{ $experience->institute . ', ' }} {{ $experience->address }}</i>
                                                                |
                                                                <strong>{{ $experience->start_year }}
                                                                    - {{ $experience->end_year ?? 'Continuing' }}</strong>
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <p class="mb-0">
                                                        {!! nl2br(e($experience->description)) !!}
                                                        <span class="edux-read-more"> ... More</span>
                                                    </p>
                                                </div>

                                            </div>
                                        @empty
                                            <p>No data</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>

                            <div class="page-block mt-40">
                                <div x-data="{ isOpen: true }"
                                     :class="{ 'accordion-item-active': isOpen }" class="profile-block-card">
                                    <div x-on:click="isOpen = !isOpen" class="profile-block-card-header">
                                        <div class="profile-block-card-title">
                                            <x-icon.microphone width="32" height="32" fill="#0036E3"/>
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
                                        <div class="profile-block-card-action">
                                            <button class="icon-btn icon-btn-md border bg-primary">
                                                <x-icon.chevron-top fill="#fff"/>
                                            </button>
                                        </div>
                                    </div>
                                    <div x-show="isOpen" class="profile-block-card-body">
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
                                <div class="profile-block-card profile-slider-block-card">
                                    <div class="profile-block-card-header">
                                        <div class="profile-block-card-title">
                                            <x-icon.batch width="32" height="32" fill="#0036E3"/>
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
                                        <div class="profile-block-card-action">
                                            <div class="awards-carousel-nav">
                                                <button
                                                    class="icon-btn icon-btn-md border bg-primary awards-carousel-next">
                                                    <x-icon.chevron-left fill="#fff"/>
                                                </button>
                                                <button
                                                    class="icon-btn icon-btn-md border bg-primary awards-carousel-prev">
                                                    <x-icon.chevron-right fill="#fff"/>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="profile-block-card-body">
                                        <div class="owl-carousel awards-carousel">
                                            <div class="award-slider-item">
                                                <div class="award-slider-image">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port1.jpg') }}">
                                                </div>
                                                <p class="fw-medium">
                                                    <a href="#">Comparative Analysis of Public Health Curricula</a>
                                                </p>
                                                <div class="tag-list">
                                                    <span class="tag">Public Health</span>
                                                    <span class="tag">Infectious Diseases</span>
                                                </div>
                                            </div> <!--award-slider-item-->
                                            <div class="award-slider-item">
                                                <div class="award-slider-image">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port2.jpg') }}">
                                                </div>
                                                <p class="fw-medium">
                                                    <a href="#">Comparative Analysis of Public Health Curricula</a>
                                                </p>
                                                <div class="tag-list">
                                                    <span class="tag">Public Health</span>
                                                    <span class="tag">Infectious Diseases</span>
                                                </div>
                                            </div> <!--award-slider-item-->
                                            <div class="award-slider-item">
                                                <div class="award-slider-image">
                                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port3.jpg') }}">
                                                </div>
                                                <p class="fw-medium">
                                                    <a href="#">Comparative Analysis of Public Health Curricula</a>
                                                </p>
                                                <div class="tag-list">
                                                    <span class="tag">Public Health</span>
                                                    <span class="tag">Infectious Diseases</span>
                                                </div>
                                            </div> <!--award-slider-item-->

                                        </div><!--.//carousel-->
                                    </div>
                                </div>

                            </div> <!--Conferences and Media Interview -->

                            <div class="page-block mt-40">
                                <div class="card card-24">
                                    <div class="card-body">
                                        <div class="page-block-heading mb-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <x-icon.quote-right width="32" height="32" fill="#0036E3"/>
                                                <h3 class="h5 mb-0">Recommendation</h3>


                                                <button class="icon-btn">
                                                    <x-icon.info fill="#C8C5D4"/>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="users-recommendation-list">
                                            <div class="py-3 pt-0 border-bottom">
                                                <div class=" px-0">
                                                    <div class="">
                                                        <p class="fst-italic">Prof. Michael Kassiou played a pivotal
                                                            role in
                                                            the development of
                                                            our university curriculum. His expertise, creativity, and
                                                            dedication to ensuring our program met the highest standards
                                                            were truly outstanding. We are grateful for his
                                                            contributions
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
                                                            <p class="text-sm mb-0 text-dark-70">Dean | School of
                                                                Business | EduEx
                                                                University </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-3">
                                                <div class=" px-0">
                                                    <div class="">
                                                        <p class="fst-italic">Prof. Michael Kassiou played a pivotal
                                                            role in
                                                            the development of
                                                            our university curriculum. His expertise, creativity, and
                                                            dedication to ensuring our program met the highest standards
                                                            were truly outstanding. We are grateful for his
                                                            contributions
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
                                                            <p class="text-sm mb-0 text-dark-70">Dean | School of
                                                                Business | EduEx
                                                                University </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn-text btn border-0 text-primary">More Testimonial </button>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--Reviews & Rating-->

                        </div>
                        <!-- page Content end here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@push('bottom_scripts')

    <script>
        jQuery(document).ready(function () {
            var awardsCarousel = jQuery(".awards-carousel");
            awardsCarousel.owlCarousel({
                loop: true,
                nav: false,
                dots: false,
                items: 3,
                margin: 24,
            });

            jQuery(".awards-carousel-nav .awards-carousel-next").click(function () {
                awardsCarousel.trigger('next.owl.carousel');
            });

            jQuery(".awards-carousel-nav .awards-carousel-prev").click(function () {
                awardsCarousel.trigger('prev.owl.carousel');
            });

        })
    </script>
@endpush
