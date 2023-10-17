@extends('frontend.layouts.front-layout')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.user.expert.inc.sidebar')

                <div class="aiz-user-panel">
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-16 fw-700">{{ translate('Cancelled Projects') }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        @forelse ($cancelledProjects as $cancelledProjectId)
                            @php
                                $cancelledProject = \App\Models\Project::find($cancelledProjectId->id);
                            @endphp
                            <div class="card project-card rounded-2 border-gray-light">
                                <div class="card-header border-bottom-0">
                                    <div>
                                        <span class="badge badge-primary badge-inline badge-md">{{ singlePrice($cancelledProject->project_user->hired_at) }}</span>
                                    </div>
                                    <div>
                                        <span class="badge badge-danger badge-inline badge-md">{{ translate('Cancellled') }}</span>
                                        <span class="badge badge-warning badge-inline badge-md">
                                            {{ $cancelledProject->cancel_project != null ? $cancelledProject->cancel_project->refund_percentage : 0 }}%
                                            {{ translate('Deducted') }}
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body pt-1">
                                    <h5 class="h6 fw-600 lh-1-5">
                                        <a href="{{ route('project.details', $cancelledProject->slug) }}" class="text-inherit" target="_blank">{{ $cancelledProject->name }}</a>
                                    </h5>
                                    <ul class="list-inline opacity-70 fs-12">
                                        <li class="list-inline-item">
                                            <i class="las la-clock opacity-40"></i>
                                            <span>{{ Carbon\Carbon::parse($cancelledProject->created_at)->diffForHumans() }}</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="" target="_blank" class="text-inherit">
                                                <i class="las la-stream opacity-40"></i>
                                                <span>@if ( $cancelledProject->project_category != null) {{ $cancelledProject->project_category->name }} @else {{ translate('Removed Category') }} @endif</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="las la-handshake"></i>
                                            <span>{{ $cancelledProject->type }}</span>
                                        </li>
                                    </ul>
                                    <div class="text-muted lh-1-8">
                                        <p>{{ $cancelledProject->excerpt }}</p>
                                    </div>
                                    <div>
                                        @foreach (json_decode($cancelledProject->skills) as $key => $skillId)
                                            @php
                                                $skill = \App\Models\Skill::find($skillId);
                                            @endphp
                                            @if ($skill != null)
                                                <span class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2">{{ $skill->name }}</span>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('client.details', $cancelledProject->client->user_name) }}" class="d-flex mr-3 align-items-center text-reset">
                                            <span class="avatar avatar-xs overflow-hidden">
                                                <img class="img-fluid rounded-circle" src="{{ customAsset($cancelledProject->client->photo) }}">
                                            </span>
                                            <div class="pl-2">
                                                <h4 class="fs-14 mb-1">{{ $cancelledProject->client->name }}</h4>
                                                <div class="">
                                                    <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                        {{ getAverageRating($cancelledProject->client->id) }}
                                                    </span>
                                                    <span class="opacity-50">
                                                        ({{ getNumberOfReview($cancelledProject->client->id) }} {{ translate('Reviews') }})
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <span class="badge badge-inline badge-soft-secondary">
                                        {{ translate('Cancelled By') }}
                                        @if ($cancelledProject != null && $cancelledProject->cancel_by_user != null)
                                            {{ $cancelledProject->cancel_by_user->name }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        @empty
                            <div class="card overflow-hidden rounded-2 border-gray-light">
                                <div class="card-body text-center">
                                    <i class="las la-frown la-4x mb-4 opacity-40"></i>
                                    <h4>{{ translate('Nothing Found') }}</h4>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    <div class="aiz-pagination aiz-pagination-center">
                        {{ $cancelledProjects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
