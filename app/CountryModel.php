<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
   protected $table='country';
    protected $fillable=['country_id','country_name',];
}
