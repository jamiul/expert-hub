@extends('frontend.layouts.figma', ['header' => 'guest'])
@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sidebar-layout left-sidebar-layout find-projects-layout">
                        <div class="page-sidebar">
                            <div class="filter-widget border-bottom">
                                <div class="sidebar-title-wrapper">
                                    <h3 class="h6">Filter</h3>
                                    <button class="btn btn-filter-reset">
                                        Clear filters
                                    </button>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <x-form.search class="input-field-md" wire:model="skill"
                                               placeholder="Search by keyword"/>
                            </div>
                            <div class="filter-widget">
                                <h4 class="widget-title">Training by Categories</h4>
                                <div class="widget-content">
                                    <x-form.check id="all">
                                        Curriculum Development
                                    </x-form.check>
                                    <x-form.check id="agriculture">
                                        Course Accreditation
                                    </x-form.check>
                                    <x-form.check id="architecture">
                                        Learning Management System
                                    </x-form.check>
                                    <x-form.check id="Business">
                                        Policy Development
                                    </x-form.check>
                                    <x-form.check id="Education">
                                        Research and Analysis
                                    </x-form.check>
                                    <x-form.check id="Engineering">
                                        Financial Management
                                    </x-form.check>
                                    <x-form.check id="EnvironmentalScience">
                                        Project Management
                                    </x-form.check>
                                    <x-form.check id="Medicine">
                                        Writing and Editing
                                    </x-form.check>
                                    <x-form.check id="Health">
                                        Grants and Scholarships
                                    </x-form.check>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4 class="widget-title">Training Date</h4>
                                <div class="widget-content">
                                    <x-form.flatpicker class="input-field-md" label="" name="datepicker"/>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4 class="widget-title">Training Mode</h4>
                                <div class="widget-content">
                                    <x-form.check id="all">
                                        Live via Zoom
                                    </x-form.check>
                                    <x-form.check id="agriculture">
                                        Face-to-Face
                                    </x-form.check>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4 class="widget-title">Language</h4>
                                <div class="filter-widget-content">
                                    <div class="form-input-group form-input-has-icon autocomplete-field input-field-md"
                                         x-data="{ open: false }">
                                        <div class="autocomplete-field-wrapper">
                                            <input x-on:click="open = true" wire:model.live.debounce.500ms="country"
                                                   name="country" id="country" class="form-input-field"
                                                   placeholder="Search Language">
                                            <span class="form-input-icon">
                                               <x-icon.search/>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--                            <div class="filter-widget">--}}
                            {{--                                <h4 class="widget-title">Location</h4>--}}
                            {{--                                <x-form.autocomplete :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>--}}
                            {{--                            </div>--}}
                            <div class="filter-widget">
                                <h4 class="widget-title">Location</h4>
                                <div class="filter-widget-content">
                                    <div class="form-input-group form-input-has-icon autocomplete-field input-field-md"
                                         x-data="{ open: false }">
                                        <div class="autocomplete-field-wrapper">
                                            <input x-on:click="open = true" wire:model.live.debounce.500ms="country"
                                                   name="country" id="country" class="form-input-field"
                                                   placeholder="Search Country">
                                            <span class="form-input-icon">
                                               <x-icon.search/>
                                            </span>
                                        </div>
                                        <div class="autocomplete-field-suggestion">
                                            <ul class="" x-show="open" x-on:click.outside="open = false"
                                                x-on:keyup.escape.window="open = false" style="">
                                                <!--[if BLOCK]><![endif]-->
                                                <li wire:key="1"
                                                    x-on:click="open = false; $wire.selectCountry('Afghanistan')">
                                                    Afghanistan
                                                </li>
                                                <li wire:key="2"
                                                    x-on:click="open = false; $wire.selectCountry('Albania')"> Albania
                                                </li>
                                                <li wire:key="3"
                                                    x-on:click="open = false; $wire.selectCountry('Algeria')"> Algeria
                                                </li>
                                                <li wire:key="4"
                                                    x-on:click="open = false; $wire.selectCountry('American Samoa')">
                                                    American Samoa
                                                </li>
                                                <li wire:key="5"
                                                    x-on:click="open = false; $wire.selectCountry('Andorra')"> Andorra
                                                </li>
                                                <!--[if ENDBLOCK]><![endif]-->
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content p-0">
                            <div class="training-list">
                                <div class="training-card bb-1">
                                    <div class="training-card-title">
                                        <h3 class="h6">
                                            <a href="/figma/training/training-details-view">
                                                Igniting the Spark: Designing PhD Curriculums for the Next Generation of
                                                Disruptors
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="training-card-action">
                                        <button x-data="{ isFavorited: false }"
                                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                :class="{ 'favorited': isFavorited }"
                                                @click="isFavorited = !isFavorited">
                                    <span class="heart-line">
                                        <x-icon.heart fill="#0036E3"/>
                                   </span>
                                            <span class="heart-filled">
                                                <x-icon.heart-filled/>
                                    </span>
                                        </button>
                                        <button class="btn btn-md btn-icon btn-outline-light" type="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <x-icon.share fill="#0036E3"/>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" target="_blank"
                                                       href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                                                        <x-icon.logo-linkedin/>
                                                        Linkedin
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" target="_blank"
                                                       href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                                                        <x-icon.facebook/>
                                                        Facebook
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item">
                                        <span class="me-2">
                                            <x-icon.copy/>
                                       </span>
                                                        Copy Link
                                                    </a>
                                                </li>
                                            </ul>
                                        </button>
                                        <button class="btn btn-md btn-outline-primary border-2"> Registration</button>
                                    </div>
                                    <div class="training-card-trainer-wrapper">
                                        <div class="user-small-card">
                                            <div>
                                                <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                            </div>
                                            <div>
                                                <h4 class="text-base mb-0">Professor Miles Esther</h4>
                                                <ul class="user-meta">
                                                    <li>Public Health</li>
                                                    <li>Melbourne University</li>
                                                    <li>Australia</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="user-small-card">
                                            <div>
                                                <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                            </div>
                                            <div>
                                                <h4 class="text-base mb-0">Professor Miles Esther</h4>
                                                <ul class="user-meta">
                                                    <li>Public Health</li>
                                                    <li>Melbourne University</li>
                                                    <li>Australia</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="training-card-description">
                                        <p class="mb-0">Are you ready to revolutionize the way PhD programs are designed
                                            and delivered?
                                            This intensive training session is for forward-thinking faculty, program
                                            directors, and
                                            administrators who want to ignite the spark of innovation in their PhD
                                            curriculums and equip
                                            their students to become the next generation of disruptors. This is not just
                                            about building
                                            a curriculum, it's about building the next generation of changemakers. Join
                                            us in this
                                            electrifying journey as... <a href="">More</a></p>
                                    </div>
                                    <div class="training-card-summary">
                                        <div class="custom-table text-sm">
                                            <div class="tr">
                                                <div class="td">Seminar Dates</div>
                                                <div class="td fw-medium">23 January 2024 - 28 April 2024</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Time & Location</div>
                                                <div class="td fw-medium">10.15am AEST, Sydney, Australia</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Training Mode</div>
                                                <div class="td fw-medium">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <x-icon.video/>
                                                        </div>
                                                        <div> Face to Face</div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Language</div>
                                                <div class="td fw-medium">English</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Training Category</div>
                                                <div class="td fw-medium">Research and Analysis</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Training Fee</div>
                                                <div class="td fw-medium">USD 995</div>
                                            </div>

                                            <div class="tr">
                                                <div class="td">Partner Institute</div>
                                                <div class="td fw-medium">
                                                    <a class="text-decoration-underline" href="#">Western Sydney
                                                        University</a> |
                                                    <a class="text-decoration-underline" href="#">Oxford University</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="training-card bb-1">
                                    <div class="training-card-title">
                                        <h3 class="h6">
                                            <a href="/figma/training/training-details-view">
                                                Igniting the Spark: Designing PhD Curriculums for the Next Generation of
                                                Disruptors
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="training-card-action">
                                        <button x-data="{ isFavorited: false }"
                                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                :class="{ 'favorited': isFavorited }"
                                                @click="isFavorited = !isFavorited">
                                    <span class="heart-line">
                                        <x-icon.heart fill="#0036E3"/>
                                   </span>
                                            <span class="heart-filled">
                                                <x-icon.heart-filled/>
                                    </span>
                                        </button>
                                        <button class="btn btn-md btn-icon btn-outline-light" type="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <x-icon.share fill="#0036E3"/>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" target="_blank"
                                                       href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                                                        <x-icon.logo-linkedin/>
                                                        Linkedin
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" target="_blank"
                                                       href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                                                        <x-icon.facebook/>
                                                        Facebook
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item">
                                        <span class="me-2">
                                            <x-icon.copy/>
                                       </span>
                                                        Copy Link
                                                    </a>
                                                </li>
                                            </ul>
                                        </button>
                                        <button class="btn btn-md btn-outline-primary border-2"> Registration</button>
                                    </div>
                                    <div class="training-card-trainer-wrapper">
                                        <div class="user-small-card">
                                            <div>
                                                <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                            </div>
                                            <div>
                                                <h4 class="text-base mb-0">Professor Miles Esther</h4>
                                                <ul class="user-meta">
                                                    <li>Public Health</li>
                                                    <li>Melbourne University</li>
                                                    <li>Australia</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="user-small-card">
                                            <div>
                                                <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                            </div>
                                            <div>
                                                <h4 class="text-base mb-0">Professor Miles Esther</h4>
                                                <ul class="user-meta">
                                                    <li>Public Health</li>
                                                    <li>Melbourne University</li>
                                                    <li>Australia</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="training-card-description">
                                        <p class="mb-0">Are you ready to revolutionize the way PhD programs are designed
                                            and delivered?
                                            This intensive training session is for forward-thinking faculty, program
                                            directors, and
                                            administrators who want to ignite the spark of innovation in their PhD
                                            curriculums and equip
                                            their students to become the next generation of disruptors. This is not just
                                            about building
                                            a curriculum, it's about building the next generation of changemakers. Join
                                            us in this
                                            electrifying journey as... <a href="">More</a></p>
                                    </div>
                                    <div class="training-card-summary">
                                        <div class="custom-table text-sm">
                                            <div class="tr">
                                                <div class="td">Seminar Dates</div>
                                                <div class="td fw-medium">23 January 2024 - 28 April 2024</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Time & Location</div>
                                                <div class="td fw-medium">10.15am AEST, Sydney, Australia</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Training Mode</div>
                                                <div class="td fw-medium">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <x-icon.video/>
                                                        </div>
                                                        <div> Face to Face</div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Language</div>
                                                <div class="td fw-medium">English</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Training Category</div>
                                                <div class="td fw-medium">Research and Analysis</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Training Fee</div>
                                                <div class="td fw-medium">USD 995</div>
                                            </div>

                                            <div class="tr">
                                                <div class="td">Partner Institute</div>
                                                <div class="td fw-medium">
                                                    <a class="text-decoration-underline" href="#">Western Sydney
                                                        University</a> |
                                                    <a class="text-decoration-underline" href="#">Oxford University</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="training-card bb-1">
                                    <div class="training-card-title">
                                        <h3 class="h6">
                                            <a href="/figma/training/training-details-view">
                                                Igniting the Spark: Designing PhD Curriculums for the Next Generation of
                                                Disruptors
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="training-card-action">
                                        <button x-data="{ isFavorited: false }"
                                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                :class="{ 'favorited': isFavorited }"
                                                @click="isFavorited = !isFavorited">
                                    <span class="heart-line">
                                        <x-icon.heart fill="#0036E3"/>
                                   </span>
                                            <span class="heart-filled">
                                                <x-icon.heart-filled/>
                                    </span>
                                        </button>
                                        <button class="btn btn-md btn-icon btn-outline-light" type="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <x-icon.share fill="#0036E3"/>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" target="_blank"
                                                       href="https://www.linkedin.com/sharing/share-offsite/?url=[URL]">
                                                        <x-icon.logo-linkedin/>
                                                        Linkedin
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" target="_blank"
                                                       href="https://www.facebook.com/sharer/sharer.php?u=[URL]">
                                                        <x-icon.facebook/>
                                                        Facebook
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item">
                                        <span class="me-2">
                                            <x-icon.copy/>
                                       </span>
                                                        Copy Link
                                                    </a>
                                                </li>
                                            </ul>
                                        </button>
                                        <button class="btn btn-md btn-outline-primary border-2"> Registration</button>
                                    </div>
                                    <div class="training-card-trainer-wrapper">
                                        <div class="user-small-card">
                                            <div>
                                                <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                            </div>
                                            <div>
                                                <h4 class="text-base mb-0">Professor Miles Esther</h4>
                                                <ul class="user-meta">
                                                    <li>Public Health</li>
                                                    <li>Melbourne University</li>
                                                    <li>Australia</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="user-small-card">
                                            <div>
                                                <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                            </div>
                                            <div>
                                                <h4 class="text-base mb-0">Professor Miles Esther</h4>
                                                <ul class="user-meta">
                                                    <li>Public Health</li>
                                                    <li>Melbourne University</li>
                                                    <li>Australia</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="training-card-description">
                                        <p class="mb-0">Are you ready to revolutionize the way PhD programs are designed
                                            and delivered?
                                            This intensive training session is for forward-thinking faculty, program
                                            directors, and
                                            administrators who want to ignite the spark of innovation in their PhD
                                            curriculums and equip
                                            their students to become the next generation of disruptors. This is not just
                                            about building
                                            a curriculum, it's about building the next generation of changemakers. Join
                                            us in this
                                            electrifying journey as... <a href="">More</a></p>
                                    </div>
                                    <div class="training-card-summary">
                                        <div class="custom-table text-sm">
                                            <div class="tr">
                                                <div class="td">Seminar Dates</div>
                                                <div class="td fw-medium">23 January 2024 - 28 April 2024</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Time & Location</div>
                                                <div class="td fw-medium">10.15am AEST, Sydney, Australia</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Training Mode</div>
                                                <div class="td fw-medium">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <x-icon.video/>
                                                        </div>
                                                        <div> Face to Face</div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Language</div>
                                                <div class="td fw-medium">English</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Training Category</div>
                                                <div class="td fw-medium">Research and Analysis</div>
                                            </div>
                                            <div class="tr">
                                                <div class="td">Training Fee</div>
                                                <div class="td fw-medium">USD 995</div>
                                            </div>

                                            <div class="tr">
                                                <div class="td">Partner Institute</div>
                                                <div class="td fw-medium">
                                                    <a class="text-decoration-underline" href="#">Western Sydney
                                                        University</a> |
                                                    <a class="text-decoration-underline" href="#">Oxford University</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="pagination-left">
                                            Showing 1 to 6 of
                                            11 results
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="pagination-right">
                                            <ul>
                                                <li>
                                                    <x-icon.skip-previous/>
                                                </li>
                                                <li>
                                                    <x-icon.arrow-left/>
                                                </li>
                                                <li class="active"> 1</li>
                                                <li> 2</li>
                                                <li>
                                                    <x-icon.arrow-right/>
                                                </li>
                                                <li>
                                                    <x-icon.skip-next/>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="margin-bottom: 10px" class="section-title-wrapper text-center  mx-auto">
                        <h2 class="section-title">Instructor</h2>
                        <p class="section-title-lead">Meet Our Top Instructor for Consultation</p>
                    </div>
                    <div class="instructor-carousel-wrapper">
                        <div id="instructor-carousel" class="owl-carousel owl-theme">

                            <div class="instructor-slider-item">
                                <div class="slider-img">
                                    <img src="{{ asset('assets/frontend/img/find-trad1.png') }}">
                                </div>
                                <div class="slider-info">
                                    <h4>Darrell Steward</h4>
                                    <p>Accreditation Specialist</p>
                                    <p class="text-primary">Oxford University</p>
                                </div>
                            </div>


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

            jQuery("#instructor-carousel").owlCarousel({
                autoplay: true,
                loop: true,
                nav: true,
                center: true,
                smartSpeed: 800,
                dots: false,  // Enable dots navigation
                items: 5,    // Set the number of items to 5
                margin: 23,
                responsive: {
                    1200: {
                        items: 5,
                    },
                    900: {
                        items: 4,
                    },
                    600: {
                        items: 3,
                    },
                    0: {
                        items: 2
                    }
                },
                navText: [
                    '<span class="material-symbols-outlined">chevron_left</span>',
                    '<span class="material-symbols-outlined">chevron_right</span>'
                ],
            });
            console.log("I am working");

        })
    </script>
@endpush
