{{-- education  --}}
<div class="">
    <h5 class="fs-16 mt-4 fw-700">{{ translate('Education') }}</h5>
    <ul class="list-group list-group-flush ">
        @foreach($expert->education_details as $educationDetails)
            <li class="list-group-item px-0">
                <h6 class="mb-1 fw-600">{{ $educationDetails->degree }}</h6>
                <h6 class="fw-600 fs-14 mb-1  m-0">{{ $educationDetails->school_name }}</h6>
                <h6 class="mb-1 fw-400">{{ $educationDetails->passing_year }}</h6>
            </li>
        @endforeach
    </ul>
</div>
