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