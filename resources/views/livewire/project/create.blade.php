<div class="site-content">
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script>
        FilePond.registerPlugin(FilePondPluginFileValidateType);
    </script>
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
                                <div class="step step-1 my-4">
                                    <x-form.choice wire:model.change="expertise_id" label="What is your project field">
                                        <option value="">Select Options</option>
                                        @foreach ($availableExpertiseFields as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </x-form.choice>
                                </div>
                                <div class="step step-1 mb-4">
                                    <div class="main-form">
                                        <x-form.input type="text" label="What is your project title?" wire:model.blur="title" placeholder="Academic content writer"/>
                                    </div>
                                </div>
                                <div class="step step-2 mb-4">
                                    <x-form.countable-textarea label="Project Description"  wire:model.blur="description" placeholder="Write Description"/>
                                    <div
                                        wire:ignore
                                        x-data
                                        x-init="
                                            FilePond.setOptions({
                                                allowMultiple: true,
                                                acceptedFileTypes: ['image/*','application/pdf','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'],
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
                                    @error('attachments.*')
                                        <div class="form-input-error-message">{{ $message }}</div>
                                    @enderror
                                    <p class="mt-2 mb-0 edux-supported-file">Supported files type: <span>Image, pdf, doc, excel (Max 10 MB)</span></p>
                                    @if($project)
                                        @foreach ($project->attachments as $attachment)
                                            <div class="customer-upload">
                                                <div class="upload-file-user">
                                                    <div class="upload-file-user-img">
                                                        <img src="{{ asset('assets/frontend/img/uploadfile-icon.png') }}"/>
                                                    </div>
                                                    <div class="upload-file-user-text">
                                                        <h4>{{ $attachment->name }}</h4>
                                                        <p>{{ $attachment->human_readable_size }}</p>
                                                    </div>
                                                </div>
                                                <div wire:click="deleteAttachment({{ $attachment->id }})" wire:confirm="Are you sure you want to delete this attachment?" class="dust-img">
                                                    <x-icon.delete/>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="step step-3 mt-3">
                                    <div class="main-form">
                                        <div class="skills">
                                            <h3>What academic skills is required for this project?</h3>
                                            <p>List up to 10 key skills that represent your project. Academic experts will use these skills to match with projects aligned to their interests and expertise.</p>
                                            <x-form.choice wire:model.live="selectedSkills" placeholder="Type the skills & hit enter" id="skills" multiple>
                                                @foreach ($availableSkills as $id => $name)
                                                    <option value="{{ $id }}">{{ $name }}</option>
                                                @endforeach
                                            </x-form.choice>
                                            <div class="text-sm">Suggestion skills:  <span class="text-sm fw-medium">Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step step-5">
                                    <div class="main-form">
                                        <div class="card-body mt-40">
                                            <div class="mb-3">
                                                <h3 class="h6">How do you want to pay?</h3>
                                                @error('type')
                                                    <div class="form-input-error-message">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- Radio buttons for Hourly and Fixed -->
                                            <div class="contact-type-card-wrapper mb-3">
                                                <div class="contact-type-card">
                                                    <input type="radio" wire:model.live="type"
                                                            id="Hourly" class="d-none"
                                                            value="Hourly">
                                                    <label class="contact-type-card-inner" for="Hourly">
                                                        <div>
                                                            <span class="radio-field-icon"></span>
                                                        </div>
                                                        <div>
                                                            <h4 class="h6">Hourly</h4>
                                                            <p class="text-sm mb-0">Select freelancers based on their hourly rates and pay for the hours worked</p>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="contact-type-card">
                                                    <input type="radio" wire:model.live="type" id="Fixed"
                                                            class="d-none"
                                                            value="Fixed">
                                                    <label class="contact-type-card-inner" for="Fixed">
                                                        <div>
                                                            <span class="radio-field-icon"></span>
                                                        </div>
                                                        <div>
                                                            <h4 class="h6">Fixed</h4>
                                                            <p class="text-sm mb-0">Agree on a price upfront, then release payment upon project completion</p>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step step-6">
                                    <div class="main-form">
                                        <div class="budget-block">
                                             <div class="mb-3">
                                                <h3 class="h6 mb-0">What is your estimate budget? (USD)</h3>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            @if($type == \App\Enums\ProjectType::Hourly)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-input-group">
                                                        <label class="form-input-label edux-tooltip-level">Start Amount  <span class="edux-tooltips"> <i><x-icon.info width="20" height="20" fill="#A1A0A5"/></i> <span class="edux-tooltips-details">  Minimum start amount is $50 </span> </span> </label>    
                                                        <input id="budget_start_amount" class="form-input-field" type="number" wire:model.blur="budget_start_amount" placeholder="Type Here">
                                                    </div>
                                                    @error('budget_start_amount')
                                                        <div class="form-input-error-message">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <x-form.input type="number" min="0" label="End Amount" wire:model.blur="budget_end_amount" placeholder="Type Here"/>
                                                </div>
                                            </div>
                                            @else
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-input-group">
                                                            <label class="form-input-label edux-tooltip-level">Start Amount  <span class="edux-tooltips"> <i><x-icon.info width="20" height="20" fill="#A1A0A5"/></i> <span class="edux-tooltips-details">  Minimum start amount is $50 </span> </span> </label>    
                                                            <input id="budget_start_amount" class="form-input-field" type="number" wire:model.blur="budget_start_amount" placeholder="Type Here">
                                                        </div>
                                                        @error('budget_start_amount')
                                                            <div class="form-input-error-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 mt-3">
                                    <button type="button" wire:click="saveAsDraft" class="btn edux-btn-border-primary">Save As Draft</button>
                                    <button type="submit" class="edux-btn-primary">Post Project</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>