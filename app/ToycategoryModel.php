<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToycategoryModel extends Model
{
    protected $table='toy';
    protected $primaryKey ='toy_id';
    protected $fillable=['toy_id','toycategory',];
}
