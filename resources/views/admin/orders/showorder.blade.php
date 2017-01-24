<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel='shortcut icon' type='image/x-icon' href='{{asset('frontend/images/logo.png')}}'/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    {{--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{asset('plugin/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript">
        var baseURL="{!!url('/')!!}";
    </script>
    {{--ckeditor--}}
    <script src="{{asset('plugin/ckeditor/ckeditor.js')}}" ></script>
    <script src="{{asset('plugin/ckfinder/ckfinder.js')}}" ></script>

    <script src="{{asset('plugin/func_ckfinder.js')}}" ></script>
</head>
<body>

<div class="modal-content" >
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Đơn hàng #{!! $id !!}</h4>
    </div>
    <div class="modal-body sroll">
        <div class="row">

            <div class="tracking">
                <div class="col-sm-12 col-xs-12 fix-padlr cl-center">
                    <div class="img-car">
                    </div>
                    <ul class="ul-date-car">

                        <li class="date-past @if((!empty($arrOrder->status)) && ($arrOrder->status == 1)) active @endif">
                            <span>@if(!empty($arrOrder->time_order)){{$arrOrder->time_order}}@else{{old('time_order')}}@endif</span>

                            <div class=" fix-status" @if((!empty($arrOrder->status)) && ($arrOrder->status == 1)) style="display: block" @else style="display: none" @endif>Chưa tiếp nhận</div>
                            <img src="{{url('/images/find.png')}}" class="icon-tracking b1" alt="">
                        </li>

                        <li class="date-past @if((!empty($arrOrder->status)) && ($arrOrder->status == 2)) active @endif">
                            <span>
                                @foreach($arrHistoryStatusOrders as $HitoryStatus)
                                    @if($HitoryStatus->status == 2)
                                        <?php $tmpTimeCreate = $HitoryStatus['created_at'];
                                        $timetamp = strtotime($tmpTimeCreate);
                                        $timeCreate = date('d/m/Y',$timetamp);
                                        ?>
                                        {!! $timeCreate !!}
                                    @endif
                                @endforeach
                            </span>

                            <div class=" fix-status" @if((!empty($arrOrder->status)) && ($arrOrder->status == 2)) style="display: block" @else style="display: none" @endif>Đã tiếp nhận</div>
                            <img src="{{url('/images/clipboard (1).png')}}" class="icon-tracking b2" alt="">

                        </li>

                        <li class="date-past @if((!empty($arrOrder->status)) && ($arrOrder->status == 3)) active @endif ">
                            <span>
                                @foreach($arrHistoryStatusOrders as $HitoryStatus)
                                    @if($HitoryStatus->status == 3)
                                        <?php $tmpTimeCreate = $HitoryStatus['created_at'];
                                            $timetamp = strtotime($tmpTimeCreate);
                                            $timeCreate = date('d/m/Y',$timetamp);
                                        ?>
                                        {!! $timeCreate !!}
                                    @endif
                                @endforeach
                            </span>

                            <div class=" fix-status" @if((!empty($arrOrder->status)) && ($arrOrder->status == 3)) style="display: block" @else style="display: none" @endif>Chuyển DH cho Chủ kho</div>
                            <img src="{{url('/images/warehouse (1).png')}}" class="icon-tracking b3" alt="">

                        </li>

                        <li class="date-past @if((!empty($arrOrder->status)) && ($arrOrder->status == 4)) active @endif ">
                            <span>
                                @foreach($arrHistoryStatusOrders as $HitoryStatus)
                                    @if($HitoryStatus->status == 4)
                                        <?php $tmpTimeCreate = $HitoryStatus['created_at'];
                                        $timetamp = strtotime($tmpTimeCreate);
                                        $timeCreate = date('d/m/Y',$timetamp);
                                        ?>
                                        {!! $timeCreate !!}
                                    @endif
                                @endforeach
                            </span>

                            <div class=" fix-status" @if((!empty($arrOrder->status)) && ($arrOrder->status == 4)) style="display: block" @else style="display: none" @endif>Đang thu gom</div>
                            <img src="{{url('/images/warehouse (2).png')}}" class="icon-tracking b4" alt="">

                        </li>

                        <li class=" date-past @if((!empty($arrOrder->status)) && ($arrOrder->status == 5)) active @endif">
                            <span>
                                @foreach($arrHistoryStatusOrders as $HitoryStatus)
                                    @if($HitoryStatus->status == 5)
                                        <?php $tmpTimeCreate = $HitoryStatus['created_at'];
                                        $timetamp = strtotime($tmpTimeCreate);
                                        $timeCreate = date('d/m/Y',$timetamp);
                                        ?>
                                        {!! $timeCreate !!}
                                    @endif
                                @endforeach
                            </span>

                            <div class=" fix-status" @if((!empty($arrOrder->status)) && ($arrOrder->status == 5)) style="display: block" @else style="display: none" @endif>Đang sơ chế</div>
                            <img src="{{url('/images/package (1).png')}}" class="icon-tracking b5" alt="">

                        </li>

                        <li class="date-past @if((!empty($arrOrder->status)) && ($arrOrder->status == 6)) active @endif ">
                            <span>
                                @foreach($arrHistoryStatusOrders as $HitoryStatus)
                                    @if($HitoryStatus->status == 6)
                                        <?php $tmpTimeCreate = $HitoryStatus['created_at'];
                                        $timetamp = strtotime($tmpTimeCreate);
                                        $timeCreate = date('d/m/Y',$timetamp);
                                        ?>
                                        {!! $timeCreate !!}
                                    @endif
                                @endforeach
                            </span>

                            <div class=" fix-status" @if((!empty($arrOrder->status)) && ($arrOrder->status == 6)) style="display: block" @else style="display: none" @endif>Đang đóng gói</div>
                            <img src="{{url('/images/package (2).png')}}" class="icon-tracking b6" alt="">

                        </li>
                        <li class="date-past @if((!empty($arrOrder->status)) && ($arrOrder->status == 7)) active @endif ">
                            <span>
                                @foreach($arrHistoryStatusOrders as $HitoryStatus)
                                    @if($HitoryStatus->status == 7)
                                        <?php $tmpTimeCreate = $HitoryStatus['created_at'];
                                        $timetamp = strtotime($tmpTimeCreate);
                                        $timeCreate = date('d/m/Y',$timetamp);
                                        ?>
                                        {!! $timeCreate !!}
                                    @endif
                                @endforeach
                            </span>

                            <div class=" fix-status" @if((!empty($arrOrder->status)) && ($arrOrder->status == 7)) style="display: block" @else style="display: none" @endif>Đã xuất kho</div>
                            <img src="{{url('/images/stroller.png')}}" class="icon-tracking b7" alt="">

                        </li>

                        <li class="date-past @if((!empty($arrOrder->status)) && ($arrOrder->status == 8)) active @endif ">
                            <span>
                                @foreach($arrHistoryStatusOrders as $HitoryStatus)
                                    @if($HitoryStatus->status == 8)
                                        <?php $tmpTimeCreate = $HitoryStatus['created_at'];
                                        $timetamp = strtotime($tmpTimeCreate);
                                        $timeCreate = date('d/m/Y',$timetamp);
                                        ?>
                                        {!! $timeCreate !!}
                                    @endif
                                @endforeach
                            </span>

                            <div class=" fix-status" @if((!empty($arrOrder->status)) && ($arrOrder->status == 8)) style="display: block" @else style="display: none" @endif>Đang vận chuyển</div>
                            <img src="{{url('/images/delivery.png')}}" class="icon-tracking b8" alt="">

                        </li>

                        <li class="date-past @if((!empty($arrOrder->status)) && ($arrOrder->status == 9)) active @endif ">
                            <span>
                                @foreach($arrHistoryStatusOrders as $HitoryStatus)
                                    @if($HitoryStatus->status == 9)
                                        <?php $tmpTimeCreate = $HitoryStatus['created_at'];
                                        $timetamp = strtotime($tmpTimeCreate);
                                        $timeCreate = date('d/m/Y',$timetamp);
                                        ?>
                                        {!! $timeCreate !!}
                                    @endif
                                @endforeach
                            </span>

                            <div class=" fix-status" @if((!empty($arrOrder->status)) && ($arrOrder->status == 9)) style="display: block" @else style="display: none" @endif>Đã giao xong</div>
                            <img src="{{url('/images/package (3).png')}}" class="icon-tracking b9" alt="">

                        </li>
                        <li class="date-past @if((!empty($arrOrder->status)) && ($arrOrder->status == 10)) active @endif ">
                            <span>
                                @foreach($arrHistoryStatusOrders as $HitoryStatus)
                                    @if($HitoryStatus->status == 10)
                                        <?php $tmpTimeCreate = $HitoryStatus['created_at'];
                                        $timetamp = strtotime($tmpTimeCreate);
                                        $timeCreate = date('d/m/Y',$timetamp);
                                        ?>
                                        {!! $timeCreate !!}
                                    @endif
                                @endforeach
                            </span>

                            <div class=" fix-status" @if((!empty($arrOrder->status)) && ($arrOrder->status == 10)) style="display: block" @else style="display: none" @endif>Hàng bị lỗi</div>
                            <img src="{{url('/images/package (4).png')}}" class="icon-tracking b9" alt="">

                        </li>
                        <li class="date-past @if((!empty($arrOrder->status)) && ($arrOrder->status == 11)) active @endif ">
                            <span>
                                @foreach($arrHistoryStatusOrders as $HitoryStatus)
                                    @if($HitoryStatus->status == 11)
                                        <?php $tmpTimeCreate = $HitoryStatus['created_at'];
                                        $timetamp = strtotime($tmpTimeCreate);
                                        $timeCreate = date('d/m/Y',$timetamp);
                                        ?>
                                        {!! $timeCreate !!}
                                    @endif
                                @endforeach
                            </span>

                            <div class=" fix-status" @if((!empty($arrOrder->status)) && ($arrOrder->status == 11)) style="display: block" @else style="display: none" @endif>Trả hàng nhập kho</div>
                            <img src="{{url('/images/route.png')}}" class="icon-tracking b10" alt="">

                        </li>


                    </ul>
                </div>
                <div class="col-md-12 con-tracking ">
                    <div class="col-sm-6 col-xs-12 fix-padlr">
                        <p class="text-center"><i class="ic-tracking ic-xe"></i></p>
                        <h2>Thông tin đặt hàng</h2>
                        <table class="table list-order table-curved">
                            <tbody>
                            @foreach($arrProductOrders as $arrProductOrder)
                                <tr class="item-product">
                                    <th><img src="{{url('/')}}/{!! $products[$arrProductOrder['id_product']]['image'] !!}" class="img-responsive img-thumbnail" style="max-width: 50px;" alt=""></th>
                                    <td><span class="name-product"><span>{!! $products[$arrProductOrder['id_product']]['title'] !!}(#{!! $arrProductOrder->id_product !!})</span></span></td>
                                    <td><span class="price-product"><span>{!! $products[$arrProductOrder['id_product']]['price_out'] !!}</span> đ </span></td>
                                    <td><span>x </span>{!! $arrProductOrder->num !!}</td>
                                    <td><span class="total"> <span>{!! $arrProductOrder->price !!}</span> đ</span><input type="hidden" value="{!! $arrProductOrder->price !!}" name="pricetotal[]"></td>
                                </tr>
                            @endforeach
                            <tr>
                                <th></th>
                                <td>
                                </td>
                                <td></td>
                                <td>Tổng: </td>
                                <td><span class="total">  200 đ</span></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="clear"></div>

                        <div class="row">
                            <div class="col-md-4">
                                Thanh toán:
                            </div>
                            <div class="col-md-8">
                                <p>@if((!empty($arrOrder->type_pay)) && $arrOrder->type_pay == 0) Đã thanh toán đầy đủ @else Đã đặt cọc @if(!empty($arrOrder->received_pay)){{$arrOrder->received_pay}} VNĐ @endif @endif </p>
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
                    <div class="col-sm-2 col-xs-12 fix-padlr cl-center">

                    </div>
                    <div class="col-sm-4 col-xs-12 fix-padlr">
                        <p class="text-center"><i class="ic-tracking ic-co"></i></p>
                        <h2>Thông tin nhận hàng</h2>
                        <table class="tracking-table">
                            <tbody>
                            <tr>
                                <td><i class="ic-tracking ic-nguoidung"></i></td>
                                <td>@if(!empty($arrCustomerOrder->name)){{$arrCustomerOrder->name}}@else{{ "" }}@endif</td>
                            </tr>
                            <tr>
                                <td><i class="ic-tracking ic-diadiem"></i></td>
                                <td>@if(!empty($arrCustomerOrder->address)){{$arrCustomerOrder->address}}@else{{ "" }}@endif</td>
                            </tr>
                            <tr>
                                <td><i class="ic-tracking ic-dienthoai"></i></td>
                                <td>@if(!empty($arrCustomerOrder->phone_number)){{$arrCustomerOrder->phone_number}}@else{{ "" }}@endif</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class=" row">
                    <div class="col-md-12 details-tracking ">
                        <label class="title">Chi tiết hành trình</label>


                        <p class="tracking-toggle" data-toggle="" data-target="#demo0">
                            <span>Lấy</span>

                            <span></span>
                            <span class="tk-address">TX.Bắc Kạn_BK</span>
                        </p>

                        <div id="demo0" class="collapse in" style="padding-left: 20px;">
                            <div class="con-details-tracking">


                                <div class="item">
                                    <label>Lần 1</label>
                                    <label>KHÔNG LIÊN LẠC ĐƯỢC NGƯỜI GỬI - </label>
                                    <label>
                                        <span>253356 - Hoàng Thị Thanh</span>
                                        <span>16/11/2016 20:38</span>
                                    </label>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>
    <div class="modal-footer">

    </div>
</div>

</body>
</html>
