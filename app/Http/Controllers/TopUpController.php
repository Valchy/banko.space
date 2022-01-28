<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\TopUp;
use Illuminate\Http\Request;

class TopUpController extends Controller
{
    public function index()
    {
        return view('top-up-account');
    }

    public function create(Request $request)
    {
        $user_id = auth()->user()->id;
        $amount = $request->top_up_amount;

        TopUp::create([
            'account_id' => $user_id,
            'amount'     => $amount,
        ]);

        $account = Account::findOrFail($user_id);
        $account->account_balance += $amount;
        $account->save();

        return redirect()->route('dashboard')->with('success', 'Account Successfully Toped-up!');
    }
}
