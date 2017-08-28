<header class="hidden-xs">
    <div class="logo">
        <a href="{{url('/')}}">
            <img src="{{url('/')}}/images/logo-w.png">

        </a>
    </div>
    <div id="search" class="filtergroup w80 nomargin">
        <input type="text" id="keyword" onkeydown="this.style.color = '#333';" onclick="this.value = '';" value="Tìm nguồn hàng chất lượng, tìm nhà cung cấp uy tín,..." name="keyword">
        <button class="button-search btnsearch" type="button"><i class="fa fa-search"></i></button>
    </div>
    <ul class="box-manage">
        @if(( !Auth::check()))
                <li><a class="btn btn-raised btn-dangtin col-xs-12" href="">ĐĂNG TIN MUA BÁN</a></li>
                <li><a class="btn btn-raised btn-default col-xs-12" href="{{url('/login')}}" data-modal-url="{{url('/login')}}">ĐĂNG NHẬP </a></li>
                <li><a class="btn btn-raised btn-default col-xs-12" href="{{url('/register')}}" >ĐĂNG KÝ</a></li>
        @else
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false" style="color: #fff; line-height: 30px; padding-left: 10px;">Chào bạn, {{Auth::user()->name}}</a>
            <li><a class="btn btn-raised btn-dangtin col-xs-12" href="">ĐĂNG TIN MUA BÁN</a></li>            
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
                            <button type="button" style="float: left;" class="navbar-toggle collapsed main_navigation_fronend" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                                <a href="{{url('/')}}" class="logo" style="float: left; width: 72%;margin-top: -17px;">
                                    <img src="{{asset('frontend/images/logo_rp_shop.png')}}" alt="" style="height: 60px;">
                                </a>
                                <li class="user">
                                    @if(( !Auth::check()))
                                        <a href="#" title="Đăng nhập" class="fa fa-user login_xs" style="color: #fff; padding-left: 15px; float: right;"></a>
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
                        
                        <div id="navbar" class="navbar-collapse collapse" style="height: 1px;">
                            <ul class="nav navbar-nav clearfix sm">
                                <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Trang chủ</a></li>
                                <li><a href="{{url('/resisterWareHouse')}}"><i class="fa fa-plus-circle"></i> Tạo hồ sơ</a></li>
                                <li><a href="#"><i class="fa fa-facebook-square"></i> Group</a></li>
                                <li><a href="{{ url('/company-business') }}"><i class="fa fa-briefcase"></i> Cơ hội mua bán</a></li>
                                <!-- <li><a href="#"><i class="fa fa-search"></i> Tìm kiếm</a></li> -->
                                <li><a href="{{url('/contact')}}"><i class="fa fa-headphones"></i> Hỗ trợ</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>   
</header>
<div class="col-md-2 left_col menu_fixed hidden-xs">
    <div class="left_col scroll-view">
        <div class="clearfix"></div>

        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <div class="clear"></div>
                <ul class="nav side-menu">
                    <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li><a href="{{url('/resisterWareHouse')}}"><i class="fa fa-plus-circle"></i> Tạo hồ sơ</a></li>
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Group</a></li>
                    <li><a href="{{ url('/company-business') }}"><i class="fa fa-briefcase"></i> Cơ hội mua bán</a></li>
                    <!-- <li><a href="#"><i class="fa fa-search"></i> Tìm kiếm</a></li> -->
                    <li><a href="{{url('/contact')}}"><i class="fa fa-headphones"></i> Hỗ trợ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-md-10">
    

<ul class="nav navbar-nav clearfix sm hidden-xs" style="margin-left: 250px;">
    <div class="sticky_inner type_2">
        <div class="nav_item">
            <nav class="main_navigation">
                <ul>
                {{\App\Menu::get_menu_frontend()}}
                </ul>

            </nav>
        </div>
    </div>
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
