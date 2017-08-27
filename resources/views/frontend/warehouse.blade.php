@extends('layouts.frontend')
@section('title', 'Thông tin chủ kho')
@section('description','Thông tin chủ kho')
@section('content')
<div class="secondary_page_wrapper">
    <div class="container">
        <div class="col-xs-12 col-sm-3 col-md-3" style="padding-top: 20px;">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-left: 23px;">
                    <h4 class="panel-title">
                        <i class="fa fa-user" aria-hidden="true"></i> Thông tin NCC
                    </h4>
                </div>
                <div id="filter_ncc_seach" class="panel-collapse collapse in">
                    <div class="panel-body" style="padding-left: 23px;">
                        <ul class="site_info_ncc">
                            <li><i class="fa fa-map-marker" aria-hidden="true" style="margin-top: 4px; margin-right: 4px;"></i> {{$ware_house->ware_houses_address}}</li>
                            <li><i class="fa fa-phone-square" aria-hidden="true" style="margin-top: 4px; margin-right: 4px;"></i> {{$ware_house->phone_number}}</li>
                            <li><i class="fa fa-envelope" aria-hidden="true" style="margin-top: 4px; margin-right: 4px;"></i> {{$ware_house->email}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hidden-xs">
            @include('frontend.witgets.category-product')
            </div>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-7 " style="padding-top: 20px;">
            <div class="content_verify">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="row">
                        <div class="gallery_img_ncc">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <!-- <div class="item">
                                        <img src="{{ asset($ware_house->image_kho) }}" style="border-radius: 5px;" alt="..." width="100%">
                                    </div> -->
                                    <div class="item active">
                                        <img alt="..." width="100%" style="border-radius: 5px;" src="{{ asset($ware_house->image_kho) }}">
                                    </div>
                                </div>
                                <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <ul class="info_veryfi_content">
                        <li>
                            <label>Mô hình kinh doanh:</label>
                            <ul class="left_list_verify">
                                <li>@foreach($arrCategoryWarehouse as $itemCategoryWareHouse)
                                        @if ($itemCategoryWareHouse->id == $ware_house->category_warehouse_id ) {{$itemCategoryWareHouse->category_warehouse_name}}
                                        @endif
                                    @endforeach
                                </li>
                            </ul>
                            <ul class="info-verified right_list_verify">
                                <li>@if ($ware_house->confirm_kho == 1)Xác thực @else Chưa xác thực @endif</li>
                            </ul>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <label>Tên doanh nghiệp:</label>
                            <ul class="left_list_verify">
                                <li>@if (!empty($ware_house->name_company)) {{$ware_house->name_company}} @endif</li>
                            </ul>
                            <ul class="info-verified right_list_verify">
                                <li>@if ($ware_house->confirm_kho == 1)Xác thực @else Chưa xác thực @endif</li>
                            </ul>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <label>Thời gian hoạt động :</label>
                            <ul class="left_list_verify">
                                <li>@if (!empty($ware_house->time_active)) {{$ware_house->time_active}} @endif</li>
                            </ul>
                            <ul class="info-verified right_list_verify">
                                <li>@if ($ware_house->confirm_kho == 1)Xác thực @else Chưa xác thực @endif</li>
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
                            <td>{{$ware_house->mst}}</td>
                            <td class="td_icon_verified"><span class="info-verified">@if ($ware_house->confirm_kho == 1)Xác thực @else Chưa xác thực @endif</span></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ:</td>
                            @if (( !Auth::check()))
                                <td><a href="" class="required_login" style="color: blue;">Đăng nhập để địa chỉ</a></td>
                                <td class="td_icon_verified"><span class="info-verified"></span></td>
                            @else
                                <td>@if (!empty($ware_house->ware_houses_address)) {{$ware_house->ware_houses_address}} @endif</td>
                                <td class="td_icon_verified"><span class="info-verified">@if ($ware_house->confirm_kho == 1)Xác thực @else Chưa xác thực @endif</span></td>
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
                            <td>@if (!empty($ware_house->ndd)) {{$ware_house->ndd}} @endif</td>
                            <td class="td_icon_verified"><span class="info-verified">@if ($ware_house->confirm_kho == 1)Xác thực @else Chưa xác thực @endif</span></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            @if (( !Auth::check()))
                                <td><a href="" class="required_login" style="color: blue;">Đăng nhập để địa chỉ</a></td>
                                <td class="td_icon_verified"><span class="info-verified"></span></td>
                            @else
                                <td>@if (!empty($ware_house->phone_number)) {{$ware_house->phone_number}} @endif</td>
                                <td class="td_icon_verified"><span class="info-verified">@if ($ware_house->confirm_kho == 1)Xác thực @else Chưa xác thực @endif</span></td>
                            @endif
                        </tr>
                        <tr>
                            <td>Email</td>
                            @if (( !Auth::check()))
                                <td><a href="" class="required_login" style="color: blue;">Đăng nhập để địa chỉ</a></td>
                                <td class="td_icon_verified"><span class="info-verified"></span></td>
                            @else
                                <td>@if (!empty($ware_house->email)) {{$ware_house->email}} @endif</td>
                                <td class="td_icon_verified"><span class="info-verified">@if ($ware_house->confirm_kho == 1)Xác thực @else Chưa xác thực @endif</span></td>
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
                                <h4>Kho hàng</h4>
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
                                            <td>{{$ware_house->ware_houses_address}}</td>
                                        @endif
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="clear"></div>
                                @if ($ware_house->confirm_kho == 1)
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
                                                            <img src="{{url('/').$itemImageDetail->warehouse_detail_image}}" style="border-radius: 5px;" alt="Hình ảnh kho hàng">
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

                    <li class="tab_bottom"><a href="#tab-1" style="font-size: 16px;">Sản phẩm của NCC</a></li>

                </ul>
                <div class="tab_containers_wrap">
                    <div id="tab-1" class="tab_container">

                        <div class="table_layout">
                            <?php $i=0 ;$j=0?>
                            @foreach($getNewProduct as $key => $product)
                                @if($i==0)<div class="category_product_row" style="background-color: #fff;">@endif
                                        <div class="col-md-4 col-xs-12 category_product_cell">

                                            <div class="product_bestselt">

                                                <div class="image_wrap">

                                                    <a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>
                                                
                                                </div>
                                                <div class="description">

                                                    <a href="#" class="clearfix">{{$product->title}}</a>

                                                    <div class="kho_info clearfix">
                                                        <a href="#" class="alignleft" style="width: 70px;">
                                                        @if($product->levelKho == 1)
                                                            <img src="{{url('/images')}}/level1.png" alt="">
                                                        @elseif($product->levelKho == 2)
                                                            <img src="{{url('/images')}}/level2.png" alt="">
                                                        @elseif($product->levelKho == 3)
                                                            <img src="{{url('/images')}}/level3.png" alt="">
                                                        @else
                                                            <img src="{{url('/images')}}/level0.png" alt="">
                                                        @endif
                                                        </a>
                                                        <a href="#" class="alignleft" style="width: 70px;">
                                                            @if($product->confirm_kho == 1)
                                                                <img src="{{url('/images')}}/xacthuc.png" alt="">
                                                            @else
                                                            @endif
                                                        </a>
                                                        <p class="alignleft" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;padding-left: 10px;">{{ \App\Util::ProductCode($product->id)  }}</p>
                                                    </div>

                                                    <div class="clearfix product_info">
                                                    @if (( !Auth::check()))
                                                        <a href="" class="required_login not_login" style="">Đăng nhập để xem giá</a>
                                                    @else
                                                        <p class="product_price alignleft">@if($product->price_out == $product->price_sale){!! \App\Util::FormatMoney($product->price_out) !!} @else {!! \App\Util::FormatMoney($product->price_sale) !!} <span class="discount_price">{!! \App\Util::FormatMoney($product->price_out) !!}</span> @endif </p>
                                                                
                                                        <!-- <span class="alignright">{!! \App\Rate::getRateProduct($product->id)!!}</span> -->
                                                    @endif
                                                    </div>
                                                    <div class="clearfix product_info">
                                                        <p class="alignleft">Tối thiểu: <a href="#" class="bg-number">{{ number_format($product->min_gram)  }}</a> SP</p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <?php $i = $i+1; $j=$j+1; ?>
                                        @if ($i>=3 || $j>=count($getNewProduct))
                                            <?php $i=0 ?>
                                            </div>
                                        @endif
                            @endforeach
                        </div>
                        <div class="bottom_box">
                            <a href="{{url('/')}}/products" class="button_grey middle_btn">Xem nhiều sản phẩm</a>
                        </div>
                        
                    </div>

                </div>

            </div>
            @include('admin.partial.modal_requiredlogin')
        </div>
    </div>   
</div>     
@endsection