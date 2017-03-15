<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notification';
    protected $fillable = ['keyname','title','content', 'author_id', 'orderID_or_productID','roleview','is_read'];
    public static function GetNotify($strUserID){
        $join = Notification::leftjoin('users','notification.author_id','=','users.id')
            ->leftjoin('ware_houses','ware_houses.user_id','=','notification.author_id')
            ->where('notification.roleview',$strUserID)
            ->selectRaw('users.* ')
            ->selectRaw('ware_houses.* ')
            ->selectRaw('notification.created_at,notification.keyname,notification.orderID_or_productID,notification.title,notification.content,notification.roleview,notification.author_id')
            ->orderBy('notification.id','DESC')
            ->take(5)
            ->get();
        return $join;
    }
    public static function GetNotifyAdmin(){
        $view = Util::$roleviewAdmin;
        $arrNotify = Notification::leftjoin('users','notification.author_id','=','users.id')
            ->leftjoin('ware_houses','ware_houses.user_id','=','notification.author_id')
            ->where('notification.roleview',$view)
            ->selectRaw('users.* ')
            ->selectRaw('ware_houses.* ')
            ->selectRaw('notification.created_at,notification.keyname,notification.orderID_or_productID,notification.title,notification.content,notification.roleview,notification.author_id')
            ->orderBy('notification.id','DESC')
            ->take(5)
            ->get();
        return $arrNotify;
    }
}
