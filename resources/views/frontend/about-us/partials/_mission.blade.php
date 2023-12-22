<div class="about-mission">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mission-img">
                    <img src="{{ $aboutUs->missionImage() }}"></img>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mission-text">
                    <div class="heading">
                        <h4>{{ $aboutUs->mission_subtitle }}</h4>
                        <h2>{{ $aboutUs->mission_title }}</h2>
                        <p>{!! nl2br(e($aboutUs->mission_description)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
