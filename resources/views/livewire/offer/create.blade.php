<section class="my-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="title-page-wrapper client-send-offer-page">
                    <div class="title-page-header pb-0">
                        <h1 class="h5 mb-20">Send offer</h1>
                    </div>
                    <form wire:submit="sendOffer">
                        <div class="title-page-body px-40">
                            <x-expert.mini-card :expert="$expert" card="true"/>
                            <!--project-expert-card-->
                            <div class="card card-24 mb-40">
                                <div class="card-body">
                                    <h3 class="h6 mb-3">Details</h3>
                                    <x-form.choice wire:model="client_id" label="Hiring Team">
                                        <option value="{{ auth()->user()->profile->id }}">{{ auth()->user()->full_name }}</option>
                                    </x-form.choice>
                                    <x-form.choice wire:model="project_id" label="Related Job Posting">
                                        @foreach ($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->title }}</option>
                                        @endforeach
                                    </x-form.choice>
                                    <x-form.input type="text" label="Contract Title" wire:model="contract_title"/>
                                </div>
                            </div>
                            <!--Project Details-->
                            <div class="card mb-40">
                                <div x-data="{ contactType: 'Fixed', milestoneType: 'single' }"
                                        class="card-body">
                                    <h3 class="h6 mb-3">Contact Terms</h3>
                                    <!-- Radio buttons for Hourly and Fixed -->
                                    <div class="contact-type-card-wrapper mb-3">
                                        <div class="contact-type-card">
                                            <input type="radio" wire:model="type"
                                                    id="Hourly" class="d-none"
                                                    value="Hourly" x-model="contactType">
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
                                            <input type="radio" wire:model="type" id="Fixed"
                                                    class="d-none"
                                                    value="Fixed" x-model="contactType">
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
                                    <!-- Show content based on selected contactType -->
                                    <div x-show="contactType === 'Hourly'" class="hourly-offer-content">
                                        <div class="form-input-group">
                                            <label class="form-input-label">Pay by the hours
                                                <div class="tooltip-wrapper bottom-left">
                                                    <x-icon.info fill="#BABABA"/>
                                                    <span class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur</span>
                                                </div>
                                            </label>
                                            <input name="type" id="type" class="form-input-field" type="text"
                                                    placeholder="Type" value="$100">
                                            <span class="text-sm py-1">Professor Miles Esther’s profile rate is $200.00/hr </span>
                                        </div>
                                        <div class="form-input-group">
                                            <label class="form-input-label">Weekly Limits
                                                <div class="tooltip-wrapper bottom-left">
                                                    <x-icon.info fill="#BABABA"/>
                                                    <span class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur</span>
                                                </div>
                                            </label>
                                            <input name="type" id="type" class="form-input-field" type="text"
                                                    placeholder="Type" value="30 hrs / week">
                                            <span class="text-sm py-1">$3000.00 max/week </span>
                                        </div>
                                        <p class="input-field-label d-inline">Manual Time
                                            <span class="tooltip-wrapper bottom-left">
                                        <x-icon.info fill="#BABABA"/>
                                        <span class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    </span>
                                        </p>
                                        <x-form.check wire:model="ManualTime">
                                            Allow Expert to log time manually if needed
                                        </x-form.check>
                                        <x-form.flatpicker tooltip="Lorem ipsum dolor sit amet" label="Start Date"
                                                            name="datepicker"/>

                                    </div>
                                    <div x-show="contactType === 'Fixed'" class="fixed-price-offer-content">
                                        <!-- Fixed Price Content -->
                                        <div class="form-input-group">
                                            <label class="form-input-label">Pay a fixed price for your project
                                                <div class="tooltip-wrapper bottom-left">
                                                    <x-icon.info fill="#BABABA"/>
                                                    <span class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur</span>
                                                </div>
                                            </label>
                                            <input wire:model.live="amount" id="type" class="form-input-field" type="number"
                                                    placeholder="$100">
                                            <span class="text-sm py-1">This is the price you and {{ $this->expert->user->full_name }} have agreed upon </span>
                                        </div>
                                        <!-- Radio buttons for milestoneType -->
                                        <div class="form-radio-group">
                                            <label class="form-radio-label"
                                                    @click="milestoneType = (milestoneType === 'single') ? 'multiple' : 'single'">
                                                Deposit funds into Escrow
                                                <div class="tooltip-wrapper bottom-left">
                                                    <x-icon.info fill="#BABABA"/>
                                                    <span class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                                </div>
                                            </label>
                                            <div class="form-radio-options">
                                                <div class="form-radio-option">
                                                    <input type="radio" wire:model.live="milestoneType" id="whole-project"
                                                            class="form-radio-field form-check-input"
                                                            value="single" x-model="milestoneType">
                                                    <label class="form-radio-title" for="whole-project">Deposit ${{ $amount }} for the whole project</label>
                                                </div>
                                                <div class="form-radio-option">
                                                    <input type="radio" wire:model.live="milestoneType"
                                                            id="milestone-project"
                                                            class="form-radio-field form-check-input"
                                                            value="multiple" x-model="milestoneType">
                                                    <label class="form-radio-title" for="milestone-project">Deposit a
                                                        lesser
                                                        amount to cover the first milestone</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Show content based on selected milestoneType -->
                                        <div x-show="milestoneType === 'single'">
                                            <!-- Content for single -->
                                            <x-form.flatpicker tooltip="Lorem ipsum dolor sit amet" label="Start Date"
                                                                wire:model="start_date"/>
                                        </div>
                                        <div x-show="milestoneType === 'multiple'">
                                            <!-- Content for milestoneProject -->
                                            <p class="input-field-label d-inline">Project Milestones
                                                <span class="tooltip-wrapper bottom-left">
                                                <x-icon.info fill="#BABABA"/>
                                                <span class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                            </span>
                                            </p>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <x-form.input label="Milestone Description" wire:model="milestone_description.0" placeholder="Task Description"/>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <x-form.flatpicker label="Due Date" wire:model="milestone_due_date.0"/>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <x-form.input label="Deposit Amount" wire:model.live="milestone_amount.0" placeholder="$0.00"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach ($milestones as $key => $value)
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                        <x-form.input label="Milestone Description" wire:model="milestone_description.{{ $value }}" placeholder="Task Description"/>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <x-form.flatpicker label="Due Date" wire:model="milestone_due_date.{{ $value }}"/>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <x-form.input label="Deposit Amount" wire:model.live="milestone_amount.{{ $value }}" placeholder="$0.00"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <button type="button" wire:click="add({{ $i }})" class="btn btn-link d-flex align-items-center px-0 gap-2">
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
                                <button type="submit" class="btn btn-md btn-primary my-2" >Submit</button>
                                {{-- <a class="btn btn-md btn-primary my-2"
                                    href="/figma/project/client-send-job-offer-view/">Submit</a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
