@extends('frontend.layouts.front-layout')

@section('content')
<section class="py-4 py-lg-5">
    <div class="container">
        <div class="d-flex align-items-start">
            @include('frontend.user.expert.inc.sidebar')
            <div class="aiz-user-panel">
                <h6 class="mb-4 fs-16 fw-700">{{ translate('Following Clients') }}</h6>

                <div class="row gutters-10">
                    @forelse ($bookmarkedClients as $key => $bookmarkedClient)
                        @if ($bookmarkedClient->client != null)
                            <div class="col-lg-4 col-md-6">
                                <div class="card rounded-2 border-gray-light">
                                    <div class="absolute-top-right p-2">
                                        <a class="d-inline-block confirm-alert" href="javascript:void(0)" data-href="{{ route('bookmarked-clients.delete', $bookmarkedClient->id) }}" data-toggle="tooltip" title="{{ translate('Remove from bookmark') }}" data-target="#unfollow-modal">
                                            <i class="las la-bookmark la-2x"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <a href="{{ route('client.details', $bookmarkedClient->client->user_name) }}" class="text-inherit">
                                           <div class="px-4 text-center mb-3">
                                                <span class="avatar avatar-md mb-3">
                                                    @if($bookmarkedClient->client->photo != null)
                                                        <img src="{{ customAsset($bookmarkedClient->client->photo) }}">
                                                    @else
                                                        <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}">
                                                    @endif
                                                    <span class="badge badge-dot badge-secondary badge-circle badge-status"></span>
                                                </span>
                                                <div class="text-secondary fs-10 mb-1">
                                                    <i class="las la-star text-rating"></i>
                                                    <span class="fw-600">
                                                        {{ formatRating(getAverageRating($bookmarkedClient->client->id)) }}
                                                    </span>
                                                    <span>
                                                        ({{ getNumberOfReview($bookmarkedClient->client->id) }} {{ translate('Reviews') }})
                                                    </span>
                                                </div>
                                                <h4 class="h5 mb-2 fw-600">{{ $bookmarkedClient->client->name }}</h4>
                                                <div class="text-center">
                                                    @foreach ($bookmarkedClient->client->badges as $key => $userBadge)
                                                        @if ($userBadge->badge != null)
                                                            <span class="avatar avatar-square avatar-xxs" title="{{ $userBadge->badge->name }}"><img src="{{ customAsset($userBadge->badge->icon) }}"></span>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </a>

                                        <div class="">
                                            <div class="media mb-3">
                                                <div class="text-center text-primary mt-1 mr-3">
                                                    <i class="las la-map-marked la-2x"></i>
                                                </div>
                                                <div class="media-body pt-2">
                                                    @if ($bookmarkedClient->client != null && $bookmarkedClient->client->address != null && $bookmarkedClient->client->address->city != null && $bookmarkedClient->client->address->country != null)
                                                        <span class="d-block font-weight-medium">{{ $bookmarkedClient->client->address->city->name }}, {{ $bookmarkedClient->client->address->country->name }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="media mb-3">
                                                <div class="text-center text-primary mt-1 mr-3">
                                                    <i class="las la-briefcase la-2x"></i>
                                                </div>
                                                <div class="media-body pt-2">
                                                    <span class="d-block font-weight-medium">{{ count($bookmarkedClient->client->number_of_projects) }} {{ translate('jobs posted') }}</span>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="text-center text-primary mt-1 mr-3">
                                                    <i class="las la-money-check-alt la-2x"></i>
                                                </div>
                                                <div class="media-body pt-2">
                                                    <span class="d-block font-weight-medium">{{ singlePrice(\App\Models\MilestonePayment::where('client_user_id', $bookmarkedClient->client_user_id)->where('paid_status', 1)->sum('amount')) }} {{ translate('total spent') }}</span>
                                                </div>
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
                    {{ $bookmarkedClients->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('modal')
    @include('frontend.partials.unfollow_modal')
@endsection
