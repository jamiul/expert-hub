<div class="about-info">
    <div class="container">
        <div class="heading">
            <h4>{{ $aboutUsDTO->area_subtitle }}</h4>
            <h2>{{ capitalizedString($aboutUsDTO->area_title) }}</h2>
            <p>{!! nl2br(e($aboutUsDTO->area_description)) !!}</p>
        </div>
    </div>
</div>
