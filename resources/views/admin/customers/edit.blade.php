@extends('layouts.admin')
@section('title', 'khách hàng')
@section('pageHeader','khách hàng')
@section('detailHeader','thông tin')
@section('rightHeader')
    <a href="{{route('customers.create')}}" class="btn btn-raised btn-warning btn-md">
        <i class="fa fa-plus" aria-hidden="true"></i> Tạo mới
    </a>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-xs-12">
            <!-- Name and Description -->
            <div class="">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 profile_details product-detail">

                        <div class="well box1 info-warehouse">
                            <h4 class="text-center">Thông tin người đại diện <i style="float: right"
                                                                                class="fa fa-wrench"
                                                                                aria-hidden="true"></i></h4>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Mã</label>

                                            <div class="col-md-9 col-xs-12">
                                                <input type="email" disabled class="form-control" id="code" placeholder="#000"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name" class="col-md-3 col-xs-12control-label">Tên</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="text" disabled class="form-control" name="name"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name-bank" class="col-md-3 col-xs-12 ">Ngân
                                                hàng</label>

                                            <div class="col-md-9 col-xs-12">
                                                <p>Tên ngân hàng: Đông Á</p>

                                                <p>Tỉnh/thành phố: Hà Nội</p>

                                                <p>Số tài khoản: 10000000000</p>

                                                <p>Chủ tài khoản: Nguyễn Văn A</p>
                                                <a href="" data-toggle="modal"
                                                   data-target=".modal-bank"> Cập nhật tài khoản</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name" class="col-md-3 col-xs-12control-label">Cập nhật</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <div>22/11/2016 23:25</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="text-right">
                                    <button class="btn-update btn btn-primary btn-raised text-right btn-small" style="display: none"> Cập nhật</button>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 profile_details product-detail">

                        <div class="well box1 info-kho">
                            <h4 class="text-center">Thông tin doanh nghiệp <i style="float: right"
                                                                                    class="fa fa-wrench edit"
                                                                                    aria-hidden="true"></i></h4>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Tên DN</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="text" disabled class="form-control" id="code"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Địa chỉ</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="text" disabled class="form-control" id="code"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">MS
                                                thuế</label>

                                            <div class="col-md-9 col-xs-12">
                                                <input type="text" disabled class="form-control" id="code"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Người ĐD</label>

                                            <div class="col-md-9 col-xs-12">
                                                <input type="text" disabled class="form-control" id="code"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-right">
                                    <button class="btn-update btn btn-primary btn-raised text-right btn-small" style="display: none"> Cập nhật</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 profile_details product-detail">

                        <div class="well box1 info-kho">
                            <h4 class="text-center">Lịch sử giao dịch </h4>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-4 col-xs-12 control-label">16/11/2016 20:38</label>
                                            <div class="col-md-4 col-xs-12 ">
                                                <a href="">Đơn hàng 1KS93UQX</a>
                                            </div>
                                            <div class="col-md-4 col-xs-12 ">
                                                2.000.000 VNĐ
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>



    <div class="modal fade modal-service" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-service">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Xác thực kho</h4>
                </div>
                <div class="modal-body sroll">
                    <div class="row">
                        <div class="col-md-12">

                            <h3>Có giấy phép kinh doanh</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="form-group">
                                            <label class="col-md-8 col-xs-12 control-label"> Mô hình kinh doanh:</label>

                                            <div class="col-md-4 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> xác thực
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li> <div class="form-group">
                                            <label class="col-md-8 col-xs-12 control-label"> Mô hình kinh doanh</label>

                                            <div class="col-md-4 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" checked="true"> xác thực
                                                    </label>
                                                </div>
                                            </div>
                                        </div></li>
                                    <li> <div class="form-group">
                                            <label class="col-md-8 col-xs-12 control-label"> Tên doanh nghiệp</label>

                                            <div class="col-md-4 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> xác thực
                                                    </label>
                                                </div>
                                            </div>
                                        </div></li>
                                    <li> <div class="form-group">
                                            <label class="col-md-8 col-xs-12 control-label"> Thời gian hợp đồng của doanh nghiệp</label>

                                            <div class="col-md-4 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> xác thực
                                                    </label>
                                                </div>
                                            </div>
                                        </div></li>

                                    <li> <div class="form-group">
                                            <label class="col-md-8 col-xs-12 control-label"> Mã số thuế</label>

                                            <div class="col-md-4 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Địa chỉ
                                                    </label>
                                                </div>
                                            </div>
                                        </div></li>
                                    <li> <div class="form-group">
                                            <label class="col-md-8 col-xs-12 control-label"> Đại diện</label>

                                            <div class="col-md-4 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> xác thực
                                                    </label>
                                                </div>
                                            </div>
                                        </div></li>
                                </ul>
                            <div class="clear"></div>
                            <br>
                            <h3>Có Kho hàng / Nhà xưởng</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="form-group">
                                        <label class="col-md-8 col-xs-12 control-label"> Quy mô: 30m2</label>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> xác thực
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li> <div class="form-group">
                                        <label class="col-md-8 col-xs-12 control-label"> Năng lực cấp:.....</label>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" checked="true"> xác thực
                                                </label>
                                            </div>
                                        </div>
                                    </div></li>
                                <li> <div class="form-group">
                                        <label class="col-md-12 col-xs-12 control-label"> hình ảnh kho:.....</label>

                                        <div class="col-md-12 col-xs-12">

                                        </div>
                                    </div></li>

                            </ul>

                            </div>


                    </div>


                </div>
                <div class="modal-footer">

                </div>

            </div>
        </div>
    </div>


    <div class="modal fade modal-change-pass" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-change-pass">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Thay đổi mật khẩu</h4>
                </div>
                <div class="modal-body sroll">


                                <div class="row">
                                    <div class="form-group">
                                    <label for="code" class="col-md-5 control-label">Mật khẩu mới:</label>

                                    <div class="col-md-7">
                                        <input type="password" class="form-control"/>
                                    </div>
                                        </div>

                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="code" class="col-md-5 control-label">Nhập lại mật khẩu</label>

                                        <div class="col-md-7">
                                            <input type="password" class="form-control"/>
                                        </div>
                                    </div>

                                </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-primary">Lưu</button>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade modal-bank" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-bank">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Tài khoản ngân hàng</h4>
                </div>
                <div class="modal-body">

                    <div class="frm-add">
                        <div class="row">
                            <div class="form-group">
                            <label for="name" class="col-md-4 col-sm-4 control-label">Tên ngân hàng</label>
                            <div class="col-md-8 col-sm-8">
                                <select  data-placeholder="Ngân hàng" class="form-control">
                                    <option label="NH Đông Á" value="object:12">NH Đông Á</option>
                                    <option label="NH Vietcombank" value="object:13">NH Vietcombank</option>
                                    <option label="NH Techcombank" value="object:14">NH Techcombank</option>
                                    <option label="NH MBank" value="object:15">NH MBank</option>
                                    <option label="NH Á Châu" value="object:16">NH Á Châu</option>
                                    <option label="NH Maritime Bank" value="object:17">NH Maritime Bank</option>
                                    <option label="NH Sacombank" value="object:18">NH Sacombank</option>
                                    <option label="NH Agribank" value="object:19">NH Agribank</option>
                                    <option label="NH Vietin" value="object:20">NH Vietin</option>
                                    <option label="NH ANZ" value="object:21">NH ANZ</option>
                                    <option label="NH Tiên Phong" value="object:22">NH Tiên Phong</option>
                                    <option label="NH Exim" value="object:23">NH Exim</option>
                                    <option label="NH Đại Á" value="object:24">NH Đại Á</option>
                                    <option label="NH Đông Nam Á" value="object:25">NH Đông Nam Á</option>
                                    <option label="NH Đại Dương" value="object:26">NH Đại Dương</option>
                                    <option label="NH An Bình" value="object:27">NH An Bình</option>
                                    <option label="NH Bắc Á" value="object:28">NH Bắc Á</option>
                                    <option label="NH Dầu khí Toàn Cầu" value="object:29">NH Dầu khí Toàn Cầu</option>
                                    <option label="NH Bản Việt" value="object:30">NH Bản Việt</option>
                                    <option label="NH Kiên Long" value="object:31">NH Kiên Long</option>
                                    <option label="NH Nam Á" value="object:32">NH Nam Á</option>
                                    <option label="NH Nam Việt" value="object:33">NH Nam Việt</option>
                                    <option label="NH Việt Nam Thịnh Vượng" value="object:34">NH Việt Nam Thịnh Vượng
                                    </option>
                                    <option label="NH Phát Triển Nhà Thành phố Hồ Chí Minh" value="object:35">NH Phát
                                        Triển Nhà Thành phố Hồ Chí Minh
                                    </option>
                                    <option label="NH Phương Nam" value="object:36">NH Phương Nam</option>
                                    <option label="NH Phương Đông" value="object:37">NH Phương Đông</option>
                                    <option label="NH Quân Đội" value="object:38">NH Quân Đội</option>
                                    <option label="NH Phương Tây" value="object:39">NH Phương Tây</option>
                                    <option label="NH Quốc tế" value="object:40">NH Quốc tế</option>
                                    <option label="NH Sài Gòn" value="object:41">NH Sài Gòn</option>
                                    <option label="NH Sài Gòn Công Thương" value="object:42">NH Sài Gòn Công Thương
                                    </option>
                                    <option label="NH Sài Gòn-Hà Nội" value="object:43">NH Sài Gòn-Hà Nội</option>
                                    <option label="NH Việt Á" value="object:44">NH Việt Á</option>
                                    <option label="NH Bảo Việt" value="object:45">NH Bảo Việt</option>
                                    <option label="NH Việt Nam Thương Tín" value="object:46">NH Việt Nam Thương Tín
                                    </option>
                                    <option label="NH Xăng dầu Petrolimex" value="object:47">NH Xăng dầu Petrolimex
                                    </option>
                                    <option label="NH Bưu Điện Liên Việt" value="object:48">NH Bưu Điện Liên Việt
                                    </option>
                                    <option label="NH Phát Triển Mê Kông" value="object:49">NH Phát Triển Mê Kông
                                    </option>
                                    <option label="NH Đại Tín" value="object:50">NH Đại Tín</option>
                                    <option label="NH Đầu tư" value="object:51">NH Đầu tư</option>
                                    <option label="NH Phát triển Nhà Đồng bằng sông Cửu Long" value="object:52">NH Phát
                                        triển Nhà Đồng bằng sông Cửu Long
                                    </option>
                                    <option label="NH ANZ Việt Nam" value="object:53">NH ANZ Việt Nam</option>
                                    <option label="NH Deutsche Bank Việt Nam" value="object:54">NH Deutsche Bank Việt
                                        Nam
                                    </option>
                                    <option label="NH Citibank Việt Nam" value="object:55">NH Citibank Việt Nam</option>
                                    <option label="NH TNHH một thành viên HSBC (Việt Nam)" value="object:56">NH TNHH một
                                        thành viên HSBC (Việt Nam)
                                    </option>
                                    <option label="NH Standard Chartered" value="object:57">NH Standard Chartered
                                    </option>
                                    <option label="NH TNHH MTV Shinhan Việt Nam" value="object:58">NH TNHH MTV Shinhan
                                        Việt Nam
                                    </option>
                                    <option label="NH Hong Leong Việt Nam" value="object:59">NH Hong Leong Việt Nam
                                    </option>
                                    <option label="NH Ngân hàng Đầu tư và Phát triển Campuchia" value="object:60">NH
                                        Ngân hàng Đầu tư và Phát triển Campuchia
                                    </option>
                                    <option label="NH Crédit Agricole" value="object:61">NH Crédit Agricole</option>
                                    <option label="NH United Overseas Bank tại Việt Nam" value="object:62">NH United
                                        Overseas Bank tại Việt Nam
                                    </option>
                                    <option label="NH TNHH Indovina" value="object:63">NH TNHH Indovina</option>
                                    <option label="NH Việt - Nga" value="object:64">NH Việt - Nga</option>
                                    <option label="NH ShinhanVina" value="object:65">NH ShinhanVina</option>
                                    <option label="NH VID Public Bank" value="object:66">NH VID Public Bank</option>
                                    <option label="NH Việt - Thái" value="object:67">NH Việt - Thái</option>
                                    <option label="NH Việt - Lào" value="object:68">NH Việt - Lào</option>
                                </select>

                            </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <label for="name" class="col-md-4 col-sm-4 control-label">Tỉnh/thành phố</label>
                            <div class="col-md-8 col-sm-8">
                                <select class="form-control">
                                    <option label="An Giang" value="object:69">An Giang</option>
                                    <option label="Bà Rịa – Vũng Tàu" value="object:70">Bà Rịa – Vũng Tàu</option>
                                    <option label="Bạc Liêu" value="object:71">Bạc Liêu</option>
                                    <option label="Bắc Giang" value="object:72">Bắc Giang</option>
                                    <option label="Bắc Kạn" value="object:73">Bắc Kạn</option>
                                    <option label="Bắc Ninh" value="object:74">Bắc Ninh</option>
                                    <option label="Bến Tre" value="object:75">Bến Tre</option>
                                    <option label="Bình Dương" value="object:76">Bình Dương</option>
                                    <option label="Bình Định" value="object:77">Bình Định</option>
                                    <option label="Bình Phước" value="object:78">Bình Phước</option>
                                </select>
                            </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <label  class="col-md-4 col-sm-4 control-label">Số tài khoản</label>

                            <div class="col-md-8 col-sm-8">
                                <input type="text" class="ng-valid ng-dirty ng-touched form-control">
                            </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <label  class="col-md-4 col-sm-4 control-label">Chủ tài khoản</label>

                            <div class="col-md-8 col-sm-8">
                                <input type="text" class="ng-valid ng-dirty ng-touched form-control">
                            </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </div>
    @endsection


    @section('add_scripts')
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

    <script src="{{asset('js/selectize.js')}}"></script>
    <!-- Select2 -->
    <script>
        $('select').selectize({
            create: true,
            sortField: 'text'
        });
    </script>
    <script>
        $('.info-kho,.info-warehouse').click(function(){
            $(this).find('input').removeAttr('disabled');
            $(this).find('.btn-update').css('display','block');

        })
        $('button.btn-update').click(function(){
//            alert("dsds");
//            $(this).closest().find('input').attr('disabled');
//            $('button.btn-update').css('display','none');
        })
    </script>

@endsection