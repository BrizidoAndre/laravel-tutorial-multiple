<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function logon(Request $request)
    {
        $request->validate([
            'password' => ['required']
        ]);
        if ($request->post('password', '') === 'admin') {
            session()->put('admin', true);
            return redirect()->route('home');
        }
        return redirect()->route('login');
    }

    public function logout()
    {
        session()->remove('admin');
        return redirect()->route('home');
    }
}
