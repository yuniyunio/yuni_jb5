@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detail Rekap Merchandise</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $product->tanggal }}" readonly >
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="{{ $product->nama_barang }}" readonly >
        </div>
    </div>
    <div class="row">
    
        <div class="col mb-3">
            <label class="form-label">Jumlah Barang </label> 
            <input  type="number" class="form-control" name="jumlah_barang"  value="{{$product->jumlah_barang }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Harga Barang</label>
            <input type="text" name="harga_barang" class="form-control" value="{{ $product->harga_barang }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection