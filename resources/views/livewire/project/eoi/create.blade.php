<div class="my-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="title-page-wrapper">
                    <div class="title-page-header border-bottom">
                        <h1 class="h5 d-flex align-items-center gap-2 mb-2">
                            <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                            {{ $project->title }}
                        </h1>
                        <div
                            class="project-item-meta-wrapper d-flex align-items-center gap-2 justify-content-between">
                            <div
                                class="project-details-meta-data d-flex align-items-center gap-2 justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <x-icon.clock width="20" height="20" fill="#0036E3"/>
                                        {{ $project->created_at->diffForHumans() }}
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <x-icon.tag fill="#0036E3"/>
                                        {{ $project->expertise->name }}
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <x-icon.flag fill="#0036E3"/>
                                        {{ $project->type }}: ${{ $project->budget_start_amount }}
                                    </div>
                                </div>
                            </div>
                            <div class="project-item-action d-flex align-items-center gap-2">
                                <div>
                                    <button class="btn btn-icon btn-outline-light btn-favorite">
                                        <span class="heart-line"><x-icon.heart fill="#0036E3"/></span>
                                        <span class="heart-filled"><x-icon.heart-filled fill="#0036E3"/></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form wire:submit="sendEoi">
                        <div class="title-page-body p-40">
                            <p class="mb-0">
                                {{ $project->description }}
                            </p>
                            <div class="tag-list mt-40">
                                @foreach ($project->skills as $skill)
                                    <a href="#" class="project-tag">{{ $skill->name }}</a>
                                @endforeach
                            </div>
                            @if($project->isHourly())
                                @include('livewire.project.eoi.hourly')
                            @elseif($project->isFixed())
                                @include('livewire.project.eoi.fixed')
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="mb-4 text-base">Additional details</h3>
                                    <x-form.textarea label="Cover Letter" wire:model.blur="cover_letter" placeholder="max 200 words"/>
                                    <div class="image-upload-flat">
                                        <label for="upload-file" class="text-center">
                                            <span> <x-icon.document-upload fill="#0059C999"/> </span>
                                            <span class="fw-medium">Clik to upload or drag & drop</span>
                                            <span class="text-sm">You may attach up to 10 files under the size of 25 MB each. Include work samples or other documents to support your application. Do not attach your resume — your profile is automatically forwarded to the client with your proposal. </span>
                                        </label>
                                        <input type="file" id="upload-file" class="d-none">
                                    </div>
                                </div>
                            </div>
                            <x-form.check wire:model="agreement" class="mt-20 project-eoi-trams-condition">
                                Yes, I understand and agree to the <a href="">EduEXHub Terms of Service</a>, including
                                the
                                <a href="">User Agreement</a> and <a href="">Privacy Policy</a>.
                            </x-form.check>
                            <button type="submit" class="btn btn-primary btn-md mt-20 project-eoi-submit-btn"> Submit EOI</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
