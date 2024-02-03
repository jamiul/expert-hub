@extends('frontend.layouts.figma', ['header' => 'guest'])
@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sidebar-layout left-sidebar-layout find-projects-layout">
                        <div class="page-sidebar">
                            <div class="filter-widget border-bottom">
                                <div class="d-flex justify-content-between">
                                    <h4 class="h6 mb-0">Filter</h4>
                                    <button class="btn btn-sm btn-link text-decoration-underline px-0 ">Clear filters
                                    </button>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <x-form.search class="input-field-md" wire:model="skill"
                                               placeholder="Search by keyword"/>
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
                                <h4 class="widget-title">Project Type</h4>
                                <x-form.check class="mb-2" wire:model="fixed">
                                    Fixed Price
                                </x-form.check>
                                <div class="widget-field-row">
                                    <x-form.input class="input-field-md" type="text" wire:model="type"
                                                  placeholder="Min"/>
                                    <x-form.input class="input-field-md" type="text" wire:model="type"
                                                  placeholder="Max"/>
                                </div>

                                <x-form.check class="mb-2 mt-1" wire:model="hourly">
                                    Hourly
                                </x-form.check>
                                <div class="widget-field-row">
                                    <x-form.input class="input-field-md  mb-0" type="text" wire:model="type"
                                                  placeholder="Min"/>
                                    <x-form.input class="input-field-md  mb-0" type="text" wire:model="type"
                                                  placeholder="Max"/>
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
                                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                            <input x-on:click="open = true" wire:model.live.debounce.500ms="country"
                                                   name="country" id="country" class="form-input-field"
                                                   placeholder="Search by Country">
                                            <span class="form-input-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     width="24" height="24"
                                                     viewBox="0 0 24 25" fill="none">
                                                    <path fill="#ccc"
                                                          d="M19.6 21.5L13.3 15.2C12.8 15.6 12.225 15.9167 11.575 16.15C10.925 16.3833 10.2333 16.5 9.5 16.5C7.68333 16.5 6.14583 15.8708 4.8875 14.6125C3.62917 13.3542 3 11.8167 3 10C3 8.18333 3.62917 6.64583 4.8875 5.3875C6.14583 4.12917 7.68333 3.5 9.5 3.5C11.3167 3.5 12.8542 4.12917 14.1125 5.3875C15.3708 6.64583 16 8.18333 16 10C16 10.7333 15.8833 11.425 15.65 12.075C15.4167 12.725 15.1 13.3 14.7 13.8L21 20.1L19.6 21.5ZM9.5 14.5C10.75 14.5 11.8125 14.0625 12.6875 13.1875C13.5625 12.3125 14 11.25 14 10C14 8.75 13.5625 7.6875 12.6875 6.8125C11.8125 5.9375 10.75 5.5 9.5 5.5C8.25 5.5 7.1875 5.9375 6.3125 6.8125C5.4375 7.6875 5 8.75 5 10C5 11.25 5.4375 12.3125 6.3125 13.1875C7.1875 14.0625 8.25 14.5 9.5 14.5Z"></path>
                                                </svg>
                                            </span>
                                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
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
                                                Igniting the Spark: Designing PhD Curriculums for the Next Generation of Disruptors
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
                                        <button class="btn btn-md btn-icon btn-outline-light" type="button" data-bs-toggle="dropdown"
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
                                        <p class="mb-0">Are you ready to revolutionize the way PhD programs are designed and delivered?
                                            This intensive training session is for forward-thinking faculty, program directors, and
                                            administrators who want to ignite the spark of innovation in their PhD curriculums and equip
                                            their students to become the next generation of disruptors. This is not just about building
                                            a curriculum, it's about building the next generation of changemakers. Join us in this
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
                                                    <a class="text-decoration-underline" href="#">Western Sydney University</a> |
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
                                                Igniting the Spark: Designing PhD Curriculums for the Next Generation of Disruptors
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
                                        <button class="btn btn-md btn-icon btn-outline-light" type="button" data-bs-toggle="dropdown"
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
                                        <p class="mb-0">Are you ready to revolutionize the way PhD programs are designed and delivered?
                                            This intensive training session is for forward-thinking faculty, program directors, and
                                            administrators who want to ignite the spark of innovation in their PhD curriculums and equip
                                            their students to become the next generation of disruptors. This is not just about building
                                            a curriculum, it's about building the next generation of changemakers. Join us in this
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
                                                    <a class="text-decoration-underline" href="#">Western Sydney University</a> |
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
                                                Igniting the Spark: Designing PhD Curriculums for the Next Generation of Disruptors
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
                                        <button class="btn btn-md btn-icon btn-outline-light" type="button" data-bs-toggle="dropdown"
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
                                        <p class="mb-0">Are you ready to revolutionize the way PhD programs are designed and delivered?
                                            This intensive training session is for forward-thinking faculty, program directors, and
                                            administrators who want to ignite the spark of innovation in their PhD curriculums and equip
                                            their students to become the next generation of disruptors. This is not just about building
                                            a curriculum, it's about building the next generation of changemakers. Join us in this
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
                                                    <a class="text-decoration-underline" href="#">Western Sydney University</a> |
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
