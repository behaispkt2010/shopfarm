<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}" class="site_title"><img src="{{url('/')}}/images/logo-w.png" alt=""></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img data-toggle="modal" data-target=".bs-example-modal-avata" src="{{url('/')}}{{\Illuminate\Support\Facades\Auth::user()->image}}"
                     alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <div style="    font-size: 14px; color: #FFF; margin-bottom: 5px;    font-weight: 500;">{{\Illuminate\Support\Facades\Auth::user()->name}}
                </div>
                <a href="{{route('users.edit',['id' => \Illuminate\Support\Facades\Auth::user()->id])}}" style="margin-right: 10px;    font-size: 13px;"><i class="fa fa-user" aria-hidden="true"></i>
                    Thông tin</a>
                {{--<a style="font-size: 13px;"><i class="fa fa-unlock" aria-hidden="true"></i> Đăng xuất</a>--}}
               <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                    <i class="fa fa-unlock" aria-hidden="true"></i> Đăng xuất
                </a>
                <form id="logout-form"
                      action="{{ url('/logout') }}"
                      method="POST"
                      style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <div class="clearfix"></div>


        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <div class="clear"></div>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-laptop"></i> Thống kê <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="active"><a href="{{url('/admin')}}">Quản trị</a></li>
                            <li><a href="{{url('/admin/dashboard')}}">Chủ kho</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-newspaper-o"></i> Tin tức <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="active"><a href="{{route('news.index')}}">Tin tức</a></li>
                            <li><a href="{{route('news.create')}}">Tạo mới</a></li>
                            <li><a href="{{route('category.index')}}">Nhóm tin tức</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i> Trang <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('pages.index')}}">Trang</a></li>
                            <li><a href="{{route('pages.create')}}">Tạo mới</a></li>

                        </ul>
                    </li>
                    <li><a href="{{route('orders.index')}}"><i class="fa fa-edit"></i> Đơn hàng</a></li>
                    <li><a><i class="fa fa-tag"></i>Sản Phẩm <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('products.index')}}">Sản phẩm</a></li>
                            <li><a href="{{route('categoryProducts.index')}}">Nhóm sản phẩm</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-tag"></i>Quản lý kho <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('warehouse.index')}}"></i> Thông tin chủ kho</a></li>
                            <li><a href="{{route('money.index')}}">Sổ quỹ</a></li>
                            <li><a href="{{route('inventory.index')}}">Kiểm kho</a></li>
                            <li><a href="{{route('historyInput.index')}}">Lịch sử nhập hàng</a></li>

                        </ul>
                    </li>

                    <li><a href="{{route('customers.index')}}"><i class="fa fa-users"></i> Khách hàng</a></li>


                </ul>
            </div>
            <div class="menu_section">
                <h3>Quản Trị</h3>
                <ul class="nav side-menu">

                    <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('users.index')}}">Users</a></li>
                            <!--<li><a href="page_404.html">Roles</a></li>-->
                            <li><a href="{{route('role.index')}}">Role</a></li>
                            <li><a href="{{route('permission.index')}}">Permission</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-sitemap"></i> Nhân Sự<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#level1_1">Danh sách nhân viên</a>
                            <li><a href="#level1_2">Thêm nhân viên</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-cogs"></i>Cài đặt<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('setting.index')}}">Cài đặt chung</a></li>
                            <li><a href="{{route('menu.index')}}">Menu</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <div class="pageface">
                <div class="title">
                    <i class="fa fa-headphones"></i>  Hỗ trợ chủ kho
                    <i class="fa fa-minus"></i>
                </div>
                <div class="fb-page" data-href="https://www.facebook.com/nongsantunhien/"
                     data-tabs="messages"
                     data-small-header="false"
                     data-adapt-container-width="true"
                     data-hide-cover="false" data-show-facepile="true">

                </div>
            </div>

        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                       aria-expanded="false">
                        <img src="{{url('/')}}{{\Illuminate\Support\Facades\Auth::user()->image}}" alt="">
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                       aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                            <a>
                                <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <div class="text-center">
                                <a>
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
<!--modal-->
<div class="modal fade bs-example-modal-avata" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
     data-backdrop="static">
    <div class="modal-dialog bs-example-modal-avata">
        <div class="img-circle logo"></div>
        <div class="modal-content">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title text-center" id="myModalLabel">Thay đổi hình đại diện</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="img-circle avarta-item">
                            <img src="{{asset('/images/1.png')}}" data-value="1">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="img-circle avarta-item">
                            <img src="{{asset('/images/2.png')}}" data-value="2">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="img-circle avarta-item">
                            <img src="{{asset('/images/3.png')}}" data-value="3">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="img-circle avarta-item">
                            <img src="{{asset('/images/4.png')}}" data-value="4">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="img-circle avarta-item">
                            <img src="{{asset('/images/5.png')}}" data-value="5">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="img-circle avarta-item">
                            <img src="{{asset('/images/6.png')}}" data-value="6">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="img-circle avarta-item">
                            <img src="{{asset('/images/7.png')}}" data-value="7">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="img-circle avarta-item">
                            <img src="{{asset('/images/8.png')}}" data-value="8">
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>
</div>
