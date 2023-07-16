<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\DB;

class KategoriProdukController extends Controller
{

    public function index()
    {
        $kategori_produk = KategoriProduk::all();

        return view('admin.kategoriproduk.kategori_produk', [
            'kategori_produk' => $kategori_produk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategoriproduk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori_produk = new KategoriProduk();
        $kategori_produk->nama = $request->nama;
        $kategori_produk->save();
        return redirect('admin/kategoriproduk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = KategoriProduk::findOrFail($id);

        return view('admin.kategoriproduk.edit', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori_produk = KategoriProduk::findOrFail($id);

        $kategori_produk->nama = $request->nama;
        $kategori_produk->save();
        return redirect('admin/kategoriproduk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = KategoriProduk::findOrFail($id);

        $kategori->delete();
        return redirect('admin/kategoriproduk');
    }
}
