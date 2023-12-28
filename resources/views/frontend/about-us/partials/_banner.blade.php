<div class="about-banner">
    <div class="about-img">
        <img src="{{ $about ? $about->headerImage() : '#'}}">
    </div>
    <div class="banner-text">
        <div class="container">
            <h3>{!! nl2br(e(addNewLine($aboutUsDTO->header_subtitle, 10))) !!}</h3>
        </div>
    </div>
</div>
