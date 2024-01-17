@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
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
                    <h3>Milestone: $200</h3>
                    <form id="payment-form">
                        <input type="text" id="release_value" name="release_value" value="200">
                        <div id="link-authentication-element">
                            <!-- Elements will create authentication element here -->
                        </div>
                        <div id="payment-element">
                            <!-- Elements will create form elements here -->
                        </div>
                        <button class="btn btn-complated" id="submit">Add Fund</button>

                        <div id="error-message">
                            <!-- Display error message to your customers here -->
                        </div>
                    </form>
                    <div id="messages" role="alert" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const addMessage = (message) => {
            const messagesDiv = document.querySelector('#messages');
            messagesDiv.style.display = 'block';
            messagesDiv.innerHTML += `${message}`;
        };

        document.addEventListener('DOMContentLoaded', async () => {
            const stripe = Stripe('{{ env('STRIPE_KEY') }}');
            const {
                error: backendError,
                clientSecret
            } = await fetch('{{ route('client.payment.createPaymentIntent') }}', {
                method: 'POST',
                body: JSON.stringify({
                    milestone_id: 1,
                    amount: document.getElementById("release_value").value
                }),
                headers: {
                    "X-CSRF-Token": "{{ csrf_token() }}",
                    'Content-type': 'application/json;',
                }
            }).then(r => r.json());
            if (backendError) {
                addMessage(backendError.message);
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
    </script>
@endsection
