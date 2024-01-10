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
                                        <x-form.input type="text" label="What is your project title?" wire:model.blur="title" placeholder="Academic content writer"/>
                                    </div>
                                </div>
                                <div class="step step-2 mb-4">
                                    <div class="main-form position-relative">
                                    <x-form.textarea label="Project Description" wire:model.blur="description" placeholder="A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this">
                                    </x-form.textarea>
                                    <span class="edux-word-count">0/1000</span>
                                        </div>
                                    </div>
                                    <div
                                        wire:ignore
                                        x-data
                                        x-init="
                                            FilePond.setOptions({
                                                allowMultiple: true,
                                                server: {
                                                    process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                                        @this.upload('attachments', file, load, error, progress)
                                                    },
                                                    revert: (fileName, load) => {
                                                        @this.removeUpload('attachments', fileName, load)
                                                    },
                                                },
                                                credits: {},
                                                labelIdle: '<strong>Clik to upload or drag & drop</strong> <br> Drag & drop any images or documents that might be helpful in explaining your brief here'
                                            });
                                            FilePond.create($refs.input);
                                        "
                                    >
                                        <input type="file" x-ref="input">
                                    </div>
                                    {{-- <div class="customer-upload">
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
                                    </div> --}}

                                </div>
                                <div class="step step-3 mt-3">
                                    <x-form.choice wire:model.change="expertise_id" label="Expertise Field">
                                        <option value="">Select Expertise Field</option>
                                        @foreach ($availableExpertiseFields as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </x-form.choice>
                                </div>
                                <div class="step step-3 mt-3">
                                    <div class="main-form">
                                        <div class="skills">
                                            <h3>What academic skills is required for this project?</h3>
                                            <p>List up to 10 key skills that represent your project. Academic experts will use these skills to match with projects aligned to their interests and expertise.</p>
                                            <x-form.choice wire:model.change="selectedSkills" placeholder="Type the skills & hit enter" id="skills" multiple>
                                                @foreach ($availableSkills as $id => $name)
                                                    <option value="{{ $id }}">{{ $name }}</option>
                                                @endforeach
                                            </x-form.choice>
                                            <div class="text-sm">Suggestion skills:  <span class="text-sm fw-mwdium">Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</span></div>
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
                                                                <input type="radio" class="btn-check" wire:model.change="type" value="hourly" id="btnradio1" autocomplete="off">
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
                                                            <input type="radio" class="btn-check" wire:model.change="type" value="fixed" id="btnradio2" autocomplete="off">
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
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            <div class="d-flex gap-4">

                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-input-group">
                                            <label class="form-input-label edux-tooltip-level">Start Amount  <span class="edux-tooltips"> <i><x-icon.info width="20" height="20" fill="#A1A0A5"/></i> <span class="edux-tooltips-details">  Minimum start amount is $50 </span> </span> </label>    
                                            <input id="budget_start_amount" class="form-input-field" type="number" min="0" wire:model.blur="budget_start_amount" placeholder="Type Here">
                                            </div>

                                            </div>
                                            <div class="col-md-6">
                                                <x-form.input type="number" min="0" label="End Amount" wire:model.blur="budget_end_amount" placeholder="Type Here"/>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-buttons">
                                    <button type="submit" class="edux-btn-primary">Post Job</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>