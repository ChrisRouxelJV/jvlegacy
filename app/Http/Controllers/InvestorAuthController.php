<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InvestorAuthController extends Controller
{
    public function showLogin()
    {
        return view('investor.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('investor')->attempt($credentials)) {
            $account = Auth::guard('investor')->user();
            if ($account) {
                if ($account->type_id == 8) {
                    return redirect()->intended('/investor/dashboard');
                } elseif (in_array($account->type_id, [1, 2, 3])) {
                    return redirect()->intended('/admin/dashboard');
                } else {
                    // Default redirect for other types
                    return redirect()->intended('/');
                }
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {
        Auth::guard('investor')->logout();
        return redirect()->route('investor.login');
    }
}
