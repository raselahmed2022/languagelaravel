<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    use HasFactory;

    protected $table = 'vocabulary';


    public function Category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
