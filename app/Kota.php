<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    public $table = "kotas";

    protected $fillable = [
        'kota',
    ];

    public function toLocation(){
        return $this->hasMany(Lokasi::class);
    }
}
