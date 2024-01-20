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
                                        wire:model="type" placeholder="$0.00"/>
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
                                    wire:model="amount"
                                    class="input-field-control input-field-control-lg"
                                    placeholder="$0.00">
                        </div>
                    </div>
                    <div class="service-fee-input-row border-bottom">
                        <div class="service-fee-description">
                            <p class="fw-medium mb-1">Platform Fee</p>
                        </div>
                        <div class="service-fee-input">
                            <input type="text"
                                    wire:model="serviceFee"
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
                                    wire:model="amountAfterServiceFee"
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
            <x-form.select label="Project Duration" wire:model="duration">
                <option value="">Select Duration</option>
                <option value="Mr">15 Days</option>
                <option value="Mrs">30 days</option>
                <option value="Dr">90 Days</option>
                <option value="Prof">180 Days</option>
            </x-form.select>
        </div>
    </div>
</div>