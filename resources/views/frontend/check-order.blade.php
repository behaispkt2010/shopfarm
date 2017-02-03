@extends('layouts.frontend')
@section('title', 'Trang chủ')
@section('description','')
@section('add_styles')
    {{-- --}}
@endsection
@section('content')
        <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
<div class="page_wrapper">

    <div class="container">
    <div class="row">

<h3 class="text-center">Đơn hàng #{{$order->id}}</h3>
        <br>
        <div class="tracking">
            <div class="col-sm-12 col-xs-12 fix-padlr cl-center">

                <ul class="ul-date-car">

                    @foreach($orderStatus as $itemOrderStatus)
                    <li class="date-past @if($itemOrderStatus->id ==$order->status) active @endif">


                        <img src="{{url('/')}}{{$itemOrderStatus->image}}" class="icon-tracking" alt="">
                        <div class="clear"></div>
                            @if($itemOrderStatus->id ==$order->status)
                            <span>{{$order->updated_at->format('d-m-Y')}}</span>
                            <div class=" fix-status">{{$itemOrderStatus->name}}</div>
                            @endif

                    </li>
                        @endforeach



                </ul>
            </div>
            <div class="clear"></div>
            <br>
            <br>
            <div class="col-md-12 con-tracking ">
                <div class="col-sm-6 col-xs-12 fix-padlr">
                    {{--<p class="text-center"><i class="ic-tracking ic-xe"></i></p>--}}
                    <h2>Thông tin đặt hàng</h2>
                    <table class="table list-order table-curved product-list">
                        <tbody>
                        <?php $total = 0; ?>
                        @foreach($productOrder as $item)
                        <tr>
                            <th><img src="{{url('/')}}{{$item->image}}"
                                     class="img-responsive img-thumbnail"
                                     style="max-width: 50px;" alt=""></th>
                            <td><span class="name-product"><a href="">{{$item->name}} (#{{$item->id_product}})</a></span>
                            </td>
                            <td><span class="price-product">{{$item->price}} đ </span></td>
                            <td><span class="sl">x {{$item->num}} </span></td>
                            <td><span class="total"> {{$item->price * $item->num}} đ</span></td>
                        </tr>
                            <?php $total =  $total + ($item->price * $item->num); ?>
                        @endforeach

                        <tr>
                            <th></th>
                            <td>
                            </td>
                            <td></td>
                            <td>Tổng: </td>
                            <td><span class="total">  {{$total}} đ</span></td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="clear"></div>
                    <br>
                    <p class="row">
                        <div class="col-md-3">
                            Thanh toán:
                        </div>
                        <div class="col-md-8">
                            <p>@if($order->status_pay==0) Chưa thanh toán
                                @elseif($order->status_pay==1) Đã thanh toán
                                @elseif($order->status_pay==2) Đã đặt cọc
                                   @endif
                            </p>
                        </div>
                    </p>
                    <p class="row">
                        <div class="col-md-3">
                            Vận chuyển:
                        </div>
                        <div class="col-md-8">
                            <p>{{$order->type_driver}}</p>
                        </div>
                    </p>
                    <p class="row">
                        <div class="col-md-3">
                            Thông tin tài xế:
                        </div>
                        <div class="col-md-8">
                            <div>Tên: {{$order->name_driver}}</div>
                            <div>SĐT: {{$order->phone_driver}}</div>
                            <div>Biển số xe: {{$order->number_license_driver}}</div>
                        </div>
                    </p>

                    <p class="row">
                        <div class="col-md-3">
                            Ghi chú:
                        </div>
                        <div class="col-md-8">
                            <p class="note-order">{{$order->note}}</p>
                        </div>
                    </p>
                </div>
                <div class="col-sm-2 col-xs-12 fix-padlr cl-center">

                </div>
                <div class="col-sm-4 col-xs-12 fix-padlr">
                    {{--<p class="text-center"><i class="ic-tracking ic-co"></i></p>--}}
                    <h2>Thông tin nhận hàng</h2>
                    <p><i class="ic-tracking ic-nguoidung"></i> {{$customer->name}} </p>
                    <p><i class="ic-tracking ic-diadiem"></i> {{$customer->address}} </p>

                    <p><i class="ic-tracking ic-dienthoai"></i> {{$customer->phone_number}} </p>


                </div>

            </div>




        </div>
    </div>

</div>
    </div>
    @endsection