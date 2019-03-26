<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $guarded = array('id');
  
    //
    public function category(){
      $this->belongsTo(category::class);
    }

   
    
}
