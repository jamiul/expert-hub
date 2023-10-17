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
                            <h1 class="fs-16 fw-700">{{ translate('Bidded Projects') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    @forelse ($biddedProjects as $key => $biddedProject)
                        @if ($biddedProject->project != null)
                            <div class="card project-card overflow-hidden rounded-2 border-gray-light">
                                <div class="card-header border-bottom-0">
                                    <div>
                                        <span class="badge badge-primary badge-inline badge-md">{{ singlePrice($biddedProject->project->price) }}</span>
                                    </div>
                                    <div>
                                        @if (\App\Models\ProjectUser::where('project_id', $biddedProject->project_id)->where('user_id', Auth::user()->id)->first() != null)
                                            <span class="badge badge-success badge-inline badge-md">{{ translate('Hired You') }}</span>
                                        @elseif(\App\Models\ProjectUser::where('project_id', $biddedProject->project_id)->first() != null)
                                            <span class="badge badge-secondary badge-inline badge-md">{{ translate('Someone Else Hired') }}</span>
                                        @else
                                            <span class="badge badge-secondary badge-inline badge-md">{{ translate('Not Hired Yet') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-body pt-1">
                                    <h5 class="h6 fw-600 lh-1-5">
                                        <a href="{{ route('project.details', $biddedProject->project->slug) }}" class="text-inherit" target="_blank">{{ $biddedProject->project->name }}</a>
                                    </h5>
                                    <ul class="list-inline opacity-70 fs-12">
                                        <li class="list-inline-item">
                                            <i class="las la-clock opacity-40"></i>
                                            <span>{{ Carbon\Carbon::parse($biddedProject->project->created_at)->diffForHumans() }}</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-inherit">
                                                <i class="las la-stream opacity-40"></i>
                                                <span>@if ($biddedProject->project->project_category != null) {{ $biddedProject->project->project_category->name }} @else {{ translate('Removed Category') }} @endif</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="las la-handshake"></i>
                                            <span>{{ translate($biddedProject->project->type) }}</span>
                                        </li>
                                    </ul>

                                    <div class="text-muted lh-1-8">
                                        <p>{{ $biddedProject->project->excerpt }}</p>
                                    </div>
                                    <div>
                                        @foreach (json_decode($biddedProject->project->skills) as $key => $skillId)
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
                                        <a href="{{ route('client.details', $biddedProject->project->client->user_name)}}" class="d-flex mr-3 align-items-center text-reset">
    	                                    <span class="avatar avatar-xs overflow-hidden">
    	                                        <img class="img-fluid rounded-circle" src="{{ customAsset($biddedProject->project->client->photo) }}">
    	                                    </span>
                                            <div class="pl-2">
                                                <h4 class="fs-14 mb-1">{{ $biddedProject->project->client->name }}</h4>
                                                <div class="">
                                                    <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                        {{ getAverageRating($biddedProject->project->client->id) }}
                                                    </span>
                                                    <span class="opacity-50">
                                                        ({{ getNumberOfReview($biddedProject->project->client->id) }} {{ translate('Reviews') }})
                                                    </span>
                                                </div>
                                            </div>
    	                                </a>
                                    </div>
    								<div>
                                        <ul class="d-flex list-inline mb-0">
                                            <li class="border-right mr-2 pr-2">
                                                <span class="small text-secondary">{{ translate('Total bids') }}</span>
                                                <h4 class="mb-0 h6 fs-13">{{ $biddedProject->project->bids }}</h4>
                                            </li>
                                            <li>
                                                <span class="small text-secondary">{{ translate('My bid') }}</span>
                                                <h4 class="mb-0 h6 fs-13">{{ singlePrice($biddedProject->amount) }}</h4>
                                            </li>
                                        </ul>
    								</div>
                                </div>
                            </div>
                        @endif
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
                    {{ $biddedProjects->links() }}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
