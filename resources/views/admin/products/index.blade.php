@extends('layouts.admin')
@section('title', 'Danh sách sản phẩm ')
@section('pageHeader','Danh sách sản phẩm ')
@section('detailHeader','danh sách')
@section('new-btn')
    <a href="{{route('products.create')}}" class="btn btn-warning btn-fab">
        <i class="fa fa-plus material-icons new-btn" aria-hidden="true"></i>
    </a>
    @endsection
    @section('add_styles')
            <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="{{asset('selectize.default.css')}}">
@endsection
@section('content')
    <div class="row top-right">

            <div class="x_panel">
                <form action="" method="GET">
                <div class="x_content">
                    {{--<div class="clearfix"></div>--}}

                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select id="select-ck" class="form-control" name="kho" data-placeholder="chọn kho">
                                    <option value="0" >Tất cả kho</option>
                                    @foreach($wareHouses  as $wareHouse)
                                        <option value="{{$wareHouse->id}}" @if(Request::get('kho')==$wareHouse->id) selected @endif>#{{$wareHouse->id}}({{$wareHouse->name}})</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select id="select-cate" class="form-control" name="category" data-placeholder="chọn danh mục">
                                    <option value="0" >Tất cả</option>
                                    @foreach($category  as $itemCategory)
                                        <option value="{{$itemCategory->id}}" @if(Request::get('category')==$itemCategory->id) selected @endif>{{$itemCategory->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group label-floating">

                                <label class="control-label" for="addon2">Tên sản phẩm / Mã sản phẩm</label>

                                <div class="input-group text-center">
                                    <input type="text" id="addon2" class="form-control" name="name" value="{{Request::get('name')}}">
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
                    </form>
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
                    @if(count($product) != 0)
                    @foreach($product as $itemProduct)
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details product-detail">

                                <div class="well box_1">
                                    <div class="img-product-view">
                                        <img src="{{url('/')}}/{{$itemProduct->image}}" alt="" class="img-circle img-responsive"
                                             data-pin-nopin="true">
                                    </div>
                                    <div class="col-sm-12" data-toggle="modal"
                                         data-target=".modal-product">

                                        <h4 class="cod"><i>{{$itemProduct->title}} ({{$itemProduct->code}})</i></h4>


                                        <div class="col-xs-12">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-bar-chart" aria-hidden="true"></i>100 tồn kho</li>
                                                <li><i class="fa fa-database"></i> Chủ Kho #{{$itemProduct->kho}}
                                                </li>
                                                <li><i class="fa fa-usd"></i> <span
                                                            class="box-money"> Mua vào: {{$itemProduct->price_in}} VNĐ </span></li>
                                                <li><i class="fa fa-usd"></i> <span
                                                            class="box-money"> Bán ra: {{$itemProduct->price_out}} VNĐ</span></li>
                                                <li><i class="fa fa-balance-scale" aria-hidden="true"></i> Ít nhất: {{$itemProduct->min_gram}} gram
                                                </li>
                                                <li><i class="fa fa-archive" aria-hidden="true"></i> {{\App\CategoryProduct::getNameCateById($itemProduct->category)}}</li>
                                                <li><i class="fa fa-calendar"></i> {{$itemProduct->updated_at->format('d/m/Y')}}</li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="col-xs-12 text-center">
                                        {{--<a href="#"  target="_blank" class="btn btn-primary btn-xs" >--}}
                                        {{--<i class="fa fa-eye" aria-hidden="true"></i> Xem--}}
                                        {{--</a>--}}
                                        <a href="{{route('products.edit',['id' => $itemProduct->id])}}"
                                           class="btn btn-raised btn-primary btn-xs">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa
                                        </a>
                                        <form action="{{route('products.destroy',['id' => $itemProduct->id])}}" method="post" class="form-delete" style="display: inline">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="text" class="hidden" value="{{$itemProduct->id}}">
                                            {{method_field("DELETE")}}
                                            <a type="submit" class = "btn btn-raised  btn-xs btn-danger" name ="delete_modal" style="display: inline-block"><i class="fa fa-times" aria-hidden="true"></i> Xóa</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @else
                        <div>không tìm thấy dữ liệu</div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.partial.modal_delete')
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
                                <label class="control-label" for="focusedInput2"> Nhà cung cấp</label>
                                <input class="form-control" id="focusedInput2" type="text">
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

