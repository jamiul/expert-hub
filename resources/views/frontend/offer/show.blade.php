@extends('frontend.layouts.app')

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="title-page-wrapper client-send-offer-page">
                        <div class="title-page-body p-40">
                            <x-expert.mini-card :expert="$offer->expert" card="true">
                                <div class="expert-card-header-action d-flex gap-2 align-items-center">
                                    @livewire('offer.withdraw', ['offer' => $offer])
                                    <button class="btn btn-md btn-outline-primary">
                                        <x-icon.chat fill="#0036E3"/>   Chat Now
                                    </button>
                                </div>
                            </x-expert.mini-card>
                            
                            <!--project-expert-card-->
                            <div class="card card-24 mb-40">
                                <div class="card-body">
                                    <h3 class="h6 mb-3">{{ $offer->project->title }}</h3>
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
                                                <p class="mb-0 fw-medium">{{ $offer->contract_type }}  </p>
                                                @if($offer->isFixed())
                                                    <p class="mb-0">${{ $offer->amount }}</p>
                                                @endif
                                                @if($offer->isHourly())
                                                    <p class="mb-0">${{ $offer->amount }}/hr, 20 hrs weekly limit</p>
                                                @endif
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Category </p>
                                                <p class="mb-0">{{ $offer->project->expertise->name }}Business Development</p>
                                            </div>
                                            <div class="td">
                                                <p class="mb-0 fw-medium">Offer Date</p>
                                                <p class="mb-0">{{ $offer->created_at->format('M d, Y') }}</p>
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
@endsection
