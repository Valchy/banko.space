<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class TransactionSearch extends Component
{
    public function searchTransactions($searchValue)
    {
        // $transactions = Transaction::query()->where('account_from', 1)->orWhere('account_to', 1)->get()->pluck('accountFrom')->pluck('username');
    }

    public function render()
    {
        $transactions = Transaction::orderBy('created_at', 'DESC')->paginate(10);

        return view('livewire.transaction-search', compact('transactions'));
    }
}
