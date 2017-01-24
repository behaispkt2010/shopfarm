<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = ['key','value'];
    static public function getValue($key){
        $s = Setting::where('key',$key)->first();
        if(empty($s))
            $s='';
        else
            $res=$s->value;
        return $res;
    }
}
