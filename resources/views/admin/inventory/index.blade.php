@extends('layouts.admin')
@section('title', 'Tồn kho')
@section('pageHeader','Tồn kho sản phẩm ')
@section('detailHeader','kiểm tra tồn kho')
@section('add_styles')
    @endsection
@section('content')
    <div class="row top-right">

            <div class="x_panel">
                <div class="x_content">
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
    <div class="row">

        <div class="col-md-12">
            <div class="">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                        </div>

                        <div class="clearfix"></div>

                        @for($i=0;$i<9;$i++)
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details product-detail">

                                <div class="well box_1">


                                    <div class="img-product-view">
                                        <img src="{{url('/')}}/images/sp.jpg" alt="" class="img-circle img-responsive"
                                             data-pin-nopin="true">
                                    </div>
                                    <div class="col-sm-12 " data-toggle="modal" data-target=".modal-product-inventory">
                                            <h4 class="cod"><i>Gạo lức (MD001)</i></h4>
                                            <div class="col-xs-12">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-bar-chart" aria-hidden="true"></i>100 tồn kho</li>
                                                    <li><i class="fa fa-database"></i> Chủ Kho 1
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
                                        <button  class="btn btn-raised btn-primary btn-xs" data-toggle="modal" data-target=".modal-product-inventory">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Kiểm kho
                                        </button>

                                    </div>
                                </div>
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-product-inventory" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-product-inventory">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Gạo lức (MD001)</h4>
                </div>
                <div class="modal-body sroll">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Tồn kho hiện tại: </span><span class="number-inventory">2000</span>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label" for="focusedInput2"> Kiểm thực tế</label>
                            <input class="form-control" id="focusedInput2" type="number">
                        </div>
                        <div class="form-group">
                            <span>Hiệu chỉnh: </span><span class="number-inventory">+2</span>
                        </div>
                        <div class="form-group">
                            <div class="form-group label-floating">
                                <label class="control-label" for="focusedInputnote">Nguyên nhân hiệu chỉnh</label>
                                <textarea class="form-control" id="focusedInputnote"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-primary">Lưu hiệu chỉnh</button>
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

