@extends('frontend.default.layouts.app')
<link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/why-freelancerEdu.css')}}">

@section('content')
<div class="whyFreeEdu-container-main">
    <div class=" rounded-md my-2 " style="background: #F2F7F2;">
        <div class="row py-2">
            <div class="col-lg-6 mt-4 px-5 review-banner-main">
                <h3 class="text-black fw-700 fs-16">Why ConsultantEdu?</h3>
                <p class="text-black fs-14 fw-600">Welcome to ConsultantEdu – Your one-stop education consulting platform!</p>
                <p class="text-black fs-14 fw-500">ConsultantEdu is a dynamic platform to connect passionate academic experts with individuals,
                    institutions, and businesses seeking tailored education solutions. We believe that education has the
                    power to shape the world, and our goal is to facilitate this transformation by offering a range of services
                    that elevate learning experiences. So, we've built a special place where academic experts meet people
                    who want high-quality educational services.
                    </p>
                <button class="  text-white fs-16 btn btn-primary  px-3 py-2">Join scholarship</button>
            </div>
            <div class="col-lg-6  py-2 px-5">
                <img src="{{my_asset('review-banner.jpeg')}}" class="w-100 h-100 rounded-2" alt="">
            </div>
        </div>
    </div>

    {{-- We offer a range of services to help you with various education needs --}}
    <div class="my-5 mx-auto">
        <h4>We offer a range of services to help you with various education needs:</h4>
        <ul class="mt-3">
            <li class=" p-0 mt-0" style="font-size: 18px">
                <p class="col-11 mb-0 fw-700 fs-16 text-black">Course Accreditations
                    <span class="mb-0 fw-500 fs-16 text-black"> - If you're seeking official       recognition for your courses, our accreditation
                        experts will expertly guide you through the process, ensuring your courses meet the highest
                        standards.
                    </span>
                </p>
            </li>
            <li class=" p-0 mt-1" style="font-size: 18px">
                <p class="col-11 mb-0 fw-700 fs-16 text-black">Curriculum Development
                    <span class="mb-0 fw-500 fs-16 text-black">t - Crafting engaging lessons and plans can be challenging. Our
                        experts are great at designing plans that not only help you learn but also make learning
                        exciting.
                    </span>
                </p>
            </li>
            <li class=" p-0 mt-1" style="font-size: 18px">
                <p class="col-11 mb-0 fw-700 fs-16 text-black">Learning Management Systems (LMS)
                    <span class="mb-0 fw-500 fs-16 text-black">- In a world shaped by technology, Learning
                        Management Systems play a pivotal role in reshaping the way we learn. Our LMS experts can
                        help you choose and set up these systems to make learning online easier.
                    </span>
                </p>
            </li>
            <li class=" p-0 mt-1" style="font-size: 18px">
                <p class="col-11 mb-0 fw-700 fs-16 text-black">Writing and Editing
                    <span class="mb-0 fw-500 fs-16 text-black"> - Words are powerful in education. Our Writing and Editing experts can
                        conduct an in-depth editing & review of your article, manuscript, thesis, to ensure your writing
                        is of the highest academic standards in your field.
                    </span>
                </p>
            </li>
            <li class=" p-0 mt-1" style="font-size: 18px">
                <p class="col-11 mb-0 fw-700 fs-16 text-black">Research and Analysis
                    <span class="mb-0 fw-500 fs-16 text-black">- When we make decisions, we want them to be based on good
                        information. Our experts can help you gather data and analyse it, to achieve better
                        publications, grants, and research outcomes with ConsultantEdu's interactive seminars and
                        expert advice.

                    </span>
                </p>
            </li>
            <li class=" p-0 mt-1" style="font-size: 18px">
                <p class="col-11 mb-0 fw-700 fs-16 text-black">Transcription and Translation
                    <span class="mb-0 fw-500 fs-16 text-black">- Sometimes, we need to understand things in different
                        languages. Our Transcription and Translation services help make educational content available
                        in many languages, so more people can learn.
                    </span>
                </p>
            </li>
            <li class=" p-0 mt-0" style="font-size: 18px">
                <p class="col-11 mb-0 fw-700 fs-16 text-black">Scholarship Applications
                    <span class="mb-0 fw-500 fs-16 text-black">- Education should be available to everyone, and that's why we're
                        here to help with Scholarship Applications. Our experts can review your application and
                        provide valuable feedback to ensure you submit a competitive application.
                    </span>
                </p>
            </li>
            <li class=" p-0 mt-0" style="font-size: 18px">
                <p class="col-11 mb-0 fw-700 fs-16 text-black">Mentoring and Tutoring
                    <span class="mb-0 fw-500 fs-16 text-black">- Personalised support is really helpful for learning. With our
                        Mentoring and Tutoring services, you can get one-on-one help that boosts your skills and helps
                        you do better in your studies and career
                    </span>
                </p>
            </li>

        </ul>
    </div>

    {{-- our principles --}}
    <div class="my-5 ">
        <div class="">
            <button class="btn btn-primary text-white mx-auto rounded-0 d-flex justify-content-center" href="#">Our Principles</button>
            <div class="row mt-3 ">
                <div class="col-lg-6 col-md-6 col-12 pr-1">
                    <button class="btn btn-primary text-white w-100 rounded-0" style="padding: 10px 30px" href="#">Islamic values and ethics</button>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pl-1 ">
                    <button class="btn btn-primary text-white w-100 rounded-0" style="padding: 10px 30px" href="#">Academic excellence</button>
                </div>
            </div>
            <div class="row mt-1 ">
                <div class="col-lg-6 col-md-6 col-12 pr-1">
                    <button class="btn btn-primary text-white w-100 rounded-0" style="padding: 10px 30px" href="#">Research and scholarship</button>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pl-1 ">
                    <button class="btn btn-primary text-white w-100 rounded-0" style="padding: 10px 30px" href="#">Diversity and inclusivi</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
