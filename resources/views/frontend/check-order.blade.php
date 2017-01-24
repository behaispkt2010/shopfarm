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
<h3 class="text-center">Đơn hàng #111</h3>
        <br>
        <div class="tracking">
            <div class="col-sm-12 col-xs-12 fix-padlr cl-center">
                <div class="img-car">
                </div>
                <ul class="ul-date-car">

                    <li class="date-past ">
                        <span>16/11</span>

                        <div class=" fix-status" style="display: none">Chưa tiếp nhận</div>
                        <img src="{{url('/images/find.png')}}" class="icon-tracking b1" alt="">
                    </li>

                    <li class="date-past active">
                        <span>17/11</span>

                        <div class=" fix-status" style="display: block">Đã tiếp nhận</div>
                        <img src="{{url('/images/clipboard (1).png')}}" class="icon-tracking b2" alt="">

                    </li>

                    <li class=" ">
                        <span>18/11</span>

                        <div class=" fix-status" style="display: none">Chuyển DH cho Chủ kho</div>
                        <img src="{{url('/images/warehouse (1).png')}}" class="icon-tracking b3" alt="">

                    </li>

                    <li class=" ">
                        <span>19/11</span>

                        <div class=" fix-status" style="display: none">Đang thu gom</div>
                        <img src="{{url('/images/warehouse (2).png')}}" class="icon-tracking b4" alt="">

                    </li>

                    <li class=" ">
                        <span>20/11</span>

                        <div class=" fix-status" style="display: none">Đang sơ chế</div>
                        <img src="{{url('/images/package (1).png')}}" class="icon-tracking b5" alt="">

                    </li>

                    <li class=" ">
                        <span>21/11</span>

                        <div class=" fix-status" style="display: none">Đang đóng gói</div>
                        <img src="{{url('/images/package (2).png')}}" class="icon-tracking b6" alt="">

                    </li>
                    <li class=" ">
                        <span>19/11</span>

                        <div class=" fix-status" style="display: none">Đã xuất kho</div>
                        <img src="{{url('/images/stroller.png')}}" class="icon-tracking b7" alt="">

                    </li>

                    <li class=" ">
                        <span>20/11</span>

                        <div class=" fix-status" style="display: none">Đang vận chuyển</div>
                        <img src="{{url('/images/delivery.png')}}" class="icon-tracking b8" alt="">

                    </li>

                    <li class=" ">
                        <span>21/11</span>

                        <div class=" fix-status" style="display: none">Đã giao xong</div>
                        <img src="{{url('/images/package (3).png')}}" class="icon-tracking b9" alt="">

                    </li>
                    <li class=" ">
                        <span>21/11</span>

                        <div class=" fix-status" style="display: none">Hàng bị lỗi</div>
                        <img src="{{url('/images/package (4).png')}}" class="icon-tracking b9" alt="">

                    </li>
                    <li class=" ">
                        <span>21/11</span>

                        <div class=" fix-status" style="display: none">Trả hàng nhập kho</div>
                        <img src="{{url('/images/route.png')}}" class="icon-tracking b10" alt="">

                    </li>


                </ul>
            </div>
            <div class="col-md-12 con-tracking ">
                <div class="col-sm-6 col-xs-12 fix-padlr">
                    {{--<p class="text-center"><i class="ic-tracking ic-xe"></i></p>--}}
                    <h2>Thông tin đặt hàng</h2>
                    <table class="table list-order table-curved">
                        <tbody>
                        <tr>
                            <th><img src="{{url('/')}}/images/sp.jpg"
                                     class="img-responsive img-thumbnail"
                                     style="max-width: 50px;" alt=""></th>
                            <td><span class="name-product"><a href="">tên sản phẩm (#111)</a></span>
                            </td>
                            <td><span class="price-product">100 đ </span></td>
                            <td><span class="sl">x 1 </span></td>
                            <td><span class="total"> 100 đ</span></td>
                        </tr>
                        <tr>
                            <th><img src="{{url('/')}}/images/sp.jpg"
                                     class="img-responsive img-thumbnail" style="max-width: 50px;"
                                     alt=""></th>
                            <td><span class="name-product"><a href="">tên sản phẩm (#111)</a></span>
                            </td>
                            <td><span class="price-product">100 đ </span></td>
                            <td><span class="sl">x 1 </span></td>
                            <td><span class="total"> 100 đ</span></td>
                        </tr>
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
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            Thanh toán:
                        </div>
                        <div class="col-md-8">
                            <p>đã thanh toán</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Vận chuyển:
                        </div>
                        <div class="col-md-8">
                            <p>Xe tải</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Thông tin tài xế:
                        </div>
                        <div class="col-md-8">
                            <p>Tên: Nguyễn văn A</p>
                            <p>SĐT: 01666666666</p>
                            <p>Biển số xe: A1553563</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            Ghi chú:
                        </div>
                        <div class="col-md-8">
                            <p class="note-order">không có ghi chú</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12 fix-padlr cl-center">

                </div>
                <div class="col-sm-4 col-xs-12 fix-padlr">
                    {{--<p class="text-center"><i class="ic-tracking ic-co"></i></p>--}}
                    <h2>Thông tin nhận hàng</h2>
                    <table class="tracking-table">
                        <tbody>
                        <tr>
                            <td><i class="ic-tracking ic-nguoidung"></i></td>
                            <td>Nguyễn Văn A</td>
                        </tr>
                        <tr>
                            <td><i class="ic-tracking ic-diadiem"></i></td>
                            <td>3423 Fulton Street, Brooklyn, Tiểu bang New York, Hoa Kỳ</td>
                        </tr>
                        <tr>
                            <td><i class="ic-tracking ic-dienthoai"></i></td>
                            <td>01661111111</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>




        </div>
    </div>

</div>
    </div>
    @endsection