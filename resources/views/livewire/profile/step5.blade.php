<div class="progress-step-content ">
    <h5 class="mb-2">Hourly rate</h5>
    <p>Clients will see this rate on your profile and in search results once you publish your
        profile. You can adjust your rate every time you submit a proposal.</p>


    <div class="service-fee-input-area">
        <div class="service-fee-input-row">
            <div class="service-fee-description">
                <p class="fw-medium mb-1">Hourly Rate</p>
                <p class="mb-1">Total amount the client will see</p>
            </div>
            <div class="service-fee-input">
                <div class="d-flex gap-4 align-items-center">
                    <div>
                        /hr
                    </div>
                    <div>
                        <x-form.input type="number" label="" name="hourly_rate" wire:model.live="hourly_rate" placeholder="0.00"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-fee-input-row">
            <div class="service-fee-description">
                <p class="fw-medium mb-1">Platform service fee</p>
                <p class="mb-1">The Eduexhub Service Fee Is 10% when you begin a contract with a new
                    client. Once you will over $500 with your client, the fee will be 5%.</p>
            </div>
            <div class="service-fee-input">
                <div class="d-flex gap-4 align-items-center">
                    <div>
                        /hr
                    </div>
                    <div>
                        <x-form.input type="number" readonly label="" name="platform_fee" wire:model.live="platform_fee" placeholder="0.00"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-fee-input-row">
            <div class="service-fee-description">
                <p class="fw-medium mb-1">Hourly Rate</p>
                <p class="mb-1">Total amount the client will see</p>
            </div>
            <div class="service-fee-input">
                <div class="d-flex gap-4 align-items-center">
                    <div>
                        /hr
                    </div>
                    <div>
                        <x-form.input type="number" readonly label="" name="total_fee" wire:model.live="total_fee" placeholder="0.00"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
