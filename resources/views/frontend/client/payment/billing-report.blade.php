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


    <div class="find-consultant databasepading  my-5">
        <div class="container">
            <div class="row area-padding">
                <div class="col-md-12">
                    <div class="payment-title-area">
                        <div class="payment-title">
                            <h4>Transactions</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
@endsection
