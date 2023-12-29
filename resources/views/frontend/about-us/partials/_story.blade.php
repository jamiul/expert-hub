<div class="about-mission about-story">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mission-text">
                    <div class="heading">
                        <h4>{{ $aboutUsDTO->story_subtitle }}</h4>
                        <h2>{{ capitalizedString($aboutUsDTO->story_title) }}</h2>
                        <p>{!! nl2br(e($aboutUsDTO->story_description)) !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mission-img">
                    <img src="{{ $about->storyImage() ?? ''}}">
                </div>
            </div>
        </div>
    </div>
</div>
