@extends('layouts.admin')
@section('title', 'dashboard')
@section('pageHeader','Thống kê')
@section('detailHeader','số đơn hàng, hàng tồn kho,...')
@section('content')

    <div class="row">
        <br>
        <div class="col-md-3 text-center">Đơn Hàng<br><span class="value-das">200</span></div>
        <div class="col-md-3 text-center">Doanh Thu<br><span class="value-das">64.27M</span></div>
        <div class="col-md-3 text-center">Lợi nhuận hiện tại<br><span class="value-das">200,200</span></div>
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
@endsection