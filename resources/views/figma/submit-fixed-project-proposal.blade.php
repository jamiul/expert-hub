@extends('frontend.layouts.figma', ['header' => 'client'])
@section('content')
    <div class="my-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="title-page-wrapper">
                        <div class="title-page-header border-bottom">
                            <h1 class="h5 d-flex align-items-center gap-2 mb-2">
                                <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                Developing curriculum for Postgraduate public health
                                unit
                            </h1>
                            <div
                                class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                                <div
                                    class="project-details-meta-data d-flex align-items-center gap-2 justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <x-icon.clock width="20" height="20" fill="#0036E3"/>
                                            15 hours ago
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <x-icon.tag fill="#0036E3"/>
                                            Curriculum development
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <x-icon.flag fill="#0036E3"/>
                                            Hourly: $200.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title-page-body p-40">
                            <p class="mb-0">
                                Seeking an experienced Curriculum Developer to create a cutting-edge curriculum
                                for our postgraduate public health unit. You will collaborate with our team to
                                design a comprehensive curriculum that aligns with industry trends and academic
                                standards. Your role involves conducting research, developing course materials,
                                and crafting assessments that foster critical thinking and practical skills. The
                                ideal candidate will have a strong background in public health education, and
                                curriculum design. and a passion for advanced higher education. join us in
                                shaping the future of public health education and making a lasting impact on
                                students' careers.
                            </p>
                            <div class="tag-list light-tag-list mt-40 ">
                                <a href="#" class="tag">Communication Skills</a>
                                <a href="#" class="tag">Industry Treds Awareness</a>
                                <a href="#" class="tag"> Research</a>
                                <a href="#" class="tag">System Research Development</a>
                                <a href="#" class="tag">Communication </a>
                                <a href="#" class="tag">Industry Treds</a>
                                <a href="#" class="tag">Educational Research</a>
                                <a href="#" class="tag">System Development</a>
                            </div>
                            <!--Contact Terms-->
                            <div class="card my-40">
                                <div x-data="{ fixedProjectType: 'wholeProject' }"
                                     class="card-body">
                                    <h3 class="h6 mb-3">Contact Terms</h3>

                                    <!-- Radio buttons for Hourly and Fixed -->
                                    <div class="contact-type-card-wrapper mb-3">
                                        <div class="contact-type-card">
                                            <input type="radio" name="fixedProjectType"
                                                   id="milestone-project" class="d-none"
                                                   value="milestoneProject" x-model="fixedProjectType">
                                            <label class="contact-type-card-inner" for="milestone-project">
                                                <div>
                                                    <span class="radio-field-icon"></span>
                                                </div>
                                                <div>
                                                    <h4 class="h6">By milestone</h4>
                                                    <p class="text-sm mb-0">Divide the project into smaller segments,
                                                        called milestones. You'll be paid for milestones as they are
                                                        completed and approved</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="contact-type-card">
                                            <input type="radio" name="fixedProjectType" id="whole-project"
                                                   class="d-none"
                                                   value="wholeProject" x-model="fixedProjectType">
                                            <label class="contact-type-card-inner" for="whole-project">
                                                <div>
                                                    <span class="radio-field-icon"></span>
                                                </div>
                                                <div>
                                                    <h4 class="h6">By project</h4>
                                                    <p class="text-sm mb-0">Get your entire payment at the end, when all
                                                        work has been delivered.</p>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Show content based on selected contactType -->


                                    <div x-show="fixedProjectType === 'milestoneProject'">
                                        <!-- Content for milestoneProject -->
                                        <h3 class="text-base mb-2">How many milestones do you want to
                                            include?
                                            <span class="tooltip-wrapper bottom-left">
                                                <x-icon.info fill="#BABABA"/>
                                                <span class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                            </span>
                                        </h3>
                                        <div class="mb-2">
                                            <div class="proposed-milestone-field-group">
                                                <div>
                                                    <x-form.input type="text" label="Milestone Description"
                                                                  wire:model="type"
                                                                  placeholder="Type" value="Expert"/>
                                                </div>
                                                <div>
                                                    <x-form.flatpicker label="Due Date"
                                                                       name="datepicker"/>
                                                </div>
                                                <div>
                                                    <x-form.input type="text" label="Deposit Amount"
                                                                  wire:model="type" placeholder="$0.00"
                                                                  value=""/>
                                                </div>
                                                <div>
                                                    <button>
                                                        <x-icon.cancel fill="#002CB9"/>
                                                    </button>

                                                </div>
                                            </div> <!--proposed-milestone-field-group-->
                                            <div class="proposed-milestone-field-group">
                                                <div>
                                                    <x-form.input type="text" label="Milestone Description"
                                                                  wire:model="type"
                                                                  placeholder="Type" value="Expert"/>
                                                </div>
                                                <div>
                                                    <x-form.flatpicker label="Due Date"
                                                                       name="datepicker"/>
                                                </div>
                                                <div>
                                                    <x-form.input type="text" label="Deposit Amount"
                                                                  wire:model="type" placeholder="$0.00"
                                                                  value=""/>
                                                </div>
                                                <div>
                                                    <button>
                                                        <x-icon.cancel fill="#002CB9"/>
                                                    </button>

                                                </div>
                                            </div> <!--proposed-milestone-field-group-->
                                        </div>
                                        <button class="btn btn-link d-flex align-items-center px-0 gap-2">
                                            <x-icon.add-circle fill="#0036E3"/>
                                            Add Milestones
                                        </button>
                                        <div class="proposed-milestone-offer-summary mt-40">
                                            <div class="milestone-offer-summary-item">
                                                <h4>Total project value</h4>
                                                <p class="mb-0">$0.00</p>
                                                <p class="mb-0">This includes all milestones, and is the amount your
                                                    client will
                                                    see</p>
                                            </div>
                                            <div class="milestone-offer-summary-item">
                                                <h4>Platform Fee</h4>
                                                <p class="mb-0">$0.00</p>
                                                <p class="mb-0">Platform fee 10%</p>
                                            </div>
                                            <div class="milestone-offer-summary-item">
                                                <h4>You will receive</h4>
                                                <p class="mb-0">$0.00</p>
                                                <p class="mb-0">Your estimated payment, after service fees</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div x-show="fixedProjectType === 'wholeProject'">
                                        <!-- Content for wholeProject -->
                                        <div class="project-bid-area" style="max-width: 740px">
                                            <h3 class="mb-2 text-base">What is the full amount you'd like to offer for
                                                this job?</h3>

                                            <div class="service-fee-input-area">
                                                <div class="service-fee-input-row border-bottom">
                                                    <div class="service-fee-description">
                                                        <p class="fw-medium mb-1">Project Value</p>
                                                        <p class="mb-1 text-sm">Total amount the client will see on your
                                                            proposal</p>
                                                    </div>
                                                    <div class="service-fee-input">
                                                        <input type="text"
                                                               class="input-field-control input-field-control-lg"
                                                               placeholder="$0.00" value="150.00">
                                                    </div>
                                                </div>
                                                <div class="service-fee-input-row border-bottom">
                                                    <div class="service-fee-description">
                                                        <p class="fw-medium mb-1">Platform Fee</p>
                                                    </div>
                                                    <div class="service-fee-input">
                                                        <input type="text"
                                                               class="input-field-control input-field-control-lg"
                                                               placeholder="$0.00" value="-15.00" disabled>
                                                    </div>
                                                </div>
                                                <div class="service-fee-input-row">
                                                    <div class="service-fee-description">
                                                        <p class="fw-medium mb-1">You'll receive</p>
                                                        <p class="mb-1 text-sm">The estimated amount you'll receive
                                                            after service fees</p>
                                                    </div>
                                                    <div class="service-fee-input">
                                                        <input type="text"
                                                               class="input-field-control input-field-control-lg"
                                                               placeholder="$0.00" value="135.00" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="card mb-40">
                                <div class="card-body">
                                    <h3 class="mb-2 text-base">How long will this project take?</h3>
                                    <div style="max-width: 256px">
                                        <x-form.select label="Project Duration" wire:model="title">
                                            <option value="">Select Duration</option>
                                            <option value="Mr">15 Days</option>
                                            <option value="Mrs">30 days</option>
                                            <option value="Dr">90 Days</option>
                                            <option value="Prof">180 Days</option>
                                        </x-form.select>
                                    </div>
                                </div>
                            </div>
                            <!----Additional details---->
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="mb-4 text-base">Additional details</h3>
                                    <x-form.textarea label="Cover Letter" wire:model="bio" placeholder="max 200 words"/>

                                    <div class="image-upload-flat">
                                        <label for="upload-file" class="text-center">
                                            <span> <x-icon.document-upload fill="#0059C999"/> </span>
                                            <span class="fw-medium">Clik to upload or drag & drop</span>
                                            <span class="text-sm">You may attach up to 10 files under the size of 25 MB each. Include work samples or other documents to support your application. Do not attach your resume — your profile is automatically forwarded to the client with your proposal. </span>

                                        </label>
                                        <input type="file" id="upload-file" class="d-none">
                                    </div>
                                </div>
                            </div>
                            <x-form.check wire:model="terms" class="mt-20 project-eoi-trams-condition">
                                Yes, I understand and agree to the <a href="">Expert Gate Terms of Service</a>, including
                                the
                                <a href="">User Agreement</a> and <a href="">Privacy Policy</a>.
                            </x-form.check>
                            <button class="btn btn-primary btn-md mt-20 project-eoi-submit-btn"> Submit EOI</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
@endsection
