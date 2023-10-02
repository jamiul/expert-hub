@extends('frontend.default.layouts.app')

@section('content')

    <section class="py-4 py-lg-5">
		<div class="container">
			<div class="row mb-5">@extends('frontend.default.layouts.app')
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100&display=swap" rel="stylesheet">
                @section('content')
                    <div class="border-bottom">
                        <div class="container mt-4">
                            {{-- breadcrumb  --}}
                            <nav class="justify-content-between d-flex " style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb d-flex align-items-center">
                                    <li class="breadcrumb-item"><a href="#"> <img class="p-2 center d-block c-pointer"
                                                style="width:30px; height:30px;" src="{{ asset('/assets/home/Find-scholarship/Home.png') }}"
                                                alt=""></a>
                                    </li>
                                    <li class="breadcrumb-item "><a href="#" class="text-muted  fw-600 fs-14 job-details">Find Projects</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page"><span class="text-black fs-14 fw-600 job-details">Need a
                                            experience essay , research and summary writer</span></li>
                                </ol>
                                <div class="d-flex mx-4 ">
                                    <div>
                                        <img class="p-2 center d-block c-pointer mr-1 "
                                            style="width:35px; height:35px; border:1px solid #61B895"
                                            src="{{ asset('/assets/home/Find-scholarship/Love.png') }}" alt="">
                                    </div>
                                    <div class="rounded">
                                        <img class="p-2 center d-block c-pointer" style="width:35px; height:35px; border:1px solid #61B895;"
                                            src="{{ asset('/assets/home/Find-scholarship/Share.png') }}" alt="">
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <section class="py-4 py-lg-5">
                        <div class="container">
                            <div class="mx-lg-5 ">
                                <div class="row ">
                                    <div class="col-xxl-9 col-xl-8 col-lg-7 pr-lg-0 border shadow-sm ">
                                        <div class="  p-lg-4">
                                            <div class="">
                                                <h5 class="my-3 lh-1-5 fs-23 fw-700 job-details">Developing curriculum for Postgraduate public health
                                                    unit</h5>
                                                <ul class="list-inline opacity-70 fs-13">
                                                    <li class="list-inline-item">
                                                        {{-- <i class="las la-clock"></i> --}}
                                                        <img style="height:24px; width:24px;" class="mr-1" alt="service_image"
                                                            src=" {{ asset('/assets/home/Find-scholarship/Project-post.png') }}">
                                                        <span class="fs-14">Posted: 2 weeks ago</span>
                
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="" target="_blank" class="text-inherit">
                                                            {{-- <i class="las la-stream"></i> --}}
                                                            <img style="height:24px; width:24px;" class="mr-1" alt="service_image"
                                                                src=" {{ asset('/assets/home/Find-scholarship/Language.png') }}">
                                                            <span class="fs-14">Category: Curriculum development</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        {{-- <i class="las la-handshake"></i> --}}
                                                        <img style="height:24px; width:24px;" class="mr-" alt="service_image"
                                                            src=" {{ asset('/assets/home/Find-scholarship/Duration.png') }}">
                                                        <span class="fs-14 job-details">
                                                            Timeframe: Short-term (< 1 month) </span>
                                                    </li>
                                                </ul>
                                                <hr>
                                                <div class=" lh-2 mb-5">
                                                    <div>
                                                        <h6 class="fs-16 job-details" style="line-height: 25px;">Seeking an experienced Curriculum Developer to create a cutting-edge curriculum
                                                            for our postgraduate public health unit. You will collaborate with our team to
                                                            design a comprehensive curriculum that aligns with industry trends and academic
                                                            standards. Your role involves conducting research, developing course materials,
                                                            and crafting assessments that foster critical thinking and practical skills. The
                                                            ideal candidate will have a strong background in public health education, and
                                                            curriculum design. and a passion for advanced higher education. join us in
                                                            shaping the future of public health education and making a lasting impact on
                                                            students' careers.</h6>
                                                    </div>
                                                </div>
                                                <h6 class="text-left mb-3"><span
                                                        class=" fs-16 fw-700">{{ translate('Skills Required') }}</span></h6>
                                                <div class="mb-5">
                                                    <div>
                                                        <span
                                                            class="btn fs-14 job-details fw-700 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                            Curriculum Editor
                                                        </span>
                                                        <span
                                                            class="btn fs-14 job-details fw-700 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                            Assessment Specialist
                                                        </span>
                                                        <span
                                                            class="btn fs-14 job-details fw-700 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                            E-Learning Developer
                                                        </span>
                                                        <span
                                                            class="btn fs-14 job-details fw-700 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                            Curriculum Writer
                                                        </span>
                                                        <span
                                                            class="btn fs-14 job-details fw-700 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                            Public Health Expertise
                                                        </span>
                                                        <span
                                                            class="btn fs-14 job-details text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                            Curriculum Design
                                                        </span>
                                                        <span
                                                            class="btn fs-14 job-details fw-700 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                            Research and Analysis
                                                        </span>
                                                        <span
                                                            class="btn fs-14 job-details fw-700 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                            Educational Assessment
                                                        </span>
                                                        <span
                                                            class="btn fs-14 job-details fw-700 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                            Project Management
                                                        </span>
                                                        <span
                                                            class="btn fs-14 job-details fw-700 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                            Industry trends Awareness
                                                        </span>
                                                        <span
                                                            class="btn fs-14 job-details fw-700 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                            Instructional Design
                                                        </span>
                                                    </div>
                                                </div>
                                                <h6 class="text-left mb-3"><span
                                                        class=" pr-3 fs-16 fw-700 job-details">{{ translate('Attachments') }}</span></h6>
                                                <div class="row ">
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="caorusel-box">
                                                            <a href="" class="text-dark">
                                                                <div class="" style="">
                                                                    <div class="">
                                                                        <div class=" ">
                                                                            <img src=" {{ asset('/assets/home/Find-scholarship/Attachment-1.png') }}"
                                                                                class="card-img-top rounded-0" alt="service_image"
                                                                                height="158" width="212">
                                                                        </div>
                                                                        <div class="pt-3">
                                                                            <div>
                
                                                                                <h6 class="  fw-500 fs-14">
                                                                                    File name.jpg
                                                                                </h6>
                                                                                <h6 class="  fw-400 fs-14">
                                                                                    1.3 MB
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <div class="caorusel-box">
                                                            <a href="" class="text-dark">
                                                                <div class=" ">
                                                                    <div class="">
                                                                        <div class=" ">
                                                                            <img src=" {{ asset('/assets/home/Find-scholarship/Attachment-2.png') }}"
                                                                                class="card-img-top rounded-0" alt="service_image"
                                                                                height="158" width="212">
                                                                        </div>
                                                                        <div class="py-3">
                                                                            <div>
                                                                                <h6 class="  fw-500 fs-14">
                                                                                    File name.jpg
                                                                                </h6>
                                                                                <h6 class="  fw-400 fs-14">
                                                                                    1.3 MB
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-xxl-3 col-xl-4 col-lg-5 pl-0 shadow-sm border">
                                        <div class="">
                                            <div class="">
                                                <div class="card-body px-4 py-2">
                
                                                    <div class="mb-3">
                                                        <h6 class="text-primary fs-14 fw-700 ">
                
                                                            <h6 class="">{{ translate('Budget') }}</h6>
                                                            <h6 class="fs-16 fw-700">$200</h6>
                
                                                            <h6>Proposals: <span class="fw-700">Less than 5</span></h6>
                                                            <h6>Interviewing: 0</h6>
                                                            <h6>Last viewed by client: 1 hour ago</h6>
                                                            <h6 class="btn btn-primary btn-sm fs-15  w-100  fw-700 mt-3">
                                                                {{ translate('Apply Now') }}
                                                            </h6>
                                                        </h6>
                
                                                    </div>
                                                    <div class="mb-3">
                
                                                        <p
                                                            class="btn btn-block border  d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1" style="border-color:#275846;">
                                                            <img src=" {{ asset('/assets/home/Find-scholarship/Bookmark.png') }}"
                                                            class="card-img-top " style="width:18px; height:18px;"
                                                            alt="service_image">
                                                            <span class="ml-1" style="color:#275846;">{{ translate('Save this job') }}</span>
                                                        </p>
                
                                                    </div>
                                                    <div class="mb-4">
                ``````````
                                                        <div class="border p-3 rounded-1" role="alert"
                                                            style="background-color: #EFF7F4">
                                                            {{ translate('You need to ') }}
                                                            <u>
                                                                <a class="c-pointer fw-700 fs-14"
                                                                    style="color:#275846;">{{ translate('Log in') }}</a></u>
                                                            {{ translate("as a freelancer to bid the project. Don't have an account with us?") }}
                                                            <u>
                                                                <h6 class="c-pointer fs-12 fw-700 fs-14" style="color:#275846;">
                                                                    {{ translate('Create an account now') }}</h6>
                                                            </u>
                                                        </div>
                
                
                                                    </div>
                                                    <div class=" mb-5 pb-1">
                                                        <h6 class="mb-3"><span
                                                                class="fs-16 fw-700">{{ translate('About This Client') }}</span>
                                                        </h6>
                
                                                        <div class="d-flex">
                                                            <img src=" {{ asset('/assets/home/Find-scholarship/Payment.png') }}"
                                                                class="card-img-top rounded mr-2" style="width:20px; height:20px;"
                                                                alt="service_image">
                                                            <div>
                                                                <h6 class="fs-14 fw-700" style="line-height:21px;">Payment method
                                                                </h6>
                                                                <h6 class="fs-14">Verified</h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <img src=" {{ asset('/assets/home/Find-scholarship/Language.png') }}"
                                                                class="card-img-top rounded mr-2" style="width:20px; height:20px;"
                                                                alt="service_image">
                                                            <div>
                                                                <h6 class="fs-14 fw-700" style="line-height:21px;">Canada
                
                                                                </h6>
                                                                <h6 class="fs-14"> Markham 9:20 pm</h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <img src=" {{ asset('/assets/home/Find-scholarship/Job.png') }}"
                                                                class="card-img-top rounded mr-2" style="width:20px; height:20px;"
                                                                alt="service_image">
                                                            <div>
                                                                <h6 class="fs-14 fw-700" style="line-height:21px;">7 jobs posted
                
                                                                </h6>
                                                                <h6 class="fs-14">100% hire rate, 4 open jobs</h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <img src=" {{ asset('/assets/home/Find-scholarship/Rate.png') }}"
                                                                class="card-img-top rounded mr-2" style="width:20px; height:20px;"
                                                                alt="service_image">
                                                            <div>
                                                                <h6 class="fs-14 fw-700" style="line-height:21px;">$9.50 /hr avg hr rate
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
                                    <h6 class="text-left mb-3  mt-5 m-0">
                                        <span class="fs-23 fw-700">{{ translate('Similar Projects') }}</span>
                                    </h6>
                                    <div class="row mt-3">
                                        <div class="col-lg-4 col-md-6 col-12 pr-0">
                                            <div class="caorusel-box">
                                                <a href="" class="text-dark">
                                                    <div class="card " >
                                                        <div class="p-3">
                
                                                            <div>
                                                                <h6 class="  fw-700 fs-19" style="line-height: 25px;">
                                                                    Developing Curriculum for Postgraduate Public Health
                                                                    Unit
                                                                </h6>
                
                
                                                            </div>
                                                            <ul class="list-inline opacity-70 fs-13">
                                                                <li class="list-inline-item"style="line-height: 22px;">
                                                                   
                                                                    <img style="height:24px; width:24px;" class="mr-1"
                                                                        alt="service_image"
                                                                        src=" {{ asset('/assets/home/Find-scholarship/Project-post.png') }}">
                                                                    <span>Posted: <span class="fw-700">2 weeks ago</span></span>
                
                                                                </li>
                                                                <li class="list-inline-item" style="line-height: 22px;">
                                                                    <a href="" target="_blank" class="text-inherit">
                                                                       
                                                                        <img style="height:24px; width:24px;" class="mr-1"
                                                                            alt="service_image"
                                                                            src=" {{ asset('/assets/home/Find-scholarship/Language.png') }}">
                                                                        <span class="">Category: <span class="fw-700">Curriculum Development</span></span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    
                                                                    <img style="height:24px; width:24px;" class="mr-1"
                                                                        alt="service_image"
                                                                        src=" {{ asset('/assets/home/Find-scholarship/Duration.png') }}">
                                                                    <span class="">
                                                                        Timeframe: <span class="fw-700">Short-term (< 1 month)</span> </span>
                                                                </li>
                                                            </ul>
                                                            <p class="fs-14 fw-500 " style="line-height: 22px;" style="line-height: 22px; font-family:colfax;">Seeking an experienced Curriculum Developer to create a cutting-edge 
                                                                curriculum for our postgraduate public health unit.  ...</p>
                                                            <div class="d-flex align-items-center">
                                                                <span class="fw-600 fs-14">View Details</span>
                                                                <span>
                                                                    <img style="height:13px; width:13px;" class="ml-2"
                                                                        alt="service_image"
                                                                        src=" {{ asset('/assets/home/Find-scholarship/Arrow.png') }}"></span>
                
                                                            </div>
                
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12 pr-0">
                                            <div class="caorusel-box">
                                                <a href="" class="text-dark">
                                                    <div class="card " >
                                                        <div class="p-3">
                
                                                            <div>
                                                                <h6 class="  fw-700 fs-19" style="line-height: 25px;">
                                                                    Expert in Environmental Economics for Academic Research
                                                                </h6>
                                                            </div>
                                                            <ul class="list-inline opacity-70 fs-13">
                                                                <li class="list-inline-item">
                                                                   
                                                                    <img style="height:24px; width:24px;" class="mr-1"
                                                                        alt="service_image"
                                                                        src=" {{ asset('/assets/home/Find-scholarship/Project-post.png') }}">
                                                                    <span>Posted: <span class="fw-700">5 days ago</span></span>
                
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="" target="_blank" class="text-inherit">
                                                                        {{-- <i class="las la-stream"></i> --}}
                                                                        <img style="height:24px; width:24px;" class="mr-1"
                                                                            alt="service_image"
                                                                            src=" {{ asset('/assets/home/Find-scholarship/Language.png') }}">
                                                                        <span class="">Category: <span class="fw-700">Research and Analysis</span></span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    {{-- <i class="las la-handshake"></i> --}}
                                                                    <img style="height:24px; width:24px;" class="mr-"
                                                                        alt="service_image"
                                                                        src=" {{ asset('/assets/home/Find-scholarship/Duration.png') }}">
                                                                    <span class="ml-1">
                                                                        Timeframe: <span class="fw-700">Medium 
                                                                            term (1 month – 3 months)</span></span>
                                                                </li>
                                                            </ul>
                                                            <p class="fs-14 fw-500" style="line-height: 22px;">Our   higher   degree   institution   is   seeking   an   accomplished   Expert   in
                                                                Environmental Economics to lead a critical academic research project.   ..</p>
                                                            <div class="d-flex align-items-center">
                                                                <span class="fw-600 fs-14">View Details</span>
                                                                <span>
                                                                    <img style="height:13px; width:13px;" class="ml-2"
                                                                        alt="service_image"
                                                                        src=" {{ asset('/assets/home/Find-scholarship/Arrow.png') }}"></span>
                
                                                            </div>
                
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="caorusel-box">
                                                <a href="" class="text-dark">
                                                    <div class="card " >
                                                        <div class="p-3">
                
                                                            <div>
                                                                <h6 class="  fw-700 fs-19 mb-1" style="line-height: 25px;">
                                                                    LMS Expert required for Business Administration
                                                                </h6>
                
                
                                                            </div>
                                                            <ul class="list-inline opacity-70 fs-13">
                                                                <li class="list-inline-item">
                                                                 
                                                                    <img style="height:24px; width:24px;" class="mr-1"
                                                                        alt="service_image"
                                                                        src=" {{ asset('/assets/home/Find-scholarship/Project-post.png') }}">
                                                                    <span>Posted: <span class="fw-700">2 day's ago</span></span>
                
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="" target="_blank" class="text-inherit">
                                                                        
                                                                        <img style="height:24px; width:24px;" class=""
                                                                            alt="service_image"
                                                                            src=" {{ asset('/assets/home/Find-scholarship/Language.png') }}">
                                                                        <span class="ml-1">Category: <span class="fw-700">Learning Management System</span></span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    
                                                                    <img style="height:24px; width:24px;" class=""
                                                                        alt="service_image"
                                                                        src=" {{ asset('/assets/home/Find-scholarship/Duration.png') }}">
                                                                    <span class="ml-1">
                                                                        Timeframe: <span class="fw-700">Long term (< 3 month)</span> </span>
                                                                </li>
                                                            </ul>
                                                            <p class="fs-14 fw-500 " style="line-height: 22px;">We are seeking a proficient LMS Expert to assist our higher degree institution in 
                                                                the field of Business Administration. ...</p>
                                                            <div class="d-flex align-items-center">
                                                                <span class="fw-600 fs-14">View Details</span>
                                                                <span>
                                                                    <img style="height:13px; width:13px;" class="ml-2"
                                                                        alt="service_image"
                                                                        src=" {{ asset('/assets/home/Find-scholarship/Arrow.png') }}"></span>
                
                                                            </div>
                
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                
                                    </div>
                                </div>
                            </div>
                
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
                    @include('frontend.default.partials.bookmark_remove_modal')
                @endsection
                
				<div class="col-xxl-9 col-xl-8 col-lg-7">
					<div class="card project-card rounded-2 border-gray-light">
						<div class="card-body">
                            <h5 class="my-3 lh-1-5 fs-16 fw-700">{{ $project->name }}</h5>
							<ul class="list-inline opacity-70 fs-13">
								<li class="list-inline-item">
									{{-- <i class="las la-clock"></i> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                        <g id="Group_22132" data-name="Group 22132" transform="translate(-365 -1963)">
                                            <path id="Subtraction_5" data-name="Subtraction 5" d="M-13,12a6.007,6.007,0,0,1-6-6,6.007,6.007,0,0,1,6-6A6.007,6.007,0,0,1-7,6,6.006,6.006,0,0,1-13,12Zm-.5-9V7h.013l2.109,2.109.707-.706L-12.5,6.572V3Z" transform="translate(384 1963)" fill="#989ea8"/>
                                        </g>
                                    </svg>
									<span class="ml-1">{{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</span>
								</li>
								<li class="list-inline-item">
									<a href="" target="_blank" class="text-inherit">
										{{-- <i class="las la-stream"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11">
                                            <g id="Group_23" data-name="Group 23" transform="translate(-498 -1963)">
                                            <path id="Subtraction_2" data-name="Subtraction 2" d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z" transform="translate(498 1963)" fill="#989ea8"/>
                                            <path id="Subtraction_4" data-name="Subtraction 4" d="M1.5,0h5a1.5,1.5,0,0,1,0,3h-5a1.5,1.5,0,0,1,0-3Z" transform="translate(498 1971)" fill="#989ea8"/>
                                            <path id="Subtraction_3" data-name="Subtraction 3" d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z" transform="translate(500 1967)" fill="#989ea8"/>
                                            </g>
                                        </svg>
										<span class="ml-1">@if ($project->project_category != null) {{ $project->project_category->name }} @endif</span>
									</a>
								</li>
								<li class="list-inline-item">
									{{-- <i class="las la-handshake"></i> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7.643" height="12" viewBox="0 0 7.643 12">
                                        <g id="Group_24" data-name="Group 24" transform="translate(-131 -59.8)">
                                        <path id="Path_9" data-name="Path 9" d="M136.142,161.028,133.614,161A3.381,3.381,0,0,0,131,164.281v4.708a.92.92,0,0,0,.917.917h5.809a.92.92,0,0,0,.917-.917v-4.708A3.361,3.361,0,0,0,136.142,161.028Zm-1.321,4.488a1.122,1.122,0,0,1,.306,2.2v.248a.306.306,0,0,1-.611,0v-.248a1.123,1.123,0,0,1-.816-1.079.306.306,0,0,1,.611,0,.511.511,0,1,0,.511-.511,1.122,1.122,0,0,1-.306-2.2v-.183a.306.306,0,1,1,.611,0v.183a1.123,1.123,0,0,1,.816,1.079.306.306,0,1,1-.611,0,.511.511,0,1,0-.511.511Z" transform="translate(0 -98.106)" fill="#989ea8"/>
                                        <path id="Path_10" data-name="Path 10" d="M219.424,124.641l.15-.52L217.1,124.1l.171.52Z" transform="translate(-83.468 -62.334)" fill="#989ea8"/>
                                        <path id="Path_11" data-name="Path 11" d="M199.1,61.179l.4-1.379h-3.7l.449,1.351Z" transform="translate(-62.819)" fill="#989ea8"/>
                                        </g>
                                    </svg>
									<span class="ml-1">{{ translate($project->type) }}</span>
								</li>
							</ul>
                            <hr>
							<div class="text-gray-dark lh-2 mb-5">
								<div>
									@php echo $project->description; @endphp
								</div>
							</div>
							<h6 class="text-left mb-3"><span class="bg-white pr-3 fs-14 fw-700">{{ translate('Skills Required') }}</span></h6>
							<div class="mb-5">
                                @foreach ($project->skills as $key => $skill_id)
                                    @php
                                        $skill = \App\Models\Skill::find($skill_id);
                                    @endphp
                                    @if ($skill != null)
                                        <a href="{{route('search.skill', ['skill' => $skill_id, 'type' => 'projects'])}}" class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0">{{ $skill->name }}</a>
                                    @endif
                                @endforeach
							</div>
							<h6 class="text-left mb-3"><span class="bg-white pr-3 fs-14 fw-700">{{ translate('Attachments') }}</span></h6>
                            <div class="file-preview box">
                                @foreach (explode(',', $project->attachments) as $key => $attachment_id)
                                    @php
                                        $attachment = \App\Models\Upload::find($attachment_id);
                                    @endphp
                                    @if ($attachment != null)
                                        @if ($attachment->type == 'image')
                                            <div class="mb-2 file-preview-item" title="{{ $attachment->file_name }}">
                                                <a href="{{ route('download_attachment', $attachment->id) }}" target="_blank" class="d-block">
                                                    <div class="thumb">
                                                        <img src="{{ asset($attachment->file_name) }}" class="img-fit">
                                                    </div>
                                                    <div class="body">
                                                        <h6 class="d-flex">
                                                            <span class="text-truncate title">{{ $attachment->file_original_name }}</span>
                                                            <span class="ext">.{{ $attachment->extension }}</span>
                                                        </h6>
                                                        <p>{{formatBytes($attachment->file_size)}}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        @else
                                            <div class="mb-2 file-preview-item" title="{{ $attachment->file_name }}">
                                                <a href="{{ route('download_attachment', $attachment->id) }}" target="_blank" class="d-block">
                                                    <div class="thumb">
                                                        <i class="la la-file-text"></i>
                                                    </div>
                                                    <div class="body">
                                                        <h6 class="d-flex">
                                                            <span class="text-truncate title">{{ $attachment->file_original_name }}</span>
                                                            <span class="ext">.{{ $attachment->extension }}</span>
                                                        </h6>
                                                        <p>{{formatBytes($attachment->file_size)}}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    @else
                                        <div class="alert alert-secondary bg-hov-soft-primary rounded-2" role="alert">
                                            {{ translate('No attachment') }}
                                        </div>
                                    @endif
                                @endforeach
                            </div>
						</div>
					</div>
				</div>
				<div class="col-xxl-3 col-xl-4 col-lg-5">
					<div class="sticky-top z-3">
						<div class="card project-card bg-hov-soft-primary border-1 border-gray-light rounded-2">
							<div class="card-body p-4">
                                <div class="mb-4">
									<p class="fs-12 mb-2">{{ translate('Budget') }}</p>
									<h4 class="mb-0 fw-900 mb-2">{{ $project->budget }}</h4>
                                    <p class="fs-12 fw-700"><strong>{{ count($project->projectBids) }} &nbsp;&nbsp; {{ translate('Bids') }}</strong></p>
								</div>
                                <div class="mb-3">
                                    <p class="text-primary fs-14 fw-700 d-flex align-items-center mb-0">
                                        <i class="las la-share-alt fs-18 fw-700"></i>
                                        <span class="ml-2">{{ translate('Share Project') }}</span>
                                    </p>
                                    <div class="aiz-share"></div>
								</div>
                                <div class="mb-3">
                                    @if (Auth::check() && ($bookmarked_project = \App\Models\BookmarkedProject::where('user_id', auth()->user()->id)->where('project_id', $project->id)->first()) != null)
                                        <a class="btn btn-block btn-primary d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1 confirm-alert" href="javascript:void(0)" data-href="{{ route('bookmarked-projects.delete', $bookmarked_project->id) }}" data-target="#bookmark-remove-modal">
                                            <i class="las la-bookmark fs-16 fw-700"></i>
                                            <span>{{ translate('Remove Bookmark') }}</span>
                                        </a>
                                    @else
                                        <a class="btn btn-block btn-outline-primary d-flex align-items-center justify-content-center fs-14 fw-700 rounded-1" href="{{ route('bookmarked-projects.store', encrypt($project->id)) }}">
                                            <i class="las la-bookmark fs-16 fw-700"></i>
                                            <span class="ml-2">{{ translate('Bookmark Project') }}</span>
                                        </a>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    @if (!Auth::check())
                                        <div class="alert alert-info rounded-1" role="alert">
                                            {{ translate('You need to ') }}
                                            <u>
                                                <a href="{{ route('login') }}"  class="c-pointer fs-12 fw-700 fs-14" style="color:#275846;" >{{ translate('Log in') }}</a></u>
                                            {{ translate("as a freelancer to bid the project. Don't have an account with us?") }}
                                            <u>
                                                <a href="{{ route('register') }}"  class="c-pointer fs-12 fw-700 fs-14" style="color:#275846;" >{{ translate('Create an account now') }}</a></u>
                                        </div>
                                    @elseif (Auth::check() && auth()->user()->user_type == 'admin')
                                        <div class="alert alert-info rounded-1" role="alert">
                                            {{ translate('You are visiting this details as an Admin. For place a bid you need to have a freelancer account.') }}
                                        </div>
                                    @elseif (Auth::check() && isFreelancer() && !$project->private)
                                        @php
                                            $allow_for_bid = \App\Models\ProjectBid::where('project_id', $project->id)->where('bid_by_user_id', Auth::user()->id)->first();
                                        @endphp
                                        @if ($allow_for_bid == null)
                                            <a href="javascript:void(0)" class="btn btn-primary btn-block rounded-1" onclick="bid_modal({{ $project->id }})">{{ translate('Place Bid') }}</a>
                                        @else
                                            <div class="alert alert-info rounded-1" role="alert">
                                                {{ translate('You have already submitted bid for this project.') }}
                                            </div>
                                        @endif
                                    @endif
                                </div>
								<div>
									<h6 class="mb-3"><span class="fs-12 text-secondary">{{ translate('About This Client') }}</span></h6>
                                    <a href="{{ route('client.details',$project->client->user_name) }}" class="text-inherit">
									   <div class="mb-3">
    										<span class="avatar avatar-md mb-3">
                                                @if($project->client->photo != null)
                                                    <img src="{{ custom_asset($project->client->photo) }}">
                                                @else
                                                    <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}">
                                                @endif
                                                @if(Cache::has('user-is-online-' . $project->client_user_id ))
                                                    <span class="badge badge-dot badge-success badge-circle badge-status"></span>
                                                @else
                                                    <span class="badge badge-dot badge-secondary badge-circle badge-status"></span>
                                                @endif
    										</span>
    										<h4 class="h5 mb-2 fs-14 fw-700">@if ($project->client != null) {{ $project->client->name }} @endif</h4>
    										<div class="text-secondary fs-12 mb-1">
    											<i class="las la-star text-rating"></i>
                                                <span class="fw-700">
                                                    {{ formatRating(getAverageRating($project->client->id)) }}
                                                </span>
                                                <span>
                                                    ({{ getNumberOfReview($project->client->id) }} {{ translate('Reviews') }})
                                                </span>
    										</div>
    										<div class="mt-3">
    											@foreach ($project->client->badges as $key => $user_badge)
                                                    @if ($user_badge->badge != null)
                                                        <span class="avatar avatar-square avatar-xxs mr-1" title="{{ $user_badge->badge->name }}"><img src="{{ custom_asset($user_badge->badge->icon) }}"></span>
                                                    @endif
                                                @endforeach
    				                        </div>
    									</div>
                                    </a>

									<div class="">
                                        <div class="media mb-3">
                                            <div class="text-center text-secondary mt-1 mr-3">
                                                {{-- <i class="las la-map-marker fs-16"></i> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9.6" height="12" viewBox="0 0 9.6 12">
                                                    <path id="Path_25847" data-name="Path 25847" d="M8.8,2A4.806,4.806,0,0,0,4,6.8c0,1.953,1.418,3.575,2.92,5.292.475.544.967,1.106,1.405,1.675a.6.6,0,0,0,.95,0c.438-.569.93-1.131,1.405-1.675,1.5-1.717,2.92-3.338,2.92-5.292A4.806,4.806,0,0,0,8.8,2Zm0,6.6a1.8,1.8,0,1,1,1.8-1.8A1.8,1.8,0,0,1,8.8,8.6Z" transform="translate(-4 -2)" fill="#989ea8"/>
                                                </svg>
                                            </div>
                                            <div class="media-body pt-1">
                                                @if ($project->client != null && $project->client->address != null && $project->client->address->city != null && $project->client->address->country != null)
                                                    <span class="d-block fs-12 font-weight-medium">{{ $project->client->address->city->name }}, {{ $project->client->address->country->name }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="media mb-3">
                                            <div class="text-center text-secondary mt-1 mr-3">
                                                {{-- <i class="las la-briefcase fs-16"></i> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                                    <path id="Subtraction_179" data-name="Subtraction 179" d="M5748.8,5606h-9.6a1.234,1.234,0,0,1-1.2-1.263l0-4.737h12v4.737A1.234,1.234,0,0,1,5748.8,5606Zm1.2-7h-12v-1.211a1.232,1.232,0,0,1,1.195-1.263h2.4v-1.263a1.234,1.234,0,0,1,1.2-1.264h2.4a1.234,1.234,0,0,1,1.2,1.264v1.263h2.4a1.234,1.234,0,0,1,1.2,1.263V5599Zm-7.2-3.736v1.263h2.4v-1.263Z" transform="translate(-5738 -5594)" fill="#989ea8"/>
                                                </svg>
                                            </div>
                                            <div class="media-body pt-1">
                                                <span class="d-block fs-12 font-weight-medium">{{ count($project->client->number_of_projects) }} {{ translate('jobs posted') }}</span>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="text-center text-secondary mt-1 mr-3">
                                                {{-- <i class="las la-money-check-alt fs-16"></i> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                                    <g id="Group_22188" data-name="Group 22188" transform="translate(-13015 -765)">
                                                      <circle id="Ellipse_22-2" data-name="Ellipse 22-2" cx="6" cy="6" r="6" transform="translate(13015 765)" fill="#989ea8"/>
                                                      <path id="Path_275" data-name="Path 275" d="M280.67,534.054a8.1,8.1,0,0,0-.822-.372,1.845,1.845,0,0,1-.451-.253.393.393,0,0,1,.1-.7.792.792,0,0,1,.276-.057,2.1,2.1,0,0,1,1.039.206c.164.079.218.054.274-.117s.107-.364.161-.546a.191.191,0,0,0-.124-.254,2.641,2.641,0,0,0-.655-.2c-.3-.046-.3-.047-.3-.346,0-.421,0-.421-.423-.421-.061,0-.122,0-.183,0-.2.006-.23.04-.236.239,0,.089,0,.178,0,.268,0,.264,0,.26-.255.351a1.409,1.409,0,0,0-1.029,1.305,1.338,1.338,0,0,0,.757,1.279,8.365,8.365,0,0,0,.946.425,1.4,1.4,0,0,1,.344.2.472.472,0,0,1-.112.828,1.133,1.133,0,0,1-.607.079,2.707,2.707,0,0,1-.925-.276c-.171-.089-.221-.065-.279.12-.05.16-.094.321-.139.482-.06.217-.038.268.169.369a2.953,2.953,0,0,0,.833.239c.225.036.232.046.235.279,0,.105,0,.212,0,.318a.189.189,0,0,0,.2.214c.156,0,.312,0,.468,0a.178.178,0,0,0,.193-.2c0-.144.007-.29,0-.435a.229.229,0,0,1,.2-.261,1.569,1.569,0,0,0,.818-.525A1.476,1.476,0,0,0,280.67,534.054Z" transform="translate(12741.272 236.649)" fill="#fff"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="media-body pt-1">
                                                <span class="d-block fs-12 font-weight-medium">{{ single_price(\App\Models\MilestonePayment::where('client_user_id', $project->client_user_id)->where('paid_status', 1)->sum('amount')) }} {{ translate('total spent') }}</span>
                                            </div>
                                        </div>
			                        </div>
								</div>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h5 class="mb-4 fs-16 fw-700">{{ translate('Similar Projects') }}</h5>
					<div class="aiz-carousel gutters-10 half-outside-arrow" data-items="3" data-xl-items="3" data-md-items="2" data-sm-items="1" data-arrows='true'>

                        @foreach ($similar_types = \App\Models\Project::where('type', $project->type)->where('id', '!=' , $project->id)->where('closed', '!=', 1)->limit(4)->get() as $similar_type_project)
                            @if (count($similar_types) > 0)
        						<div class="caorusel-box">
        							<div class="card rounded-2 border-gray-light hov-box">
        								<div class="card-header border-bottom-0 pt-4 pb-0 align-items-start minw-0">
        									<h5 class="h6 fs-16 fw-700 lh-1-5 text-truncate-2 h-45px">
        										<a href="{{ route('project.details', $similar_type_project->slug) }}" class="text-inherit" target="_blank">{{ $similar_type_project->name }}</a>
        									</h5>
        								</div>
        								<div class="card-body pt-1 pb-2">

        									<ul class="list-inline opacity-70 fs-12">
        										<li class="list-inline-item">
        											{{-- <i class="las la-clock opacity-40"></i> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                                        <g id="Group_22132" data-name="Group 22132" transform="translate(-365 -1963)">
                                                          <path id="Subtraction_5" data-name="Subtraction 5" d="M-13,12a6.007,6.007,0,0,1-6-6,6.007,6.007,0,0,1,6-6A6.007,6.007,0,0,1-7,6,6.006,6.006,0,0,1-13,12Zm-.5-9V7h.013l2.109,2.109.707-.706L-12.5,6.572V3Z" transform="translate(384 1963)" fill="#989ea8"/>
                                                        </g>
                                                    </svg>
        											<span class="ml-1">{{ Carbon\Carbon::parse($similar_type_project->created_at)->diffForHumans() }}</span>
        										</li>
        										<li class="list-inline-item">
        											<a href="" target="_blank" class="text-inherit">
        												{{-- <i class="las la-stream opacity-40"></i> --}}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11">
                                                            <g id="Group_23" data-name="Group 23" transform="translate(-498 -1963)">
                                                            <path id="Subtraction_2" data-name="Subtraction 2" d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z" transform="translate(498 1963)" fill="#989ea8"/>
                                                            <path id="Subtraction_4" data-name="Subtraction 4" d="M1.5,0h5a1.5,1.5,0,0,1,0,3h-5a1.5,1.5,0,0,1,0-3Z" transform="translate(498 1971)" fill="#989ea8"/>
                                                            <path id="Subtraction_3" data-name="Subtraction 3" d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z" transform="translate(500 1967)" fill="#989ea8"/>
                                                            </g>
                                                        </svg>
        												<span class="ml-1">@if ($similar_type_project->project_category != null) {{ $similar_type_project->project_category->name }} @endif</span>
        											</a>
        										</li>
        										<li class="list-inline-item">
        											{{-- <i class="las la-handshake"></i> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="7.643" height="12" viewBox="0 0 7.643 12">
                                                        <g id="Group_24" data-name="Group 24" transform="translate(-131 -59.8)">
                                                        <path id="Path_9" data-name="Path 9" d="M136.142,161.028,133.614,161A3.381,3.381,0,0,0,131,164.281v4.708a.92.92,0,0,0,.917.917h5.809a.92.92,0,0,0,.917-.917v-4.708A3.361,3.361,0,0,0,136.142,161.028Zm-1.321,4.488a1.122,1.122,0,0,1,.306,2.2v.248a.306.306,0,0,1-.611,0v-.248a1.123,1.123,0,0,1-.816-1.079.306.306,0,0,1,.611,0,.511.511,0,1,0,.511-.511,1.122,1.122,0,0,1-.306-2.2v-.183a.306.306,0,1,1,.611,0v.183a1.123,1.123,0,0,1,.816,1.079.306.306,0,1,1-.611,0,.511.511,0,1,0-.511.511Z" transform="translate(0 -98.106)" fill="#989ea8"/>
                                                        <path id="Path_10" data-name="Path 10" d="M219.424,124.641l.15-.52L217.1,124.1l.171.52Z" transform="translate(-83.468 -62.334)" fill="#989ea8"/>
                                                        <path id="Path_11" data-name="Path 11" d="M199.1,61.179l.4-1.379h-3.7l.449,1.351Z" transform="translate(-62.819)" fill="#989ea8"/>
                                                        </g>
                                                    </svg>
        											<span class="ml-1">{{ $similar_type_project->type }}</span>
        										</li>
        									</ul>
        									<div class="text-muted lh-1-8">
        										<p class="text-truncate-2 h-50px mb-0 fs-14 text-dark">{{ $similar_type_project->excerpt }}</p>
        									</div>
                                            <div class="mt-2">
                                                <span class="small fs-14 text-secondary">{{ translate('Budget') }}</span>
                                                <h4 class="mb-0 fs-24 fw-700">{{ single_price($similar_type_project->price) }}</h4>
                                            </div>
        								</div>
        								<div class="card-footer border-top-0">
        									<div class="d-flex align-items-center">
        										<a href="{{ route('client.details', $similar_type_project->client->user_name) }}" target="_blank" class="d-flex mr-3 align-items-center text-inherit">
        		                                    <span class="avatar avatar-xs">
                                                        @if($similar_type_project->client->photo != null)
                                                            <img src="{{ custom_asset($similar_type_project->client->photo) }}">
                                                        @else
                                                            <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}">
                                                        @endif
        		                                    </span>
        		                                    <div class="pl-2">
        		                                    	<h4 class="h6 mb-0 fs-14 fw-700">{{ $similar_type_project->client->name }}</h4>
        		                                    	<div class="text-secondary fs-12">
                                                            <i class="las la-star text-rating"></i>
                                                            <span class="fw-600">
                                                                {{ formatRating(getAverageRating($project->client->id)) }}
                                                            </span>
                                                            <span>
                                                                ({{ getNumberOfReview($project->client->id) }} {{ translate('Reviews') }})
                                                            </span>
        												</div>
        		                                    </div>
        		                                </a>
        									</div>
        									<div>
        										<ul class="d-flex list-inline mb-0">
        											<li>
                                                        @if ($similar_type_project->bids > 0)
                                                            <h4 class="mb-0 h6 fs-12 fw-700">{{ $similar_type_project->bids }} + <span class="small ml-2">{{ translate('Bids') }}</span></h4>
                                                        @else
                                                            <h4 class="mb-0 h6 fs-12 fw-700">{{ $similar_type_project->bids }} <span class="small ml-3">{{ translate('Bids') }}</span></h4>
                                                        @endif
        											</li>
        										</ul>
        									</div>
        								</div>
        							</div>
        						</div>
                            @endif
                        @endforeach
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection
@section('script')
    <script type="text/javascript">
        function bid_modal(id){
            $.post('{{ route('get_bid_for_project_modal') }}', { _token: '{{ csrf_token() }}', id:id }, function(data){
                $('#bid_for_project').modal('show');
                $('#bid_for_modal_body').html(data);
            })
        }
    </script>
@endsection
@section('modal')
<div class="modal fade" id="bid_for_project" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
@include('frontend.default.partials.bookmark_remove_modal')
@endsection
