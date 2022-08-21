<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tense extends Model
{
    use HasFactory;
    protected $table = 'tense';
    protected $fillable = [
        'title',
    ];

}
