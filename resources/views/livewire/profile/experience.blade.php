<div class="progress-step-content ">
    <h5 class="mb-2">Work Experience History</h5>
    <p>Add your working experience.</p>

    <div class="d-grid grid-cols-sm-6 gap-3">
        @foreach ($experiences as $experience)
        <div class="card">
            <div class="card-header bg-white">
                <p class="fw-medium mb-0"> {{ $experience->title }}</p>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div><p class="text-lg">{{ $experience->institute }}</p></div>
                    <div><p class="text-sm fw-medium">{{ $experience->start_year }} - {{ $experience->end_year }}</p></div>
                </div>
                <p class="fst-italic"> {{ $experience->address }}</p>
                <p>{{ $experience->description }}</p>
            </div>
            <div class="card-footer bg-white d-flex justify-content-center gap-3">
                <button wire:click="editExperience({{ $experience->id }})" class="icon-btn icon-btn-sm p-0">
                    <x-icon.edit/>
                </button>
                <button wire:click="deleteExperience({{ $experience->id }})" class="icon-btn icon-btn-sm p-0" data-bs-toggle="modal"
                        data-bs-target="#deleteExperience">
                    <x-icon.delete/>
                </button>
            </div>
        </div>
        @endforeach
    </div>
    <button class="btn btn-link px-0 d-inline-flex align-items-center my-4" data-bs-toggle="modal"
            data-bs-target="#addExperience">
        <x-icon.add/>
        <span>Add Work Experience</span>
    </button>
    @script
    <script>
        $wire.on('experienceAdded', (event) => {
            closeModal('addExperience');
        });
        $wire.on('openEditExperienceModal', (event) => {
            openModal('editExperience');
        });
        $wire.on('experienceUpdated', (event) => {
            closeModal('editExperience');
        });
        $wire.on('experienceDeleted', (event) => {
            closeModal('deleteExperience');
        });
    </script>
    @endscript
    <!-- Modal : Add Work Experience-->
    <div wire:ignore.self class="modal fade" id="addExperience" tabindex="-1" aria-labelledby="addExperienceLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <form wire:submit="addExperience">
                <div class="modal-content">
                    <div class="modal-header p-0 border-0">
                        <h5 class="modal-title" id="exampleModalLabel">Add Work Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-0">
                        <x-form.input type="text" label="Job Title" name="title" placeholder="Type job title"/>
                        <x-form.input type="text" label="Institute" name="institute" placeholder="Type institute name"/>
                        <x-form.input type="text" label="Address" name="address" placeholder="Type address"/>
                        <div class="row">
                            <div class="col-md-6">
                                <x-form.choice name="start_year" label="Start Year" searchPlaceholder="Type Year">
                                    @foreach ($years as $year)
                                        <option value="">Select Year</option>
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endforeach
                                </x-form.choice>
                            </div>
                            <div class="col-md-6">
                                @if(!$this->currentExperience)
                                <x-form.choice name="end_year" label="End Year" searchPlaceholder="Type Year">
                                    @foreach ($years as $year)
                                        <option value="">Select Year</option>
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endforeach
                                </x-form.choice>
                                @endif
                            </div>
                        </div>
                        <x-form.textarea label="Description" name="description" placeholder="Type"/>
                        <x-form.check name="currentExperience" wire:model.live="currentExperience">
                            I currently work here
                        </x-form.check>
                    </div>
                    <div class="modal-footer px-0 pb-0 pt-3">
                        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--End Modal -->
    <!-- Modal : Edit Work Experience-->
    <div wire:ignore.self class="modal fade" id="editExperience" tabindex="-1" aria-labelledby="editExperienceLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <form wire:submit="updateExperience">
                <div class="modal-content">
                    <div class="modal-header p-0 border-0">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Work Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-0">
                        <x-form.input type="text" label="Job Title" name="title" placeholder="Type job title"/>
                        <x-form.input type="text" label="Institute" name="institute" placeholder="Type institute name"/>
                        <x-form.input type="text" label="Address" name="address" placeholder="Type address"/>
                        <div class="row">
                            <div class="col-md-6">
                                <x-form.choice name="start_year" label="Start Year" searchPlaceholder="Type Year">
                                    @foreach ($years as $year)
                                        <option value="">Select Year</option>
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endforeach
                                </x-form.choice>
                            </div>
                            <div class="col-md-6">
                                @if(!$this->currentExperience)
                                <x-form.choice name="end_year" label="End Year" searchPlaceholder="Type Year">
                                    @foreach ($years as $year)
                                        <option value="">Select Year</option>
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endforeach
                                </x-form.choice>
                                @endif
                            </div>
                        </div>
                        <x-form.textarea label="Description" name="description" placeholder="Type"/>
                        <x-form.check name="currentExperience" wire:model.live="currentExperience">
                            I currently work here
                        </x-form.check>
                    </div>
                    <div class="modal-footer px-0 pb-0 pt-3">
                        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Delete Work Experience-->
    <div wire:ignore.self class="modal fade" id="deleteExperience" tabindex="-1" aria-labelledby="deleteWorkExperienceLabel"
         aria-hidden="true">
        <div class="modal-dialog flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Work Experience</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <p>Paragraph: Archetype lets designers like you very quickly and easily create consistent</p>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button wire:click="destroyExperience" type="button" class="btn btn-danger">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->
</div>
