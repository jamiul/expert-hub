<?php

namespace App\Livewire\Client\Payment\Report;

use App\Models\ClientTransaction;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use WireElements\Pro\Components\Modal\Modal;

class Invoice extends Modal {

    public $transaction_id;

    public $transaction;

    public function downloadInvoice() {
        $data = $this->transaction->toArray();

        try {
            $pdfContent = Pdf::loadView( 'pdf.invoice', [ 'data' => $data ] )->output();

            return response()->streamDownload(
                fn() => print( $pdfContent ),
                "invoice.pdf"
            );
        } catch ( \Exception $ex ) {
            toast( 'warning', $ex->getMessage(), $this );
        }
    }

    public function render() {
        $this->transaction = ClientTransaction::find( $this->transaction_id );

        return view( 'livewire.client.payment.report.invoice' );
    }
}
