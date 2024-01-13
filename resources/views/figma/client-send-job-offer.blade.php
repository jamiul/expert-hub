@extends('frontend.layouts.front-client-dashboard-layout')

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="title-page-wrapper client-send-offer-page">
                        <div class="title-page-header pb-0">
                            <h1 class="h5 mb-20">Send offer</h1>
                        </div>
                        <div class="title-page-body px-40">
                            <div class="project-expert-card mb-40">
                                <div class="project-expert-thumb">
                                    <div class="expert-thumb-box">
                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                    </div>
                                </div>
                                <div class="project-expert-details">
                                    <div class="expert-card-header">
                                        <div class="expert-card-header-info">
                                            <h3 class="h6 project-expert-name mb-0">Professor Miles Esther</h3>
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
                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!--project-expert-card-->
                            <div class="card card-24 mb-40">
                                <div class="card-body">
                                    <h3 class="h6 mb-3">Details</h3>
                                    <x-form.choice-static wire:model="titles" label="Select single static">
                                        <option value="Mr">Dr. Mohammad Riyadh</option>

                                    </x-form.choice-static>
                                    <x-form.choice-static wire:model="titles" label="Select single static">
                                        <option value="Mr">Developing curriculum for Postgraduate public health unit
                                        </option>
                                        <option value="Mrs">Project 2</option>

                                    </x-form.choice-static>
                                    <x-form.input type="text" label="Type" wire:model="type" placeholder="Type"
                                                  value="Expert"/>
                                </div>
                            </div>
                            <!--Project Details-->
                            <div class="card mb-40">
                            <div x-data="{ contactType: 'fixed', fixedProjectType: 'wholeProject' }" class="card-body">
                                <h3 class="h6 mb-3">Contact Terms</h3>

                                <!-- Radio buttons for Hourly and Fixed -->
                                <div class="contact-type-card-wrapper mb-3">
                                    <div class="contact-type-card">
                                        <input type="radio" name="contactType" value="hourly" id="hourly" class="d-none"
                                               x-model="contactType">
                                        <label class="contact-type-card-inner" for="hourly">
                                            <div>
                                                <x-icon.hourly-rate/>
                                            </div>
                                            <div>
                                                <h4 class="h6">Hourly rate</h4>
                                                <p class="text-sm mb-0">Select freelancers based on their hourly rates
                                                    and pay for the hours worked</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="contact-type-card">
                                        <input type="radio" name="contactType" value="fixed" id="fixed" class="d-none"
                                               x-model="contactType">
                                        <label class="contact-type-card-inner" for="fixed">
                                            <div>
                                                <x-icon.fixed-rate/>
                                            </div>
                                            <div>
                                                <h4 class="h6">Fixed price</h4>
                                                <p class="text-sm mb-0">Agree on a price upfront, then release payment
                                                    upon project completion</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <!-- Show content based on selected contactType -->
                                <div x-show="contactType === 'hourly'" class="hourly-offer-content">
                                    <h3>I am hourly</h3>
                                </div>

                                <div x-show="contactType === 'fixed'" class="fixed-price-offer-content">
                                    <!-- Fixed Price Content -->
                                    <div class="form-input-group">
                                        <label class="form-input-label">Pay a fixed price for your project
                                            <div class="tooltip-wrapper bottom-left">
                                                <x-icon.info fill="#BABABA"/>
                                                <span class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur</span>
                                            </div>
                                        </label>
                                        <input name="type" id="type" class="form-input-field" type="text"
                                               placeholder="Type" value="$100">
                                        <span class="text-sm py-1">This is the price you and Professor Miles Esther’s have agreed upon </span>
                                    </div>

                                    <!-- Radio buttons for FixedProjectType -->
                                    <div class="form-radio-group">
                                        <label class="form-radio-label"
                                               @click="fixedProjectType = (fixedProjectType === 'wholeProject') ? 'milestoneProject' : 'wholeProject'">
                                            Deposit funds into Escrow
                                            <div class="tooltip-wrapper bottom-left">
                                                <x-icon.info fill="#BABABA"/>
                                                <span class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                            </div>
                                        </label>
                                        <div class="form-radio-options">
                                            <div class="form-radio-option">
                                                <input type="radio" name="fixedProjectType" id="whole-project"
                                                       class="form-radio-field form-check-input"
                                                       value="wholeProject" x-model="fixedProjectType">
                                                <label class="form-radio-title" for="whole-project">Deposit $0.00 for
                                                    the
                                                    whole project</label>
                                            </div>
                                            <div class="form-radio-option">
                                                <input type="radio" name="fixedProjectType"
                                                       id="milestone-project"
                                                       class="form-radio-field form-check-input"
                                                       value="milestoneProject" x-model="fixedProjectType">
                                                <label class="form-radio-title" for="milestone-project">Deposit a lesser
                                                    amount to cover the first milestone</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Show content based on selected fixedProjectType -->

                                        <div x-show="fixedProjectType === 'wholeProject'">
                                            <!-- Content for wholeProject -->
                                            <x-form.flatpicker tooltip="Lorem ipsum dolor sit amet" label="Start Date"
                                                               name="datepicker"/>
                                        </div>



                                        <div x-show="fixedProjectType === 'milestoneProject'">
                                            <!-- Content for milestoneProject -->
                                            <p class="input-field-label d-inline">Project Milestones
                                            <div class="tooltip-wrapper bottom-left">
                                                <x-icon.info fill="#BABABA"/>
                                                <span class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                            </div>
                                            </p>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <x-form.input type="text" label="Type" wire:model="type"
                                                                  placeholder="Type" value="Expert"/>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <x-form.flatpicker label="Due Date"
                                                                               name="datepicker"/>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <x-form.input type="text" label="Deposit Amount"
                                                                          wire:model="type" placeholder="$0.00"
                                                                          value=""/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-link d-flex align-items-center px-0 gap-2">
                                                <x-icon.add fill="#0036E3"/>
                                                Add Milestones
                                            </button>

                                        </div>

                                </div>
                            </div>
                            </div>

                            <!--Contact Terms-->
                            <!--Project Details-->
                            <div class="card card-24 mb-40">
                                <div class="card-body">
                                    <h3 class="h6 mb-3">How do fixed price contact work?</h3>
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                        mornings of spring which I enjoy with my whole heart. I am alone, and feel the
                                        charm of existence in this spot, which was created for the bliss of souls like
                                        mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere
                                        tranquil existence</p>
                                </div>
                            </div>
                            <div class="card card-24 mb-40">
                                <div class="card-body">
                                    <h3 class="h6 mb-3">Work Details</h3>
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                        mornings of spring which I enjoy with my whole heart. I am alone, and feel the
                                        charm of existence in this spot, which was created for the bliss of souls like
                                        mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere
                                        tranquil... <a href="" class="text-decoration-underline">More</a></p>
                                    <input type="file" id="upload-file" class="d-none">
                                    <label for="upload-file"
                                           class="btn btn-outline-gray btn-rounded d-inline-flex align-items-center">
                                        <span style="transform: rotate(40deg)"><x-icon.attach-file
                                                fill="#A1A0A5"/></span> Attach File</label>
                                </div>
                            </div>
                            <x-form.check wire:model="terms">
                                Yes, I understand and agree to the EduExHub Terms of Service, including the User
                                Agreement and Privacy Policy.
                            </x-form.check>

                            <div class="mb-40">
                                <button class="btn btn-md btn-outline-primary my-2 me-2">Back</button>
                                <button class="btn btn-md btn-primary my-2">Submit</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
    <!-- Or versioned -->
    <script src="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/scripts/choices.min.js"></script>
    <!-- Include Choices CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"
    />
@endsection
