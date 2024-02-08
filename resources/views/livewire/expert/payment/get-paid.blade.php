<div>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script>
        FilePond.registerPlugin(FilePondPluginFileValidateType);
    </script>

    <section class="my-60">
        <div class="container">
            <div class="edux-billing-method-card-area">
                <div class="edux-billing-method-content-with-card">
                    <div class="get-paid-payment">
                        <h5>Get Paid</h5>
                        <div class="account-action">
                            <ul>
                                <li>Account</li>
                                <li class="badge badge-pill {{ $user->expert_kyc->status == 'active' ? 'badge-outline-success' : 'badge-outline-danger' }}">{{ $user->expert_kyc->status == 'active' ? 'Active' : 'Inactive' }}</li>
                                <li>Receive Payment</li>
                                <li class="badge badge-pill {{ $user->expert_kyc->charges_enabled ? 'badge-outline-success' : 'badge-outline-warning' }}">{{ $user->expert_kyc->charges_enabled ? 'Enabled' : 'Disabled' }}</li>
                                <li>Withdrawal</li>
                                <li class="badge badge-pill {{ $user->expert_kyc->payouts_enabled ? 'badge-outline-success' : 'badge-outline-warning' }}">{{ $user->expert_kyc->payouts_enabled ? 'Enabled' : 'Disabled' }}</li>
                            </ul>
                        </div>
                    </div>

                    <ul class="nav nav-pills mb-3 over-view" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Overview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Required Actions</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            @if($user->expert_kyc->requirements)
                                <div class="edux-paypal-visa-billing">
                                    @php
                                        $disabled_reason = $user->expert_kyc->requirements['disabled_reason'];
                                        if($disabled_reason){
                                            if($disabled_reason == 'requirements.past_due'){
                                                $reasons = $user->expert_kyc->requirements['past_due'];
                                            } else if($disabled_reason == 'requirements.fields_needed') {
                                                $reasons = $user->expert_kyc->requirements['currently_due'];
                                            }
                                        }
                                        $reasons = $user->expert_kyc->requirements['currently_due'];
                                    @endphp

                                    @if($disabled_reason)
                                        <div class="alert edux-alert alert-danger" role="alert">
                                            <x-icon.info/>
                                            <strong>Account requires updates. Receive payment and Withdrawal were paused. </strong>
                                            <button type="button" class="view-requirement close"
                                                    data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile">
                                                View Requirements
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            @endif

                            <div class="mt-4 p-3 p-sm-4 border rounded-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col-8">
                                        <p class="mb-0 lead fw-medium text-black">Available balance</p>
                                        <p class="mb-0 title text-primary fw-medium">{{ $user->profile->balance }} {{ $user->profile->currency }}</p>
                                    </div>
                                    <div class="col-4 text-end get-paid-end">
                                        <button onClick="Livewire.dispatch('modal.open', { component: 'expert.payment.withdraw.get-paid'})"
                                                class="btn btn-primary fs-15 fw-medium large__btn">Get Paid Now</button>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-4 p-3 p-sm-4 border rounded-4">
                                <p class="mb-2 lead fw-medium text-black d-flex align-items-center">
                                    <span> Withdrawal schedule</span>
                                    <button onClick="Livewire.dispatch('modal.open', { component: 'expert.payment.withdraw.schedule' })"
                                            class="get-paid-all  btn btn__fab p-0 d-inline-flex justify-content-center align-items-center ms-1">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.29683 15.8333H5.32727L13.0437 8.11692L12.0132 7.08647L4.29683 14.8029V15.8333ZM15.7167 7.21309L12.9042 4.42628L13.9908 3.33976C14.2354 3.0951 14.533 2.97278 14.8834 2.97278C15.2338 2.97278 15.5313 3.0951 15.776 3.33976L16.7904 4.35415C17.035 4.59881 17.1616 4.89207 17.1702 5.23395C17.1787 5.57582 17.0607 5.86908 16.816 6.11374L15.7167 7.21309ZM14.8129 8.12974L5.85931 17.0833H3.04688V14.2708L12.0004 5.31728L14.8129 8.12974ZM12.5244 7.59769L12.0132 7.08647L13.0437 8.11692L12.5244 7.59769Z" fill="#0036E3"/>
                                        </svg>
                                    </button>
                                </p>
                                @if($withdraw_schedule)
                                    <p class="text-black mb-3">
                                        {{ $withdraw_schedule->preferred_payment_schedule }} (next on Oct 18) <br>
                                        Only when balance is ${{ $withdraw_schedule->balance_reach  }} or more. <a href="#" class="text-primary text-decoration-underline fw-medium">View payment calendar</a>
                                    </p>
                                    <p class="text-black mb-0" >account ends with {{ $withdraw_schedule->expert_withdrawal->last4 }} in {{ $withdraw_schedule->expert_withdrawal->currency }}</p>
                                @else
                                    <p class="text-black mb-3">Please add Withdrawal Schedule in order to send fund to you when reach to threshold amount.</p>
                                @endif
                            </div>

                            @if($last_withdrawal)
                                <div class="mt-4 p-3 p-sm-4 border rounded-4">
                                    <p class="mb-2 lead fw-medium text-black">
                                        Last withdrawal
                                    </p>
                                    <p class="text-black mb-3">
                                        ${{ $last_withdrawal->amount }} {{ $last_withdrawal->description }} <br>
                                        <span class="small">{{ $last_withdrawal->created_at->format('M d, Y') }}</span>
                                    </p>
                                    <a href="{{ route('expert.payment.billing') }}" class="text-primary fw-medium text-decoration-underline mb-0">View Transection history</a>
                                </div>
                            @endif

                            <!-- Button area start Here -->

                            <div class="edux-paypal-visa-billing mt-4  border rounded-4 edux-paypal-visa-billing-padding">

                                <h5>Withdrawal Methods</h5>

                                @livewire('expert.payment.withdraw.lists')

                                <div class="single-button">
                                    <button
                                        onClick="Livewire.dispatch('modal.open', { component: 'expert.payment.withdraw.add' })"
                                        type="button" class="btn edux-btn-border-primary"> <span class="arrow-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11 17H13V13H17V11H13V7H11V11H7V13H11V17ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z" fill="#0036E3"/>
                                        </svg>
                                </span> <span class="btn-text" >Add New Withdrawal Method</span></button>
                                </div>
                            </div>

                            <!-- Button area End Here -->

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            @if($user->expert_kyc->requirements['past_due'] || $user->expert_kyc->requirements['currently_due'])
                                @if($user->expert_kyc->requirements['errors'])
                                    <div class="alert edux-alert alert-danger" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path fill="#191D24" d="M11 17H13V11H11V17ZM12 9C12.2833 9 12.5208 8.90417 12.7125 8.7125C12.9042 8.52083 13 8.28333 13 8C13 7.71667 12.9042 7.47917 12.7125 7.2875C12.5208 7.09583 12.2833 7 12 7C11.7167 7 11.4792 7.09583 11.2875 7.2875C11.0958 7.47917 11 7.71667 11 8C11 8.28333 11.0958 8.52083 11.2875 8.7125C11.4792 8.90417 11.7167 9 12 9ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22Z"></path>
                                        </svg>
                                        @foreach($user->expert_kyc->requirements['errors'] as $err)
                                            <p><strong>{{ $err['reason'] }}</strong></p>
                                        @endforeach
                                    </div>
                                @endif

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
                                        @if(($disabled_reason && $disabled_reason == 'requirements.fields_needed') || in_array('individual.verification.document', $user->expert_kyc->requirements['currently_due']))
                                            <tr class="edux-pending-payment">
                                                <td class="balance-text"> <span class="fw-medium">Add missing information for {{ $user->expert_kyc->individual_first_name }} {{ $user->expert_kyc->individual_last_name }}</span> <br/> <span>Onboarding and verification</span> </td>
                                                <td style="vertical-align: middle;">Past Due</td>
                                                <td style="vertical-align: middle;">{{ (@$user->expert_kyc->requirements['current_deadline']) ? Carbon::parse($user->expert_kyc->requirements['current_deadline'])->format('Y/m/d') : '' }}</td>
                                                <td style="vertical-align: middle;"  class="edux-tbl-action">
                                                    <a onClick="Livewire.dispatch('modal.open', { component: 'expert.payment.kyc' })"
                                                       class="btn btn-primary fs-15 fw-medium large__btn">Update</a>
                                                </td>
                                            </tr>
                                        @endif

                                        @if($reasons && in_array('external_account', $reasons))
                                            <tr class="edux-pending-payment">
                                                <td class="balance-text"> <span class="fw-medium">Add a bank account </span> <br/> <span>Onboarding and verification</span> </td>
                                                <td style="vertical-align: middle;">Past Due</td>
                                                <td style="vertical-align: middle;">{{ (@$user->expert_kyc->requirements['current_deadline']) ? Carbon::parse($user->expert_kyc->requirements['current_deadline'])->format('Y/m/d') : '' }}</td>
                                                <td style="vertical-align: middle;"  class="edux-tbl-action">
                                                    <a onClick="Livewire.dispatch('modal.open', { component: 'expert.payment.withdraw.add' })"
                                                       class="btn btn-primary fs-15 fw-medium large__btn">Update</a>

                                                </td>
                                            </tr>
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
</div>
