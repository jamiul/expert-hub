<div class="mb-40">
    <h6 class="mb-2">What is the event time zone?</h6>
    <p>Time zone for opening hours and new events. Your invitees will see your availability in their
        local time zone.</p>

    <x-form.select name="time_zone" wire:model="form.time_zone" class="edux-timezoon" label="Select time zone">
        <option value="">Select time zone</option>
        @foreach ($timezoneIndetifiers as $timezone)
            <option value="{{ $timezone }}">{{ $timezone }}</option>
        @endforeach
    </x-form.select>
</div>
<div class="mb-40">
    <h6 class="mb-2">Set schedule
        <div class="tooltip-wrapper bottom-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
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

    <div class="available-schedule-input-wrapper edux-schedule-input edux-schedule-input-single mb-40">
        <div class="available-time-select-col eudx-time-select">
            <h6>Selected slot</h6>
            <ul class="edux-selected-slot">
                @if (count($form->confirmSlots) > 0)
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
    <x-form.select name="day" wire:model="form.day" wire:change="filterDay" class="edux-timezoon"
        label="Select day">
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
        <div>
            @error('error')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <button wire:click="setSelectedSlots" type="button" class="btn btn-primary eudx-btn-save">
            Confirm
        </button>
    </div>
</div>
