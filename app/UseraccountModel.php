<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UseraccountModel extends Model
{
    protected $table='user_account';
    protected $primaryKey = 'register_id';
    protected $fillable=['register_id','fk_login_id','fullname','address',
    'gender','contactno','usertype','district','state','country','pincode','status',];
}
