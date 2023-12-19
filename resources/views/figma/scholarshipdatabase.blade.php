@extends('frontend.layouts.front-client-dashboard-layout')
@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fixed-size-sidebar-layout scholarship-database-page-layout">
                        <div class="scholarship-database-filter-col">
                            <div class="filter-widget mb-40">
                                <div class="d-flex justify-content-between">
                                    <h4 class="h6 mb-0">Filter</h4>
                                    <button class="btn btn-sm btn-link text-decoration-underline px-0 ">Clear filters
                                    </button>
                                </div>
                            </div>
                            <div class="filter-widget mb-40">
                                <h6 class="filter-widget-title">Study Level</h6>
                                <div class="filter-widget-content">
                                    <x-form.check name="all">
                                        All
                                    </x-form.check>
                                    <x-form.check name="agriculture">
                                        Agriculture
                                    </x-form.check>
                                    <x-form.check name="architecture">
                                        Architecture
                                    </x-form.check>
                                    <x-form.check name="Business">
                                        Business
                                    </x-form.check>
                                    <x-form.check name="Education">
                                        Education
                                    </x-form.check>
                                    <x-form.check name="Engineering">
                                        Engineering
                                    </x-form.check>
                                    <x-form.check name="Environmental Science">
                                        Environmental Science
                                    </x-form.check>
                                    <x-form.check name="Medicine">
                                        Medicine
                                    </x-form.check>
                                    <x-form.check name="Health">
                                        Health
                                    </x-form.check>
                                    <x-form.check name="Humanities">
                                        Humanities
                                    </x-form.check>
                                </div>
                            </div>
                            <div class="filter-widget mb-40">
                                <h6 class="filter-widget-title">Student type</h6>
                                <div class="filter-widget-content">
                                    <x-form.check name="all">
                                        Domestic
                                    </x-form.check>
                                    <x-form.check name="agriculture">
                                        International
                                    </x-form.check>
                                </div>
                            </div>
                            <div class="filter-widget mb-40">
                                <h6 class="filter-widget-title">Scholarship type</h6>
                                <div class="filter-widget-content">
                                    <x-form.check name="all">
                                        University
                                    </x-form.check>
                                    <x-form.check name="agriculture">
                                        Govt.
                                    </x-form.check>
                                    <x-form.check name="agriculture">
                                        Project
                                    </x-form.check>
                                </div>
                            </div>
                            <div class="filter-widget mb-40">
                                <h6 class="filter-widget-title">Application Deadline</h6>
                                <div class="filter-widget-content">
                                    <x-form.select label="" name="title">
                                        <option value="">Select Title</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                    </x-form.select>
                                </div>
                            </div>
                            <div class="filter-widget mb-40">
                                <h6 class="filter-widget-title">University</h6>
                                <div class="filter-widget-content">
                                    {{--                                    <x-form.autocomplete :results="$countries" :selectedCountries="$selectedCountries" label="" name="country" placeholder="Search by Country"/>--}}
                                </div>
                            </div>
                            <div class="filter-widget mb-40">
                                <h6 class="filter-widget-title">Location</h6>
                                <div class="filter-widget-content">
                                    {{--                                    <x-form.autocomplete :results="$countries" :selectedCountries="$selectedCountries" label="" name="country" placeholder="Search by Country"/>--}}
                                </div>
                            </div>

                        </div>
                        <div class="scholarship-database-content-col">
                            <div class="scholarship-database-content-search-wrapper pb-3 border-bottom">
                                <x-form.search label="" name="skill" placeholder="Search skills and select"/>
                                <p class="mb-0 mt-2">35 Results found</p>
                            </div>
                            <div class="scholarship-database-content-list">
                                <div class="scholarship-database-content-list-item">
                                    <div class="scholarship-university-logo">
                                        <div>
                                            <img
                                                src="{{ asset('assets/university-logo/university_of_melbourne.png') }}"/>
                                        </div>
                                    </div>
                                    <div class="scholarship-university-info">
                                        <h3 class="h6 mb-1"> International Research Scholarships </h3>
                                        <p class="mb-0 text-sm fw-medium">University of Melbourne | Australia</p>
                                    </div>
                                    <div class="scholarship-action">
                                        <div class="d-flex justify-content-end flex-wrap">
                                            <button class="btn btn-outline-primary m-1">Find Consultants</button>
                                            <button class="btn btn-outline-light m-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                     viewBox="0 0 24 25" fill="none">
                                                    <path
                                                        d="M12 20.8269L10.8962 19.8346C9.2385 18.3308 7.86766 17.0384 6.78368 15.9577C5.69971 14.8769 4.84075 13.9151 4.20678 13.0721C3.5728 12.2291 3.12985 11.4602 2.87793 10.7654C2.626 10.0705 2.50003 9.36538 2.50003 8.65C2.50003 7.23078 2.97856 6.04265 3.93561 5.0856C4.89266 4.12855 6.08079 3.65002 7.50001 3.65002C8.37309 3.65002 9.19809 3.8542 9.97501 4.26255C10.7519 4.67088 11.4269 5.25646 12 6.01927C12.5731 5.25646 13.2481 4.67088 14.025 4.26255C14.8019 3.8542 15.6269 3.65002 16.5 3.65002C17.9192 3.65002 19.1074 4.12855 20.0644 5.0856C21.0215 6.04265 21.5 7.23078 21.5 8.65C21.5 9.36538 21.374 10.0705 21.1221 10.7654C20.8702 11.4602 20.4272 12.2291 19.7932 13.0721C19.1593 13.9151 18.3019 14.8769 17.2211 15.9577C16.1404 17.0384 14.7679 18.3308 13.1038 19.8346L12 20.8269ZM12 18.8C13.6 17.3603 14.9167 16.1263 15.95 15.0981C16.9833 14.0699 17.8 13.1766 18.4 12.4183C19 11.6599 19.4167 10.9865 19.65 10.3981C19.8833 9.80961 20 9.22692 20 8.65C20 7.65 19.6667 6.81667 19 6.15C18.3333 5.48333 17.5 5.15 16.5 5.15C15.7103 5.15 14.9804 5.37404 14.3106 5.82213C13.6407 6.27019 13.1103 6.89359 12.7192 7.69233H11.2808C10.8833 6.88719 10.3513 6.26218 9.68463 5.8173C9.01796 5.37243 8.28976 5.15 7.50001 5.15C6.50642 5.15 5.67469 5.48333 5.00481 6.15C4.33494 6.81667 4.00001 7.65 4.00001 8.65C4.00001 9.22692 4.11667 9.80961 4.35001 10.3981C4.58334 10.9865 5.00001 11.6599 5.60001 12.4183C6.20001 13.1766 7.01667 14.0683 8.05001 15.0933C9.08334 16.1183 10.4 17.3539 12 18.8Z"
                                                        fill="#0036E3"/>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-light m-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                     viewBox="0 0 24 25" fill="none">
                                                    <path
                                                        d="M18 22.5C17.1667 22.5 16.4583 22.2083 15.875 21.625C15.2917 21.0417 15 20.3333 15 19.5C15 19.3833 15.0083 19.2625 15.025 19.1375C15.0417 19.0125 15.0667 18.9 15.1 18.8L8.05 14.7C7.76667 14.95 7.45 15.1458 7.1 15.2875C6.75 15.4292 6.38333 15.5 6 15.5C5.16667 15.5 4.45833 15.2083 3.875 14.625C3.29167 14.0417 3 13.3333 3 12.5C3 11.6667 3.29167 10.9583 3.875 10.375C4.45833 9.79167 5.16667 9.5 6 9.5C6.38333 9.5 6.75 9.57083 7.1 9.7125C7.45 9.85417 7.76667 10.05 8.05 10.3L15.1 6.2C15.0667 6.1 15.0417 5.9875 15.025 5.8625C15.0083 5.7375 15 5.61667 15 5.5C15 4.66667 15.2917 3.95833 15.875 3.375C16.4583 2.79167 17.1667 2.5 18 2.5C18.8333 2.5 19.5417 2.79167 20.125 3.375C20.7083 3.95833 21 4.66667 21 5.5C21 6.33333 20.7083 7.04167 20.125 7.625C19.5417 8.20833 18.8333 8.5 18 8.5C17.6167 8.5 17.25 8.42917 16.9 8.2875C16.55 8.14583 16.2333 7.95 15.95 7.7L8.9 11.8C8.93333 11.9 8.95833 12.0125 8.975 12.1375C8.99167 12.2625 9 12.3833 9 12.5C9 12.6167 8.99167 12.7375 8.975 12.8625C8.95833 12.9875 8.93333 13.1 8.9 13.2L15.95 17.3C16.2333 17.05 16.55 16.8542 16.9 16.7125C17.25 16.5708 17.6167 16.5 18 16.5C18.8333 16.5 19.5417 16.7917 20.125 17.375C20.7083 17.9583 21 18.6667 21 19.5C21 20.3333 20.7083 21.0417 20.125 21.625C19.5417 22.2083 18.8333 22.5 18 22.5ZM18 6.5C18.2833 6.5 18.5208 6.40417 18.7125 6.2125C18.9042 6.02083 19 5.78333 19 5.5C19 5.21667 18.9042 4.97917 18.7125 4.7875C18.5208 4.59583 18.2833 4.5 18 4.5C17.7167 4.5 17.4792 4.59583 17.2875 4.7875C17.0958 4.97917 17 5.21667 17 5.5C17 5.78333 17.0958 6.02083 17.2875 6.2125C17.4792 6.40417 17.7167 6.5 18 6.5ZM6 13.5C6.28333 13.5 6.52083 13.4042 6.7125 13.2125C6.90417 13.0208 7 12.7833 7 12.5C7 12.2167 6.90417 11.9792 6.7125 11.7875C6.52083 11.5958 6.28333 11.5 6 11.5C5.71667 11.5 5.47917 11.5958 5.2875 11.7875C5.09583 11.9792 5 12.2167 5 12.5C5 12.7833 5.09583 13.0208 5.2875 13.2125C5.47917 13.4042 5.71667 13.5 6 13.5ZM18 20.5C18.2833 20.5 18.5208 20.4042 18.7125 20.2125C18.9042 20.0208 19 19.7833 19 19.5C19 19.2167 18.9042 18.9792 18.7125 18.7875C18.5208 18.5958 18.2833 18.5 18 18.5C17.7167 18.5 17.4792 18.5958 17.2875 18.7875C17.0958 18.9792 17 19.2167 17 19.5C17 19.7833 17.0958 20.0208 17.2875 20.2125C17.4792 20.4042 17.7167 20.5 18 20.5Z"
                                                        fill="#0036E3"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="scholarship-details">
                                        <div class="custom-table text-sm">
                                            <div class="tr">
                                                <div class="td">Application Deadline</div>
                                                <div class="td fw-medium">28 April 2024</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Study area</div>
                                                <div class="td fw-medium">Art, Architecture, Business</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Study Level</div>
                                                <div class="td fw-medium">Master of Philosophy, Doctors of
                                                    Philosophy, Master by research
                                                </div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Student type</div>
                                                <div class="td fw-medium">International</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Scholarship Website</div>
                                                <div class="td fw-medium"><a class="text-decoration-underline"
                                                                             href="#">Click Here</a></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="scholarship-database-content-list-item">
                                    <div class="scholarship-university-logo">
                                        <div>
                                            <img
                                                src="{{ asset('assets/university-logo/western_sydney_university.png') }}"/>
                                        </div>
                                    </div>
                                    <div class="scholarship-university-info">
                                        <h3 class="h6 mb-1"> International Research Scholarships </h3>
                                        <p class="mb-0 text-sm fw-medium">University of Melbourne | Australia</p>
                                    </div>
                                    <div class="scholarship-action">
                                        <div class="d-flex justify-content-end flex-wrap">
                                            <button class="btn btn-outline-primary m-1">Find Consultants</button>
                                            <button class="btn btn-outline-light m-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                     viewBox="0 0 24 25" fill="none">
                                                    <path
                                                        d="M12 20.8269L10.8962 19.8346C9.2385 18.3308 7.86766 17.0384 6.78368 15.9577C5.69971 14.8769 4.84075 13.9151 4.20678 13.0721C3.5728 12.2291 3.12985 11.4602 2.87793 10.7654C2.626 10.0705 2.50003 9.36538 2.50003 8.65C2.50003 7.23078 2.97856 6.04265 3.93561 5.0856C4.89266 4.12855 6.08079 3.65002 7.50001 3.65002C8.37309 3.65002 9.19809 3.8542 9.97501 4.26255C10.7519 4.67088 11.4269 5.25646 12 6.01927C12.5731 5.25646 13.2481 4.67088 14.025 4.26255C14.8019 3.8542 15.6269 3.65002 16.5 3.65002C17.9192 3.65002 19.1074 4.12855 20.0644 5.0856C21.0215 6.04265 21.5 7.23078 21.5 8.65C21.5 9.36538 21.374 10.0705 21.1221 10.7654C20.8702 11.4602 20.4272 12.2291 19.7932 13.0721C19.1593 13.9151 18.3019 14.8769 17.2211 15.9577C16.1404 17.0384 14.7679 18.3308 13.1038 19.8346L12 20.8269ZM12 18.8C13.6 17.3603 14.9167 16.1263 15.95 15.0981C16.9833 14.0699 17.8 13.1766 18.4 12.4183C19 11.6599 19.4167 10.9865 19.65 10.3981C19.8833 9.80961 20 9.22692 20 8.65C20 7.65 19.6667 6.81667 19 6.15C18.3333 5.48333 17.5 5.15 16.5 5.15C15.7103 5.15 14.9804 5.37404 14.3106 5.82213C13.6407 6.27019 13.1103 6.89359 12.7192 7.69233H11.2808C10.8833 6.88719 10.3513 6.26218 9.68463 5.8173C9.01796 5.37243 8.28976 5.15 7.50001 5.15C6.50642 5.15 5.67469 5.48333 5.00481 6.15C4.33494 6.81667 4.00001 7.65 4.00001 8.65C4.00001 9.22692 4.11667 9.80961 4.35001 10.3981C4.58334 10.9865 5.00001 11.6599 5.60001 12.4183C6.20001 13.1766 7.01667 14.0683 8.05001 15.0933C9.08334 16.1183 10.4 17.3539 12 18.8Z"
                                                        fill="#0036E3"/>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-light m-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                     viewBox="0 0 24 25" fill="none">
                                                    <path
                                                        d="M18 22.5C17.1667 22.5 16.4583 22.2083 15.875 21.625C15.2917 21.0417 15 20.3333 15 19.5C15 19.3833 15.0083 19.2625 15.025 19.1375C15.0417 19.0125 15.0667 18.9 15.1 18.8L8.05 14.7C7.76667 14.95 7.45 15.1458 7.1 15.2875C6.75 15.4292 6.38333 15.5 6 15.5C5.16667 15.5 4.45833 15.2083 3.875 14.625C3.29167 14.0417 3 13.3333 3 12.5C3 11.6667 3.29167 10.9583 3.875 10.375C4.45833 9.79167 5.16667 9.5 6 9.5C6.38333 9.5 6.75 9.57083 7.1 9.7125C7.45 9.85417 7.76667 10.05 8.05 10.3L15.1 6.2C15.0667 6.1 15.0417 5.9875 15.025 5.8625C15.0083 5.7375 15 5.61667 15 5.5C15 4.66667 15.2917 3.95833 15.875 3.375C16.4583 2.79167 17.1667 2.5 18 2.5C18.8333 2.5 19.5417 2.79167 20.125 3.375C20.7083 3.95833 21 4.66667 21 5.5C21 6.33333 20.7083 7.04167 20.125 7.625C19.5417 8.20833 18.8333 8.5 18 8.5C17.6167 8.5 17.25 8.42917 16.9 8.2875C16.55 8.14583 16.2333 7.95 15.95 7.7L8.9 11.8C8.93333 11.9 8.95833 12.0125 8.975 12.1375C8.99167 12.2625 9 12.3833 9 12.5C9 12.6167 8.99167 12.7375 8.975 12.8625C8.95833 12.9875 8.93333 13.1 8.9 13.2L15.95 17.3C16.2333 17.05 16.55 16.8542 16.9 16.7125C17.25 16.5708 17.6167 16.5 18 16.5C18.8333 16.5 19.5417 16.7917 20.125 17.375C20.7083 17.9583 21 18.6667 21 19.5C21 20.3333 20.7083 21.0417 20.125 21.625C19.5417 22.2083 18.8333 22.5 18 22.5ZM18 6.5C18.2833 6.5 18.5208 6.40417 18.7125 6.2125C18.9042 6.02083 19 5.78333 19 5.5C19 5.21667 18.9042 4.97917 18.7125 4.7875C18.5208 4.59583 18.2833 4.5 18 4.5C17.7167 4.5 17.4792 4.59583 17.2875 4.7875C17.0958 4.97917 17 5.21667 17 5.5C17 5.78333 17.0958 6.02083 17.2875 6.2125C17.4792 6.40417 17.7167 6.5 18 6.5ZM6 13.5C6.28333 13.5 6.52083 13.4042 6.7125 13.2125C6.90417 13.0208 7 12.7833 7 12.5C7 12.2167 6.90417 11.9792 6.7125 11.7875C6.52083 11.5958 6.28333 11.5 6 11.5C5.71667 11.5 5.47917 11.5958 5.2875 11.7875C5.09583 11.9792 5 12.2167 5 12.5C5 12.7833 5.09583 13.0208 5.2875 13.2125C5.47917 13.4042 5.71667 13.5 6 13.5ZM18 20.5C18.2833 20.5 18.5208 20.4042 18.7125 20.2125C18.9042 20.0208 19 19.7833 19 19.5C19 19.2167 18.9042 18.9792 18.7125 18.7875C18.5208 18.5958 18.2833 18.5 18 18.5C17.7167 18.5 17.4792 18.5958 17.2875 18.7875C17.0958 18.9792 17 19.2167 17 19.5C17 19.7833 17.0958 20.0208 17.2875 20.2125C17.4792 20.4042 17.7167 20.5 18 20.5Z"
                                                        fill="#0036E3"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="scholarship-details">
                                        <div class="custom-table text-sm">
                                            <div class="tr">
                                                <div class="td">Application Deadline</div>
                                                <div class="td fw-medium">28 April 2024</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Study area</div>
                                                <div class="td fw-medium">Art, Architecture, Business</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Study Level</div>
                                                <div class="td fw-medium">Master of Philosophy, Doctors of
                                                    Philosophy, Master by research
                                                </div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Student type</div>
                                                <div class="td fw-medium">International</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Scholarship Website</div>
                                                <div class="td fw-medium"><a class="text-decoration-underline"
                                                                             href="#">Click Here</a></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="scholarship-database-content-list-item">
                                    <div class="scholarship-university-logo">
                                        <div>
                                            <img
                                                src="{{ asset('assets/university-logo/monash_university.png') }}"/>
                                        </div>
                                    </div>
                                    <div class="scholarship-university-info">
                                        <h3 class="h6 mb-1"> International Research Scholarships </h3>
                                        <p class="mb-0 text-sm fw-medium">University of Melbourne | Australia</p>
                                    </div>
                                    <div class="scholarship-action">
                                        <div class="d-flex justify-content-end flex-wrap">
                                            <button class="btn btn-outline-primary m-1">Find Consultants</button>
                                            <button class="btn btn-outline-light m-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                     viewBox="0 0 24 25" fill="none">
                                                    <path
                                                        d="M12 20.8269L10.8962 19.8346C9.2385 18.3308 7.86766 17.0384 6.78368 15.9577C5.69971 14.8769 4.84075 13.9151 4.20678 13.0721C3.5728 12.2291 3.12985 11.4602 2.87793 10.7654C2.626 10.0705 2.50003 9.36538 2.50003 8.65C2.50003 7.23078 2.97856 6.04265 3.93561 5.0856C4.89266 4.12855 6.08079 3.65002 7.50001 3.65002C8.37309 3.65002 9.19809 3.8542 9.97501 4.26255C10.7519 4.67088 11.4269 5.25646 12 6.01927C12.5731 5.25646 13.2481 4.67088 14.025 4.26255C14.8019 3.8542 15.6269 3.65002 16.5 3.65002C17.9192 3.65002 19.1074 4.12855 20.0644 5.0856C21.0215 6.04265 21.5 7.23078 21.5 8.65C21.5 9.36538 21.374 10.0705 21.1221 10.7654C20.8702 11.4602 20.4272 12.2291 19.7932 13.0721C19.1593 13.9151 18.3019 14.8769 17.2211 15.9577C16.1404 17.0384 14.7679 18.3308 13.1038 19.8346L12 20.8269ZM12 18.8C13.6 17.3603 14.9167 16.1263 15.95 15.0981C16.9833 14.0699 17.8 13.1766 18.4 12.4183C19 11.6599 19.4167 10.9865 19.65 10.3981C19.8833 9.80961 20 9.22692 20 8.65C20 7.65 19.6667 6.81667 19 6.15C18.3333 5.48333 17.5 5.15 16.5 5.15C15.7103 5.15 14.9804 5.37404 14.3106 5.82213C13.6407 6.27019 13.1103 6.89359 12.7192 7.69233H11.2808C10.8833 6.88719 10.3513 6.26218 9.68463 5.8173C9.01796 5.37243 8.28976 5.15 7.50001 5.15C6.50642 5.15 5.67469 5.48333 5.00481 6.15C4.33494 6.81667 4.00001 7.65 4.00001 8.65C4.00001 9.22692 4.11667 9.80961 4.35001 10.3981C4.58334 10.9865 5.00001 11.6599 5.60001 12.4183C6.20001 13.1766 7.01667 14.0683 8.05001 15.0933C9.08334 16.1183 10.4 17.3539 12 18.8Z"
                                                        fill="#0036E3"/>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-light m-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                     viewBox="0 0 24 25" fill="none">
                                                    <path
                                                        d="M18 22.5C17.1667 22.5 16.4583 22.2083 15.875 21.625C15.2917 21.0417 15 20.3333 15 19.5C15 19.3833 15.0083 19.2625 15.025 19.1375C15.0417 19.0125 15.0667 18.9 15.1 18.8L8.05 14.7C7.76667 14.95 7.45 15.1458 7.1 15.2875C6.75 15.4292 6.38333 15.5 6 15.5C5.16667 15.5 4.45833 15.2083 3.875 14.625C3.29167 14.0417 3 13.3333 3 12.5C3 11.6667 3.29167 10.9583 3.875 10.375C4.45833 9.79167 5.16667 9.5 6 9.5C6.38333 9.5 6.75 9.57083 7.1 9.7125C7.45 9.85417 7.76667 10.05 8.05 10.3L15.1 6.2C15.0667 6.1 15.0417 5.9875 15.025 5.8625C15.0083 5.7375 15 5.61667 15 5.5C15 4.66667 15.2917 3.95833 15.875 3.375C16.4583 2.79167 17.1667 2.5 18 2.5C18.8333 2.5 19.5417 2.79167 20.125 3.375C20.7083 3.95833 21 4.66667 21 5.5C21 6.33333 20.7083 7.04167 20.125 7.625C19.5417 8.20833 18.8333 8.5 18 8.5C17.6167 8.5 17.25 8.42917 16.9 8.2875C16.55 8.14583 16.2333 7.95 15.95 7.7L8.9 11.8C8.93333 11.9 8.95833 12.0125 8.975 12.1375C8.99167 12.2625 9 12.3833 9 12.5C9 12.6167 8.99167 12.7375 8.975 12.8625C8.95833 12.9875 8.93333 13.1 8.9 13.2L15.95 17.3C16.2333 17.05 16.55 16.8542 16.9 16.7125C17.25 16.5708 17.6167 16.5 18 16.5C18.8333 16.5 19.5417 16.7917 20.125 17.375C20.7083 17.9583 21 18.6667 21 19.5C21 20.3333 20.7083 21.0417 20.125 21.625C19.5417 22.2083 18.8333 22.5 18 22.5ZM18 6.5C18.2833 6.5 18.5208 6.40417 18.7125 6.2125C18.9042 6.02083 19 5.78333 19 5.5C19 5.21667 18.9042 4.97917 18.7125 4.7875C18.5208 4.59583 18.2833 4.5 18 4.5C17.7167 4.5 17.4792 4.59583 17.2875 4.7875C17.0958 4.97917 17 5.21667 17 5.5C17 5.78333 17.0958 6.02083 17.2875 6.2125C17.4792 6.40417 17.7167 6.5 18 6.5ZM6 13.5C6.28333 13.5 6.52083 13.4042 6.7125 13.2125C6.90417 13.0208 7 12.7833 7 12.5C7 12.2167 6.90417 11.9792 6.7125 11.7875C6.52083 11.5958 6.28333 11.5 6 11.5C5.71667 11.5 5.47917 11.5958 5.2875 11.7875C5.09583 11.9792 5 12.2167 5 12.5C5 12.7833 5.09583 13.0208 5.2875 13.2125C5.47917 13.4042 5.71667 13.5 6 13.5ZM18 20.5C18.2833 20.5 18.5208 20.4042 18.7125 20.2125C18.9042 20.0208 19 19.7833 19 19.5C19 19.2167 18.9042 18.9792 18.7125 18.7875C18.5208 18.5958 18.2833 18.5 18 18.5C17.7167 18.5 17.4792 18.5958 17.2875 18.7875C17.0958 18.9792 17 19.2167 17 19.5C17 19.7833 17.0958 20.0208 17.2875 20.2125C17.4792 20.4042 17.7167 20.5 18 20.5Z"
                                                        fill="#0036E3"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="scholarship-details">
                                        <div class="custom-table text-sm">
                                            <div class="tr">
                                                <div class="td">Application Deadline</div>
                                                <div class="td fw-medium">28 April 2024</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Study area</div>
                                                <div class="td fw-medium">Art, Architecture, Business</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Study Level</div>
                                                <div class="td fw-medium">Master of Philosophy, Doctors of
                                                    Philosophy, Master by research
                                                </div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Student type</div>
                                                <div class="td fw-medium">International</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Scholarship Website</div>
                                                <div class="td fw-medium"><a class="text-decoration-underline"
                                                                             href="#">Click Here</a></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="scholarship-database-content-list-item">
                                    <div class="scholarship-university-logo">
                                        <div>
                                            <img
                                                src="{{ asset('assets/university-logo/university_of_notre_dame_australia.png') }}"/>
                                        </div>
                                    </div>
                                    <div class="scholarship-university-info">
                                        <h3 class="h6 mb-1"> International Research Scholarships </h3>
                                        <p class="mb-0 text-sm fw-medium">University of Melbourne | Australia</p>
                                    </div>
                                    <div class="scholarship-action">
                                        <div class="d-flex justify-content-end flex-wrap">
                                            <button class="btn btn-outline-primary m-1">Find Consultants</button>
                                            <button class="btn btn-outline-light m-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                     viewBox="0 0 24 25" fill="none">
                                                    <path
                                                        d="M12 20.8269L10.8962 19.8346C9.2385 18.3308 7.86766 17.0384 6.78368 15.9577C5.69971 14.8769 4.84075 13.9151 4.20678 13.0721C3.5728 12.2291 3.12985 11.4602 2.87793 10.7654C2.626 10.0705 2.50003 9.36538 2.50003 8.65C2.50003 7.23078 2.97856 6.04265 3.93561 5.0856C4.89266 4.12855 6.08079 3.65002 7.50001 3.65002C8.37309 3.65002 9.19809 3.8542 9.97501 4.26255C10.7519 4.67088 11.4269 5.25646 12 6.01927C12.5731 5.25646 13.2481 4.67088 14.025 4.26255C14.8019 3.8542 15.6269 3.65002 16.5 3.65002C17.9192 3.65002 19.1074 4.12855 20.0644 5.0856C21.0215 6.04265 21.5 7.23078 21.5 8.65C21.5 9.36538 21.374 10.0705 21.1221 10.7654C20.8702 11.4602 20.4272 12.2291 19.7932 13.0721C19.1593 13.9151 18.3019 14.8769 17.2211 15.9577C16.1404 17.0384 14.7679 18.3308 13.1038 19.8346L12 20.8269ZM12 18.8C13.6 17.3603 14.9167 16.1263 15.95 15.0981C16.9833 14.0699 17.8 13.1766 18.4 12.4183C19 11.6599 19.4167 10.9865 19.65 10.3981C19.8833 9.80961 20 9.22692 20 8.65C20 7.65 19.6667 6.81667 19 6.15C18.3333 5.48333 17.5 5.15 16.5 5.15C15.7103 5.15 14.9804 5.37404 14.3106 5.82213C13.6407 6.27019 13.1103 6.89359 12.7192 7.69233H11.2808C10.8833 6.88719 10.3513 6.26218 9.68463 5.8173C9.01796 5.37243 8.28976 5.15 7.50001 5.15C6.50642 5.15 5.67469 5.48333 5.00481 6.15C4.33494 6.81667 4.00001 7.65 4.00001 8.65C4.00001 9.22692 4.11667 9.80961 4.35001 10.3981C4.58334 10.9865 5.00001 11.6599 5.60001 12.4183C6.20001 13.1766 7.01667 14.0683 8.05001 15.0933C9.08334 16.1183 10.4 17.3539 12 18.8Z"
                                                        fill="#0036E3"/>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-light m-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                     viewBox="0 0 24 25" fill="none">
                                                    <path
                                                        d="M18 22.5C17.1667 22.5 16.4583 22.2083 15.875 21.625C15.2917 21.0417 15 20.3333 15 19.5C15 19.3833 15.0083 19.2625 15.025 19.1375C15.0417 19.0125 15.0667 18.9 15.1 18.8L8.05 14.7C7.76667 14.95 7.45 15.1458 7.1 15.2875C6.75 15.4292 6.38333 15.5 6 15.5C5.16667 15.5 4.45833 15.2083 3.875 14.625C3.29167 14.0417 3 13.3333 3 12.5C3 11.6667 3.29167 10.9583 3.875 10.375C4.45833 9.79167 5.16667 9.5 6 9.5C6.38333 9.5 6.75 9.57083 7.1 9.7125C7.45 9.85417 7.76667 10.05 8.05 10.3L15.1 6.2C15.0667 6.1 15.0417 5.9875 15.025 5.8625C15.0083 5.7375 15 5.61667 15 5.5C15 4.66667 15.2917 3.95833 15.875 3.375C16.4583 2.79167 17.1667 2.5 18 2.5C18.8333 2.5 19.5417 2.79167 20.125 3.375C20.7083 3.95833 21 4.66667 21 5.5C21 6.33333 20.7083 7.04167 20.125 7.625C19.5417 8.20833 18.8333 8.5 18 8.5C17.6167 8.5 17.25 8.42917 16.9 8.2875C16.55 8.14583 16.2333 7.95 15.95 7.7L8.9 11.8C8.93333 11.9 8.95833 12.0125 8.975 12.1375C8.99167 12.2625 9 12.3833 9 12.5C9 12.6167 8.99167 12.7375 8.975 12.8625C8.95833 12.9875 8.93333 13.1 8.9 13.2L15.95 17.3C16.2333 17.05 16.55 16.8542 16.9 16.7125C17.25 16.5708 17.6167 16.5 18 16.5C18.8333 16.5 19.5417 16.7917 20.125 17.375C20.7083 17.9583 21 18.6667 21 19.5C21 20.3333 20.7083 21.0417 20.125 21.625C19.5417 22.2083 18.8333 22.5 18 22.5ZM18 6.5C18.2833 6.5 18.5208 6.40417 18.7125 6.2125C18.9042 6.02083 19 5.78333 19 5.5C19 5.21667 18.9042 4.97917 18.7125 4.7875C18.5208 4.59583 18.2833 4.5 18 4.5C17.7167 4.5 17.4792 4.59583 17.2875 4.7875C17.0958 4.97917 17 5.21667 17 5.5C17 5.78333 17.0958 6.02083 17.2875 6.2125C17.4792 6.40417 17.7167 6.5 18 6.5ZM6 13.5C6.28333 13.5 6.52083 13.4042 6.7125 13.2125C6.90417 13.0208 7 12.7833 7 12.5C7 12.2167 6.90417 11.9792 6.7125 11.7875C6.52083 11.5958 6.28333 11.5 6 11.5C5.71667 11.5 5.47917 11.5958 5.2875 11.7875C5.09583 11.9792 5 12.2167 5 12.5C5 12.7833 5.09583 13.0208 5.2875 13.2125C5.47917 13.4042 5.71667 13.5 6 13.5ZM18 20.5C18.2833 20.5 18.5208 20.4042 18.7125 20.2125C18.9042 20.0208 19 19.7833 19 19.5C19 19.2167 18.9042 18.9792 18.7125 18.7875C18.5208 18.5958 18.2833 18.5 18 18.5C17.7167 18.5 17.4792 18.5958 17.2875 18.7875C17.0958 18.9792 17 19.2167 17 19.5C17 19.7833 17.0958 20.0208 17.2875 20.2125C17.4792 20.4042 17.7167 20.5 18 20.5Z"
                                                        fill="#0036E3"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="scholarship-details">
                                        <div class="custom-table text-sm">
                                            <div class="tr">
                                                <div class="td">Application Deadline</div>
                                                <div class="td fw-medium">28 April 2024</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Study area</div>
                                                <div class="td fw-medium">Art, Architecture, Business</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Study Level</div>
                                                <div class="td fw-medium">Master of Philosophy, Doctors of
                                                    Philosophy, Master by research
                                                </div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Student type</div>
                                                <div class="td fw-medium">International</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Scholarship Website</div>
                                                <div class="td fw-medium"><a class="text-decoration-underline"
                                                                             href="#">Click Here</a></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="scholarship-database-content-list-item">
                                    <div class="scholarship-university-logo">
                                        <div>
                                            <img
                                                src="{{ asset('assets/university-logo/australian_catholic_university.png') }}"/>
                                        </div>
                                    </div>
                                    <div class="scholarship-university-info">
                                        <h3 class="h6 mb-1"> International Research Scholarships </h3>
                                        <p class="mb-0 text-sm fw-medium">University of Melbourne | Australia</p>
                                    </div>
                                    <div class="scholarship-action">
                                        <div class="d-flex justify-content-end flex-wrap">
                                            <button class="btn btn-outline-primary m-1">Find Consultants</button>
                                            <button class="btn btn-outline-light m-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                     viewBox="0 0 24 25" fill="none">
                                                    <path
                                                        d="M12 20.8269L10.8962 19.8346C9.2385 18.3308 7.86766 17.0384 6.78368 15.9577C5.69971 14.8769 4.84075 13.9151 4.20678 13.0721C3.5728 12.2291 3.12985 11.4602 2.87793 10.7654C2.626 10.0705 2.50003 9.36538 2.50003 8.65C2.50003 7.23078 2.97856 6.04265 3.93561 5.0856C4.89266 4.12855 6.08079 3.65002 7.50001 3.65002C8.37309 3.65002 9.19809 3.8542 9.97501 4.26255C10.7519 4.67088 11.4269 5.25646 12 6.01927C12.5731 5.25646 13.2481 4.67088 14.025 4.26255C14.8019 3.8542 15.6269 3.65002 16.5 3.65002C17.9192 3.65002 19.1074 4.12855 20.0644 5.0856C21.0215 6.04265 21.5 7.23078 21.5 8.65C21.5 9.36538 21.374 10.0705 21.1221 10.7654C20.8702 11.4602 20.4272 12.2291 19.7932 13.0721C19.1593 13.9151 18.3019 14.8769 17.2211 15.9577C16.1404 17.0384 14.7679 18.3308 13.1038 19.8346L12 20.8269ZM12 18.8C13.6 17.3603 14.9167 16.1263 15.95 15.0981C16.9833 14.0699 17.8 13.1766 18.4 12.4183C19 11.6599 19.4167 10.9865 19.65 10.3981C19.8833 9.80961 20 9.22692 20 8.65C20 7.65 19.6667 6.81667 19 6.15C18.3333 5.48333 17.5 5.15 16.5 5.15C15.7103 5.15 14.9804 5.37404 14.3106 5.82213C13.6407 6.27019 13.1103 6.89359 12.7192 7.69233H11.2808C10.8833 6.88719 10.3513 6.26218 9.68463 5.8173C9.01796 5.37243 8.28976 5.15 7.50001 5.15C6.50642 5.15 5.67469 5.48333 5.00481 6.15C4.33494 6.81667 4.00001 7.65 4.00001 8.65C4.00001 9.22692 4.11667 9.80961 4.35001 10.3981C4.58334 10.9865 5.00001 11.6599 5.60001 12.4183C6.20001 13.1766 7.01667 14.0683 8.05001 15.0933C9.08334 16.1183 10.4 17.3539 12 18.8Z"
                                                        fill="#0036E3"/>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-light m-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                     viewBox="0 0 24 25" fill="none">
                                                    <path
                                                        d="M18 22.5C17.1667 22.5 16.4583 22.2083 15.875 21.625C15.2917 21.0417 15 20.3333 15 19.5C15 19.3833 15.0083 19.2625 15.025 19.1375C15.0417 19.0125 15.0667 18.9 15.1 18.8L8.05 14.7C7.76667 14.95 7.45 15.1458 7.1 15.2875C6.75 15.4292 6.38333 15.5 6 15.5C5.16667 15.5 4.45833 15.2083 3.875 14.625C3.29167 14.0417 3 13.3333 3 12.5C3 11.6667 3.29167 10.9583 3.875 10.375C4.45833 9.79167 5.16667 9.5 6 9.5C6.38333 9.5 6.75 9.57083 7.1 9.7125C7.45 9.85417 7.76667 10.05 8.05 10.3L15.1 6.2C15.0667 6.1 15.0417 5.9875 15.025 5.8625C15.0083 5.7375 15 5.61667 15 5.5C15 4.66667 15.2917 3.95833 15.875 3.375C16.4583 2.79167 17.1667 2.5 18 2.5C18.8333 2.5 19.5417 2.79167 20.125 3.375C20.7083 3.95833 21 4.66667 21 5.5C21 6.33333 20.7083 7.04167 20.125 7.625C19.5417 8.20833 18.8333 8.5 18 8.5C17.6167 8.5 17.25 8.42917 16.9 8.2875C16.55 8.14583 16.2333 7.95 15.95 7.7L8.9 11.8C8.93333 11.9 8.95833 12.0125 8.975 12.1375C8.99167 12.2625 9 12.3833 9 12.5C9 12.6167 8.99167 12.7375 8.975 12.8625C8.95833 12.9875 8.93333 13.1 8.9 13.2L15.95 17.3C16.2333 17.05 16.55 16.8542 16.9 16.7125C17.25 16.5708 17.6167 16.5 18 16.5C18.8333 16.5 19.5417 16.7917 20.125 17.375C20.7083 17.9583 21 18.6667 21 19.5C21 20.3333 20.7083 21.0417 20.125 21.625C19.5417 22.2083 18.8333 22.5 18 22.5ZM18 6.5C18.2833 6.5 18.5208 6.40417 18.7125 6.2125C18.9042 6.02083 19 5.78333 19 5.5C19 5.21667 18.9042 4.97917 18.7125 4.7875C18.5208 4.59583 18.2833 4.5 18 4.5C17.7167 4.5 17.4792 4.59583 17.2875 4.7875C17.0958 4.97917 17 5.21667 17 5.5C17 5.78333 17.0958 6.02083 17.2875 6.2125C17.4792 6.40417 17.7167 6.5 18 6.5ZM6 13.5C6.28333 13.5 6.52083 13.4042 6.7125 13.2125C6.90417 13.0208 7 12.7833 7 12.5C7 12.2167 6.90417 11.9792 6.7125 11.7875C6.52083 11.5958 6.28333 11.5 6 11.5C5.71667 11.5 5.47917 11.5958 5.2875 11.7875C5.09583 11.9792 5 12.2167 5 12.5C5 12.7833 5.09583 13.0208 5.2875 13.2125C5.47917 13.4042 5.71667 13.5 6 13.5ZM18 20.5C18.2833 20.5 18.5208 20.4042 18.7125 20.2125C18.9042 20.0208 19 19.7833 19 19.5C19 19.2167 18.9042 18.9792 18.7125 18.7875C18.5208 18.5958 18.2833 18.5 18 18.5C17.7167 18.5 17.4792 18.5958 17.2875 18.7875C17.0958 18.9792 17 19.2167 17 19.5C17 19.7833 17.0958 20.0208 17.2875 20.2125C17.4792 20.4042 17.7167 20.5 18 20.5Z"
                                                        fill="#0036E3"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="scholarship-details">
                                        <div class="custom-table text-sm">
                                            <div class="tr">
                                                <div class="td">Application Deadline</div>
                                                <div class="td fw-medium">28 April 2024</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Study area</div>
                                                <div class="td fw-medium">Art, Architecture, Business</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Study Level</div>
                                                <div class="td fw-medium">Master of Philosophy, Doctors of
                                                    Philosophy, Master by research
                                                </div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Student type</div>
                                                <div class="td fw-medium">International</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Scholarship Website</div>
                                                <div class="td fw-medium"><a class="text-decoration-underline"
                                                                             href="#">Click Here</a></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center">
                                    Insert Pagination Here
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-60">
                <div class="col text-center">

                    <h3>Slider Here</h3>
                </div>
            </div>
        </div>
    </section>

@endsection
