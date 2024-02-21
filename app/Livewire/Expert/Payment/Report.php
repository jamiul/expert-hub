<?php

namespace App\Livewire\Expert\Payment;

use App\Enums\ExpertTransactionType;
use App\Exports\ExpertTransactionExport;
use App\Models\ExpertTransaction;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Report extends Component {
    use WithPagination;

    public $balance;

    public $pending_balance;

    public $perPage = 10;

    public $types;

    public $type;

    public $date;

    public $clients;

    public $customer;

    public function updatedType() {

    }

    public function downloadCsv() {
        $user         = auth()->user();
        $transactions = ExpertTransaction::select( [
            'id',
            'created_at',
            'type',
            'description',
            'client_id',
            'charge_type',
            'amount',
            'balance'
        ] )->where( 'expert_id', $user->id );
        if ( $this->type ) {
            $transactions = $transactions->where( 'type', ExpertTransactionType::from( $this->type ) );
        }

        if ( $this->customer ) {
            $transactions = $transactions->where( 'client_id', $this->customer );
        }

        if ( $this->date ) {
            $transactions = $transactions->dateFilter( $this->date );
        }

        $transactions = $transactions->orderby( 'id', 'desc' )->get();

//        $data = $transactions->toArray();

        return Excel::download( new ExpertTransactionExport( $transactions ), 'invoice.csv' );
    }

    public function downloadInvoices() {
        $user         = auth()->user();
        $transactions = ExpertTransaction::where( 'expert_id', $user->id );
        if ( $this->type ) {
            $transactions = $transactions->where( 'type', ExpertTransactionType::from( $this->type ) );
        }

        if ( $this->customer ) {
            $transactions = $transactions->where( 'client_id', $this->customer );
        }

        if ( $this->date ) {
            $transactions = $transactions->dateFilter( $this->date );
        }

        $transactions = $transactions->orderby( 'id', 'desc' )->get();

        foreach ($transactions as $transaction){
            $invoice = [
                'full_name' => $transaction->expert->first_name,
                'address_line1' => 'Test location',
                'address_line2' => 'NSW 2142, Australia',
                'invoice_id' => $transaction->invoice_number,
                'date' => $transaction->created_at->format('M d, Y'),
                'due_date' => $transaction->created_at->format('M d, Y'),
                'total' => number_format($transaction->amount, 2),
                'total_due' => number_format($transaction->amount, 2),
                'description' => $transaction->description,
                'amount' => number_format($transaction->amount, 2),
            ];
            try {
                $pdfContent = Pdf::loadView( 'pdf.invoice', $invoice )->output();

                return response()->streamDownload(
                    fn() => print( $pdfContent ),
                    "invoice.pdf"
                );
            } catch ( \Exception $ex ) {
                toast( 'warning', $ex->getMessage(), $this );
            }
        }
    }

    public function mount() {
        $user = auth()->user();

        $this->balance         = $user->profile->balance;
        $this->pending_balance = $user->profile->escrow_balance;
    }

    public function paginationView() {
        return 'livewire.pagination';
    }

    public function render() {
        $user = auth()->user();

        $transactions = ExpertTransaction::where( 'expert_id', $user->id );

        if ( $this->type ) {
            $transactions = $transactions->where( 'type', ExpertTransactionType::from( $this->type ) );
        }

        if ( $this->customer ) {
            $transactions = $transactions->where( 'client_id', $this->customer );
        }

        if ( $this->date ) {
            $transactions = $transactions->dateFilter( $this->date );
        }

        $transactions = $transactions->orderby( 'id', 'desc' )->paginate( $this->perPage );

        $this->types   = ExpertTransactionType::cases();
        $this->clients = ExpertTransaction::with( 'expert' )->where( 'expert_id', $user->id )->get()->unique( 'expert_id' );

        return view( 'livewire.expert.payment.report', [
            'transactions' => $transactions
        ] );
    }
}
