@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Add Rekap Merchandise</h1>
    <hr />
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row mb-3 gap-6">
            <div class="col">
                <label for="form-control">Tanggal</label>
                <input type="date" name="tanggal" class="form-control">
            </div>
            <div class="col">
                <label for="form-control">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" placeholder="ex: NCT CheWing Gum">
            </div>
        </div>
        <div class="row mb-3 gap-4">
          
            <div class="col">
                <label for="form-control">Jumlah Barang</label>
                <input type="number" name="jumlah_barang" class="form-control" placeholder="ex: 4">
            </div>
            <div class="col">
                <label for="form-control">Harga Barang</label>
                <input type="text" name="harga_barang" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection