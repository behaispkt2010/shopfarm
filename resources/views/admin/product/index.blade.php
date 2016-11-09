@extends('layouts.admin')
@section('title', 'Sản phẩm')
@section('pageHeader','Sản phẩm')
@section('detailHeader','quản lý danh sách sản phẩm')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Sản phẩm<small>tất cả</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">

                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th>
                                <div class="icheckbox_flat-green" style="position: relative;">
                                    <input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;">
                                    </div>
                            </th>
                            <th class="column-title">Hình ảnh </th>
                            <th class="column-title">Mã sản phẩm </th>
                            <th class="column-title">Tên sản phẩm </th>
                            <th class="column-title">Tồn kho</th>
                            <th class="column-title">Loại </th>
                            <th class="column-title">Nhà sản xuất</th>
                            <th class="column-title">Giá </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($products as $item)

                        <tr class="even pointer">
                            <td class="a-center ">
                                <div class="icheckbox_flat-green" style="position: relative;">
                                    <input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;">
                                   </div>
                            </td>
                            <td class=" "><img style="max-width: 50px;max-height: 50px;margin: 0 auto;" src="{{$item['images'][0]['src']}}" alt="img-responsive"></td>
                            <td class=" ">{{$item['variants']['0']['sku']}}</td>
                            <td class=" ">{{$item['title']}}</td>
                            <td class=" ">{{$item['variants']['0']['inventory_quantity']}}</td>
                            <td class=" ">{{$item['product_type']}}</td>
                            <td class=" ">{{$item['vendor']}}</td>
                            <td class="a-right a-right ">{{$item['variants']['0']['price']}} VNĐ</td>
                            <td class=" last"><a href="#">Xem</a> <a class="red" href="{{url('/product/delete?id=').$item['id']}}">Xóa</a>
                            </td>
                        </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection