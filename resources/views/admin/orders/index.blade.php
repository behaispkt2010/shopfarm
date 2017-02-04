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
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <ul class="tab-fill">
                            <li class="show-menu active"><a href="{!! url('/') !!}/admin/orders">Tất cả</a><span
                                        style="background-color: #35468A"
                                        class="ng-binding">{!! $arrCountOrderByStatus["all"] !!}</span></li>
                            <li class="show-menu"><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/0">Mới tạo</a><span
                                        style="background-color: #8bc34a"
                                        class="ng-binding">{!! $arrCountOrderByStatus["new"] !!}</span></li>
                            <li class="show-menu"><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/1">Chưa tiếp nhận</a><span
                                        style="background-color: #EEB390"
                                        class="ng-binding">{!! $arrCountOrderByStatus[0] !!}</span></li>
                            <li class="show-menu"><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/2">Đã tiếp nhận</a><span
                                        style="background-color: #2B8388"
                                        class="ng-binding">{!! $arrCountOrderByStatus[1] !!}</span></li>
                            <li class="show-menu"><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/3">Chờ trả hàng</a><span
                                        style="background-color: #35468A"
                                        class="ng-binding">{!! $arrCountOrderByStatus[2] !!}</span></li>
                            <li class="show-menu"><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/4">Chuyển DH cho Chủ kho</a><span
                                        style="background-color: #EEB390"
                                        class="ng-binding">{!! $arrCountOrderByStatus[3] !!}</span></li>
                            <li class="show-menu other-item-button pst-tootip" style="">
                                Trạng thái khác
                                <span class="glyphicon glyphicon-menu-down"></span>
                                <!-- ngIf: (orderByStatus.currentTutorialID == 4) -->
                                <div class="other-item-list">
                                    <ul>
                                        <li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/5">Đang thu gom</a><span style="background-color: #2B8388"
                                                                              class="ng-binding">{!! $arrCountOrderByStatus[4] !!}</span></li>
                                        <li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/6">Đang sơ chế</a><span style="background-color: #35468A"
                                                                             class="ng-binding">{!! $arrCountOrderByStatus[5] !!}</span></li>
                                        <li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/7">Đang đóng gói</a><span style="background-color: #EEB390"
                                                                               class="ng-binding">{!! $arrCountOrderByStatus[6] !!}</span></li>
                                        <li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/8">Đã xuất kho</a><span style="background-color: #2B8388"
                                                                             class="ng-binding">{!! $arrCountOrderByStatus[7] !!}</span></li>
                                        <li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/9">Đang vận chuyển</a><span style="background-color: #35468A"
                                                                                 class="ng-binding">{!! $arrCountOrderByStatus[8] !!}</span></li>
                                        <li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/10">Đã giao xong</a><span style="background-color: #2B8388"
                                                                              class="ng-binding">{!! $arrCountOrderByStatus[9] !!}</span></li>
                                        <li><a href="{!! url('/') !!}/admin/orders/getOrderByStatus/11">Trả hàng nhập kho</a><span style="background-color: #35468A"
                                                                                   class="ng-binding">{!! $arrCountOrderByStatus[10] !!}</span></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
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
                                    <div ng-switch-when="WaitingToPick" class="box-status ng-scope"
                                         style="background-color: #8bc34a;">
                                        <p class="text-center status-title">Mới tạo</p>
                                    </div>
                                    <div class="col-sm-12" data-toggle="modal" data-target=".modal-tracking" href="{{route('orders.show',['id' => $arrOrders->id])}}">
                                        <h4 class="cod"><i>#{!! $arrOrders->id !!}</i></h4>

                                        <div class="col-xs-12">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-user"></i> @if(!empty($arrAllUser[$arrOrders['customer_id']]->name)){!! $arrAllUser[$arrOrders['customer_id']]->name !!}@endif </li>
                                                <li><i class="fa fa-building"></i>
                                                    <span style="">@if(!empty($arrAllUser[$arrOrders['customer_id']]->address)){!! $arrAllUser[$arrOrders['customer_id']]->address !!}@endif</span>
                                                </li>
                                                <li><i class="fa fa-phone"></i> @if(!empty($arrAllUser[$arrOrders['customer_id']]->phone_number)){!! $arrAllUser[$arrOrders['customer_id']]->phone_number !!}@endif</li>
                                                <li><i class="fa fa-usd"></i> <span class="box-money">@if(!empty($arrAllProductOrder[$arrOrders['id']]->price))@foreach($arrTmpProductOrders as $ProOrder)@if($arrOrders->id == $ProOrder['order_id'])<?php $priceTotal = $priceTotal + $ProOrder['price']; ?> @endif @endforeach{!! number_format($priceTotal) !!} @endif VNĐ</span></li>
                                                <li><i class="fa fa-database"></i> Thuộc Chủ Kho #{{$arrOrders->kho_id}}
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



@endsection

