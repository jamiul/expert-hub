@extends('frontend.layouts.app')
@section('content')
    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
                <li class="me-3">
                    <a href="{{ route('expert.payment.index') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Billing & Payment</a>
                </li>
                <li class="me-3">
                    <a href="{{ route('expert.payment.billing') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Billing Report</a>
                </li>
                <li class="me-3">
                    <a href="{{ route('expert.payment.onboard') }}" class="text-white fw-medium px-2 py-3 d-inline-block">eKYC Information</a>
                </li>
                <li class="me-3">
                    <a href="{{ route('expert.payment.withdrawal') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Withdrawal Information</a>
                </li>
                <li class="me-3">
                    <a href="{{ route('expert.payment.withdraw') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Withdraw Now</a>
                </li>
                {{-- todo: move to dymaic milestone --}}
                <li class="me-3">
                    <a href="{{ route('expert.payment.requestRelease') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Milestone Relesae Request</a>
                </li>
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->

    <section class="client-dashboard mx-auto my-5">
        <div class="container">
            <div class="row">
                <div class="history-report-area d-flex justify-content-between">
                    <div class="all-project history-report">
                        <h2>Request milestone release</h2>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <form method="post">
                        @csrf
                        <ul class="notification__list border rounded-3">
                            <li class="p-4">
                                <label for="">Milestone ID</label>
                                <input type="number" class="form-control" name="milestone_id" id="milestone_id">
                            </li>
                            <li class="p-4">
                                <label for="">Amount</label>
                                <input type="number" step=".01" class="form-control" name="amount" id="amount">
                            </li>
                            <li class="p-4">
                                <button class="btn btn-md px-5 btn-primary" type="submit">Request</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>

    </script>
@endsection
