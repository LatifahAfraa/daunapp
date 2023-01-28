<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_member extends Model
{
    protected $table = 'otw_jenis';
    protected $primaryKey = 'id_jenis';

    protected $fillable = [
        'nama_jenis',
    ];
}
