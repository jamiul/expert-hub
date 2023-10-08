{{-- Work Experience  --}}
<div class="mx-lg-4 rounded border p-3">
    <div class="d-flex mb-2">
        <img style="height:24px; width:24px;" class="mr-2" alt="service_image"
            src=" {{ asset('/assets/home/find-scholarship/experience.png') }}">
        <h4 class="fw-700 fs-23 text-black  mb-3">{{ translate('Work Experience') }}</h4>
    </div>
    @foreach ($expert->workExperiences as $userWorkExp)
        <div class="mb-4 border-bottom pb-3">
            <div class="">
                <h6 class="fw-600 fs-19">{{ $userWorkExp->designation }} at {{ $userWorkExp->company_name }}</h6>
                <h6 class="fs-16"><span class="text-muted"><i>{{ $userWorkExp->location }}</i></span> |
                    <span class="fw-700">{{ $userWorkExp->start }} -
                        {{ $userWorkExp->present == '1' ? translate('Present') : $userWorkExp->end }}</span>
                </h6>
            </div>
            <h6 class="fs-16 mt-3 experience">{{ $userWorkExp->description }}</h6>
        </div>
    @endforeach
</div>
