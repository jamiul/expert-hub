@extends('frontend.layouts.figma', ['header' => 'client'])

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="title-page-wrapper">
                <div class="title-page-header pb-3">
                    <h1 class="h5 m-0">Expression of Interest (EOI)</h1>
                </div>
                <div class="title-page-body edux-fill-tab express-of-interest-tab" x-data="{ activeTab: 'eoi-sent-tab' }">
                    <div class="tab-nav">
                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'eoi-sent-tab' }"
                                @click="activeTab = 'eoi-sent-tab'">EOI sent (23)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'invitation-received-tab' }"
                                @click="activeTab = 'invitation-received-tab'">Invitation received (3)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'invitation-for-meeting-tab' }"
                                @click="activeTab = 'invitation-for-meeting-tab'">Invitation for meeting (34)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'offer-tab' }"
                                @click="activeTab = 'offer-tab'">Offer (34)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'saved-projects-tab' }"
                                @click="activeTab = 'saved-projects-tab'">Saved projects (34)
                        </button>
                    </div>
                    <div class="tab-content pt-40">
                        <div x-show="activeTab === 'eoi-sent-tab'" id="eoi-sent-tab-content">

                            <div class="table-responsive">
                                <table
                                    class="table text-sm table-extra-padding seller-project-table edux-table-extra-padding">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">
                                                <a href="/figma/express-of-interest-project-view/">
                                                    LMS Expert required for Business Administration
                                                </a>
                                            </p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">LMS Expert required for Business
                                                Administration</p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Fixed</p>
                                            <p class="mb-1">$2300</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Seeking Finance Guidance for Budgeting and
                                                Forecasting
                                                in Higher Education</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>


                                </table>

                                <div class="hero-button d-flex gap-3 edux-hero-button mt-4 mb-5">
                                    <a href="#" class="btn btn-primary edux-btn-primary">Search for Projects</a>
                                    <a href="#" class="btn edux-btn-border-primary">Manage your Profile</a>
                                </div>
                            </div>

                        </div>
                        <div x-show="activeTab === 'invitation-received-tab'" id="invitation-received-tab-content">

                            <div class="table-responsive">
                                <table
                                    class="table text-sm table-extra-padding seller-project-table edux-table-extra-padding">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">
                                                <a href="/figma/invitation-project-view">
                                                    LMS Expert required for Business Administration
                                                </a>
                                            </p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <span class="edux-batch-viewed">Viewed</span>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical
                                                Engineering Industry</p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <span class="edux-batch-not-viewed">Not Viewed</span>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Seeking Finance Guidance for Budgeting and
                                                Forecasting
                                                in Higher Education</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <span class="edux-batch-not-viewed"> Not Viewed</span>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Expert in Environmental Economics for Academic
                                                Research</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <span class="edux-batch-viewed">Viewed</span>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical
                                                Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <span class="edux-batch-viewed">Viewed</span>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>


                                </table>

                                <div class="hero-button d-flex gap-3 edux-hero-button mt-4 mb-5">
                                    <a href="#" class="btn btn-primary edux-btn-primary">Search for Projects</a>
                                    <a href="#" class="btn edux-btn-border-primary">Manage your Profile</a>
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'invitation-for-meeting-tab'" id="invitation-for-meeting-tab">

                            <div class="table-responsive">
                                <table
                                    class="table text-sm table-extra-padding seller-project-table edux-table-extra-padding">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">
                                                <a href="/figma/invitation-project-view">
                                                    LMS Expert required for Business
                                                    Administration</a>
                                            </p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">LMS Expert required for Business
                                                Administration</p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Seeking Finance Guidance for Budgeting and
                                                Forecasting
                                                in Higher Education</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>


                                </table>

                                <div class="hero-button d-flex gap-3 edux-hero-button mt-4 mb-5">
                                    <a href="#" class="btn btn-primary edux-btn-primary">Search for Projects</a>
                                    <a href="#" class="btn edux-btn-border-primary">Manage your Profile</a>
                                </div>
                            </div>


                        </div>
                        <div x-show="activeTab === 'offer-tab'" id="offer-tab-content">

                            <div class="table-responsive">
                                <table
                                    class="table text-sm table-extra-padding seller-project-table edux-table-extra-padding">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">
                                                <a href="/figma/offer-project-view">
                                                    LMS Expert required for Business
                                                    Administration
                                                </a>
                                            </p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">LMS Expert required for Business
                                                Administration</p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Seeking Finance Guidance for Budgeting and
                                                Forecasting
                                                in Higher Education</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Expert in Environmental Economics for Academic
                                                Research</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Expert in Environmental Economics for Academic
                                                Research</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>


                                </table>

                                <div class="hero-button d-flex gap-3 edux-hero-button mt-4 mb-5">
                                    <a href="#" class="btn btn-primary edux-btn-primary">Search for Projects</a>
                                    <a href="#" class="btn edux-btn-border-primary">Manage your Profile</a>
                                </div>
                            </div>


                        </div>
                        <div x-show="activeTab === 'saved-projects-tab'" id="saved-projects-tab-content">
                            <div class="table-responsive">
                                <table class="table text-sm table-extra-padding seller-project-table">

                                    <tr class="align-middle">
                                        <div class="project-list-card-item">
                                            <div class="project-list-card-item-header">
                                                <div class="project-item-title">
                                                    <h3 class="h6 d-flex gap-2 mb-0">
                                                        <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                        <a href="/figma/project-details-view"> Developing curriculum for
                                                            Postgraduate
                                                            public health
                                                            unit
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                                                    <div class="project-item-meta d-flex align-items-center gap-3">
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
                                                    <div class="project-item-action d-flex align-items-center gap-2">
                                                        <div class="project-item-price">Hourly: <strong>$200.00</strong>
                                                        </div>
                                                        <div>
                                                            <button class="icon-btn">
                                                                <span class="heart-line"><x-icon.heart fill="#0036E3"/></span>
                                                                <span class="heart-filled"><x-icon.heart-filled
                                                                        fill="#0036E3"/></span>
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
                                                <p class="mb-0">Our organisation is seeking a Scholarship Development
                                                    Consultant to lead a project focused on improving access to higher
                                                    education for students from rural communities Consultant to lead a
                                                    project focused on improving access to higher...</p>
                                            </div>
                                            <div class="tag-list">
                                                <a href="#" class="project-tag">Communication Skills</a>
                                                <a href="#" class="project-tag">Industry Treds Awareness</a>
                                                <a href="#" class="project-tag"> Research</a>
                                                <a href="#" class="project-tag">System Research Development</a>
                                                <a href="#" class="project-tag">Communication </a>
                                                <a href="#" class="project-tag">Industry Treds</a>
                                                <a href="#" class="project-tag">Educational Research</a>
                                                <a href="#" class="project-tag">+12 More</a>
                                            </div>
                                        </div>
                                    </tr>

                                    <tr class="align-middle">
                                        <div class="project-list-card-item">
                                            <div class="project-list-card-item-header">
                                                <div class="project-item-title">
                                                    <h3 class="h6 d-flex gap-2 mb-0">
                                                        <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                        <a href="/figma/project-details-view"> Developing curriculum for
                                                            Postgraduate
                                                            public health
                                                            unit
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                                                    <div class="project-item-meta d-flex align-items-center gap-3">
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
                                                    <div class="project-item-action d-flex align-items-center gap-2">
                                                        <div class="project-item-price">Hourly: <strong>$200.00</strong>
                                                        </div>
                                                        <div>
                                                            <button class="icon-btn">
                                                                <span class="heart-line"><x-icon.heart fill="#0036E3"/></span>
                                                                <span class="heart-filled"><x-icon.heart-filled
                                                                        fill="#0036E3"/></span>
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
                                                <p class="mb-0">Our organisation is seeking a Scholarship Development
                                                    Consultant to lead a project focused on improving access to higher
                                                    education for students from rural communities Consultant to lead a
                                                    project focused on improving access to higher...</p>
                                            </div>
                                            <div class="tag-list">
                                                <a href="#" class="project-tag">Communication Skills</a>
                                                <a href="#" class="project-tag">Industry Treds Awareness</a>
                                                <a href="#" class="project-tag"> Research</a>
                                                <a href="#" class="project-tag">System Research Development</a>
                                                <a href="#" class="project-tag">Communication </a>
                                                <a href="#" class="project-tag">Industry Treds</a>
                                                <a href="#" class="project-tag">Educational Research</a>
                                                <a href="#" class="project-tag">+12 More</a>
                                            </div>
                                        </div>
                                    </tr>

                                    <tr class="align-middle">
                                        <div class="project-list-card-item">
                                            <div class="project-list-card-item-header">
                                                <div class="project-item-title">
                                                    <h3 class="h6 d-flex gap-2 mb-0">
                                                        <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                        <a href="/figma/project-details-view"> Developing curriculum for
                                                            Postgraduate
                                                            public health
                                                            unit
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                                                    <div class="project-item-meta d-flex align-items-center gap-3">
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
                                                    <div class="project-item-action d-flex align-items-center gap-2">
                                                        <div class="project-item-price">Hourly: <strong>$200.00</strong>
                                                        </div>
                                                        <div>
                                                            <button class="icon-btn">
                                                                <span class="heart-line"><x-icon.heart fill="#0036E3"/></span>
                                                                <span class="heart-filled"><x-icon.heart-filled
                                                                        fill="#0036E3"/></span>
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
                                                <p class="mb-0">Our organisation is seeking a Scholarship Development
                                                    Consultant to lead a project focused on improving access to higher
                                                    education for students from rural communities Consultant to lead a
                                                    project focused on improving access to higher...</p>
                                            </div>
                                            <div class="tag-list">
                                                <a href="#" class="project-tag">Communication Skills</a>
                                                <a href="#" class="project-tag">Industry Treds Awareness</a>
                                                <a href="#" class="project-tag"> Research</a>
                                                <a href="#" class="project-tag">System Research Development</a>
                                                <a href="#" class="project-tag">Communication </a>
                                                <a href="#" class="project-tag">Industry Treds</a>
                                                <a href="#" class="project-tag">Educational Research</a>
                                                <a href="#" class="project-tag">+12 More</a>
                                            </div>
                                        </div>
                                    </tr>
                                    <tr class="align-middle">
                                        <div class="project-list-card-item">
                                            <div class="project-list-card-item-header">
                                                <div class="project-item-title">
                                                    <h3 class="h6 d-flex gap-2 mb-0">
                                                        <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                        <a href="/figma/project-details-view"> Developing curriculum for
                                                            Postgraduate
                                                            public health
                                                            unit
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                                                    <div class="project-item-meta d-flex align-items-center gap-3">
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
                                                    <div class="project-item-action d-flex align-items-center gap-2">
                                                        <div class="project-item-price">Hourly: <strong>$200.00</strong>
                                                        </div>
                                                        <div>
                                                            <button class="icon-btn">
                                                                <span class="heart-line"><x-icon.heart fill="#0036E3"/></span>
                                                                <span class="heart-filled"><x-icon.heart-filled
                                                                        fill="#0036E3"/></span>
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
                                                <p class="mb-0">Our organisation is seeking a Scholarship Development
                                                    Consultant to lead a project focused on improving access to higher
                                                    education for students from rural communities Consultant to lead a
                                                    project focused on improving access to higher...</p>
                                            </div>
                                            <div class="tag-list">
                                                <a href="#" class="project-tag">Communication Skills</a>
                                                <a href="#" class="project-tag">Industry Treds Awareness</a>
                                                <a href="#" class="project-tag"> Research</a>
                                                <a href="#" class="project-tag">System Research Development</a>
                                                <a href="#" class="project-tag">Communication </a>
                                                <a href="#" class="project-tag">Industry Treds</a>
                                                <a href="#" class="project-tag">Educational Research</a>
                                                <a href="#" class="project-tag">+12 More</a>
                                            </div>
                                        </div>
                                    </tr>


                                </table>
                                <div class="hero-button d-flex gap-3 edux-hero-button mt-4 mb-5">
                                    <a href="#" class="btn btn-primary edux-btn-primary">Search for Projects</a>
                                    <a href="#" class="btn edux-btn-border-primary">Manage your Profile</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>


@endsection
