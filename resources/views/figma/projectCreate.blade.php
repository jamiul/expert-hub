@extends('frontend.layouts.figma', ['header' => 'client'])

@push('top_styles')
    @vite('resources/css/filepond.css')
@endpush

@section('content')
    <div class="site-content">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="job-post-wrapper">
                    <div class="post-shadow-box">
                        <div class="job-post-header">
                            <div class="col-12 p-0">
                                <div class="row m-0 align-items-center">
                                    <div class="col-md-8 col-12 p-0">
                                        <div class="post-header-content">
                                            <div class="consult-heading">
                                                <h2>Hire the best academic experts</h2>
                                                <p>Boost your academic success with us! Share your project details, browse profiles, contact academic experts, and pay only when you are satisfied</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 p-0">
                                        <div class="post-header-image">
                                            <img src="{{ asset('assets/frontend/img/client-hire.png') }}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="job-post-form">
                            <form wire:submit="save">

                            <x-form.select label="What is your project field" wire:model="What is your project field">
                                <option value="">Select options</option>
                                <option value="your project field">your project field</option>
                                <option value="your project field">your project field</option>
                                <option value="your project field">your project field</option>
                                <option value="your project field">your project field</option>
                            </x-form.select>

                                <div class="step step-1 mb-4">
                                    <div class="main-form">
                                        <x-form.input type="text" label="What is your project title?" wire:model="title" placeholder="Academic content writer"/>
                                    </div>
                                </div>


                                <div class="step step-2 mb-4">
                                    <div class="main-form position-relative">
                                    <x-form.textarea label="Project Description" wire:model="bio" placeholder="Bio">
                                        Write description
                                    </x-form.textarea>
                                    <span class="edux-word-count">0/1000</span>
                                        </div>
                                    </div>


                                    <div class="customer-upload">
                                        <div class="upload-file-user">
                                        <div class="upload-file-user-img">
                                            <img src="{{ asset('assets/frontend/img/uploadfile-icon.png') }}"/>
                                        </div>
                                        <div class="upload-file-user-text">
                                            <h4>Customer_file.png</h4>
                                            <p>456 KB    -   21 second left</p>
                                        </div>
                                        </div>
                                        <div class="dust-img">
                                        <x-icon.delete/>
                                        </div>
                                    </div>

                                    <p class="mt-2 mb-0 edux-supported-file">Supported files type: <span>Image, pdf, doc, excel (Max 10 MB)</span></p>

                                </div>
                                <div class="step step-3 mt-3">
                                    <div class="main-form">
                                        <div class="skills">
                                            <h3>What academic skills is required for this project?</h3>
                                            <p>List up to 5 key skills that represent your project. Academic experts will use these skills to match with projects aligned to their interests and expertise.</p>
                                            <div class="form-group position-relative">
                                                <div class="input-group">
                                                    <input wire:keyup="searchSkill" wire:model="skill" class="form-control @error('selectedSkills') has-error @enderror" placeholder="Type the skills & select" type="text">
                                                    @error('selectedSkills')
                                                        <div class="error-message">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <p>Suggestion skills:  <span>Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</span></p>
                                                <div class="pt-2">
                                                        <div class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center">Architecture 1<img class="ps-2" src="{{ asset('assets/frontend/img/close-i.png') }}"></div>
                                                        <div class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center">Architecture 2<img class="ps-2" src="{{ asset('assets/frontend/img/close-i.png') }}"></div>
                                                        <div class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center">LMS 2<img class="ps-2" src="{{ asset('assets/frontend/img/close-i.png') }}"></div>
                                                </div>
                                                    <div class="shadow bg-white position-absolute z-1" style="top:60px;">

                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step step-5">
                                    <div class="main-form">
                                        <div class="hourly-fixed-block">
                                            <h3 class="subheadings">How do you want to pay?</h3>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="rate-box">
                                                        <div class="btn-group d-flex" role="group" aria-label="Basic radio toggle button group">
                                                            <div class="form-radio-option">
                                                                <label class="btn btn-outline-primary active" for="btnradio1">
                                                                    <div class="currency-img">
                                                                        <input type="radio" name="gender" id="btnradio1" class="form-radio-field form-check-input" wire:model="type" value="hourly">
                                                                    </div>
                                                                    <div class="pay-rate">
                                                                        <h3>Hourly</h3>
                                                                        <p>Select freelancers based on their hourly rates and pay for the hours worked</p>
                                                                    </div>
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="rate-box">
                                                        <div class="fixed-check">
                                                            <label class="btn btn-outline-primary" for="btnradio2">
                                                                <div class="currency-img">
                                                                <input type="radio" name="gender" id="btnradio2" class="form-radio-field form-check-input" wire:model="gender" value="fixed">
                                                                </div>
                                                                <div class="pay-rate">
                                                                    <h3>Fixed</h3>
                                                                    <p>Agree on a price upfront, then release payment upon project completion</p>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step step-6">
                                    <div class="main-form">
                                        <div class="budget-block">
                                            <h3>What is your estimate budget?</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            <div class="d-flex gap-4">

                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-input-group">
                                            <label class="form-input-label edux-tooltip-level">Start Amount  <span class="edux-tooltips"> <i><x-icon.info width="20" height="20" fill="#A1A0A5"/></i> <span class="edux-tooltips-details">  Minimum start amount is $50 </span> </span> </label>    <input name="budget_start_amount" id="budget_start_amount" class="form-input-field" type="number" min="0" wire:model="budget_start_amount" placeholder="Type Here">
                                            </div>

                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-input-group">
                                            <label class="form-input-label edux-tooltip-level">End Amount  <span class="edux-tooltips"> <i><x-icon.info width="20" height="20" fill="#A1A0A5"/></i> <span class="edux-tooltips-details">  Minimum start amount is $50 </span> </span> </label>    <input name="budget_start_amount" id="budget_start_amount" class="form-input-field" type="number" min="0" wire:model="budget_start_amount" placeholder="Type Here">
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-button edux-btn-post-job mt-3">
                                    <button type="button" class="btn edux-btn-border-primary">Save As Draft</button>
                                    <button type="button" class="btn btn-primary edux-btn-primary">Post Project</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('bottom_scripts')
    @vite('resources/js/filepond.js')
@endpush
