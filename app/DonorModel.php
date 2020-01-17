<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonorModel extends Model
{
    protected $table='donor';
    protected $primaryKey = 'id';
    protected $fillable=['id','order_id','receiver_id','donor_id',];
}
