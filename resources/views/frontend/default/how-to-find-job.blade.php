<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ my_asset('public/assets/frontend/default/css/custom.css') }}">
</head>

<body>
    @extends('frontend.default.layouts.app')


    @section('content')
    <div>
        <div class="mx-2 rounded-2 my-3" style="background: #F2F7F2;">
            <div class="row py-3 position-relative">
                <div class="col-lg-6 pt-2 px-5 mt-3 wrap find-job-banner ">
                    <h3 class=" text-success find-job-banner-title">{{translate('Work the way you want')}}</h3>
                    <p class="">{{translate("Find the right work for you, with great clients, at the world’s work marketplace.")}}</p>

                    <button class=" text-white fs-16 btn btn-primary px-3 py-2">{{translate('Create Your Profile')}}</button>


                    <div class="d-flex justify-content-between align-content-center border-top find-job-banner-rating-section position-absolute">
                        <p class="">{{translate('Professionals rate clients')}}</p>
                        <div class="find-job-banner-rating">
                            <div class=" find-job-banner-star ">
                                <img class="" src="{{my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/rating.svg')}}" alt="">
                                <p>{{translate('4.9/5')}}</p>
                            </div>
                            <p class="find-job-banner-total-review">{{translate('based on 2.4M+ reviews')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-2 px-5 ">
                    <img src="{{my_asset('how-tohire-banar.jpg')}}" class="rounded-2 img-fluid" alt="" style="height:41vh; width:42vw">
                </div>
            </div>
        </div>

        <!-- How it works -->
        <div class="container-main">
            <div class="">
                <h1 class="text-black fw-700 ">{{translate('How it works')}}</h1>
                <div class="border-bottom border-gray mt-3"></div>
            </div>

            <div class="mt-5 mb-5">
                <div class="row ">
                    <div class="col-lg-3 col-sm-12 ">
                        <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px" style="background: #91E6B3; ">
                            <img class="mx-auto d-block w-50" src="{{my_asset('Post-A-Job.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-12 my-auto">
                        <h1 class=" how-work-title ">{{translate('Create your profile (it’s free)')}}</h1>
                        <p class="how-work-details  mt-2">{{translate('An eye-catching title and client-focused overview help us match you to the work you want. Include your work history, your skills, and your photo. Add more, like an introduction video, to create a profile that really stands out.')}}</p>
                    </div>
                </div>
                <div class="row mt-4 ">
                    <div class="col-lg-3 col-sm-12 ">
                        <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px" style="background: #91E6B3; ">
                            <img class="mx-auto d-block w-50" src="{{my_asset('How_it_Works.png')}}" alt="" >
                        </div>

                    </div>
                    <div class="col-lg-9 col-sm-12 my-auto">
                        <h1 class="how-work-title">{{translate('Explore ways to earn')}}</h1>
                        <p class="how-work-details mt-2">{{translate('Work and earn in different ways. Bid for jobs. Pitch your projects. Discuss your in-demand skills with our recruiters so they can find opportunities aligned with your passions and career goals. Do all three. Create a predictable pipeline and build your network')}}</p>
                        <a class="text-primary fs-16 pt-2 c-pointer">
                            <img src="{{my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/down-arrow.png')}}" alt="">
                            <u class="pt-3">{{translate('See ways to earn')}}</u></a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-3 col-sm-12 ">
                        <div class="my-2 d-flex justify-content-center align-items-center  rounded-1 h-170px w-240px" style="background: #91E6B3; ">
                            <img class="mx-auto d-block w-50" src="{{my_asset('How_it_Works_2.png')}}" alt="">
                        </div>

                    </div>
                    <div class="col-lg-9 col-sm-12 my-auto">
                        <h1 class="how-work-title">{{translate('Get paid securely')}}</h1>
                        <p class="how-work-details  mt-2">{{translate('Choose how you get paid. Our fixed-price protection releases client payments at project milestones. Hourly protection bills clients every week. However you work, our service fees are the same. Spend less time chasing, more earning.')}}</p>
                    </div>
                </div>
                <button class=" text-white fs-16  btn btn-primary px-3 py-2 mt-4">{{translate('Create Your Profile')}}</button>
            </div>

        </div>
        <!--  Used by -->
        <div class="container-main">
            <div class="row ">
                <div class="col-6">
                    <div class="row ">
                        <div class="col-lg-4 col-sm-12">
                            <h4 class="trusted "> Used by </h4>
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

        <!-- Explore ways to earn -->
        <div class="container-main ">
            <div class="mt-5">
                <div class="">
                    <h1 class="explore-title ">{{translate('Explore ways to earn')}}
                    </h1>
                    <div class="border-bottom border-gray mt-3"></div>
                </div>
                <div class="row explore-find-oppor">
                    <div class="col-lg-7 col-sm-12 ">
                        <h1 class="explore-find-oppor-title ">{{translate('Find your next opportunity')}}</h1>
                        <p class="explore-find-oppor-details">{{translate('Search on Talent Marketplace™ for the hourly or fixed-price work you’re looking for. Submit a proposal, set your rate, and show how great you’ll be. Give a little extra by sharing your unique approach and offering a rapport-building interview')}}</p>
                        <button class=" text-white fs-16  btn btn-primary px-3 py-2 mt-3">{{translate('Find Jobs')}}</button>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4 col-sm-12 ">
                        <div class="card  h-100" style="width: 18rem;">
                            <img class="card-img-top" src="{{my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/opportunity.svg')}}" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-main">
            <div class="row mt-5 mb-5">
                <div class="col-lg-6 col-sm-12 ">

                    <div class="row">
                        <div class="col-lg-6 col-sm-6 ">
                            <div class="card h-90 position-relative">
                                <img class="card-img-top rounded-1" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/Browse-2.jpeg')}}" alt="Card image cap">
                                <div class="" style="background: #F2F7F2; ">

                                    <div class="card-body">
                                        <p class="text-muted fs-16">{{translate('WordPress website')}}</p>
                                    </div>
                                    <p class="pl-4 fw-bold text-black  ">{{translate('From $300')}}</p>
                                </div>
                                <div class="bg-white rounded-2 hth-profile-active position-absolute">
                                    <div class="px-3 py-1 d-flex">
                                        <img class="rounded-circle pr-1 position-relative" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/card_profile-1.png')}}" alt="">
                                        <p class="fs-14 ">{{translate('Stefan M.')}}</p>
                                        <!-- <div class="position-absolute bg-danger h-10px w-10px rounded-circle end-0"> -->

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 ">
                            <div class="card  h-90 position-relative">
                                <img class="card-img-top" src="{{my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/blog.jpg')}}" alt="Card image cap" style="height:200px;">

                                <div class="" style="background: #F2F7F2;">

                                    <div class="card-body">
                                        <p class="text-muted fs-16">{{translate('Blog Posts')}}</p>
                                    </div>
                                    <p class="pl-4 fw-bold text-black  ">{{translate('From $250')}}</p>
                                </div>

                                <div class="bg-white rounded-2 hth-profile-active position-absolute">
                                    <div class="px-3 py-1 d-flex">
                                        <img class="rounded-circle pr-1 position-relative" src="{{my_asset('assets/frontend/default/img/whyScholarship/Howtohire/card_profile-2.png')}}" alt="">
                                        <p class="fs-14 ">{{translate("Md. Mojahidul I.")}}</p>

                                        <!-- <div class="position-absolute bg-danger h-10px w-10px rounded-circle end-0"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-sm-12 my-auto">
                    <h1 class="explore-find-oppor-title">{{translate('Sell what you do best')}}</h1>

                    <p class="explore-find-oppor-details">{{translate("Create easy-to-buy projects with Project Catalog™. Match your projects to what clients need. Be clear upfront by defining your scope, timing, price, and terms. Once we’ve approved your project, clients can start to buy.")}}</p>
                    <button class=" text-white fs-16 btn btn-primary  px-3 py-2 mt-3">{{translate('See Other Projects')}}</button>
                </div>
            </div>

        </div>
        <div class="container-main">
            <div class="row ">
                <div class="col-lg-5 col-sm-12 ">
                    <h1 class="explore-find-oppor-title">{{translate('Let the work find you')}}</h1>
                    <p class="explore-find-oppor-details">{{translate('Does your work stand out? Are your skills in demand? If you’re in development, design, or marketing, you can apply to our fast lane. Our recruiters will assess your hard-earned experience and match you to exclusive opportunities with trusted clients.')}}</p>
                    <button class=" text-white fs-16 btn btn-primary px-3 py-2 mt-4">{{translate('Apply to Join')}}</button>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4 col-sm-12 my-auto ">
                    <img class="card-img-top blog-img" src="{{my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/message.svg')}}" alt="Card image cap">

                </div>
            </div>
        </div>

        <!-- How payments work -->
        <div class="" style="margin-top: 100px;">
            <div class="row mt-5 mb-5">
                <div class="col-lg-5 col-sm-12 mr-5">
                    <img class="w-100 payments-img " src="{{my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/payments.jpg')}}" alt="">
                </div>

                <div class="col-lg-5 col-sm-12 mt-5 ml-5">
                    <div>
                        <h1 class="payment-work-main-title">{{translate('How payments work')}}</h1>
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

        <!-- Frequently asked questions -->
        <div class="container-main rounded-2" style="background: #F2F7F2;">
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
        <div class="container-main">
            <h3 class="htfj-learn-work-title">Learn as you work</h3>
            <div class="row mt-4">
                <div class="col-lg-4 col-12">
                    <div class="card h-90 ">
                        <img class="card-img-top rounded-top-1 " src="{{my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/learnWorkimg-1.jpg')}}" alt="Card image cap">
                        <div class="" style="background: #F2F7F2; ">
                            <div class="card-body">
                                <p class="htfj-learn-work-child-title">Getting started</p>
                                <button class="btn btn-primary mt-3">
                                    Learn More
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card h-90 ">
                        <img class="card-img-top rounded-top-1 " src="{{my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/learnWorkimg-2.jpg')}}" alt="Card image cap">
                        <div class="" style="background: #F2F7F2; ">

                            <div class="card-body">
                                <p class="htfj-learn-work-child-title">Growing your career</p>

                                <button class="btn btn-primary mt-3">
                                    Learn More
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card h-90 ">
                        <img class="card-img-top rounded-top-1 " src="{{my_asset('assets/frontend/default/img/whyScholarship/howToFindJob/learnWorkimg-3.jpg')}}" alt="Card image cap">
                        <div class="" style="background: #F2F7F2; ">

                            <div class="card-body">
                                <p class="htfj-learn-work-child-title">Finding support</p>

                                <button class="btn btn-primary mt-3">

                                    Visit Help Center
                                </button>
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
