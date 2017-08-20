@extends('layouts.frontend')
@section('title', 'Trang chủ')
@section('description','trang chủ')

@section('content')
			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
			<div class="page_wrapper">

				<div class="container">

					<div class="section_offset" style="margin-bottom:0px;">

						<div class="row">
							<div class="col-xs-12 col-md-12" style="padding-bottom: 22px; ">
									{!! \App\Setting::getValue('slider')!!}
							</div>
							<div class="clear"></div>
							
							<!-- <div class="col-xs-12 hidden-xs">
								<div class="col-sm-3 img_banner" style="padding: 0px;">
									<a href="#" class="">
										<img src="{{url('/')}}/images/fruit.jpg" alt="" class="img_left_border">
									</a>
								</div>
								<div class="col-sm-3 img_banner" style="padding: 0px;">
									<a href="#" class="">
										<img src="{{url('/')}}/images/go.jpg" alt="">
									</a>
								</div>
								<div class="col-sm-3 img_banner" style="padding: 0px;">
									<a href="#" class="">
										<img src="{{url('/')}}/images/seafood.jpeg" alt="">
									</a>
								</div>
								<div class="col-sm-3 img_banner" style="padding: 0px;">
									<a href="#" class="">
										<img src="{{url('/')}}/images/go.jpg" alt="" class="img_right_border">
									</a>
								</div>
							
							</div> -->
						</div>
							
					</div>
					<!-- <div class="col-md-12 hidden-xs" style="padding:0px; padding-bottom: 20px;">
						<div class="col-sm-4" style="padding: 0px;">
							<a href="#" class="">
								<img src="{{url('/')}}/images/home-banner.jpeg" alt="" class="img_left_border">
							</a>
						</div>
						<div class="col-sm-4" style="padding: 0px;">
							<a href="#" class="">
								<img src="{{url('/')}}/images/home-banner.jpeg" alt="">
							</a>
						</div>
						<div class="col-sm-4" style="padding: 0px;">
							<a href="#" class="">
								<img src="{{url('/')}}/images/home-banner.jpeg" alt="" class="img_right_border">
							</a>
						</div>
					</div> -->
					<br>
					<div class="row ">
						<main class="col-md-12 col-sm-12">

							<!-- - - - - - - - - - - - - - Category - - - - - - - - - - - - - - - - -->
							<div>
								<h2 style="color: #0f9d58;"><a href="{{ url('/company-business') }}">Các đơn hàng bạn có thể giao dịch với các Công ty có uy tín</a></h2>
							</div>
							<div class="company_list">
								
								@if(count($getAllNewsCompany)!=0)
									<?php $i=0 ;$j=0?>
									@foreach($getAllNewsCompany as $itemAllNewsCompany)
										@if($i==0)<div class="category_product_row" style="background-color: #fff;">@endif
													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
											<div class="col-md-2 col-xs-12 company_cell">

												<div class="product_bestselt">

													<div class="company_image">

														<a href="{{url('/company/'.$itemAllNewsCompany->companyID.'/'.$itemAllNewsCompany->slug.'/'.$itemAllNewsCompany->newscompanyID)}}">
															<img src="@if (!empty($itemAllNewsCompany->image_company)){{url('/').$itemAllNewsCompany->image_company}} @else {{asset('/images/8.png')}} @endif" alt="">
														</a>
														<!-- {newscompany_id}/{companySlug} -->
													</div>

													<div class="description">

														<p class="textoverlow"><a href="{{ url('/company/'.$itemAllNewsCompany->companyID) }}" class="clearfix ;">{{$itemAllNewsCompany->name}}</a></p>
														
														<div class="clearfix limit-2">
				                                        	{!! $itemAllNewsCompany->content !!}
				                                        </div>
				                                        <span style="padding-left: 5px;"><a href="#" class="comments"><i class="fa fa-eye-slash"></i> 0<!-- @if(empty($blog->view))0 @else{{$blog->view}}@endif --></a></span>
													</div>

												</div>
											</div>
											<?php $i = $i+1;$j=$j+1; ?>
											@if($i>=6|| $j>=count($getAllNewsCompany))
												<?php $i=0 ?>
										</div>
										@endif

									@endforeach

								@else
										<br>
									<h2 class="text-center" style="text-align: center">Không tìm thấy dữ liệu</h2>
								@endif


								<div class="bottom_box"  style="text-align: center;">
									<a href="{{ url('/company-business') }}" class="button_grey middle_btn">Xem thêm  <i class="fa fa-arrow-right" aria-hidden="true" style="padding-top: 2px;"></i></a>
								</div>
							</div>
							<br>
							<br>
							<div>
								<h2 style="color: #0f9d58;"><a href="{{ url('/warehouse-business') }}">Thông tin các Chủ kho có thể cung cấp sản phẩm cho bạn</a></h2>
							</div>
							<div class="warehouse_list">
								@if(count($getAllWareHouse)!=0)
									<?php $i=0 ;$j=0?>
									@foreach($getAllWareHouse as $itemAllWareHouse)
										@if($i==0)<div class="category_product_row" style="background-color: #fff;">@endif
													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
											<div class="col-md-2 col-xs-12 company_cell">

												<div class="product_bestselt">

													<div class="company_image">

														<a href="{{ url('/shop/'.$itemAllWareHouse->id) }}"><img src="@if (!empty($itemAllWareHouse->image_kho)){{url('/').$itemAllWareHouse->image_kho}} @else {{asset('/images/2.png')}} @endif" alt=""></a>

													</div>

													<div class="description">

														<p class="textoverlow"><a href="{{ url('/shop/'.$itemAllWareHouse->id) }}" class="clearfix ">{{$itemAllWareHouse->name_company}}</a></p>
														<div class="kho_info clearfix">
															<a href="#" class="alignleft" style="width: 70px;">
																@if($itemAllWareHouse->level == 1)
																	<img src="{{url('/images')}}/level1.png" alt="">
																@elseif($itemAllWareHouse->level == 2)
																	<img src="{{url('/images')}}/level2.png" alt="">
																@elseif($itemAllWareHouse->level == 3)
																	<img src="{{url('/images')}}/level3.png" alt="">
																@else
																	<img src="{{url('/images')}}/level0.png" alt="">
																@endif
															</a>
															<a href="#" class="alignleft" style="width: 70px;">
																@if($itemAllWareHouse->confirm_kho == 1)
																	<img src="{{url('/images')}}/xacthuc.png" alt="">
																@else
																@endif
															</a>
														</div>
														<div class="clearfix product_info limit-2">
				                                        	Danh sách product thường xuyên bán
				                                        </div>
													</div>

												</div>
											</div>
											<?php $i = $i+1;$j=$j+1; ?>
											@if($i>=6|| $j>=count($getAllWareHouse))
												<?php $i=0 ?>
										</div>
										@endif

									@endforeach

									@else
										<br>
									<h2 class="text-center" style="text-align: center">Không tìm thấy dữ liệu</h2>
								@endif
								<div class="bottom_box" style="text-align: center;">
									<a href="{{ url('/warehouse-business') }}" class="button_grey middle_btn">Xem thêm  <i class="fa fa-arrow-right" aria-hidden="true" style="padding-top: 2px;"></i></a>
								</div>
							</div>
							
							<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

							<!-- <div class="tabs products section_offset animated transparent hidden-xs" data-animation="fadeInDown" data-animation-delay="150">
							
								- - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - -
							
								<ul class="tabs_nav clearfix">
							
									<li class="tab_bottom"><a href="#tab-1" style="font-size: 16px;">Sản phẩm mới</a></li>
									<li class="tab_bottom"><a href="#tab-2" style="font-size: 16px;">Sản phẩm đánh giá tốt</a></li>
							
							
								</ul>
								<div class="tab_containers_wrap">
									<div id="tab-1" class="tab_container">
							
										<div class="table_layout">
											<?php $i=0 ;$j=0?>
											@foreach($getNewProduct as $key => $product)
												@if($i==0)<div class="category_product_row" style="background-color: #fff;">@endif
														<div class="col-md-3 col-xs-12 category_product_cell">
							
															<div class="product_bestselt">
							
																<div class="image_wrap">
							
																	<a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>
																<div class="label_new">New</div>
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
													                    <span class="alignright">{!! \App\Rate::getRateProduct($product->id)!!}</span>
													                @else
																		<p class="product_price alignleft">@if($product->price_out == $product->price_sale){!! \App\Util::FormatMoney($product->price_out) !!} @else {!! \App\Util::FormatMoney($product->price_sale) !!} <span class="discount_price">{!! \App\Util::FormatMoney($product->price_out) !!}</span> @endif </p>
															
																		<span class="alignright">{!! \App\Rate::getRateProduct($product->id)!!}</span>
																	@endif
																	</div>
																	<div class="clearfix product_info">
																		<p class="alignleft">Tối thiểu: <a href="#" class="bg-number">{{ number_format($product->min_gram)  }}</a> SP</p>
																	</div>
																</div>
							
															</div>
														</div>
														<?php $i = $i+1; $j=$j+1; ?>
														@if ($i>=4 || $j>=count($getNewProduct))
															<?php $i=0 ?>
															</div>
														@endif
											@endforeach
										</div>
										<div class="bottom_box">
											<a href="{{url('/')}}/products" class="button_grey middle_btn">Xem nhiều sản phẩm</a>
										</div>
										
									</div>
									<div id="tab-2" class="tab_container">
							
							
										<div class="table_layout">
											<?php $i=0 ;$j=0?>
											@foreach($getBestStarsProduct as $key=> $product)
												@if($i==0)<div class="category_product_row" style=" background-color: #fff;">@endif
														
													<div class="col-md-3 col-xs-12 category_product_cell">
							
														<div class="product_bestselt">
							
															<div class="image_wrap">
							
																<a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>
							
																<div class="label_hot">Hot</div>
							
															</div>
															<div class="description">
							
																<a href="#">{{$product->title}}</a>
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
													                    <span class="alignright">{!! \App\Rate::getRateProduct($product->id)!!}</span>
													                @else
																		<p class="product_price alignleft">@if($product->price_out == $product->price_sale){!! \App\Util::FormatMoney($product->price_out) !!} @else {!! \App\Util::FormatMoney($product->price_sale) !!} <span class="discount_price">{!! \App\Util::FormatMoney($product->price_out) !!}</span> @endif </p>
																
																		<span class="alignright">{!! \App\Rate::getRateProduct($product->id)!!}</span>
																	@endif
																</div>
																<div class="clearfix product_info">
																	<p class="alignleft">Tối thiểu: <a href="#" class="bg-number">{{ number_format($product->min_gram)  }}</a> SP</p>
																</div>
							
															</div>
							
														</div>
							
													</div>
													<?php $i = $i+1;$j=$j+1; ?>
													@if($i>=4|| $j>=count($getBestStarsProduct))
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
							
							<section class="section_offset animated transparent" data-animation="fadeInDown" style="display: none;">
							
								<h3>Sản phẩm bán chạy</h3>
								<div class="table_layout">
									<?php $i=0 ;$j=0?>
									@foreach($bestSellerProduct as $key=> $product)
										@if($i==0)<div class="table_row">@endif
													- - - - - - - - - - - - - Product - - - - - - - - - - - - - - - -
											<div class="table_cell">
							
												<div class="product_item">
							
													<div class="image_wrap">
														<a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>
							
														<div class="label_bestseller">Bestseller</div>
							
													</div>
													<div class="description">
							
														<a href="#">{{$product->title}}</a>
														<div class="kho_info clearfix">
															<a href="#" class="alignleft photo">
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
															<p class="alignleft" style="width: 80%; white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"><b>{{ $product->nameKho  }}</b></p>
														</div>
														<div class="clearfix product_info">
							
															<p class="product_price alignleft">@if($product->price_out == $product->price_sale){!! \App\Util::FormatMoney($product->price_out) !!} @else {!! \App\Util::FormatMoney($product->price_sale) !!} <span class="discount_price">{!! \App\Util::FormatMoney($product->price_out) !!}</span> @endif </p>
																
															<span class="alignright">{!! \App\Rate::getRateProduct($product->id)!!}</span>
							
														</div>
														<div class="clearfix product_info">
															<p class="alignleft">Tối thiểu: {{ number_format($product->min_gram)  }} Kg</p>
														</div>
													</div>
							
												</div>
							
											</div>
											<?php $i = $i+1;$j=$j+1; ?>
											@if($i>=4|| $j>=count($bestSellerProduct))
												<?php $i=0 ?>
										</div>
										@endif
							
									@endforeach
							
								</div>
							
								<footer class="bottom_box">
							
									<a href="url('/')}}/products" class="button_grey middle_btn">Xem nhiều sản phẩm</a>
							
								</footer>
							
							</section> -->

						</main>

					</div><!--/ .row-->

				</div><!--/ .container-->

			</div>
			@include('admin.partial.modal_requiredlogin')
@endsection