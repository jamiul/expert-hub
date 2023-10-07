<!-- left side -->
<div class="">
    <!-- Profile-->
    <div class="mx-lg-4 mb-3">
        <div class="justify-content-center text-center mt-4">
            <span class=" flex-shrink-0 mr-4">
                @if ($freelancer->photo != null)
                    <img src="{{ custom_asset($freelancer->photo) }}" alt="{{ $freelancer->name }} " class="expert-name">
                @else
                    <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}" alt="{{ $freelancer->name }}">
                @endif
                @if (Cache::has('user-is-online-' . $freelancer->id))
                    <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                @else
                    <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                @endif
            </span>
        </div>
        <div class="w-100">
            <h5 class="text-black fs-lg-23 fs-16 fw-500 pb-2 text-center mt-3 px-0 ">{{ $freelancer->name }}</h5>
            @if ($freelancer->profile->specialistAt != null)
                <h6 class="text-center fs-16 fw-400 text-muted">{{ $freelancer->profile->specialistAt->name }}</h6>
            @endif
            <h6 class="text-center  fw-700 fs-16 expertise">Public Health </h6>
            <div class="d-flex align-items-center justify-content-center  mt-4">
                <span class="bg-rating p-1 text-white px-1 mr-1 fs-10 expert-ratings">
                    {{ formatRating(getAverageRating($freelancer->id)) }}
                </span>
                <span class="rating rating-md rating-mr-1">
                    {{ renderStarRating(getAverageRating($freelancer->id)) }}
                </span>
            </div>

            {{-- location --}}
            <div class="d-flex align-items-center justify-content-center  mt-4">
                <div class="">
                    <img style="width:16px; height:20px;" class="text-center mr-1"
                        src=" {{ asset('assets/home/find-scholarship/location.png') }}" class=""
                        alt="service_image">
                </div>
                <div class=" text-dark text-center fs-14">
                    {{ $freelancer->address->city->name }}, {{ $freelancer->address->country->name }}
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-2">
                <div class=""><img class="text-center mr-1 expert-timezone"
                        src=" {{ asset('assets/home/find-scholarship/time.png') }}" class="" alt="service_image">
                </div>
                {{-- //todo: add timezone for freelancer and get current time --}}
                <div class=" text-dark text-center fs-14">10.15 AEST</div>
            </div>
        </div>
        <div class="mx-2 mx-lg-0 mx-md-0">
            <div class="border-bottom border-2 pb-3">
                <div class=" pb-3">
                    <a href="#" class="btn  btn-sm fs-15 expert-consultation w-100  fw-700 mt-3 text-white">
                        {{ translate('Book a Consultation') }}
                    </a>
                </div>
                <div class=" pb-3">
                    <a href="" class="btn border-1 btn-sm fs-15 w-100 expert-interview fw-700 profile-leftside">
                        {{ translate('Book a TV Interview') }}
                    </a>
                </div>
                <div class=" pb-3">
                    <a href="" class="btn border-1 btn-sm fs-15 w-100  fw-700 expert-interview profile-leftside">
                        {{ translate('Invite to Project') }}
                    </a>
                </div>
            </div>
            {{-- language  --}}
            <div class="mt-4">
                <h6 class="fs-16 fw-700">{{ translate('Languages') }}</h6>
                <div class="d-flex align-items-center">
                    <div class=""><img class="text-center p-icon mr-1"
                            src=" {{ asset('assets/home/find-scholarship/language.png') }}" alt="service_image">
                    </div>

                    {{-- //todo: add language skills for freelancer --}}
                    <div class=" fs-14 fw-500 ">Proficient in English</div>
                </div>
            </div>
            <div class='mt-4 mb-3'>
                <div class="  ">
                    <h6 class="fs-16 fw-700">{{ translate('Expertise') }}</h6>
                    {{-- skills  --}}
                    @if ($freelancer->profile->skills != null)
                        <section>
                            @foreach (json_decode($freelancer->profile->skills) as $skill_id)
                                @php
                                    $skill = \App\Models\Skill::find($skill_id);
                                @endphp
                                @if ($skill != null)
                                    <span
                                        class="btn fs-14 expert-skills  border rounded-2 py-0 px-2   mb-1">{{ $skill->name }}</span>
                                @endif
                            @endforeach
                        </section>
                    @endif
                    @if ($freelancer->education_details != '')
                        @include('frontend.freelancer.education')
                    @endif
                </div>
            </div>

            {{-- //todo: add links --}}
            @include('frontend.freelancer.links')
        </div>
    </div>
</div>
