<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalVerbs extends Model
{
    use HasFactory;
    protected $table = 'modalverbs';
    protected $fillable = [
        'title',
    ];
}
