<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table= ['Category'];
    protected $guarded= ['id'];
    public function product()
    {
    return $this->hasMany (product::class);
    }  //
}
