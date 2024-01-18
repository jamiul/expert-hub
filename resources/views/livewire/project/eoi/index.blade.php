<section class="my-60">
    <div class="container">
        <div class="title-page-wrapper">
            <div class="title-page-header pb-0">
                <h1 class="h5 mb-20">{{ $project->title }}</h1>
            </div>
            <div class="title-page-body project-tab" x-data="{ activeTab: 'view-job' }">
                <div class="tab-nav">
                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'view-job' }"
                            @click="activeTab = 'view-job'">View Job Post
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'review-proposal' }"
                            @click="activeTab = 'review-proposal'">Review Proposal ({{ $project->eois->count() }})
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'invite-expert' }"
                            @click="activeTab = 'invite-expert'">Invite Expert (12)
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'offer' }"
                            @click="activeTab = 'offer'">Offer (2)
                    </button>

                    <button class="tab-nav-item" :class="{ 'active': activeTab === 'hire' }"
                            @click="activeTab = 'hire'">Hire (1)
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
                                            <div class="attachment-display-card">
                                                <div class="attachment-display-thumb">
                                                    <img src="{{ asset('assets/frontend/img/attachment1.png') }}"/>
                                                </div>
                                                <div class="attachment-display-info">
                                                    <h6 class="mb-1">File name.jpg</h6>
                                                    <p class="m-0">1.3 MB</p>
                                                </div>
                                            </div>
                                            <div class="attachment-display-card">
                                                <div class="attachment-display-thumb">
                                                    <img src="{{ asset('assets/frontend/img/attachment2.png') }}"/>
                                                </div>
                                                <div class="attachment-display-info">
                                                    <h6 class="mb-1">File name.jpg</h6>
                                                    <p class="m-0">1.3 MB</p>
                                                </div>
                                            </div>
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
                                        <form class="large-search-form" action="">
                                            <div class="input-group">
                                                <input type="text"
                                                        class="input-field-control input-field-control-md"
                                                        placeholder="Search by contract, client, or company">
                                                <button class="btn btn-light">
                                                    <x-icon.search fill="#6E737C"/>
                                                </button>
                                            </div>
                                        </form>
                                        <div class="expert-card-wrapper">
                                            @foreach ($project->eois as $eoi)
                                                <x-expert.card :expert="$eoi->expert">
                                                    <x-expert.shortlist wire:click="addToShortList({{ $eoi->id }})" />
                                                    <x-expert.archive wire:click="archive({{ $eoi->id }})"/>
                                                    <x-expert.message/>
                                                    <x-expert.hire/>
                                                </x-expert.card>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div x-show="activeTab === 'short-listed'">
                                        <form class="large-search-form" action="">
                                            <div class="input-group">
                                                <input type="text"
                                                        class="input-field-control input-field-control-md"
                                                        placeholder="Search by contract, client, or company">
                                                <button class="btn btn-light">
                                                    <x-icon.search fill="#6E737C"/>
                                                </button>
                                            </div>
                                        </form>
                                        @foreach ($project->eois()->shortListed()->get() as $eoi)
                                            <x-expert.card :expert="$eoi->expert">
                                                <x-expert.archive wire:click="archive({{ $eoi->id }})"/>
                                                <x-expert.message/>
                                                <x-expert.hire/>
                                            </x-expert.card>
                                        @endforeach
                                    </div>
                                    <div x-show="activeTab === 'messaged'">
                                        <form class="large-search-form" action="">
                                            <div class="input-group">
                                                <input type="text"
                                                        class="input-field-control input-field-control-md"
                                                        placeholder="Search by contract, client, or company">
                                                <button class="btn btn-light">
                                                    <x-icon.search fill="#6E737C"/>
                                                </button>
                                            </div>
                                        </form>
                                        @foreach ($project->eois()->messaged()->get() as $eoi)
                                            <x-expert.card :expert="$eoi->expert">
                                                <x-expert.shortlist wire:click="addToShortList({{ $eoi->id }})" />
                                                <x-expert.archive wire:click="archive({{ $eoi->id }})"/>
                                                <x-expert.message/>
                                                <x-expert.hire/>
                                            </x-expert.card>
                                        @endforeach
                                    </div>
                                    <div x-show="activeTab === 'archived'">
                                        <form class="large-search-form" action="">
                                            <div class="input-group">
                                                <input type="text"
                                                        class="input-field-control input-field-control-md"
                                                        placeholder="Search by contract, client, or company">
                                                <button class="btn btn-light">
                                                    <x-icon.search fill="#6E737C"/>
                                                </button>
                                            </div>
                                        </form>
                                        @foreach ($project->eois()->archived()->get() as $eoi)
                                            <x-expert.card :expert="$eoi->expert">
                                                <x-expert.decline/>
                                                <x-expert.unarchive wire:click="unarchive({{ $eoi->id }})"/>
                                            </x-expert.card>
                                        @endforeach
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
                                        Invited Experts (2)
                                    </button>
                                    <button class="tab-nav-item"
                                            @click="activeInvitedExpertTab = 'my-hires-experts'"
                                            :class="{ 'active': activeInvitedExpertTab === 'my-hires-experts' }">My
                                        Hires Experts (1)
                                    </button>
                                    <button class="tab-nav-item" @click="activeInvitedExpertTab = 'saved-experts'"
                                            :class="{ 'active': activeInvitedExpertTab === 'saved-experts' }">Saved
                                        Experts
                                    </button>
                                </div>
                                <div class="secondary-tab-content">
                                    <div x-show="activeInvitedExpertTab === 'search-experts'">
                                        <form class="large-search-form" action="">
                                            <div class="input-group">
                                                <input type="text"
                                                        class="input-field-control input-field-control-md"
                                                        placeholder="Search by contract, client, or company">
                                                <button class="btn btn-light">
                                                    <x-icon.search fill="#6E737C"/>
                                                </button>
                                            </div>
                                        </form>
                                        <div x-data="{ isSidebarVisible: true }"
                                                class="sidebar-layout find-expert-layout"
                                                :class="{ 'left-sidebar-layout': isSidebarVisible }">
                                            <div class="page-sidebar" x-show="isSidebarVisible">
                                                <div class="filter-widget border-bottom">
                                                    <h4 class="h6 mb-3">Filter</h4>
                                                </div>
                                                <div class="filter-widget">
                                                    <div class="d-flex gap-3 justify-content-between mb-2">
                                                        <h4 class="widget-title mb-0">Available Now</h4>
                                                        <span>
                                                            <label class="widget-title-switch widget-on-off-switch">
                                                                <input type="checkbox" role="switch" name="project-type">
                                                                <span class="switch-label">
                                                                    <span class="switch-track">
                                                                        <span class="switch-indicator"></span>
                                                                    </span>
                                                                </span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="filter-widget">
                                                    <h4 class="widget-title">Experts by Field</h4>
                                                    <div class="widget-accordion use-scroll-content">
                                                        <div class="widget-accordion-item">
                                                            <div class="widget-accordion-title"
                                                                    onclick="toggleAccordion(this)">
                                                                <x-form.check class="m-0 gap-0"
                                                                                wire:model="project-category" id="A"/>
                                                                Architecture
                                                            </div>
                                                            <div class="widget-accordion-content">
                                                                <x-form.check wire:model="project-category"
                                                                                id="A01">
                                                                    Accreditation Documentation
                                                                </x-form.check>
                                                                <x-form.check wire:model="project-category"
                                                                                id="A02">
                                                                    Accreditation Process
                                                                </x-form.check>
                                                                <x-form.check wire:model="project-category"
                                                                                id="A03">
                                                                    Accreditation Renewal
                                                                </x-form.check>
                                                                <x-form.check wire:model="project-category"
                                                                                id="A04">
                                                                    Accreditation Reporting
                                                                </x-form.check>
                                                                <x-form.check wire:model="project-category"
                                                                                id="A05">
                                                                    Accreditation Review
                                                                </x-form.check>
                                                                <x-form.check wire:model="project-category"
                                                                                id="A06">
                                                                    Accreditation Documentation
                                                                </x-form.check>
                                                                <x-form.check wire:model="project-category"
                                                                                id="A07">
                                                                    Accreditation Documentation
                                                                </x-form.check>

                                                            </div>
                                                        </div>
                                                        <div class="widget-accordion-item">
                                                            <div class="widget-accordion-title"
                                                                    onclick="toggleAccordion(this)">
                                                                <x-form.check class="m-0 gap-0"
                                                                                wire:model="project-category" id="A"/>
                                                                Curriculum Development
                                                            </div>
                                                            <div class="widget-accordion-content">
                                                                <x-form.check wire:model="project-category"
                                                                                id="B01">
                                                                    Accreditation Documentation
                                                                </x-form.check>
                                                                <x-form.check wire:model="project-category"
                                                                                id="B02">
                                                                    Accreditation Process
                                                                </x-form.check>
                                                                <x-form.check wire:model="project-category"
                                                                                id="B03">
                                                                    Accreditation Renewal
                                                                </x-form.check>
                                                                <x-form.check wire:model="project-category"
                                                                                id="B04">
                                                                    Accreditation Reporting
                                                                </x-form.check>
                                                                <x-form.check wire:model="project-category"
                                                                                id="B05">
                                                                    Accreditation Review
                                                                </x-form.check>
                                                                <x-form.check wire:model="project-category"
                                                                                id="B06">
                                                                    Accreditation Documentation
                                                                </x-form.check>
                                                                <x-form.check wire:model="project-category"
                                                                                id="B07">
                                                                    Accreditation Documentation
                                                                </x-form.check>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="page-content">
                                                <button class="toggle-sidebar icon-btn border"
                                                        @click="isSidebarVisible = !isSidebarVisible">
                                                    <x-icon.side-navigation fill="#fff"/>
                                                </button>
                                                <!-- Content for the page -->
                                                <div class="expert-wrapper">
                                                    @foreach ($filteredExperts as $expert)
                                                        <x-expert.card :expert="$expert">
                                                            <x-expert.invite/>
                                                            <x-expert.hire/>
                                                        </x-expert.card>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-show="activeInvitedExpertTab === 'invited-experts'">
                                        <form class="large-search-form" action="">
                                            <div class="input-group">
                                                <input type="text"
                                                        class="input-field-control input-field-control-md"
                                                        placeholder="Search by contract, client, or company">
                                                <button class="btn btn-light">
                                                    <x-icon.search fill="#6E737C"/>
                                                </button>
                                            </div>
                                        </form>

                                        <div class="expert-wrapper">

                                            <div class="project-expert-card border-bottom">
                                                <div class="project-expert-thumb">
                                                    <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                </div>
                                                <div class="project-expert-details">
                                                    <div class="expert-card-header">
                                                        <div class="expert-card-header-info">
                                                            <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                Esther</h3>
                                                            <ul class="project-expert-meta">
                                                                <li>Public Health</li>
                                                                <li>Melbourne University</li>
                                                                <li>Australia</li>
                                                            </ul>
                                                            <div class="d-flex gap-3 align-items-center">
                                                                <div><strong class="fw-medium">$200 </strong>/ hr
                                                                </div>
                                                                <div class="star-ratings">
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                </div>
                                                                <div class="project-expert-profile-status">
                                                                    Available now
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="expert-card-header-action">
                                                            <button x-data="{ isFavorited: false }"
                                                                    class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                    :class="{ 'favorited': isFavorited }"
                                                                    @click="isFavorited = !isFavorited">
                                                                    <span class="heart-line">
                                                                        <x-icon.heart/>
                                                                    </span>
                                                                <span class="heart-filled">
                                                                        <x-icon.heart-filled/>
                                                                    </span>
                                                            </button>

                                                            <button class="btn btn-md btn-outline-primary">
                                                                Decline
                                                            </button>
                                                            <button class="btn btn-md btn-primary">Hire</button>
                                                        </div>
                                                    </div>
                                                    <div class="expert-card-body">
                                                        <div class="project-expert-summary py-3">
                                                            <p>Prof. Miles esther is an accomplished Curriculum
                                                                Development Specialist
                                                                with a distinguished career in education and a track
                                                                record of providing
                                                                consultation services in... <a href=""> more</a></p>
                                                        </div>
                                                        <div class="tag-list">
                                                            <a href="#"
                                                                class="expert-profile-tag offer-consultation-btn">
                                                                <x-icon.video fill="#0036E3"/>
                                                                Offer Consultation</a>
                                                            <a href="#" class="expert-profile-tag">Communication
                                                                Skills</a>
                                                            <a href="#" class="expert-profile-tag">Industry Treds
                                                                Awareness</a>
                                                            <a href="#" class="expert-profile-tag"> Research</a>
                                                            <a href="#" class="expert-profile-tag">System Research
                                                                Development</a>
                                                            <a href="#"
                                                                class="expert-profile-tag">Communication </a>
                                                            <a href="#" class="expert-profile-tag">Industry
                                                                Treds</a>
                                                            <a href="#" class="expert-profile-tag">Educational
                                                                Research</a>
                                                            <a href="#" class="expert-profile-tag">System
                                                                Development</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-expert-card border-bottom">
                                                <div class="project-expert-thumb">
                                                    <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                </div>
                                                <div class="project-expert-details">
                                                    <div class="expert-card-header">
                                                        <div class="expert-card-header-info">

                                                            <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                Esther</h3>
                                                            <ul class="project-expert-meta">
                                                                <li>Public Health</li>
                                                                <li>Melbourne University</li>
                                                                <li>Australia</li>
                                                            </ul>
                                                            <div class="d-flex gap-3 align-items-center">
                                                                <div><strong class="fw-medium">$200 </strong>/ hr
                                                                </div>
                                                                <div class="star-ratings">
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                </div>
                                                                <div class="project-expert-profile-status">
                                                                    Available now
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="expert-card-header-action">

                                                            <button x-data="{ isFavorited: false }"
                                                                    class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                    :class="{ 'favorited': isFavorited }"
                                                                    @click="isFavorited = !isFavorited">
                                                                    <span class="heart-line">
                                                                        <x-icon.heart/>
                                                                    </span>
                                                                <span class="heart-filled">
                                                                        <x-icon.heart-filled/>
                                                                    </span>
                                                            </button>
                                                            <button class="btn btn-md btn-outline-primary">
                                                                Decline
                                                            </button>
                                                            <button class="btn btn-md btn-primary"> Hire</button>
                                                        </div>
                                                    </div>
                                                    <div class="expert-card-body">
                                                        <div class="project-expert-summary py-3">
                                                            <p>Prof. Miles esther is an accomplished Curriculum
                                                                Development Specialist
                                                                with a distinguished career in education and a track
                                                                record of providing
                                                                consultation services in... <a href=""> more</a></p>
                                                        </div>
                                                        <div class="tag-list">
                                                            <a href="#"
                                                                class="expert-profile-tag offer-consultation-btn">
                                                                <x-icon.video fill="#0036E3"/>
                                                                Offer Consultation</a>
                                                            <a href="#" class="expert-profile-tag">Communication
                                                                Skills</a>
                                                            <a href="#" class="expert-profile-tag">Industry Treds
                                                                Awareness</a>
                                                            <a href="#" class="expert-profile-tag"> Research</a>
                                                            <a href="#" class="expert-profile-tag">System Research
                                                                Development</a>
                                                            <a href="#"
                                                                class="expert-profile-tag">Communication </a>
                                                            <a href="#" class="expert-profile-tag">Industry
                                                                Treds</a>
                                                            <a href="#" class="expert-profile-tag">Educational
                                                                Research</a>
                                                            <a href="#" class="expert-profile-tag">System
                                                                Development</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div x-show="activeInvitedExpertTab === 'my-hires-experts'">
                                        <form class="large-search-form" action="">
                                            <div class="input-group">
                                                <input type="text"
                                                        class="input-field-control input-field-control-md"
                                                        placeholder="Search by contract, client, or company">
                                                <button class="btn btn-light">
                                                    <x-icon.search fill="#6E737C"/>
                                                </button>
                                            </div>
                                        </form>
                                        <div class="expert-wrapper">
                                            <div class="project-expert-card border-bottom">
                                                <div class="project-expert-thumb">
                                                    <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                </div>
                                                <div class="project-expert-details">
                                                    <div class="expert-card-header">
                                                        <div class="expert-card-header-info">
                                                            <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                Esther</h3>
                                                            <ul class="project-expert-meta">
                                                                <li>Public Health</li>
                                                                <li>Melbourne University</li>
                                                                <li>Australia</li>
                                                            </ul>
                                                        </div>
                                                        <div class="expert-card-header-action">
                                                            <button x-data="{ isFavorited: false }"
                                                                    class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                    :class="{ 'favorited': isFavorited }"
                                                                    @click="isFavorited = !isFavorited">
                                                                    <span class="heart-line">
                                                                        <x-icon.heart/>
                                                                    </span>
                                                                <span class="heart-filled">
                                                                        <x-icon.heart-filled/>
                                                                    </span>
                                                            </button>
                                                            <button class="btn btn-md btn-outline-primary"> Rehire
                                                            </button>
                                                            <button class="btn btn-md btn-primary"> Invite to job
                                                            </button>
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
                                                                    <span> Developing curriculum for
                                                                        Postgraduate
                                                                        public health
                                                                        unit
                                                                    </span>
                                                                </h3>
                                                                <div class="project-item-price">Hourly:  <strong class="fw-medium">$200.00</strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-expert-card">
                                                <div class="project-expert-thumb">
                                                    <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                </div>
                                                <div class="project-expert-details">
                                                    <div class="expert-card-header">
                                                        <div class="expert-card-header-info">
                                                            <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                Esther</h3>
                                                            <ul class="project-expert-meta">
                                                                <li>Public Health</li>
                                                                <li>Melbourne University</li>
                                                                <li>Australia</li>
                                                            </ul>


                                                        </div>
                                                        <div class="expert-card-header-action">
                                                            <button x-data="{ isFavorited: false }"
                                                                    class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                    :class="{ 'favorited': isFavorited }"
                                                                    @click="isFavorited = !isFavorited">
                                                                    <span class="heart-line">
                                                                        <x-icon.heart/>
                                                                    </span>
                                                                <span class="heart-filled">
                                                                        <x-icon.heart-filled/>
                                                                    </span>
                                                            </button>
                                                            <button class="btn btn-md btn-outline-primary"> Rehire
                                                            </button>
                                                            <button class="btn btn-md btn-primary"> Invite to
                                                                project
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="expert-card-body">
                                                        <div class="d-flex gap-3">
                                                            <div>
                                                                <div class="badge badge-pill badge-success">Active</div>
                                                            </div>
                                                            <div>
                                                                <h3 class="h6 d-flex gap-2 mb-0">
                                                                    <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                                                    <span> Developing curriculum for
                                                                        Postgraduate
                                                                        public health
                                                                        unit
                                                                    </span>
                                                                </h3>
                                                                <div class="project-item-price">Hourly: <strong class="fw-medium">$200.00</strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div x-show="activeInvitedExpertTab === 'saved-experts'">
                                        <form class="large-search-form" action="">
                                            <div class="input-group">
                                                <input type="text"
                                                        class="input-field-control input-field-control-md"
                                                        placeholder="Search by contract, client, or company">
                                                <button class="btn btn-light">
                                                    <x-icon.search fill="#6E737C"/>
                                                </button>
                                            </div>
                                        </form>
                                        <div class="expert-wrapper">

                                            <div class="project-expert-card border-bottom">
                                                <div class="project-expert-thumb">
                                                    <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                </div>
                                                <div class="project-expert-details">
                                                    <div class="expert-card-header">
                                                        <div class="expert-card-header-info">
                                                            <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                Esther</h3>
                                                            <ul class="project-expert-meta">
                                                                <li>Public Health</li>
                                                                <li>Melbourne University</li>
                                                                <li>Australia</li>
                                                            </ul>
                                                            <div class="d-flex gap-3 align-items-center">
                                                                <div><strong class="fw-medium">$200 </strong>/ hr
                                                                </div>
                                                                <div class="star-ratings">
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                </div>
                                                                <div class="project-expert-profile-status">
                                                                    Available now
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="expert-card-header-action">
                                                            <button x-data="{ isFavorited: true }"
                                                                    class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                    :class="{ 'favorited': isFavorited }"
                                                                    @click="isFavorited = !isFavorited">
                                                                    <span class="heart-line">
                                                                        <x-icon.heart/>
                                                                    </span>
                                                                <span class="heart-filled">
                                                                        <x-icon.heart-filled/>
                                                                    </span>
                                                            </button>

                                                            <button class="btn btn-md btn-outline-primary">
                                                                Decline
                                                            </button>
                                                            <button class="btn btn-md btn-primary">Hire</button>
                                                        </div>
                                                    </div>
                                                    <div class="expert-card-body">
                                                        <div class="project-expert-summary py-3">
                                                            <p>Prof. Miles esther is an accomplished Curriculum
                                                                Development Specialist
                                                                with a distinguished career in education and a track
                                                                record of providing
                                                                consultation services in... <a href=""> more</a></p>
                                                        </div>
                                                        <div class="tag-list">
                                                            <a href="#"
                                                                class="expert-profile-tag offer-consultation-btn">
                                                                <x-icon.video fill="#0036E3"/>
                                                                Offer Consultation</a>
                                                            <a href="#" class="expert-profile-tag">Communication
                                                                Skills</a>
                                                            <a href="#" class="expert-profile-tag">Industry Treds
                                                                Awareness</a>
                                                            <a href="#" class="expert-profile-tag"> Research</a>
                                                            <a href="#" class="expert-profile-tag">System Research
                                                                Development</a>
                                                            <a href="#"
                                                                class="expert-profile-tag">Communication </a>
                                                            <a href="#" class="expert-profile-tag">Industry
                                                                Treds</a>
                                                            <a href="#" class="expert-profile-tag">Educational
                                                                Research</a>
                                                            <a href="#" class="expert-profile-tag">System
                                                                Development</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-expert-card border-bottom">
                                                <div class="project-expert-thumb">
                                                    <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                                </div>
                                                <div class="project-expert-details">
                                                    <div class="expert-card-header">
                                                        <div class="expert-card-header-info">

                                                            <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                                Esther</h3>
                                                            <ul class="project-expert-meta">
                                                                <li>Public Health</li>
                                                                <li>Melbourne University</li>
                                                                <li>Australia</li>
                                                            </ul>
                                                            <div class="d-flex gap-3 align-items-center">
                                                                <div><strong class="fw-medium">$200 </strong>/ hr
                                                                </div>
                                                                <div class="star-ratings">
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                    <x-icon.star-fill/>
                                                                </div>
                                                                <div class="project-expert-profile-status">
                                                                    Available now
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="expert-card-header-action">

                                                            <button x-data="{ isFavorited: true }"
                                                                    class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                                    :class="{ 'favorited': isFavorited }"
                                                                    @click="isFavorited = !isFavorited">
                                                                    <span class="heart-line">
                                                                        <x-icon.heart/>
                                                                    </span>
                                                                <span class="heart-filled">
                                                                        <x-icon.heart-filled/>
                                                                    </span>
                                                            </button>
                                                            <button class="btn btn-md btn-outline-primary">
                                                                Decline
                                                            </button>
                                                            <button class="btn btn-md btn-primary"> Hire</button>
                                                        </div>
                                                    </div>
                                                    <div class="expert-card-body">
                                                        <div class="project-expert-summary py-3">
                                                            <p>Prof. Miles esther is an accomplished Curriculum
                                                                Development Specialist
                                                                with a distinguished career in education and a track
                                                                record of providing
                                                                consultation services in... <a href=""> more</a></p>
                                                        </div>
                                                        <div class="tag-list">
                                                            <a href="#"
                                                                class="expert-profile-tag offer-consultation-btn">
                                                                <x-icon.video fill="#0036E3"/>
                                                                Offer Consultation</a>
                                                            <a href="#" class="expert-profile-tag">Communication
                                                                Skills</a>
                                                            <a href="#" class="expert-profile-tag">Industry Treds
                                                                Awareness</a>
                                                            <a href="#" class="expert-profile-tag"> Research</a>
                                                            <a href="#" class="expert-profile-tag">System Research
                                                                Development</a>
                                                            <a href="#"
                                                                class="expert-profile-tag">Communication </a>
                                                            <a href="#" class="expert-profile-tag">Industry
                                                                Treds</a>
                                                            <a href="#" class="expert-profile-tag">Educational
                                                                Research</a>
                                                            <a href="#" class="expert-profile-tag">System
                                                                Development</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div x-show="activeTab === 'offer'" id="offer-tab-content">
                        <div class="expert-wrapper">
                            <div class="project-expert-card border-bottom">
                                <div class="project-expert-thumb">
                                    <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                </div>
                                <div class="project-expert-details">
                                    <div class="expert-card-header">
                                        <div class="expert-card-header-info">
                                            <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                Esther</h3>
                                            <ul class="project-expert-meta">
                                                <li>Public Health</li>
                                                <li>Melbourne University</li>
                                                <li>Australia</li>
                                            </ul>
                                            <div class="d-flex gap-3 align-items-center">
                                                <div><strong class="fw-medium">$200 </strong>/ hr
                                                </div>
                                                <div class="star-ratings">
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                </div>
                                                <div class="project-expert-profile-status">
                                                    Available now
                                                </div>
                                            </div>

                                        </div>
                                        <div class="expert-card-header-action">
                                            <button x-data="{ isFavorited: false }"
                                                    class="btn btn-md btn-icon btn-outline-light btn-favorite"
                                                    :class="{ 'favorited': isFavorited }"
                                                    @click="isFavorited = !isFavorited">
                                                                    <span class="heart-line">
                                                                        <x-icon.heart/>
                                                                    </span>
                                                <span class="heart-filled">
                                                                        <x-icon.heart-filled/>
                                                                    </span>
                                            </button>

                                            <button class="btn btn-md btn-outline-primary">
                                                Decline
                                            </button>
                                            <button class="btn btn-md btn-primary">Hire</button>
                                        </div>
                                    </div>
                                    <div class="expert-card-body">
                                        <div class="project-expert-summary py-3">
                                            <p>Prof. Miles esther is an accomplished Curriculum
                                                Development Specialist
                                                with a distinguished career in education and a track
                                                record of providing
                                                consultation services in... <a href=""> more</a></p>
                                        </div>
                                        <div class="tag-list">
                                            <a href="#"
                                                class="expert-profile-tag offer-consultation-btn">
                                                <x-icon.video fill="#0036E3"/>
                                                Offer Consultation</a>
                                            <a href="#" class="expert-profile-tag">Communication
                                                Skills</a>
                                            <a href="#" class="expert-profile-tag">Industry Treds
                                                Awareness</a>
                                            <a href="#" class="expert-profile-tag"> Research</a>
                                            <a href="#" class="expert-profile-tag">System Research
                                                Development</a>
                                            <a href="#"
                                                class="expert-profile-tag">Communication </a>
                                            <a href="#" class="expert-profile-tag">Industry
                                                Treds</a>
                                            <a href="#" class="expert-profile-tag">Educational
                                                Research</a>
                                            <a href="#" class="expert-profile-tag">System
                                                Development</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-expert-card border-bottom">
                                <div class="project-expert-thumb">
                                    <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                </div>
                                <div class="project-expert-details">
                                    <div class="expert-card-header">
                                        <div class="expert-card-header-info">

                                            <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                Esther</h3>
                                            <ul class="project-expert-meta">
                                                <li>Public Health</li>
                                                <li>Melbourne University</li>
                                                <li>Australia</li>
                                            </ul>
                                            <div class="d-flex gap-3 align-items-center">
                                                <div><strong class="fw-medium">$200 </strong>/ hr
                                                </div>
                                                <div class="star-ratings">
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                </div>
                                                <div class="project-expert-profile-status">
                                                    Available now
                                                </div>
                                            </div>

                                        </div>
                                        <div class="expert-card-header-action">
                                            <button class="btn btn-md btn-outline-primary">
                                                Decline
                                            </button>
                                            <button class="btn btn-md btn-primary"> Hire</button>
                                        </div>
                                    </div>
                                    <div class="expert-card-body">
                                        <div class="project-expert-summary py-3">
                                            <p>Prof. Miles esther is an accomplished Curriculum
                                                Development Specialist
                                                with a distinguished career in education and a track
                                                record of providing
                                                consultation services in... <a href=""> more</a></p>
                                        </div>
                                        <div class="tag-list">
                                            <a href="#"
                                                class="expert-profile-tag offer-consultation-btn">
                                                <x-icon.video fill="#0036E3"/>
                                                Offer Consultation</a>
                                            <a href="#" class="expert-profile-tag">Communication
                                                Skills</a>
                                            <a href="#" class="expert-profile-tag">Industry Treds
                                                Awareness</a>
                                            <a href="#" class="expert-profile-tag"> Research</a>
                                            <a href="#" class="expert-profile-tag">System Research
                                                Development</a>
                                            <a href="#"
                                                class="expert-profile-tag">Communication </a>
                                            <a href="#" class="expert-profile-tag">Industry
                                                Treds</a>
                                            <a href="#" class="expert-profile-tag">Educational
                                                Research</a>
                                            <a href="#" class="expert-profile-tag">System
                                                Development</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="activeTab === 'hire'" id="hire-tab-content">
                        <div class="expert-wrapper">
                            <div class="project-expert-card">
                                <div class="project-expert-thumb">
                                    <div class="expert-thumb-box">
                                        <img src="{{ asset('assets/frontend/img/consultant1.png') }}"/>
                                    </div>
                                    <div class="badge badge-pill badge-success mt-20">Invited</div>
                                </div>
                                <div class="project-expert-details">
                                    <div class="expert-card-header">
                                        <div class="expert-card-header-info">
                                            <h3 class="h6 project-expert-name mb-0">Professor Miles
                                                Esther</h3>
                                            <ul class="project-expert-meta">
                                                <li>Public Health</li>
                                                <li>Melbourne University</li>
                                                <li>Australia</li>
                                            </ul>
                                            <div class="d-flex gap-3 align-items-center">
                                                <div><strong class="fw-medium">$200 </strong>/ hr
                                                </div>
                                                <div class="star-ratings">
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                    <x-icon.star-fill/>
                                                </div>
                                                <div class="project-expert-profile-status">
                                                    Available now
                                                </div>
                                            </div>

                                        </div>
                                        <div class="expert-card-header-action">
                                            <button class="btn btn-md btn-primary">Rehire</button>
                                        </div>
                                    </div>
                                    <div class="expert-card-body">
                                        <div class="project-expert-summary py-3">
                                            <p>Prof. Miles esther is an accomplished Curriculum
                                                Development Specialist
                                                with a distinguished career in education and a track
                                                record of providing
                                                consultation services in... <a href=""> more</a></p>
                                        </div>
                                        <div class="tag-list">
                                            <a href="#"
                                                class="expert-profile-tag offer-consultation-btn">
                                                <x-icon.video fill="#0036E3"/>
                                                Offer Consultation</a>
                                            <a href="#" class="expert-profile-tag">Communication
                                                Skills</a>
                                            <a href="#" class="expert-profile-tag">Industry Treds
                                                Awareness</a>
                                            <a href="#" class="expert-profile-tag"> Research</a>
                                            <a href="#" class="expert-profile-tag">System Research
                                                Development</a>
                                            <a href="#"
                                                class="expert-profile-tag">Communication </a>
                                            <a href="#" class="expert-profile-tag">Industry
                                                Treds</a>
                                            <a href="#" class="expert-profile-tag">Educational
                                                Research</a>
                                            <a href="#" class="expert-profile-tag">System
                                                Development</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>