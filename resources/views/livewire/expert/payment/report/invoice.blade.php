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

                <p><button wire:click="downloadInvoice" wire:loading.attr="disabled" class="btn-download">
                        <span class="download-svg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
              <path d="M12 16.5L7 11.5L8.4 10.05L11 12.65V4.5H13V12.65L15.6 10.05L17 11.5L12 16.5ZM6 20.5C5.45 20.5 4.97917 20.3042 4.5875 19.9125C4.19583 19.5208 4 19.05 4 18.5V15.5H6V18.5H18V15.5H20V18.5C20 19.05 19.8042 19.5208 19.4125 19.9125C19.0208 20.3042 18.55 20.5 18 20.5H6Z" fill="#0036E3"/>
            </svg>
            </span>
                        <span class="csv-text" wire:loading.remove>Download Invoice</span>
                        <div wire:loading>
                            Downloading Report...
                        </div>
                    </button>
                </p>
            </div>
        </div>
    </div>
</x-modal>
