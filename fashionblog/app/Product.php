<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $guarded=['id'];
  protected $table=['product'];

    //
    public function category()
    {
      $this->belongsTo(App\User);
    }
}
