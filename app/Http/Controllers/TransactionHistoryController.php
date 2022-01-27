<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionHistoryController extends Controller
{
    public function __invoke(Request $request)
    {
        $transactions = Transaction::orderBy('created_at', 'DESC')->paginate(10);

        return view('transaction-history', compact('transactions'));
    }
}
