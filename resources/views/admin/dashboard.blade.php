@extends('layouts.admin')
@section('title', 'dashboard')
@section('pageHeader','Thống kê')
@section('detailHeader','số đơn hàng, hàng tồn kho,...')
@section('content')

    <div class="row">
        <br>
        <div class="col-md-3 col-xs-6 col-ms-6  text-center">Đơn Hàng<br><span class="value-das">{!! $countOrder !!}</span></div>
        <div class="col-md-3 col-xs-6 col-ms-6 text-center">Doanh Thu<br><span class="value-das">{!! number_format($totalPrice)  !!} VNĐ</span></div>
        <div class="col-md-3 col-xs-6 col-ms-6 text-center">Khách Hàng Hiện Tại<br><span class="value-das">{!! $customer !!}</span></div>
        <div class="col-md-3 col-xs-6 col-ms-6 text-center">Trung Bình Đơn Hàng<br><span class="value-das">@if(!empty($countOrder)){!! number_format($totalPrice/$countOrder) !!} VNĐ @else 0 VNĐ @endif</span></div>

    </div>
    <div class="row">
        <br>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Doanh thu </h2>

                    <div class="col-md-8">
                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span id="date-filter1"></span> <b class="caret"></b>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                <div class="x_content">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Số đơn hàng </h2>
                    <div class="col-md-8">
                        <div id="reportrange2" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span id="date-filter2"></span> <b class="caret"></b>
                        </div>
                    </div>

                    <div class="clearfix"></div>
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
                    <table class="" style="width:50%">

                        <tbody><tr>
                            <td><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                                <canvas id="canvas2" height="100" width="100" style="margin: 15px 10px 10px 0px; width: 120px; height: 120px;"></canvas>
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
                                    </tbody></table>
                            </td>
                        </tr>
                        <input type="hidden" value="{!! $level1 !!}" name="level1">
                        <input type="hidden" value="{!! $level2 !!}" name="level2">
                        <input type="hidden" value="{!! $level3 !!}" name="level3">
                        </tbody></table>
                    <table class="" style="width:50%">

                        <tbody><tr>
                            <td><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                                <canvas id="canvas3" height="100" width="100" style="margin: 15px 10px 10px 0px; width: 120px; height: 120px;"></canvas>
                            </td>
                            <td>
                                <table class="tile_info">
                                    <tbody><tr>
                                        <td>
                                            <p><i class="fa fa-square red"></i>Dùng thử</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square chartreuse" style="color:chartreuse;"></i>Trả phí</p>
                                        </td>
                                    </tr>
                                    </tbody></table>
                            </td>
                        </tr>
                        <input type="hidden" value="{!! $traphi !!}" name="traphi">
                        <input type="hidden" value="{!! $dungthu !!}" name="dungthu">
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

                        @foreach($arrBestSellProduct as $BestSell)
                            <li class="media event">
                                <a class="pull-left border-aero profile_thumb">
                                    <img src="{{url('/').$BestSell->image}}" alt="" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">{!! $BestSell->title !!}</a>
                                    <p><strong>{!! $BestSell->priceProduct !!} VNĐ</strong>{{--Kho A--}}</p>
                                    <p> <small>{!! $BestSell->numOrder !!} đơn hàng</small>
                                    </p>
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>

    </div>

    @endsection
    @section('add_scripts')
            <!-- Chart.js -->
    <script src="{{asset('plugin/Chart.js/dist/Chart.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('/js/moment/moment.min.js')}}"></script>
    <script src="{{asset('/js/datepicker/daterangepicker.js')}}"></script>
    <!-- Doughnut Chart -->
    <script>
        var lineLabels="";
        var lineDatas="";
        var barLabels="";
        var barDatas1="";
        var barDatas2="";


    </script>
    <script>
        $(document).ready(function() {

            var cb = function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange2 span').html(start.format('DD-MM-YYYY') + ' -> ' + end.format('DD-MM-YYYY'));
            };

            var optionSet1 = {
                startDate: moment().subtract(6, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2020',
                dateLimit: {
                    days: 90
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Hôm nay': [moment(), moment()],
                    '7 ngày': [moment().subtract(6, 'days'), moment()],
                    '30 ngày': [moment().subtract(29, 'days'), moment()],
                    '90 ngày': [moment().subtract(89, 'days'), moment()],
                },
                opens: 'left',
                buttonClasses: ['btn btn-default btn-xs btn-raised'],
                applyClass: 'btn-small btn-primary ',
                cancelClass: 'btn-small',
                format: 'DD/MM/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Lọc dữ liệu',
                    cancelLabel: 'Xóa',
                    fromLabel: 'Từ ngày',
                    toLabel: 'Đến ngày',
                    customRangeLabel: 'chọn bất kỳ',
                    daysOfWeek: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
                    monthNames: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 12', 'Tháng 12'],
                    firstDay: 1
                }
            };
            $('#reportrange2 span').html(moment().subtract(6, 'days').format('DD-MM-YYYY') + ' -> ' + moment().format('DD-MM-YYYY'));
            $('#reportrange2').daterangepicker(optionSet1, cb);
            $('#reportrange2').on('show.daterangepicker', function() {
                console.log("show event fired");
            });
            $('#reportrange2').on('hide.daterangepicker', function() {
                console.log("hide event fired");
            });
            $('#reportrange2').on('apply.daterangepicker', function(ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('DD-MM-YYYY') + " to " + picker.endDate.format('DD-MM-YYYY'));
            });
            $('#reportrange2').on('cancel.daterangepicker', function(ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function() {
                $('#reportrange2').data('daterangepicker').setOptions(optionSet1, cb);

            });
            $('#options2').click(function() {
                $('#reportrange2').data('daterangepicker').setOptions(optionSet2, cb);

            });
            $('#destroy').click(function() {
                $('#reportrange2').data('daterangepicker').remove();
            });

        });
    </script>
    <script>
        $(document).ready(function() {

            var cb = function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span#date-filter1').html(start.format('DD-MM-YYYY') + ' -> ' + end.format('DD-MM-YYYY'));
            };

            var optionSet1 = {
                startDate: moment().subtract(6, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2020',
                dateLimit: {
                    days: 90
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Hôm nay': [moment(), moment()],
                    '7 ngày': [moment().subtract(6, 'days'), moment()],
                    '30 ngày': [moment().subtract(29, 'days'), moment()],
                    '90 ngày': [moment().subtract(89, 'days'), moment()],
                },
                opens: 'left',
                buttonClasses: ['btn btn-default btn-xs btn-raised'],
                applyClass: 'btn-small btn-primary ',
                cancelClass: 'btn-small',
                format: 'DD/MM/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Lọc dữ liệu',
                    cancelLabel: 'Xóa',
                    fromLabel: 'Từ ngày',
                    toLabel: 'Đến ngày',
                    customRangeLabel: 'chọn bất kỳ',
                    daysOfWeek: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
                    monthNames: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
                    firstDay: 1
                }
            };
            $('#reportrange span#date-filter1').html(moment().subtract(6, 'days').format('DD-MM-YYYY') + ' -> ' + moment().format('DD-MM-YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function() {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function() {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('DD-MM-YYYY') + " to " + picker.endDate.format('DD-MM-YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function() {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);

            });
            $('#options2').click(function() {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);

            });
            $('#destroy').click(function() {
                $('#reportrange').data('daterangepicker').remove();
            });

        });
    </script>
    <script>
        $(document).on('DOMSubtreeModified','#date-filter1',function(){
            var data = $(this).text();
            var _token = $('input[name="_token"]').val();
            $('.loading').css('display','block');
            $.ajax({
                type: "GET",
                url: '{!! url("/") !!}/admin/dashboardctrl',
                data: {data: data,_token: _token},
                success: function( msg ) {
                    $('.loading').css('display','none');
                    lineLabels = msg['lineLabels'];
                    lineDatas = msg['lineDatas'];
                    barLabels = msg['barLabels'];
                    barDatas1 = msg['barDatas1'];
                    barDatas2 = msg['barDatas2'];
                    // Line chart
                    var ctx = document.getElementById("lineChart");
                    var lineChart = new Chart(ctx, {
                        responsive: true,
                        skipXLabels: 5,
                        type: 'line',
                        data: {
                            labels: lineLabels,
                            datasets: [{
                                label: "Doanh Thu",
                                backgroundColor: "rgba(76, 175, 80, 0.68)",
//                                  borderColor: "rgba(38, 185, 154, 0.7)",
                                pointBorderColor: "rgba(38, 185, 154, 0.7)",
                                pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                                pointHoverBackgroundColor: "#fff",
                                pointHoverBorderColor: "rgba(220,220,220,1)",
                                pointBorderWidth: 1,
                                data: lineDatas,
                            }]
                        },
                        options: {
                            scales: {
                                xAxes: [{
                                    display: false
                                }]
                            }

                        }
                    })// Bar chart

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $('.loading').css('display','none');

                }
            });
        });
    </script>

    <script>
        $(document).on('DOMSubtreeModified','#date-filter2',function(){
            var data = $(this).text();
            var _token = $('input[name="_token"]').val();
            $('.loading').css('display','block');
            $.ajax({
                type: "GET",
                url: '{!! url("/") !!}/admin/dashboardctrl',
                data: {data: data,_token: _token},
                success: function( msg ) {
                    $('.loading').css('display','none');
                    lineLabels = msg['lineLabels'];
                    lineDatas = msg['lineDatas'];
                    barLabels = msg['barLabels'];
                    barDatas1 = msg['barDatas1'];
                    barDatas2 = msg['barDatas2'];

                    //graph options
                    var ctx = document.getElementById("mybarChart");
                    var mybarChart = new Chart(ctx, {

                        type: 'bar',
                        data: {
                            labels: barLabels,
                            datasets: [{
                                label: 'Thành công',
                                backgroundColor: "#4caf50",
                                data: barDatas1
                            }, {
                                label: 'Thất bại',
                                backgroundColor: "#FF9800",
                                data: barDatas2
                            }]
                        },

                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }],
                                xAxes: [{
                                    display: false
                                }]
                            }

                        }

                    });

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $('.loading').css('display','none');

                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {
            var options = {
                legend: false,
                responsive: false
            };
            var level1 = $('input[type="hidden"][name="level1"]').val();
            var level2 = $('input[type="hidden"][name="level2"]').val();
            var level3 = $('input[type="hidden"][name="level3"]').val();
            new Chart(document.getElementById("canvas2"), {
                type: 'doughnut',
                tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                data: {
                    labels: [
                        "Cấp 1",
                        "Cấp 2",
                        "Cấp 3"
                    ],
                    datasets: [{
                        data: [level1,level2,level3],
                        backgroundColor: [
                            "#3498DB",
                            "#1ABB9C",
                            "#9B59B6"
                        ],
                        hoverBackgroundColor: [
                            "#CFD4D8",
                            "#B370CF",
                            "#E95E4F"
                        ]
                    }]
                },
                options: options
            });
        });
        $(document).ready(function () {
            var options = {
                legend: false,
                responsive: false
            };
            var traphi = $('input[type="hidden"][name="traphi"]').val();
            var dungthu = $('input[type="hidden"][name="dungthu"]').val();
            new Chart(document.getElementById("canvas3"), {
                type: 'doughnut',
                tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                data: {
                    labels: [
                        "Trả phí",
                        "Dùng thử"
                    ],
                    datasets: [{
                        data: [traphi,dungthu],
                        backgroundColor: [
                            "#49f436",
                            "#f3493a"
                        ],
                        hoverBackgroundColor: [
                            "#49f436",
                            "#f3493a"
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
                    data: []
                }]
            },
        });

        // Bar chart
        var ctx = document.getElementById("mybarChart");

        var mybarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["1", "2", "3", "4", "5", "6", "7","8","9","10","11","12"],
                datasets: [{
                    label: 'Thành công',
                    backgroundColor: "#4caf50",
                    data: []
                }, {
                    label: 'Thất bại',
                    backgroundColor: "#FF9800",
                    data: []
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