<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sarana extends Model
{
    public $timestamps = false;

    protected $table = 'sarana';

    protected $keyType = 'string';

    protected $fillable = [
        'id', 'nama','foto', 'deskripsi'
    ];

}
