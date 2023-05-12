<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ my_asset('public/assets/frontend/default/css/custom.css') }}">
</head>

<body>
    @extends('frontend.default.layouts.app')


    @section('content')
    <div>
        <div class="mx-2 rounded-2 my-3 position-relative" style="background: #F2F7F2;">
            <div class="row py-3">
                <div class="col-lg-6 py-2 px-5 mt-3 wrap  ">
                    <h3 class="how-to-hire-banner-title text-success">Choose your way to get work done</h3>
                    <p class="how-to-hire-banner-text">Find freelancers and run projects your way at the world’s work marketplace.</p>

                    <button class="btn btn-primary text-white fs-16  px-3 py-2">Find talent</button>

                    <div class="position-absolute find-job-banner-rating-section ">
                        <p class=' fs-20'>Looking to get hired? <u class="text-success"><a class="text-decoration-underline " href="#">Sign up here</a></u></p>
                    </div>

                </div>
                <div class="col-lg-6 py-2 px-5 ">
                    <img src="{{my_asset('how-tohire-banar.jpg')}}" class="rounded-2 img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="container-main  ">
            <div class="">
                <h1 class="hth-lets-work-title ">Let’s get to work</h1>
                <p class="hth-lets-work-text w-sm-90">Build relationships and create your own Virtual Talent Bench™ for quick project turnarounds or big transformations.</p>
                <div class="border-bottom border-gray mt-3"></div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-lg-6 col-sm-12 ">
                    <img class="img-fluid rounded-2" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/postJob.jpg')}}" alt="">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-sm-12 my-auto">
                    <h1 class="get-work-child-title ">Post a job and hire a pro</h1>
                    <h3 class="get-work-child-text">Connect with talent that gets you with Talent Marketplace</h3>
                    <p class="get-work-child-details mb-3">Post your job on the world’s work marketplace and wait for the proposals to flood in from talented people around the world.</p>
                    <p class="get-work-child-details">Our advanced algorithms help you shortlist candidates who are the best fit. And you can check profiles, portfolios, and reviews before you give someone the green light.</p>
                    <button class="border-0  text-white fs-16  btn btn-primary px-3 py-2 mt-3">Find talent</button>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-5 col-sm-12 my-auto">
                    <h1 class="get-work-child-title ">Browse and buy projects</h1>
                    <h3 class="get-work-child-text">Start critical work right away with Project Catalog</h3>
                    <p class="get-work-child-details">Rather skip the guesswork? Shop projects already planned for you by the talent who know them best.</p>
                    <p class="get-work-child-details">No need to create a job post or sift through a shortlist. Just browse, buy, and get going right away, with clear expectations from the start.</p>
                    <button class="border-0 text-white fs-16 btn btn-primary px-3 py-2 mt-3">Browse Projects</button>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-sm-12 ">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 ">
                            <div class="card h-100 position-relative">
                                <img class="card-img-top rounded-1" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/Browse-1.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">You will get a perfect logo designed for your business</p>
                                </div>
                                <p class="pl-4 fw-700 text-black">From $100</p>
                                <div class="bg-white rounded-2 hth-profile-active position-absolute">
                                    <div class="px-3 py-1 d-flex">
                                        <img class="rounded-circle pr-1 position-relative" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/card_profile-1.png')}}" alt="">
                                        <p class="fs-14 ">Stefan M.</p>
                                        <!-- <div class="position-absolute bg-danger h-10px w-10px rounded-circle end-0"> -->

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 ">
                            <div class="card  h-100 position-relative">
                                <img class="card-img-top" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/Browse-2.jpeg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">You will get a fully customizable WordPress website. No code needed.</p>
                                </div>
                                <p class="pl-4 fw-700 text-black ">From $300</p>
                                <div class="bg-white rounded-2 hth-profile-active position-absolute">
                                    <div class="px-3 py-1 d-flex">
                                        <img class="rounded-circle pr-1 position-relative" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/card_profile-2.png')}}" alt="">
                                        <p class="fs-14 ">Md. Mojahidul I.</p>

                                        <!-- <div class="position-absolute bg-danger h-10px w-10px rounded-circle end-0"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row container-main mb-5">
        <div class="col-lg-6 col-sm-12 ">
            <div class="row">
                <div class="col-6 ">
                    <div class="py-2  h-100" style="background:#F2F7F2">
                        <img class="rounded-circle w-150px h-150px mx-auto d-block mt-3 mb-1" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/profile-1.jpeg')}}" alt="Card image cap">
                        <div class="text-center">
                            <p class="text-black fw-700 fs-20px">Fernanda P.</p>
                            <p class="">UX/UI Designer</p>
                        </div>
                        <p class="fw-700 text-black text-center my-5">5.0
                            /5
                            (96 jobs)</p>
                    </div>
                </div>
                <div class="col-6  ">
                    <div class="h-100 py-2" style="background:#F2F7F2">
                        <img class="rounded-circle w-150px h-150px mx-auto d-block mt-3 mb-1" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/profile-2.jpeg')}}" alt="Card image cap">
                        <div class="text-center">
                            <p class=" text-black fw-700 fs-20px">Ron Z.</p>
                            <p class="card-text">Front-end developer</p>
                        </div>
                        <div>
                            <p class="fw-700 text-black text-center my-5">5.0
                                /5
                                (124 jobs)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 col-sm-12 my-auto">
            <h1 class="get-work-child-title  ">Take the fastlane to the right talent</h1>
            <h3 class="get-work-child-text">Let us pinpoint the talent to reach your goals with Talent Scout</h3>
            <p class="get-work-child-detailsmt-2">Talk us through your budget and goals and we’ll do the recruitment for you. You’ll get a shortlist of our very best talent, all perfectly suited to the task.</p>
            <button class="border-0 text-white fs-16  btn btn-primary px-3 py-2 mt-3">Find Out More</button>
        </div>
    </div>

    <div class="row container-main">
        <div class="col-lg-6 col-sm-12 my-auto">
            <h1 class="get-work-child-title  ">4 Ways to Use Scholarship australia to Achieve Your Goals</h1>
            <p class="get-work-child-details">As the world’s work marketplace, there’s more than one way to use Scholarship australia—and at least one that works for you. From quick project turnarounds to major strategic transformations, businesses of all sizes and ambitions can develop the trusted relationships they need to thrive and grow.</p>
        </div>
        <div class="col-lg-6 col-sm-12 ">

            <iframe width="515" height="315" src="https://www.youtube.com/embed/pQOnlFtLo3w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        </div>
    </div>

    <div class="container-main">
        <h1 class="hth-lets-work-title">The seal of approval</h1>
        <div class=" border-bottom mt-3"></div>
        <div class="row mt-3">
            <div class="col-lg-6 col-12">
                <p class="approvalHead">You’ll have plenty of help choosing the right person for the job. And no matter who you’re hiring you can:</p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="approvalCheckMark">
                    <div class="d-flex mb-2 approvalCheckMark">
                        <img class="mr-3" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/check-mark.png')}}" alt="">
                        <p>Browse similar projects they’ve worked on</p>
                    </div>
                    <div class="d-flex mb-2 approvalCheckMark">
                        <img class="mr-3" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/check-mark.png')}}" alt="">
                        <p>Directly access proven talent without unnecessary layers</p>
                    </div>
                    <div class="d-flex mb-2 approvalCheckMark">
                        <img class="mr-3" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/check-mark.png')}}" alt="">
                        <p>Check their portfolio</p>
                    </div>
                    <div class="d-flex mb-2 approvalCheckMark">
                        <img class="mr-3" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/check-mark.png')}}" alt="">
                        <p>Check qualifications</p>
                    </div>
                    <div class="d-flex  approvalCheckMark">
                        <img class="mr-3" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/check-mark.png')}}" alt="">
                        <p>Run a chat or video interview</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Trusted By -->
    <div class="container-main">
        <div class="row ">
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
                        <img class=" " src="{{my_asset('NASDAQ.svg')}}" alt="">
                    </div>
                </div>

            </div>
        </div>
        <hr>
    </div>


    <div class="mt-5">
        <div class="row mt-5 mb-5">
            <div class="col-lg-5 col-sm-12 mr-5">
                <img class="img-fluid rounded-right-2 h-650px" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/safe-with-us.jpg')}}" alt="">
            </div>

            <div class="col-lg-5 col-sm-12 mt-5 ml-lg-5 mx-sm-auto">
                <div>
                    <h1 class="hth-safe-us ">You’re safe with us</h1>
                    <h3 class="hth-safe-text">You get what you pay for. And we can prove it.</h3>
                    <p class="text-black fw-bold mb-4 fs-18">On hourly contracts, <span class="text-muted">we count keystrokes and take random screenshots of your freelancer’s screen so you can see they’re putting in the time.</span></p>

                    <p class="text-black fw-bold mt-4 fs-18">On fixed-price contracts,<span class="text-muted">you agree on milestones and only pay up when those milestones are hit.</span> </p>
                </div>
                <div class="mt-4">
                    <h1 class="hth-safe-us ">All in one place</h1>
                    <h3 class="hth-place-text">Once you sign in you’ll get your own online space to manage your project.</h3>
                    <p class="text-muted fs-18">Use it to securely send and receive files, give real-time feedback and make payments. And if you’re out and about a lot, you’ll want to download the app too.</p>
                </div>

            </div>
        </div>
    </div>

    <!-- Frequently asked questions -->
    <div class="container-main-freQus rounded-2" style="background: #F2F7F2;">
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
                        Anything people generally do on a computer. Popular tasks are web, mobile and software development, design work and copywriting, but you can also find lawyers, accountants and more.
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

    @endsection
</body>

</html>
