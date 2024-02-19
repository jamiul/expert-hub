<section class="page-section-sm profile-setup">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="user-registration-layout">
                    <div class="card card-40">
                        <div class="card-body">
                            <ul class="progress-bar-nav-vertical profile-progress-bar-nav">
                                <li class="@if($currentStep > 1) done-item @endif @if($currentStep == 1) running-item @endif">
                                    <strong>Getting Started</strong> <span>1 Min</span>
                                </li>
                                <li class="@if($currentStep > 2) done-item @endif @if($currentStep == 2) running-item @endif">
                                    <strong>Expertise</strong> <span>1 Min</span>
                                </li>
                                <li class="@if($currentStep > 3) done-item @endif @if($currentStep == 3) running-item @endif">
                                    <strong>Profile Setup</strong> <span>1 Min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="progress-step-content-wrapper">
                        @if($currentStep === 2)
                            <div class="progress-step-content">
                                <h6 class="mb-2">Tell us about your area of experties</h6>
                                <div class="pt-4">
                                    <x-form.select wire:model.live="expert_category_id" :search="false"
                                                   label="Expert by Categories">
                                        <option value="">Select expert category</option>
                                        @foreach ($expertCategories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </x-form.select>
                                </div>
                                <div class="pt-4">
                                    <x-form.select wire:model.live="expertise_id" :search="false"
                                                   label="Your Expertise">
                                        <option value="">Select Your Expertise</option>
                                        @foreach ($expertises as $expertise)
                                            <option value="{{ $expertise->id }}">{{ $expertise->name }}</option>
                                        @endforeach
                                    </x-form.select>
                                </div>
                                <div class="pt-4">
                                    <x-form.choice wire:model.live="skills" multiple label="Your Skillset">
                                        @foreach ($availableSkills as $name => $id)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </x-form.choice>
                                    <div class="text-sm">
                                        Suggestion skills:  Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development etc.  (Max 8)
                                    </div>
                                </div>
                                 <div class="pt-4">
                                    @livewire('profile.language')
                                </div>
                            </div>
                            <div class="d-flex justify-content-between gap-5 progress-step-control-btn-wrapper">
                                <button wire:click="back"
                                        class="btn btn-md btn-outline-primary">
                                    Save For Later
                                </button>
                                <button wire:click="next" class="btn btn-md btn-primary">
                                    Save & Continue
                                </button>
                            </div>
                        @endif
                        @if($currentStep === 3)
                            <div class="progress-step-content ">
                                <div>
                                    <h6 class="mb-2 mt-5">Resume</h6>
                                    <p class="mb-2">Please upload your resume</p>
                                    @if($resume)
                                    <div>
                                        <p>{{ $resume->getClientOriginalName() }} <span wire:click="removeResume"><x-icon.delete/></span></p>
                                    </div>
                                    @endif
                                    <div class="d-flex">
                                        <div>
                                            <label for="resume"
                                                class="btn btn-outline-primary d-inline-flex align-items-center">
                                                <x-icon.upload width="20" height="20" fill="#0036E3"/>
                                                Upload</label>
                                            <input type="file" wire:model.live="resume" id="resume" class="d-none">
                                        </div>
                                        <div>
                                            <p class="mb-0 text-sm">PDF File</p>
                                            <p class="mb-0 text-sm">Maximum File Size 5MB</p>
                                        </div>
                                    </div>
                                    @error('resume')
                                    <div class="form-input-error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <h6 class="mb-2 mt-5">Profile Photo</h6>
                                    <p class="mb-2">Please upload a high-quality profile photo. Expert with professional profile photos are prioritized and see more project with ExpertGate clients.</p>
                                    <div class="d-flex">
                                        <div class="uploaded-img-preview">
                                            <label for="picture">
                                                @if($pictureUrl)
                                                    <img src="{{ $pictureUrl }}">
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="132" height="133"
                                                        viewBox="0 0 132 133" fill="none">
                                                        <g clip-path="url(#clip0_38_2)">
                                                            <path
                                                                d="M81.048 80.678C92.1752 83.9312 101.948 90.7027 108.903 99.9778C115.858 109.253 119.62 120.532 119.625 132.125H12.375C12.3774 120.531 16.1382 109.251 23.0934 99.9753C30.0486 90.6997 39.8234 83.9288 50.952 80.678L66 103.25L81.048 80.678ZM92.8125 51.6875C92.8125 58.7986 89.9876 65.6185 84.9593 70.6468C79.931 75.6751 73.1111 78.5 66 78.5C58.8889 78.5 52.069 75.6751 47.0407 70.6468C42.0124 65.6185 39.1875 58.7986 39.1875 51.6875C39.1875 44.5764 42.0124 37.7565 47.0407 32.7282C52.069 27.6999 58.8889 24.875 66 24.875C73.1111 24.875 79.931 27.6999 84.9593 32.7282C89.9876 37.7565 92.8125 44.5764 92.8125 51.6875Z"
                                                                fill="#B3C1CF"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_38_2">
                                                                <rect width="132" height="132" fill="white"
                                                                    transform="translate(0 0.5)"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                @endif
                                            </label>
                                            <input type="file" wire:model.live="picture" id="picture" class="d-none">
                                        </div>
                                        <div>
                                            <p class="mb-0 text-sm">Minimum Resolution500px 500px</p>
                                            <p class="mb-0 text-sm">Maximum File Size 2MB</p>
                                            <p class="mb-0 text-sm">Read Our High-quality Headshot Guide</p>
                                        </div>
                                    </div>
                                    @error('picture')
                                    <div class="form-input-error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <h6 class="mb-2 mt-5">Work or LinkedIn</h6>
                                    <x-form.select label="Profile Type" wire:model.change="externalProfileType">
                                        <option>Profile Type</option>
                                        <option value="LinkedIn">LinkedIn</option>
                                        <option value="Google Scholer">Google Scholer</option>
                                    </x-form.select>

                                    <x-form.input label="Profile Link" wire:model.change="externalProfileUrl" placeholder="Profile link"/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between gap-5 progress-step-control-btn-wrapper">
                                <button wire:click="back"
                                        class="btn btn-md btn-outline-primary d-flex align-items-center justify-content-center">
                                    <x-icon.arrow-back fill="#0036E3"/>
                                    <span class="ms-2">Back</span>
                                </button>
                                <button wire:click="completeRegistration" class="btn btn-md btn-primary">
                                    Complete Registration
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>