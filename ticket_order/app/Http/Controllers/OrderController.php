<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Nette\Utils\Random;

class OrderController extends Controller
{
    function create(Request $r) {
        $ticket_id = Random::generate(9, '0-9');

        $validated = $r->validate([
            'name'    => ['required'],
            'phone'   => ['required'],
            'address' => ['required'],
        ]);

        Order::create([
            'name'          => $r->name,
            'phone'         => $r->phone,
            'address'       => $r->address,
            'ticket_id'     => $ticket_id,
            'ticket_status' => 'belum'
        ]);

        return redirect('/')->with('new_order', 'Pesanan Berhasil');
    }

    function update(Request $r, $id) {
        $validated = $r->validate([
            'name'    => ['required'],
            'phone'   => ['required'],
            'address' => ['required'],
        ]);

        Order::where('ticket_id', $id)
                ->update($validated);

        return redirect('/admin')->with('sukses', 'Data Berhasil Diubah.');
    }

    function delete($id) {
        Order::where('ticket_id', $id)->delete();
        return redirect('/admin')->with('sukses', 'Data Berhasil Dihapus.');
    }
}
