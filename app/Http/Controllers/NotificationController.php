<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $arrNotification = Notification::leftjoin('users','notification.author_id','=','users.id')
            ->leftjoin('ware_houses','ware_houses.user_id','=','notification.author_id')
            ->selectRaw('users.* ')
            ->selectRaw('ware_houses.* ')
            ->selectRaw('notification.created_at,notification.content,notification.levelkho')
            ->orderBy('notification.id','DESC')
            ->get();
        /*echo "<pre>";
        print_r($arrNotification);
        echo "</pre>";*/
        $data = [
            'arrNotification' => $arrNotification
        ];
        return view('admin.notification.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
