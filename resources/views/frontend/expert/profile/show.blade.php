@extends('frontend.layouts.app')

@section('content')
    <section class="page-section-sm">
        <div class="find-consultant-details">
            <div class="container profile__page edux-profile-page">
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
                                            <x-icon.location fill="#191D24" fill-opacity="0.5" width="25" height="24"/>
                                            <span> Sydney, {{ $expert->user->country->name }}</span>
                                        </p>
                                        <p class="text-sm d-flex align-items-center justify-content-center">
                                            <x-icon.clock fill="#191D24" width="25" height="24"/>
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
                                        <div class="d-flex gap-2 align-items-center py-1">
                                            <x-icon.globe fill="#0036E3"/>
                                            @foreach($expert->languages as $language)
                                                <div>
                                                    <p class="m-0 fw-medium">{{ $language->pivot->proficiency }}
                                                        in {{ $language->name }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-widget user-skills-widget">
                                    <h4 class="widget-title">Skillsets</h4>

                                    <div class="user-profile-skills">
                                        <ul>
                                            @if (count($expert->expertises) > 0)
                                                @foreach ($expert->expertises as $expertise)
                                                    <li>{{ $expertise->name }}</li>
                                                @endforeach
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
                                <div class="user-education-box-item mb-0 mt-4">
                                    <p class="text-lg fw-medium mt-2 mb-0 edux-social"><a href="#">
                                            <x-icon.logo-linkedin fill="#0036E3"/>
                                            LinkedIn</a></p>
                                    <p class="text-lg fw-medium mt-3 mb-0 edux-social"><a href="#">
                                            <x-icon.briefcase fill="#0036E3"/>
                                            Work Profile</a></p>
                                    <p class="text-lg fw-medium mt-3 mb-0 edux-social"><a href="#">
                                            <x-icon.briefcase fill="#0036E3"/>
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
                                            <h3 class="d-inline-flex align-items-center">
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
                                    <div class="consultant-prof edux-consultant-prof card card-24">
                                        <div class="d-flex gap-2 edux-add-modal-steps mb-3">
                                            <div class="edux-tool-tips">
                                                <x-icon.briefcase-time/>
                                                <h3 style="font-size:24px" class="mb-0">Training
                                                    ({{ $expert->trainings->count() }})</h3>
                                                <div class="tooltip-wrapper bottom-left">
                                                    <i class="tooltip-icon">
                                                        <x-icon.info fill="#C8C5D4"/>
                                                    </i>
                                                    <div class="tooltip-content"> Lorem ipsum dolor sit amet,
                                                        consectetur
                                                        adipisicing elit. Eum, placeat!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                </div>
                                <div class="page-block mt-40">
                                    <div class="card card-24">
                                        <div class="card-body">
                                            <div class="page-block-heading d-flex justify-content-between gap-3 mb-0">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <x-icon.user-tie/>
                                                    <h3 class="h5 mb-0">Work Experience</h3>
                                                    <button class="icon-btn">
                                                        <x-icon.info fill="#C8C5D4"/>
                                                    </button>
                                                </div>
                                            </div>
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
                                    <div class="card card-24">
                                        <div class="card-body">
                                            <div class="page-block-heading d-flex justify-content-between gap-3 mb-0">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <x-icon.user-tie/>
                                                    <h3 class="h5 mb-0 current-project-active">Current Project</h3>
                                                    <button class="icon-btn">
                                                        <x-icon.info fill="#C8C5D4"/>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="card card-24 mb-3 border-0">
                                                <div class="card-body py-3 ps-0 pb-2">
                                                    <div class="d-flex gap-3 justify-content-sm-between">
                                                        <div class="mb-2">
                                                            <h6 class=""> Public Health Institute of Sydney, Sydney,
                                                                Australia</h6>
                                                            <p class="mb-0"><i> Public Health Institute of Sydney,
                                                                    Sydney,
                                                                    Australia </i> | <strong>2015 - Present</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p>I led a groundbreaking project in collaboration with Public
                                                        Health Institute of Sydney to develop an innovative public
                                                        health curriculum. This project aimed to revamp the university's
                                                        existing curriculum to align with the latest research,
                                                        pedagogical trends, and industry demands. Key highlights of this
                                                        project included:</p>
                                                    <p>Conducting a comprehensive needs assessment to identify gaps in
                                                        the current curriculum and the evolving requirements of the
                                                        public health field.</p>
                                                    <p>Collaborating with a team of subject matter experts to design a
                                                        competency-based curriculum that emphasised practical skills and
                                                        interdisciplinary learning.</p>
                                                </div>

                                            </div>

                                            <div class="card card-24 border-0">
                                                <div class="card-body pt-0 ps-0">
                                                    <div class="d-flex gap-3 justify-content-sm-between">
                                                        <div class="mb-2">
                                                            <h6 class="">International Public Health Education
                                                                Consortium</h6>
                                                            <p class="mb-0"><i> Public Health Institute of Sydney,
                                                                    Sydney,
                                                                    Australia </i> | <strong>2018- Present</strong>
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <p>In this role, I contributed to the advancement of public health
                                                        education and curriculum development by:</p>
                                                    <p>
                                                        Collaborating with a diverse team of international researchers
                                                        to collect and analyse data from a wide range of universities
                                                        and public health programs. Evaluating curriculum structures,
                                                        content, pedagogical approaches, and assessment methods to
                                                        identify commonalities, differences, and best practices.
                                                        Conducting surveys and interviews with faculty members and
                                                        students to gather
                                                        qualitative insights into the effectiveness of various
                                                        curricular models.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="page-block mt-40">
                                    <div class="card card-24">
                                        <div class="card-body">
                                            <div class="page-block-heading d-flex justify-content-between gap-3 mb-0">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <x-icon.user-tie/>
                                                    <h3 class="h5 mb-0">Previous Projects (0)</h3>
                                                    <button class="icon-btn">
                                                        <x-icon.info fill="#C8C5D4"/>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="card card-24 mb-3 border-0">
                                                <div class="card-body py-3 ps-0 pb-2">
                                                    <div class="d-flex gap-3 justify-content-sm-between">
                                                        <div class="mb-2">
                                                            <h6 class=""> Public Health Institute of Sydney, Sydney,
                                                                Australia</h6>
                                                            <p class="mb-0"><i> Public Health Institute of Sydney,
                                                                    Sydney,
                                                                    Australia </i> | <strong>2015 - Present</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p>I led a groundbreaking project in collaboration with Public
                                                        Health Institute of Sydney to develop an innovative public
                                                        health curriculum. This project aimed to revamp the university's
                                                        existing curriculum to align with the latest research,
                                                        pedagogical trends, and industry demands. Key highlights of this
                                                        project included:</p>
                                                    <p>Conducting a comprehensive needs assessment to identify gaps in
                                                        the current curriculum and the evolving requirements of the
                                                        public health field.</p>
                                                    <p>Collaborating with a team of subject matter experts to design a
                                                        competency-based curriculum that emphasised practical skills and
                                                        interdisciplinary learning.</p>
                                                </div>

                                            </div>

                                            <div class="card card-24 border-0">
                                                <div class="card-body pt-0 ps-0">
                                                    <div class="d-flex gap-3 justify-content-sm-between">
                                                        <div class="mb-2">
                                                            <h6 class="">International Public Health Education
                                                                Consortium</h6>
                                                            <p class="mb-0"><i> Public Health Institute of Sydney,
                                                                    Sydney,
                                                                    Australia </i> | <strong>2018- Present</strong>
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <p>In this role, I contributed to the advancement of public health
                                                        education and curriculum development by:</p>
                                                    <p>
                                                        Collaborating with a diverse team of international researchers
                                                        to collect and analyse data from a wide range of universities
                                                        and public health programs. Evaluating curriculum structures,
                                                        content, pedagogical approaches, and assessment methods to
                                                        identify commonalities, differences, and best practices.
                                                        Conducting surveys and interviews with faculty members and
                                                        students to gather
                                                        qualitative insights into the effectiveness of various
                                                        curricular models.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="page-block mt-40">
                                    <div class="card card-24">
                                        <div class="card-body">
                                            <div class="page-block-heading d-flex justify-content-between gap-3 mb-0">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <x-icon.listening fill="#0036E3"/>
                                                    <h3 class="h5 mb-0">Conferences and Media Interview</h3>
                                                    <button class="icon-btn">
                                                        <x-icon.info fill="#C8C5D4"/>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="card card-24 mb-3 border-0">
                                                <div class="card-body py-3 ps-0 pb-4 edux-media-interview">
                                                    <p class="mb-2"><a href="#">Front Row & On the Mic: Climate Change
                                                            Summit Highlights & Media Conversations
                                                            with Activists</a></p>
                                                    <p class="mb-2">Public Health Institute of Sydney</p>

                                                    <div class="user-profile-skills">
                                                        <ul>
                                                            <li>Conference</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="card-body py-3 ps-0 pb-4 edux-media-interview">
                                                    <p class="mb-2"><a href="#">Mic Drop Moments: Elon Musk Unveils Bold
                                                            Space Exploration Plans in Interview</a></p>
                                                    <p class="mb-2">Public Health Institute of Sydney</p>

                                                    <div class="user-profile-skills">
                                                        <ul>
                                                            <li>Conference</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="card-body py-3 ps-0 pb-4 edux-media-interview">
                                                    <p class="mb-2"><a href="#">Deep Dives & Hot Takes: Exploring AI
                                                            Ethics at Industry Conference & Interview with Leading
                                                            Expert</a></p>
                                                    <p class="mb-2">Fox News</p>

                                                    <div class="user-profile-skills">
                                                        <ul>
                                                            <li>Media</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="card-body py-3 ps-0 pb-4 edux-media-interview">
                                                    <p class="mb-2"><a href="#">Fireside Chats & Panel Discussions:
                                                            Unveiling Cybersecurity Trends at DEF CON</a></p>
                                                    <p class="mb-2">CNN</p>

                                                    <div class="user-profile-skills">
                                                        <ul>
                                                            <li>Media</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="consultant-work mb-5">

                                    <div class="d-flex gap-2 align-items-center">
                                        <x-icon.batch width="32" height="32" fill="#0036E3"/>
                                        <h3 class="h5 mb-0">Awards and Honors</h3>
                                        <button class="icon-btn">
                                            <x-icon.info fill="#C8C5D4"/>
                                        </button>
                                    </div>


                                    <div class="mt-4">
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


                                </div> <!-- Consultant work-->


                                <div class="consultant-testimonial">
                                    <h3 class="mb-1"><img
                                            src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/quote.svg') }}">
                                        Recommendation
                                        <button class="icon-btn">
                                            <x-icon.info fill="#C8C5D4"/>
                                        </button>
                                    </h3>
                                    {{--                                <div class="star-ratings">--}}
                                    {{--                                    <x-icon.star-fill />--}}
                                    {{--                                    <x-icon.star-fill />--}}
                                    {{--                                    <x-icon.star-fill />--}}
                                    {{--                                    <x-icon.star-fill />--}}
                                    {{--                                    <x-icon.star-fill />--}}
                                    {{--                                </div>--}}

                                    <div class="testimonial-text">
                                        <p>Prof. Michael Kassiou played a pivotal role in the development of our
                                            university
                                            curriculum. His expertise, creativity, and dedication to ensuring our
                                            program met
                                            the highest standards were truly outstanding. We are grateful for his
                                            contributions
                                            and highly recommend his services to any educational institution.</p>
                                        <div class="testimonial-block">
                                            <div class="testimonial-img">
                                                <img
                                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/testimonial-img1.jpg') }}"></img>
                                            </div>
                                            <div class="testimonial-con">
                                                <h4>Prof. David Smith</h4>
                                                <p>Dean | School of Business | Sydney Islamic Business School</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-text testimonialnone">
                                        {{--                                    <div class="star-ratings mb-4">--}}
                                        {{--                                        <x-icon.star-fill />--}}
                                        {{--                                        <x-icon.star-fill />--}}
                                        {{--                                        <x-icon.star-fill />--}}
                                        {{--                                        <x-icon.star-fill />--}}
                                        {{--                                        <x-icon.star-fill />--}}
                                        {{--                                    </div>--}}
                                        <p>Prof. Michael Kassiou played a pivotal role in the development of our
                                            university
                                            curriculum. His expertise, creativity, and dedication to ensuring our
                                            program met
                                            the highest standards were truly outstanding. We are grateful for his
                                            contributions
                                            and highly recommend his services to any educational institution.</p>
                                        <div class="testimonial-block">
                                            <div class="testimonial-img">
                                                <img
                                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/testimonial-img1.jpg') }}"></img>
                                            </div>
                                            <div class="testimonial-con">
                                                <h4>Prof. David Smith</h4>
                                                <p>Dean | School of Business | Sydney Islamic Business School</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-button">
                                        <a href="#">More Review & Rating
                                            <x-icon.chevron-right fill="#0036E3"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- page Content end here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
