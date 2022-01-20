<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionHistoryController extends Controller
{
    public function __invoke(Request $request)
    {
        $transactions = Transaction::all();

        return view('transaction_history', compact('transactions'));
    }
}
