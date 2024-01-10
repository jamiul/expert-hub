@extends('frontend.layouts.front-client-dashboard-layout')
@section('content')
    <div class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sidebar-layout right-sidebar-layout project-detials-layout">
                        <div class="page-sidebar">
                            <div class="sidebar-widget">
                                <p class="text-sm mb-3">Fixed <strong class="h5">$200.00</strong></p>
                                <a class="btn btn-primary btn-md w-100" href="/figma/submit-project-proposal">Send EOI</a>
                                <button class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon">
                                    <x-icon.heart width="24" height="24" fill="#0036E3"/>
                                    Save this Project
                                </button>
                            </div>
                            <div class="sidebar-widget">
                                <div class="alert alert-info mb-0">
                                    You need to <a href="#">Log In</a> as a Consultant to send the EOI. Don't have an
                                    account with us? <a href="#">Create an account now</a>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="widget-title">About the client</h4>
                                <div class="widget-content text-sm">
                                    <div class="d-flex gap-2 align-items-center py-1">
                                        <x-icon.account-circle fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">Dr Miles Esther</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.graduation-cap fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">Institution</p>
                                            <p class="mb-0"> Sydney Islami business school</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.globe fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">Austria</p>
                                            <p class="mb-0"> Sydney 9:20 pm</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 py-1">
                                        <x-icon.briefcase fill="#0036E3"/>
                                        <div>
                                            <p class="m-0 fw-medium">7 jobs posted</p>
                                            <p class="mb-0">100% hire rate, 4 open jobs</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="page-content p-0">

                            <div class="project-details-card">
                                <div class="project-details-card-header pb-4">
                                    <div class="project-details-title">
                                        <h1 class="h5 d-flex align-items-center gap-2 mb-2">
                                            <x-icon.briefcase width="20" height="20" fill="#9196A2"/>
                                            Developing curriculum for Postgraduate public health
                                            unit
                                        </h1>
                                    </div>
                                    <div
                                        class="project-details-meta-data d-flex align-items-center gap-2 justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <x-icon.clock width="20" height="20" fill="#0036E3"/>
                                                15 hours ago
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <x-icon.tag fill="#0036E3"/>
                                                Curriculum development
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="project-details-card-body pt-3 mb-40">
                                    <p class="mb-0">
                                        Seeking an experienced Curriculum Developer to create a cutting-edge curriculum
                                        for our postgraduate public health unit. You will collaborate with our team to
                                        design a comprehensive curriculum that aligns with industry trends and academic
                                        standards. Your role involves conducting research, developing course materials,
                                        and crafting assessments that foster critical thinking and practical skills. The
                                        ideal candidate will have a strong background in public health education, and
                                        curriculum design. and a passion for advanced higher education. join us in
                                        shaping the future of public health education and making a lasting impact on
                                        students' careers.
                                    </p>
                                </div>
                                <div class="mb-40">
                                    <p class="fw-medium mb-2">Required Skills</p>
                                    <div class="tag-list branded-tag-list">
                                        <a href="#" class="project-tag">Communication Skills</a>
                                        <a href="#" class="project-tag">Industry Treds Awareness</a>
                                        <a href="#" class="project-tag"> Research</a>
                                        <a href="#" class="project-tag">System Research Development</a>
                                        <a href="#" class="project-tag">Communication </a>
                                        <a href="#" class="project-tag">Industry Treds</a>
                                        <a href="#" class="project-tag">Educational Research</a>
                                        <a href="#" class="project-tag">System Development</a>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="fw-medium mb-2">Required Skills</p>
                                    <div class="attachment-display-wrapper">
                                        <div class="attachment-display-card">
                                            <div class="attachment-display-thumb">
                                                <img src="{{ asset('assets/frontend/img/attachment1.png') }}"/>
                                            </div>
                                            <div class="attachment-display-info">
                                                <h6 class="mb-1">File name.jpg</h6>
                                                <p class="m-0">1.3 MB</p>
                                            </div>
                                        </div>
                                        <div class="attachment-display-card">
                                            <div class="attachment-display-thumb">
                                                <img src="{{ asset('assets/frontend/img/attachment2.png') }}"/>
                                            </div>
                                            <div class="attachment-display-info">
                                                <h6 class="mb-1">File name.jpg</h6>
                                                <p class="m-0">1.3 MB</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="page-block mb-60">
        <div class="container">
            <h3 class="h5 mb-3">Similar Projects</h3>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="related-project-card">
                        <h4 class="h6"><a href="">Developing Curriculum for Postgraduate Public Health Developing
                                Curriculum for Postgraduate Public Health </a></h4>
                        <div class="d-flex align-items-center my-1 gap-2">
                            <x-icon.tag fill="#0036E3"/>
                            Curriculum development
                        </div>
                        <div class="d-flex align-items-center my-1 gap-2">
                            <x-icon.clock width="20" height="20" fill="#0036E3"/>
                            15 hours ago
                        </div>

                        <p class="mt-3 mb-3 text-sm">Seeking an experienced Curriculum Developer to create a
                            cutting-edge curriculum for our postgraduate Seeking an experienced Curriculum Developer to
                            create a cutting-edge curriculum for our postgraduate</p>
                        <a class="view-project-details" href="">View Details
                            <x-icon.chevron-right/>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="related-project-card">
                        <h4 class="h6"><a href="">Developing Curriculum for Postgraduate Public Health Developing
                                Curriculum for Postgraduate Public Health </a></h4>
                        <div class="d-flex align-items-center my-1 gap-2">
                            <x-icon.tag fill="#0036E3"/>
                            Curriculum development
                        </div>
                        <div class="d-flex align-items-center my-1 gap-2">
                            <x-icon.clock width="20" height="20" fill="#0036E3"/>
                            15 hours ago
                        </div>

                        <p class="mt-3 mb-3 text-sm">Seeking an experienced Curriculum Developer to create a
                            cutting-edge curriculum for our postgraduate Seeking an experienced Curriculum Developer to
                            create a cutting-edge curriculum for our postgraduate</p>
                        <a class="view-project-details" href="">View Details
                            <x-icon.chevron-right/>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="related-project-card">
                        <h4 class="h6"><a href="">Developing Curriculum for Postgraduate Public Health Developing
                                Curriculum for Postgraduate Public Health </a></h4>
                        <div class="d-flex align-items-center my-1 gap-2">
                            <x-icon.tag fill="#0036E3"/>
                            Curriculum development
                        </div>
                        <div class="d-flex align-items-center my-1 gap-2">
                            <x-icon.clock width="20" height="20" fill="#0036E3"/>
                            15 hours ago
                        </div>

                        <p class="mt-3 mb-3 text-sm">Seeking an experienced Curriculum Developer to create a
                            cutting-edge curriculum for our postgraduate Seeking an experienced Curriculum Developer to
                            create a cutting-edge curriculum for our postgraduate</p>
                        <a class="view-project-details" href="">View Details
                            <x-icon.chevron-right/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion(header) {
            header.classList.toggle("accordion-item-active");
            var content = header.nextElementSibling;
            content.style.display = (content.style.display === 'block') ? 'none' : 'block';
        }
    </script>

@endsection
