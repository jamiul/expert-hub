<x-modal.form action="submitGetPaid">
    <x-slot name="title">Get Paid Now</x-slot>
    <p class="mb-0 fw-medium text-black">Available balance <span class="text-primary">{{ $expert->currency }} {{ $expert->balance }}</span></p>
        <div class="mb-4">
                <x-form.select wire:model.change="withdrawal_method" label="Withdrawal Method">
                    <option value="">Select withdrawal method</option>
                    @foreach($withdrawal_methods as $method)
                        <option value="{{ $method->bank_id }}">account ends with {{ $method->last4 }} in {{ $method->currency }}</option>
                    @endforeach
                </x-form.select>
        </div>

        @if($withdrawal_method)
            <div class="mb-4">
                <x-form.radio label="Amount" wire:model.change="amount_type" :options="['fixed' => $expert->currency . ' ' . $expert->balance, 'other' => 'Other amount']" />

                <!-- Other withdraw values -->
                @if($amount_type == 'other')
                    <x-form.input type="text" label="Amount ({{ $expert->currency }})" wire:model.live="amount" />
                @endif


                <div class="border-top pt-3 my-4">
                    <div class="d-flex justify-content-between">
                        <div class="text-black">
                            <span>Withdraw fee (Per payment)</span>
                            <button class="btn p-0 border-0 rounded-circle" type="button">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.33203 11.3334H8.66536V7.33337H7.33203V11.3334ZM7.9987 6.00004C8.18759 6.00004 8.34592 5.93615 8.4737 5.80837C8.60148 5.6806 8.66536 5.52226 8.66536 5.33337C8.66536 5.14449 8.60148 4.98615 8.4737 4.85837C8.34592 4.7306 8.18759 4.66671 7.9987 4.66671C7.80981 4.66671 7.65148 4.7306 7.5237 4.85837C7.39592 4.98615 7.33203 5.14449 7.33203 5.33337C7.33203 5.52226 7.39592 5.6806 7.5237 5.80837C7.65148 5.93615 7.80981 6.00004 7.9987 6.00004ZM7.9987 14.6667C7.07648 14.6667 6.20981 14.4917 5.3987 14.1417C4.58759 13.7917 3.88203 13.3167 3.28203 12.7167C2.68203 12.1167 2.20703 11.4112 1.85703 10.6C1.50703 9.78893 1.33203 8.92226 1.33203 8.00004C1.33203 7.07782 1.50703 6.21115 1.85703 5.40004C2.20703 4.58893 2.68203 3.88337 3.28203 3.28337C3.88203 2.68337 4.58759 2.20837 5.3987 1.85837C6.20981 1.50837 7.07648 1.33337 7.9987 1.33337C8.92092 1.33337 9.78759 1.50837 10.5987 1.85837C11.4098 2.20837 12.1154 2.68337 12.7154 3.28337C13.3154 3.88337 13.7904 4.58893 14.1404 5.40004C14.4904 6.21115 14.6654 7.07782 14.6654 8.00004C14.6654 8.92226 14.4904 9.78893 14.1404 10.6C13.7904 11.4112 13.3154 12.1167 12.7154 12.7167C12.1154 13.3167 11.4098 13.7917 10.5987 14.1417C9.78759 14.4917 8.92092 14.6667 7.9987 14.6667Z" fill="#303744" fill-opacity="0.5"/>
                                </svg>
                            </button>
                        </div>
                        <div class="text-black">- {{ $expert->currency }} {{ env('WITHDRAW_FEE') }}</div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="text-black fw-medium">
                            <span>You'll receive</span>
                        </div>
                        <div class="text-black lead fw-medium">{{ $expert->currency }} {{ $total_amount }}</div>
                    </div>
                </div>

                <x-form.input type="text" label="Reference" wire:model="reference" />
            </div>
        @endif
        <x-slot name="button">
            <button type="submit" class="btn btn-md btn-primary">Withdraw Now</button>
        </x-slot>
</x-modal.form>
