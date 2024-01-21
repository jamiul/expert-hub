<div class="project-bid-area mt-40 mb-20" style="max-width: 740px">
    <h3 class="mb-2 text-base">What is the rate you'd like to bid for this job?</h3>
    <div class="d-flex align-items-center text-sm gap-3">
        <div class="">
            Your profile rate: <strong class="fw-medium">${{ auth()->user()->profile->hourly_rate }}</strong> /hr
        </div>
        <div class="">
            Client’s budget: <strong class="fw-medium">${{ $project->budget_start_amount }}</strong> /hr
        </div>
    </div>
    <div class="service-fee-input-area">
        <div class="service-fee-input-row">
            <div class="service-fee-description">
                <p class="fw-medium mb-1">Hourly Rate</p>
                <p class="mb-1 text-sm">Total amount the client will see on your EOI</p>
            </div>
            <div class="service-fee-input">
                <div class="d-flex gap-4 align-items-center">
                    <div>
                        /hr
                    </div>
                    <div>
                        <input type="text" wire:model.live="amount"
                                class="input-field-control input-field-control-lg"
                                placeholder="$0.00">
                    </div>
                </div>
            </div>
        </div>
        <div class="service-fee-input-row">
            <div class="service-fee-description">
                <p class="fw-medium mb-1">10% Expert Service Fee</p>
            </div>
            <div class="service-fee-input">
                <div class="d-flex gap-4 align-items-center">
                    <div>
                        /hr
                    </div>
                    <div>
                        <input type="text" wire:model.live="serviceFee"
                                class="input-field-control input-field-control-lg"
                                placeholder="$0.00" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-fee-input-row">
            <div class="service-fee-description">
                <p class="fw-medium mb-1">You'll receive</p>
                <p class="mb-1 text-sm">The estimated amount you'll receive after service fees</p>
            </div>
            <div class="service-fee-input">
                <div class="d-flex gap-4 align-items-center">
                    <div>
                        /hr
                    </div>
                    <div>
                        <input type="text" wire:model.live="amountAfterServiceFee"
                                class="input-field-control input-field-control-lg"
                                placeholder="$0.00" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>