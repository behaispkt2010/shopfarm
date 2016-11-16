@extends('layouts.admin')
@section('title', 'Sản phẩm ')
@section('pageHeader','Sản phẩm')
@section('detailHeader','Thêm sản phẩm')
@section('add_styles')
        <!-- Dropzone.js -->
<link href="{{asset('plugin/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">
    @endsection
@section('content')

    <div class="row">
        <div class="col-md-8 col-xs-12">
            <!-- Name and Description -->
            <div class="x_panel">
                <div class="form-group">
                    <label for="name">Tiêu đề</label>
                    <input type="text" class="form-control" name="name" placeholder="tên tiêu đề" id="txtName" required>
                </div>
                <input type="hidden" class="form-control" name="slug" placeholder="slug" id="txtSlug" required>

                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="form-control" rows="5" name="description"></textarea>
                    <script type="text/javascript">ckeditor('description')</script>
                </div>

            </div>
            <div class="x_panel">
                <div class="x_title">
                    <h2>Đăng nhiều ảnh sản phẩm</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p>Kéo thả nhiều hình cùng lúc vào</p>
                    <form action="form_upload.html" class="dropzone"></form>
                    <br />
                    <br />
                    <br />
                    <br />
                </div>
            </div>
            <div class="x_panel">
                <div class="form-group">
                    <h3 class="title-product-main text-no-bold mb20">Thông tin chi tiết sản phẩm </h3>
                    <div class="form-group">
                        <label for="ex4">Mã sản phẩm</label>
                        <input type="text" id="ex4" class="form-control" placeholder=" ">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                        <label for="ex4">Giá</label>
                        <input type="number"  class="form-control" placeholder=" ">
                            </div>
                            <div class="col-md-6">
                                <label for="ex4">Giá so sánh</label>
                                <input type="number"  class="form-control" placeholder=" ">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ex4">Màu sắc</label>
                        <input type="text" id="ex4" class="form-control" placeholder=" ">
                    </div>
                    <div class="form-group">
                        <label for="ex4">Khối lượng (grams)</label>
                        <input type="text" id="ex4" class="form-control" placeholder=" ">
                    </div>
                    <div class="form-group">
                        <label for="ex4">Chính sách tồn kho</label>
                        <div class="row">
                            <div class="col-md-5">
                        <select class="form-control">
                            <option>Luôn có</option>
                            <option>Có tồn kho</option>
                        </select>
                            </div>
                            <div class="col-md-7">
                        <input type="number" id="ex4" class="form-control" placeholder=" ">
                                </div>
                        </div>
                    </div>



                    </div>

                </div>

            <div class="x_panel">
                <!-- SEO -->
                <div class="wrapper-content mt20 mb20">
                    <div class="pd-all-20 ps-relative">
                        <label class="title-product-main text-no-bold mb20">Tối ưu SEO</label>

                        <p class="mb0">Thiết lập các thẻ mô tả giúp khách hàng dễ dàng tìm thấy trang trên công cụ tìm
                            kiếm
                            như Google.</p>

                        <div>
                            <span class="page-title-seo"></span>

                            <div class="page-description-seo ws-nm"><span>http://nongsantunhien-com.myharavan.com/blogs/tin-tuc/</span>
                            </div>
                        </div>
                        <a class="btn-change-link btn-style-seo pull-right">Chỉnh sửa
                            SEO</a>
                    </div>
                    <div class="pd-all-20 border-top-title-main">
                        <div class="form-group">
                            <label class="inline">Tiêu đề trang</label>
                            <label class="inline note pull-right"> <span>0</span> trên 70 kí tự</label>
                            <input type="text" class="form-control" name="names" placeholder="tiêu đề seo" required>
                        </div>
                        <div class="form-group">
                            <label class="inline" for="inputmetadescription">Mô tả trang</label>
                            <label class="inline note pull-right"> <span data-bind="text: MetaDescLength">0</span> trên
                                160
                                kí tự</label>
                            <input type="text" class="form-control" name="description" placeholder="mô tả ngắn">

                        </div>
                        <div class="form-group mb0">
                            <label for="inputurlhandle">
                                Đường dẫn
                                <a href="https://docs.haravan.com/blogs/co-ban/1000019770-handle" target="_blank">
                                    <i class="hover-tooltip glyphicon glyphicon-question-sign note"></i>
                                </a>
                            </label>

                            <div class="input-group">
                                <span class="input-group-addon drop-price-addon border-color-input-group">http://nongsantunhien-com.myharavan.com/blogs/tin-tuc/</span>
                                <input type="text" class="form-control" name="slugs" placeholder="slug">
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Hủy</button>
                        <button type="submit" class="btn btn-success">Lưu</button>
                    </div>
                </div>
            </div>
            <div class="x_panel">
                <div class="wrapper-content mt20">
                    <div class="pd-all-20 border-top-title-main">
                        <div class="form-group">
                            <label>Chủ kho</label>
                            <select class="select2_single form-control" tabindex="-1">
                                <option>Khác</option>
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Loại sản phẩm</label>
                            <select class="select2_single form-control" tabindex="-1">
                                <option>Khác</option>
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="mb5">Hình đại diện</label>
                        </div>
                        <div class="center-block ps-relative pt10 overflow-hidden">
                            <!-- ko if: ArticleDetail().File() --><!-- /ko -->
                            <div class="styled-file-input">
                                <div class="btn--plain ps-relative">
                                    <!-- ko ifnot: ArticleDetail().File() -->
                                    <div class="aspect-ratio aspect-ratio--square aspect-ratio--interactive">
                                        <div class="next-media__blank-slate">
                                            <div class="next-media__blank-slate__content next-media__blank-slate__content--align-middle">
                                                <svg class="next-icon--40" style="fill:#479ccf"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                                                    <path d="M38 6v28h-36v-28h36m0-2h-36c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h36c1.1 0 2-.9 2-2v-28c0-1.1-.9-2-2-2zm-4 4h-28c-1.1 0-2 .9-2 2v20c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2v-20c0-1.1-.9-2-2-2zm0 2v14.2l-6.8-6.8c-1.9-1.9-4.9-1.9-6.8 0l-5.2 5.2c-1.3-.6-2.9-.3-3.9.7l-5.3 5.3v-18.6h28zm-19.1 14.7l.6.6 4.8 4.8h-12.9l5.3-5.3c.2-.2.5-.3.8-.4.5-.2 1-.1 1.4.3zm8.1 5.3l-6.2-6.2 5-5c1.1-1.1 2.9-1.1 4 0l8.2 8.2v3h-11zm-11.5-15.5c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0-1.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Featured image-->
                <div class="wrapper-content mt20">
                    <div class="control-group">
                        <label>Tags</label>
                        <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales"/>

                            <div id="suggestions-container"
                                 style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
    <!-- /jQuery Tags Input -->
@endsection