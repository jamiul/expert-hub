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
                        <h2>Bank Information</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="balance-table-area d-flex flex-column">
                        <table class="table table-hover transaction-all">
                            <tr>
                                <th>routing_number</th>
                                <th>account_number</th>
                                <th>currency</th>
                                <th>default</th>
                            </tr>
                            @forelse($user->expert_withdrawal as $method)
                                <tr>
                                    <td>{{ $method->routing_number }}</td>
                                    <td>**** {{ $method->last4 }}</td>
                                    <td>{{ $method->currency }}</td>
                                    <td>{{ $method->is_default }}</td>
                                </tr>
                            @empty

                            @endforelse
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h3>Add new Bank Information</h3>
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <ul class="notification__list border rounded-3">
                            <li class="p-4">
                                <label for="">country</label>
                                <select class="form-control" name="country" id="country">
                                    <option value="AU">Australia</option>
                                </select>
                            </li>
                            <li class="p-4">
                                <label for="">currency</label>
                                <select class="form-control" name="currency" id="currency">
                                    <option value="AUD">AUD</option>
                                </select>
                            </li>
                            <li class="p-4">
                                <label for="">account_holder_name</label>
                                <input type="text" class="form-control" name="account_holder_name" id="account_holder_name" value="{{ old('account_holder_name') }}">
                            </li>
                            <li class="p-4">
                                <label for="">account_holder_type</label>
                                <select class="form-control" name="account_holder_type" id="account_holder_type">
                                    <option>individual</option>
                                    <option>company</option>
                                </select>
                            </li>
                            <li class="p-4">
                                <label for="">account_type</label>
                                <select class="form-control" name="account_type" id="account_type">
                                    <option>savings</option>
                                    <option>checking</option>
                                </select>
                            </li>
                            <li class="p-4">
                                <label for="">routing_number</label>
                                <input type="text" class="form-control" name="routing_number" id="routing_number" value="{{ old('routing_number') }}">
                            </li>
                            <li class="p-4">
                                <label for="">account_number</label>
                                <input type="text" class="form-control" name="account_number" id="account_number" value="{{ old('account_number') }}">
                            </li>
                            <li class="p-4">
                                <button class="btn btn-md px-5 btn-primary" type="submit">Submit</button>
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
