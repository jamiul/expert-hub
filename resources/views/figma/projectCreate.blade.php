@extends('frontend.layouts.front-layout')

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
                                <div class="step step-1 mb-4">
                                    <div class="main-form">
                                        <x-form.input type="text" label="What is your project title?" wire:model="title" placeholder="Academic content writer"/>
                                    </div>
                                </div>
                                <div class="step step-2 mb-4">
                                    <div class="main-form position-relative">
                                    <x-form.textarea label="Project Description" wire:model="bio" placeholder="Bio">
                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this
                                    </x-form.textarea>
                                    <span class="edux-word-count">0/1000</span>
                                        </div>
                                    </div>


                                    <div class="upload-file">
                                        <label class="btn btn-default btn-file d-flex justify-content-center flex-column basic-file-upload gap-2">
                                        <span>
                                            <input type="file" style="display: none;" required="">
                                        </span>
                                        <span class="edux-blog-upload"> <a href="#"><img src=" {{ asset('assets/frontend/img/upload-icon.png') }}"></a></span>
                                        <h6 class="edux-click">Click to upload or drag & drop</h6>
                                        <p>Drag & drop any images or documents that might be helpful in explaining your brief here</p>
                                    </label>
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

                                </div>
                                <div class="step step-3">
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
                                                        <div class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center">Lorem<img class="ps-2" src="{{ asset('assets/frontend/img/close-i.png') }}"></div>
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
                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                            <div class="hourly-check">
                                                                <input type="radio" class="btn-check" wire:model="type" value="hourly" id="btnradio1" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btnradio1">
                                                                    <div class="currency-img">
                                                                        <img src="{{ asset('assets/frontend/img/hourly.png') }}"/>
                                                                    </div>
                                                                    <div class="pay-rate">
                                                                        <h3>Hourly rate</h3>
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
                                                            <input type="radio" class="btn-check" wire:model="type" value="fixed" id="btnradio2" autocomplete="off">
                                                            <label class="btn btn-outline-primary" for="btnradio2">
                                                                <div class="currency-img">
                                                                    <img src="{{ asset('assets/frontend/img/fixed.png') }}"/>
                                                                </div>
                                                                <div class="pay-rate">
                                                                    <h3>Fixed price</h3>
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
                                            <div class="d-flex gap-4">
                                                <div class="input-group mb-0 d-none" style="width: 120px">
                                                    <select wire:model.change="currency" class="form-select form-control">
                                                        <option value="USD">USD</option>
                                                        <option value="AUD">AUD</option>
                                                    </select>
                                                </div>
                                                <x-form.input type="number" min="0" label="Start Amount" wire:model="budget_start_amount" placeholder="Type Here"/>
                                                <x-form.input type="number" min="0" label="End Amount" wire:model="budget_end_amount" placeholder="Type Here"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step step-7">
                                    <div class="main-form">
                                        <div class="correction-block">
                                            <h3>Are these details correct?</h3>
                                            <div class="correction-preview">
                                                <div class="discription-view">
                                                    <p>Lorem Ipsum description</p>
                                                </div>
                                                <div class="tags-preview">
                                                    <div class="bootstrap-tagsinput">
                                                        <div class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center">Agriculture<img class="ps-2" src="{{ asset('assets/frontend/img/close-i.png') }}"></div>

                                                        <div class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center">Agriculture<img class="ps-2" src="{{ asset('assets/frontend/img/close-i.png') }}"></div>

                                                        <div class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center">Agriculture<img class="ps-2" src="{{ asset('assets/frontend/img/close-i.png') }}"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rate-preview">
                                                    <div class="currency-img">
                                                        <img src="{{ asset('assets/frontend/img/hourly.png') }}"/>
                                                    </div>
                                                    <div class="pay-ratee">
                                                        <h4>Price per hour</h4>
                                                        <p>$100 - $200</p>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-buttons">
                                    <button wire:click="next" type="button" class="edux-btn-primary">Continue</button>
                                </div>
                                <div class="form-buttons">
                                    <button type="submit" class="edux-btn-primary">Yes Post my Project</button>
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