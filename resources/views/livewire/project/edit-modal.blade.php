<x-modal.form action="updateProject">
    <x-slot name="title">Update Project</x-slot>
        <div class="sidebar-layout right-sidebar-layout edit-client-job-post border-0">
            <div class="page-sidebar">
                <div class="sidebar-widget">
                    <x-form.input class="label-inline input-field-md" type="number" label="{{ $project->type }}" wire:model="budget_start_amount"/>
                </div>
                <div class="sidebar-widget">
                    <h4 class="widget-title">Job information</h4>
                    <div class="widget-content text-sm">
                        <div class="d-flex gap-2 align-items-center py-1">
                            <x-icon.graduation-cap fill="#0036E3"/>
                            <div>
                                <p class="m-0 fw-medium">{{ $project->eois->count() }}</p>
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
                <div class="edit-job-post-card">
                    <div class="project-details-title">
                        <div class="form-input-group form-input-has-icon ">
                            <input name="type" id="type" class="form-input-field" type="text" wire:model.blur="title" placeholder="Title">
                            <span class="form-input-icon">
                                <x-icon.edit/>
                            </span>
                        </div>
                    </div>
                    <x-form.textarea label="Project Description" wire:model.blur="description"
                                        placeholder="Project Description"></x-form.textarea>

                    <x-form.choice wire:model="selectedSkills" multiple>
                        @foreach ($availableSkills as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </x-form.choice>
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
                        @forelse ($project->attachments as $attachment)
                            <div class="attachment-display-card attachment-edit-card">
                                <div class="attachment-display-thumb">
                                    @if(in_array($attachment->mime_type, ['image/jpeg','image/png']) )
                                        <img src="{{ $attachment->getFullUrl() }}"/>
                                    @else
                                        <x-icon.document-upload fill="#0059C999"/>
                                    @endif
                                    <div class="attachment-edit-overly">
                                        <button class="icon-btn icon-btn-md"><x-icon.edit/></button>
                                        <button wire:click="deleteAttachment({{ $attachment->id }})" class="icon-btn icon-btn-md"><x-icon.delete fill="#191D24"/></button>
                                    </div>
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
    <x-slot name="button">
        <button type="submit" class="btn btn-primary">Update</button>
    </x-slot>
</x-modal.form>