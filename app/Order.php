<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['time_order','status','customer_id','note','status_pay','type_pay','received_pay','remain_pay','type_driver','name_driver','phone_driver','number_license_driver','author_id'];
}
