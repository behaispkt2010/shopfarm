@extends('layouts.admin')
@section('title', 'Quản lý Chủ kho ')
@section('pageHeader','Quản lý chủ kho ')
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
        <div class="col-md-12 col-xs-12">
            <!-- Name and Description -->
            <div class="x_panel">
                        <div class="circle">
                            <div class="front front-popular">
                                <div class="title color-2-font glyphicon glyphicon-plus"></div>
                            </div><!-- end div .front -->
                            <div class="popular color-2-font glyphicon glyphicon-plus"></div>
                            <div class="back color-2-bg info">
                                <a href="{{route('news.create')}}">
                                <div class="title color-2-font glyphicon glyphicon-pencil"></div>
                                </a>
                                <div class="description">
                                    <p>Thêm chủ kho</p>
                                </div><!-- end div .description -->
                            </div><!-- end div .back color-1-bg info -->
                        </div><!-- end div .circle -->



                <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                    <thead>
                    <tr>
                        {{--<th><input type="checkbox" id="check-all" class="flat"></th>--}}
                        <th>Tên chủ kho</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Sản phẩm</th>
                        <th>Địa chỉ</th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>

                    @for($i = 0; $i<50; $i++)
                    <tr>
                        {{--<td><input type="checkbox" class="flat" name="table_records"></td>--}}
                        <td><a href="{{route('warehouse.create')}}">Chủ kho A</a></td>
                        <td>kho@gmail.com</td>
                        <td>01662456834</td>
                        <td>lúa, mì, củ cải</td>
                        <td>11 Nguyễn Huệ, Lâm Đồng <a href=""> google map</a></td>
                        <td width="100px" class="text-center">
                            <a href="" style="margin-right: 10px;display: inline-block"><i class="fa fa-pencil"  aria-hidden="true"></i></a>
                            <a href="" style="display: inline-block"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                        @endfor


                    </tbody>
                </table>
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
    <script>
        $(document).ready(function() {
            var handleDataTableButtons = function() {
                if ($("#datatable-buttons").length) {
                    $("#datatable-buttons").DataTable({
                        dom: "Bfrtip",
                        buttons: [
                            {
                                extend: "copy",
                                className: "btn-sm"
                            },
                            {
                                extend: "csv",
                                className: "btn-sm"
                            },
                            {
                                extend: "excel",
                                className: "btn-sm"
                            },
                            {
                                extend: "pdfHtml5",
                                className: "btn-sm"
                            },
                            {
                                extend: "print",
                                className: "btn-sm"
                            },
                        ],
                        responsive: true
                    });
                }
            };

            TableManageButtons = function() {
                "use strict";
                return {
                    init: function() {
                        handleDataTableButtons();
                    }
                };
            }();

            $('#datatable').dataTable();

            $('#datatable-keytable').DataTable({
                keys: true
            });

            $('#datatable-responsive').DataTable();

            $('#datatable-scroller').DataTable({
                ajax: "js/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });

            $('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });

            var $datatable = $('#datatable-checkbox');

            $datatable.dataTable({
             "language": {
                "url": "/plugin/datatable-lang/Vietnamese.json"
            },
                'order': [[ 1, 'asc' ]],
                'columnDefs': [
                    { orderable: false, targets: [0] }
                ]
            });
            $datatable.on('draw.dt', function() {

                $('input').iCheck({
                    checkboxClass: 'icheckbox_flat-green'
                });
            });

            TableManageButtons.init();
        });
    </script>
    <!-- /Datatables -->

@endsection

