<?php

namespace App\Livewire\Expert\Payment\Report;

use App\Models\ExpertTransaction;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use WireElements\Pro\Components\Modal\Modal;

class Invoice extends Modal
{

    public $transaction_id;

    public $transaction;

    public function downloadInvoice() {
        $data = $this->transaction->toArray();

        try {
            $pdfContent = Pdf::loadView('pdf.invoice', $data)->output();
            return response()->streamDownload(
                fn () => print($pdfContent),
                "invoice.pdf"
            );
        } catch (\Exception $ex){
            dd($ex->getMessage());
        }
    }

    public function render()
    {
        $this->transaction = ExpertTransaction::find($this->transaction_id);

        return view('livewire.expert.payment.report.invoice');
    }
}
