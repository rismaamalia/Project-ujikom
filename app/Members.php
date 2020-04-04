<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $fillable = ['username','email','password'];
    Public $timestamps = true;
    
}
