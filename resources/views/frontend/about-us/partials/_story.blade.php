<section class="page-section bg-white company-story">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div style="margin-bottom: 24px" class="section-title-wrapper">
                    <h2 class="section-title">{{ Str::upper($aboutUsDTO->story_subtitle) }}</h2>
                    <p class="section-title-lead">{{ Str::headline($aboutUsDTO->story_title) }}</p>
                </div>
                <div class="section-content">
                    {!! nl2br(e($aboutUsDTO->story_description)) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-image">
                    <img src="{{ $about ? $about->storyImage() : ''}}">
                </div>
            </div>
        </div>
    </div>
</section>
