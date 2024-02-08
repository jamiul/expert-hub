<div class="pt-20" x-data="{ activeTab: 'myFeed' }">

    <ul class="secondary-tab-nav" role="tablist">
        <li x-on:click="activeTab = 'myFeed'" :class="{ 'tab-nav-item': true, 'active': activeTab === 'myFeed' }">
            My Feed
        </li>
        <li x-on:click="activeTab = 'bestMatch'" :class="{ 'tab-nav-item': true, 'active': activeTab === 'bestMatch' }">
            Best Match
        </li>
        <li x-on:click="activeTab = 'savedJobs'" :class="{ 'tab-nav-item': true, 'active': activeTab === 'savedJobs' }">
            Saved Jobs
        </li>
    </ul>
    <div class="tab-content">
        <div x-show="activeTab === 'myFeed'" class="my-feed-tab-content" x-cloak>
            <!-- Content for My Feed tab -->

            @forelse ($projects as $project)
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
                        <div class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
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
                                    {{ $project->type }}: <strong>${{ $project->budget_start_amount }}@if($project->budget_end_amount)- ${{ $project->budget_end_amount }} @endif</strong>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-outline-light m-1" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <x-icon.share />
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" target="_blank"
                                               href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('projects.show', $project) }}">
                                                <x-icon.linkedin />
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

                    <div class="tag-list light-tag-list" x-data="{ showAllTags: false, buttonText: ' + {{ $project->skills->count() - 4 }}' + ' More' }" :class="{ 'showing-less-tag': !showAllTags }">
                        @foreach ($project->skills as $skill)
                            <span class="tag">{{ $skill->name }}</span>
                        @endforeach
                        @if ($project->skills->count() > 4)
                            <button x-on:click="showAllTags = !showAllTags; buttonText = showAllTags ? 'Show Less' : ' + {{ $project->skills->count() - 4 }}' + ' More' " x-text="buttonText" class="all-tags-trigger"></button>
                        @endif
                    </div>
                </div>
            @empty
                <x-empty/>
            @endforelse

            {{ $projects->links() }}
        </div>

        <div x-show="activeTab === 'bestMatch'" class="best-match-tab-content" x-cloak>
            <!-- Content for Best Match tab -->

            @forelse ($projects as $project)
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
                        <div class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
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
                                    {{ $project->type }}: <strong>${{ $project->budget_start_amount }}@if($project->budget_end_amount)- ${{ $project->budget_end_amount }} @endif</strong>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-outline-light m-1" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <x-icon.share />
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" target="_blank"
                                               href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('projects.show', $project) }}">
                                                <x-icon.linkedin />
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

                    <div class="tag-list light-tag-list" x-data="{ showAllTags: false, buttonText: ' + {{ $project->skills->count() - 4 }}' + ' More' }" :class="{ 'showing-less-tag': !showAllTags }">
                        @foreach ($project->skills as $skill)
                            <span class="tag">{{ $skill->name }}</span>
                        @endforeach
                        @if ($project->skills->count() > 4)
                            <button x-on:click="showAllTags = !showAllTags; buttonText = showAllTags ? 'Show Less' : ' + {{ $project->skills->count() - 4 }}' + ' More' " x-text="buttonText" class="all-tags-trigger"></button>
                        @endif
                    </div>
                </div>
            @empty
                <x-empty/>
            @endforelse

            {{ $projects->links() }}
        </div>

        <div x-show="activeTab === 'savedJobs'" class="saved-jobs-tab-content" x-cloak>
            <!-- Content for Saved Jobs tab -->
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
                        <div class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
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
                                    {{ $project->type }}: <strong>${{ $project->budget_start_amount }}@if($project->budget_end_amount)- ${{ $project->budget_end_amount }} @endif</strong>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-outline-light m-1" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <x-icon.share />
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" target="_blank"
                                               href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('projects.show', $project) }}">
                                                <x-icon.linkedin />
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

                    <div class="tag-list light-tag-list" x-data="{ showAllTags: false, buttonText: ' + {{ $project->skills->count() - 4 }}' + ' More' }" :class="{ 'showing-less-tag': !showAllTags }">
                        @foreach ($project->skills as $skill)
                            <span class="tag">{{ $skill->name }}</span>
                        @endforeach
                        @if ($project->skills->count() > 4)
                            <button x-on:click="showAllTags = !showAllTags; buttonText = showAllTags ? 'Show Less' : ' + {{ $project->skills->count() - 4 }}' + ' More' " x-text="buttonText" class="all-tags-trigger"></button>
                        @endif
                    </div>
                </div>
            @empty
                <x-empty/>
            @endforelse

            {{ $favoriteProjects->links() }}
        </div>


    </div>

</div>
