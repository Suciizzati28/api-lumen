<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    //

    //protected $table = 'petugas';
    protected $fillable = ['Nama Petugas', 'email', 'no telp','alamat'];
    
}
