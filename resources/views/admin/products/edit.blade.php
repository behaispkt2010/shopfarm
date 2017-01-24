@extends('layouts.admin')
@section('title', 'Sản phẩm ')
@section('pageHeader','Sản phẩm')
@section('detailHeader','Thêm sản phẩm')
@section('add_styles')
        <!-- Dropzone.js -->
<link href="{{asset('plugin/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">
        <!-- Datatables -->
{{--<link rel="stylesheet" type="text/css" href="{{asset('css/selectize.default.css')}}">--}}

    @endsection
@section('content')
    <br>
    <div class="row">
        @if(Request::is('admin/products/create'))
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                @else
                    <form action="{{route('products.update',['id' => $id])}}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        <input type="hidden" name="id" value="{{$id}}">
                        @endif
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-8 col-xs-12">
                    <!-- Name and Description -->
                    <div class="x_panel">
                        <div class="form-group">
                            <label for="name">Tiêu đề</label>
                            <input type="text" class="form-control" name="title"  required value="@if(!empty($product->title)){{$product->title}}@else{{old('title')}}@endif">
                        </div>

                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea class="form-control" rows="5" name="content">@if(!empty($product->content)){{$product->content}}@else{{old('content')}}@endif</textarea>
                            <script type="text/javascript">ckeditor('content')</script>
                        </div>

                    </div>
                    {{--<div class="x_panel">--}}
                        {{--<div class="x_title">--}}
                            {{--<h2>Đăng nhiều ảnh sản phẩm</h2>--}}
                            {{--<ul class="nav navbar-right panel_toolbox">--}}
                                {{--<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>--}}
                                {{--</li>--}}

                                {{--<li><a class="close-link"><i class="fa fa-close"></i></a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                        {{--<div class="x_content">--}}
                            {{--<p>Kéo thả nhiều hình cùng lúc vào</p>--}}
                            {{--<form action="form_upload.html" class="dropzone"></form>--}}
                            {{--<br />--}}
                            {{--<br />--}}
                            {{--<br />--}}
                            {{--<br />--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="x_panel">
                        <div class="form-group">
                            <h4 class="title-product-main text-no-bold mb20">Thông tin chi tiết sản phẩm </h4>
                            <div class="form-group">
                                <label for="ex4">Mã sản phẩm</label>
                                <input type="text" id="ex4" class="form-control" name="code" required value="@if(!empty($product->code)){{$product->code}}@else{{old('code')}}@endif">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                <label for="ex4">Giá thu vào</label>
                                <input type="number"  class="form-control" name="price_in" required value="@if(!empty($product->price_in)){{$product->price_in}}@else{{old('price_in')}}@endif">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ex4">Giá bán ra</label>
                                        <input type="number"  class="form-control" name="price_out" required  value="@if(!empty($product->price_out)){{$product->price_out}}@else{{old('price_out')}}@endif">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ex4">Khối lượng (grams)</label>
                                <input type="number" id="ex4" class="form-control" name="gram" required value="@if(!empty($product->gram)){{$product->gram}}@else{{old('gram')}}@endif">
                            </div>
                            <div class="form-group">
                                <label for="ex4">Bán tối thiểu (grams)</label>
                                <input type="number" id="ex4" class="form-control" name="min_gram" required value="@if(!empty($product->min_gram)){{$product->min_gram}}@else{{old('min_gram')}}@endif">
                            </div>
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="ex4">Chính sách tồn kho</label>
                                <select class="form-control" name="inventory">
                                    <option value="0" @if(!empty($product->inventory) && $product->inventory == 0) selected @endif >Luôn có</option>
                                    <option value="1" @if(!empty($product->inventory) && $product->inventory == 1) selected @endif >Có tồn kho</option>
                                </select>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="ex4">Số lượng(gram)</label>
                                <input type="number" id="ex4" class="form-control" name="inventory_num" required value="@if(!empty($product->inventory_num)){{$product->inventory_num}}@else{{old('inventory_num')}}@endif">
                                        </div>
                                </div>
                            </div>



                            </div>

                        </div>

                    <div class="x_panel">
                        <!-- SEO -->
                        <!-- SEO -->
                        <div class="wrapper-content mt20 mb20">
                            <div class="pd-all-20 ps-relative">
                                <label class="title-product-main text-no-bold mb20">Tối ưu SEO</label>

                                <p class="mb0">Thiết lập các thẻ mô tả giúp khách hàng dễ dàng tìm thấy trang
                                    trên công cụ
                                    tìm
                                    kiếm
                                    như Google.</p>

                                <div>
                                    <span class="page-title-seo"></span>

                                    <div class="page-description-seo ws-nm"><span>{{url('blogs')}}/@if(!empty($product->slug)){{$product->slug}}@endif</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-all-20 border-top-title-main">
                                <div class="form-group">
                                    <label class="inline">Tiêu đề trang</label>
                                    <label class="inline note pull-right"> <span>0</span> trên 70 kí tự</label>
                                    <input type="text" class="form-control" name="title_seo"
                                           value="@if(!empty($product->title_seo)){{$product->title_seo}}@else{{old('title_seo')}}@endif">
                                </div>
                                <div class="form-group">
                                    <label class="inline" for="inputmetadescription">Mô tả trang</label>
                                    <label class="inline note pull-right"> <span
                                                data-bind="text: MetaDescLength">0</span>
                                        trên 160 kí tự</label>
                                    <input type="text" class="form-control" name="description"
                                           value="@if(!empty($product->description)){{$product->description}}@else{{old('description')}}@endif">

                                </div>
                                <div class="form-group mb0">
                                    <label for="inputurlhandle">
                                        Đường dẫn
                                    </label>

                                    <div class="input-group">
                                                        <span class="input-group-addon drop-price-addon border-color-input-group">
                                                           {{url('blogs')}}/</span>
                                        <input type="hidden" class="form-control" name="slug" value="@if(!empty($product->slug)){{$product->slug}}@endif"/>
                                        <input type="text" class="form-control" name="slug_seo"
                                               placeholder="ten-bai-viet-1"
                                               value="{{old('slug_seo')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End SEO -->
                        <!-- End SEO -->
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <!-- Show/Hide -->
                    <div class="x_panel">
                        <div class="wrapper-content">
                            <div class="pd-all-20">
                                <label class="title-product-main text-no-bold">Hiển thị</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                                    Hiển thị ngay
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Ẩn đi
                                </label>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="text-center">
                                <a href="{{route('products.index')}}" type="submit" class="btn btn-raised btn-primary">Hủy</a>
                                <button type="submit" class="btn btn-raised btn-success">Lưu</button>
                            </div>
                        </div>
                    </div>
                    <div class="x_panel">
                        <div class="wrapper-content mt20">
                            <div class="pd-all-20 border-top-title-main">
                                <div class="form-group">
                                    <label>Chủ kho</label>
                                    <select id="select-ck" name="kho" class="form-control" data-placeholder="chọn kho">
                                        <option value="0"
                                                @if(!empty($article->category) && $article->category == 0) selected @endif >
                                            Mặc định
                                        </option>
                                        @foreach($wareHouses  as $itemData)
                                            <option value="{{$itemData->id}}"
                                                    @if(!empty($product->category) && $product->kho == $itemData->id) selected @endif >
                                                {{$itemData->name}}(#{{$itemData->id}})
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Loại sản phẩm</label>
                                    <select id="select-type" name="category" class="form-control" >
                                        <option value="0"
                                                @if(!empty($product->category) && $product->category == 0) selected @endif >
                                            Mặc định
                                        </option>
                                        @foreach($category  as $itemData)
                                            <option value="{{$itemData->id}}"
                                                    @if(!empty($product->category) && $product->category == $itemData->id) selected @endif >
                                                {{$itemData->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="">
                                    <label class="mb5">Hình đại diện</label>
                                </div>
                                <div class="image-view">
                                    @if(!empty($product->image))
                                        <img src="{{$product->image}}" alt="" class="img-responsive">
                                        <div class="form-group">
                                            <label for="inputFile" class="col-md-4 control-label">Thay đổi</label>

                                            <div class="col-md-8">
                                                <input type="text" readonly="" class="form-control" placeholder="Browse...">
                                                <input type="file" name="image"  id="inputFile">
                                            </div>
                                        </div>

                                    @else
                                        <input type="file" style="display:none;" name="image" id="file-6"
                                               class="inputfile inputfile-5"
                                               data-multiple-caption="{count} files selected"/>
                                        <label class="file-view" for="file-6">
                                            <figure>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17"
                                                     viewBox="0 0 20 17">
                                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                                                </svg>
                                            </figure>
                                            <span></span></label>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="multi-image">
                            @if(!empty($detailImage))
                                @foreach($detailImage as $itemDetailImage)
                                    <img src="{{url('/')}}{{$itemDetailImage->image}}" class="img-responsive item-image-detail" alt="">
                                    @endforeach
                            @endif
                            <div class="form-group">
                                <label for="inputFile" class="col-md-12 control-label">Chọn nhiều ảnh mô tả</label>

                                <div class="col-md-12">
                                    <input type="text" readonly="" class="form-control" placeholder="Tải lên...">
                                    <input type="file" id="inputFile" name="image_detail[]" multiple="">
                                </div>
                            </div>
                        </div>
                        <!-- End Featured image-->
                        {{--<div class="wrapper-content mt20">--}}
                            {{--<div class="control-group">--}}
                                {{--<label>Tags</label>--}}
                                {{--<div class="form-group">--}}
                                {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                                    {{--<input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales"/>--}}

                                    {{--<div id="suggestions-container"--}}
                                         {{--style="position: relative; float: left; width: 250px; margin: 10px;"></div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>
                </div>
        </form>

    </div>

    @endsection


    @section('add_scripts')
        <script src="{{asset('plugin/dropzone/dist/min/dropzone.min.js')}}"></script>
            <!-- jQuery Tags Input -->
    <script src="{{asset('plugin/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script>
        function onAddTag(tag) {
            alert("Added a tag: " + tag);
        }

        function onRemoveTag(tag) {
            alert("Removed a tag: " + tag);
        }

        function onChangeTag(input, tag) {
            alert("Changed a tag: " + tag);
        }

        $(document).ready(function () {
            $('#tags_1').tagsInput({
                width: 'auto'
            });
        });
    </script>
        <script src="{{asset('js/selectize.js')}}"></script>
        <!-- Select2 -->
        <script>
            $('#select-ck,#select-type').selectize({

            });
        </script>
    <!-- /jQuery Tags Input -->
@endsection