<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $guarded=['id'];
  protected $table=['product'];
<<<<<<< HEAD

    //
    public function category()
    {
      $this->belongsTo(App\User);
=======
    //
    public function category(){
      $this->belongsTo(category::class);
>>>>>>> 810d35e610547e6c7387922a50d0e850ce1e5863
    }
}
