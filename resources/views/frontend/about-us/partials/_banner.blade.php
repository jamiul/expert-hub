<div class="about-banner">
    <div class="about-img">
        <img src="{{ $about ? $about->headerImage() : '#'}}" alt="Banner Image">
    </div>
    <div class="banner-text">
        <div class="container">
            <h3>{{ $aboutUsDTO->header_subtitle }}</h3>
        </div>
    </div>
</div>
