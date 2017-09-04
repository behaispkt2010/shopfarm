@extends('layouts.frontend')
@section('title', 'Thông tin nhập sản phẩm')
@section('description','Thông tin nhập sản phẩm')
@section('url_seo', url('/') )
@section('type_seo','article')
@section('title_seo', $arrNewsCompany->title )
@section('description_seo',$arrNewsCompany->content )
@section('image_seo', $arrNewsCompany->image_company )
@section('add_styles')
{{-- --}}
@endsection
@section('content')
			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">
				<div class="container">
					<ul class="breadcrumbs">
						<li><a href="/">Trang chủ</a></li>
						<li><a href="/company-business">Cơ hội mua bán</a></li>
						<li>{{$arrNewsCompany->title}} ({{$arrNewsCompany->view_count}} lượt xem)</li>
					</ul>
					<div id="tabs-container" class="hidden-xs">
				        <ul class="mark-tab">
				            <li class="current"><a href="{{ url('/company').'/'.$arrNewsCompany->companyID}}">Thông tin</a> </li>
				        
						<div class="fbsharebutton">
			                <div id="sendMessenger" class="fb-send fb_iframe_widget" data-href="http://canavi.com/jobposting/cong-ty-mitai-viet-nhat-tuyen-nhan-vien-ban-hang-17-duong-3-2-quan-10-457" data-layout="button_count" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1581108608867340&amp;container_width=0&amp;href=http%3A%2F%2Fcanavi.com%2Fjobposting%2Fcong-ty-mitai-viet-nhat-tuyen-nhan-vien-ban-hang-17-duong-3-2-quan-10-457&amp;locale=vi_VN&amp;sdk=joey"><span style="vertical-align: bottom; width: 47px; height: 20px;"><iframe name="f178b4349a1df68" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:send Facebook Social Plugin" src="https://www.facebook.com/v2.6/plugins/send.php?app_id=1581108608867340&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F0sTQzbapM8j.js%3Fversion%3D42%23cb%3Df3b6c4d2bd9ce64%26domain%3Dcanavi.com%26origin%3Dhttp%253A%252F%252Fcanavi.com%252Ff2b54dfe64e969%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fcanavi.com%2Fjobposting%2Fcong-ty-mitai-viet-nhat-tuyen-nhan-vien-ban-hang-17-duong-3-2-quan-10-457&amp;locale=vi_VN&amp;sdk=joey" style="border: none; visibility: visible; width: 47px; height: 20px;" class=""></iframe></span></div>
			                <div class="fb-share-button" data-href="{{url('/')}}{{$_SERVER['REQUEST_URI']}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank">Chia sẻ</a></div>
			            </div>
			            </ul>
				        <!-- <div class="v_centered share">
				        							<span class="title">Chia sẻ:</span>
				        							<div class="addthis_widget_container">
				        								<div class="fb-share-button" data-href="{{url('/')}}{{$_SERVER['REQUEST_URI']}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Chia sẻ</a></div>
				        							</div>
				        						</div> -->
				        <div id="main-profile" class="likeprofile">
				            <div id="column-profile" class="posting-thumb">
				                <figure>
				                    <span><a href="{{ url('/company').'/'.$arrNewsCompany->companyID}}"><img style="border-radius: 5px;" class="img-responsive" alt="" src="@if (!empty($arrNewsCompany->image_company)){{url('/').$arrNewsCompany->image_company}} @else {{asset('/images/8.png')}} @endif"></a></span>
				                </figure>
				            </div>
			            
				            <div id="column-info" class="">
				                <div class="tab">
				                    <div id="tab-profile" class="tab-content">
										<div class="backtolist"><a href="{{ url('/company-business') }}"><i class="material-icons">keyboard_arrow_left</i> Trở về danh sách</a></div>
				                        <div class="posting-box">
				                            <table class="job-desc">
				                                <tbody>
				                                <tr>
				                                    <td class="left">
				                                        <span class="title marginbottom">{{$arrNewsCompany->namecompany}} - {{$arrNewsCompany->title}} </span>
				                                        <span class="pricefrom">Giá từ {!!\App\Util::FormatMoney($arrNewsCompany->price_from)!!} đến {!!\App\Util::FormatMoney($arrNewsCompany->price_to)!!}</span>
				                                    </td>
				                                    <!-- <td class="right" style="width: 100px;">
				                                    	<figure>
				                                    										                    <span><img style="border-radius: 5px;" class="img_newsdetail" alt="" src="@if (!empty($arrNewsCompany->image)){{url('/').$arrNewsCompany->image}} @else {{asset('/images/8.png')}} @endif"></span>
				                                    										                </figure>
				                                    </td> -->
				                                </tr>
				                            </tbody></table>
				                        </div>
				                        <div class="posting-box">
				                        <div class="title"><i class="icon ca-ca-infor"></i>Thông tin đơn hàng</div>
				                            <div class="col-md-9">
					                            <table class="listview">
					                                <tbody>
						                                <tr>
						                                    <td class="left">Số lượng:</td>
						                                    <td class="right">{{ $arrNewsCompany->soluong }} Kg</td>
						                                </tr>
						                                <tr>
						                                	<td class="left">Danh mục:</td>
						                                	<td>{{ $arrNewsCompany->categoryname }}</td>
						                                </tr>
						                                <tr>
						                                	<td class="left">Giá:</td>
						                                	<td>{!!\App\Util::FormatMoney($arrNewsCompany->price_from)!!} - {!!\App\Util::FormatMoney($arrNewsCompany->price_to)!!}</td>
						                                </tr>
						                                <tr>
						                                	<td class="left">Tính theo:</td>
						                                	<td>Kg</td>
						                                </tr>
						                                <tr>
						                                	<td class="left">Thời gian giao hàng:</td>
						                                	<td>{{ $arrNewsCompany->time_delivery }}</td>
						                                </tr>
					                            	</tbody>
					                            </table>
											</div>
											<div class="col-md-3">
												<figure>
								                    <span><img style="" class="img_newsdetail" alt="" src="@if (!empty($arrNewsCompany->image)){{url('/').$arrNewsCompany->image}} @else {{asset('/images/8.png')}} @endif"></span>
								                </figure>
											</div>
				                        </div>
				                        <div class="posting-box">
				                        <div class="title"><i class="icon ca-ca-infor"></i>Yêu cầu đơn hàng</div>
				                            <table class="listview">
				                                <tbody>
					                                <tr>
					                                    <td class="left">Mô tả</td>
					                                    <td class="right">{!! $arrNewsCompany->content !!}</td>
					                                </tr>
					                                <tr>
					                                    <td class="left">Yêu cầu chất lượng:</td>
					                                    <td class="right">{!! $arrNewsCompany->require !!}</td>
					                                </tr>
					                                <tr>
					                                    <td class="left">Hình thức thanh toán:</td>
					                                    <td class="right">@if ($arrNewsCompany->type_pay == 0) Thanh toán tiền mặt khi nhận hàng @else Chuyển khoản ngân hàng @endif</td>
					                                </tr>
				                            	</tbody>
				                            </table>
				                        </div>  
				                        <div class="posting-box">
				                        	<div class="title"><i class="icon ca-ca-infor"></i>Hướng dẫn nhận đơn hàng</div>
				                            <table id="my_company" class="listview">
				                                <tbody>
				                                <tr>                        
				                                    <td class="left">Người liên hệ</td><td class="right"><b id="">{{ $arrNewsCompany->namecompany }}</b></td>
				                                </tr>
				                                <tr>
				                                    <td class="left">Địa chỉ</td><td class="right" id="">{{ $arrNewsCompany->address }}</td>
				                                </tr>
				                                <tr>
				                                    <td class="left">Số điện thoại</td><td class="right" id="">{{ $arrNewsCompany->phone_number }}</td>
				                                </tr>
				                                <tr>
				                                    <td class="left">Email</td><td class="right" id="">{{ $arrNewsCompany->email }}</td>
				                                </tr>
				                            </tbody></table>
				                        </div>
									</div>
								</div>
				        	</div>
				        	<div class="clr_latest"></div>
				        	<!-- Related Jobs -->
				            <!-- <div class="carousel-jobs">
				            	<div class="title"><span>Thông tin mua bán liên quan</span></div>
				             	<div class="latest-info">
				                 	<div class="cnv_carousel owl-carousel owl-theme" style="opacity: 1; display: block;">
				                    	<div class="owl-wrapper-outer">
				                    		<div class="owl-wrapper" style="width: 390px; left: 0px; display: block;">
				                    			<div class="owl-item" style="width: 195px;">
				                    				<div class="item job-item marginleft">
				                             		<div class="image">
				            					                                 	<figure>
				            					                                     	<a href="" title="">
				            					                                        	<img class="img-responsive" alt="" src="">
				            					                                     	</a>
				            					                                 	</figure>
				            					                             	</div>
				            					                            	<div class="job-desc">
				            					                                 	<a href="" title="">
				            					                                    	<h3 class="title-job"></h3>
				            					                                 	</a>
				            					                                <div class="description"></div>
				            					                                <div class="action"><i class="icon ca-ca-eyes"></i></div>
				            					                             	</div>
				                         			</div>
				                         		</div>
				                         	</div>
				                        </div>
				                        <div class="owl-controls clickable" style="display: none;">
				            					                        <div class="owl-buttons">
				            						                        <div class="owl-prev">
				            						                        	<i class="icon ca-ca-right-arrow"></i>
				            						                        </div>
				            						                        <div class="owl-next">
				            						                        	<i class="icon ca-ca-right-arrow"></i>
				            						                        </div>
				            					                        </div>
				                        </div>
				                    </div>
				             	</div>
				            				        	</div> -->
						</div>
					</div>
					<div class="news_related hidden-xs">
						<div class="title" style="padding-bottom: 10px;"><i class="icon ca-ca-infor"></i>Tin liên quan nỗi bật</div>
						<div class="company_list">
							@if(count($getNewsCompanyRelated)!=0)
								<div class="list_company_row" style="">
								@foreach($getNewsCompanyRelated as $itemAllNewsCompany)
									<div class="col-xs-12 company_cell">
										<div class="well box_1">
											<!-- @if ($itemAllNewsCompany->companyConfirm)
											<div class="box-status" style="background-color: #64DD17;">
													                                        <p class="text-center status-title">HOT</p>
													                                    </div>
													                                    @endif -->
											<div class="company_image">
												<a href="{{url('/company/'.$itemAllNewsCompany->companyID.'/'.$itemAllNewsCompany->slug.'/'.$itemAllNewsCompany->newscompanyID)}}">
													<img src="@if (!empty($itemAllNewsCompany->image_company)){{url('/').$itemAllNewsCompany->image_company}} @else {{asset('/images/8.png')}} @endif" alt="">
												</a>
											</div>
											<div class="description">
												<p class="textoverlow padding7" style="font-weight: bolder;"><a href="{{url('/company/'.$itemAllNewsCompany->companyID.'/'.$itemAllNewsCompany->slug.'/'.$itemAllNewsCompany->newscompanyID)}}" class="clearfix ;">{{$itemAllNewsCompany->name}}</a></p>
												<div class="limit-2">
		                                        	{!! $itemAllNewsCompany->content !!}
		                                        </div>
		                                        <span style=""><a href="#" class="comments" style="font-size: 12px;"><i class="fa fa-eye-slash" style="padding-top: 3px;"></i> @if(empty($itemAllNewsCompany->view_count))0 @else{{$itemAllNewsCompany->view_count}}@endif </a></span>
											</div>
										</div>
									</div>
								@endforeach
								</div>
							@else
							<br>
							<h2 class="text-center" style="text-align: center">Không tìm thấy dữ liệu</h2>
							@endif
						</div>
					</div>
					<div class="warehouse_releated hidden-xs">
						<div class="title" style="padding-bottom: 10px;"><i class="icon ca-ca-infor"></i>Nhà cung cấp nỗi bật</div>
						<div class="company_list">
						@if(count($getWareHouseRelated)!=0)
							<div class="list_warehouse_row" style="">
							@foreach($getWareHouseRelated as $itemAllWareHouseDeXuat)
								<div class="col-xs-12 warehouse_cell">
									<div class="well box_1">
										<div class="company_image">
											<a href="{{ url('/shop/'.$itemAllWareHouseDeXuat->id) }}"><img src="@if (!empty($itemAllWareHouseDeXuat->image_kho)){{url('/').$itemAllWareHouseDeXuat->image_kho}} @else {{asset('/images/2.png')}} @endif" alt=""></a>
										</div>
										<div class="description">
											<p class="textoverlow padding7"><a href="{{ url('/shop/'.$itemAllWareHouseDeXuat->id) }}" class="clearfix ">{{$itemAllWareHouseDeXuat->name_company}}</a></p>
											<div class="clearfix product_info limit-2">Cung cấp: 
												@foreach (\App\WareHouse::getCateProductByID($itemAllWareHouseDeXuat->id) as $key => $itemCate)
													{{$itemCate}},
												@endforeach
	                                        </div>
											<div class="kho_info clearfix">
												<a href="#" class="alignleft" style="width: 60px;margin-right: 20px;">
													@if($itemAllWareHouseDeXuat->level == 1)
														<img src="{{url('/images')}}/level1.png" alt="">
													@elseif($itemAllWareHouseDeXuat->level == 2)
														<img src="{{url('/images')}}/level2.png" alt="">
													@elseif($itemAllWareHouseDeXuat->level == 3)
														<img src="{{url('/images')}}/level3.png" alt="">
													@else
														<img src="{{url('/images')}}/level0.png" alt="">
													@endif
												</a>
												<!-- <a href="#" class="alignleft" style="width: 60px;">
													@if($itemAllWareHouseDeXuat->confirm_kho == 1)
														<img src="{{url('/images')}}/xacthuc.png" alt="">
													@else
													@endif
												</a> -->
												<span style=""><a href="#" class="comments" style="font-size: 12px;"><i class="fa fa-eye-slash" style="padding-top: 3px;"></i> @if(empty($itemAllWareHouseDeXuat->count_view))0 @else{{$itemAllWareHouseDeXuat->count_view}}@endif </a></span>
												<a href="#" class="code_kho" style="">{!! \App\Util::UserCode($itemAllWareHouseDeXuat->user_id) !!}</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
						@else
							<br>
						<h2 class="text-center" style="text-align: center">Không tìm thấy dữ liệu</h2>
						@endif
						</div>
					</div>
					<div class="row visible-xs">
						<div class="name" style="padding-left: 15px;">
							<a href="{{ url('/company/'.$arrNewsCompany->companyID) }}"><h1>{{ $arrNewsCompany->title }}</h1></a>
						</div>
						<br>
						<div class="main_profile">
							<div class="profile col-md-3 col-xs-12">
								<div class="img_company" style="text-align: center;">
									<img style="border-radius: 5px;" src="@if (!empty($arrNewsCompany->image_company)){{url('/').$arrNewsCompany->image_company}} @else {{asset('/images/8.png')}} @endif" alt="">
								</div>
							</div>
						
							<div class="info col-md-9 col-sm-8">
								
								<section class="section_offset">

									<article class="entry single">

										<div class="entry_meta">

											<div class="alignleft">

												<span><i class="icon-calendar"></i> {{$arrNewsCompany->created_at->format('d-m-Y')}}</span>

												<span><i class="fa fa-eye-slash"></i>@if(empty($arrNewsCompany->view_count)) 0 @else {{$arrNewsCompany->view_count}}@endif</span>

											</div>

										</div>
										<div class="entry_image">
											
											{{--<img src="{{url('/')}}{{$singleBlog->image}}" alt="">--}}

										</div>
										<div class="posting-box">
				                        <div class="title"><i class="icon ca-ca-infor"></i>Thông tin đơn hàng</div>
				                            <table class="listview">
				                                <tbody>
					                                <tr>
					                                    <td class="left">Số lượng:</td>
					                                    <td class="right">{{ $arrNewsCompany->soluong }} Kg</td>
					                                </tr>
					                                <tr>
					                                	<td class="left">Danh mục:</td>
					                                	<td>{{ $arrNewsCompany->categoryname }}</td>
					                                </tr>
					                                <tr>
					                                	<td class="left">Giá:</td>
					                                	<td>{!!\App\Util::FormatMoney($arrNewsCompany->price_from)!!} - {!!\App\Util::FormatMoney($arrNewsCompany->price_to)!!}</td>
					                                </tr>
					                                <tr>
					                                	<td class="left">Tính theo:</td>
					                                	<td>Kg</td>
					                                </tr>
					                                <tr>
					                                	<td class="left">Thời gian giao hàng:</td>
					                                	<td>{{ $arrNewsCompany->time_delivery }}</td>
					                                </tr>
				                            	</tbody>
				                            </table>
				                        </div>
				                        <div class="posting-box">
				                        <div class="title"><i class="icon ca-ca-infor"></i>Yêu cầu đơn hàng</div>
				                            <table class="listview">
				                                <tbody>
					                                <tr>
					                                    <td class="left">Mô tả</td>
					                                    <td class="right">{!! $arrNewsCompany->content !!}</td>
					                                </tr>
					                                <tr>
					                                    <td class="left">Yêu cầu chất lượng:</td>
					                                    <td class="right">{!! $arrNewsCompany->require !!}</td>
					                                </tr>
					                                <tr>
					                                    <td class="left">Hình thức thanh toán:</td>
					                                    <td class="right">@if ($arrNewsCompany->type_pay == 0) Thanh toán tiền mặt khi nhận hàng @else Chuyển khoản ngân hàng @endif</td>
					                                </tr>
				                            	</tbody>
				                            </table>
				                        </div>  
				                        <div class="posting-box">
				                        	<div class="title"><i class="icon ca-ca-infor"></i>Hướng dẫn nhận đơn hàng</div>
				                            <table id="my_company" class="listview">
				                                <tbody>
				                                <tr>                        
				                                    <td class="left">Người liên hệ</td><td class="right"><b id="">{{ $arrNewsCompany->namecompany }}</b></td>
				                                </tr>
				                                <tr>
				                                    <td class="left">Địa chỉ</td><td class="right" id="">{{ $arrNewsCompany->address }}</td>
				                                </tr>
				                                <tr>
				                                    <td class="left">Số điện thoại</td><td class="right" id="">{{ $arrNewsCompany->phone_number }}</td>
				                                </tr>
				                                <tr>
				                                    <td class="left">Email</td><td class="right" id="">{{ $arrNewsCompany->email }}</td>
				                                </tr>
				                            </tbody></table>
				                        </div>
										

									</article>
								</section>
							</div>
						</div>	
					</div>
				</div>
			</div>		
@endsection
@section('add-script')

	@endsection