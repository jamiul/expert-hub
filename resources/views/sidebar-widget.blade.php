@extends('frontend.layouts.app')
@section('content')

    <h4 class="my-5  text-center">Sidebar Widgets</h4>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="text-center h6 mb-4">Profile View Widget</h4>
                <div class="page-sidebar">
                    <div class="profile-widget user-bio-widget">
                        <div class="user-profile-picture">
                            <img src="{{ asset('assets/frontend/img/Mask-img.jpg') }}">
                            <button>Edit</button>
                        </div>
                        <div class="user-profile-info">
                            <h3 class="h6">Michael Kassiou</h3>
                            <p class="text-primary">Public Health</p>
                            <p class="text-sm d-flex align-items-center justify-content-center">
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                     viewBox="0 0 25 24"
                                     fill="none">
                                    <path
                                        d="M12.5009 11.8654C12.9985 11.8654 13.4239 11.6882 13.7771 11.3339C14.1303 10.9795 14.3069 10.5536 14.3069 10.056C14.3069 9.55839 14.1297 9.133 13.7754 8.7798C13.4211 8.4266 12.9951 8.25 12.4975 8.25C11.9999 8.25 11.5745 8.42717 11.2213 8.7815C10.8681 9.13583 10.6915 9.56179 10.6915 10.0594C10.6915 10.557 10.8687 10.9824 11.223 11.3356C11.5774 11.6888 12.0033 11.8654 12.5009 11.8654ZM12.4992 19.5135C14.4556 17.7622 15.9527 16.0824 16.9906 14.474C18.0284 12.8657 18.5473 11.457 18.5473 10.2481C18.5473 8.42498 17.9681 6.92627 16.8098 5.7519C15.6515 4.57753 14.2146 3.99035 12.4992 3.99035C10.7838 3.99035 9.34698 4.57753 8.18865 5.7519C7.03031 6.92627 6.45115 8.42498 6.45115 10.2481C6.45115 11.457 6.97006 12.8657 8.00787 14.474C9.04571 16.0824 10.5428 17.7622 12.4992 19.5135ZM12.4992 21.5096C9.98257 19.3288 8.0954 17.2993 6.8377 15.4211C5.58001 13.5429 4.95117 11.8186 4.95117 10.2481C4.95117 7.94038 5.69765 6.07213 7.1906 4.64328C8.68353 3.21443 10.4531 2.5 12.4992 2.5C14.5454 2.5 16.3149 3.21443 17.8078 4.64328C19.3008 6.07213 20.0473 7.94038 20.0473 10.2481C20.0473 11.8186 19.4184 13.5429 18.1607 15.4211C16.903 17.2993 15.0159 19.3288 12.4992 21.5096Z"
                                        fill="#191D24" fill-opacity="0.5"/>
                                </svg>
                                <sapn> Sydney, Australia</sapn>
                            </p>
                            <p class="text-sm d-flex align-items-center justify-content-center">
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                     viewBox="0 0 25 24"
                                     fill="none">
                                    <path
                                        d="M15.9731 16.5269L17.0269 15.4731L13.25 11.6959V6.99998H11.75V12.3038L15.9731 16.5269ZM12.5016 21.5C11.1877 21.5 9.95268 21.2506 8.79655 20.752C7.6404 20.2533 6.63472 19.5765 5.7795 18.7217C4.92427 17.8669 4.24721 16.8616 3.74833 15.706C3.24944 14.5504 3 13.3156 3 12.0017C3 10.6877 3.24933 9.45268 3.748 8.29655C4.24667 7.1404 4.92342 6.13472 5.77825 5.2795C6.6331 4.42427 7.63834 3.74721 8.79398 3.24833C9.94959 2.74944 11.1844 2.5 12.4983 2.5C13.8122 2.5 15.0473 2.74933 16.2034 3.248C17.3596 3.74667 18.3652 4.42342 19.2205 5.27825C20.0757 6.1331 20.7527 7.13834 21.2516 8.29398C21.7505 9.44959 22 10.6844 22 11.9983C22 13.3122 21.7506 14.5473 21.252 15.7034C20.7533 16.8596 20.0765 17.8652 19.2217 18.7205C18.3669 19.5757 17.3616 20.2527 16.206 20.7516C15.0504 21.2505 13.8156 21.5 12.5016 21.5ZM12.5 20C14.7166 20 16.6041 19.2208 18.1625 17.6625C19.7208 16.1041 20.5 14.2166 20.5 12C20.5 9.78331 19.7208 7.89581 18.1625 6.33748C16.6041 4.77914 14.7166 3.99998 12.5 3.99998C10.2833 3.99998 8.39581 4.77914 6.83748 6.33748C5.27914 7.89581 4.49998 9.78331 4.49998 12C4.49998 14.2166 5.27914 16.1041 6.83748 17.6625C8.39581 19.2208 10.2833 20 12.5 20Z"
                                        fill="#191D24" fill-opacity="0.5"/>
                                </svg>
                                <span> 10.15am AEST</span>
                            </p>

                        </div>
                    </div>

                    <div class="profile-widget user-education-widget">
                        <h4 class="widget-title">Education </h4>
                        <div class="widget-content">
                            <div class="user-education-box-item">
                                <p class="text-sm fw-medium mt-1 mb-0">Doctor of Philosophy</p>
                                <p class="text-sm mb-0">Public Health</p>
                                <p class="text-sm fst-italic mb-0">EduExHub University</p>
                                <p class="text-sm mb-1">1995 - 2000</p>
                            </div>
                            <div class="user-education-box-item">
                                <p class="text-sm fw-medium mt-1 mb-0">Master’s</p>
                                <p class="text-sm mb-0">Public Health</p>
                                <p class="text-sm fst-italic mb-0">EduExHub University</p>
                                <p class="text-sm mb-1">1993 -1995</p>
                            </div>
                            <div class="user-education-box-item mb-0">
                                <p class="text-sm fw-medium mt-1 mb-0">Bachelor</p>
                                <p class="text-sm mb-0">Public Health</p>
                                <p class="text-sm fst-italic mb-0">EduExHub University</p>
                                <p class="text-sm mb-1">1989 - 1993</p>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget user-skills-widget">
                        <h4 class="widget-title">Skillsets</h4>

                        <div class="user-profile-skills">
                            <ul>
                                <li>Public Health</li>
                                <li>Infectious Diseases</li>
                                <li>Curriculum Development</li>
                                <li>Educational Assessment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="text-center h6 mb-4">Profile Edit Widget</h4>
                <div class="page-sidebar">
                    <div class="profile-edit-widget user-bio-edit-widget">
                        <div class="user-profile-picture">
                            <img src="{{ asset('assets/frontend/img/Mask-img.jpg') }}">
                            <button>Edit</button>
                        </div>
                        <div class="user-profile-info">
                            <h3 class="h6">Michael Kassiou</h3>
                            <p class="text-primary d-inline-flex align-items-center gap-3">Public Health
                                <button class="icon-btn icon-btn-md border-1 border-gray-100">
                                    <x-icon.edit/>
                                </button>
                            </p>
                            <p class="text-sm d-flex align-items-center justify-content-center">
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                     viewBox="0 0 25 24"
                                     fill="none">
                                    <path
                                        d="M12.5009 11.8654C12.9985 11.8654 13.4239 11.6882 13.7771 11.3339C14.1303 10.9795 14.3069 10.5536 14.3069 10.056C14.3069 9.55839 14.1297 9.133 13.7754 8.7798C13.4211 8.4266 12.9951 8.25 12.4975 8.25C11.9999 8.25 11.5745 8.42717 11.2213 8.7815C10.8681 9.13583 10.6915 9.56179 10.6915 10.0594C10.6915 10.557 10.8687 10.9824 11.223 11.3356C11.5774 11.6888 12.0033 11.8654 12.5009 11.8654ZM12.4992 19.5135C14.4556 17.7622 15.9527 16.0824 16.9906 14.474C18.0284 12.8657 18.5473 11.457 18.5473 10.2481C18.5473 8.42498 17.9681 6.92627 16.8098 5.7519C15.6515 4.57753 14.2146 3.99035 12.4992 3.99035C10.7838 3.99035 9.34698 4.57753 8.18865 5.7519C7.03031 6.92627 6.45115 8.42498 6.45115 10.2481C6.45115 11.457 6.97006 12.8657 8.00787 14.474C9.04571 16.0824 10.5428 17.7622 12.4992 19.5135ZM12.4992 21.5096C9.98257 19.3288 8.0954 17.2993 6.8377 15.4211C5.58001 13.5429 4.95117 11.8186 4.95117 10.2481C4.95117 7.94038 5.69765 6.07213 7.1906 4.64328C8.68353 3.21443 10.4531 2.5 12.4992 2.5C14.5454 2.5 16.3149 3.21443 17.8078 4.64328C19.3008 6.07213 20.0473 7.94038 20.0473 10.2481C20.0473 11.8186 19.4184 13.5429 18.1607 15.4211C16.903 17.2993 15.0159 19.3288 12.4992 21.5096Z"
                                        fill="#191D24" fill-opacity="0.5"/>
                                </svg>
                                <sapn> Sydney, Australia</sapn>
                            </p>
                            <p class="text-sm d-flex align-items-center justify-content-center">
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                     viewBox="0 0 25 24"
                                     fill="none">
                                    <path
                                        d="M15.9731 16.5269L17.0269 15.4731L13.25 11.6959V6.99998H11.75V12.3038L15.9731 16.5269ZM12.5016 21.5C11.1877 21.5 9.95268 21.2506 8.79655 20.752C7.6404 20.2533 6.63472 19.5765 5.7795 18.7217C4.92427 17.8669 4.24721 16.8616 3.74833 15.706C3.24944 14.5504 3 13.3156 3 12.0017C3 10.6877 3.24933 9.45268 3.748 8.29655C4.24667 7.1404 4.92342 6.13472 5.77825 5.2795C6.6331 4.42427 7.63834 3.74721 8.79398 3.24833C9.94959 2.74944 11.1844 2.5 12.4983 2.5C13.8122 2.5 15.0473 2.74933 16.2034 3.248C17.3596 3.74667 18.3652 4.42342 19.2205 5.27825C20.0757 6.1331 20.7527 7.13834 21.2516 8.29398C21.7505 9.44959 22 10.6844 22 11.9983C22 13.3122 21.7506 14.5473 21.252 15.7034C20.7533 16.8596 20.0765 17.8652 19.2217 18.7205C18.3669 19.5757 17.3616 20.2527 16.206 20.7516C15.0504 21.2505 13.8156 21.5 12.5016 21.5ZM12.5 20C14.7166 20 16.6041 19.2208 18.1625 17.6625C19.7208 16.1041 20.5 14.2166 20.5 12C20.5 9.78331 19.7208 7.89581 18.1625 6.33748C16.6041 4.77914 14.7166 3.99998 12.5 3.99998C10.2833 3.99998 8.39581 4.77914 6.83748 6.33748C5.27914 7.89581 4.49998 9.78331 4.49998 12C4.49998 14.2166 5.27914 16.1041 6.83748 17.6625C8.39581 19.2208 10.2833 20 12.5 20Z"
                                        fill="#191D24" fill-opacity="0.5"/>
                                </svg>
                                <span> 10.15am AEST</span>
                            </p>
                            <div class="my-4 complete-profile-status-edit-widget">
                                <p class="text-sm d-flex align-items-center mb-1 gap-3">Complete your profile
                                    <button class="icon-btn icon-btn-md">
                                        <x-icon.edit/>
                                    </button>
                                </p>
                                <div progress-status="40%" class="complete-profile-status-progress-bar"></div>
                            </div>
                        </div>

                    </div>

                    <div class="profile-edit-widget user-education-edit-widget">
                        <h4 class="widget-title">Education
                            <button class="icon-btn icon-btn-md" data-bs-toggle="modal"
                                    data-bs-target="#addEducation">
                                <x-icon.add/>
                            </button>
                        </h4>
                        <div class="widget-content">
                            <div class="user-education-box-item">
                                <div>
                                    <p class="text-sm fw-medium mt-1 mb-0">Doctor of Philosophy</p>
                                    <p class="text-sm mb-0">Public Health</p>
                                    <p class="text-sm fst-italic mb-0">EduExHub University</p>
                                    <p class="text-sm fw-medium mb-1">1995 - 2000</p>
                                </div>
                                <div class="ms-auto">
                                    <button class="icon-btn icon-btn-md">
                                        <x-icon.edit/>
                                    </button>
                                    <button class="icon-btn icon-btn-md" data-bs-toggle="modal"
                                            data-bs-target="#deleteEducation">
                                        <x-icon.delete/>
                                    </button>
                                </div>
                            </div>
                            <div class="user-education-box-item">
                                <div>
                                    <p class="text-sm fw-medium mt-1 mb-0">Master’s</p>
                                    <p class="text-sm mb-0">Public Health</p>
                                    <p class="text-sm fst-italic mb-0">EduExHub University</p>
                                    <p class="text-sm fw-medium mb-1">1993 -1995</p>
                                </div>
                                <div class="ms-auto">
                                    <button class="icon-btn icon-btn-md">
                                        <x-icon.edit/>
                                    </button>
                                    <button class="icon-btn icon-btn-md" data-bs-toggle="modal"
                                            data-bs-target="#deleteEducation">
                                        <x-icon.delete/>
                                    </button>
                                </div>
                            </div>
                            <div class="user-education-box-item mb-0">
                                <div>
                                    <p class="text-sm fw-medium mt-1 mb-0">Bachelor</p>
                                    <p class="text-sm mb-0">Public Health</p>
                                    <p class="text-sm fst-italic mb-0">EduExHub University</p>
                                    <p class="text-sm fw-medium mb-1">1989 - 1993</p>
                                </div>
                                <div class="ms-auto">
                                    <button class="icon-btn icon-btn-md">
                                        <x-icon.edit/>
                                    </button>
                                    <button class="icon-btn icon-btn-md">
                                        <x-icon.delete/>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="text-center h6 mb-4">Filter Widget</h4>
                <div class="page-sidebar">
                    <div class="filter-widget border-bottom">
                        <div class="d-flex justify-content-between">
                            <h4 class="h6 mb-0">Filter</h4>
                            <button class="btn btn-sm btn-link text-decoration-underline px-0 ">Clear filters
                            </button>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="widget-title">Project by Categories</h4>
                        <div class="widget-accordion use-scroll-content">
                            <div class="widget-accordion-item">
                                <div class="widget-accordion-title" onclick="toggleAccordion(this)">
                                    <x-form.check class="m-0 gap-0" wire:model="project-category" id="A"/>
                                    Course Accreditations
                                </div>
                                <div class="widget-accordion-content">
                                    <x-form.check wire:model="project-category" id="A01">
                                        Accreditation Documentation
                                    </x-form.check>
                                    <x-form.check wire:model="project-category" id="A02">
                                        Accreditation Process
                                    </x-form.check>
                                    <x-form.check wire:model="project-category" id="A03">
                                        Accreditation Renewal
                                    </x-form.check>
                                    <x-form.check wire:model="project-category" id="A04">
                                        Accreditation Reporting
                                    </x-form.check>
                                    <x-form.check wire:model="project-category" id="A05">
                                        Accreditation Review
                                    </x-form.check>
                                    <x-form.check wire:model="project-category" id="A06">
                                        Accreditation Documentation
                                    </x-form.check>
                                    <x-form.check wire:model="project-category" id="A07">
                                        Accreditation Documentation
                                    </x-form.check>

                                </div>
                            </div>
                            <div class="widget-accordion-item">
                                <div class="widget-accordion-title" onclick="toggleAccordion(this)">
                                    <x-form.check class="m-0 gap-0" wire:model="project-category" id="A"/>
                                    Curriculum Development
                                </div>
                                <div class="widget-accordion-content">
                                    <x-form.check wire:model="project-category" id="B01">
                                        Accreditation Documentation
                                    </x-form.check>
                                    <x-form.check wire:model="project-category" id="B02">
                                        Accreditation Process
                                    </x-form.check>
                                    <x-form.check wire:model="project-category" id="B03">
                                        Accreditation Renewal
                                    </x-form.check>
                                    <x-form.check wire:model="project-category" id="B04">
                                        Accreditation Reporting
                                    </x-form.check>
                                    <x-form.check wire:model="project-category" id="B05">
                                        Accreditation Review
                                    </x-form.check>
                                    <x-form.check wire:model="project-category" id="B06">
                                        Accreditation Documentation
                                    </x-form.check>
                                    <x-form.check wire:model="project-category" id="B07">
                                        Accreditation Documentation
                                    </x-form.check>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <div class="d-flex gap-3 justify-content-between mb-2">
                            <h4 class="widget-title mb-0">Project Type</h4>
                            <span>
                                        <label class="widget-title-switch">
                                            <input type="checkbox" role="switch" name="project-type">
                                            <span class="switch-label">
                                                <span class="checkbox-indicator-area">
                                                    <span class="switch-indicator"></span>
                                                </span>
                                                <span class="switch-default-label" aria-hidden="true">Fixed</span>
                                                <span class="switch-alt-label" aria-hidden="true">Hourly</span>
                                            </span>
                                        </label>
                                    </span>
                        </div>

                        <div class="widget-field-row">
                            <x-form.input class="input-field-md" type="text" wire:model="type"
                                          placeholder="Min"/>
                            <x-form.input class="input-field-md" type="text" wire:model="type"
                                          placeholder="Max"/>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h6 class="widget-title">Study Level</h6>
                        <div class="widget-content">
                            <x-form.check id="all">
                                All
                            </x-form.check>
                            <x-form.check id="agriculture">
                                Agriculture
                            </x-form.check>
                            <x-form.check id="architecture">
                                Architecture
                            </x-form.check>
                            <x-form.check id="Business">
                                Business
                            </x-form.check>
                            <x-form.check id="Education">
                                Education
                            </x-form.check>
                            <x-form.check id="Engineering">
                                Engineering
                            </x-form.check>
                            <x-form.check id="EnvironmentalScience">
                                Environmental Science
                            </x-form.check>
                            <x-form.check id="Medicine">
                                Medicine
                            </x-form.check>
                            <x-form.check id="Health">
                                Health
                            </x-form.check>
                            <x-form.check id="Humanities">
                                Humanities
                            </x-form.check>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="widget-title">Location</h4>
                        {{--                                <x-form.autocomplete :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="text-center h6 mb-4">App Widget</h4>
                <div class="page-sidebar">
                    <div class="sidebar-widget">
                        <p class="text-sm mb-3">Fixed <strong class="h5">$200.00</strong></p>
                        <button class="btn btn-primary btn-md w-100">Send EOI</button>
                        <button class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon">
                            <x-icon.heart width="24" height="24" fill="#0036E3"/>
                            Save this Project
                        </button>
                    </div>
                    <div class="sidebar-widget">
                        <div class="alert alert-info mb-0">
                            You need to <a href="#">Log In</a> as a Consultant to send the EOI. Don't have an
                            account with us? <a href="#">Create an account now</a>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h4 class="widget-title">About the client</h4>
                        <div class="widget-content text-sm">
                            <div class="d-flex gap-2 align-items-center py-1">
                                <x-icon.account-circle fill="#0036E3"/>
                                <div>
                                    <p class="m-0 fw-medium">Dr Miles Esther</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 py-1">
                                <x-icon.graduation-cap fill="#0036E3"/>
                                <div>
                                    <p class="m-0 fw-medium">Institution</p>
                                    <p class="mb-0"> Sydney Islami business school</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 py-1">
                                <x-icon.globe fill="#0036E3"/>
                                <div>
                                    <p class="m-0 fw-medium">Austria</p>
                                    <p class="mb-0"> Sydney 9:20 pm</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 py-1">
                                <x-icon.briefcase fill="#0036E3"/>
                                <div>
                                    <p class="m-0 fw-medium">7 jobs posted</p>
                                    <p class="mb-0">100% hire rate, 4 open jobs</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-5">
    <script>
        function toggleAccordion(header) {
            header.classList.toggle("accordion-item-active");
            var content = header.nextElementSibling;
            content.style.display = (content.style.display === 'block') ? 'none' : 'block';
        }
    </script>
    <style>
        {{--NOT FOR USE--}}
        .page-sidebar {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            padding: 20px;
            border-radius: 4px;
        }
    </style>
@endsection
