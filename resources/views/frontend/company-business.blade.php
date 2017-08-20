@extends('layouts.frontend')
@section('title', 'Thông tin Công ty')
@section('description','Thông tin Công ty')

@section('content')
			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
			<div class="page_wrapper">

				<div class="container">
					<ul class="breadcrumbs">

						<li><a href="/">Trang chủ</a></li>
						<li>Danh sách các Công ty uy tín</li>

					</ul>
					<div class="row">
						<main class="col-md-12 col-sm-12">

							<div class="company_list">
								
								@if(count($getAllNewsCompany)!=0)
									<?php $i=0 ;$j=0?>
									@foreach($getAllNewsCompany as $itemAllNewsCompany)
										@if($i==0)<div class="category_product_row" style="background-color: #fff;">@endif
													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
											<div class="col-md-2 col-xs-12 company_cell">

												<div class="product_bestselt">

													<div class="company_image">

														<a href=""><img src="@if (!empty($itemAllNewsCompany->image_company)){{url('/').$itemAllNewsCompany->image_company}} @else {{asset('/images/8.png')}} @endif" alt=""></a>

													</div>

													<div class="description">

														<p class="textoverlow"><a href="{{ url('/shop/'.$itemAllNewsCompany->id) }}" class="clearfix textoverlow">{{$itemAllNewsCompany->name}}</a></p>
														<div class="kho_info clearfix">
															<a href="#" class="alignleft" style="width: 70px;">
																@if($itemAllNewsCompany->confirm == 1)
																	<img src="{{url('/images')}}/xacthuc.png" alt="">
																@else
																@endif
															</a>
														</div>
														<div class="clearfix product_info">
				                                        	
				                                        </div>
													</div>

												</div>
											</div>
											<?php $i = $i+1;$j=$j+1; ?>
											@if($i>=6|| $j>=count($getAllNewsCompany))
												<?php $i=0 ?>
										</div>
										@endif

									@endforeach

								@else
										<br>
									<h2 class="text-center" style="text-align: center">Không tìm thấy dữ liệu</h2>
								@endif
							</div>	
						</main>
					</div>
					@if($getAllNewsCompany->perPage() != 0)
					<footer class="bottom_box text-center">
						<div class="right_side">

							{!! $getAllNewsCompany->render() !!}

						</div>
					</footer>
					@endif
				</div>	
			</div>	
			@include('admin.partial.modal_requiredlogin')
@endsection