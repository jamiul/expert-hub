<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('/assets/frontend/default/css/home.css')}}">

</head>

<body>
@extends('frontend.layouts.app')

@section('content')
    <!-- <div class="h-250px">
  @if ($freelancer->cover_photo != null)
        <img src="{{ custom_asset($freelancer->cover_photo) }}" alt="{{ $freelancer->name }}" class="img-fit h-250px">

    @else
        <img src="{{ asset('assets/frontend/default/img/cover-place.jpg') }}" alt="{{ $freelancer->name }}"
    class="img-fit h-250px" style="background-color:#275846;">

    @endif
    </div> -->
    <div class="">
        <div class="mt-lg-5">
            <div class=" container-home  rounded-1" style="background:#F2F7F2;">
                <div class="card-body">
                    <div class="media align-items-center d-block d-md-flex container">
                        <div class="mr-5 text-center text-md-left mb-4 mb-md-0">
              <span class="avatar avatar-xxl">
                @if ($freelancer->photo != null)
                      <img src="{{ custom_asset($freelancer->photo) }}" alt="{{ $freelancer->name }}">
                  @else
                      <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                           alt="{{ $freelancer->name }}">
                  @endif
                  @if(Cache::has('user-is-online-' . $freelancer->id))
                      <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                  @else
                      <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                  @endif
              </span>
                        </div>
                        <div class="media-body d-lg-flex justify-content-between align-items-center">
                            <div class="mr-3 mb-4 mb-lg-0 text-center text-md-left">
                                <h1 class="h5 mb-1 fw-700">{{ $freelancer->name }}</h1>
                                @if ($freelancer->specialistAt != null)
                                    <p class="opacity-60">{{ $freelancer->specialistAt->name }}</p>
                                @endif
                                <div
                                    class="d-flex justify-content-center justify-content-md-between text-secondary fs-12 mb-3">
                                    <div class="mr-2">
                                        @if( !empty(getAverageRating($freelancer->id)) )
                                            <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                      {{ formatRating(getAverageRating($freelancer->id)) }}
                    </span>
                                        @else
                                            <span class="bg-secondary rounded text-white px-1 mr-1 fs-10">
                      {{ formatRating(getAverageRating($freelancer->id)) }}
                    </span>
                                        @endif
                                        <span class="rating rating-sm">
                      {{ renderStarRating(getAverageRating($freelancer->id)) }}
                    </span>
                                        <span>
                      ({{ getNumberOfReview($freelancer->id) }} {{ translate('Reviews') }})
                    </span>
                                    </div>
                                    <div>
                                        {{-- <i class="las la-map-marker opacity-50"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9.6" height="12"
                                             viewBox="0 0 9.6 12">
                                            <path id="Path_25847" data-name="Path 25847"
                                                  d="M8.8,2A4.806,4.806,0,0,0,4,6.8c0,1.953,1.418,3.575,2.92,5.292.475.544.967,1.106,1.405,1.675a.6.6,0,0,0,.95,0c.438-.569.93-1.131,1.405-1.675,1.5-1.717,2.92-3.338,2.92-5.292A4.806,4.806,0,0,0,8.8,2Zm0,6.6a1.8,1.8,0,1,1,1.8-1.8A1.8,1.8,0,0,1,8.8,8.6Z"
                                                  transform="translate(-4 -2)" fill="#989ea8"/>
                                        </svg>
                                        @if ($freelancer->address != null && $freelancer->address->city != null &&
                                        $freelancer->address->country != null)
                                            @if ($freelancer->address != null && $freelancer->address->city != null &&
                                            $freelancer->address->country != null)
                                                <span class="ml-1">{{ $freelancer->address->city->name }},
                      {{ $freelancer->address->country->name }}</span>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container mt-5">
            <div class="row gutters-10">
                <div class="col-xxl-9 col-lg-8 order-1 order-lg-0">
                    <div class="border-b">
                        <div class="">
                            <h4 class="h6 fw-700 mb-0"> {{ translate('Description') }}</h4>
                        </div>
                        <div class="">
                            <div class="opacity-70 lh-1-8 fs-15">{{ $freelancer->profile->bio }}</div>
                        </div>
                    </div>
                    <hr>
                    <div class="my-2">
                        <div class="">
                            <h4 class="h6 fw-700 mb-0"> {{ translate('Education') }}</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach ($freelancer->education_details as $key => $education)
                                    <li class="list-group-item px-0">
                                        <h6 class="fw-600 mb-1 fs-15">{{ $education->degree }}</h6>
                                        <p class="mb-0 text-muted">{{ $education->school_name }}
                                            , {{ $education->country->name }}</p>
                                        <p class="text-secondary">{{ $education->passing_year }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="">
                        <div class="">
                            <h4 class="h6 fw-700 mb-0"> {{ translate('Experiences') }}</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach ($freelancer->workExperiences as $key => $experience)
                                    <li class="list-group-item px-0">
                                        <h6 class="fw-600 fs-14 mb-1">{{ $experience->designation }}</h6>
                                        <ul class="list-unstyled text-secondary mb-0">
                                            <li>
                                                <a href="{{ $experience->company_website }}"
                                                   target="_blank">{{ $experience->company_name }}</a>
                                            </li>
                                            @if ($experience->present == '1')
                                                <li>{{ Carbon\Carbon::parse($experience->start)->toFormattedDateString() }}
                                                    -
                                                    {{ translate('Present') }}</li>
                                            @else
                                                <li>{{ Carbon\Carbon::parse($experience->start)->toFormattedDateString() }}
                                                    -
                                                    {{ Carbon\Carbon::parse($experience->end)->toFormattedDateString() }}</li>
                                            @endif
                                            <li class="small">{{ $experience->location }}</li>
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <hr>

                    <div class="">
                        <div class="">
                            <h4 class="h6 fw-700 mb-0"> {{ translate('Portfolio') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row gutters-10">
                                @foreach ($freelancer->userPortfolios as $key => $portfolio)
                                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                                        <a class="card mb-3 shadow-none hov-overlay overflow-hidden">
                                            <img class="card-img-top" src="{{ custom_asset($portfolio->photo) }}"
                                                 alt="Image Description">
                                            <div class="absolute-full overlay c-pointer" data-toggle="modal"
                                                 data-target="#portfolio-modal-{{ $key }}">
                      <span class="absolute-center">
                        <i class="las la-eye text-white la-2x"></i>
                      </span>
                                            </div>
                                            <div class="card-body">
                                                <h2 class="h6 mb-0 text-truncate">{{ $portfolio->name }}</h2>
                                                <small class="text-secondary">{{ $portfolio->type }}</small>
                                            </div>
                                        </a>
                                    </div>
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
                                                            <img class="img-fluid mb-3 h-300px"
                                                                 src="{{ custom_asset($portfolio->photo) }}"
                                                                 alt="{{ $portfolio->name }}">
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
                    <hr>
                    <div class="">
                        <div class="">
                            <h4 class="h6 fw-700 mb-0"> {{ translate('Services') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row gutters-15">
                                @foreach($freelancer->services as $service)
                                    <div class="col-lg-4">
                                        <div class="card rounded-2 border-gray-light overflow-hidden hov-box">
                                            <a href="{{ route('service.show', $service->slug) }}"><img
                                                    src="{{ custom_asset($service->image) }}"
                                                    class="card-img-top" alt="service_image" height="212"></a>
                                            <div class="card-body">
                                                <div class="d-flex mb-2">
                        <span class="mr-2"><img src="{{ custom_asset($service->user->photo) }}"
                                                alt="{{ $service->user->name }}" height="35" width="35"
                                                class="rounded-circle"></span>
                                                    <span class="d-flex flex-column justify-content-center">
                          <a href="{{ route('expert.details', $freelancer->user_name) }}"
                             class="text-secondary"><span class="font-weight-bold">{{ $freelancer->name }}</span></a>
                        </span>
                                                </div>

                                                <a href="{{ route('service.show', $service->slug) }}" class="text-dark">
                                                    <h5 class="card-title fs-16 fw-700">
                                                        {{ \Illuminate\Support\Str::limit($service->title, 45, $end='...') }}</h5>
                                                </a>
                                            </div>
                                            <div class="card-footer justify-content-between fs-14">
                      <span>STARTING AT
                        {{ count($service->service_packages)>0 ? single_price($service->service_packages[0]->service_price) : single_price(0)}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="card rounded">
                        <div class="card-header">
                            <h4 class="h6 fw-700 mb-0">{{ $freelancer->name }}'s {{ translate('Reviews') }}</h4>
                        </div>
                        <div class="card-body">

                            <p class="text-muted mb-4">{{ translate('Showing') }} {{ getNumberOfReview($freelancer->id) }}
                                {{ translate('reviews') }}</p>

                            <div class="mb-4">
                                <ul class="list-group list-group-flush">
                                    @foreach (\App\Models\Review::where('published', 1)->where('reviewed_user_id', $freelancer->id)->get()
                                    as $key => $review)
                                        <li class="list-group-item px-0">
                                            <div class="media">
                                                <div class="mr-3">
                        <span class="avatar avatar-md m-3">
                          <img src="{{ custom_asset(\App\Models\User::find($review->reviewer_user_id)->photo) }}">
                        </span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <div>
                                                            @if ($review->project)
                                                                <h4 class="fw-600 fs-14 mb-1 lh-1-6">{{ $review->project->name }}</h4>
                                                            @else
                                                                <h4 class="fw-600 fs-14 mb-1 lh-1-6">{{ translate('N/A') }}</h4>
                                                            @endif
                                                            <div class="">
                              <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                {{ $review->rating }}
                              </span>
                                                                <span class="rating rating-sm">
                                {{ renderStarRating($review->rating) }}
                              </span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ml-4">
                            <span
                                class="text-muted ml-2">{{ Carbon\Carbon::parse($review->created_at)->toFormattedDateString() }}</span>
                                                        </div>
                                                    </div>
                                                    <p class="font-italic">
                                                        "{{ $review->review }}"
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 fre-profile col-lg-4">
                    <div class="card rounded border-gray-light">
                        <div class="card-body">
                            <div class="">
                                <div class="mb-lg-1">
                                    <a class="btn  btn-outline-primary rounded-1"
                                       href="{{ route('invition_for_hire_freelancer', $freelancer->user_name) }}">{{ translate('Hire Me') }}</a>
                                    <h4 class="mb-2 mt-3  text-black">{{ single_price($freelancer->profile->hourly_rate) }}
                                        /
                                        <span class="text-black">{{ translate('Per hour') }}</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="border-bottom mb-2">
                                {{-- <i class="las la-map-marker opacity-50"></i> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.6" height="12" viewBox="0 0 9.6 12">
                                    <path id="Path_25847" data-name="Path 25847"
                                          d="M8.8,2A4.806,4.806,0,0,0,4,6.8c0,1.953,1.418,3.575,2.92,5.292.475.544.967,1.106,1.405,1.675a.6.6,0,0,0,.95,0c.438-.569.93-1.131,1.405-1.675,1.5-1.717,2.92-3.338,2.92-5.292A4.806,4.806,0,0,0,8.8,2Zm0,6.6a1.8,1.8,0,1,1,1.8-1.8A1.8,1.8,0,0,1,8.8,8.6Z"
                                          transform="translate(-4 -2)" fill="#989ea8"/>
                                </svg>
                                <span>Location</span>
                                @if ($freelancer->address != null && $freelancer->address->city != null &&
                                $freelancer->address->country != null)
                                    @if ($freelancer->address != null && $freelancer->address->city != null &&
                                    $freelancer->address->country != null)
                                        <span class="ml-1">{{ $freelancer->address->city->name }},
                  {{ $freelancer->address->country->name }}</span>
                                    @endif
                                @endif
                            </div>

                            @if ($freelancer->badges != null)
                                <div class="mb-5">
                                    <h6 class="text-left mb-4 h6 fw-700"><span
                                            class="bg-white pr-3">{{ translate('Badges') }}</span></h6>
                                    <div class="">
                                        @foreach ($freelancer->badges as $key => $user_badge)
                                            @if ($user_badge->badge != null)
                                                <span class="avatar avatar-square avatar-xxs"
                                                      title="{{ $user_badge->badge->name }}"><img
                                                        src="{{ custom_asset($user_badge->badge->icon) }}"></span>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <div class="">
                                <h6 class="text-left mb-4 h6 fw-700"><span
                                        class="bg-white pr-3">{{ translate('Verifications') }}</span>
                                </h6>
                                <div>
                                    <ul class="list-unstyled">
                                        @php
                                            $verification = \App\Models\Verification::where('user_id', $freelancer->id)->where('type',
                                            'identity_verification')->first();
                                        @endphp
                                        @if ($verification == null || !$verification->verified)
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="las la-user text-secondary la-2x mr-2"></i>
                                                <span class="fs-13">{{ translate('Identity Verification') }}</span>
                                                <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                            </li>
                                        @else
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="las la-user text-success la-2x mr-2"></i>
                                                <span class="fs-13">{{ translate('Identity Verified') }}</span>
                                                <i class="las la-check text-success la-2x ml-auto"></i>
                                            </li>
                                        @endif
                                        @if ($freelancer->email_verified_at == null)
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="las la-envelope text-secondary la-2x mr-2"></i>
                                                <span class="fs-13">{{ translate('Email Verification') }}</span>
                                                <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                            </li>
                                        @else
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="las la-envelope text-success la-2x mr-2"></i>
                                                <span class="fs-13">{{ translate('Email Verified') }}</span>
                                                <i class="las la-check text-success la-2x ml-auto"></i>
                                            </li>
                                        @endif
                                        {{-- <li class="d-flex align-items-center mb-3">
                                                            <i class="lab la-facebook text-success la-2x mr-2"></i>
                                                            <span class="fs-13">Facebook Connected</span>
                                                            <i class="las la-check text-success la-2x ml-auto"></i>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <i class="lab la-google text-secondary la-2x mr-2"></i>
                                                            <span class="fs-13">Google Connected</span>
                                                            <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <i class="lab la-twitter text-secondary la-2x mr-2"></i>
                                                            <span class="fs-13">Twitter Connected</span>
                                                            <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <i class="lab la-linkedin-in text-secondary la-2x mr-2"></i>
                                                            <span class="fs-13">Linkedin Connected</span>
                                                            <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-left mb-4 h6 fw-700"><span
                                        class="bg-white pr-3">{{ translate('Share Profile') }}</span>
                                </h6>
                                <div class="aiz-share"></div>
                            </div>
                            <div>
                                @if (Auth::check() && ($bookmarked_freelancer = \App\Models\BookmarkedExpert::where('user_id',
                                auth()->user()->id)->where('freelancer_user_id', $freelancer->id)->first()) != null)
                                    <a class="btn btn-block btn-primary rounded-1 confirm-alert"
                                       href="javascript:void(0)"
                                       data-href="{{ route('bookmarked-freelancers.delete', $bookmarked_freelancer->id) }}"
                                       data-target="#bookmark-remove-modal">
                                        <i class="las la-bookmark"></i>
                                        <span>{{ translate('Remove Bookmark') }}</span>
                                    </a>
                                @else
                                    <a class="btn btn-block btn-outline-primary rounded-1"
                                       href="{{ route('bookmarked-freelancers.store', encrypt($freelancer->id)) }}">
                                        <i class="las la-bookmark"></i>
                                        <span>{{ translate('Bookmark Freelancer') }}</span>
                                    </a>
                                    <a class="btn btn-block btn-outline-primary rounded-1" href="">
                                        <i class="las la-bookmark"></i>
                                        <span>{{ translate('Zoom meeting start from $') }}</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card rounded border-gray-light">
                        <div class="card-body">

                            <div class="mb-5">
                                <h6 class="text-left mb-4 h6 fw-700"><span
                                        class="bg-white pr-3">{{ translate('My Skills') }}</span>
                                </h6>
                                <div>
                                    @if( $freelancer->profile->skills != null)
                                        @foreach (json_decode($freelancer->profile->skills, true) as $key => $skill_id)
                                            @php
                                                $skill = \App\Models\Skill::find($skill_id);
                                            @endphp
                                            @if ($skill)
                                                <span
                                                    class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0">{{ $skill->name }}</span>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
@section('modal')
    @include('frontend.partials.bookmark_remove_modal')
@endsection
</body>

</html>
