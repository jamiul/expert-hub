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
                <button class="icon-btn icon-btn-sm p-0" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none">
                        <path
                            d="M7.3077 20.4998C6.80898 20.4998 6.38302 20.3232 6.02982 19.97C5.67661 19.6168 5.5 19.1908 5.5 18.6921V5.99981H4.5V4.49983H8.99997V3.61523H15V4.49983H19.5V5.99981H18.5V18.6921C18.5 19.1972 18.325 19.6248 17.975 19.9748C17.625 20.3248 17.1974 20.4998 16.6922 20.4998H7.3077ZM17 5.99981H6.99997V18.6921C6.99997 18.7818 7.02883 18.8556 7.08652 18.9133C7.14423 18.971 7.21795 18.9998 7.3077 18.9998H16.6922C16.7692 18.9998 16.8397 18.9678 16.9038 18.9037C16.9679 18.8395 17 18.769 17 18.6921V5.99981ZM9.40385 16.9998H10.9038V7.99981H9.40385V16.9998ZM13.0961 16.9998H14.5961V7.99981H13.0961V16.9998Z"
                            fill="#191D24" fill-opacity="0.7"/>
                    </svg>
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
            closeModal(event[0]);
        });
        $wire.on('openEditExperienceModal', (event) => {
            openModal(event[0]);
        });
        $wire.on('closeEditExperienceModal', (event) => {
            closeModal(event[0]);
        });
    </script>
    @endscript
    <!-- Modal : Add Work Experience-->
    <div class="modal fade" id="addExperience" tabindex="-1" aria-labelledby="addExperienceLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <form wire:submit="addExperience">
                <div class="modal-content">
                    <div class="modal-header p-0 border-0">
                        <h5 class="modal-title" id="exampleModalLabel">Add Work Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-0">
                        <x-form.input type="text" label="Job Title" name="title"
                                        placeholder="Type Here" value=""/>
                        <x-form.input type="text" label="Institute" name="institute" placeholder="Type"
                                        value=""/>
                        <x-form.input type="text" label="Address" name="address" placeholder="Type"
                                        value=""/>
                        <div class="row">
                            <div class="col-md-6">
                                <x-form.select label="Start Year" name="start_year">
                                    <option value="">Select Year</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                </x-form.select>
                            </div>
                            <div class="col-md-6">
                                <x-form.select label="End Year" name="end_year">
                                    <option value="">Select Year</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                </x-form.select>
                            </div>
                        </div>
                        <x-form.textarea label="Description" name="description" placeholder="Type"/>
                        <x-form.check name="currentlyWorking">
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
    <div class="modal fade" id="editExperience" tabindex="-1" aria-labelledby="editExperienceLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <form wire:submit="updateExperience">
                <div class="modal-content">
                    <div class="modal-header p-0 border-0">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Work Experience</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-0">
                        <x-form.input type="text" label="Job Title" name="title"
                                        placeholder="Type Here" value=""/>
                        <x-form.input type="text" label="Institute" name="institute" placeholder="Type"
                                        value=""/>
                        <x-form.input type="text" label="Address" name="address" placeholder="Type"
                                        value=""/>
                        <div class="row">
                            <div class="col-md-6">
                                <x-form.select label="Start Year" name="start_year">
                                    <option value="">Select Year</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                </x-form.select>
                            </div>
                            <div class="col-md-6">
                                <x-form.select label="End Year" name="end_year">
                                    <option value="">Select Year</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                </x-form.select>
                            </div>
                        </div>
                        <x-form.textarea label="Description" name="description" placeholder="Type"/>
                        <x-form.check name="currentlyWorking">
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
    <div class="modal fade" id="deleteWorkExperience" tabindex="-1" aria-labelledby="deleteWorkExperienceLabel"
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
                    <button type="button" class="btn btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->
</div>
