@extends('layout.template')
@section('title', 'Admin Dashboard Page')
@section('custom-css')
    <link rel="stylesheet" href="{{asset('asset/css/dashboard.css')}}">
@endsection
@section('body')
<section class="orders-list">
    <h2>Daftar Pesanan</h2>
    <table class="table">
        <thead>
            <tr class="table-info">
                <th scope="col">#</th>
                <th scope="col">Ticket ID</th>
                <th scope="col">Nama Pemesan</th>
                <th scope="col">No. HP</th>
                <th scope="col">Status Check In</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{$loop ->iteration}}</td>
                <td>{{$order->ticket_id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->ticket_status}} check-in</td>
                <td style="width: 10%">
                    <div class="action-btn">
                        <a href="--EDIT ORDER--" class="edit-btn"><i class="bx bx-edit"></i></a>
                        <form action="/order/delete/{{$order->ticket_id}}" method="POST">
                            @csrf @method('delete')
                            <button class="delete-btn" type="submit" onclick="return confirm('Are You Sure?')"><i class="bx bx-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>

            <div class="editorder-modal @if($errors->any()) active @endif">
                <div class="modal-overlay">
                    <div class="form-group wow fadeInUp">
                        <form action="/order/edit/{{$order->ticket_id}}" method="POST">
                            @csrf @method('PUT')
                            <h2>Ubah Pesanan</h2>
                            <ul class="form-input">
                                <li>
                                    <label for="name">Nama</label>
                                    <input value="{{$order->name}}" type="text" id="name" name="name" placeholder="Bill Gates">
                                    @error('name') <span>* name field is required. </span> @enderror
                                </li>
                                <li>
                                    <label for="phone">No HP</label>
                                    <input value="{{$order->phone}}" type="phone" id="phone" name="phone" placeholder="+62x-xxx-xxx-xxxx">
                                    @error('phone') <span>* name field is required. </span> @enderror
                                </li>
                                <li>
                                    <label for="address">Alamat</label>
                                    <textarea name="address" id="addresss" cols="30" rows="10">{{$order->address}}</textarea>
                                    @error('address') <span>* name field is required. </span> @enderror
                                </li>
                            </ul>
                            <div class="action-btn">
                                <button class="order-btn" type="submit" name="submit">Simpan</button>
                                <button class="back-btn" type="button">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
@section('custom-js')
{{-- Modal Trigger --}}
<script>
    let trigger = document.querySelectorAll('td .edit-btn');
    let back = document.querySelectorAll('button.back-btn');
    let modal = document.querySelectorAll('div.editorder-modal');

    for(let i=0; i<trigger.length; i++) {
        trigger[i].addEventListener('click', (e) => {
            e.preventDefault();
            modal[i].classList.add('active');
        });

        back[i].addEventListener('click', (e) => {
            modal[i].classList.remove('active');
        });
    }
</script>
@endsection
