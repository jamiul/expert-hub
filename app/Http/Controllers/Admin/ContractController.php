<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        return view('admin.contracts.index',[
            'activeContracts' => Contract::active()->get(),
            'disputedContracts' => Contract::disputed()->get()
        ]);
    }
}
