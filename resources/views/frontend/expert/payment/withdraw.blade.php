@extends('frontend.layouts.app')
@section('content')
    @vite('resources/default/css/expert-dashboard.css')
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">
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
                    <a href="{{ route('expert.payment.requstRelease') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Milestone Relesae Request</a>
                </li>
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->
    <main class="expert__dashboad diary__page verification__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class="px-40 mb-32 pt-37 d-flex align-items-center justify-content-between">
                    <h1 class="lead-lg fw-medium text-black mb-0">Withdraw Now</h1>
                    <div>
                        Available Balance: ${{ number_format($balance->available[0]->amount / 100, 2) }}
                    </div>
                </div>
                <form action="{{ route('expert.payment.withdraw') }}" method="post">
                    @csrf
                    <ul class="notification__list border rounded-3">
                        <li class="p-4">
                            <label for="">Withdrawal Method</label>
                            <select class="form-control" name="withdraw_method" id="withdraw_method">
                                @foreach($withdrawal_methods as $withdrawal_method)
                                    <option value="{{ $withdrawal_method->id }}">A/C {{ $withdrawal_method->account_number }} in {{ $withdrawal_method->currency }}</option>
                                @endforeach
                            </select>
                        </li>
                        <li class="p-4">
                            <label for="">Amount</label>
                            <input type="number" step=".01" class="form-control" name="amount" id="amount">
                        </li>
                        <li class="p-4">
                            <label for="">Reference</label>
                            <input type="text" class="form-control" name="reference" id="reference" value="{{ old('reference') }}">
                            <input type="checkbox" name="save_reference"> Save for future use
                        </li>
                        <li class="p-4">
                            <button class="btn btn-md px-5 btn-primary" type="submit">Withdraw</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </main>
    <script>

    </script>
@endsection
