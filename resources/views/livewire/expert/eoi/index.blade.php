<section class="my-60">
    <div class="container">
        <div class="title-page-wrapper">
            <div class="title-page-header pb-3">
                <h1 class="h5 m-0">Expression of Interest (EOI)</h1>
            </div>
            <div class="title-page-body edux-fill-tab express-of-interest-tab" x-data="{ activeTab: 'eoi-sent-tab' }">
                <div class="tab-nav">
                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'eoi-sent-tab' }"
                            @click="activeTab = 'eoi-sent-tab'">EOI sent ({{ $eois->count() }})
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'invitation-received-tab' }"
                            @click="activeTab = 'invitation-received-tab'">Invitation received ({{ $invitations->count() }})
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'invitation-for-meeting-tab' }"
                            @click="activeTab = 'invitation-for-meeting-tab'">Invitation for meeting ({{ $interviewing->count() }})
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'offer-tab' }"
                            @click="activeTab = 'offer-tab'">Offer ({{ $offers->count() }})
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'saved-projects-tab' }"
                            @click="activeTab = 'saved-projects-tab'">Saved projects ({{ $savedProjects->count() }})
                    </button>
                </div>
                <div class="tab-content pt-40">
                    <div x-show="activeTab === 'eoi-sent-tab'" id="eoi-sent-tab-content">
                        <div class="table-responsive">
                            <table class="table text-sm table-extra-padding seller-project-table edux-table-extra-padding">
                                @forelse ($eois as $eoi)
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">
                                                <a href="{{ route('projects.show', $eoi->project) }}">
                                                    {{ $eoi->project->title }}
                                                </a>
                                            </p>
                                            <p class="mb-1">{{ $eoi->created_at->diffForHumans() }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">{{ $eoi->project->type->value }}</p>
                                            <p class="mb-1">${{ $eoi->amount }}</p>
                                        </td>
                                    </tr>
                                @empty
                                <x-empty/>
                                @endforelse
                            </table>
                        </div>
                    </div>
                    <div x-show="activeTab === 'invitation-received-tab'" id="invitation-received-tab-content">
                        <div class="table-responsive">
                            <table class="table text-sm table-extra-padding seller-project-table edux-table-extra-padding">
                                @forelse ($invitations as $invitation)
                                <tr class="align-middle">
                                    <td>
                                        <p class="mb-1 fw-medium">
                                            <a href="{{ route('projects.show', $invitation->project) }}">
                                                {{ $invitation->project->title }}
                                            </a>
                                        </p>
                                        <p class="mb-1">{{ $invitation->created_at->diffForHumans() }}</p>
                                    </td>
                                    <td>
                                        <span class="edux-batch-viewed">Viewed</span>
                                    </td>
                                    <td>
                                        <p class="mb-1 fw-medium">{{ $invitation->project->type->value }}</p>
                                        <p class="mb-1">${{ $invitation->project->budget_start_amount }}</p>
                                    </td>
                                </tr>
                                @empty
                                <x-empty/>
                                @endforelse
                            </table>
                        </div>
                    </div>
                    <div x-show="activeTab === 'invitation-for-meeting-tab'" id="invitation-for-meeting-tab">
                        <div class="table-responsive">
                            <table class="table text-sm table-extra-padding seller-project-table edux-table-extra-padding">
                                @forelse ($interviewing as $interview)
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">
                                                <a href="{{ route('projects.show', $interview->project) }}">
                                                    {{ $interview->project->title }}
                                                </a>
                                            </p>
                                            <p class="mb-1">{{ $interview->created_at->diffForHumans() }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">{{ $interview->project->type->value }}</p>
                                            <p class="mb-1">${{ $interview->amount }}</p>
                                        </td>
                                    </tr>
                                @empty
                                <x-empty/>
                                @endforelse
                            </table>
                        </div>
                    </div>
                    <div x-show="activeTab === 'offer-tab'" id="offer-tab-content">
                        <div class="table-responsive">
                            <table class="table text-sm table-extra-padding seller-project-table edux-table-extra-padding">
                                @forelse ($offers as $offer)
                                    <tr class="align-middle">
                                        <td>
                                            <p class="mb-1 fw-medium">
                                                <a href="{{ route('expert.offer.show', $offer) }}">
                                                    {{ $offer->contract_title }}
                                                </a>
                                            </p>
                                            <p class="mb-1">{{ $offer->created_at->diffForHumans() }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-1 fw-medium">{{ $offer->contract_type->value }}</p>
                                            <p class="mb-1">${{ $offer->amount }}</p>
                                        </td>
                                    </tr>
                                @empty
                                <x-empty/>
                                @endforelse
                            </table>
                        </div>
                    </div>
                    <div x-show="activeTab === 'saved-projects-tab'" id="saved-projects-tab-content">
                        <div class="table-responsive">
                            <table class="table text-sm table-extra-padding seller-project-table">
                                @forelse ($savedProjects as $project)
                                    <tr class="align-middle">
                                        <div class="project-list-card-item">
                                            <div class="project-list-card-item-header">
                                                <div class="project-item-title">
                                                    <h3 class="h6 d-flex gap-2 mb-0">
                                                        <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                        <a href="{{ route('projects.show', $project) }}"> 
                                                            {{ $project->title }}
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                                                    <div class="project-item-meta d-flex align-items-center gap-3">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <x-icon.tag fill="#9196A2"/>
                                                            {{ $project->expertise->name }}
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <x-icon.clock fill="#9196A2"/>
                                                            {{ $project->created_at->diffForHumans() }}
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <x-icon.globe width="20" height="20" fill="#9196A2"/>
                                                            {{ $project->client->user->country->name }}
                                                        </div>
                                                    </div>
                                                    <div class="project-item-action d-flex align-items-center gap-2">
                                                        <div class="project-item-price">{{ $project->type->value }}: <strong>${{ $project->budget_start_amount }}</strong>
                                                        </div>
                                                        <div>
                                                            <button wire:click="favourite({{ $project->id }})"
                                                                class="btn btn-outline-light btn-favorite m-1 {{ $project->favourited() ? 'favorited' : '' }}">
                                                                <span class="heart-line"><x-icon.heart fill="#0036E3" /></span>
                                                                <span class="heart-filled"><x-icon.heart-filled fill="#0036E3" /></span>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <button class="icon-btn">
                                                                <x-icon.share fill="#0036E3"/>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-list-card-item-body">
                                                <p class="mb-0">
                                                    {{ $project->description }}
                                                </p>
                                            </div>
                                            <div class="tag-list">
                                                @foreach ($project->skills as $skill)
                                                    <a href="#" class="project-tag">{{ $skill->name }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </tr>
                                @empty
                                <x-empty/>
                                @endforelse
                            </table>
                        </div>
                    </div>
                    <div class="hero-button d-flex gap-3 edux-hero-button mt-4 mb-5">
                        <a href="{{ route('find.projects') }}" class="btn btn-primary edux-btn-primary">Search for Projects</a>
                        <a href="{{ route('expert.profile.edit') }}" class="btn edux-btn-border-primary">Manage your Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
