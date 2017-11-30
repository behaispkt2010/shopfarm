@extends('layouts.pdf.render')

@section('title')
	ORDERS DETAILS
@stop

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/pdf/orders.css')}}">
<div class="container">
	<div class="row">
		<!-- icon logo Lien -->
			<?php
				$image = "/images/logo-w.png";
			 ?>
			<img src="{!! url('/') !!}/images/logo-w.png" width="100px" style="margin-top:10px;" class="left">
			<label class="w-tit left" style="font-size:10px;"> 
				<h4 class="label-option " align="center">
				</h4> 
			</label>
			<label class="w-tit-center left"> 
				<h2 class="label-option tit-size" align="center">
					Chi tiết Đơn hàng {{ \App\Util::OrderCode($id) }}
				</h2>
			</label>
			<label class="w-tit right martop"> 
				
			</label>
	</div>
	<div class="clear"></div>
	<br>
	<div class="row">
        <div class="tracking">
            <div class="col-sm-12 col-xs-12 fix-padlr cl-center">
                <div class="img-car">
                </div>
                <div>
                	@foreach($orderStatus as $itemOrderStatus)
                	@if($itemOrderStatus->id == $arrOrder->status)
                        <span>{{$arrOrder->updated_at->format('d-m-Y')}}</span>
                        <div class="fix-status">{{$itemOrderStatus->name}}</div>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 con-tracking hidden-xs" style="color: #000;">
                <div class="col-md-7 col-sm-6 col-xs-12 fix-padlr">
                    <h2>Thông tin đặt hàng</h2>
                    <table class="table list-order table-curved">
                        <tbody>
                        <?php $total = 0; ?>
                        @foreach($productOrder as $itemProductOrder)
                            <tr class="item-product">
                                <td><span class="name-product"><span>{{$itemProductOrder->title}} ({{ \App\Util::ProductCode($itemProductOrder->id_product) }})</span></span></td>
                                <td><span class="price-product"><span>{!! \App\Util::FormatMoney($itemProductOrder->price_out) !!}</span>  </span></td>
                                <td><span>x </span>{{ $itemProductOrder->num }}</td>
                                <td><span class="total"> <span>{!! \App\Util::FormatMoney(($itemProductOrder->price_out)*($itemProductOrder->num)) !!}</span> </span></td>
                            </tr>
                            <?php $total=$total + (($itemProductOrder->price_out)*($itemProductOrder->num)); ?>
                        @endforeach
                        <tr>
                            {{--<th></th>--}}
                            <td>
                            </td>
                            <td></td>
                            <td>Tổng: </td>
                            <td><span class="total">  {!! \App\Util::FormatMoney($total)!!} </span></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="clear"></div>

                    <div class="row">
                        <div class="col-md-4">
                            Thanh toán:
                        </div>
                        <div class="col-md-8">
                            <p>
                                @if(($arrOrder->type_pay == 1)) Đã thanh toán đầy đủ @elseif($arrOrder->type_pay == 2) Đã đặt cọc @if(!empty($arrOrder->received_pay)){{number_format($arrOrder->received_pay)}} VNĐ @endif @else Chưa thanh toán @endif
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Vận chuyển:
                        </div>
                        <div class="col-md-8">
                            <p>@if(!empty($arrOrder->type_driver)){{$arrOrder->type_driver}}@else{{old('type_driver')}}@endif</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Thông tin tài xế:
                        </div>
                        <div class="col-md-8">
                            <p>Tên: @if(!empty($arrOrder->name_driver)){{$arrOrder->name_driver}}@else{{old('name_driver')}}@endif</p>
                            <p>SĐT: @if(!empty($arrOrder->phone_driver)){{$arrOrder->phone_driver}}@else{{old('phone_driver')}}@endif</p>
                            <p>Biển số xe: @if(!empty($arrOrder->number_license_driver)){{$arrOrder->number_license_driver}}@else{{old('number_license_driver')}}@endif</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            Ghi chú:
                        </div>
                        <div class="col-md-8">

                            <p class="note-order">@if(!empty($arrOrder->note)){{$arrOrder->note}}@else Không có ghi chú @endif</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-4 col-xs-12 fix-padlr">
                    {{--<p class="text-center"><i class="ic-tracking ic-co"></i></p>--}}
                    <h2>Thông tin nhận hàng</h2>
                    <table class="tracking-table">
                        <tbody>
                        <tr>
                            <td><i class="ic-tracking ic-nguoidung"></i></td>
                            <td>@if(!empty($arrOrder->name)){{$arrOrder->name}}@endif</td>
                        </tr>
                        <tr>
                            <td><i class="ic-tracking ic-diadiem"></i></td>
                            <td>@if(!empty($arrOrder->address)){{$arrOrder->address}}@endif</td>
                        </tr>
                        <tr>
                            <td><i class="ic-tracking ic-dienthoai"></i></td>
                            <td>@if(!empty($arrOrder->phone_number)){{$arrOrder->phone_number}}@endif</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            

            <div class=" row hidden-xs">
                <div class="col-md-12 details-tracking ">
                    <label class="title" style=" font-size: 16px; padding-left: 10px;">Chi tiết hành trình</label>
                    <div id="demo0" class="collapse in" style="padding-left: 20px;">
                        <div class="con-details-tracking">

                        @foreach($historyOrder as $itemHistoryOrder)
                            @if($itemHistoryOrder->status==0)
                                <div class="item">
                                    <label style="color: #000;"><span style="color: #000;">{{$itemHistoryOrder->updated_at->format('d-m-Y H:m:s')}}</span> -- <label style="width:180px; color: #000">Khởi tạo đơn hàng </label> -- Người cập nhật: {{ $itemHistoryOrder->username }} | ID: {{ \App\Util::UserCode($itemHistoryOrder->userid) }}</label>
                                </div>
                            @else
                                <div class="item">
                                    <label style="color: #000;"><span style="color: #000;">{{$itemHistoryOrder->updated_at->format('d-m-Y H:m:s')}}</span> -- <label style="width:180px; color: #000">{{$itemHistoryOrder->name}}</label> -- Người cập nhật: {{ $itemHistoryOrder->username }} | ID: {{ \App\Util::UserCode($itemHistoryOrder->userid) }}</label>
                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop