    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/frontend/default/css/single-Profile.css') }}">
    </head>
    <body>
        @extends('frontend.default.layouts.app')
        @section('content')
            <div class="position-relative freelancer-Profile-main-section border-bottom">
               <div class="border-bottom">
                <div class="profile-single">
                    <nav class="justify-content-between d-flex " style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Find Consultant</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Professor Kassiou</li>
                        </ol>
                       <div class="d-flex mx-4 ">
                        <div class="rounded mx-1 border-primary" style="border:1px solid #61B895;">
                            <img class="p-2 center d-block c-pointer"
                                src="{{ asset('assets/frontend/default/img/scholarship/heart.png') }}"
                                alt="">
                        </div>
                        <div class="rounded" style="border:1px solid #61B895;">
                            <img class="p-2 center d-block c-pointer"
                                src="{{ asset('assets/frontend/default/img/scholarship/heart.png') }}"
                                alt="">
                        </div>
                       </div>
                      </nav>
                   </div>
               </div>
                <div class="container-home rounded-1">
                    <div class="">
                        <div class="row">
                            <!-- left side -->
                            <div class="col-lg-4 col-xl-3 col-12 left-aside shadow-lg pr-0 h-50">      
                                <!-- Education -->
                                <div class="mx-4  border-bottom mb-3">
                                    <div class="justify-content-center text-center mt-4">
                                        <img style="width:176px; height:177px;" src=" {{ asset('/assets/home/Find-scholarship/arts.jpg') }}"
                                        class="" alt="service_image">
                                    </div>
                                    <div>
                                       
                                    <h5 class="text-black fs-23 fw-500 pb-3 text-center mt-3"> {{ $freelancer->name }}</h5>
                                    <h6 class="text-center fs-16 fw-400">Curriculum Development Specialist</h6>
                                    <h6 class="text-center text-primary fs-16">Public Health </h6>
                                                                        {{-- location --}}
                                                                        <div class="location fw-700 ">
                                                                            <div class="mr-lg-2 mb-sm-1 text-center  mb-1 ml-1  text-dark fs-14">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="9.6"
                                                                                    height="12" viewBox="0 0 9.6 12">
                                                                                    <path id="Path_25847" data-name="Path 25847"
                                                                                        d="M8.8,2A4.806,4.806,0,0,0,4,6.8c0,1.953,1.418,3.575,2.92,5.292.475.544.967,1.106,1.405,1.675a.6.6,0,0,0,.95,0c.438-.569.93-1.131,1.405-1.675,1.5-1.717,2.92-3.338,2.92-5.292A4.806,4.806,0,0,0,8.8,2Zm0,6.6a1.8,1.8,0,1,1,1.8-1.8A1.8,1.8,0,0,1,8.8,8.6Z"
                                                                                        transform="translate(-4 -2)" fill="#989ea8" />
                                                                                </svg>
                                                                                @if ($freelancer->address != null && $freelancer->address->city != null && $freelancer->address->country != null)
                                                                                    <span
                                                                                        class="ml-lg-1 ">{{ $freelancer->address->city->name }},
                                                                                        {{ $freelancer->address->country->name }}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div class=" text-dark text-center fs-14" id="local-time"></div>
                                                                        </div>

                                                                      </div>
                                                                        <div class="border-bottom pb-3">
                                                                            
                                            <div>
                                                <p class="btn btn-primary btn-sm  w-100  fw-700 mt-3">
                                                {{ translate('Book a Consultation') }}
                                            </p>
                                        </div>
                                    <div>
                                        <p class="btn border-1 btn-sm  w-100  fw-700 profile-leftside" style="color: #275846; border-color:#275846 !important;" >
                                            {{ translate('Book a TV Interview') }}
                                        </p>
                                </div>
                                    <div>
                                        <p class="btn border-1 btn-sm  w-100  fw-700 profile-leftside" style="color: #275846; border-color:#275846 !important;" >
                                            {{ translate('Invite to Project') }}
                                        </p>
                                </div>
                                                                        </div>

                                <div class="mt-4">
                                    <h4 class="fs-16 fw-700 mb-2 site-font">Languages</h4>
                                    <p class="fs-14 fw-500 site-font">Proficient in English</p>
                                </div>
                                <div class='mt-4 mb-3'>
                                    <div class="  ">
                                        <h6 class="fs-16 fw-700">{{ translate('Expertise') }}</h6>
                                       
                                        {{-- skills  --}}

                                        <div>
                                            @if ($freelancer->Profile->skills != null)
                                                @foreach (json_decode($freelancer->Profile->skills, true) as $key => $skill_id)
                                                    @php
                                                        $skill = \App\Models\Skill::find($skill_id);
                                                    @endphp
                                                    @if ($skill)
                                                        <span
                                                            class="btn fs-14 text-primary border rounded-2 py-1 px-2 border-primary site-font mb-1"
                                                            >{{ $skill->name }}
                                                        </span>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                {{-- education  --}}
                                        
                                    <div class="">
                                        <h5 class="fs-16 mt-4 fw-700">{{ translate('Education') }}</h5>
                                        <ul class="list-group list-group-flush site-font">
                                            @foreach ($freelancer->education_details as $key => $education)
                                                <li class="list-group-item px-0">
                                                    <h6 class="fw-600 fs-14 mb-1 site-font m-0">{{ $education->school_name }}
                                                    </h6>
                                                    <p class="mb-0 fw-400">{{ $education->degree }} |
                                                        {{ $education->passing_year }} </p>

                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    </div>


                                </div>
  
                                    <div>
                                        <h4 class="fs-16 fw-700 mb-2 site-font">University Profile</h4>
                                        <a href="https://www.ox.ac.uk/" class="fs-14 site-font mb-2"><u class="text-dark">http://127.0.0.1:8000/freelancer/mr-consultant20230405-091010..</u></a>
                                    </div>
                                    <div>
                                        <h4 class="fs-16 fw-700 mb-2 mt-4 site-font">Research Profile</h4>
                                        <a href="https://scholar.google.com/" class="fs-14  site-font"><u class="text-dark mb-2">http://127.0.0.1:8000/freelancer/mr-consultant20230405-091010..</u></a>
                                    </div>                    
                                </div>
                                <!-- Employment history -->
                                {{-- <div class=" mt-5">  
                                    <div class="mx-4 mt-4 border-bottom mb-3">
                                        <div class="">
                                            <h4 class="h6 fw-700 mb-0 fs-18"> {{ translate('Work Experience') }}</h4>
                                        </div>
                                        <div class="pb-3">
                                            <ul class="list-group list-group-flush">
                                                @foreach ($freelancer->workExperiences as $key => $experience)
                                                    <li class="list-group-item px-0">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="fw-500 fs-16 mb-0 mr-1">
                                                                {{ $experience->designation }}</h6> |
                                                            <a class='ml-1 fw-500 fs-16 ' style="color:black;"
                                                                href="{{ $experience->company_website }}"
                                                                target="_blank">{{ $experience->company_name }}
                                                            </a>
                                                        </div>
                                                        <ul class="list-unstyled text-secondary mb-0">

                                                            @if ($experience->present == '1')
                                                                <li>{{ Carbon\Carbon::parse($experience->start)->toFormattedDateString() }}
                                                                    -
                                                                    {{ translate('Present') }}
                                                                </li>
                                                            @else
                                                                <li>{{ Carbon\Carbon::parse($experience->start)->toFormattedDateString() }}
                                                                    -
                                                                    {{ Carbon\Carbon::parse($experience->end)->toFormattedDateString() }}
                                                                </li>
                                                            @endif
                                                            <li class="small">{{ $experience->description }}
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                            <!-- details side or right side -->
                            <div class="col-lg-8 col-xl-9 col-12 pl-0">
                                <div class="">
                                    <div class="tab-content mx-4 border mb-3 px-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active mt-4" id="list-home" role="tabpanel"
                                            aria-labelledby="list-home-list">
                                            <div class="d-flex justify-content-between mt-3 ">
                                                <h4 class="fw-700 fs-18 text-black site-font">Biography </h4>
                                                <h4 class="fw-700 fs-18 text-black">$200.00/hr</h4>
                                            </div>
                                            <div class="mt-3">
                                                <p class="fs-14 site-font">Prof. Michael is an accomplished Curriculum
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
                                    <div class="mx-4 border mb-3 p-2">
                                        <h4 class="fw-700 fs-18 text-black site-font">Book Expert for Consultation 
                                        </h4>
                                        <div class=" mb-3">
                                            <div class="row p-3">
                                                <div class="col-lg-2 col-md-2 col-sm-12">
                                                    <img src="{{ asset('assets/frontend/default/img/consultant_booking.jpeg  ') }}"
                                                        alt="">
                                                        <p>Prof. Michael</p>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="d-flex justify-content-between ">
                                                        <p class="fw-700 fs-18 site-font"><span>Expertise:</span>Curriculum Development
                                                        </p>
                                                        <p class="fw-700 fs-18">$20 <span
                                                                class="fw-400 fs-18">/30min</span></p>
                                                    </div>
                                                    <p class="fs-16 mt-1 mb-0 site-font ">
                                                        Prof. Michael offers consultation services to educational institutions, businesses and individuals seeking expertise in curriculum development.
                                                        
                                                    </p>
                                                    <p class="fs-16 mt-1 mb-0 site-font">To schedule a consultation, <span class="fs-16 site-font seminar-more">book a time</span></p>
                                                    
                                                </div>
                                            </div>

                                        </div>
 
                                    </div>
                                    <div class="mx-4 border mb-3 p-2">
                                        <h4 class="fw-700 fs-18 text-black site-font">Book Expert for Consultation 
                                        </h4>
                                            <div class="row p-3">
                                                <div class="col-lg-2 col-md-2 col-sm-12">
                                                    <img src="{{ asset('assets/frontend/default/img/consultant_booking.jpeg  ') }}"
                                                        alt="">
                                                        <p>Prof. Michael</p>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="d-flex justify-content-between ">
                                                        <p class="fw-700 fs-18 site-font"><span>Expertise:</span>Public Health                         
                                                        </p>
                                                        <p class="fw-700 fs-18">$20 <span
                                                                class="fw-400 fs-18">/30min</span></p>
                                                    </div>
                                                    <p class="fs-16 mt-1 mb-0 site-font ">
                                                        Prof. Michael offers consultation services to educational institutions, businesses and individuals seeking expertise in curriculum development.  
                                                    </p>
                                                    <p class="fs-16 mt-1 mb-0 site-font">To schedule a consultation, <span class="fs-16 site-font seminar-more">book a time</span></p>
                                                    
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="mx-4 border p-2 mb-3">
                                    <h4 class="fw-700 fs-18 text-black site-font">Book Expert for TV Interview
                                    </h4>
                                    <div class=" mb-3">
                                        <div class="row p-3">
                                            <div class="col-lg-2 col-md-2 col-sm-12">
                                                <img src="{{ asset('assets/frontend/default/img/consultant_booking.jpeg  ') }}"
                                                    alt="">
                                                    <p>Prof. Michael</p>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <div class="">
                                                    <p class="fw-700 fs-18 site-font"><span>Expertise:</span>Public Health                         
                                                    </p>
                                                </div>
                                                <p class="fs-16 mt-1 mb-0 site-font ">
                                                    Prof. Michael is an expert for media in the following fields: Public Health and Infectious diseases. They are happy to lend their expertise to share their research discoveries and insights with the community via media channels.</p>
                                                <p class="fs-16 mt-1 mb-0 site-font">To schedule a consultation, <span class="fs-16 site-font seminar-more">book a time</span></p>
                                                
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="mx-4 border p-2">
                                    <h4 class="fw-700 fs-18 text-black site-font">Work Experience</h4>
                                    <div class=" mb-3 border-bottom">
                                                <div class="">
                                                    <p class="fw-700 fs-18 site-font">Director of Curriculer Development                         
                                                    </p>
                                                    <p>Public Health Institute of Sydney, Sydney, Australia | 2020-Present</p>
                                                </div>
                                                <p class="fs-14 mt-1 mb-0 site-font ">
                                                    As a Director of Curriculum Development at the Public Health Institute of Sydney, I have played a pivotal role in shaping the education landscape. My responsibilities include:</p>
                                                    <p>Collaborating with faculty members to design and implement innovative curricula for undergraduate and graduate programs in public health.</p>
                                                   <p>Conducting ongoing research to identify emerging trends and best practices in public health education.</p>
                                                    <p>Overseeing the development of assessment tools and methodologies to evaluate student learning outcomes.</p>
                                                    </p>
                                                
                                           

                                    </div>
                                    <div class=" mb-3 border-bottom">
                                                <div class="">
                                                    <p class="fw-700 fs-18 site-font">Lead Researcher in Public Health Education                       
                                                    </p>
                                                    <p>Lead Researcher in Public Health Education | 2010-2015</p>
                                                </div>
                                                <p class="fs-14 mt-1 mb-0 site-font ">
                                                    In this role, I contributed to the advancement of public health education and curriculum development by:</p>
                                                    <p>Leading research projects focused on identifying key factors contributing to student engagement and success in public health programs.</p>
                                                   <p>Collaborating with international partners to conduct comparative studies on curriculum design and its impact on educational outcomes.</p>
                                                   
                                    </div>
                                    <div class=" mb-3">
                                                <div class="">
                                                    <p class="fw-700 fs-18 site-font">Consultant for Educational Institutions                         
                                                    </p>
                                                    <p>Self-Employed Curriculum Development Consultant | 2005-2010</p>
                                                </div>
                                                <p class="fs-14 mt-1 mb-0 site-font ">
                                                    As a Director of Curriculum Development at the Public Health Institute of Sydney, I have played a pivotal role in shaping the education landscape. My responsibilities include:</p>
                                                    <p>Collaborating with faculty members to design and implement innovative curricula for undergraduate and graduate programs in public health.</p>
                                                   <p>Conducting ongoing research to identify emerging trends and best practices in public health education.</p>
                                                    <p>Overseeing the development of assessment tools and methodologies to evaluate student learning outcomes.</p>
                                                    </p>
                                    </div>
                                </div>
                                <div class="border mt-4 mx-4">     
                                    <ul class="nav nav-tabs freePage-work-history-com-prog" id="myTab"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active fs-16  " id="finding-work-tab"
                                                data-toggle="tab" href="#finding" role="tab" aria-controls="finding"
                                                aria-selected="false">Current Projects</a>
                                        </li>
                                        <span class="mt-2">|</span>
                                        <li class="nav-item">
                                            <a class="nav-link  fs-16  " id="hiring-talent-tab" data-toggle="tab"
                                                href="#hiring" role="tab" aria-controls="hiring">Completed Projects
                                            </a>
                                        </li>
                                    </ul>
                                    
                                    {{-- Completed and runing work part start --}}
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade " id="hiring" role="tabpanel"
                                            aria-labelledby="hiring-talent-tab">                                           
                                        </div>
                                        <div class="tab-pane fade show active" id="finding" role="tabpanel"
                                            aria-labelledby="finding-work-tab">
                                            <div class=" mb-3  p-2">
                                              <div class="border-bottom">
                                                <div class="">
                                                    <p class="fw-700 fs-18 site-font">Development of Innovative Public Health Curriculum                       
                                                    </p>
                                                    <p>Public Health Institute of Sydney, Sydney, Australia | 2018-2022</p>
                                                </div>
                                                <div class="fs-14 mt-1 mb-0 site-font ">
                                                    
                                                    <p>I led a groundbreaking project in collaboration with Public Health Institute of Sydney to develop an innovative public health curriculum. This project aimed to revamp the university's existing curriculum to align with the latest research, pedagogical trends, and industry demands. Key highlights of this project included:</p>
                                                    <p>Conducting a comprehensive needs assessment to identify gaps in the current curriculum and the evolving requirements of the public health field.</p>
                                                    <p>Collaborating with a team of subject matter experts to design a competency-based curriculum that emphasised practical skills and interdisciplinary learning.</p>
                                            </div>
                                              </div>

                                    </div>
                                                
                                           <div class=" mb-2 p-2">
                                                <div class="">
                                                    <p class="fw-700 fs-18 site-font">Comparative Analysis of Public Health Curriculam                        
                                                    </p>
                                                    <p>International Public Health Education Consortium | 2018-2022</p>
                                                </div>
                                                <div class="fs-14 mt-1 mb-0 site-font ">
                                                    
                                                    <p>In this role, I contributed to the advancement of public health education and curriculum development by:</p>
                                                    <p>Collaborating with a diverse team of international researchers to collect and analyse data from a wide range of universities and public health programs.
                                                        Evaluating curriculum structures, content, pedagogical approaches, and assessment methods to identify commonalities, differences, and best practices.
                                                        Conducting surveys and interviews with faculty members and students to gather qualitative insights into the effectiveness of various curricular models.</p>
                                               </div>

                                             </div>

                                    </div>
                                        </div>

                                
                            </div>
                            <div class="mx-4 border p-2 mt-3 mb-3">
                                   <div class="d-flex justify-content-between ">
                                            <div class="w-lg-75 w-xl-50 lh-1-8 content-title ">
                                                <h4 class="fw-700 fs-23 text-black site-font">Portfolio
                                                </h4>
                                            </div>
                                            <div>
                                                <a href=""
                                                    class=" fs-16 text-dark btn rounded-1 border pt-2 text-center fre-consultant-category">
                                                    <img class=" category-list " src=" {{ asset('/assets/findJob/right.png') }}"
                                                        alt="Image" style="width:18px;" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="caorusel-box">
                                                    <a href=""
                                                        class="text-dark">
                                                        <div class="card rounded" style="height:330px">
                                                            <div class="">
                                                                <div class=" ">
                                                                    <img src=" {{ asset('/assets/home/Find-scholarship/university.jpg') }}"
                                                                        class="card-img-top" alt="service_image" height="212">
                                                                </div>
                                                                <div class="p-3">
                                                                    <div>
                    
                                                                        <p class="card-title  fs-16" style=" line-height:17px;">
                                                                          Comparative Analysis of Public Health Curriculam</p>
                    
                                                                        <div class="mt-3">
                                                                            <span class="fs-14 text-primary border rounded-2 py-1 px-2 border-primary"> Public Health</span>
                                                                            <span class="fs-14 text-primary border rounded-2 py-1 px-2 border-primary"> Infactious diseases</span>
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
                                                    <a href=""
                                                        class="text-dark">
                                                        <div class="card rounded" style="height:330px">
                                                            <div class="">
                                                                <div class=" ">
                                                                    <img src=" {{ asset('/assets/home/Find-scholarship/university.jpg') }}"
                                                                        class="card-img-top" alt="service_image" height="212">
                                                                </div>
                                                                <div class="p-3">
                                                                    <div>
                    
                                                                        <p class="card-title  fs-16" style=" line-height:17px;">
                                                                            Comparative Analysis of Public Health Curriculam</p>
                    
                                                                        <div class="mt-2">
                                                                            <div class="mt-3">
                                                                                <span class="fs-14 text-primary border rounded-2 py-1 px-2 border-primary"> Public Health</span>
                                                                                <span class="fs-14 text-primary border rounded-2 py-1 px-2 border-primary"> Infactious diseases</span>
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
                                                    <a href=""
                                                        class="text-dark">
                                                        <div class="card rounded" style="height:330px">
                                                            <div class="">
                                                                <div class=" ">
                                                                    <img src=" {{ asset('/assets/home/Find-scholarship/university.jpg') }}"
                                                                        class="card-img-top" alt="service_image" height="212">
                                                                </div>
                                                                <div class="p-3">
                                                                    <div>
                    
                                                                        <p class="card-title  fs-16 " style=" line-height:17px;">
                                                                            Comparative Analysis of Public Health Curriculam</p>
                    
                                                                        <div class="mt-2">
                                                                            <div class="mt-3">
                                                                                <span class="fs-14 text-primary border rounded-2 py-1 px-2 border-primary"> Public Health</span>
                                                                                <span class="fs-14 text-primary border rounded-2 py-1 px-2 border-primary"> Infactious diseases</span>
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
                                        <h5 class=" fre-button-show">
                                            <a href="" class="fs-16 text-dark  "><span>All Scholarships
                                                </span></a>
                                            <img class=" category-list " src=" {{ asset('/assets/findJob/right.png') }}" alt="Image"
                                                style="width:18px;" />
                                        </h5>
                              
                        
                            </div>
                            <div class="mx-4 border p-2 mt-3 mb-3">
                                <h4 class="fw-700 fs-18 text-black site-font">Testimonials
                                </h4>
                                <div class=" mb-3">
                                    <p>Prof. Michael is an expert for media in the following fields: Public Health and Infectious diseases. They are happy to lend their expertise to share their research discoveries and insights with the community via media channels.</p>
                                    <div class="d-flex">
                                        <div class="">
                                            <img class="h-75 w-75" src="{{ asset('assets/frontend/default/img/consultant_booking.jpeg  ') }}"
                                                alt="" > 
                                        </div>
                                        <div class="">
                                            <p class="fw-700 fs-18 site-font">Prof. David smith                        
                                            </p>
                                            <p class=" fs-14 site-font">Dean | School of Business| Sydney Islamic Business School.                      
                                            </p>
                                        </div>
                                        
                                    </div>
                                    <div>
                                        <p>Prof. Michael is an expert for media in the following fields: Public Health and Infectious diseases. They are happy to lend their expertise to share their research discoveries and insights with the community via media channels.</p>
                                        <div class="d-flex">
                                            <div class="">
                                                <img class="h-75 w-75" src="{{ asset('assets/frontend/default/img/consultant_booking.jpeg  ') }}"
                                                    alt="" > 
                                            </div>
                                            <div class="">
                                                <p class="fw-700 fs-18 site-font">Prof. Daniel                       
                                                </p>
                                                <p class=" fs-14 site-font">Dean | School of Business| EduEx University.                      
                                                </p>
                                            </div>
                                            
                                        </div>
                                       <p class="text-center"><u> More Testimonals</u></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- services part --}}
                    {{-- <div class=" mt-5">
                        <div class="">
                            <h4 class="h6 fw-700 mb-0"> {{ translate('Services') }}</h4>
                        </div>
                        <div class="card-body p-0 mt-3">
                            <div class="row gutters-15">
                                @foreach ($freelancer->services as $service)
                                    <div class="col-lg-3">
                                        <div class="card rounded-2 border-gray-light overflow-hidden hov-box">
                                            <a href="{{ route('service.show', $service->slug) }}"><img
                                                    src="{{ custom_asset($service->image) }}" class="card-img-top"
                                                    alt="service_image" height="170" width="150">
                                            </a>
                                            <div class="card-body pb-1">
                                                <div class="d-flex mb-2">
                                                    <span class="mr-2 site-font"><img
                                                            src="{{ custom_asset($service->user->photo) }}"
                                                            alt="{{ $service->user->name }}" height="35"
                                                            width="35" class="rounded-circle">
                                                    </span>
                                                    <span class="d-flex flex-column justify-content-center">
                                                        <a href="{{ route('freelancer.details', $freelancer->user_name) }}"
                                                            class="text-dark site-font">
                                                            <span class="font-weight-bold">{{ $freelancer->name }}
                                                            </span>
                                                        </a>
                                                    </span>
                                                </div>

                                                <a href="{{ route('service.show', $service->slug) }}" class="text-dark">
                                                    <h5 class="card-title fs-16 fw-700 site-font">
                                                        {{ \Illuminate\Support\Str::limit($service->title, 45, $end = '...') }}
                                                    </h5>
                                                </a>
                                            </div>
                                            <div class="card-footer justify-content-between fs-14">
                                                <span>STARTING AT
                                                    {{ count($service->service_packages) > 0 ? single_price($service->service_packages[0]->service_price) : single_price(0) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

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
