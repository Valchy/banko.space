<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaction;

class PendingTransactions extends Component
{
    public function render()
    {
        $transactions = Transaction::query()->where('status', 'pending')->get();

        return view('livewire.pending-transactions', compact('transactions'));
    }
}
