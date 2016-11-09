@extends('layouts.admin')
@section('title', 'dashboard')
@section('pageHeader','Thống kê')
@section('detailHeader','số đơn hàng, khách hàng, hàng tồn kho,...')
@section('content')
    <div class="row tile_count">
        <div class="x_panel">

            <div class="x_content">


                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="tab1" role="tab"
                                                                  data-toggle="tab" aria-expanded="true">
                                <div class="time-line">Hôm nay</div>
                                <h3 class="sale">0.00 đ</h3>

                                <div class="order">0 đơn hàng</div>

                            </a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab"
                                                            aria-expanded="false">
                                <div class="time-line">Hôm Qua</div>
                                <h3 class="sale">0.00 đ</h3>

                                <div class="order">0 đơn hàng</div>
                            </a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="tab3" data-toggle="tab"
                                                            aria-expanded="false">

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
                                                            aria-expanded="false">

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
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                                Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                                artisan four loko farm-to-table craft beer twee. Qui photo
                                booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                                artisan four loko farm-to-table craft beer twee. Qui photo
                                booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Hoạt động của cửa hàng </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <article class="media event">
                        <a class="pull-left date">
                            <p class="month">April</p>

                            <p class="day">23</p>
                        </a>

                        <div class="media-body">
                            <a class="title" href="#">Item One Title</a>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                    <article class="media event">
                        <a class="pull-left date">
                            <p class="month">April</p>

                            <p class="day">23</p>
                        </a>

                        <div class="media-body">
                            <a class="title" href="#">Item Two Title</a>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                    <article class="media event">
                        <a class="pull-left date">
                            <p class="month">April</p>

                            <p class="day">23</p>
                        </a>

                        <div class="media-body">
                            <a class="title" href="#">Item Two Title</a>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                    <article class="media event">
                        <a class="pull-left date">
                            <p class="month">April</p>

                            <p class="day">23</p>
                        </a>

                        <div class="media-body">
                            <a class="title" href="#">Item Two Title</a>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                    <article class="media event">
                        <a class="pull-left date">
                            <p class="month">April</p>

                            <p class="day">23</p>
                        </a>

                        <div class="media-body">
                            <a class="title" href="#">Item Three Title</a>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Hoạt động của nhân viên</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <article class="media event">
                        <a class="pull-left date">
                            <p class="month">April</p>

                            <p class="day">23</p>
                        </a>

                        <div class="media-body">
                            <a class="title" href="#">Item One Title</a>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                    <article class="media event">
                        <a class="pull-left date">
                            <p class="month">April</p>

                            <p class="day">23</p>
                        </a>

                        <div class="media-body">
                            <a class="title" href="#">Item Two Title</a>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                    <article class="media event">
                        <a class="pull-left date">
                            <p class="month">April</p>

                            <p class="day">23</p>
                        </a>

                        <div class="media-body">
                            <a class="title" href="#">Item Two Title</a>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                    <article class="media event">
                        <a class="pull-left date">
                            <p class="month">April</p>

                            <p class="day">23</p>
                        </a>

                        <div class="media-body">
                            <a class="title" href="#">Item Two Title</a>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                    <article class="media event">
                        <a class="pull-left date">
                            <p class="month">April</p>

                            <p class="day">23</p>
                        </a>

                        <div class="media-body">
                            <a class="title" href="#">Item Three Title</a>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="col-md-4">
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
                    </ul>
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
                {device: 'iPhone 4', geekbench: 380},
                {device: 'iPhone 4S', geekbench: 655},
                {device: 'iPhone 3GS', geekbench: 275},
                {device: 'iPhone 5', geekbench: 1571},
                {device: 'iPhone 5S', geekbench: 655},
                {device: 'iPhone 6', geekbench: 2154},
                {device: 'iPhone 6 Plus', geekbench: 1144},
                {device: 'iPhone 6S', geekbench: 2371},
                {device: 'iPhone 6S Plus', geekbench: 1471},
                {device: 'Other', geekbench: 1371}
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
            element: 'graph_bar_group',
            data: [
                {"period": "2016-10-01", "licensed": 807, "sorned": 660},
                {"period": "2016-09-30", "licensed": 1251, "sorned": 729},
                {"period": "2016-09-29", "licensed": 1769, "sorned": 1018},
                {"period": "2016-09-20", "licensed": 2246, "sorned": 1461},
                {"period": "2016-09-19", "licensed": 2657, "sorned": 1967},
                {"period": "2016-09-18", "licensed": 3148, "sorned": 2627},
                {"period": "2016-09-17", "licensed": 3471, "sorned": 3740},
                {"period": "2016-09-16", "licensed": 2871, "sorned": 2216},
                {"period": "2016-09-15", "licensed": 2401, "sorned": 1656},
                {"period": "2016-09-10", "licensed": 2115, "sorned": 1022}
            ],
            xkey: 'period',
            barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
            ykeys: ['licensed', 'sorned'],
            labels: ['Licensed', 'SORN'],
            hideHover: 'auto',
            xLabelAngle: 60,
            resize: true
        });

        Morris.Bar({
            element: 'graphx',
            data: [
                {x: '2015 Q1', y: 2, z: 3, a: 4},
                {x: '2015 Q2', y: 3, z: 5, a: 6},
                {x: '2015 Q3', y: 4, z: 3, a: 2},
                {x: '2015 Q4', y: 2, z: 4, a: 5}
            ],
            xkey: 'x',
            ykeys: ['y', 'z', 'a'],
            barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
            hideHover: 'auto',
            labels: ['Y', 'Z', 'A'],
            resize: true
        }).on('click', function (i, row) {
            console.log(i, row);
        });

        Morris.Area({
            element: 'graph_area',
            data: [
                {period: '2014 Q1', iphone: 2666, ipad: null, itouch: 2647},
                {period: '2014 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
                {period: '2014 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
                {period: '2014 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
                {period: '2015 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
                {period: '2015 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
                {period: '2015 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
                {period: '2015 Q4', iphone: 15073, ipad: 5967, itouch: 5175},
                {period: '2016 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
                {period: '2016 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
            ],
            xkey: 'period',
            ykeys: ['iphone', 'ipad', 'itouch'],
            lineColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
            labels: ['iPhone', 'iPad', 'iPod Touch'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });

        Morris.Donut({
            element: 'graph_donut',
            data: [
                {label: 'Jam', value: 25},
                {label: 'Frosted', value: 40},
                {label: 'Custard', value: 25},
                {label: 'Sugar', value: 10}
            ],
            colors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
            formatter: function (y) {
                return y + "%";
            },
            resize: true
        });

        Morris.Line({
            element: 'graph_line',
            xkey: 'year',
            ykeys: ['value'],
            labels: ['Value'],
            hideHover: 'auto',
            lineColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
            data: [
                {year: '2012', value: 20},
                {year: '2013', value: 10},
                {year: '2014', value: 5},
                {year: '2015', value: 5},
                {year: '2016', value: 20}
            ],
            resize: true
        });

        $MENU_TOGGLE.on('click', function() {
            $(window).resize();
        });
    });
</script>
<!-- /morris.js -->
    @endsection