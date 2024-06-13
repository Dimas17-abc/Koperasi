@extends('layouts.main')

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h6><i class="icon fas fa-check"></i>{{ $message }}</h6>
    </div>
@endif
    <div class="mb-2">
        <h1>Data Nasabah</h1>
        <table class="table">
            <tr>
                <th>Kode Nasabah</th>
                <td>: {{ $customer->code }}</td>
            </tr>
            <tr>
                <th>Nama Nasabah</th>
                <td>: {{ $customer->name }}</td>
            </tr>
            <tr>
                <th>Alamat Nasabah</th>
                <td>: {{ $customer->address }}</td>
            </tr>
            <tr>
                <th>Telepon Nasabah</th>
                <td>: {{ $customer->phone }}</td>
            </tr>
        </table>
    </div>
@endsection
