@extends('layouts.admin')
@section('title', 'Danh sách Khách hàng ')
@section('pageHeader','Danh sách khách hàng ')
@section('detailHeader','danh sách')
@section('add_styles')
        <!-- Datatables -->
<link href="{{asset('css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
@endsection
@section('new-btn')
    <a href="{{route('historyInput.create')}}" class="btn btn-warning btn-fab">
        <i class="fa fa-plus material-icons new-btn" aria-hidden="true"></i>
    </a>
@endsection
@section('content')
    <div class="row top-right">

        <div class="x_panel">
            <div class="x_content">
                <form action="" method="get">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group label-floating">
                            <label class="control-label" for="date-start">Từ ngày</label>
                            <input class="form-control" name="from" id="date-start" type="text">
                        </div>

                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="form-group label-floating">

                            <label class="control-label" for="date-end">Đến ngày</label>
                            <input class="form-control" name="to" id="date-end" type="text">
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-12 col-xs-12">

                                        <button type="submit"  class="btn btn-fab btn-fab-mini">
                                            <i class="material-icons">search</i>
                                        </button>

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

                        @foreach($productUpdatePrice as $item)
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details box-detail">

                                <div class="well box_1">
                                    <div class="col-sm-12 ">
                                        <a href="?date={{$item->created_at->format('d-m-Y')}}">
                                            <h4 class="cod"><i>Phiếu: #{{$item->created_at->format('dmY')}}</i></h4>

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <ul class="list-unstyled">
                                                        <li><span class="label-box">Số sản phẩm:</span><span>{{$item->count}}</span></li>
                                                        <li><span class="label-box">Số lượng:</span> <span>{{$item->sum_number}}</span></li>
                                                        <li><span class="label-box">Ngày nhập:</span> <span>{{$item->created_at->format('d-m-Y')}}</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('add_scripts')
    <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#date-start').bootstrapMaterialDatePicker
            ({
                format: 'DD-MM-YYYY',
                lang: 'vi',
                time: false,
            }).on('change', function (e, date) {
                $('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
            });
            $('#date-end').bootstrapMaterialDatePicker({
                weekStart: 0,
                format: 'DD-MM-YYYY',
                lang: 'vi',
                time: false,
            });

        });
    </script>
@endsection