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
                                            {{-- <div class="star-ratings">
                                                <x-icon.star-fill/>
                                                <x-icon.star-fill/>
                                                <x-icon.star-fill/>
                                                <x-icon.star-fill/>
                                                <x-icon.star-fill/>
                                            </div> --}}
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
                                    <h3 class="h6 mb-3">{{ $offer->contract_title }}</h3>
                                    <p>{{ $offer->project->description }}</p>
                                </div>
                            </div>
                            <div class="card card-24">
                                <div class="card-body">
                                    <h3 class="h6 mb-3 border-bottom pb-3">Contact Details</h3>
                                    <div class="custom-table text-sm client-job-offer-details-table">
                                        <div class="tr">
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Offer by: {{ $offer->client->user->full_name }} </p>
                                                <p class="mb-0">{{ $offer->client->current_organization }}</p>
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">{{ $offer->contract_type }} </p>
                                                <p class="mb-0">{{ $offer->amount }}</p>
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Category </p>
                                                <p class="mb-0">{{ $offer->project->expertise->name }}</p>
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Offer Date</p>
                                                <p class="mb-0">{{ $offer->created_at->format('M d, Y') }}</p>
                                            </div>
                                        </div>
                                        <div class="tr">
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Start Date</p>
                                                <p class="mb-0">{{ $offer->created_at->format('M d, Y') }}</p>
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">End Date </p>
                                                <p class="mb-0">Nov 15, 2023</p>
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Weekly Limit </p>
                                                @if($offer->isHourly())
                                                    <p class="mb-0">30 hrs</p>
                                                @else
                                                    <p class="mb-0">N/A</p>
                                                @endif
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Manual Time</p>
                                                @if($offer->isHourly())
                                                    <p class="mb-0">Allowed</p>
                                                @else
                                                    <p class="mb-0">N/A</p>
                                                @endif
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
