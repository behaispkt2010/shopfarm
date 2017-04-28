<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationGps extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'lat', 'lon','address', 'description','name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
