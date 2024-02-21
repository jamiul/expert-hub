@props([
'expert' => null,
'url' => null
])
<div class="expert-card border-bottom">
    <div class="expert-card-header mb-2">
        <div class="expert-thumb">
            <div class="expert-thumb-box">
                <img src="{{ $expert->picture }}"/>
            </div>
        </div>
        <div class="expert-info">
            <p class="project-expert-profile-flag">Best Match</p>

            <h3 class="h6 project-expert-name mb-0">
                <a href="{{ $url ?? route('expert.profile.show', $expert) }}">
                    {{ $expert->user->full_name }}
                </a>
            </h3>

            <ul class="expert-meta">
                <li>{{ $expert->expertField->name }}</li>
                <li>Melbourne University</li>
                <li>{{ $expert->user->country->name }}</li>
            </ul>
        </div>
        <div class="expert-card-action">
            {{ $slot }}
        </div>
    </div>

    <div class="expert-card-body">
        <div class="d-flex gap-3 align-items-center">
            <div class="expert-profile-status">
                Available now
            </div>
        </div>
        <div class="expert-summary py-3">
            <p class="text-summary">
                {{ $expert->biography }}
            </p>
        </div>
        <div class="tag-list">
            <a href="#"
               class="expert-profile-tag offer-consultation-btn">
                <x-icon.video fill="#0036E3"/>
                Offer Consultation</a>
            @foreach ($expert->expertises as $skill)
                <a href="#" class="tag">{{ $skill->name }}</a>
            @endforeach
        </div>
    </div>



</div>
