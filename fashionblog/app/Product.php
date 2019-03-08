<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $guarding=['id'];
  protected $table='product'
    //
    public function category(){
      $this->belonsTo(category::class)
    }
}
