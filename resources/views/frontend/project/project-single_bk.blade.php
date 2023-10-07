@section('content')

    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="row mb-5">
                @extends('frontend.layouts.app')
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100&display=swap" rel="stylesheet">
            @section('content')
                <div class="border-bottom">
                    <div class="container mt-4">
                        {{-- breadcrumb  --}}
                        <nav class="justify-content-between d-flex " style="--bs-breadcrumb-divider: '>';"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb d-flex align-items-center">
                                <li class="breadcrumb-item"><a href="#"> <img class="p-2 center d-block c-pointer"
                                            style="width:30px; height:30px;"
                                            src="{{ asset('/assets/home/find-scholarship/Home.png') }}" alt=""></a>
                                </li>
                                <li class="breadcrumb-item "><a href="#"
                                        class="text-muted  fw-600 fs-14 job-details">Find Projects</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><span
                                        class="text-black fs-14 fw-600 job-details">{{ $project->name }}</span></li>
                            </ol>
                            <div class="d-flex mx-4 ">
                                <div>
                                    <img class="p-2 center d-block c-pointer mr-1 "
                                        style="width:35px; height:35px; border:1px solid #61B895"
                                        src="{{ asset('/assets/home/find-scholarship/Love.png') }}" alt="">
                                </div>
                                <div class="rounded">
                                    <img class="p-2 center d-block c-pointer"
                                        style="width:35px; height:35px; border:1px solid #61B895;"
                                        src="{{ asset('/assets/home/find-scholarship/Share.png') }}" alt="">
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <section class="py-4 py-lg-5">
                    <div class="container">
                        <div class="mx-lg-5 ">
                            <div class="row ">
                                <div class="col-xl-9 col-lg-8 col-md-7 pr-lg-0 border shadow-sm ">
                                    <div class="  p-lg-4">
                                        <div class="">
                                            <h5 class="my-3 lh-1-5 fs-23 fw-700 job-details">{{ $project->name }}</h5>
                                            <ul class="list-inline opacity-70 fs-13">
                                                <li class="list-inline-item">
                                                    {{-- <i class="las la-clock"></i> --}}
                                                    <img style="height:24px; width:24px;" class="mr-1" alt="service_image"
                                                        src=" {{ asset('/assets/home/find-scholarship/Project-post.png') }}">
                                                    <span class="fs-14">Posted:
                                                        {{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</span>

                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="" target="_blank" class="text-inherit">
                                                        {{-- <i class="las la-stream"></i> --}}
                                                        <img style="height:24px; width:24px;" class="mr-1"
                                                            alt="service_image"
                                                            src=" {{ asset('/assets/home/find-scholarship/Language.png') }}">
                                                        <span class="fs-14">Category: @if ($project->project_category != null)
                                                                {{ $project->project_category->name }}
                                                            @endif
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    {{-- <i class="las la-handshake"></i> --}}
                                                    <img style="height:24px; width:24px;" class="mr-" alt="service_image"
                                                        src=" {{ asset('/assets/home/find-scholarship/Duration.png') }}">
                                                    <span class="fs-14 job-details">
                                                        Timeframe: Short-term (< 1 month) </span>
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class=" lh-2 mb-5">
                                                <div>
                                                    <h6 class="fs-16 job-details site-font" style="line-height: 25px;">
                                                        {!! $project->description !!}
                                                    </h6>
                                                </div>
                                            </div>
                                            <h6 class="text-left mb-3"><span
                                                    class=" fs-16 fw-700">{{ translate('Skills Required') }}</span></h6>
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
                                                    class=" pr-3 fs-16 fw-700 job-details">{{ translate('Attachments') }}</span>
                                            </h6>
                                            <div class="file-preview box">
                                                @foreach (explode(',', $project->attachments) as $key => $attachment_id)
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        @if ($attachment != null)
                                                            @if ($attachment->type == 'image')
                                                                <div class="mb-2 caorusel-box"
                                                                    title="{{ $attachment->file_name }}">
                                                                    <a href="{{ route('download_attachment', $attachment->id) }}"
                                                                        target="_blank" class="d-block">
                                                                        <div class="">
                                                                            <img src="{{ asset($attachment->file_name) }}"
                                                                                class="card-img-top rounded-0"
                                                                                alt="service_image" height="158"
                                                                                width="212">
                                                                        </div>
                                                                        <div class="body">
                                                                            <h6 class="d-flex ">
                                                                                <span
                                                                                    class="fw-400 fs-14">{{ $attachment->file_original_name }}.{{ $attachment->extension }}
                                                                                </span>
                                                                            </h6>
                                                                            <p>{{ number_format($attachment->file_size / 1024) }}
                                                                                Mb
                                                                            </p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            @else
                                                                <div class="mb-2 file-preview-item"
                                                                    title="{{ $attachment->file_name }}">
                                                                    <a href="{{ route('download_attachment', $attachment->id) }}"
                                                                        target="_blank" class="d-block">
                                                                        <div class="thumb">
                                                                            <i class="la la-file-text"></i>
                                                                        </div>
                                                                        <div class="body">
                                                                            <h6 class="d-flex">
                                                                                <span
                                                                                    class="text-truncate title">{{ $attachment->file_original_name }}</span>
                                                                                <span
                                                                                    class="ext">{{ $attachment->extension }}</span>
                                                                            </h6>
                                                                            <p>{{ formatBytes($attachment->file_size) }}
                                                                            </p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            @endif
                                                        @else
                                                            <div class="alert alert-secondary bg-hov-soft-primary rounded-2"
                                                                role="alert">
                                                                {{ translate('No attachment') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-3 col-lg-4 col-md-5 pl-0 shadow-sm border">
                                    <div class="">
                                        <div class="">
                                            <div class="card-body px-4 py-2">

                                                <div class="mb-3">
                                                    <h6 class="text-primary fs-14 fw-700 ">

                                                        <h6 class="">{{ translate('Budget') }}</h6>
                                                        @if ($project->budget)
                                                            <h6 class="fs-16 fw-700">{{ $project->budget }}</h6>
                                                        @else
                                                            <h6 class="fs-16 fw-700">${{ $project->price }}</h6>
                                                        @endif
                                                        <h6>Proposals: <span class="fw-700">
                                                                @if ($project->bids < 5)
                                                                    Less than 5
                                                                @else
                                                                    {{ $project->bids }}
                                                                @endif
                                                            </span></h6>
                                                        <h6>Interviewing: 0</h6>
                                                        <h6>Last viewed by client: 1 hour ago</h6>
                                                        <h6 class="btn btn-primary btn-sm fs-15  w-100  fw-700 mt-3">
                                                            {{ translate('Apply Now') }}
                                                        </h6>
                                                    </h6>

                                                </div>
                                                <div class="mb-3">

                                                    <p class="btn btn-block border  d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1"
                                                        style="border-color:#275846;">
                                                        <img src=" {{ asset('/assets/home/find-scholarship/Bookmark.png') }}"
                                                            class="card-img-top " style="width:18px; height:18px;"
                                                            alt="service_image">
                                                        <span class="ml-1"
                                                            style="color:#275846;">{{ translate('Save this job') }}</span>
                                                    </p>

                                                </div>
                                                <div class="mb-4">

                                                    <div class="border p-3 rounded-1" role="alert"
                                                        style="background-color: #EFF7F4">
                                                        {{ __('You need to ') }}
                                                        <u>
                                                            <a href="{{ route('login') }}" class="c-pointer fw-700 fs-14"
                                                                style="color:#275846;">{{ __('Log in') }}</a></u>
                                                        {{ __("as a expert to bid the project. Don't have an account with us?") }}
                                                        <u>
                                                            <a href="{{ route('register') }}"
                                                                class="c-pointer fs-12 fw-700 fs-14 d-block"
                                                                style="color:#275846;">
                                                                {{ __('Create an account now') }}</a>
                                                        </u>
                                                    </div>


                                                </div>
                                                <div class=" mb-5 pb-1">
                                                    <h6 class="mb-3"><span
                                                            class="fs-16 fw-700">{{ translate('About This Client') }}</span>
                                                    </h6>

                                                    <div class="d-flex">
                                                        <img src=" {{ asset('/assets/home/find-scholarship/Payment.png') }}"
                                                            class="card-img-top rounded mr-2"
                                                            style="width:20px; height:20px;" alt="service_image">
                                                        <div>
                                                            <h6 class="fs-14 fw-700" style="line-height:21px;">Payment
                                                                method
                                                            </h6>
                                                            <h6 class="fs-14">Verified</h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <img src=" {{ asset('/assets/home/find-scholarship/Language.png') }}"
                                                            class="card-img-top rounded mr-2"
                                                            style="width:20px; height:20px;" alt="service_image">
                                                        <div>
                                                            <h6 class="fs-14 fw-700" style="line-height:21px;">Canada

                                                            </h6>
                                                            <h6 class="fs-14"> Markham 9:20 pm</h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <img src=" {{ asset('/assets/home/find-scholarship/Job.png') }}"
                                                            class="card-img-top rounded mr-2"
                                                            style="width:20px; height:20px;" alt="service_image">
                                                        <div>
                                                            <h6 class="fs-14 fw-700" style="line-height:21px;">
                                                                {{ $jobPosted }} jobs
                                                                posted

                                                            </h6>
                                                            <h6 class="fs-14">100% hire rate, {{ $jobOpen }} open
                                                                jobs</h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <img src=" {{ asset('/assets/home/find-scholarship/Rate.png') }}"
                                                            class="card-img-top rounded mr-2"
                                                            style="width:20px; height:20px;" alt="service_image">
                                                        <div>
                                                            <h6 class="fs-14 fw-700" style="line-height:21px;">$9.50 /hr
                                                                avg hr rate
                                                                paid

                                                            </h6>
                                                            <h6 class="fs-14">56 hours</h6>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-left mb-3  mt-5 m-0">
                                <span class="fs-23 fw-700">{{ translate('Similar Projects') }}</span>
                            </h6>
                            <div class="row mt-3">
                                @foreach ($similar_types as $similar_type_project)
                                    @if (count($similar_types) > 0)
                                        <div class="col-lg-4 col-md-6 col-12 pr-0">
                                            <div class="caorusel-box">
                                                <a href="{{ route('project.details', $similar_type_project->slug) }}"
                                                    class="text-dark">
                                                    <div class="card ">
                                                        <div class="p-3">

                                                            <div>
                                                                <h6 class="  fw-700 fs-19" style="line-height: 25px;">
                                                                    {{ $similar_type_project->name }}
                                                                </h6>


                                                            </div>
                                                            <ul class="list-inline opacity-70 fs-13">
                                                                <li class="list-inline-item"style="line-height: 22px;">

                                                                    <img style="height:24px; width:24px;" class="mr-1"
                                                                        alt="service_image"
                                                                        src=" {{ asset('/assets/home/find-scholarship/Project-post.png') }}">
                                                                    <span>Posted: <span
                                                                            class="fw-700">{{ Carbon\Carbon::parse($similar_type_project->created_at)->diffForHumans() }}</span></span>

                                                                </li>
                                                                <li class="list-inline-item" style="line-height: 22px;">
                                                                    <a href="" target="_blank"
                                                                        class="text-inherit">

                                                                        <img style="height:24px; width:24px;"
                                                                            class="mr-1" alt="service_image"
                                                                            src=" {{ asset('/assets/home/find-scholarship/Language.png') }}">
                                                                        <span class="">Category: <span
                                                                                class="fw-700">
                                                                                @if ($similar_type_project->project_category_id != null)
                                                                                    {{ getTrainingCategory($similar_type_project->project_category_id) }}
                                                                                @endif
                                                                            </span></span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">

                                                                    <img style="height:24px; width:24px;" class="mr-1"
                                                                        alt="service_image"
                                                                        src=" {{ asset('/assets/home/find-scholarship/Duration.png') }}">
                                                                    <span class="">
                                                                        Timeframe: <span class="fw-700">Short-term (< 1
                                                                                month)</span> </span>
                                                                </li>
                                                            </ul>
                                                            <p class="fs-14 fw-500 " style="line-height: 22px;"
                                                                style="line-height: 22px; font-family:colfax;">
                                                                {{ \Illuminate\Support\Str::limit(strip_tags($similar_type_project->description), 350) }}
                                                            </p>
                                                            <div class="d-flex align-items-center">
                                                                <span class="fw-600 fs-14">View Details</span>
                                                                <span>
                                                                    <img style="height:13px; width:13px;" class="ml-2"
                                                                        alt="service_image"
                                                                        src=" {{ asset('/assets/home/find-scholarship/Arrow.png') }}"></span>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach


                            </div>
                        </div>
                    </div>
                </section>
            @endsection
        </div>
</section>
@endsection
@section('script')
<script type="text/javascript">
    function bid_modal(id) {
        $.post('{{ route('get_bid_for_project_modal') }}', {
            _token: '{{ csrf_token() }}',
            id: id
        }, function(data) {
            $('#bid_for_project').modal('show');
            $('#bid_for_modal_body').html(data);
        })
    }
</script>
@endsection
@section('modal')
<div class="modal fade" id="bid_for_project" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ translate('Bid For Project') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body" id="bid_for_modal_body">

            </div>
        </div>
    </div>
</div>
@include('frontend.partials.bookmark_remove_modal')
@endsection
