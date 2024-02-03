@extends('frontend.layouts.figma', ['header' => 'client'])

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="h5">Select a billing method</h1>
                    <p>This will be primary billing method across all contracts, account activity and subscriptions</p>
                    <div class="card card-24 card-payment-method">
                        <div class="card-body">
                            <div class="form-radio-group mb-0">
                                <div class="form-radio-options payment-method-options">
                                    <div class="form-radio-option ">
                                        <input type="radio" name="payment-method" id="mastercard"
                                               class="form-radio-field form-check-input" wire:model="gender"
                                               value="male">
                                        <div class="form-radio-title">
                                            <label class="" for="mastercard">
                                                <span>
                                                    <x-icon.logo-mastercard/>
                                                </span>
                                                Master ending in 8698
                                            </label>
                                            <span class="badge badge-outline-primary badge-pill"> Primary</span>
                                        </div>

                                    </div>
                                    <div class="form-radio-option">
                                        <input type="radio" name="payment-method" id="visa"
                                               class="form-radio-field form-check-input" wire:model="gender"
                                               value="female">
                                        <div class="form-radio-title">
                                            <label class="" for="visa">
                                                <span>
                                                    <x-icon.logo-visa/>
                                                </span>
                                                Visa ending in 8698
                                            </label>
                                            <button class="badge badge-success badge-pill"> Set as primary</button>
                                            <button class="badge badge-danger badge-pill"> Remove</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                    <img class="me-1" src="{{ asset('assets/frontend/img/consultant1.png') }}"
                                         alt="">
                                </div>
                                <div class="user-small-card-info">
                                    <p class="m-0 fw-bold">Professor Miles Esther</p>
                                </div>
                            </div>

                            <h6 class="checkout-project-title fw-normal my-3">Developing curriculum for Postgraduate public health
                                unit curriculum for Postgraduate public health unit</h6>

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
                                        <td>$600.00</td>
                                    </tr>
                                    <tr>
                                        <td>Marketplace fee (5%)</td>
                                        <td>$30.00</td>
                                    </tr>
                                    <tr>
                                        <td>Contact initiation fee</td>
                                        <td>$3.00</td>
                                    </tr>
                                    <tr>
                                        <td>Estimate taxes</td>
                                        <td>$0.00</td>
                                    </tr>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Estimate Total</th>
                                        <th>$633.00</th>
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
