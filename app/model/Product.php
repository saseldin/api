<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Review;
class Product extends Model
{
    public function reviews(){
      return $this->hasMany(Review::class);
    }
}
