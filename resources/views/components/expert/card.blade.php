@props([
    'expert' => null,
    'url' => null
])
<div class="project-expert-card border-bottom">
    <div class="project-expert-thumb">
        <img class="rounded-circle" src="{{ $expert->picture }}"/>
    </div>
    <div class="project-expert-details">
        <div class="expert-card-header">
            <div class="expert-card-header-info">
                <p class="project-expert-profile-flag">Best Match</p>
                <a href="{{ $url ?? route('expert.profile.show', $expert) }}">
                    <h3 class="h6 project-expert-name mb-0">{{ $expert->user->full_name }}</h3>
                </a>
                <ul class="project-expert-meta">
                    <li>{{ $expert->expertField->name }}</li>
                    <li>Melbourne University</li>
                    <li>{{ $expert->user->country->name }}</li>
                </ul>
                <div class="d-flex gap-3 align-items-center">
                    <div class="project-expert-profile-status">
                        Available now
                    </div>
                </div>
            </div>
            <div class="expert-card-header-action">
                {{ $slot }}
            </div>
        </div>
        <div class="expert-card-body">
            <div class="project-expert-summary py-3">
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
                        <a href="#" class="expert-profile-tag">{{ $skill->name }}</a>
                    @endforeach
            </div>
        </div>
    </div>
</div>