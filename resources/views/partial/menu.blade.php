<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}" class="site_title"><img src="{{url('/')}}/images/logo-w.png" alt=""></a>
            <div class="btn-close-mn visible-xs"><i class="fa fa-close"></i></div>
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
                @if(Auth::user()->hasRole('kho'))
                <a href="{{route('warehouse.edit',['id' => \App\WareHouse::getIdWareHouse(Auth::user()->id) ])}}" style="margin-right: 10px;    font-size: 13px;"><i class="fa fa-user" aria-hidden="true"></i>
                    Thông tin</a>
                @else
                    <a href="{{route('users.edit',['id' => Auth::user()->id])}}" style="margin-right: 10px;    font-size: 13px;"><i class="fa fa-user" aria-hidden="true"></i>
                        Thông tin</a>
                    @endif

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
                            @permission('dashboard')
                            <li class="active"><a href="{{url('/admin')}}">Quản trị</a></li>
                            @endpermission
                            @permission('dashboard-admin')
                            <li><a href="{{url('/admin/dashboard')}}">Chủ kho</a></li>
                            @endpermission
                        </ul>
                    </li>
                    @permission('news')
                    <li><a><i class="fa fa-newspaper-o"></i> Tin tức <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="active"><a href="{{route('news.index')}}">Tin tức</a></li>
                            <li><a href="{{route('news.create')}}">Tạo mới</a></li>
                            <li><a href="{{route('category.index')}}">Nhóm tin tức</a></li>
                        </ul>
                    </li>
                    @endpermission
                    @permission('pages')

                    <li><a><i class="fa fa-clone"></i> Trang <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('pages.index')}}">Trang</a></li>
                            <li><a href="{{route('pages.create')}}">Tạo mới</a></li>

                        </ul>
                    </li>
                    @endpermission

                    @permission('orders')
                    <li><a href="{{route('orders.index')}}"><i class="fa fa-edit"></i> Đơn hàng</a></li>
                    @endpermission
                    @permission('products')
                    <li><a><i class="fa fa-tag"></i>Sản Phẩm <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('products.index')}}">Sản phẩm</a></li>
                            @permission('categoryProducts')
                            <li><a href="{{route('categoryProducts.index')}}">Nhóm sản phẩm</a></li>
                            @endpermission

                        </ul>
                    </li>
                    @endpermission

                    <li><a><i class="fa fa-tag"></i>Quản lý kho <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            @permission('warehouse')

                            <li><a href="{{route('warehouse.index')}}"></i> Thông tin chủ kho</a></li>
                            @endpermission
                            @permission('money')

                            <li><a href="{{route('money.index')}}">Sổ quỹ</a></li>
                            @endpermission
                            @permission('inventory')

                            <li><a href="{{route('inventory.index')}}">Kiểm kho</a></li>
                            @endpermission
                            @permission('historyInput')

                            <li><a href="{{route('historyInput.index')}}">Lịch sử nhập hàng</a></li>
                            @endpermission

                        </ul>
                    </li>
                    @permission('customers')
                    <li><a href="{{route('customers.index')}}"><i class="fa fa-users"></i> Khách hàng</a></li>
                    @endpermission
                    @permission('sharingreferralcode')
                    <li><a href="{{ route('sharingreferralcode.index') }}"><i class="fa fa-qrcode"></i>Mã Giới thiệu</a></li>
                    @endpermission

                </ul>
            </div>
            @role('admin')
            <div class="menu_section">
                <h3>Quản Trị</h3>
                <ul class="nav side-menu">
                    @permission('users')
                    <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('users.index')}}">Users</a></li>
                            <!--<li><a href="page_404.html">Roles</a></li>-->

                            <li><a href="{{route('role.index')}}">Role</a></li>

                            <li><a href="{{route('permission.index')}}">Permission</a></li>
                        </ul>
                    </li>
                    @endpermission
                    @permission('staffs')

                    <li><a><i class="fa fa-sitemap"></i> Nhân Sự<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                            <li><a href="{{route('staffs.index')}}">Danh sách nhân viên</a>
                            <li><a href="{{route('staffs.create')}}">Thêm nhân viên</a>
                            </li>

                        </ul>
                    </li>
                    @endpermission
                    @permission('setting')
                    <li><a><i class="fa fa-cogs"></i>Cài đặt<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                            <li><a href="{{route('setting.index')}}">Cài đặt chung</a></li>

                            <li><a href="{{route('menu.index')}}">Menu</a></li>

                        </ul>
                    </li>
                    @endpermission
                </ul>
            </div>
@endrole
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
                {{--<li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                       aria-expanded="false">
                        <img src="{{url('/')}}{{\Illuminate\Support\Facades\Auth::user()->image}}" alt="">
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>--}}
                <?php
                $notification = \App\Notification::JoinTable();
                $num_notify = count(\App\Notification::where('is_read',0)->get());
                ?>
                <li role="presentation" class="dropdown" style="display: block" >
                    <a href="javascript;" class="dropdown-toggle info-number" id="menu_notify" data-toggle="dropdown"
                       aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        @if ($num_notify != 0)<span class="badge bg-green" id="notify_count">{{$num_notify}}</span>
                        @endif
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">

                        @if(count($notification) != 0)
                        @foreach($notification as $itemNotification)
                            {{--Notify Chủ Kho--}}
                            @if(Auth::user()->hasRole('kho'))
                                <?php
                                    if ($itemNotification->content == "")
                                ?>



                            {{--Notify Admin | Nhân Viên--}}
                            @else
                                <?php
                                    if ($itemNotification->content == "dangkychukho"){

                                    }
                                ?>
                                @if ($itemNotification->content == "dangkychukho")
                                    <li class="notify">
                                        <a href="{{ route('warehouse.create') }}" target="_blank">
                                            <span class="image"><img src="{{url('/').'/images/user_default.png'}}" alt="Profile Image"/></span>
                                            <span>
                                                <span class="notification_title">Chủ kho đăng kí mới</span>
                                                <span class="time">{{ $itemNotification->created_at->diffForHumans() }}</span>
                                            </span>
                                        </a>
                                    </li>



                            @endif









                        @if ($itemNotification->content == "contact" || $itemNotification->content == "dangkychukho" )
                        <li class="notify">
                            <a href="@if ($itemNotification->content == "dangkychukho"){{ route('warehouse.create') }} @else {{ route('notification.index') }} @endif" target="_blank">
                                <span class="image"><img src="{{url('/').'/images/user_default.png'}}" alt="Profile Image"/></span>
                            <span>
                                <span class="notification_title">
                                    @if ($itemNotification->content == "contact")Khách hàng cần hỗ trợ.
                                    @elseif ($itemNotification->content == "dangkychukho")Đăng ký làm Chủ kho.
                                    @endif
                                </span>
                                <span class="time">{{ $itemNotification->created_at->diffForHumans() }}</span>
                            </span>
                            <span class="message"> @if ($itemNotification->content == "contact")Khách hàng <span class="different">{{$itemNotification->author_id}}</span> cần được hỗ trợ.
                                @elseif ($itemNotification->content == "dangkychukho")Khách hàng <span class="different">{{$itemNotification->author_id}}</span> cần đăng ký làm Chủ kho.
                                @endif
                            </span>
                            </a>
                        </li>
                        @else
                        <li class="notify">
                            <a href="{{ route('warehouse.edit',['id' => $itemNotification->id]) }}" target="_blank">
                                <span class="image"><img src="@if (!empty($itemNotification->image)){{ url('/').$itemNotification->image }} @else {{url('/').'/images/user_default.png'}} @endif " alt="Profile Image"/></span>
                                    <span>
                                        <span class="notification_title">
                                            @if($itemNotification->content == "upgradeLevelKho")Nâng cấp kho.
                                            @elseif ($itemNotification->content == "confirmkho")Xác thực kho.
                                            @elseif ($itemNotification->content == "quangcao")Đăng ký Quảng cáo.
                                            @endif
                                        </span>
                                        <span class="time">{{ $itemNotification->created_at->diffForHumans() }}</span>
                                    </span>
                                    <span class="message"> @if($itemNotification->content == "upgradeLevelKho")Chủ kho<span class="different">{{$itemNotification->name}}</span>muốn nâng cấp kho lên cấp<span class="different">{{$itemNotification->levelkho}}</span>.
                                        @elseif ($itemNotification->content == "confirmkho")Chủ kho <span class="different">{{$itemNotification->name}}</span> muốn Xác thực kho. Hãy kiểm tra và Xác thực cho chủ kho nhé.
                                        @elseif ($itemNotification->content == "quangcao")Chủ kho<span class="different">{{$itemNotification->name}}</span>muốn Đăng ký Quảng cáo.
                                        @endif
                                    </span>
                            </a>
                        </li>
                        @endif




                        @endforeach

                        <li>
                            <div class="text-center">
                                <a href="{{ route('notification.index') }}">
                                    <strong>Xem tất cả</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                        @else
                            <span class="different">Bạn không có thông báo mới.</span>
                        @endif
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
<script type="text/javascript">
    $('#menu_notify').on('click', function (e) {
        //alert('click');
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: '{{ url('/') }}/admin/AjaxUpdateIsReadNotify',
            success: function( msg ) {
                console.log[msg];
                $("#notify_count").addClass('hidden');
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                var Data = JSON.parse(XMLHttpRequest.responseText);
            }
        });
    });
</script>