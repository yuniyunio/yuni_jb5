@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit Rekap Gadget</h1>
    <hr />
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{ $product->tanggal }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Gadget</label>
                <input type="text" name="nama_barang" class="form-control" value="{{ $product->nama_barang }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jumlah Gadget</label>
                <input type="number" name="jumlah_barang" class="form-control" value="{{ $product->jumlah_barang }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Harga Gadget</label>
                <input type="text" name="harga_barang" class="form-control" value="{{ $product->harga_barang }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-dark">Update</button>
            </div>
        </div>
    </form>
@endsection