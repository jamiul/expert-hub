<div class="progress-step-content">
    <h5 class="mb-2">Expert by Field</h5>
    <p>Add your educational background to let employers know where you studied or are currently
        studying. Even if you didn't finish, it's important to include it here. And if you've earned
        a college degree, you don't need to add your high school/GED.</p>
    <h6>Educations</h6>
    <div class="d-grid grid-cols-sm-6 gap-3">
        @foreach ($educations as $education)
        <div class="card">
            <div class="card-header bg-white">
                <p class="fw-medium mb-0"> {{ $education->institution }}</p>
            </div>
            <div class="card-body">
                <table class="table table-sm table-borderless mb-0">
                    <tr>
                        <td>Degree</td>
                        <td class="fw-medium">: {{ $education->degree }}</td>
                    </tr>
                    <tr>
                        <td>Degree</td>
                        <td class="fw-medium">: {{ $education->field }}</td>
                    </tr>
                    <tr>
                        <td>Start Year</td>
                        <td class="fw-medium">: {{ $education->start_year }}</td>
                    </tr>
                    <tr>
                        <td>End Year</td>
                        <td class="fw-medium">: {{ $education->end_year }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer bg-white d-flex justify-content-center gap-3">
                <button wire:click="editEducation({{ $education->id }})" class="icon-btn icon-btn-sm p-0">
                    <x-icon.edit/>
                </button>
                <button wire:click="deleteEducation({{ $education->id }})" class="icon-btn icon-btn-sm p-0" data-bs-toggle="modal"
                        data-bs-target="#deleteEducation">
                    <x-icon.delete/>
                </button>
            </div>
        </div>
        @endforeach
    </div>
    <button class="btn btn-link px-0 d-inline-flex align-items-center my-4" data-bs-toggle="modal"
            data-bs-target="#addEducation">
        <x-icon.add/>
        <span>Add Education</span>
    </button>
    @script
    <script>
        $wire.on('educationAdded', (event) => {
            closeModal('addEducation');
        });
        $wire.on('openEditEducationModal', (event) => {
            openModal('editEducation');
        });
        $wire.on('educationUpdated', (event) => {
            closeModal('editEducation');
        });
        $wire.on('educationDeleted', (event) => {
            closeModal('deleteEducation');
        });
    </script>
    @endscript
    <!-- Modal : Add Education-->
    <div wire:ignore.self class="modal fade" id="addEducation" tabindex="-1" aria-labelledby="addEducationLabel" aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit="addEducation">
                <div class="modal-body px-0">
                    
                        <x-form.input type="text" label="Name of Institution" name="institution"
                                      placeholder="Type institution name" value=""/>

                        <x-form.input type="text" label="Degree" name="degree" placeholder="Ex: Bachelor"
                                      value=""/>
                        <x-form.input type="text" label="Degree" name="field" placeholder="Ex: Bachelor"
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
                        <x-form.check name="terms">
                            I currently study here
                        </x-form.check>
                    
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Modal -->
    <!-- Modal : Edit Education-->
    <div wire:ignore.self class="modal fade" id="editEducation" tabindex="-1" aria-labelledby="editEducationLabel" aria-hidden="true">
        <div class="modal-dialog modal-md flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit="updateEducation">
                <div class="modal-body px-0">
                    
                        <x-form.input type="text" label="Name of Institution" name="institution"
                                      placeholder="Type institution name" value=""/>

                        <x-form.input type="text" label="Degree" name="degree" placeholder="Ex: Bachelor"
                                      value=""/>
                        <x-form.input type="text" label="Degree" name="field" placeholder="Ex: Bachelor"
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
                        <x-form.check name="terms">
                            I currently study here
                        </x-form.check>
                    
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Modal -->

    <!-- Modal : Delete Education-->
    <div wire:ignore.self class="modal fade" id="deleteEducation" tabindex="-1" aria-labelledby="deleteEducationLabel"
         aria-hidden="true">
        <div class="modal-dialog flat-modal">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-0">
                    <p>Paragraph: Archetype lets designers like you very quickly and easily create consistent</p>
                </div>
                <div class="modal-footer px-0 pb-0 pt-3">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button wire:click="destroyEducation" type="button" class="btn btn-danger">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal -->
</div>
