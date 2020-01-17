<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddfoodModel extends Model
{
    protected $table ='addfood';
    protected $primaryKey ='foodid';
   protected $fillable=['foodid','foodcategory','description','quantity','image',

];
}
