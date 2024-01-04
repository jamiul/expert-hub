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
                                <div class="widget-accordion">
                                    <div class="widget-accordion-item">
                                        <div class="widget-accordion-title" onclick="toggleAccordion(this)">
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
                                <h4 class="widget-title">Location</h4>
                                {{--<x-form.autocomplete :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>--}}
                            </div>
                        </div>
                        <div class="page-content p-0">
                            <div class="project-list">
                                <div class="project-list-card-item">
                                    <div class="project-list-card-item-header">
                                        <div class="project-item-title">
                                            <h3 class="h6 d-flex gap-2 mb-0">
                                                <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                <a href="/figma/project-details-view"> Developing curriculum for Postgraduate
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
                                                <a href="/figma/project-details-view"> Developing curriculum for Postgraduate
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
