<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $keyType = 'string';

    protected $fillable = [
        'id', 'namakegiatan','foto', 'deskripsi', 'created_at','updated_at'
    ];
}
