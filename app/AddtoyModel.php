<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddtoyModel extends Model
{
     protected $table ='addtoy';
    protected $primaryKey ='toyid';
   protected $fillable=['toyid','toycategory','description','quantity','image',
   ];
}
