<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public $table = "calons";

    protected $fillable = [
        'id_lokasi', 'user_id', 'name', 'tanggal_vaksin', 'NIK', 'jam_vaksin', 'bukti', 
    ];

    public function information(){
        return $this->hasOne(Lokasi::class, 'id_lokasi');
    }

    public function owner(){
        return $this->hasOne(User::class, 'user_id');
    }
}
