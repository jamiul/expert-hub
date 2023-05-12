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

    <section class="container-main">
        <div class="">

            <form id="service-filter-form" action="" method="GET">
                <div class="row gutters-15">
                    <div class="col-xl-3 col-lg-4">
                        <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg z-1035">
                            <div class="card rounded-0 border-0 collapse-sidebar c-scrollbar-light shadow-none">
                                <div class="card-header border-0 pl-lg-0">
                                    <h5 class="mb-0 fs-21 fw-700">{{ translate('Filter By') }}</h5>

                                </div>
                            </div>
                            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                        </div>
                        <div class="service-head-toggle">
                            <div class="d-flex justify-content-between align-content-center service-toggle-child " id="expand" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                <p class="w-full " type="button">
                                    Delivery Time
                                </p>

                                <img class="expand-icon" src="{{my_asset('assets/frontend/default/img/servicesList/Vector.svg')}}" alt="">

                            </div>
                            <div class="collapse service-toggle-option" id="collapseExample">
                                <div class="">
                                    <label class="d-flex">
                                        <input type="radio" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Express 24H') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="radio" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Up to 3 days') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="radio" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Up to 7 days') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="radio" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Anytime') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="service-head-toggle">
                            <div class="d-flex justify-content-between align-content-center service-toggle-child " id="expand" data-toggle="collapse" data-target="#collapseBudget" aria-expanded="false" aria-controls="collapseBudget">
                                <p class="w-full " type="button">
                                    Budget
                                </p>

                                <img class="expand-icon" src="{{my_asset('assets/frontend/default/img/servicesList/Vector.svg')}}" alt="">

                            </div>
                            <div class="collapse service-toggle-option" id="collapseBudget">
                                <div class="">

                                </div>
                            </div>
                        </div>

                        <!-- design tools -->
                        <div class="service-head-toggle">
                            <div class="d-flex justify-content-between align-content-center service-toggle-child " id="expand" data-toggle="collapse" data-target="#collapseDesignTools" aria-expanded="true" aria-controls="collapseDesignTools">
                                <p class="w-full " type="button">
                                    Design Tools
                                </p>

                                <img class="expand-icon" src="{{my_asset('assets/frontend/default/img/servicesList/Vector.svg')}}" alt="">

                            </div>
                            <div class="collapse service-toggle-option" id="collapseDesignTools">
                                <div class="">
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Adobe Photoshop') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Figma') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Sketch') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Adobe XD') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Balsamiq') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <p class="text-primary fs-15 fw-500 mb-2 c-pointer">+20 more</p>
                                </div>
                            </div>
                        </div>
                        <!-- location part -->
                        <div class="service-head-toggle">
                            <div class="d-flex justify-content-between align-content-center service-toggle-child " id="expand" data-toggle="collapse" data-target="#collapseLocation" aria-expanded="true" aria-controls="collapseLocation">
                                <p class="w-full " type="button">
                                    Location
                                </p>

                                <img class="expand-icon" src="{{my_asset('assets/frontend/default/img/servicesList/Vector.svg')}}" alt="">

                            </div>
                            <div class="collapse service-toggle-option" id="collapseLocation">
                                <div class="">
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('United States') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('United Kingdom') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Canada') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Germany') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Turkey') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <p class="text-primary fs-15 fw-500 mb-2 c-pointer">+20 more</p>
                                </div>
                            </div>
                        </div>

                        <!-- Speaks -->
                        <div class="service-head-toggle">
                            <div class="d-flex justify-content-between align-content-center service-toggle-child " id="expand" data-toggle="collapse" data-target="#collapseSpeaks" aria-expanded="true" aria-controls="collapseSpeaks">
                                <p class="w-full " type="button">
                                    Speaks
                                </p>

                                <img class="expand-icon" src="{{my_asset('assets/frontend/default/img/servicesList/Vector.svg')}}" alt="">

                            </div>
                            <div class="collapse service-toggle-option" id="collapseSpeaks">
                                <div class="">
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Turkish') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('English') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Italian') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Spanish') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <p class="text-primary fs-15 fw-500 mb-2 c-pointer">+20 more</p>
                                </div>
                            </div>
                        </div>

                        <!-- Level -->
                        <div class="service-head-toggle">
                            <div class="d-flex justify-content-between align-content-center service-toggle-child " id="expand" data-toggle="collapse" data-target="#collapseLevel" aria-expanded="true" aria-controls="collapseLevel">
                                <p class="w-full " type="button">
                                    Level
                                </p>

                                <img class="expand-icon" src="{{my_asset('assets/frontend/default/img/servicesList/Vector.svg')}}" alt="">

                            </div>
                            <div class="collapse service-toggle-option" id="collapseLevel">
                                <div class="">
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Top Rated Seller') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Level Two') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('Level One') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                    <label class="d-flex">
                                        <input type="checkbox" name="bids" value="">
                                        <div class="w-100 d-flex justify-content-between align-content-center ml-2 service-toggle-list">
                                            <span>{{ translate('New Seller') }}</span>
                                            <span class="text-muted">(1000)</span>
                                        </div>

                                    </label>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- services right part -->
                    <div class="col-xl-9 col-lg-8">
                        <div class="row rounded-2" style="background:#FCEBE5">
                            <div class="col-lg-6 col-sm-12 my-auto">
                                <h3 class="text-black fw-700 fs-30  ">Design & Creative</h3>
                                <p class="fw-400 text-black fs-15 mb-2">Give your visitor a smooth online experience with a solid UX design</p>
                                <div class="d-flex align-content-center ">
                                    <img class="bg-white rounded-circle p-2 mr-2 center d-block" src="{{my_asset('assets/frontend/default/img/servicesList/video_icon.svg')}}" alt="">
                                    <p class="fw-400 text-black fs-15">How Scholarship Australia Works</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <img src="{{my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.svg')}}" alt="">

                            </div>
                        </div>
                        <!-- <div class="mb-lg-0">
                            <input type="hidden" name="type" value="service">
                            <div class="row gutters-15">
                                @foreach($services as $service)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card bg-transparent rounded-2 border-gray-light overflow-hidden hov-box">
                                        <a href="{{ route('service.show', $service->slug) }}">
                                            @if($service->image != null)
                                            <img src="{{ custom_asset($service->image) }}" class="card-img-top" alt="service_image" height="212" style="border-radius: 16px 16px 0px 0px;">
                                            @else
                                            <img src="{{ my_asset('assets/frontend/default/img/placeholder-service.jpg') }}" class="card-img-top" alt="{{ translate('Service Image') }}" height="212" style="border-radius: 16px 16px 0px 0px;">
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
                                                    mmmmmm
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
                                </div>
                                @endforeach
                            </div>
                            <div class="aiz-pagination aiz-pagination-center flex-grow-1">
                                <ul class="pagination">
                                    {{ $services->links() }}
                                </ul>
                            </div>
                        </div> -->
                        <div class="row mt-5">
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
                                            <div class="d-flex justify-content-between align-content-center">
                                                <div>
                                                    <span>
                                                        <img class="mr-2 rounded-2" src="{{my_asset('assets/frontend/default/img/servicesList/Surface-2.svg')}}" alt="Image" />
                                                    </span>
                                                    <span>Ali Tufan</span>
                                                </div>
                                                <div>
                                                    <span>Starting at $983</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 ">
                                <div class="card  rounded-1" style="height:430px">
                                    <div class="">
                                        <div class="bg-secondary "><img class="card-img" src=" {{my_asset('assets/frontend/default/img/servicesList/Surface.svg')}}" alt="Image" /></div>
                                        <div class="card-body" style="height: 150px;">
                                            <div>
                                                <p class="card-title mt-1 fs-12">Design & Creative</p>
                                                <p class="card-title mt-1 fs-16 fw-700 h-50px">I will build a fully responsive design in HTML,CSS...</p>
                                                <span>
                                                    <img class="mr-2" src="{{my_asset('assets/frontend/default/img/servicesList/star.svg')}}" alt="Image" style="width:12px;" />
                                                </span>
                                                <span class="fw-700 text-black mr-1"> 4.82 </span>
                                                <span class="text-muted">94 reviews</span>
                                            </div>
                                            <hr>
                                            <div class="d-flex justify-content-between align-content-center"">
                                                <div>
                                                    <img class=" mr-2" src="{{my_asset('assets/frontend/default/img/servicesList/Surface-2.svg')}}" alt="Image" />
                                            <span>Eleanor Pena</span>
                                        </div>
                                        <div>
                                            <span>Starting at $983</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 ">
                        <div class="card  rounded-1" style="height:430px">
                            <div class="">
                                <div class="bg-secondary "><img class="card-img" src=" {{my_asset('assets/frontend/default/img/servicesList/Surface.svg')}}" alt="Image" /></div>
                                <div class="card-body" style="height: 150px;">
                                    <div>
                                        <p class="card-title mt-1 fs-12">Web & App Design</p>
                                        <p class="card-title mt-1 fs-16 fw-700 h-50px">I will do mobile app development for ios and...</p>
                                        <span>
                                            <img class="mr-2" src="{{my_asset('assets/frontend/default/img/servicesList/star.svg')}}" alt="Image" style="width:12px;" />
                                        </span>
                                        <span class="fw-700 text-black mr-1"> 4.82 </span>
                                        <span class="text-muted">94 reviews</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between  align-content-center"">
                                                <div>
                                                    <img class=" mr-2" src="{{my_asset('assets/frontend/default/img/servicesList/Surface-2.svg')}}" alt="Image" />
                                        <span>Jerome Bell</span>
                                    </div>
                                    <div>
                                      <span>Starting at $983</span>
                                   </div>

                            </div>

                        </div>

                    </div>
                </div>

                      
        </div>
        </div>
        </div>
        </form>
        </div>
    </section>

    @endsection

    @section('modal')
    @include('admin.default.partials.delete_modal')
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
