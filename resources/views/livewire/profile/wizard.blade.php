<section class="profile-setup">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="card card-40 card-shadow border-0">
                        <div class="card-body">
                            <ul class="progress-bar-nav-vertical profile-progress-bar-nav">
                                <li class="@if($currentStep > 1) done-item @endif @if($currentStep == 1) running-item @endif"><strong>Expertise</strong> Expertise area</li>
                                <li class="@if($currentStep > 2) done-item @endif @if($currentStep == 2) running-item @endif"><strong>Education</strong> Academic details</li>
                                <li class="@if($currentStep > 3) done-item @endif @if($currentStep == 3) running-item @endif"><strong>Work Experience</strong> Add work experience</li>
                                <li class="@if($currentStep > 4) done-item @endif @if($currentStep == 4) running-item @endif"><strong>Proficiency</strong> Add language</li>
                                <li class="@if($currentStep > 5) done-item @endif @if($currentStep == 5) running-item @endif"><strong>Service Fees</strong> Per hour rate</li>
                                <li class="@if($currentStep > 6) done-item @endif @if($currentStep == 6) running-item @endif"><strong>Profile Summary</strong> Personal information</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8 ps-lg-5 mt-5 mt-lg-0">
                    @if($currentStep === 1)
                        @include('livewire.profile.step1')
                    @endif
                    @if($currentStep === 2)
                        @include('livewire.profile.step2')
                    @endif
                    @if($currentStep === 3)
                        @include('livewire.profile.step3')
                    @endif
                    @if($currentStep === 4)
                        @include('livewire.profile.step4')
                    @endif
                    @if($currentStep === 5)
                        @include('livewire.profile.step5')
                    @endif
                    @if($currentStep === 6)
                        @include('livewire.profile.step6')
                    @endif
                    <hr class="my-40">
                    <div class="d-flex justify-content-between gap-5">
                        <button wire:click="back" class="btn btn-outline-primary">
                            Back
                        </button>
                        <button wire:click="next" class="btn btn-primary">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>