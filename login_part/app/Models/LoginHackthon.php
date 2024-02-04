<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginHackthon extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_team','password'
    ];
}
