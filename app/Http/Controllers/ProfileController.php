<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;

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

        return redirect()->route('profile')->with('success', 'Information updated!');
    }

    public function destroy()
    {
        $user_id = auth()->user()->id;
        Account::findOrFail($user_id)->delete();
        User::findOrFail($user_id)->delete();

        return redirect()->route('home');
    }
}
