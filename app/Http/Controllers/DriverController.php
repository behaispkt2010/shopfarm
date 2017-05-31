<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DriverRequest;
use App\Driver;
use Yajra\Datatables\Datatables;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AjaxCreateTransport(DriverRequest $request) {
        $data = $request->all();
        $driver = Driver::create($data);
        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully'
        );
        return \Response::json($response);
    }
    public function AjaxGetDataTransport(Request $request) {
        $driver = Driver::find($request->get('id_select_transport'));
        $response = array(
            'type_driver' => $driver->type_driver,
            'name_driver' => $driver->name_driver,
            'phone_driver' => $driver->phone_driver,
            'number_license_driver' => $driver->number_license_driver
        );
        return \Response::json($response);
    }
    public function index()
    {
        $driver = Driver::get();
        $data = [
            'driver' => $driver,
            'type'  => 'driver'
        ];
        return view('admin.driver.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.driver.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DriverRequest $request)
    {
        $data = $request->all();
        Driver::create($data);
        return redirect('admin/driver/')->with(['flash_level'=>'success','flash_message'=>'Thành công']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driver = Driver::find($id);
        $data = [
            'id' => $id,
            'driver' => $driver,
        ];
        return view('admin.driver.edit',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);
        $data = [
            'id' => $id,
            'driver' => $driver,
        ];
        return view('admin.driver.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DriverRequest $request, $id)
    {
        $data = $request->all();
        $driver = Driver::find($id);
        $driver->update($data);
        return redirect('admin/driver/')->with(['flash_level'=>'success','flash_message'=>'Lưu thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $driver =  Driver::destroy($id);
        if(!empty($driver)) {
            return redirect('admin/driver/')->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành công']);
        }
        else{
            return redirect('admin/driver/')->with(['flash_level' => 'danger', 'flash_message' => 'Chưa thể xóa']);
        }
    }
    public function data()
    {
        $driver = Driver::get()
            ->map(function ($driver) {
                return [
                    'id' => $driver->id,
                    'type_driver' => $driver->type_driver,
                    'name_driver' => $driver->name_driver,
                    'phone_driver' => $driver->phone_driver,
                    'number_license_driver' => $driver->number_license_driver,
                ];
            });

        return Datatables::of($driver)
            ->add_column('actions',
                '<a class = "btn-xs btn-info" href="{{route(\'driver.edit\',[\'id\' => $id])}}" style="margin-right: 5px;display: inline"><i class="fa fa-pencil"  aria-hidden="true"></i></a>
                            <form action="{{route(\'driver.destroy\',[\'id\' => $id])}}" method="post" class="form-delete" style="display: inline">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="text" class="hidden" value="{{$id}}">
                                 {{method_field("DELETE")}}
                           <a type="submit" class = "btn-xs btn-danger" name ="delete_modal" style="display: inline-block"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </form>')
            ->remove_column('id')
            ->make();
    }
}
