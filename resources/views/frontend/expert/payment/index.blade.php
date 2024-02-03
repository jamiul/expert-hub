@extends('frontend.layouts.app')
@section('content')
    @vite('resources/default/css/expert-dashboard.css')

    <!-- sub menu start -->
    <nav class="bg-primary sub__nav">
        <div class="container">
            <ul class="d-flex">
                <li class="me-3">
                    <a href="{{ route('expert.payment.billing') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Transaction History</a>
                </li>
                <li class="me-3">
                    <a href="{{ route('expert.payment.index') }}" class="text-white fw-medium px-2 py-3 d-inline-block">Get Paid</a>
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
            </ul>
        </div><!--.//container-->
    </nav>
    <!-- sub menu end -->


    <section class="my-60">
        <div class="container">
            <div class="edux-billing-method-card-area">
                <div class="edux-billing-method-content-with-card">
                    <div class="get-paid-payment">
                        <h5>Get Paid</h5>
                        <div class="account-action">
                            <ul>
                                <li>Account</li>
                                <li class="resticted">Resticted</li>
                                <li>Payment</li>
                                <li class="badge badge-pill {{ $expert_stripe_account->charges_enabled ? 'badge-outline-success' : 'badge-outline-danger' }}">{{ $expert_stripe_account->charges_enabled ? 'Enabled' : 'Disabled' }}</li>
                                <li>Payouts</li>
                                <li class="badge badge-pill {{ $expert_stripe_account->payouts_enabled ? 'badge-outline-success' : 'badge-outline-danger' }}">{{ $expert_stripe_account->payouts_enabled ? 'Enabled' : 'Disabled' }}</li>
                            </ul>
                        </div>
                    </div>

                    <ul class="nav nav-pills mb-3 over-view" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">OverView</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Required Actions</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                            {{--                            <div class="col-md-12">--}}
                            {{--                                <div class="card-area d-flex justify-content-between align-content-center">--}}
                            {{--                                    charges_enabled: {{ $expert_stripe_account->charges_enabled ? 'Enabled' : 'Disabled' }}<br />--}}
                            {{--                                    details_submitted: {{ $expert_stripe_account->details_submitted ? 'Yes' : 'No' }}<br />--}}
                            {{--                                    payouts_enabled: {{ $expert_stripe_account->payouts_enabled ? 'Enabled' : 'Disabled' }}<br />--}}

                            {{--                                    available balance: {{ $balance->available[0]->amount }} {{ $balance->available[0]->currency }}<br />--}}
                            {{--                                    @if($balance->available[0]->amount > 0)--}}
                            {{--                                        <form action="{{ route('expert.payment.withdraw') }}" method="post">--}}
                            {{--                                            <label>Amount: </label>--}}
                            {{--                                            <input type="number" value="{{ old('withdraw_amount') }}" max="{{ $balance->available[0]->amount }}" name="withdraw_amount" />--}}
                            {{--                                            <button type="submit" class="btn">Withdraw</button>--}}
                            {{--                                        </form>--}}
                            {{--                                    @endif--}}
                            {{--                                    pending balance: {{ $balance->pending[0]->amount }} {{ $balance->pending[0]->currency }}<br />--}}
                            {{--                                    @if($expert_stripe_account->requirements->past_due)--}}
                            {{--                                        past_due:--}}
                            {{--                                        <ul>--}}
                            {{--                                            @foreach($expert_stripe_account->requirements->past_due as $past_due)--}}
                            {{--                                                <li>{{ $past_due }}</li>--}}
                            {{--                                            @endforeach--}}
                            {{--                                        </ul>--}}
                            {{--                                    @endif--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            <div class="edux-paypal-visa-billing">
                                @if($expert_stripe_account->requirements->errors)
                                    <div class="alert edux-alert alert-danger" role="alert">
                                        <x-icon.info/>
                                        <strong>Account requires updates. Charges and payouts were paused. </strong>
                                        <button type="button" class="view-requirement close" aria-label="Close">
                                            View Requirements
                                        </button>
                                    </div>
                                @endif
                            </div>

                            <div class="mt-4 p-3 p-sm-4 border rounded-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col-8">
                                        <p class="mb-0 lead fw-medium text-black">Available balance</p>
                                        <p class="mb-0 title text-primary fw-medium">{{ $balance->available[0]->currency }} {{ $balance->available[0]->amount }}</p>
                                    </div>
                                    <div class="col-4 text-end get-paid-end">
                                        <button class="btn btn-primary fs-15 fw-medium large__btn" data-bs-toggle="modal" data-bs-target="#modalGetPaid">Get Paid Now</button>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-4 p-3 p-sm-4 border rounded-4">
                                <p class="mb-2 lead fw-medium text-black d-flex align-items-center">
                                    <span> Withdrawal schedule</span>
                                    <button data-bs-toggle="modal" data-bs-target="#modaltransactionedit" class="get-paid-all  btn btn__fab p-0 d-inline-flex justify-content-center align-items-center ms-1">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.29683 15.8333H5.32727L13.0437 8.11692L12.0132 7.08647L4.29683 14.8029V15.8333ZM15.7167 7.21309L12.9042 4.42628L13.9908 3.33976C14.2354 3.0951 14.533 2.97278 14.8834 2.97278C15.2338 2.97278 15.5313 3.0951 15.776 3.33976L16.7904 4.35415C17.035 4.59881 17.1616 4.89207 17.1702 5.23395C17.1787 5.57582 17.0607 5.86908 16.816 6.11374L15.7167 7.21309ZM14.8129 8.12974L5.85931 17.0833H3.04688V14.2708L12.0004 5.31728L14.8129 8.12974ZM12.5244 7.59769L12.0132 7.08647L13.0437 8.11692L12.5244 7.59769Z" fill="#0036E3"/>
                                        </svg>
                                    </button>
                                </p>
                                <p class="text-black mb-3">
                                    Weekly (next on Oct 18) <br>
                                    Only when balance is $1,000.00 or more. <a href="#" class="text-primary text-decoration-underline fw-medium" data-bs-toggle="modal" data-bs-target="#modaltransactioneditcalender">View payment calendar</a>
                                </p>
                                <p class="text-black mb-0" >Direct to Local Bank (BDT) - Account ending in 1001</p>
                            </div>

                            <div class="mt-4 p-3 p-sm-4 border rounded-4">
                                <p class="mb-2 lead fw-medium text-black">
                                    Last withdrawal
                                </p>
                                <p class="text-black mb-3">
                                    $119.51 to Direct to Local Bank (BDT) - Account ending in 5343 <br>
                                    <span class="small">Oct 14, 2023</span>
                                </p>
                                <a href="{{ route('expert.payment.billing') }}" class="text-primary fw-medium text-decoration-underline mb-0">View Transection history</a>
                            </div>


                            <!-- Button area start Here -->

                            <div class="edux-paypal-visa-billing mt-4  border rounded-4 edux-paypal-visa-billing-padding">

                                <h5>Withdrawal Methods</h5>

                                <div class="col-md-12">
                                    <div class="card-area d-flex justify-content-between align-content-center">
                                        <div class="payment-card d-flex flex-row flex-wrap align-items-center justify-content- gap-4">
                                            <div class="chard-check">
                                                <img src="{{ asset('assets/frontend/img/greencheck.png') }}" alt="green-check">
                                            </div>

                                            <div class="chard-number d-flex flex-column">
                                                <h6>Personal Account</h6>
                                                <p>card ends: ****1234    exp.Date: 12/19</p>
                                            </div>
                                        </div>

                                        <div class="card-option d-flex justify-content-md-end gap-4 align-items-center ">
                                            <a href="#" class="card-edit"><span class="material-symbols-outlined">edit</span></a>
                                            <a href="#" class="card-delete"><span class="material-symbols-outlined">delete</span></a>
                                        </div>
                                    </div>

                                </div>



                                <div class="col-md-12">
                                    <div class="card-area d-flex justify-content-between align-content-center">
                                        <div class="payment-card d-flex flex-row flex-wrap align-items-center justify-content- gap-4">
                                            <div class="chard-check">
                                                <!-- <img src="{{ asset('assets/frontend/img/greencheck.png') }}" alt="green-check"> -->
                                            </div>

                                            <div class="chard-number d-flex flex-column">
                                                <h6>Personal Account</h6>
                                                <p>card ends: ****1234    exp.Date: 12/19</p>
                                            </div>
                                        </div>

                                        <div class="card-option d-flex justify-content-md-end gap-4 align-items-center ">
                                            <a href="#" class="card-edit"><span class="material-symbols-outlined">edit</span></a>
                                            <a href="#" class="card-delete"><span class="material-symbols-outlined">delete</span></a>
                                        </div>
                                    </div>

                                </div>

                                <div class="single-button">
                                    <button type="button" class="btn edux-btn-border-primary" data-bs-toggle="modal" data-bs-target="#addWithdrawal"> <span class="arrow-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11 17H13V13H17V11H13V7H11V11H7V13H11V17ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z" fill="#0036E3"/>
                                        </svg>
                                </span> <span class="btn-text">Add New Withdrawal Method</span></button>
                                </div>
                            </div>

                            <!-- Button area End Here -->

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            @if($expert_stripe_account->requirements->errors)
                                <div class="require-action table-responsive">

                                    <table class="table transaction-all-require">
                                        <thead class="t-history">
                                        <tr>
                                            <th>Description</th>
                                            <th>Issue Status</th>
                                            <th>Due Date</th>
                                            <th class="edux-tbl-action">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="">
                                        {{--                                    @if($expert_stripe_account->requirements->errors)--}}
                                        {{--                                        errors:--}}
                                        {{--                                        <ul>--}}
                                        {{--                                            @foreach($expert_stripe_account->requirements->errors as $err)--}}
                                        {{--                                                <li>{{ $err->reason }}</li>--}}
                                        {{--                                            @endforeach--}}
                                        {{--                                        </ul>--}}
                                        {{--                                    @endif--}}
                                        @if(in_array('external_account', $expert_stripe_account->requirements->past_due))
                                            <tr class="edux-pending-payment">
                                                <td class="balance-text"> <span class="fw-medium">Add missing information for Shamim Hasan</span> <br/> <span>Onboarding and verification</span> </td>
                                                <td style="vertical-align: middle;">Past Due</td>
                                                <td style="vertical-align: middle;">2/2/2024</td>
                                                <td style="vertical-align: middle;"  class="edux-tbl-action">
                                                    <a class="btn btn-primary fs-15 fw-medium large__btn" data-bs-toggle="modal" data-bs-target="#addWithdrawalUpdate">Update</a>
                                                </td>
                                            </tr>
                                            {{--                                        <a class="btn btn-md px-5 btn-primary" href="{{ route('expert.payment.withdrawal') }}">add withdrawl method</a>--}}
                                        @endif
                                        @if($expert_stripe_account->requirements->past_due)
                                            <tr class="edux-pending-payment">
                                                <td class="balance-text"> <span class="fw-medium">Add a bank account </span> <br/> <span>Onboarding and verification</span> </td>
                                                <td style="vertical-align: middle;">Past Due</td>
                                                <td style="vertical-align: middle;">2/2/2024</td>
                                                <td style="vertical-align: middle;"  class="edux-tbl-action">
                                                    <a class="btn btn-primary fs-15 fw-medium large__btn" data-bs-toggle="modal" data-bs-target="#addWithdrawalUpdate">Update</a>

                                                </td>
                                            </tr>
                                            {{--                                        <a class="btn btn-success" href="{{ route('expert.payment.onboard') }}">Submit required documents</a>--}}
                                        @endif
                                        </tbody>
                                    </table>

                                </div>
                            @else
                                <div class="no-action-required">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                                        <path d="M26 39C26.7367 39 27.3542 38.7508 27.8525 38.2525C28.3508 37.7542 28.6 37.1367 28.6 36.4C28.6 35.6633 28.3508 35.0458 27.8525 34.5475C27.3542 34.0492 26.7367 33.8 26 33.8C25.2633 33.8 24.6458 34.0492 24.1475 34.5475C23.6492 35.0458 23.4 35.6633 23.4 36.4C23.4 37.1367 23.6492 37.7542 24.1475 38.2525C24.6458 38.7508 25.2633 39 26 39ZM23.4 28.6H28.6V13H23.4V28.6ZM26 52C22.4033 52 19.0233 51.3175 15.86 49.9525C12.6967 48.5875 9.945 46.735 7.605 44.395C5.265 42.055 3.4125 39.3033 2.0475 36.14C0.6825 32.9767 0 29.5967 0 26C0 22.4033 0.6825 19.0233 2.0475 15.86C3.4125 12.6967 5.265 9.945 7.605 7.605C9.945 5.265 12.6967 3.4125 15.86 2.0475C19.0233 0.6825 22.4033 0 26 0C29.5967 0 32.9767 0.6825 36.14 2.0475C39.3033 3.4125 42.055 5.265 44.395 7.605C46.735 9.945 48.5875 12.6967 49.9525 15.86C51.3175 19.0233 52 22.4033 52 26C52 29.5967 51.3175 32.9767 49.9525 36.14C48.5875 39.3033 46.735 42.055 44.395 44.395C42.055 46.735 39.3033 48.5875 36.14 49.9525C32.9767 51.3175 29.5967 52 26 52ZM26 46.8C31.8067 46.8 36.725 44.785 40.755 40.755C44.785 36.725 46.8 31.8067 46.8 26C46.8 20.1933 44.785 15.275 40.755 11.245C36.725 7.215 31.8067 5.2 26 5.2C20.1933 5.2 15.275 7.215 11.245 11.245C7.215 15.275 5.2 20.1933 5.2 26C5.2 31.8067 7.215 36.725 11.245 40.755C15.275 44.785 20.1933 46.8 26 46.8Z" fill="#275846"/>
                                    </svg>
                                    <p class="mb-0"> <strong>No Actions Required</strong> </p>
                                    <span>We may require occasional updated to keep your account in good standing. Required actions will appear here.</span>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Edit Option Modal start  -->

    <!-- Modal -->
    <div class="modal fade" id="addWithdrawal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog edux-modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-close">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Bank Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body padding-40">

                    <x-form.select label="Country" wire:model="title">
                        <option value="">Select Country</option>
                        <option value="Mr">Select Country</option>
                        <option value="Mrs">Select Country</option>
                        <option value="Dr">Select Country</option>
                        <option value="Prof">Select Country</option>
                    </x-form.select>

                    <x-form.select label="Currency" wire:model="title">
                        <option value="">Select Currency</option>
                        <option value="Select Currency">Select Currency</option>
                        <option value="Select Currency">Select Currency</option>
                        <option value="Select Currency">Select Currency</option>
                        <option value="Select Currency">Select Currency</option>
                    </x-form.select>

                    <x-form.input type="text" label="Account Holder Name" wire:model="type" placeholder="Type" value="Write Full Name"/>

                    <x-form.select label="Account Holder Type" wire:model="title">
                        <option value="">individual</option>
                        <option value="Account Holder Type">Account Holder Type</option>
                        <option value="Account Holder Type">Account Holder Type</option>
                        <option value="Account Holder Type">Account Holder Type</option>
                        <option value="Account Holder Type">Account Holder Type</option>
                    </x-form.select>

                    <x-form.select label="Account Type" wire:model="title">
                        <option value="">savings</option>
                        <option value="Account Type">Account Type</option>
                        <option value="Account Type">Account Type</option>
                        <option value="Account Type">Account Type</option>
                        <option value="Account Type">Account Type</option>
                    </x-form.select>
                    <x-form.input type="text" label="Routing Number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>
                    <x-form.input type="text" label="Account Number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>

                </div>
                <div class="modal-footer  pt-3 px-5">
                    <button type="button" class="btn btn-md btn-outline-primary border-2" data-bs-dismiss="modal" >Cancel</button>
                    <button type="button" class="btn btn-primary btn-md">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Update -->

    <div class="modal fade" id="addWithdrawalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog edux-modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-close">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body padding-40">


                    <ul class="nav nav-pills mb-3 over-view" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-homeupdate" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Required Fields</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profileupdate" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">All Fields</button>
                        </li>
                    </ul>


                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-homeupdate" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                            <x-form.flatpicker label="Date of birth" name="datepicker"/>

                            <x-form.select label="Home Address" wire:model="title">
                                <option value="">Select Country</option>
                                <option value="Mr">Select Country</option>
                                <option value="Mrs">Select Country</option>
                                <option value="Dr">Select Country</option>
                                <option value="Prof">Select Country</option>
                            </x-form.select>

                            <x-form.select label="Currency" wire:model="title">
                                <option value="">Select Currency</option>
                                <option value="Select Currency">Select Currency</option>
                                <option value="Select Currency">Select Currency</option>
                                <option value="Select Currency">Select Currency</option>
                                <option value="Select Currency">Select Currency</option>
                            </x-form.select>

                            <x-form.input type="text" label="Account Holder Name" wire:model="type" placeholder="Type" value="Write Full Name"/>

                            <x-form.select label="Account Holder Type" wire:model="title">
                                <option value="">individual</option>
                                <option value="Account Holder Type">Account Holder Type</option>
                                <option value="Account Holder Type">Account Holder Type</option>
                                <option value="Account Holder Type">Account Holder Type</option>
                                <option value="Account Holder Type">Account Holder Type</option>
                            </x-form.select>

                            <x-form.select label="Account Type" wire:model="title">
                                <option value="">savings</option>
                                <option value="Account Type">Account Type</option>
                                <option value="Account Type">Account Type</option>
                                <option value="Account Type">Account Type</option>
                                <option value="Account Type">Account Type</option>
                            </x-form.select>
                            <x-form.input type="text" label="Routing Number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>
                            <x-form.input type="text" label="Account Number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>

                            <!-- Button area End Here -->

                        </div>
                        <div class="tab-pane fade" id="pills-profileupdate" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

                            <x-form.select label="Legal Name" wire:model="title">
                                <option value="">Full Name</option>
                                <option value="Mr">Select Country</option>
                                <option value="Mrs">Select Country</option>
                                <option value="Dr">Select Country</option>
                                <option value="Prof">Select Country</option>
                            </x-form.select>

                            <x-form.select label="Email Address" wire:model="title">
                                <option value="">Email Address</option>
                                <option value="Select Currency">Select Currency</option>
                                <option value="Select Currency">Select Currency</option>
                                <option value="Select Currency">Select Currency</option>
                                <option value="Select Currency">Select Currency</option>
                            </x-form.select>

                            <x-form.input type="text" label="Account Holder Name" wire:model="type" placeholder="Type" value="Write Full Name"/>

                            <x-form.select label="Account Holder Type" wire:model="title">
                                <option value="">individual</option>
                                <option value="Account Holder Type">Account Holder Type</option>
                                <option value="Account Holder Type">Account Holder Type</option>
                                <option value="Account Holder Type">Account Holder Type</option>
                                <option value="Account Holder Type">Account Holder Type</option>
                            </x-form.select>

                            <x-form.input type="text" label="" wire:model="type" placeholder="Type" value="Address Line 1"/>
                            <x-form.input type="text" label="" wire:model="type" placeholder="Type" value="Address Line 2"/>
                            <x-form.input type="text" label="" wire:model="type" placeholder="Type" value="City"/>
                            <x-form.select label="Account Type" wire:model="title">
                                <option value="">State</option>
                                <option value="Account Type">Account Type</option>
                                <option value="Account Type">Account Type</option>
                                <option value="Account Type">Account Type</option>
                                <option value="Account Type">Account Type</option>
                            </x-form.select>
                            <x-form.input type="text" label="" wire:model="type" placeholder="Type" value="Postal Code"/>

                            <x-form.select label="Account Type" wire:model="title">
                                <option value="">savings</option>
                                <option value="Account Type">Account Type</option>
                                <option value="Account Type">Account Type</option>
                                <option value="Account Type">Account Type</option>
                                <option value="Account Type">Account Type</option>
                            </x-form.select>
                            <x-form.input type="text" label="Routing Number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>
                            <x-form.input type="text" label="Account Number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>
                            <x-form.input type="text" label="Phone number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>
                            <x-form.input type="text" label="Personal ID Number" wire:model="type" placeholder="Type" value="1234 5678 9012 3456"/>


                            <h6 class="mb-2 mt-5">Upload Consultation Service Picture
                                <div class="tooltip-wrapper bottom-left">
                                    <i>
                                        <x-icon.info fill="#0059C9"/>
                                    </i>
                                    <div class="tooltip-content"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Eum, placeat!
                                    </div>
                                </div>
                            </h6>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="image-upload-flat">
                                        <label for="upload-file" class="text-center">
                                            <span> <x-icon.document-upload fill="#0059C999"/> </span>
                                            <span class="fw-medium">Click to upload Front Side</span>
                                            <span class="text-sm">Drag & drop any images or documents that might be helpful in explaining your brief here</span>

                                        </label>
                                        <input type="file" id="upload-file" class="d-none">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image-upload-flat">
                                        <label for="upload-file" class="text-center">
                                            <span> <x-icon.document-upload fill="#0059C999"/> </span>
                                            <span class="fw-medium">Click to upload Back Side</span>
                                            <span class="text-sm">Drag & drop any images or documents that might be helpful in explaining your brief here </span>

                                        </label>
                                        <input type="file" id="upload-file" class="d-none">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>



                </div>
                <div class="modal-footer  pt-3 px-5">
                    <button type="button" class="btn btn-md btn-outline-primary border-2" data-bs-dismiss="modal" >Cancel</button>
                    <button type="button" class="btn btn-primary btn-md">Save</button>
                </div>
            </div>
        </div>
    </div>

@endsection
