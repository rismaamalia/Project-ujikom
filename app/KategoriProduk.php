<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
     public function produk()
    {
        return $this->hasMany('App\Produk', 'kategori_produks_id');
    }
}
