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
    {{--<link rel="stylesheet" type="text/css" href="{{asset('selectize.default.css')}}">--}}
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
                                    @if(!Auth::user()->hasRole('kho'))

                                    <option value="0" >Chọn kho</option>
                                    @foreach($wareHouses  as $wareHouse)
                                        <option value="{{$wareHouse->id}}" @if(Request::get('kho')==$wareHouse->id) selected @endif>#{{$wareHouse->id}}({{$wareHouse->name}})</option>

                                    @endforeach
                                        @else
                                        <option value="{{Auth::user()->id}}" selected >#{{Auth::user()->id}}</option>
                                    @endif

                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select id="select-cate" class="form-control" name="category" data-placeholder="chọn danh mục">
                                    <option value="0" >Chọn danh mục sản phẩm</option>
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

                                <label class="control-label" for="addon2">Tên sản phẩm | Mã sản phẩm</label>

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
                                        <img src="{{url('/')}}{{$itemProduct->image}}" alt="" class="img-circle img-responsive"
                                             data-pin-nopin="true">
                                    </div>
                                    <div id="update-product"  class="col-sm-12 input-product" data-toggle="modal"
                                         data-target=".modal-product" data-title="{{$itemProduct->title}} (#{{$itemProduct->code}})" data-id="{{$itemProduct->id}}">

                                        <p style="font-size: 20px;" class="cod">{{$itemProduct->title}}</p>
                                        <h4 class="cod">#{{\App\Util::ProductCode($itemProduct->id)}}
                                        </h4>


                                        <div class="col-xs-12">
                                            <ul class="list-unstyled">
                                                <li>Tồn kho: {{ number_format($itemProduct->inventory_num)}}</li>
                                                <li>Chủ Kho # <strong>{{$itemProduct->kho}}</strong></li>
                                                <li><span class="box-money"> Mua vào: {{number_format($itemProduct->price_in)}} VNĐ </span></li>
                                                <li><span class="box-money"> Bán ra: {{number_format($itemProduct->price_out)}} VNĐ</span></li>
                                                <li>Bán tối thiểu: {{$itemProduct->min_gram}} Kg </li>
                                                <li>Danh mục: {{\App\CategoryProduct::getNameCateById($itemProduct->category)}}</li>
                                                <li>Cập nhật: {{$itemProduct->updated_at->format('d/m/Y')}}</li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <a href="#" class="input-product btn btn-raised btn-info btn-xs" data-toggle="modal"
                                           data-target=".modal-product" data-title="{{$itemProduct->title}} (#{{$itemProduct->code}})" data-id="{{$itemProduct->id}}" >
                                        <i class="fa fa-caret-square-o-down" aria-hidden="true"></i> Nhập kho
                                        </a>
                                        <a href="{{route('products.edit',['id' => $itemProduct->id])}}"
                                           class="btn btn-raised btn-primary btn-xs">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Sửa
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
                        <div class="text-center">
                            {{ $product->appends(array('q' => Request::get('q')))->links() }}
                        </div>
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
                    <h4 class="modal-title text-center title" id="myModalLabel"></h4>
                    <input type="hidden" name="id">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                </div>
                <div class="modal-body sroll">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label" for="focusedInput2"> Giá mua</label>
                                <input class="form-control" id="focusedInput2" type="number" name="price_in">
                            </div>
                        </div>
                        {{--<div class="col-md-6">--}}
                            {{--<div class="form-group label-floating">--}}
                                {{--<label class="control-label" for="focusedInput2"> Giá đăng bán</label>--}}
                                {{--<input class="form-control" id="focusedInput2" type="number" name="price_out">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label" for="focusedInput2"> số lượng</label>
                                <input class="form-control" id="focusedInput2" type="number" name="number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label" for="focusedInput2"> Nhà cung cấp</label>
                                <input class="form-control" id="focusedInput2" type="text" name="supplier">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-primary" id="input-product">Nhập</button>
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

    <script>
        $(document).on("click", ".input-product", function () {
            var _self = $(this);
//            alert("ds");
            $('.modal-product input[name="id"]').val(_self.data('id'));
            $('.modal-product .title').text(_self.data('title'));

//            alert(_self.data('inventoryNum'));
        });
    </script>
    <script>
        $('#input-product').on('click', function (e) {
            e.preventDefault();

            var id = $('.modal-product input[name="id"]').val();
            var price_in = $('.modal-product input[name="price_in"]').val();
            var price_out = $('.modal-product input[name="price_out"]').val();
            var number = $('.modal-product input[name="number"]').val();
            var supplier = $('.modal-product input[name="supplier"]').val();

//            var reason = $('.modal-product-cate textarea[name="reason"]').val();
            var _token = $('input[name="_token"]').val();
            if(price_in==""||price_out==""||number==""){
                new PNotify({
                    title: 'Vui lòng nhập thông tin',
                    text: '',
                    type: 'danger',
                    hide: true,
                    styling: 'bootstrap3'
                });
                return false;
            }
//            alert(id);
            $('.loading').css('display','block');
            $.ajax({
                type: "POST",
                url: '{{url('/')}}/product/updateProductAjax',
                data: {id: id, price_in: price_in,price_out: price_out,number: number,supplier: supplier,_token: _token},
                success: function( msg ) {
                    $('.loading').css('display','none');
                  $('.modal-product input[name="price_in"]').val("");
                    $('.modal-product input[name="price_out"]').val("");
                    $('.modal-product input[name="number"]').val("");
                     $('.modal-product input[name="supplier"]').val("");

//                    $('.modal-product-cate textarea[name="reason"]').val("");
//                    alert("Tạo thành công");
                    //show notify
                    new PNotify({
                        title: 'Cập nhật thành công',
                        text: '',
                        type: 'success',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    location.reload();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    //show notify
                    var Data = JSON.parse(XMLHttpRequest.responseText);
                    new PNotify({
                        title: 'Lỗi',
                        text: Data['name'],
                        type: 'danger',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    $('.loading').css('display','none');

                }
            });
        });
    </script>

@endsection

