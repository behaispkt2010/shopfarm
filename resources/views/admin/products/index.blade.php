@extends('layouts.admin')
@section('title', 'Danh sách sản phẩm ')
@section('pageHeader','Danh sách sản phẩm ')
@section('detailHeader','danh sách')
@section('rightHeader')
    <a href="{{route('products.create')}}" class="btn btn-raised btn-warning btn-md">
        <i class="fa fa-plus" aria-hidden="true"></i> Tạo mới
    </a>
    @endsection
    @section('add_styles')
            <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="{{asset('selectize.default.css')}}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <ul class="tab-fill">
                                <li class="active"><a href="#">Mới tạo</a><span style="background-color: #3FB079"
                                                                                class="ng-binding">0</span></li>
                                <li><a href="#">Category 1</a><span style="background-color: #EEB390"
                                                                    class="ng-binding">0</span></li>
                                <li><a href="#">Category 2</a><span style="background-color: #2B8388"
                                                                    class="ng-binding">0</span></li>
                                <li><a href="#">Category 3</a><span style="background-color: #35468A"
                                                                    class="ng-binding">0</span></li>

                            </ul>
                        </div>
                    </div>
                    {{--<div class="clearfix"></div>--}}
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select id="select-ck" class="form-control" data-placeholder="chọn kho">
                                    <option></option>
                                    <option value="2"> kho 1</option>
                                    <option value="2"> kho 2</option>
                                    <option value="3"> kho 3</option>
                                    <option value="4"> kho 4</option>
                                    <option value="2"> kho 2</option>
                                    <option value="3"> kho 3</option>
                                    <option value="4"> kho 4</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select id="select-cate" class="form-control" data-placeholder="chọn danh mục">
                                    <option></option>
                                    <option value="1"> bơ</option>
                                    <option value="2"> khoai</option>
                                    <option value="3"> cải</option>
                                    <option value="4"> mì</option>
                                    <option value="1"> bơ</option>
                                    <option value="2"> khoai</option>
                                    <option value="3"> cải</option>
                                    <option value="4"> mì</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group label-floating">

                                <label class="control-label" for="addon2">Tên sản phẩm / Mã sản phẩm</label>

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

                        @for($i=0;$i<10;$i++)
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details product-detail">

                                <div class="well box_1">
                                    <div class="img-product-view">
                                        <img src="{{url('/')}}/images/sp.jpg" alt="" class="img-circle img-responsive"
                                             data-pin-nopin="true">
                                    </div>
                                    <div class="col-sm-12" data-toggle="modal"
                                         data-target=".modal-product">

                                        <h4 class="cod"><i>Gạo lức (MD001)</i></h4>


                                        <div class="col-xs-12">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-bar-chart" aria-hidden="true"></i>100 tồn kho</li>
                                                <li><i class="fa fa-database"></i> Chủ Kho 1
                                                </li>
                                                <li><i class="fa fa-usd"></i> <span
                                                            class="box-money"> mua vào: 150.000 VNĐ </span></li>
                                                <li><i class="fa fa-usd"></i> <span
                                                            class="box-money"> bán ra: 200.000 VNĐ</span></li>
                                                <li><i class="fa fa-balance-scale" aria-hidden="true"></i> Ít nhất: 20kg
                                                </li>
                                                <li><i class="fa fa-archive" aria-hidden="true"></i> Bơ</li>
                                                <li><i class="fa fa-calendar"></i> 20/11/2016</li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="col-xs-12 text-center">
                                        {{--<a href="#"  target="_blank" class="btn btn-primary btn-xs" >--}}
                                        {{--<i class="fa fa-eye" aria-hidden="true"></i> Xem--}}
                                        {{--</a>--}}
                                        <a href="{{route('products.create')}}"
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


    <div class="modal fade modal-product" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-tracking">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Cập nhật: Gạo lức (MD001)</h4>
                </div>
                <div class="modal-body sroll">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label" for="focusedInput2"> Giá mua</label>
                                <input class="form-control" id="focusedInput2" type="number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label" for="focusedInput2"> Giá đăng bán</label>
                                <input class="form-control" id="focusedInput2" type="number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label" for="focusedInput2"> số lượng</label>
                                <input class="form-control" id="focusedInput2" type="number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">

                                <select id="select-ncc" class="form-control" data-placeholder="Nhà cung cấp">
                                    <option></option>
                                    <option>kho 1</option>
                                    <option>kho 2</option>
                                    <option>kho 3</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-primary">Nhập</button>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('add_scripts')
    <script src="{{asset('js/selectize.js')}}"></script>
    <!-- Select2 -->
    <script>
        $('#select-ck,#select-cate,#select-ncc').selectize({
            create: true,
            sortField: 'text'
        });
    </script>



@endsection

