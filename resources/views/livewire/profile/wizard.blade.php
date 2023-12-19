<section class="profile-setup">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="card card-40 card-shadow border-0">
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
                                <strong>Service Fees</strong> Per hour rate
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
    <!-- Modal : Add Education-->
    <div class="modal fade" id="addEducation" tabindex="-1" aria-labelledby="addEducationLabel" aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <form action="">
                        <x-form.input type="text" label="Name of Institution" name="type"
                                      placeholder="Type institution name" value=""/>

                        <x-form.input type="text" label="Degree" name="type" placeholder="Ex: Bachelor"
                                      value=""/>
                        <div class="row">
                            <div class="col-md-6">
                                <x-form.select label="Start Year" name="title">
                                    <option value="">Select Year</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                </x-form.select>
                            </div>
                            <div class="col-md-6">
                                <x-form.select label="End Year" name="title">
                                    <option value="">Select Year</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                </x-form.select>
                            </div>
                        </div>
                        <x-form.check name="terms">
                            I currently study here
                        </x-form.check>
                    </form>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" disabled>Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Delete Education-->
    <div class="modal fade" id="deleteEducation" tabindex="-1" aria-labelledby="deleteEducationLabel"
         aria-hidden="true">
        <div class="modal-dialog flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <p>Paragraph: Archetype lets designers like you very quickly and easily create consistent</p>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Add Work Experience-->
    <div class="modal fade" id="addWorkExperience" tabindex="-1" aria-labelledby="addWorkExperienceLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Add Work Experience</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <form action="">
                        <x-form.input type="text" label="Job Title" name="JobTitle"
                                      placeholder="Type Here" value=""/>
                        <x-form.input type="text" label="Institute" name="Institute" placeholder="Type"
                                      value=""/>
                        <x-form.input type="text" label="Address" name="Address" placeholder="Type"
                                      value=""/>
                        <div class="row">
                            <div class="col-md-6">
                                <x-form.select label="Start Year" name="title">
                                    <option value="">Select Year</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                </x-form.select>
                            </div>
                            <div class="col-md-6">
                                <x-form.select label="End Year" name="title">
                                    <option value="">Select Year</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                </x-form.select>
                            </div>
                        </div>
                        <x-form.textarea label="Description" name="bio" placeholder="Type"/>
                        <x-form.check name="currentlyWorking">
                            I currently work here
                        </x-form.check>
                    </form>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Delete Work Experience-->
    <div class="modal fade" id="deleteWorkExperience" tabindex="-1" aria-labelledby="deleteWorkExperienceLabel"
         aria-hidden="true">
        <div class="modal-dialog flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Work Experience</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <p>Paragraph: Archetype lets designers like you very quickly and easily create consistent</p>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Add Language-->
    <div class="modal fade" id="addLanguage" tabindex="-1" aria-labelledby="addLanguageLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Add Language</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <form action="">

                        <div class="row">
                            <div class="col-md-6">
                                <x-form.select label="Language" name="title">
                                    <option value="">Select</option>
                                    <option value="Mr">Bangla</option>
                                    <option value="Mrs">English</option>
                                    <option value="Dr">Hindi</option>
                                    <option value="Prof">Urdu</option>
                                </x-form.select>
                            </div>
                            <div class="col-md-6">
                                <x-form.select label="Proficiency" name="title">
                                    <option value="">Select</option>
                                    <option value="Mrs">Intermediate</option>
                                    <option value="Dr">	Fluent</option>
                                    <option value="Prof">Native</option>
                                </x-form.select>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Delete Language-->
    <div class="modal fade" id="deleteLanguage" tabindex="-1" aria-labelledby="deleteLanguageLabel"
         aria-hidden="true">
        <div class="modal-dialog flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Language</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <p>Paragraph: Archetype lets designers like you very quickly and easily create consistent</p>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->
</section>
