{{-- Work Experience  --}}
<div class="mx-lg-4 rounded border p-3">
    <div class="d-flex mb-2">
        <img style="height:24px; width:24px;" class="mr-2" alt="service_image"
            src=" {{ asset('/assets/home/find-scholarship/experience.png') }}">
        <h4 class="fw-700 fs-23 text-black  mb-3">{{ translate('Work Experience') }}</h4>
    </div>
    @foreach ($freelancer->workExperiences as $user_work_exp)
        <div class="mb-4 border-bottom pb-3">
            <div class="">
                <h6 class="fw-600 fs-19">{{ $user_work_exp->designation }} at {{ $user_work_exp->company_name }}</h6>
                <h6 class="fs-16"><span class="text-muted"><i>{{ $user_work_exp->location }}</i></span> |
                    <span class="fw-700">{{ $user_work_exp->start }} -
                        {{ $user_work_exp->present == '1' ? translate('Present') : $user_work_exp->end }}</span>
                </h6>
            </div>
            <h6 class="fs-16 mt-3 experience">{{ $user_work_exp->description }}</h6>
        </div>
    @endforeach
</div>
