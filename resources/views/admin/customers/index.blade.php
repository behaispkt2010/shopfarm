@extends('layouts.admin')
@section('title', 'Danh sách Khách hàng ')
@section('pageHeader','Danh sách khách hàng ')
@section('detailHeader','danh sách')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group label-floating">

                                <label class="control-label" for="addon2">Tên Khách hàng / Mã kho / Số điện thoại</label>

                                <div class="input-group text-center">
                                    <input type="text" id="addon2" class="form-control">
                                      <span class="input-group-btn">
                                        <button type="button" class="btn btn-fab btn-fab-mini">
                                            <i class="material-icons">search</i>
                                        </button>
                                      </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        </div>

                        <div class="clearfix"></div>

                        @for($i=0;$i<9;$i++)
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details box-detail">

                                <div class="well box_1">


                                    <div class="img-product-view">
                                        <img src="{{url('/')}}/images/1.png" alt="" class="img-circle img-responsive"
                                             data-pin-nopin="true">
                                    </div>
                                    <div class="col-sm-12 " >
                                        <a href="{{route('customers.create')}}">
                                            <h4 class="cod"><i> #000{{$i}}</i></h4>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <ul class="list-unstyled">
                                                        <li>Tên: Nguyễn Văn A{{$i}}</li>
                                                        <li>Email: A@gmail.com</li>
                                                        <li>SDT: 01662456843</li>
                                                        <li>Địa chỉ: Hồ chí Minh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-12 text-center">
                                        {{--<a href="#"  target="_blank" class="btn btn-primary btn-xs" >--}}
                                        {{--<i class="fa fa-eye" aria-hidden="true"></i> Xem--}}
                                        {{--</a>--}}

                                        <a href="{{route('warehouse.create')}}"
                                           class="btn btn-raised btn-primary btn-xs">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa
                                        </a>
                                        <a href="" class="btn  btn-raised btn-danger btn-xs">
                                            <i class="fa fa-times" aria-hidden="true"></i> xóa
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection