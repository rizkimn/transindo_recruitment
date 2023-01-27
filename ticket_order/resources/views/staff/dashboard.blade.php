@extends('layout.template')
@section('title', 'Admin Dashboard Page')
@section('custom-css')
    <link rel="stylesheet" href="{{asset('asset/css/dashboard.css')}}">
@endsection
@section('body')
<section class="school-list">
    <h2>Daftar Pesanan</h2>
    <table class="table">
        <thead>
            <tr class="table-info">
            <th scope="col">#</th>
            <th scope="col">Nama Sekolah</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tbody>
    </table>
</section>
@endsection
