@extends('frontend.layouts.front-client-dashboard-layout')
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
                                            <x-form.check class="m-0 gap-0" wire:model="project-category" id="A"/> Course Accreditations
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
                                            <x-form.check class="m-0 gap-0" wire:model="project-category" id="A"/> Curriculum Development
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
                                            <span class="form-input-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="24" height="24"
                                                                               viewBox="0 0 24 25" fill="none">
    <path fill="#ccc"
          d="M19.6 21.5L13.3 15.2C12.8 15.6 12.225 15.9167 11.575 16.15C10.925 16.3833 10.2333 16.5 9.5 16.5C7.68333 16.5 6.14583 15.8708 4.8875 14.6125C3.62917 13.3542 3 11.8167 3 10C3 8.18333 3.62917 6.64583 4.8875 5.3875C6.14583 4.12917 7.68333 3.5 9.5 3.5C11.3167 3.5 12.8542 4.12917 14.1125 5.3875C15.3708 6.64583 16 8.18333 16 10C16 10.7333 15.8833 11.425 15.65 12.075C15.4167 12.725 15.1 13.3 14.7 13.8L21 20.1L19.6 21.5ZM9.5 14.5C10.75 14.5 11.8125 14.0625 12.6875 13.1875C13.5625 12.3125 14 11.25 14 10C14 8.75 13.5625 7.6875 12.6875 6.8125C11.8125 5.9375 10.75 5.5 9.5 5.5C8.25 5.5 7.1875 5.9375 6.3125 6.8125C5.4375 7.6875 5 8.75 5 10C5 11.25 5.4375 12.3125 6.3125 13.1875C7.1875 14.0625 8.25 14.5 9.5 14.5Z"></path>
</svg></span>
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
                            <div class="project-list">
                                <div class="project-list-card-item">
                                    <div class="project-list-card-item-header">
                                        <div class="project-item-title">
                                            <h3 class="h6 d-flex gap-2 mb-0">
                                                <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                <a href="/figma/project-details-view"> Developing curriculum for
                                                    Postgraduate
                                                    public health
                                                    unit</a>
                                            </h3>
                                        </div>
                                        <div
                                            class="project-item-meta-data d-flex align-items-center gap-2 justify-content-between">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.tag fill="#9196A2"/>
                                                    Curriculum development
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.clock fill="#9196A2"/>
                                                    15 hours ago
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.globe width="20" height="20" fill="#9196A2"/>
                                                    USA
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>Hourly: <strong>$200.00</strong></div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <x-icon.heart fill="#0036E3"/>
                                                    </button>
                                                </div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <x-icon.share fill="#0036E3"/>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-list-card-item-body">
                                        <p class="mb-0">Our organisation is seeking a Scholarship Development Consultant
                                            to lead a
                                            project focused on improving access to higher education for students from
                                            rural communities...... More</p>
                                    </div>
                                    <div class="tag-list">
                                        <a href="#" class="project-tag">Communication Skills</a>
                                        <a href="#" class="project-tag">Industry Treds Awareness</a>
                                        <a href="#" class="project-tag"> Research</a>
                                        <a href="#" class="project-tag">System Research Development</a>
                                        <a href="#" class="project-tag">Communication </a>
                                        <a href="#" class="project-tag">Industry Treds</a>
                                        <a href="#" class="project-tag">Educational Research</a>
                                        <a href="#" class="project-tag">System Development</a>
                                    </div>
                                </div>
                                <!-project-list-card-item-->
                                <div class="project-list-card-item">
                                    <div class="project-list-card-item-header">
                                        <div class="project-item-title">
                                            <h3 class="h6 d-flex gap-2 mb-0">
                                                <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                <a href="/figma/project-details-view"> Developing curriculum for
                                                    Postgraduate
                                                    public health
                                                    unit</a>

                                            </h3>
                                        </div>
                                        <div
                                            class="project-item-meta-data d-flex align-items-center gap-2 justify-content-between">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.tag fill="#9196A2"/>
                                                    Curriculum development
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.clock fill="#9196A2"/>
                                                    15 hours ago
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.globe width="20" height="20" fill="#9196A2"/>
                                                    USA
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>Hourly: <strong>$200.00</strong></div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <x-icon.heart fill="#0036E3"/>
                                                    </button>
                                                </div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <x-icon.share fill="#0036E3"/>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-list-card-item-body">
                                        <p class="mb-0">Our organisation is seeking a Scholarship Development Consultant
                                            to lead a
                                            project focused on improving access to higher education for students from
                                            rural communities...... More</p>
                                    </div>
                                    <div class="tag-list">
                                        <a href="#" class="project-tag">Communication Skills</a>
                                        <a href="#" class="project-tag">Industry Treds Awareness</a>
                                        <a href="#" class="project-tag"> Research</a>
                                        <a href="#" class="project-tag">System Research Development</a>
                                        <a href="#" class="project-tag">Communication </a>
                                        <a href="#" class="project-tag">Industry Treds</a>
                                        <a href="#" class="project-tag">Educational Research</a>
                                        <a href="#" class="project-tag">System Development</a>
                                    </div>
                                </div>
                                <!-project-list-card-item-->
                                <div class="project-list-card-item">
                                    <div class="project-list-card-item-header">
                                        <div class="project-item-title">
                                            <h3 class="h6 d-flex gap-2 mb-0">
                                                <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                Developing curriculum for Postgraduate public health
                                                unit
                                            </h3>
                                        </div>
                                        <div
                                            class="project-item-meta-data d-flex align-items-center gap-2 justify-content-between">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.tag fill="#9196A2"/>
                                                    Curriculum development
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.clock fill="#9196A2"/>
                                                    15 hours ago
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.globe width="20" height="20" fill="#9196A2"/>
                                                    USA
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>Hourly: <strong>$200.00</strong></div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <x-icon.heart fill="#0036E3"/>
                                                    </button>
                                                </div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <x-icon.share fill="#0036E3"/>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-list-card-item-body">
                                        <p class="mb-0">Our organisation is seeking a Scholarship Development Consultant
                                            to lead a
                                            project focused on improving access to higher education for students from
                                            rural communities...... More</p>
                                    </div>
                                    <div class="tag-list">
                                        <a href="#" class="project-tag">Communication Skills</a>
                                        <a href="#" class="project-tag">Industry Treds Awareness</a>
                                        <a href="#" class="project-tag"> Research</a>
                                        <a href="#" class="project-tag">System Research Development</a>
                                        <a href="#" class="project-tag">Communication </a>
                                        <a href="#" class="project-tag">Industry Treds</a>
                                        <a href="#" class="project-tag">Educational Research</a>
                                        <a href="#" class="project-tag">System Development</a>
                                    </div>
                                </div>
                                <!-project-list-card-item-->
                                <div class="project-list-card-item">
                                    <div class="project-list-card-item-header">
                                        <div class="project-item-title">
                                            <h3 class="h6 d-flex gap-2 mb-0">
                                                <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                Developing curriculum for Postgraduate public health
                                                unit
                                            </h3>
                                        </div>
                                        <div
                                            class="project-item-meta-data d-flex align-items-center gap-2 justify-content-between">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.tag fill="#9196A2"/>
                                                    Curriculum development
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.clock fill="#9196A2"/>
                                                    15 hours ago
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.globe width="20" height="20" fill="#9196A2"/>
                                                    USA
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>Hourly: <strong>$200.00</strong></div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <x-icon.heart fill="#0036E3"/>
                                                    </button>
                                                </div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <x-icon.share fill="#0036E3"/>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-list-card-item-body">
                                        <p class="mb-0">Our organisation is seeking a Scholarship Development Consultant
                                            to lead a
                                            project focused on improving access to higher education for students from
                                            rural communities...... More</p>
                                    </div>
                                    <div class="tag-list">
                                        <a href="#" class="project-tag">Communication Skills</a>
                                        <a href="#" class="project-tag">Industry Treds Awareness</a>
                                        <a href="#" class="project-tag"> Research</a>
                                        <a href="#" class="project-tag">System Research Development</a>
                                        <a href="#" class="project-tag">Communication </a>
                                        <a href="#" class="project-tag">Industry Treds</a>
                                        <a href="#" class="project-tag">Educational Research</a>
                                        <a href="#" class="project-tag">System Development</a>
                                    </div>
                                </div>
                                <!-project-list-card-item-->
                                <div class="project-list-card-item">
                                    <div class="project-list-card-item-header">
                                        <div class="project-item-title">
                                            <h3 class="h6 d-flex gap-2 mb-0">
                                                <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                Developing curriculum for Postgraduate public health
                                                unit
                                            </h3>
                                        </div>
                                        <div
                                            class="project-item-meta-data d-flex align-items-center gap-2 justify-content-between">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.tag fill="#9196A2"/>
                                                    Curriculum development
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.clock fill="#9196A2"/>
                                                    15 hours ago
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.globe width="20" height="20" fill="#9196A2"/>
                                                    USA
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>Hourly: <strong>$200.00</strong></div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <x-icon.heart fill="#0036E3"/>
                                                    </button>
                                                </div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <x-icon.share fill="#0036E3"/>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-list-card-item-body">
                                        <p class="mb-0">Our organisation is seeking a Scholarship Development Consultant
                                            to lead a
                                            project focused on improving access to higher education for students from
                                            rural communities...... More</p>
                                    </div>
                                    <div class="tag-list">
                                        <a href="#" class="project-tag">Communication Skills</a>
                                        <a href="#" class="project-tag">Industry Treds Awareness</a>
                                        <a href="#" class="project-tag"> Research</a>
                                        <a href="#" class="project-tag">System Research Development</a>
                                        <a href="#" class="project-tag">Communication </a>
                                        <a href="#" class="project-tag">Industry Treds</a>
                                        <a href="#" class="project-tag">Educational Research</a>
                                        <a href="#" class="project-tag">System Development</a>
                                    </div>
                                </div>
                                <!-project-list-card-item-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function toggleAccordion(header) {
            header.classList.toggle("accordion-item-active");
            var content = header.nextElementSibling;
            content.style.display = (content.style.display === 'block') ? 'none' : 'block';
        }
    </script>

@endsection
