<div class="site-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="job-post-wrapper">
                    <div class="post-shadow-box">
                        <div class="job-post-header">
                            <div class="col-12 p-0">
                                <div class="row m-0 align-items-center">
                                    <div class="col-md-8 col-12 p-0">
                                        <div class="post-header-content">
                                            <div class="consult-heading">
                                                <h2>Hire the best academic experts</h2>
                                                <p>Boost your academic success with us! Share your project details, browse profiles, contact academic experts, and pay only when you are satisfied</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 p-0">
                                        <div class="post-header-image">
                                            <img src="{{ asset('assets/frontend/img/expert.png') }}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="job-post-form">
                            <form wire:submit="save">
                                @if($currentStep > 0)
                                <div class="step step-1 mb-4">
                                    <div class="main-form">
                                        <div class="form-group">
                                            <label for="field1" class="form-label">What is your project title?</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control @error('name') has-error @enderror" wire:model="name" placeholder="eg. Developing curriculum for Postgraduate public health unit">
                                                @error('name')
                                                    <div class="error-message">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($currentStep > 1)
                                <div class="step step-2 mb-4">
                                    <div class="main-form">
                                        <div class="input-group Project-discription">
                                            <label for="field1" class="form-label">Project Description</label>
                                            <div class="input-group">
                                                <textarea wire:model="description" class="form-control @error('description') has-error @enderror"  placeholder="Describe your project here (max 200 words)"></textarea>
                                                @error('description')
                                                    <div class="error-message">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div
                                            wire:ignore
                                            x-data
                                            x-init="
                                                FilePond.setOptions({
                                                    allowMultiple: true,
                                                    server: {
                                                        process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                                            @this.upload('attachments', file, load, error, progress)
                                                        },
                                                        revert: (fileName, load) => {
                                                            @this.removeUpload('attachments', fileName, load)
                                                        },
                                                    },
                                                    credits: {},
                                                    labelIdle: '<strong>Clik to upload or drag & drop</strong> <br> Drag & drop any images or documents that might be helpful in explaining your brief here'
                                                });
                                                FilePond.create($refs.input);
                                            "
                                        >
                                            <input type="file" x-ref="input">
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($currentStep > 2)
                                <div class="step step-3">
                                    <div class="main-form">
                                        <div class="skills">
                                            <h3>What academic skills is required for this project?</h3>
                                            <p>List up to 5 key skills that represent your project. Academic experts will use these skills to match with projects aligned to their interests and expertise.</p>
                                            <div class="form-group position-relative">
                                                <div class="input-group">
                                                    <input wire:keyup="searchSkill" wire:model="skill" class="form-control @error('selectedSkills') has-error @enderror" placeholder="Type the skills & select" type="text">
                                                    @error('selectedSkills')
                                                        <div class="error-message">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <p>Suggestion skills:  <span>Curriculum Editor, E-Learning Developer, Curriculum Writer, Curriculum Design, Research and Analysis, skill development</span></p>
                                                <div class="pt-2">
                                                    @foreach ($selectedSkills as $id => $name)
                                                        <div class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center">{{ $name }}<img wire:click="removeSkill({{ $id }})" class="ps-2" src="{{ asset('assets/frontend/img/close-i.png') }}"></div>
                                                    @endforeach
                                                </div>
                                                @if($availableSkills)
                                                    <div class="shadow bg-white position-absolute z-1" style="top:60px;">
                                                        <ul class="list-style-none py-2 mb-0 px-3">
                                                            @forelse ($availableSkills as $id => $name)
                                                                <li class="py-2 cursor-pointer" wire:click="addSkill({{ $id }})" wire:key="{{ $id }}">{{$name}}</li>
                                                            @empty
                                                                <li>No results</li>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($currentStep > 3)
                                <div class="step step-5">
                                    <div class="main-form">
                                        <div class="hourly-fixed-block">
                                            <h3 class="subheadings">How do you want to pay?</h3>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="rate-box">
                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                            <div class="hourly-check">
                                                                <input type="radio" class="btn-check" wire:model="type" value="hourly" id="btnradio1" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btnradio1">
                                                                    <div class="currency-img">
                                                                        <img src="{{ asset('assets/frontend/img/hourly.png') }}"/>
                                                                    </div>
                                                                    <div class="pay-rate">
                                                                        <h3>Hourly rate</h3>
                                                                        <p>Select freelancers based on their hourly rates and pay for the hours worked</p>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="rate-box">
                                                        <div class="fixed-check">
                                                            <input type="radio" class="btn-check" wire:model="type" value="fixed" id="btnradio2" autocomplete="off">
                                                            <label class="btn btn-outline-primary" for="btnradio2">
                                                                <div class="currency-img">
                                                                    <img src="{{ asset('assets/frontend/img/fixed.png') }}"/>
                                                                </div>
                                                                <div class="pay-rate">
                                                                    <h3>Fixed price</h3>
                                                                    <p>Agree on a price upfront, then release payment upon project completion</p>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('type')
                                                <div class="error-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($currentStep > 4)
                                <div class="step step-6">
                                    <div class="main-form">
                                        <div class="budget-block">
                                            <h3>What is your estimate budget?</h3>
                                            <div class="d-flex">
                                                <div class="input-group me-3 mb-0" style="width: 120px">
                                                    <select wire:model.change="currency" class="form-select form-control">
                                                        <option value="USD">USD</option>
                                                        <option value="AUD">AUD</option>
                                                    </select>
                                                </div>
                                                <div class="input-group">
                                                    <select wire:model="budget" class="form-select form-control @error('description') has-error @enderror">
                                                        <option selected>Select your budget</option>
                                                        @foreach ($availableBudgets as $availableBudget)
                                                            <option value="{{ $availableBudget }}" >{{ $availableBudget }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('budget')
                                                        <div class="error-message">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($currentStep > 5)
                                <div class="step step-7">
                                    <div class="main-form">
                                        <div class="correction-block">
                                            <h3>Are these details correct?</h3>
                                            <div class="correction-preview">
                                                <div class="discription-view">
                                                    <p>{{ $description }}</p>
                                                </div>
                                                <div class="tags-preview">
                                                    <div class="bootstrap-tagsinput">
                                                        @foreach ($selectedSkills as $id => $name)
                                                            <div class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center">{{ $name }}<img wire:click="removeSkill({{ $id }})" class="ps-2" src="{{ asset('assets/frontend/img/close-i.png') }}"></div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rate-preview">
                                                @if($type === 'fixed')
                                                <div class="currency-img">
                                                    <img src="{{ asset('assets/frontend/img/fixed.png') }}"/>
                                                </div>
                                                <div class="pay-ratee">
                                                    <h4>Fixed price</h4>
                                                    <p>{{ $budget }}</p>
                                                </div>
                                                @endif
                                                @if($type === 'hourly')
                                                    <div class="currency-img">
                                                        <img src="{{ asset('assets/frontend/img/hourly.png') }}"/>
                                                    </div>
                                                    <div class="pay-ratee">
                                                        <h4>Price per hour</h4>
                                                        <p>{{ $budget }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($currentStep < 6)
                                <div class="form-buttons">
                                    <button wire:click="next" type="button" class="btn btn-primary next-step">Next</button>
                                </div>
                                @endif
                                @if($currentStep === 6)
                                <div class="form-buttons">
                                    <button type="submit" class="btn btn-primary next-step">Yes Post my Project</button>
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

