<div class="expert-carousel-slider owl-carousel owl-theme">
    @if (count($experts) > 0)
        @foreach ($experts as $expert)
            <a href="{{ route('expert.profile.show', $expert) }}">
                <div class="expert-slider-item">
                    <div class="expert-slider-img">
                        <img src="{{ $expert->picture }}">
                    </div>
                    <div class="expert-slider-info">
                        <h4>{{ $expert->user->full_name }}</h4>
                        <p>{{ $expert->expertField ? $expert->expertField->parent->name : '' }}</p>
                        <p class="text-primary">Oxford University</p>
                    </div>
                </div>
            </a>
        @endforeach
    @endif
</div>
