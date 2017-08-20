<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $fillable = ['user_id', 'name','address','province','fanpage_fb','mst','ndd','stk','image_company','quangcao','confirm','time_confirm','time_confirm_bonus','time_quangcao','time_quangcao_bonus','created_confirm','user_test','created_time_quangcao','date_end_test','time_active'];
}
