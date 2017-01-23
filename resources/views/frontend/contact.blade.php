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

						<li><a href="index.html">Home</a></li>
						<li>Contact Us</li>

					</ul>

					<div class="row">

						<aside class="col-md-3 col-sm-4">

							<!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->

							<section class="section_offset">

								<h3>Thông tin</h3>

								<ul class="theme_menu">

									<li><a href="additional_page_about.html">About Us</a></li>
									<li><a href="#">Delivery Information</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms &amp; Conditions</a></li>
									<li class="active"><a href="additional_page_contact.html">Contact Us</a></li>


								</ul>

							</section><!--/ .section_offset -->

							<!-- - - - - - - - - - - - - - End of information - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

							<div class="section_offset">

								<a href="#" class="banner">
									
									<img src="../../../frontend/images/banner_img_11.png" alt="">

								</a>

							</div>

							<!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->


						</aside><!--/ [col]-->

						<main class="col-md-9 col-sm-8">

							{{--<h1 class="page_title">Contact Us</h1>--}}

							<section class="section_offset">
								
								<h3>Liên hệ</h3>

								<div class="theme_box">

									<p class="form_caption">Ut tellus dolor, dapibus eget, elementum vel, eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit.</p>

									<!-- - - - - - - - - - - - - - Contact form - - - - - - - - - - - - - - - - -->

									<form novalidate enctype="multipart/form-data" class="contactform type_2" id="contact_form">

										<ul>
										
											<li class="row">

												<div class="col-sm-6">
												
													<label for="cf_name" class="required">Name</label>
													<input type="text" required name="cf_name" id="cf_name" title="Name">

												</div><!--/ [col]-->

												<div class="col-sm-6">

													<label for="cf_email" class="required">Email Address</label>
													<input type="email" required name="cf_email" id="cf_email" title="Email">

												</div><!--/ [col]-->

											</li><!--/ .row -->

											<li class="row">

												<div class="col-xs-12">

													<label for="cf_order_number">Order number</label>
													<input type="text" name="cf_order_number" id="cf_order_number" title="Order number">

												</div><!--/ [col]-->

											</li><!--/ .row -->

											<li class="row">

												<div class="col-xs-12">

													<label for="cf_message" class="required">Message</label>
													<textarea id="cf_message" required name="cf_message" title="Message" rows="6"></textarea>

												</div><!--/ [col]-->

											</li><!--/ .row -->

										</ul>

									</form><!--/ .contactform -->

									<!-- - - - - - - - - - - - - - End of contact form - - - - - - - - - - - - - - - - -->

								</div><!--/ .theme_box -->

								<footer class="bottom_box on_the_sides">

									<div class="left_side">
									
										<button class="button_dark_grey middle_btn" type="submit" form="contact_form">Submit</button>

									</div>

									<div class="right_side">

										<p class="prompt">Required Fields</p>

									</div>

								</footer>

							</section>

							<section class="section_offset">

								<h3>Thông tin liên lạc</h3>

								<div class="theme_box">

									<div class="row">

										<div class="col-sm-5">

											<div class="proportional_frame">

												<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3024.238131852431!2d-74.006059!3d40.712773999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258fda88cefb3%3A0x7f1e88758d210007!2z0J3RjNGOLdC50L7RgNC60YHQutC40Lkg0KHQuNGC0Lgt0YXQvtC70Ls!5e0!3m2!1sru!2sua!4v1415946524959" style="border:0"></iframe>

											</div>

										</div><!--/ [col]-->

										<div class="col-sm-7">

											<p class="form_caption">Ut tellus dolor dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.</p>

											<ul class="c_info_list">

												<li class="c_info_location">8901 Marmora Road, Glasgow, D04 89GR.</li>
												<li class="c_info_phone">800-599-65-80</li>
												<li class="c_info_mail"><a href="mailto:#">info@companyname.com</a></li>
												<li class="c_info_schedule">

													<ul>

														<li>Monday-Friday: 8.00-20.00</li>
														<li>Saturday: 9.00-15.00</li>
														<li>Sunday: closed</li>

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

			</div><!--/ .page_wrapper-->
			
			<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
@endsection