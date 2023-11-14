<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email', 'password' => 'required',
        ]);

        if ($validator->fails())
        {
          return redirect()->back()->withErrors($validator);
        }
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        $result = Auth::attempt($credentials);
        // dd($credentials);

        if ($result)
        {
            return redirect()->route('');
        }
        else
        {
            return redirect()->back()->with('danger', 'Email and/or Password invalid.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

}
