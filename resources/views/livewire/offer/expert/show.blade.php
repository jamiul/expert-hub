<section class="my-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="title-page-wrapper client-send-offer-page">
                        <div class="title-page-body p-40">
                            <div class="project-expert-card mb-40">
                                <div class="project-expert-thumb">
                                    <div class="expert-thumb-box">
                                        <img class="rounded-circle" src="{{ $offer->client->picture }}"/>
                                    </div>
                                </div>
                                <div class="project-expert-details">
                                    <div class="expert-card-header">
                                        <div class="expert-card-header-info">
                                            <h3 class="h6 project-expert-name mb-0">{{ $offer->client->user->full_name }}</h3>
                                            <ul class="project-expert-meta mb-2">
                                                <li>{{ $offer->client->current_organization }}</li>
                                                <li>{{ $offer->client->user->country->name }}</li>
                                            </ul>
                                            <div class="star-ratings">
                                                <x-icon.star-fill/>
                                                <x-icon.star-fill/>
                                                <x-icon.star-fill/>
                                                <x-icon.star-fill/>
                                                <x-icon.star-fill/>
                                            </div>
                                        </div>
                                        <div class="expert-card-header-action">
                                            <button wire:click="accept" class="btn btn-md btn-primary">
                                                Accept
                                            </button>
                                            <button wire:click="decline" class="btn btn-md btn-outline-primary">
                                                Decline
                                            </button>
                                            <button class="btn btn-md btn-outline-primary">
                                                <x-icon.chat fill="#0036E3"/>   Chat Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--project-expert-card-->
                            <div class="card card-24 mb-40">
                                <div class="card-body">
                                    <h3 class="h6 mb-3">Developing curriculum for Postgraduate public health unit</h3>
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                        mornings of spring which I enjoy with my whole heart. I am alone, and feel the
                                        charm of existence in this spot, which was created for the bliss of souls like
                                        mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere
                                        tranquil existence... </p>
                                </div>
                            </div>
                            <div class="card card-24">
                                <div class="card-body">
                                    <h3 class="h6 mb-3 border-bottom pb-3">Contact Details</h3>
                                    <div class="custom-table text-sm client-job-offer-details-table">
                                        <div class="tr">
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Offer by: Dr Mohammad Riyadh </p>
                                                <p class="mb-0">EduExHub</p>
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Hourly </p>
                                                <p class="mb-0">$15.00/hr, 20 hrs weekly limit</p>
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Category </p>
                                                <p class="mb-0">Business Development</p>
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Offer Date</p>
                                                <p class="mb-0">Nov 1, 2023</p>
                                            </div>
                                        </div>
                                        <div class="tr">
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Start Date</p>
                                                <p class="mb-0">Nov 1, 2023</p>
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">End Date </p>
                                                <p class="mb-0">Nov 15, 2023</p>
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Weekly Limit </p>
                                                <p class="mb-0">30 hrs</p>
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Manual Time</p>
                                                <p class="mb-0">Allowed</p>
                                            </div>
                                         </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
