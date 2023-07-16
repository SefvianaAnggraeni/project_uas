<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'produk';

    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class, 'kategori_produk_id');
    }
}
