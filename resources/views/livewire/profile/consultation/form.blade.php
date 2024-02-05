<ul class="progress-bar-nav-horizontal">
    <li class="{{ $currentStep > 1 ? 'done-item' : 'running-item' }}"><strong> Expertise </strong></li>
    <li class="{{ $currentStep > 2 ? 'done-item' : 'running-item' }}"><strong> Service fees </strong></li>
    <li class="{{ $currentStep > 3 ? 'done-item' : 'running-item' }}"><strong> Availability </strong></li>
    <li class="{{ $currentStep > 4 ? 'done-item' : 'running-item' }}"><strong> Summery </strong></li>
</ul>
<div class="progress-step-content mt-20">
    @if($currentStep === 1)
        <x-form.choice name="expertise_id" wire:model.change="form.expertise_id" label="Consultation Title">
            <option value="">Select a consultation title</option>
            @foreach ($expertFields as $expertField)
                <optgroup label="# {{ $expertField->name }}">
                    @foreach ($expertField->children as $child)
                        <option value="{{ $child->id }}">{{ $child->name }}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </x-form.choice>

        <x-form.choice name="expertise_skills" wire:model="form.expertise_skills" label="Consultation Skillsets" multiple>
            @foreach ($expertSkills as $expertSkill)
                @foreach ($expertSkill->children as $child)
                    <option value="{{ $child->id }}">{{ $child->name }}</option>
                @endforeach
            @endforeach
        </x-form.choice>

        <p class="skill-suggestion">
            Suggestion skills: <span>Curriculum Editor, E-Learning Developer,
                Curriculum Writer, Curriculum Design, Research and Analysis, skill development</span>
        </p>
    @endif
    {{ $currentStep }}
    @if($currentStep === 2)
        <div class="progress-step-content mt-40">
            <h6 class="mb-2 fw-medium">Hourly rate</h6>
            <p>Clients will see this rate on your profile and in search results once you publish
                your
                profile. You can adjust your rate every time you submit a proposal.</p>

            <div class="service-fee-input-area">
                <div class="service-fee-input-row">
                    <div class="service-fee-description">

                        <div class="form-input-group">
                            <p class="fw-medium mb-1">Hourly Rate <span class="edux-tooltips">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <path
                                            d="M9.95573 14.9974C10.2474 14.9974 10.4939 14.8967 10.6953 14.6953C10.8967 14.4939 10.9974 14.2474 10.9974 13.9557C10.9974 13.6641 10.8967 13.4175 10.6953 13.2161C10.4939 13.0148 10.2474 12.9141 9.95573 12.9141C9.66406 12.9141 9.41754 13.0148 9.21615 13.2161C9.01476 13.4175 8.91406 13.6641 8.91406 13.9557C8.91406 14.2474 9.01476 14.4939 9.21615 14.6953C9.41754 14.8967 9.66406 14.9974 9.95573 14.9974ZM9.20573 11.7891H10.7474C10.7474 11.3307 10.7995 10.9696 10.9036 10.7057C11.0078 10.4418 11.303 10.0807 11.7891 9.6224C12.1502 9.26129 12.4349 8.91754 12.6432 8.59115C12.8516 8.26476 12.9557 7.8724 12.9557 7.41406C12.9557 6.63629 12.671 6.03906 12.1016 5.6224C11.5321 5.20573 10.8585 4.9974 10.0807 4.9974C9.28906 4.9974 8.6467 5.20573 8.15365 5.6224C7.66059 6.03906 7.31684 6.53906 7.1224 7.1224L8.4974 7.66406C8.56684 7.41406 8.72309 7.14323 8.96615 6.85156C9.2092 6.5599 9.58073 6.41406 10.0807 6.41406C10.5252 6.41406 10.8585 6.53559 11.0807 6.77865C11.303 7.0217 11.4141 7.28906 11.4141 7.58073C11.4141 7.85851 11.3307 8.11892 11.1641 8.36198C10.9974 8.60504 10.7891 8.83073 10.5391 9.03906C9.92795 9.58073 9.55295 9.99045 9.41406 10.2682C9.27517 10.546 9.20573 11.053 9.20573 11.7891ZM9.9974 18.3307C8.84462 18.3307 7.76129 18.112 6.7474 17.6745C5.73351 17.237 4.85156 16.6432 4.10156 15.8932C3.35156 15.1432 2.75781 14.2613 2.32031 13.2474C1.88281 12.2335 1.66406 11.1502 1.66406 9.9974C1.66406 8.84462 1.88281 7.76129 2.32031 6.7474C2.75781 5.73351 3.35156 4.85156 4.10156 4.10156C4.85156 3.35156 5.73351 2.75781 6.7474 2.32031C7.76129 1.88281 8.84462 1.66406 9.9974 1.66406C11.1502 1.66406 12.2335 1.88281 13.2474 2.32031C14.2613 2.75781 15.1432 3.35156 15.8932 4.10156C16.6432 4.85156 17.237 5.73351 17.6745 6.7474C18.112 7.76129 18.3307 8.84462 18.3307 9.9974C18.3307 11.1502 18.112 12.2335 17.6745 13.2474C17.237 14.2613 16.6432 15.1432 15.8932 15.8932C15.1432 16.6432 14.2613 17.237 13.2474 17.6745C12.2335 18.112 11.1502 18.3307 9.9974 18.3307Z"
                                            fill="#BABABA" />
                                    </svg>
                                    <span class="edux-tooltips-details">Min $50 hourly rate</span>
                                </span></p>


                        </div>
                        <p class="mb-1">Total amount the client will see</p>
                    </div>
                    <div class="service-fee-input">
                        <div class="d-flex gap-4 align-items-center">
                            <div>
                                /hr
                            </div>
                            <div>
                                <x-form.input type="number" name="hourly_rate" wire:model="form.hourly_rate"
                                    placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="service-fee-input-row">
                    <div class="service-fee-description">
                        <p class="fw-medium mb-1">Platform service fee</p>
                        <p class="mb-1">The Eduexhub Service Fee Is 10%</p>
                    </div>
                    <div class="service-fee-input">
                        <div class="d-flex gap-4 align-items-center">
                            <div>
                                /hr
                            </div>
                            <div>
                                <x-form.input type="text" disabled name="platform_fee"
                                    wire:model.live="form.platform_fee" placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-fee-input-row">
                    <div class="service-fee-description">
                        <p class="fw-medium mb-1">You'll receive</p>
                        <p class="mb-1">The estimated amount you'll receive after service fees</p>
                    </div>
                    <div class="service-fee-input">
                        <div class="d-flex gap-4 align-items-center">
                            <div>
                                /hr
                            </div>
                            <div>
                                <x-form.input type="text" disabled name="total_fee" wire:model.live="form.total_fee"
                                    placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    @endif

    @if($currentStep === 3)
        <div class="mb-40">
            <h6 class="mb-2">What is the event time zone?</h6>
            <p>Time zone for opening hours and new events. Your invitees will see your availability in their
                local time zone.</p>
            <select wire:model="form.time_zone" name="" id="" class="input-field-control edux-timezoon">
                <option value="">Select time zone</option>
                @foreach ($timezoneIndetifiers as $timezone)
                    <option value="{{ $timezone }}">{{ $timezone }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-40">
            <h6 class="mb-2">Set schedule
                <div class="tooltip-wrapper bottom-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                        fill="none">
                        <path
                            d="M9.95573 15.4974C10.2474 15.4974 10.4939 15.3967 10.6953 15.1953C10.8967 14.9939 10.9974 14.7474 10.9974 14.4557C10.9974 14.1641 10.8967 13.9175 10.6953 13.7161C10.4939 13.5148 10.2474 13.4141 9.95573 13.4141C9.66406 13.4141 9.41754 13.5148 9.21615 13.7161C9.01476 13.9175 8.91406 14.1641 8.91406 14.4557C8.91406 14.7474 9.01476 14.9939 9.21615 15.1953C9.41754 15.3967 9.66406 15.4974 9.95573 15.4974ZM9.20573 12.2891H10.7474C10.7474 11.8307 10.7995 11.4696 10.9036 11.2057C11.0078 10.9418 11.303 10.5807 11.7891 10.1224C12.1502 9.76129 12.4349 9.41754 12.6432 9.09115C12.8516 8.76476 12.9557 8.3724 12.9557 7.91406C12.9557 7.13629 12.671 6.53906 12.1016 6.1224C11.5321 5.70573 10.8585 5.4974 10.0807 5.4974C9.28906 5.4974 8.6467 5.70573 8.15365 6.1224C7.66059 6.53906 7.31684 7.03906 7.1224 7.6224L8.4974 8.16406C8.56684 7.91406 8.72309 7.64323 8.96615 7.35156C9.2092 7.0599 9.58073 6.91406 10.0807 6.91406C10.5252 6.91406 10.8585 7.03559 11.0807 7.27865C11.303 7.5217 11.4141 7.78906 11.4141 8.08073C11.4141 8.35851 11.3307 8.61892 11.1641 8.86198C10.9974 9.10504 10.7891 9.33073 10.5391 9.53906C9.92795 10.0807 9.55295 10.4905 9.41406 10.7682C9.27517 11.046 9.20573 11.553 9.20573 12.2891ZM9.9974 18.8307C8.84462 18.8307 7.76129 18.612 6.7474 18.1745C5.73351 17.737 4.85156 17.1432 4.10156 16.3932C3.35156 15.6432 2.75781 14.7613 2.32031 13.7474C1.88281 12.7335 1.66406 11.6502 1.66406 10.4974C1.66406 9.34462 1.88281 8.26129 2.32031 7.2474C2.75781 6.23351 3.35156 5.35156 4.10156 4.60156C4.85156 3.85156 5.73351 3.25781 6.7474 2.82031C7.76129 2.38281 8.84462 2.16406 9.9974 2.16406C11.1502 2.16406 12.2335 2.38281 13.2474 2.82031C14.2613 3.25781 15.1432 3.85156 15.8932 4.60156C16.6432 5.35156 17.237 6.23351 17.6745 7.2474C18.112 8.26129 18.3307 9.34462 18.3307 10.4974C18.3307 11.6502 18.112 12.7335 17.6745 13.7474C17.237 14.7613 16.6432 15.6432 15.8932 16.3932C15.1432 17.1432 14.2613 17.737 13.2474 18.1745C12.2335 18.612 11.1502 18.8307 9.9974 18.8307Z"
                            fill="#BABABA" />
                    </svg>
                    <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Eum, placeat!
                    </div>
                </div>
            </h6>
            <p>
                <a class="fw-medium text-decoration-underline" href="">Schedule Your Consultation</a>
                (Max 5 schedule per day)
            </p>

            <div class="available-schedule-input-wrapper edux-schedule-input mb-40">
                <div class="available-time-select-col eudx-time-select">
                    <h6>Selected slot</h6>
                    <ul class="edux-selected-slot">
                        @if(count($form->confirmSlots) > 0)
                            @foreach ($form->confirmSlots as $day => $times)
                                <div class="row edux-padding-xs">
                                    <li class="edux-day-schedule">{{ $day }}</li>
                                        @foreach ($times as $time)
                                            <li>{{ $time }}</li>
                                        @endforeach
                                </div>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>

        </div>
        <div class="mb-40">
            <x-form.select
                name="date"
                wire:model="form.date"
                wire:change="filterDay"
                class="edux-timezoon"
                label="Select day"
            >
                @foreach ($form->daysInWeek as $day)
                    <option value="{{ $loop->first ? '' : $day }}">{{ $day }}</option>
                @endforeach
            </x-form.select>

            <div class="available-schedule-input-wrapper edux-schedule-input mb-40">
                <div class="available-time-select-col eudx-time-select">
                    <ul class="edux-selected-slot edux-selected-slot-more">
                        @php
                            $selectedHoursArray = is_array($form->selectedHours) ? $form->selectedHours : $form->selectedHours->toArray();
                        @endphp
                        @foreach ($hours as $hour)
                            @if ($editable)
                                <li wire:click="editSlot('{{ $hour }}')"
                                    class="{{ in_array($hour, $selectedHoursArray) || ($form->selectedHours instanceof Illuminate\Support\Collection && $form->selectedHours->contains($hour)) ? 'selected-date-bg' : '' }}"
                                    id="hour-{{ $loop->index }}">
                                    {{ $hour }}
                                </li>
                            @else
                                <li wire:click="addSlot('{{ $hour }}')"
                                    class="{{ in_array($hour, $form->selectedHours) ? 'selected-date-bg' : '' }}"
                                    id="hour-{{ $loop->index }}">
                                    {{ $hour }}
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>

                <button
                    wire:click="setSelectedSlots"
                    type="button"
                    class="btn btn-primary eudx-btn-save"
                >
                    Confirm
                </button>
            </div>
        </div>
    @endif

    @if($currentStep === 4)
        <div class="progress-step-content mt-40">
            <h6 class="mb-2">Consultation Summary
                <div class="tooltip-wrapper bottom-left">
                    <i class="tooltip-icon"></i>
                    <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Eum, placeat!
                    </div>
                </div>
            </h6>

            <div class="edux-select-options position-relative">
                <x-form.textarea wire:model.defer="form.description"
                    placeholder="e.g. Brief 300 words summary about your expertise." />
                <span class="edux-total-select-count">0/200</span>
            </div>

            <h6 class="mb-2 mt-5">Upload Consultation Service Picture
                <div class="tooltip-wrapper bottom-left">
                    <i class="tooltip-icon"></i>
                    <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Eum, placeat!
                    </div>
                </div>
            </h6>

            <div class="image-upload-preview">
                <div class="">
                    <div class="uploaded-img-preview">
                        @if ($form->image)
                            <img src="{{ $form->image ? $form->image->temporaryUrl() : '' }}">
                        @else
                            <img src="{{ $form->imageUrl }}">
                        @endif
                    </div>
                    <p class="text-sm fst-italic my-1">
                        Max 2MB 500px 500px
                    </p>
                </div>
                <div>
                    <label for="upload-file" class="btn btn-outline-primary d-inline-flex align-items-center">
                        <x-icon.upload fill="#0059C999" />
                        Upload Photo
                    </label>
                    <input type="file" id="upload-file" class="d-none" wire:model="form.image">
                </div>
            </div>
        </div>
    @endif






    {{-- <div class="progress-step-content mt-40">
        <div class="offered-service-card mb-40">
            <div>
                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/book-exprt2.jpg') }}" />
            </div>
            <div>
                <div class="d-flex gap-3 justify-content-sm-between">
                    <h6 class="">Architecture history</h6>
                    <p class="h6 mb-0">$120/1 hrs</p>
                </div>
                <p>Prof. Jhon dowe offers consultation services to educational institutions,
                    businesses and individuals seeking expertise in curriculum development. <span class="edux-more">
                        More...</span></p>
                <ul class="button-list edux-button-list">
                    <li class="button-list-item">
                        Accreditation Documentation
                    </li>
                    <li class="button-list-item">
                        Accreditation Process
                    </li>

                    <li class="button-list-item">
                        Educational Expertise
                    </li>

                    <li class="button-list-item">
                        Instructionḁl Design
                    </li>

                    <li class="button-list-item">
                        +10 More
                    </li>

                </ul>
            </div>
        </div>
        <div class="mb-40">

            <div class="available-schedule-input-wrapper edux-schedule-input mb-40">
                <div class="available-time-select-col eudx-time-select">
                    <h6>Selected slot</h6>
                    <ul class="edux-selected-slot">

                        <div class="row">
                            <li class="edux-day-schedule">Friday</li>
                            <li>01.00 AM</li>
                            <li>10:00 AM</li>
                            <li>04:00 PM</li>
                            <li>05:00 PM</li>
                            <li>09:00 PM</li>
                            <li>09:00 PM</li>
                        </div>

                        <div class="row">
                            <li class="edux-day-schedule">Saturday</li>
                            <li>01.00 AM</li>
                            <li>10:00 AM</li>
                            <li>04:00 PM</li>
                            <li>05:00 PM</li>
                            <li>09:00 PM</li>
                            <li>09:00 PM</li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
</div>
