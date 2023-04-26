<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ my_asset('public/assets/frontend/default/css/custom.css') }}">
</head>

<body>
    @extends('frontend.default.layouts.app')


    @section('content')
    <>
        <div class="mx-2 rounded-2 my-3" style="background: #F2F7F2;">
            <div class="row py-3">
                <div class="col-lg-6 py-2 px-5 mt-3 wrap  ">
                    <h3 class="fw-700 text-success fs-40px">Choose your way to get work done</h3>
                    <p class="fs-18px text-black fw-bold py-3">Find freelancers and run projects your way at the world’s work marketplace.</p>

                    <button class="border-none rounded-2 text-white fs-16  bg-success px-3 py-2">Find talent</button>


                    <p class='mt-auto'>Looking to get hired? <a href="#">Sign up here</a></p>
                </div>
                <div class="col-lg-6 py-2 px-5 ">
                    <img src="{{my_asset('how-tohire-banar.jpg')}}" class="rounded-2 img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="container mt-4 ">
            <div class="">
                <h1 class="text-black fw-700 ">Let’s get to work</h1>
                <p class="get-work-title">Build relationships and create your own Virtual Talent Bench™ for quick project turnarounds or big transformations.</p>
                <div class="border-bottom border-gray mt-3"></div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-lg-6 col-sm-12 ">
                    <img class="img-fluid rounded-2" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/postJob.jpg')}}" alt="">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-sm-12 my-auto">
                    <h1 class="fw-700 text-black ">Post a job and hire a pro</h1>
                    <h3 class="text-muted">Connect with talent that gets you with Talent Marketplace</h3>
                    <p class="text-muted">Post your job on the world’s work marketplace and wait for the proposals to flood in from talented people around the world.</p>
                    <p class="text-muted mt-2">Our advanced algorithms help you shortlist candidates who are the best fit. And you can check profiles, portfolios, and reviews before you give someone the green light.</p>
                    <button class="border-none rounded-2 text-white fs-16  bg-success px-3 py-2 mt-3">Find talent</button>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-5 col-sm-12 my-auto">
                    <h1 class="fw-700 text-black ">Browse and buy projects</h1>
                    <h3 class="text-muted">Start critical work right away with Project Catalog</h3>
                    <p class="text-muted">Rather skip the guesswork? Shop projects already planned for you by the talent who know them best.</p>
                    <p class="text-muted mt-2">No need to create a job post or sift through a shortlist. Just browse, buy, and get going right away, with clear expectations from the start.</p>
                    <button class="border-none rounded-2 text-white fs-16  bg-success px-3 py-2 mt-3">Browse Projects</button>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-sm-12 ">
                    <div class="row">
                        <div class="col-6">
                            <div class="card  h-100" style="width: 18rem;">
                                <img class="card-img-top" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/Browse-1.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">You will get a perfect logo designed for your business</p>
                                </div>
                                <p class="pl-4 fw-700 text-black">From $100</p>
                            </div>
                        </div>
                        <div class="col-6 ">
                            <div class="card  h-100" style="width: 18rem;">
                                <img class="card-img-top" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/Browse-2.jpeg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">You will get a fully customizable WordPress website. No code needed.</p>
                                </div>
                                <p class="pl-4 fw-700 text-black ">From $300</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-lg-6 col-sm-12 ">
                    <div class="row">
                        <div class="col-6 ">
                            <div class="py-2  h-100" style="width: 18rem;background:#F2F7F2">
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
                            <div class="h-100 py-2" style="width: 18rem; background:#F2F7F2">
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
                    <h1 class="fw-700 text-black ">Take the fastlane to the right talent</h1>
                    <h3 class="text-muted">Let us pinpoint the talent to reach your goals with Talent Scout</h3>
                    <p class="text-muted mt-2">Talk us through your budget and goals and we’ll do the recruitment for you. You’ll get a shortlist of our very best talent, all perfectly suited to the task.</p>
                    <button class="border-none rounded-2 text-white fs-16  bg-success px-3 py-2 mt-3">Find Out More</button>
                </div>
            </div>


        </div>
        </div>
        @endsection
</body>

</html>
