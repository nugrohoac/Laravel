<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswasModel extends Model
{
    protected $table = "siswas";

    protected $fillable = [
        'nama', 'alamat', 'no_telp',
    ];
}
