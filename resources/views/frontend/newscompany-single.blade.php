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
						<li><a href="/company-business">Cơ hội mua bán</a></li>
						<li>{{$arrNewsCompany->title}} ({{$arrNewsCompany->view_count}} lượt xem)</li>
					</ul>
					<div id="tabs-container" class="hidden-xs">
				        <ul class="mark-tab">
				            <li class="current">Thông tin</li>
				        </ul>
				        <div id="main-profile" class="likeprofile">
				            <div id="column-profile" class="posting-thumb">
				                <figure>
				                    <span><img style="border-radius: 5px;" class="img-responsive" alt="" src="@if (!empty($arrNewsCompany->image_company)){{url('/').$arrNewsCompany->image_company}} @else {{asset('/images/8.png')}} @endif"></span>
				                </figure>
				            </div>
			            
				            <div id="column-info" class="">
				                <div class="tab">
				                    <div id="tab-profile" class="tab-content">

				                        <div class="posting-box">
				                            <table class="job-desc">
				                                <tbody>
				                                <tr>
				                                    <td class="left">
				                                        <span class="title marginbottom">{{$arrNewsCompany->title}} </span>
				                                    </td>
				                                    <!-- <td class="right">
				                                    	<div class="btncnv btn-applyjob" data-rel="288">Ứng tuyển ngay</div>
				                                    </td> -->
				                                </tr>
				                            </tbody></table>
				                        </div>
				                        <div class="posting-box">
				                        <div class="title"><i class="icon ca-ca-infor"></i>Thông tin sản phẩm</div>
				                            <table class="listview">
				                                <tbody>
					                                <tr>
					                                    <td class="left">Yêu cầu sản phẩm</td><td class="right">{!! $arrNewsCompany->content !!}</td>
					                                </tr>
				                            	</tbody>
				                            </table>
				                        </div>    
				                        <div class="posting-box">
				                        	<div class="title"><i class="icon ca-ca-infor"></i>Thông tin Công ty</div>
				                            <table id="my_company" class="listview">
				                                <tbody>
				                                <tr>                        
				                                    <td class="left">Tên công ty</td><td class="right"><b id="">{{ $arrNewsCompany->namecompany }}</b></td>
				                                </tr>
				                                <tr>
				                                    <td class="left">Địa chỉ</td><td class="right" id="">{{ $arrNewsCompany->address }}</td>
				                                </tr>
				                                <tr>
				                                    <td class="left">Số điện thoại</td><td class="right" id="">{{ $arrNewsCompany->phone_number }}</td>
				                                </tr>
				                                <tr>
				                                    <td class="left">Email</td><td class="right" id="">{{ $arrNewsCompany->email }}</td>
				                                </tr>
				                            </tbody></table>
				                        </div>
									</div>
								</div>
				        	</div>
				        	<div class="clr_latest"></div>
				        	<!-- Related Jobs -->
				            <!-- <div class="carousel-jobs">
				            	<div class="title"><span>Thông tin mua bán liên quan</span></div>
				             	<div class="latest-info">
				                 	<div class="cnv_carousel owl-carousel owl-theme" style="opacity: 1; display: block;">
				                    	<div class="owl-wrapper-outer">
				                    		<div class="owl-wrapper" style="width: 390px; left: 0px; display: block;">
				                    			<div class="owl-item" style="width: 195px;">
				                    				<div class="item job-item marginleft">
				                             		<div class="image">
				            					                                 	<figure>
				            					                                     	<a href="" title="">
				            					                                        	<img class="img-responsive" alt="" src="">
				            					                                     	</a>
				            					                                 	</figure>
				            					                             	</div>
				            					                            	<div class="job-desc">
				            					                                 	<a href="" title="">
				            					                                    	<h3 class="title-job"></h3>
				            					                                 	</a>
				            					                                <div class="description"></div>
				            					                                <div class="action"><i class="icon ca-ca-eyes"></i></div>
				            					                             	</div>
				                         			</div>
				                         		</div>
				                         	</div>
				                        </div>
				                        <div class="owl-controls clickable" style="display: none;">
				            					                        <div class="owl-buttons">
				            						                        <div class="owl-prev">
				            						                        	<i class="icon ca-ca-right-arrow"></i>
				            						                        </div>
				            						                        <div class="owl-next">
				            						                        	<i class="icon ca-ca-right-arrow"></i>
				            						                        </div>
				            					                        </div>
				                        </div>
				                    </div>
				             	</div>
				            				        	</div> -->
						</div>
					</div>
					<div class="row visible-xs">
						<div class="name" style="padding-left: 15px;">
							<a href="{{ url('/company/'.$arrNewsCompany->companyID) }}"><h1>{{ $arrNewsCompany->title }}</h1></a>
						</div>
						<br>
						<div class="main_profile">
							<div class="profile col-md-3 col-xs-12">
								<div class="img_company" style="text-align: center;">
									<img style="border-radius: 5px;" src="@if (!empty($arrNewsCompany->image_company)){{url('/').$arrNewsCompany->image_company}} @else {{asset('/images/8.png')}} @endif" alt="">
								</div>
							</div>
						
							<div class="info col-md-9 col-sm-8">
								
								<section class="section_offset">

									<article class="entry single">

										<div class="entry_meta">

											<div class="alignleft">

												<span><i class="icon-calendar"></i> {{$arrNewsCompany->created_at->format('d-m-Y')}}</span>

												<span><i class="fa fa-eye-slash"></i>@if(empty($arrNewsCompany->view_count)) 0 @else {{$arrNewsCompany->view_count}}@endif</span>

											</div>

										</div>
										<div class="entry_image">
											
											{{--<img src="{{url('/')}}{{$singleBlog->image}}" alt="">--}}

										</div>
										<div class="posting-box">
				                        <div class="title"><i class="icon ca-ca-infor"></i>Thông tin sản phẩm</div>
				                            <table class="listview">
				                                <tbody>
					                                <tr>
					                                    <td><b>Yêu cầu sản phẩm</b>
															<div>
																{!! $arrNewsCompany->content !!}
															</div>
					                                    </td>
					                                </tr>
				                            	</tbody>
				                            </table>
				                        </div>
				                        
				                        <div class="posting-box">
				                        	<div class="title"><i class="icon ca-ca-infor"></i>Thông tin Công ty</div>
				                            <table id="my_company" class="listview">
				                                <tbody>
				                                <tr>                        
				                                    <td class="left">Tên công ty</td><td class="right"><b id="">{{ $arrNewsCompany->namecompany }}</b></td>
				                                </tr>
				                                <tr>
				                                    <td class="left">Địa chỉ</td><td class="right" id="">{{ $arrNewsCompany->address }}</td>
				                                </tr>
				                                <tr>
				                                    <td class="left">Số điện thoại</td><td class="right" id="">{{ $arrNewsCompany->phone_number }}</td>
				                                </tr>
				                                <tr>
				                                    <td class="left">Email</td><td class="right" id="">{{ $arrNewsCompany->email }}</td>
				                                </tr>
				                            </tbody></table>
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