@extends('layouts.frontend')
@section('title', '')
@section('description','')
@section('add_styles')
{{-- --}}
@endsection
@section('content')

			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="/">Trang chủ</a></li>
						<li><a href="/products">Sản phẩm</a></li>
						<li>aaa</li>

					</ul>

					<!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

					<div class="section_offset">

						<div class="row">

							<main class="col-md-9 col-sm-8">

								<div class="clearfix">

									<!-- - - - - - - - - - - - - - Product image column - - - - - - - - - - - - - - - - -->

									<div class="single_product">

										<!-- - - - - - - - - - - - - - Image preview container - - - - - - - - - - - - - - - - -->

										<div class="image_preview_container">

											<img id="img_zoom" data-zoom-image="images/qv_large_1.JPG" src="../../../frontend/images/qv_img_1.jpg" alt="">

											<button class="button_grey_2 icon_btn middle_btn open_qv"><i class="icon-resize-full-6"></i></button>

										</div><!--/ .image_preview_container-->

										<!-- - - - - - - - - - - - - - End of image preview container - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Prodcut thumbs carousel - - - - - - - - - - - - - - - - -->
										
										<div class="product_preview">

											<div class="owl_carousel" id="thumbnails">
												
												<a href="#" data-image="images/qv_img_1.jpg" data-zoom-image="images/qv_large_1.JPG">

													<img src="../../../frontend/images/qv_thumb_1.jpg" data-large-image="images/qv_img_1.jpg" alt="">

												</a>

												<a href="#" data-image="images/qv_img_2.jpg" data-zoom-image="images/qv_large_2.jpg">

													<img src="../../../frontend/images/qv_thumb_2.jpg" data-large-image="images/qv_img_2.jpg" alt="">

												</a>

												<a href="#" data-image="images/qv_img_3.jpg" data-zoom-image="images/qv_large_3.jpg">

													<img src="../../../frontend/images/qv_thumb_3.jpg" data-large-image="images/qv_img_3.jpg" alt="">

												</a>

												<a href="#" data-image="images/qv_img_4.jpg" data-zoom-image="images/qv_large_4.JPG">

													<img src="../../../frontend/images/qv_thumb_4.jpg" data-large-image="images/qv_img_4.jpg" alt="">

												</a>

											</div><!--/ .owl-carousel-->

										</div><!--/ .product_preview-->
										
										<!-- - - - - - - - - - - - - - End of prodcut thumbs carousel - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Share - - - - - - - - - - - - - - - - -->
										
										<div class="v_centered">

											<span class="title">Share this:</span>

											<div class="addthis_widget_container">
												<!-- AddThis Button BEGIN -->
												<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
												<a class="addthis_button_preferred_1"></a>
												<a class="addthis_button_preferred_2"></a>
												<a class="addthis_button_preferred_3"></a>
												<a class="addthis_button_preferred_4"></a>
												<a class="addthis_button_compact"></a>
												<a class="addthis_counter addthis_bubble_style"></a>
												</div>
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

											<table class="product_info">

												<tbody>

													<tr>

														<td>Chủ kho: </td>
														<td><a href="#">#{{$product->kho}}</a></td>

													</tr>

													<tr>

														<td>Mua tối thiểu: </td>
														<td><span class="in_stock">{{$product->min_gram}}</span> (kg)</td>

													</tr>

													<tr>

														<td>Mã sản phẩm: </td>
														<td>#{{$product->id}}</td>

													</tr>

												</tbody>

											</table>

										</div>
										<p class="product_price"><b class="theme_color">{{$product->price_out}} VNĐ</b></p>

										<hr>

										<div class="description_section">

											<p class="text-info">Vui lòng để lại thông tin liên lạc để chúng tôi liên hệ lại trong thời gian sớm nhất</p>

										</div>
										<div class="description_section">
										<form novalidate="" enctype="multipart/form-data" class="contactform type_2" id="contact_form">

											<ul>

												<li class="row">

													<div class="col-sm-6">

														<label for="cf_name" class="required">Tên</label>
														<input type="text" required="" name="cf_name" id="cf_name" title="Name">

													</div><!--/ [col]-->

													<div class="col-sm-6">

														<label for="cf_email" class="required">Địa chỉ Email</label>
														<input type="email" required="" name="cf_email" id="cf_email" title="Email">

													</div><!--/ [col]-->

												</li><!--/ .row -->

												<li class="row">

													<div class="col-xs-12">

														<label for="cf_order_number" class="required">Số điện thoại</label>
														<input type="text" name="cf_order_number" id="cf_order_number" title="Order number">

													</div><!--/ [col]-->

												</li><!--/ .row -->

												<li class="row">

													<div class="col-xs-12">

														<label for="cf_message" class="">Tin nhắn</label>
														<textarea id="cf_message" required="" name="cf_message" title="Message" rows="4"></textarea>

													</div><!--/ [col]-->

												</li><!--/ .row -->

											</ul>

										</form>

									</div>
										<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

										<div class="buttons_row">

											<button class="button_blue middle_btn">Gửi thông tin</button>

										</div>

										<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

									</div>

									<!-- - - - - - - - - - - - - - End of product description column - - - - - - - - - - - - - - - - -->

								</div>

							</main><!--/ [col] -->

							<aside class="col-md-3 col-sm-4">

								<!-- - - - - - - - - - - - - - Seller Information - - - - - - - - - - - - - - - - -->

								<section class="section_offset">

									<h3>Thông tin chủ kho</h3>

									<div class="theme_box">

										<div class="seller_info clearfix">

											<a href="#" class="alignleft photo">

												<img src="../../../frontend/images/seller_photo_1.jpg" alt="">

											</a>

											<div class="wrapper">

												<a href="#"><b>{{$product->nameKho}}</b></a>

												<p class="seller_category">Chủ kho cấp {{$product->levelKho}}</p>

											</div>

										</div><!--/ .seller_info-->

										<ul class="seller_stats">

											<li>
												
												<ul class="topbar">
													
													<li>{{$product->addressKho}}</li>

													<li>Mã: #{{$product->idKho}}</li>

												</ul>

											</li>

											{{--<li><span class="bold">99.8%</span> Positive Feedback</li>--}}

											{{--<li><span class="bold">7606</span> Transactions</li>--}}

										</ul>



									</div><!--/ .theme_box -->

									<footer class="bottom_box">
										
										<a href="{{url('/kho')/$product->idKho}}" class="button_grey middle_btn">Xem các sản phẩm khác</a>

									</footer>

								</section>

								<!-- - - - - - - - - - - - - - End of seller information - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

								<div class="section_offset">

									<a href="#" class="banner">
										
										<img src="../../../frontend/images/banner_img_13.jpg" alt="">

									</a>

								</div>

								<!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

							</aside>

						</div><!--/ .row -->

					</div>

					<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

					<div class="section_offset">

						<div class="tabs type_2">

							<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

							<ul class="tabs_nav clearfix">

								<li><a href="#tab-1">Thông tin chi tiết</a></li>
								<li><a href="#tab-2">Vận chuyển - Thanh toán</a></li>
								<li><a href="#tab-3">Đánh giá</a></li>

							</ul>
							
							<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

							<div class="tab_containers_wrap">

								<!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->

								<div id="tab-1" class="tab_container">

									{!! $product->content!!}
								</div><!--/ #tab-1-->

								<!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->

								<div id="tab-2" class="tab_container">

									{!! $product->content!!}

								</div><!--/ #tab-2-->

								<!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->

								<div id="tab-3" class="tab_container">

									<section class="section_offset">

										<h3>Customer Reviews</h3>





									</section><!--/ .section_offset -->

									<section class="section_offset">

										<h3>Write Your Own Review</h3>

										<div class="row">

											<div class="col-lg-5 col-md-6">

												<p>You're reviewing: <a href="#">Metus nulla facilisi, Original 24 fl oz</a><br>How do you rate this product? *</p>

												<!-- - - - - - - - - - - - - - Rate the - - - - - - - - - - - - - - - - -->

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
																		
																	<input checked type="radio" name="price_rate" id="rate_1">
																	<label for="rate_1"></label>

																</td>

																<td>
																		
																	<input type="radio" name="price_rate" id="rate_2">
																	<label for="rate_2"></label>

																</td>

																<td>
																		
																	<input type="radio" name="price_rate" id="rate_3">
																	<label for="rate_3"></label>

																</td>

																<td>
																		
																	<input type="radio" name="price_rate" id="rate_4">
																	<label for="rate_4"></label>

																</td>

																<td>
																		
																	<input type="radio" name="price_rate" id="rate_5">
																	<label for="rate_5"></label>

																</td>

															</tr>

															<tr>
																
																<td>Chất lượng</td>

																<td>
																		
																	<input checked type="radio" name="value_rate" id="rate_6">
																	<label for="rate_6"></label>

																</td>

																<td>
																		
																	<input type="radio" name="value_rate" id="rate_7">
																	<label for="rate_7"></label>

																</td>

																<td>
																		
																	<input type="radio" name="value_rate" id="rate_8">
																	<label for="rate_8"></label>

																</td>

																<td>
																		
																	<input type="radio" name="value_rate" id="rate_9">
																	<label for="rate_9"></label>

																</td>

																<td>
																		
																	<input type="radio" name="value_rate" id="rate_10">
																	<label for="rate_10"></label>

																</td>

															</tr>

															<tr>
																
																<td>Giao hàng</td>

																<td>
																		
																	<input checked type="radio" name="quality_rate" id="rate_11">
																	<label for="rate_11"></label>

																</td>

																<td>
																		
																	<input type="radio" name="quality_rate" id="rate_12">
																	<label for="rate_12"></label>

																</td>

																<td>
																		
																	<input type="radio" name="quality_rate" id="rate_13">
																	<label for="rate_13"></label>

																</td>

																<td>
																		
																	<input type="radio" name="quality_rate" id="rate_14">
																	<label for="rate_14"></label>

																</td>

																<td>
																		
																	<input type="radio" name="quality_rate" id="rate_15">
																	<label for="rate_15"></label>

																</td>

															</tr>

														</tbody>

													</table>

												</div>

												<!-- - - - - - - - - - - - - - End of rate the - - - - - - - - - - - - - - - - -->

											</div><!--/ [col]-->

											<div class="col-lg-7 col-md-6">

												<p class="subcaption">All fields are required.</p>

												<!-- - - - - - - - - - - - - - Review form - - - - - - - - - - - - - - - - -->

												<form class="type_2">

													<ul>

														<li class="row">

															<div class="col-sm-6">
																
																<label for="nickname">Nickname</label>
																<input type="text" name="" id="nickname">

															</div>

															<div class="col-sm-6">
																
																<label for="summary">Summary of Your Review</label>
																<input type="text" name="" id="summary">

															</div>

														</li>

														<li class="row">

															<div class="col-xs-12">

																<label for="review_message">Review</label>

																<textarea rows="5" id="review_message"></textarea>

															</div>

														</li>

														<li class="row">

															<div class="col-xs-12">
															
																<button class="button_dark_grey middle_btn">Submit Review</button>

															</div>

														</li>

													</ul>

												</form>

												<!-- - - - - - - - - - - - - - End of review form - - - - - - - - - - - - - - - - -->

											</div>

										</div><!--/ .row -->

									</section><!--/ .section_offset -->

								</div><!--/ #tab-3-->

								<!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->


								<!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->

							</div><!--/ .tab_containers_wrap -->

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
								<li><a href="#tab-6">Sản phẩm đánh giá cao</a></li>
								<li><a href="#tab-7">Sản phẩm bán chạy</a></li>

							</ul>
							
							<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

							<div class="tab_containers_wrap">

								<div id="tab-5" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">
										@foreach(\App\Product::getRelatedProduct(1,8) as $product)
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

												<div class="label_new">New</div>

												<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">{{$product->title}}</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>{{$product->price_out}} VNĐ</b></p>
													<ul class="rating alignright">

														<li class="active"></li>
														<li class="active"></li>
														<li class="active"></li>
														<li class="active"></li>
														<li></li>

													</ul>
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

										@foreach(\App\Product::getBestStarsProduct(8) as $product)
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

												<div class="label_new">New</div>

												<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">{{$product->title}}</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>{{$product->price_out}} VNĐ</b></p>
													<ul class="rating alignright">

														<li class="active"></li>
														<li class="active"></li>
														<li class="active"></li>
														<li class="active"></li>
														<li></li>

													</ul>
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

									<div class="owl_carousel type_2 carousel_in_tabs">

										@foreach(\App\Product::getBestSellerProduct(8) as $product)
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

												<div class="label_new">New</div>

												<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">{{$product->title}}</a>

												<div class="clearfix product_info">

													<p class="product_price alignleft"><b>{{$product->price_out}} VNĐ</b></p>
													<ul class="rating alignright">

														<li class="active"></li>
														<li class="active"></li>
														<li class="active"></li>
														<li class="active"></li>
														<li></li>

													</ul>
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
@endsection