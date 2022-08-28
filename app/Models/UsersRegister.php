<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersRegister extends Model
{
    use HasFactory;
    protected $table = 'usersregister';
    protected $fillable = [
        'title',
    ];
}
