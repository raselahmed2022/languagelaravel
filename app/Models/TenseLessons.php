<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenseLessons extends Model
{
    use HasFactory;
    protected $table = 'tenselessons';
    protected $fillable = [
        'title',
    ];


}
