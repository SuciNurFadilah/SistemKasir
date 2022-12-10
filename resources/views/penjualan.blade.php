@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
    <h1>Data Penjualan</h1>
@stop

@section('content')
<div class="container-fluid">
	<div class="card card-default">
		<div class="card-header">{{ __('Data Penjualan') }}</div>
		<div class="card-body">
            <!-- Button Tambah Data -->
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahBukuModal"><i class="fa fa-plus"></i> Tambah Data</button>
            
            </hr>
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>IDPENJUALAN</th>
                        <th>IDTRANSAKSI</th>
                        <th>TANGGAL</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($penjualans as $penjualan)
                    <tr>
                        <td>{{$penjualan->idpenjualan}}</td>
                        <td>{{$penjualan->idtransaksi}}</td>
                        <td>{{$penjualan->tanggal}}</td>
                        <td>{{$penjualan->total}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" id="btn-edit-buku" class="btn btn-success"
                                    data-toggle="modal" data-target="#editBukuModal"
                                    data-id="{{ $produk->id }}">Edit</button>
                                <button type="button" class="btn btn-danger"
                                    onclick="deleteConfirmation('{{ $produk->id }}', '{{ $kode->judul }}' )">Hapus</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@stop

