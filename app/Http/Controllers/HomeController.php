<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function __invoke(Request $request) {
        session()->put('session_fancy_name', 'TEST COOOl');

        return view('home');
    }
}
