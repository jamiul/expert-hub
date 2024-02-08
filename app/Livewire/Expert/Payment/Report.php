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

class Report extends Component
{
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
        $user = auth()->user();
        $transactions = ExpertTransaction::select(['created_at', 'type', 'description', 'client', 'amount', 'balance'])->where( 'expert_id', $user->id );
        if($this->type){
            $transactions = $transactions->where('type', ExpertTransactionType::from($this->type));
        }

        if($this->customer){
            $transactions = $transactions->where('client_id', $this->customer);
        }

        if($this->date){
            $transactions = $transactions->dateFilter($this->date);
        }

        $transactions = $transactions->orderby( 'id', 'desc' )->get();
        $data = $transactions->toArray();

        return Excel::download(new ExpertTransactionExport($data), 'invoice.csv');
    }

    public function downloadInvoices() {
        $user = auth()->user();
        $transactions = ExpertTransaction::where( 'expert_id', $user->id );
        if($this->type){
            $transactions = $transactions->where('type', ExpertTransactionType::from($this->type));
        }

        if($this->customer){
            $transactions = $transactions->where('client_id', $this->customer);
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
        $this->pending_balance = $user->profile->escrow_balance;
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    public function render()
    {
        $user = auth()->user();

        $transactions = ExpertTransaction::where( 'expert_id', $user->id );

        if($this->type){
            $transactions = $transactions->where('type', ExpertTransactionType::from($this->type));
        }

        if($this->customer){
            $transactions = $transactions->where('client_id', $this->customer);
        }

        if($this->date){
            $transactions = $transactions->dateFilter($this->date);
        }

        $transactions = $transactions->orderby( 'id', 'desc' )->paginate($this->perPage);

        $this->types = ExpertTransactionType::cases();
        $this->clients = ExpertTransaction::with('expert')->where('expert_id', $user->id)->get()->unique('expert_id');

        return view('livewire.expert.payment.report', [
            'transactions' => $transactions
        ]);
    }
}
