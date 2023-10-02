@extends('frontend.default.layouts.app')
@section('content')
    <section class="py-4 py-lg-5">
		<div class="container">
			<div class="row mb-5">
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100&display=swap" rel="stylesheet">
                @section('content')
                    <div class="border-bottom">
                        <div class="container mt-4">
                            {{-- breadcrumb  --}}
                            <nav class="justify-content-between d-lg-flex d-md-flex d-xl-flex   " style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
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
                            <div class="mx-lg-5 mx-xl-5 mx-md-5 ">
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
                                                                src=" {{ asset('/assets/home/Find-scholarship/category.png') }}">
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
                
                                    <div class="col-xxl-3 col-xl-4 mt-md-3  mt-lg-0 mt-3 col-lg-5 pl-0 shadow-sm border">
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
                                                            <img src=" {{ asset('/assets/home/Find-scholarship/category.png') }}"
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
                                        <div class="col-lg-4 col-lg-4 col-md-6 col-12 pr-0">
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
                                                                            src=" {{ asset('/assets/home/Find-scholarship/category.png') }}">
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
                                        <div class="col-lg-4 col-lg-4 col-md-6 col-12 pr-0">
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
                                                                            src=" {{ asset('/assets/home/Find-scholarship/category.png') }}">
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
                                        <div class="col-lg-4 col-xl-4 col-md-6  col-12">
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
                                                                            src=" {{ asset('/assets/home/Find-scholarship/category.png') }}">
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
                
				>
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
