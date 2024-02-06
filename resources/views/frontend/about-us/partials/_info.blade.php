<section class="page-section bg-white bb-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div style="margin-bottom: 24px" class="section-title-wrapper">
                    <h2 class="section-title">{{ Str::upper($aboutUsDTO->area_subtitle) }}</h2>
                    <p class="section-title-lead">{{ Str::headline($aboutUsDTO->area_title) }}</p>
                </div>
                <div>
                    {!! nl2br(e($aboutUsDTO->area_description)) !!}
                </div>
            </div>
        </div>
    </div>
</section>
