@extends('frontend.layouts.app')
<style>

</style>
@section('content')

<div>
    <div class="container-main mt-5">
        <div class="row">
            <div class="col-lg-3  col-xl-3 mr-5">
                <div class="accordion c-pointer mt-3 border-bottom " id="accordionExample">
                    <div class="">
                        <div class=" d-flex justify-content-between" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h6 class="mb-0 pb-2 fw-700">
                                Scholarship Type
                            </h6>
                            <img class="" style="width:20px; height:20px;" src="{{asset('assets/frontend/default/img/scholarship/down-arrow.png')}}" alt="">
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body py-3 px-0">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                    <label class="form-check-label fs-15" for="checkbox1">
                                        University Scholarships
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                                    <label class="form-check-label fs-15" for="checkbox2">
                                        Government Scholarships
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                                    <label class="form-check-label fs-15" for="checkbox3">
                                        Project Scholarships
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion c-pointer mt-3 border-bottom" id="accordionExample2">
                    <div class="">
                        <div class="d-flex justify-content-between" id="headingOne" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <h6 class="mb-0 pb-2 fw-700">
                                Level of Study
                            </h6>
                            <img class="" style="width:20px; height:20px;" src="{{asset('assets/frontend/default/img/scholarship/down-arrow.png')}}" alt="">
                        </div>

                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample2">
                            <div class="card-body py-3 px-0">
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="ausCap1">
                                    <label class="form-check-label fs-15" for="ausCap1">
                                        Postgraduate Research
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="ausCap2">
                                    <label class="form-check-label fs-15" for="ausCap2">
                                        Postgraduate
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="ausCap2">
                                    <label class="form-check-label fs-15" for="ausCap2">
                                        Undergraduate
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion c-pointer mt-3 border-bottom" id="accordionExample3">
                    <div class="">
                        <div class="d-flex justify-content-between" id="headingOne" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            <h6 class="mb-0 pb-2 fw-700">
                                Field of Study
                            </h6>
                            <img class="" style="width:20px; height:20px;" src="{{asset('assets/frontend/default/img/scholarship/down-arrow.png')}}" alt="">
                        </div>

                        <div id="collapseThree" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample3">
                            <div class="card-body py-3 px-0">
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType1">
                                    <label class="form-check-label fs-15" for="suppType1">
                                        Agriculture and Environmental Sciences
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType2">
                                    <label class="form-check-label fs-15" for="suppType2">
                                        Arts and Humanities
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType3">
                                    <label class="form-check-label fs-15" for="suppType3">
                                        Business and Economics
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType3">
                                    <label class="form-check-label fs-15" for="suppType3">
                                        Education
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType3">
                                    <label class="form-check-label fs-15" for="suppType3">
                                        Health and Medicine
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType3">
                                    <label class="form-check-label fs-15" for="suppType3">
                                        Law
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType3">
                                    <label class="form-check-label fs-15" for="suppType3">
                                        Mathematics and Statistics
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType3">
                                    <label class="form-check-label fs-15" for="suppType3">
                                        Physical Education and Sports Science
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType3">
                                    <label class="form-check-label fs-15" for="suppType3">
                                        Science and Engineering
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="suppType3">
                                    <label class="form-check-label fs-15" for="suppType3">
                                        Social Sciences
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion c-pointer mt-3 border-bottom" id="accordionExample4">
                    <div class="">
                        <div class=" d-flex justify-content-between" id="headingOne" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            <h6 class="mb-0 pb-2 fw-700">
                                Location
                            </h6>
                            <img class="" style="width:20px; height:20px;" src="{{asset('assets/frontend/default/img/scholarship/down-arrow.png')}}" alt="">
                        </div>
                        <!-- search box -->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <!-- here button -->
                            </div>
                        </div>

                        <div id="collapseFour" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample4">
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
                                        Austria
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location3">
                                    <label class="form-check-label fs-15" for="location3">
                                        Belgium
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location4">
                                    <label class="form-check-label fs-15" for="location4">
                                        Brazil
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location5">
                                    <label class="form-check-label fs-15" for="location5">
                                        Canada
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location6">
                                    <label class="form-check-label fs-15" for="location6">
                                        China
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location7">
                                    <label class="form-check-label fs-15" for="location7">
                                        Denmark
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location8">
                                    <label class="form-check-label fs-15" for="location8">
                                        Finland
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location9">
                                    <label class="form-check-label fs-15" for="location9">
                                        France
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location10">
                                    <label class="form-check-label fs-15" for="location10">
                                        Germany
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location11">
                                    <label class="form-check-label fs-15" for="location11">
                                        Hong Kong
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location12">
                                    <label class="form-check-label fs-15" for="location12">
                                        India
                                    </label>
                                </div>
                                <div class="form-check  mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="location13">
                                    <label class="form-check-label fs-15" for="location13">
                                        Ireland
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                <button class="border-0  text-white fs-16  btn btn-primary px-3 py-2 mt-3">Submit</button>
                </div>
            </div>


            <div class="col-lg-9 col-xl-8 ">
                @foreach($scholarships as $scholarship )

                <div class="">
                    <div class="row py-4">
                        <div class="col-lg-2 ">
                            <div class="d-flex justify-content-center w-100">

                                <img src="{{ custom_asset($scholarship->banner) }}" alt="{{ $scholarship->title }}" class="img-fluid lazyload mb-3">
                            </div>

                            <a href="{{$scholarship->website_link}}" class="d-flex justify-content-center text-white btn c-pointer px-4  py-1" style="background: #275846;" target="_blank">
                                Website
                            </a>
                        </div>
                        <div class="col-lg-10 border-gray-400">
                            <h2 class="fs-18 fw-700 mb-1 bg-white d-flex justify-content-between">
                                <a href="{{ route('scholarship.details', $scholarship->slug) }}" class=" fs-16 fw-700 pb-1 " title="{{ $scholarship->title }}" style="border-bottom: 2px solid  #000003; color: #000003">
                                    {{ \Illuminate\Support\Str::limit($scholarship->title, 50, $end = '...') }}
                                </a>
                                <img src="{{asset('assets/frontend/default/img/scholarship/heart.png')}}" alt="">
                            </h2>
                            <div>
                                @if($scholarship->university != null)
                                <div class="  ">
                                    <p class=" fre-scsh-uni-name"> {{ $scholarship->university->university_name }} |
                                        @if($scholarship->country !=null)
                                    {{ $scholarship->country->	country_name }}
                                    @endif
                                    </p>
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


                                    <p class="fre-scsh-right-side-details text-justify ">
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
                                        Level of Study:
                                    </p>
                                </div>
                                <div class="col-8  pl-0">
                                    @if($scholarship->level != null)
                                    <p class="fre-scsh-right-side-details">{{ $scholarship->level->level_name }}</p>
                                    @endif
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-lg-4  pr-0">

                                    <p class=" fre-scsh-left-side-title ">
                                        Field of Study:
                                    </p>
                                </div>
                                <div class="col-lg-8  pl-0">

                                    <p class=" fre-scsh-right-side-details text-justify ">
                                        Agriculture and Environmental Sciences | Arts and Humanities | Business and Economics
                                        |Education | Health and Medicine | Law | Mathematics and Statistics | Physical Education
                                        and Sports Science | Science and Engineering | Social Sciences
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <p class="fre-scsh-left-side-title">
                                        Who can Apply:
                                    </p>
                                </div>
                                <div class="col-8 pl-0">
                                    @if($scholarship->WhoCanApply != null)

                                    <p class="fre-scsh-right-side-details">{{ $scholarship->WhoCanApply->title}}
                                    </p>
                                    @endif
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-4  pr-0">

                                    <p class=" fre-scsh-left-side-title ">
                                        Need help with your Application:
                                    </p>
                                </div>
                                <div class="col-lg-8  pl-0">

                                    <p class=" fre-scsh-right-side-details text-justify ">
                                        Would you like someone experienced to review and give
                                        feedback prior to submitting your scholarship
                                        application? Scholarships Australia can assist you to
                                        get connected with consultants who are previous
                                        scholarship recipients in your field to ensure you
                                        submit a competitive application.
                                        <!-- <a class="fre-scsh-find-more-btn m-0">
                                            Find a consultant
                                        </a> -->
                                    </p>
                                    <button class="border-0  text-white fs-16  btn  px-3 py-2 m-0" style="background: #275846;">Find a consultant</button>
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
