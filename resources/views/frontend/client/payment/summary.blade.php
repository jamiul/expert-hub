@extends('frontend.layouts.figma', ['header' => 'client'])

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="h5">Select a billing method</h1>
                    <p>This will be primary billing method across all contracts, account activity and subscriptions</p>
                    @if(($payment_methods->count() > 0))
                        <div class="card card-24 card-payment-method">
                            <div class="card-body">
                                <div class="form-radio-group mb-0">
                                    <div class="form-radio-options payment-method-options">
                                        @foreach($payment_methods as $payment_method)
                                            <div class="form-radio-option ">
                                                <input type="radio" name="payment-method" id="mastercard" data-id="{{ $payment_method->stripe_payment_id }}"
                                                       class="form-radio-field form-check-input">
                                                <div class="form-radio-title">
                                                    <label class="" for="mastercard">
                                                <span>
                                                    @php
                                                        $iconComponentFileName = 'icon.logo-' . $payment_method->brand;
                                                    @endphp
                                                    <x-dynamic-component :component="$iconComponentFileName"/>
                                                </span>
                                                        Master ending in {{ $payment_method->last4 }} Exp: {{ $payment_method->exp_month }}/{{ $payment_method->exp_year }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <button type="button" class="btn btn-outline-primary btn-has-icon btn-md border-2 mt-40">
                        <x-icon.add-circle fill="#0036E3"/>
                        <span class="btn-text">Add New Billing Method</span>
                    </button>
                </div>
                <div class="col-md-4">
                    <div class="card card-24">
                        <div class="card-body">
                            <div class="user-small-card align-items-center pb-3 bb-1">
                                <div class="user-small-card-avatar">
                                    <img class="me-1" src="{{ $contract->expert->getFirstMediaUrl('picture') }}"
                                         alt="">
                                </div>
                                <div class="user-small-card-info">
                                    <p class="m-0 fw-bold">{{ $contract->expert->user->first_name }} {{ $contract->expert->user->last_name }}</p>
                                </div>
                            </div>

                            <h6 class="checkout-project-title fw-normal my-3">{{ $project->title }}</h6>

                            <p class="m-0 fw-bold">Milestones:</p>
                            <ol class="list-group list-group-numbered">
                                @foreach($milestones as $milestone)
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">{{ $milestone->title }}</div>
                                            {{ $contract->expert->currency }} {{ number_format($milestone->amount, 2) }}
                                        </div>
                                    </li>
                                @endforeach
                            </ol>

                            <div class="table-responsive bt-1 pt-3">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th colspan="2">
                                            Escrow Deposit
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>{{ $contract->expert->currency }} {{ number_format($milestone_charges['milestone_amount'], 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Marketplace fee ({{ env('SERVICE_CHARGE') }}%)</td>
                                        <td>{{ $contract->expert->currency }} {{ number_format($milestone_charges['service_charge'], 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Contact initiation fee</td>
                                        <td>{{ $contract->expert->currency }} {{ number_format($milestone_charges['contract_initialization_fee'], 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Estimate taxes ({{ env('GST') }}%)</td>
                                        <td>{{ $contract->expert->currency }} {{ number_format($milestone_charges['gst'], 2) }}</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Estimate Total</th>
                                        <th>
                                            <input type="hidden" name="total" id="total_amount" value="{{ $milestone_charges['total_amount'] }}">
                                            {{ $contract->expert->currency }} {{ number_format($milestone_charges['total_amount'], 2) }}
                                        </th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <p class="py-3 bt-1">Learn <a class="text-decoration-underline fw-medium"
                                                          href="#">Policy</a> fees and
                                <a class="text-decoration-underline fw-medium" href="#">estimated taxes</a>
                            </p>
                            <button class="btn btn-primary btn-md w-100">Fund Milestone & Hire</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
