<x-modal>
    <x-slot name="title">Transaction Details</x-slot>
    <h1 class="modal-title fs-5" id="eduxRefId"></h1>
    <div class="modal-body px-4">
        <div class="edux-ref-content-area">
            <div class="dingle-ref-content">
                <span class="ref-id fw-medium">Reference ID </span>
                <span class="ref-id fw-medium">Date</span>
            </div>
            <div class="dingle-ref-item">
                <span class="ref-id">{{ $transaction->id }}</span>
                <span class="ref-id">{{ $transaction->created_at->format('M d, Y') }}</span>
            </div>
        </div>

        <div class="edux-ref-content-area">
            <div class="dingle-ref-content">
                <span class="ref-id fw-medium">Client</span>
                <span class="ref-id fw-medium">Expert</span>
            </div>
            <div class="dingle-ref-item">
                <span class="ref-id">{{ @$transaction->client->first_name }} {{ @$transaction->client->last_name }}</span>
                <span class="ref-id">{{ @$transaction->expert->first_name }} {{ @$transaction->expert->last_name }}</span>
            </div>
        </div>

        <div class="edux-ref-content-area">
            <div class="dingle-ref-content">
                <span class="ref-id fw-medium">Type</span>
                <span class="ref-id fw-medium">Amount</span>
            </div>
            <div class="dingle-ref-item">
                <span class="ref-id">{{ $transaction->type }}</span>
                <span class="ref-id">$
                    @if($transaction->charge_type == 'debit')
                        ({{ number_format($transaction->amount, 2) }})
                    @elseif($transaction->charge_type == 'credit')
                        {{ number_format($transaction->amount, 2) }}
                    @endif</span>
            </div>
        </div>

        <div class="edux-ref-content-area">
            <div class="dingle-ref-content-main">
                <span class="ref-id fw-medium">Description</span>
                <p>{{ $transaction->description }}</p>
            </div>
        </div>

        <div class="edux-ref-content-area border-0">
            <div class="dingle-ref-content-download">
                <span class="ref-id fw-medium">More info</span>

                <p><button wire:click="downloadInvoice" wire:loading.attr="disabled">
                        <span wire:loading.remove>Download Invoice</span>
                        <div wire:loading>
                            Downloading Report...
                        </div>
                    </button>
                </p>
            </div>
        </div>
    </div>
</x-modal>
