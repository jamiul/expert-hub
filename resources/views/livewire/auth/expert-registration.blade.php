<section class="profile-setup">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="card card-40 card-shadow border-0">
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
            </div>
            <div class="col-xl-6 col-lg-8 col-md-8 ps-lg-5 mt-5 mt-lg-0">
                <div class="progress-step-content-wrapper">
                    @if($currentStep === 1)
                    <section class="page-section-sm">
                        <div class="container mb-5">
                            <div class="row">
                                <div class="col justify-content-center">
                                    <div class="auth-card">
                                        <div class="card-body">
                                            <div class="auth-card-title">
                                                <h1 class="h4">Sign Up</h1>
                                            </div>
                                            <form wire:submit="createAccount">
                                                <div class="social-auth col-items-2">
                                                    <div class="social-auth-item">
                                                        <a href="#"><x-icon.logo-google/>Google</a>
                                                    </div>
                                                    <div class="social-auth-item">
                                                        <a href="#"><x-icon.logo-linkedin-fill/>LinkedIn</a>
                                                    </div>
                                                </div>
                                                {{--social-auth--}}
                                                <div class="separator">
                                                    <span>OR</span>
                                                </div>
                                                <x-form.select label="Title" wire:model.change="title">
                                                    <option value="">Your title</option>
                                                    @foreach ($titles as $title)
                                                        <option value="{{ $title }}">{{ $title }}</option>
                                                    @endforeach
                                                </x-form.select>
                                                <x-form.input type="text" label="Full Name" wire:model.blur="full_name"
                                                            placeholder="Your full name"/>
                                                <x-form.input type="email" label="Email Address" wire:model.live.debounce.1000="email"
                                                            placeholder="name@example.com"/>
                                                <x-form.phone label="Phone" wire:model.blur="phone"
                                                            placeholder="Your phone number"/>
                                                <x-form.password type="password" label="Password" wire:model.live.debounce="password"
                                                                placeholder="Your password (8 or more characters)"/>
                                                <x-form.password type="password" label="Confirm Password"
                                                                wire:model.live.debounce="password_confirmation"
                                                                placeholder="Your password (8 or more characters)"/>
                                                <x-form.choice label="Country" wire:model.change="country_id">
                                                    <option value="">Select country</option>
                                                    @foreach ($countries as $id => $country)
                                                        <option value="{{ $id }}">{{ $country }}</option>
                                                    @endforeach
                                                </x-form.choice>
                                                <div class="registration-checkboxes">
                                                    <x-form.check wire:model.boolean.change="terms">
                                                        Yes, I understand and agree to the <a target="_blank" href="{{ route('terms-of-service') }}">Expert Gate Terms of Service</a>,
                                                        including the <a target="_blank" href="{{ route('user-agreement') }}">User Agreement</a> and <a target="_blank" href="{{ route('privacy-policy') }}">Privacy Policy.</a>
                                                    </x-form.check>
                                                </div>
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-md btn-primary" type="submit">Create Account</button>
                                                </div>
                                            </form>
                                            <div class="auth-card-bottom">
                                                <p class="">Already have an account, <a class="link-button" href="{{ route('auth.login') }}">Sign In</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    @endif
                    @if($currentStep === 2)
                        <div class="progress-step-content  ">
                            <h6 class="mb-2">Tell us about your area of experties</h6>
                            <div class="pt-4">
                                <x-form.select wire:model.live="expert_category_id" :search="false" label="Expert by Categories">
                                    <option value="">Select expert category</option>
                                    @foreach ($expertCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </x-form.select>
                            </div>
                            <div class="pt-4">
                                <x-form.select wire:model.live="expertise_id" :search="false" label="Your Expertise">
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
                                <div class="text-sm">Suggestion skills:  <span class="text-sm fw-medium">Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</span></div>
                            </div>
                            <div class="service-fee-input-area pt-4">
                                <div class="service-fee-input-row">
                                    <div class="service-fee-description">
                                        <p class="fw-medium mb-1">What is your preferred Hourly Rate</p>
                                    </div>
                                    <div class="service-fee-input">
                                        <div class="d-flex gap-4 align-items-center">
                                            <div>
                                                /hr
                                            </div>
                                            <div>
                                                <x-form.input type="number" wire:model.blur="hourly_rate" placeholder="0.00"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    @endif
                    @if($currentStep === 3)
                        <div class="progress-step-content ">
                            <h6 class="mb-2">Biography</h6>
                            <p class="mb-4">Please provide a brief biography, limited to 2000 characters, which will be used in
                                your public
                                profile. Ensure that it conveys meaningful information you would like the client to know
                                about you before engaging in your project
                            </p>
                            <x-form.countable-textarea rows="5" cols="10" max="2000" name="biography" wire:model.blur="biography" placeholder="e.g. Brief 2000 characters summary about your expertise."/>

                            <h6 class="mb-2 mt-5">Upload your profile picture</h6>
                            <p class="mb-5">Please upload the image you would like to appear in your profile</p>
                            <div class="image-upload-preview">
                                <div class="">
                                    <div class="uploaded-img-preview">
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
                                    </div>
                                    <p class="text-sm fst-italic my-1">
                                        Max 2MB 500px 500px
                                    </p>
                                </div>
                                <div>
                                    <label for="picture"
                                            class="btn btn-outline-primary d-inline-flex align-items-center">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                                viewBox="0 0 25 24"
                                                fill="none">
                                            <path
                                                d="M11.5 16V7.85L8.9 10.45L7.5 9L12.5 4L17.5 9L16.1 10.45L13.5 7.85V16H11.5ZM6.5 20C5.95 20 5.47917 19.8042 5.0875 19.4125C4.69583 19.0208 4.5 18.55 4.5 18V15H6.5V18H18.5V15H20.5V18C20.5 18.55 20.3042 19.0208 19.9125 19.4125C19.5208 19.8042 19.05 20 18.5 20H6.5Z"
                                                fill="#0036E3"/>
                                        </svg>
                                        Upload Photo</label>
                                    <input type="file" wire:model.live="picture" id="picture" class="d-none">
                                    @error('picture')
                                        <div class="form-input-error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>



