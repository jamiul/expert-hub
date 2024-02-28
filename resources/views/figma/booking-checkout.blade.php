@extends('frontend.layouts.front-client-dashboard-layout')

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="edux-billing-method-area">
                <div class="edux-billing-method-content">
                    <h2 class="h5 fw-bold">Select a billing method</h5>
                    <p class="text-base fw-medium">This will be primary billing method across all contracts, account activity and subscriptions</p>
                    <div class="edux-paypal-visa-billing">

                        <div class="edux-paypal-visa-billing-area mb-4">
                            <div class="edux-paypal-billing">
                            <div class="form-radio-option edux-radio-option">
                                <input type="radio" name="gender" id="Male" class="form-radio-field form-check-input" wire:model="gender" value="male">
                                <label class="form-radio-title  edux-form-radio-title me-4" for="Male"> <span class="me-1 edux-paypal-title"> <img src="{{ asset('assets/frontend/img/mastercard.png') }}" alt="all-card"> </span> <span>Master ending in 8698</span> </label>
                            </div>
                            <span class="edux-btn-paypal fw-bold">Primary</span>

                            </div>
                            <div class="edux-paypal-billing">

                            <div class="form-radio-option edux-radio-option">
                                <input type="radio" name="gender" id="Male" class="form-radio-field form-check-input" wire:model="gender" value="male">
                                <label class="form-radio-title  edux-form-radio-title me-4" for="Male"> <span class="me-1 edux-paypal-title"> <img src="{{ asset('assets/frontend/img/visa.png') }}" alt="all-card"> </span> <span> Visa ending in 8698</span> </label>
                                <button class=" btn edux-btn-set-as-primary text-white">Set as primary</button>
                                <button class=" btn edux-btn-set-as-remove text-white">Remove</button>
                            </div>

                            </div>
                        </div>

                        <div class="single-button">
                        <button style="max-width:280px" class="btn btn-outline-primary btn-md w-100 mt-2 btn-has-icon fw-bold">
                            <x-icon.add-circle fill="#0036E3"/>
                            Add New Billing Method
                        </button>
                    </div>
                    </div>
                </div>
                <div class="edux-billing-method-right-sidebar">
                    <div class="book-expert-profile pb-3">
                        <img src="{{ asset('assets/frontend/img/rectangle6.png') }}" alt="">
                        <div class="profile-mile-ester">
                            <img src="{{ asset('assets/frontend/img/profile-miles.png') }}" alt="">
                            <p>Professor Miles Esther</p>
                        </div>
                    </div>
                    <div class="edux-book-expert-time pt-3 pb-3">
                        <h2 class="h6">Book Expert for Consultation</h4>
                        <div class="profile-mile-ester ">
                        <x-icon.light fill="#6E737C"/>
                        <p>The time slot will be held for 10:00</p>
                        </div>
                    </div>
                    <div class="eudx-total-slot-area pt-4 pb-3">
                        <ul>
                            <li> <span class="edux-total-slot-count">Total slot 3X200</span> <span  class="edux-total-slot-count">$600.00</span></li>
                            <li> <span>Sep 28, 2023 at 1:00 AM - 2:00 AM</span> <span><a href="#">Edit</a></span> </li>
                            <li> <span>Sep 28, 2023 at 1:00 AM - 2:00 AM</span> <span><a href="#">Edit</a></span> </li>
                            <li> <span>Sep 28, 2023 at 1:00 AM - 2:00 AM</span> <span><a href="#">Edit</a></span> </li>
                            <li> <span>Meeting summery</span> <span><a href="#">Yes</a></span> </li>
                        </ul>
                    </div>
                    <div class="eudx-total-slot-area pt-4 pb-3">
                        <ul>
                            <li> <span>Subtotal</span> <span>$600.00</span> </li>
                            <li> <span>Marketplace fee (5%)</span> <span>$30.00</span> </li>
                            <li> <span>Contact initiation fee</span> <span>$3.00</span> </li>
                            <li> <span>Estimate taxes</span> <span>$0.00</span> </li>
                            <li> <span class="edux-total-slot-count">Estimate Total</span> <span  class="edux-total-slot-count">$633.00</span></li>
                        </ul>
                    </div>
                    <div class="edux-check-and-fund">
                        <p>Learn <a href="#">about</a> fees and  <a href="#">estimated taxes</a> </p>
                      
                    </div>
                    <button style="max-width:352px" type="button" class="btn btn-primary edux-btn-primary">Check & Fund</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Edit Option Modal start  -->
@endsection
