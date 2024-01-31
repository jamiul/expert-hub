@extends('frontend.layouts.app')

@section('content')
    <section class="my-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="h5">Select a billing method</h1>
                    <p>This will be primary billing method across all contracts, account activity and subscriptions</p>

                    @livewire('payment.card.lists')

                    <button type="button"
                            onclick="Livewire.dispatch('modal.open', { component: 'payment.card.add' })"
                            class="btn btn-outline-primary btn-has-icon btn-md border-2 mt-40">
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
                                    <p class="m-0 fw-bold">{{ $contract->expert->user->full_name }}</p>
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
                            <button class="btn btn-primary btn-md w-100" id="fund_now">Fund Milestone & Hire</button>
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
                        return_url: "{{ route('offers.show', $contract->id) }}",
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

        var chargeCard = function(paymentMethod) {
            fetch('{{ route('client.payment.chargeCardOffsession') }}', {
                method: 'POST',
                body: JSON.stringify({
                    payment_method_id: paymentMethod,
                    reference: '{{ request()->reference }}',
                    id: {{ request()->id }}
                }),
                headers: {
                    "X-CSRF-Token": "{{ csrf_token() }}",
                    'Content-type': 'application/json;',
                }
            }).then(function(result) {
                return result.json();
            }).then(function (data){
                if(data.intent.status == "succeeded"){
                    notify('success', 'Payment escrow successfully.'),
                    window.location.href = data.redirect
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
