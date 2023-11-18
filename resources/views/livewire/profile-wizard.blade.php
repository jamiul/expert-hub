<div class="register-timeline {{ $currentStepClass }}">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="timeline-left">
                    <ul>
                        <li>
                            <h4>General Information</h4>
                            <p>Profile details</p>
                        </li>
                        <li>
                            <h4>Field of Expertise</h4>
                            <p>Area of Expertise</p>
                        </li>
                        <li>
                            <h4>Education</h4>
                            <p>Education details</p>
                        </li>
                        <li>
                            <h4>Consultation</h4>
                            <p>Type of consultation</p>
                        </li>
                        <li>
                            <h4>Biography</h4>
                            <p>Your Biography</p>
                        </li>
                        <li>
                            <h4>Profile Picture</h4>
                            <p>Add profile picture</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
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
            </div>
        </div>
    </div>
</div>