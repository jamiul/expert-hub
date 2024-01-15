<div>
    <ul class="nav nav-tabs px-4 pt-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button
                wire:click="$set('tab', 'feed')"
                class="nav-link {{ $tab == 'feed' ? 'active' : '' }}"
                type="button"
            >
            My Feed
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button
                wire:click="$set('tab', 'best')"
                class="nav-link {{ $tab == 'best' ? 'active' : '' }}"
                type="button"
            >
                Best Match
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button
                wire:click="$set('tab', 'save')"
                class="nav-link {{ $tab == 'save' ? 'active' : '' }}"
                type="button"
            >
                Saved Jobs
            </button>
        </li>
    </ul> <!-- Tab panes -->
    <div class="tab-content">
        <!--.//feed__tab start Here-->
        <div class="tab-pane {{ $tab == 'feed' ? 'active' : '' }}" id="feedTab" role="tabpanel" aria-labelledby="feedTab-tab">
            <ul class="feed__list">
                @forelse ($projects as $project)
                    <li class="feed__card tranisition" id="project-list-{{$project->id}}">
                        <h2 class="title lead fw-medium">
                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                width="24" height="24" alt="bag">
                            <a href="{{route('projects.show', $project)}}">
                                {{ $project->title ?? '' }}
                            </a>
                        </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2">
                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                        width="20" height="20" alt="label"> <span class="ps-1">
                                        {{ $project->expertise->name ?? '' }}
                                    </span>
                                </div>
                                <div class="d-inline-flex align-items-center me-2">
                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                        width="20" height="20" alt="clock"> <span class="ps-1">
                                        {{ $project->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <div class="d-inline-flex align-items-center me-2">
                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                        width="20" height="20" alt="globe"> <span
                                        class="ps-1">{{ $project->client->user->country->name ?? '' }}</span>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="fw-normal text-muted">
                                    {{ $project->type }}:&nbsp;
                                </span>
                                <span class="fw-medium text-muted">
                                    ${{ $project->budget_start_amount . ' - ' . $project->budget_end_amount }}
                                </span>
                                <div class="dropdown">
                                    <button class="btn btn-outline-light m-1" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <x-icon.share/>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" target="_blank"
                                               href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('projects.show', $project) }}">
                                                <x-icon.linkedin/>
                                                Linkedin
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" target="_blank"
                                               href="https://www.facebook.com/sharer/sharer.php?u={{ route('projects.show', $project) }}">
                                                <x-icon.facebook/>
                                                Facebook
                                            </a>
                                        </li>
                                        <li x-data="{ projectUrl: '{{ route('projects.show', $project) }}' }">
                                            <button class="dropdown-item" x-clipboard="projectUrl">
                                                <x-icon.copy/>
                                                Copy Link
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <button wire:click="favourite({{ $project->id }})"
                                    class="btn btn-outline-light btn-favorite m-1 {{ $project->favourited() ? 'favorited' : ''}}">
                                    <span class="heart-line"> <x-icon.heart fill="#0036E3"/></span>
                                    <span class="heart-filled"> <x-icon.heart-filled fill="#0036E3"/></span>
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15">
                            @if ($showReadMoreButton === $project->id)
                                {{ $project->description }}
                                <a href="#project-list-{{$project->id}}" wire:click="readLess" class="link">Less</a>
                            @else
                                {{ Str::limit($project->description, 235) }}
                                <a href="#project-list-{{$project->id}}" wire:click="readMore({{ $project->id }})" class="link">More</a>
                            @endif
                        </div>
                        <div class="tag__list d-flex flex-wrap mt-3">
                            <livewire:expert-profile.project-skills :project="$project" />
                        </div>
                    </li>
                @empty
                    <p>No data</p>
                @endforelse

            </ul>

            {{ $projects->links() }}
        </div>
        <!--.//feed__tab End Here-->

        <!--.//feed__tab start Here-->
        <div class="tab-pane {{ $tab == 'best' ? 'active' : '' }}" id="bestMatch" role="tabpanel" aria-labelledby="bestMatch-tab">
            <div class="tab-pane" id="#bestMatch" role="tabpanel" aria-labelledby="#bestMatch-tab">
                <ul class="feed__list">
                    @forelse ($projects as $project)
                        <li class="feed__card tranisition" id="project-list-{{$project->id}}">
                            <h2 class="title lead fw-medium">
                                <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                    width="24" height="24" alt="bag">
                                <a href="#">
                                    {{ $project->title ?? '' }}
                                </a>
                            </h2>
                            <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                                <div class="d-inline-flex fw-medium">
                                    <div class="d-inline-flex align-items-center me-2">
                                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                            width="20" height="20" alt="label"> <span class="ps-1">
                                            {{ $project->expertise->name ?? '' }}
                                        </span>
                                    </div>
                                    <div class="d-inline-flex align-items-center me-2">
                                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                            width="20" height="20" alt="clock"> <span class="ps-1">
                                            {{ $project->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                    <div class="d-inline-flex align-items-center me-2">
                                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                            width="20" height="20" alt="globe"> <span
                                            class="ps-1">{{ $project->client->user->country->name ?? '' }}</span>
                                    </div>
                                </div>
                                <div class="d-inline-flex align-items-center">
                                    <span class="fw-normal text-muted">
                                        {{ $project->type }}:&nbsp;
                                    </span>
                                    <span class="fw-medium text-muted">
                                        ${{ $project->budget_start_amount . ' - ' . $project->budget_end_amount }}
                                    </span>
                                    <div class="dropdown">
                                        <button class="btn btn-outline-light m-1" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <x-icon.share/>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" target="_blank"
                                                   href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('projects.show', $project) }}">
                                                    <x-icon.linkedin/>
                                                    Linkedin
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" target="_blank"
                                                   href="https://www.facebook.com/sharer/sharer.php?u={{ route('projects.show', $project) }}">
                                                    <x-icon.facebook/>
                                                    Facebook
                                                </a>
                                            </li>
                                            <li x-data="{ projectUrl: '{{ route('projects.show', $project) }}' }">
                                                <button class="dropdown-item" x-clipboard="projectUrl">
                                                    <x-icon.copy/>
                                                    Copy Link
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <button wire:click="favourite({{ $project->id }})"
                                        class="btn btn-outline-light btn-favorite m-1 {{ $project->favourited() ? 'favorited' : ''}}">
                                        <span class="heart-line"> <x-icon.heart fill="#0036E3"/></span>
                                        <span class="heart-filled"> <x-icon.heart-filled fill="#0036E3"/></span>
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <div class="desc text-dark fs-15">
                                @if ($showReadMoreButton === $project->id)
                                    {{ $project->description }}
                                    <a href="#project-list-{{$project->id}}" wire:click="readLess" class="link">Less</a>
                                @else
                                    {{ Str::limit($project->description, 235) }}
                                    <a href="#project-list-{{$project->id}}" wire:click="readMore({{ $project->id }})" class="link">More</a>
                                @endif
                            </div>
                            <div class="tag__list d-flex flex-wrap mt-3">
                                <livewire:expert-profile.project-skills :project="$project" />
                            </div>
                        </li>
                    @empty
                        <p>No data</p>
                    @endforelse

                </ul>

                {{ $projects->links() }}
            </div>
            <!--.//feed__tab-->
        </div>
        <!--.//best__match-->
        <div class="tab-pane {{ $tab == 'save' ? 'active' : '' }}" id="savedJobs" role="tabpanel" aria-labelledby="savedJobs-tab">
            <ul class="feed__list">
                @forelse ($favoriteProjects as $project)
                    <li class="feed__card tranisition" id="project-list-{{$project->id}}">
                        <h2 class="title lead fw-medium">
                            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/bag.svg') }}"
                                width="24" height="24" alt="bag">
                            <a href="#">
                                {{ $project->title ?? '' }}
                            </a>
                        </h2>
                        <div class="info__list fs-13 d-flex justify-content-between align-items-center pt-1">
                            <div class="d-inline-flex fw-medium">
                                <div class="d-inline-flex align-items-center me-2">
                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/label.svg') }}"
                                        width="20" height="20" alt="label"> <span class="ps-1">
                                        {{ $project->expertise->name ?? '' }}
                                    </span>
                                </div>
                                <div class="d-inline-flex align-items-center me-2">
                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/clock.svg') }}"
                                        width="20" height="20" alt="clock"> <span class="ps-1">
                                        {{ $project->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <div class="d-inline-flex align-items-center me-2">
                                    <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/globe.svg') }}"
                                        width="20" height="20" alt="globe"> <span
                                        class="ps-1">{{ $project->client->user->country->name ?? '' }}</span>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="fw-normal text-muted">
                                    {{ $project->type }}:&nbsp;
                                </span>
                                <span class="fw-medium text-muted">
                                    ${{ $project->budget_start_amount . ' - ' . $project->budget_end_amount }}
                                </span>
                                <div class="dropdown">
                                    <button class="btn btn-outline-light m-1" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <x-icon.share/>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" target="_blank"
                                               href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('projects.show', $project) }}">
                                                <x-icon.linkedin/>
                                                Linkedin
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" target="_blank"
                                               href="https://www.facebook.com/sharer/sharer.php?u={{ route('projects.show', $project) }}">
                                                <x-icon.facebook/>
                                                Facebook
                                            </a>
                                        </li>
                                        <li x-data="{ projectUrl: '{{ route('projects.show', $project) }}' }">
                                            <button class="dropdown-item" x-clipboard="projectUrl">
                                                <x-icon.copy/>
                                                Copy Link
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <button wire:click="favourite({{ $project->id }})"
                                    class="btn btn-outline-light btn-favorite m-1 {{ $project->favourited() ? 'favorited' : ''}}">
                                    <span class="heart-line"> <x-icon.heart fill="#0036E3"/></span>
                                    <span class="heart-filled"> <x-icon.heart-filled fill="#0036E3"/></span>
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="desc text-dark fs-15">
                            @if ($showReadMoreButton === $project->id)
                                {{ $project->description }}
                                <a href="#project-list-{{$project->id}}" wire:click="readLess" class="link">Less</a>
                            @else
                                {{ Str::limit($project->description, 235) }}
                                <a href="#project-list-{{$project->id}}" wire:click="readMore({{ $project->id }})" class="link">More</a>
                            @endif
                        </div>
                        <div class="tag__list d-flex flex-wrap mt-3">
                            <livewire:expert-profile.project-skills :project="$project" />
                        </div>
                    </li>
                @empty
                    <p>No data</p>
                @endforelse

            </ul>

            {{ $projects->links() }}
        </div>
        <!--.//savedJobs-->
    </div>
    <!--.//tab__pane-->
</div>
