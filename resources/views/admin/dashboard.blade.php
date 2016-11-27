@extends('layouts.admin')
@section('title', 'dashboard')
@section('pageHeader','Thống kê')
@section('detailHeader','số đơn hàng, hàng tồn kho,...')
@section('content')
    <div class="row tile_count">
        <div class="x_panel">
            <div class="x_content">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab_content1" id="tab1" role="tab" data-toggle="tab" aria-expanded="false">
                                <div class="time-line">Hôm nay</div>
                                <h3 class="sale">0.00 đ</h3>

                                <div class="order">0 đơn hàng</div>
                            </a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab"
                                                            aria-expanded="true">
                                <div class="time-line">Hôm Qua</div>
                                <h3 class="sale">0.00 đ</h3>

                                <div class="order">0 đơn hàng</div>
                            </a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="tab3" data-toggle="tab"
                                                            aria-expanded="true">

                                <div class="time-line">7 ngày trước</div>
                                <h3 class="sale">0.00 đ</h3>

                                <div class="order">0 đơn hàng</div>
                            </a>
                        </li>
                        <li role="presentation"><a href="#tab_content4" id="tab4" role="tab" data-toggle="tab"
                                                   aria-expanded="true">

                                <div class="time-line">30 ngày trước</div>
                                <h3 class="sale">0.00 đ</h3>

                                <div class="order">0 đơn hàng</div>
                            </a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content5" role="tab" id="tab5" data-toggle="tab"
                                                            aria-expanded="true">

                                <div class="time-line">90 ngày trước</div>
                                <h3 class="sale">0.00 đ</h3>

                                <div class="order">0 đơn hàng</div>
                            </a>
                        </li>

                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                             aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Thống kê doanh thu
                                                <small>theo giờ</small>
                                            </h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div id="graph_bar" style="width:100%; height:280px;"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Sản phẩm bán chạy</h2>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <ul class="list-unstyled top_profiles scroll-view">
                                                <li class="media event">
                                                    <a class="pull-left border-aero profile_thumb">
                                                        <i class="fa fa-user aero"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-green profile_thumb">
                                                        <i class="fa fa-user green"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-blue profile_thumb">
                                                        <i class="fa fa-user blue"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-aero profile_thumb">
                                                        <i class="fa fa-user aero"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade  in" id="tab_content2"
                             aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Thống kê doanh thu
                                                <small>theo giờ</small>
                                            </h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div id="graph_bar1" style="width:100%; height:280px;"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Sản phẩm bán chạy</h2>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <ul class="list-unstyled top_profiles scroll-view">
                                                <li class="media event">
                                                    <a class="pull-left border-aero profile_thumb">
                                                        <i class="fa fa-user aero"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-green profile_thumb">
                                                        <i class="fa fa-user green"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-blue profile_thumb">
                                                        <i class="fa fa-user blue"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-aero profile_thumb">
                                                        <i class="fa fa-user aero"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade  in" id="tab_content3"
                             aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Thống kê doanh thu
                                                <small>theo giờ</small>
                                            </h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div id="graph_bar2" style="width:100%; height:280px;"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Sản phẩm bán chạy</h2>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <ul class="list-unstyled top_profiles scroll-view">
                                                <li class="media event">
                                                    <a class="pull-left border-aero profile_thumb">
                                                        <i class="fa fa-user aero"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-green profile_thumb">
                                                        <i class="fa fa-user green"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-blue profile_thumb">
                                                        <i class="fa fa-user blue"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-aero profile_thumb">
                                                        <i class="fa fa-user aero"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade  in" id="tab_content4"
                             aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Thống kê doanh thu
                                                <small>theo giờ</small>
                                            </h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div id="graph_bar3" style="width:100%; height:280px;"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Sản phẩm bán chạy</h2>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <ul class="list-unstyled top_profiles scroll-view">
                                                <li class="media event">
                                                    <a class="pull-left border-aero profile_thumb">
                                                        <i class="fa fa-user aero"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-green profile_thumb">
                                                        <i class="fa fa-user green"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-blue profile_thumb">
                                                        <i class="fa fa-user blue"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-aero profile_thumb">
                                                        <i class="fa fa-user aero"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade  in" id="tab_content5"
                             aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Thống kê doanh thu
                                                <small>theo giờ</small>
                                            </h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div id="graph_bar4" style="width:100%; height:280px;"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Sản phẩm bán chạy</h2>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <ul class="list-unstyled top_profiles scroll-view">
                                                <li class="media event">
                                                    <a class="pull-left border-aero profile_thumb">
                                                        <i class="fa fa-user aero"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-green profile_thumb">
                                                        <i class="fa fa-user green"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-blue profile_thumb">
                                                        <i class="fa fa-user blue"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="media event">
                                                    <a class="pull-left border-aero profile_thumb">
                                                        <i class="fa fa-user aero"></i>
                                                    </a>

                                                    <div class="media-body">
                                                        <a class="title" href="#">Ms. Mary Jane</a>

                                                        <p><strong>$2300. </strong> Agent Avarage Sales </p>

                                                        <p>
                                                            <small>12 Sales Today</small>
                                                        </p>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row tile_count">
        <div class="x_panel">
            <div class="col-md-6 col-sm-6 col-xs-12">

                <div class="x_panel fixed_height_320">
                    <div class="x_title">
                        <h2>Gói dịch vụ
                        </h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="" style="width:100%">

                            <tr>
                                <td>
                                    <canvas id="canvas1" height="140" width="140"
                                            style="margin: 15px 10px 10px 0"></canvas>
                                </td>
                                <td>
                                    <table class="tile_info">
                                        <tr>
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
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- start of weather widget -->
            <div class="col-md-6 col-sm-6 col-xs-12 ">
                <div class="x_panel fixed_height_320">
                    <div class="x_title">
                        <h2>Thời tiết</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="weather-icon">
                          <span>
                                              <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                          </span>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="weather-text">
                                    <h2>Hồ Chí Minh
                                        <br><i>city</i>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="clearfix"></div>


                        <div class="row weather-days">
                            <div class="col-sm-2">
                                <div class="daily-weather">
                                    <h2 class="day">Mon</h2>
                                    <h3 class="degrees">25</h3>
                          <span>
                                                  <canvas id="clear-day" width="32" height="32">
                                                  </canvas>

                                          </span>

                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="daily-weather">
                                    <h2 class="day">Tue</h2>
                                    <h3 class="degrees">25</h3>
                                    <canvas height="32" width="32" id="rain"></canvas>

                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="daily-weather">
                                    <h2 class="day">Wed</h2>
                                    <h3 class="degrees">27</h3>
                                    <canvas height="32" width="32" id="snow"></canvas>

                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="daily-weather">
                                    <h2 class="day">Thu</h2>
                                    <h3 class="degrees">28</h3>
                                    <canvas height="32" width="32" id="sleet"></canvas>

                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="daily-weather">
                                    <h2 class="day">Fri</h2>
                                    <h3 class="degrees">28</h3>
                                    <canvas height="32" width="32" id="wind"></canvas>

                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="daily-weather">
                                    <h2 class="day">Sat</h2>
                                    <h3 class="degrees">26</h3>
                                    <canvas height="32" width="32" id="cloudy"></canvas>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end of weather widget -->
        </div>
    </div>
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26081603.29442043!2d-95.677068!3d37.06250000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1480212516190"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>


@endsection
@section('add_scripts')
    <script src="{{asset('plugin/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('plugin/morris.js/morris.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            Morris.Bar({
                element: 'graph_bar',
                data: [
                    {device: '9h', geekbench: 380},
                    {device: '12h', geekbench: 655},
                    {device: '15h', geekbench: 275},
                    {device: '20h', geekbench: 1571},
                    {device: '23h', geekbench: 655},
                ],
                xkey: 'device',
                ykeys: ['geekbench'],
                labels: ['Geekbench'],
                barRatio: 0.4,
                barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                xLabelAngle: 35,
                hideHover: 'auto',
                resize: true
            });
            Morris.Bar({
                element: 'graph_bar1',
                data: [
                    {device: '9h', geekbench: 380},
                    {device: '12h', geekbench: 655},
                    {device: '15h', geekbench: 275},
                    {device: '20h', geekbench: 1571},
                    {device: '23h', geekbench: 655},
                ],
                xkey: 'device',
                ykeys: ['geekbench'],
                labels: ['Geekbench'],
                barRatio: 0.4,
                barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                xLabelAngle: 35,
                hideHover: 'auto',
                resize: true
            });
            Morris.Bar({
                element: 'graph_bar2',
                data: [
                    {device: '9h', geekbench: 380},
                    {device: '12h', geekbench: 655},
                    {device: '15h', geekbench: 275},
                    {device: '20h', geekbench: 1571},
                    {device: '23h', geekbench: 655},

                ],
                xkey: 'device',
                ykeys: ['geekbench'],
                labels: ['Geekbench'],
                barRatio: 0.4,
                barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                xLabelAngle: 35,
                hideHover: 'auto',
                resize: true
            });
            Morris.Bar({
                element: 'graph_bar3',
                data: [
                    {device: '9h', geekbench: 380},
                    {device: '12h', geekbench: 655},
                    {device: '15h', geekbench: 275},
                    {device: '20h', geekbench: 1571},
                    {device: '23h', geekbench: 655},
                ],
                xkey: 'device',
                ykeys: ['geekbench'],
                labels: ['Geekbench'],
                barRatio: 0.4,
                barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                xLabelAngle: 35,
                hideHover: 'auto',
                resize: true
            });
            Morris.Bar({
                element: 'graph_bar4',
                data: [
                    {device: '9h', geekbench: 380},
                    {device: '12h', geekbench: 655},
                    {device: '15h', geekbench: 275},
                    {device: '20h', geekbench: 1571},
                    {device: '23h', geekbench: 655},
                ],
                xkey: 'device',
                ykeys: ['geekbench'],
                labels: ['Geekbench'],
                barRatio: 0.4,
                barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                xLabelAngle: 35,
                hideHover: 'auto',
                resize: true
            });


            $MENU_TOGGLE.on('click', function () {
                $(window).resize();
            });
        });
        $(document).on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
            $(window).resize();
        })
    </script>
    <!-- /morris.js -->
    <!-- Doughnut Chart -->
    <script>
        $(document).ready(function () {
            var options = {
                legend: false,
                responsive: false
            };

            new Chart(document.getElementById("canvas1"), {
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

    <!-- Skycons -->
    <script>
        var icons = new Skycons({
                    "color": "#73879C"
                }),
                list = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);

        icons.play();
    </script>
    <!-- /Skycons -->
@endsection