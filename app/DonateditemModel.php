<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonateditemModel extends Model
{
    protected $table='donateditem';
    protected $primaryKey ='donatedid';
    protected $fillable=['donatedid','fk_login_id','food','clothes','toys'];
}
