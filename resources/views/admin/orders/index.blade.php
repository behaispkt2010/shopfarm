@extends('layouts.admin')
@section('title', 'Quản lý đơn hàng')
@section('pageHeader','Quản lý đơn hàng')
@section('detailHeader','danh sách')
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
                                <li class="active"><a href="#">Mới tạo</a><span style="background-color: #3FB079"
                                                                                class="ng-binding">0</span></li>
                                <li><a href="#">Đang giao hàng</a><span style="background-color: #EEB390"
                                                                        class="ng-binding">0</span></li>
                                <li><a href="#">Giao hàng thành công</a><span style="background-color: #2B8388"
                                                                              class="ng-binding">0</span></li>
                                <li><a href="#">Chờ trả hàng</a><span style="background-color: #35468A"
                                                                      class="ng-binding">0</span></li>

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
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                        </div>

                        <div class="clearfix"></div>

                        @for($i=0;$i<10;$i++)
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details">

                                <div class="well profile_view">
                                    <a href="" class="btn-delete"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                                    <div ng-switch-when="WaitingToPick" class="box-status ng-scope"
                                         style="background-color: #3FB079;">
                                        <p class="text-center status-title">Mới tạo</p>
                                    </div>
                                    <div class="col-sm-12">
                                        <h4 class="cod"><i>1KS93UQX</i></h4>

                                        <div class="col-xs-12">
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-user"></i> Nguyễn Văn A</li>
                                                <li><i class="fa fa-building"></i> 3423 Fulton Street, Brooklyn, Tiểu
                                                    bang New
                                                </li>
                                                <li><i class="fa fa-phone"></i> 01661111111</li>
                                                <li><i class="fa fa-usd"></i> <span
                                                            class="box-money"> 1500000 VNĐ</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 text-center">
                                        <button type="button" class="btn btn-primary btn-xs">
                                            <i class="fa fa-eye" aria-hidden="true"></i> Xem chi tiết
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endfor

                    </div>
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

