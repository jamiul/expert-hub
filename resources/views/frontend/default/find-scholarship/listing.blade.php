@extends('frontend.default.layouts.app')

@section('content')

<section class="pt-4 mb-4">
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
</section>

<div class="container-main">
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

                            <!-- qualification and funding type -->
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


                            <!-- <p class="mb-4 fs-14 text-secondary opacity-70">{{ $scholarship->created_at ? date('d.m.Y',strtotime($scholarship->created_at)) : '' }}</p> -->
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

  
</div>
@endsection

@section('modal')
@include("frontend/default/find-scholarship/filters-modal")
@endsection
