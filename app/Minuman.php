<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
     protected $fillable = ['minuman','kategori_produks_id','deskripsi','foto'];
    Public $timestamps = true;

    public function kategori_produks()
    {
        return $this->belongsTo('App\KategoriProduk', 'kategori_produks_id');
    }
}
