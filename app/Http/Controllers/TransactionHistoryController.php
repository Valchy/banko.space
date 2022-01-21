<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionHistoryController extends Controller
{
    public function __invoke(Request $request)
    {
        $transactions = Transaction::all();

        return view('transaction_history', compact('transactions'));
    }
}
