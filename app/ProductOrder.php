<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $table = 'product_orders';
    protected $fillable = ['order_id','id_product','price','num'];
}
