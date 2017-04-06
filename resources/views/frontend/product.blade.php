@extends('layouts.frontend')
@section('title', 'Sản phẩm')
@section('description','sản phẩm')
@section('add_styles')
	{{-- --}}
@endsection
@section('content')
<div class="secondary_page_wrapper">

	{{--{{dd(\App\Product::getBestStarsProduct())}}--}}

	<div class="container">
		<ul class="breadcrumbs">

			<li><a href="/">Trang chủ</a></li>
			<li>Sản phẩm</li>

		</ul>
		<div class="row">

			<aside class="col-md-3 col-sm-4">

					@include('frontend.witgets.category-product')

				<!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->

				<div class="section_offset hidden-xs">
					@include('frontend.panner.product-banner')

				</div>

				<!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->


			</aside>
		<!-- - - - - - - - - - - - - - Products - - - - - - - - - - - - - - - - -->
<div class="col-md-9">
		<div class="section_offset">

			<header class="top_box on_the_sides">
				<div class="right_side clearfix v_centered">
					@if(!empty(Request::get('search')))
					<h4>Tìm kiếm: {{Request::get('search')}}</h4>
						@elseif(!empty($nameCate))
						<h4>{{$nameCate}}</h4>
						@else
						<h4>Tất cả sản phẩm</h4>
@endif
				</div>
				<div class="right_side clearfix v_centered">

					<!-- - - - - - - - - - - - - - Sort by - - - - - - - - - - - - - - - - -->

					<div class="v_centered">

						<span>Xắp xếp theo:</span>

						<div class=" sort_select">

							<select name="fillter">

								<option value="cap-kho" @if(Request::get('q')=='cap-kho') selected @endif>Cấp kho</option>
								<option value="ten-san-pham" @if(Request::get('q')=='ten-san-pham') selected @endif>Tên sản phẩm</option>
								<option value="moi-nhat" @if(Request::get('q')=='moi-nhat') selected @endif>Mới nhất</option>
								<option value="gia" @if(Request::get('q')=='gia') selected @endif>Giá</option>


							</select>

						</div>

					</div>

					<!-- - - - - - - - - - - - - - End of sort by - - - - - - - - - - - - - - - - -->

					<!-- - - - - - - - - - - - - - Number of products shown - - - - - - - - - - - - - - - - -->


				</div>



			</header>

			<div class="table_layout" id="products_container">

				<div class="table_layout" style="">

					@if(count($products)!=0)
					<?php $i=0 ;$j=0?>
					@foreach($products as $key=> $product)
						@if($i==0)<div class="category_product_row" style="margin-bottom: 15px; background-color: #fff;">@endif
									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
							<div class="col-md-4 category_product_cell">

								<div class="product_bestselt" style="border: 1px solid #eaeaea;">

									<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

									<div class="image_wrap">

										<a href="{{url('/product').'/'.\App\CategoryProduct::getSlugCategoryProduct($product->id).'/'.$product->slug}}"><img src="{{url('/').$product->image}}" alt=""></a>


										<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

										{{--<div class="label_bestseller"></div>--}}



										<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

									</div><!--/. image_wrap-->

									<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

									<div class="description">

										<a href="#" class="clearfix">{{$product->title}}</a>

										<div class="kho_info clearfix">
											<a href="#" class="alignleft photo">
												@if($product->levelKho == 1)
													<img src="{{url('/images')}}/level1.png" alt="">
												@elseif($product->levelKho == 2)
													<img src="{{url('/images')}}/level2.png" alt="">
												@elseif($product->levelKho == 3)
													<img src="{{url('/images')}}/level3.png" alt="">
												@else
													<img src="{{url('/images')}}/level0.jpg" alt="">
												@endif
											</a>
											<p class="alignleft"><b>{{ $product->nameKho  }}</b></p>
										</div>
										<div class="clearfix product_info">
											<p class="product_price alignleft"><b>{{ number_format($product->price_out)  }} VNĐ</b></p>
											<span class="alignright">{!! \App\Rate::getRateProduct($product->id)!!}</span>
										</div>
										<div class="clearfix product_info">
											<p class="alignleft">Tối thiểu: {{ number_format($product->min_gram)  }} Kg</p>
										</div>
									</div>

									<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

								</div><!--/ .product_item-->

							</div>
							<?php $i = $i+1;$j=$j+1; ?>
							@if($i>=3|| $j>=count($products))
								<?php $i=0 ?>
						</div>
						@endif

					@endforeach

					@else
						<br>
					<h2 class="text-center" style="text-align: center">Không tìm thấy dữ liệu</h2>
				@endif
				</div>

			</div><!--/ .table_layout -->

			@if($products->perPage() != 0)
			<footer class="bottom_box on_the_sides">
				<div class="right_side">

					{!! $products->render() !!}

				</div>
			</footer>
				@endif

		</div>

		<!-- - - - - - - - - - - - - - End of products - - - - - - - - - - - - - - - - -->
		</div>
	</div>
	</div><!--/ .container-->

</div><!--/ .page_wrapper-->

<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

	@endsection
@section('add-script')
	<script>
		$(document).on('change','select[name="fillter"]',function(){
			var q= $(this).val();
			window.location.href ="/products?q="+q;
		})
	</script>
@endsection