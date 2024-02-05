<div class="page-content p-0">
    <div class="project-list">
        @forelse ($projects as $project)
        <div class="project-list-card-item">
            <div class="project-list-card-item-header">
                <div class="project-item-title">
                    <h3 class="h6 d-flex gap-2 mb-0">
                        <x-icon.briefcase width="20" height="20" fill="#9196A2" />
                        <a href="{{ route('projects.show', $project) }}">
                            {{ $project->title }}
                        </a>
                    </h3>
                </div>
                <div class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                    <div class="project-item-meta d-flex align-items-center gap-3">
                        <div class="d-flex align-items-center gap-2">
                            <x-icon.tag fill="#9196A2" />
                            {{ $project->expertise->name ?? '' }}
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <x-icon.clock fill="#9196A2" />
                            {{ $project->created_at->diffForHumans() }}
                        </div>
                        <div class="d-flex align-items-center gap-2">
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
            <div class="tag-list">
                @foreach ($project->skills as $skill)
                    <a href="#" class="project-tag">{{ $skill->name }}</a>
                @endforeach
            </div>
        </div>
        @empty
            <div class="p-40">
                <x-empty />
            </div>

        @endforelse

    </div>
    {{ $projects->links() }}
</div>
