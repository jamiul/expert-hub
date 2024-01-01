<div class="about-banner">
    <div class="about-img">
        <img src="{{ $about->headerImage() ?? '' }}">
    </div>
    <div class="banner-text">
        <div class="container">
            <h3>{!! nl2br(e(Str::headline($aboutUsDTO->header_subtitle))) !!}</h3>
        </div>
    </div>
</div>
