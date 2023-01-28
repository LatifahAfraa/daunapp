<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class kota extends Model
{
    protected $table = 'regencies';

    protected $fillable = [
        'province_id',
        'name',
    ];


}
