<!-- details side or right side -->
<div class="">
    <div class=" ">
        {{-- Biography  --}}
        <div class="tab-content mx-lg-4 rounded border mb-4 px-2" id="nav-tabContent">
            <div class="tab-pane fade show active mt-4 px-3" id="list-home" role="tabpanel"
                 aria-labelledby="list-home-list">
                <div class="d-flex justify-content-between mt-3 ">
                    <h4 class="fw-700 fs-23 text-black  ">Biography </h4>
                    <h4 class="fw-700 fs-16 text-black">{{ single_price($freelancer->profile->hourly_rate) }}/hr</h4>
                </div>
                <div class="mt-3">
                    <p class="fs-16  biography-info">{{ $freelancer->profile->bio }}</p>
                </div>
            </div>
        </div>

        {{-- //todo: add consultation --}}
        @include('frontend.expert.consultation')
    </div>

    @if ($freelancer->workExperiences != null)
        @include('frontend.expert.work-experience')
    @endif

    {{-- //todo: add current and finished projects --}}
    @include('frontend.expert.projects')

    @if ($freelancer->userPortfolios != null)
        @include('frontend.expert.portfolio')
    @endif

    {{-- //todo: add testimonials --}}
    @include('frontend.expert.testimonials')
</div>
