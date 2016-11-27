@extends('layouts.admin')
@section('title', 'Quản lý đơn hàng')
@section('pageHeader','Quản lý đơn hàng')
@section('detailHeader','danh sách')
@section('rightHeader')
    <a href="{{route('orders.create')}}" class="btn btn-raised btn-warning btn-md">
        <i class="fa fa-plus" aria-hidden="true"></i> Tạo mới
    </a>
    @endsection
    @section('add_styles')
            <!-- Datatables -->
    <link href="{{asset('plugin/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugin/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <ul class="tab-fill">
                                <li class="show-menu active"><a href="#">Mới tạo</a><span
                                            style="background-color: #8bc34a"
                                            class="ng-binding">0</span></li>
                                <li class="show-menu"><a href="#">Chưa tiếp nhận</a><span
                                            style="background-color: #EEB390"
                                            class="ng-binding">0</span></li>
                                <li class="show-menu"><a href="#">Đã tiếp nhận</a><span
                                            style="background-color: #2B8388"
                                            class="ng-binding">0</span></li>
                                <li class="show-menu"><a href="#">Chờ trả hàng</a><span
                                            style="background-color: #35468A"
                                            class="ng-binding">0</span></li>
                                <li class="show-menu"><a href="#">Chuyển DH cho Chủ kho</a><span
                                            style="background-color: #EEB390"
                                            class="ng-binding">0</span></li>
                                <li><a href="#">Đang thu gom</a><span style="background-color: #2B8388"
                                                                      class="ng-binding">0</span></li>
                                <li><a href="#">Đang sơ chế</a><span style="background-color: #35468A"
                                                                     class="ng-binding">0</span></li>
                                <li><a href="#">Đang đóng gói</a><span style="background-color: #EEB390"
                                                                       class="ng-binding">0</span></li>
                                <li><a href="#">Đã xuất kho</a><span style="background-color: #2B8388"
                                                                     class="ng-binding">0</span></li>
                                <li><a href="#">Đang vận chuyển</a><span style="background-color: #35468A"
                                                                         class="ng-binding">0</span></li>
                                <li><a href="#">Đã giao xong</a><span style="background-color: #2B8388"
                                                                      class="ng-binding">0</span></li>
                                <li><a href="#">Trả hàng nhập kho</a><span style="background-color: #35468A"
                                                                           class="ng-binding">0</span></li>
                                <li class="show-menu other-item-button pst-tootip" style="">
                                    Trạng thái khác
                                    <span class="glyphicon glyphicon-menu-down"></span>
                                    <!-- ngIf: (orderByStatus.currentTutorialID == 4) -->
                                    <div class="other-item-list">
                                        <ul>
                                            <li><a href="#">Đang thu gom</a><span style="background-color: #2B8388"
                                                                                  class="ng-binding">0</span></li>
                                            <li><a href="#">Đang sơ chế</a><span style="background-color: #35468A"
                                                                                 class="ng-binding">0</span></li>
                                            <li><a href="#">Đang đóng gói</a><span style="background-color: #EEB390"
                                                                                   class="ng-binding">0</span></li>
                                            <li><a href="#">Đã xuất kho</a><span style="background-color: #2B8388"
                                                                                 class="ng-binding">0</span></li>
                                            <li><a href="#">Đang vận chuyển</a><span style="background-color: #35468A"
                                                                                     class="ng-binding">0</span></li>
                                            <li><a href="#">Đã giao xong</a><span style="background-color: #2B8388"
                                                                                  class="ng-binding">0</span></li>
                                            <li><a href="#">Trả hàng nhập kho</a><span style="background-color: #35468A"
                                                                                       class="ng-binding">0</span></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group label-floating">

                                <label class="control-label" for="addon2">Số điện thoại / Tên khách hàng</label>

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
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                        </div>

                        <div class="clearfix"></div>

                        @for($i=0;$i<10;$i++)
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details">

                                <div class="well box_1">


                                    <div ng-switch-when="WaitingToPick" class="box-status ng-scope"
                                         style="background-color: #8bc34a;">
                                        <p class="text-center status-title">Mới tạo</p>
                                    </div>
                                    <div class="col-sm-12" data-toggle="modal" data-target=".modal-tracking">
                                        <h4 class="cod"><i>1KS93UQX</i></h4>

                                        <div class="col-xs-12">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-user"></i> Nguyễn Văn A</li>
                                                <li><i class="fa fa-building"></i>
                                                    <span style="    width: 85%;float: left;">3423 Fulton Street, Brooklyn, Tiểu
                                                    bang New</span>
                                                </li>
                                                <li><i class="fa fa-phone"></i> 01661111111</li>
                                                <li><i class="fa fa-usd"></i> <span
                                                            class="box-money"> 150.000 VNĐ</span></li>
                                                <li><i class="fa fa-database"></i> Thuộc Chủ Kho 1
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 text-center">
                                        <button type="button" class="btn btn-raised btn-success btn-xs" data-toggle="modal"
                                                data-target=".modal-tracking">
                                            <i class="fa fa-eye" aria-hidden="true"></i> Xem chi tiết
                                        </button>
                                        <a href="{{route('orders.create')}}" class="btn btn-raised btn-primary btn-xs">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endfor

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

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Đơn hàng 1KS93UQX</h4>
                </div>
                <div class="modal-body sroll">
                    <div class="row">

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
        </div>
    </div>

    @endsection

    @section('add_scripts')
            <!-- Datatables -->
    <script src="{{asset('plugin/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
    <script src="{{asset('plugin/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('plugin/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugin/pdfmake/build/vfs_fonts.js')}}"></script>


@endsection

