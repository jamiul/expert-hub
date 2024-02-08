@extends('frontend.layouts.app')
@section('content')

    @livewire('client.payment.add')

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
@endsection
