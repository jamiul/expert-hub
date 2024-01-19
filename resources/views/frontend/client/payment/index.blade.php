@extends('frontend.layouts.app')
@section('content')
    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
                <li class="me-3">
                    <a href="{{ route('client.payment.index') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Payment
                        Methods</a>
                </li>
                <li class="me-3">
                    <a href="{{ route('client.payment.billing') }}"
                       class="text-white fw-medium px-2 py-3 d-inline-block">Billing Report</a>
                </li>
                {{-- todo: move to dymaic milestone --}}
                <li class="me-3">
                    <a href="{{ route('client.payment.pay') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Fund
                        Milestone</a>
                </li>
                {{-- todo: move to dymaic milestone accept --}}
                <li class="me-3">
                    <a href="{{ route('client.payment.acceptMilestone') }}"
                       class="text-white fw-medium px-2 py-3 d-inline-block">Release Milestone</a>
                </li>
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->


    <div class="find-consultant databasepading  my-5">
        <div class="container">
            <div class="row area-padding">
                <div class="col-md-12">
                    <div class="payment-title-area">
                        <div class="payment-title">
                            <h4>Payment information</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    @foreach($payment_methods as $payment_method)
                        <div class="card-area d-flex justify-content-between align-content-center">
                            <div
                                class="payment-card d-flex flex-row flex-wrap align-items-center justify-content- gap-4">
                                <div class="chard-check">
                                    @if($payment_method->is_default)
                                        <img src="{{ asset('assets/frontend/img/greencheck.png') }}" alt="green-check">
                                    @endif
                                </div>
                                <div class="chard-icon">
                                    <img src="{{ asset("assets/frontend/img/{$payment_method->brand}.png") }}"
                                         alt="card">
                                </div>
                                <div class="chard-number d-flex flex-column">
                                    <h6>Personal Account</h6>
                                    <p>card ends: ****{{ $payment_method->last4 }}
                                        exp.Date: {{ $payment_method->exp_month }}/{{ $payment_method->exp_year }}</p>
                                </div>
                            </div>

                            <div class="card-option d-flex justify-content-md-end gap-4 align-items-center ">
                                @if(!$payment_method->is_default)
                                    <a href="#" class="card-edit make_default" data-id="{{ $payment_method->stripe_payment_id }}"><span
                                            class="material-symbols-outlined">check</span></a>
                                @endif
                                @if(count($payment_methods) > 1)
                                    @if(!$payment_method->is_default)
                                        <a href="#" class="card-delete delete_card" data-id="{{ $payment_method->stripe_payment_id }}"><span
                                                class="material-symbols-outlined">delete</span></a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endforeach

                    <div class="col-md-12">

                        <div class="withdraw-area d-flex justify-content-between align-content-center">
                            <div class="without-method">
                                <p>Add your preferred payment method</p>
                            </div>

                            <div class="without-draw-button">
                                <button class="btn-with-draw d-flex justify-content-center align-items-center  gap-2">
                    <span class="payment-svg">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                      <path d="M11.75 13.25H6V11.75H11.75V6H13.25V11.75H19V13.25H13.25V19H11.75V13.25Z" fill="white"/>
                    </svg>
                  </span>
                                    <span class="payment-text"><a class="nav-link " id="add_payment_method" href="#">Add Payment Method</a> </span>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div id="show_card_form" class="d-none">
                        <form id="payment-form">
                            <div id="payment-element">
                                <!-- Elements will create form elements here -->
                            </div>
                            <button class="btn-with-draw d-flex justify-content-center align-items-center gap-2"
                                    id="submit">Add Card
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        document.querySelectorAll('.make_default').forEach((item) => {
            item.addEventListener('click', function () {
                const {
                    error: backendError,
                    clientSecret
                } = fetch('{{ route('client.payment.makeDefault') }}', {
                    method: 'POST',
                    body: JSON.stringify({
                        payment_method_id: this.getAttribute('data-id')
                    }),
                    headers: {
                        "X-CSRF-Token": "{{ csrf_token() }}",
                        'Content-type': 'application/json;',
                    }
                }).then(r => r.json());

                if (backendError) {
                    notify('error', backendError.message);
                }
            });
        });
        document.querySelectorAll('.delete_card').forEach((item) => {
            item.addEventListener('click', function () {
                const {
                    error: backendError,
                    clientSecret
                } = fetch('{{ route('client.payment.detachCard') }}', {
                    method: 'POST',
                    body: JSON.stringify({
                        payment_method_id: this.getAttribute('data-id')
                    }),
                    headers: {
                        "X-CSRF-Token": "{{ csrf_token() }}",
                        'Content-type': 'application/json;',
                    }
                }).then(r => r.json());

                if (backendError) {
                    notify('error', backendError.message);
                }
            });
        });
        document.querySelector("#add_payment_method").onclick = async () => {
            const el = document.querySelector("#show_card_form");
            el.classList.remove("d-none");
            el.classList.add("d-block");

            const stripe = Stripe('{{ env('STRIPE_KEY') }}');
            const {
                error: backendError,
                clientSecret
            } = await fetch('{{ route('client.payment.createSetupIntent') }}', {
                method: 'POST',
                headers: {
                    "X-CSRF-Token": "{{ csrf_token() }}",
                    'Content-type': 'application/json;',
                }
            }).then(r => r.json());
            if (backendError) {
                notify('error', backendError.message);
            }

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

            // When the form is submitted...
            const form = document.getElementById('payment-form');
            let submitted = false;
            form.addEventListener('submit', async (e) => {
                e.preventDefault();

                // Disable double submission of the form
                if (submitted) {
                    return;
                }
                submitted = true;
                form.querySelector('button').disabled = true;

                const nameInput = document.querySelector('#name');

                // Confirm the payment given the clientSecret
                // from the payment intent that was just created on
                // the server.
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
                            location.reload();
                        }
                    }
                    submitted = false;
                    form.querySelector('button').disabled = false;
                });
            });
        }

        // document.addEventListener('DOMContentLoaded', async () => {
        //
        // });
    </script>
@endsection
