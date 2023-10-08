<?php

namespace App\Repositories;

use App\Models\Transaction;

class TransactionRepository
{
    public Transaction $model;

    /**
     * @param Transaction $model
     */
    public function __construct(Transaction $model)
    {
    }
}
