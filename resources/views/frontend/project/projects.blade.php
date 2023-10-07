<h6 class="text-left mb-3  mt-5 m-0">
    <span class="fs-23 fw-700">{{ translate('Similar Projects') }}</span>
</h6>
<div class="row mt-3">

    @foreach ($similar_types as $similar_type_project)
        @if (count($similar_types) > 0)
            <div class="col-lg-4 col-lg-4 col-md-6 col-12 pr-0">
                <div class="caorusel-box">
                    <a href="{{ route('project.details', $similar_type_project->slug) }}" class="text-dark">
                        <div class="card ">
                            <div class="p-3">
                                <div>
                                    <h6 class="  fw-700 fs-19 similar-projects">
                                        {{ $similar_type_project->name }}
                                    </h6>
                                </div>
                                <ul class="list-inline opacity-70 fs-13">
                                    <li class="list-inline-item projects-desc">

                                        <img class="mr-1 p-image" alt="service_image"
                                            src=" {{ asset('/assets/home/find-scholarship/project-post.png') }}">
                                        <span>Posted: <span
                                                class="fw-700">{{ Carbon\Carbon::parse($similar_type_project->created_at)->diffForHumans() }}</span></span>
                                    </li>
                                    <li class="list-inline-item projects-desc">
                                        <a href="" target="_blank" class="text-inherit">
                                            <img class="mr-1 p-image" alt="service_image"
                                                src=" {{ asset('/assets/home/find-scholarship/category.png') }}">
                                            <span class="">Category: <span class="fw-700">
                                                    @if ($similar_type_project->project_category_id != null)
                                                        {{ getTrainingCategory($similar_type_project->project_category_id) }}
                                                    @endif
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item projects-desc">
                                        <img class="mr-1 p-image" alt="service_image"
                                            src=" {{ asset('/assets/home/find-scholarship/duration.png') }}">
                                        <span class="">
                                            Timeframe: <span class="fw-700">Short-term (< 1 month)</span> </span>
                                    </li>
                                </ul>
                                <p class="fs-14 fw-500 projects-desc ">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($similar_type_project->description), 150) }}
                                </p>
                                <div class="d-flex align-items-center">
                                    <span class="fw-600 fs-14">View Details</span>
                                    <span>
                                        <img class="ml-2 view-details" alt="service_image"
                                            src=" {{ asset('/assets/home/find-scholarship/arrow.png') }}"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endif
    @endforeach
</div>
