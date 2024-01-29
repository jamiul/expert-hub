@extends('frontend.layouts.front-client-dashboard-layout')
@section('content')
@vite('resources/default/css/expert-dashboard.css')
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
                            <li class="disabled">Disabled</li>
                            <li>Payouts</li>
                            <li class="resticted">Disabled</li>
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

                            <div class="edux-paypal-visa-billing">
                                <div class="alert edux-alert alert-danger" role="alert">
                                    <x-icon.info/>
                                    <strong>Account requires updates. Charges and payouts were paused. </strong>
                                    <button type="button" class="view-requirement close" aria-label="Close">
                                         View Requirements
                                    </button>
                                </div>

                            </div>

                            <div class="mt-4 p-3 p-sm-4 border rounded-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col-8">
                                        <p class="mb-0 lead fw-medium text-black">Available balance</p>
                                        <p class="mb-0 title text-primary fw-medium">$2000</p>
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
                                <a href="" class="text-primary fw-medium text-decoration-underline mb-0" data-bs-toggle="modal" data-bs-target="#modaltransactionhistory">View Transection history</a>
                            </div>


                            <!-- Button area start Here -->

                          <div class="edux-paypal-visa-billing mt-4  border rounded-4 edux-paypal-visa-billing-padding">

                            <h5>Withdrawal Methods</h5>
                            <div class="single-button">
                                        <button type="button" class="btn edux-btn-border-primary" data-bs-toggle="modal" data-bs-target="#addWithdrawal "> <span class="arrow-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11 17H13V13H17V11H13V7H11V11H7V13H11V17ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z" fill="#0036E3"/>
                                        </svg>
                                </span> <span class="btn-text">Add New Withdrawal Method</span></button>
                                </div>
                            </div>

                            <!-- Button area End Here -->

                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

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
                                        <tr class="edux-pending-payment">
                                            <td class="balance-text"> <span class="fw-medium">Add missing information for Shamim Hasan</span> <br/> <span>Onboarding and verification</span> </td>
                                            <td style="vertical-align: middle;">Past Due</td>
                                            <td style="vertical-align: middle;">2/2/2024</td>
                                            <td style="vertical-align: middle;"  class="edux-tbl-action">

                                                 <a class="btn btn-primary fs-15 fw-medium large__btn" data-bs-toggle="modal" data-bs-target="#modalGetPaid">Update</a>

                                             </td>
                                            </tr>
                                            <tr class="edux-pending-payment">
                                            <td class="balance-text"> <span class="fw-medium">Add a bank account </span> <br/> <span>Onboarding and verification</span> </td>
                                            <td style="vertical-align: middle;">Past Due</td>
                                            <td style="vertical-align: middle;">2/2/2024</td>
                                            <td style="vertical-align: middle;"  class="edux-tbl-action">

                                                 <a class="btn btn-primary fs-15 fw-medium large__btn" data-bs-toggle="modal" data-bs-target="#modalGetPaid">Update</a>

                                             </td>
                                            </tr>
                                            <tr class="edux-pending-payment">
                                            <td class="balance-text"> <span class="fw-medium">Add eKYC Info</span> <br/> <span>Onboarding and verification</span> </td>
                                            <td style="vertical-align: middle;">Past Due</td>
                                            <td style="vertical-align: middle;">2/2/2024</td>
                                            <td style="vertical-align: middle;"  class="edux-tbl-action">

                                                 <a class="btn btn-primary fs-15 fw-medium large__btn" data-bs-toggle="modal" data-bs-target="#modalGetPaid">Update</a>

                                             </td>
                                            </tr>
                                        </tbody>
                                        </table>

                                 </div>
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
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Bank Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <x-form.select label="Country" wire:model="title">
            <option value="">Select Country</option>
            <option value="Mr">Select Country</option>
            <option value="Mrs">Select Country</option>
            <option value="Dr">Select Country</option>
            <option value="Prof">Select Country</option>
        </x-form.select>

        <x-form.select label="Currency" wire:model="title">
            <option value="">Select Currency</option>
            <option value="Mr">Select Currency</option>
            <option value="Mrs">Select Currency</option>
            <option value="Dr">Select Currency</option>
            <option value="Prof">Select Currency</option>
        </x-form.select>

        <x-form.input type="text" label="Account Holder Name" wire:model="type" placeholder="Type" value="Write Full Name"/>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-md btn-outline-primary border-2" data-bs-dismiss="modal" >Cancel</button>
        <button type="button" class="btn btn-primary btn-md">Save</button>
      </div>
    </div>
  </div>
</div>





@endsection
