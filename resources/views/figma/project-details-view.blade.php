@extends('frontend.layouts.front-client-dashboard-layout')
@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sidebar-layout right-sidebar-layout project-detials-layout">
                        <div class="page-sidebar">
                            <div class="sidebar-widget">
                                <p class="text-sm mb-3">Filter <strong class="h5">$200.00</strong></p>
                                <button class="btn btn-primary btn-md w-100">Send EOI</button>
                                <button class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon">
                                    <x-icon.heart width="24" height="24" fill="#0036E3"/>
                                    Save this Project
                                </button>
                            </div>
                            <div class="sidebar-widget">
                                <div class="alert alert-info">
                                    You need to <a href="#">Log In</a> as a Consultant to send the EOI. Don't have an
                                    account with us? <a href="#">Create an account now</a>
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
                                <div class="project-details-card-body">
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
                                <div>
                                    <p class="fw-medium mb-2">Required Skills</p>
                                    <div class="tag-list">
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

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function toggleAccordion(header) {
            header.classList.toggle("accordion-item-active");
            var content = header.nextElementSibling;
            content.style.display = (content.style.display === 'block') ? 'none' : 'block';
        }
    </script>

@endsection
