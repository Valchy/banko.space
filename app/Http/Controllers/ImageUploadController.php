<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageUploadController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = Auth::user();
        $user->addMediaFromRequest('profile-pic')->toMediaCollection('pics');

        return redirect()->back();
    }
}
