@extends('layouts.frontend')
@section('title', 'Trang chủ')
@section('description','')
@section('add_styles')
{{-- --}}
@endsection
@section('content')
			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
			<div class="page_wrapper">

				<div class="container">

					<div class="section_offset">

						<div class="row">

							<div class="col-xs-12">



									{!! \App\Setting::getValue('slider')!!}
								</div><!--/ #layerslider-->

								<!-- - - - - - - - - - - - - - End of layer slider - - - - - - - - - - - - - - - - -->
								
							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .section_offset-->

					<div class="row">

						<aside class="col-md-3 col-sm-4">
								@include('partial.frontend-banner')
						</aside>

						<main class="col-md-9 col-sm-8">

							<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

							<div class="tabs products section_offset animated transparent" data-animation="fadeInDown" data-animation-delay="150">

								<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

								<ul class="tabs_nav clearfix">

									<li><a href="#tab-1">Sản phẩm mới</a></li>
									<li><a href="#tab-2">Sản phẩm đánh giá tốt</a></li>


								</ul>

								<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

								<div class="tab_containers_wrap">

									<!-- - - - - - - - - - - - - - news products - - - - - - - - - - - - - - - - -->

									<div id="tab-1" class="tab_container">

										<div class="table_layout">
											<?php $i=0 ;$j=0?>
											@foreach($getNewProduct as $key => $product)
												@if($i==0)<div class="table_row">@endif
																<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
														<div class="table_cell">

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

														</div>
														<?php $i = $i+1;$j=$j+1; ?>
														@if($i>=3|| $j>=count($getNewProduct))
															<?php $i=0 ?>
															</div>
														@endif

											@endforeach



										</div>

										<!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->

										<footer class="bottom_box">

											<a href="/product/?q=new" class="button_grey middle_btn">Xem nhiều sản phẩm</a>

										</footer>

										<!-- - - - - - - - - - - - - - End of view all products - - - - - - - - - - - - - - - - -->

									</div>

									<!-- - - - - - - - - - - - - - End of featured products - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - good products - - - - - - - - - - - - - - - - -->
									<div id="tab-2" class="tab_container">


										<div class="table_layout">
											<?php $i=0 ;$j=0?>
											@foreach($getBestStarsProduct as $key=> $product)
												@if($i==0)<div class="table_row">@endif
															<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
													<div class="table_cell">

														<div class="product_item">

															<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

															<div class="image_wrap">

																<a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>


																<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

																<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

																<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

																<div class="label_hot">Hot</div>


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

													</div>
													<?php $i = $i+1;$j=$j+1; ?>
													@if($i>=3|| $j>=count($getBestStarsProduct))
														<?php $i=0 ?>
												</div>
												@endif

											@endforeach



										</div>

										<!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->

										<footer class="bottom_box">

											<a href="/product/?q=best-stars" class="button_grey middle_btn">Xem nhiều sản phẩm</a>

										</footer>

										<!-- - - - - - - - - - - - - - End of view all products - - - - - - - - - - - - - - - - -->

									</div>

									<!-- - - - - - - - - - - - - - End of new products - - - - - - - - - - - - - - - - -->

								</div>

								<!-- - - - - - - - - - - - - - End of tabs container - - - - - - - - - - - - - - - - -->

							</div>

							<!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

							

							<!-- - - - - - - - - - - - - - Bestsellers - - - - - - - - - - - - - - - - -->

							<section class="section_offset animated transparent" data-animation="fadeInDown">

								<h3>Sản phẩm bán chạy</h3>
								<div class="table_layout">
									<?php $i=0 ;$j=0?>
									@foreach($bestSellerProduct as $key=> $product)
										@if($i==0)<div class="table_row">@endif
													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
											<div class="table_cell">

												<div class="product_item">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>


														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

														<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

														<div class="label_bestseller">Bestseller</div>



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

											</div>
											<?php $i = $i+1;$j=$j+1; ?>
											@if($i>=3|| $j>=count($bestSellerProduct))
												<?php $i=0 ?>
										</div>
										@endif

									@endforeach



								</div>


								<!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->

								<footer class="bottom_box">

									<a href="/product/?q=best-seller" class="button_grey middle_btn">Xem nhiều sản phẩm</a>

								</footer>

								<!-- - - - - - - - - - - - - - End of view all products - - - - - - - - - - - - - - - - -->

							</section>

							<!-- - - - - - - - - - - - - - End of bestsellers - - - - - - - - - - - - - - - - -->

							

						</main>

					</div><!--/ .row-->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
			<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
@endsection