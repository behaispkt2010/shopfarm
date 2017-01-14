<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankWareHouse extends Model
{
    protected $fillable = ['ware_id','bank', 'province','card_number','card_name','check'];
}
