<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadingFuck extends Model
{
    use HasFactory;
    protected $table = 'readingfuck';
    protected $fillable = [
        'title',
    ];

}
