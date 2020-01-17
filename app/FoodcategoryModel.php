<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodcategoryModel extends Model
{
   protected $table='food';
    protected $primaryKey ='food_id';
    protected $fillable=['food_id','foodcategory',];
}
