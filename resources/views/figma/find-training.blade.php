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
                                                        <x-icon.linkedin/>
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
                                                        <x-icon.linkedin/>
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
                                                        <x-icon.linkedin/>
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
    <div class="require-main find-projects-require-main project-instruction">
        <div class="container">
            <div class="heading">
                <h4>Require steps</h4>
                <h2>The Work you Want, All in the One Place</h2>
                <p>We are the largest, globally connected network of top academic talent, and we're prepared to tackle
                    your most critical projects.</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="require-block">
                        <div class="require-arrow">
                            <img src="<?php echo e(asset('assets/frontend/img/require-arrow.png')); ?>">
                        </div>
                        <div class="require-img">
                            <img src="<?php echo e(asset('assets/frontend/img/require1.png')); ?>">
                            <img class="number" src="<?php echo e(asset('assets/frontend/img/require-n1.png')); ?>">
                        </div>
                        <div class="require-text">
                            <h3>Create a Profile</h3>
                            <p>Highlight your skills and experience, show your portfolio, and set your ideal pay
                                rate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="require-block">
                        <div class="require-arrow">
                            <img src="<?php echo e(asset('assets/frontend/img/require-arrow.png')); ?>">
                        </div>
                        <div class="require-img">
                            <img src="<?php echo e(asset('assets/frontend/img/require2.png')); ?>">
                            <img class="number" src="<?php echo e(asset('assets/frontend/img/require-n2.png')); ?>">
                        </div>
                        <div class="require-text">
                            <h3>Submit Project <br> Interest</h3>
                            <p>Review expressions of interest from our network of academic experts who are interested in
                                working on your project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="require-block">
                        <div class="require-arrow">
                            <img src="<?php echo e(asset('assets/frontend/img/require-arrow.png')); ?>">
                        </div>
                        <div class="require-img">
                            <img src="<?php echo e(asset('assets/frontend/img/require3.png')); ?>">
                            <img class="number" src="<?php echo e(asset('assets/frontend/img/require-n3.png')); ?>">
                        </div>
                        <div class="require-text">
                            <h3>Complete the <br> Project</h3>
                            <p>Check steps off as you finish and work with your client if you have questions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="require-block">
                        <div class="require-img">
                            <img src="<?php echo e(asset('assets/frontend/img/require4.png')); ?>">
                            <img class="number" src="<?php echo e(asset('assets/frontend/img/require-n4.png')); ?>">
                        </div>
                        <div class="require-text">
                            <h3>Get paid <br> securely</h3>
                            <p>Payment held in escrow until project is complete to your satisfection</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <a href="" class="btn btn-primary btn-md">Get Started</a>
            </div>
        </div>
    </div>
    <script>
        function toggleAccordion(header) {
            header.classList.toggle("accordion-item-active");
            var content = header.nextElementSibling;
            content.style.display = (content.style.display === 'block') ? 'none' : 'block';
        }
    </script>

@endsection
