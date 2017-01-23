@extends('layouts.admin')
@section('title', 'dashboard')
@section('pageHeader','Thống kê')
@section('detailHeader','số đơn hàng, hàng tồn kho,...')
@section('content')

    <div class="row">
        <br>
        <div class="col-md-3 text-center">Đơn Hàng<br><span class="value-das">200</span></div>
        <div class="col-md-3 text-center">Doanh Thu<br><span class="value-das">64.27M</span></div>
        <div class="col-md-3 text-center">Khách Hàng/Ngày<br><span class="value-das">1</span></div>
        <div class="col-md-3 text-center">Giá Trị Trung Bình Đơn Hàng<br><span class="value-das">259,153</span></div>

    </div>
    <div class="row">
        <br>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Doanh thu <button class="btn btn-xs">Ngày</button><button class="btn btn-xs">Tuần</button><button class="btn btn-xs">Tháng</button><button class="btn btn-xs">90 ngày</button></h2>
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
                <h2>Số đơn hàng <button class="btn btn-xs">Ngày</button><button class="btn btn-xs">Tuần</button><button class="btn btn-xs">Tháng</button><button class="btn btn-xs">90 ngày</button></h2>

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
                                <a class="title" href="#">Lúa mì</a>
                                <p><strong>2,500,000 </strong>Kho A</p>
                                <p> <small>20 đơn hàng</small>
                                </p>
                                </p>
                            </div>
                        </li>
                        <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                                <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">Lúa mì</a>
                                <p><strong>2,500,000 </strong>Kho A</p>
                                <p> <small>15 đơn hàng</small>
                                </p>
                                </p>
                            </div>
                        </li>
                        <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                                <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">Lúa mì</a>
                                <p><strong>2,500,000 </strong>Kho A</p>
                                <p> <small>1 đơn hàng</small>
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
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "Doanh Thu",
                    backgroundColor: "rgba(76, 175, 80, 0.68)",
//                    borderColor: "rgba(38, 185, 154, 0.7)",
                    pointBorderColor: "rgba(38, 185, 154, 0.7)",
                    pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointBorderWidth: 1,
                    data: [31, 74, 6, 39, 20, 85, 7]
                }]
            },
        });

        // Bar chart
        var ctx = document.getElementById("mybarChart");
        var mybarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May"],
                datasets: [{
                    label: 'Thành công',
                    backgroundColor: "#4caf50",
                    data: [51, 30, 40, 28, 92]
                }, {
                    label: 'Thất bại',
                    backgroundColor: "#FF9800",
                    data: [41, 56, 25, 48, 72]
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