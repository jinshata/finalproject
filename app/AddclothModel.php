<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddclothModel extends Model
{
    protected $table ='addcloth';
    protected $primaryKey ='clothid';
    protected $fillable=['clothid','clothcategory','description','quantity','image',

];
}
