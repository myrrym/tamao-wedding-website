<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitMessage extends Model
{
    use HasFactory;

    protected $table = 'messages';

    protected $fillable = ['from', 'to', 'message', 'approved_flag'];
}