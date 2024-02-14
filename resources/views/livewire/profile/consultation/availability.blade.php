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
            <x-icon.what  fill="#BABABA"/>
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
