@extends('frontend.layouts.figma', ['header' => 'client'])

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="title-page-wrapper">
                <div class="title-page-header pb-3">
                    <h1 class="h5 m-0">All Contract</h1>
                </div>
                <div class="title-page-body project-tab" x-data="{ activeTab: 'in-progress-contract' }">
                    <div class="tab-nav">
                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'in-progress-contract' }"
                                @click="activeTab = 'in-progress-contract'">In progress (23)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'dispute-contract' }"
                                @click="activeTab = 'dispute-contract'">Dispute (3)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'on-hold-contract' }"
                                @click="activeTab = 'on-hold-contract'">On hold (34)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'cancel-contract' }"
                                @click="activeTab = 'cancel-contract'">Cancel (34)
                        </button>

                        <button class="tab-nav-item" :class="{ 'active': activeTab === 'completed-contract' }"
                                @click="activeTab = 'completed-contract'">Completed (34)
                        </button>

                    </div>
                    <div class="tab-content pt-40">
                        <div x-show="activeTab === 'in-progress-contract'" id="in-progress-tab-content">
                            <div class="seller-admin-project-filter py-20 px-40 border-bottom">

                                <x-form.select class="input-field-md" wire:model="title">
                                    <option value="Mr">All</option>
                                    <option value="Mrs">Hourly Contract</option>
                                    <option value="Mrs">Fixed Contract</option>
                                </x-form.select>
                                <x-form.flatpicker class="input-field-md" name="datepicker"/>

                                <div class="input-group">
                                    <input type="text" class="input-field-control input-field-control-md"
                                           placeholder="Search by contract, client, or company">
                                    <button class="btn btn-primary">
                                        <x-icon.search/>
                                    </button>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table text-sm table-extra-padding seller-project-table">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1">ID: 7557uy8675656</p>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical
                                                Engineering Industry</p>
                                            <p class="mb-1">From: Sep 23 to Present</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Total: 1:40 hrs $140</p>
                                            <p class="mb-1">$100.00/hr, 25 hrs weekly limit</p>

                                        </td>
                                        <td>
                                            <div class="d-flex gap-3 align-item-center">
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
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="icon-btn border" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    <x-icon.three-dots/>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                           href="/figma/project/view-expert-work-dairy">
                                                            View Work Dairy</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item" href="/figma/client-chatbox-new/">Message
                                                            Expert</a>
                                                    </li>

                                                    <li><a class="dropdown-item" data-bs-toggle="modal"
                                                           data-bs-target="#disputeModal" href="#">Dispute</a></li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Contact Support</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">End Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1">ID: 7557uy8675656</p>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical
                                                Engineering Industry</p>
                                            <p class="mb-1">From: Sep 23 to Present</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Total: 1:40 hrs $140</p>
                                            <p class="mb-1">$100.00/hr, 25 hrs weekly limit</p>

                                        </td>
                                        <td>
                                            <div class="d-flex gap-3 align-item-center">
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
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="icon-btn border" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    <x-icon.three-dots/>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                           href="/figma/project/view-expert-work-dairy">
                                                            View Work Dairy</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item" href="/figma/client-chatbox-new/">Message
                                                            Expert</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Dispute</a></li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Contact Support</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">End Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1">ID: 7557uy8675656 <span
                                                    class="badge badge-primary-light ms-3 d-inline-flex align-items-center gap-2"> <x-icon.video
                                                        fill="#0036E3" width="18" height="18"/> Consultation</span></p>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical
                                                Engineering Industry</p>
                                            <p class="mb-1">From: Sep 23 to Present</p>
                                            <a class="btn btn-primary" href="">Zoom Link</a>
                                        </td>
                                        <td>
                                            <p class="mb-1">Fixed: $1000.00</p>
                                            <p class="mb-1 fw-medium">Escrow: $1000.00</p>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-3 align-item-center">
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
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="icon-btn border" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    <x-icon.three-dots/>
                                                </button>
                                                <ul class="dropdown-menu">

                                                    <li>
                                                        <a class="dropdown-item" href="/figma/client-chatbox-new/">Message
                                                            Expert</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Dispute</a></li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Contact Support</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">End Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                            <div class="text-center py-40">
                                Pagination here
                            </div>
                        </div>
                        <div x-show="activeTab === 'dispute-contract'" id="dispute-tab-content">
                            <div class="seller-admin-project-filter py-20 px-40 border-bottom">

                                <x-form.select class="input-field-md" wire:model="title">
                                    <option value="Mr">All</option>
                                    <option value="Mrs">Hourly Contract</option>
                                    <option value="Mrs">Fixed Contract</option>
                                </x-form.select>
                                <x-form.flatpicker class="input-field-md" name="datepicker"/>

                                <div class="input-group">
                                    <input type="text" class="input-field-control input-field-control-md"
                                           placeholder="Search by contract, client, or company">
                                    <button class="btn btn-primary">
                                        <x-icon.search/>
                                    </button>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table text-sm table-extra-padding seller-project-table">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1">ID: 7557uy8675656</p>
                                            <p class="mb-1 fw-medium">Assistance Required for Chemical Engineering</p>
                                            <p class="mb-1">From: Sep 23 to Present</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Total: 1:40 hrs $140</p>
                                            <p class="mb-1">$100.00/hr, 25 hrs weekly limit</p>
                                            <button class="btn btn-link p-0 text-decoration-underline">Reason for
                                                dispute
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-3 align-item-center">
                                                <div class="expert-thumb">
                                                    <img style="width: 40px"
                                                         src="{{ asset('assets/frontend/img/consultant2.png') }}"/>
                                                </div>
                                                <div class="expert-info">
                                                    <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                                        Riyadh </p>
                                                    <p class=" mb-0">Public Health </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="icon-btn border" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    <x-icon.three-dots/>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                           href="/figma/project/view-expert-work-dairy">
                                                            View Work Dairy</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="/figma/client-chatbox-new/">Message
                                                            Client</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Contact Support</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1">ID: 7557uy8675656 </p>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical
                                                Engineering Industry</p>
                                            <p class="mb-1">From: Sep 23 to Present</p>

                                        </td>
                                        <td>
                                            <p class="mb-1">Fixed: $1000.00</p>
                                            <button class="btn btn-link p-0 text-decoration-underline">Reason for
                                                dispute
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-3 align-item-center">
                                                <div class="expert-thumb">
                                                    <img style="width: 40px"
                                                         src="{{ asset('assets/frontend/img/consultant3.png') }}"/>
                                                </div>
                                                <div class="expert-info">
                                                    <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                                        Riyadh </p>
                                                    <p class=" mb-0">Public Health </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="icon-btn border" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    <x-icon.three-dots/>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                           href="/figma/project/view-expert-work-dairy">
                                                            View Work Dairy</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="/figma/client-chatbox-new/">Message
                                                            Client</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Contact Support</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                            <div class="text-center py-40">
                                Pagination here
                            </div>
                        </div>
                        <div x-show="activeTab === 'on-hold-contract'" id="on-hold-tab-content">
                            <div class="seller-admin-project-filter py-20 px-40 border-bottom">

                                <x-form.select class="input-field-md" wire:model="title">
                                    <option value="Mr">All</option>
                                    <option value="Mrs">Hourly Contract</option>
                                    <option value="Mrs">Fixed Contract</option>
                                </x-form.select>
                                <x-form.flatpicker class="input-field-md" name="datepicker"/>

                                <div class="input-group">
                                    <input type="text" class="input-field-control input-field-control-md"
                                           placeholder="Search by contract, client, or company">
                                    <button class="btn btn-primary">
                                        <x-icon.search/>
                                    </button>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table text-sm table-extra-padding seller-project-table">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1">ID: 7557uy8675656</p>
                                            <p class="mb-1 fw-medium">Assistance Required for Chemical Engineering</p>
                                            <p class="mb-1">From: Sep 23 to Present</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Total: 1:40 hrs $140</p>
                                            <p class="mb-1">$100.00/hr, 25 hrs weekly limit</p>
                                            <button class="btn btn-link p-0 text-decoration-underline">Reason for
                                                on-hold
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-3 align-item-center">
                                                <div class="expert-thumb">
                                                    <img style="width: 40px"
                                                         src="{{ asset('assets/frontend/img/consultant2.png') }}"/>
                                                </div>
                                                <div class="expert-info">
                                                    <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                                        Riyadh </p>
                                                    <p class=" mb-0">Public Health </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="icon-btn border" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    <x-icon.three-dots/>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                           href="/figma/project/view-expert-work-dairy">
                                                            View Work Dairy</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="/figma/client-chatbox-new/">Message
                                                            Client</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Contact Support</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1">ID: 7557uy8675656 </p>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical
                                                Engineering Industry</p>
                                            <p class="mb-1">From: Sep 23 to Present</p>

                                        </td>
                                        <td>
                                            <p class="mb-1">Fixed: $1000.00</p>
                                            <button class="btn btn-link p-0 text-decoration-underline">Reason for
                                                on-hold
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-3 align-item-center">
                                                <div class="expert-thumb">
                                                    <img style="width: 40px"
                                                         src="{{ asset('assets/frontend/img/consultant3.png') }}"/>
                                                </div>
                                                <div class="expert-info">
                                                    <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                                        Riyadh </p>
                                                    <p class=" mb-0">Public Health </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="icon-btn border" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    <x-icon.three-dots/>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                           href="/figma/project/view-expert-work-dairy">
                                                            View Work Dairy</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="/figma/client-chatbox-new/">Message
                                                            Client</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Contact Support</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                            <div class="text-center py-40">
                                Pagination here
                            </div>
                        </div>
                        <div x-show="activeTab === 'cancel-contract'" id="cancel-tab-content">
                            <div class="seller-admin-project-filter py-20 px-40 border-bottom">

                                <x-form.select class="input-field-md" wire:model="title">
                                    <option value="Mr">All</option>
                                    <option value="Mrs">Hourly Contract</option>
                                    <option value="Mrs">Fixed Contract</option>
                                </x-form.select>
                                <x-form.flatpicker class="input-field-md" name="datepicker"/>

                                <div class="input-group">
                                    <input type="text" class="input-field-control input-field-control-md"
                                           placeholder="Search by contract, client, or company">
                                    <button class="btn btn-primary">
                                        <x-icon.search/>
                                    </button>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table text-sm table-extra-padding seller-project-table">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1">ID: 7557uy8675656</p>
                                            <p class="mb-1 fw-medium">Assistance Required for Chemical Engineering</p>
                                            <p class="mb-1">From: Sep 23 to Present</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">Total: 1:40 hrs $140</p>
                                            <p class="mb-1">$100.00/hr, 25 hrs weekly limit</p>
                                            <button class="btn btn-link p-0 text-decoration-underline">Reason for
                                                cancel
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-3 align-item-center">
                                                <div class="expert-thumb">
                                                    <img style="width: 40px"
                                                         src="{{ asset('assets/frontend/img/consultant2.png') }}"/>
                                                </div>
                                                <div class="expert-info">
                                                    <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                                        Riyadh </p>
                                                    <p class=" mb-0">Public Health </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1">ID: 7557uy8675656 </p>
                                            <p class="mb-1 fw-medium">Policy Development Assistance Required for
                                                Chemical
                                                Engineering Industry</p>
                                            <p class="mb-1">From: Sep 23 to Present</p>

                                        </td>
                                        <td>
                                            <p class="mb-1">Fixed: $1000.00</p>
                                            <button class="btn btn-link p-0 text-decoration-underline">Reason for
                                                cancel
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-3 align-item-center">
                                                <div class="expert-thumb">
                                                    <img style="width: 40px"
                                                         src="{{ asset('assets/frontend/img/consultant3.png') }}"/>
                                                </div>
                                                <div class="expert-info">
                                                    <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                                        Riyadh </p>
                                                    <p class=" mb-0">Public Health </p>
                                                </div>
                                            </div>
                                        </td>


                                    </tr>

                                </table>
                            </div>

                            <div class="text-center py-40">
                                Pagination here
                            </div>
                        </div>
                        <div x-show="activeTab === 'completed-contract'" id="completed-tab-content">
                            <div class="seller-admin-project-filter py-20 px-40 border-bottom">

                                <x-form.select class="input-field-md" wire:model="title">
                                    <option value="Mr">All</option>
                                    <option value="Mrs">Hourly Contract</option>
                                    <option value="Mrs">Fixed Contract</option>
                                </x-form.select>
                                <x-form.flatpicker class="input-field-md" name="datepicker"/>

                                <div class="input-group">
                                    <input type="text" class="input-field-control input-field-control-md"
                                           placeholder="Search by contract, client, or company">
                                    <button class="btn btn-primary">
                                        <x-icon.search/>
                                    </button>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table text-sm table-extra-padding seller-project-table">

                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1">ID: 7557uy8675656</p>
                                            <p class="mb-1 fw-medium">Assistance Required for Chemical Engineering</p>
                                            <p class="mb-1">From: Sep 23 to Present</p>
                                        </td>
                                        <td>
                                            <button
                                                class="p-1 btn btn-link border-bottom-primary d-flex align-middle gap-2 rounded-0">
                                                <x-icon.comment-fill width="20" height="20" fill="#0036E3"/>
                                                Comment & rating
                                            </button>
                                        </td>
                                        <td>
                                            <p class="mb-1">Fixed: $100.00/hr</p>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-3 align-item-center">
                                                <div class="expert-thumb">
                                                    <img style="width: 40px"
                                                         src="{{ asset('assets/frontend/img/consultant2.png') }}"/>
                                                </div>
                                                <div class="expert-info">
                                                    <p class="fw-medium project-expert-name mb-0">Dr Mohammad
                                                        Riyadh </p>
                                                    <p class="mb-0">Public Health </p>
                                                    <div class="star-ratings">
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                        <x-icon.star-fill/>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                </table>
                            </div>

                            <div class="text-center py-40">
                                Pagination here
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
                                      value="Policy Development Assistance Required for Chemical Engineering Industry"
                                      disabled/>
                        <x-form.select label="Reason of dispute" wire:model="title">
                            <option value="">Select Title</option>
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
                            <button style="width: 130px" class="btn btn-md btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
@endsection
