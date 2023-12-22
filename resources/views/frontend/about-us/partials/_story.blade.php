<div class="about-mission about-story">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mission-text">
                    <div class="heading">
                        <h4>{{ $aboutUs->story_subtitle }}</h4>
                        <h2>{{ $aboutUs->story_title }}</h2>
                        <p>{!! nl2br(e($aboutUs->story_description)) !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mission-img">
                    <img src="{{ $aboutUs->storyImage() }}" alt="Story Image">
                </div>
            </div>
        </div>
    </div>
</div>
