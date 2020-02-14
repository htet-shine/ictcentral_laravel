<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function presentPrice()
  {
  	return '$'. number_format($this->price);
  }
  public function scoperelatedProducts($query)
  {
  	return $query->inRandomOrder()->take(4);
  }
  public function categories()
  {
  	return $this->belongsToMany('App\Category');
  }
}
