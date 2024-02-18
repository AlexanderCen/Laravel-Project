<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    public $table = "lokasis";

    protected $fillable = [
        'id_kota', 'nama', 'alamat', 'no_telp', 'gambar', 'tanggal', 'jam', 
    ];
    
    public function toCity(){
        return $this->hasOne(Kota::class);
    }
}
