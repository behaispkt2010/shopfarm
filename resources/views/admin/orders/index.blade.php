@extends('layouts.admin')
@section('title', 'Quản lý đơn hàng')
@section('pageHeader','Quản lý đơn hàng')
@section('detailHeader','danh sách')
@section('new-btn')
    <a href="{{route('orders.create')}}" class="btn btn-warning btn-fab">
        <i class="fa fa-plus material-icons new-btn" aria-hidden="true"></i>
    </a>
@endsection
@section('content')
    <div class="row top-right">

        <div class="x_panel">
            <div class="x_content">
                {{--<div class="row">--}}
                    {{--<div class="col-md-12 col-sm-12 col-xs-12 text-center">--}}
                        {{--<ul class="tab-fill">--}}
                            {{--<li class="show-menu active"><a href="{!! url('/') !!}/admin/orders">Tất cả</a><span--}}
                                        {{--style="background-color: #9C27B0"--}}
                                        {{--class="ng-binding">{!! $arrCountOrderByStatus["all"] !!}</span></li>--}}
                            {{--<li class="show-menu"><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/0">Mới tạo</a><span--}}
                                        {{--style="background-color: #AEEA00"--}}
                                        {{--class="ng-binding">{!! $arrCountOrderByStatus["new"] !!}</span></li>--}}
                            {{--<li class="show-menu"><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/1">Chưa tiếp nhận</a><span--}}
                                        {{--style="background-color: #2196F3"--}}
                                        {{--class="ng-binding">{!! $arrCountOrderByStatus[0] !!}</span></li>--}}
                            {{--<li class="show-menu"><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/2">Đã tiếp nhận</a><span--}}
                                        {{--style="background-color: #03A9F4"--}}
                                        {{--class="ng-binding">{!! $arrCountOrderByStatus[1] !!}</span></li>--}}
                            {{--<li class="show-menu"><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/4">Chuyển chủ kho</a><span--}}
                                        {{--style="background-color: #0097A7"--}}
                                        {{--class="ng-binding">{!! $arrCountOrderByStatus[2] !!}</span></li>--}}
                            {{--<li class="show-menu other-item-button pst-tootip" style="">--}}
                                {{--Trạng thái khác--}}
                                {{--<span class="glyphicon glyphicon-menu-down"></span>--}}
                                {{--<!-- ngIf: (orderByStatus.currentTutorialID == 4) -->--}}
                                {{--<div class="other-item-list">--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/5">Đang thu gom</a><span style="background-color: #009688"--}}
                                                                                                                             {{--class="ng-binding">{!! $arrCountOrderByStatus[3] !!}</span></li>--}}
                                        {{--<li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/6">Đang sơ chế</a><span style="background-color: #1DE9B6"--}}
                                                                                                                            {{--class="ng-binding">{!! $arrCountOrderByStatus[4] !!}</span></li>--}}
                                        {{--<li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/7">Đang đóng gói</a><span style="background-color: #4CAF50"--}}
                                                                                                                              {{--class="ng-binding">{!! $arrCountOrderByStatus[5] !!}</span></li>--}}
                                        {{--<li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/8">Đã xuất kho</a><span style="background-color: #8BC34A"--}}
                                                                                                                            {{--class="ng-binding">{!! $arrCountOrderByStatus[6] !!}</span></li>--}}
                                        {{--<li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/9">Chuyển hàng</a><span style="background-color: #CDDC39"--}}
                                                                                                                                {{--class="ng-binding">{!! $arrCountOrderByStatus[7] !!}</span></li>--}}
                                        {{--<li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/10">Đã giao xong</a><span style="background-color: #64DD17"--}}
                                                                                                                              {{--class="ng-binding">{!! $arrCountOrderByStatus[8] !!}</span></li>--}}
                                        {{--<li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/10">Hàng bị lỗi</a><span style="background-color: #FF9800"--}}
                                                                                                                              {{--class="ng-binding">{!! $arrCountOrderByStatus[9] !!}</span></li>--}}
                                        {{--<li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/11">Trả hàng</a><span style="background-color: #DD2C00"--}}
                                                                                                                                   {{--class="ng-binding">{!! $arrCountOrderByStatus[10] !!}</span></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{----}}
                    {{--</div>--}}
                    {{--<div class="tab-fill visible-xs">--}}
                        {{--<select name="" id="">--}}
                            {{--<option value="" href="{!! url('/') !!}/admin/orders">Tất cả ({{ $arrCountOrderByStatus["all"] }})</option>--}}
                            {{--<option value="" href="{!! url('/') !!}/admin/orders/getOrderByStatus/0">Mới tạo ({{ $arrCountOrderByStatus["new"] }})</option>--}}
                            {{--@foreach($arrOrderByStatus as $key=>$itemOrderByStatus)--}}
                                {{--<option value="" href="{{ url('/') }}/admin/orders/getOrderByStatus/{{$itemOrderByStatus->id}}">{{$itemOrderByStatus->name}} ( {{ $arrCountOrderByStatus[$key] }} )</option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="clearfix"></div>
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                            <div class="form-group label-floating">

                                <label class="control-label" for="addon2">Số điện thoại / Tên khách hàng</label>

                                <div class="input-group text-center">
                                    <input type="text" id="addon2" class="form-control" name="q" value="{{Request::get('q')}}">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-fab btn-fab-mini">
                                            <i class="material-icons">search</i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
                    @if(count($arrAllOrders) != 0)
                        @foreach($arrAllOrders as $arrOrders)
                            <?php
                            $priceTotal = 0;
                            ?>
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                <div class="well box_1">
                                    <div class="box-status"
                                         style="background-color: @if($arrOrders->status==0) #8bc34a @else @foreach($arrOrderByStatus as $itemOrderStatus) @if(@$arrOrders->status==$itemOrderStatus->id) {{ $itemOrderStatus->color }} @endif @endforeach @endif ;">
                                        <p class="text-center status-title">@if($arrOrders->status==0) Mới tạo @else @foreach($arrOrderByStatus as $itemOrderStatus) @if(@$arrOrders->status==$itemOrderStatus->id) {{ $itemOrderStatus->name }} @endif @endforeach @endif</p>
                                    </div>
                                    <div class="col-sm-12" data-toggle="modal" data-target=".modal-tracking" href="{{route('orders.show',['id' => $arrOrders->id])}}">
                                        <h4 class="cod"><i>#{{\App\Util::OrderCode( $arrOrders->id)}}</i></h4>

                                        <div class="col-xs-12">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-user"></i> {{ $arrOrders->name }} </li>
                                                <li><i class="fa fa-building"></i>
                                                    <span style="">{{ $arrOrders->address }}</span>
                                                </li>
                                                <li><i class="fa fa-phone"></i> {{$arrOrders->phone_number }}</li>
                                                <li><i class="fa fa-usd"></i> <span class="box-money">{!! number_format(\App\ProductOrder::getSumOrder($arrOrders->id)) !!} VNĐ</span></li>
                                                <li><i class="fa fa-database"></i> Thuộc Chủ Kho #{{\App\Util::UserCode($arrOrders->kho_id)}}
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 text-center">
                                        <button type="button" class="btn btn-raised btn-success btn-xs" data-toggle="modal"
                                                data-target=".modal-tracking" href="{{route('orders.show',['id' => $arrOrders->id])}}">
                                            <i class="fa fa-eye" aria-hidden="true"></i> Xem chi tiết
                                        </button>
                                        <a href="{{route('orders.edit',['id' => $arrOrders->id])}}" class="btn btn-raised btn-primary btn-xs">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @else
                            <div>Không tìm thấy dữ liệu</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--modal--}}
    <div class="modal fade modal-tracking" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-tracking">
            <div class="modal-content">

            </div>
        </div>
    </div>

    @endsection

    @section('add_scripts')
            <!-- Datatables -->
<script type="text/javascript">
    function MenuResize(){

    }
    $(window).resize(function() {
        var width = $(window).width();

    });
</script>


@endsection

