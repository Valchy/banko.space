<?php

namespace App\Http\Controllers;

class TransactionHistoryController extends Controller
{
    public function __invoke()
    {
        return view('transaction-history');
    }
}
