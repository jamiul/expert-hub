@extends('frontend.default.layouts.app')
<style>

</style>
@section('content')

<!-- <section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate('All Scholarship')}}</h1>

                <button type="button" class=" w-25 shadow-lg bg-white  c-pointer border-0" id="openModalButton">
                    <div class="d-flex justify-content-center align-items-center px-5 py-2 ">
                        <img class="mx-2" src="{{my_asset('assets/frontend/default/img/scholarship/filter.png')}}" alt="">
                        <p class=" text-black fs-20 text-center m-0">Filters</p>
                    </div>
                </button>

            </div>

        </div>




    </div>
</section> -->

<!-- <div class="container-main">
    <div class="row ">
        <div class="col-lg-12 col-sm-12">
            <div class="row">
                @foreach($scholarships as $scholarship)
                <div class="col-lg-4 col-12">
                    <div class="card mb-3 overflow-hidden rounded-2 border-gray-light hov-box">
                        <a href="{{ route('scholarship.details', $scholarship->slug) }}" class="text-reset d-block position-relative">
                            <img src="{{ custom_asset($scholarship->banner) }}" alt="{{ $scholarship->title }}" class="img-fluid lazyload  w-100" style="height: 260px;">
                        </a>
                        <div class="p-4">
                            <h2 class="fs-18 fw-600 mb-1 position-absolute bg-white mx-1" style="top:190px; left:0px">
                                <a href="{{ route('scholarship.details', $scholarship->slug) }}" class="text-dark fs-20 fw-700" title="{{ $scholarship->title }}">
                                    {{ \Illuminate\Support\Str::limit($scholarship->title, 50, $end = '...') }}
                                </a>
                            </h2>
                            @if($scholarship->university != null)
                            <div class="  ">
                                <p class="text-decoration-underline text-muted fs-20 fw-500">At {{ $scholarship->university->university_name }}</p>
                            </div>
                            @endif
                            <div class="mt-5 border-1 border-danger w-25">
                            </div>

                            qualification and funding type
                            <div class="mt-5">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="d-flex">
                                            <img class="mr-4 my-auto" src="{{my_asset('assets/frontend/default/img/scholarship/mortarboard.png')}}" alt="">
                                            <div>
                                                <h5 class="mb-1 text-muted fs-18">Qualification</h5>
                                                <p class="m-0 fs-14 " style="color:#559A7F">Masters Degrees </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="d-flex">
                                            <img class="mr-4 my-auto" src="{{my_asset('assets/frontend/default/img/scholarship/dollar-currency-symbol.png')}}" alt="">
                                            <div>
                                                <h5 class="mb-1 text-muted fs-18">Funding Type</h5>
                                                <p class="m-0 fs-14 " style="color:#559A7F">Fee waiver/discount</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <p class="mb-4 fs-14 text-secondary opacity-70">{{ $scholarship->created_at ? date('d.m.Y',strtotime($scholarship->created_at)) : '' }}</p>
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="aiz-pagination aiz-pagination-center mt-4">
                    {{ $scholarships->links() }}
                </div>
            </div>
        </div>
    </div>


</div> -->
<div>
    <div class="container-main mt-5">
        <div class="row">
            <div class="col-lg-3 ">
                <div class="accordion c-pointer mt-3 border-bottom" id="accordionExample">
                    <div class="">
                        <div class=" d-flex justify-content-between" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0 pb-2">
                                Scholarship type
                            </h5>
                            <img class="" src="{{my_asset('assets/frontend/default/img/scholarship/down-arrow.png')}}" alt="">
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body py-3 px-0">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                    <label class="form-check-label fs-15" for="checkbox1">
                                      University Scholarship
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                                    <label class="form-check-label fs-15" for="checkbox2">
                                       Government Scholarship
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                                    <label class="form-check-label fs-15" for="checkbox3">
                                       Project Scholarship
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox4">
                                    <label class="form-check-label fs-15" for="checkbox4">
                                       External Scholarship
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion c-pointer mt-3 border-bottom" id="accordionExample2">
                    <div class="">
                        <div class="d-flex justify-content-between" id="headingOne" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <h5 class="mb-0 pb-2">
                                Level of Study
                            </h5>
                            <img class="" src="{{my_asset('assets/frontend/default/img/scholarship/down-arrow.png')}}" alt="">
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
                            <div class="card-body py-3 px-0">
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="ausCap1">
                                    <label class="form-check-label fs-15" for="ausCap1">
                                       Undergraduate
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="ausCap2">
                                    <label class="form-check-label fs-15" for="ausCap2">
                                        Postgraduate
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion c-pointer mt-3 border-bottom" id="accordionExample3">
                    <div class="">
                        <div class="d-flex justify-content-between" id="headingOne" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            <h5 class="mb-0 pb-2">
                                Field of Study 
                            </h5>
                            <img class="" src="{{my_asset('assets/frontend/default/img/scholarship/down-arrow.png')}}" alt="">
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample3">
                            <div class="card-body py-3 px-0">
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType1">
                                    <label class="form-check-label fs-15" for="suppType1">
                                        Scholarship
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType2">
                                    <label class="form-check-label fs-15" for="suppType2">
                                        Allowance
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType3">
                                    <label class="form-check-label fs-15" for="suppType3">
                                        Cadetship
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion c-pointer mt-3 border-bottom" id="accordionExample4">
                    <div class="">
                        <div class=" d-flex justify-content-between" id="headingOne" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            <h5 class="mb-0 pb-2">
                                Location
                            </h5>
                            <img class="" src="{{my_asset('assets/frontend/default/img/scholarship/down-arrow.png')}}" alt="">
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample4">
                            <div class="card-body py-3 px-0">
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location1">
                                    <label class="form-check-label fs-15" for="location1">
                                       Australia
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location2">
                                    <label class="form-check-label fs-15" for="location2">
                                        Canada
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location3">
                                    <label class="form-check-label fs-15" for="location3">
                                       USA
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 ">
                @foreach($scholarships as $scholarship)
                <div class="">
                    <div class="row">
                        <div class="col-lg-2 ">
                            <div class="d-flex justify-content-center w-100">
                                <img src="{{ custom_asset($scholarship->banner) }}" alt="{{ $scholarship->title }}" class="img-fluid lazyload ">
                            </div>

                            <p class=" ml-[32px] w-[120px] min-w-[150px] rounded-2 text-white text-center c-pointer px-3 mt-2" style="background: #304F40;">
                                Website
                            </p>
                        </div>
                        <div class="col-lg-10 border-gray-400">
                            <h2 class="fs-18 fw-700 mb-1 bg-white mx-1">
                                <a href="{{ route('scholarship.details', $scholarship->slug) }}" class=" fs-16 fw-700 pb-1 " title="{{ $scholarship->title }}" style="border-bottom: 1px solid  #304F40; color: #304F40">
                                    {{ \Illuminate\Support\Str::limit($scholarship->title, 50, $end = '...') }}
                                </a>
                            </h2>
                            <div>
                                @if($scholarship->university != null)
                                <div class="  ">
                                    <p class=" fre-scsh-uni-name"> {{ $scholarship->university->university_name }}</p>
                                </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-4 pr-0">
                                    <p class="fre-scsh-left-side-title">
                                        Scholarships Overview:
                                    </p>
                                </div>
                                <div class="col-8 pl-0">


                                    <p class="fre-scsh-right-side-details ">
                                        The Western Sydney University provides a wide range of research scholarships to support
                                        domestic and international research candidates. Scholarships are awarded based on a
                                        competitive process and are open to both new and current candidates
                                        <a class="fre-scsh-find-more-btn">
                                            Find more
                                        </a>
                                    </p>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-4 ">
                                    <p class="fre-scsh-left-side-title mb-1">
                                        Level of study:
                                    </p>
                                </div>
                                <div class="col-8 pl-0">
                                    @if($scholarship->level != null)
                                    <p class="fre-scsh-right-side-details">{{ $scholarship->level->level_name }}</p>
                                    @endif
                                </div>


                            </div>


                            <div class="row">
                                <div class="col-4">
                                    <p class="fre-scsh-left-side-title">
                                        Who can apply?
                                    </p>
                                </div>
                                <div class="col-8 pl-0">
                                    <p class="fre-scsh-right-side-details">
                                        Domestic and international applicants

                                    </p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4 pr-0">

                                    <p class=" fre-scsh-left-side-title">
                                        Help with your Application:
                                    </p>
                                </div>
                                <div class="col-8 pl-0">

                                    <p class=" fre-scsh-right-side-details ">
                                        Would you like someone experienced to review and give
                                        feedback prior to submitting your scholarship
                                        application? Scholarships Australia can assist you to
                                        get connected with consultants who are previous
                                        scholarship recipients in your field to ensure you
                                        submit a competitive application.
                                        <a class="fre-scsh-find-more-btn m-0">
                                            Find a scholarship consultant
                                        </a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="lg:mx-10 lg:mb-20 border-t-2"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
