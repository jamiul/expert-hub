@extends('frontend.layouts.app')
@section('content')
    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
                <li class="me-3">
                    <a href="{{ route('client.payment.index') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Payment Methods</a>
                </li>
                <li class="me-3">
                    <a href="{{ route('client.payment.billing') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Billing Report</a>
                </li>
                {{-- todo: move to dymaic milestone --}}
                <li class="me-3">
                    <a href="{{ route('client.payment.pay') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Fund Milestone</a>
                </li>
                {{-- todo: move to dymaic milestone accept --}}
                <li class="me-3">
                    <a href="{{ route('client.payment.acceptMilestone') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Release Milestone</a>
                </li>
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->

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
                            @foreach($payment_methods as $payment_method)
                                <div class="checkout-billing-stripe d-flex flex-row justify-content-between ">
                                    <div class="paypal-check d-flex flex-row">
                                        <div class="form-check">
                                            <input class="form-check-input payment_method" type="radio" data-id="{{ $payment_method->stripe_payment_id }}" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>

                                        <div class="stripe-icon-email  d-flex flex-row">
                                            <img src="{{ asset("assets/frontend/img/{$payment_method->brand}.png") }}" alt="">
                                            <span> **** {{ $payment_method->last4 }} Exp: {{ $payment_method->exp_month }}/{{ $payment_method->exp_year }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="checkout-border-bottom"></div>

                        <div class="add-billing-button">
                            <div class="billing-button">
                                <button> <span class=" d-flex align-items-center"> <img src=" {{ asset('assets/frontend/img/pay-vector.png') }}" alt="pay vector"> </span> <span>Add New Billing Method</span> </button>
                            </div>
                        </div>

                        <div id="messages" role="alert" style="display: none;"></div>
                        <form id="payment-form">
                            <div id="payment-element">
                            </div>

                            <button id="update-pm">
                                <div class="spinner hidden"></div>
                                <span class="button-text">Update payment method</span>
                            </button>

                            <div id="error-message">
                                <!-- Display error message to your customers here -->
                            </div>

                            <div class="sr-field-error"></div>
                        </form>
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
                                <span>${{ number_format($milestone_charges['milestone_amount'], 2) }}</span>
                            </div>

                            <div class="single-subtotal">
                                <span>Marketplace fee ({{ env('SERVICE_CHARGE') }}%)</span>
                                <span>${{ number_format($milestone_charges['service_charge'], 2) }}</span>
                            </div>

                            <div class="single-subtotal">
                                <span>Contact initiation fee</span>
                                <span>${{ number_format($milestone_charges['contract_initialization_fee'], 2) }}</span>
                            </div>

                            <div class="single-subtotal">
                                <span>Estimate taxes ({{ env('GST') }}%)</span>
                                <span>${{ number_format($milestone_charges['gst'], 2) }}</span>
                            </div>

                            <div class="single-subtotal">
                                <span>Payment Gateway fee ({{ env('PAYMENT_GATEWAY_FEE') }}%)</span>
                                <span>${{ number_format($milestone_charges['payment_gateway_fee'], 2) }}</span>
                            </div>

                            <hr />
                            <div class="single-subtotal estimate-total">
                                <input type="hidden" name="total" id="total_amount" value="{{ $milestone_charges['total_amount'] }}">
                                <span>Estimate Total</span>
                                <span> ${{ number_format($milestone_charges['total_amount'], 2) }}</span>
                            </div>

                        </div>


                        <div class="checkout-learn">
                            Learn <span class="checkout-about">about</span> fees and  <span class="checkout-extend">estimated taxes </span>
                        </div>

                        <div class="btn-check-fund-area">
                            <button id="fund_now" class="btn-check-fund">Check & Fund</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            {{--const stripe = Stripe('{{ env('STRIPE_KEY') }}');--}}
            {{--const {--}}
            {{--    error: backendError,--}}
            {{--    clientSecret--}}
            {{--} = await fetch('{{ route('client.payment.createPaymentIntent') }}', {--}}
            {{--    method: 'POST',--}}
            {{--    body: JSON.stringify({--}}
            {{--        milestone_id: 1,--}}
            {{--        amount: document.getElementById("release_value").value--}}
            {{--    }),--}}
            {{--    headers: {--}}
            {{--        "X-CSRF-Token": "{{ csrf_token() }}",--}}
            {{--        'Content-type': 'application/json;',--}}
            {{--    }--}}
            {{--}).then(r => r.json());--}}
            {{--if (backendError) {--}}
            {{--    addMessage(backendError.message);--}}
            {{--}--}}

            // const appearance = { /* appearance */};
            // const options = {
            //     layout: {
            //         type: 'accordion',
            //         defaultCollapsed: false,
            //         radios: false,
            //         spacedAccordionItems: true
            //     }
            // };
            //
            // const elements = stripe.elements({clientSecret, appearance});
            // const paymentElement = elements.create('payment', options);
            // paymentElement.mount('#payment-element');

            // const linkAuthenticationElement = elements.create("linkAuthentication");
            // linkAuthenticationElement.mount("#link-authentication-element");

            // If the customer's email is known when the page is loaded, you can
            // pass the email to the linkAuthenticationElement on mount:
            //
            //   linkAuthenticationElement.mount("#link-authentication-element",  {
            //     defaultValues: {
            //       email: 'jenny.rosen@example.com',
            //     }
            //   })
            // If you need access to the email address entered:
            //
            //  linkAuthenticationElement.on('change', (event) => {
            //    const email = event.value.email;
            //    console.log({ email });
            //  })

            // When the form is submitted...
            const form = document.getElementById('payment-form');
            let submitted = false;
            form.addEventListener('submit', async (e) => {
                e.preventDefault();

                // Disable double submission of the form
                if(submitted) { return; }
                submitted = true;
                form.querySelector('button').disabled = true;

                const nameInput = document.querySelector('#name');

                // Confirm the payment given the clientSecret
                // from the payment intent that was just created on
                // the server.
                const {error: stripeError} = await stripe.confirmPayment({
                    elements,
                    confirmParams: {
                        return_url: "{{ route('client.payment.index') }}",
                    }
                });

                if (stripeError) {
                    addMessage(stripeError.message);
                    // reenable the form.
                    submitted = false;
                    form.querySelector('button').disabled = false;
                    return;
                }
            });
        });

        var stripe;
        var card;

        var chargeCard = function(paymentMethod) {
            fetch('{{ route('client.payment.chargeCardOffsession') }}', {
                method: 'POST',
                body: JSON.stringify({
                    payment_method_id: paymentMethod
                }),
                headers: {
                    "X-CSRF-Token": "{{ csrf_token() }}",
                    'Content-type': 'application/json;',
                }
            }).then(function(result) {
                return result.json();
            }).then(function (data){
                setupElements();

                console.log(data.clientSecret);

                setupNewPaymentMethodView(data.clientSecret);

                if (data.error && data.error === "authentication_required") {
                    // Card needs to be authenticatied
                    // Reuse the card details we have to use confirmCardPayment() to prompt for authentication
                    showAuthenticationView(data);
                } else if (data.error) {
                    // Card was declined off-session -- ask customer for a new card
                    notify('error', data.error);
                } else if (data.succeeded) {
                    console.log(data);
                    // Card was successfully charged off-session
                    // No recovery flow needed
                    paymentIntentSucceeded(data.clientSecret, ".sr-select-pm");
                }
            });
        }

        var setupElements = function() {
            stripe = Stripe("{{ env('STRIPE_KEY') }}");
            var elements = stripe.elements();
            var style = {
                base: {
                    color: "#32325d",
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: "antialiased",
                    fontSize: "16px",
                    "::placeholder": {
                        color: "#aab7c4"
                    }
                },
                invalid: {
                    color: "#fa755a",
                    iconColor: "#fa755a"
                }
            };

            card = elements.create("card", { style: style });
            card.mount("#payment-element");
        };

        // Set up event handler for new payment method view
        var setupNewPaymentMethodView = function(clientSecret) {
            // Event handler to prompt a customer to enter new payment details
            document.querySelector("#update-pm").addEventListener("click", function(evt) {
                document.querySelector("#update-pm").disabled = true;
                // Use confirmCardPayment() to attemp to pay for the PaymentIntent with a
                // new card (collected by the Card Element) and save it to the customer
                stripe
                    .confirmCardPayment(clientSecret, {
                        payment_method: { card: card },
                        save_payment_method: true
                    })
                    .then(function(stripeJsResult) {
                        document.querySelector("#update-pm").disabled = false;
                        if (stripeJsResult.error) {
                            // Ask for new card details
                            notify('error', stripeJsResult.error.message);
                        } else if (
                            stripeJsResult.paymentIntent &&
                            stripeJsResult.paymentIntent.status === "succeeded"
                        ) {
                            // New card details were used to pay for the PaymentIntent
                            // There's a risk your customer will drop-off or close the browser before this callback executes
                            // We recommend handling any business-critical post-payment logic in a webhook
                            stripe.retrievePaymentIntent(clientSecret).then(function(result) {
                                var paymentIntent = result.paymentIntent;
                                var paymentIntentJson = JSON.stringify(paymentIntent, null, 2);
                                document.querySelector("pre").textContent = paymentIntentJson;
                                document.querySelector(".code-preview").classList.add("expand");
                            });
                        }
                    });
            });
        };

        var paymentIntentSucceeded = function(clientSecret, viewSelector) {
            // hideEl(viewSelector);
            // showEl(".code-preview");
            stripe.retrievePaymentIntent(clientSecret).then(function(result) {
                var paymentIntent = result.paymentIntent;
                var paymentIntentJson = JSON.stringify(paymentIntent, null, 2);
                console.log(paymentIntentJson);
                // document.querySelector("pre").textContent = paymentIntentJson;
                // document.querySelector(".code-preview").classList.add("expand");
            });
        };
        document.querySelector('#fund_now').addEventListener('click', function (event) {
            event.preventDefault();
            const stripe = Stripe('{{ env('STRIPE_KEY') }}');

            var selectedPaymentMethod = document.querySelector(".payment_method:checked").getAttribute('data-id');

            chargeCard(selectedPaymentMethod);
        });
    </script>
@endsection
