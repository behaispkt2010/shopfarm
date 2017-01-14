<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','code','price_in', 'price_out','gram','min_gram','inventory','inventory_num','kho','title_seo', 'slug', 'category','content','description','image','author_id','status'];

}
