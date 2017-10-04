@extends('layouts.page')
@section('title', 'Những điều cần biết khi Xác thực kho')
@section('url_seo', '')
@section('type_seo', '')
@section('title_seo', '')
@section('description_seo', '')
@section('image_seo', '')
@section('description','Những điều cần biết khi Xác thực kho')

@section('content')
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
<div class="landingpage">
	<div class="tab-content-landingpage" id="tabsLandingpage"> 
	<div class="sidebar" style="height: 400px;color: #169f5d;">
		<div class="title_lp col-md-4 col-sm-4" style="float: left; padding-bottom: 20px;">RA MẮT <p class="small_text" style="padding-top: 20px;">Mạng lưới kho nông sản Việt Nam</p>
		</div>
	</div>
	<div class="service" style="height: 500px; background-color: #fff;">
		<div class="title_lp service_lp_1">Khám phá tính năng <span class="small_text">và hơn thế nữa</span></div>
		<div class="content-service-landingpage">
			<div class="col-md-4 col-sm-4 service_one">
				<div class="box_service_one">
					<div class="ic_service">
						
					</div>
					<div class="bg_service">
						<img class="radius img_lp" src="{{ asset('frontend/images/tinhnang1.png') }}" alt="">
					</div>
				</div>
				<div class="info_service_one">
					Tự tạo website dễ dàng với hơn 300 mẫu giao diện sẵn có, chuẩn SEO, tối ưu trên di động và còn sở hữu những tính năng bán hàng độc đáo.
				</div>
			</div>
			<div class="col-md-4 col-sm-4 service_one">
				<div class="box_service_one">
					<div class="ic_service">
						
					</div>
					<div class="bg_service">
						<img class="radius img_lp" src="{{ asset('frontend/images/tinhnang2.png') }}" alt="">
					</div>
				</div>
				<div class="info_service_one">
					Công cụ hỗ trợ việc bán hàng trên Facebook cực kỳ hiệu quả, Quản lý tất cả comment, inbox, khách hàng, cho đến việc chống cướp khách trên fanpage
				</div>
			</div>
			<div class="col-md-4 col-sm-4 service_one">
				<div class="box_service_one">
					<div class="ic_service">
						
					</div>
					<div class="bg_service">
						<img class="radius img_lp" src="{{ asset('frontend/images/tinhnang3.png') }}" alt="">
					</div>
				</div>
				<div class="info_service_one">
					Công cụ phân tích, hỗ trợ kinh doanh trên facebook giúp tối ưu hiệu quả quảng cáo, tăng tỷ lệ chốt đơn và tối đa năng suất làm việc.
				</div>
			</div>
		</div>	
	</div>
	<div class="company">
		<div class="title_lp service_lp_2">Đối tác của chúng tôi</div>
		<div class="content-service-landingpage service_lp_2">
			<div class="row" style="margin: 0px">
				<?php $getAllNewsCompany = \App\Company::getCompany(18); 
				$i=0 ;$j=0 ?>
				@foreach($getAllNewsCompany as $itemAllNewsCompany)
					@if($i==0)<div class="list_com">@endif
						<div class="col-md-2 col-xs-12 company_cell" style="">
							<div class="well box_1">
								<div class="company_image_lp">
									<a href="#">
										<img class="radius" src="@if (!empty($itemAllNewsCompany->image_company)){{url('/').$itemAllNewsCompany->image_company}} @else {{asset('/images/8.png')}} @endif" alt="">
									</a>
								</div>
							</div>
						</div>
						<?php $i = $i+1;$j=$j+1; ?>
						@if($i>=6|| $j>=count($getAllNewsCompany))
							<?php $i=0 ?>
					</div>
					@endif
				@endforeach
			</div>
			<div class="more" style="text-align: center;">Và hơn 300 đối tác trên cả nước</div>	
			<br>
		</div>
	</div>	
	<div class="service-levelkho" style="">
		<div class="title_lp service_lp_3">Gói dịch vụ</div>
		<div class="content-service-landingpage">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12 " style="">
					<div class="goidichvu">
						<section class="widget">
							<a href="#" title="Chủ kho cấp 1"><img style="width: 100%;" src="{{asset('images/dkquangcao.png')}}" alt=""></a>
						</section>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 " style="">
					<div class="goidichvu">
						<section class="widget">
							<a href="#" title="Chủ kho cấp 2"><img style="width: 100%;" src="{{asset('images/dkquangcao.png')}}" alt=""></a>
						</section>
					</div>	
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 " style="">
					<div class="goidichvu">
						<section class="widget">
							<a href="#" title="Chủ kho cấp 3"><img style="width: 100%;" src="{{asset('images/dkquangcao.png')}}" alt=""></a>
						</section>
					</div>	
				</div>
			</div>
			<!-- <div class="tabs-service" data-example-id="togglable-tabs"> 
				<ul class="nav nav-tabs" id="tabs_service" role="tablist"> 
					<li role="presentation" class="active">
						<a href="#level1" id="level1-tab" role="tab" data-toggle="tab" aria-controls="level1" aria-expanded="true">Cấp 1</a>
					</li> 
					<li role="presentation" class="">
						<a href="#level2" role="tab" id="level2-tab" data-toggle="tab" aria-controls="level2" aria-expanded="false">Cấp 2</a>
					</li> 
					<li role="presentation" class="">
						<a href="#level3" role="tab" id="level3-tab" data-toggle="tab" aria-controls="level3" aria-expanded="false">Cấp 3</a>
					</li> 
				</ul> 
				<div class="tab-content" id="tabsContent"> 
					<div class="tab-pane active in" role="tabpanel" id="level1" aria-labelledby="level1-tab"> 
						<div class="title_level">
							Cấp 1
						</div>
						<div class="content_level">
							<p> Tài khoản Cấp 1 được kích hoạt sau khi bạn đăng ký chủ kho, hỗ trợ bạn làm quen với các tính năng, thao tác của hệ thống nosaGo.com</p>
							<p> Hạn chế của tài khoản này là tiếp cận chưa đến 01% tổng lượt truy cập của nosaGo.com. Vì thế, Tài Khoản Cấp 1 không tạo ra nhiều cơ hội mua bán đầy tiềm năng tại nosaGo.com.</p>
						</div>
					</div> 
					<div class="tab-pane" role="tabpanel" id="level2" aria-labelledby="level2-tab"> 
						<div class="title_level">
							Cấp 2
						</div>
						<div class="content_level">
							<p> <strong>Tiếp cận nhiều đối tác là công ty:</strong> Đã được đăng ký và xác thực số điện thoại tại nosaGo.com.</p>
							<p> <strong>Ưu tiên hiển thị sản phẩm:</strong> Tới 99% lượt truy cập tại nosaGo.com trong tìm kiếm, danh sách sản phẩm.</p>
							<p> <strong>Banner hiển thị:</strong> Luân phiên trong từng danh mục ngành hàng.</p>
						</div> 
					</div> 
					<div class="tab-pane" role="tabpanel" id="level3" aria-labelledby="level3-tab"> 
						<div class="title_level">
							Cấp 3
						</div>
						<div class="content_level">
							<p> <strong>Tiếp cận nhiều đối tác là công ty:</strong> Đã được đăng ký và xác thực số điện thoại tại nosaGo.com.</p>
							<p> <strong>Ưu tiên hiển thị sản phẩm:</strong> Tới 99% lượt truy cập tại nosaGo.com trong tìm kiếm, danh sách sản phẩm.</p>
							<p> <strong>Banner hiển thị:</strong> Trong từng danh mục, ngành hàng.</p>
							<p> <strong>Hiển thị sản phẩm nổi bật:</strong> Được đề xuất đến đối tác trong trang danh mục và tìm kiếm.</p>
							<p> <strong>Hiển thị Chủ kho nổi bật:</strong> Được đề xuất đến Đối tác trong tìm kiếm Chủ kho.</p>
						</div> 
					</div> 
				</div> 
			</div> -->
		</div>
	</div>
	<div class="service-confirm service_lp_4" style="">
		<div class="title_lp service_lp_4">
			DÀNH CHO NCC CHUYÊN NGHIỆP
		</div>
		<div class="row content-service-landingpage">
			<div class="col-md-6 col-sm-6 " style="">
				<div class="dkdichvu">
					<section class="widget ">
						<a href="#" title=""><img style="width: 100%;" src="{{asset('images/dkquangcao.png')}}" alt=""></a>
					</section>
				</div>
				<div class="info-service">
					<div class="title_lp info-service-ncc">
						Xác thực kho
					</div>
					<div class="content-service-ncc">
						Xác thực khoXác thực khoXác thực khoXác thực khoXác thực khoXác thực khoXác thực khoXác thực khoXác thực khoXác thực khoXác thực khoXác thực khoXác thực khoXác thực khoXác thực kho
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 " style="">
				<div class="dkdichvu">
					<section class="widget dkdichvu">
						<a href="#" title=""><img style="width: 100%;" src="{{asset('images/dkxacthuc.png')}}" alt=""></a>
					</section>
				</div>	
				<div class="info-service">
					<div class="title_lp info-service-ncc">
						Quảng cáo
					</div>
					<div class="content-service-ncc">
						Quảng cáo
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.partial.modal_requiredlogin')
@endsection
@section('add_scripts')
<script type="text/javascript">
	$('#tabs_service a').click(function (e) {
	  	e.preventDefault()
	  	$(this).tab('show')
	});
</script>
@endsection