<div class="">
    <div class="">
        <div class="card-body px-4 py-2">

            <div class="mb-3">
                <h6 class="text-primary fs-14 fw-700 ">

                    <h6 class="">{{ translate('Budget') }}</h6>
                    @if ($project->budget)
                        <h6 class="fs-16 fw-700">{{ $project->budget }}</h6>
                    @else
                        <h6 class="fs-16 fw-700">${{ $project->price }}</h6>
                    @endif
                    <h6>Proposals: <span class="fw-700">
                            @if ($project->bids < 5)
                                Less than 5
                            @else
                                {{ $project->bids }}
                            @endif
                        </span></h6>
                    <h6>Interviewing: 0</h6>
                    <h6>Last viewed by client: 1 hour ago</h6>
                    <h6 class="btn btn-primary btn-sm fs-15  w-100  fw-700 mt-3">
                        {{ translate('Apply Now') }}
                    </h6>
                </h6>

            </div>
            <div class="mb-3">
                <p
                    class="btn btn-block border  d-flex align-items-center justify-content-center project-save fs-14 fw-700 rounded-1">
                    <img src=" {{ asset('/assets/home/find-scholarship/bookmark.png') }}"
                        class="card-img-top project-save-img" alt="service_image">
                    <span class="ml-1 project-save">{{ translate('Save this job') }}</span>
                </p>

            </div>
            <div class="mb-4">

                <div class="border p-3 rounded-1 create-account" role="alert">
                    {{ translate('You need to ') }}
                    <u>
                        <a class="c-pointer fw-700 fs-14 account-login">{{ translate('Log in') }}</a></u>
                    {{ translate("as a freelancer to bid the project. Don't have an account with us?") }}
                    <u>
                        <h6 class="c-pointer fs-12 fw-700 fs-14 account-login">
                            {{ translate('Create an account now') }}</h6>
                    </u>
                </div>


            </div>
            <div class=" mb-5 pb-1">
                <h6 class="mb-3"><span class="fs-16 fw-700">{{ translate('About This Client') }}</span>
                </h6>

                <div class="d-flex">
                    <img src=" {{ asset('/assets/home/find-scholarship/payment.png') }}"
                        class="card-img-top rounded mr-2 p-payment" alt="service_image">
                    <div>
                        <h6 class="fs-14 fw-700 payment-para">Payment method
                        </h6>
                        <h6 class="fs-14">Verified</h6>
                    </div>
                </div>
                <div class="d-flex">
                    <img src=" {{ asset('/assets/home/find-scholarship/category.png') }}"
                        class="card-img-top rounded mr-2 p-payment" alt="service_image">
                    <div>
                        <h6 class="fs-14 fw-700 payment-para">Canada

                        </h6>
                        <h6 class="fs-14"> Markham 9:20 pm</h6>
                    </div>
                </div>
                <div class="d-flex">
                    <img src=" {{ asset('/assets/home/find-scholarship/job.png') }}"
                        class="card-img-top p-payment rounded mr-2" alt="service_image">
                    <div>
                        <h6 class="fs-14 fw-700 payment-para">{{ $jobPosted }} jobs posted

                        </h6>
                        <h6 class="fs-14">100% hire rate, {{ $jobOpen }} open jobs</h6>
                    </div>
                </div>
                <div class="d-flex">
                    <img src=" {{ asset('/assets/home/find-scholarship/rate.png') }}"
                        class="card-img-top p-payment rounded mr-2" alt="service_image">
                    <div>
                        <h6 class="fs-14 fw-700 payment-para">$9.50 /hr avg hr rate
                            paid

                        </h6>
                        <h6 class="fs-14">56 hours</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
