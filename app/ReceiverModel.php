<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceiverModel extends Model
{
    protected $table='receiver';
    protected $primaryKey = 'id';
    protected $fillable=['id','fk_receiver_id','needtype','subcategory','quantity','needdate','status',];
}
