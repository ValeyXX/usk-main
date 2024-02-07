<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TopUp;
use App\Models\Produk;
use App\Models\Wallet;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class DashboardController extends Controller
{
    public function adminIndex()
    {
        $title = 'Dashboard';
        $users = User::all();
        return view('admin.index', compact('title', 'users'));
    }
    public function kantinIndex()
    {
        $title = 'Dashboard';
        $produks = Produk::all();
        return view('kantin.index', compact('title', 'produks'));
    }
    public function bankIndex()
    {
        $title = 'Dashboard';
        $customers = User::where('role', 'customer')->get();
        $wallet = Wallet::all();
        $requestTopups = TopUp::all();
        $requestWitdrawals = Withdrawal::all();
        return view('bank.index', compact('title', 'customers', 'wallet', 'requestTopups', 'requestWitdrawals'));
    }
    public function customerIndex()
    {
        $title = 'Dashboard';
        $wallet = Wallet::where('id_user', auth()->user()->id)->first();
        return view('customer.index', compact('title', 'wallet'));
    }

}
