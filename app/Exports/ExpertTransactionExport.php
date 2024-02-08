<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExpertTransactionExport implements FromView {

    protected $invoices;

    public function __construct( $invoices ) {
        $this->invoices = $invoices;
    }

    public function view(): View {
        return view( 'exports.invoice-expert', [
            'invoices' => $this->invoices
        ] );
    }
}
