<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationModel extends Model
{
    protected $table='location';
    protected $primaryKey ='place_id';
    protected $fillable=['place_id','place',];
}
