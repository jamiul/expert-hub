<section class="page-section page-section-bg company-mission-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="section-image">
                    <img src="{{ asset('assets/frontend/img/company-mission.jpg') }}"/>
                </div>
            </div>
            <div class="col-md-7">
                <div class="section-content">
                    <div style="margin-bottom: 24px; max-width: 544px" class="section-title-wrapper">
                        <h2 class="section-title">{{ Str::upper($aboutUsDTO->mission_subtitle) }}</h2>
                        <p class="section-title-lead">{{ Str::headline($aboutUsDTO->mission_title) }}</p>
                    </div>

                   {!! nl2br(e($aboutUsDTO->mission_description)) !!}
                </div>
            </div>
        </div>
    </div>
</section>
