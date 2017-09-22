<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpMenu extends Model
{
    protected $table = 'help_menu';
    protected $fillable = ['text','parent_id','link'];
}
