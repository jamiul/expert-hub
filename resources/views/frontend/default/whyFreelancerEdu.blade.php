@extends('frontend.default.layouts.app')
<link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/why-freelancerEdu.css')}}">

@section('content')
<div class="whyFreeEdu-container-main">
    <div class=" rounded-md my-2 " style="background: #F2F7F2;">
        <div class="row py-2">
            <div class="col-lg-6 mt-4 px-5 review-banner-main">
                <h3 class="text-black fw-700 fs-16">Why ConsultantEdu?</h3>
                <p class="text-black fs-14 fw-600">Welcome to ConsultantEdu – Your one-stop education consulting platform!</p>
                <p class="text-black fs-14 fw-500">ConsultantEdu is a dynamic platform to connect passionate academic experts with individuals,
                    institutions, and businesses seeking tailored education solutions. We believe that education has the
                    power to shape the world, and our goal is to facilitate this transformation by offering a range of services
                    that elevate learning experiences. So, we've built a special place where academic experts meet people
                    who want high-quality educational services.
                    </p>
                <button class="  text-white fs-16 btn btn-primary  px-3 py-2">Join scholarship</button>
            </div>
            <div class="col-lg-6  py-2 px-5">
                <img src="{{my_asset('review-banner.jpeg')}}" class="w-100 h-100 rounded-2" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
