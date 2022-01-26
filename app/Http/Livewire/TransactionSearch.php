<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class TransactionSearch extends Component
{
    public function searchTransactions($searchValue)
    {
        $filteredTransaction = Transaction::all();
        $transactions = Transaction::paginate(10);

        // Transaction::query()->where('account_from', 1)->orWhere('account_to', 1)->get()->pluck('accountFrom')->pluck('username');

        return view('transaction-history', compact('filteredTransaction'));
    }
}
