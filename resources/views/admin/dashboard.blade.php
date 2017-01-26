@extends('layouts.admin')
@section('title', 'dashboard')
@section('pageHeader','Thống kê')
@section('detailHeader','số đơn hàng, hàng tồn kho,...')
@section('content')

    <div class="row">
        <br>
        <div class="col-md-3 text-center">Đơn Hàng<br><span class="value-das">{!! $countOrder !!}</span></div>
        <div class="col-md-3 text-center">Doanh Thu<br><span class="value-das">{!! number_format($totalPrice)  !!} VNĐ</span></div>
        <div class="col-md-3 text-center">Khách Hàng/Ngày<br><span class="value-das">1</span></div>
        <div class="col-md-3 text-center">Giá Trị Trung Bình Đơn Hàng<br><span class="value-das">{!! number_format($totalPrice/$countOrder) !!}</span></div>

    </div>
    <div class="row">
        <br>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Doanh thu {{--<button class="btn btn-xs">Ngày</button><button class="btn btn-xs">Tuần</button><button class="btn btn-xs">Tháng</button><button class="btn btn-xs">90 ngày</button>--}}</h2>
                    <div class="clearfix"></div>
                    <input type="hidden" value="@if(!empty($totalPriceMonth1)){!! $totalPriceMonth1 !!}@endif" name="PriceByMonth1">
                    <input type="hidden" value="@if(!empty($totalPriceMonth2)){!! $totalPriceMonth2 !!}@endif" name="PriceByMonth2">
                    <input type="hidden" value="@if(!empty($totalPriceMonth3)){!! $totalPriceMonth3 !!}@endif" name="PriceByMonth3">
                    <input type="hidden" value="@if(!empty($totalPriceMonth4)){!! $totalPriceMonth4 !!}@endif" name="PriceByMonth4">
                    <input type="hidden" value="@if(!empty($totalPriceMonth5)){!! $totalPriceMonth5 !!}@endif" name="PriceByMonth5">
                    <input type="hidden" value="@if(!empty($totalPriceMonth6)){!! $totalPriceMonth6 !!}@endif" name="PriceByMonth6">
                    <input type="hidden" value="@if(!empty($totalPriceMonth7)){!! $totalPriceMonth7 !!}@endif" name="PriceByMonth7">
                    <input type="hidden" value="@if(!empty($totalPriceMonth8)){!! $totalPriceMonth8 !!}@endif" name="PriceByMonth8">
                    <input type="hidden" value="@if(!empty($totalPriceMonth9)){!! $totalPriceMonth9 !!}@endif" name="PriceByMonth9">
                    <input type="hidden" value="@if(!empty($totalPriceMonth10)){!! $totalPriceMonth10 !!}@endif" name="PriceByMonth10">
                    <input type="hidden" value="@if(!empty($totalPriceMonth11)){!! $totalPriceMonth11 !!}@endif" name="PriceByMonth11">
                    <input type="hidden" value="@if(!empty($totalPriceMonth12)){!! $totalPriceMonth12 !!}@endif" name="PriceByMonth12">
                </div>
                <div class="x_content">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Số đơn hàng {{--<button class="btn btn-xs">Ngày</button><button class="btn btn-xs">Tuần</button><button class="btn btn-xs">Tháng</button><button class="btn btn-xs">90 ngày</button>--}}</h2>

                    <div class="clearfix"></div>
                    <input type="hidden" value="@if(!empty($totalOrderSuccess1)){!! $totalOrderSuccess1 !!}@endif" name="OrderSuccess1">
                    <input type="hidden" value="@if(!empty($totalOrderSuccess2)){!! $totalOrderSuccess2 !!}@endif" name="OrderSuccess2">
                    <input type="hidden" value="@if(!empty($totalOrderSuccess3)){!! $totalOrderSuccess3 !!}@endif" name="OrderSuccess3">
                    <input type="hidden" value="@if(!empty($totalOrderSuccess4)){!! $totalOrderSuccess4 !!}@endif" name="OrderSuccess4">
                    <input type="hidden" value="@if(!empty($totalOrderSuccess5)){!! $totalOrderSuccess5 !!}@endif" name="OrderSuccess5">
                    <input type="hidden" value="@if(!empty($totalOrderSuccess6)){!! $totalOrderSuccess6 !!}@endif" name="OrderSuccess6">
                    <input type="hidden" value="@if(!empty($totalOrderSuccess7)){!! $totalOrderSuccess7 !!}@endif" name="OrderSuccess7">
                    <input type="hidden" value="@if(!empty($totalOrderSuccess8)){!! $totalOrderSuccess8 !!}@endif" name="OrderSuccess8">
                    <input type="hidden" value="@if(!empty($totalOrderSuccess9)){!! $totalOrderSuccess9 !!}@endif" name="OrderSuccess9">
                    <input type="hidden" value="@if(!empty($totalOrderSuccess10)){!! $totalOrderSuccess10 !!}@endif" name="OrderSuccess10">
                    <input type="hidden" value="@if(!empty($totalOrderSuccess11)){!! $totalOrderSuccess11 !!}@endif" name="OrderSuccess11">
                    <input type="hidden" value="@if(!empty($totalOrderSuccess12)){!! $totalOrderSuccess12 !!}@endif" name="OrderSuccess12">

                    <input type="hidden" value="@if(!empty($totalOrderFail1)){!! $totalOrderFail1 !!}@endif" name="OrderFail1">
                    <input type="hidden" value="@if(!empty($totalOrderFail2)){!! $totalOrderFail2 !!}@endif" name="OrderFail2">
                    <input type="hidden" value="@if(!empty($totalOrderFail3)){!! $totalOrderFail3 !!}@endif" name="OrderFail3">
                    <input type="hidden" value="@if(!empty($totalOrderFail4)){!! $totalOrderFail4 !!}@endif" name="OrderFail4">
                    <input type="hidden" value="@if(!empty($totalOrderFail5)){!! $totalOrderFail5 !!}@endif" name="OrderFail5">
                    <input type="hidden" value="@if(!empty($totalOrderFail6)){!! $totalOrderFail6 !!}@endif" name="OrderFail6">
                    <input type="hidden" value="@if(!empty($totalOrderFail7)){!! $totalOrderFail7 !!}@endif" name="OrderFail7">
                    <input type="hidden" value="@if(!empty($totalOrderFail8)){!! $totalOrderFail8 !!}@endif" name="OrderFail8">
                    <input type="hidden" value="@if(!empty($totalOrderFail9)){!! $totalOrderFail9 !!}@endif" name="OrderFail9">
                    <input type="hidden" value="@if(!empty($totalOrderFail10)){!! $totalOrderFail10 !!}@endif" name="OrderFail10">
                    <input type="hidden" value="@if(!empty($totalOrderFail11)){!! $totalOrderFail11 !!}@endif" name="OrderFail11">
                    <input type="hidden" value="@if(!empty($totalOrderFail12)){!! $totalOrderFail12 !!}@endif" name="OrderFail12">
                </div>
                <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">

            <div class="x_panel fixed_height_320">
                <div class="x_title">
                    <h2>Gói dịch vụ
                    </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="" style="width:100%">

                        <tbody><tr>
                            <td><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                                <canvas id="canvas2" height="140" width="140" style="margin: 15px 10px 10px 0px; width: 140px; height: 140px;"></canvas>
                            </td>
                            <td>
                                <table class="tile_info">
                                    <tbody><tr>
                                        <td>
                                            <p><i class="fa fa-square blue"></i>Cấp 1 </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square green"></i>Cấp 2 </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square purple"></i>Cấp 3 </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square aero"></i>Cấp 4 </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square red"></i>Cấp 5 </p>
                                        </td>

                                    </tr>
                                    </tbody></table>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">

            <div class="x_panel fixed_height_320">
                <div>
                    <div class="x_title">
                        <h2> Top 3 Sản phẩm bán chạy</h2>

                        <div class="clearfix"></div>
                    </div>
                    <ul class="list-unstyled top_profiles scroll-view">

                        <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                                <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">{!! $ProductDetailMax->title !!}</a>
                                <p><strong>{!! $moneyOrderMax !!} VNĐ</strong>{{--Kho A--}}</p>
                                <p> <small>{!! $OrderMax !!} đơn hàng</small>
                                </p>
                                </p>
                            </div>
                        </li>
                        <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                                <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">{!! $ProductDetailMax1->title !!}</a>
                                <p><strong>{!! $moneyOrderMax1 !!} VNĐ</strong>{{--Kho A--}}</p>
                                <p> <small>{!! $OrderMax1 !!} đơn hàng</small>
                                </p>
                                </p>
                            </div>
                        </li>
                        <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                                <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">{!! $ProductDetailMax2->title !!}</a>
                                <p><strong>{!! $moneyOrderMax2 !!} VNĐ</strong>{{--Kho A--}}</p>
                                <p> <small>{!! $OrderMax2 !!} đơn hàng</small>
                                </p>
                                </p>
                            </div>
                        </li>



                    </ul>
                </div>

            </div>
        </div>

    </div>

    @endsection
    @section('add_scripts')
            <!-- Chart.js -->
    <script src="{{asset('/plugin/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('/js/moment/moment.min.js')}}"></script>
    <script src="{{asset('/js/datepicker/daterangepicker.js')}}"></script>
    <!-- Doughnut Chart -->
    <script>
        $(document).ready(function () {
            var options = {
                legend: false,
                responsive: false
            };

            new Chart(document.getElementById("canvas2"), {
                type: 'doughnut',
                tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                data: {
                    labels: [
                        "Cấp 1",
                        "Cấp 2",
                        "Cấp 3",
                        "Cấp 4",
                        "Cấp 5"
                    ],
                    datasets: [{
                        data: [15, 20, 30, 10, 30],
                        backgroundColor: [
                            "#BDC3C7",
                            "#9B59B6",
                            "#E74C3C",
                            "#26B99A",
                            "#3498DB"
                        ],
                        hoverBackgroundColor: [
                            "#CFD4D8",
                            "#B370CF",
                            "#E95E4F",
                            "#36CAAB",
                            "#49A9EA"
                        ]
                    }]
                },
                options: options
            });
        });
    </script>
    <!-- /Doughnut Chart -->
    <script>

        // Line chart
        var ctx = document.getElementById("lineChart");
        var PriceByMonth1 = $('input[type="hidden"][name="PriceByMonth1"]').val();
        var PriceByMonth2 = $('input[type="hidden"][name="PriceByMonth2"]').val();
        var PriceByMonth3 = $('input[type="hidden"][name="PriceByMonth3"]').val();
        var PriceByMonth4 = $('input[type="hidden"][name="PriceByMonth4"]').val();
        var PriceByMonth5 = $('input[type="hidden"][name="PriceByMonth5"]').val();
        var PriceByMonth6 = $('input[type="hidden"][name="PriceByMonth6"]').val();
        var PriceByMonth7 = $('input[type="hidden"][name="PriceByMonth7"]').val();
        var PriceByMonth8 = $('input[type="hidden"][name="PriceByMonth8"]').val();
        var PriceByMonth9 = $('input[type="hidden"][name="PriceByMonth9"]').val();
        var PriceByMonth10 = $('input[type="hidden"][name="PriceByMonth10"]').val();
        var PriceByMonth11 = $('input[type="hidden"][name="PriceByMonth11"]').val();
        var PriceByMonth12 = $('input[type="hidden"][name="PriceByMonth12"]').val();
        var Price = [];

        //alert(PriceByMonth);
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["1", "2", "3", "4", "5", "6", "7","8","9","10","11","12"],
                datasets: [{
                    label: "Doanh Thu",
                    backgroundColor: "rgba(76, 175, 80, 0.68)",
//                    borderColor: "rgba(38, 185, 154, 0.7)",
                    pointBorderColor: "rgba(38, 185, 154, 0.7)",
                    pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointBorderWidth: 1,
                    data: [PriceByMonth1,PriceByMonth2,PriceByMonth3,PriceByMonth4,PriceByMonth5,PriceByMonth6,PriceByMonth7,PriceByMonth8,PriceByMonth9,PriceByMonth10,PriceByMonth11,PriceByMonth12]
                }]
            },
        });

        // Bar chart
        var ctx = document.getElementById("mybarChart");
        var OrderSuccess1 = $('input[type="hidden"][name="OrderSuccess1"]').val();
        var OrderSuccess2 = $('input[type="hidden"][name="OrderSuccess2"]').val();
        var OrderSuccess3 = $('input[type="hidden"][name="OrderSuccess3"]').val();
        var OrderSuccess4 = $('input[type="hidden"][name="OrderSuccess4"]').val();
        var OrderSuccess5 = $('input[type="hidden"][name="OrderSuccess5"]').val();
        var OrderSuccess6 = $('input[type="hidden"][name="OrderSuccess6"]').val();
        var OrderSuccess7 = $('input[type="hidden"][name="OrderSuccess7"]').val();
        var OrderSuccess8 = $('input[type="hidden"][name="OrderSuccess8"]').val();
        var OrderSuccess9 = $('input[type="hidden"][name="OrderSuccess9"]').val();
        var OrderSuccess10 = $('input[type="hidden"][name="OrderSuccess10"]').val();
        var OrderSuccess11 = $('input[type="hidden"][name="OrderSuccess11"]').val();
        var OrderSuccess12 = $('input[type="hidden"][name="OrderSuccess12"]').val();

        var OrderFail1 = $('input[type="hidden"][name="OrderFail1"]').val();
        var OrderFail2 = $('input[type="hidden"][name="OrderFail2"]').val();
        var OrderFail3 = $('input[type="hidden"][name="OrderFail3"]').val();
        var OrderFail4 = $('input[type="hidden"][name="OrderFail4"]').val();
        var OrderFail5 = $('input[type="hidden"][name="OrderFail5"]').val();
        var OrderFail6 = $('input[type="hidden"][name="OrderFail6"]').val();
        var OrderFail7 = $('input[type="hidden"][name="OrderFail7"]').val();
        var OrderFail8 = $('input[type="hidden"][name="OrderFail8"]').val();
        var OrderFail9 = $('input[type="hidden"][name="OrderFail9"]').val();
        var OrderFail10 = $('input[type="hidden"][name="OrderFail10"]').val();
        var OrderFail11 = $('input[type="hidden"][name="OrderFail11"]').val();
        var OrderFail12 = $('input[type="hidden"][name="OrderFail12"]').val();
        var mybarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["1", "2", "3", "4", "5", "6", "7","8","9","10","11","12"],
                datasets: [{
                    label: 'Thành công',
                    backgroundColor: "#4caf50",
                    data: [OrderSuccess1, OrderSuccess2, OrderSuccess3, OrderSuccess4, OrderSuccess5,OrderSuccess6,OrderSuccess7,OrderSuccess8,OrderSuccess9,OrderSuccess10,OrderSuccess11,OrderSuccess12]
                }, {
                    label: 'Thất bại',
                    backgroundColor: "#FF9800",
                    data: [OrderFail1, OrderFail2, OrderFail3, OrderFail4, OrderFail5,OrderFail6,OrderFail7,OrderFail8,OrderFail9,OrderFail10,OrderFail11,OrderFail12]
                }]
            },

            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <!-- bootstrap-daterangepicker -->
    {{--<script>--}}
    {{--$(document).ready(function() {--}}

    {{--var cb = function(start, end, label) {--}}
    {{--console.log(start.toISOString(), end.toISOString(), label);--}}
    {{--$('#reportrange span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));--}}
    {{--};--}}

    {{--var optionSet1 = {--}}
    {{--startDate: moment().subtract(29, 'days'),--}}
    {{--endDate: moment(),--}}
    {{--minDate: '01/01/2012',--}}
    {{--maxDate: '12/31/2015',--}}
    {{--dateLimit: {--}}
    {{--days: 60--}}
    {{--},--}}
    {{--showDropdowns: true,--}}
    {{--showWeekNumbers: true,--}}
    {{--timePicker: false,--}}
    {{--timePickerIncrement: 1,--}}
    {{--timePicker12Hour: true,--}}
    {{--ranges: {--}}
    {{--'Today': [moment(), moment()],--}}
    {{--'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],--}}
    {{--'Last 7 Days': [moment().subtract(6, 'days'), moment()],--}}
    {{--'Last 30 Days': [moment().subtract(29, 'days'), moment()],--}}
    {{--'This Month': [moment().startOf('month'), moment().endOf('month')],--}}
    {{--'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]--}}
    {{--},--}}
    {{--opens: 'left',--}}
    {{--buttonClasses: ['btn btn-default'],--}}
    {{--applyClass: 'btn-small btn-primary',--}}
    {{--cancelClass: 'btn-small',--}}
    {{--format: 'DD/MM/YYYY',--}}
    {{--separator: ' to ',--}}
    {{--locale: {--}}
    {{--applyLabel: 'Submit',--}}
    {{--cancelLabel: 'Clear',--}}
    {{--fromLabel: 'From',--}}
    {{--toLabel: 'To',--}}
    {{--customRangeLabel: 'Custom',--}}
    {{--daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],--}}
    {{--monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],--}}
    {{--firstDay: 1--}}
    {{--}--}}
    {{--};--}}
    {{--$('#reportrange span').html(moment().subtract(29, 'days').format('DD/MM/YYYY') + ' - ' + moment().format('DD/MM/YYYY'));--}}
    {{--$('#reportrange').daterangepicker(optionSet1, cb);--}}
    {{--$('#reportrange').on('show.daterangepicker', function() {--}}
    {{--console.log("show event fired");--}}
    {{--});--}}
    {{--$('#reportrange').on('hide.daterangepicker', function() {--}}
    {{--console.log("hide event fired");--}}
    {{--});--}}
    {{--$('#reportrange').on('apply.daterangepicker', function(ev, picker) {--}}
    {{--console.log("apply event fired, start/end dates are " + picker.startDate.format('DD/MM/YYYY') + " to " + picker.endDate.format('DD/MM/YYYY'));--}}
    {{--});--}}
    {{--$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {--}}
    {{--console.log("cancel event fired");--}}
    {{--});--}}
    {{--$('#options1').click(function() {--}}
    {{--$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);--}}
    {{--});--}}
    {{--$('#options2').click(function() {--}}
    {{--$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);--}}
    {{--});--}}
    {{--$('#destroy').click(function() {--}}
    {{--$('#reportrange').data('daterangepicker').remove();--}}
    {{--});--}}
    {{--});--}}
    {{--</script>--}}
    <!-- /bootstrap-daterangepicker -->
@endsection