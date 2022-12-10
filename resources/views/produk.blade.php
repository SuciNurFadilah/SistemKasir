@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
    <h1>Data Produk</h1>
@stop

@section('content')
<div class="container-fluid">
	<div class="card card-default">
		<div class="card-header">{{ __('Pengelolaan Produk') }}</div>
		<div class="card-body">
            <!-- Button Tambah Data -->
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahBukuModal"><i class="fa fa-plus"></i> Tambah Data</button>
            
            </hr>
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        
                        <th>KODE</th>
                        <th>NAMA</th>
                        <th>HARGA</th>
                        <th>SUPPLIER</th>
                        <th>KATEGORI</th>
                        <th>SATUAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($produks as $produk)
                    <tr>
                        
                        <td>{{$produk->kode}}</td>
                        <td>{{$produk->nama}}</td>
                        <td>{{$produk->harga}}</td>
                        <td>{{$produk->supplier}}</td>
                        <td>{{$produk->kategori}}</td>
                        <td>{{$produk->satuan}}</td>
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

