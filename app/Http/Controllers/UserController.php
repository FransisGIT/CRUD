<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function loginuser(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email:rfc,dns',
                'password' => 'required|unique:users,password|min:8|alpha_dash',
            ],
            [
                'email.required' => 'Email atau Katasandi yang anda masukkan salah',
                'password.min' => '',

            ]
        );
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('alert', 'Welcome Back');
        }
        return back();
    }
    public function registeruser(Request $request)
    {
        request()->validate(
            [
                'name' => 'required|min:4|unique:users',
                'email' => 'required|unique:users|email:rfc,dns',
                'password' => 'required|min:8',
            ],
            [
                'name.required' => 'Nama harus diisi',
                'name.unique' => 'Nama telah digunakan',
                'name.min' => 'Nama minimal harus 4 karakter',
                'email.required' => 'Email harus diisi',
                'email.unique' => 'Email telah digunakan',
                'password.required' => 'Password harus diisi',
                'password.min' => 'Password minimal harus 8 karakter',
            ]
        );
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        return redirect('/login')->with('alert', 'Registrasi Berhasil!');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('alert', 'Anda telah logout');
    }
}
