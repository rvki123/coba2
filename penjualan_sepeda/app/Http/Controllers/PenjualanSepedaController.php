<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PenjualanSepeda;

class PenjualanSepedaController extends Controller
{
    public function index()
    {
        $penjualanSepeda = PenjualanSepeda::all();
        return view('penjualan_sepeda.index', compact('penjualanSepeda'));
    }

    public function create()
    {
        return view('penjualan_sepeda.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_pembeli' => 'required|string|max:255',
        'merk_sepeda' => 'required|string|max:255',
        'jumlah_sepeda' => 'required|integer',
        'tanggal_pembelian' => 'required|date',
        'total_harga' => 'required|integer',
        'gambar_sepeda' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('gambar_sepeda')) {
        $imageName = time().'.'.$request->gambar_sepeda->extension();  
        $request->gambar_sepeda->move(public_path('images'), $imageName);
    }


    return redirect()->route('penjualan_sepeda.index')->with('success', 'Data penjualan sepeda berhasil ditambahkan.');
}

    public function show($id)
    {
        $penjualanSepeda = PenjualanSepeda::findOrFail($id);
        return view('penjualan_sepeda.show', compact('penjualanSepeda'));
    }

    public function edit($id)
    {
        $penjualanSepeda = PenjualanSepeda::findOrFail($id);
        return view('penjualan_sepeda.edit', compact('penjualanSepeda'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_pembeli' => 'required|string|max:255',
            'merk_sepeda' => 'required|string|max:255',
            'jumlah_sepeda' => 'required|integer|min:1',
            'tanggal_pembelian' => 'required|date',
            'total_harga' => 'required|numeric|min:0',
        ]);

        $penjualanSepeda = PenjualanSepeda::findOrFail($id);
        $penjualanSepeda->update($request->all());
        return redirect()->route('penjualan_sepeda.index')->with('success', 'Data penjualan sepeda berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penjualanSepeda = PenjualanSepeda::findOrFail($id);
        $penjualanSepeda->delete();
        return redirect()->route('penjualan_sepeda.index')->with('success', 'Data penjualan sepeda berhasil dihapus.');
    }
}
