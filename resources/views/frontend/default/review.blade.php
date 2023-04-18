@extends('frontend.default.layouts.app')

@section('content')
<div>
    <div class="mx-3 rounded-md my-2 py-2" style="background: #F2F7F2;">
        <div class="row">
            <div class="col-lg-6 my-auto py-2 px-5">
                <h3 class="fw-700 text-success fs-24px">Reviews on Australia scholarship</h3>
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
                
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 " style="height:450px;
  overflow-y: scroll;
">
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
</div>
@endsection
