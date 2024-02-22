<section class="page-section-sm profile-setup">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="user-registration-layout">
                    @include('livewire.auth.client-steps')
                    <div class="progress-step-content-wrapper">
                        @if($currentStep === 2)
                            <div class="progress-step-content" style="max-width: 731px">
                                <div class="card">
                                    <div class="card-body p-40">
                                        <h2 class="h5 mb-2">Current Position</h2>
                                        <p class="mb-4">
                                            Scrambled it to make a type specimen book. It has survived not only five
                                            centuries
                                        </p>
                                        <x-form.input type="text" wire:model.blur="current_job_title" label="Job Title"
                                                      placeholder="Type Here"/>
                                        <x-form.input type="text" wire:model.blur="current_job_organization"
                                                      label="Company/Institution" placeholder="Type Here"/>
                                        <x-form.input type="text" wire:model.blur="current_job_sector"
                                                      label="Industry sector" placeholder="Type Here"/>

                                        <div
                                            class="d-flex justify-content-end gap-5 progress-step-control-btn-wrapper pt-3 ">
                                            <button wire:click="completeRegistration" class="btn btn-md btn-primary">
                                                Save & Continue
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
