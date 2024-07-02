@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Penjualan Sepeda</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('penjualan_sepeda.update', $penjualanSepeda->id) }}">
                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <div class="form-group">
                            <label for="nama_pembeli">Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control" value="{{ $penjualanSepeda->nama_pembeli }}" required>
                        </div>

                        <div class="form-group">
                            <label for="merk_sepeda">Merk Sepeda</label>
                            <input type="text" name="merk_sepeda" id="merk_sepeda" class="form-control" value="{{ $penjualanSepeda->merk_sepeda }}" required>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_sepeda">Jumlah Sepeda</label>
                            <input type="number" name="jumlah_sepeda" id="jumlah_sepeda" class="form-control" value="{{ $penjualanSepeda->jumlah_sepeda }}" required>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_pembelian">Tanggal Pembelian</label>
                            <input type="date" name="tanggal_pembelian" id="tanggal_pembelian" class="form-control" value="{{ $penjualanSepeda->tanggal_pembelian->format('Y-m-d') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="total_harga">Total Harga</label>
                            <input type="number" name="total_harga" id="total_harga" class="form-control" value="{{ $penjualanSepeda->total_harga }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html>