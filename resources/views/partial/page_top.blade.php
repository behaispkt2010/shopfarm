<header class="hidden-xs">
    <div class="logo">
        <a href="{{url('/')}}">
            <img src="{{asset('frontend/images/nosago1.png')}}" class="img_logo_front">
        </a> 
    </div>
    <div class="tabs-landingpage" data-example-id="togglable-tabs">
        <ul class="box-lp">
            <li role="presentation">
                <a class="" href="#gioithieu" id="gioithieu-tab" role="tab" data-toggle="tab" aria-controls="gioithieu" aria-expanded="true">Giới thiệu</a>
            </li>
            <li role="presentation">
                <a class="" href="#tinhnang" role="tab" id="tinhnang-tab" data-toggle="tab" aria-controls="tinhnang" aria-expanded="false">Tính năng </a>
            </li>
            <li role="presentation">
                <a class="" href="#doitac" role="tab" id="doitac-tab" data-toggle="tab" aria-controls="doitac" aria-expanded="false">Đối tác</a>
            </li>
            <li role="presentation">
                <a class="" href="#capkho" role="tab" id="capkho-tab" data-toggle="tab" aria-controls="capkho" aria-expanded="false">Cấp kho</a>
            </li>
            <li role="presentation">
                <a class="" href="#dichvu" role="tab" id="dichvu-tab" data-toggle="tab" aria-controls="dichvu" aria-expanded="false">Dịch vụ</a>
            </li>
            <li role="presentation">
                <a class="" href="{{ url('/register') }}">Đăng ký</a>
            </li>
        </ul>
        <!-- <div class="tab-content-landingpage" id="tabsLandingpage">
            <div id="gioithieu" class="tab-pane fade in active">
                
            </div>
        </div>     -->
    </div>
</header>


@section('add-script')
<script type="text/javascript">
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 50) {
            $('header').addClass('after_scroll_fixed');
        } else {
            $('header').removeClass('after_scroll_fixed');
        }
    });
</script>

@endsection