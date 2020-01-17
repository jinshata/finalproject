<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClothcategoryModel extends Model
{
    protected $table='cloth';
    protected $primaryKey ='cloth_id';
    protected $fillable=['cloth_id','clothcategory',];
}
