<section class="page-section-sm profile-setup">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="user-registration-layout">
                    @include('livewire.auth.expert-steps')
                    <div class="progress-step-content-wrapper">
                        @if($currentStep === 2)
                            <div class="progress-step-content" style="max-width: 872px">
                                <div class="card">
                                    <div class="card-body p-40">
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
                                                Suggestion skills: Curriculum Editor, E-Learning Developer, Curriculum
                                                Writer, Curriculum Design, Research and Analysis, skill development etc.
                                                (Max 8)
                                            </div>
                                        </div>
                                        <div class="pt-4">
                                            @livewire('profile.language')
                                        </div>
                                        <div
                                            class="d-flex justify-content-between gap-5 progress-step-control-btn-wrapper bt-1 pt-40">
                                            <button wire:click="back"
                                                    class="btn btn-md btn-outline-primary btn-has-icon border-2">
                                                Save For Later
                                            </button>
                                            <button wire:click="next" class="btn btn-md btn-primary">
                                                Save & Continue
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                        @if($currentStep === 3)
                            <div class="progress-step-content" style="max-width: 872px">
                                <div class="card">
                                    <div class="card-body p-40">
                                        <div>
                                            <h6 class="mb-2">Resume</h6>
                                            <p class="mb-2">Please upload your resume</p>
                                            @if($resume)
                                                <div class="flat-uploaded-item-list">
                                                    <div class="flat-uploaded-item">
                                                        <div class="uploaded-item-icon">
                                                            <x-icon.file-pdf fill="#0036E3"/>
                                                        </div>
                                                        <div class="uploaded-item-info">
                                                            <p class="uploaded-file-name text-sm fw-medium mb-0">{{ $resume->getClientOriginalName() }}</p>
                                                            <p class="uploaded-file-info text-sm mb-0"><span
                                                                    class="uploaded-file-size">456 KB </span></p>
                                                        </div>
                                                        <div class="uploaded-item-remove">
                                                            <button class="icon-btn" wire:click="removeResume">
                                                                <x-icon.delete/>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="file-upload-preview-wrapper">
                                                <div>
                                                    <label for="resume"
                                                           class="btn btn-outline-primary border-2 btn-md btn-has-icon">
                                                        <x-icon.upload width="20" height="20" fill="#0036E3"/>
                                                        Upload
                                                    </label>
                                                    <input type="file" wire:model.live="resume" id="resume"
                                                           class="d-none">
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
                                            <p class="mb-2">Please upload a high-quality profile photo. Expert with
                                                professional profile photos are prioritized and see more project with
                                                ExpertGate clients.</p>

                                            <div class="image-self-upload-preview mt-3">
                                                <div class="">
                                                    <label for="picture" class="uploaded-img-preview">
                                                        @if($pictureUrl)
                                                            <span class="">
                                                                <img src="{{ $pictureUrl }}">
                                                            </span>
                                                        @else
                                                            <x-icon.add fill="#0036E3"/>
                                                        @endif
                                                    </label>
                                                    <input type="file" wire:model.live="picture" id="picture"
                                                           class="d-none">
                                                </div>
                                                <div>
                                                    <p class="fst-italic text-sm">Minimum Resolution500px 500px</p>
                                                    <p class="fst-italic text-sm">Maximum File Size 2MB</p>
                                                    <p class="fst-italic text-sm mb-0">Read Our High-quality Headshot
                                                        Guide</p>
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

                                            <x-form.input label="Profile Link" wire:model.change="externalProfileUrl"
                                                          placeholder="Profile link"/>
                                        </div>

                                        <div
                                            class="d-flex justify-content-between gap-5 progress-step-control-btn-wrapper bt-1 pt-40 mt-20">
                                            <button wire:click="back"
                                                    class="btn btn-md btn-outline-primary btn-has-icon border-2">
                                                <x-icon.arrow-back fill="#0036E3"/>
                                                <span class="ms-2">Back</span>
                                            </button>
                                            <button wire:click="completeRegistration" class="btn btn-md btn-primary">
                                                Complete Registration
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
