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
                <button class="icon-btn icon-btn-sm p-0" data-bs-toggle="modal"
                        data-bs-target="#deleteEducation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M7.3077 20.5C6.80898 20.5 6.38302 20.3234 6.02982 19.9702C5.67661 19.617 5.5 19.191 5.5 18.6923V6.00005H4.5V4.50008H8.99997V3.61548H15V4.50008H19.5V6.00005H18.5V18.6923C18.5 19.1975 18.325 19.625 17.975 19.975C17.625 20.325 17.1974 20.5 16.6922 20.5H7.3077ZM17 6.00005H6.99997V18.6923C6.99997 18.7821 7.02883 18.8558 7.08652 18.9135C7.14423 18.9712 7.21795 19.0001 7.3077 19.0001H16.6922C16.7692 19.0001 16.8397 18.968 16.9038 18.9039C16.9679 18.8398 17 18.7693 17 18.6923V6.00005ZM9.40385 17.0001H10.9038V8.00005H9.40385V17.0001ZM13.0961 17.0001H14.5961V8.00005H13.0961V17.0001Z" fill="#191D24" fill-opacity="0.7"/>
                    </svg>
                </button>
            </div>
        </div>
        @endforeach
    </div>
    <button class="btn btn-link px-0 d-inline-flex align-items-center my-4" data-bs-toggle="modal"
            data-bs-target="#addEducation">
        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none">
            <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#0036E3"/>
        </svg>
        <span>Add Education</span>
    </button>
    @script
    <script>
        $wire.on('educationAdded', (event) => {
            closeModal(event[0]);
        });
        $wire.on('openEditEducationModal', (event) => {
            openModal(event[0]);
        });
        $wire.on('closeEditEducationModal', (event) => {
            closeModal(event[0]);
        });
    </script>
    @endscript
</div>