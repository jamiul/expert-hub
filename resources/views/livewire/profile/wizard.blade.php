<section class="profile-setup">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="card card-40">
                    <div class="card-body">
                        <ul class="progress-bar-nav-vertical profile-progress-bar-nav">
                            <li class="@if($currentStep > 1) done-item @endif @if($currentStep == 1) running-item @endif">
                                <strong>Expertise</strong> Expertise area
                            </li>
                            <li class="@if($currentStep > 2) done-item @endif @if($currentStep == 2) running-item @endif">
                                <strong>Education</strong> Academic details
                            </li>
                            <li class="@if($currentStep > 3) done-item @endif @if($currentStep == 3) running-item @endif">
                                <strong>Work Experience</strong> Add work experience
                            </li>
                            <li class="@if($currentStep > 4) done-item @endif @if($currentStep == 4) running-item @endif">
                                <strong>Proficiency</strong> Add language
                            </li>
                            <li class="@if($currentStep > 5) done-item @endif @if($currentStep == 5) running-item @endif">
                                <strong>eKYC</strong> Additional information
                            </li>
                            <li class="@if($currentStep > 6) done-item @endif @if($currentStep == 6) running-item @endif">
                                <strong>Profile Summary</strong> Personal information
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-8 ps-lg-5 mt-5 mt-lg-0">
                <div class="progress-step-content-wrapper">
                    @if($currentStep === 1)
                        @include('livewire.profile.step1')
                    @endif
                    @if($currentStep === 2)
                        @livewire('profile.education')
                    @endif
                    @if($currentStep === 3)
                        @livewire('profile.experience')
                    @endif
                    @if($currentStep === 4)
                        @livewire('profile.language')
                    @endif
                    @if($currentStep === 5)
                        @include('livewire.profile.step5')
                    @endif
                    @if($currentStep === 6)
                        @include('livewire.profile.step6')
                    @endif
                </div>
                <hr class="my-40">
                <div class="d-flex justify-content-between gap-5 progress-step-control-btn-wrapper">
                    <button wire:click="back"
                            class="btn btn-md btn-outline-primary d-flex align-items-center justify-content-center">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none">
                            <path d="M7.825 13L13.425 18.6L12 20L4 12L12 4L13.425 5.4L7.825 11H20V13H7.825Z"
                                  fill="#0036E3"/>
                        </svg>
                        Back
                    </button>
                    <button wire:click="next" class="btn btn-md btn-primary">
                        Save & Continue
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
