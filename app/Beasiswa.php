<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    public $timestamps = false;

    protected $table = 'beasiswa';

    protected $keyType = 'string';

    protected $fillable = [
        'id', 'namabeasiswa','foto', 'deskripsi'
    ];
}
