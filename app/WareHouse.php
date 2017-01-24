<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{
    protected $fillable = ['user_id','name_company','address','mst','ndd','stk','level'];


}
