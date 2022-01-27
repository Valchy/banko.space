<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class PendingTransactions extends Component
{
    public function modifyTransaction($transaction_id, $approved)
    {
        $transaction = Transaction::query()->where('id', $transaction_id);

        if ($approved) $transaction->update(['status' => 'approved']);
        else {
            $transaction->update(['status' => 'refused']);
            $transaction->delete();
        }
    }

    public function render()
    {
        $transactions = Transaction::query()->where('status', 'pending')->paginate(5);

        return view('livewire.pending-transactions', compact('transactions'));
    }
}
