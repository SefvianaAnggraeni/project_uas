<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pesanan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'pesanan';

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
