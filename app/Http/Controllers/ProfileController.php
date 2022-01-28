<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $user_id = auth()->user()->id;
        Account::query()->where('id', $user_id)->update(['username' => $request->username]);
        User::query()->where('id', $user_id)->update(['email' => $request->email]);

        return view('profile');
    }

    public function destroy()
    {
        $user_id = auth()->user()->id;
        Account::findOrFail($user_id)->delete();
        User::findOrFail($user_id)->delete();

        return view('home');
    }
}
