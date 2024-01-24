<div class="about-slider">
    <div class="container">
        <div class="heading">
            <h4>{{ Str::upper($instructor_subtitle) }}</h4>
            <h2>{{ Str::headline($instructor_title) }}</h2>
        </div>

        <div id="owl-carousel" class="owl-carousel owl-theme">
            @if (count($experts) > 0)
                @foreach ($experts as $expert)
                <a href="{{ route('expert.profile.show', $expert) }}">
                    <div class="item">
                        <div class="carousel-img">
                            <img src="{{ $expert->picture }}">
                        </div>
                        <div class="carousel-text">
                            <h4>{{ $expert->user->full_name }}</h4>
                            <p>{{ $expert->expertField ? $expert->expertField->parent->name : '' }}</p>
                            <h5>Oxford University</h5>
                        </div>
                    </div>
                </a>

                @endforeach
            @endif
        </div>

        <div class="row">
            <div class="single-button d-flex justify-content-center">
                <a href="{{ route('find.experts') }}" class="btn edux-btn-border-primary">View All</a>
            </div>
        </div>
    </div>
</div>
