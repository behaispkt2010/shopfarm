@extends('layouts.frontend')
@section('title', 'Những điều cần biết khi Xác thực kho')
@section('description','Những điều cần biết khi Xác thực kho')

@section('content')
			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
			<div class="page_wrapper">

				<div class="container">

					<ul class="breadcrumbs">
						<li><a href="/">Trang chủ</a></li>
						<li>{{ $content }}</li>
					</ul>
					<div class="row ">
						LandingPage
					</div>
					
				</div>
			</div>
			@include('admin.partial.modal_requiredlogin')
@endsection