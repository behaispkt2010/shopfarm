
<footer id="footer">
	<hr>
	<div class="footer_section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<section class="widget hidden-xs">
						<h4>Về nosaGO.com</h4>
						<ul class="list_of_links">
							<li><a href="#">Giới thiệu</a></li>
							<li><a href="#">Dịch vụ</a></li>
							<li><a href="#">Liên hệ</a></li>
							<li><a href="#">Điều khoản</a></li>
							<li><a href="#">Chính sách bảo mật</a></li>
						</ul>
					</section>
					<section class="widget visible-xs">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thông tin <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Giới thiệu</a></li>
							<li><a href="#">Dịch vụ</a></li>
							<li><a href="#">Liên hệ</a></li>
							<li><a href="#">Điều khoản</a></li>
							<li><a href="#">Chính sách bảo mật</a></li>
				          </ul>
				        </li>
					</section>
				</div>
				<div class="col-md-3 col-sm-6 hidden-xs">
					<section class="widget">
						<h4>Hỗ trợ khách hàng</h4>
						<ul class="list_of_links">
							<li class="c_info_phone" style="padding-bottom: 16px;">0944 619 493</li>
							<li class="c_info_schedule" style="padding-bottom: 9px;">(8h - 21h kể cả T7,CN)</li>
							<li><a href="#">Câu hỏi thường gặp</a></li>
							<li><a href="#">Gửi yêu cầu hỗ trợ</a></li>
							<li><a href="#">Hướng dẫn đăng ký chủ kho</a></li>
							<li><a href="#">Hướng dẫn quản lý hệ thống</a></li>
						</ul>
					</section>
				</div>
				<div class="col-md-3 col-sm-6">
					<section class="widget">
						<h4>Hợp tác và liên kết</h4>
						<ul class="list_of_links">
							<li><a href="#">Hợp tác cùng doanh nghiệp</a></li>
							<li><a href="#">Hợp tác bên thứ 3</a></li>
						</ul>
					</section>
				</div>
				<div class="col-md-3 col-sm-6">
					<section class="widget">
						<h4>Kết nối với chúng tôi</h4>
						<ul class="social_btns">
							<li>
								<a href="#" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a>
							</li>
							<li>
								<a href="#" class="icon_btn middle_btn social_youtube tooltip_container"><i class="icon-youtube"></i><span class="tooltip top">Youtube</span></a>
							</li>
						</ul>
					</section>
					Ứng dụng trên điện thoại
					<div class="applink">
				        <p><a target="_blank" href="#">
				            <img width="115" src="{{ asset('/frontend/images/appstore_button_apple.png') }}">
				        </a></p>
				        <p><a target="_blank" href="#">
				            <img width="114" src="{{ asset('/frontend/images/appstore_button_google.png') }}">
				        </a></p>
				    </div>
				</div>
			</div>
			
		</div>
	</div>
	<hr>
	<div class="footer_section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<section class="widget">
						<h4>Địa chỉ văn phòng Hồ Chí Minh</h4>
						<p>Số 52, đường số 10, Phường 4, quận 9, Tp. Hồ Chí Minh</p>
						<a href="">Xem bản đồ</a>
					</section>
				</div>
				<div class="col-md-6 col-sm-6">
					<section class="widget">
						<h4>Địa chỉ văn phòng DakLak</h4>
						<p>Km35 Quốc lộ 26, huyện Krông Păk, tỉnh Dăk Lăk</p>
					</section>
				</div>
				<hr>
			</div>
		</div>
	</div>
	<hr>
	<div class="footer_section">
		<div class="container" style="width: 100% !important; padding: 0px;">
			<div class="col-md-4 col-sm-4 dkdichvu" style="padding: 0px;">
				<section class="widget">
					<a href="#" title="Đăng ký dịch vụ Quảng cáo"><img src="{{asset('images/dkquangcao.png')}}" alt=""></a>
				</section>
			</div>
			<div class="col-md-4 col-sm-4 dkdichvu" style="padding: 0px;">
				<section class="widget">
					<a href="#" title="Đăng ký dịch vụ Chủ kho dùng trả phí"><img src="{{asset('images/dktraphi.png')}}" alt=""></a>
				</section>
			</div>
			<div class="col-md-4 col-sm-4 dkdichvu" style="padding: 0px;">
				<section class="widget">
					<a href="#" title="Đăng ký dịch vụ Xác thực thông tin"><img src="{{asset('images/dkxacthuc.png')}}" alt=""></a>
				</section>
			</div>
			<hr>
		</div>
	</div>
	<hr>
	<div class="footer_section" style="background-color: #e0e0e0;">
		<div class="container">
			<div class="row">
				<h4>Bạn đang thắc mắc điều gì, đừng ngần ngại, hãy gửi thông tin cần thiết cho chúng tôi để được hỗ trợ</h4>
				<div class="col-md-3 col-sm-3 col-offset-md-3">
					<section class="widget">
						<div class="form-group">
                            <select id="select-dichvu" class="form-control" name="dichvu" data-placeholder="Chọn gói dịch vụ">
                                <option value="">Chọn gói dịch vụ</option>
                                <option value="1">Đăng ký chủ kho dùng trả phí</option>
                                <option value="2">Đăng ký Quảng cáo</option>
                                <option value="3">Xác thực uy tín</option>
                            </select>
                        </div>
					</section>
				</div>
				<div class="col-md-2 col-sm-2">
					<input type="text" class="form-control" name="" value="" placeholder="Họ tên của bạn">
				</div>
				<div class="col-md-2 col-sm-2">
					<input type="text" class="form-control" name="" value="" placeholder="Số điện thoại của bạn">
				</div>
				<div class="col-md-3 col-sm-3">
					<button type="button" class="btn btn-raised btn-success btnSendRequest">Nhận hỗ trợ</button>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="footer_section">
		<div class="container">
			<div class="row">
				<p style="text-align:center;">Đăng ký chủ kho tại đây <a href="{{url('/resisterWareHouse')}}" class="btn btn-raised btn-primary btn-xs transformUppercase" style="background: #0f9d58;">Đăng ký</a></p>
			</div>
		</div>
	</div>
	<hr>
	<div class="footer_section_3 align_center">
		<div class="container text-center">
			<p class="copyright">&copy; 2017 <a href="../html-fronend/index.html">Nông sản tự nhiên</a>. All Rights Reserved.</p>
		</div>
	</div>
</footer>



