<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;


class Peminjam extends Model
{
    //
    public function book()
    {
        return $this->hasMany(Book::class);
    }

    protected $fillable = ['nama', 'alamat', 'no_telp'];
}
