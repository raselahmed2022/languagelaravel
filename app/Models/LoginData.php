<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginData extends Model
{
    use HasFactory;
    protected $table = 'logindata';
    protected $fillable = [
        'title',
    ];

}
