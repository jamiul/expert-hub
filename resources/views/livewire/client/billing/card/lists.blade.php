<div>
    @if($payment_methods->count() > 0)
        <div class="form-radio-group mb-0">
            <div class="form-radio-options payment-method-options">
                @foreach($payment_methods as $payment_method)
                    <div class="form-radio-option ">
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
                            @if(!$payment_method->is_default)
                                <button class="make_default btn edux-btn-set-as-primary" data-id="{{ $payment_method->stripe_payment_id }}">Set as primary</button>
                            @endif
                            @if(count($payment_methods) > 1)
                                @if(!$payment_method->is_default)
                                    <button class="delete_card btn edux-btn-set-as-remove" data-id="{{ $payment_method->stripe_payment_id }}">Remove</button>
                                @endif
                            @endif
                        </div>
                        @if($payment_method->is_default)
                            <span class="edux-btn-paypal">Primary</span>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
