<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaction;

class PendingTransactions extends Component
{
    public function modifyTransaction($transaction_id, $approved)
    {
        $transaction = Transaction::query()->where('id', $transaction_id);

        if ($approved) $transaction->update(['status' => 'approved']);
        else $transaction->delete();
    }

    public function render()
    {
        $transactions = Transaction::query()->where('status', 'pending')->get();

        return view('livewire.pending-transactions', compact('transactions'));
    }
}
