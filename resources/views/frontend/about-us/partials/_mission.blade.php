<div class="about-mission">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mission-img">
                    <img src="{{ $about ? $about->missionImage() : '#'}}"></img>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mission-text">
                    <div class="heading">
                        <h4>{{ $aboutUsDTO->mission_subtitle }}</h4>
                        <h2>{{ $aboutUsDTO->mission_title }}</h2>
                        <p>{!! nl2br(e($aboutUsDTO->mission_description)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
