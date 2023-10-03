<div class=" ">
    <div class="p-lg-4">
        <div class="">
            <h5 class="my-3 lh-1-5 fs-23 fw-700 job-details">{{ $project->name }}</h5>
            <ul class="list-inline opacity-70 fs-13">
                <li class="list-inline-item">
                    {{-- <i class="las la-clock"></i> --}}
                    <img class="mr-1 project-post-time" alt="service_image"
                        src=" {{ asset('/assets/home/find-scholarship/project-post.png') }}">
                    <span class="fs-14">Posted: {{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</span>

                </li>
                <li class="list-inline-item">
                    <a href="" target="_blank" class="text-inherit">
                        {{-- <i class="las la-stream"></i> --}}
                        <img class="mr-1 project-post-time" alt="service_image"
                            src=" {{ asset('/assets/home/find-scholarship/category.png') }}">
                        <span class="fs-14">Category:
                            @if ($project->project_category != null)
                                {{ $project->project_category->name }}
                            @endif
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    {{-- <i class="las la-handshake"></i> --}}
                    <img class="project-post-time" alt="service_image"
                        src=" {{ asset('/assets/home/find-scholarship/duration.png') }}">
                    <span class="fs-14 job-details">
                        Timeframe: Short-term (< 1 month) </span>
                </li>
            </ul>
            <hr>
            <div class=" lh-2 mb-5">
                <div>
                    <h6 class="fs-16  custom-font project-overview ">
                        {!! $project->description !!}
                    </h6>
                </div>
            </div>
            <h6 class="text-left mb-3"><span class=" fs-16 fw-700">{{ translate('Skills Required') }}</span></h6>
            <div class="mb-5">
                <div>
                    @foreach ($project->skills as $key => $skill_id)
                        @if ($skill != null)
                            <a href="{{ route('search.skill', ['skill' => $skill_id, 'type' => 'projects']) }}"
                                class="btn fs-14 job-details fw-700 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">{{ $skill->name }}</a>
                        @endif
                    @endforeach
                </div>
            </div>
            <h6 class="text-left mb-3"><span
                    class=" pr-3 fs-16 fw-700 job-details">{{ translate('Attachments') }}</span></h6>
            <div class="row ">
                @foreach (explode(',', $project->attachments) as $key => $attachment_id)
                    <div class="col-lg-4 col-md-6 col-12">
                        @if ($attachment != null)
                            @if ($attachment->type == 'image')
                                <div class="mb-2 caorusel-box" title="{{ $attachment->file_name }}">
                                    <a href="{{ route('download_attachment', $attachment->id) }}" target="_blank"
                                        class="d-block text-dark">
                                        <div class="">
                                            <img src="{{ asset($attachment->file_name) }}"
                                                class="card-img-top rounded-0" alt="service_image" height="158"
                                                width="212">
                                        </div>
                                        <div class="pt-3">
                                            <h6 class=" fw-500 fs-14">
                                                {{ $attachment->file_original_name }}.{{ $attachment->extension }}
                                            </h6>
                                            <p>{{ number_format($attachment->file_size / 1024) }}
                                                Mb
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @else
                                <div class="mb-2 file-preview-item" title="{{ $attachment->file_name }}">
                                    <a href="{{ route('download_attachment', $attachment->id) }}" target="_blank"
                                        class="d-block ">
                                        <div class="thumb">
                                            <i class="la la-file-text"></i>
                                        </div>
                                        <div class="pt-3">
                                            <h6 class=" fw-500 fs-14">
                                                {{ $attachment->file_original_name }}.{{ $attachment->extension }}
                                            </h6>
                                            <p>{{ number_format($attachment->file_size / 1024) }}
                                                Mb
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @else
                            <div class="alert alert-secondary bg-hov-soft-primary rounded-2" role="alert">
                                {{ translate('No attachment') }}
                            </div>
                        @endif
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
