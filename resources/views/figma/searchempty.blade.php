@extends('frontend.layouts.front-client-dashboard-layout')
@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sidebar-layout scholarship-database-page-layout">
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
                                    {{--                                                                        <x-form.autocomplete :results="$countries" :selectedCountries="$selectedCountries" label="" name="country" placeholder="Search by Country"/>--}}
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

                            <div class="scholarship-database-content-list">

                               <div class="edux-notification-details">
                                    <img class="health-img" src="{{ asset('assets/frontend/img/notification.png') }}" alt="client health">
                                    <div class="notification-details">
                                        <h5>There are no results that match your search.</h5>
                                        <p class="mb-0 fw-small">Please try adjusting your search keywords or filters.</p>
                                    </div>
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
