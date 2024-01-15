@extends('frontend.layouts.app')
@section('content')
    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
                <li class="me-3">
                    <a href="{{ route('expert.payment.withdrawal') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Payment Method</a>
                </li>
                <li class="me-3">
                    <a href="{{ route('expert.payment.onboard') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Identity Verification</a>
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
                            <h4>eKYC information</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card-area d-flex justify-content-between align-content-center">
                        charges_enabled: {{ $expert_stripe_account->charges_enabled ? 'Enabled' : 'Disabled' }}<br />
                        details_submitted: {{ $expert_stripe_account->details_submitted ? 'Yes' : 'No' }}<br />
                        payouts_enabled: {{ $expert_stripe_account->payouts_enabled ? 'Enabled' : 'Disabled' }}<br />

                        past_due:
                        @if($expert_stripe_account->requirements->past_due)
                            <ul>
                                @foreach($expert_stripe_account->requirements->past_due as $past_due)
                                    <li>{{ $past_due }}</li>
                                @endforeach
                            </ul>
                        @endif

                        errors:
                        @if($expert_stripe_account->requirements->errors)
                            <ul>
                                @foreach($expert_stripe_account->requirements->errors as $err)
                                    <li>{{ $err->reason }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if(in_array('external_account', $expert_stripe_account->requirements->past_due))
                            <a class="btn btn-md px-5 btn-primary" href="{{ route('expert.payment.withdrawal') }}">add withdrawl method</a>
                        @endif
                        @if($expert_stripe_account->requirements->past_due)
                            <a class="btn btn-success" href="{{ route('expert.payment.onboard') }}">Submit required documents</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
@endsection
