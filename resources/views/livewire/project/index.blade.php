<section class="my-60">
    <div class="container">
        <div class="title-page-wrapper">
            <div class="title-page-header border-bottom">
                <div class="d-flex justify-content-between align-items-center gap-3">
                    <div><h1 class="h5 m-0">All Project Posts</h1></div>
                    <div>
                        <a href="{{ route('projects.create') }}" style="width: 203px" class="btn btn-primary btn-md">Post a Job</a>
                    </div>
                </div>
                <div class="seller-admin-project-filter mt-20">
                    <x-form.flatpicker class="vertical-label input-field-md" label="Sort By" name="datepicker"/>

                    <x-form.select class="input-field-md" wire:model="title">
                        <option value="Mr">Ascending</option>
                        <option value="Mrs">Descending</option>
                    </x-form.select>
                    <div class="input-group">
                        <input type="text" class="input-field-control input-field-control-md"
                                placeholder="Search by contract, client, or company">
                        <button class="btn btn-secondary">
                            <x-icon.search/>
                        </button>
                    </div>
                </div>
            </div>
            <div class="title-page-body">
                <div class="table-responsive">
                    <table class="table text-sm table-extra-padding seller-project-table">
                        @forelse ($projects as $project)
                            <tr wire:key="{{ $project->id }}" class="align-middle">
                                <td>
                                    <p class="mb-1 fw-medium">{{ $project->title }}</p>
                                    <p class="mb-1">Posted - {{ $project->created_at->format('M d Y') }}</p>
                                    @if($project->isDraft())
                                        <a class="btn btn-outline-primary" href="{{ route('client.projects.edit', $project) }}">Edit Draft</a>
                                    @elseif($project->isPublished())
                                        <a class="btn btn-outline-primary" href="{{ route('client.eois.index', $project) }}">View Proposal</a>
                                    @endif
                                </td>
                                <td>
                                    <p class="mb-1">{{ $project->status->value }}</p>
                                    <p class="mb-1 fw-medium">{{ $project->type->value }}</p>
                                </td>
                                <td>
                                    @if($project->isPublished())
                                        <p class="mb-1">Proposal</p>
                                        <p class="mb-1 fw-medium">{{ $project->eois->count() }} ({{ $project->newEois()->count() }} new) </p>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if($project->isPublished())
                                        <p class="mb-1">Message</p>
                                        <p class="mb-1 fw-medium">{{ $project->messagedEois()->count() }}</p>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if($project->isPublished())
                                        <p class="mb-1">Hired</p>
                                        <p class="mb-1 fw-medium">{{ $project->contracts->count() }}</p>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="icon-btn border" data-bs-toggle="dropdown" aria-expanded="false">
                                            <x-icon.three-dots/>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                @if($project->isDraft())
                                                    <a class="dropdown-item" href="{{ route('client.projects.edit', $project) }}">Edit Posting</a>
                                                @endif
                                                @if($project->isPublished())
                                                <button type="button" wire:click="$dispatch('modal.open', {component: 'project.edit-modal', arguments: {'project': {{ $project->id }}}})" class="dropdown-item">Edit Posting</button>
                                                {{-- <a class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#editpostingcustomize" href="#">Edit Posting</a> --}}
                                                @endif
                                            </li>
                                            <li>
                                                <button wire:click="deleteProject({{ $project->id }})" class="dropdown-item" >Remove Posting</button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        <x-empty/>
                        @endforelse
                    </table>
                </div>
                <div class="text-center py-40">
                    {{ $projects->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
