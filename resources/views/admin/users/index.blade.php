@extends('layouts.admin')
@section('title', 'Users')
@section('pageHeader','Users')
@section('detailHeader','danh sách')
@section('add_styles')
        <!-- Datatables x-->
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
            <div class="" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <h3> <a class="btn btn-default" href="{{route('users.create')}}">Add New</a> </h3>
                <!--<h3> <button <a href="#"></a> type="button" class="btn btn-default">Add New</button> </h3> -->
                
                <br>
                    <div class="filter">
                        <button type="button" class="btn btn-link">All(3)</button>
                        <button type="button" class="btn btn-link">Administrator(1)</button>
                    </div>
              </div>
            </div>

            <div class="clearfix"></div>
           <div class="x_content">
                    <!-- Split button -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Bulk Action  <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Bulk Action</a>
                        </li>
                        <li><a href="#">Delete</a>
                        </li>
                      </ul>
                    </div>
                    <div class="btn-group">
                         <button type="button" class="btn btn-default">Apply</button>
                    </div>
                   <span style="display:inline-block; width: 20px;"></span>
                    <!-- Split button -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Subscriber <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Subscriber</a>
                        </li>
                        <li><a href="#">Contributor</a>
                        </li>
                        <li><a href="#">Author</a>
                        </li>
                        <li><a href="#">Editor</a>
                        </li>
                        <li><a href="#">Administrator</a>
                        </li>
                      </ul>
                    </div>
                     <div class="btn-group">
                         <button type="button" class="btn btn-default">Change</button>
                    </div>
            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 form-group pull-right">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Search Users</button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-4 -->

                  </div>
            

                 

            <div class="row">
                

              <div class="clearfix"></div>





              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">


                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Username </th>
                            <th class="column-title">Name </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Role </th>
                            <th class="column-title">Posts </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                             <th class="bulk-actions" colspan="6">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">admin</td>
                            <td class=" ">Nguyễn Văn A</td>
                            <td class=" ">admin@nongsan.com</td>
                            <td class=" ">Administrator</td>
                            <td class=" ">11</td>
                            <td class=" last"><a href="#">Edit</a>
                            </td>

                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">teo</td>
                            <td class=" ">Nguyễn Văn Tèo</td>
                            <td class=" ">teo@nongsan.com</td>
                            <td class=" ">Editor</td>
                            <td class=" ">5</td>
                            <td class=" last"><a href="#">Edit</a>
                            </td>
     
                          </tr>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">ti</td>
                            <td class=" ">Nguyễn Văn Tí</td>
                            <td class=" ">ti@nongsan.com </td>
                            <td class=" ">Subscriber</td>
                            <td class=" ">69</td>
                            <td class=" last"><a href="#">Edit</a>
                            </td>
               
                          </tr>

   



                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
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

