@extends('layout.template')
@section('title', 'Admin Dashboard Page')
@section('custom-css')
<link rel="stylesheet" href="{{asset('/asset/css/checkin.css')}}">
@endsection
@section('body')
<section class="school-list">
    <h2 style="text-align: center">Check In</h2>
    <form method="POST" action="/order/checkin"
    style="
        width: 30em;
        margin: 0 auto;
    ">
    @csrf @method('post')
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bx bx-qr"></i></span>
            <input type="text" class="form-control" placeholder="Ticket ID" name="ticket_id" aria-describedby="basic-addon1">
            <button class="btn btn-primary" type="submit" id="button-addon2">Check In</button>
        </div>
    </form>
</section>

<div class="alerts">
    @if(session('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bx bx-check-double" style="font-size: 20px; margin-right: 10px;"></i> <strong>Sukses!</strong>&ThinSpace; {{session('sukses')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bx bx-alarm-exclamation" style="font-size: 20px; margin-right: 10px;"></i> <strong>Gagal!</strong>&ThinSpace; {{session('gagal')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>

@if(session('pesanan'))
<div class="checkin-modal active">
    <div class="modal-overlay">
        <div class="modal-content wow fadeInUp">
            <div class="modal-header"><h4>Biodata Pemesan</h4> <i class="close-btn bx bx-x"></i></div>
            <div class="modal-body">
                <ul>
                    <li><i class="bx bx-user"></i><span>{{session('pesanan')[0]['name']}}</span></li>
                    <li><i class="bx bx-phone"></i><span>{{session('pesanan')[0]['phone']}}</span></li>
                    <li><i class="bx bx-home"></i><span>{{session('pesanan')[0]['address']}}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
@section('custom-js')
<script>
    document.querySelector('.checkin-modal .close-btn').addEventListener('click', (e) => {
        document.querySelector('.checkin-modal').classList.remove('active');
    });
</script>
@endsection
