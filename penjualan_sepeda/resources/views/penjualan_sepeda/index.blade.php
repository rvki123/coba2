@extends('teamplate')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Penjualan Sepeda</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Pembeli</th>
                                <th>Merk Sepeda</th>
                                <th>Jumlah Sepeda</th>
                                <th>Tanggal Pembelian</th>
                                <th>Total Harga</th>
                                <th>Gambar Sepeda</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penjualanSepeda as $PenjualanSepeda)
                                <tr>
                                    <td>{{ $PenjualanSepeda->nama_pembeli }}</td>
                                    <td>{{ $PenjualanSepeda->merk_sepeda }}</td>
                                    <td>{{ $PenjualanSepeda->jumlah_sepeda }}</td>
                                    <td>{{ $PenjualanSepeda->tanggal_pembelian }}</td>
                                    <td>Rp. {{number_format($PenjualanSepeda->total_harga)}}</td>
                                    <td>
                                        @if($PenjualanSepeda->gambar_sepeda)
                                            <img src="{{ asset('images/'.$PenjualanSepeda->gambar_sepeda) }}" alt="Gambar Sepeda" width="100">
                                        @else
                                            Tidak ada gambar
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
