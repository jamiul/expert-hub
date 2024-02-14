<div class="progress-step-content mt-40">
    <h6 class="mb-2 fw-medium">Hourly rate</h6>
    <p>Clients will see this rate on your profile and in search results once you publish
        your
        profile. You can adjust your rate every time you submit a proposal.</p>

    <div class="service-fee-input-area">
        <div class="service-fee-input-row">
            <div class="service-fee-description">

                <div class="form-input-group">
                    <p class="fw-medium mb-1">Hourly Rate
                        <span class="edux-tooltips">
                            <x-icon.what fill="#BABABA"/>
                            <span class="edux-tooltips-details">Min $50 hourly rate</span>
                        </span>
                    </p>
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
    </div>
</div>