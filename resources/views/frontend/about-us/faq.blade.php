<div class="my-5 mx-4" id="FAQs">
    <h1 class="explore-find-oppor-title text-success fw-700"> Frequently asked questions</h1>
    <hr>

    <nav>
        <ul class="nav" id="myTab" role="tablist">
            <li class="nav-item ">
                <a class="  fs-20 p-1   btn  btn-outline-primary px-4" id="for-EduExperts" data-toggle="tab"
                    href="#EduExpert" role="tab" aria-controls="EduExpert" aria-selected="true">For
                    EduExpert </a>
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
    <div class="tab-pane fade show active mt-2" id="EduExpert" role="tabpanel"
        aria-labelledby="for-EduExperts">
        <!-- Frequently asked questions -->
        <div class=" rounded-2" style="background: #F2F7F2;">
            <div class="mx-2 mt-5 row">
                <div class="col-lg-6 col-sm-12 py-3">
                    <img class="banner-img"
                        src="{{ asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
                        alt="">
                </div>
                <div class="col-lg-6 col-sm-12 py-3">
                    <div class=" border-bottom my-2">
                        <input type="checkbox" id="fre-leave">
                        <h4 class="faq-qsn-title">Is {{ config('app.name') }} free to join as an academic EduExpert?</h4>
                        <p class="frequently-qsn-details text-justify">
                            Joining {{ config('app.name') }} as an academic EduExpert is absolutely free. You can create
                            your profile, search for work, and even initiate your own projects without any cost. Our
                            service fee is determined by your earnings with each client, and we offer a sliding
                            scale that rewards long-term relationships.
                        </p>
                        <div class="fre-content text-justify">
                            <p>
                                Additionally, you have the option to upgrade to {{ config('app.name') }} Plus, which allows you
                                to more effectively market your services, submit proposals, and stand out from the
                                crowd.
                            </p>
                            <label class="fre-expand-icon" for="fre-leave">Show less <img
                                    class="w-15px h-15px arrow-icon " src="{{ asset('upload.png') }}"
                                    alt=""></label>
                        </div>
                        <label class="fre-expand-icon" for="fre-leave">Read more <img
                                class="w-15px h-15px arrow-icon " src="{{ asset('down-chevron.png') }}"
                                alt=""> </label>

                    </div>
                    <div class=" border-bottom">
                        <input type="checkbox" id="fre-contest">
                        <h4 class="faq-qsn-title">Can I grow my career on {{ config('app.name') }}?</h4>
                        <p class="frequently-qsn-details text-justify">
                            Absolutely! Many of our most successful academic experts have utilized their strong
                            academic backgrounds and employment records on {{ config('app.name') }}. We understand that you may
                            be new to consulting but highly experienced in your field.
                        </p>
                        <div class="fre-content text-justify">
                            <p>
                                Our comprehensive guide offers step-by-step tips for building your consulting
                                career.
                            </p>
                            <label class="fre-expand-icon" for="fre-contest">Show less <img
                                    class="w-15px h-15px arrow-icon " src="{{ asset('upload.png') }}"
                                    alt=""></label>
                        </div>

                        <label class="fre-expand-icon" for="fre-contest">Read more <img
                                class="w-15px h-15px arrow-icon " src="{{ asset('down-chevron.png') }}"
                                alt=""></label>
                    </div>
                    <div class=" border-bottom ">
                        <input type="checkbox" id="fre-freelancing">
                        <h4 class="faq-qsn-title mt-2 ">What can you gain from consulting with {{ config('app.name') }}?
                        </h4>
                        <p class="frequently-qsn-details text-justify">
                            Work with prestigious clients and renowned institutions. Many choose {{ config('app.name') }} for
                            our support in achieving excellence.
                        </p>
                        <div class="fre-content text-justify ">
                            <p>
                                How to Succeed as a EduExpert' provides a glimpse of our success-boosting academic
                                resources.
                            </p>
                            <label class="fre-expand-icon" for="fre-freelancing">Show less <img
                                    class="w-15px h-15px arrow-icon " src="{{ asset('upload.png') }}"
                                    alt=""></label>
                        </div>
                        <label class="fre-expand-icon" for="fre-freelancing">Read more <img
                                class="w-15px h-15px arrow-icon " src="{{ asset('down-chevron.png') }}"
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

                    <img src="{{ asset('assets/frontend/default/img/servicesList/Designer_Flatline.png') }}"
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