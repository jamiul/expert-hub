@extends('frontend.layouts.figma', ['header' => 'client'])

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="title-page-wrapper">
                <div class="title-page-header pb-3">
                    <h1 class="h5 m-0">Expression of Interest (EOI)</h1>
                </div>
                <div class="title-page-body project-tab" x-data="{ activeTab: 'in-progress-contract' }">
                    <div class="tab-nav">
                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'in-progress-contract' }"
                                @click="activeTab = 'in-progress-contract'">EOI sent (23)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'dispute-contract' }"
                                @click="activeTab = 'dispute-contract'">Invitation received (3)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'on-hold-contract' }"
                                @click="activeTab = 'on-hold-contract'">Invitation for meeting(34)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'cancel-contract' }"
                                @click="activeTab = 'cancel-contract'">Offer(34)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'completed-contract' }"
                                @click="activeTab = 'completed-contract'">Saved projects (34)
                        </button>

                    </div>
                    <div class="tab-content pt-40">
                        <div x-show="activeTab === 'in-progress-contract'" id="in-progress-tab-content">

                            <div class="table-responsive">
                                <table class="table text-sm table-extra-padding seller-project-table edux-table-extra-padding">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">LMS Expert required for Business Administration</p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">LMS Expert required for Business Administration</p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Seeking Finance Guidance for Budgeting and Forecasting
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
                        <div x-show="activeTab === 'dispute-contract'" id="dispute-tab-content">

                            <div class="table-responsive">
                                <table class="table text-sm table-extra-padding seller-project-table edux-table-extra-padding">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">LMS Expert required for Business Administration</p>
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
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for Chemical
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
                                            <p class="mb-1 fw-medium">Seeking Finance Guidance for Budgeting and Forecasting
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
                                            <p class="mb-1 fw-medium">Expert in Environmental Economics for Academic Research</p>
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
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for Chemical
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
                        <div x-show="activeTab === 'on-hold-contract'" id="on-hold-tab-content">

                            <div class="table-responsive">
                                <table class="table text-sm table-extra-padding seller-project-table edux-table-extra-padding">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">LMS Expert required for Business Administration</p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">LMS Expert required for Business Administration</p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Seeking Finance Guidance for Budgeting and Forecasting
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
                        <div x-show="activeTab === 'cancel-contract'" id="cancel-tab-content">

                            <div class="table-responsive">
                                <table class="table text-sm table-extra-padding seller-project-table edux-table-extra-padding">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">LMS Expert required for Business Administration</p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">LMS Expert required for Business Administration</p>
                                            <p class="mb-1">12 hours ago</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Seeking Finance Guidance for Budgeting and Forecasting
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
                                            <p class="mb-1 fw-medium">Expert in Environmental Economics for Academic Research</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Expert in Environmental Economics for Academic Research</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for Chemical Engineering Industry</p>
                                            <p class="mb-1">Sep 23 2023</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Hourly</p>
                                            <p class="mb-1">$200</p>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for Chemical Engineering Industry</p>
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
                        <div x-show="activeTab === 'completed-contract'" id="completed-tab-content">
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
                                                <div class="project-item-price">Hourly: <strong>$200.00</strong></div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <span class="heart-line"><x-icon.heart fill="#0036E3"/></span>
                                                        <span class="heart-filled"><x-icon.heart-filled fill="#0036E3"/></span>
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
                                        <p class="mb-0">Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities  Consultant to lead a project focused on improving access to higher...</p>
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
                                                <div class="project-item-price">Hourly: <strong>$200.00</strong></div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <span class="heart-line"><x-icon.heart fill="#0036E3"/></span>
                                                        <span class="heart-filled"><x-icon.heart-filled fill="#0036E3"/></span>
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
                                        <p class="mb-0">Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities  Consultant to lead a project focused on improving access to higher...</p>
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
                                                <div class="project-item-price">Hourly: <strong>$200.00</strong></div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <span class="heart-line"><x-icon.heart fill="#0036E3"/></span>
                                                        <span class="heart-filled"><x-icon.heart-filled fill="#0036E3"/></span>
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
                                        <p class="mb-0">Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities  Consultant to lead a project focused on improving access to higher...</p>
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
                                                <div class="project-item-price">Hourly: <strong>$200.00</strong></div>
                                                <div>
                                                    <button class="icon-btn">
                                                        <span class="heart-line"><x-icon.heart fill="#0036E3"/></span>
                                                        <span class="heart-filled"><x-icon.heart-filled fill="#0036E3"/></span>
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
                                        <p class="mb-0">Our organisation is seeking a Scholarship Development Consultant to lead a project focused on improving access to higher education for students from rural communities  Consultant to lead a project focused on improving access to higher...</p>
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

    <!-- Edit Option Modal start  -->

    <div class="modal fade" id="disputeModal" tabindex="-1" aria-labelledby="disputeModal" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body p-40">
                    <h3 class="h5 mb-3">Dispute</h3>
                    <form action="">
                        <div class="expert-small-card expert-card-has-bg mb-3 mt-2">
                            <div class="expert-thumb">
                                <img style="width: 40px"
                                     src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                            </div>
                            <div class="expert-info">
                                <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                    Riyadh </p>
                                <p class=" mb-0">Public Health </p>
                            </div>
                        </div>

                        <x-form.input type="text" label="Project" wire:model="type" placeholder="Type"
                                      value="Policy Development Assistance Required for Chemical Engineering"
                                      disabled/>
                        <x-form.select label="Reason of dispute" wire:model="title">
                            <option value="">Select a reason</option>
                            <option value="Mr">Lorem ipsum dolor sit amet.</option>
                        </x-form.select>
                        <x-form.textarea label="Description" wire:model="bio" placeholder="" row="5"/>
                        <div class="image-upload-flat mb-3">
                            <label for="upload-file" class="text-center">
                                <span> <x-icon.document-upload fill="#0059C999"/> </span>
                                <span class="fw-medium">Clik to upload or drag & drop</span>
                                <span class="text-sm">Drag & drop any images or documents that might be helpful in explaining your brief here</span>
                            </label>
                            <input type="file" id="upload-file" class="d-none">
                        </div>
                        <div class="flat-uploaded-item-list mt-3">
                            <div class="flat-uploaded-item">
                                <div class="uploaded-item-icon"><x-icon.image fill="#0036E3"/></div>
                                <div class="uploaded-item-info">
                                    <p class="uploaded-file-name fw-medium mb-0">Customer_file.png</p>
                                    <p class="uploaded-file-info text-sm mb-0"> <span class="uploaded-file-size">456 KB </span>  <span class="uploaded-file-time"> - 21 second left </span></p>
                                </div>
                                <div class="uploaded-item-remove">
                                    <button class="icon-btn"><x-icon.delete/> </button>
                                </div>
                            </div>
                        </div>
                        <x-form.check wire:model="terms">
                            If any check thing we need
                        </x-form.check>
                        <div class="d-flex gap-3 mt-20 pt-20 justify-content-end border-top">
                            <button style="width: 130px" class="btn btn-md btn-outline-gray">Cancel</button>
                            <button style="width: 130px" class="btn btn-md btn-primary">Dispute</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="endContractModal" tabindex="-1" aria-labelledby="endContractModal" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body p-40">
                    <h3 class="h5 mb-3">End contract</h3>
                    <form action="">
                        <div class="expert-small-card expert-card-has-bg mb-3 mt-2">
                            <div class="expert-thumb">
                                <img style="width: 40px"
                                     src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                            </div>
                            <div class="expert-info">
                                <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                    Riyadh </p>
                                <p class=" mb-0">Public Health </p>
                            </div>
                        </div>

                        <x-form.input type="text" label="Project" wire:model="type" placeholder="Type"
                                      value="Policy Development Assistance Required for Chemical Engineering"
                                      disabled/>

                        <x-form.select label="Reason for ending contract" wire:model="title">
                            <option value="">Select a reason</option>
                            <option value="Mr">Lorem ipsum dolor sit amet.</option>
                        </x-form.select>

                        <p class="input-field-label mb-1">How much you likely to recommend this expert?</p>
                        <div class="recommendation-input-wrapper">
                            <div class="recommendation-input-labels">
                                <div>😟 Not at all</div>
                                <div>😃 Extremely Good</div>
                            </div>
                            <div class="recommendation-input-fields">
                                <div><input type="radio" name="recommendation" id="0"><label for="0">0</label></div>
                                <div><input type="radio" name="recommendation" id="1"><label for="1">1</label></div>
                                <div><input type="radio" name="recommendation" id="2"><label for="2">2</label></div>
                                <div><input type="radio" name="recommendation" id="3"><label for="3">3</label></div>
                                <div><input type="radio" name="recommendation" id="4"><label for="4">4</label></div>
                                <div><input type="radio" name="recommendation" id="5"><label for="5">5</label></div>
                                <div><input type="radio" name="recommendation" id="6"><label for="6">6</label></div>
                                <div><input type="radio" name="recommendation" id="7"><label for="7">7</label></div>
                                <div><input type="radio" name="recommendation" id="8"><label for="8">8</label></div>
                                <div><input type="radio" name="recommendation" id="9"><label for="9">9</label></div>
                                <div><input type="radio" name="recommendation" id="10"><label for="10">10</label></div>
                            </div>
                        </div>
                        <div class="rating-input-wrapper my-3">
                            <div class="rating-input-label">
                                Feedback to Expert
                            </div>
                            <div class="rating-input-field-wrapper">
                                <div class="rating-input-field" data-category="Skill">
                                    <input type="radio" name="skill-rating" value="1" id="skill-1" />
                                    <label for="skill-1" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input type="radio" name="skill-rating" value="2" id="skill-2" />
                                    <label for="skill-2" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input type="radio" name="skill-rating" value="3" id="skill-3" />
                                    <label for="skill-3" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input type="radio" name="skill-rating" value="4" id="skill-4" />
                                    <label for="skill-4" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input type="radio" name="skill-rating" value="5" id="skill-5" />
                                    <label for="skill-5" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>
                                </div>
                                <div> Skill</div>
                            </div>

                            <div class="rating-input-field-wrapper">
                                <div class="rating-input-field" data-category="Availability">
                                    <input
                                        type="radio"
                                        name="availability-rating"
                                        value="1"
                                        id="availability-1"
                                    />
                                    <label for="availability-1" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input
                                        type="radio"
                                        name="availability-rating"
                                        value="2"
                                        id="availability-2"
                                    />
                                    <label for="availability-2" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input
                                        type="radio"
                                        name="availability-rating"
                                        value="3"
                                        id="availability-3"
                                    />
                                    <label for="availability-3" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input
                                        type="radio"
                                        name="availability-rating"
                                        value="4"
                                        id="availability-4"
                                    />
                                    <label for="availability-4" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input
                                        type="radio"
                                        name="availability-rating"
                                        value="5"
                                        id="availability-5"
                                    />
                                    <label for="availability-5" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>
                                </div>
                                <div> Availability</div>
                            </div>

                            <div class="rating-input-field-wrapper">
                                <div class="rating-input-field" data-category="Communication">
                                    <input
                                        type="radio"
                                        name="communication-rating"
                                        value="1"
                                        id="communication-1"
                                    />
                                    <label for="communication-1" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input
                                        type="radio"
                                        name="communication-rating"
                                        value="2"
                                        id="communication-2"
                                    />
                                    <label for="communication-2" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input
                                        type="radio"
                                        name="communication-rating"
                                        value="3"
                                        id="communication-3"
                                    />
                                    <label for="communication-3" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input
                                        type="radio"
                                        name="communication-rating"
                                        value="4"
                                        id="communication-4"
                                    />
                                    <label for="communication-4" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input
                                        type="radio"
                                        name="communication-rating"
                                        value="5"
                                        id="communication-5"
                                    />
                                    <label for="communication-5" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>
                                </div>
                                <div> Communication</div>
                            </div>

                            <div class="rating-input-field-wrapper">
                                <div class="rating-input-field" data-category="Deadlines">
                                    <input
                                        type="radio"
                                        name="deadlines-rating"
                                        value="1"
                                        id="deadlines-1"
                                    />
                                    <label for="deadlines-1" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input
                                        type="radio"
                                        name="deadlines-rating"
                                        value="2"
                                        id="deadlines-2"
                                    />
                                    <label for="deadlines-2" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input
                                        type="radio"
                                        name="deadlines-rating"
                                        value="3"
                                        id="deadlines-3"
                                    />
                                    <label for="deadlines-3" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input
                                        type="radio"
                                        name="deadlines-rating"
                                        value="4"
                                        id="deadlines-4"
                                    />
                                    <label for="deadlines-4" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>

                                    <input
                                        type="radio"
                                        name="deadlines-rating"
                                        value="5"
                                        id="deadlines-5"
                                    />
                                    <label for="deadlines-5" onclick="setRating(this)">
                                        <x-icon.star-fill fill="#E7E5EF" />
                                    </label>
                                </div>
                                <div> Set Reasobavle Deadlines</div>
                            </div>

                            <div class="rating-input-total"> <span class="fw-medium">Total Score:</span>  <x-icon.star-fill width="16" height="16" fill="#EAA800"/> <span>5.0</span></div>

                        </div>
                        <x-form.check wire:model="terms">
                            If any check thing we need
                        </x-form.check>
                        <div class="d-flex gap-3 mt-20 pt-20 justify-content-end border-top">
                            <button style="width: 130px" class="btn btn-md btn-outline-gray">Cancel</button>
                            <button  class="btn btn-md btn-primary">End Contract</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script>
        function setRating(element) {
            // Add "active" class to the clicked element
            element.classList.add("active");

            // Get the parent element and its data-category attribute
            var parentElement = element.parentElement;
            var category = parentElement.getAttribute("data-category");

            // Get all the siblings of the parent element
            var siblings = Array.from(parentElement.children);

            // Remove "active" class from all siblings
            siblings.forEach(function (sibling) {
                if (sibling !== element) {
                    sibling.classList.remove("active");
                }
            });

            // Add "rating-selected" class to the parent element
            parentElement.classList.add("rating-selected");

            // Log the selected rating and category (for demonstration purposes)
            console.log(
                "Category:",
                category,
                "Rating:",
                element.previousElementSibling.value
            );
        }
    </script>
@endsection
