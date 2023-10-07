@extends('frontend.layouts.app')

@section('content')
<section class="py-4 py-lg-5">
    <div class="container">
        <div class="d-flex align-items-start">
            @include('frontend.user.client.inc.sidebar')
            <div class="aiz-user-panel">
                <h6 class="mb-4 fs-16 fw-700">{{ translate('Bookmarked Experts') }}</h6>

                <div class="row gutters-10">
                    @forelse ($bookmarkedExperts as $key => $bookmarkedExpert)
                        @if ($bookmarkedExpert->expert != null)
                            <div class="col-lg-4 col-md-6">
                                <div class="card rounded-2 border-gray-light">
                                    <div class="absolute-top-right p-2">
                                        <a class="d-inline-block confirm-alert" href="javascript:void(0)" data-href="{{ route('bookmarked-experts.delete', $bookmarkedExpert->id) }}" data-toggle="tooltip" title="{{ translate('Remove from bookmark') }}" data-target="#bookmark-remove-modal">
                                            <i class="las la-bookmark la-2x"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <a href="{{ route('expert.details', $bookmarkedExpert->expert->user_name) }}" class="text-inherit">
                                           <div class="px-4 text-center mb-3">
                                                <span class="avatar avatar-md mb-3">
                                                    @if($bookmarkedExpert->expert->photo != null)
                                                        <img src="{{ customAsset($bookmarkedExpert->expert->photo) }}">
                                                    @else
                                                        <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}">
                                                    @endif
                                                    <span class="badge badge-dot badge-secondary badge-circle badge-status"></span>
                                                </span>
                                                <div class="text-secondary fs-10 mb-1">
                                                    <i class="las la-star text-rating"></i>
                                                    <span class="fw-600">
                                                        {{ formatRating(getAverageRating($bookmarkedExpert->expert->id)) }}
                                                    </span>
                                                    <span>
                                                        ({{ getNumberOfReview($bookmarkedExpert->expert->id) }} {{ translate('Reviews') }})
                                                    </span>
                                                </div>
                                                <h4 class="h5 mb-2 fw-600">{{ $bookmarkedExpert->expert->name }}</h4>
                                                <div class="text-center">
                                                    @foreach ($bookmarkedExpert->expert->badges as $key => $userBadge)
                                                        @if ($userBadge->badge != null)
                                                            <span class="avatar avatar-square avatar-xxs" title="{{ $userBadge->badge->name }}"><img src="{{ customAsset($userBadge->badge->icon) }}"></span>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </a>

                                        <div class="mb-4">
                                            <div class="media mb-3">
                                                <div class="text-center text-primary mt-1 mr-3">
                                                    <i class="las la-map-marked la-2x"></i>
                                                </div>
                                                <div class="media-body pt-2">
                                                    @if ($bookmarkedExpert->expert != null && $bookmarkedExpert->expert->address != null && $bookmarkedExpert->expert->address->city != null && $bookmarkedExpert->expert->address->country != null)
                                                        <span class="d-block font-weight-medium">{{ $bookmarkedExpert->expert->address->city->name }}, {{ $bookmarkedExpert->expert->address->country->name }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="media mb-3">
                                                <div class="text-center text-primary mt-1 mr-3">
                                                    <i class="las la-briefcase la-2x"></i>
                                                </div>
                                                <div class="media-body pt-2">
                                                    <span class="d-block font-weight-medium">{{ count(getCompletedProjectsByexpert($bookmarkedExpert->expert_user_id)->get()) }} {{ translate('projects completed') }}</span>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="text-center text-primary mt-1 mr-3">
                                                    <i class="las la-money-check-alt la-2x"></i>
                                                </div>
                                                <div class="media-body pt-2">
                                                    <span class="d-block font-weight-medium">{{ singlePrice(\App\Models\MilestonePayment::where('expert_user_id', $bookmarkedExpert->expert_user_id)->where('paid_status', 1)->sum('expert_profit')) }} total earnings</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 d-flex justify-content-between align-items-center">
                                            <div class="text-right">
                                                <h4 class="mb-0">{{ singlePrice($bookmarkedExpert->expert->profile->hourly_rate) }}</h4>
                                                <div class="small text-secondary">
                                                    <span>{{ translate('per Hour') }}</span>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="{{ route('expert.details', $bookmarkedExpert->expert->user_name) }}" class="btn btn-primary btn-sm rounded-1">{{ translate('Hire Me') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div class="card flex-grow-1 rounded-2 border-gray-light">
                            <div class="card-body text-center">
                                <i class="las la-frown la-4x mb-4 opacity-40"></i>
                                <h4>{{ translate('Nothing Found') }}</h4>
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="aiz-pagination mt-4">
                    {{ $bookmarkedExperts->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('modal')
    @include('frontend.partials.bookmark_remove_modal')
@endsection
