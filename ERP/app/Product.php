<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = ['title', 'genre', 'release_year','release_year1', 'poster'];
}
