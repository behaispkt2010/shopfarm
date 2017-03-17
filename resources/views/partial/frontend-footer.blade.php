
			<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

			<footer id="footer">


				<hr>

				<!-- - - - - - - - - - - - - - Footer section- - - - - - - - - - - - - - - - -->

				<div class="footer_section">

					<div class="container">

						<div class="row">

							<div class="col-md-3 col-sm-6">

								<!-- - - - - - - - - - - - - - Information widget - - - - - - - - - - - - - - - - -->

								<section class="widget">

									<h4>Thông tin</h4>

									<ul class="list_of_links">

										<li><a href="#">Giới thiệu</a></li>

										<li><a href="#">Dịch vụ</a></li>
										<li><a href="#">liên hệ</a></li>
										<li><a href="#">Điều khoản</a></li>
										<li><a href="#">Chính sách bảo mật</a></li>

									</ul>

								</section>

								<!-- - - - - - - - - - - - - - End information widget - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

							<div class="col-md-3 col-sm-6">

								<!-- - - - - - - - - - - - - - Contact Us widget - - - - - - - - - - - - - - - - -->

								<section class="widget">

									<h4>Liên hệ</h4>

									<ul class="c_info_list">

										<li class="c_info_location">Km35 Quốc lộ 26, huyện Krông Păk, tỉnh Dăk Lăk</li>
										<li class="c_info_phone">0944 619 493</li>
										<li class="c_info_mail"><a href="mailto:#">sale@nongsantunhien.com</a></li>
										<li class="c_info_schedule">

											<ul>

												<li>Sáng: 8h30-11h30</li>
												<li>Chiều: 13h00-21h00</li>
												<li>Thứ 7 - Chủ nhật: nghỉ</li>

											</ul>

										</li>

									</ul>

								</section><!--/ .widget-->

								<!-- - - - - - - - - - - - - - End of contact us widget - - - - - - - - - - - - - - - - -->

							</div>

							<div class="col-md-3 col-sm-6">

								<!-- - - - - - - - - - - - - - Subscribe widget - - - - - - - - - - - - - - - - -->

								<section class="widget">

									<h4>Kênh của chúng tôi</h4>

									<p class="form_caption">Kết nối với chúng tôi để nhận được nhiều thông tin hơn nữa</p>

									<ul class="social_btns">

										<li>
											<a href="#" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_twitter tooltip_container"><i class="icon-twitter"></i><span class="tooltip top">Twitter</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_googleplus tooltip_container"><i class="icon-gplus-2"></i><span class="tooltip top">GooglePlus</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_pinterest tooltip_container"><i class="icon-pinterest-3"></i><span class="tooltip top">Pinterest</span></a>
										</li>



										<li>
											<a href="#" class="icon_btn middle_btn social_youtube tooltip_container"><i class="icon-youtube"></i><span class="tooltip top">Youtube</span></a>
										</li>



										<li>
											<a href="#" class="icon_btn middle_btn social_instagram tooltip_container"><i class="icon-instagram-4"></i><span class="tooltip top">Instagram</span></a>
										</li>



									</ul>

								</section><!--/ .widget-->

								<!-- - - - - - - - - - - - - - End of subscribe widget - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->
							<div class="col-md-3 col-sm-6">

								<a href="{{url('/resisterWareHouse')}}"><img src="{{asset('/images/dangkychukho.jpg')}}" alt=""></a>

								{{--<section class="widget">

									<h4>Tin tức mới nhất</h4>
									<ul class="list_of_entries">
										@foreach(\App\Article::getNewArticle() as $item)
										<li>
											<article class="entry">
												<a href="{{url('/blog')}}/{{\App\Category::getSlugCategory($item->blog_id)}}/{{$item->slug}}" class="entry_thumb">
													<img src="{{url('/')}}{{$item->image}}" alt="">
												</a>
												<div class="wrapper">
													<h6 class="entry_title"><a href="{{url('/blog')}}/{{\App\Category::getSlugCategory($item->blog_id)}}/{{$item->slug}}">{{$item->title}}</a></h6>
													<div class="entry_meta">
														<span><i class="icon-calendar"></i> {{$item->created_at->format('d-m-Y')}}</span>
													</div>
												</div>
											</article>
										</li>
										@endforeach
									</ul>
								</section>--}}
							</div>



						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .footer_section_2-->

				<!-- - - - - - - - - - - - - - End footer section- - - - - - - - - - - - - - - - -->

				<hr>

				<!-- - - - - - - - - - - - - - Footer section - - - - - - - - - - - - - - - - -->

				<div class="footer_section_3 align_center">

					<div class="container text-center">



						<!-- - - - - - - - - - - - - - End of footer navigation - - - - - - - - - - - - - - - - -->

						<p class="copyright">&copy; 2017 <a href="../html-fronend/index.html">Nông sản tự nhiên</a>. All Rights Reserved.</p>

					</div><!--/ .container-->

				</div><!--/ .footer_section-->

				<!-- - - - - - - - - - - - - - End footer section - - - - - - - - - - - - - - - - -->

			</footer>

			<!-- - - - - - - - - - - - - - End Footer - - - - - - - - - - - - - - - - -->



