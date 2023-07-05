<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{my_asset('assets/frontend/default/css/services-listing.css')}}">
</head>

<body>
    @extends('frontend.default.layouts.app')

    @section('content')

    <section class="">
        <div class="container-main-service">
            <form id="service-filter-form" action="" method="GET">


                <div class="row  mt-3">
                    <div class="col-xl-3 col-lg-4 " style="background: #F2F7F2;">
                        <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg z-1035">
                            <h5 class="mb-0 fs-21 fw-700 mb-3 mt-2">{{ translate('Filter By') }}</h5>
                            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                        </div>

                        <h6 class="text-left mt-4 mb-3 fs-14 fw-700">
                            <span class=" pr-3">{{ translate('Delivery Time') }}</span>
                        </h6>
                        <div class="aiz-radio-list">
                            <label class="aiz-radio">
                                <input type="radio" name="delivery_time" value="Express 24H" onchange="applyFilter()" @if ($delivery_time=="Express 24H" ) checked @endif>
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Express 24H') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-rounded-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <label class="aiz-radio">
                                <input type="radio" name="delivery_time" value="Up to 3 days" onchange="applyFilter()" @if ($delivery_time=="Up to 3 days" ) checked @endif>
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Up to 3 days') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-rounded-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <label class="aiz-radio">
                                <input type="radio" name="delivery_time" value="Up to 7 days" onchange="applyFilter()" @if($delivery_time=="Up to 7 days" ) checked @endif>
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Up to 7 days') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-rounded-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <label class="aiz-radio">
                                <input type="radio" name="delivery_time" value="Anytime" onchange="applyFilter()" @if ($delivery_time=="Anytime" ) checked @endif>
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Anytime') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-rounded-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                        </div>

                        <!-- budget -->
                        <h6 class="text-left mt-4 mb-3 fs-14 fw-700">
                            <span class=" pr-3">{{ translate('Budget') }}</span>
                        </h6>
                        <div class="price-input">
                            <div class="price-input-field mr-2">
                                <span>Min</span>
                                <input type="number" class="input-min" value="2500" step="50">
                            </div>

                            <div class="price-input-field">
                                <span>Max</span>
                                <input type="number" class="input-max" value="7500" step="50">
                            </div>
                        </div>

                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="10000" value="2500" step="50">
                            <input type="range" class="range-max" min="0" max="10000" value="7500" step="50">
                        </div>

                        <!-- design tools -->
                        <h6 class="text-left mt-4 mb-3 fs-14 fw-700">
                            <span class=" pr-3">{{ translate('Design Tools') }}</span>
                        </h6>
                        <div class="aiz-checkbox-list">
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="level_id[]" value="" onchange="applyFilter()">
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Adobe Photoshop') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-square-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="level_id[]" value="" onchange="applyFilter()">
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Sketch') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-square-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="level_id[]" value="" onchange="applyFilter()">
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Adobe XD') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-square-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="level_id[]" value="" onchange="applyFilter()">
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Balsamiq') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-square-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <p class="text-primary fs-15 fw-500 mb-2 c-pointer">+20 more </p>
                        </div>
                        <!-- Country -->
                        <h6 class="text-left mt-4 mb-3 fs-14 fw-700">
                            <span class=" pr-3">{{ translate('Country') }}</span>
                        </h6>
                        <div class="mb-5">

                            <select multiple class="select2 form-control aiz-selectpicker rounded-1" name="country_id[]" onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                                <option value="0">{{ translate('All Countries') }}</option>
                                @foreach(\App\Models\ScholarshipCountry:: all() as $country)
                                <option value="{{ $country->id }}">{{ $country->country_name }}
                                    <span class="text-muted">(1000)</span>
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Speaks -->
                        <h6 class="text-left mt-4 mb-3 fs-14 fw-700">
                            <span class=" pr-3">{{ translate('Speaks') }}</span>
                        </h6>
                        <div class="aiz-checkbox-list">
                            <input type="checkbox" id="fre-speaks-more-opt">
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="speaks[]" value="Turkish" onchange="applyFilter()" @if(in_array("Turkish",$speaks)) checked @endif>
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Turkish') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-square-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="speaks[]" value="English" onchange="applyFilter()" @if(in_array("English",$speaks)) checked @endif>
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('English') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-square-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="speaks[]" value="Italian" onchange="applyFilter()" @if(in_array("Italian",$speaks)) checked @endif>
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Italian') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-square-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="speaks[]" value="Spanish" onchange="applyFilter()" @if(in_array("Spanish",$speaks)) checked @endif>
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Spanish') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-square-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>

                            <div class="fre-speaks-more-value">
                                <label class="aiz-checkbox">
                                    <input type="checkbox" name="speaks[]" value="Russian" onchange="applyFilter()" @if(in_array("Russian",$speaks)) checked @endif>
                                    <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                        <span>{{ translate('Russian') }}</span>
                                        <span class="text-muted">(1000)</span>
                                    </div>
                                    <span class="aiz-square-check"></span>
                                    <span class="float-right text-secondary fs-12"></span>
                                </label>


                                <label class="text-primary fs-15 fw-500 mb-2 c-pointer" for="fre-speaks-more-opt">Show less </label>
                            </div>
                            <label class="fre-more-option-off text-primary fs-15 fw-500 mb-2 c-pointer  " for="fre-speaks-more-opt">
                                +20 more
                            </label>
                        </div>

                        <!-- Level -->
                        <h6 class="text-left mt-4 mb-3 fs-14 fw-700">
                            <span class=" pr-3">{{ translate(' Level') }}</span>
                        </h6>
                        <div class="aiz-checkbox-list">
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="level[]" value="Top Rated Seller" onchange="applyFilter()" @if(in_array("Top Rated Seller",$level)) checked @endif>
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Top Rated Seller') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-square-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="level[]" value="Level Two" onchange="applyFilter()" @if(in_array("Level Two",$level)) checked @endif>
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Level Two') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-square-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="level[]" value="Level One" onchange="applyFilter()" @if(in_array("Level One",$level)) checked @endif>
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('Level One') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-square-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="level[]" value="New Seller" onchange="applyFilter()" @if(in_array("New Seller",$level)) checked @endif>
                                <div class="w-100 d-flex justify-content-between align-content-center  service-toggle-list">
                                    <span>{{ translate('New Seller') }}</span>
                                    <span class="text-muted">(1000)</span>
                                </div>
                                <span class="aiz-square-check"></span>
                                <span class="float-right text-secondary fs-12"></span>
                            </label>

                        </div>


                    </div>

                    <!-- services right part -->
                    <div class="col-xl-9 col-lg-8">

                        <div style="background:#FCEBE5">
                            <div class="row rounded-0 px-2 mx-4">
                                <div class="col-lg-6 col-sm-12 my-auto">
                                    <h3 class="text-black fw-700 fs-30  ">Design & Creative</h3>
                                    <p class="fw-400 text-black fs-15 mb-2">Give your visitor a smooth online experience with a solid UX design</p>
                                    <div class="d-flex align-items-center ">
                                        <div class="bg-white rounded-circle">
                                            <img class=" px-2 py-2 center d-block" src="{{my_asset('assets/frontend/default/img/servicesList/video_icon.svg')}}" alt="" style="height:30px">
                                        </div>
                                        <p class="fw-400 text-black fs-15 ml-2 mb-0">How FreelancerEduWorks</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <img src="{{my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.png')}}" alt="">

                                </div>
                            </div>
                        </div>
                        <!-- best services -->
                        <div class="mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="fs-20 fw-700 text-black mb-0">Best Services</h3>
                                    <p class="fs-15 fw-400 mb-0">Most viewed and all-time top-selling services</p>
                                </div>
                                <div class="d-flex">
                                    <!-- <img class="text-black c-pointer preBtn" src=" {{url('/public/assets/findJob/left-arrow.png')}}" alt="Image" style="width:18px;" />
                                    <img class=" text-black c-pointer nexBtn" src=" {{url('/public/assets/findJob/right-arrows.png')}}" alt="Image" style="width:18px;" /> -->

                                </div>

                            </div>
                            <section class="bg-white py-4">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="aiz-carousel gutters-10" data-autoplay='true' data-items="6" data-xl-items="3" data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-infinite='true'>
                                            @foreach($services as $service)
                                            <div class="caorusel-box position-relative">
                                                <div class="card bg-transparent  border-gray-light  overflow-hidden hov-box ">
                                                    <a href="{{ route('service.show', $service->slug) }}">
                                                        @if($service->image != null)
                                                        <img src="{{ custom_asset($service->image) }}" class="card-img-top" alt="service_image" height="212">
                                                        @else
                                                        <img src="{{ my_asset('assets/frontend/default/img/placeholder-service.jpg') }}" class="card-img-top" alt="{{ translate('Service Image') }}" height="212">
                                                        @endif
                                                    </a>
                                                    <div class="card-body hov-box-body">
                                                        <div class="d-flex mb-2">
                                                            <span class="mr-2">
                                                                @if ($service->user->photo != null)
                                                                <img src="{{ custom_asset($service->user->photo) }}" alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                                                                @else
                                                                <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}" alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                                                                @endif
                                                            </span>
                                                            <span class="d-flex flex-column justify-content-center">
                                                                <a href="{{ route('freelancer.details', $service->user->user_name) }}" class="text-primary fs-14"><span class="font-weight-bold">{{ $service->user->name }}</span></a>

                                                            </span>
                                                        </div>

                                                        <a href="{{ route('service.show', $service->slug) }}" class="text-dark" title="{{ $service->title }}">
                                                            <h5 class="card-title fs-16 fw-700 h-40px">{{ \Illuminate\Support\Str::limit($service->title, 45, $end='...') }}</h5>
                                                        </a>
                                                        <div class="text-warning">
                                                            <span class="rating rating-lg rating-mr-1">
                                                                {{ renderStarRating(getAverageRating($service->user->id)) }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" position-absolute bg-white rounded-circle" style="top:15px; right:30px">
                                                    <img class=" p-2 center d-block c-pointer" src="{{my_asset('assets/frontend/default/img/scholarship/heart.png')}}" alt="">
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <!-- all services -->
                        <div class="mt-3">
                            <div class="mb-lg-0 pt-3 px-1">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="fw-500 fs-15 text-black"> <span class="text-black fw-600 fs-15">{{ $services->count()}}</span> services available</p>
                                    </div>
                                    <div class="d-flex  ">
                                        <div class="" style="width:80px; ">
                                            <p class="fw-500 fs-15 text-black mb-0 mr-2 mt-2">Sort by</p>
                                        </div>
                                        <select class="select2 form-control aiz-selectpicker border-0" name="category_id" onchange="applyFilter()" data-toggle="select2" data-live-search="true">
                                            <option value="">{{ translate('All Categories') }}</option>
                                            <option value="">
                                                Best Selling
                                            </option>
                                            <option value="">
                                                High Rated
                                            </option>

                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="type" value="service">
                                <div class="row gutters-15">
                                    @foreach($services as $service)
                                    <div class="col-lg-4 col-md-6 ">
                                        <div class="card bg-transparent position-relative border-gray-light overflow-hidden hov-box">
                                            <a href="{{ route('service.show', $service->slug) }}">
                                                @if($service->image != null)
                                                <img src="{{ custom_asset($service->image) }}" class="card-img-top" alt="service_image" height="212">
                                                @else
                                                <img src="{{ my_asset('assets/frontend/default/img/placeholder-service.jpg') }}" class="card-img-top" alt="{{ translate('Service Image') }}" height="212">
                                                @endif
                                            </a>
                                            <div class="card-body hov-box-body">
                                                <div class="d-flex mb-2">
                                                    <span class="mr-2">
                                                        @if ($service->user->photo != null)
                                                        <img src="{{ custom_asset($service->user->photo) }}" alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                                                        @else
                                                        <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}" alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                                                        @endif
                                                    </span>
                                                    <span class="d-flex flex-column justify-content-center">
                                                        <a href="{{ route('freelancer.details', $service->user->user_name) }}" class="text-primary fs-14"><span class="font-weight-bold">{{ $service->user->name }}</span></a>

                                                    </span>
                                                </div>

                                                <a href="{{ route('service.show', $service->slug) }}" class="text-dark" title="{{ $service->title }}">
                                                    <h5 class="card-title fs-16 fw-700 h-40px">{{ \Illuminate\Support\Str::limit($service->title, 45, $end='...') }}</h5>
                                                </a>
                                                <div class="text-warning">
                                                    <span class="rating rating-lg rating-mr-1">
                                                        {{ renderStarRating(getAverageRating($service->user->id)) }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" position-absolute bg-white rounded-circle" style="top:15px; right:30px">
                                            <img class=" p-2 center d-block c-pointer" src="{{my_asset('assets/frontend/default/img/scholarship/heart.png')}}" alt="">
                                        </div>
                                    </div>

                                    @endforeach

                                </div>
                                <div class="aiz-pagination aiz-pagination-center flex-grow-1">
                                    <ul class="pagination">
                                        {{ $services->links() }}
                                    </ul>
                                </div>
                                <div class="mt-2 d-flex justify-content-center mx-0">
                                    <h5 class="fs-15 fw-500 text-black"> {{$services->count()}} of {{$services->total()}} services available</h5>
                                </div>
                            </div>
                            <!-- <div class="row mt-5">
                                @foreach($services as $service)
                                <div class="col-lg-4 col-sm-6 ">

                                    <div class="card  rounded-1" style="height:430px">
                                        <div class="">
                                            <div class=" ">
                                                <img class="card-img" src="{{my_asset('assets/frontend/default/img/servicesList/Surface.svg')}}" alt="Image" />
                                            </div>
                                            <div class="card-body" style="height: 150px;">
                                                <div>
                                                    <p class="card-title mt-1 fs-12">Art & Illustration</p>
                                                    <p class="card-title mt-1 fs-16 fw-700 h-50px">I will create modern flat design illustration</p>
                                                    <span>
                                                        <img class="mr-2" src="{{my_asset('assets/frontend/default/img/servicesList/star.svg')}}" alt="Image" style="width:12px;" />
                                                    </span>
                                                    <span class="fw-700 text-black mr-1"> 4.82 </span>
                                                    <span class="text-muted">94 reviews</span>
                                                </div>
                                                <hr>
                                                <div class="d-flex mb-2">
                                                    <span class="mr-2">
                                                        @if ($service->user->photo != null)
                                                        <img src="{{ custom_asset($service->user->photo) }}" alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                                                        @else
                                                        <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}" alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                                                        @endif
                                                    </span>
                                                    <span class="d-flex flex-column justify-content-center">
                                                        <a href="{{ route('freelancer.details', $service->user->user_name) }}" class="text-primary fs-14"><span class="font-weight-bold">{{ $service->user->name }}</span></a>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div> -->
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>

    @endsection

    @section('modal')
    @include('admin.default.partials.delete_modal')

    <script>
        const rangeInput = document.querySelectorAll(".range-input input");
        const priceInput = document.querySelectorAll(".price-input input");
        const progress = document.querySelector(" .slider .progress");

        let priceGap = 1000

        priceInput.forEach(input => {
            input.addEventListener("input", e => {
                let minVal = parseInt(priceInput[0].value);
                let maxVal = parseInt(priceInput[1].value);

                if ((maxVal - minVal >= priceGap) && maxVal <= 10000) {
                    if (e.target.className === "input-min") {
                        rangeInput[0].value = minVal;
                        progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                    } else {
                        rangeInput[1].value = maxVal;
                        progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                    }
                }


            });
        });
        rangeInput.forEach(input => {
            input.addEventListener("input", e => {
                let minVal = parseInt(rangeInput[0].value);
                let maxVal = parseInt(rangeInput[1].value);

                if (maxVal - minVal < priceGap) {
                    if (e.target.className === "range-min") {
                        rangeInput[0].value = maxVal - priceGap;
                    } else {
                        rangeInput[1].value = minVal + priceGap;
                    }
                } else {

                    priceInput[0].value = minVal;
                    priceInput[1].value = maxVal;
                    progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                    progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                }


            });
        });
    </script>
    <!-- for carousel_item -->
    <script>
        const serviceControllers = [...document.querySelectorAll('.aiz-carousel')];
        nexBtn = [...document.querySelectorAll('.nex-btn')];
        preBtn = [...document.querySelectorAll('.pre-btn')];

        serviceControllers.forEach((item, i) => {
            let containerDimension = item.getBoundingClientRect();
            let containerWidth = containerDimension.width;
            nexBtn[i].addEventListener('click', () => {
                item.scrollLeft += containerWidth
            })
            preBtn[i].addEventListener('click', () => {
                item.scrollLeft -= containerWidth
            })

        })
    </script>

    @endsection

    @section('script')
    <script type="text/javascript">
        function applyFilter() {
            $('#service-filter-form').submit();
        }
    </script>
    @endsection
</body>

</html>
