<section class="my-60">
    <div class="container">
        <div class="title-page-wrapper">
            <div class="title-page-header pb-0">
                <h1 class="h5 mb-20">Favorites</h1>
            </div>
            <div x-data="{ activeTab: 'myFeed' }">
                <ul class="secondary-tab-nav" id="myTab" role="tablist">
                    <li x-on:click="activeTab = 'myFeed'" class="tab-nav-item"
                        :class="{ 'active': activeTab === 'myFeed' }"> Projects </li>
                </ul>
                <div class="project-tab">
                    <div x-show="activeTab === 'myFeed'" class="tab-content">
                        <!-- Content for My Feed tab -->
                        @forelse ($favoriteProjects as $project)
                            <div class="project-list-card-item">
                                <div class="project-list-card-item-header">
                                    <div class="project-item-title">
                                        <h3 class="h6 d-flex gap-2 mb-0">
                                            <x-icon.briefcase width="24" height="24" fill="#9196A2" />
                                            <a href="{{ route('projects.show', $project) }}">
                                                {{ $project->title }}
                                            </a>
                                        </h3>
                                    </div>
                                    <div
                                        class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                                        <div class="project-item-meta">
                                            <div class="">
                                                <x-icon.tag fill="#9196A2" />
                                                {{ $project->expertise->name ?? '' }}
                                            </div>
                                            <div class="">
                                                <x-icon.clock fill="#9196A2" />
                                                {{ $project->created_at->diffForHumans() }}
                                            </div>
                                            <div class="">
                                                <x-icon.globe width="20" height="20" fill="#9196A2" />
                                                {{ $project->client->user->country->name ?? '' }}
                                            </div>
                                        </div>
                                        <div class="project-item-action d-flex align-items-center gap-2">
                                            <div class="project-item-price">
                                                {{ $project->type }}: <strong>${{ $project->budget_start_amount }}
                                                    @if ($project->budget_end_amount)
                                                        - ${{ $project->budget_end_amount }}
                                                    @endif
                                                </strong>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-light m-1" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <x-icon.share />
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" target="_blank"
                                                            href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('projects.show', $project) }}">
                                                            <x-icon.logo-linkedin />
                                                            Linkedin
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" target="_blank"
                                                            href="https://www.facebook.com/sharer/sharer.php?u={{ route('projects.show', $project) }}">
                                                            <x-icon.facebook />
                                                            Facebook
                                                        </a>
                                                    </li>
                                                    <li x-data="{ projectUrl: '{{ route('projects.show', $project) }}' }">
                                                        <button class="dropdown-item" x-clipboard="projectUrl">
                                                            <x-icon.copy />
                                                            Copy Link
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <button wire:click="favourite({{ $project->id }})"
                                                class="btn btn-outline-light btn-favorite m-1 {{ $project->favourited() ? 'favorited' : '' }}">
                                                <span class="heart-line"><x-icon.heart fill="#0036E3" /></span>
                                                <span class="heart-filled"><x-icon.heart-filled fill="#0036E3" /></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-list-card-item-body">
                                    <p class="mb-0 text-summary text-base">
                                        {{ $project->description }}
                                    </p>
                                </div>

                                <div class="tag-list light-tag-list" x-data="{ showAllTags: false, buttonText: ' + {{ $project->skills->count() - 4 }}' + ' More' }"
                                    :class="{ 'showing-less-tag': !showAllTags }">
                                    @foreach ($project->skills as $skill)
                                        <span class="tag">{{ $skill->name }}</span>
                                    @endforeach
                                    @if ($project->skills->count() > 4)
                                        <button
                                            x-on:click="showAllTags = !showAllTags; buttonText = showAllTags ? 'Show Less' : ' + {{ $project->skills->count() - 4 }}' + ' More' "
                                            x-text="buttonText" class="all-tags-trigger"></button>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <x-no-favourite />
                        @endforelse

                        {{ $favoriteProjects->links() }}

                        @if(count($favoriteProjects) > 0)
                            <div class="view-all-training-btn-wrapper pb-40">
                                <a href="{{ route('find.projects') }}" class="btn btn-outline-primary border-2 btn-md">View
                                    all Project</a>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
