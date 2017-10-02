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
<div class="lp">
	<div class="sidebar">
		<img style="width: -webkit-fill-available;max-height: 500px;" src="{{ asset('frontend/images/side_lp.jpg') }}">
	</div>
	<div class="service" style="height: 300px; background-color: #0ff;">
		
	</div>
	<div class="company">
		<div class="title">Đối tác của chúng tôi</div>
		<div class="row lp">
			<?php $getAllNewsCompany = \App\Company::getCompany(18); 
			$i=0 ;$j=0 ?>
			@foreach($getAllNewsCompany as $itemAllNewsCompany)
				@if($i==0)<div class="list_com">@endif
					<div class="col-md-2 col-xs-12 company_cell" style="background-color: ">
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
	<div class="service-levelkho" style="height: 300px; background-color: #fb0;">
		Các quyền lợi 
		<ul class="nav nav-tabs">
		  <li role="presentation" class="active"><a href="#">Home</a></li>
		  <li role="presentation"><a href="#">Profile</a></li>
		  <li role="presentation"><a href="#">Messages</a></li>
		</ul>
	</div>
	<div class="service" style="height: 300px; background-color: #bf0;">
		
	</div>
</div>	
@include('admin.partial.modal_requiredlogin')
@endsection