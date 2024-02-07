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
                            <div class="tag-list light-tag-list mt-40">
                                <a href="#" class="tag">Communication Skills</a>
                                <a href="#" class="tag">Industry Treds Awareness</a>
                                <a href="#" class="tag"> Research</a>
                                <a href="#" class="tag">System Research Development</a>
                                <a href="#" class="tag">Communication </a>
                                <a href="#" class="tag">Industry Treds</a>
                                <a href="#" class="tag">Educational Research</a>
                                <a href="#" class="tag">System Development</a>
                            </div>
                            <div class="project-bid-area mt-40 mb-20" style="max-width: 740px">
                                <h3 class="mb-2 text-base">What is the rate you'd like to bid for this job?</h3>

                                <div class="d-flex align-items-center text-sm gap-4">
                                    <div class="">
                                        Your profile rate: <strong class="fw-medium">$150.00</strong> /hr
                                    </div>
                                    <div class="">
                                        Client’s budget: <strong class="fw-medium">$200.00</strong> /hr
                                    </div>

                                </div>

                                <div class="service-fee-input-area">
                                    <div class="service-fee-input-row">
                                        <div class="service-fee-description">
                                            <p class="fw-medium mb-1">Hourly Rate</p>
                                            <p class="mb-1 text-sm">Total amount the client will see on your EOI</p>
                                        </div>
                                        <div class="service-fee-input">
                                            <div class="d-flex gap-4 align-items-center">
                                                <div>
                                                    /hr
                                                </div>
                                                <div>
                                                    <input type="text"
                                                           class="input-field-control input-field-control-lg"
                                                           placeholder="$0.00" value="150.00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-fee-input-row">
                                        <div class="service-fee-description">
                                            <p class="fw-medium mb-1">10% Platform Fee</p>
                                        </div>
                                        <div class="service-fee-input">
                                            <div class="d-flex gap-4 align-items-center">
                                                <div>
                                                    /hr
                                                </div>
                                                <div>
                                                    <input type="text"
                                                           class="input-field-control input-field-control-lg"
                                                           placeholder="$0.00" value="-15.00" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-fee-input-row">
                                        <div class="service-fee-description">
                                            <p class="fw-medium mb-1">You'll receive</p>
                                            <p class="mb-1 text-sm">The estimated amount you'll receive after service fees</p>
                                        </div>
                                        <div class="service-fee-input">
                                            <div class="d-flex gap-4 align-items-center">
                                                <div>
                                                    /hr
                                                </div>
                                                <div>
                                                    <input type="text"
                                                           class="input-field-control input-field-control-lg"
                                                           placeholder="$0.00" value="135.00" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                            <x-form.check wire:model="terms" class="mt-20 project-eoi-trams-condition text-sm">
                                Yes, I understand and agree to the <a href="">Expert Gate Terms of Service</a>, including
                                the
                                <a href="">User Agreement</a> and <a href="">Privacy Policy</a>.
                            </x-form.check>
                            <button class="btn border-2 btn-outline-primary btn-md mt-20 project-eoi-submit-btn me-3"> Cancel</button>
                            <button class="btn btn-primary btn-md mt-20 project-eoi-submit-btn"> Submit</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
