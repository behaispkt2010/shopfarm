@extends('layouts.frontend')
@section('title', 'Nhận ngay những tháng ngày miễn phí dùng dịch vụ')
@section('description','Đăng ký Chủ kho')
@section('add_styles')
{{-- --}}
@endsection
@section('content')
			<div class="secondary_page_wrapper">
				<div class="container">
					<ul class="breadcrumbs">
						<li><a href="/">Trang chủ</a></li>
						<li>Đăng ký Chủ kho</li>
					</ul>
					<div class="row">
						<aside class="col-md-3 col-sm-4" style="top: -8px;">
							<section class="section_offset">
								<h3>Thông tin</h3>
								<ul class="theme_menu">
									<li><a href="#">Giới thiệu</a></li>
									<li><a href="#">Dịch vụ</a></li>
									<li><a href="#">Điều khoản</a></li>
									<li ><a href="#">Chính sách bảo mật</a></li>
									<li ><a href="#">Liên hệ</a></li>
									<li class="active"><a href="#">Đăng ký Chủ kho</a></li>
								</ul>
							</section>
							<div class="section_offset">
								<a href="#" class="banner">
									<img src="../../../frontend/images/banner_img_11.png" alt="">
								</a>
							</div>
						</aside>
						<main class="col-md-8 col-sm-7">

							{{--<h1 class="page_title">Contact Us</h1>--}}

							<section class="section_offset">
								
								<h3>Đăng ký Chủ kho</h3>

								<form action="" method="Post"  enctype="multipart/form-data" class="contactform type_2" id="contact_form" >
									<input type="hidden" name="_token" value="{{ csrf_token() }}">

									<div class="theme_box">

									<p class="form_caption">Điền đầy đủ thông tin form bên dưới</p>
										@if (\Session::has('success'))
											<p class="message red" style="color: red;">Cảm ơn quý khách đã đăng ký. Chúng tôi sẽ liên hệ trong thời gian sớm nhất có thể</p>
											<br>
										@endif
										<ul>
											<li class="row">
												<div class="col-sm-6">
													<label for="cf_name" class="required">Tên</label>
													<input type="text" required name="cf_name" id="cf_name" title="Name">

												</div>
												<div class="col-sm-6">
													<label for="cf_email" class="required">Email</label>
													<input type="email" required name="cf_email" id="cf_email" title="Email">

												</div>
											</li>
											<li class="row">
												<div class="col-xs-12">
													<label for="cf_order_number" required class="required">Số điện thoại</label>
													<input type="text" name="cf_order_number" id="cf_order_number" title="Order number">
												</div>
											</li>
											<li class="row">
												<div class="col-xs-12">

													<label for="cf_message" class="required">Tin nhắn</label>
													<textarea id="cf_message" required name="cf_message" title="Message" rows="6"></textarea>

												</div>
											</li>
										</ul>
								</div>
								<footer class="bottom_box on_the_sides">

									<div class="left_side">
									
										<button class="button_dark_grey middle_btn" type="submit" name="submit-contact">Đăng ký chủ kho</button>

									</div>

									<div class="right_side">

										<p class="prompt">Yêu cầu nhập</p>

									</div>

								</footer>
								</form>
							</section>

							<section class="section_offset">

								<h3>Thông tin liên lạc</h3>

								<div class="theme_box">

									<div class="row">

										<div class="col-sm-5">

											<div class="proportional_frame">

												<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3024.238131852431!2d-74.006059!3d40.712773999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258fda88cefb3%3A0x7f1e88758d210007!2z0J3RjNGOLdC50L7RgNC60YHQutC40Lkg0KHQuNGC0Lgt0YXQvtC70Ls!5e0!3m2!1sru!2sua!4v1415946524959" style="border:0"></iframe>

											</div>

										</div>
										<div class="col-sm-7">

											<p class="form_caption">Thông tin liên hệ của chúng tôi</p>

											<ul class="c_info_list">

												<li class="c_info_location">Km35 Quốc lộ 26, huyện Krông Păk, tỉnh Dăk Lăk</li>
												<li class="c_info_phone">0944 619 493</li>
												<li class="c_info_mail"><a href="mailto:#">sale@nongsantunhien.com</a></li>
												<li class="c_info_schedule">
													<ul>

														<li>Sáng: 8h30-11h30

															</li>
														<li>Chiều: 13h00-21h00</li>
														<li>Thứ 7 - Chủ nhật: nghỉ</li>

													</ul>

												</li>

											</ul>

										</div><!--/ [col]-->

									</div><!--/ .row -->

								</div><!--/ .theme_box -->

							</section>

						</main><!--/ [col]-->

					</div><!--/ .row-->

				</div><!--/ .container-->

			</div>
@endsection