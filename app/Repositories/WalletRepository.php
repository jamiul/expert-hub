<?php

namespace App\Repositories;

use App\Models\Wallet;

class WalletRepository
{
    public Wallet $model;

    /**
     * @param Wallet $model
     */
    public function __construct(Wallet $model)
    {
    }
}
