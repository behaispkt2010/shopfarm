@extends('layouts.frontend')
@section('title', 'Trang chủ')
@section('description','')
@section('add_styles')
	{{-- --}}
@endsection
@section('content')
<div class="secondary_page_wrapper">

	{{dd(\App\Product::getBestSellerProduct())}}
	<div class="container">
		<div class="row">

			<aside class="col-md-3 col-sm-4">


				<section class="section_offset">

					<h3>Nhóm sản phẩm</h3>

					<ul class="theme_menu">

						<li><a href="#">Lúa</a></li>
						<li><a href="#">Gạo</a></li>
						<li><a href="#">Mì</a></li>
						<li><a href="#">Ngũ cốc</a></li>
						<li><a href="#">Khác</a></li>

					</ul>

				</section>
				<!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->

				<div class="section_offset">

					<!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->

					<section class="infoblock type_2 animated transparent" data-animation="fadeInDown">

						<img class="img-responsive" src="../../../frontend/images/left_image_ad_1.png">

					</section><!--/ .infoblock.type_2-->

					<!-- - - - - - - - - - - - - - End infoblock - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->

					<section class="infoblock type_2 animated transparent" data-animation="fadeInDown">

						<img class="img-responsive" src="../../../frontend/images/left_image_ad_2.png">

					</section><!--/ .infoblock.type_2-->

					<!-- - - - - - - - - - - - - - End infoblock - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->

					<section class="infoblock type_2 animated transparent" data-animation="fadeInDown">

						<img class="img-responsive" src="../../../frontend/images/left_image_ad_3.png">

					</section><!--/ .infoblock.type_2-->

					<!-- - - - - - - - - - - - - - End infoblock - - - - - - - - - - - - - - - - -->

				</div>

				<!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->


			</aside>
		<!-- - - - - - - - - - - - - - Products - - - - - - - - - - - - - - - - -->
<div class="col-md-9">
		<div class="section_offset">

			<header class="top_box on_the_sides">
				<div class="right_side clearfix v_centered">
					<h4>Tất cả sản phẩm</h4>
					</div>
				<div class="right_side clearfix v_centered">

					<!-- - - - - - - - - - - - - - Sort by - - - - - - - - - - - - - - - - -->

					<div class="v_centered">

						<span>Xắp xếp theo:</span>

						<div class="custom_select sort_select">

							<select name="">

								<option value="Cấp kho">Cấp kho</option>
								<option value="Đánh giá">Đánh giá</option>
								<option value="Tên sản phẩm">Tên sản phẩm</option>
								<option value="Mới nhất">Mới nhất</option>
								<option value="Giá">Giá</option>


							</select>

						</div>

					</div>

					<!-- - - - - - - - - - - - - - End of sort by - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Number of products shown - - - - - - - - - - - - - - - - -->


				</div>



			</header>

			<div class="table_layout" id="products_container">

				<div class="table_row">

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_7.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Lorem interdum vitae dapibus ac, Liqui-gels 24 capsules</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$5.99</b></p>

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating alignright">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Lorem interdum vitae dapibus ac, Liqui-gels 24 capsules</a>

								<a href="#" class="product_category">Beauty Clearance</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li><a href="#">3 Review(s)</a></li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$5.99</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_8.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_bestseller">Bestseller</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Sed in lacus ut enim adipiscing aliquet 4.25 fl oz (126ml)</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$8.99</b></p>

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating alignright">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Sed in lacus ut enim adipiscing aliquet 4.25 fl oz (126ml)</a>

								<a href="#" class="product_category">Bath &amp; Spa</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li><a href="#">3 Review(s)</a></li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$8.99</p>

								<ul class="seller_stats">

									<li>Shipping: $11.24/piece</li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_9.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Praesent justo dolor lobortis quis lobortis 160 ea</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$76.99</b></p>

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Praesent justo dolor lobortis quis lobortis 160 ea</a>

								<a href="#" class="product_category">Beauty Clearance</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li>0 Review(s)</li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$76.99</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_6.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_new">New</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Dolor lobortis quis lobortis, 100mg, Softgels 120 ea</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$75.39</b></p>

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Dolor lobortis quis lobortis, 100mg, Softgels 120 ea</a>

								<a href="#" class="product_category">Beauty Clearance</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li>0 Review(s)</li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$75.39</p>

								<ul class="seller_stats">

									<li>Shipping: $16.63/piece</li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

						<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

				</div><!--/ .table_row -->

				<div class="table_row">

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_14.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_offer percentage">

									<div>30%</div>OFF

								</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Mauris fermentum dictum magna, Vcaps 60 ea</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><s>$99.99</s> <b>$79.99</b></p>

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating alignright">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Mauris fermentum dictum magna, Vcaps 60 ea</a>

								<a href="#" class="product_category">Gift Sets</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li>0 Review(s)</li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold"><s>$99.99</s> $79.99</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_15.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_new">New</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit 12 ea</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$24.99</b></p>

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit 12 ea</a>

								<a href="#" class="product_category">Hair Care</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li>0 Review(s)</li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$24.99</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/tabs_img_1.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_new">New</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Donec porta diam eu massa diam lorem 750mg, Softgels 120 ea</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$44.99</b></p>

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Donec porta diam eu massa diam lorem 750mg, Softgels 120 ea</a>

								<a href="#" class="product_category">Hair Care</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li>0 Review(s)</li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$44.99</p>

								<ul class="seller_stats">

									<li>Shipping: $5.00/piece</li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/tabs_img_2.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_soldout">Sold Out</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">In pede mi aliquet sit amet 30</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$44.99</b></p>

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating alignright">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">In pede mi aliquet sit amet 30</a>

								<a href="#" class="product_category">Beauty Clearance</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li><a href="#">5 Review(s)</a></li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$39.39</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="out_of_stock">out of stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

				</div><!--/ .table_row -->

				<div class="table_row">

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/tabs_img_3.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_hot">Hot</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Consectetuer adipiscing elitlorem ipsum dolor sit amet, 2.5 fl oz (75ml)</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$44.99</b></p>

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Consectetuer adipiscing elitlorem ipsum dolor sit amet, 2.5 fl oz (75ml)</a>

								<a href="#" class="product_category">Makeup &amp; Accessories</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li>5 Review(s)</li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$44.99</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_10.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_bestseller">Bestseller</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Aenean auctor wisi et urna aliquam erat volutpat, Capsules 90 ea</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$35.99</b></p>

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating alignright">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Aenean auctor wisi et urna aliquam erat volutpat, Capsules 90 ea</a>

								<a href="#" class="product_category">Makeup &amp; Accessories</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li><a href="#">1 Review(s)</a></li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$35.99</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="out_of_stock">out of stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_16.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_bestseller">Bestseller</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Praesent justo dolor lobortis quis lobortis dignissim pulvinar</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$8.79</b></p>

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating alignright">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Praesent justo dolor lobortis quis lobortis dignissim pulvinar</a>

								<a href="#" class="product_category">Beauty Clearance</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li><a href="#">4 Review(s)</a></li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$8.79</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_17.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_bestseller">Bestseller</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Lobortis quis lobortis dignissim pulvinar praesent justo, Berry 90 ea</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$12.99</b></p>

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Lobortis quis lobortis dignissim pulvinar praesent justo, Berry 90 ea</a>

								<a href="#" class="product_category">Makeup &amp; Accessories</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li>0 Review(s)</li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$12.99</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

				</div><!--/ .table_row -->

				<div class="table_row">

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_3.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_new">New</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Donec porta diam eu massa diam lorem 750mg, Softgels 120 ea</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$44.99</b></p>

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Donec porta diam eu massa diam lorem 750mg, Softgels 120 ea</a>

								<a href="#" class="product_category">Hair Care</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li>0 Review(s)</li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$44.99</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_4.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Etiam cursus leo vel metus nulla facilisi 5 ea</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$9.59</b></p>

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating alignright">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Etiam cursus leo vel metus nulla facilisi 5 ea</a>

								<a href="#" class="product_category">Makeup &amp; Accessories</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

									<ul class="rating">

										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li><a href="#">8 Review(s)</a></li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$9.59</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_5.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Leo vel metus nulla facilisi etiam, Lemon 4 fl oz (118ml)</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$8.99</b></p>

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Leo vel metus nulla facilisi etiam, Lemon 4 fl oz (118ml)</a>

								<a href="#" class="product_category">Makeup &amp; Accessories</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li>0 Review(s)</li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$8.59</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

						<div class="product_item">

							<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

							<div class="image_wrap">

								<img src="../../../frontend/images/product_img_1.jpg" alt="">

								<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

								<div class="actions_wrap">

									<div class="centered_buttons">

										<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

										<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

									</div><!--/ .centered_buttons -->

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

									<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

								</div><!--/ .actions_wrap-->

								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

							</div><!--/. image_wrap-->

							<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

							<div class="description">

								<a href="#">Ipsum primis in faucibus orci luctus, Capsules 60 ea</a>

								<div class="clearfix product_info">

									<p class="product_price alignleft"><b>$27.99</b></p>

								</div>

							</div>

							<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="full_description">

								<a href="#" class="product_title">Ipsum primis in faucibus orci luctus, Capsules 60 ea</a>

								<a href="#" class="product_category">Makeup &amp; Accessories</a>

								<div class="v_centered product_reviews">

									<!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

									<ul class="topbar">

										<li>0 Review(s)</li>
										<li><a href="#">Add Your Review</a></li>

									</ul>

									<!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

								</div>

								<p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

								<a href="#" class="learn_more">Learn More</a>

							</div>

							<!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

							<div class="actions">

								<p class="product_price bold">$27.99</p>

								<ul class="seller_stats">

									<li>Shipping: <span class="success">Free Shipping</span></li>
									<li>Availability: <span class="success">in stock</span></li>
									<li class="seller_info_wrap">

										Seller: <span class="seller_name">johnsmith</span>

										<div class="seller_info_dropdown">

											<ul class="seller_stats">

												<li>

													<ul class="topbar">

														<li>China (Mainland)</li>

														<li><a href="#">Contact Details</a></li>

													</ul>

												</li>

												<li><span class="bold">99.8%</span> Positive Feedback</li>

											</ul>

											<div class="v_centered">

												<a href="#" class="button_blue mini_btn">Contact Seller</a>

												<a href="#" class="small_link">Chat Now</a>

											</div>

										</div>

									</li>

								</ul>

								<ul class="buttons_col">

									<li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

									<li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

								</ul>

							</div>

							<!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

						</div><!--/ .product_item-->

					</div>

					<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

				</div><!--/ .table_row -->

			</div><!--/ .table_layout -->

			<footer class="bottom_box on_the_sides">

				<div class="left_side">

					<p>Showing 1 to 3 of 45 (15 Pages)</p>

				</div>

				<div class="right_side">

					<ul class="pags">

						<li><a href="#"></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#"></a></li>

					</ul>

				</div>

			</footer>

		</div>

		<!-- - - - - - - - - - - - - - End of products - - - - - - - - - - - - - - - - -->
		</div>
	</div>
	</div><!--/ .container-->

</div><!--/ .page_wrapper-->

<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

	@endsection