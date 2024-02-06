@extends('frontend.layouts.app')

@section('content')
    @vite('resources/default/css/expert-profile.css')

    <div class="find-consultant-details">
        <div class="container profile__page edux-profile-page">
            <div class="edux-billing-method-area">
                <div class="col">
                    <div class="sidebar-layout left-sidebar-layout find-projects-layout">
                        <div class="page-sidebar">
                            <div class="profile-widget user-bio-widget">
                                <div class="user-profile-picture">
                                    <img src="{{ $expert->picture ? $expert->picture : asset('dummy-user.png')}}">
                                    <button>Edit</button>
                                </div>
                                <div class="user-profile-info">
                                    <h3 class="h6">{{ $expert->user->full_name ?? '' }}</h3>
                                    <p class="text-primary">{{ $expert->expertField?->parent->name}}</p>
                                    <p class="text-sm d-flex align-items-center justify-content-center">
                                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M12.5009 11.8654C12.9985 11.8654 13.4239 11.6882 13.7771 11.3339C14.1303 10.9795 14.3069 10.5536 14.3069 10.056C14.3069 9.55839 14.1297 9.133 13.7754 8.7798C13.4211 8.4266 12.9951 8.25 12.4975 8.25C11.9999 8.25 11.5745 8.42717 11.2213 8.7815C10.8681 9.13583 10.6915 9.56179 10.6915 10.0594C10.6915 10.557 10.8687 10.9824 11.223 11.3356C11.5774 11.6888 12.0033 11.8654 12.5009 11.8654ZM12.4992 19.5135C14.4556 17.7622 15.9527 16.0824 16.9906 14.474C18.0284 12.8657 18.5473 11.457 18.5473 10.2481C18.5473 8.42498 17.9681 6.92627 16.8098 5.7519C15.6515 4.57753 14.2146 3.99035 12.4992 3.99035C10.7838 3.99035 9.34698 4.57753 8.18865 5.7519C7.03031 6.92627 6.45115 8.42498 6.45115 10.2481C6.45115 11.457 6.97006 12.8657 8.00787 14.474C9.04571 16.0824 10.5428 17.7622 12.4992 19.5135ZM12.4992 21.5096C9.98257 19.3288 8.0954 17.2993 6.8377 15.4211C5.58001 13.5429 4.95117 11.8186 4.95117 10.2481C4.95117 7.94038 5.69765 6.07213 7.1906 4.64328C8.68353 3.21443 10.4531 2.5 12.4992 2.5C14.5454 2.5 16.3149 3.21443 17.8078 4.64328C19.3008 6.07213 20.0473 7.94038 20.0473 10.2481C20.0473 11.8186 19.4184 13.5429 18.1607 15.4211C16.903 17.2993 15.0159 19.3288 12.4992 21.5096Z"
                                                fill="#191D24" fill-opacity="0.5" />
                                        </svg>
                                        <span> Sydney, {{ $expert->user->country->name }}</span>
                                    </p>
                                    <p class="text-sm d-flex align-items-center justify-content-center">
                                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M15.9731 16.5269L17.0269 15.4731L13.25 11.6959V6.99998H11.75V12.3038L15.9731 16.5269ZM12.5016 21.5C11.1877 21.5 9.95268 21.2506 8.79655 20.752C7.6404 20.2533 6.63472 19.5765 5.7795 18.7217C4.92427 17.8669 4.24721 16.8616 3.74833 15.706C3.24944 14.5504 3 13.3156 3 12.0017C3 10.6877 3.24933 9.45268 3.748 8.29655C4.24667 7.1404 4.92342 6.13472 5.77825 5.2795C6.6331 4.42427 7.63834 3.74721 8.79398 3.24833C9.94959 2.74944 11.1844 2.5 12.4983 2.5C13.8122 2.5 15.0473 2.74933 16.2034 3.248C17.3596 3.74667 18.3652 4.42342 19.2205 5.27825C20.0757 6.1331 20.7527 7.13834 21.2516 8.29398C21.7505 9.44959 22 10.6844 22 11.9983C22 13.3122 21.7506 14.5473 21.252 15.7034C20.7533 16.8596 20.0765 17.8652 19.2217 18.7205C18.3669 19.5757 17.3616 20.2527 16.206 20.7516C15.0504 21.2505 13.8156 21.5 12.5016 21.5ZM12.5 20C14.7166 20 16.6041 19.2208 18.1625 17.6625C19.7208 16.1041 20.5 14.2166 20.5 12C20.5 9.78331 19.7208 7.89581 18.1625 6.33748C16.6041 4.77914 14.7166 3.99998 12.5 3.99998C10.2833 3.99998 8.39581 4.77914 6.83748 6.33748C5.27914 7.89581 4.49998 9.78331 4.49998 12C4.49998 14.2166 5.27914 16.1041 6.83748 17.6625C8.39581 19.2208 10.2833 20 12.5 20Z"
                                                fill="#191D24" fill-opacity="0.5" />
                                        </svg>
                                        <span> 10.15am AEST</span>
                                    </p>
                                    {{-- @TODO project need to be dynamic --}}
                                    @if(isset($eoi))
                                    @else
                                    <button onclick="Livewire.dispatch('modal.open', { component: 'project.invite', arguments: { 'expert': {{ $expert->id }}, 'project': 0 }})" class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon">
                                        Invite to Project
                                    </button>
                                    @endif
                                    <button class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M6.5 14H14.5V12H6.5V14ZM6.5 11H18.5V9H6.5V11ZM6.5 8H18.5V6H6.5V8ZM2.5 22V4C2.5 3.45 2.69583 2.97917 3.0875 2.5875C3.47917 2.19583 3.95 2 4.5 2H20.5C21.05 2 21.5208 2.19583 21.9125 2.5875C22.3042 2.97917 22.5 3.45 22.5 4V16C22.5 16.55 22.3042 17.0208 21.9125 17.4125C21.5208 17.8042 21.05 18 20.5 18H6.5L2.5 22ZM5.65 16H20.5V4H4.5V17.125L5.65 16Z"
                                                fill="#0036E3" />
                                        </svg>
                                        Chat with Michael
                                    </button>

                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="widget-title">Languages</h4>
                                <div class="widget-content text-sm">
                                    <div class="d-flex gap-2 align-items-center py-1">
                                        <x-icon.globe fill="#0036E3" />
                                        <div>
                                            <p class="m-0 fw-medium">Proficient in English</p>
                                        </div>
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
                                    <div class="user-education-box-item {{ $loop->last ? 'mb-0' : 'edux-border-bottom' }}">
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
                                        <span>Biography</span>
                                    </h3>
                                    <p class="d-inline-flex align-items-center">
                                        <span>${{ $expert->hourly_rate }}/hour</span>
                                    </p>
                                </div>
                                <p>
                                    {{ $expert->biography ?? '' }}
                                </p>
                            </div>
                            @endif

                            <livewire:expert-profile.consultation.lists :expert="$expert" />

                            <div class="page-block mt-40">
                                <div class="card card-24">
                                    <div class="card-body">
                                        <div class="page-block-heading d-flex justify-content-between gap-3 mb-0">
                                            <div class="d-flex gap-2 align-items-center">
                                                <x-icon.user-tie />
                                                <h3 class="h5 mb-0">Work Experience</h3>
                                                <button class="icon-btn">
                                                    <x-icon.info fill="#C8C5D4" />
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
                                                            <i>{{ $experience->institute . ', ' }} {{ $experience->address }}</i> |
                                                            <strong>{{ $experience->start_year }} - {{ $experience->end_year ?? 'Continuing' }}</strong>
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


                            <div class="consultant-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 32 32" fill="none">
                                        <path
                                            d="M16 4C12.145 4 9 7.145 9 11C9 13.379 10.21 15.484 12.031 16.75C7.926 18.352 5 22.352 5 27H7C7 22.602 10.191 18.926 14.375 18.156L15 20H17L17.625 18.156C21.809 18.926 25 22.602 25 27H27C27 22.352 24.074 18.352 19.969 16.75C21.789 15.484 23 13.379 23 11C23 7.145 19.855 4 16 4ZM16 6C18.773 6 21 8.227 21 11C21 13.773 18.773 16 16 16C13.227 16 11 13.773 11 11C11 8.227 13.227 6 16 6ZM15 21L14 27H18L17 21H15Z"
                                            fill="#0036E3" />
                                    </svg>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home-tab-pane" type="button" role="tab"
                                            aria-controls="home-tab-pane" aria-selected="true">Work in Progress
                                            (0)</button>
                                    </li>
                                    <span>|</span>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                                            aria-controls="profile-tab-pane" aria-selected="false"> Completed Projects (0)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M11 17H13V11H11V17ZM12 9C12.2833 9 12.5208 8.90417 12.7125 8.7125C12.9042 8.52083 13 8.28333 13 8C13 7.71667 12.9042 7.47917 12.7125 7.2875C12.5208 7.09583 12.2833 7 12 7C11.7167 7 11.4792 7.09583 11.2875 7.2875C11.0958 7.47917 11 7.71667 11 8C11 8.28333 11.0958 8.52083 11.2875 8.7125C11.4792 8.90417 11.7167 9 12 9ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22Z"
                                                    fill="#C8C5D4" />
                                            </svg></button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                        aria-labelledby="home-tab" tabindex="0">
                                        <div class="consultant-work-b">
                                            <h4>Development of Innovative Public Health Curriculum</h4>
                                            <h5>Public Health Institute of Sydney, Sydney, Australia <strong>| 2015 -
                                                    Present</strong></h5>
                                            <p>I led a groundbreaking project in collaboration with Public Health Institute
                                                of Sydney to develop an innovative public health curriculum. This project
                                                aimed to revamp the university's existing curriculum to align with the
                                                latest research, pedagogical trends, and industry demands. Key highlights of
                                                this project included:</p>
                                            <p>Conducting a comprehensive needs assessment to identify gaps in the current
                                                curriculum and the evolving requirements of the public health field.</p>
                                            <p>Collaborating with a team of subject matter experts to design a
                                                competency-based curriculum that emphasised practical skills and
                                                interdisciplinary learning.</p>
                                        </div>
                                        <div class="consultant-work-b">
                                            <h4>Comparative Analysis of Public Health Curricula</h4>
                                            <h5> International Public Health Education Consortium <strong>| 2018 -
                                                    Present</strong></h5>
                                            <p>In this role, I contributed to the advancement of public health education and
                                                curriculum development by:</p>
                                            <p>Collaborating with a diverse team of international researchers to collect and
                                                analyse data from a wide range of universities and public health programs.
                                                Evaluating curriculum structures, content, pedagogical approaches, and
                                                assessment methods to identify commonalities, differences, and best
                                                practices. Conducting surveys and interviews with faculty members and
                                                students to gather
                                                qualitative insights into the effectiveness of various curricular models.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                        aria-labelledby="profile-tab" tabindex="0">
                                        <div class="consultant-work-b">
                                            <h4>Development of Innovative Public Health Curriculum</h4>
                                            <h5>Public Health Institute of Sydney, Sydney, Australia <strong>| 2015 -
                                                    Present</strong></h5>
                                            <p>I led a groundbreaking project in collaboration with Public Health Institute
                                                of Sydney to develop an innovative public health curriculum. This project
                                                aimed to revamp the university's existing curriculum to align with the
                                                latest research, pedagogical trends, and industry demands. Key highlights of
                                                this project included:</p>
                                            <p>Conducting a comprehensive needs assessment to identify gaps in the current
                                                curriculum and the evolving requirements of the public health field.</p>
                                            <p>Collaborating with a team of subject matter experts to design a
                                                competency-based curriculum that emphasised practical skills and
                                                interdisciplinary learning.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="consultant-work mb-5">

                                <div class="d-flex gap-2 align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 32 32" fill="none">
                                        <path
                                            d="M23 2L24.593 5L28 5.414L25.5 7.667L26 11L23 9.125L20 11L20.5 7.667L18 5.414L21.5 5L23 2Z"
                                            fill="#0036E3" />
                                        <path
                                            d="M22.7201 13.2477L20.7821 12.7497C20.4347 14.0879 19.6985 15.2932 18.6664 16.2132C17.6344 17.1332 16.3528 17.7267 14.9836 17.9186C13.6144 18.1106 12.219 17.8925 10.9737 17.2918C9.72846 16.691 8.68917 15.7347 7.98715 14.5436C7.28514 13.3525 6.9519 11.9801 7.02954 10.5996C7.10718 9.21923 7.59222 7.8928 8.42337 6.78792C9.25452 5.68305 10.3945 4.8493 11.6993 4.39201C13.0041 3.93473 14.4151 3.87442 15.7541 4.21871L16.2531 2.28171C14.3011 1.77396 12.2351 1.93739 10.3871 2.74572C8.53923 3.55405 7.01683 4.96032 6.06471 6.73842C5.11258 8.51652 4.78606 10.5632 5.13764 12.5492C5.48922 14.5353 6.49848 16.3455 8.00313 17.6887V29.9987L14.0031 25.9987L20.0031 29.9987V17.7067C21.3313 16.523 22.2771 14.9708 22.7201 13.2477ZM18.0031 26.2617L14.0031 23.5947L10.0031 26.2617V19.0487C11.2442 19.6722 12.6136 19.9973 14.0024 19.9984C15.3913 19.9994 16.7612 19.6763 18.0031 19.0547V26.2617Z"
                                            fill="#0036E3" />
                                    </svg>
                                    <h3 class="h5 mb-0">Portfolio</h3>
                                    <button class="icon-btn">
                                        <x-icon.info fill="#C8C5D4" />
                                    </button>
                                </div>


                                <div class="mt-4">
                                    <div class="owl-carousel portfolioCaousel">
                                        <div class="portfolio__card">
                                            <figure class="position-relative">
                                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port1.jpg') }}"
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
                                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port2.jpg') }}"
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
                                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port3.jpg') }}"
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
                                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port1.jpg') }}"
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
                                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/port3.jpg') }}"
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
                                        src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/quote.svg') }}"></img>Rating
                                    and Review <button class="icon-btn">
                                        <x-icon.info fill="#C8C5D4" />
                                    </button></h3>
                                <div class="star-ratings">
                                    <x-icon.star-fill />
                                    <x-icon.star-fill />
                                    <x-icon.star-fill />
                                    <x-icon.star-fill />
                                    <x-icon.star-fill />
                                </div>

                                <div class="testimonial-text">
                                    <p>Prof. Michael Kassiou played a pivotal role in the development of our university
                                        curriculum. His expertise, creativity, and dedication to ensuring our program met
                                        the highest standards were truly outstanding. We are grateful for his contributions
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
                                    <div class="star-ratings mb-4">
                                        <x-icon.star-fill />
                                        <x-icon.star-fill />
                                        <x-icon.star-fill />
                                        <x-icon.star-fill />
                                        <x-icon.star-fill />
                                    </div>
                                    <p>Prof. Michael Kassiou played a pivotal role in the development of our university
                                        curriculum. His expertise, creativity, and dedication to ensuring our program met
                                        the highest standards were truly outstanding. We are grateful for his contributions
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
                                    <a href="#">More Review & Rating <svg xmlns="http://www.w3.org/2000/svg"
                                            width="25" height="24" viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M13.4437 11.9976L8.84375 7.39758L9.89758 6.34375L15.5514 11.9976L9.89758 17.6514L8.84375 16.5976L13.4437 11.9976Z"
                                                fill="#0036E3" />
                                        </svg> </a>
                                </div>
                            </div>


                        </div>
                        <!-- page Content end here -->

                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- ===================== Work Experience Modal start Here ====================== -->

    <div class="modal fade" id="WorkExperienceForm" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-add-expert">
            <div class="modal-content modal-content-expert">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 pt-0">

                    <div class="consultant-work-add">
                        <h3>
                            <span class="add-exp-img"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/work_history.svg') }}"></img></span>
                            <span class="add-exp-text">Add Work Experience</span>
                        </h3>
                    </div>
                    <form>
                        <div class="mb-4">
                            <label for="recipient-name" class="col-form-label expert-for-label">Name of
                                institution</label>
                            <select class="form-select form-select-lg mb-3 add-expert-select"
                                aria-label=".form-select-lg example">
                                <option selected>Select an institution</option>
                                <option value="1">Select an institution</option>
                                <option value="2">Select an institution</option>
                                <option value="3">Select an institution</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="recipient-name" class="col-form-label expert-for-label pt-0">Role / Job
                                title</label>
                            <select class="form-select form-select-lg mb-3  add-expert-select"
                                aria-label=".form-select-lg example">
                                <option selected>Select an institution</option>
                                <option value="1">Select an institution</option>
                                <option value="2">Select an institution</option>
                                <option value="3">Select an institution</option>
                            </select>
                        </div>
                        <div class="row mb-2">
                            <h3 class="start-end">Start date</h3>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label expert-for-label">Month</label>
                                <select class="form-select form-select-lg mb-3  add-expert-select"
                                    aria-label=".form-select-lg example">
                                    <option selected>Select month</option>
                                    <option value="1">Select month</option>
                                    <option value="2">Select month</option>
                                    <option value="3">Select month</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label expert-for-label">Year</label>
                                <select class="form-select form-select-lg mb-3  add-expert-select"
                                    aria-label=".form-select-lg example">
                                    <option selected>Select Year</option>
                                    <option value="1">Select Year</option>
                                    <option value="2">Select Year</option>
                                    <option value="3">Select Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <h3 class="start-end">End date</h3>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label expert-for-label">Month</label>
                                <select class="form-select form-select-lg mb-3  add-expert-select"
                                    aria-label=".form-select-lg example">
                                    <option selected>Select month</option>
                                    <option value="1">Select month</option>
                                    <option value="2">Select month</option>
                                    <option value="3">Select month</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label expert-for-label">Year</label>
                                <select class="form-select form-select-lg mb-3  add-expert-select"
                                    aria-label=".form-select-lg example">
                                    <option selected>Select Year</option>
                                    <option value="1">Select Year</option>
                                    <option value="2">Select Year</option>
                                    <option value="3">Select Year</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="form-check form-check-all">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label expert-for-label" for="gridCheck">
                                        I currently work here
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <h3 class="start-end">Description</h3>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label textarea-for-label">Add a
                                    simple description of your responsibilities and achievements in this role.</label>
                                <textarea class="form-control expert-text-area" id="exampleFormControlTextarea1" rows="3">Include a few brief details about what you did in this role.
                          </textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn btn-primary btn-exp-save">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!-- ===================== Work Experience Modal start Here ====================== -->




    <!-- ===================== Work Experience Modal start Here ====================== -->

    <div class="modal fade" id="addPortfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-add-expert">
            <div class="modal-content modal-content-expert">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 pt-0">
                    <div class="consultant-work-add">
                        <h3>
                            <span class="add-exp-img"> <img
                                    src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/work_history.svg') }}"></img></span>
                            <span class="add-exp-text">Add Portfolio</span>
                        </h3>
                    </div>
                    <form>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="upload-area">
                                    <label>
                                        <div class="upload-item">
                                            <img src="{{ asset('/assets/frontend/img/upload.png') }}"></img>
                                            <h4>Clik to upload or drag & drop</h4>
                                            <p>Drag & drop any images or documents that might be helpful in explaining your
                                                brief here</p>
                                        </div>
                                        <input type="file" style="visibility: hidden;" />
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4 position-relative">
                                    <label for="exampleInputEmail1"
                                        class="form-label position-absolute add-title-label">Title of the project</label>
                                    <input type="text" class="form-control add-expert-select" id=""
                                        aria-describedby="emailHelp" placeholder="Type project title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 position-relative">
                                    <label for="exampleInputEmail1"
                                        class="form-label position-absolute category-label">Category</label>
                                    <input type="text" class="form-control add-expert-select" id=""
                                        aria-describedby="emailHelp" placeholder="Type the skills & hit enter">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="suggestion-area">
                                    <p><span class="suggestion-skill">Suggestion skills: </span> Curriculum Editor,
                                        E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis,
                                        skill development</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn btn-primary btn-exp-save">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!-- ===================== Work Experience Modal start Here ====================== -->


    <!-- Modal : Add Work Experience-->
    <div class="modal fade" id="bookConsultation" tabindex="-1" aria-labelledby="addConsultationLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg flat-modal">
            <div class="modal-content open-date-picker">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title pt-3 px-0" id="exampleModalLabel">Booking A Curriculum development</h5>
                    <button type="button" class="btn-close pe-4" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-4">
                    <div class="form-input-group form-input-has-icon ">
                        <div class="icon-field-wrapper">
                            <input name="skill" id="skill" class="form-input-field" wire:model="skill"
                                placeholder="Total slot">
                            <span class="form-input-icon edux-slot-count"> 3 </span>
                        </div>
                    </div>
                    <div class="mb-40">
                        <div class="available-schedule-slot mb-40">

                            <x-form.flatpicker label="" inline="true" name="datepicker" />

                            <div class="slot-item-area">
                                <h6>Wednesday, 15th Oct </h6>
                                <div class="slot-item">
                                    <div class="single-slot">
                                        <span>1:00 AM</span>
                                    </div>
                                    <div class="multi-slot">
                                        <div class="single-slot slot-border">
                                            <span>1:00 AM</span>
                                        </div>
                                        <div class="single-slot slot-fill">
                                            <span>1:00 AM</span>
                                        </div>
                                    </div>
                                    <div class="single-slot">
                                        <span>3:00 AM</span>
                                    </div>
                                    <div class="single-slot">
                                        <span>4:00 AM</span>
                                    </div>
                                    <div class="single-slot">
                                        <span>4:00 AM</span>
                                    </div>
                                    <div class="single-slot">
                                        <span>4:00 AM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="edux-select-options position-relative d-none">
                        <x-form.textarea label="Note" wire:model="bio" placeholder="Bio"> Select options
                        </x-form.textarea>
                        <span class="edux-total-select-count">0/200</span>
                    </div>
                    <div class="modal-footer px-0 pb-0 pt-3">
                        <button type="button" class="btn btn-secondary edux-btn-cancel"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary eudx-btn-save">Book a Consultation</button>
                        <button type="button" class="btn  eudx-btn-back d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M7.825 13L13.425 18.6L12 20L4 12L12 4L13.425 5.4L7.825 11H20V13H7.825Z"
                                    fill="#191D24" fill-opacity="0.7" />
                            </svg> Back </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->
@endsection


@push('bottom_scripts')
    <!-- Expert profile Portfolio slide -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(".portfolioCaousel").owlCarousel({
            items: 3,
            autoplay: false,
            autoplayTimeout: 5500,
            autoplayHoverPause: true,
            smartSpeed: 550,
            loop: false,
            margin: 20,
            nav: true,
            dots: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            },

        });
    </script>
@endpush
