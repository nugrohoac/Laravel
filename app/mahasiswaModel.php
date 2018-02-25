<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswaModel extends Model
{
    protected $table = "mahasiswas";

    protected $fillable = [
        'name', 'email', 'password',
    ];

}
