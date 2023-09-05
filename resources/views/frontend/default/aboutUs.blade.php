@extends('frontend.default.layouts.app')
<link rel="stylesheet" href="{{ my_asset('/assets/frontend/default/css/aboutUs.css') }}">
<link rel="stylesheet" href="{{ my_asset('/assets/frontend/default/css/home.css') }}">

@section('content')
    <div class="container-main-projects-banner">
        <div class="p-lg-4 mb-4 mt-1" style="background:#275846">
            <div class="row rounded-0 px-lg-2 mx-lg-5 px-4">
                <div class="col-lg-7 col-12  w-100 my-auto">
                    <h3 class="text-white fw-700  frequently-qsn-title  ">Welcome to ConsultantEdu </h3>
                    <p class="text-white fs-18">Your one-stop academic freelancer platform where you can connect with
                        accessible academic experts, receive quick responses, and enjoy high-quality work to help you excel.
                    </p>
                    <a href="register?type=2" class="btn rounded border fs-20 frequently-qsn-title  text-white">Create
                        Profile</a>
                </div>
                <div class="col-lg-1 col-12 my-auto"></div>
                <div class="col-lg-4 col-12">
                    <img class="banner-img"
                        src="{{ my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="whyFreeEdu-container-main mb-5 " style="background-color:#F2F7F2">
        <section>
            @if (get_setting('featured_category_show') == 'on')
                <form id=" consultant-filter-form" action="" method="GET">
                    <section class="">
                        <div class="whyFreeEdu-container-main">

                            <div class="d-flex justify-content-between ">
                                <div class="w-lg-100 w-lg-100 lh-1-8 content-title ">
                                    <!-- <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2> -->
                                    <p class=" mt-5 text-success fw-700 frequently-qsn-title">About ConsultantEdu</p>
                                    <p class=" fw-500 seminar-objective-details">ConsultantEdu is a dynamic platform to
                                        connect
                                        passionate academic experts with individuals, institutions, and businesses seeking
                                        tailored education solutions. We believe that education has the power to shape the
                                        world, and our goal is to facilitate this transformation by offering a range of
                                        services that elevate learning experiences. So, we've built a unique hub where
                                        academic experts meet people who want high-quality educational services.
                                    </p>
                                    <p class=" fw-500 seminar-objective-details">Our comprehensive collection of services is
                                        meticulously designed to cater to
                                        diverse educational needs: Our Accreditation experts provide adept guidance through
                                        the course accreditation process, ensuring adherence to the highest standards for
                                        official course recognition. Crafting captivating lessons and curricula can be
                                        challenging—our Curriculum Development Experts excel in creating plans that not only
                                        facilitate learning but also infuse it with excitement. In an era shaped by
                                        technology, Learning Management Systems (LMS) play a pivotal role in reshaping
                                        education. Our LMS experts assist in selecting and configuring these systems to
                                        facilitate seamless online learning experiences.
                                        Words wield significant influence in education. </p>
                                    <p class=" fw-500 seminar-objective-details">
                                        Our Writing and Editing experts
                                        conduct comprehensive reviews to elevate your articles, manuscripts, and theses to
                                        the highest academic standards in your field. Informed decision-making hinges on
                                        accurate information. Our experts specialise in data collection and analysis,
                                        enhancing your research outcomes through interactive seminars and expert advice.
                                        Bridging language barriers, our Transcription and Translation services make
                                        educational content accessible to diverse linguistic audiences. Ensuring
                                        inclusivity, we offer Scholarship Application assistance, providing valuable
                                        feedback to enhance the competitiveness of your application. Personalised mentoring
                                        and tutoring empower your learning journey, equipping you with one-on-one guidance
                                        to excel in both your studies and career pursuits.</p>

                                    <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
                                </div>

                            </div>

                            <div class="row gutters-10 ">
                                @if (get_setting('featured_category_list') != null)
                                    @foreach (json_decode(get_setting('featured_category_list'), true) as $key => $category_id)
                                        @if (($category = \App\Models\ProjectCategory::find($category_id)) != null)
                                            <div class="col-md-6 col-lg-3 ">
                                                <div class="card" style="height:320px;">
                                                    <img class="w-100 h-170px" src=" {{ custom_asset($category->photo) }}"
                                                        alt="Image" />
                                                    <div class="card-body" style=" padding:13px;">

                                                        <a class=" featured_category text-dark" onclick="applyFilter()"
                                                            href="{{ route('freelancer.category', $category->id) }}">
                                                            <p class="fs-20 fw-600 " style="height:25px; line-height:23px;">
                                                                {{ $category->name }}
                                                            </p>
                                                        </a>

                                                        <div class="frequently-qsn-details text-normal "
                                                            style=" line-height:22px;">
                                                            {{ $category->description }}
                                                            <a href="{{ route('freelancer.category', $category->id) }}"
                                                                class="nav-toggle "style="color:#6560E6;">Find
                                                                Consultants</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </section>
                </form>
            @endif
        </section>
        <hr>
        <section class="">
            <div class="container-home">
                <div class="row ">
                    <div class="col-lg-5">
                        <img class="mr-2  img-fluid" src="{{ url('/public/assets/home/001.png') }}" alt="Image"
                            style="width:500px;" />
                    </div>
                    <div class=" col-lg-7 col-sm-12">
                        <h2 class="fw-700 mb-3 heading-title fre-small-font" style="">What makes
                            ConsultantEdu
                            impressive
                        </h2>
                        <div class="">
                            <div class="  ">

                                <div>
                                    <h6 class="fs-18  fw-700 heading-title">Access to Expertise
                                    </h6>
                                    <p class="fs-16">ConsultantEdu specialises in academic fields like course
                                        accreditation,
                                        curriculum development, LMS, research and analysis.</p>
                                </div>
                                <div>
                                </div>
                            </div>
                            <div class="">

                                <h6 class="fs-18 fw-700 heading-title">Project Flexibility
                                </h6>
                                <p class="fs-16 "> ConsultantEdu is ideal for academic institutions seeking short-term
                                    assistance or
                                    specialised expertise without committing to long-term contracts.</p>


                            </div>
                            <div class="">

                                <h6 class="fs-18 fw-700 heading-title "> Quality Assurance

                                </h6>
                                <p class="fs-16 "> ConsultantEdu ensures academic institutions have access to experts
                                    aligned with
                                    their educational standards and visibility to the consultants’ profiles, ratings,
                                    and show case of their previous work.</p>
                            </div>
                            <div class="">

                                <h6 class="fs-18  fw-700 heading-title ">Cost-Effective Solutions

                                </h6>
                                <p class="fs-16"> ConsultantEdu offers pricing options tailored to various budgets,
                                    ensuring fairness
                                    and transparency in costs.</p>
                            </div>
                            <div class=" ">

                                <h6 class="fs-18  fw-700 heading-title ">Efficient Processes
                                </h6>
                                <p class="fs-16">ConsultantEdu streamlines academic hiring and project management with
                                    specialised
                                    tools, saving institutions valuable time.</p>
                            </div>
                        </div>
                        <a href="{{ url('/search?keyword=&type=freelancer') }}"
                            class="btn rounded border fs-20 frequently-qsn-title  text-white text-white mt-2"
                            style="background-color:#275846;">Find Consultant</a>

                    </div>
                </div>
            </div>
        </section>
        {{-- How payments work --}}
        {{-- <div class=" mx-1">
            <div class="row mt-5 mb-5">
                <div class="col-lg-7 col-sm-12 mt-0 ml-lg-5 mx-2">
                    <div>
                        <h1 class="explore-find-oppor-title text-success fw-700 ">{{ translate('How payments work') }}
                        </h1>
                        <p class="payment-work-main-details">
                            {{ translate('Whether you’re paid hourly or on a fixed-price contract, all the work you complete comes with payment protection.') }}
                        </p>
                        <div class="mt-4">
                            <p class="payment-work-child-title ">{{ translate('All in one place') }}</p>
                            <p class="payment-work-child-details">
                                {{ translate('Invoice clients and track your earnings on ConsultantEdu for a simple and streamlined process.') }}
                            </p>
                        </div>
                        <div class="mt-4">
                            <p class="payment-work-child-title ">{{ translate('Choose how you get paid') }}</p>
                            <p class="payment-work-child-details">
                                {{ translate('Use what works best for you—including direct deposit, PayPal, Payoneer, wire transfer, and more..') }}
                            </p>
                        </div>
                        <div class="mt-4">
                            <p class="payment-work-child-title ">{{ translate('No fees until you complete your work') }}
                            </p>
                            <p class="payment-work-child-details">
                                {{ translate('Our service fees are taken as a percentage of your earnings. We charge you based on lifetime earnings with each client:') }}
                            </p>

                            <ul class="payment-work-child-details">
                                <li class="payment-work-child-details-percent ">
                                    {{ translate('20% for the first $500 you bill your client') }}</li>
                                <li class="payment-work-child-details-percent ">
                                    {{ translate("10% for total billings between $500.01 and $10,000") }}</li>
                                <li class="payment-work-child-details-percent ">
                                    {{ translate("5% for total billings over $10,000") }}</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-sm-12  mt-2">
                    <img class="w-lg-100 h-lg-100 w-100 mx-lg-0  payments-img "
                        src="{{ my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/payments.jpg') }}"
                        alt="">
                </div>


            </div>
        </div> --}}
        <hr>
        {{-- Consultants – find the right work for you --}}
        <section>
            <div class="mb-5 ">
                <div class=" mb-5 ">
                    <h1 class="explore-find-oppor-title text-success fw-700 pt-3 mx-2 mx-lg-5">
                        {{ translate('Consultants – find the right work for you') }}</h1>

                    <div class="row mt-4 mx-lg-4 mx-xl-4  mx-2 ">
                        <div class="col-lg-2 col-sm-12 pr-0">
                            <div class="my-2 mr-5 d-flex justify-content-center align-items-center  rounded-1   w-100 w-lg-75"
                                style="background: #91E6B3; width:90% !important;">
                                <img class="mx-auto d-block w-50" src="{{ my_asset('Post-A-Job.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-12 my-auto pl-lg-0">
                            <h1 class=" whyConsEdu-child-title mx-lg-0 mx-2  fs-20 fw-700 ">
                                {{ translate('
                                                                                                                                                                Create your profile (it’s free)') }}
                            </h1>
                            <p class="how-work-details fw-500 mx-lg-0 mx-2  text-justify mt-2">
                                {{ translate('This means you can sign up and build your professional profile on the platform without any cost. Your profile is where you showcase your skills, qualifications, and experience, allowing potential clients or employers to learn about your expertise.') }}
                            </p>
                        </div>
                    </div>

                    <div class="row mt-4 mx-lg-4 mx-xl-4  mx-2 ">
                        <div class="col-lg-2 col-sm-12 pr-0">
                            <div class="my-2 mr-5 d-flex justify-content-center align-items-center  rounded-1   w-100 w-lg-75"
                                style="background: #91E6B3; width:90% !important;">
                                <img class="mx-auto d-block w-50" src="{{ my_asset('Post-A-Job.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-12 my-auto pl-lg-0">
                            <h1 class=" whyConsEdu-child-title mx-lg-0 mx-2  fs-20 fw-700 ">
                                {{ translate('Explore ways to earn') }}</h1>
                            <p class="how-work-details fw-500 mx-lg-0 mx-2  text-justify mt-2">
                                {{ translate(': As a consultant, you have the opportunity to explore various avenues for earning income. This might include browsing through available projects, job listings, or freelance opportunities to find work that matches your skills and interests.') }}
                            </p>
                        </div>
                    </div>
                    <div class="row mt-4 mx-lg-4 mx-xl-4 mx-2 ">
                        <div class="col-lg-2 col-sm-12 pr-0">
                            <div class="my-2 mr-5 d-flex justify-content-center align-items-center  rounded-1   w-100 w-lg-75"
                                style="background: #91E6B3; width:90% !important;">
                                <img class="mx-auto d-block w-50" src="{{ my_asset('Post-A-Job.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-12 my-auto pl-lg-0">
                            <h1 class=" whyConsEdu-child-title mx-lg-0 mx-2 fs-20 fw-700 ">
                                {{ translate('Get paid securely') }}</h1>
                            <p class="how-work-details fw-500 mx-lg-0 mx-2 text-justify mt-2">
                                {{ translate('This assures consultants that the platform provides secure payment methods. When you successfully complete a project or task, you can expect to receive your payment without concerns about financial security or fraud, making it a trustworthy place to conduct business. ') }}
                            </p>
                        </div>
                    </div>
                    <div class="row mt-4 mx-lg-4 mx-xl-4 mx-2 ">
                        <div class="col-lg-2 col-sm-12 pr-0">
                            <div class="my-2 mr-5 d-flex justify-content-center align-items-center  rounded-1   w-100 w-lg-75"
                                style="background: #91E6B3; width:90% !important;">
                                <img class="mx-auto d-block w-50" src="{{ my_asset('Post-A-Job.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-12 my-auto pl-lg-0">
                            <h1 class=" whyConsEdu-child-title mx-lg-0 mx-2 fs-20 fw-700 ">
                                {{ translate('Fair Fee Structure: ') }}</h1>
                            <p class="how-work-details fw-500 mx-lg-0 mx-2 text-justify mt-2">
                                {{ translate("ConsultantEdu Hub service fees are designed to be fair and based on the total billings with each consultant. Here's how it works: 20% for the first $500 billed by the consultant, 10% for total billings between $500.01 and $10,000, and 5% for total billings exceeding $10,000") }}
                            </p>
                        </div>
                    </div>
                    <div class="row mt-2 mx-lg-4 mx-xl-4 mx-2 ">
                        <div class="col-lg-2 col-sm-12 pr-0">
                            <a href="search?keyword=&type=project"
                                class="btn rounded border fs-20 frequently-qsn-title  text-white text-white mt-2"
                                style="background-color:#275846;">Find Project</a>
                        </div>

                    </div>


                </div>
                <hr>
            </div>
        </section>
        {{-- Clients – find the best consultant for you --}}

        <div class=" mb-5">
            <h1 class="explore-find-oppor-title text-success fw-700  mx-2 mx-lg-5 ">
                {{ translate('Clients – find the best consultant for you') }}</h1>
            <div class="row mt-4 mx-lg-4 mx-2">
                <div class="col-lg-2 col-sm-12 pr-0">
                    <div class="my-2 mr-5 d-flex justify-content-center align-items-center  rounded-1   w-100 w-lg-75"
                        style="background: #91E6B3; width:90% !important;">
                        <img class="mx-auto d-block w-50" src="{{ my_asset('Post-A-Job.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-10 col-sm-12 my-auto pl-lg-0">
                    <h1 class=" whyConsEdu-child-title text-dark fs-20 fw-700 ">
                        {{ translate('Post a job') }}</h1>
                    <p class="how-work-details fw-500 text-justify mx-lg-0 mx-2 mt-2">
                        {{ translate("By creating a job posting detailing your project's specific requirements. This service is provided to you free of charge") }}
                    </p>
                </div>
            </div>
            <div class="row mt-4 mx-lg-4 mx-2 ">
                <div class="col-lg-2 col-sm-12 pr-0">
                    <div class="my-2 mr-5 d-flex justify-content-center align-items-center  rounded-1   w-100 w-lg-75"
                        style="background: #91E6B3; width:90% !important;">
                        <img class="mx-auto d-block w-50" src="{{ my_asset('Post-A-Job.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-10 col-sm-12 my-auto pl-lg-0 mx-lg-0 mx-2">
                    <h1 class=" whyConsEdu-child-title  fs-20 fw-700 ">
                        {{ translate('Receive proposal') }}</h1>
                    <p class="how-work-details fw-500 text-justify mt-2">
                        {{ translate("After posting your job, our platform will attract proposals from our pool of academic consultants. You'll have the opportunity to review these proposals thoroughly.") }}
                    </p>
                </div>
            </div>
            <div class="row mt-4 mx-lg-4 mx-2">
                <div class="col-lg-2 col-sm-12 pr-0 ">
                    <div class="my-2 mr-5 d-flex justify-content-center align-items-center  rounded-1   w-100 w-lg-75"
                        style="background: #91E6B3; width:90% !important;">
                        <img class="mx-auto d-block w-50" src="{{ my_asset('How_it_Works_2.png') }}" alt="">
                    </div>

                </div>
                <div class="col-lg-10 col-sm-12 my-auto pl-lg-0 mx-lg-0 mx-2">
                    <h1 class="whyConsEdu-child-title fw-700 text-justify text-dark">{{ translate('Make Selection') }}
                    </h1>
                    <p class="how-work-details text-justify fw-500 mt-2">
                        {{ translate("With the proposals in hand, you can carefully evaluate the qualifications, experience, and proposed approaches of our consultants. Choose the one who best aligns with your project's needs.") }}
                    </p>
                </div>
            </div>
            <div class="row mt-4 mx-lg-4 mx-2 ">
                <div class="col-lg-2 col-sm-12 pr-0 ">
                    <div class="my-2 mr-5 d-flex justify-content-center align-items-center  rounded-1   w-100"
                        style="background: #91E6B3; width:90% !important;">
                        <img class="mx-auto d-block w-50" src="{{ my_asset('How_it_Works_2.png') }}" alt="">
                    </div>

                </div>
                <div class="col-lg-10 col-sm-12 my-auto pl-lg-0 mx-lg-0 mx-2">
                    <h1 class="whyConsEdu-child-title fw-700 text-dark ">{{ translate('Pay Securely') }}</h1>
                    <p class="how-work-details text-justify  fw-500 mt-2">
                        {{ translate("To ensure both your and the consultant's security, payments are held in escrow until the project reaches its agreed-upon completion and meets your satisfaction. This guarantees a safe and reliable transaction process.") }}
                    </p>
                </div>
            </div>

            <div class="row mt-2 mx-lg-4 mx-2 ">
                <div class="col-lg-2 col-sm-12 pr-0 ">
                    <a href="search?keyword=&type=freelancer"
                        class="btn rounded border fs-20 px-4 frequently-qsn-title  text-white text-white mt-2"
                        style="background-color:#275846;">Find
                        Consultant</a>
                </div>
            </div>
        </div>

        <hr>

        {{-- Reviews – how reviews work on ConsultantEdu --}}
        <div class="my-5 mx-lg-4 mx-2 border-bottom pb-5" id="reviewSection">
            <h1 class="explore-find-oppor-title text-success fw-700 mx-lg-4">
                {{ translate('How reviews work ') }}</h1>
            <div class="row mx-lg-3 mx-0 ">
                <div class="col-lg-12 col-sm-12 p-sm-0 mx-lg-2">
                    {{-- Consultants - Getting reviews on ConsultantEdu --}}
                    <div class="mt-2">
                        <p class="whyConsEdu-child-title">For Consultants
                        </p>
                        <p class="mt-2  frequently-qsn-details text-justify">At the end of a contract, a 14-day feedback
                            period begins. During this time, both the client and consultant have the opportunity to leave
                            reviews for each other. Clients are prompted to provide a review when closing the contract, and
                            most clients do so.
                        </p>
                    </div>
                    {{-- Clients - Leaving a review on ConsultantEdu --}}
                    <div class="mt-2">
                        <p class="whyConsEdu-child-title">For Clients
                        </p>
                        <p class="mt-2 frequently-qsn-details text-justify">Within the 14-day feedback period at the
                            contract's conclusion, clients are encouraged to leave reviews when ending the contract. As a
                            consultant, you can also leave a review for the client by accessing your contract's details. The
                            reviews become public once both parties have left a review for each other or when the 14-day
                            period concludes.
                        </p>
                        <p class="whyConsEdu-child-title">Contesting a review
                        </p>
                        <p class="mt-2 frequently-qsn-details text-justify">If you wish to modify how a review appears on
                            ConsultantEdu, you have several options. First, you can respond to a review by posting a
                            follow-up comment within 28 days of the contract's end. This comment will be displayed on your
                            public profile. Additionally, you can collaborate with your client or talent to request feedback
                            changes and revise the review. If you believe a review violates ConsultantEdu's terms of service
                            and wish to dispute it, our customer service team is available to assist you.
                        </p>
                        <p class="whyConsEdu-child-title">Checking your reviews
                        </p>
                        <p class="mt-2 frequently-qsn-details text-justify">Viewing your reviews is straightforward on
                            ConsultantEdu. Simply visit your profile to find all your public reviews. If your contract has
                            recently concluded, please note that it may take up to 14 days for your review to become public.
                            You can also access feedback for specific contracts in your contracts dashboard.
                        </p>

                    </div>

                </div>



            </div>
            <hr>
            <p class=" mx-4 fs-20 fw-700">Example</p>
            <div class="mx-auto fre-review-say-customer" style="width: 80%;margin:0 10%">
                <div class="border border border-white rounded-2 p-3 my-2">
                    <p class="fw-600 fs-20 ">Feedback</p>
                    <div class="mt-3 ">
                        <span class="text-dark fw-700 fs-16 mb-3">Client</span>
                        <h4 class=" frequently-qsn-details mt-2 text-justify">Prof. David Smith played a pivotal
                            role in the development of our university curriculum. His expertise, creativity, and dedication
                            to ensuring our program met the highest standards were truly outstanding. Prof. Smith's
                            meticulous attention to detail and ability to align the curriculum with our institution's goals
                            made this project a success. We are grateful for his contributions and highly recommend his
                            services to any educational institution.</h4>
                        <p class="fw-600 fs-16" style="  color:#6560E6 !important;">Client Name: Dr. Emily Johnson</p>
                        <p class="fw-600 fs-16 frequently-qsn-details">Review for Curriculum Development Consultant: Prof.
                            David Smith</p>
                    </div>
                    <div class="mt-3">
                        <span class="text-dark fw-700 fs-16 mb-3">Consultant:
                        </span>
                        <h4 class="mt-2 frequently-qsn-details text-justify">Working with Dr. Emily Johnson and her
                            team on curriculum development was a rewarding experience. Dr. Johnson's clear vision and
                            commitment to excellence made the collaboration seamless. Her prompt communication and
                            insightful feedback allowed us to refine the curriculum effectively. I am honored to have been
                            part of this project and look forward to future collaborations with Dr. Johnson and her
                            institution. Highly recommended.
                        </h4>
                        <p class="fw-600 fs-16 frequently-qsn-details" style="  color:#6560E6 !important;">Consultant
                            Name: Prof. David Smith
                        </p>
                        <p class="fw-600 fs-16 frequently-qsn-details">Review for Client: Dr. Emily Johnson </p>
                    </div>
                </div>

                <div class="border border border-white rounded-2 p-3 my-2">
                    <p class="fw-600 fs-20 ">Feedback</p>
                    <div class="mt-3 ">
                        <span class="text-dark fw-700 fs-16 mb-3">Client</span>
                        <h4 class="frequently-qsn-details mt-2 text-justify">We are immensely grateful to Dr.
                            Johnson for his invaluable assistance in our university's accreditation process. His deep
                            knowledge of accreditation standards, attention to detail, and meticulous guidance were
                            instrumental in helping us meet and exceed the required criteria. Dr. Johnson's professionalism
                            and commitment to our institution's success were truly commendable. Thanks to his expertise, we
                            achieved accreditation smoothly and with confidence. We highly recommend Dr. Johnson's
                            consultancy services to any educational institution seeking accreditation.</p>
                            <p class="  fw-600 fs-16 frequently-qsn-details" style="  color:#6560E6 !important;">Client
                                Name: Jennifer
                                Martinez, Dean of Academic Affairs</p>
                            <p class=" bg-gray rounded-2 fs-16 p-1 frequently-qsn-details">Review for Consultant: Dr.
                                Robert Johnson,
                                Accreditation Expert</p>
                    </div>


                    <div class="mt-3">
                        <span class="text-dark fw-700 fs-16 mb-3">Consultant
                        </span>
                        <h4 class="mt-2 frequently-qsn-details text-justify">Working with Jennifer and her
                            dedicated team at the university was a rewarding experience. Their commitment to academic
                            excellence and determination to meet accreditation standards were evident throughout the
                            process. Jennifer provided clear guidance, access to necessary resources, and timely responses
                            to inquiries, which greatly facilitated our consultancy work. It's been a privilege to assist
                            the university in achieving accreditation, and I look forward to continued collaboration with
                            such a professional and forward-thinking institution.
                        </h4>
                        <p class="fw-600 fs-16 frequently-qsn-details" style="  color:#6560E6 !important;">Consultant
                            Name: Dr. Robert
                            Johnson
                        </p>
                        <p class=" fw-600  fs-16 p-1 frequently-qsn-details">Review for Client: Jennifer Martinez, Dean of
                            Academic Affairs</p>
                    </div>
                </div>


                <div class="border border border-white rounded-2 p-3 my-2">
                    <p class="fw-600 fs-20 ">Feedback</p>
                    <div class="mt-3 ">
                        <span class="text-dark fw-700 fs-16 mb-3">Client</span>
                        <h4 class="frequently-qsn-details mt-2 text-justify">I had the pleasure of working with Dr.
                            Johnson on a complex university research project, and his expertise was invaluable. His
                            analytical skills and in-depth knowledge significantly enhanced our research efforts. Dr.
                            Johnson was highly responsive, met all deadlines, and provided thorough analysis that greatly
                            contributed to our project's success. I highly recommend his services to anyone seeking top-tier
                            research and analysis support.</p>
                            <p class="fw-600 fs-16 frequently-qsn-details" style="  color:#6560E6 !important;">Review for
                                Consultant: Dr. Michael
                                Johnson</p>
                    </div>
                    <div class="mt-3">
                        <span class="text-dark fw-700 fs-16 mb-3">Consultant
                        </span>
                        <h4 class="mt-2 frequently-qsn-details text-justify">Collaborating with Professor Davis on
                            the university research and analysis project was a rewarding experience. Her clear vision,
                            dedication to academic excellence, and effective communication ensured a smooth and productive
                            partnership. Her feedback and guidance were instrumental in shaping the research direction. I'm
                            eager to engage in future academic endeavours with Professor Davis and highly recommend her as a
                            client.
                        </h4>
                        <p class="fw-600 fs-16 frequently-qsn-details" style="  color:#6560E6 !important;">Consultant
                            Name: Dr. Michael
                            Johnson
                        </p>
                        <p class=" fw-600  fs-16 p-1 frequently-qsn-details">Review for Client: Professor Emily Davis</p>
                    </div>
                </div>
            </div>


        </div>

        {{-- FAQS --}}

        <div class="my-5 mx-4" id="FAQs">
            <h1 class="explore-find-oppor-title text-success fw-700"> Frequently asked questions</h1>
            <hr>

            <nav>
                <ul class="nav" id="myTab" role="tablist">
                    <li class="nav-item ">
                        <a class="  fs-20 p-1   btn  btn-outline-primary px-4" id="for-consultants" data-toggle="tab"
                            href="#consultant" role="tab" aria-controls="consultant" aria-selected="true">For
                            Consultants </a>
                    </li>

                    <li class="nav-item">
                        <a class=" fs-20 p-1 btn  btn-outline-primary px-4 " id="for-client" data-toggle="tab"
                            href="#client" role="tab" aria-controls="client" aria-selected="false">
                            For Clients </a>
                    </li>

                </ul>
            </nav>

        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active mt-2" id="consultant" role="tabpanel"
                aria-labelledby="for-consultants">
                <!-- Frequently asked questions -->
                <div class=" rounded-2" style="background: #F2F7F2;">
                    <div class="mx-2 mt-5 row">
                        <div class="col-lg-6 col-sm-12 py-3">
                            <img class="banner-img"
                                src="{{ my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                                alt="">
                        </div>
                        <div class="col-lg-6 col-sm-12 py-3">
                            <div class=" border-bottom my-2">
                                <input type="checkbox" id="fre-leave">
                                <h4 class="faq-qsn-title">Is ConsultantEdu Hub free to join as an academic consultant?</h4>
                                <p class="frequently-qsn-details text-justify">
                                    Joining ConsultantEdu Hub as an academic consultant is absolutely free. You can create
                                    your profile, search for work, and even initiate your own projects without any cost. Our
                                    service fee is determined by your earnings with each client, and we offer a sliding
                                    scale that rewards long-term relationships.
                                </p>
                                <div class="fre-content text-justify">
                                    <p>
                                        Additionally, you have the option to upgrade to ConsultantEdu Plus, which allows you
                                        to more effectively market your services, submit proposals, and stand out from the
                                        crowd.
                                    </p>
                                    <label class="fre-expand-icon" for="fre-leave">Show less <img
                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                            alt=""></label>
                                </div>
                                <label class="fre-expand-icon" for="fre-leave">Read more <img
                                        class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                        alt=""> </label>

                            </div>
                            <div class=" border-bottom">
                                <input type="checkbox" id="fre-contest">
                                <h4 class="faq-qsn-title">Can I grow my career on ConsultantEdu?</h4>
                                <p class="frequently-qsn-details text-justify">
                                    Absolutely! Many of our most successful academic experts have utilized their strong
                                    academic backgrounds and employment records on ConsultantEdu. We understand that you may
                                    be new to consulting but highly experienced in your field.
                                </p>
                                <div class="fre-content text-justify">
                                    <p>
                                        Our comprehensive guide offers step-by-step tips for building your consulting
                                        career.
                                    </p>
                                    <label class="fre-expand-icon" for="fre-contest">Show less <img
                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                            alt=""></label>
                                </div>

                                <label class="fre-expand-icon" for="fre-contest">Read more <img
                                        class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                        alt=""></label>
                            </div>
                            <div class=" border-bottom ">
                                <input type="checkbox" id="fre-freelancing">
                                <h4 class="faq-qsn-title mt-2 ">What can you gain from consulting with ConsultantEdu?
                                </h4>
                                <p class="frequently-qsn-details text-justify">
                                    Work with prestigious clients and renowned institutions. Many choose ConsultantEdu for
                                    our support in achieving excellence.
                                </p>
                                <div class="fre-content text-justify ">
                                    <p>
                                        How to Succeed as a Consultant' provides a glimpse of our success-boosting academic
                                        resources.
                                    </p>
                                    <label class="fre-expand-icon" for="fre-freelancing">Show less <img
                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                            alt=""></label>
                                </div>
                                <label class="fre-expand-icon" for="fre-freelancing">Read more <img
                                        class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                        alt=""></label>
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

                            <img src="{{ my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                                alt="">
                        </div>
                        <div class="col-lg-6 col-sm-12 py-3">
                            <div class="">
                                <h4 class="faq-qsn-title">What projects can I do on Scholarship australia?
                                </h4>
                                <p class="frequently-qsn-details text-justify">
                                    Anything people generally do on a computer. Popular tasks are web, mobile and
                                    software development, design
                                    work and copywriting, but you can also find lawyers, accountants and more.
                                </p>
                                <hr>
                            </div>
                            <div class="">
                                <h4 class="faq-qsn-title">How does Scholarship australia make money?</h4>
                                <p class="frequently-qsn-details text-justify ">
                                    We charge freelancers and agencies a 10% freelancer service fee on their earnings.
                                </p>
                                <hr>
                            </div>
                            <div class="  my-2">
                                <h4 class="faq-qsn-title">What’s the Top Rated program?</h4>
                                <p class="frequently-qsn-details">
                                    {{ translate('It’s a badge of honor for talent who consistently do great work.') }}
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
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>
@endsection
