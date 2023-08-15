    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/home.css')}}">
        <link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/single-profile.css')}}">

    </head>

    <body>
        @extends('frontend.default.layouts.app')

        @section('content')
        <!-- <div class="h-250px">
        @if ($freelancer->cover_photo != null)
    <img src="{{ custom_asset($freelancer->cover_photo) }}" alt="{{ $freelancer->name }}" class="img-fit h-250px">
        @else
    <img src="{{ my_asset('assets/frontend/default/img/cover-place.jpg') }}" alt="{{    $freelancer->name }}"
        class="img-fit h-250px" style="background-color:#275846;">
    @endif
    </div> -->

        <div class="mt-lg-3 position-relative freelancer-profile-main-section">
            <div class="container-home rounded-1">
                <div class="border">
                    <div class=" border-bottom">
                        <div class=" p-sm-20px p-lg-30px">
                            <div class="row freelancer-user-identity-profile-section">
                                <div class="col-lg-8 col-10 pl-sm-0">
                                    <div class="profile-identity">
                                        <span class="avatar avatar-xl avatar-sm-sm mr-lg-3 mr-sm-2">
                                            @if ($freelancer->photo != null)
                                            <img src="{{ custom_asset($freelancer->photo) }}" alt="{{ $freelancer->name }}">
                                            @else
                                            <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}" alt="{{ $freelancer->name }}">
                                            @endif
                                            @if(Cache::has('user-is-online-' . $freelancer->id))
                                            <span class="badge badge-dot badge-circle badge-success badge-status badge-md "></span>
                                            @else
                                            <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                            @endif
                                        </span>
                                        <div class="identity-container">
                                            <div class="name">
                                                <div class="d-flex align-items-center">
                                                    <h1 class="frePage-freelancer-name">{{ $freelancer->name }}</h1>
                                                </div>
                                            </div>
                                            <div class="location-status">
                                                <div class="location d-lg-flex d-md-flex d-sm-block">
                                                    <div class="mr-lg-2 mb-sm-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="9.6" height="12" viewBox="0 0 9.6 12">
                                                            <path id="Path_25847" data-name="Path 25847" d="M8.8,2A4.806,4.806,0,0,0,4,6.8c0,1.953,1.418,3.575,2.92,5.292.475.544.967,1.106,1.405,1.675a.6.6,0,0,0,.95,0c.438-.569.93-1.131,1.405-1.675,1.5-1.717,2.92-3.338,2.92-5.292A4.806,4.806,0,0,0,8.8,2Zm0,6.6a1.8,1.8,0,1,1,1.8-1.8A1.8,1.8,0,0,1,8.8,8.6Z" transform="translate(-4 -2)" fill="#989ea8" />
                                                        </svg>
                                                        @if ($freelancer->address != null && $freelancer->address->city != null &&
                                                        $freelancer->address->country != null)
                                                        <span class="ml-lg-1">{{ $freelancer->address->city->name }},
                                                            {{ $freelancer->address->country->name }}</span>
                                                        @endif
                                                    </div>
                                                    <div id="local-time"></div>
                                                </div>
                                            </div>
                                            <div class="availability"></div>
                                        </div>
                                    </div>
                                    <!-- <div class="mt-4 frePage-job-rat-part " style="margin-left: 140px;">
                                        <div class="d-flex">
                                            <div class="d-lg-flex justify-content-center align-items-center">
                                                <img src="{{url('/public/assets/frontend/default/img/freelancer_profile/success.png')}}" alt="">
                                                <p class="ml-1 mb-0 fs-15 text-black fw-600" style="margin-right: 70px;">100% Job Success</p>
                                            </div>
                                            <p class="mb-0 fs-15 text-black fw-600">Top Rated Plus</p>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="col-lg-4 col-2 ">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="dropdown ">
                                            <a class="d-flex justify-content-center align-items-center  c-pointer" style="border:1px solid #ddd;height:35px; width:35px; border-radius:50%;" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <p class="p-0 mb-1">...</p>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right mt-5" aria-labelledby="menuDropdown">
                                                <!-- Add your menu items here -->
                                                <a class="dropdown-item  fs-14 fw-500 text-dark" href="#">Add a note</a>
                                                <a class="dropdown-item fs-14 fw-500 text-dark" href="#">Flag as inapproprite</a>
                                            </div>
                                        </div>
                                        @php
                                            $users = \App\Models\User::where('user_type', 'client' )->get();
                                        @endphp

                                        @if(!Auth::check() || $users->contains(Auth::user()) )
                                        <div class="hire-button hire-me-button-res-frePage ">
                                            <a href="{{ route('invition_for_hire_freelancer', $freelancer->user_name) }}" class="hire-link">Hire Me</a>
                                        </div>
                                        <div class="hire-me-button-res-frePage">
                                            <a class="btn text-white fw-600 fs-14" style="background-color:#275846; border-radius:20px; padding: 6px 35px;" href="#">Invite</a>
                                        </div>
                                        <div class="rounded-circle" style="border:1px solid #ddd;">
                                            <img class="p-2 center d-block c-pointer" src="{{my_asset('assets/frontend/default/img/scholarship/heart.png')}}" alt="">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-4 frePage-job-rat-part " style="margin-left: 140px;">
                                    <div class="d-flex">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img src="{{url('/public/assets/frontend/default/img/freelancer_profile/success.png')}}" alt="">
                                            <p class="ml-1 mb-0 fs-15 text-black fw-600" style="margin-right: 70px;">100% Job Success</p>
                                        </div>
                                        <p class="mb-0 fs-15 text-black fw-600">Top Rated Plus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- for responsive hire me and invite button  start-->
                    <div class=" freePage-hire-invite-btn-show">
                        <div class=" py-2 px-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="dropdown">
                                    <a class="d-flex justify-content-center align-items-center c-pointer" style="border:1px solid #ddd;height:35px; width:35px; border-radius:50%;" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <p class="p-0 mb-1">...</p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right mt-5" aria-labelledby="menuDropdown">
                                        <a class="dropdown-item selected" href="#" id="newest">Newest first</a>
                                        <a class="dropdown-item" href="#" id="highest">Highest rated</a>

                                    </div>
                                </div>
                                <div class="hire-button  ">
                                    <a href="{{ route('invition_for_hire_freelancer', $freelancer->user_name) }}" class="hire-link">Hire Me</a>
                                </div>
                                <div class="freePage-invite-button-for-responsive">
                                    <a class="btn text-white fw-600 fs-14" style=" padding: 6px 35px;" href="#">Invite</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- for responsive hire me and invite button end -->

                    <div class="row">
                        <!-- left side -->
                        <div class="col-lg-4 col-xl-3 col-12 left-aside pr-0">
                                <!-- <div class="view-profile-main-single"></div> -->

                                <!-- earning-sec-for-responsive-start -->
                                    <div class="border-bottom freePage-earning-sec-for-sm-responsive">
                                        <div class="row mt-3 mx-4">
                                            <div class="col-4 p-0">
                                                <h4 class="fs-16 fw-700 text-black mb-1">$9K+</h4>
                                                <p class="fs-14 text-black">Total Earnings</p>
                                            </div>
                                            <div class="col-4 p-0">
                                                <h4 class="fs-16 fw-700 text-black mb-1">14</h4>
                                                <p class="fs-14 text-black">Total Jobs</p>
                                            </div>
                                            <div class="col-4 p-0">
                                                <h4 class="fs-16 fw-700 text-black mb-1">359</h4>
                                                <p class="fs-14 text-black">Total Hours</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- earning-sec-for-responsive-end -->

                                    <div class="border-bottom">
                                        <div class="mb-20">
                                            <h4 class="view-profile">View Profile</h4>
                                        </div>
                                        <div class="list-group  pb-3" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Full Stack Development</a>
                                            <a class="list-group-item list-group-item-action " id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">All work</a>
                                        </div>
                                    </div>
                                    {{-- @if(!Auth::check())
                                    <div class="freePage-earning-sec-for-responsive bg-gray border-bottom">
                                        <div class="p-4">
                                            <h4 class="text-black fs-18 fw-600 pb-3">Ready to work with {{ $freelancer->name }}?</h4>
                                            <a class="btn text-white w-100" style="background-color:#275846;" href="{{ route('register') }}">Sign up</a>

                                            <p class="text-center fs-14 fw-600 text-black pt-3">Already have an account?<a href=href="{{ route('login') }}"> Log in</a></p>
                                        </div>
                                    </div>
                                    @endif --}}
                                    <div class="freePage-earning-sec-for-responsive">
                                        <div class="border-bottom ">
                                            <div class="d-flex justify-content-between mt-3 mx-4">
                                                <div>
                                                    <h4 class="fs-16 fw-700 text-black mb-1">$9K+</h4>
                                                    <p class="fs-14 text-black">Total Earnings</p>
                                                </div>
                                                <div>
                                                    <h4 class="fs-16 fw-700 text-black mb-1">14</h4>
                                                    <p class="fs-14 text-black">Total Jobs</p>
                                                </div>
                                                <div>
                                                    <h4 class="fs-16 fw-700 text-black mb-1">359</h4>
                                                    <p class="fs-14 text-black">Total Hours</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" mt-5">
                                            <div class="mx-4">
                                                <div>
                                                    <h4 class="fs-18 fw-600 mb-2">Hours per week</h4>
                                                    <p class="fs-14">More than 30 hrs/week</p>
                                                </div>
                                                <div class="mt-4">
                                                    <h4 class="fs-18 fw-600 mb-2">Languages</h4>
                                                    <p class="fs-14">English: Native or Bilingual</p>
                                                </div>
                                                <div class="mt-4">
                                                    <h4 class="fs-18 fw-600 mb-2">Verifications
                                                    </h4>
                                                    <p class="fs-14 mb-0">Phone Number: Verified</p>
                                                    <p class="fs-14">ID: Verified</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Education -->
                                    <div class="mx-4 mt-4 border-bottom mb-3">
                                        <div class="">
                                            <h4 class="h6 fw-700 mb-0 fs-18 "> {{ translate('Education') }}</h4>
                                        </div>
                                        <div class="">
                                            <ul class="list-group list-group-flush">
                                            @foreach ($freelancer->education_details as $key => $education)

                                                <li class="list-group-item px-0">
                                                    <h6 class="fw-500 fs-16 mb-1">{{$education->school_name }}</h6>
                                                    <p class="mb-0 text-muted">{{ $education->degree }} | {{ $education->passing_year }} </p>

                                                </li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                <div class=" mt-5">
                                    <!-- Employment history -->
                                    <div class="mx-4 mt-4 border-bottom mb-3">
                                        <div class="">
                                            <h4 class="h6 fw-700 mb-0 fs-18"> {{ translate('Employment history') }}</h4>
                                        </div>
                                        <div class="pb-3">
                                            <ul class="list-group list-group-flush">
                                                @foreach ($freelancer->workExperiences as $key => $experience)

                                                <li class="list-group-item px-0">
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="fw-500 fs-16 mb-0 mr-1">{{ $experience->designation }}</h6> |
                                                        <a class='ml-1 fw-500 fs-16 ' style="color:black;" href="{{ $experience->company_website }}" target="_blank">{{ $experience->company_name }}
                                                        </a>
                                                    </div>
                                                    <ul class="list-unstyled text-secondary mb-0">

                                                        @if ($experience->present == '1')
                                                        <li>{{ Carbon\Carbon::parse($experience->start)->toFormattedDateString() }} -
                                                            {{ translate('Present') }}
                                                        </li>
                                                        @else
                                                        <li>{{ Carbon\Carbon::parse($experience->start)->toFormattedDateString() }} -
                                                            {{ Carbon\Carbon::parse($experience->end)->toFormattedDateString() }}
                                                        </li>
                                                        @endif
                                                        <li class="small">{{ $experience->description }}
                                                        </li>
                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <!-- details side or right side -->
                        <div class="col-lg-8 col-xl-9 col-12 pl-0">
                            <div class="border-bottom">
                                <div class="tab-content mx-4" id="nav-tabContent">
                                    <div class="tab-pane fade show active mt-4" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                        <div class="d-flex justify-content-between mt-3 ">
                                            <h4 class="fw-700 fs-18 text-black">Design Engineer</h4>
                                            <h4 class="fw-700 fs-18 text-black">$30.00/hr</h4>
                                        </div>
                                        <div class="mt-3">
                                            <p class="fs-14">I have always focused on getting better at the skills that have more practical insight and that are most relevant in a career as a product developer. Being a mechanical engineer I am much inclined towards structural behavior of dynamic real world systems. For that working on skills like finite element analysis, CAD/CAM became my thing. I got to work on many prestigious design and fabrication projects like formula student car and UAV launcher. I started working as a freelancer during my second year of graduation from a local market and this has helped me develop a good reputation in the market. I have been involved in many voluntary activities to help Facebook communities like "MATLAB" and "Ansys Workbench" where I get to socialize with multicultural people from around the world, listen to their problems in these software domains and helping them in a healthy collaborative environment.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade mt-4" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                        <div class="d-flex justify-content-between mt-3 ">
                                            <h4 class="fw-700 fs-18 text-black">Design Engineer</h4>
                                            <h4 class="fw-700 fs-18 text-black">$30.00/hr</h4>
                                        </div>
                                        <div class="mt-3">
                                            <p class="fs-14">I have always focused on getting better at the skills that have more practical insight and that are most relevant in a career as a product developer. Being a mechanical engineer I am much inclined towards structural behavior of dynamic real world systems. For that working on skills like finite element analysis, CAD/CAM became my thing. I got to work on many prestigious design and fabrication projects like formula student car and UAV launcher. I started working as a freelancer during my second year of graduation from a local market and this has helped me develop a good reputation in the market. I have been involved in many voluntary activities to help Facebook communities like "MATLAB" and "Ansys Workbench" where I get to socialize with multicultural people from around the world, listen to their problems in these software domains and helping them in a healthy collaborative environment.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- work history -->

                            <div class="border-bottom-2 mt-4">
                                <div class="mx-4 d-flex align-items-center mt-2  mb-3">
                                    <h4 class="mr-3">Work History</h4>
                                    <div class="dropdown">
                                        <a class="d-flex justify-content-center align-items-center c-pointer" style="border:1px solid #ddd;height:35px; width:35px; border-radius:50%;" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <p class="p-0 mb-1">...</p>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left mt-5" aria-labelledby="menuDropdown">
                                            <a class="dropdown-item selected fs-14 fw-500 text-dark" href="#" id="newest">Newest first
                                            </a>
                                            <a class="dropdown-item  fs-14 fw-500 text-dark" href="#" id="highest">Highest rated
                                            </a>
                                            <a class="dropdown-item fs-14 fw-500 text-dark" href="#" id="lowest">Lowest rated
                                            </a>
                                            <a class="dropdown-item fs-14 fw-500 text-dark" href="#" id="largest">Largest projects
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- Completed and runing work part start --}}
                                @php
                                $completedProjects = getCompletedProjectsByFreelancer($freelancer->id)->get();

                                // Extract project IDs from the collection using pluck
                                $projectIds = $completedProjects->pluck('id');

                                // Retrieve project details using the extracted IDs
                                $projects = \App\models\Project::whereIn('id', $projectIds)->get();

                                @endphp


                                <ul class="nav nav-tabs freePage-work-history-com-prog" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link  active fs-16  " id="hiring-talent-tab" data-toggle="tab" href="#hiring" role="tab" aria-controls="hiring" >Completed ({{$projects->count()}})</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fs-16" id="finding-work-tab" data-toggle="tab" href="#finding" role="tab" aria-controls="finding" aria-selected="false">In progress</a>
                                    </li>
                                </ul>
                                {{-- Completed and runing work part start --}}
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="hiring" role="tabpanel" aria-labelledby="hiring-talent-tab">
                                        @foreach ($projects as $key => $project)
                                        <div class="mx-4 mt-3 pb-3">
                                            <div class="mb-4">
                                                <div class="list-group list-group-flush border-bottom">
                                                        <h4 class="fw-600 fs-18 mb-1 lh-1-6 text-success" >{{$project->name}}
                                                        </h4>
                                                        @foreach (\App\Models\Review::where('published', 1)->where('reviewed_user_id', $freelancer->id)->where('project_id', $project->id)->get()
                                                        as $key => $review)


                                                            <div class="d-flex align-items-center">
                                                                    @if($review->rating)
                                                                    <span class="rating rating-sm mr-1">
                                                                        {{ renderStarRating($review->rating) }}
                                                                    </span>
                                                                    <span class=" rounded text-black   fs-13 fw-700 pb-0 mb-0 text-center">
                                                                        {{ $review->rating }} .0
                                                                    </span>
                                                                    @endif
                                                                    <div class="date-range ml-1">
                                                                        <span class="text-muted ml-2">{{ Carbon\Carbon::parse($project->created_at)->toFormattedDateString() }}
                                                                        </span>
                                                                    </div>
                                                            </div>
                                                            <div class="description fw-500 fs-16">
                                                                @if($review)
                                                                <p class="font-italic">
                                                                    "{{ $review->review }}"
                                                                </p>
                                                                @else
                                                                <p class="font-italic">
                                                                    "No feedback given"
                                                                </p>
                                                                @endif
                                                            </div>
                                                        @endforeach


                                                        <div class="d-flex justify-content-between pt-2 pb-4">
                                                            <p class="fw-600 fs-16">${{$project->price}}
                                                            </p>
                                                            <p class="fw-500 fs-16">$90.00 /hr</p>
                                                            <p class="fw-500 fs-16">49 hours</p>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="tab-pane fade" id="finding" role="tabpanel" aria-labelledby="finding-work-tab">
                                       <p class="fw-700 fs-16 text-center text-red my-5">No running project</p>
                                    </div>

                                </div>

                                {{-- @foreach ($projects as $key => $project)
                                <div class="mx-4 mt-3 pb-3">
                                    <div class="mb-4">
                                        <div class="list-group list-group-flush border-bottom">
                                                <h4 class="fw-600 fs-18 mb-1 lh-1-6 text-success" >{{$project->name}}
                                                </h4>
                                                @foreach (\App\Models\Review::where('published', 1)->where('reviewed_user_id', $freelancer->id)->where('project_id', $project->id)->get()
                                                as $key => $review)


                                                    <div class="d-flex align-items-center">
                                                            @if($review->rating)
                                                            <span class="rating rating-sm mr-1">
                                                                {{ renderStarRating($review->rating) }}
                                                            </span>
                                                            <span class=" rounded text-black   fs-13 fw-700 pb-0 mb-0 text-center">
                                                                {{ $review->rating }} .0
                                                            </span>
                                                            @endif
                                                            <div class="date-range ml-1">
                                                                <span class="text-muted ml-2">{{ Carbon\Carbon::parse($project->created_at)->toFormattedDateString() }}
                                                                </span>
                                                            </div>
                                                    </div>
                                                    <div class="description fw-500 fs-16">
                                                        @if($review)
                                                        <p class="font-italic">
                                                            "{{ $review->review }}"
                                                        </p>
                                                        @else
                                                        <p class="font-italic">
                                                            "No feedback given"
                                                        </p>
                                                        @endif
                                                    </div>
                                                @endforeach


                                                <div class="d-flex justify-content-between pt-2 pb-4">
                                                    <p class="fw-600 fs-16">${{$project->price}}
                                                    </p>
                                                    <p class="fw-500 fs-16">$90.00 /hr</p>
                                                    <p class="fw-500 fs-16">49 hours</p>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach --}}
                            </div>

                            <!-- portfolio -->

                            <div class='border-bottom mt-4 mb-3'>
                                <div class="mx-4  ">
                                    <h4 class="">{{ translate('Portfolio')}}</h4>
                                    <div class="row">
                                        @foreach ($freelancer->userPortfolios as $key => $portfolio)
                                        <div class="col-4 c-pointer">
                                            <div class=" mt-2">
                                                <img src="{{ custom_asset($portfolio->photo) }}" class="card-img-top" alt="Image Description" style="height:180px;" data-toggle="modal" data-target="#portfolio-modal-{{ $key }}">
                                                <div class="y">
                                                    <p class=" fs-14 fw-600" style="color:#275846;">{{ $portfolio->name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal -->
                                        <div class="modal fade" id="portfolio-modal-{{ $key }}">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title h6">{{ $portfolio->name }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <img class="img-fluid mb-3 h-300px" src="{{ custom_asset($portfolio->photo) }}" alt="{{ $portfolio->name }}">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <h3 class="h5 mb-3">{{ translate('About the project') }}</h3>
                                                                <div class="text-muted">
                                                                    {{ $portfolio->description }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                            <!-- skills -->
                            <div class='border-bottom mt-4 mb-3'>
                                <div class="mx-4  ">
                                    <h4 class="">{{ translate('Skills') }}</h4>

                                    <div>
                                        @if( $freelancer->profile->skills != null)
                                        @foreach (json_decode($freelancer->profile->skills, true) as $key => $skill_id)
                                        @php
                                        $skill = \App\Models\Skill::find($skill_id);
                                        @endphp
                                        @if ($skill)
                                        <span class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0">{{ $skill->name }}
                                        </span>
                                        @endif
                                        @endforeach
                                        @endif
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>





                        <!-- responsive after hourly rate,Languages,Verifications start -->
                    <div class="freePage-hourlyRate-languages-verifications-responsive">
                            <div class=" mt-5">
                                <div class="mx-4">
                                    <div>
                                        <h4 class="fs-18 fw-600 mb-2">Hours per week</h4>
                                        <p class="fs-14">More than 30 hrs/week</p>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="fs-18 fw-600 mb-2">Languages</h4>
                                        <p class="fs-14">English: Native or Bilingual</p>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="fs-18 fw-600 mb-2">Verifications
                                        </h4>
                                        <p class="fs-14 mb-0">Phone Number: Verified</p>
                                        <p class="fs-14">ID: Verified</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- responsive after hourly rate,Languages,Verifications end -->






                </div>

                  {{-- services part --}}
                  <div class=" mt-5">
                    <div class="">
                        <h4 class="h6 fw-700 mb-0"> {{ translate('Services') }}</h4>
                    </div>
                    <div class="card-body p-0 mt-3">
                        <div class="row gutters-15">
                            @foreach($freelancer->services as $service)
                            <div class="col-lg-3">
                                <div class="card rounded-2 border-gray-light overflow-hidden hov-box">
                                    <a href="{{ route('service.show', $service->slug) }}"><img src="{{ custom_asset($service->image) }}" class="card-img-top" alt="service_image" height="170" width="150">
                                    </a>
                                    <div class="card-body pb-1">
                                        <div class="d-flex mb-2">
                                            <span class="mr-2"><img src="{{ custom_asset($service->user->photo) }}" alt="{{ $service->user->name }}" height="35" width="35" class="rounded-circle">
                                            </span>
                                            <span class="d-flex flex-column justify-content-center">
                                                <a href="{{ route('freelancer.details', $freelancer->user_name) }}" class="text-secondary">
                                                    <span class="font-weight-bold">{{ $freelancer->name }}
                                                    </span>
                                                </a>
                                            </span>
                                        </div>

                                        <a href="{{ route('service.show', $service->slug) }}" class="text-dark">
                                            <h5 class="card-title fs-16 fw-700">
                                                {{ \Illuminate\Support\Str::limit($service->title, 45, $end='...') }}
                                            </h5>
                                        </a>
                                    </div>
                                    <div class="card-footer justify-content-between fs-14">
                                        <span>STARTING AT
                                            {{ count($service->service_packages)>0 ? single_price($service->service_packages[0]->service_price) : single_price(0)}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>





         <script>
                function updateTime() {
                    const localTimeElement = document.getElementById('local-time');
                    const currentDate = new Date();

                    const options = {
                        hour: 'numeric',
                        minute: 'numeric',
                        // second: 'numeric'
                    };
                    const localTimeString = currentDate.toLocaleTimeString(undefined, options);

                    localTimeElement.textContent = localTimeString + ' local Time ';

                    // Set the interval to update the time every second
                    setTimeout(updateTime, 1000);
                }

                // Call the function to update the time initially
                updateTime();
            </script>
            @endsection


            @section('modal')
            @include('frontend.default.partials.bookmark_remove_modal')
            @endsection
    </body>

    </html>
