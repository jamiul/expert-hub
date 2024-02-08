@props([
    'expert' => null,
    'card' => false
])
<div class="project-expert-card @if($card == false) border-0 p-0 @endif mb-20">
    <div class="project-expert-thumb">
        <img class="rounded-circle" src="{{ $expert->picture }}"/>
    </div>
    <div class="project-expert-details d-flex align-items-center">
        <div class="expert-card-header">
            <div class="expert-card-header-info">
                <h3 class="h6 project-expert-name mb-0">{{ $expert->user->full_name }}</h3>
                <ul class="project-expert-meta mb-1">
                    <li>{{ $expert->expertField->name }}</li>
                    <li>Melbourne University</li>
                    <li>{{ $expert->user->country->name }}</li>
                </ul>
            </div>
        </div>
        {{ $slot }}
    </div>
</div>