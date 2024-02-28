<section class="page-section-sm">
    <div class="find-consultant-details">
        <div class="container profile__page">
            <div class="row border-0">
                <div class="edux-training-form">


                    <h5>Create Training</h5>
                    <ul class="progress-bar-nav-horizontal">
                        <li class="@if($currentStep > 1) done-item @endif @if($currentStep == 1) running-item @endif"><strong>Course Info </strong></li>
                        <li class="@if($currentStep > 2) done-item @endif @if($currentStep == 2) running-item @endif"><strong> Course Schedule</strong></li>
                        <li class="@if($currentStep > 3) done-item @endif @if($currentStep == 3) running-item @endif"><strong> Course Details </strong></li>
                        <li class="@if($currentStep > 4) done-item @endif @if($currentStep == 4) running-item @endif"><strong> Summery </strong></li>
                    </ul>



                    <div class="progress-step-content mt-20">


                        @if($currentStep === 1)
                        @include('livewire.training.create-training-step1')
                        @endif




                        @if($currentStep === 2)
                        @include('livewire.training.create-training-step2')
                        @endif

                        @if($currentStep === 3)
                        @include('livewire.training.create-training-step3')
                        @endif

                        @if($currentStep === 4)
                        @include('livewire.training.create-training-step4')
                        @endif



                        <div class="create-training-button-area">

                            <button class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon" wire:click="back">Back</button>

                            <button class="btn btn-primary btn-md w-100" wire:click="next">{{$currentStep < 4 ? 'Continue' : 'Save'}}</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===================== Work Experience Modal start Here ====================== -->


    <!-- Modal : Add Work Experience-->

    <!--End Modal -->


    <!-- ===================== Work Experience Modal start Here ====================== -->
</section>
