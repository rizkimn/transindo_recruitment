@extends('layout.template')
@section('title', 'Admin Dashboard Page')
@section('body')
<section class="checked-orders-list">
    <h2>Pesanan yang telah check-in</h2>
    <table class="table table-checked-orders">
        <thead>
            <tr class="table-info">
                <th scope="col">#</th>
                <th scope="col">Ticket ID</th>
                <th scope="col">Nama Pemesan</th>
                <th scope="col">No. HP</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($checkedOrders as $order)
            <tr>
                <td>{{$loop ->iteration}}</td>
                <td>{{$order->ticket_id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->address}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
<section class="unchecked-orders-list">
    <h2>Pesanan yang belum check-in</h2>
    <table class="table table-unchecked-orders">
        <thead>
            <tr class="table-info">
                <th scope="col">#</th>
                <th scope="col">Ticket ID</th>
                <th scope="col">Nama Pemesan</th>
                <th scope="col">No. HP</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uncheckedOrders as $order)
            <tr>
                <td>{{$loop ->iteration}}</td>
                <td>{{$order->ticket_id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->address}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

<div class="alerts">
    @if(session('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bx bx-check-double" style="font-size: 20px; margin-right: 10px;"></i> <strong>Sukses!</strong>&ThinSpace; {{session('sukses')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endisset
</div>
@endsection
