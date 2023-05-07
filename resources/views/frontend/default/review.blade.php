<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{ my_asset('public/assets/frontend/default/css/custom.css') }}">
</head>

<body>
    @extends('frontend.default.layouts.app')


    @section('content')
    <div>
        <div class="mx-3 rounded-md my-2 " style="background: #F2F7F2;">
            <div class="row py-2">
                <div class="col-lg-6 mt-4 px-5 review-banner-main">
                    <h3 class=" text-success review-banner-title">Reviews on Scholarship Australia</h3>
                    <p class="review-banner-text">See how clients and talent celebrate their wins and stay accountable for their work together, or join today to make your own connections.</p>

                    <button class="  text-white fs-16 btn btn-primary  px-3 py-2">Join scholarship</button>
                </div>
                <div class="col-lg-6  py-2 px-5">
                    <img src="{{my_asset('review-banner.jpeg')}}" class="w-100 h-100 rounded-2" alt="">
                </div>
            </div>
        </div>
        <div class=" container-main">
            <h3 class="review-per-week-title">Clients and talent leave each other 20k new reviews per week</h3>
            <div class="w-95 row mt-3 rounded-2" style="background: #F2F7F2;">
                <div class="col-lg-6 col-md-6 col-sm-12 p-3 ">
                    <h4 class="review-clients">
                        Clients rate talent
                        <img class="pb-1" src="{{my_asset('assets/frontend/default/img/whyScholarship/reviews/rating.svg')}}" alt="">
                        4.9/5
                    </h4>
                    <p>Based on <span class="fw-700">2.9 million</span> reviews
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <h4 class="review-clients">Clients rate talent
                        <img class="pb-1" src="{{my_asset('assets/frontend/default/img/whyScholarship/reviews/rating.svg')}}" alt="">
                        4.9/5
                    </h4>
                    <p class="fs-1">Based on <span class="fw-700">2.9 million</span> reviews
                    </p>

                </div>

            </div>
        </div>

        <div class=" container-main ">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h2>What they're saying</h2>
                    <div class="mt-3">
                        <h5 class="fw-bold mb-2 review-they-say-topic">All Specializations</h5>
                        <h5 class="review-they-say-topic ">Development & IT</h5>
                        <h5 class="review-they-say-topic">Design & Creative</h5>
                        <h5 class="review-they-say-topic">Sales & Marketing</h5>
                        <h5 class="review-they-say-topic">Writing & Translation</h5>
                        <h5 class="review-they-say-topic">Admin & Customer Support</h5>
                        <h5 class="review-they-say-topic">Finance & Accounting</h5>
                        <h5 class="review-they-say-topic">Engineering & Architecture</h5>
                        <h5 class="review-they-say-topic">Legal</h5>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 review-say-customer">


                    <div class="border border border-white rounded-2 p-3 my-2">
                        <p class="fw-600 fs-30 ">Stephen <span class="text-muted fw-600 ">and</span> Amiya <span class="text-muted">worked together through</span> Talent Marketplace</p>
                        <div class="mt-3 ">
                            <span class="text-muted fs-16 mb-3">Client</span>
                            <h4 class="review-say-customer-review mt-2">Stephen is a seasoned trademark attorney who is very clear in his approach. Swift, knowledgeable, to the point, sticks to the schedules and reliable when it comes to Trademark Office Action responses. Highly Recommended !</h4>
                            <p class="fw-600 fs-16">Amiya D. <span class="text-muted">
                                    India</span> </p>
                        </div>
                        <div class="mt-3">
                            <span class="text-muted fs-16 mb-3">Talent
                            </span>
                            <h4 class="mt-2 review-say-customer-review">Amiya was a great client. Clear deliverable and fast at responding. I look forward to working together in the future and I was happy to solve his problems.
                            </h4>
                            <p class="fw-600 fs-16">Stephen P.
                                <span class="text-muted"> United States</span>
                            </p>
                        </div>
                    </div>
                    <div class="border border border-white rounded-2 p-3 my-2">
                        <p class="fw-600 fs-30 ">Stephen <span class="text-muted fw-600 ">and</span> Amiya <span class="text-muted">worked together through</span> Talent Marketplace</p>
                        <div class="mt-3 ">
                            <span class="text-muted fs-16 mb-3">Client</span>
                            <h4 class="review-say-customer-review mt-2">Stephen is a seasoned trademark attorney who is very clear in his approach. Swift, knowledgeable, to the point, sticks to the schedules and reliable when it comes to Trademark Office Action responses. Highly Recommended !</h4>
                            <p class="fw-600 fs-16">Amiya D. <span class="text-muted">
                                    India</span> </p>
                            <p class=" bg-gray rounded-2 p-2">Legal</p>
                        </div>
                        <div class="mt-3">
                            <span class="text-muted fs-16 mb-3">Talent
                            </span>
                            <h4 class="mt-2 review-say-customer-review">Amiya was a great client. Clear deliverable and fast at responding. I look forward to working together in the future and I was happy to solve his problems.
                            </h4>
                            <p class="fw-600 fs-16">Stephen P.
                                <span class="text-muted"> United States</span>
                            </p>
                            <p class=" bg-gray rounded-2 p-2">Legal</p>
                        </div>
                    </div>
                    <div class="border border border-white rounded-2 p-3 my-2">
                        <p class="fw-600 fs-30 ">Stephen <span class="text-muted fw-600 ">and</span> Amiya <span class="text-muted">worked together through</span> Talent Marketplace</p>
                        <div class="mt-3 ">
                            <span class="text-muted fs-16 mb-3">Client</span>
                            <h4 class="review-say-customer-review mt-2">Stephen is a seasoned trademark attorney who is very clear in his approach. Swift, knowledgeable, to the point, sticks to the schedules and reliable when it comes to Trademark Office Action responses. Highly Recommended !</h4>
                            <p class="fw-600 fs-16">Amiya D. <span class="text-muted">
                                    India</span> </p>
                        </div>
                        <div class="mt-3">
                            <span class="text-muted fs-16 mb-3">Talent
                            </span>
                            <h4 class="mt-2 review-say-customer-review">Amiya was a great client. Clear deliverable and fast at responding. I look forward to working together in the future and I was happy to solve his problems.

                            </h4>
                            <p class="fw-600 fs-16">Stephen P.
                                <span class="text-muted"> United States</span>
                            </p>
                            <p class=" bg-gray rounded-2 p-2">Legal</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="my-5 py-5" style="background: #F7FAF7;">
            <div class="review-work-done py-3">
                <h3 class="fw-700 text-black fs-25">See how businesses get work done on Scholarship australia</h3>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <iframe width="500" height="315" src="https://www.youtube.com/embed/pQOnlFtLo3w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <button class="btn btn-primary mt-4 py-2 px-4 text-white fw-bold fs-16  border-0">
                            Read more success stories
                        </button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-6 rounded-1">
                                <div class="card bg-white ">
                                    <div class="p-3 review-work-done-card">
                                        <h4 class="fw-700 fs-22 mb-5">Nasdaq Leans on Hybrid Teams to Transform Itself into a Digital Media Leader</h4>
                                        <a href="" class=" review-work-done-read">Read Article</a> <img src="{{my_asset('assets/frontend/default/img/whyScholarship/reviews/arrow.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 rounded-1">

                                <div class="card bg-white">
                                    <div class="p-3  review-work-done-card">
                                        <h4 class="fw-700 fs-22 mb-5">Nasdaq Leans on Hybrid Teams to Transform Itself into a Digital Media Leader</h4>
                                        <a href="" class=" review-work-done-read">Read Article</a> <img src="{{my_asset('assets/frontend/default/img/whyScholarship/reviews/arrow.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="bg-white rounded-1  mt-5  review-work-done ">
                <div class="row my-auto py-4 px-3">
                    <div class="col-6">
                        <div class="row ">
                            <div class="col-lg-4 col-sm-12">
                                <h4 class="trusted ">Trusted By </h4>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{my_asset('Microsoft.svg')}}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{my_asset('Airbnb.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{my_asset('automatic.svg')}}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{my_asset('Bissell.svg')}}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" pt-2" src="{{my_asset('NASDAQ.svg')}}" alt="">
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>

        <div class="bg-white">
            <div class="">
                <h3 class="review-explore-worldwide-title">Explore worldwide reviews</h3>
                <div class="row mt-5 mx-sm-auto">
                    <div class="col-lg-3 col-md-6 col-sm-12 review-explore-worldwide-topic ">
                        <h5 class="fs-16 py-1">Scholarship australia South Africa Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia Pakistan Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia Nigeria Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia United Arab Emirates...</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 review-explore-worldwide-topic">
                        <h5 class="fs-16 py-1">Scholarship australia Australia Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia Great Britain Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia Canada Reviews</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 review-explore-worldwide-topic">
                        <h5 class="fs-16 py-1">Scholarship australia India Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia Philippines Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia Israel Reviews</h5>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 review-explore-worldwide-topic">
                        <h5 class="fs-16 py-1">Scholarship australia Singapore Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia New Zealand Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia United States Reviews</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-main ">
            <h3 class="review-say-other-way-title">See what people say about other ways to work</h3>
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-12 rounded-1 mx-3 my-sm-2 c-pointer " style="background: #f2f7f2;">
                    <div class="py-2 px-1">
                        <h4 class="review-say-other-way-card-text">Talent Marketplace</h4>
                        <a href="" class=" review-work-done-read">Read Article</a> <img src="{{my_asset('assets/frontend/default/img/whyScholarship/reviews/arrow.svg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rounded-1 c-pointer mx-3 my-sm-2" style="background: #f2f7f2;">
                    <div class="py-2 px-1">
                        <h4 class="review-say-other-way-card-text">Enterprise Suite</h4>
                        <a href="" class=" review-work-done-read">Read Article</a> <img src="{{my_asset('assets/frontend/default/img/whyScholarship/reviews/arrow.svg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rounded-1 mx-3 my-sm-2 c-pointer" style="background: #f2f7f2;">
                    <div class="py-2 px-1">
                        <h4 class="review-say-other-way-card-text">Project Catalog</h4>
                        <a href="" class=" review-work-done-read">Read Article</a> <img src="{{my_asset('assets/frontend/default/img/whyScholarship/reviews/arrow.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- How to get started -->
        <div class="container-main ">
            <h4 class="review-get-started-title">How to get started</h4>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active fs-16  " id="hiring-talent-tab" data-toggle="tab" href="#hiring" role="tab" aria-controls="hiring" aria-selected="true">Hiring talent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-16" id="finding-work-tab" data-toggle="tab" href="#finding" role="tab" aria-controls="finding" aria-selected="false">Finding work</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="hiring" role="tabpanel" aria-labelledby="hiring-talent-tab">
                    <div class=" row mt-3">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 height-lg-120px" style="background: #91E6B3; ">
                                        <img class="mx-auto d-block w-50" src="{{my_asset('Post-A-Job.png')}}" alt="">
                                    </div>
                                    <h5 class="review-hf-card-title">Post a job (it’s free)</h5>
                                    <p class="review-hf-card-text">Tell us what you need. Provide as many details as possible, but don’t worry about getting it perfect.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 height-lg-120px" style="background: #91E6B3; ">
                                        <img class="mx-auto  d-block w-50" src="{{my_asset('How_it_Works.png')}}" alt="">
                                    </div>
                                    <h5 class="review-hf-card-title">Talent comes to you</h5>
                                    <p class="review-hf-card-text">Get qualified proposals within 24 hours, and meet the candidates you’re excited about. Hire as soon as you’re ready.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 height-lg-120px" style="background: #91E6B3;">
                                        <img class="mx-auto d-block w-50" src="{{my_asset('How_it_Works_1.png')}}" alt="">
                                    </div>
                                    <h5 class="review-hf-card-title">Collaborate easily</h5>
                                    <p class="review-hf-card-text">Use scholarship australia to chat or video call, share files, and track project progress right from the app.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 height-lg-120px" style="background: #91E6B3;">
                                        <img class="mx-auto d-flex w-50 " src="{{my_asset('How_it_Works_2.png')}}" alt="">
                                    </div>
                                    <h5 class="review-hf-card-title">Payment simplified</h5>
                                    <p class="review-hf-card-text">Receive invoices and make payments through scholarship australia. Only pay for work you authorize.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">

                            <button class="mt-3 border-0 btn btn-primary py-2 px-3  text-white fw-bold fs-16 ">Find talent</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="finding" role="tabpanel" aria-labelledby="finding-work-tab">
                    <div class=" row mt-3">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 height-lg-120px" style="background: #91E6B3;">
                                        <img class="mx-auto d-block  w-50" src="{{my_asset('Post-A-Job.png')}}" alt="">
                                    </div>
                                    <h5 class="review-hf-card-title">Create your profile (it’s free)</h5>
                                    <p class="review-hf-card-text">An eye-catching title and client-focused overview help us match you to the work you want. Include your work history, your skills, and your photo. Add more, like an introduction video, to create a profile that really stands out.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 height-lg-120px" style="background: #91E6B3; ">
                                        <img class="mx-auto d-block  w-50" src="{{my_asset('How_it_Works_1.png')}}" alt="">
                                    </div>
                                    <h5 class="review-hf-card-title">Explore ways to earn</h5>
                                    <p class="review-hf-card-text">Work and earn in different ways. Bid for jobs. Pitch your projects. Discuss your in-demand skills with our recruiters so they can find opportunities aligned with your passions and career goals. Do all three. Create a predictable pipeline and build your network.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 height-lg-120px" style="background: #91E6B3;">
                                        <img class="mx-auto d-block w-50" src="{{my_asset('How_it_Works_2.png')}}" alt="">
                                    </div>
                                    <h5 class="review-hf-card-title">Get paid securely</h5>
                                    <p class="review-hf-card-text">{{translate('Choose how you get paid. Our fixed-price protection releases client payments at project milestones. Hourly protection bills clients every week. However you work, our service fees are the same. Spend less time chasing, more earning.')}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">

                            <button class="mt-3 border-0 btn btn-primary py-2 px-3  text-white fw-bold fs-16 ">Create Your Profile</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Frequently asked questions -->
        <div class="container-main rounded-2" style="background: #F2F7F2;">
            <div class="mx-2 row">
                <div class="col-lg-6 col-sm-12 py-3">
                    <h1 class="frequently-qsn-main-title">
                        Frequently asked questions
                    </h1>
                </div>
                <div class="col-lg-6 col-sm-12 py-3">
                    <div class=" border-bottom">

                        <h4 class="frequently-qsn-title">How to get reviews on scholarship australia?</h4>
                        <p class="frequently-qsn-details">
                            A 14-day feedback period opens at the end of a contract where both the client and talent can leave each other a review. The client is asked to give a review as part of ending the contract and most clients do. The
                        </p>
                    </div>
                    <div class=" border-bottom my-2">
                        <input type="checkbox" id="leave">
                        <h4 class="frequently-qsn-title">How to leave a review on scholarship australia?</h4>
                        <p class="frequently-qsn-details">
                            During the 14-day feedback period at the end of a contract, the client will be asked to leave a review while ending the contract. As the talent, you can also leave a review for the client by looking at your ended
                        </p>
                        <div class="content">
                            <p>
                                contracts within that same 14-day feedback period. The review will be public once both of you leave one for each other or the 14-day period ends.
                            </p>
                            <label for="leave">Show less <img class="w-15px h-15px arrow-icon " src="{{my_asset('upload.png')}}" alt=""></label>
                        </div>
                        <label for="leave">Read more <img class="w-15px h-15px arrow-icon " src="{{my_asset('down-chevron.png')}}" alt=""> </label>

                    </div>
                    <div class=" border-bottom">
                        <input type="checkbox" id="contest">
                        <h4 class="frequently-qsn-title">How to contest a review on scholarship australia?</h4>
                        <p class="frequently-qsn-details">
                            There’s a few ways to change how your review appears on scholarship australia starting with responding to a review. Within 28 days of the end of the contract, you can post a follow-up comment to a review about you that
                        </p>
                        <div class="content">
                            <p>
                                will show up on your public profile. You can also work directly with your client or talent to enable feedback changes and revise the review. If you feel the review violates scholarship australia’s terms of service and you would like to dispute a review, scholarship australia’s customer service team is there to help.
                            </p>
                            <label for="contest">Show less <img class="w-15px h-15px arrow-icon " src="{{my_asset('upload.png')}}" alt=""></label>
                        </div>

                        <label for="contest">Read more <img class="w-15px h-15px arrow-icon " src="{{my_asset('down-chevron.png')}}" alt=""></label>
                    </div>
                    <div class=" border-bottom content-blog">
                        <input type="checkbox" id="ch">
                        <h4 class="frequently-qsn-title ">Where can you check your reviews on scholarship australia?</h4>


                        <p class="frequently-qsn-details">
                            Seeing your reviews is easy on scholarship australia, simply visit your profile and all your public reviews will be there. If your contract just ended, it can take up to 14 days for your review to become public. You can also find your feedback for specific contracts in your contracts dashboard.
                        </p>
                        <div class="content ">
                            <label for="ch">Show less <img class="w-15px h-15px arrow-icon " src="{{my_asset('upload.png')}}" alt=""></label>
                        </div>
                        <label for="ch">Read more <img class="w-15px h-15px arrow-icon " src="{{my_asset('down-chevron.png')}}" alt=""></label>
                    </div>
                </div>
            </div>

        </div>

        <!-- powerful relationships, -->

        <div class="container-main-powerful  rounded-2" style="background: #1F57C3;">
            <div class="row mx-2 py-3">
                <div class="col-lg-5 col-sm-12">
                    <img class="img-fluid rounded-1" src="{{my_asset('powerful-relationship.jpg')}}" alt="">
                </div>
                <div class="col-lg-7 col-sm-12 lg-position-relative ">
                    <h1 class="fw-700 text-white fs-30px">Build powerful relationships, one review at a time</h1>

                    <div class="find-job-banner-rating-section lg-position-absolute top-0 end-0">
                        <div class="border-bottom border-white mt-5"></div>
                        <div class="row mt-4 ">

                            <h5 class="col-lg-8 text-white fs-16 bottom-0">Join the world’s work marketplace and get work done, your way. </h5>
                            <div class=" col-lg-4  border border-white rounded-1 join-scholarship-btn ">
                                <p class="text-white fs-14 ">Join scholarship australia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
</body>

</html>
