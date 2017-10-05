<header class="hidden-xs">
    <div class="logo col-md-2 col-sm-2">
        <a href="{{url('/')}}">
            <img src="{{asset('frontend/images/nosago1.png')}}" class="img_logo_front">

        </a>
    </div>
    <div id="search" class="filtergroup w80 nomargin">
        <form action="{{ url('/') }}" class="clearfix search" method="get">
            <input type="text" id="keyword" onkeydown="this.style.color = '#333';" onclick="this.value = '';" value="" name="search">
            <button class="button-search btnsearch" type="submit"><i class="fa fa-search"></i></button>
        </form>
        
    </div>
    <ul class="box-manage">
        @if(( !Auth::check()))
                <li><a class="btn btn-raised btn-dangtin col-xs-12" href="" style="background-color: #00695c !important;">ĐĂNG TIN MUA BÁN</a></li>
                <li><a class="btn btn-raised btn-dangtin col-xs-12" href="{{url('/login')}}" data-modal-url="{{url('/login')}}">ĐĂNG NHẬP </a></li>
                <li><a class="btn btn-raised btn-dangtin col-xs-12" href="{{url('/register')}}" >ĐĂNG KÝ</a></li>
        @else
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false" style="color: #000; line-height: 54px; padding-left: 10px;">Chào bạn, {{Auth::user()->name}}</a>
            <li><a class="btn btn-raised btn-dangtin col-xs-12" href="" style="background-color: #00695c !important;">ĐĂNG TIN MUA BÁN</a></li>            
            <ul class="dropdown-menu dropdown-usermenu pull-right" style="top: 9%; right: 0px;">
                <li><a href="{{ route('users.edit',['id' => Auth::user()->id]) }}">
                        <i class="fa fa-info-circle pull-right"></i>Tài khoản
                    </a>
                </li>
                <li><a href="{{ url('/logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out pull-right"></i>Thoát
                    </a>
                </li>
            </ul>
        @endif

        <form id="logout-form"
              action="{{ url('/logout') }}"
              method="POST"
              style="display: none;">
            {{ csrf_field() }}
        </form>

    </ul>
</header>
<header class="type_6 visible-xs">
    <div id="main_navigation_wrap" >
        <div class="bottom_part">
            <div class="main">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="navbar-header">
                            <button type="button" style="" class="navbar-toggle collapsed main_navigation_fronend" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                                <a href="{{url('/')}}" class="logo" style="width: 66%; margin-top: -17px;">
                                    <img src="{{asset('frontend/images/nosago1.png')}}" alt="" style="height: 60px;">
                                </a>
                                <li class="user">
                                    @if(( !Auth::check()))
                                        <a href="#" title="Đăng nhập" class="fa fa-user login_xs" style="color: #00695b; padding-left: 15px; "></a>
                                    @else
                                        <a href="javascript:;" class="fa fa-user user-profile dropdown-toggle is_login" data-toggle="dropdown"
                                                    aria-expanded="false" ></a>
                                        <ul class="dropdown-menu dropdown-usermenu pull-right" style="top: 38%;right: 0px;">
                                            <li><a href="#">Xin chào {{Auth::user()->name}} !!! </a></li>
                                            <li><a href="{{ route('users.edit',['id' => Auth::user()->id]) }}">
                                                    <i class="fa fa-info-circle pull-right icon_fa_frmlogin"></i>Tài khoản
                                                </a>
                                            </li>
                                            <li><a href="{{ url('/logout') }}"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="fa fa-sign-out pull-right icon_fa_frmlogin"></i>Thoát
                                                </a>
                                            </li>
                                        </ul>
                                    @endif

                                    <form id="logout-form"
                                          action="{{ url('/logout') }}"
                                          method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                </div>
                            
                        <div class="">
                            <div id="navbar" class="navbar-collapse collapse" style="height: 1px;">
                                <ul class="nav navbar-nav clearfix sm">
                                    <li><a href="{{url('/')}}"><i class="material-icons icon_home">home</i> Trang chủ</a></li>
                                    <li><a href="{{url('/resisterWareHouse')}}"><i class="material-icons icon_home">add_circle</i> Tạo hồ sơ</a></li>
                                    <li><a href="#"><i class="material-icons icon_home">share</i> Group</a></li>
                                    <li><a href="{{ url('/company-business') }}"><i class="material-icons icon_home">work</i> Cơ hội mua bán</a></li>
                                    <!-- <li><a href="#"><i class="fa fa-search"></i> Tìm kiếm</a></li> -->
                                    <li><a href="{{url('/contact')}}"><i class="material-icons icon_home">headset</i> Hỗ trợ</a></li>
                                    <li><a href="{{url('/contact')}}"><i class="material-icons icon_home">flash_on</i> Chiến dịch</a></li>
                                </ul>
                            </div>
                            <div class="mobile-menu-icon-wrapper visible-xs" style="width: 100%;padding-top: 8px;height: 56px;background-color: #f8f8f8;">
                                <ul class="mobile-menu-icon">
                                    <li class="search" style="width: 93%;-webkit-box-shadow: 3px 4px 15px -5px #888;">
                                    <div class="">
                                        <form action="{{ url('/') }}" class="clearfix search" method="get" style="">
                                            <input type="text"  tabindex="1" placeholder="Tìm nguồn hàng chất lượng, tìm nhà cung cấp uy tín,..." name="search" class="alignleft" style="">
                                            <button class="button_blue def_icon_btn alignleft" ></button>
                                        </form>
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
</header>
<div class="col-md-2 col-sm-2 left_col menu_fixed hidden-xs">
    <div class="left_col scroll-view">
        <div class="clearfix"></div>

        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <div class="clear"></div>
                <ul class="nav side-menu" style="background-color: #e7e7e7;">
                    <li><a href="{{url('/')}}"><i class="material-icons icon_home">home</i> Trang chủ</a></li>
                    <li><a href="{{url('/resisterWareHouse')}}"><i class="material-icons icon_home">add_circle</i> Tạo hồ sơ</a></li>
                    <li><a href="#"><i class="material-icons icon_home">share</i> Group</a></li>
                    <li><a href="{{ url('/company-business') }}"><i class="material-icons icon_home">work</i> Cơ hội mua bán</a></li>
                    <!-- <li><a href="#"><i class="fa fa-search"></i> Tìm kiếm</a></li> -->
                    <li><a href="{{url('/contact')}}"><i class="material-icons icon_home">headset</i> Hỗ trợ</a></li>
                    <li><a href="{{url('/contact')}}"><i class="material-icons icon_home">flash_on</i> Chiến dịch</a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <br>
        <!-- <div class="" style="background-color: #fff;padding: 10px 10px 10px 14px;font-size: 16px;font-weight: bold;">
            <i class="fa fa-bars" aria-hidden="true" style="padding-top: 2px; padding-right: 7px;"></i>Danh mục sản phẩm
        </div>
        <div class="">
            
        </div> -->
        <div class="clearfix"></div>
        <div class="search_advance">
            <div class=""> Tìm kiếm nâng cao </div>
            <form action="{{ url('/') }}" class="clearfix" method="get" style="font-weight: 300;">
                <div class="x_panel">
                    <div class="wrapper-content mt20">
                        <div class="pd-all-20 border-top-title-main">
                            <div class="form-group">
                                <div class="form-group">
                                    <select id="select-province" name="tinh" class="form-control" data-placeholder="Tỉnh/Thành Phố">
                                        <option></option>
                                        @foreach(\App\Province::get() as $itemProvince)
                                            <option value="{{$itemProvince->provinceid}}">{{$itemProvince->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="select-category" name="sanpham" class="form-control" data-placeholder="Danh mục sản phẩm">
                                        <option></option>
                                        <?php $category = \App\CategoryProduct::get();?>
                                        {{ \App\Category::CateMulti($category,0,$str="&nbsp&nbsp&nbsp&nbsp",old('parent')) }}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="select-levelkho" name="capkho" class="form-control" data-placeholder="Cấp kho">
                                        <option></option>
                                        <option value="1">Cấp 1</option>
                                        <option value="2">Cấp 2</option>
                                        <option value="3">Cấp 3</option>
                                    </select>
                                </div>
                                <input type="text" id="keyword" onkeydown="this.style.color = '#333';" onclick="this.value = '';" value="" placeholder="Nhập thông tin cần tìm" name="search" class="textsearch">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-raised btn-dangtin button-search btnsearch" style="width: 100%;" type="submit"><i style="padding-right: 10px;" class="material-icons">search</i>Tìm kiếm</button>
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="banner_qc">
            <input type="hidden" name="heightMain" class="heightMain" value="">
            <input type="hidden" name="heightBanner" class="heightBanner" value="">

            @for($i = 0; $i < 15; $i++)
            <div class="banner_one">
                 @include('frontend.panner.home-panner-sidebar-1')
            </div>
            @endfor
        </div>
    </div>
</div>
<div class="col-md-10 col-sm-10 menu_top_bg hidden-xs" style="height: 53px;">
    

<ul class="col-md-12 col-sm-12 nav navbar-nav clearfix sm hidden-xs" style="margin-left: 150px;">
    <div class="mainmenu_frontend">
        <nav class="full_width_nav main_navigation">
            <ul>
                {{\App\Menu::get_menu_frontend_full()}}
            </ul>
        </nav>
    </div>
    <!-- <div class="sticky_inner type_2">
        <div class="nav_item">
            <nav class="main_navigation">
                <ul>
                {{\App\Menu::get_menu_frontend()}}
                </ul>

            </nav>
        </div>
    </div> -->
</ul>
</div>


@include('admin.partial.modal_login_xs')
<div class="modal fade " id="modalCheckOrder" role="dialog">
    <div class="modal-dialog ">

        <!-- Modal content-->
        <div class="modal-content col-md-offset-3 col-md-6  col-sm-8 col-sm-offset-2 col-xs-12">
            <form action="{{url('/check-order')}}" method="get">
            <div class="modal-header">
                <h4 class="modal-title">Nhập mã đơn hàng</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                        <input type="text" name="code-order" placeholder="vui lòng nhập mã đơn hàng">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                <button type="submit" class="btn btn-default btn-success" id="check-order-pupup">Kiểm tra</button>
            </div>
            </form>
        </div>

    </div>
</div>
@include('admin.partial.modal_requiredlogin')
@section('add-script')
<script src="{{asset('js/selectize.js')}}"></script>
<script type="text/javascript">
    $(function() {
        var heightMain = $('main').height();
        $('.heightMain').val(heightMain);
        var heightBanner = $('.banner_qc').height();
        $('.heightBanner').val(heightBanner);


    });
</script>
<script type="text/javascript">
    
</script>

@endsection