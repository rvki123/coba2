@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Penjualan Sepeda</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('penjualan_sepeda.store') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="nama_pembeli" class="col-md-4 col-form-label text-md-right">Nama Pembeli</label>
                            <div class="col-md-6">
                                <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="merk_sepeda" class="col-md-4 col-form-label text-md-right">Merk Sepeda</label>
                            <div class="col-md-6">
                                <input type="text" name="merk_sepeda" id="merk_sepeda" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah_sepeda" class="col-md-4 col-form-label text-md-right">Jumlah Sepeda</label>
                            <div class="col-md-6">
                                <input type="number" name="jumlah_sepeda" id="jumlah_sepeda" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal_pembelian" class="col-md-4 col-form-label text-md-right">Tanggal Pembelian</label>
                            <div class="col-md-6">
                                <input type="date" name="tanggal_pembelian" id="tanggal_pembelian" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total_harga" class="col-md-4 col-form-label text-md-right">Total Harga</label>
                            <div class="col-md-6">
                                <input type="text" name="total_harga" id="total_harga" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gambar_sepeda" class="col-md-4 col-form-label text-md-right">Gambar Sepeda</label>
                            <div class="col-md-6">
                                <input type="file" name="gambar_sepeda" id="gambar_sepeda" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
