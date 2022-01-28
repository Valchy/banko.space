<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class SendMoneyController extends Controller
{
    public function index()
    {
        $accounts = Account::query()->where('id', '!=', auth()->user()->id)->get();

        return view('send-money', compact('accounts'));
    }

    public function create(Request $request)
    {
        $user_id = auth()->user()->id;
        $account_to = $request->account_to;
        $amount = $request->amount;

        $account = Account::findOrFail($user_id);
        $account->account_balance -= $amount;

        if ($account->account_balance < 0) {
            return redirect()->route('send-money')->with('error', 'Insufficient funds to complete the transaction!');
        } else {
            $account->save();
        }

        Transaction::create([
            'account_from' => $user_id,
            'account_to'   => $account_to,
            'amount'       => $amount,
        ]);

        return redirect()->route('dashboard')->with('success', 'Money is on the way!');
    }
}
