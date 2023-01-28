<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class StaffController extends Controller
{
    function login() {
        return view('staff.login');
    }

    function auth(Request $r) {
        $validated = $r->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($validated, false)) {
            $r->session()->regenerate();

            return redirect('/admin');
        }

        return back()->with([
            'failed' => 'username or password is wrong.',
        ]);
    }

    function logout(Request $r) {
        Auth::logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();

        return redirect('/');
    }

    function admin() {
        $orders = Order::all();
        return view('staff.dashboard', ['orders'=>$orders]);
    }

    function checkin() {
        return view('staff.checkin');
    }

    function laporan() {
        $checkedOrders   = Order::where('ticket_status', 'sudah')->get();
        $unCheckedOrders = Order::where('ticket_status', 'belum')->get();

        return view('staff.laporan', [
                                        'checkedOrders'   => $checkedOrders,
                                        'uncheckedOrders' => $unCheckedOrders
                                    ]);
    }
}
