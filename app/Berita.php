<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    protected $fillable = [
        'judul', 'tanggal', 'sumber', 'isi', 'gambar', 'shortdesc',
    ];
}
