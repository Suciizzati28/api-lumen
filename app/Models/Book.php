<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Peminjam;

class Book extends Model
{
    //
    public function peminjam()
    {
        return $this->belongsTo(Peminjam::class);
    }

    // protected $table = 'books';
    protected $fillable = ['judul', 'penulis', 'genre'];

}
