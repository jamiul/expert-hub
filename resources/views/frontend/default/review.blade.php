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

    <div class="container mt-5">
        <h4 class="fw-700 text-black fs-25">How to get started</h4>
        <div class="border-bottom mt-3">
            <div class="d-flex">
                <h5 class="mr-3">Hiring talent</h5>
                <h5>Finding work</h5>
            </div>
        </div>
        <div>
            <div class=" row mt-3" >
                <div class="mr-3 shadow-sm col-lg-3 col-md-6 col-sm-12"  style="background: #F2F7F2;">
                   <div class="my-2 rounded-1 h-150px" style="background: #91E6B3;">
                   <img class="mx-auto d-block w-150px h-120px" src="{{my_asset('Post-A-Job.png')}}" alt="" style="">
                   </div>
                    <h5>Post a job (it’s free)</h5>
                    <p class="fs-16 text-muted">Tell us what you need. Provide as many details as possible, but don’t worry about getting it perfect.</p>
                </div>
                <div class=" shadow-sm col-lg-3 col-md-6 col-sm-12"  style="background: #F2F7F2;">
                   <div class="my-2  text-center rounded-1 h-150px" style="background: #91E6B3;">
                   <img class="mx-auto d-block w-170px h-120px" src="{{my_asset('Post-A-Job.png')}}" alt="" style="">
                   </div>
                    <h5>Post a job (it’s free)</h5>
                    <p class="fs-16 text-muted">Tell us what you need. Provide as many details as possible, but don’t worry about getting it perfect.</p>
                </div>
                <div class=" shadow-sm col-lg-3 col-md-6 col-sm-12"  style="background: #F2F7F2;">
                   <div class="my-2  text-center rounded-1 h-150px" style="background: #91E6B3;">
                   <img class="mx-auto d-block w-170px h-120px" src="{{my_asset('Post-A-Job.png')}}" alt="" style="">
                   </div>
                    <h5>Post a job (it’s free)</h5>
                    <p class="fs-16 text-muted">Tell us what you need. Provide as many details as possible, but don’t worry about getting it perfect.</p>
                </div>
                <div class=" shadow-sm col-lg-3 col-md-6 col-sm-12"  style="background: #F2F7F2;">
                   <div class="my-2  text-center rounded-1 h-150px" style="background: #91E6B3;">
                   <img class="mx-auto d-block w-180px h-120px" src="{{my_asset('Post-A-Job.png')}}" alt="" style="">
                   </div>
                    <h5>Post a job (it’s free)</h5>
                    <p class="fs-16 text-muted">Tell us what you need. Provide as many details as possible, but don’t worry about getting it perfect.</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
