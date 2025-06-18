<?php

namespace App\Http\Controllers;

use App\Auth\EncoreUser;
use Illuminate\Auth\GenericUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authentication(Request $request)
    {
        $username = $request->input('user_id');
        $password = $request->input('password');
        $hour = now()->hour;

        $validUsername = 'Encore@niit-ph.com';
        $validPassword = 'Secret123-code#' . $hour;

        if ($username === $validUsername && $password === $validPassword) {

            session([
                'is_admin_authenticated' => true,
                'admin_authenticated_at' => now()
            ]);
            return redirect()->route('encore.index');
        }

        return back()->with('error', 'Invalid credentials '.$validPassword);
    }
}
