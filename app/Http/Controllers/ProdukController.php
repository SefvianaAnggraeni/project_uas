<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;


class ProdukController extends Controller
{

    public function index()
    {
        $produk = Produk::with('kategori_produk')->get();

        return view('admin.produk.produk', [
            'produk' => $produk
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_produk = KategoriProduk::all();

        return view('admin.produk.create', [
            'kategori_produk' => $kategori_produk
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::find($id);
        return view('admin.produk.detail', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        $kategori_produk = KategoriProduk::all();

        return view('admin.produk.edit', [
            'produk' => $produk,
            'kategori_produk' => $kategori_produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('produk')->where('id', $id)->delete();
        return redirect('admin/produk');
    }
}
