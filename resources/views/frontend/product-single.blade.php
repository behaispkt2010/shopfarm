@extends('layouts.frontend')
@section('title', 'chi tiết')
@section('description',' chi tiết sản phẩm')
@section('add-styles')
	<link rel="stylesheet" href="{{asset('frontend/js/fancybox/source/jquery.fancybox.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/js/fancybox/source/helpers/jquery.fancybox-thumbs.css')}}">
@endsection
@section('content')

			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="/">Trang chủ</a></li>
						<li><a href="/products">Sản phẩm</a></li>
						<li>{{$product->title}}</li>

					</ul>
					@if (\Session::has('success'))
						<p class="message green" >Cảm ơn quý khách hàng đã để lại thông tin, chúng tôi sẽ liên hệ trong thời gian sớm nhất có thể</p>
						<br>
					@elseif(\Session::has('RateSuccess'))
						<p class="message green" >Cảm ơn quý khách hàng đã đóng góp đánh giá</p>
						<br>
						@endif
					<!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

					<div class="section_offset">

						<div class="row">

							<main class="col-md-9 col-sm-8">

								<div class="clearfix">

									<!-- - - - - - - - - - - - - - Product image column - - - - - - - - - - - - - - - - -->

									<div class="single_product">

										<!-- - - - - - - - - - - - - - Image preview container - - - - - - - - - - - - - - - - -->

										<div class="image_preview_container">

											<img id="img_zoom" data-zoom-image="{{url('/')}}{{$product->image}}" src="{{url('/')}}{{$product->image}}" alt="">

											<button class="button_grey_2 icon_btn middle_btn open_qv"><i class="icon-resize-full-6"></i></button>

										</div><!--/ .image_preview_container-->

										<!-- - - - - - - - - - - - - - End of image preview container - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Prodcut thumbs carousel - - - - - - - - - - - - - - - - -->

										<div class="product_preview">
											<div class="owl_carousel" id="thumbnails">
												@if(count($detailImage) != 0)
													@foreach($detailImage as $item)
													<a href="#" data-image="{{url('/')}}{{$item->image}}" data-zoom-image="{{url('/')}}{{$item->image}}">
														<img src="{{url('/')}}{{$item->image}}" data-large-image="{{url('/')}}{{$item->image}}" alt="">
													</a>
													@endforeach
												@endif
											</div><!--/ .owl-carousel-->

										</div><!--/ .product_preview-->
										
										<!-- - - - - - - - - - - - - - End of prodcut thumbs carousel - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Share - - - - - - - - - - - - - - - - -->
										
										<div class="v_centered">

											<span class="title">Chia sẻ:</span>

											<div class="addthis_widget_container">
												<!-- AddThis Button BEGIN -->
												<div class="fb-share-button" data-href="{{url('/')}}{{$_SERVER['REQUEST_URI']}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Chia sẻ</a></div>

												<!-- AddThis Button END -->
											</div>
											
										</div>
										
										<!-- - - - - - - - - - - - - - End of share - - - - - - - - - - - - - - - - -->

									</div>

									<!-- - - - - - - - - - - - - - End of product image column - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product description column - - - - - - - - - - - - - - - - -->

									<div class="single_product_description">

										<h3 class="offset_title">{{$product->title}}</h3>

										<!-- - - - - - - - - - - - - - Page navigation - - - - - - - - - - - - - - - - -->


										<div class="description_section v_centered">

											<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

											{!! \App\Rate::getRateProduct($product->id)!!}


											<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

											<ul class="topbar">

												<li><a href="#">{{\App\Rate::countRate($product->id)}} Đã đánh giá</a></li>

											</ul>

											<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

										</div>
										<!-- - - - - - - - - - - - - - End of page navigation - - - - - - - - - - - - - - - - -->

										<div class="description_section">
											<table class="product_info" style="width: 100%">
												<tbody style="font-size: 15px;">
													<tr>
														<td style="width: 150px;">Mua tối thiểu: </td>
														<td><span class="in_stock">{{$product->min_gram}}</span> (kg)</td>
													</tr>
													<tr>
														<td style="width: 150px;">Mã sản phẩm: </td>
														<td>#{{\App\Util::ProductCode($product->id)}}</td>
													</tr>
												</tbody>
											</table>
										</div>
										<p class="product_price"><b class="theme_color">{{ number_format($product->price_out)  }} VNĐ</b></p>
										<hr>
										<div class="row text-center">
											<div class="col-xs-6 col-sm-6 col-md-6 col-md-offset-3">
												<div style="height: 100px; background-color: #fff; padding: 15px 15px 0px 15px; ">
													@if (( !Auth::check()))
														<button id="" style="line-height: 26px;width: 150px; font-size: 16px;font-weight: bold;"
																data-toggle="modal" data-target=".modal-login" class="btn btn-warning required_login">
															Mua Ngay
														</button>
													@else
														<button id="phoneKho" style="line-height: 26px;width: 150px; font-size: 16px;font-weight: bold;"
															data-toggle="modal" data-target=".modal-buy" class="btn btn-warning" data-phone="{{$product->phoneKho}}" data-title="Mua Ngay" data-namekho="{{$product->nameKho}}">
															Mua Ngay
														</button>
													@endif
													<br>
													<p>Mua trực tiếp với nhà cung cấp</p>
												</div>
											</div>
										</div>
										{{--<div class="description_section">
											<p class="text-info">Vui lòng để lại thông tin liên lạc để chúng tôi liên hệ lại trong thời gian sớm nhất</p>
										</div>
										<div class="description_section">
										<form action="{{url('/single-order')}}" method="post"  class="contactform type_2" id="contact_form">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<ul>
												<li class="row">
													<input type="hidden"  name="cf_url" value="{{url('/')}}{{$_SERVER['REQUEST_URI']}}">
													<div class="col-sm-6">
														<label for="cf_name" class="required">Tên</label>
														<input type="text" required name="cf_name" id="cf_name" title="Name">
													</div>
													<div class="col-sm-6">
														<label for="cf_email" class="required">Địa chỉ Email</label>
														<input type="email" required name="cf_email" id="cf_email" title="Email">
													</div>
												</li>
												<li class="row">
													<div class="col-xs-12">
														<label for="cf_order_number" class="required">Số điện thoại</label>
														<input type="text" required name="cf_order_number" id="cf_order_number" title="Order number">
													</div>
												</li>
												<li class="row">
													<div class="col-xs-12">
														<label for="cf_message" class="">Tin nhắn</label>
														<textarea id="cf_message"  name="cf_message" title="Message" rows="4"></textarea>
													</div>
												</li>
											</ul>
											<div class="buttons_row">
												<button class="button_blue middle_btn" type="submit" id="send-order-info">Gửi thông tin</button>
											</div>
										</form>
									</div>--}}
										<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->



										<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

									</div>

									<!-- - - - - - - - - - - - - - End of product description column - - - - - - - - - - - - - - - - -->

								</div>

							</main><!--/ [col] -->

							<aside class="col-md-3 col-sm-4">

								<!-- - - - - - - - - - - - - - Seller Information - - - - - - - - - - - - - - - - -->

								<section class="section_offset">
							@if(!empty($product->levelKho))
									<h3>Thông tin chủ kho</h3>
									<div class="theme_box">
										<div class="seller_info clearfix">
											<a href="{{ url('/shop/'.$product->ware_houses_id) }}" class="alignleft photo">
												@if($product->levelKho == 1)
												<img src="{{url('/images')}}/level1.png" alt="">
													@elseif($product->levelKho == 2)
													<img src="{{url('/images')}}/level2.png" alt="">
												@elseif($product->levelKho == 3)
													<img src="{{url('/images')}}/level3.png" alt="">
												@endif
											</a>
											<div class="wrapper">
												<a href="{{ url('/shop/'.$product->ware_houses_id) }}"><b>{{$product->nameKho}}</b></a>
												<p class="seller_category">Chủ kho cấp {{$product->levelKho}}</p>
											</div>

										</div><!--/ .seller_info-->

										<ul class="seller_stats">
											<li>
												<ul class="topbar">
													<li>{{$product->addressKho}}</li>
													<li>Mã: #{{\App\Util::UserCode($product->idKho)}}</li>
												</ul>
											</li>
										</ul>
									</div>
									@endif
								</section>

								<!-- - - - - - - - - - - - - - End of seller information - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

								<div class="section_offset">

									<a href="#" class="banner">
										
										<img src="{{asset('frontend/images/banner_img_13.jpg')}}" alt="">

									</a>

								</div>

								<!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

							</aside>

						</div><!--/ .row -->

					</div>

					<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

					<div class="section_offset">
						<div class="tabs type_2">
							<ul class="tabs_nav clearfix">
								<li><a href="#tab-1">Thông tin chi tiết</a></li>
								<li><a href="#tab-2">Vận chuyển - Thanh toán</a></li>
								<li><a href="#tab-3">Đánh giá</a></li>
							</ul>

							<div class="tab_containers_wrap">
								<div id="tab-1" class="tab_container">
									{!! $product->content!!}
								</div>
								<div id="tab-2" class="tab_container">
									<div class="tabs-content active" id="tab1" style="display: block;">
										<p><span style="color: #008000; font-size: 12pt;"><span style="color: #99cc00;"><strong>Hình thức vận chuyển</strong></span>:&nbsp;<br><br><strong>Xe khách | Chành xe</strong><br></span></p>
										<p><span style="color: #008000; font-size: 12pt;">- Áp dụng số lượng tối thiểu : <strong>300 Kg</strong>&nbsp;</span><br>
											<span style="color: #008000; font-size: 12pt;">-&nbsp;Phí vận chuyển phụ thuộc Nhà Xe | Chành Xe theo từng khu vực.
												<br><br><strong>Xe tải</strong><br>- Áp dụng số lượng tối thiểu : <strong>2000 Kg</strong>&nbsp;<br>-&nbsp;Phí vận chuyển phụ thuộc theo từng khu vực.
											</span>
										</p>
									</div>
									<br><br>
									<div class="tabs-content " id="tab2" style="display: block;">
										<p><span style="color: #008000; font-size: 12pt;"><span style="color: #99cc00;"><strong>Hình thức thanh toán</strong></span></span></p>
										<p><span style="color: #008000; font-size: 12pt;"><br><strong>Đơn hàng đầu tiên</strong></span></p>
										<p><span style="color: #008000; font-size: 12pt;">Đặt cọc 30 - 50% Giá trị đơn hàng: Giao hàng tận nơi và nhận tiền còn lại&nbsp;qua nhà xe hoặc chuyển khoản.</span></p>
										<p><span style="color: #008000; font-size: 12pt;"><strong>Đơn hàng thứ 2 trở đi</strong></span></p>
										<p><span style="color: #008000; font-size: 12pt;">Nhận hàng tận nơi và gửi tiền cho nha xe hoặc chuyển khoản.<br><br>
												<span style="color: #99cc00;"><strong>Thông tin chuyển khoản:</strong></span><br>
												+ {{\App\Setting::getValue('chinhanh1')}}<br>
												Chủ TK: {{\App\Setting::getValue('chutk1')}} <br>Số TK: {{\App\Setting::getValue('stk1')}} <br>
												+ {{\App\Setting::getValue('chinhanh2')}} <br>
												Chủ TK: {{\App\Setting::getValue('chutk2')}} <br>Số TK: {{\App\Setting::getValue('stk2')}} <br><br>
												<span style="color: #ff0000;">
													Để yên tâm, trước khi chuyển có thể xác nhận thông tin chuyển khoản qua SĐT <strong>{{\App\Setting::getValue('phone')}}</strong> Tín
												</span>
											</span></p>
									</div>
								</div>
								<div id="tab-3" class="tab_container">
									<section class="section_offset">
										<div class="row">
											<div class="col-lg-4 col-md-6">
												<p>Đóng góp đánh giá: <a href="#">{{$product->title}}</a><br>
													@if( !Auth::check())<span style="color: red">Vui lòng đăng nhập để được đánh giá*</span>@endif
												</p>
											</div>
											<div class="col-lg-8 col-md-6 text-right">
												<form action="{{url('/customer-rate')}}" method="post" class="type_2">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<div class="table_wrap rate_table">
													<table>
														<thead>
															<tr>
																<th></th>
																<th>1 sao</th>
																<th>2 sao</th>
																<th>3 sao</th>
																<th>4 sao</th>
																<th>5 sao</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Giá</td>
																<td>
																	<input checked type="radio" value="1" name="price_rate" id="rate_1">
																	<label for="rate_1"></label>
																</td>
																<td>
																	<input type="radio" value="2" name="price_rate" id="rate_2">
																	<label for="rate_2"></label>
																</td>
																<td>
																	<input type="radio" value="3" name="price_rate" id="rate_3">
																	<label for="rate_3"></label>
																</td>
																<td>
																	<input type="radio" value="4" name="price_rate" id="rate_4">
																	<label for="rate_4"></label>
																</td>
																<td>
																	<input type="radio" value="5" name="price_rate" id="rate_5">
																	<label for="rate_5"></label>
																</td>
															</tr>
															<tr>
																<td>Giao hàng</td>
																<td>
																	<input checked type="radio" value="1" name="value_rate" id="rate_6">
																	<label for="rate_6"></label>
																</td>
																<td>
																	<input type="radio" value="2" name="value_rate" id="rate_7">
																	<label for="rate_7"></label>

																</td>

																<td>
																		
																	<input type="radio" value="3" name="value_rate" id="rate_8">
																	<label for="rate_8"></label>

																</td>

																<td>
																		
																	<input type="radio" value="4" name="value_rate" id="rate_9">
																	<label for="rate_9"></label>

																</td>

																<td>
																		
																	<input type="radio" value="5" name="value_rate" id="rate_10">
																	<label for="rate_10"></label>

																</td>

															</tr>

															<tr>
																
																<td>Chất lượng</td>

																<td>
																		
																	<input checked type="radio" value="1" name="quality_rate" id="rate_11">
																	<label for="rate_11"></label>

																</td>

																<td>
																		
																	<input type="radio" value="2" name="quality_rate" id="rate_12">
																	<label for="rate_12"></label>

																</td>

																<td>
																		
																	<input type="radio" value="3" name="quality_rate" id="rate_13">
																	<label for="rate_13"></label>

																</td>

																<td>
																		
																	<input type="radio" value="4" name="quality_rate" id="rate_14">
																	<label for="rate_14"></label>

																</td>

																<td>
																		
																	<input type="radio" value="5" name="quality_rate" id="rate_15">
																	<label for="rate_15"></label>

																</td>

															</tr>

														</tbody>

													</table>

												</div>
												<br>
													<input type="hidden" value="{{$product->id}}" name="id_product">

													@if( Auth::check())
													<input type="hidden" value="{{Auth::user()->id}}" name="id_user">

													<button type="submit" class=" btn btn-success btn-large text-right">Gửi đánh giá</button>
													@endif

												<!-- - - - - - - - - - - - - - End of rate the - - - - - - - - - - - - - - - - -->
												</form>
											</div><!--/ [col]-->

											{{--<div class="col-lg-7 col-md-6">--}}

												{{--<p class="subcaption">Yêu cầu nhập đủ thông tin</p>--}}

												{{--<!-- - - - - - - - - - - - - - Review form - - - - - - - - - - - - - - - - -->--}}

												{{--<form action="/customer-rate" method="post" class="type_2">--}}
													{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

													{{--<ul>--}}

														{{--<li class="row">--}}

															{{--<div class="col-sm-6">--}}
																{{----}}
																{{--<label for="nickname">Tên</label>--}}
																{{--<input type="text" name="cm_name" id="nickname">--}}

															{{--</div>--}}

															{{--<div class="col-sm-6">--}}
																{{----}}
																{{--<label for="summary">Email</label>--}}
																{{--<input type="text" name="cm_comment" id="summary">--}}

															{{--</div>--}}

														{{--</li>--}}

														{{--<li class="row">--}}

															{{--<div class="col-xs-12">--}}

																{{--<label for="review_message">Email</label>--}}

																{{--<textarea rows="5" name="cm_comment" id="cm_comment"></textarea>--}}

															{{--</div>--}}

														{{--</li>--}}

														{{--<li class="row">--}}

															{{--<div class="col-xs-12">--}}
															{{----}}
																{{--<button  type="submit"  class="button_dark_grey middle_btn">Đánh giá</button>--}}

															{{--</div>--}}

														{{--</li>--}}

													{{--</ul>--}}

												{{--</form>--}}

												{{--<!-- - - - - - - - - - - - - - End of review form - - - - - - - - - - - - - - - - -->--}}

											{{--</div>--}}

										</div><!--/ .row -->

									</section><!--/ .section_offset -->

								</div><!--/ #tab-3-->

								<!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->


								<!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->

							</div><!--/ .tab_containers_wrap -->
							<div>
								<section class="section_offset">
									<div class="comment">
										<div class="fb-comments" data-href="{{url('/')}}{{$_SERVER['REQUEST_URI']}}" data-width="100%" data-numposts="5"></div>
									</div>
								</section>
							</div>
							<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

						</div><!--/ .tabs-->

					</div><!--/ .section_offset -->

					<!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

					<div class="section_offset">

						<div class="tabs products">

							<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

							<ul class="tabs_nav clearfix">

								<li><a href="#tab-5">Sản phẩm có thể bạn thích</a></li>
								<li><a href="#tab-6">Nhà cung cấp có uy tín</a></li>
								<li><a href="#tab-7">Sản phẩm bán chạy</a></li>

							</ul>
							
							<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

							<div class="tab_containers_wrap">

								<div id="tab-5" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">
										@foreach(\App\Product::getRelatedProduct($product->id,8) as $product)
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item" style="">
											<div class="image_wrap">

												<a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>
											</div>
											<div class="description">
												<a href="#" class="clearfix">{{$product->title}}</a>
												<div class="kho_info clearfix">
													<a href="#" class="alignleft photo">
														@if($product->levelKho == 1)
															<img src="{{url('/images')}}/level1.png" alt="">
														@elseif($product->levelKho == 2)
															<img src="{{url('/images')}}/level2.png" alt="">
														@elseif($product->levelKho == 3)
															<img src="{{url('/images')}}/level3.png" alt="">
														@else
															<img src="{{url('/images')}}/level0.jpg" alt="">
														@endif
													</a>
													<p class="alignleft"><b>{{ $product->nameKho  }}</b></p>
												</div>
												<div class="clearfix product_info">
													<p class="product_price alignleft"><b>{{ number_format($product->price_out)  }} VNĐ</b></p>
													<span class="alignright">{!! \App\Rate::getRateProduct($product->id)!!}</span>
												</div>
												<div class="clearfix product_info">
													<p class="alignleft">Tối thiểu: {{ number_format($product->min_gram)  }} Kg</p>
												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->


										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
											@endforeach
									</div><!--/ .sh_container-->
									
									<!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-1-->

								<div id="tab-6" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel type_2 carousel_in_tabs">

										@foreach(\App\Product::getProductByKhoVIP(8) as $product)
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item" style="">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

												{{--<div class="label_new">New</div>--}}

												<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">
												<a href="#" class="clearfix">{{$product->title}}</a>
												<div class="kho_info clearfix">
													<a href="#" class="alignleft photo">
														@if($product->levelKho == 1)
															<img src="{{url('/images')}}/level1.png" alt="">
														@elseif($product->levelKho == 2)
															<img src="{{url('/images')}}/level2.png" alt="">
														@elseif($product->levelKho == 3)
															<img src="{{url('/images')}}/level3.png" alt="">
														@else
															<img src="{{url('/images')}}/level0.jpg" alt="">
														@endif
													</a>
													<p class="alignleft"><b>{{ $product->nameKho  }}</b></p>
												</div>
												<div class="clearfix product_info">
													<p class="product_price alignleft"><b>{{ number_format($product->price_out)  }} VNĐ</b></p>
													<span class="alignright">{!! \App\Rate::getRateProduct($product->id)!!}</span>
												</div>
												<div class="clearfix product_info">
													<p class="alignleft">Tối thiểu: {{ number_format($product->min_gram)  }} Kg</p>
												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->


										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
										@endforeach

									</div><!--/ .sh_container-->

									<!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-2-->

								<div id="tab-7" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of hot products - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel type_2 carousel_in_tabs" >

										@foreach(\App\Product::getBestSellerProduct(8) as $product)
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item" style="">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

												<div class="label_bestseller">BESTSELLER</div>

												<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">
												<a href="#" class="clearfix">{{$product->title}}</a>
												<div class="kho_info clearfix">
													<a href="#" class="alignleft photo">
														@if($product->levelKho == 1)
															<img src="{{url('/images')}}/level1.png" alt="">
														@elseif($product->levelKho == 2)
															<img src="{{url('/images')}}/level2.png" alt="">
														@elseif($product->levelKho == 3)
															<img src="{{url('/images')}}/level3.png" alt="">
														@else
															<img src="{{url('/images')}}/level0.jpg" alt="">
														@endif
													</a>
													<p class="alignleft"><b>{{ $product->nameKho  }}</b></p>
												</div>
												<div class="clearfix product_info">
													<p class="product_price alignleft"><b>{{ number_format($product->price_out)  }} VNĐ</b></p>
													<span class="alignright">{!! \App\Rate::getRateProduct($product->id)!!}</span>
												</div>
												<div class="clearfix product_info">
													<p class="alignleft">Tối thiểu: {{ number_format($product->min_gram)  }} Kg</p>
												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->


										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
										@endforeach
									</div><!--/ .sh_container-->
									
									<!-- - - - - - - - - - - - - - End of carousel of hot products - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-3-->

							</div>

							<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

						</div><!--/ .tabs.section_offset-->

					</div>
						
					<!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
			<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
	@include('admin.partial.modal_requiredlogin')
	<div class="modal fade modal-buy" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
		 data-backdrop="static">
		<div class="modal-dialog modal-buy">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center" id="myModalLabel">Mua ngay</h4>
				</div>
				<div class="modal-body">
					<div class="form-group" style="padding-left: 70px; font-size: 15px;">
						<p style="color: #4e8d1a"><strong>Hãy liên hệ Chủ kho theo thông tin bên dưới để mua trực tiếp</strong></p>
						<p>Tên Chủ kho : <strong name="namekho"></strong> </p>
						<p>Số điện thoại: <strong class="text-center" name="phone"></strong></p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-raised btn-default" data-dismiss="modal">Đóng</button>
				</div>
			</div>
		</div>
	</div>
	{{--<div class="modal fade modal-login" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
		 data-backdrop="static">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Bạn hãy đăng nhập để có thể Mua ngay</h4>
				</div>
				<div class="modal-body">
					<div class="col-xs-6 col-sm-6 col-md-6 text-center">
						<button style="line-height: 26px;width: 150px; font-size: 16px;font-weight: bold;" class="btn btn-success">
							Đăng nhập
						</button>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 text-center">
						<button style="line-height: 26px;width: 150px; font-size: 16px;font-weight: bold;" class="btn btn-warning">
							Đăng ký
						</button>
					</div>
					<br>
					<p class="text-center" style="padding-top: 30px;">----- Hỗ trợ và chăm sóc khách hàng -----</p>
					<div style="text-align:center;margin-top:10px" class="col-sm-6 col-md-6">
						<i class="fa fa-phone" aria-hidden="true" style="margin-top: 4px; margin-right: 4px;"></i>
						<span>Hotline - {{\App\Setting::getValue('phone')}}</span>
					</div>
					<div style="text-align:center;margin-top:10px" class="col-sm-6 col-md-6">
						<i class="fa fa-envelope-o" aria-hidden="true" style="margin-top: 4px; margin-right: 4px;"></i>
						<span>{{\App\Setting::getValue('email')}}</span>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-raised btn-default" data-dismiss="modal">Đóng</button>
				</div>
			</div>
		</div>
	</div>--}}
@endsection
@section('add-script')
	<script src="{{asset('frontend/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
	<script src="{{asset('frontend/js/fancybox/source/jquery.fancybox.pack.js')}}"></script>
	<script src="{{asset('frontend/js/fancybox/source/helpers/jquery.fancybox-media.js')}}"></script>
	<script src="{{asset('frontend/js/fancybox/source/helpers/jquery.fancybox-thumbs.js')}}"></script>

	{{--<script>--}}
		{{--$(document).on('click','send-order-info',function(){--}}

		{{--})--}}
	{{--</script>--}}
	<script>
		$(document).on("click", "#phoneKho", function () {
			var _self = $(this);
			$('.modal-product .title').text(_self.data('title'));
			$('.modal-buy [name="phone"]').html(_self.data('phone'));
			$('.modal-buy [name="namekho"]').html(_self.data('namekho'));
		});
	</script>
	@endsection
