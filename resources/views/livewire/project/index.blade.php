<section class="my-60">
    <div class="container">
        <div class="title-page-wrapper">
            <div class="title-page-header border-bottom">
                <div class="d-flex justify-content-between align-items-center gap-3">
                    <div><h1 class="h5 m-0">All Project Posts</h1></div>
                    <div>
                        <a href="{{ route('projects.create') }}" class="btn btn-primary btn-md">Post a Job</a>
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
                        <button class="btn btn-primary">
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
                                        <p class="mb-1 fw-medium">{{ $project->eois->count() }} (48 new)</p>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if($project->isPublished())
                                        <p class="mb-1">Message</p>
                                        <p class="mb-1 fw-medium">7</p>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if($project->isPublished())
                                        <p class="mb-1">Hired</p>
                                        <p class="mb-1 fw-medium">1</p>
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
                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#editpostingcustomize" href="#">Edit Posting</a>
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
                    Pagination here
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editpostingcustomize" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="sidebar-layout right-sidebar-layout edit-client-job-post border-0">
                        <div class="page-sidebar">
                            <div class="sidebar-widget">
                                <x-form.input class="label-inline input-field-md" type="number" label="Hourly" wire:model="rate" placeholder="$200"/>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="widget-title">Job information</h4>
                                <div class="widget-content text-sm">
                                    <div class="d-flex gap-2 align-items-center py-1">
                                        <x-icon.graduation-cap fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">125</p>
                                            <p class="mb-0"> Bid</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.globe fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">15.45 </p>
                                            <p class="mb-0"> Average Bid</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="widget-title">About the client</h4>
                                <div class="widget-content text-sm">
                                    <div class="d-flex gap-2 align-items-center py-1">
                                        <x-icon.account-circle fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">Dr Miles Esther</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.graduation-cap fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">Institution</p>
                                            <p class="mb-0"> Sydney Islami business school</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.globe fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">Austria</p>
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
                        <div class="page-content">
                            <div class="edit-job-post-card">
                                <div class="project-details-title">
                                    <div class="form-input-group form-input-has-icon ">
                                        <input name="type" id="type" class="form-input-field" type="text" wire:model="type" placeholder="Type" value="Academic content writer">
                                       <span class="form-input-icon">
                                           <x-icon.edit/>
                                       </span>
                                    </div>
                                </div>
                                <x-form.textarea label="Project Description" wire:model="ProjectDescription"
                                                 placeholder="Project Description">Seeking an experienced Curriculum Developer to create a cutting-edge curriculum for our postgraduate public health unit. You will collaborate with our team to design a comprehensive curriculum that aligns with industry trends and academic standards. Your role involves conducting research, developing course materials, and crafting assessments that foster critical</x-form.textarea>

                                <div class="tag-input-textarea">
                                    <x-form.textarea label="Required Skills" wire:model="bio" placeholder=""/>
                                    <div class="tag-list">
                                        <span class="tag">Architecture 1 <x-icon.close-circle/> </span>
                                        <span class="tag">Architecture 2 <x-icon.close-circle/> </span>
                                        <span class="tag">LMS 2 <x-icon.close-circle/> </span>
                                    </div>
                                </div>
                                <p class="suggestion-skills text-sm">
                                    Suggestion skills:
                                    <strong>Curriculum Editor,</strong>
                                    <strong>E-Learning Developer,</strong>
                                    <strong>Curriculum Writer,</strong>
                                    <strong>Curriculum Design,</strong>
                                    <strong>Research and Analysis, </strong>
                                    <strong>Skill development </strong>
                                </p>

                                <p class="fw-medium mb-2">Attachments</p>
                                <div class="attachment-display-wrapper ">
                                    <div class="attachment-display-card attachment-edit-card">
                                        <div class="attachment-display-thumb">
                                            <img src="{{ asset('assets/frontend/img/attachment1.png') }}"/>
                                            <div class="attachment-edit-overly">
                                                <button class="icon-btn icon-btn-md"><x-icon.edit/></button>
                                                <button class="icon-btn icon-btn-md"><x-icon.delete  fill="#191D24"/></button>
                                            </div>
                                        </div>
                                        <div class="attachment-display-info">
                                            <h6 class="mb-1">File name.jpg</h6>
                                            <p class="m-0">1.3 MB</p>
                                        </div>
                                    </div>
                                    <div class="attachment-display-card attachment-edit-card">
                                        <div class="attachment-display-thumb">
                                            <img src="{{ asset('assets/frontend/img/attachment2.png') }}"/>
                                            <div class="attachment-edit-overly">
                                                <button class="icon-btn icon-btn-md"><x-icon.edit/></button>
                                                <button class="icon-btn icon-btn-md"><x-icon.delete fill="#191D24"/></button>
                                            </div>
                                        </div>
                                        <div class="attachment-display-info">
                                            <h6 class="mb-1">File name.jpg</h6>
                                            <p class="m-0">1.3 MB</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 mt-20">
                                    <button style="width: 130px" class="btn btn-md btn-outline-primary">Cancel</button>
                                    <button style="width: 130px" class="btn btn-md btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>