<?php

namespace App\Http\Controllers;

use App\Models\TopUp;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user()->id;
        $transactions = Transaction::query()->where('account_from', $user)->orWhere('account_to', $user)->paginate(5);
        $topUps = TopUp::query()->where('account_id', $user)->paginate(5);

        return view('dashboard', compact('transactions', 'topUps'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
