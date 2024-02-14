<div class="progress-step-content mt-40">
    <div class="offered-service-card mb-40">
        <div>
            @if ($form->image)
                <img src="{{ $form->image ? $form->image->temporaryUrl() : '' }}">
            @else
                <img src="{{ $form->imageUrl }}">
            @endif
        </div>
        <div>
            <div class="d-flex gap-3 justify-content-sm-between">
                <h6 class="">{{ $form->previewExpertise }}</h6>
                <p class="h6 mb-0">${{ $form->hourly_rate }}/1 hrs</p>
            </div>
            <p>
                {{ $form->description }}
                <span class="edux-more">More...</span>
            </p>
            <ul class="button-list edux-button-list">
                @foreach ($form->expertiseSkills as $skill)
                    <li class="button-list-item">
                        {{ $skill->name }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="mb-40">
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
</div>