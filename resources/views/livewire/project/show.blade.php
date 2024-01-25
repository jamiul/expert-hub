<div>
    <div class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sidebar-layout right-sidebar-layout project-detials-layout">
                        <div class="page-sidebar">
                            @auth
                                <div class="sidebar-widget">
                                    <p class="text-sm mb-3">{{ $project->type }} <strong class="h5">${{ $project->budget_start_amount }} @if($project->budget_end_amount)- ${{ $project->budget_end_amount }} @endif</strong></p>
                                    @if($invitedToSubmitEoi)
                                    @if($invitedToSubmitEoi->isPending())
                                        <button type="button" wire:click="acceptInvitation" class="btn mb-2 w-100 btn-md btn-primary">
                                            Accept
                                        </button>
                                        <button type="button" wire:click="declineInvitation" class="btn mb-2 w-100 btn-md btn-outline-primary">
                                            Decline
                                        </button>
                                    @else
                                        <p>EOI Already {{ $invitedToSubmitEoi->status->value }}</p>
                                    @endif
                                    <a href="#" class="btn mb-2 w-100 btn-md btn-outline-primary"> <x-icon.chat fill="#0036E3"/> Chat with Client</a>
                                    @else
                                        @if($eoiAlreadySubmitted)
                                            <p>EOI Already submitted</p>
                                        @else
                                            <a class="btn btn-primary btn-md w-100" href="{{ route('eoi.create', $project) }}">Send EOI</a>
                                        @endif
                                        <button class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon">
                                            <x-icon.heart width="24" height="24" fill="#0036E3"/>
                                            Save this Project
                                        </button>
                                    @endif
                                </div>
                            @endauth
                            @guest
                            <div class="sidebar-widget">
                                <div class="alert alert-info mb-0">
                                    You need to <a href="{{ route('auth.login') }}">Log In</a> as a Expert to send the EOI. Don't have an
                                    account with us? <a href="{{ route('auth.registration') }}">Create an account now</a>
                                </div>
                            </div>
                            @endguest
                            <div class="sidebar-widget">
                                <h4 class="widget-title">About the client</h4>
                                <div class="widget-content text-sm">
                                    <div class="d-flex gap-2 align-items-center py-1">
                                        <x-icon.account-circle fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">{{ $project->client->user->full_name }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.graduation-cap fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">Institution</p>
                                            <p class="mb-0"> {{ $project->client->current_organization }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.globe fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">{{ $project->client->user->country->name }}</p>
                                            <p class="mb-0"> Sydney 9:20 pm</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.briefcase fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">7 jobs posted</p>
                                            <p class="mb-0">100% hire rate, 4 open jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content p-0">

                            <div class="project-details-card">
                                <div class="project-details-card-header pb-4">
                                    <div class="project-details-title">
                                        <h1 class="h5 d-flex align-items-center gap-2 mb-2">
                                            <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                            {{ $project->title }}
                                        </h1>
                                    </div>
                                    <div
                                        class="project-details-meta-data d-flex align-items-center gap-2 justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <x-icon.clock width="20" height="20" fill="#0036E3"/>
                                                {{ $project->created_at->diffForHumans() }}
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <x-icon.tag fill="#0036E3"/>
                                                {{ $project->expertise->name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-details-card-body pt-3 mb-40">
                                    <p class="mb-0">
                                        {{ $project->description }}
                                    </p>
                                </div>
                                <div class="mb-40">
                                    <p class="fw-medium mb-2">Required Skills</p>
                                    <div class="tag-list">
                                        @foreach ($project->skills as $skill)
                                            <a href="#" class="project-tag">{{ $skill->name }}s</a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="">
                                    <p class="fw-medium mb-2">Attachments</p>
                                    <div class="attachment-display-wrapper">
                                        @forelse ($project->attachments as $attachment)
                                            <div class="attachment-display-card">
                                                <div class="attachment-display-thumb">
                                                    @if(in_array($attachment->mime_type, ['image/jpeg','image/png']) )
                                                        <img src="{{ $attachment->getFullUrl() }}"/>
                                                    @else
                                                        <x-icon.document-upload fill="#0059C999"/>
                                                    @endif
                                                </div>
                                                <div class="attachment-display-info">
                                                    <h6 class="mb-1">{{ $attachment->name }}</h6>
                                                    <p class="m-0">{{ $attachment->human_readable_size }}</p>
                                                </div>
                                            </div>
                                        @empty
                                            <p>No file attached</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="page-block mb-60">
        <div class="container">
            <h3 class="h5 mb-3">Similar Projects</h3>
            <div class="row">
                @forelse ($similarProjects as $project)
                    <div class="col-md-4 col-sm-6">
                        <div class="related-project-card">
                            <h4 class="h6"><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></h4>
                            <div class="d-flex align-items-center my-1 gap-2">
                                <x-icon.tag fill="#0036E3"/>
                                {{ $project->expertise->name }}
                            </div>
                            <div class="d-flex align-items-center my-1 gap-2">
                                <x-icon.clock width="20" height="20" fill="#0036E3"/>
                                {{ $project->created_at->diffForHumans() }}
                            </div>
                            <p class="mt-3 mb-3 text-sm">{{ $project->description }}</p>
                            <a class="view-project-details" href="{{ route('projects.show', $project) }}">View Details
                                <x-icon.chevron-right/>
                            </a>
                        </div>
                    </div>
                @empty
                    
                @endforelse
            </div>
        </div>
    </div>
</div>
