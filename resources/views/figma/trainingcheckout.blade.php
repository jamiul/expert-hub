@extends('frontend.layouts.front-client-dashboard-layout')
@section('content')
<div class="find-training-detail databasepading-checkout">
    <div class="container">
        <div class="row">

        <div class="col-md-7">
            <div class="checkout-bit d-flex flex-column">
                <div class="checkout-billing-content d-flex flex-column">
                    <h3>Select a billing method</h3>
                    <p>This will be primary billing method across all contracts, account activity and subscriptions</p>
                </div>
                <div class="checkout-billing-method d-flex flex-column ">

                    <div class="checkout-billing-paypal  d-flex flex-row justify-content-between ">

                        <div class="paypal-check d-flex flex-row">
                            <div class="form-check">
                                <input class="form-check-input check-input-paypal" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            </div>
                            
                            <div class="paypal-icon-email  d-flex flex-row">
                                <img src="{{ asset('assets/frontend/img/check-paypal.png') }}" alt=" paypal">
                                <span> Paypal (account@gmail.com)</span>
                            </div>
                        </div>

                        <div class="paypal-primary-btn">
                            <button>Primary</button>
                        </div>
                    </div>

                    <div class="checkout-billing-stripe d-flex flex-row">

                        <div class="form-check">
                                <input class="form-check-input check-input-paypal" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            </div>
                            <div class="stripe-icon-email">
                                <img src="{{ asset('assets/frontend/img/checkout-stripe.png') }}" alt="stripe">
                            </div>

                    </div>
                </div>

                <div class="checkout-border-bottom"></div>

                <div class="add-billing-button">
                    <div class="billing-button">
                        <button> <span class=" d-flex align-items-center"> <img src=" {{ asset('assets/frontend/img/pay-vector.png') }}" alt="pay vector"> </span> <span>Add New Billing Method</span> </button>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-5">
                <div class="checkout-right-sidebar-area">
                        <div class="registration-modal-area  d-flex flex-row">
                            <img class="img-sidebar" src="http://127.0.0.1:8000/assets/frontend/img/foundation.png " alt="fundation">
                            <div class="foundation-text d-flex flex-column">
                                <div class="foundation-title"> <h4>Foundations of PLS-SEM Using SmartPLS 4</h4> </div>
                                <div class="foundation-border d-flex justify-content-between flex-row">
                                        <h6>Australian Eastern Daylight Time (GMT +11)</h6>
                                        
                                </div>
                            </div>
                        </div>

                        <div class="light-single">
                               <img src=" {{ asset('assets/frontend/img/light-icon.png') }}" alt="pay vector"> <span>The time slot will be held for 10:00</span>
                        </div>
                        <div class="checkout-journey">
                            <p>23 January 2024 - 28 April 2024 Edit</p>
                        </div>


                        <div class="promocode-area">
                        <h5>Have a promo code?</h5>
                            <div class="checkout-code">
                                <span>eg. #56678789</span>
                            </div>
                        </div>

                      

                        <div class="checkout-subtotal d-flex flex-column">

                            <div class="single-subtotal">
                                <span>Subtotal</span>
                                <span>$240.00</span>
                            </div>

                            <div class="single-subtotal">
                                <span>Marketplace fee</span>
                                <span>$0.00</span>
                            </div>

                            <div class="single-subtotal">
                                <span>Contact initiation fee</span>
                                <span>$0.00</span>
                            </div>

                            <div class="single-subtotal">
                                <span>Estimate taxes</span>
                                <span>$0.00</span>
                            </div>

                            <div class="single-subtotal estimate-total">
                                <span>Estimate Total</span>
                                <span> $240.00</span>
                            </div>

                        </div>
                        

                        <div class="checkout-learn">
                        Learn <span class="checkout-about">about</span> fees and  <span class="checkout-extend">estimated taxes </span> 
                        </div>

                        <div class="btn-check-fund-area">
                            <button  class="btn-check-fund">Check & Fund</button>
                        </div>

                </div>
        </div>
           
        </div>
  </div>
</div>

@endsection
