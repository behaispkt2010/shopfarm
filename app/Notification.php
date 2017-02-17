<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notification';
    protected $fillable = ['content', 'author_id','levelkho'];
    public static function JoinTable(){
        $join = Notification::leftjoin('users','notification.author_id','=','users.id')
            ->leftjoin('ware_houses','ware_houses.user_id','=','notification.author_id')
            ->selectRaw('users.* ')
            ->selectRaw('ware_houses.* ')
            ->selectRaw('notification.created_at,notification.content,notification.levelkho,notification.author_id')
            ->orderBy('notification.id','DESC')
            ->take(4)
            ->get();
        return $join;
    }
}
