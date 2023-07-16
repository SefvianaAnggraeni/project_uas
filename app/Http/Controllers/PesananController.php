<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::with('produk')->get();
        return view('admin.pesanan.pesanan', ['pesanan' => $pesanan]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $produk = Produk::all();

        //menampilkan seluruh data
        $pesanan = Pesanan::all();
        return view('admin.pesanan.create', [
            'pesanan' => $pesanan,
            'produk' => $produk
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //buat class baru dengan nama table yang mau kita tambahkan datanya (produk)
        //ambil data yang di inputkan user dengan parameter request,
        //lalu masukkan ke dalam kolom table (produk)
        //lalu kembalikan ke tampilan produk ketika setelah user mengklik button simpan
        $pesanan = new Pesanan();
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pesanan = $request->nama_pesanan;
        $pesanan->alamat_pesanan = $request->alamat_pesanan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->keterangan = $request->keterangan;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pesanan = Pesanan::find($id);
        return view('admin.pesanan.detail', compact('pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::all();
        $pesanan = Pesanan::findOrFail($id);

        return view('admin.pesanan.edit', [
            'produk' => $produk,
            'pesanan' => $pesanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pesanan = Pesanan::find($request->id);
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pesanan = $request->nama_pesanan;
        $pesanan->alamat_pesanan = $request->alamat_pesanan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->keterangan = $request->keterangan;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pesanan')->where('id', $id)->delete();
        return redirect('admin/pesanan');
    }
}
