{{--<div class="about-banner">--}}
{{--    <div class="about-img">--}}
{{--        <img src="{{ $about->headerImage() ?? '' }}">--}}
{{--    </div>--}}
{{--    <div class="banner-text">--}}
{{--        <div class="container">--}}
{{--            <h3>{!! nl2br(e(Str::headline($aboutUsDTO->header_title))) !!}</h3>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<section class="inner-page-banner">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="page-title-wrapper">
                    <h1>Welcome to ExpertGate, your ultimate resource for academic empowerment.</h1>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/frontend/img/about-banner-img.png') }}"/>
            </div>
        </div>
    </div>
</section>
