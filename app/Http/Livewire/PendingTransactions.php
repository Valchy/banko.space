<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class PendingTransactions extends Component
{
    public function render()
    {
        $transactions = Transaction::query()->where('status', 'pending')->get();

        return view('livewire.pending-transactions', compact('transactions'));
    }
}
