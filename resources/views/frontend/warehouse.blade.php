@extends('layouts.frontend')
@section('title', 'Thông tin chủ kho')
@section('description','Thông tin chủ kho')
@section('content')
    <div class="col-xs-12 col-sm-3 col-md-3">

    </div>
    <div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3">
        <div class="content_verify">
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="row">
                    <div class="gallery_img_ncc">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item">
                                    <img src="{{ asset($ware_house->image_kho) }}" alt="..." width="100%">
                                </div>
                                <div class="item active">
                                    <img alt="..." width="100%" src="{{ asset($ware_house->image_kho) }}">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-8 col-sm-6 col-md-6">
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
                        <td>@if (!empty($ware_house->ware_houses_address)) {{$ware_house->ware_houses_address}} @endif</td>
                        <td class="td_icon_verified"><span class="info-verified">@if ($ware_house->confirm_kho == 1)Xác thực @else Chưa xác thực @endif</span></td>
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
                        <td>@if (!empty($ware_house->phone_number)) {{$ware_house->phone_number}} @endif</td>
                        <td class="td_icon_verified"><span class="info-verified">@if ($ware_house->confirm_kho == 1)Xác thực @else Chưa xác thực @endif</span></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>@if (!empty($ware_house->email)) {{$ware_house->email}} @endif</td>
                        <td class="td_icon_verified"><span class="info-verified">@if ($ware_house->confirm_kho == 1)Xác thực @else Chưa xác thực @endif</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="clear"></div>
        </div>
        {{--<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="row">
                <div class="detail_veryfi">
                    <div class="tile_veryfy">
                        <h4>Quy mô sản xuất</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Thị trường</th>
                                <th>Ngành hàng</th>
                                <th>Nhân sự</th>
                                <th>Sản lượng</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a class="product-price btn_login" href="#" data-toggle="modal" data-target="#login_modal"><strong>Đăng nhập để xem thông tin</strong></a>
                                </td>
                                <td>
                                    <a class="product-price btn_login" href="#" data-toggle="modal" data-target="#login_modal"><strong>Đăng nhập để xem thông tin</strong></a>
                                </td>
                                <td>
                                    <a class="product-price btn_login" href="#" data-toggle="modal" data-target="#login_modal"><strong>Đăng nhập để xem thông tin</strong></a>
                                </td>
                                <td>
                                    <a class="product-price btn_login" href="#" data-toggle="modal" data-target="#login_modal"><strong>Đăng nhập để xem thông tin</strong></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>--}}
        {{--<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="row">
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
                                <td>
                                    <a class="product-price btn_login" href="#" data-toggle="modal" data-target="#login_modal"><strong>Đăng nhập để xem thông tin</strong></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="clear"></div>
                        <div class="block-inner">
                            <div class="left_arrow_carousel">
                                <i tag="2" class="fa fa-chevron-left" aria-hidden="true"></i>
                            </div>
                            <ul id="owl-shop" class="products owl-carousel owl-theme" style="opacity: 1; display: block;">
                                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 330px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 165px;"><li class="image_verified">
                                                <img src="https://thitruongsistatic.r.worldssl.net/image/cached/size/1280/0/img/product/2016/10/17/580479d3a4b36.jpg" alt="" data-pagespeed-url-hash="3417132477" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </li></div></div></div>
                                <div class="owl-controls clickable" style="display: none;"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div></div></div></ul>
                            <div class="right_arrow_carousel">
                                <i style="display:block" tag="2" class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        {{--<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="row">
                <div class="detail_veryfi">
                    <div class="tile_veryfy">
                        <h4>Cửa hàng</h4>
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
                                <td>
                                    <a class="product-price btn_login" href="#" data-toggle="modal" data-target="#login_modal"><strong>Đăng nhập để xem thông tin</strong></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="clear"></div>
                        <div class="block-inner">
                            <div class="left_arrow_carousel">
                                <i tag="3" class="fa fa-chevron-left" aria-hidden="true"></i>
                            </div>
                            <ul id="owl-shop-seen" class="products owl-carousel owl-theme" style="opacity: 1; display: block;">
                                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 330px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 165px;"><li class="image_verified">
                                                <img alt="" data-pagespeed-url-hash="1585177283" src="https://thitruongsistatic.r.worldssl.net/image/cached/size/1280/0/img/product/2016/10/17/580479e2aa831.jpg" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                            </li></div></div></div>
                                <div class="owl-controls clickable" style="display: none;"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div></div></div></ul>
                            <div class="right_arrow_carousel">
                                <i style="display:block" tag="3" class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        {{--<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="row">
                <div class="detail_veryfi">
                    <div class="tile_veryfy">
                        <h4>Hình ảnh xưởng</h4>
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
                                <td>
                                    <a class="product-price btn_login" href="#" data-toggle="modal" data-target="#login_modal"><strong>Đăng nhập để xem thông tin</strong></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>--}}
        {{--<div class="col-xs-12 col-sm-12 col-md-12 hidden">
            <div class="row">
                <div class="detail_veryfi">
                    <div class="tile_veryfy">
                        <h4>Thời gian hoạt động</h4>
                    </div>
                    <div class="table-responsive">
                        <p>28/08/2015</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="row">
                <div class="detail_veryfi">
                    <div class="tile_veryfy">
                        <h4>Giới thiệu nhà cung cấp</h4>
                    </div>
                    <div class="table-responsive">
                        <p></p><p><strong>QUỐC AN CHUYÊN SỈ LINH KIỆN</strong></p>
                        <p><img alt="" data-pagespeed-url-hash="3761532604" src="https://service.thitruongsi.com/image/cached/size/1280/0/img/product/2016/10/17/580479d3a4b36.jpg" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></p>
                        <p><strong>QUỐC AN CHUYÊN SỈ LINH KIỆN - Nhà cung cấp chuyên sỉ linh kiện điện tử kinh doanh theo mô hình online trên toàn quốc và trực tiếp tại cửa hàng. QUỐC AN CHUYÊN SỈ LINH KIỆN đăng ký kinh doanh - CỬA HÀNG TTP tại TP. HCM và đã được Thitruongsi.com xác thực các yếu tố gồm: Giấy Phép Kinh Doanh, địa chỉ và mô hình kinh doanh.</strong></p>
                        <p>&nbsp;</p>
                        <p><strong>Được thành lập vào năm 2015, QUỐC AN CHUYÊN SỈ LINH KIỆN do Ông Trần Kim Thịnh làm đại diện là hộ kinh doanh uy tín có cửa hàng và kho hàng đặt tại quận Bình Tân, TP. HCM, đáp ứng nhu cầu mua sỉ linh kiện điện tử của người mua hàng trên toàn quốc. </strong></p>
                        <p>&nbsp;</p>
                        <p><strong>Với Thitruongsi.com các shop xác thực như QUỐC AN CHUYÊN SỈ LINH KIỆN mặc dù kinh doanh Online tại Thitruongsi.com nhưng các yếu tố dùng để Xác Thực Uy Tín đều có cơ sở pháp lý ngoài đời thực.</strong></p>
                        <p><br>
                            <strong>Thitruongsi.com đảm bảo những thông tin có dấu xác thực là những thông tin mà Thitruongsi.com đã kiểm tra, đối chiếu với các cơ quan chính quyền có liên quan, để chắc chắn người mua hàng đã và đang giao dịch đúng với nhà cung cấp mình mong muốn tương ứng với những thông tin mình đã xem.</strong></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
@endsection