<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name','description','size','category_id','image'];

    public function products(){
      //return $this->hasMany('App\Product');
      return $this->hasMany(Product::class);
    }
}
