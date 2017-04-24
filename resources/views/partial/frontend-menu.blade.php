

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header" class="type_6 hidden-xs">

        <!-- - - - - - - - - - - - - - Top part - - - - - - - - - - - - - - - - -->

        {{--<div class="top_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-8 col-xs-6 text-left">
                        <span>Liên hệ với chúng tôi:</span> <b>{!! \App\Setting::getValue('phone')!!}</b>


                    </div>
                </div>

            </div>

        </div>--}}

        <!-- - - - - - - - - - - - - - End of top part - - - - - - - - - - - - - - - - -->

        <hr>

        <!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

        <div class="bottom_part">

            <div class="container">

                <div class="row">

                    <div class="main_header_row">

                        <div class="col-sm-3">

                            <!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

                            <a href="{{url('/')}}" class="logo">

                                <img src="{{asset('frontend/images/logo.png')}}" alt="">

                            </a>

                            <!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->


                        <div class="col-sm-6">

                            <!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

                            <form action="/" class="clearfix search" method="get">


                                <input type="text"  tabindex="1" placeholder="Tìm sản phẩm bạn mong muốn..." name="search" class="alignleft">

                                <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->
                                <!-- @foreach(\App\CategoryProduct::getCate() as $itemCate)
                                        <li class="animated_item" data-id="{{$itemCate->id}}"><a>{{$itemCate->name}}</a></li>
                                        @endforeach 
                                    <div class="search_category alignleft">
                                    <input type="hidden" id="" name="cateSearch" class="hidden">

                                    <div class="open_categories">Danh mục</div>

                                    <ul class="categories_list dropdown">

                                        

                                    </ul>

                                </div> -->

                                <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

                                <button class="button_blue def_icon_btn alignleft"></button>

                            </form><!--/ #search-->

                            <!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->
                        <div class="col-sm-2" style="font-size: 16px; color: #fff;">

                            <!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->

                            @if(( !Auth::check()))
                                <a href="{{url('/login')}}" data-modal-url="{{url('/login')}}" style="color: #fff;">Đăng nhập</a> <br> Hoặc <a href="{{url('/register')}}" style="color: #fff;">Đăng ký</a>

                            {{--@else
                                Chào bạn <a href="">{{Auth::user()->name}}</a> |  <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Đăng xuất
                                    </a>
                            @endif--}}

                            @else
                                Chào bạn <br><a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" style="color: #fff;">{{Auth::user()->name}}</a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right" style="top: 71%;right: 0px;">
                                    <li><a href="{{ route('users.edit',['id' => Auth::user()->id]) }}">
                                            <i class="fa fa-info-circle pull-right"></i>Thông tin tài khoản
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

                            <!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->
                        <div class="col-sm-3" style="padding: 0px;left: -17px; color: #fff;">
                            {{--<img src="{{asset('/images/user_default.png')}}" class="img-responsive" alt="">--}}
                            <p style="margin: 0px;">Hotline liên hệ</p>
                            <p><i class="fa fa-phone" aria-hidden="true" style="margin-top: 4px; margin-right: 4px;"></i><b>{!! \App\Setting::getValue('phone')!!}</b></p>
                        </div>

                    </div><!--/ .main_header_row-->

                </div><!--/ .row-->

            </div><!--/ .container-->

        </div><!--/ .bottom_part -->

        <!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->

        <!-- - - - - - - - - - - - - - Main navigation wrapper - - - - - - - - - - - - - - - - -->

        <div id="main_navigation_wrap">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12">

                        <!-- - - - - - - - - - - - - - Sticky container - - - - - - - - - - - - - - - - -->

                        <div class="sticky_inner type_2">



                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

                            <div class="nav_item">
                                <nav class="main_navigation">
                                    <ul>

                                    {{\App\Menu::get_menu_frontend()}}
                                        {{--<li data-toggle="modal" data-target="#myModal"><a href="">Kiểm tra đơn hàng</a></li>--}}
                                    </ul>

                                </nav><!--/ .main_navigation-->

                            </div>

                            <!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->




                        </div><!--/ .sticky_inner -->

                        <!-- - - - - - - - - - - - - - End of sticky container - - - - - - - - - - - - - - - - -->

                    </div><!--/ [col]-->

                </div><!--/ .row-->

            </div><!--/ .container-->

        </div><!--/ .main_navigation_wrap-->

        <!-- - - - - - - - - - - - - - End of main navigation wrapper - - - - - - - - - - - - - - - - -->

    </header>

    <header class="type_6 visible-xs">
        <div id="main_navigation_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="sticky_inner type_2">
                            <div class="nav_item">
                                <nav class="main_navigation">
                                    <ul>
                                    {{\App\Menu::get_menu_frontend()}}
                                        {{--<li data-toggle="modal" data-target="#myModal"><a href="">Kiểm tra đơn hàng</a></li>--}}
                                    </ul>
                                </nav>
                            </div>
                            <div class="search"><button class="button_blue def_icon_btn alignleft"></button></div>
                            <div class="col-sm-2" style="font-size: 16px; color: #fff;">
                            @if(( !Auth::check()))
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" style="color: #fff;"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right" style="top: 70%; right: 80px;">
                                    <li><a href="{{url('/login')}}" data-modal-url="{{url('/login')}}" >Đăng nhập</a></li>
                                    <li><a href="{{url('/register')}}" >Đăng ký</a></li>
                                </ul>
                            @else
                            Chào bạn <br><a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" style="color: #fff;">{{Auth::user()->name}}</a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right" style="top: 60%;right: 20px;">
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
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_part">
            <div class="container">
                <div class="row">
                    <div class="main_header_row">
                        
                        <div class="col-sm-6">
                            <form action="{{ url('/') }}" class="clearfix search" method="get">
                                <input type="text"  tabindex="1" placeholder="Tìm sản phẩm bạn mong muốn..." name="search" class="alignleft">
                                <button class="button_blue def_icon_btn alignleft"></button>
                            </form>
                        </div>
                        <div class="col-sm-2" style="font-size: 16px; color: #fff;">
                            @if(( !Auth::check()))
                                <a href="{{url('/login')}}" data-modal-url="{{url('/login')}}" style="color: #fff;">Đăng nhập</a> <br> Hoặc <a href="{{url('/register')}}" style="color: #fff;">Đăng ký</a>

                            {{--@else
                                Chào bạn <a href="">{{Auth::user()->name}}</a> |  <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Đăng xuất
                                    </a>
                            @endif--}}

                            @else
                                Chào bạn <br><a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" style="color: #fff;">{{Auth::user()->name}}</a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right" style="top: 60%;right: 20px;">
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
                        </div>
                        <div class="col-sm-3" style="padding: 0px;left: -17px; color: #fff;">
                            {{--<img src="{{asset('/images/user_default.png')}}" class="img-responsive" alt="">--}}
                            <p style="margin: 0px;">Hotline liên hệ</p>
                            <p><i class="fa fa-phone" aria-hidden="true" style="margin-top: 4px; margin-right: 4px;"></i><b>{!! \App\Setting::getValue('phone')!!}</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <a href="{{url('/')}}" class="logo">
                    <img src="{{asset('frontend/images/logo.png')}}" alt="">
                </a>
            </div>
        </div>
        
    </header>


    <!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->

    <!-- Modal check order-->
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

