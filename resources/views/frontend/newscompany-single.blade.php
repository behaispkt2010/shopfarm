@extends('layouts.frontend')
@section('title', 'Thông tin nhập sản phẩm')
@section('description','Thông tin nhập sản phẩm')
@section('add_styles')
{{-- --}}
@endsection
@section('content')
			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<ul class="breadcrumbs">

						<li><a href="/">Trang chủ</a></li>
						<li><a href="/company-business">Tất cả thông tin mua bán của các Công ty</a></li>
						<li>{{$arrNewsCompany->title}}</li>

					</ul>

					<div class="row">
						<div class="name" style="padding-left: 15px;">
							<a href="{{ url('/company/'.$arrNewsCompany->companyID) }}"><h1>{{ $arrNewsCompany->namecompany }}</h1></a>
						</div>
						<br>
						<div class="main_profile">
							<div class="profile col-md-3">
								<div class="img_company">
									<img src="@if (!empty($arrNewsCompany->image_company)){{url('/').$arrNewsCompany->image_company}} @else {{asset('/images/8.png')}} @endif" alt="">
								</div>
							</div>
						
							<div class="info col-md-9 col-sm-8">
								
								<section class="section_offset">

									<h1>{{$arrNewsCompany->title}}</h1>
									<article class="entry single">

										<div class="entry_meta">

											<div class="alignleft">

												<span><i class="icon-calendar"></i> {{$arrNewsCompany->created_at->format('d-m-Y')}}</span>

												<span><i class="fa fa-eye-slash"></i>@if(empty($arrNewsCompany->view_count)) 0 @else {{$arrNewsCompany->count}}@endif</span>

											</div>

										</div>
										<div class="entry_image">
											
											{{--<img src="{{url('/')}}{{$singleBlog->image}}" alt="">--}}

										</div>

										<div class="content">
											{!! $arrNewsCompany->content !!}
										</div>
										<div class="v_centered share">

											<span class="title">Chia sẻ:</span>

											<div class="addthis_widget_container">

												<div class="fb-share-button" data-href="{{url('/')}}{{$_SERVER['REQUEST_URI']}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Chia sẻ</a></div>

											</div>

										</div>

									</article>
								</section>
							</div>
						</div>	
					</div>
				</div>
			</div>
@endsection
@section('add-script')

	@endsection