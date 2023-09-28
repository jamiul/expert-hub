    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/single-Profile.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100&display=swap" rel="stylesheet">
    </head>
    <style>

    </style>

    <body>
        @extends('frontend.default.layouts.app')
        @section('content')
            <div class="position-relative freelancer-Profile-main-section border-bottom">
                <div class="border-bottom">
                    <div class="container mt-4">
                        {{-- breadcrumb  --}}
                        <nav class="justify-content-between d-flex " style="--bs-breadcrumb-divider: '>';"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb d-flex align-items-center">
                                <li class="breadcrumb-item"><a href="#"> <img class="p-2 center d-block c-pointer"
                                            style="width:30px; height:30px;"
                                            src="{{ asset('/assets/home/Find-scholarship/Home.png') }}" alt=""></a>
                                </li>
                                <li class="breadcrumb-item "><a href="#" class="text-muted fs-14">Find Consultant</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><span
                                        class="text-black fs-14">Professor Michael Kassiou</span></li>
                            </ol>
                            <div class="d-flex mx-4 ">
                                <div>
                                    <img class="p-2 center d-block c-pointer mr-1 "
                                        style="width:35px; height:35px; border:1px solid #61B895"
                                        src="{{ asset('/assets/home/Find-scholarship/Love.png') }}" alt="">
                                </div>
                                <div class="rounded">
                                    <img class="p-2 center d-block c-pointer"
                                        style="width:35px; height:35px; border:1px solid #61B895;"
                                        src="{{ asset('/assets/home/Find-scholarship/Share.png') }}" alt="">
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="container rounded-1 mt-5">
                    <div class="">
                        <div class="row">
                            <!-- left side -->
                            <div class="col-lg-4 col-xl-3 col-12 shadow-right-xl  shadow-sm pr-0 h-50 p-0 m-0">
                                <!-- Profile-->
                                <div class="mx-lg-4 mb-3">
                                    <div class="justify-content-center text-center mt-4">
                                        <img style="width:176px; height:177px;"
                                            src=" {{ asset('/assets/home/Find-scholarship/Profile.png') }}" class=""
                                            alt="service_image">
                                    </div>
                                    <div class="w-100">
                                        <h5 class="text-black fs-21 fw-600 pb-2 text-center mt-3 "> Professor Michael
                                            Kassiou
                                        </h5>
                                        <h6 class="text-center fs-16 fw-400 text-muted">Curriculum Development Specialist
                                        </h6>
                                        <h6 class="text-center text-primary fw-700 fs-16">Public Health </h6>

                                        {{-- location --}}
                                        <div class="d-flex align-items-center justify-content-center  mt-4">
                                            <div class="">
                                                <img style="width:16px; height:20px;" class="text-center mr-1"
                                                    src=" {{ asset('/assets/home/Find-scholarship/Location.png') }}"class=""
                                                    alt="service_image">
                                            </div>
                                            <div class=" text-dark text-center fs-14">
                                                Sydney,Australia
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <div class=""> <img style="width:20px; height:20px;"
                                                    class="text-center mr-1"
                                                    src=" {{ asset('/assets/home/Find-scholarship/Time.png') }}"
                                                    class="" alt="service_image">
                                            </div>
                                            <div class=" text-dark text-center fs-14">10.15 AEST</div>
                                        </div>
                                    </div>
                                    <div class="mx-2 mx-lg-0 mx-md-0">
                                        <div class="border-bottom border-2 pb-3">
                                            <div>
                                                <p class="btn btn-primary btn-sm fs-15  w-100  fw-700 mt-3">
                                                    {{ translate('Book a Consultation') }}
                                                </p>
                                            </div>
                                            <div>
                                                <p class="btn border-1 btn-sm fs-15 w-100  fw-700 profile-leftside"
                                                    style="color: #275846; border-color:#275846 !important;">
                                                    {{ translate('Book a TV Interview') }}
                                                </p>
                                            </div>
                                            <div>
                                                <p class="btn border-1 btn-sm fs-15 w-100  fw-700 profile-leftside"
                                                    style="color: #275846; border-color:#275846 !important;">
                                                    {{ translate('Invite to Project') }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <h6 class="fs-16 fw-700">{{ translate('Languages') }}</h6>
                                            <div class="d-flex align-items-center">
                                                <div class=""> <img style="width:24px; height:24px;"
                                                        class="text-center mr-1"
                                                        src=" {{ asset('/assets/home/Find-scholarship/Language.png') }}"
                                                        class="" alt="service_image">
                                                </div>
                                                <div class=" fs-14 fw-500 ">Proficient in English</div>
                                            </div>
                                        </div>
                                        <div class='mt-4 mb-3'>
                                            <div class="  ">
                                                <h6 class="fs-16 fw-700">{{ translate('Expertise') }}</h6>

                                                {{-- skills  --}}

                                                <section>
                                                    <span
                                                        class="btn fs-14 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                        Public Health
                                                    </span>
                                                    <span
                                                        class="btn fs-14 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                        Infectious Diseases
                                                    </span>
                                                    <span
                                                        class="btn fs-14 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                        Curriculum Development
                                                    </span>
                                                    <span
                                                        class="btn fs-14 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                        Educational Assesment
                                                    </span>
                                                    <span
                                                        class="btn fs-14 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                        Research & Analysis
                                                    </span>
                                                    <span
                                                        class="btn fs-14 text-primary border rounded-2 py-0 px-2 border-primary  mb-1">
                                                        Pedagogical Innovation
                                                    </span>
                                                </section>

                                                {{-- education  --}}

                                                <div class="">
                                                    <h5 class="fs-16 mt-4 fw-700">{{ translate('Education') }}</h5>
                                                    <ul class="list-group list-group-flush ">

                                                        <li class="list-group-item px-0">
                                                            <h6 class="mb-1 fw-600">
                                                                PhD in Public Health, Infectious Diseases
                                                            </h6>
                                                            <h6 class="fw-600 fs-14 mb-1  m-0">
                                                                EduExHub University
                                                            </h6>
                                                            <h6 class="mb-1 fw-400">
                                                                1995-2000
                                                            </h6>

                                                        </li>
                                                        <li class="list-group-item px-0">
                                                            <h6 class="mb-1 fw-600">
                                                                Master’s in Public Health
                                                            </h6>
                                                            <h6 class="fw-600 fs-14 mb-1  m-0">
                                                                EduExHub University
                                                            </h6>
                                                            <h6 class="mb-1 fw-400">
                                                                1993-1995
                                                            </h6>

                                                        </li>
                                                        <li class="list-group-item px-0">
                                                            <h6 class="mb-1 fw-600">
                                                                Bachelor in Public Health
                                                            </h6>
                                                            <h6 class="fw-600 fs-14 mb-1  m-0">
                                                                EduExHub University
                                                            </h6>
                                                            <h6 class="mb-1 fw-400">
                                                                1998-1993
                                                            </h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h4 class="fs-16 fw-700 mb-2 ">University Profile</h4>
                                            <a href="https://www.ox.ac.uk/" class="fs-14  mb-2">
                                                <u
                                                    class="text-dark">http://127.0.0.1:8000/freelancer/mr-consultant20230405-091010..</u>
                                            </a>
                                        </div>
                                        <div>
                                            <h4 class="fs-16 fw-700 mb-2 mt-4 ">Research Profile</h4>
                                            <a href="https://scholar.google.com/" class="fs-14  ">
                                                <u
                                                    class="text-dark mb-2">http://127.0.0.1:8000/freelancer/mr-consultant20230405-091010..</u>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- details side or right side -->
                            <div class="col-lg-8 col-xl-9 col-12 pl-lg-3  mt-3 mt-lg-0">
                                <div class=" ">
                                    {{-- Biography  --}}
                                    <div class="tab-content mx-lg-4 rounded border mb-4 px-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active mt-4 px-3" id="list-home" role="tabpanel"
                                            aria-labelledby="list-home-list">
                                            <div class="d-flex justify-content-between mt-3 ">
                                                <h4 class="fw-700 fs-23 text-black  ">Biography </h4>
                                                <h4 class="fw-700 fs-16 text-black">$200.00/hr</h4>
                                            </div>
                                            <div class="mt-3">
                                                <p class="fs-16  biography-info">Prof. Michael is an
                                                    accomplished
                                                    Curriculum
                                                    Development Specialist with a distinguished career in education and a
                                                    track record of providing consultation services. Holding a Doctor of
                                                    Education (Ed.D.) in Curriculum and Instruction, Prof. Michael has
                                                    dedicated expertise in designing innovative curricula, enhancing student
                                                    engagement, and conducting research on educational best practices. With
                                                    a background in curriculum coordination, consultation, and a strong
                                                    commitment to education, Prof. Michael has made significant
                                                    contributions to the field. Prof. Michael's passion for improving
                                                    educational outcomes is evident through numerous publications,
                                                    Professional memberships, and awards, making them a prominent figure in
                                                    curriculum development, education research, and consultation services.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    {{-- >Expert Consultation   --}}
                                    <div class="mx-lg-4 rounded border mb-4 p-4">
                                        <h4 class="fw-600 fs-19 text-black  mb-2">Book Expert for
                                            Consultation </h4>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 col-12 px-lg-3">
                                                <img class="mr-2 w-100" alt="service_image" class="img-fluid"
                                                    src=" {{ asset('/assets/home/Find-scholarship/Edu-expert.png') }}">
                                                <p class="fw-700 fs-16 text-center">Prof. Michael</p>
                                            </div>
                                            <div class="col-md-8 col-lg-8 col-12">
                                                <div class="d-flex justify-content-between ">
                                                    <div>
                                                        <span class="fs-16 fw-700">Expert:</span>
                                                        <span
                                                            class="btn fs-14 text-primary border rounded-2 py-0 px-2 border-primary">
                                                            Public Health</span>
                                                        <span
                                                            class="btn fs-14 text-primary border rounded-2 py-0 px-2 border-primary">
                                                            Infactious Diseases</span>
                                                    </div>
                                                    <h4 class="fw-700 fs-16">$20
                                                        <span class="fw-700 fs-16">/30min</span>
                                                    </h4>
                                                </div>
                                                <p class="fs-16 mt-3 mb-0  ">
                                                    <span class="text-dark fw-700">Prof. Michael</span>
                                                    <span class="text-muted">offers consultation services to
                                                        educational institutions, businesses and individuals seeking
                                                        expertise in <span class="text-dark fw-700">curriculum
                                                            development</span>.</span>

                                                </p>
                                                <p class="fs-14 mt-1 mb-0 ">To schedule a
                                                    consultation, <span
                                                        class="fs-14 fw-700  seminar-more text-primary"><u>Book
                                                            a time</u></span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- >Expert Consultation   --}}
                                    <div class="mx-lg-4 rounded border mb-4 p-4">
                                        <h4 class="fw-600 fs-19 text-black  mb-2">Book Expert for
                                            Consultation </h4>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 col-12 px-lg-3">
                                                <img class="mr-2 w-100" alt="service_image" class="img-fluid"
                                                    src=" {{ asset('/assets/home/Find-scholarship/Expert.png') }}">
                                                <p class="fw-700 fs-16 text-center">Prof. Michael</p>
                                            </div>
                                            <div class="col-md-8 col-lg-8 col-12">
                                                <div class="d-flex justify-content-between ">
                                                    <div>
                                                        <span class="fs-16 fw-700">Expert:</span>
                                                        <span
                                                            class="btn fs-14 text-primary border rounded-2 py-0 px-2 border-primary">
                                                            Public Health</span>
                                                    </div>
                                                    <h4 class="fw-700 fs-16">$20
                                                        <span class="fw-700 fs-16">/30min</span>
                                                    </h4>
                                                </div>
                                                <p class="fs-16 mt-3 mb-0  ">
                                                    <span class="text-dark fw-700">Prof. Michael</span>
                                                    <span class="text-muted">offers consultation services to
                                                        educational institutions, businesses and individuals seeking
                                                        expertise in <span class="text-dark fw-700">curriculum
                                                            development</span>.</span>

                                                </p>
                                                <p class="fs-14 mt-1 mb-0 ">To schedule a
                                                    consultation, <span
                                                        class="fs-14 fw-700  seminar-more text-primary"><u>Book
                                                            a time</u></span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- >Book Expert for TV Interview   --}}
                                    <div class="mx-lg-4 rounded border mb-4 p-4">
                                        <h4 class="fw-600 fs-19 text-black  mb-2">Book Expert for TV
                                            Interview </h4>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 col-12 px-lg-3">
                                                <img src=" {{ asset('/assets/home/Find-scholarship/Tv-interview.png') }}"
                                                    class="w-100" alt="service_image" class="img-fluid">
                                                <p class="fw-700 fs-16 text-center">Prof. Michael</p>
                                            </div>
                                            <div class="col-md-8 col-lg-8 col-12">
                                                <div class="d-flex justify-content-between ">
                                                    <div>
                                                        <span class="fs-16 fw-700">Expert:</span>
                                                        <span
                                                            class="btn fs-14 text-primary border rounded-2 py-0 px-2 border-primary">
                                                            Public Health</span>
                                                    </div>
                                                </div>
                                                <p class="fs-16 mt-3 mb-0  ">
                                                    <span class="text-dark fw-700">Prof. Michael</span> <span
                                                        class="text-muted">offers consultation services to educational
                                                        institutions, businesses and individuals seeking expertise in
                                                        <span class="text-dark fw-700">curriculum
                                                            development</span>.</span>

                                                </p>
                                                <p class="fs-14 mt-1 mb-0 ">To schedule a
                                                    consultation, <span
                                                        class="fs-14 fw-700  seminar-more text-primary"><u>Book
                                                            a time</u></span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{-- Work Experience  --}}

                                <div class="mx-lg-4 rounded border p-3">
                                    <div class="d-flex mb-2">
                                        <img style="height:24px; width:24px;" class="mr-2" alt="service_image"
                                            src=" {{ asset('/assets/home/Find-scholarship/Experience.png') }}">
                                        <h4 class="fw-700 fs-23 text-black  mb-3">Work Experience</h4>
                                    </div>
                                    <div class=" mb-4 border-bottom pb-3">
                                        <div class="">
                                            <h6 class="fw-600 fs-19 ">
                                                Director of Curriculer Development
                                            </h6>
                                            <h6 class="fs-16 "><span class="text-muted">
                                                    <i>Public Health Institute of Sydney, Sydney, Australia</i></span> |
                                                <span class="fw-700">2020-Present</span>
                                            </h6>
                                        </div>
                                        <h6 class="fs-16 mt-3   " style="line-height:26px;">
                                            As a Director of Curriculum Development at the Public Health Institute of
                                            Sydney, I have played a pivotal role in shaping the education landscape. My
                                            responsibilities include:</h6>
                                        <h6 class="fs-16 mb-0  ">
                                            Collaborating with faculty members to design and implement innovative curricula
                                            for undergraduate and graduate programs in public health.</h6>
                                        <h6 class="fs-16  mb-0  my-2 ">
                                            Conducting ongoing research to identify emerging trends and best practices in
                                            public health education.</h6>
                                        <h6 class="fs-16 mb-0  " style="line-height:26px;">
                                            Overseeing the development of assessment tools and methodologies to evaluate
                                            student learning outcomes.</h6>

                                    </div>
                                    <div class=" mb-4 pb-3 border-bottom">
                                        <div class="">
                                            <h6 class="fw-600 fs-19 ">Lead Researcher in Public Health
                                                Education
                                            </h6>
                                            <h6 class="fs-16 "><span class="text-muted"><i>Lead Researcher in Public
                                                        Health Education</i></span> | <span class="fw-700">2010-2015</span>
                                            </h6>
                                        </div>
                                        <h6 class="fs-16 mt-3   " style="line-height:26px;">
                                            In this role, I contributed to the advancement of public health education and
                                            curriculum development by:</h6>
                                        <h6 class="fs-16 mb-0  ">
                                            Leading research projects focused on identifying key factors contributing to
                                            student engagement and success in public health programs.</h6>
                                        <h6 class="fs-16 mb-0   " style="line-height:26px;">
                                            Collaborating with international partners to conduct comparative studies on
                                            curriculum design and its impact on educational outcomes.</h6>

                                    </div>
                                    <div class=" mb-3 ">
                                        <div class="">
                                            <p class="fw-600 fs-19 ">Consultant for Educational
                                                Institutions
                                            </p>
                                            <h6 class="fs-16 "><span class="text-muted"><i>Self-Employed Curriculum
                                                        Development Consultant</i></span> | <span
                                                    class="fw-700">2005-2010</span></h6>
                                        </div>
                                        <h6 class="fs-16 mt-3   " style="line-height:26px;">
                                            As a Director of Curriculum Development at the Public Health Institute of
                                            Sydney, I have played a pivotal role in shaping the education landscape. My
                                            responsibilities include:</h6>
                                        <h6 class="fs-16 mb-0  ">Collaborating with faculty members to
                                            design and implement innovative curricula for undergraduate and graduate
                                            programs in public health.</h6>
                                        <h6 class="fs-16 mb-0  ">Conducting ongoing research to identify
                                            emerging trends and best practices in public health education.</h6>
                                        <h6 class="fs-16 mb-0  " style="line-height:26px;">Overseeing
                                            the development of assessment tools and methodologies to evaluate student
                                            learning outcomes.</h6>
                                        </p>
                                    </div>
                                </div>
                                {{-- Projects  --}}

                                <div class="rounded border mt-4 mx-lg-4">
                                    <div class="d-flex align-items-center px-3">
                                        <img style="height:24px; width:24px;"
                                            src=" {{ asset('/assets/home/Find-scholarship/Project.png') }}"
                                            class="" alt="service_image">
                                        <ul class="nav nav-tabs freePage-work-history-com-prog" id="myTab"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link  fs-23 fw-700 text-primary " id="finding-work-tab"
                                                    data-toggle="tab" href="#finding" role="tab"
                                                    aria-controls="finding" aria-selected="false">Current Projects</a>
                                            </li>
                                            <span class="mt-3">|</span>
                                            <li class="nav-item">
                                                <a class="nav-link show active fs-23 text-primary fw-700 "
                                                    id="hiring-talent-tab" data-toggle="tab" href="#hiring"
                                                    role="tab" aria-controls="hiring">Completed Projects
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- Completed and runing work part start --}}
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade " id="hiring" role="tabpanel"
                                            aria-labelledby="hiring-talent-tab">
                                            <div class="tab-pane fade show active" id="finding" role="tabpanel"
                                                aria-labelledby="finding-work-tab">
                                                <div class=" mb-3  p-2 px-3">
                                                    <div class="border-bottom pb-3">
                                                        <div class="">
                                                            <p class="fw-700 fs-19 ">Development of
                                                                Innovative Public Health Curriculum
                                                            </p>
                                                            <h6 class="fs-16 "><span class="text-muted"><i>Public Health
                                                                        Institute of Sydney, Sydney, Australia </i></span> |
                                                                <span class="fw-700">2018-2022</span>
                                                            </h6>

                                                        </div>
                                                        <div class="fs-16 mt-3   "
                                                            style="line-height:26px;">

                                                            <h6 class="fs-16 mb-0  my-2"
                                                                style="line-height:26px;">I led a groundbreaking project in
                                                                collaboration with Public Health Institute of Sydney to
                                                                develop an innovative public health curriculum. This project
                                                                aimed to revamp the university's existing curriculum to
                                                                align with the latest research, pedagogical trends, and
                                                                industry demands. Key highlights of this project included:
                                                            </h6>
                                                            <h6 class="fs-16 mb-0  my-2 ">Conducting a
                                                                comprehensive needs assessment to identify gaps in the
                                                                current curriculum and the evolving requirements of the
                                                                public health field.</h6>
                                                            <h6 class="fs-16 mb-0  my-2">Collaborating
                                                                with a team of subject matter experts to design a
                                                                competency-based curriculum that emphasised practical skills
                                                                and interdisciplinary learning.</h6>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class=" mb-2 p-2 px-4">
                                                    <div class="">
                                                        <p class="fw-700 fs-19 ">Comparative Analysis of
                                                            Public Health Curriculam
                                                        </p>
                                                        <h6 class="fs-16 "><span class="text-muted"><i>International
                                                                    Public Health Education Consortium </i></span> | <span
                                                                class="fw-700"> 2018-2022</span></h6>

                                                    </div>
                                                    <div class="fs-14 mt-1 mb-0  ">

                                                        <h6 class="fs-16 mb-0  my-3">In this role, I
                                                            contributed to the advancement of public health education and
                                                            curriculum development by:</h6>
                                                        <h6 class="fs-16 mb-0  my-2"
                                                            style="line-height:26px;">Collaborating with a diverse team of
                                                            international researchers to collect and analyse data from a
                                                            wide range of universities and public health programs.
                                                            Evaluating curriculum structures, content, pedagogical
                                                            approaches, and assessment methods to identify commonalities,
                                                            differences, and best practices.
                                                            Conducting surveys and interviews with faculty members and
                                                            students to gather qualitative insights into the effectiveness
                                                            of various curricular models.</h6>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade show active" id="finding" role="tabpanel"
                                            aria-labelledby="finding-work-tab">
                                            <div class=" mb-3  p-2 px-3">
                                                <div class="border-bottom pb-3">
                                                    <div class="">
                                                        <p class="fw-700 fs-19 ">Development of
                                                            Innovative Public Health Curriculum
                                                        </p>
                                                        <h6 class="fs-16 "><span class="text-muted"><i>Public Health
                                                                    Institute of Sydney, Sydney, Australia </i></span> |
                                                            <span class="fw-700">2018-2022</span>
                                                        </h6>

                                                    </div>
                                                    <div class="fs-16 mt-3   "
                                                        style="line-height:26px;">

                                                        <h6 class="fs-16 mb-0  my-2"
                                                            style="line-height:26px;">I led a groundbreaking project in
                                                            collaboration with Public Health Institute of Sydney to develop
                                                            an innovative public health curriculum. This project aimed to
                                                            revamp the university's existing curriculum to align with the
                                                            latest research, pedagogical trends, and industry demands. Key
                                                            highlights of this project included:</h6>
                                                        <h6 class="fs-16 mb-0  my-2 ">Conducting a
                                                            comprehensive needs assessment to identify gaps in the current
                                                            curriculum and the evolving requirements of the public health
                                                            field.</h6>
                                                        <h6 class="fs-16 mb-0  my-2">Collaborating with
                                                            a team of subject matter experts to design a competency-based
                                                            curriculum that emphasised practical skills and
                                                            interdisciplinary learning.</h6>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class=" mb-2 p-2 px-3">
                                                <div class="">
                                                    <p class="fw-700 fs-19 ">Comparative Analysis of
                                                        Public Health Curriculam
                                                    </p>
                                                    <h6 class="fs-16 "><span class="text-muted"><i>International Public
                                                                Health Education Consortium </i></span> | <span
                                                            class="fw-700"> 2018-2022</span></h6>

                                                </div>
                                                <div class="fs-14 mt-1 mb-0  ">

                                                    <h6 class="fs-16 mb-0  my-3">In this role, I
                                                        contributed to the advancement of public health education and
                                                        curriculum development by:</h6>
                                                    <h6 class="fs-16 mb-0  my-2"
                                                        style="line-height:26px;">
                                                        Collaborating with a diverse team of international researchers to
                                                        collect and analyse data from a wide range of universities and
                                                        public health programs.
                                                        Evaluating curriculum structures, content, pedagogical approaches,
                                                        and assessment methods to identify commonalities, differences, and
                                                        best practices.
                                                        Conducting surveys and interviews with faculty members and students
                                                        to gather qualitative insights into the effectiveness of various
                                                        curricular models.</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Portfolio  --}}

                                <div class="mx-lg-4 rounded border p-2 px-lg-4 mt-3 mb-3">
                                    <div class="d-flex justify-content-between ">
                                        <div class="w-lg-75 w-xl-50 lh-1-8 d-flex content-title ">
                                            <img style="height:24px; width:24px;"
                                                src=" {{ asset('/assets/home/Find-scholarship/Vector.png') }}"
                                                class="mr-2" alt="service_image">
                                            <h4 class="fw-700 fs-23 text-black ">Portfolio
                                            </h4>
                                        </div>
                                        <div>
                                            <a href=""
                                                class=" fs-16 text-dark btn rounded-1 border text-center fre-consultant-category">
                                                <img class=" category-list "
                                                    src=" {{ asset('/assets/home/Find-scholarship/Left-arrow.png') }}"
                                                    alt="Image" style="width:8px;" />
                                            </a>
                                            <a href=""
                                                class=" fs-16 text-dark btn rounded-1 border bg-primary  text-center fre-consultant-category">
                                                <img class=" category-list "
                                                    src=" {{ asset('/assets/home/Find-scholarship/Right-arrow.png') }}"
                                                    alt="Image" style="width:8px;" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="caorusel-box">
                                                <a href="" class="text-dark">
                                                    <div class="" style="height:330px">
                                                        <div class="">
                                                            <div class=" ">
                                                                <img src=" {{ asset('/assets/home/Find-scholarship/Portfolio-1.png') }}"
                                                                    class="card-img-top rounded" alt="service_image"
                                                                    height="212">
                                                            </div>
                                                            <div class="py-3">
                                                                <div>

                                                                    <p class="  fw-600 fs-16"
                                                                        style=" line-height:17px;">
                                                                        Comparative Analysis of Public Health Curriculam</p>

                                                                    <div class="mt-3">
                                                                        <span
                                                                            class="fs-14 text-primary border rounded-2 py-1 px-2 border-primary ">
                                                                            Public Health</span>
                                                                        <span
                                                                            class="fs-14 text-primary border rounded-2 py-1 px-2 border-primary ">
                                                                            Infactious diseases</span>
                                                                    </div>
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
                                                    <div class=" " style="height:330px">
                                                        <div class="">
                                                            <div class=" ">
                                                                <img src=" {{ asset('/assets/home/Find-scholarship/Portfolio-2.png') }}"
                                                                    class="card-img-top rounded" alt="service_image"
                                                                    height="212">
                                                            </div>
                                                            <div class="py-3">
                                                                <div>

                                                                    <p class="  fw-600 fs-16"
                                                                        style=" line-height:17px;">
                                                                        Comparative Analysis of Public Health Curriculam</p>

                                                                    <div class="mt-2">
                                                                        <div class="mt-3">
                                                                            <span
                                                                                class="fs-14  text-primary border rounded-2 py-1 px-2 border-primary">
                                                                                Public Health</span>
                                                                            <span
                                                                                class="fs-14  text-primary border rounded-2 py-1 px-2 border-primary">
                                                                                Infactious diseases</span>
                                                                        </div>
                                                                    </div>
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
                                                    <div class="" style="height:330px">
                                                        <div class="">
                                                            <div class=" ">
                                                                <img src=" {{ asset('/assets/home/Find-scholarship/Portfolio-3.png') }}"
                                                                    class="card-img-top rounded" alt="service_image"
                                                                    height="212">
                                                            </div>
                                                            <div class="py-3">
                                                                <div>

                                                                    <p class="fw-600   fs-16 "
                                                                        style=" line-height:17px;">
                                                                        Comparative Analysis of Public Health Curriculam</p>

                                                                    <div class="mt-2">
                                                                        <div class="mt-3">
                                                                            <span
                                                                                class="fs-14  text-primary border rounded-2 py-1 px-2 border-primary">
                                                                                Public Health</span>
                                                                            <span
                                                                                class="fs-14  text-primary border rounded-2 py-1 px-2 border-primary">
                                                                                Infactious diseases</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Testimonials  --}}
                                <div class="mx-lg-4 rounded border p-2 px-4 mt-3 mb-3">
                                    <div class="d-flex  mb-3">
                                        <img style="height:24px; width:24px;" class="mr-1" alt="service_image"
                                            src=" {{ asset('/assets/home/Find-scholarship/Testimonial-2.png') }}">
                                        <h4 class="fw-700 fs-23 text-black "> Testimonials</h4>
                                        <img style="height:24px; width:24px;" class="ml-1" alt="service_image"
                                            src=" {{ asset('/assets/home/Find-scholarship/Testimonial.png') }}">
                                    </div>
                                    <div class=" mb-3 ">
                                        <p class="fs-16"><i>Prof. Michael Kassiou played a pivotal role in the development
                                                of our university curriculum. His expertise, creativity, and dedication to
                                                ensuring our program met the highest standards were truly outstanding. We
                                                are grateful for his contributions and highly recommend his services to any
                                                educational institution.
                                            </i>
                                        </p>
                                        <div class="d-flex border-bottom pb-3">
                                            <div class="">
                                                <img class="h-75 w-75"
                                                    src="{{ asset('/assets/home/Find-scholarship/Testimonial-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="">
                                                <h6 class="fw-700 fs-18 ">Prof. David smith
                                                </h6>
                                                <h6 class=" fs-14  text-muted">Dean | School of Business
                                                    | Sydney Islamic Business School
                                                </h6>
                                            </div>

                                        </div>
                                        <div class="mt-4">
                                            <p class="fs-16"><i>We are immensely grateful to Prof. Michael Kassiou for his
                                                    invaluable assistance in our university's accreditation process His deep
                                                    knowledge of accreditation standards and guidance were instrumental in
                                                    helping us meet and criteria. We highly recommend Dr. Johnson's
                                                    consultancy services to any educational institution seeking
                                                    accreditation.</i></p>
                                            <div class="d-flex">
                                                <div class="">
                                                    <img class="h-75 w-75"
                                                        src="{{ asset('/assets/home/Find-scholarship/Testimonial-1.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="">
                                                    <h6 class="fw-700 fs-18 ">Prof. Daniel
                                                    </h6>
                                                    <h6 class=" fs-14  text-muted">Dean | School of
                                                        Business| EduEx University.
                                                    </h6>
                                                </div>

                                            </div>
                                            <p class="text-center text-primary fs-16 fw-700"><u> More Testimonals ></u></p>
                                            <img src=" {{ asset('/assets/home/Find-scholarship/Right-arrow.png') }}"
                                                class=" rounded" alt="service_image">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- script added here  --}}
                <script>
                    function updateTime() {
                        const localTimeElement = document.getElementById('local-time');
                        const currentDate = new Date();

                        const options = {
                            hour: 'numeric',
                            minute: 'numeric',
                            // second: 'numeric'
                        };
                        const localTimeString = currentDate.toLocaleTimeString(undefined, options);

                        localTimeElement.textContent = localTimeString + ' local Time ';

                        // Set the interval to update the time every second
                        setTimeout(updateTime, 1000);
                    }

                    // Call the function to update the time initially
                    updateTime();
                </script>
            @endsection


            @section('modal')
                @include('frontend.default.partials.bookmark_remove_modal')
            @endsection
    </body>

    </html>
