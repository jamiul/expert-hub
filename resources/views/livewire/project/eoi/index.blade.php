<section class="my-60">
    <div class="container">
        <div class="title-page-wrapper">
            <div class="title-page-header pb-0">
                <h1 class="h5 mb-20">{{ $project->title }}</h1>
            </div>
            <div class="title-page-body project-tab" x-data="{ activeTab: '{{ session('activeTab', 'view-job') }}' }">
                <div class="tab-nav">
                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'view-job' }"
                            @click="activeTab = 'view-job'">View Job Post
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'review-proposal' }"
                            @click="activeTab = 'review-proposal'">Review Proposal ({{ $project->eois->count() }})
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'invite-expert' }"
                            @click="activeTab = 'invite-expert'">Invite Expert ({{ $project->activeInvitations->count() }})
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'offer' }"
                            @click="activeTab = 'offer'">Offer ({{ $project->activeOffers()->count() }})
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'hire' }"
                            @click="activeTab = 'hire'">Hire ({{ $contracts->count() }})
                    </button>

                </div>
                <div class="tab-content pt-40">
                    <div x-show="activeTab === 'view-job'" id="view-job-tab-content">
                        <div class="sidebar-layout right-sidebar-layout project-detials-layout border-0">
                            <div class="page-sidebar">
                                <div class="sidebar-widget">
                                    <p class="text-sm mb-3">{{ $project->type }} <strong class="h5">${{ $project->budget_start_amount }}</strong></p>

                                </div>

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
                                                <p class="mb-0">{{ $project->client->current_organization }}</p>
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
                                                <p class="m-0 fw-medium">{{ $project->client->projects->count() }} jobs posted</p>
                                                <p class="mb-0">100% hire rate, 4 open jobs</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-content">
                                <div class="project-details-card p-0">
                                    <div class="project-details-card-header pb-4">
                                        <p class="text-sm">ID: #45765rte675345</p>
                                        <div class="project-details-meta-data d-flex align-items-center gap-3">
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
                                                    <a href="{{ $attachment->getFullUrl() }}" target="_blank">
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
                                                    </a>
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
                    <div x-show="activeTab === 'review-proposal'" id="review-proposal-tab-content">
                        <div x-data="{ activeTab: 'all-proposals' }">
                            <div class="project-secondary-tab">
                                <div class="secondary-tab-nav">
                                    <button class="tab-nav-item" @click="activeTab = 'all-proposals'"
                                            :class="{ 'active': activeTab === 'all-proposals' }">All Proposals ({{ $project->eois->count() }})
                                    </button>
                                    <button class="tab-nav-item" @click="activeTab = 'short-listed'"
                                            :class="{ 'active': activeTab === 'short-listed' }">Short listed ({{ $project->eois()->shortListed()->count() }})
                                    </button>
                                    <button class="tab-nav-item" @click="activeTab = 'messaged'"
                                            :class="{ 'active': activeTab === 'messaged' }">Messaged ({{ $project->eois()->messaged()->count() }})
                                    </button>
                                    <button class="tab-nav-item" @click="activeTab = 'archived'"
                                            :class="{ 'active': activeTab === 'archived' }">Archived ({{ $project->eois()->archived()->count() }})
                                    </button>
                                </div>
                                <div class="secondary-tab-content">
                                    <div x-show="activeTab === 'all-proposals'">
                                        <div class="expert-card-wrapper">
                                            @forelse ($project->eois as $eoi)
                                                <x-expert.card :url="route('client.eois.show',[$project, $eoi])" :expert="$eoi->expert">
                                                    <x-expert.shortlist wire:click="addToShortList({{ $eoi->id }})" />
                                                    <x-expert.archive wire:click="archive({{ $eoi->id }})"/>
                                                    <x-expert.message wire:click="sendMessage({{ $eoi->id }})"/>
                                                    <x-expert.hire :expert="$eoi->expert" :eoi="$eoi" :project="$eoi->project"/>
                                                </x-expert.card>
                                            @empty
                                            <x-empty/>
                                            @endforelse
                                        </div>
                                    </div>
                                    <div x-show="activeTab === 'short-listed'">
                                        @forelse ($project->eois()->shortListed()->get() as $eoi)
                                            <x-expert.card :expert="$eoi->expert">
                                                <x-expert.archive wire:click="archive({{ $eoi->id }})"/>
                                                <x-expert.message/>
                                                <x-expert.hire :expert="$eoi->expert" :eoi="$eoi" :project="$eoi->project"/>
                                            </x-expert.card>
                                        @empty
                                            <x-empty/>
                                        @endforelse
                                    </div>
                                    <div x-show="activeTab === 'messaged'">
                                        @forelse ($project->eois()->messaged()->get() as $eoi)
                                            <x-expert.card :expert="$eoi->expert">
                                                <x-expert.shortlist wire:click="addToShortList({{ $eoi->id }})" />
                                                <x-expert.archive wire:click="archive({{ $eoi->id }})"/>
                                                <x-expert.message/>
                                                <x-expert.hire :expert="$eoi->expert" :eoi="$eoi" :project="$eoi->project"/>
                                            </x-expert.card>
                                        @empty
                                            <x-empty/>
                                        @endforelse
                                    </div>
                                    <div x-show="activeTab === 'archived'">
                                        @forelse ($project->eois()->archived()->get() as $eoi)
                                            <x-expert.card :expert="$eoi->expert">
                                                <x-expert.decline/>
                                                <x-expert.unarchive wire:click="unArchive({{ $eoi->id }})"/>
                                            </x-expert.card>
                                        @empty
                                            <x-empty/>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="activeTab === 'invite-expert'" id="invite-expert-tab-content">
                        <div x-data="{ activeInvitedExpertTab: 'search-experts' }">
                            <div class="project-secondary-tab">
                                <div class="secondary-tab-nav">
                                    <button class="tab-nav-item" @click="activeInvitedExpertTab = 'search-experts'"
                                            :class="{ 'active': activeInvitedExpertTab === 'search-experts' }">
                                        Search Experts
                                    </button>
                                    <button class="tab-nav-item" @click="activeInvitedExpertTab = 'invited-experts'"
                                            :class="{ 'active': activeInvitedExpertTab === 'invited-experts' }">
                                        Invited Experts ({{ $project->activeInvitations->count() }})
                                    </button>
                                    <button class="tab-nav-item"
                                            @click="activeInvitedExpertTab = 'my-hires-experts'"
                                            :class="{ 'active': activeInvitedExpertTab === 'my-hires-experts' }">My
                                        Hires Experts ({{ $myHires->count() }})
                                    </button>
                                    <button class="tab-nav-item" @click="activeInvitedExpertTab = 'saved-experts'"
                                            :class="{ 'active': activeInvitedExpertTab === 'saved-experts' }">Saved
                                        Experts
                                    </button>
                                </div>
                                <div class="secondary-tab-content">
                                    <div x-show="activeInvitedExpertTab === 'search-experts'">
                                        <div x-data="{ isSidebarVisible: true }"
                                                class="sidebar-layout find-expert-layout"
                                                :class="{ 'left-sidebar-layout': isSidebarVisible }">
                                            <div class="page-sidebar" x-show="isSidebarVisible">
                                                @livewire('experts.filter')
                                            </div>
                                            <div class="page-content">
                                                @livewire('experts.lists', ['project' => $project->id])
                                            </div>
                                        </div>
                                    </div>
                                    <div x-show="activeInvitedExpertTab === 'invited-experts'">
                                        <div class="expert-wrapper">
                                            @forelse ($project->activeInvitations as $invitation)
                                                <x-expert.card :expert="$invitation->expert">
                                                    @livewire('favorite.expert', ['expert' => $invitation->expert])
                                                    <x-expert.decline wire:click="declineInvitation({{ $invitation->id }})"/>
                                                    <x-expert.hire focus="true" :expert="$invitation->expert" :project="$project"/>
                                                </x-expert.card>
                                            @empty
                                                <x-empty/>
                                            @endforelse
                                        </div>
                                    </div>
                                    <div x-show="activeInvitedExpertTab === 'my-hires-experts'">
                                        <div class="expert-wrapper">
                                            @forelse ($myHires as $hire)
                                                <div class="project-expert-card border-bottom">
                                                    <div class="project-expert-thumb">
                                                        <img src="{{ $hire->expert->picture }}"/>
                                                    </div>
                                                    <div class="project-expert-details">
                                                        <div class="expert-card-header">
                                                            <div class="expert-card-header-info">
                                                                <h3 class="h6 project-expert-name mb-0">{{ $hire->expert->user->full_name }}</h3>
                                                                <ul class="project-expert-meta">
                                                                    <li>{{ $hire->expert->expertField->name }}</li>
                                                                    <li>Melbourne University</li>
                                                                    <li>{{ $hire->expert->user->country->name }}</li>
                                                                </ul>
                                                            </div>
                                                            <div class="expert-card-header-action">
                                                                @livewire('favorite.expert', ['expert' => $hire->expert])
                                                                <x-expert.hire :expert="$hire->expert" :project="$project"/>
                                                                <x-expert.invite wire:click="$dispatch('modal.open', {component: 'project.invite', arguments: {'expert': {{ $hire->expert->id }}, 'project': {{ $project->id }}}})"/>
                                                            </div>
                                                        </div>
                                                        <div class="expert-card-body">
                                                            <div class="d-flex gap-3">
                                                                <div>
                                                                    <div class="badge badge-pill badge-warning">Active</div>
                                                                </div>
                                                                <div>
                                                                    <h3 class="h6 d-flex gap-2 mb-0">
                                                                        <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                                        <span> 
                                                                            {{ $hire->project->title }}
                                                                        </span>
                                                                    </h3>
                                                                    <div class="project-item-price">{{ $hire->project->type }}:  <strong class="fw-medium">${{ $hire->project->budget_start_amount }}</strong></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <x-empty/>
                                            @endforelse
                                        </div>
                                    </div>
                                    <div x-show="activeInvitedExpertTab === 'saved-experts'">
                                        <div class="expert-wrapper">
                                            @forelse ($savedExperts as $expert)
                                                <x-expert.card :expert="$expert">
                                                    @livewire('favorite.expert', ['expert' => $expert])
                                                    <x-expert.hire focus="true" :expert="$expert" :project="$project"/>
                                                </x-expert.card>
                                            @empty
                                                <x-empty/>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="activeTab === 'offer'" id="offer-tab-content">
                        <div class="expert-wrapper">
                            @forelse ($project->activeOffers as $offer)
                                <x-expert.card :expert="$offer->expert">
                                    @livewire('offer.withdraw', ['offer' => $offer])
                                </x-expert.card>
                            @empty
                                <x-empty/>
                            @endforelse
                        </div>
                    </div>
                    <div x-show="activeTab === 'hire'" id="hire-tab-content">
                        <div class="expert-wrapper">
                            @forelse ($contracts as $contract)
                                <x-expert.card :expert="$contract->expert">
                                    {{-- <x-expert.hire focus="true" :expert="$contract->expert" :project="$project"/> --}}
                                </x-expert.card>
                            @empty
                                <x-empty/>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>