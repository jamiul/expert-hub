<x-modal.form action="submitPaymentSchedule">
    <x-slot name="title"></x-slot>
    <p class="title text-dark fw-medium mb-2">Edit Payment Schedule</p>

    <div class="edux-Withdraw-method">
        <x-form.select wire:model="withdrawal_method" label="Withdrawal Method">
            <option value="">Select withdrawal method</option>
            @foreach($withdrawal_methods as $method)
                <option value="{{ $method->id }}">account ends with {{ $method->last4 }} in {{ $method->currency }}</option>
            @endforeach
        </x-form.select>
    </div>

    <div class="edux-withdraw-free-all">
        <p class="fw-medium mb-0">Withdrawal Fee</p>
        <div class="edux-withdraw-free-payment">
            <p class="mb-0">Withdraw fee (Per payment)</p>
            <p class="mb-0">- $1.00</p>
        </div>
    </div>

    <div class="preferred-payment-schedule mb-4">
        <x-form.radio label="Preferred Payment Schedule" wire:model="preferred_payment_schedule" :options="
                ['weekly' => 'Weekly (Every Sunday)',
                'twice_per_month' => 'Twice per month (1st adn 3rd Sunday of each month)',
                'monthly' => 'Monthly (Last Sunday of each month)',
                'quarterly' => 'Quarterly (Jan 1, 2024)',
                'no_schedule' => 'No Schedule Payment']" />
    </div>

    <div class="mb-4">
        <x-form.select wire:model="balance_reach" label="Only Disperse When Minimum Balance Is">
            <option value="">select balance</option>
            <option value="1000">$1000.00 or more</option>
            <option value="500">$500.00 or more</option>
        </x-form.select>
    </div>

    <div class="mb-4">
        <x-form.input type="text" label="Minimum Reserve Balance" wire:model="minimum_reserve" />
    </div>

    <div class="preferred-payment-schedule mb-4">
        <p class="fw-medium mb-0">Next Scheduled Payment</p>
        <span>May 26, 2024</span>
    </div>
    <x-slot name="button">
        <button type="submit" class="btn btn-md btn-primary">Set Schedule</button>
    </x-slot>
</x-modal.form>
