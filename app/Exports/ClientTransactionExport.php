<?php

namespace App\Exports;

use App\Models\ClientTransaction;
use Maatwebsite\Excel\Concerns\FromCollection;

class ClientTransactionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ClientTransaction::all();
    }
}
