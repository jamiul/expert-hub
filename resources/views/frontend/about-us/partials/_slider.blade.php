<div class="about-slider">
    <div class="container">
        <div class="heading">
            <h4>{{ Str::upper($aboutUsDTO->instructor_subtitle) }}</h4>
            <h2>{{ Str::headline($aboutUsDTO->instructor_title) }}</h2>
        </div>
        <div id="owl-carousel" class="owl-carousel owl-theme">
            @if (count($experts) > 0)
                @foreach ($experts as $expert)
                    <div class="item">
                        <div class="carousel-img">
                            <img src="{{ $expert->getFirstMediaUrl('picture') }}">
                        </div>
                        <div class="carousel-text">
                            <h4>{{ $expert->user->full_name }}</h4>
                            <p>{{ $expert->expertField ? $expert->expertField->name : '' }}</p>
                            <h5>Oxford University</h5>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <div class="row">
            <div class="single-button d-flex justify-content-center mt-5">
                <x-button.link href="{{ route('find.experts') }}" class="btn btn-primary edux-btn-primary" text="View All" />
            </div>
        </div>
    </div>
</div>
