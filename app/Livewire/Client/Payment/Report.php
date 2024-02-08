<?php

namespace App\Livewire\Client\Payment;

use App\Enums\ClientTransactionType;
use App\Exports\ClientTransactionExport;
use App\Models\ClientTransaction;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Report extends Component
{
    use WithPagination;

    public $balance;

    public $escrow_balance;

    public $perPage = 10;

    public $types;

    public $type;

    public $date;

    public $experts;

    public $customer;

    public function downloadCsv() {
        $user = auth()->user();
        $transactions = ClientTransaction::where( 'client_id', $user->id );

        if($this->type){
            $transactions = $transactions->where('type', ClientTransactionType::from($this->type));
        }

        if($this->customer){
            $transactions = $transactions->where('expert_id', $this->customer);
        }

        if($this->date){
            $transactions = $transactions->dateFilter($this->date);
        }

        $transactions = $transactions->orderby( 'id', 'desc' )->get();

        return Excel::download(new ClientTransactionExport($transactions), 'invoice.csv');
    }

    public function downloadInvoices() {
        $user = auth()->user();
        $transactions = ClientTransaction::where( 'client_id', $user->id );
        if($this->type){
            $transactions = $transactions->where('type', ClientTransactionType::from($this->type));
        }

        if($this->customer){
            $transactions = $transactions->where('expert_id', $this->customer);
        }

        if($this->date){
            $transactions = $transactions->dateFilter($this->date);
        }

        $transactions = $transactions->orderby( 'id', 'desc' )->get();
        $data = $transactions->toArray();

        try {
            $pdfContent = Pdf::loadView('pdf.invoice', $data)->output();
            return response()->streamDownload(
                fn () => print($pdfContent),
                "invoice.pdf"
            );
        } catch (\Exception $ex){
            toast('warning', $ex->getMessage(), $this);
        }
    }

    public function mount() {
        $user = auth()->user();

        $this->balance = $user->profile->balance;
        $this->escrow_balance = $user->profile->escrow_balance;
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    public function render()
    {
        $user = auth()->user();

        $transactions = ClientTransaction::where( 'client_id', $user->id );

        if($this->type){
            $transactions = $transactions->where('type', ClientTransactionType::from($this->type));
        }

        if($this->customer){
            $transactions = $transactions->where('expert_id', $this->customer);
        }

        if($this->date){
            $transactions = $transactions->dateFilter($this->date);
        }

        $transactions = $transactions->orderby( 'id', 'desc' )->paginate($this->perPage);

        $this->types = ClientTransactionType::cases();
        $this->experts = ClientTransaction::with('expert')->where('client_id', $user->id)->get()->unique('expert_id');

        return view('livewire.client.payment.report', [
            'transactions' => $transactions
        ]);
    }
}
