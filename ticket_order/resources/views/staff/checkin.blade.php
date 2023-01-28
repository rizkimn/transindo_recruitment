@extends('layout.template')
@section('title', 'Admin Dashboard Page')
@section('custom-css')
<style>
    .alerts {
        position: fixed;
        z-index: 9999;
        top: 10px; left: 0;
        width: calc(100% - 20px);
    }

    .alert {
        width: 100%;
        margin: 5px 10px;
        transition: .3s;
        align-items: center;
        display: flex;
    }
</style>
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
    @endisset
    @if(session('gagal'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bx bx-alarm-exclamation" style="font-size: 20px; margin-right: 10px;"></i> <strong>Gagal!</strong>&ThinSpace; {{session('gagal')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endisset
</div>
@endsection
