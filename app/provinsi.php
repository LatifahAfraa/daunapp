<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    protected $table = 'provinces';

    protected $fillable = [
        'name'
    ];

}
