@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
    <h1>Data Barang</h1>
@stop

@section('content')
<div class="container-fluid">
	<div class="card card-default">
		<div class="card-header">{{ __('Pengelolaan Barang') }}</div>
		<div class="card-body">
            <!-- Button Tambah Data -->
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahBukuModal"><i class="fa fa-plus"></i> Tambah Data</button>
            
            </hr>
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>KODE</th>
                        <th>NAMA</th>
                        <th>HARGA</th>
                        <th>STOK</th>
                        <th>KATEGORI</th>
                        <th>SATUAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($barangs as $barang)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$barang->kode}}</td>
                        <td>{{$barang->nama}}</td>
                        <td>{{$barang->harga}}</td>
                        <td>{{$barang->stok}}</td>
                        <td>{{$barang->kategori}}</td>
                        <td>{{$barang->satuan}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" id="btn-edit-buku" class="btn btn-success"
                                    data-toggle="modal" data-target="#editBukuModal"
                                    data-id="{{ $book->id }}">Edit</button>
                                <button type="button" class="btn btn-danger"
                                    onclick="deleteConfirmation('{{ $book->id }}', '{{ $book->judul }}' )">Hapus</button>
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

