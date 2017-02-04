

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header" class="type_6">

        <!-- - - - - - - - - - - - - - Top part - - - - - - - - - - - - - - - - -->

        <div class="top_part">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-7 col-sm-8 col-xs-6 text-left">


                        <span>Liên hệ với chúng tôi:</span> <b>+1888 234 5678</b>



                        <!-- - - - - - - - - - - - - - Login - - - - - - - - - - - - - - - - -->



                        <!-- - - - - - - - - - - - - - End login - - - - - - - - - - - - - - - - -->

                    </div> <!--/ [col]-->

                    <div class="col-lg-6 col-md-5 col-sm-4  col-xs-6 text-right" style="text-align: right;">
                @if(( !Auth::check()))
                        <p> <a href="{{url('/login')}}" data-modal-url="{{url('/login')}}">Đăng nhập</a> or <a href="{{url('/register')}}">Đăng ký</a></p>

                     @else
                    <p> chào bạn <a href="">{{Auth::user()->name}}</a> |  <a href="{{ url('/logout') }}"
                                                                             onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                            <i class="fa fa-unlock" aria-hidden="true"></i> Đăng xuất
                        </a></p>
                    @endif

                    <form id="logout-form"
                          action="{{ url('/logout') }}"
                          method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    </div><!--/ [col]-->

                </div><!--/ .row-->

            </div><!--/ .container -->

        </div><!--/ .top_part -->

        <!-- - - - - - - - - - - - - - End of top part - - - - - - - - - - - - - - - - -->

        <hr>

        <!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

        <div class="bottom_part">

            <div class="container">

                <div class="row">

                    <div class="main_header_row">

                        <div class="col-sm-3">

                            <!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

                            <a href="/" class="logo">

                                <img src="../../../frontend/images/logo.png" alt="">

                            </a>

                            <!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->

                        <div class="col-sm-3">

                            <!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->



                            <!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->

                        <div class="col-sm-6">

                            <!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

                            <form action="/" class="clearfix search" method="get">


                                <input type="text"  tabindex="1" placeholder="Tên,mã sản phẩm..." name="search" class="alignleft">

                                <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

                                <div class="search_category alignleft">
                                    <input type="hidden" id="" name="cateSearch" class="hidden">

                                    <div class="open_categories">Danh mục</div>

                                    <ul class="categories_list dropdown">

                                        @foreach(\App\CategoryProduct::getCate() as $itemCate)
                                        <li class="animated_item" data-id="{{$itemCate->id}}"><a>{{$itemCate->name}}</a></li>
                                        @endforeach

                                    </ul>

                                </div><!--/ .search_category.alignleft-->

                                <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

                                <button class="button_blue def_icon_btn alignleft"></button>

                            </form><!--/ #search-->

                            <!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->

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

