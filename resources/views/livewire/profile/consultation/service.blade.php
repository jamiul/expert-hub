<div class="progress-step-content mt-40">
    <h6 class="mb-2 fw-medium">Hourly rate</h6>
    <p>Clients will see this rate on your profile and in search results once you publish
        your
        profile. You can adjust your rate every time you submit a proposal.</p>

    <div class="service-fee-input-area">
        <div class="service-fee-input-row">
            <div class="service-fee-description">

                <div class="form-input-group">
                    <p class="fw-medium mb-1">Hourly Rate <span class="edux-tooltips">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M9.95573 14.9974C10.2474 14.9974 10.4939 14.8967 10.6953 14.6953C10.8967 14.4939 10.9974 14.2474 10.9974 13.9557C10.9974 13.6641 10.8967 13.4175 10.6953 13.2161C10.4939 13.0148 10.2474 12.9141 9.95573 12.9141C9.66406 12.9141 9.41754 13.0148 9.21615 13.2161C9.01476 13.4175 8.91406 13.6641 8.91406 13.9557C8.91406 14.2474 9.01476 14.4939 9.21615 14.6953C9.41754 14.8967 9.66406 14.9974 9.95573 14.9974ZM9.20573 11.7891H10.7474C10.7474 11.3307 10.7995 10.9696 10.9036 10.7057C11.0078 10.4418 11.303 10.0807 11.7891 9.6224C12.1502 9.26129 12.4349 8.91754 12.6432 8.59115C12.8516 8.26476 12.9557 7.8724 12.9557 7.41406C12.9557 6.63629 12.671 6.03906 12.1016 5.6224C11.5321 5.20573 10.8585 4.9974 10.0807 4.9974C9.28906 4.9974 8.6467 5.20573 8.15365 5.6224C7.66059 6.03906 7.31684 6.53906 7.1224 7.1224L8.4974 7.66406C8.56684 7.41406 8.72309 7.14323 8.96615 6.85156C9.2092 6.5599 9.58073 6.41406 10.0807 6.41406C10.5252 6.41406 10.8585 6.53559 11.0807 6.77865C11.303 7.0217 11.4141 7.28906 11.4141 7.58073C11.4141 7.85851 11.3307 8.11892 11.1641 8.36198C10.9974 8.60504 10.7891 8.83073 10.5391 9.03906C9.92795 9.58073 9.55295 9.99045 9.41406 10.2682C9.27517 10.546 9.20573 11.053 9.20573 11.7891ZM9.9974 18.3307C8.84462 18.3307 7.76129 18.112 6.7474 17.6745C5.73351 17.237 4.85156 16.6432 4.10156 15.8932C3.35156 15.1432 2.75781 14.2613 2.32031 13.2474C1.88281 12.2335 1.66406 11.1502 1.66406 9.9974C1.66406 8.84462 1.88281 7.76129 2.32031 6.7474C2.75781 5.73351 3.35156 4.85156 4.10156 4.10156C4.85156 3.35156 5.73351 2.75781 6.7474 2.32031C7.76129 1.88281 8.84462 1.66406 9.9974 1.66406C11.1502 1.66406 12.2335 1.88281 13.2474 2.32031C14.2613 2.75781 15.1432 3.35156 15.8932 4.10156C16.6432 4.85156 17.237 5.73351 17.6745 6.7474C18.112 7.76129 18.3307 8.84462 18.3307 9.9974C18.3307 11.1502 18.112 12.2335 17.6745 13.2474C17.237 14.2613 16.6432 15.1432 15.8932 15.8932C15.1432 16.6432 14.2613 17.237 13.2474 17.6745C12.2335 18.112 11.1502 18.3307 9.9974 18.3307Z"
                                    fill="#BABABA" />
                            </svg>
                            <span class="edux-tooltips-details">Min $50 hourly rate</span>
                        </span></p>


                </div>
                <p class="mb-1">Total amount the client will see</p>
            </div>
            <div class="service-fee-input">
                <div class="d-flex gap-4 align-items-center">
                    <div>
                        /hr
                    </div>
                    <div>
                        <x-form.input type="number" name="hourly_rate" wire:model="form.hourly_rate"
                            placeholder="0.00" />
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="service-fee-input-row">
            <div class="service-fee-description">
                <p class="fw-medium mb-1">Platform service fee</p>
                <p class="mb-1">The Eduexhub Service Fee Is 10%</p>
            </div>
            <div class="service-fee-input">
                <div class="d-flex gap-4 align-items-center">
                    <div>
                        /hr
                    </div>
                    <div>
                        <x-form.input type="text" disabled name="platform_fee"
                            wire:model.live="form.platform_fee" placeholder="0.00" />
                    </div>
                </div>
            </div>
        </div>
        <div class="service-fee-input-row">
            <div class="service-fee-description">
                <p class="fw-medium mb-1">You'll receive</p>
                <p class="mb-1">The estimated amount you'll receive after service fees</p>
            </div>
            <div class="service-fee-input">
                <div class="d-flex gap-4 align-items-center">
                    <div>
                        /hr
                    </div>
                    <div>
                        <x-form.input type="text" disabled name="total_fee" wire:model.live="form.total_fee"
                            placeholder="0.00" />
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>