<div>
    @if(($payment_methods->count() > 0))
        <div class="card card-24 card-payment-method">
            <div class="card-body">
                <div class="form-radio-group mb-0">
                    <div class="form-radio-options payment-method-options">
                        @foreach($payment_methods as $payment_method)
                            <div class="form-radio-option ">
                                <input type="radio" name="payment-method" id="{{ $payment_method->stripe_payment_id }}" data-id="{{ $payment_method->stripe_payment_id }}"
                                       class="payment_method form-radio-field form-check-input">
                                <div class="form-radio-title">
                                    <label class="" for="{{ $payment_method->stripe_payment_id }}">
                                        @php
                                            $brand = "icon.logo-" . $payment_method->brand;
                                        @endphp
                                        <span>
                                            <x-dynamic-component :component="$brand" />
                                        </span>
                                        ends with {{ $payment_method->last4 }} Exp: {{ $payment_method->exp_month }}/{{ $payment_method->exp_year }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
