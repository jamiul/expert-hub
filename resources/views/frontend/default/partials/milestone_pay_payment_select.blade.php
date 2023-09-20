<form class="form-horizontal" action="{{ route('milestone.pay_to_admin') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="milestone_request_id" value="{{ $milestone->id }}">
    <div class="form-group">
        <label class="form-label">
            {{translate('Sending Amount')}}
            <span class="text-danger">*</span>
        </label>
        <div class="form-group">
            <input type="number" min="{{ $milestone->amount }}" max="{{ $milestone->amount }}" class="form-control" name="amount" value="{{ $milestone->amount }}" required readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="form-label">
            {{translate('Payment System')}}
            <span class="text-danger">*</span>
        </label>
        <div class="form-group">
            <div class="row">
                @if(get_setting('paypal_activation_checkbox'))
                    <div class="col-6 col-md-4">
                        <label class="aiz-megabox d-block mb-3">
                            <input value="paypal" id="payment_option" type="radio" name="payment_option" checked>
                            <span class="d-block p-3 aiz-megabox-elem">
                                <img src="{{ asset('assets/frontend/default/img/paypal.png') }}" class="img-fluid mb-2">
                                <span class="d-block text-center">
                                    <span class="d-block fw-600 fs-15">{{ translate('Paypal') }}</span>
                                </span>
                            </span>
                        </label>
                    </div>
                @endif
                @if(get_setting('stripe_activation_checkbox'))
                    <div class="col-6 col-md-4">
                        <label class="aiz-megabox d-block mb-3">
                            <input value="stripe" id="payment_option" type="radio" name="payment_option" checked>
                            <span class="d-block p-3 aiz-megabox-elem">
                                <img src="{{ asset('assets/frontend/default/img/stripe.png') }}" class="img-fluid mb-2">
                                <span class="d-block text-center">
                                    <span class="d-block fw-600 fs-15">{{ translate('Stripe') }}</span>
                                </span>
                            </span>
                        </label>
                    </div>
                @endif
                @if(get_setting('escrow_activation_checkbox'))
                <div class="col-6 col-md-4">
                    <label class="aiz-megabox d-block mb-3">
                        <input value="escrow" id="payment_option" type="radio" name="payment_option" checked>
                        <span class="d-block p-3 aiz-megabox-elem">
                            <img src="{{ asset('assets/frontend/default/img/escrow.png') }}" class="img-fluid mb-2">
                            <span class="d-block text-center">
                                <span class="d-block fw-600 fs-15">{{ translate('Escrow') }}</span>
                            </span>
                        </span>
                    </label>
                </div>
            @endif
                @if(get_setting('sslcommerz_activation_checkbox'))
                    <div class="col-6 col-md-4">
                        <label class="aiz-megabox d-block mb-3">
                            <input value="sslcommerz" id="payment_option" type="radio" name="payment_option" checked>
                            <span class="d-block p-3 aiz-megabox-elem">
                                <img src="{{ asset('assets/frontend/default/img/sslcommerz.png') }}" class="img-fluid mb-2">
                                <span class="d-block text-center">
                                    <span class="d-block fw-600 fs-15">{{ translate('sslcommerz') }}</span>
                                </span>
                            </span>
                        </label>
                    </div>
                @endif
                @if(get_setting('paystack_activation_checkbox'))
                    <div class="col-6 col-md-4">
                        <label class="aiz-megabox d-block mb-3">
                            <input value="paystack" id="payment_option" type="radio" name="payment_option" checked>
                            <span class="d-block p-3 aiz-megabox-elem">
                                <img src="{{ asset('assets/frontend/default/img/paystack.png') }}" class="img-fluid mb-2">
                                <span class="d-block text-center">
                                    <span class="d-block fw-600 fs-15">{{ translate('Paystack') }}</span>
                                </span>
                            </span>
                        </label>
                    </div>
                @endif
                @if(get_setting('instamojo_activation_checkbox'))
                    <div class="col-6 col-md-4">
                        <label class="aiz-megabox d-block mb-3">
                            <input value="instamojo" id="payment_option" type="radio" name="payment_option" checked>
                            <span class="d-block p-3 aiz-megabox-elem">
                                <img src="{{ asset('assets/frontend/default/img/instamojo.png') }}" class="img-fluid mb-2">
                                <span class="d-block text-center">
                                    <span class="d-block fw-600 fs-15">{{ translate('Instamojo') }}</span>
                                </span>
                            </span>
                        </label>
                    </div>
                @endif
                @if(get_setting('paytm_activation_checkbox'))
                    <div class="col-6 col-md-4">
                        <label class="aiz-megabox d-block mb-3">
                            <input value="paytm" id="payment_option" type="radio" name="payment_option" checked>
                            <span class="d-block p-3 aiz-megabox-elem">
                                <img src="{{ asset('assets/frontend/default/img/paytm.png') }}" class="img-fluid mb-2">
                                <span class="d-block text-center">
                                    <span class="d-block fw-600 fs-15">{{ translate('Paytm') }}</span>
                                </span>
                            </span>
                        </label>
                    </div>
                @endif
                @if(get_setting('flutterwave_activation_checkbox'))
                    <div class="col-6 col-md-4">
                        <label class="aiz-megabox d-block mb-3">
                            <input value="flutterwave" id="payment_option" type="radio" name="payment_option" checked>
                            <span class="d-block p-3 aiz-megabox-elem">
                                <img src="{{ asset('assets/frontend/default/img/flutterwave.png') }}" class="img-fluid mb-2">
                                <span class="d-block text-center">
                                    <span class="d-block fw-600 fs-15">{{ translate('Flutterwave') }}</span>
                                </span>
                            </span>
                        </label>
                    </div>
                @endif
                @if(Auth::user()->profile->balance >= $milestone->amount)
                    <div class="col-6 col-md-4">
                        <label class="aiz-megabox d-block mb-3">
                            <input value="wallet" id="payment_option" type="radio" name="payment_option" checked>
                            <span class="d-block p-3 aiz-megabox-elem">
                                <img src="{{ asset('assets/frontend/default/img/wallet.png') }}" class="img-fluid mb-2">
                                <span class="d-block text-center">
                                    <span class="d-block fw-600 fs-15">{{ translate('Wallet') }}</span>
                                </span>
                            </span>
                        </label>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary rounded-1">{{ translate('Pay Now') }}</button>
    </div>

    {{-- <form action="https://www.escrow.com/checkout" method="post" target="_blank"><input type="hidden" name="type" value="domain_name"><input type="hidden" name="non_initiator_email" value="jamiulewu24@gmail.com"><input type="hidden" name="non_initiator_id" value="2976527"><input type="hidden" name="non_initiator_role" value="seller"><input type="hidden" name="title" value="Escrow"><input type="hidden" name="currency" value="USD"><input type="hidden" name="domain" value="consultantedu.com"><input type="hidden" name="price" value="200"><input type="hidden" name="concierge" value="false"><input type="hidden" name="with_content" value="false"><input type="hidden" name="inspection_period" value="1"><input type="hidden" name="fee_payer" value="buyer"><input type="hidden" name="return_url" value="https://www.consultantedu.com//recieved-milestone-requests"><input type="hidden" name="button_types" value="buy_now"><input type="hidden" name="auto_accept" value=""><input type="hidden" name="auto_reject" value=""><input type="hidden" name="item_key" value="undefined"><style>@import url(https://fonts.googleapis.com/css?family=Open+Sans:600);.EscrowButtonPrimary.EscrowButtonPrimary{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAAALCAMAAABGfiMeAAAAolBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8ELnaCAAAANXRSTlMA95xuSysUU/vh2tWxlA4Z88Sselc1He/quriOCwbNiYFEMALm0Mm+taJnP6ZjIoRdTjp03P7kXRgAAAI+SURBVDjLhZKJkppQEEXvQ0BAZBEEHQFlUVzHZXL//9fSj1Ti1GRMTpWtJe/16faKt4EpEBqu6qoGOHpKuQbuS8GwABTJNveMDCYrAB3l8DvzFkLj/3CrA4D0zYs3BfDoDAiF5+F76CyEHtjJJ4cNjmSk6GFEjRLhnswVF2HgOAEscgJcuAdEG9F1IwVs5NsFdyVMKhvAjc4r3wQDIScBYJfYspZ3S3z7+3jJgxi6BoHPtYx01+PQxoEfgNZc9FW0kZuhPDBFyuFJTJb/9tncthBaJ4dGfFOIa4uxOIGTbLTmCmdWHMPlHILPAJqMhtQ5r7IYPX2NDF743FQoIHtNkgwIOHn6xPUmr1/NlkOAnUo5zRiVEGKFp08sa1k/5wkrqeEL38C7ZLElRWE/fa6/V7x98kmAc/Zy4iZjaHbRV9+IK57L3PX5/mo/UyggNElOM6D326e54pMPFX1usJWa4Pv9Eo53asTkQOtlfk/kYKv+5OfXE93X5AxATR9YkTxhKvUBzYw2NCHPUh8yy5XmhcoJDc7/4xs3bXHmETEvgW3VQ36WcuYIqcw266UZ7qQqZWEdXz0NkfADKBqgix76LzyWieoioi8znV74qIQd7IgOubClm8YbfLjQK6SHfuTagE32Q10CExkgXMhtKiAlO8W+Fc8D95GFNWuEyYf5l3U2sEYw6l3voEM2+x9efIU5uwC4zsay+t6L1zaE1fk21BQ4xrJXZsS7/UrHa8T+qAQ2lQXNsRJTfTK//qo/Aes/TdDnJ+8NAAAAAElFTkSuQmCC);-moz-osx-font-smoothing:grayscale!important;-webkit-font-smoothing:antialiased!important;background-color:#0ecb6f!important;background-repeat:no-repeat!important;background-position:right 13px!important;border-radius:4px!important;border:1px solid #0ecb6f!important;-webkit-box-shadow:0 2px 4px 0 hsla(0,12%,54%,.1)!important;box-shadow:0 2px 4px 0 hsla(0,12%,54%,.1)!important;-webkit-box-sizing:border-box!important;box-sizing:border-box!important;color:#fff!important;cursor:pointer!important;display:inline-block!important;font-family:Open Sans,sans-serif!important;font-size:14px!important;font-weight:600!important;letter-spacing:.4px!important;line-height:1.2!important;min-height:40px!important;padding:8px 118px 8px 21px!important;text-align:left!important;text-decoration:none!important;text-shadow:none!important;text-transform:none!important;-webkit-transition:all .1s linear!important;transition:all .1s linear!important;vertical-align:middle!important}.EscrowButtonPrimary.EscrowButtonPrimary:focus,.EscrowButtonPrimary.EscrowButtonPrimary:hover{color:#fff!important;font-size:14px!important;font-weight:600!important;outline:0!important;text-decoration:none!important;-webkit-transform:none!important;transform:none!important}.EscrowButtonPrimary.EscrowButtonPrimary:hover{background-color:#56da9a!important;border-color:#56da9a!important}.EscrowButtonPrimary.EscrowButtonPrimary:focus{background-color:#00b65a!important}</style><button class="EscrowButtonPrimary" type="submit">ESCROW</button><img src="https://t.escrow.com/1px.gif?name=bin&price=200&title=Escrow&user_id=2976527" style="display: none;"></form>
</form> --}}
