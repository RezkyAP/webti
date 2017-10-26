<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{

    protected $table = 'beasiswa';

    protected $primaryKey = 'id';

    protected $fillable = [
        'namabeasiswa','foto', 'deskripsi', 'created_at','updated_at'
    ];
}
