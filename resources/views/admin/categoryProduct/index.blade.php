@extends('layouts.admin')
@section('title', 'Danh sách nhóm sản phẩm ')
@section('pageHeader','Danh sách nhóm sản phẩm ')
@section('detailHeader','Thêm, xóa, sửa')@section('rightHeader')
    <button  class="btn btn-raised btn-warning btn-md" data-toggle="modal"
       data-target=".modal-product-cate">
        <i class="fa fa-plus" aria-hidden="true"></i> Tạo mới
    </button>
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
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group label-floating">

                                <label class="control-label" for="addon2">Tên nhóm sản phẩm</label>

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

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <a href="{{route('products.create')}}">
                                            <h3 class="cod text-center title-cate">Bơ</h3>


                                            <div class="col-xs-12 ol-xs-12">
                                                <ul class="list-unstyled">
                                                    <li>Số sản phẩm: <span class="bold"> 100</span></li>
                                                    <li>Số tồn kho: <span class="bold"> 30</span></li>
                                                    <li>Danh mục cha: <span class="bold"> Các loại đậu</span></li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-12 text-center">
                                        {{--<a href="#"  target="_blank" class="btn btn-primary btn-xs" >--}}
                                        {{--<i class="fa fa-eye" aria-hidden="true"></i> Xem--}}
                                        {{--</a>--}}
                                        <a href=""
                                           class="btn btn-raised btn-info btn-xs">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Xem
                                        </a>
                                        <a href="{{route('products.create')}}"
                                           class="btn btn-raised btn-primary btn-xs">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> sửa
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


    <div class="modal fade modal-product-cate" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-product-cate">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Thêm nhóm sản phẩm</h4>
                </div>
                <div class="modal-body sroll">
                    <div class="form-group">
                        <div class="form-group label-floating">
                            <label class="control-label" for="focusedInput2"> Tên nhóm sản phẩm</label>
                            <input class="form-control" id="focusedInput2" type="text">
                        </div>
                        <div class="form-group">
                            <select id="parent-cate" class="form-control" data-placeholder="Chọn Nhóm cha">
                                <option></option>
                                <option>Các loại đậu</option>
                                <option>Các loại trái cây</option>
                                <option>loại khác</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-group label-floating">
                                <label class="control-label" for="focusedInputnote">Ghi chú</label>
                                <textarea class="form-control" id="focusedInputnote"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-primary">Thêm</button>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('add_scripts')
    <script src="{{asset('js/selectize.js')}}"></script>
    <!-- Select2 -->
    <script>
        $('#select-ck,#select-cate,#parent-cate').selectize({
            create: true,
            sortField: 'text'
        });
    </script>



@endsection


