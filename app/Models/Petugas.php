<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    //

    //protected $table = 'petugas';
    protected $fillable = ['Nama_Petugas', 'email', 'no_telp','alamat'];
    
}
