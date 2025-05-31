<?php

namespace App\Http\Controllers;

use Illuminate\Auth\GenericUser;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    


    public function authentication(Request $request)
    {

        $username = $request->input('user_id');
        $password = $request->input('password');
        $hour = now()->hour;

        $validUsername = 'Encore@niit-ph.com';
        $validPassword = 'Secret123-code#'.$hour;

        if ($username === $validUsername && $password === $validPassword) {

            // Manually log in a "fake" user
            $user = new GenericUser([
                'id' => 1,
                'name' => 'Encore',
                'email' => $validUsername
            ]);

            Auth::login($user); // Logs in manually

            error_log($username.$password);
            return redirect('/encore');
        }

        return back()->with('error', 'Invalid credentials'.$validPassword);
    }


    
}
