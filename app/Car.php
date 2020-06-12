<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    Protected $fillable = ['lloji','ngjyra','viti','kaluara','demtuar'];
    Protected $primaryKey = 'id';
}
