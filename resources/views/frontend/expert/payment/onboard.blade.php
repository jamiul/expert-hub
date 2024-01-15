@extends('frontend.layouts.front-expert-dashboard-layout')
@section('content')
    @vite('resources/default/css/expert-dashboard.css')
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500&display=swap" rel="stylesheet">
    <!-- sub menu start -->
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
    <!-- sub menu end -->
    <main class="expert__dashboad diary__page verification__page py-5">
        <div class="container">
            <div class="main__content__wrapp">
                <div class="px-40 mb-32 pt-37 d-flex align-items-center justify-content-between">
                    <h1 class="lead-lg fw-medium text-black mb-0">eKYC information</h1>
                    <div>
                        <!-- <button class="btn btn-primary px-4">Get started Verify</button> -->
                    </div>
                </div>

                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <ul class="notification__list border rounded-3">
                        <li class="p-4">
                            <label for="">address.line1</label>
                            <input type="text" class="form-control" name="address_line1" id="address_line1" value="{{ old('address_line1', @$user->expert_kyc->individual_registered_address_line1) }}">
                        </li>
                        <li class="p-4">
                            <label for="">address.line2</label>
                            <input type="text" class="form-control" name="address_line2" id="address_line2" value="{{ old('address_line2', @$user->expert_kyc->individual_registered_address_line2) }}">
                        </li>
                        <li class="p-4">
                            <label for="">address.city</label>
                            <input type="text" class="form-control" name="address_city" id="address_city" value="{{ old('address_city', @$user->expert_kyc->individual_registered_address_city) }}">
                        </li>
                        <li class="p-4">
                            <label for="">address.state</label>
                            <input type="text" class="form-control" name="address_state" id="address_state" value="{{ old('address_state', @$user->expert_kyc->individual_registered_address_state) }}">
                        </li>
                        <li class="p-4">
                            <label for="">address.postal_code</label>
                            <input type="text" class="form-control" name="address_postal_code" id="address_postal_code" value="{{ old('address_postal_code', @$user->expert_kyc->individual_registered_address_postal_code) }}">
                        </li>
                        <li class="p-4">
                            <label for="">address.country</label>
                            <input type="text" class="form-control" name="address_country" id="address_country" value="{{ old('address_country', @$user->expert_kyc->individual_registered_address_country) }}">
                        </li>
                        <li class="p-4">
                            <label for="">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob" value="{{ old('dob', @$user->expert_kyc->individual_dob) }}">
                        </li>
                        <li class="p-4">
                            <label for="">phone</label>
                            <input type="tel" class="form-control" name="phone" id="phone" value="{{ old('phone', @$user->expert_kyc->individual_phone) }}">
                        </li>
                        <li class="p-4">
                            <label for="">verification.document front</label>
                            <select class="form-control" name="verification_document_type">
                                <option>Passport</option>
                                <option>Driver Licence (Driver's license)</option>
                                <option>Photo Card</option>
                                <option>New South Wales Driving Instructor Licence</option>
                                <option>Tasmanian Government Personal Information Card</option>
                                <option>ImmiCard</option>
                                <option>Proof of Age card</option>
                                <option>Australian Defence Force (ADF) identification card (Military ID)</option>
                                <option>Other</option>
                            </select>
                        </li>
                        <li class="p-4">
                            <label for="">verification.document front</label>
                            <input type="file" class="form-control" name="document_front" id="document_front" value="{{ old('document_front') }}">
                        </li>
                        <li class="p-4">
                            <label for="">verification.document back</label>
                            <input type="file" class="form-control" name="document_back" id="document_back" value="{{ old('document_back') }}">
                        </li>
                        <li class="p-4">
                            <label for="">verification.additional_document front</label>
                            <input type="file" class="form-control" name="additional_document_front" id="additional_document_front" value="{{ old('additional_document_front') }}">
                        </li>
                        <li class="p-4">
                            <label for="">verification.additional_document back</label>
                            <input type="file" class="form-control" name="additional_document_back" id="additional_document_back" value="{{ old('additional_document_back') }}">
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
