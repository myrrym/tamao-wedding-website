<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShareMemory extends Model
{
    protected $table = 'memories';

    protected $fillable = ['from', 'image', 'approved_flag'];

    protected $casts = [
        'images' => 'array', // automatically cast JSON <-> array
    ];
}