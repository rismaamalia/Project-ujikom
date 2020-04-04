<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['judul','slug','konten','user_id','foto'];
    Public $timestamps = true;

      public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
