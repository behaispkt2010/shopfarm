@extends('layouts.frontend')
@section('title', 'Thông tin Công ty')
@section('description','Thông tin Công ty')
@section('content')
    <div class="container">
        <div class="col-xs-12 col-sm-3 col-md-3" style="padding-top: 20px;">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-left: 23px;">
                    <h4 class="panel-title">
                        <i class="fa fa-user" aria-hidden="true"></i> Thông tin Công ty
                    </h4>
                </div>
                <div id="filter_ncc_seach" class="panel-collapse collapse in">
                    <div class="panel-body" style="padding-left: 23px;">
                        <ul class="site_info_ncc">
                            <li><i class="fa fa-map-marker" aria-hidden="true" style="margin-top: 4px; margin-right: 4px;"></i> {{$company->company_address}}</li>
                            <li><i class="fa fa-phone-square" aria-hidden="true" style="margin-top: 4px; margin-right: 4px;"></i> {{$company->phone_number}}</li>
                            <li><i class="fa fa-envelope" aria-hidden="true" style="margin-top: 4px; margin-right: 4px;"></i> {{$company->email}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 " style="padding-top: 20px;">
            <div class="content_verify">
                <div class="col-xs-12 col-sm-5 col-md-5">
                    <div class="row">
                        <div class="gallery_img_ncc">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="..." width="100%" style="border-radius: 5px;" src="{{ asset($company->image_company) }}">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <ul class="info_veryfi_content">
                        
                        <li>
                            <label>Tên Công ty:</label>
                            <ul class="left_list_verify">
                                <li>@if (!empty($company->name_company)) {{$company->name_company}} @endif</li>
                            </ul>
                            <ul class="info-verified right_list_verify">
                                <li>@if ($company->confirm == 1)Xác thực @else Chưa xác thực @endif</li>
                            </ul>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <label>Thời gian hoạt động :</label>
                            <ul class="left_list_verify">
                                <li>@if (!empty($company->time_active)) {{$company->time_active}} @endif</li>
                            </ul>
                            <ul class="info-verified right_list_verify">
                                <li>@if ($company->confirm == 1)Xác thực @else Chưa xác thực @endif</li>
                            </ul>
                            <div class="clear"></div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                    <div class="header_table_verified">
                        Thông tin doanh nghiệp
                    </div>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Mã số thuế:</td>
                            <td>{{$company->mst}}</td>
                            <td class="td_icon_verified"><span class="info-verified">@if ($company->confirm == 1)Xác thực @else Chưa xác thực @endif</span></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ:</td>
                            @if (( !Auth::check()))
                                <td><a href="" class="required_login" style="color: blue;">Đăng nhập để địa chỉ</a></td>
                                <td class="td_icon_verified"><span class="info-verified"></span></td>
                            @else
                                <td>@if (!empty($company->company_address)) {{$company->company_address}} @endif</td>
                                <td class="td_icon_verified"><span class="info-verified">@if ($company->confirm == 1)Xác thực @else Chưa xác thực @endif</span></td>
                            @endif
                        </tr>
                        </tbody>
                    </table>
                    <div class="header_table_verified">
                        Đại diện
                    </div>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Họ tên:</td>
                            <td>@if (!empty($company->ndd)) {{$company->ndd}} @endif</td>
                            <td class="td_icon_verified"><span class="info-verified">@if ($company->confirm == 1)Xác thực @else Chưa xác thực @endif</span></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            @if (( !Auth::check()))
                                <td><a href="" class="required_login" style="color: blue;">Đăng nhập để địa chỉ</a></td>
                                <td class="td_icon_verified"><span class="info-verified"></span></td>
                            @else
                                <td>@if (!empty($company->phone_number)) {{$company->phone_number}} @endif</td>
                                <td class="td_icon_verified"><span class="info-verified">@if ($company->confirm == 1)Xác thực @else Chưa xác thực @endif</span></td>
                            @endif
                        </tr>
                        <tr>
                            <td>Email</td>
                            @if (( !Auth::check()))
                                <td><a href="" class="required_login" style="color: blue;">Đăng nhập để địa chỉ</a></td>
                                <td class="td_icon_verified"><span class="info-verified"></span></td>
                            @else
                                <td>@if (!empty($company->email)) {{$company->email}} @endif</td>
                                <td class="td_icon_verified"><span class="info-verified">@if ($company->confirm == 1)Xác thực @else Chưa xác thực @endif</span></td>
                            @endif
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="clear"></div>
            </div>
            <div class="col-xs-12 col-sm-11 col-md-11" style="padding-bottom: 30px;">
                <div class="row">
                    <div class="detail_veryfi">
                        <div class="detail_veryfi">
                            <div class="tile_veryfy">
                                <h4>Hình ảnh</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Địa chỉ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @if (( !Auth::check()))
                                            <td>
                                            <a href="" class="required_login" style="color: blue;">Đăng nhập để xem địa chỉ</a>
                                            </td>
                                        @else
                                            <td>{{$company->company_address}}</td>
                                        @endif
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="clear"></div>
                                @if ($company->confirm == 1)
                                <div class="block-inner">
                                    <div class="left_arrow_carousel">
                                        <i tag="2" class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </div>
                                    <ul id="owl-shop" class="products owl-carousel owl-theme" style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer">
                                            <div class="owl-wrapper" style="width: auto; float: right; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);">
                                                @foreach($arrImageDetail as $itemImageDetail)
                                                    <div class="owl-item img-warehouse" style="">
                                                        <li class="image_verified">
                                                            <img src="{{url('/').$itemImageDetail->company_image}}" style="border-radius: 5px;" alt="Hình ảnh Công ty">
                                                        </li>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="owl-controls clickable" style="display: none;"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div></div></div></ul>
                                    <div class="right_arrow_carousel">
                                        <i style="display:block" tag="2" class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                                @else
                                    <div></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="tabs products section_offset animated transparent" data-animation="fadeInDown" data-animation-delay="150">

                <ul class="tabs_nav clearfix">

                    <li class="tab_bottom"><a href="#tab-1" style="font-size: 16px;">Các tin mua sản phẩm của Công ty</a></li>

                </ul>
                <div class="tab_containers_wrap">
                    <div id="tab-1" class="tab_container">

                        <div class="table_layout">
                            <?php $i=0 ;$j=0?>
                            @foreach($getNewsCompany as $key => $company)
                                @if($i==0)<div class="category_product_row" style="background-color: #fff;">@endif
                                        <div class="col-md-3 col-xs-12 category_product_cell">

                                            <div class="product_bestselt">

                                                <div class="company_image">

                                                    <a href=""><img src="@if (!empty($company->image_company)){{url('/').$company->image_company}} @else {{asset('/images/8.png')}} @endif" alt=""></a>

                                                </div>

                                                <div class="description">

                                                    <p class="textoverlow"><a href="{{ url('/shop/'.$company->id) }}" class="clearfix textoverlow">{{$company->name}}</a></p>
                                                    <div class="kho_info clearfix">
                                                        <a href="#" class="alignleft" style="width: 70px;">
                                                            @if($company->confirm == 1)
                                                                <img src="{{url('/images')}}/xacthuc.png" alt="">
                                                            @else
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="clearfix product_info">
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <?php $i = $i+1; $j=$j+1; ?>
                                        @if ($i>=3 || $j>=count($getNewsCompany))
                                            <?php $i=0 ?>
                                            </div>
                                        @endif
                            @endforeach
                        </div>
                        <div class="bottom_box" style="text-align: center;">
                            <a href="{{url('/')}}/company-business" class="button_grey middle_btn">Xem thêm</a>
                        </div>
                        
                    </div>

                </div>

            </div>
            @include('admin.partial.modal_requiredlogin')
        </div>
    </div>    
@endsection