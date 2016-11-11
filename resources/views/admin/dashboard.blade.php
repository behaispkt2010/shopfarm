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
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
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
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Hoạt động gần đây </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">
                        <li>
                            <div class="block">
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>nongsantunhien.com đã tạo mới một bộ sưu tập: sỉ</a>
                                    </h2>
                                    <div class="byline">
                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                    </div>
                                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>nongsantunhien.com đã tạo mới một bộ sưu tập: sỉ</a>
                                    </h2>
                                    <div class="byline">
                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                    </div>
                                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>nongsantunhien.com đã tạo mới một bộ sưu tập: sỉ</a>
                                    </h2>
                                    <div class="byline">
                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                    </div>
                                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>nongsantunhien.com đã tạo mới một bộ sưu tập: sỉ</a>
                                    </h2>
                                    <div class="byline">
                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                    </div>
                                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
@section('add_scripts')
    <script src="{{asset('plugin/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('plugin/morris.js/morris.min.js')}}"></script>

<script>
    $(document).ready(function() {
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


        $MENU_TOGGLE.on('click', function() {
            $(window).resize();
        });
    });
    $(document).on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
        $(window).resize();
    })
</script>
<!-- /morris.js -->
    @endsection