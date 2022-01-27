<?php

namespace App\Http\Livewire;

use App\Models\Account;
use App\Models\Transaction;
use Livewire\Component;

class PendingTransactions extends Component
{
    public function modifyTransaction($transaction_id, $approved)
    {
        $transaction = Transaction::findOrFail($transaction_id);

        if ($approved) {
            // Send money to recepient and change transaction status
            $accountTo = Account::findOrFail($transaction->account_to);
            $accountTo->account_balance += $transaction->amount;
            $accountTo->save();

            $transaction->status = 'approved';
        } else {
            // Return money to sender and change transaction status
            $accountFrom = Account::findOrFail($transaction->account_from);
            $accountFrom->account_balance += $transaction->amount;
            $accountFrom->save();

            $transaction->status = 'refused';
        }

        // Save transaction changes to DB
        $transaction->save();
    }

    public function render()
    {
        // Get all Transactions and paginate by 5
        $transactions = Transaction::query()->where('status', 'pending')->paginate(5);

        return view('livewire.pending-transactions', compact('transactions'));
    }
}
