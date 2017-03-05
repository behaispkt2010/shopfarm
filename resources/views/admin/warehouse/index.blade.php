@extends('layouts.admin')
@section('title', 'Quản lý Chủ kho ')
@section('pageHeader','Quản lý chủ kho ')
@section('detailHeader','danh sách')
@section('new-btn')
    <a href="{{route('warehouse.create')}}" data-placement="top" title="" data-original-title="Tạo mới" class="btn btn-warning btn-fab">
        <i class="fa fa-plus material-icons new-btn" aria-hidden="true"></i>
    </a>
@endsection
@section('content')
    <div class="row top-right">

        <form action="" method="GET">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                            <div class="form-group label-floating">

                                <label class="control-label" for="addon2">Tên chủ kho | Mã kho | Số điện thoại</label>

                                <div class="input-group text-center">
                                    <input type="text" id="addon2" name="q" class="form-control" value="{{Request::get('q')}}">
                                      <span class="input-group-btn">
                                        <button type="submit" class="btn btn-fab btn-fab-mini">
                                            <i class="material-icons">search</i>
                                        </button>
                                      </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        </div>

                        <div class="clearfix"></div>

                        @foreach($wareHouse as $itemWareHouse)
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details box-detail">
                                <div class="well box_1">
                                    <div class="img-product-view">
                                        <img src="{{url('/')}}/images/1.png" alt="" class="img-circle img-responsive"
                                             data-pin-nopin="true">
                                    </div>
                                    <div class="col-sm-12 " >
                                        <a href="{{route('warehouse.edit',['id' => $itemWareHouse->ware_houses_id])}}">
                                        <h4 class="cod">#{{$itemWareHouse->id}}</h4>
                                            <div class="row">
                                        <div class="col-xs-12">
                                            <ul class="list-unstyled">
                                                <li>Đại diện: {{$itemWareHouse->name}}</li>
                                                <li>Cấp kho: {{$itemWareHouse->level}}</li>
                                                <li>Dịch vụ: @if ( $itemWareHouse->confirm_kho == 1) ICON XÁC THỰC @endif @if ($itemWareHouse->quangcao == 1) icon quảng cáo @endif</li>
                                                <li>Cấp phép: {{$itemWareHouse->created_at->format('d/m/Y')}}</li>
                                            </ul>
                                        </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-12 text-center">
                                        {{--<a href="#"  target="_blank" class="btn btn-primary btn-xs" >--}}
                                        {{--<i class="fa fa-eye" aria-hidden="true"></i> Xem--}}
                                        {{--</a>--}}

                                        <a href="{{route('warehouse.edit',['id' => $itemWareHouse->ware_houses_id])}}"
                                           class="btn btn-raised btn-primary btn-xs">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa
                                        </a>

                                        <form action="{{route('warehouse.destroy',['id' => $itemWareHouse->ware_houses_id])}}" method="post" class="form-delete" style="display: inline">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="text" class="hidden" value="{{$itemWareHouse->ware_houses_id}}">
                                            {{method_field("DELETE")}}
                                            <a type="submit" class = "btn btn-raised  btn-xs btn-danger" name ="delete_modal" style="display: inline-block"><i class="fa fa-times" aria-hidden="true"></i> Xóa</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partial.modal_delete')


@endsection
    @section('add_scripts')
            <!-- Datatables -->



@endsection

