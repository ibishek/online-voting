<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function page()
    {
        if (Auth::check()) {
            return redirect()->intended('dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $credentials = $this->generateCredentials($validated);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'User not found',
        ])->onlyInput('email');
    }

    private function generateCredentials($fields): array
    {
        return [
            'email' => $fields['email'],
            'password' => $fields['password'],
            'is_active' => 1
        ];
    }
}
