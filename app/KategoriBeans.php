<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBeans extends Model
{
      public function beans()
    {
        return $this->hasMany('App\Beans', 'kategori_beans_id');
    }
}
