<?php

namespace App\Livewire\Expert\Payment\Report;

use App\Models\ExpertTransaction;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use WireElements\Pro\Components\Modal\Modal;

class Invoice extends Modal {

    public $transaction_id;

    public $transaction;

    public function downloadInvoice() {
        $invoice = [
            'full_name' => $this->transaction->expert->first_name,
            'address_line1' => 'Test location',
            'address_line2' => 'NSW 2142, Australia',
            'invoice_id' => $this->transaction->invoice_number,
            'date' => $this->transaction->created_at->format('M d, Y'),
            'due_date' => $this->transaction->created_at->format('M d, Y'),
            'total' => number_format($this->transaction->amount, 2),
            'total_due' => number_format($this->transaction->amount, 2),
            'description' => $this->transaction->description,
            'amount' => number_format($this->transaction->amount, 2),
        ];

        try {

            $pdfContent = Pdf::loadView( 'pdf.invoice', ['data' => $invoice] )->output();

            return response()->streamDownload(
                fn() => print( $pdfContent ),
                "invoice.pdf"
            );
        } catch ( \Exception $ex ) {
            toast( 'warning', $ex->getMessage(), $this );
        }
    }

    public function render() {
        $this->transaction = ExpertTransaction::find( $this->transaction_id );

        return view( 'livewire.expert.payment.report.invoice' );
    }
}
