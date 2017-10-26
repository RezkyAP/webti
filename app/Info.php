<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'info';

    protected $primaryKey= 'id';

    protected $fillable = [
        'id', 'namainfo','foto', 'deskripsi', 'created_at','updated_at'
    ];
}
