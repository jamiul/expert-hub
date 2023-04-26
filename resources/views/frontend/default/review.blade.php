<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ my_asset('public/assets/frontend/default/css/custom.css') }}">
</head>

<body>
    @extends('frontend.default.layouts.app')


    @section('content')
    <div>
        <div class="mx-3 rounded-md my-2 py-5" style="background: #F2F7F2;">
            <div class="row">
                <div class="col-lg-6 my-auto py-2 px-5">
                    <h3 class="fw-700 text-success fs-24px">Reviews on Scholarship australia</h3>
                    <p class="fs-18px text-black">See how clients and talent celebrate their wins and stay accountable for their work together, or join today to make your own connections.</p>

                    <button class="border-none rounded-2 text-white fs-16  bg-success px-3 py-2">Join scholarship</button>
                </div>
                <div class="col-lg-6 py-2 px-5">
                    <img src="{{my_asset('review-banner.jpeg')}}" class="w-100 h-100 rounded-lg" alt="">
                </div>
            </div>
        </div>
        <div class="mt-5 container">
            <h3 class="w-50 fw-700 display-6">Clients and talent leave each other 20k new reviews per week</h3>
            <div class="w-95 row mt-3 rounded-2" style="background: #F2F7F2;">
                <div class="col-lg-6 col-md-6 col-sm-12 p-3 ">
                    <h4 class="fw-600">Clients rate talent
                        <span></span>
                        4.9/5
                    </h4>
                    <p>Based on 2.9 million reviews
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                    <h4 class="fw-600">Clients rate talent
                        <span></span>
                        4.9/5
                    </h4>
                    <p class="fs-1">Based on 2.9 million reviews
                    </p>

                </div>

            </div>
        </div>

        <div class="mt-5 container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h2>What they're saying</h2>
                    <div class="mt-3">
                        <h5 class="fw-bold">All Specializations</h5>
                        <h5 class="text-muted " style="cursor:pointer;">Development & IT</h5>
                        <h5 class="text-muted " style="cursor:pointer;">Design & Creative</h5>
                        <h5 class="text-muted " style="cursor:pointer;">Sales & Marketing</h5>
                        <h5 class="text-muted " style="cursor:pointer;">Writing & Translation</h5>
                        <h5 class="text-muted " style="cursor:pointer;">Admin & Customer Support</h5>
                        <h5 class="text-muted " style="cursor:pointer;">Finance & Accounting</h5>
                        <h5 class="text-muted " style="cursor:pointer;">Engineering & Architecture</h5>
                        <h5 class="text-muted " style="cursor:pointer;">Legal</h5>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 " style="height:450px; overflow-y:scroll;">
                    <div class="border border border-white rounded-2 p-3 my-2">
                        <h3>Stephen and Amiya worked together through Talent Marketplace</h3>
                        <div class="mt-5 ">
                            <span class="text-mute">Client</span>
                            <h4>Stephen is a seasoned trademark attorney who is very clear in his approach. Swift, knowledgeable, to the point, sticks to the schedules and reliable when it comes to Trademark Office Action responses. Highly Recommended !</h4>
                            <p class="text-center">Amiya D. <span class="text-mute">
                                    India</span> </p>
                        </div>
                        <div class="mt-5">
                            <span class="text-mute">Talent
                            </span>
                            <h4>Amiya was a great client. Clear deliverable and fast at responding. I look forward to working together in the future and I was happy to solve his problems.

                            </h4>
                            <p class="text-center">Stephen P.
                                <span class="text-mute"> United States</span>
                            </p>
                        </div>
                    </div>
                    <div class="border border border-white rounded-2 p-3">
                        <h3>Stephen and Amiya worked together through Talent Marketplace</h3>
                        <div class="mt-5 ">
                            <span class="text-mute">Client</span>
                            <h4>Stephen is a seasoned trademark attorney who is very clear in his approach. Swift, knowledgeable, to the point, sticks to the schedules and reliable when it comes to Trademark Office Action responses. Highly Recommended !</h4>
                            <p class="text-center">Amiya D. <span class="text-mute">
                                    India</span> </p>
                        </div>
                        <div class="mt-5">
                            <span class="text-mute">Talent
                            </span>
                            <h4>Amiya was a great client. Clear deliverable and fast at responding. I look forward to working together in the future and I was happy to solve his problems.

                            </h4>
                            <p class="text-center">Stephen P.
                                <span class="text-mute"> United States</span>
                            </p>
                        </div>
                    </div>
                    <div class="border border border-white rounded-2 p-3">
                        <h3>Stephen and Amiya worked together through Talent Marketplace</h3>
                        <div class="mt-5 ">
                            <span class="text-mute">Client</span>
                            <h4>Stephen is a seasoned trademark attorney who is very clear in his approach. Swift, knowledgeable, to the point, sticks to the schedules and reliable when it comes to Trademark Office Action responses. Highly Recommended !</h4>
                            <p class="text-center">Amiya D. <span class="text-mute">
                                    India</span> </p>
                        </div>
                        <div class="mt-5">
                            <span class="text-mute">Talent
                            </span>
                            <h4>Amiya was a great client. Clear deliverable and fast at responding. I look forward to working together in the future and I was happy to solve his problems.

                            </h4>
                            <p class="text-center">Stephen P.
                                <span class="text-mute"> United States</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5 py-5" style="background: #F7FAF7;">
            <div class="container py-3">
                <h3 class="fw-700 text-black fs-25">See how businesses get work done on Scholarship australia</h3>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <iframe class="embed-responsive-item d-block" src=""></iframe>
                        <button class="bg-success mt-4 py-2 px-4 text-white fw-bold fs-16 rounded-1 border-none">
                            Read more success stories
                        </button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="card bg-white ">
                                    <div class="p-3">
                                        <h4 class="fw-700 fs-22 mb-5">Nasdaq Leans on Hybrid Teams to Transform Itself into a Digital Media Leader</h4>
                                        <a href="" class="fs-16 mt-5">Read Article</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">

                                <div class="card bg-white">
                                    <div class="p-3">
                                        <h4 class="fw-700 fs-22 mb-5">Nasdaq Leans on Hybrid Teams to Transform Itself into a Digital Media Leader</h4>
                                        <a href="" class="fs-16 mt-5 underline">Read Article</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2 d-flex align-content-center mt-5  ">
                    <h4 class="text-muted py-3 px-5">Trusted By </h4>
                    <img class=" py-3 px-5" src="{{my_asset('Microsoft.svg')}}" alt="">
                    <img class=" py-3 px-5" src="{{my_asset('Airbnb.svg')}}" alt="">
                    <img class=" py-3 px-5" src="{{my_asset('automatic.svg')}}" alt="">
                    <img class=" py-3 px-5" src="{{my_asset('Bissell.svg')}}" alt="">
                    <img class=" py-3 px-5" src="{{my_asset('NASDAQ.svg')}}" alt="">

                </div>
            </div>

        </div>

        <div class="bg-white">
            <div class="container">
                <h3 class="fw-700 text-black fs-25">Explore worldwide reviews</h3>
                <div class="row mt-3">
                    <div class="col-lg-3 col-md-6 col-sm-12 ">
                        <h5 class="fs-16 py-1">Scholarship australia South Africa Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia Pakistan Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia Nigeria Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia United Arab Emirates...</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h5 class="fs-16 py-1">Scholarship australia Australia Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia Great Britain Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia Canada Reviews</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h5 class="fs-16 py-1">Scholarship australia India Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia Philippines Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia Israel Reviews</h5>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h5 class="fs-16 py-1">Scholarship australia Singapore Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia New Zealand Reviews</h5>
                        <h5 class="fs-16 py-1">Scholarship australia United States Reviews</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <h3 class="mb-5 fw-700 text-black fs-25">See what people say about other ways to work</h3>
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-12 rounded-2 mx-3 " style="background: #E4EBE4; cursor:pointer;">
                    <div class="py-2 px-1">
                        <h4 class="mb-3 py-2 text-black fs-20 display-2 fw-700">Talent Marketplace</h4>
                        <a class="my-3 fs-16 " href="">Read Reviews</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rounded-2 mx-3 " style="background: #E4EBE4;cursor:pointer;">
                    <div class="py-2 px-1">
                        <h4 class="mb-3 py-2 text-black fs-20 display-2 fw-700">Enterprise Suite</h4>
                        <a class="my-3 fs-16 " href="">Read Reviews</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rounded-2 mx-3" style="background: #E4EBE4; cursor:pointer;">
                    <div class="py-2 px-1">
                        <h4 class="mb-3 py-2 text-black fs-20 display-2 fw-700">Project Catalog</h4>
                        <a class="my-3 fs-16 " href="">Read Reviews</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- How to get started -->
        <div class="container mt-5">
            <h4 class="fw-700 text-black fs-25">How to get started</h4>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active fs-16" id="hiring-talent-tab" data-toggle="tab" href="#hiring" role="tab" aria-controls="hiring" aria-selected="true">Hiring talent</a>
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

                                    <div class="my-2 rounded-1 h-150px" style="background: #91E6B3;">
                                        <img class="mx-auto d-block  h-120px" src="{{my_asset('Post-A-Job.png')}}" alt="">
                                    </div>
                                    <h5>Post a job (it’s free)</h5>
                                    <p class="fs-16 text-muted">Tell us what you need. Provide as many details as possible, but don’t worry about getting it perfect.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 rounded-1 h-150px" style="background: #91E6B3;">
                                        <img class="mx-auto d-block  h-120px" src="{{my_asset('How_it_Works.png')}}" alt="">
                                    </div>
                                    <h5>Talent comes to you</h5>
                                    <p class="fs-16 text-muted">Get qualified proposals within 24 hours, and meet the candidates you’re excited about. Hire as soon as you’re ready.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 rounded-1 h-150px" style="background: #91E6B3;">
                                        <img class="mx-auto d-block  h-120px" src="{{my_asset('How_it_Works_1.png')}}" alt="">
                                    </div>
                                    <h5>Collaborate easily</h5>
                                    <p class="fs-16 text-muted">Use scholarship australia to chat or video call, share files, and track project progress right from the app.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 rounded-1 h-150px" style="background: #91E6B3;">
                                        <img class="mx-auto d-flex justify-content-center align-content-center   h-120px" src="{{my_asset('How_it_Works_2.png')}}" alt="">
                                    </div>
                                    <h5>Payment simplified</h5>
                                    <p class="fs-16 text-muted">Receive invoices and make payments through scholarship australia. Only pay for work you authorize.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">

                            <button class="mt-3 border-none bg-success py-2 px-3 rounded-2 text-white fw-bold fs-16 ">Find talent</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="finding" role="tabpanel" aria-labelledby="finding-work-tab">
                    <div class=" row mt-3">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 rounded-1 h-150px" style="background: #91E6B3;">
                                        <img class="mx-auto d-block  h-120px" src="{{my_asset('Post-A-Job.png')}}" alt="">
                                    </div>
                                    <h5>Create your profile (it’s free)</h5>
                                    <p class="fs-16 text-muted">An eye-catching title and client-focused overview help us match you to the work you want. Include your work history, your skills, and your photo. Add more, like an introduction video, to create a profile that really stands out.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 rounded-1 h-150px" style="background: #91E6B3;">
                                        <img class="mx-auto d-block  h-120px" src="{{my_asset('How_it_Works_1.png')}}" alt="">
                                    </div>
                                    <h5>Explore ways to earn</h5>
                                    <p class="fs-16 text-muted">Work and earn in different ways. Bid for jobs. Pitch your projects. Discuss your in-demand skills with our recruiters so they can find opportunities aligned with your passions and career goals. Do all three. Create a predictable pipeline and build your network.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class=" shadow-sm " style="background: #F2F7F2;">
                                <div class="px-3 py-2">

                                    <div class="my-2 rounded-1 h-150px" style="background: #91E6B3;">
                                        <img class="mx-auto d-flex justify-content-center align-content-center   h-120px" src="{{my_asset('How_it_Works_2.png')}}" alt="">
                                    </div>
                                    <h5>Get paid securely</h5>
                                    <p class="fs-16 text-muted">Choose how you get paid. Our fixed-price protection releases client payments at project milestones. Hourly protection bills clients every week. However you work, our service fees are the same. Spend less time chasing, more earning.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">

                            <button class="mt-3 border-none bg-success py-2 px-3 rounded-2 text-white fw-bold fs-16 ">Create Your Profile</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Frequently asked questions -->
        <div class="container mt-5 rounded-2" style="background: #F2F7F2;">
            <div class="mx-2 row">
                <div class="col-lg-6 col-sm-12 py-3">
                    <h1 class="fw-700 text-black fs-30px">
                        Frequently asked questions
                    </h1>
                </div>
                <div class="col-lg-6 col-sm-12 py-3">
                    <div class=" border-bottom">

                        <h4 class="fw-700 text-black fs-16px">How to get reviews on scholarship australia?</h4>
                        <p class="text-muted fs-14px">
                            A 14-day feedback period opens at the end of a contract where both the client and talent can leave each other a review. The client is asked to give a review as part of ending the contract and most clients do. The
                        </p>
                    </div>
                    <div class=" border-bottom my-2">
                        <input type="checkbox" id="leave">
                        <h4 class="fw-700 text-black fs-16px">How to leave a review on scholarship australia?</h4>
                        <p class="text-muted fs-14px">
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
                        <h4 class="fw-700 text-black fs-16px">How to contest a review on scholarship australia?</h4>
                        <p class="text-muted fs-18px">
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
                        <h4 class="fw-700 text-black fs-16px ">Where can you check your reviews on scholarship australia?</h4>


                        <p class="text-muted fs-14px">
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

        <div class="container mt-5 rounded-2" style="background: #1F57C3;">
            <div class="row mx-2 py-3">
                <div class="col-lg-3 col-sm-12">
                    <img class="img-fluid" src="{{my_asset('powerful-relationship.jpg')}}" alt="">
                </div>
                <div class="col-lg-9 col-sm-12">
                    <h1 class="fw-700 text-white fs-30px">Build powerful relationships, one review at a time</h1>
                    <div class="border-bottom border-white mt-5"></div>

                    <div class="row mt-4">
                        <h5 class="col-lg-9 text-white  fs-16px">Join the world’s work marketplace and get work done, your way. </h5>
                        <div class=" col-lg-3  border border-white rounded-2 joinscholarship">
                            <p class="text-white text-center d-flex justify-content-center align-content-center fs-14px ">Join scholarship australia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
</body>

</html>
