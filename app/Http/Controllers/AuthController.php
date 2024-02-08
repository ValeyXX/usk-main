<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email diisi yak',
                'password.required' => 'Password diisi cuy',
            ]
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == "admin") {
                return redirect()->route('admin.index');
            } elseif (Auth::user()->role == "customer") {
                return redirect()->route('customer.index');
            } elseif (Auth::user()->role == "bank") {
                return redirect()->route('bank.index');
            } elseif (Auth::user()->role == "kantin") {
                return redirect()->route('kantin.index');
            }
        } else {
            return redirect(route('login'))->withErrors('Email dan Password timdak semsuai')->withInput();
        }

    }   

    function logout()
    {
        Auth::logout();
        return redirect('');
    }

    public function create()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users|email',
                'password' => 'required|min:4',
            ],
            [
                'email.required' => 'Email harus diisi',
                'password.required' => 'Password harus diisi',
            ]
            );

            $infologin = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role' => 'customer',
            ];

            $userRegist = User::create($infologin);
            $rekening = '12' . auth()->id() . now()->format('YmdHis');
            Wallet::create([
                'id_user' => $userRegist->id,
                'rekening' => $rekening,
                'saldo' => 0,
                'status' => 'aktif',
            ]);

            return redirect()->route('login')->with('success', 'Berhasil registrasi');
    }
}
