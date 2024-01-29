@extends('frontend.layouts.figma', ['header' => 'client'])

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="title-page-wrapper">
                <div class="title-page-header pb-0">
                    <h1 class="h5 mb-20">LMS Expert required for Business Administration</h1>
                </div>
                <div class="title-page-body project-tab" x-data="{ activeTab: 'view-job' }">
                    <div class="tab-nav">
                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'view-job' }"
                                @click="activeTab = 'view-job'">View Job Post
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'review-proposal' }"
                                @click="activeTab = 'review-proposal'">Review Proposal (25)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'invite-expert' }"
                                @click="activeTab = 'invite-expert'">Invite Expert (12)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'offer' }"
                                @click="activeTab = 'offer'">Offer (2)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'hire' }"
                                @click="activeTab = 'hire'">Hire (1)
                        </button>

                    </div>
                    <div class="tab-content pt-40">
                        <div x-show="activeTab === 'view-job'" id="view-job-tab-content">
                            <div class="sidebar-layout right-sidebar-layout project-detials-layout border-0">
                                <div class="page-sidebar">
                                    <div class="sidebar-widget">
                                        <p class="text-sm mb-3">Fixed <strong class="h5">$200.00</strong></p>

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
                                <div class="page-content">
                                    <div class="project-details-card p-0">
                                        <div class="project-details-card-header pb-4">
                                            <p class="text-sm">ID: #45765rte675345</p>
                                            <div class="project-details-meta-data d-flex align-items-center gap-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.clock width="20" height="20" fill="#0036E3"/>
                                                    15 hours ago
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <x-icon.tag fill="#0036E3"/>
                                                    Curriculum development
                                                </div>

                                            </div>
                                        </div>
                                        <div class="project-details-card-body pt-3 mb-40">
                                            <p class="mb-0">
                                                Seeking an experienced Curriculum Developer to create a cutting-edge
                                                curriculum
                                                for our postgraduate public health unit. You will collaborate with our
                                                team to
                                                design a comprehensive curriculum that aligns with industry trends and
                                                academic
                                                standards. Your role involves conducting research, developing course
                                                materials,
                                                and crafting assessments that foster critical thinking and practical
                                                skills. The
                                                ideal candidate will have a strong background in public health
                                                education, and
                                                curriculum design. and a passion for advanced higher education. join us
                                                in
                                                shaping the future of public health education and making a lasting
                                                impact on
                                                students' careers.
                                            </p>
                                        </div>
                                        <div class="mb-40">
                                            <p class="fw-medium mb-2">Required Skills</p>
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
                                        <div class="">
                                            <p class="fw-medium mb-2">Required Skills</p>
                                            <div class="attachment-display-wrapper">
                                                <div class="attachment-display-card">
                                                    <div class="attachment-display-thumb">
                                                        <img src="{{ asset('assets/frontend/img/attachment1.png') }}"/>
                                                    </div>
                                                    <div class="attachment-display-info">
                                                        <h6 class="mb-1">File name.jpg</h6>
                                                        <p class="m-0">1.3 MB</p>
                                                    </div>
                                                </div>
                                                <div class="attachment-display-card">
                                                    <div class="attachment-display-thumb">
                                                        <img src="{{ asset('assets/frontend/img/attachment2.png') }}"/>
                                                    </div>
                                                    <div class="attachment-display-info">
                                                        <h6 class="mb-1">File name.jpg</h6>
                                                        <p class="m-0">1.3 MB</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'review-proposal'" id="review-proposal-tab-content">
                            <div x-data="{ activeTab: 'all-proposals' }">
                                <div class="project-secondary-tab">
                                    <div class="secondary-tab-nav">
                                        <button class="tab-nav-item" @click="activeTab = 'all-proposals'"
                                                :class="{ 'active': activeTab === 'all-proposals' }">All Proposals (10)
                                        </button>
                                        <button class="tab-nav-item" @click="activeTab = 'short-listed'"
                                                :class="{ 'active': activeTab === 'short-listed' }">Short listed (5)
                                        </button>
                                        <button class="tab-nav-item" @click="activeTab = 'messaged'"
                                                :class="{ 'active': activeTab === 'messaged' }">Messaged (1)
                                        </button>
                                        <button class="tab-nav-item" @click="activeTab = 'archived'"
                                                :class="{ 'active': activeTab === 'archived' }">Archived (0)
                                        </button>
                                    </div>
                                    <div class="secondary-tab-content">
                                        <div x-show="activeTab === 'all-proposals'">
                                            <form class="large-search-form" action="">
                                                <div class="input-group">
                                                    <input type="text"
                                                           class="input-field-control input-field-control-md"
                                                           placeholder="Search by contract, client, or company">
                                                    <button class="btn btn-light">
                                                        <x-icon.search fill="#6E737C"/>
                                                    </button>
                                                </div>
                                            </form>
                                            <div class="expert-card-wrapper">
                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <p class="project-expert-profile-flag">Best Match</p>
                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                                    </div>
                                                                    <div class="star-ratings">
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                    </div>
                                                                    <div class="project-expert-profile-status">
                                                                        Available now
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="expert-card-header-action">
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.thumb-up/>
                                                                </button>
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.thumb-down/>
                                                                </button>
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.message-line/>
                                                                </button>
                                                                <a class="btn btn-md btn-outline-primary" href="/figma/project/client-send-job-offer/"> Hire
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="project-expert-summary py-3">
                                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                                    Development Specialist
                                                                    with a distinguished career in education and a track
                                                                    record of providing
                                                                    consultation services in... <a href=""> more</a></p>
                                                            </div>
                                                            <div class="tag-list">
                                                                <a href="#"
                                                                   class="expert-profile-tag offer-consultation-btn">
                                                                    <x-icon.video fill="#0036E3"/>
                                                                    Offer Consultation</a>
                                                                <a href="#" class="expert-profile-tag">Communication
                                                                    Skills</a>
                                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                                    Awareness</a>
                                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                                <a href="#" class="expert-profile-tag">System Research
                                                                    Development</a>
                                                                <a href="#"
                                                                   class="expert-profile-tag">Communication </a>
                                                                <a href="#" class="expert-profile-tag">Industry
                                                                    Treds</a>
                                                                <a href="#" class="expert-profile-tag">Educational
                                                                    Research</a>
                                                                <a href="#" class="expert-profile-tag">System
                                                                    Development</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <p class="project-expert-profile-flag">Best Match</p>
                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                                    </div>
                                                                    <div class="star-ratings">
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                    </div>
                                                                    <div class="project-expert-profile-status">
                                                                        Available now
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="expert-card-header-action">
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.thumb-up/>
                                                                </button>
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.thumb-down/>
                                                                </button>
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.message-line/>
                                                                </button>
                                                                <button class="btn btn-md btn-outline-primary"> Hire
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="project-expert-summary py-3">
                                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                                    Development Specialist
                                                                    with a distinguished career in education and a track
                                                                    record of providing
                                                                    consultation services in... <a href=""> more</a></p>
                                                            </div>
                                                            <div class="tag-list">
                                                                <a href="#"
                                                                   class="expert-profile-tag offer-consultation-btn">
                                                                    <x-icon.video fill="#0036E3"/>
                                                                    Offer Consultation</a>
                                                                <a href="#" class="expert-profile-tag">Communication
                                                                    Skills</a>
                                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                                    Awareness</a>
                                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                                <a href="#" class="expert-profile-tag">System Research
                                                                    Development</a>
                                                                <a href="#"
                                                                   class="expert-profile-tag">Communication </a>
                                                                <a href="#" class="expert-profile-tag">Industry
                                                                    Treds</a>
                                                                <a href="#" class="expert-profile-tag">Educational
                                                                    Research</a>
                                                                <a href="#" class="expert-profile-tag">System
                                                                    Development</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <p class="project-expert-profile-flag">Best Match</p>
                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                                    </div>
                                                                    <div class="star-ratings">
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                    </div>
                                                                    <div class="project-expert-profile-status">
                                                                        Available now
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="expert-card-header-action">
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.thumb-up/>
                                                                </button>
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.thumb-down/>
                                                                </button>
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.message-line/>
                                                                </button>
                                                                <button class="btn btn-md btn-outline-primary"> Hire
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="project-expert-summary py-3">
                                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                                    Development Specialist
                                                                    with a distinguished career in education and a track
                                                                    record of providing
                                                                    consultation services in... <a href=""> more</a></p>
                                                            </div>
                                                            <div class="tag-list">
                                                                <a href="#"
                                                                   class="expert-profile-tag offer-consultation-btn">
                                                                    <x-icon.video fill="#0036E3"/>
                                                                    Offer Consultation</a>
                                                                <a href="#" class="expert-profile-tag">Communication
                                                                    Skills</a>
                                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                                    Awareness</a>
                                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                                <a href="#" class="expert-profile-tag">System Research
                                                                    Development</a>
                                                                <a href="#"
                                                                   class="expert-profile-tag">Communication </a>
                                                                <a href="#" class="expert-profile-tag">Industry
                                                                    Treds</a>
                                                                <a href="#" class="expert-profile-tag">Educational
                                                                    Research</a>
                                                                <a href="#" class="expert-profile-tag">System
                                                                    Development</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div x-show="activeTab === 'short-listed'">
                                            <form class="large-search-form" action="">
                                                <div class="input-group">
                                                    <input type="text"
                                                           class="input-field-control input-field-control-md"
                                                           placeholder="Search by contract, client, or company">
                                                    <button class="btn btn-light">
                                                        <x-icon.search fill="#6E737C"/>
                                                    </button>
                                                </div>
                                            </form>
                                            <div class="expert-card-wrapper">
                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <p class="project-expert-profile-flag">Best Match</p>
                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                                    </div>
                                                                    <div class="star-ratings">
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                    </div>
                                                                    <div class="project-expert-profile-status">
                                                                        Available now
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="expert-card-header-action">

                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.thumb-down/>
                                                                </button>
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.message-line/>
                                                                </button>
                                                                <button class="btn btn-md btn-outline-primary"> Hire
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="project-expert-summary py-3">
                                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                                    Development Specialist
                                                                    with a distinguished career in education and a track
                                                                    record of providing
                                                                    consultation services in... <a href=""> more</a></p>
                                                            </div>
                                                            <div class="tag-list">
                                                                <a href="#"
                                                                   class="expert-profile-tag offer-consultation-btn">
                                                                    <x-icon.video fill="#0036E3"/>
                                                                    Offer Consultation</a>
                                                                <a href="#" class="expert-profile-tag">Communication
                                                                    Skills</a>
                                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                                    Awareness</a>
                                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                                <a href="#" class="expert-profile-tag">System Research
                                                                    Development</a>
                                                                <a href="#"
                                                                   class="expert-profile-tag">Communication </a>
                                                                <a href="#" class="expert-profile-tag">Industry
                                                                    Treds</a>
                                                                <a href="#" class="expert-profile-tag">Educational
                                                                    Research</a>
                                                                <a href="#" class="expert-profile-tag">System
                                                                    Development</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <p class="project-expert-profile-flag">Best Match</p>
                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                                    </div>
                                                                    <div class="star-ratings">
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                    </div>
                                                                    <div class="project-expert-profile-status">
                                                                        Available now
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="expert-card-header-action">

                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.thumb-down/>
                                                                </button>
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.message-line/>
                                                                </button>
                                                                <button class="btn btn-md btn-outline-primary"> Hire
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="project-expert-summary py-3">
                                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                                    Development Specialist
                                                                    with a distinguished career in education and a track
                                                                    record of providing
                                                                    consultation services in... <a href=""> more</a></p>
                                                            </div>
                                                            <div class="tag-list">
                                                                <a href="#"
                                                                   class="expert-profile-tag offer-consultation-btn">
                                                                    <x-icon.video fill="#0036E3"/>
                                                                    Offer Consultation</a>
                                                                <a href="#" class="expert-profile-tag">Communication
                                                                    Skills</a>
                                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                                    Awareness</a>
                                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                                <a href="#" class="expert-profile-tag">System Research
                                                                    Development</a>
                                                                <a href="#"
                                                                   class="expert-profile-tag">Communication </a>
                                                                <a href="#" class="expert-profile-tag">Industry
                                                                    Treds</a>
                                                                <a href="#" class="expert-profile-tag">Educational
                                                                    Research</a>
                                                                <a href="#" class="expert-profile-tag">System
                                                                    Development</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div x-show="activeTab === 'messaged'">
                                            <form class="large-search-form" action="">
                                                <div class="input-group">
                                                    <input type="text"
                                                           class="input-field-control input-field-control-md"
                                                           placeholder="Search by contract, client, or company">
                                                    <button class="btn btn-light">
                                                        <x-icon.search fill="#6E737C"/>
                                                    </button>
                                                </div>
                                            </form>
                                            <div class="expert-card-wrapper">
                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <p class="project-expert-profile-flag">Best Match</p>
                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                                    </div>
                                                                    <div class="star-ratings">
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                    </div>
                                                                    <div class="project-expert-profile-status">
                                                                        Available now
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="expert-card-header-action">
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.thumb-up/>
                                                                </button>
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.thumb-down/>
                                                                </button>
                                                                <button class="btn btn-md btn-icon btn-outline-light">
                                                                    <x-icon.message-line/>
                                                                </button>
                                                                <button class="btn btn-md btn-outline-primary"> Hire
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="project-expert-summary py-3">
                                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                                    Development Specialist
                                                                    with a distinguished career in education and a track
                                                                    record of providing
                                                                    consultation services in... <a href=""> more</a></p>
                                                            </div>
                                                            <div class="tag-list">
                                                                <a href="#"
                                                                   class="expert-profile-tag offer-consultation-btn">
                                                                    <x-icon.video fill="#0036E3"/>
                                                                    Offer Consultation</a>
                                                                <a href="#" class="expert-profile-tag">Communication
                                                                    Skills</a>
                                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                                    Awareness</a>
                                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                                <a href="#" class="expert-profile-tag">System Research
                                                                    Development</a>
                                                                <a href="#"
                                                                   class="expert-profile-tag">Communication </a>
                                                                <a href="#" class="expert-profile-tag">Industry
                                                                    Treds</a>
                                                                <a href="#" class="expert-profile-tag">Educational
                                                                    Research</a>
                                                                <a href="#" class="expert-profile-tag">System
                                                                    Development</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div x-show="activeTab === 'archived'">
                                            <form class="large-search-form" action="">
                                                <div class="input-group">
                                                    <input type="text"
                                                           class="input-field-control input-field-control-md"
                                                           placeholder="Search by contract, client, or company">
                                                    <button class="btn btn-light">
                                                        <x-icon.search fill="#6E737C"/>
                                                    </button>
                                                </div>
                                            </form>
                                            <div class="expert-card-wrapper">
                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <p class="project-expert-profile-flag">Best Match</p>
                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                                    </div>
                                                                    <div class="star-ratings">
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                    </div>
                                                                    <div class="project-expert-profile-status">
                                                                        Available now
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="expert-card-header-action">
                                                                <button class="btn btn-md btn-outline-primary">
                                                                    Decline
                                                                </button>
                                                                <button class="btn btn-md btn-primary"> Unarchive
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="project-expert-summary py-3">
                                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                                    Development Specialist
                                                                    with a distinguished career in education and a track
                                                                    record of providing
                                                                    consultation services in... <a href=""> more</a></p>
                                                            </div>
                                                            <div class="tag-list">
                                                                <a href="#"
                                                                   class="expert-profile-tag offer-consultation-btn">
                                                                    <x-icon.video fill="#0036E3"/>
                                                                    Offer Consultation</a>
                                                                <a href="#" class="expert-profile-tag">Communication
                                                                    Skills</a>
                                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                                    Awareness</a>
                                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                                <a href="#" class="expert-profile-tag">System Research
                                                                    Development</a>
                                                                <a href="#"
                                                                   class="expert-profile-tag">Communication </a>
                                                                <a href="#" class="expert-profile-tag">Industry
                                                                    Treds</a>
                                                                <a href="#" class="expert-profile-tag">Educational
                                                                    Research</a>
                                                                <a href="#" class="expert-profile-tag">System
                                                                    Development</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <p class="project-expert-profile-flag">Best Match</p>
                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                                    </div>
                                                                    <div class="star-ratings">
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                    </div>
                                                                    <div class="project-expert-profile-status">
                                                                        Available now
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="expert-card-header-action">
                                                                <div class="badge badge-warning badge-pill">Withdrawn by Expert</div>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="project-expert-summary py-3">
                                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                                    Development Specialist
                                                                    with a distinguished career in education and a track
                                                                    record of providing
                                                                    consultation services in... <a href=""> more</a></p>
                                                            </div>
                                                            <div class="tag-list">
                                                                <a href="#"
                                                                   class="expert-profile-tag offer-consultation-btn">
                                                                    <x-icon.video fill="#0036E3"/>
                                                                    Offer Consultation</a>
                                                                <a href="#" class="expert-profile-tag">Communication
                                                                    Skills</a>
                                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                                    Awareness</a>
                                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                                <a href="#" class="expert-profile-tag">System Research
                                                                    Development</a>
                                                                <a href="#"
                                                                   class="expert-profile-tag">Communication </a>
                                                                <a href="#" class="expert-profile-tag">Industry
                                                                    Treds</a>
                                                                <a href="#" class="expert-profile-tag">Educational
                                                                    Research</a>
                                                                <a href="#" class="expert-profile-tag">System
                                                                    Development</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div x-show="activeTab === 'invite-expert'" id="invite-expert-tab-content">
                            <div x-data="{ activeInvitedExpertTab: 'search-experts' }">
                                <div class="project-secondary-tab">
                                    <div class="secondary-tab-nav">
                                        <button class="tab-nav-item" @click="activeInvitedExpertTab = 'search-experts'"
                                                :class="{ 'active': activeInvitedExpertTab === 'search-experts' }">
                                            Search Experts
                                        </button>
                                        <button class="tab-nav-item" @click="activeInvitedExpertTab = 'invited-experts'"
                                                :class="{ 'active': activeInvitedExpertTab === 'invited-experts' }">
                                            Invited Experts (2)
                                        </button>
                                        <button class="tab-nav-item"
                                                @click="activeInvitedExpertTab = 'my-hires-experts'"
                                                :class="{ 'active': activeInvitedExpertTab === 'my-hires-experts' }">My
                                            Hires Experts (1)
                                        </button>
                                        <button class="tab-nav-item" @click="activeInvitedExpertTab = 'saved-experts'"
                                                :class="{ 'active': activeInvitedExpertTab === 'saved-experts' }">Saved
                                            Experts
                                        </button>
                                    </div>
                                    <div class="secondary-tab-content">
                                        <div x-show="activeInvitedExpertTab === 'search-experts'">
                                            <form class="large-search-form" action="">
                                                <div class="input-group">
                                                    <input type="text"
                                                           class="input-field-control input-field-control-md"
                                                           placeholder="Search by contract, client, or company">
                                                    <button class="btn btn-light">
                                                        <x-icon.search fill="#6E737C"/>
                                                    </button>
                                                </div>
                                            </form>
                                            <div x-data="{ isSidebarVisible: true }"
                                                 class="sidebar-layout find-expert-layout"
                                                 :class="{ 'left-sidebar-layout': isSidebarVisible }">
                                                <div class="page-sidebar" x-show="isSidebarVisible">
                                                    <div class="filter-widget border-bottom">
                                                        <h4 class="h6 mb-3">Filter</h4>
                                                    </div>
                                                    <div class="filter-widget">
                                                        <div class="d-flex gap-3 justify-content-between mb-2">
                                                            <h4 class="widget-title mb-0">Available Now</h4>
                                                            <span>
                                                                <label class="widget-title-switch widget-on-off-switch">
                                                                    <input type="checkbox" role="switch" name="project-type">
                                                                    <span class="switch-label">
                                                                        <span class="switch-track">
                                                                            <span class="switch-indicator"></span>
                                                                        </span>
                                                                    </span>
                                                                </label>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="filter-widget">
                                                        <h4 class="widget-title">Experts by Field</h4>
                                                        <div class="widget-accordion use-scroll-content">
                                                            <div class="widget-accordion-item">
                                                                <div class="widget-accordion-title"
                                                                     onclick="toggleAccordion(this)">
                                                                    <x-form.check class="m-0 gap-0"
                                                                                  wire:model="project-category" id="A"/>
                                                                    Architecture
                                                                </div>
                                                                <div class="widget-accordion-content">
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="A01">
                                                                        Accreditation Documentation
                                                                    </x-form.check>
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="A02">
                                                                        Accreditation Process
                                                                    </x-form.check>
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="A03">
                                                                        Accreditation Renewal
                                                                    </x-form.check>
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="A04">
                                                                        Accreditation Reporting
                                                                    </x-form.check>
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="A05">
                                                                        Accreditation Review
                                                                    </x-form.check>
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="A06">
                                                                        Accreditation Documentation
                                                                    </x-form.check>
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="A07">
                                                                        Accreditation Documentation
                                                                    </x-form.check>

                                                                </div>
                                                            </div>
                                                            <div class="widget-accordion-item">
                                                                <div class="widget-accordion-title"
                                                                     onclick="toggleAccordion(this)">
                                                                    <x-form.check class="m-0 gap-0"
                                                                                  wire:model="project-category" id="A"/>
                                                                    Curriculum Development
                                                                </div>
                                                                <div class="widget-accordion-content">
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="B01">
                                                                        Accreditation Documentation
                                                                    </x-form.check>
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="B02">
                                                                        Accreditation Process
                                                                    </x-form.check>
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="B03">
                                                                        Accreditation Renewal
                                                                    </x-form.check>
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="B04">
                                                                        Accreditation Reporting
                                                                    </x-form.check>
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="B05">
                                                                        Accreditation Review
                                                                    </x-form.check>
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="B06">
                                                                        Accreditation Documentation
                                                                    </x-form.check>
                                                                    <x-form.check wire:model="project-category"
                                                                                  id="B07">
                                                                        Accreditation Documentation
                                                                    </x-form.check>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-content">
                                                    <button class="toggle-sidebar icon-btn border"
                                                            @click="isSidebarVisible = !isSidebarVisible">
                                                        <x-icon.side-navigation fill="#fff"/>
                                                    </button>
                                                    <!-- Content for the page -->
                                                    <div class="expert-wrapper">

                                                        <div class="project-expert-card border-bottom">
                                                            <div class="project-expert-thumb">
                                                                <img
                                                                    src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                            </div>
                                                            <div class="project-expert-details">
                                                                <div class="expert-card-header">
                                                                    <div class="expert-card-header-info">
                                                                        <h3 class="h6 project-expert-name mb-0">
                                                                            Professor Miles
                                                                            Esther</h3>
                                                                        <ul class="project-expert-meta">
                                                                            <li>Public Health</li>
                                                                            <li>Melbourne University</li>
                                                                            <li>Australia</li>
                                                                        </ul>
                                                                        <div class="d-flex gap-3 align-items-center">
                                                                            <div><strong
                                                                                    class="fw-medium">$200 </strong>/ hr
                                                                            </div>
                                                                            <div class="star-ratings">
                                                                                <x-icon.star-fill/>
                                                                                <x-icon.star-fill/>
                                                                                <x-icon.star-fill/>
                                                                                <x-icon.star-fill/>
                                                                                <x-icon.star-fill/>
                                                                            </div>
                                                                            <div class="project-expert-profile-status">
                                                                                Available now
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="expert-card-header-action">

                                                                        <button x-data="{ isFavorited: false }"
                                                                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                                :class="{ 'favorited': isFavorited }"
                                                                                @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                                                            <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                                                        </button>
                                                                        <button class="btn btn-md btn-outline-primary">
                                                                            Hire
                                                                        </button>
                                                                        <button class="btn btn-md btn-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#expert-invite-modal">
                                                                            Invite to project
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="expert-card-body">
                                                                    <div class="project-expert-summary py-3">
                                                                        <p>Prof. Miles esther is an accomplished
                                                                            Curriculum
                                                                            Development Specialist
                                                                            with a distinguished career in education and
                                                                            a track
                                                                            record of providing
                                                                            consultation services in... <a href="">
                                                                                more</a></p>
                                                                    </div>
                                                                    <div class="tag-list">
                                                                        <a href="#"
                                                                           class="expert-profile-tag offer-consultation-btn">
                                                                            <x-icon.video fill="#0036E3"/>
                                                                            Offer Consultation</a>
                                                                        <a href="#" class="expert-profile-tag">Communication
                                                                            Skills</a>
                                                                        <a href="#" class="expert-profile-tag">Industry
                                                                            Treds
                                                                            Awareness</a>
                                                                        <a href="#" class="expert-profile-tag">
                                                                            Research</a>
                                                                        <a href="#" class="expert-profile-tag">System
                                                                            Research
                                                                            Development</a>
                                                                        <a href="#"
                                                                           class="expert-profile-tag">Communication </a>
                                                                        <a href="#" class="expert-profile-tag">Industry
                                                                            Treds</a>
                                                                        <a href="#" class="expert-profile-tag">Educational
                                                                            Research</a>
                                                                        <a href="#" class="expert-profile-tag">System
                                                                            Development</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-expert-card border-bottom">
                                                            <div class="project-expert-thumb">
                                                                <img
                                                                    src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                            </div>
                                                            <div class="project-expert-details">
                                                                <div class="expert-card-header">
                                                                    <div class="expert-card-header-info">

                                                                        <h3 class="h6 project-expert-name mb-0">
                                                                            Professor Miles
                                                                            Esther</h3>
                                                                        <ul class="project-expert-meta">
                                                                            <li>Public Health</li>
                                                                            <li>Melbourne University</li>
                                                                            <li>Australia</li>
                                                                        </ul>
                                                                        <div class="d-flex gap-3 align-items-center">
                                                                            <div><strong
                                                                                    class="fw-medium">$200 </strong>/ hr
                                                                            </div>
                                                                            <div class="star-ratings">
                                                                                <x-icon.star-fill/>
                                                                                <x-icon.star-fill/>
                                                                                <x-icon.star-fill/>
                                                                                <x-icon.star-fill/>
                                                                                <x-icon.star-fill/>
                                                                            </div>
                                                                            <div class="project-expert-profile-status">
                                                                                Available now
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="expert-card-header-action">

                                                                        <button x-data="{ isFavorited: false }"
                                                                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                                :class="{ 'favorited': isFavorited }"
                                                                                @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                                                            <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                                                        </button>
                                                                        <button class="btn btn-md btn-outline-primary">
                                                                            Decline
                                                                        </button>
                                                                        <button class="btn btn-md btn-primary"> Hire
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="expert-card-body">
                                                                    <div class="project-expert-summary py-3">
                                                                        <p>Prof. Miles esther is an accomplished
                                                                            Curriculum
                                                                            Development Specialist
                                                                            with a distinguished career in education and
                                                                            a track
                                                                            record of providing
                                                                            consultation services in... <a href="">
                                                                                more</a></p>
                                                                    </div>
                                                                    <div class="tag-list">
                                                                        <a href="#"
                                                                           class="expert-profile-tag offer-consultation-btn">
                                                                            <x-icon.video fill="#0036E3"/>
                                                                            Offer Consultation</a>
                                                                        <a href="#" class="expert-profile-tag">Communication
                                                                            Skills</a>
                                                                        <a href="#" class="expert-profile-tag">Industry
                                                                            Treds
                                                                            Awareness</a>
                                                                        <a href="#" class="expert-profile-tag">
                                                                            Research</a>
                                                                        <a href="#" class="expert-profile-tag">System
                                                                            Research
                                                                            Development</a>
                                                                        <a href="#"
                                                                           class="expert-profile-tag">Communication </a>
                                                                        <a href="#" class="expert-profile-tag">Industry
                                                                            Treds</a>
                                                                        <a href="#" class="expert-profile-tag">Educational
                                                                            Research</a>
                                                                        <a href="#" class="expert-profile-tag">System
                                                                            Development</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-expert-card border-bottom">
                                                            <div class="project-expert-thumb">
                                                                <img
                                                                    src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                            </div>
                                                            <div class="project-expert-details">
                                                                <div class="expert-card-header">
                                                                    <div class="expert-card-header-info">
                                                                        <h3 class="h6 project-expert-name mb-0">
                                                                            Professor Miles
                                                                            Esther</h3>
                                                                        <ul class="project-expert-meta">
                                                                            <li>Public Health</li>
                                                                            <li>Melbourne University</li>
                                                                            <li>Australia</li>
                                                                        </ul>
                                                                        <div class="d-flex gap-3 align-items-center">
                                                                            <div><strong
                                                                                    class="fw-medium">$200 </strong>/ hr
                                                                            </div>
                                                                            <div class="star-ratings">
                                                                                <x-icon.star-fill/>
                                                                                <x-icon.star-fill/>
                                                                                <x-icon.star-fill/>
                                                                                <x-icon.star-fill/>
                                                                                <x-icon.star-fill/>
                                                                            </div>
                                                                            <div class="project-expert-profile-status">
                                                                                Available now
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="expert-card-header-action">

                                                                        <button x-data="{ isFavorited: false }"
                                                                                class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                                :class="{ 'favorited': isFavorited }"
                                                                                @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                                                            <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                                                        </button>
                                                                        <button class="btn btn-md btn-outline-primary">
                                                                            Hire
                                                                        </button>
                                                                        <button class="btn btn-md btn-primary"> Invite
                                                                            to project
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="expert-card-body">
                                                                    <div class="project-expert-summary py-3">
                                                                        <p>Prof. Miles esther is an accomplished
                                                                            Curriculum
                                                                            Development Specialist
                                                                            with a distinguished career in education and
                                                                            a track
                                                                            record of providing
                                                                            consultation services in... <a href="">
                                                                                more</a></p>
                                                                    </div>
                                                                    <div class="tag-list">
                                                                        <a href="#"
                                                                           class="expert-profile-tag offer-consultation-btn">
                                                                            <x-icon.video fill="#0036E3"/>
                                                                            Offer Consultation</a>
                                                                        <a href="#" class="expert-profile-tag">Communication
                                                                            Skills</a>
                                                                        <a href="#" class="expert-profile-tag">Industry
                                                                            Treds
                                                                            Awareness</a>
                                                                        <a href="#" class="expert-profile-tag">
                                                                            Research</a>
                                                                        <a href="#" class="expert-profile-tag">System
                                                                            Research
                                                                            Development</a>
                                                                        <a href="#"
                                                                           class="expert-profile-tag">Communication </a>
                                                                        <a href="#" class="expert-profile-tag">Industry
                                                                            Treds</a>
                                                                        <a href="#" class="expert-profile-tag">Educational
                                                                            Research</a>
                                                                        <a href="#" class="expert-profile-tag">System
                                                                            Development</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div x-show="activeInvitedExpertTab === 'invited-experts'">
                                            <form class="large-search-form" action="">
                                                <div class="input-group">
                                                    <input type="text"
                                                           class="input-field-control input-field-control-md"
                                                           placeholder="Search by contract, client, or company">
                                                    <button class="btn btn-light">
                                                        <x-icon.search fill="#6E737C"/>
                                                    </button>
                                                </div>
                                            </form>

                                            <div class="expert-wrapper">

                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                                    </div>
                                                                    <div class="star-ratings">
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                    </div>
                                                                    <div class="project-expert-profile-status">
                                                                        Available now
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="expert-card-header-action">
                                                                <button x-data="{ isFavorited: false }"
                                                                        class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                        :class="{ 'favorited': isFavorited }"
                                                                        @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                                                    <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                                                </button>

                                                                <button class="btn btn-md btn-outline-primary">
                                                                    Decline
                                                                </button>
                                                                <button class="btn btn-md btn-primary">Hire</button>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="project-expert-summary py-3">
                                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                                    Development Specialist
                                                                    with a distinguished career in education and a track
                                                                    record of providing
                                                                    consultation services in... <a href=""> more</a></p>
                                                            </div>
                                                            <div class="tag-list">
                                                                <a href="#"
                                                                   class="expert-profile-tag offer-consultation-btn">
                                                                    <x-icon.video fill="#0036E3"/>
                                                                    Offer Consultation</a>
                                                                <a href="#" class="expert-profile-tag">Communication
                                                                    Skills</a>
                                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                                    Awareness</a>
                                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                                <a href="#" class="expert-profile-tag">System Research
                                                                    Development</a>
                                                                <a href="#"
                                                                   class="expert-profile-tag">Communication </a>
                                                                <a href="#" class="expert-profile-tag">Industry
                                                                    Treds</a>
                                                                <a href="#" class="expert-profile-tag">Educational
                                                                    Research</a>
                                                                <a href="#" class="expert-profile-tag">System
                                                                    Development</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">

                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                                    </div>
                                                                    <div class="star-ratings">
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                    </div>
                                                                    <div class="project-expert-profile-status">
                                                                        Available now
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="expert-card-header-action">

                                                                <button x-data="{ isFavorited: false }"
                                                                        class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                        :class="{ 'favorited': isFavorited }"
                                                                        @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                                                    <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                                                </button>
                                                                <button class="btn btn-md btn-outline-primary">
                                                                    Decline
                                                                </button>
                                                                <button class="btn btn-md btn-primary"> Hire</button>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="project-expert-summary py-3">
                                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                                    Development Specialist
                                                                    with a distinguished career in education and a track
                                                                    record of providing
                                                                    consultation services in... <a href=""> more</a></p>
                                                            </div>
                                                            <div class="tag-list">
                                                                <a href="#"
                                                                   class="expert-profile-tag offer-consultation-btn">
                                                                    <x-icon.video fill="#0036E3"/>
                                                                    Offer Consultation</a>
                                                                <a href="#" class="expert-profile-tag">Communication
                                                                    Skills</a>
                                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                                    Awareness</a>
                                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                                <a href="#" class="expert-profile-tag">System Research
                                                                    Development</a>
                                                                <a href="#"
                                                                   class="expert-profile-tag">Communication </a>
                                                                <a href="#" class="expert-profile-tag">Industry
                                                                    Treds</a>
                                                                <a href="#" class="expert-profile-tag">Educational
                                                                    Research</a>
                                                                <a href="#" class="expert-profile-tag">System
                                                                    Development</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div x-show="activeInvitedExpertTab === 'my-hires-experts'">
                                            <form class="large-search-form" action="">
                                                <div class="input-group">
                                                    <input type="text"
                                                           class="input-field-control input-field-control-md"
                                                           placeholder="Search by contract, client, or company">
                                                    <button class="btn btn-light">
                                                        <x-icon.search fill="#6E737C"/>
                                                    </button>
                                                </div>
                                            </form>
                                            <div class="expert-wrapper">
                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                            </div>
                                                            <div class="expert-card-header-action">
                                                                <button x-data="{ isFavorited: false }"
                                                                        class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                        :class="{ 'favorited': isFavorited }"
                                                                        @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                                                    <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                                                </button>
                                                                <button class="btn btn-md btn-outline-primary"> Rehire
                                                                </button>
                                                                <button class="btn btn-md btn-primary"> Invite to job
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="d-flex gap-3">
                                                                <div>
                                                                    <div class="badge badge-pill badge-warning">Active</div>
                                                                </div>
                                                                <div>
                                                                    <h3 class="h6 d-flex gap-2 mb-0">
                                                                        <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                                        <span> Developing curriculum for
                                                                            Postgraduate
                                                                            public health
                                                                            unit
                                                                        </span>
                                                                    </h3>
                                                                    <div class="project-item-price">Hourly:  <strong class="fw-medium">$200.00</strong></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="project-expert-card">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>


                                                            </div>
                                                            <div class="expert-card-header-action">
                                                                <button x-data="{ isFavorited: false }"
                                                                        class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                        :class="{ 'favorited': isFavorited }"
                                                                        @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                                                    <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                                                </button>
                                                                <button class="btn btn-md btn-outline-primary"> Rehire
                                                                </button>
                                                                <button class="btn btn-md btn-primary"> Invite to
                                                                    project
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="d-flex gap-3">
                                                                <div>
                                                                    <div class="badge badge-pill badge-success">Active</div>
                                                                </div>
                                                                <div>
                                                                    <h3 class="h6 d-flex gap-2 mb-0">
                                                                        <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                                        <span> Developing curriculum for
                                                                            Postgraduate
                                                                            public health
                                                                            unit
                                                                        </span>
                                                                    </h3>
                                                                    <div class="project-item-price">Hourly: <strong class="fw-medium">$200.00</strong></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div x-show="activeInvitedExpertTab === 'saved-experts'">
                                            <form class="large-search-form" action="">
                                                <div class="input-group">
                                                    <input type="text"
                                                           class="input-field-control input-field-control-md"
                                                           placeholder="Search by contract, client, or company">
                                                    <button class="btn btn-light">
                                                        <x-icon.search fill="#6E737C"/>
                                                    </button>
                                                </div>
                                            </form>
                                            <div class="expert-wrapper">

                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                                    </div>
                                                                    <div class="star-ratings">
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                    </div>
                                                                    <div class="project-expert-profile-status">
                                                                        Available now
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="expert-card-header-action">
                                                                <button x-data="{ isFavorited: true }"
                                                                        class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                        :class="{ 'favorited': isFavorited }"
                                                                        @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                                                    <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                                                </button>

                                                                <button class="btn btn-md btn-outline-primary">
                                                                    Decline
                                                                </button>
                                                                <button class="btn btn-md btn-primary">Hire</button>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="project-expert-summary py-3">
                                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                                    Development Specialist
                                                                    with a distinguished career in education and a track
                                                                    record of providing
                                                                    consultation services in... <a href=""> more</a></p>
                                                            </div>
                                                            <div class="tag-list">
                                                                <a href="#"
                                                                   class="expert-profile-tag offer-consultation-btn">
                                                                    <x-icon.video fill="#0036E3"/>
                                                                    Offer Consultation</a>
                                                                <a href="#" class="expert-profile-tag">Communication
                                                                    Skills</a>
                                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                                    Awareness</a>
                                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                                <a href="#" class="expert-profile-tag">System Research
                                                                    Development</a>
                                                                <a href="#"
                                                                   class="expert-profile-tag">Communication </a>
                                                                <a href="#" class="expert-profile-tag">Industry
                                                                    Treds</a>
                                                                <a href="#" class="expert-profile-tag">Educational
                                                                    Research</a>
                                                                <a href="#" class="expert-profile-tag">System
                                                                    Development</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">

                                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                    Esther</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>Public Health</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>Australia</li>
                                                                </ul>
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                                    </div>
                                                                    <div class="star-ratings">
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                        <x-icon.star-fill/>
                                                                    </div>
                                                                    <div class="project-expert-profile-status">
                                                                        Available now
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="expert-card-header-action">

                                                                <button x-data="{ isFavorited: true }"
                                                                        class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                        :class="{ 'favorited': isFavorited }"
                                                                        @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                                                    <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                                                </button>
                                                                <button class="btn btn-md btn-outline-primary">
                                                                    Decline
                                                                </button>
                                                                <button class="btn btn-md btn-primary"> Hire</button>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="project-expert-summary py-3">
                                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                                    Development Specialist
                                                                    with a distinguished career in education and a track
                                                                    record of providing
                                                                    consultation services in... <a href=""> more</a></p>
                                                            </div>
                                                            <div class="tag-list">
                                                                <a href="#"
                                                                   class="expert-profile-tag offer-consultation-btn">
                                                                    <x-icon.video fill="#0036E3"/>
                                                                    Offer Consultation</a>
                                                                <a href="#" class="expert-profile-tag">Communication
                                                                    Skills</a>
                                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                                    Awareness</a>
                                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                                <a href="#" class="expert-profile-tag">System Research
                                                                    Development</a>
                                                                <a href="#"
                                                                   class="expert-profile-tag">Communication </a>
                                                                <a href="#" class="expert-profile-tag">Industry
                                                                    Treds</a>
                                                                <a href="#" class="expert-profile-tag">Educational
                                                                    Research</a>
                                                                <a href="#" class="expert-profile-tag">System
                                                                    Development</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div x-show="activeTab === 'offer'" id="offer-tab-content">
                            <div class="expert-wrapper">
                                <div class="project-expert-card border-bottom">
                                    <div class="project-expert-thumb">
                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                    </div>
                                    <div class="project-expert-details">
                                        <div class="expert-card-header">
                                            <div class="expert-card-header-info">
                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                    Esther</h3>
                                                <ul class="project-expert-meta">
                                                    <li>Public Health</li>
                                                    <li>Melbourne University</li>
                                                    <li>Australia</li>
                                                </ul>
                                                <div class="d-flex gap-3 align-items-center">
                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                    </div>
                                                    <div class="star-ratings">
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                    </div>
                                                    <div class="project-expert-profile-status">
                                                        Available now
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="expert-card-header-action">
                                                <button x-data="{ isFavorited: false }"
                                                        class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                        :class="{ 'favorited': isFavorited }"
                                                        @click="isFavorited = !isFavorited">
                                                                        <span class="heart-line">
                                                                            <x-icon.heart/>
                                                                       </span>
                                                    <span class="heart-filled">
                                                                            <x-icon.heart-filled/>
                                                                       </span>
                                                </button>

                                                <button class="btn btn-md btn-outline-primary">
                                                    Decline
                                                </button>
                                                <button class="btn btn-md btn-primary">Hire</button>
                                            </div>
                                        </div>
                                        <div class="expert-card-body">
                                            <div class="project-expert-summary py-3">
                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                    Development Specialist
                                                    with a distinguished career in education and a track
                                                    record of providing
                                                    consultation services in... <a href=""> more</a></p>
                                            </div>
                                            <div class="tag-list">
                                                <a href="#"
                                                   class="expert-profile-tag offer-consultation-btn">
                                                    <x-icon.video fill="#0036E3"/>
                                                    Offer Consultation</a>
                                                <a href="#" class="expert-profile-tag">Communication
                                                    Skills</a>
                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                    Awareness</a>
                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                <a href="#" class="expert-profile-tag">System Research
                                                    Development</a>
                                                <a href="#"
                                                   class="expert-profile-tag">Communication </a>
                                                <a href="#" class="expert-profile-tag">Industry
                                                    Treds</a>
                                                <a href="#" class="expert-profile-tag">Educational
                                                    Research</a>
                                                <a href="#" class="expert-profile-tag">System
                                                    Development</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-expert-card border-bottom">
                                    <div class="project-expert-thumb">
                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                    </div>
                                    <div class="project-expert-details">
                                        <div class="expert-card-header">
                                            <div class="expert-card-header-info">

                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                    Esther</h3>
                                                <ul class="project-expert-meta">
                                                    <li>Public Health</li>
                                                    <li>Melbourne University</li>
                                                    <li>Australia</li>
                                                </ul>
                                                <div class="d-flex gap-3 align-items-center">
                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                    </div>
                                                    <div class="star-ratings">
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                    </div>
                                                    <div class="project-expert-profile-status">
                                                        Available now
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="expert-card-header-action">
                                                <button class="btn btn-md btn-outline-primary">
                                                    Decline
                                                </button>
                                                <button class="btn btn-md btn-primary"> Hire</button>
                                            </div>
                                        </div>
                                        <div class="expert-card-body">
                                            <div class="project-expert-summary py-3">
                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                    Development Specialist
                                                    with a distinguished career in education and a track
                                                    record of providing
                                                    consultation services in... <a href=""> more</a></p>
                                            </div>
                                            <div class="tag-list">
                                                <a href="#"
                                                   class="expert-profile-tag offer-consultation-btn">
                                                    <x-icon.video fill="#0036E3"/>
                                                    Offer Consultation</a>
                                                <a href="#" class="expert-profile-tag">Communication
                                                    Skills</a>
                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                    Awareness</a>
                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                <a href="#" class="expert-profile-tag">System Research
                                                    Development</a>
                                                <a href="#"
                                                   class="expert-profile-tag">Communication </a>
                                                <a href="#" class="expert-profile-tag">Industry
                                                    Treds</a>
                                                <a href="#" class="expert-profile-tag">Educational
                                                    Research</a>
                                                <a href="#" class="expert-profile-tag">System
                                                    Development</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'hire'" id="hire-tab-content">
                            <div class="expert-wrapper">
                                <div class="project-expert-card">
                                    <div class="project-expert-thumb">
                                        <div class="expert-thumb-box">
                                            <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                        </div>
                                        <div class="badge badge-pill badge-success mt-20">Invited</div>
                                    </div>
                                    <div class="project-expert-details">
                                        <div class="expert-card-header">
                                            <div class="expert-card-header-info">
                                                <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                    Esther</h3>
                                                <ul class="project-expert-meta">
                                                    <li>Public Health</li>
                                                    <li>Melbourne University</li>
                                                    <li>Australia</li>
                                                </ul>
                                                <div class="d-flex gap-3 align-items-center">
                                                    <div><strong class="fw-medium">$200 </strong>/ hr
                                                    </div>
                                                    <div class="star-ratings">
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                    </div>
                                                    <div class="project-expert-profile-status">
                                                        Available now
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="expert-card-header-action">
                                                <button class="btn btn-md btn-primary">Rehire</button>
                                            </div>
                                        </div>
                                        <div class="expert-card-body">
                                            <div class="project-expert-summary py-3">
                                                <p>Prof. Miles esther is an accomplished Curriculum
                                                    Development Specialist
                                                    with a distinguished career in education and a track
                                                    record of providing
                                                    consultation services in... <a href=""> more</a></p>
                                            </div>
                                            <div class="tag-list">
                                                <a href="#"
                                                   class="expert-profile-tag offer-consultation-btn">
                                                    <x-icon.video fill="#0036E3"/>
                                                    Offer Consultation</a>
                                                <a href="#" class="expert-profile-tag">Communication
                                                    Skills</a>
                                                <a href="#" class="expert-profile-tag">Industry Treds
                                                    Awareness</a>
                                                <a href="#" class="expert-profile-tag"> Research</a>
                                                <a href="#" class="expert-profile-tag">System Research
                                                    Development</a>
                                                <a href="#"
                                                   class="expert-profile-tag">Communication </a>
                                                <a href="#" class="expert-profile-tag">Industry
                                                    Treds</a>
                                                <a href="#" class="expert-profile-tag">Educational
                                                    Research</a>
                                                <a href="#" class="expert-profile-tag">System
                                                    Development</a>
                                            </div>
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
    <div class="modal fade" id="expert-invite-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body p-40">
                    <div class="project-expert-card border-0 p-0 mb-20">
                        <div class="project-expert-thumb">
                            <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                        </div>
                        <div class="project-expert-details">
                            <div class="expert-card-header">
                                <div class="expert-card-header-info">
                                    <h3 class="h6 project-expert-name mb-0">Professor Miles
                                        Esther</h3>
                                    <ul class="project-expert-meta mb-1">
                                        <li>Public Health</li>
                                        <li>Melbourne University</li>
                                        <li>Australia</li>
                                    </ul>
                                    <div class="d-flex gap-3 align-items-center">
                                        <div><strong class="fw-medium">$200 </strong>/ hr
                                        </div>
                                        <div class="star-ratings">
                                            <x-icon.star-fill/>
                                            <x-icon.star-fill/>
                                            <x-icon.star-fill/>
                                            <x-icon.star-fill/>
                                            <x-icon.star-fill/>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <x-form.textarea label="Message" wire:model="Message" placeholder="Message">
                        Hello!

                        Id like to invite you to take a look at the job I've posted. Please submit a proposal if you're
                        available and interested.

                        Dr Mohammad R.
                    </x-form.textarea>
                    <x-form.choice-static wire:model="titles" label="Chose a Job">
                        <option value="Mr">Looking an experienced website content writer</option>
                        <option value="Mrs">PHP Livewire Developer Needed for Dynamic Web Application</option>
                        <option value="Dr">Technical QA Engineer</option>
                    </x-form.choice-static>
                    <p class="modal-form-instruction">Want to talk to Professor Mile Esther about your project? <a
                            href="">Schedule a consultation</a></p>
                    <div class="d-flex gap-2 justify-content-end modal-form-btn">
                        <button class="btn modal-form-btn btn-md btn-outline-light">Cancel</button>
                        <button class="btn modal-form-btn btn-md btn-primary">Send Invitation</button>
                    </div>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
@endsection
