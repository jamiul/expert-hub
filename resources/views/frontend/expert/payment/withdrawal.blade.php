@extends('frontend.layouts.app')
@section('content')
    @vite('resources/default/css/expert-dashboard.css')
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">
    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
                <li class="me-3">
                    <a href="#" class="text-white fw-medium px-2 py-3 d-inline-block">Payment Method</a>
                </li>
                <li class="me-3">
                    <a href="{{ route('expert.payment.onboard') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Identity Verification</a>
                </li>
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->
    <main class="expert__dashboad diary__page verification__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class="px-40 mb-32 pt-37 d-flex align-items-center justify-content-between">
                    <h1 class="lead-lg fw-medium text-black mb-0">Bank information</h1>
                    <div>
                        <!-- <button class="btn btn-primary px-4">Get started Verify</button> -->
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>routing_number</th>
                        <th>account_number</th>
                        <th>default</th>
                    </tr>
                    @forelse($user->expert_withdrawal as $method)
                        <tr>
                            <td>{{ $method->routing_number }}</td>
                            <td>{{ $method->account_number }}</td>
                            <td>{{ $method->default }}</td>
                        </tr>
                    @empty

                    @endforelse
                </table>

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
                            <input type="number" class="form-control" name="routing_number" id="routing_number" value="{{ old('routing_number') }}">
                        </li>
                        <li class="p-4">
                            <label for="">account_number</label>
                            <input type="number" class="form-control" name="account_number" id="account_number" value="{{ old('account_number') }}">
                        </li>
                        <li class="p-4">
                            <button class="btn btn-md px-5 btn-primary" type="submit">Submit</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </main>
    <script>

    </script>
@endsection
