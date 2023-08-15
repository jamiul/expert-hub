@extends('frontend.default.layouts.app')
<link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/why-freelancerEdu.css')}}">

@section('content')
<div class="whyFreeEdu-container-main">
    <div class=" rounded-md my-2 py-3 " style="background: #F2F7F2;">
        <div class="row py-2 mx-4">
            <div class="col-lg-12 mt-4 px-5 review-banner-main">
                <h1 class="explore-find-oppor-title text-success fw-700">About ConsultantEdu</h1>
                <p class="text-black fs-16 fw-500">ConsultantEdu is a dynamic platform to connect passionate academic experts with individuals,
                    institutions, and businesses seeking tailored education solutions. We believe that education has the
                    power to shape the world, and our goal is to facilitate this transformation by offering a range of services
                    that elevate learning experiences. So, we've built a special place where academic experts meet people
                    who want high-quality educational services.
                    </p>
            </div>
        </div>
            {{-- ConsultantEdu services--}}
            <div class=" " style="width: 80% ;margin:40px 10%; ">
                <div class="">

                    <h1 class="btn btn-primary explore-find-oppor-title w-50 text-white mx-auto rounded-0 d-flex justify-content-center py-3 px-5 " href="#">ConsultantEdu Services</h1>
                    <div class="row mt-3 ">
                        <div class="col-lg-6 col-md-6 col-12 pr-1">
                            <button class="btn btn-primary text-white w-100 rounded-0" style="padding: 15px 30px" href="#"  onclick="scrollToSection('consultantsSection')">
                                <img src="{{my_asset('assets/frontend/default/img/whyScholarship/book.png')}}" alt="">
                                <p class="mb-0 fs-16">
                                    Course Accreditations
                                </p>
                            </button>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 pl-1 ">
                            <button class="btn btn-primary text-white w-100 rounded-0" style="padding: 15px 30px" href="#" onclick="scrollToSection('clientSection')">
                                <img src="{{my_asset('assets/frontend/default/img/whyScholarship/book.png')}}" alt=""  >
                                <p class="mb-0 fs-16">
                                    Curriculum Development
                                </p>

                            </button>
                        </div>
                    </div>
                    <div class="row mt-1 ">
                        <div class="col-lg-6 col-md-6 col-12 pr-1">
                            <button class="btn btn-primary text-white w-100 rounded-0" style="padding: 15px 30px" href="#" onclick="scrollToSection('reviewSection')">
                                <img src="{{my_asset('assets/frontend/default/img/whyScholarship/book.png')}}" alt=""  >
                                <p class="mb-0 fs-16">
                                    Learning Management Systems (LMS)
                                </p>

                            </button>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 pl-1 ">

                            <button class="btn btn-primary text-white w-100 rounded-0" style="padding: 15px 30px" href="#"  onclick="scrollToSection('FAQs')">
                                <img src="{{my_asset('assets/frontend/default/img/whyScholarship/book.png')}}" alt="">
                                <p class="mb-0 fs-16">
                                    Writing and Editing
                                </p>
                            </button>
                        </div>
                    </div>
                    <div class="row mt-1 ">
                        <div class="col-lg-6 col-md-6 col-12 pr-1">
                            <button class="btn btn-primary text-white w-100 rounded-0" style="padding: 15px 30px" href="#" onclick="scrollToSection('reviewSection')">
                                <img src="{{my_asset('assets/frontend/default/img/whyScholarship/book.png')}}" alt=""  >
                                <p class="mb-0 fs-16">
                                    Research and Analysis
                                </p>

                            </button>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 pl-1 ">

                            <button class="btn btn-primary text-white w-100 rounded-0" style="padding: 15px 30px" href="#"  onclick="scrollToSection('FAQs')">
                                <img src="{{my_asset('assets/frontend/default/img/whyScholarship/book.png')}}" alt="">
                                <p class="mb-0 fs-16">
                                    Transcription and Translation
                                </p>
                            </button>
                        </div>
                    </div>
                    <div class="row mt-1 ">
                        <div class="col-lg-6 col-md-6 col-12 pr-1">
                            <button class="btn btn-primary text-white w-100 rounded-0" style="padding: 15px 30px" href="#" onclick="scrollToSection('reviewSection')">
                                <img src="{{my_asset('assets/frontend/default/img/whyScholarship/book.png')}}" alt=""  >
                                <p class="mb-0 fs-16">
                                    Scholarship Applications
                                </p>

                            </button>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 pl-1 ">

                            <button class="btn btn-primary text-white w-100 rounded-0" style="padding: 15px 30px" href="#"  onclick="scrollToSection('FAQs')">
                                <img src="{{my_asset('assets/frontend/default/img/whyScholarship/book.png')}}" alt="">
                                <p class="mb-0 fs-16">
                                    Mentoring and Tutoring
                                </p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
                {{-- We offer a range of services to help you with various education needs --}}
            <div class="my-5 mx-5">
                {{-- <h1 class="explore-find-oppor-title text-success ">We offer a range of services to help you with various education needs:</h1> --}}
                <ul class="mt-3">
                    <li class=" p-0 mt-0" style="font-size: 18px">
                        <p class="col-11 mb-0 fw-600 fs-20 text-black">Course Accreditations
                            <span class="mb-0 fw-500 fs-16 text-black"> - If you're seeking official       recognition for your courses, our accreditation
                                experts will expertly guide you through the process, ensuring your courses meet the highest
                                standards.
                            </span>
                        </p>
                    </li>
                    <li class=" p-0 mt-2" style="font-size: 18px">
                        <p class="col-11 mb-0 fw-600 fs-20 text-black">Curriculum Development
                            <span class="mb-0 fw-500 fs-18 text-black"> - Crafting engaging lessons and plans can be challenging. Our
                                experts are great at designing plans that not only help you learn but also make learning
                                exciting.
                            </span>
                        </p>
                    </li>
                    <li class=" p-0 mt-2" style="font-size: 18px">
                        <p class="col-11 mb-0 fw-600 fs-20 text-black">Learning Management Systems (LMS)
                            <span class="mb-0 fw-500 fs-18 text-black">- In a world shaped by technology, Learning
                                Management Systems play a pivotal role in reshaping the way we learn. Our LMS experts can
                                help you choose and set up these systems to make learning online easier.
                            </span>
                        </p>
                    </li>
                    <li class=" p-0 mt-2" style="font-size: 18px">
                        <p class="col-11 mb-0 fw-600 fs-20 text-black">Writing and Editing
                            <span class="mb-0 fw-500 fs-18 text-black"> - Words are powerful in education. Our Writing and Editing experts can
                                conduct an in-depth editing & review of your article, manuscript, thesis, to ensure your writing
                                is of the highest academic standards in your field.
                            </span>
                        </p>
                    </li>
                    <li class=" p-0 mt-2" style="font-size: 18px">
                        <p class="col-11 mb-0 fw-600 fs-20 text-black">Research and Analysis
                            <span class="mb-0 fw-500 fs-18 text-black">- When we make decisions, we want them to be based on good
                                information. Our experts can help you gather data and analyse it, to achieve better
                                publications, grants, and research outcomes with ConsultantEdu's interactive seminars and
                                expert advice.

                            </span>
                        </p>
                    </li>
                    <li class=" p-0 mt-2" style="font-size: 18px">
                        <p class="col-11 mb-0 fw-600 fs-20 text-black">Transcription and Translation
                            <span class="mb-0 fw-500 fs-18 text-black">- Sometimes, we need to understand things in different
                                languages. Our Transcription and Translation services help make educational content available
                                in many languages, so more people can learn.
                            </span>
                        </p>
                    </li>
                    <li class=" p-0 mt-2" style="font-size: 18px">
                        <p class="col-11 mb-0 fw-600 fs-20 text-black">Scholarship Applications
                            <span class="mb-0 fw-500 fs-18 text-black">- Education should be available to everyone, and that's why we're
                                here to help with Scholarship Applications. Our experts can review your application and
                                provide valuable feedback to ensure you submit a competitive application.
                            </span>
                        </p>
                    </li>
                    <li class=" p-0 mt-2" style="font-size: 18px">
                        <p class="col-11 mb-0 fw-600 fs-20 text-black">Mentoring and Tutoring
                            <span class="mb-0 fw-500 fs-18 text-black">- Personalised support is really helpful for learning. With our
                                Mentoring and Tutoring services, you can get one-on-one help that boosts your skills and helps
                                you do better in your studies and career
                            </span>
                        </p>
                    </li>

                </ul>
            </div>
    </div>


    <div class="border-top pb-2 mt-3 " style="background-color:#275846; width:80%; margin:0 10%;">
        <div class="mt-4 pb-2">
          <div class="">
            <div class="">
              <div class=" content-title  text-center pb-2 pt-0">
                <h2 class="fw-700 fs-36 text-white mb-3 pt-0 mt-0">How consultantEdu works</h2>
                <h5 class="text-center text-white">It can be hard to know where to start. That's why we're here to guide
                  you.
                </h5>
              </div>
              <div class="row need-help-section px-1">
                <div class="col-xl-3 col-md-6">
                  <div class=" ">
                    <div class=" h-136px align-items-center">
                      <div class="d-flex">
                        <img class=" mb-2 mx-auto d-block   p-3" src=" {{url('/public/assets/home/post.png')}}"
                          alt="Image" style="width:55px; border-radius:50%; border:1px solid #fff" />
                        <div class="need-help-section-bar"></div>
                      </div>
                      <p class="fs-22 fw-700 mb-lg-2 mt-3 consultant-category text-center text-white"> Consultants

                      </p>
                    </div>

                    <h6 class="fs-18 mt-3  text-white text-center">
                         find the right work for you
                    </h6>
                  </div>

                </div>
                <div class="col-xl-3 col-md-6">
                  <div class=" ">
                    <div class=" h-136px align-items-center">
                      <!-- <div class="d-flex">
                                      <img class=" mb-2 mx-auto d-block text-black  p-3" src=" {{url('/public/assets/home/quiz1.png')}}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #000000; " />
                                      <div class="need-help-progress-bar"></div>
                                  </div> -->
                      <div class="d-flex">
                        <img class="mb-2 mx-auto d-block text-black p-3" src="{{url('/public/assets/home/quiz.png')}}"
                          alt="Image" style="width:55px; border-radius:50%; border:1px solid #fff;" />
                        <div class="need-help-section-bar"></div>
                      </div>
                      <p class="fs-22 fw-700 mb-lg-2 mt-3 consultant-category text-center text-white"> Clients
                      </p>
                    </div>
                    <h6 class="fs-18 mt-3  text-white text-center">
                        find the best consultant for you
                    </h6>
                  </div>

                </div>
                <div class="col-xl-3 col-md-6">
                  <div class=" ">
                    <div class=" h-136px align-items-center">
                      <div class="d-flex">
                        <img class=" mb-2 mx-auto d-block
                                       p-3" src=" {{url('/public/assets/home/enroll.png')}}" alt="Image"
                          style="width:55px; border-radius:50%; border:1px solid #fff" />
                        <div class="need-help-section-bar"></div>
                      </div>
                      <p class="fs-22 fw-700 mb-lg-2 mt-3 consultant-category text-center text-white">Payment Securely

                      </p>
                    </div>
                    <h6 class="fs-18 mt-3  text-white text-center">
                      Simplified online enrolment to give
                    </h6>
                  </div>

                </div>
                <div class="col-xl-3 col-md-6">
                  <div class=" ">
                    <div class=" h-136px align-items-center">
                      <img class=" mb-2 mx-auto d-block p-3" src=" {{url('/public/assets/home/check.png')}}" alt="Image"
                        style="width:55px; border-radius:50%; border:1px solid #fff" />
                      <p class="fs-22 mt-3 fw-700 mb-lg-2 consultant-category text-center text-white">Reviews
                      </p>
                    </div>
                    <h6 class="fs-18 mt-3 text-white text-center">
                      Get started on your study journey.
                    </h6>
                  </div>

                </div>

              </div>
              <div class=" text-center py-3">
                <a href="{{ url('/register')}}" class=" btn rounded border text-white fs-18"
                  style="background-color:#275846;">
                  Let's get started
                </a>

              </div>
            </div>
          </div>
        </div>
    </div>



    {{-- Consultants – find the right work for you --}}
    <div class="mb-5 mx-5" id="consultantsSection" style="margin-top:80px;">
        <h1 class="explore-find-oppor-title text-success fw-700">{{translate('Consultants – find the right work for you')}}</h1>

        <div class="mt-5 mb-5">

            <div class="row mt-4 ">
                <div class="col-lg-3 col-sm-12 pr-0">
                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px" style="background: #91E6B3; ">
                        <img class="mx-auto d-block w-50" src="{{my_asset('Post-A-Job.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 my-auto pl-0">
                    <h1 class=" whyConsEdu-child-title ">{{translate('Create your profile (it’s free)')}}</h1>
                    <p class="how-work-details  mt-2">{{translate('An eye-catching title and client-focused overview help us match you to the work you want. Include your work history, your skills, and your photo. Add more, like an introduction video, to create a profile that really stands out.')}}</p>
                </div>
            </div>
            <div class="row mt-4 ">
                <div class="col-lg-3 col-sm-12 pr-0">
                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px" style="background: #91E6B3; ">
                        <img class="mx-auto d-block w-50" src="{{my_asset('How_it_Works.png')}}" alt="" >
                    </div>

                </div>
                <div class="col-lg-9 col-sm-12 pl-0 my-auto">
                    <h1 class="whyConsEdu-child-title">{{translate('Explore ways to earn')}}</h1>
                    <p class="how-work-details mt-2">{{translate('Work and earn in different ways. Bid for jobs. Pitch your projects. Discuss your in-demand skills with our recruiters so they can find opportunities aligned with your passions and career goals. Do all three. Create a predictable pipeline and build your network')}}</p>
                    <a class="text-primary fs-16 pt-2 c-pointer">
                        <img src="{{my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/down-arrow.png')}}" alt="">
                        <u class="pt-3">{{translate('See ways to earn')}}</u></a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3 col-sm-12 pr-0 ">
                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px" style="background: #91E6B3; ">
                        <img class="mx-auto d-block w-50" src="{{my_asset('How_it_Works_2.png')}}" alt="">
                    </div>

                </div>
                <div class="col-lg-9 col-sm-12 my-auto pl-0">
                    <h1 class="whyConsEdu-child-title">{{translate('Get paid securely')}}</h1>
                    <p class="how-work-details  mt-2">{{translate('Choose how you get paid. Our fixed-price protection releases client payments at project milestones. Hourly protection bills clients every week. However you work, our service fees are the same. Spend less time chasing, more earning.')}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="my-5 border-bottom pb-5 mx-5" id="clientSection">

        <div class="row ">
            <div class="col-lg-5 col-sm-12 ">
                <h4 class="whyConsEdu-child-title">{{translate('Let the work find you')}}</h4>
                <p class="explore-find-oppor-details">{{translate('Does your work stand out? Are your skills in demand? If you’re in development, design, or marketing, you can apply to our fast lane. Our recruiters will assess your hard-earned experience and match you to exclusive opportunities with trusted clients.')}}</p>
                <button class=" text-white fs-16 btn btn-primary px-3 py-2 mt-4">{{translate('Apply to Join')}}</button>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-sm-12 my-auto ">
                <img class="card-img-top blog-img" src="{{my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/message.svg')}}" alt="Card image cap">

            </div>
        </div>
    </div>


        {{-- Clients – find the best consultant for you --}}
        <div class="my-5 mx-5">
            <h1 class="explore-find-oppor-title text-success fw-700">Clients – find the best consultant for you
            </h1>
            <div class="">
                <h1 class="whyConsEdu-child-title ">Let’s get to work</h1>
                <p class="hth-lets-work-text w-sm-90">Build relationships and create your own Virtual Talent Bench™ for quick
                  project turnarounds or big transformations.</p>
                <div class="border-bottom border-gray mt-3"></div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-lg-6 col-sm-12 ">
                  <img class="rounded-1 w-100"
                    src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/postJob.jpg')}}" alt="" height="300" >
                </div>
                {{-- <div class="col-lg-1"></div> --}}
                <div class="col-lg-6 col-sm-12 mt-2">
                  <h1 class="whyConsEdu-child-title">Post a job and hire a pro</h1>
                  <h3 class="get-work-child-text fs-18 fw-500">Connect with talent that gets you with Talent Marketplace</h3>
                  <p class="get-work-child-details mb-3">Post your job on the world’s work marketplace and wait for the
                    proposals to flood in from talented people around the world.</p>
                  <p class="get-work-child-details">Our advanced algorithms help you shortlist candidates who are the best fit.
                    And you can check profiles, portfolios, and reviews before you give someone the green light.</p>
                  <button class="border-0  text-white fs-16  btn btn-primary px-3 py-2 mt-3">Find talent</button>
                </div>
            </div>
             {{-- The seal of approval --}}
                <div class="">
                    <h1 class="whyConsEdu-child-title">The seal of approval</h1>
                    <div class=" border-bottom mt-3"></div>
                    <div class="row mt-3">
                    <div class="col-lg-6 col-12">
                        <p class="approvalHead">You’ll have plenty of help choosing the right person for the job. And no matter who
                        you’re hiring you can:</p>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="approvalCheckMark">
                        <div class="d-flex mb-2 approvalCheckMark">
                            <img class="mr-3" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/check.png')}}"
                            alt="">
                            <p>Browse similar projects they’ve worked on</p>
                        </div>
                        <div class="d-flex mb-2 approvalCheckMark">
                            <img class="mr-3" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/check.png')}}"
                            alt="">
                            <p>Directly access proven talent without unnecessary layers</p>
                        </div>
                        <div class="d-flex mb-2 approvalCheckMark">
                            <img class="mr-3" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/check.png')}}"
                            alt="">
                            <p>Check their portfolio</p>
                        </div>
                        <div class="d-flex mb-2 approvalCheckMark">
                            <img class="mr-3" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/check.png')}}"
                            alt="">
                            <p>Check qualifications</p>
                        </div>
                        <div class="d-flex  approvalCheckMark">
                            <img class="mr-3" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/check.png')}}"
                            alt="">
                            <p>Run a chat or video interview</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            {{-- You’re safe with us --}}
            <div class="mt-5 border-bottom">
                <div class="row mt-5 mb-5">
                    <div class="col-lg-6 col-sm-12 ">
                        <div>
                        <h1 class="whyConsEdu-child-title ">You’re safe with us</h1>
                        <h3 class="hth-safe-text fs-16">You get what you pay for. And we can prove it.</h3>
                        <p class="text-black fw-bold mb-4 fs-18">On hourly contracts, <span class="text-muted">we count keystrokes and
                            take random screenshots of your freelancer’s screen so you can see they’re putting in the time.</span></p>

                        <p class="text-black fw-bold mt-4 fs-18">On fixed-price contracts,<span class="text-muted">you agree on
                            milestones and only pay up when those milestones are hit.</span> </p>
                        </div>
                        <div class="mt-4">
                        <h1 class="whyConsEdu-child-title ">All in one place</h1>
                        <h3 class="hth-place-text fs-16 ">Once you sign in you’ll get your own online space to manage your project.</h3>
                        <p class="text-muted fs-18">Use it to securely send and receive files, give real-time feedback and make
                            payments. And if you’re out and about a lot, you’ll want to download the app too.</p>
                        </div>

                    </div>
                    <div class="col-lg-1 "></div>
                    <div class="col-lg-5 col-sm-12 ">
                        <img class=" rounded-right w-100"
                        src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/safe-with-us.jpg')}}" alt=""
                        height="400" >
                    </div>


                </div>
            </div>
        </div>

        <!-- How payments work -->
        <div class="border-bottom mx-5" style="margin-top: 100px;">
            <div class="row mt-5 mb-5">
                <div class="col-lg-5 col-sm-12 mr-5">
                    <img class="w-100 payments-img " src="{{my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/payments.jpg')}}" alt="" >
                </div>

                <div class="col-lg-5 col-sm-12 mt-0 ml-5">
                    <div>
                        <h1 class="payment-work-main-title text-success">{{translate('How payments work')}}</h1>
                        <p class="payment-work-main-details">{{translate('Whether you’re paid hourly or on a fixed-price contract, all the work you complete comes with payment protection.')}}</p>
                        <div class="mt-4">
                            <p class="payment-work-child-title ">{{translate('All in one place')}}</p>
                            <p class="payment-work-child-details">{{translate('Invoice clients and track your earnings on Upwork for a simple and streamlined process.')}}</p>
                        </div>
                        <div class="mt-4">
                            <p class="payment-work-child-title ">{{translate('Choose how you get paid')}}</p>
                            <p class="payment-work-child-details">{{translate('Use what works best for you—including direct deposit, PayPal, Payoneer, wire transfer, and more..')}}</p>
                        </div>
                        <div class="mt-4">
                            <p class="payment-work-child-title ">{{translate('No fees until you complete your work')}}</p>
                            <p class="payment-work-child-details">{{translate("Our service fees are taken as a percentage of your earnings. We charge you based on lifetime earnings with each client:")}}</p>

                            <ul class="payment-work-child-details">
                                <li class="payment-work-child-details-percent ">{{translate('20% for the first $500 you bill your client')}}</li>
                                <li class="payment-work-child-details-percent ">{{translate("10% for total billings between $500.01 and $10,000")}}</li>
                                <li class="payment-work-child-details-percent ">{{translate("5% for total billings over $10,000")}}</li>
                            </ul>
                        </div>
                    </div>
                    <a class="learn-service" style="color:#554C9C" href="">{{translate("Learn more about service fees.")}}</a>

                </div>
            </div>
        </div>

    {{-- Reviews – how reviews work on ConsultantEdu --}}
    <div class="my-5 mx-5 border-bottom pb-5" id="reviewSection">
        <h1 class="explore-find-oppor-title text-success fw-700">{{translate('Reviews – how reviews work on ConsultantEdu')}}</h1>
       <div class="row">
        <div class="col-lg-6 col-sm-12">
             {{-- Consultants - Getting reviews on ConsultantEdu --}}
            <div class="mt-2">
                <p class="whyConsEdu-child-title">Consultants - Getting reviews on ConsultantEdu
                </p>
                <p class="mt-2 fs-14 fw-600">A 14-day feedback period opens at the end of a     contract where both the client and consultant can
                    leave each other a review. The client is asked to give a review as part of ending the contract and most
                    clients do.
                </p>
            </div>
            {{-- Clients - Leaving a review on ConsultantEdu --}}
            <div class="mt-2">
                <p class="whyConsEdu-child-title">Clients - Leaving a review on ConsultantEdu
                </p>
                <p class="mt-2 fs-14 fw-600">During the 14-day feedback period at the end of a contract, the client will be asked to leave a review
                    while ending the contract. As the consultant, you can also leave a review for the client by looking at
                    your end of the contract. The review will be public once both of you leave one for each other or the
                    14-day period ends.
                </p>

            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 col-sm-12">
            <img class="w-100" height="300" src="{{my_asset('assets/frontend/default/img/whyScholarship/review.jpeg')}}" alt="">
        </div>
       </div>

       <p class="whyConsEdu-child-title">Example</p>

        <div class="mx-auto fre-review-say-customer" style="width: 80%;margin:0 10%">

            <div class="border border border-white rounded-2 p-3 my-2">
                <p class="fw-600 fs-20 ">Stephen <span class="text-muted fw-600 ">and</span> Amiya <span class="text-muted">worked together through</span> Talent Marketplace</p>
                <div class="mt-3 ">
                    <span class="text-muted fs-16 mb-3">Client</span>
                    <h4 class="fre-review-say-customer-review mt-2">Stephen is a seasoned trademark attorney who is very clear in his approach. Swift, knowledgeable, to the point, sticks to the schedules and reliable when it comes to Trademark Office Action responses. Highly Recommended !</h4>
                    <p class="fw-600 fs-16">Amiya D. <span class="text-muted">
                            India</span> </p>
                </div>
                <div class="mt-3">
                    <span class="text-muted fs-16 mb-3">Talent
                    </span>
                    <h4 class="mt-2 fre-review-say-customer-review">Amiya was a great client. Clear deliverable and fast at responding. I look forward to working together in the future and I was happy to solve his problems.
                    </h4>
                    <p class="fw-600 fs-16">Stephen P.
                        <span class="text-muted"> United States</span>
                    </p>
                </div>
            </div>
            <div class="border border border-white rounded-2 p-3 my-2">
                <p class="fw-600 fs-2 0 ">Stephen <span class="text-muted fw-600 ">and</span> Amiya <span class="text-muted">worked together through</span> Talent Marketplace</p>
                <div class="mt-3 ">
                    <span class="text-muted fs-16 mb-3">Client</span>
                    <h4 class="fre-review-say-customer-review mt-2">Stephen is a seasoned trademark attorney who is very clear in his approach. Swift, knowledgeable, to the point, sticks to the schedules and reliable when it comes to Trademark Office Action responses. Highly Recommended !</h4>
                    <p class="fw-600 fs-16">Amiya D. <span class="text-muted">
                            India</span> </p>
                    <p class=" bg-gray rounded-2 p-2">Legal</p>
                </div>
                <div class="mt-3">
                    <span class="text-muted fs-16 mb-3">Talent
                    </span>
                    <h4 class="mt-2 fre-review-say-customer-review">Amiya was a great client. Clear deliverable and fast at responding. I look forward to working together in the future and I was happy to solve his problems.
                    </h4>
                    <p class="fw-600 fs-16">Stephen P.
                        <span class="text-muted"> United States</span>
                    </p>
                    <p class=" bg-gray rounded-2 p-2">Legal</p>
                </div>
            </div>
            <div class="border border border-white rounded-2 p-3 my-2">
                <p class="fw-600 fs-20 ">Stephen <span class="text-muted fw-600 ">and</span> Amiya <span class="text-muted">worked together through</span> Talent Marketplace</p>
                <div class="mt-3 ">
                    <span class="text-muted fs-16 mb-3">Client</span>
                    <h4 class="fre-review-say-customer-review mt-2">Stephen is a seasoned trademark attorney who is very clear in his approach. Swift, knowledgeable, to the point, sticks to the schedules and reliable when it comes to Trademark Office Action responses. Highly Recommended !</h4>
                    <p class="fw-600 fs-16">Amiya D. <span class="text-muted">
                            India</span> </p>
                </div>
                <div class="mt-3">
                    <span class="text-muted fs-16 mb-3">Talent
                    </span>
                    <h4 class="mt-2 fre-review-say-customer-review">Amiya was a great client. Clear deliverable and fast at responding. I look forward to working together in the future and I was happy to solve his problems.
                    </h4>
                    <p class="fw-600 fs-16">Stephen P.
                        <span class="text-muted"> United States</span>
                    </p>
                    <p class=" bg-gray rounded-2 p-2">Legal</p>
                </div>
            </div>
        </div>
        {{-- Contesting a review on ConsultantEdu --}}
        <div class="mt-5" >
            <h1 class="whyConsEdu-child-title">Contesting a review on ConsultantEdu</h1>
            <p class="fs-14 fw-600">There’s a few ways to change how your review appears on ConsultantEdu starting with responding to
                a review. Within 28 days of the end of the contract, you can post a follow-up comment to a review
                about you that will show up on your public profile. You can also work directly with your client or
                talent to enable feedback changes and revise the review. If you feel the review violates
                ConsultantEdu’s terms of service and you would like to dispute a review, ConsultantEdu’s customer
                service team is there to help.</p>
        </div>
        {{-- Checking your reviews on ConsultantEdu --}}
        <div class="mt-1">
            <h1 class="whyConsEdu-child-title">Checking your reviews on ConsultantEdu</h1>
            <p class="fs-14 fw-600">Seeing your reviews is easy on ConsultantEdu, simply visit your profile and all your public reviews will
                be there. If your contract just ended, it can take up to 14 days for your review to become public. You
                can also find your feedback for specific contracts in your contracts dashboard.</p>
        </div>
    </div>

        {{-- FAQS --}}
        <div class="my-5 mx-5" id="FAQs">
            <h1 class="explore-find-oppor-title text-success fw-700">FAQS</h1>

            <ul class="nav " id="myTab" role="tablist">
                <li class="nav-item faqs">
                    <a class=" active fs-20 mr-2  pr-2 faqs-consultant " style="border-right:2px solid; color:black !important; black" id="for-consultants" data-toggle="tab" href="#consultant" role="tab" aria-controls="consultant" aria-selected="true">For Consultants</a>
                </li>
                <li class="nav-item faqs">
                    <a class=" fs-20 mr-2  pr-2 " id="for-client" data-toggle="tab" href="#client"   style=" color:black !important; black"  role="tab" aria-controls="client" aria-selected="false"> For Clients </a>
                </li>
                {{-- <li class="nav-item">
                    <a class=" fs-16 mr-2  pr-2" id="other-queries" data-toggle="tab"  style="color:black !important; black" href="#queries" role="tab" aria-controls="queries" aria-selected="false"> Other queries </a>
                </li> --}}
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active mt-2" id="consultant" role="tabpanel" aria-labelledby="for-consultants">
                     <!-- Frequently asked questions -->
                    <div class=" rounded-2" style="background: #F2F7F2;">
                        <div class="mx-2 row">
                            <div class="col-lg-6 col-sm-12 py-3">
                                <h1 class="frequently-qsn-main-title">
                                    Frequently asked questions
                                </h1>
                            </div>
                            <div class="col-lg-6 col-sm-12 py-3">

                                <div class=" border-bottom my-2">
                                    <input type="checkbox" id="fre-leave">
                                    <h4 class="frequently-qsn-title">Is Upwork free to join as a freelancer?</h4>
                                    <p class="frequently-qsn-details">
                                        Yes, it’s free to join Upwork, complete your profile, search for work and create your own projects. Our service fee is based on your earnings with each client and the sliding scale rewards long-term relationships.
                                    </p>
                                    <div class="fre-content">
                                        <p>
                                            You can upgrade to Freelancer Plus to more effectively market your services, submit proposals and stand out from the crowd.
                                        </p>
                                        <label class="fre-expand-icon" for="fre-leave">Show less <img class="w-15px h-15px arrow-icon " src="{{my_asset('upload.png')}}" alt=""></label>
                                    </div>
                                    <label class="fre-expand-icon" for="fre-leave">Read more <img class="w-15px h-15px arrow-icon " src="{{my_asset('down-chevron.png')}}" alt=""> </label>

                                </div>
                                <div class=" border-bottom">
                                    <input type="checkbox" id="fre-contest">
                                    <h4 class="frequently-qsn-title">Can I grow my career on Upwork?</h4>
                                    <p class="frequently-qsn-details">
                                        Yes, some of our most successful professionals have brought their strong background and employment track record to Upwork. We know you may be new to freelancing but highly experienced in your field. Our
                                    </p>
                                    <div class="fre-content">
                                        <p>
                                            complete guide shares our step-by-step tips for building your freelance career.
                                        </p>
                                        <label class="fre-expand-icon" for="fre-contest">Show less <img class="w-15px h-15px arrow-icon " src="{{my_asset('upload.png')}}" alt=""></label>
                                    </div>

                                    <label class="fre-expand-icon" for="fre-contest">Read more <img class="w-15px h-15px arrow-icon " src="{{my_asset('down-chevron.png')}}" alt=""></label>
                                </div>
                                <div class=" border-bottom ">
                                    <input type="checkbox" id="fre-freelancing">
                                    <h4 class="frequently-qsn-details ">What can I gain from freelancing with Upwork?</h4>
                                    <p class="frequently-qsn-details">
                                        work with great clients and well-known brands. Many choose Upwork because we help them do it well. How to Succeed as a Freelancer gives you a taste of the support we offer to boost your success.
                                    </p>
                                    <div class="fre-content ">
                                        <p>
                                            work with great clients and well-known brands. Many choose Upwork because we help them do it well. How to Succeed as a Freelancer gives you a taste of the support we offer to boost your success.
                                        </p>
                                        <label class="fre-expand-icon" for="fre-freelancing">Show less <img class="w-15px h-15px arrow-icon " src="{{my_asset('upload.png')}}" alt=""></label>
                                    </div>
                                    <label class="fre-expand-icon" for="fre-freelancing">Read more <img class="w-15px h-15px arrow-icon " src="{{my_asset('down-chevron.png')}}" alt=""></label>
                                </div>
                                <div class=" border-bottom">
                                    <input type="checkbox" id="fre-buildingBusiness">
                                    <h4 class="frequently-qsn-title">Is Upwork good for building a business? </h4>
                                    <p class="frequently-qsn-details">
                                        Yes, and creating an agency can be a great way to grow. Using our agency structure, freelancers can collaborate as a single organization, delivering more to their clients. Moving from solo freelancer to agency
                                    </p>
                                    <div class="fre-content">
                                        <p>
                                            owner is a big transition, but it might be the right one for you.
                                        </p>
                                        <label class="fre-expand-icon" for="fre-buildingBusiness">Show less <img class="w-15px h-15px arrow-icon " src="{{my_asset('upload.png')}}" alt=""></label>
                                    </div>

                                    <label class="fre-expand-icon" for="fre-buildingBusiness">Read more <img class="w-15px h-15px arrow-icon " src="{{my_asset('down-chevron.png')}}" alt=""></label>
                                </div>
                                <div class=" border-bottom">
                                    <h4 class="frequently-qsn-title">What projects can I find on Upwork?</h4>
                                    <p class="frequently-qsn-details">
                                        Clients are looking for help across almost every industry, job, and skill set. Find the work you’re looking for, from specific projects to ongoing, long-term work, on fixed-price and hourly contracts.
                                    </p>
                                </div>
                                <div class=" border-bottom">
                                    <input type="checkbox" id="fre-Connects">
                                    <h4 class="frequently-qsn-title">What are Connects? </h4>
                                    <p class="frequently-qsn-details">
                                        Connects are Upwork’s virtual currency. Freelancers and agencies use them to show their genuine interest as they submit proposals. Different jobs require different amounts of Connects, some none at all.
                                    </p>
                                    <div class="fre-content">
                                        <p>
                                            Freelancer accounts receive free Connects every month. You can buy bundles of them. And freelancers and agencies earn Connects by winning client interviews, getting great reviews, and demonstrating their skills.
                                        </p>
                                        <label class="fre-expand-icon" for="fre-Connects">Show less <img class="w-15px h-15px arrow-icon " src="{{my_asset('upload.png')}}" alt=""></label>
                                    </div>

                                    <label class="fre-expand-icon" for="fre-Connects">Read more <img class="w-15px h-15px arrow-icon " src="{{my_asset('down-chevron.png')}}" alt=""></label>
                                </div>
                                <div class=" border-bottom">
                                    <input type="checkbox" id="fre-badges">
                                    <h4 class="frequently-qsn-title">What do the different badges mean? </h4>
                                    <p class="frequently-qsn-details">
                                        Our badges help you stand out. With a strong background in your field and early success with clients, you’ll soon be invited to meet our Rising Talent criteria. Keep building your reputation to earn our Top Rated
                                    </p>
                                    <div class="fre-content">
                                        <p>
                                            badge. Top Rated Plus shows you have a proven history of success on large and long-term contracts. And Expert Vetted means you’ve gone through our rigorous pre-screening to match your high-demand skills with the right clients. Get the feedback, wear the badge , hit your goals.
                                        </p>
                                        <label class="fre-expand-icon" for="fre-badges">Show less <img class="w-15px h-15px arrow-icon " src="{{my_asset('upload.png')}}" alt=""></label>
                                    </div>

                                    <label class="fre-expand-icon" for="fre-badges">Read more <img class="w-15px h-15px arrow-icon " src="{{my_asset('down-chevron.png')}}" alt=""></label>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade mt-2" id="client" role="tabpanel" aria-labelledby="for-client">
                   <!-- Frequently asked questions -->
                    <div class=" rounded-2" style="background: #F2F7F2;">
                        <div class="mx-2 row">
                        <div class="col-lg-6 col-sm-12 py-3">
                            <h1 class="frequently-qsn-main-title">
                            Frequently asked questions
                            </h1>
                        </div>
                        <div class="col-lg-6 col-sm-12 py-3">
                            <div class="">
                            <h4 class="frequently-qsn-title">What projects can I do on Scholarship australia?
                            </h4>
                            <p class="frequently-qsn-details">
                                Anything people generally do on a computer. Popular tasks are web, mobile and software development, design
                                work and copywriting, but you can also find lawyers, accountants and more.
                            </p>
                            <hr>
                            </div>
                            <div class="">
                            <h4 class="frequently-qsn-title">How does Scholarship australia make money?</h4>
                            <p class="frequently-qsn-details ">
                                We charge freelancers and agencies a 10% freelancer service fee on their earnings.
                            </p>
                            <hr>
                            </div>
                            <div class="  my-2">
                            <h4 class="frequently-qsn-title">What’s the Top Rated program?</h4>
                            <p class="frequently-qsn-details">
                                {{translate('It’s a badge of honor for talent who consistently do great work.')}}
                            </p>

                            </div>
                        </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="queries" role="tabpanel" aria-labelledby="other-queries">
                   <p class="text-center text-red fw-700 fs-16" style="color:red">Upcoming topic</p>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function scrollToSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    }
    </script>
@endsection
