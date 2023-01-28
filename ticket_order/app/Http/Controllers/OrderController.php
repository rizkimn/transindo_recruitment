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

        return redirect('/order/ticket/'.$ticket_id)->with('new_order', 'Pesanan Berhasil');
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

    function ticket_check(Request $r) {
        $order = Order::where('ticket_id', $r->ticket_id);

        if(isset($order->get()[0])) {
            if($order->get()[0]->ticket_status == 'sudah') {
                return redirect()->back()->with('gagal', 'ID Tiket Sudah Check In, Gunakan Tiket Lain!');
            }
            $order->update(['ticket_status' => 'sudah']);
            return redirect('/checkin')->with([
                                                'sukses'  => 'Tiket Valid, Silahkan Masuk!',
                                                'pesanan' => $order->get()
                                            ]);
        }
        return redirect()->back()->with('gagal', 'ID Tidak Valid, Silahkan Periksa Kembali!');
    }

    function ticket_show($id) {
        $order = Order::where('ticket_id', $id);

        if(isset($order->get()[0])) {
            return view('ticket', ['ticket_id' => $id]);
        }

        return response('Ticket Not Found', 404);
    }
}
