@extends('frontend.layouts.app')
@section('content')
    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
                <li class="me-3">
                    <a href="{{ route('client.payment.billing') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Transaction History</a>
                </li>
                <li class="me-3">
                    <a href="{{ route('client.payment.index') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Payment Methods</a>
                </li>
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->


    <section class="my-60">
        <div class="container">
            <div class="edux-billing-method-card-area">
                <div class="edux-billing-method-content-with-card">
                    <h5>Payment Settings</h5>
                    <div class="edux-paypal-visa-billing">



                        <div class="edux-paypal-visa-billing-area mb-4">
                            @livewire('client.billing.card.lists')
                        </div>
                        <div class="single-button">
                            <button type="button" onclick="Livewire.dispatch('modal.open', { component: 'client.billing.card.add' })"
                                    class="btn edux-btn-border-primary"> <span class="arrow-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path
                                    d="M11 17H13V13H17V11H13V7H11V11H7V13H11V17ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z"
                                    fill="#0036E3"/>
                            </svg>
                    </span> <span class="btn-text">Add New Billing Method</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        window.addEventListener('loadStripeElement', event => {
            const stripe = Stripe('{{ env('STRIPE_KEY') }}');
            const clientSecret = event.detail[0].clientSecret;

            const appearance = { /* appearance */};
            const options = {
                layout: {
                    type: 'accordion',
                    defaultCollapsed: false,
                    radios: false,
                    spacedAccordionItems: true
                }
            };

            const elements = stripe.elements({clientSecret, appearance});
            const paymentElement = elements.create('payment', options);
            paymentElement.mount('#payment-element');

            const form = document.getElementById('payment-form');
            let submitted = false;
            form.addEventListener('submit', async (e) => {
                e.preventDefault();

                if (submitted) {
                    return;
                }
                submitted = true;
                form.querySelector('button').disabled = true;

                const nameInput = document.querySelector('#name');

                stripe.confirmSetup({
                    elements,
                    confirmParams: {
                        return_url: "{{ route('client.payment.index') }}",
                    },
                    redirect: "if_required",
                }).then(function (result) {
                    console.log(result);
                    if (result.error) {
                        notify('error', result.error.message);
                    } else {
                        console.log(result.setupIntent.status);
                        if (result.setupIntent.status == 'succeeded') {
                            notify('success', 'Card saved successfully')

                            setTimeout(function (){
                                Livewire.dispatch('modal.close');
                                Livewire.dispatch('refresh-the-component');
                            }, 2000);

                        }
                    }
                    submitted = false;
                    form.querySelector('button').disabled = false;
                });
            });
        })

        var stripe;
        var card;

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
    </script>
{{--    <script>--}}
{{--        document.querySelectorAll('.make_default').forEach((item) => {--}}
{{--            item.addEventListener('click', function () {--}}
{{--                const {--}}
{{--                    error: backendError,--}}
{{--                    clientSecret--}}
{{--                } = fetch('{{ route('client.payment.makeDefault') }}', {--}}
{{--                    method: 'POST',--}}
{{--                    body: JSON.stringify({--}}
{{--                        payment_method_id: this.getAttribute('data-id')--}}
{{--                    }),--}}
{{--                    headers: {--}}
{{--                        "X-CSRF-Token": "{{ csrf_token() }}",--}}
{{--                        'Content-type': 'application/json;',--}}
{{--                    }--}}
{{--                }).then(r => r.json());--}}

{{--                if (backendError) {--}}
{{--                    notify('error', backendError.message);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--        document.querySelectorAll('.delete_card').forEach((item) => {--}}
{{--            item.addEventListener('click', function () {--}}
{{--                const {--}}
{{--                    error: backendError,--}}
{{--                    clientSecret--}}
{{--                } = fetch('{{ route('client.payment.detachCard') }}', {--}}
{{--                    method: 'POST',--}}
{{--                    body: JSON.stringify({--}}
{{--                        payment_method_id: this.getAttribute('data-id')--}}
{{--                    }),--}}
{{--                    headers: {--}}
{{--                        "X-CSRF-Token": "{{ csrf_token() }}",--}}
{{--                        'Content-type': 'application/json;',--}}
{{--                    }--}}
{{--                }).then(r => r.json());--}}

{{--                if (backendError) {--}}
{{--                    notify('error', backendError.message);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--        document.querySelector("#add_payment_method").onclick = async () => {--}}
{{--            const el = document.querySelector("#show_card_form");--}}
{{--            el.classList.remove("d-none");--}}
{{--            el.classList.add("d-block");--}}

{{--            const stripe = Stripe('{{ env('STRIPE_KEY') }}');--}}
{{--            const {--}}
{{--                error: backendError,--}}
{{--                clientSecret--}}
{{--            } = await fetch('{{ route('client.payment.createSetupIntent') }}', {--}}
{{--                method: 'POST',--}}
{{--                headers: {--}}
{{--                    "X-CSRF-Token": "{{ csrf_token() }}",--}}
{{--                    'Content-type': 'application/json;',--}}
{{--                }--}}
{{--            }).then(r => r.json());--}}
{{--            if (backendError) {--}}
{{--                notify('error', backendError.message);--}}
{{--            }--}}

{{--            const appearance = { /* appearance */};--}}
{{--            const options = {--}}
{{--                layout: {--}}
{{--                    type: 'accordion',--}}
{{--                    defaultCollapsed: false,--}}
{{--                    radios: false,--}}
{{--                    spacedAccordionItems: true--}}
{{--                }--}}
{{--            };--}}

{{--            const elements = stripe.elements({clientSecret, appearance});--}}
{{--            const paymentElement = elements.create('payment', options);--}}
{{--            paymentElement.mount('#payment-element');--}}

{{--            // When the form is submitted...--}}
{{--            const form = document.getElementById('payment-form');--}}
{{--            let submitted = false;--}}
{{--            form.addEventListener('submit', async (e) => {--}}
{{--                e.preventDefault();--}}

{{--                // Disable double submission of the form--}}
{{--                if (submitted) {--}}
{{--                    return;--}}
{{--                }--}}
{{--                submitted = true;--}}
{{--                form.querySelector('button').disabled = true;--}}

{{--                const nameInput = document.querySelector('#name');--}}

{{--                // Confirm the payment given the clientSecret--}}
{{--                // from the payment intent that was just created on--}}
{{--                // the server.--}}
{{--                stripe.confirmSetup({--}}
{{--                    elements,--}}
{{--                    confirmParams: {--}}
{{--                        return_url: "{{ route('client.payment.index') }}",--}}
{{--                    },--}}
{{--                    redirect: "if_required",--}}
{{--                }).then(function (result) {--}}
{{--                    console.log(result);--}}
{{--                    if (result.error) {--}}
{{--                        notify('error', result.error.message);--}}
{{--                    } else {--}}
{{--                        console.log(result.setupIntent.status);--}}
{{--                        if (result.setupIntent.status == 'succeeded') {--}}
{{--                            notify('success', 'Card saved successfully')--}}
{{--                            location.reload();--}}
{{--                        }--}}
{{--                    }--}}
{{--                    submitted = false;--}}
{{--                    form.querySelector('button').disabled = false;--}}
{{--                });--}}
{{--            });--}}
{{--        }--}}

{{--        // document.addEventListener('DOMContentLoaded', async () => {--}}
{{--        //--}}
{{--        // });--}}
{{--    </script>--}}
@endsection
