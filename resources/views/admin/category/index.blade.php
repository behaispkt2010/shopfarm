@extends('layouts.admin')
@section('title', 'Danh sách bài viết ')
@section('pageHeader','Danh sách bài viết ')
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
        <div class="col-md-4">
            <div class="x_panel">
            <form action="#" method="POST" class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input type="text" class="form-control" name="txtName" id="name">
                </div>
                <div class="form-group">
                    <label for="name">Danh mục cha</label>
                    <select name="categoriesParent" id="categories" class="form-control">
                        <option value="">chọn danh mục cha</option>
                        <option value="">category 1</option>
                        <option value="">category 2</option>
                        <option value="">category 3</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Mô tả</label>
                    <textarea class="form-control" rows="5" name="txtDescription">{!!old('txtDescription')!!}</textarea>
                </div>

                <button type="submit" name="addCategory" class="btn btn-raised btn-primary">Thêm danh mục</button>
            </form>
                </div>
        </div>
        <div class="col-md-8">
            <div class="x_panel">
                <form action="#" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="option-table-top">
                        <button class="btn btn-raised btn-danger" name="delete" type="submit" Onclick="return ConfirmDelete();"><i
                                    class="glyphicon glyphicon-remove"></i>Delete
                        </button>
                    </div>

                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="check-all" class="flat"></th>
                            <th>Tên danh mục</th>
                            <th>Danh mục cha</th>
                            <th>ngày tạo</th>
                        </tr>
                        </thead>


                        <tbody>

                        @for($i = 0; $i<5; $i++)
                            <tr>
                                <td><input type="checkbox" class="flat" name="table_records"></td>
                                <td>New York</td>
                                <td>Tin tức</td>
                                <td>15/11/2016</td>
                            </tr>
                        @endfor


                        </tbody>
                    </table>

                </form>
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
        $(document).ready(function () {
            var handleDataTableButtons = function () {
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

            TableManageButtons = function () {
                "use strict";
                return {
                    init: function () {
                        handleDataTableButtons();
                    }
                };
            }();

            $('#datatable').dataTable({
             "language": {
                "url": "/plugin/datatable-lang/Vietnamese.json"
            }
            });

            $('#datatable-keytable').DataTable({
                keys: true
            });

            $('#datatable-responsive').DataTable({ "language": {
                "url": "/plugin/datatable-lang/Vietnamese.json"
            }});

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
            { "language": {
                "url": "/plugin/datatable-lang/Vietnamese.json"
            },
                'order': [[1, 'asc']],
                'columnDefs': [
                    {orderable: false, targets: [0]}
                ]
            });
            $datatable.on('draw.dt', function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_flat-green'
                });
            });

            TableManageButtons.init();
        });
    </script>
    <!-- /Datatables -->

@endsection

