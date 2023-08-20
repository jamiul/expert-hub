@extends('frontend.default.layouts.app')
<link rel="stylesheet" href="{{ my_asset('/assets/frontend/default/css/why-freelancerEdu.css') }}">

@section('content')
    <div class="container-main-projects-banner">
        <div class="my-4" style="background:#275846">
            <div class="row rounded-0 px-lg-2 mx-lg-5 px-4">
                <div class="col-lg-7 col-12  w-100 my-auto">
                    <h3 class="text-success fw-700 fs-30 frequently-qsn-title  ">About ConsultantEdu</h3>
                    <p class="frequently-qsn-details  text-white fw-500 mb-2 text-justify my-2">ConsultantEdu is a dynamic platform to
                        connect
                        passionate academic experts with individuals, institutions, and businesses seeking tailored
                        education solutions. We believe that education has the power to shape the world, and our goal is to
                        facilitate this transformation by offering a range of services that elevate learning experiences.
                        So, we've built a special place where academic experts meet people who want high-quality educational
                        services.</p>
                </div>
                <div class="col-lg-1 col-12 my-auto"></div>
                <div class="col-lg-4 col-12">
                    <img src="{{ my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>



    <div class="whyFreeEdu-container-main " style="background-color:#F2F7F2">
        <section>
            @if (get_setting('featured_category_show') == 'on')
                <form id=" consultant-filter-form" action="" method="GET">
                    <section class="">
                        <div class="whyFreeEdu-container-main">

                            <div class="d-flex justify-content-between ">
                                <div class="w-lg-75 w-lg-75 lh-1-8 content-title ">
                                    <!-- <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2> -->
                                    <h2 class="fs-30 mt-2 text-success fw-700 fre-small-font">Our services</h2>
                                    <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
                                </div>

                            </div>

                            <div class="row gutters-10 ">
                                @if (get_setting('featured_category_list') != null)
                                    @foreach (json_decode(get_setting('featured_category_list'), true) as $key => $category_id)
                                        @if (($category = \App\Models\ProjectCategory::find($category_id)) != null)
                                            <div class="col-md-3">
                                                <div class="card" style="height:350px;">
                                                    <img class="w-100 h-170px" src=" {{ custom_asset($category->photo) }}"
                                                        alt="Image" />
                                                    <div class="card-body" style=" padding:13px;">

                                                        <a class=" featured_category text-dark" onclick="applyFilter()"
                                                            href="{{ route('freelancer.category', $category->id) }}">
                                                            <p class="fs-20 fw-600 " style="height:45px; line-height:23px;">
                                                                {{ $category->name }}
                                                            </p>
                                                            <p class="frequently-qsn-details " style=" line-height:22px;">
                                                                {{ $category->description }} ..more</p>
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
        {{-- service section  --}}

        <hr>
        {{-- Consultants – find the right work for you --}}
        <section>
            <div class="mb-5 ">
                <div class=" mb-5 ">
                    <h1 class="explore-find-oppor-title text-success fw-700 pt-3 mx-lg-5">
                        {{ translate('Consultants – find the right work for you') }}</h1>
                    <div class="row mt-4 mx-4">
                        <div class="col-lg-3 col-sm-12 pr-0">
                            <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px"
                                style="background: #91E6B3; ">
                                <img class="mx-auto d-block w-50" src="{{ my_asset('Post-A-Job.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-12 my-auto pl-0">
                            <h1 class=" whyConsEdu-child-title text-dark fs-20 fw-700 ">
                                {{ translate('Create your profile (it’s free)') }}</h1>
                            <p class="how-work-details  fw-500  mt-2">
                                {{ translate('An eye-catching title and client-focused overview help us match you to the work you want. Include your work history, your skills, and your photo. Add more, like an introduction video, to create a profile that really stands out.') }}
                            </p>
                        </div>
                    </div>
                    <div class="row mt-4 mx-4 ">
                        <div class="col-lg-3 col-sm-12 pr-0">
                            <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px"
                                style="background: #91E6B3; ">
                                <img class="mx-auto d-block w-50" src="{{ my_asset('Post-A-Job.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-12 my-auto pl-0">
                            <h1 class=" whyConsEdu-child-title  fs-20 fw-700 ">
                                {{ translate('Explore ways to earn') }}</h1>
                            <p class="how-work-details fw-500  mt-2">
                                {{ translate('Work and earn in different ways. Bid for jobs. Pitch your projects. Discuss your in-demand skills with our recruiters so they can find opportunities aligned with your passions and career goals. Do all three. Create a predictable pipeline and build your network') }}
                            </p>
                        </div>
                    </div>


                    <div class="row mt-4 mx-4 ">
                        <div class="col-lg-3 col-sm-12 pr-0">
                            <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px"
                                style="background: #91E6B3; ">
                                <img class="mx-auto d-block w-50" src="{{ my_asset('Post-A-Job.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-12 my-auto pl-0">
                            <h1 class=" whyConsEdu-child-title  fs-20 fw-700 ">
                                {{ translate('Get paid securely') }}</h1>
                            <p class="how-work-details fw-500  mt-2">
                                {{ translate('Choose how you get paid. Our fixed-price protection releases client payments at project milestones. Hourly protection bills clients every week. However you work, our service fees are the same. Spend less time chasing, more earning.') }}
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </section>
        {{-- Clients – find the best consultant for you --}}

        <div class=" ">
            <h1 class="explore-find-oppor-title text-success fw-700 mx-5 ">
                {{ translate('Clients – find the best consultant for you') }}</h1>
            <div class="row mt-4 mx-4">
                <div class="col-lg-3 col-sm-12 pr-0">
                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px"
                        style="background: #91E6B3; ">
                        <img class="mx-auto d-block w-50" src="{{ my_asset('Post-A-Job.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 my-auto pl-0">
                    <h1 class=" whyConsEdu-child-title text-dark fs-20 fw-700 ">
                        {{ translate('Post a job') }}</h1>
                    <p class="how-work-details fw-500   mt-2">
                        {{ translate('An eye-catching title and client-focused overview help us match you to the work you want. Include your work history, your skills, and your photo. Add more, like an introduction video, to create a profile that really stands out.') }}
                    </p>
                </div>
            </div>
            <div class="row mt-4 mx-4 ">
                <div class="col-lg-3 col-sm-12 pr-0">
                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px"
                        style="background: #91E6B3; ">
                        <img class="mx-auto d-block w-50" src="{{ my_asset('Post-A-Job.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 my-auto pl-0">
                    <h1 class=" whyConsEdu-child-title fs-20 fw-700 ">
                        {{ translate('Receive proposal') }}</h1>
                    <p class="how-work-details fw-500  mt-2">
                        {{ translate("Guidance to find your best option, based on what's important to") }}
                    </p>
                </div>
            </div>
            <div class="row mt-4 mx-4">
                <div class="col-lg-3 col-sm-12 pr-0 ">
                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px"
                        style="background: #91E6B3; ">
                        <img class="mx-auto d-block w-50" src="{{ my_asset('How_it_Works_2.png') }}" alt="">
                    </div>

                </div>
                <div class="col-lg-9 col-sm-12 my-auto pl-0">
                    <h1 class="whyConsEdu-child-title fw-700 text-dark">{{ translate('Make Selection') }}</h1>
                    <p class="how-work-details fw-500 mt-2">
                        {{ translate('Choose how you get paid. Our fixed-price protection releases client payments at project milestones. Hourly protection bills clients every week. However you work, our service fees are the same. Spend less time chasing, more earning.') }}
                    </p>
                </div>
            </div>
            <div class="row mt-4 mx-4  pb-5">
                <div class="col-lg-3 col-sm-12 pr-0 ">
                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px"
                        style="background: #91E6B3; ">
                        <img class="mx-auto d-block w-50" src="{{ my_asset('How_it_Works_2.png') }}" alt="">
                    </div>

                </div>
                <div class="col-lg-9 col-sm-12 my-auto pl-0">
                    <h1 class="whyConsEdu-child-title fw-700 text-dark">{{ translate('Payment Securely') }}</h1>
                    <p class="how-work-details  fw-500 mt-2">
                        {{ translate('Choose how you get paid. Our fixed-price protection releases client payments at project milestones. Hourly protection bills clients every week. However you work, our service fees are the same. Spend less time chasing, more earning.') }}
                    </p>
                </div>
            </div>

        </div>

        <hr>
        {{-- How payments work --}}
        <div class=" mx-1">
            <div class="row mt-5 mb-5">
                <div class="col-lg-7 col-sm-12 mt-0 ml-5">
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
                    <a class="learn-service" 
                        href="">{{ translate('Learn more about service fees.') }}</a>

                </div>
                <div class="col-lg-4 col-sm-12 mr-5">
                    <img class="w-100 payments-img "
                        src="{{ my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/payments.jpg') }}"
                        alt="">
                </div>


            </div>
        </div>
        <hr>
        {{-- Reviews – how reviews work on ConsultantEdu --}}
        <div class="my-5 mx-4 border-bottom pb-5" id="reviewSection">
            <h1 class="explore-find-oppor-title text-success fw-700 mx-4">
                {{ translate('How reviews work ') }}</h1>
            <div class="row mx-2">
                <div class="col-lg-12 col-sm-12">
                    {{-- Consultants - Getting reviews on ConsultantEdu --}}
                    <div class="mt-2">
                        <p class="whyConsEdu-child-title">Consultants
                        </p>
                        <p class="mt-2  frequently-qsn-details">A 14-day feedback period opens at the end of a contract
                            where both the
                            client and consultant can
                            leave each other a review. The client is asked to give a review as part of ending the contract
                            and most
                            clients do.
                        </p>
                    </div>
                    {{-- Clients - Leaving a review on ConsultantEdu --}}
                    <div class="mt-2">
                        <p class="whyConsEdu-child-title">Clients
                        </p>
                        <p class="mt-2 frequently-qsn-details">During the 14-day feedback period at the end of a contract,
                            the client
                            will be asked to leave a review
                            while ending the contract. As the consultant, you can also leave a review for the client by
                            looking at
                            your end of the contract. The review will be public once both of you leave one for each other or
                            the
                            14-day period ends.
                        </p>
                        <p class="whyConsEdu-child-title">Contesting a review
                        </p>
                        <p class="mt-2 frequently-qsn-details">There’s a few ways to change how your review appears on
                            ConsultantEdu starting
                            with
                            responding to
                            a review. Within 28 days of the end of the contract, you can post a follow-up comment to a
                            review
                            about you that will show up on your public profile. You can also work directly with your client
                            or
                            talent to enable feedback changes and revise the review. If you feel the review violates
                            ConsultantEdu’s terms of service and you would like to dispute a review, ConsultantEdu’s
                            customer
                            service team is there to help.
                        </p>
                        <p class="whyConsEdu-child-title">Checking your reviews
                        </p>
                        <p class="mt-2 frequently-qsn-details">Seeing your reviews is easy on ConsultantEdu, simply visit
                            your profile and all your public reviews will be there. If your contract just ended, it can take
                            up to 14 days for your review to become public. You can also find your feedback for specific
                            contracts in your contracts dashboard.
                        </p>

                    </div>
                    
                </div>
               
                <div class="col-lg-1"></div>
                
            </div>
 <hr>

            {{-- 
            <div class="">
                <h1 class="whyConsEdu-child-title mx-4">Contesting a review </h1>
                <p class="frequently-qsn-details  mx-5">There’s a few ways to change how your review appears on
                    ConsultantEdu starting
                    with
                    responding to
                    a review. Within 28 days of the end of the contract, you can post a follow-up comment to a review
                    about you that will show up on your public profile. You can also work directly with your client or
                    talent to enable feedback changes and revise the review. If you feel the review violates
                    ConsultantEdu’s terms of service and you would like to dispute a review, ConsultantEdu’s customer
                    service team is there to help.</p>
            </div>
            
            <div class="mt-1 mx-5">
                <h1 class="whyConsEdu-child-title">Checking your reviews </h1>
                <p class="frequently-qsn-details">Seeing your reviews is easy on ConsultantEdu, simply visit your profile
                    and all
                    your public reviews will
                    be there. If your contract just ended, it can take up to 14 days for your review to become public. You
                    can also find your feedback for specific contracts in your contracts dashboard.</p>
            </div> --}}
            <p class=" mx-4 fs-20 fw-700">Example</p>
            <div class="mx-auto fre-review-say-customer" style="width: 80%;margin:0 10%">
                <div class="border border border-white rounded-2 p-3 my-2">
                    <p class="fw-600 fs-20 ">Stephen <span class="text-muted fw-600 ">and</span> Amiya <span
                            class="text-muted">worked together through</span> Talent Marketplace</p>
                    <div class="mt-3 ">
                        <span class="text-muted fs-16 mb-3">Client</span>
                        <h4 class="fre-review-say-customer-review mt-2">Stephen is a seasoned trademark attorney who is
                            very clear in his approach. Swift, knowledgeable, to the point, sticks to the schedules and
                            reliable when it comes to Trademark Office Action responses. Highly Recommended !</h4>
                        <p class="fw-600 fs-16">Amiya D. <span class="text-muted">
                                India</span> </p>
                    </div>
                    <div class="mt-3">
                        <span class="text-muted fs-16 mb-3">Talent
                        </span>
                        <h4 class="mt-2 fre-review-say-customer-review">Amiya was a great client. Clear deliverable and
                            fast at responding. I look forward to working together in the future and I was happy to solve
                            his problems.
                        </h4>
                        <p class="fw-600 fs-16">Stephen P.
                            <span class="text-muted"> United States</span>
                        </p>
                    </div>
                </div>
                <div class="border border border-white rounded-2 p-3 my-2">
                    <p class="fw-600 fs-2 0 ">Stephen <span class="text-muted fw-600 ">and</span> Amiya <span
                            class="text-muted">worked together through</span> Talent Marketplace</p>
                    <div class="mt-3 ">
                        <span class="text-muted fs-16 mb-3">Client</span>
                        <h4 class="fre-review-say-customer-review mt-2">Stephen is a seasoned trademark attorney who is
                            very clear in his approach. Swift, knowledgeable, to the point, sticks to the schedules and
                            reliable when it comes to Trademark Office Action responses. Highly Recommended !</h4>
                        <p class="fw-600 fs-16">Amiya D. <span class="text-muted">
                                India</span> </p>
                        <p class=" bg-gray rounded-2 p-2">Legal</p>
                    </div>
                    <div class="mt-3">
                        <span class="text-muted fs-16 mb-3">Talent
                        </span>
                        <h4 class="mt-2 fre-review-say-customer-review">Amiya was a great client. Clear deliverable and
                            fast at responding. I look forward to working together in the future and I was happy to solve
                            his problems.
                        </h4>
                        <p class="fw-600 fs-16">Stephen P.
                            <span class="text-muted"> United States</span>
                        </p>
                        <p class=" bg-gray rounded-2 p-2">Legal</p>
                    </div>
                </div>
                <div class="border border border-white rounded-2 p-3 my-2">
                    <p class="fw-600 fs-20 ">Stephen <span class="text-muted fw-600 ">and</span> Amiya <span
                            class="text-muted">worked together through</span> Talent Marketplace</p>
                    <div class="mt-3 ">
                        <span class="text-muted fs-16 mb-3">Client</span>
                        <h4 class="fre-review-say-customer-review mt-2">Stephen is a seasoned trademark attorney who is
                            very clear in his approach. Swift, knowledgeable, to the point, sticks to the schedules and
                            reliable when it comes to Trademark Office Action responses. Highly Recommended !</h4>
                        <p class="fw-600 fs-16">Amiya D. <span class="text-muted">
                                India</span> </p>
                    </div>
                    <div class="mt-3">
                        <span class="text-muted fs-16 mb-3">Talent
                        </span>
                        <h4 class="mt-2 fre-review-say-customer-review">Amiya was a great client. Clear deliverable and
                            fast at responding. I look forward to working together in the future and I was happy to solve
                            his problems.
                        </h4>
                        <p class="fw-600 fs-16">Stephen P.
                            <span class="text-muted"> United States</span>
                        </p>
                        <p class=" bg-gray rounded-2 p-2">Legal</p>
                    </div>
                </div>
            </div>


        </div>
        
        {{-- FAQS --}}
        <div class="my-5 mx-4" id="FAQs">
            <h1 class="explore-find-oppor-title text-success fw-700"> Frequently asked questions</h1>

            <ul class="nav " id="myTab" role="tablist">
                <li class="nav-item faqs">
                    <a class=" active fs-20 mr-2  pr-2 faqs-consultant "
                        style="border-right:2px solid; color:black !important; black" id="for-consultants"
                        data-toggle="tab" href="#consultant" role="tab" aria-controls="consultant"
                        aria-selected="true">For
                        Consultants</a>
                </li>
                <li class="nav-item faqs">
                    <a class=" fs-20 mr-2  pr-2 " id="for-client" data-toggle="tab" href="#client"
                        style=" color:black !important; black" role="tab" aria-controls="client"
                        aria-selected="false">
                        For Clients </a>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active mt-2" id="consultant" role="tabpanel"
                    aria-labelledby="for-consultants">
                    <!-- Frequently asked questions -->
                    <div class=" rounded-2" style="background: #F2F7F2;">
                        <div class="mx-2 row">
                            <div class="col-lg-6 col-sm-12 py-3">
                                {{-- <h1 class="fs-18">
                                    FAQ
                                </h1> --}}
                                <img src="{{ my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                                    alt="">
                            </div>
                            <div class="col-lg-6 col-sm-12 py-3">

                                <div class=" border-bottom my-2">
                                    <input type="checkbox" id="fre-leave">
                                    <h4 class="frequently-qsn-title">Is ConsultantEdu free to join as a freelancer?</h4>
                                    <p class="frequently-qsn-details">
                                        Yes, it’s free to join ConsultantEdu, complete your profile, search for work and
                                        create
                                        your own projects. Our service fee is based on your earnings with each client and
                                        the sliding scale rewards long-term relationships.
                                    </p>
                                    <div class="fre-content">
                                        <p>
                                            You can upgrade to Freelancer Plus to more effectively market your services,
                                            submit proposals and stand out from the crowd.
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
                                    <h4 class="frequently-qsn-title">Can I grow my career on ConsultantEdu?</h4>
                                    <p class="frequently-qsn-details">
                                        Yes, some of our most successful professionals have brought their strong background
                                        and employment track record to ConsultantEdu. We know you may be new to freelancing
                                        but
                                        highly experienced in your field. Our
                                    </p>
                                    <div class="fre-content">
                                        <p>
                                            complete guide shares our step-by-step tips for building your freelance career.
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
                                    <h4 class="frequently-qsn-title mt-2 ">What can I gain from freelancing with
                                        ConsultantEdu?
                                    </h4>
                                    <p class="frequently-qsn-details">
                                        work with great clients and well-known brands. Many choose ConsultantEdu because we
                                        help
                                        them do it well. How to Succeed as a Freelancer gives you a taste of the support we
                                        offer to boost your success.
                                    </p>
                                    <div class="fre-content ">
                                        <p>
                                            work with great clients and well-known brands. Many choose ConsultantEdu because
                                            we
                                            help them do it well. How to Succeed as a Freelancer gives you a taste of the
                                            support we offer to boost your success.
                                        </p>
                                        <label class="fre-expand-icon" for="fre-freelancing">Show less <img
                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                alt=""></label>
                                    </div>
                                    <label class="fre-expand-icon" for="fre-freelancing">Read more <img
                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                            alt=""></label>
                                </div>
                                <div class=" border-bottom">
                                    <input type="checkbox" id="fre-buildingBusiness">
                                    <h4 class="frequently-qsn-title mt-2">Is ConsultantEdu good for building a business? </h4>
                                    <p class="frequently-qsn-details">
                                        Yes, and creating an agency can be a great way to grow. Using our agency structure,
                                        freelancers can collaborate as a single organization, delivering more to their
                                        clients. Moving from solo freelancer to agency
                                    </p>
                                    <div class="fre-content">
                                        <p>
                                            owner is a big transition, but it might be the right one for you.
                                        </p>
                                        <label class="fre-expand-icon" for="fre-buildingBusiness">Show less <img
                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                alt=""></label>
                                    </div>

                                    <label class="fre-expand-icon" for="fre-buildingBusiness">Read more <img
                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                            alt=""></label>
                                </div>
                                <div class=" border-bottom">
                                    <h4 class="frequently-qsn-title mt-2">What projects can I find on ConsultantEdu?</h4>
                                    <p class="frequently-qsn-details">
                                        Clients are looking for help across almost every industry, job, and skill set. Find
                                        the work you’re looking for, from specific projects to ongoing, long-term work, on
                                        fixed-price and hourly contracts.
                                    </p>
                                </div>
                                <div class=" border-bottom">
                                    <input type="checkbox" id="fre-Connects">
                                    <h4 class="frequently-qsn-title mt-2">What are Connects? </h4>
                                    <p class="frequently-qsn-details">
                                        Connects are ConsultantEdu’s virtual currency. Freelancers and agencies use them to
                                        show
                                        their genuine interest as they submit proposals. Different jobs require different
                                        amounts of Connects, some none at all.
                                    </p>
                                    <div class="fre-content">
                                        <p>
                                            Freelancer accounts receive free Connects every month. You can buy bundles of
                                            them. And freelancers and agencies earn Connects by winning client interviews,
                                            getting great reviews, and demonstrating their skills.
                                        </p>
                                        <label class="fre-expand-icon" for="fre-Connects">Show less <img
                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                alt=""></label>
                                    </div>

                                    <label class="fre-expand-icon" for="fre-Connects">Read more <img
                                            class="w-15px h-15px arrow-icon " src="{{ my_asset('down-chevron.png') }}"
                                            alt=""></label>
                                </div>
                                <div class=" border-bottom">
                                    <input type="checkbox" id="fre-badges">
                                    <h4 class="frequently-qsn-title mt-2">What do the different badges mean? </h4>
                                    <p class="frequently-qsn-details">
                                        Our badges help you stand out. With a strong background in your field and early
                                        success with clients, you’ll soon be invited to meet our Rising Talent criteria.
                                        Keep building your reputation to earn our Top Rated
                                    </p>
                                    <div class="fre-content">
                                        <p>
                                            badge. Top Rated Plus shows you have a proven history of success on large and
                                            long-term contracts. And Expert Vetted means you’ve gone through our rigorous
                                            pre-screening to match your high-demand skills with the right clients. Get the
                                            feedback, wear the badge , hit your goals.
                                        </p>
                                        <label class="fre-expand-icon" for="fre-badges">Show less <img
                                                class="w-15px h-15px arrow-icon " src="{{ my_asset('upload.png') }}"
                                                alt=""></label>
                                    </div>

                                    <label class="fre-expand-icon" for="fre-badges">Read more <img
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
                                <h1 class="fs-18">
                                    FAQ
                                </h1>
                                <img src="{{ my_asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                                    alt="">
                            </div>
                            <div class="col-lg-6 col-sm-12 py-3">
                                <div class="">
                                    <h4 class="frequently-qsn-title">What projects can I do on Scholarship australia?
                                    </h4>
                                    <p class="frequently-qsn-details">
                                        Anything people generally do on a computer. Popular tasks are web, mobile and
                                        software development, design
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
