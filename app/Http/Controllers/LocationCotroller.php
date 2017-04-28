<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LocationGps;

class LocationCotroller extends Controller
{
    /*public function getLocation(){
        return View('welcome');

    }*/
    public function getMap(){
        $location = LocationGps::get();
        dd($location);
        return View('admin.partial.maps',compact('location'));

    }
    public function getAdd(){
        return View('add');
    }
    public function postAdd(Request $request){
        $idUser= $request->get('id_user');
        $lat= $request->get('lat');
        $lon= $request->get('lon');
//        $address= $request->get('address');
//        $description= $request->get('description');
        $isExistuser = LocationGps::where('id_user',$idUser)->first();
        if(count($isExistuser) == 0) {
            $location = new LocationGps();
            $location->id_user = $idUser;
            $location->lat = $lat;
            $location->lon = $lon;
//            $location->address = $address;
//            $location->description = $description;
            $location->save();
        }
        else{
//            dd($isExistuser);
            $location = LocationGps::find($isExistuser->id);
            $location->lat = $lat;
            $location->lon = $lon;
//            $location->address = $address;
//            $location->description = $description;
            $location->save();
        }

        return View('add');

    }
}
