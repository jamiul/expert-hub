@extends('frontend.layouts.front-client-dashboard-layout')

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="edux-billing-method-area">
                <div class="edux-billing-method-content">
                    <h5>Select a billing method</h5>
                    <p>This will be primary billing method across all contracts, account activity and subscriptions</p>
                    <div class="edux-paypal-visa-billing">

                        <div class="edux-paypal-visa-billing-area mb-4">
                            <div class="edux-paypal-billing">

                            <div class="form-radio-option edux-radio-option">
                                <input type="radio" name="gender" id="Male" class="form-radio-field form-check-input" wire:model="gender" value="male">
                                <label class="form-radio-title  edux-form-radio-title me-4" for="Male"> <span class="me-1 edux-paypal-title"> <img src="{{ asset('assets/frontend/img/mastercard.png') }}" alt="all-card"> </span> <span>Master ending in 8698</span> </label>
                            </div>





                            <span class="edux-btn-paypal">Primary</span>

                            </div>
                            <div class="edux-paypal-billing">

                            <div class="form-radio-option edux-radio-option">
                                <input type="radio" name="gender" id="Male" class="form-radio-field form-check-input" wire:model="gender" value="male">
                                <label class="form-radio-title  edux-form-radio-title me-4" for="Male"> <span class="me-1 edux-paypal-title"> <img src="{{ asset('assets/frontend/img/visa.png') }}" alt="all-card"> </span> <span> Visa ending in 8698</span> </label>
                                <button class=" btn edux-btn-set-as-primary">Set as primary</button>
                                <button class=" btn edux-btn-set-as-remove">Remove</button>
                            </div>

                            </div>
                        </div>

                        <div class="single-button">
                            <button type="button" class="btn edux-btn-border-primary"> <span class="arrow-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11 17H13V13H17V11H13V7H11V11H7V13H11V17ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z" fill="#0036E3"/>
                            </svg>
                    </span> <span class="btn-text">Add New Billing Method</span></button>
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
                        <h4>Book Expert for Consultation</h4>
                        <div class="profile-mile-ester ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12 20.9422C11.5987 20.9422 11.2439 20.8364 10.9356 20.6249C10.6272 20.4134 10.4115 20.1358 10.2884 19.7922H9.99997C9.59101 19.7922 9.23877 19.6445 8.94327 19.349C8.64776 19.0534 8.5 18.7012 8.5 18.2923V15.0115C7.49103 14.4 6.69712 13.5801 6.11827 12.5519C5.53942 11.5237 5.25 10.423 5.25 9.24998C5.25 7.36794 5.90448 5.77243 7.21345 4.46345C8.52243 3.15448 10.1179 2.5 12 2.5C13.882 2.5 15.4775 3.15448 16.7865 4.46345C18.0955 5.77243 18.75 7.36794 18.75 9.24998C18.75 10.4436 18.4605 11.5493 17.8817 12.5673C17.3028 13.5852 16.5089 14.4 15.5 15.0115V18.2923C15.5 18.7012 15.3522 19.0534 15.0567 19.349C14.7612 19.6445 14.4089 19.7922 14 19.7922H13.7115C13.5884 20.1358 13.3727 20.4134 13.0644 20.6249C12.7561 20.8364 12.4013 20.9422 12 20.9422ZM9.99997 18.2923H14V17.3538H9.99997V18.2923ZM9.99997 16.4692H14V15.5H9.99997V16.4692ZM9.79997 14H11.4038V11.0884L9.26153 8.94613L10.1 8.10768L12 10.0077L13.9 8.10768L14.7384 8.94613L12.5961 11.0884V14H14.2C15.1 13.5666 15.8333 12.9291 16.4 12.0875C16.9666 11.2458 17.25 10.3 17.25 9.24998C17.25 7.78331 16.7416 6.54164 15.725 5.52498C14.7083 4.50831 13.4666 3.99998 12 3.99998C10.5333 3.99998 9.29164 4.50831 8.27497 5.52498C7.25831 6.54164 6.74997 7.78331 6.74997 9.24998C6.74997 10.3 7.03331 11.2458 7.59997 12.0875C8.16664 12.9291 8.89997 13.5666 9.79997 14Z" fill="#6E737C"/>
                        </svg>
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
                        <button type="button" class="btn btn-primary edux-btn-primary">Check & Fund</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Edit Option Modal start  -->









@endsection
