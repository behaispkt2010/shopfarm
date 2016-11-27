@extends('layouts.admin')
@section('title', 'Đơn hàng')
@section('pageHeader','Đơn hàng')
@section('detailHeader','tạo/chỉnh sửa đơn hàng')
@section('content')
@section('add_styles')
        <!-- Datatables -->
<link href="{{asset('css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
@endsection
<div class="row">
    <div class="col-md-8 col-xs-12">
        <!-- Name and Description -->
        <div class="x_panel">
            <h2>Chi tiết đơn hàng 1KS93UQX</h2>
            <table class="table">
                <tbody>
                <tr>
                    <th><img src="{{url('/')}}/images/sp.jpg" class="img-responsive img-thumbnail"
                             style="max-width: 50px;" alt=""></th>
                    <td><span class="name-product"><a href="">tên sản phẩm (#111)</a></span></td>
                    <td><span class="price-product">100 đ </span></td>
                    <td><span>x </span><input type="number" class="number-product" style="width:50px;" name="number" value="1">

                    </td>
                    <td><span class="total"> 100 đ</span></td>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <th><img src="{{url('/')}}/images/sp.jpg" class="img-responsive img-thumbnail"
                             style="max-width: 50px;"
                             alt=""></th>
                    <td><span class="name-product"><a href="">tên sản phẩm (#111)</a></span></td>
                    <td><span class="price-product">100 đ </span></td>
                    <td><span>x </span><input type="number" class="number-product" style="width:50px;" name="number" value="1">

                    </td>
                    <td><span class="total"> 100 đ</span></td>
                    <td><i class="fa fa-times" aria-hidden="true"></i></td>
                </tr>

                </tbody>
            </table>

            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Tìm mới sản phẩm" id="txtName"
                       required>
            </div>
            <input type="hidden" class="form-control" name="slug" placeholder="slug" id="txtSlug" required>

            <div class="form-group">
                <div class="col-md-6 col-xs-12">
                    <label>Ghi chú</label>
                    <textarea class="form-control note-order-edit"  rows="5" name="note"></textarea>
                    {{--<label><a href="" class="add_attr"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thuộc--}}
                    {{--tính</a></label>--}}

                    {{--<div class="clear"></div>--}}
                    {{--<div class="form_attr">--}}
                    {{--<div class="row ">--}}
                    {{--<div class="col-md-5">--}}
                    {{--<input type="text" name="name_attr[]" class="form-inline form-control"--}}
                    {{--placeholder="tên"/></div>--}}
                    {{--<div class="col-md-5">--}}
                    {{--<input type="text" name="value_attr[]" class="form-inline form-control"--}}
                    {{--placeholder="giá trị"/>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-2">--}}
                    {{--<button type="button" class="btn btn-raised btn-primary" data-method="clear"--}}
                    {{--title="Clear">--}}
                    {{--<span class="docs-tooltip" data-toggle="tooltip" title="xóa">--}}
                    {{--<span class="fa fa-remove"></span>--}}
                    {{--</span>--}}
                    {{--</button>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="col-md-6 col-xs-12 text-right">
                    <p>Tổng giá trị sản phẩm <span>200 đ</span></p>

                    <p><a href="" class="add_attr" data-toggle="modal" data-target=".bs-example-modal-km"><i
                                    class="fa fa-plus-circle" aria-hidden="true"></i> Thêm khuyến mãi</a>
                        <span>0 đ</span></p>

                    <p><a href="" class="add_attr" class="add_attr" data-toggle="modal"
                          data-target=".bs-example-modal-pvc"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                            Thêm phí vận chuyển</a> <span>0 đ</span></p>

                    <p> Số tiền phải thanh toán 0 ₫</p>

                </div>
            </div>

            <div class="clear"></div>
            <hr>
            <div class="footer_order">
                <span><i class="fa fa-id-card-o" aria-hidden="true"></i>Xác nhận thanh toán</span>
                <button type="button" class="btn btn-raised btn-success" data-toggle="modal"
                        data-target=".modal-order" style="font-size: 12px">Đã thanh toán
                </button>
                <button type="button" class="btn btn-raised btn-primary" data-toggle="modal"
                        data-target=".modal-order-1" style="font-size: 12px">Đặt cọc | Thanh toán sau
                </button>
            </div>


        </div>

    </div>
    <div class="col-md-4 col-xs-12">
        <!-- Show/Hide -->
        <div class="x_panel">
            <div class="wrapper-content">
                <div class="form-group">
                    <label> Thời gian đặt hàng</label>
                    <input type="text" id="date-format" class="form-control">

                </div>

                <div class="form-group">
                    <label> Tình trạng đơn hàng</label>
                    <select id="select-tracking" class="form-control" data-placeholder="Chọn tình trạng đơn hàng">
                        <option value="0"> Mới tạo</option>
                        <option value="1"> Chưa tiếp nhận</option>
                        <option value="2"> Đã tiếp nhận</option>
                        <option value="3"> Chuyển DH cho Chủ kho</option>
                        <option value="4"> Đang thu gom</option>
                        <option value="5"> Đang sơ chế</option>
                        <option value="6"> Đang đóng gói</option>
                        <option value="7"> Đã xuất kho</option>
                        <option value="8"> Đang vận chuyển</option>
                        <option value="9"> Đã giao xong</option>
                        <option value="10"> Trả hàng nhập kho</option>
                    </select>

                    <div class="clear"></div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-raised btn-primary">Hủy</button>
                    <button type="submit" class="btn btn-raised btn-success">Cập nhật</button>
                </div>
            </div>
        </div>
        <div class="x_panel">
            <div class="wrapper-content mt20">
                <div class="pd-all-20 border-top-title-main">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Thông tin khách hàng</label>
                            <select id="select-kh" class="form-control" data-placeholder="Tên / số điện thoại">
                                <option></option>
                                <option value="AK">Alaska (01566623)</option>
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

                            <div class="text-center">
                                <button type="button" class="btn btn-raised btn-success" data-toggle="modal"
                                        data-target=".modal-kh">Tạo khách hàng mới
                                </button>
                            </div>
                        </div>
                        <div>Họ tên: Nguyễn Văn A</div>
                        <div>Phone: 01662456743</div>
                        <div>Email: a@gmail.com</div>
                        <div>Ghi chú: note ở đây</div>
                        <div>Địa chỉ: 123 hoàng anh, Thái bình, Thái nguyên, Hà Nội</div>
                        <div><a href="">xem bản đồ</a></div>


                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- modals -->
    <!-- Large modal -->
</div>
    <div class="modal fade bs-example-modal-km" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog bs-example-modal-km">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Thêm khuyến mãi</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Giảm giá đơn hàng theo</label>

                        <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                   data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="male"> %
                            </label>
                            <label class="btn  btn-primary" data-toggle-class="btn-primary"
                                   data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="female"> đ
                            </label>
                        </div>

                        <input class="form-control" type="text" id="last-name" name="last-name" required="required">
                    </div>
                    <div class="form-group">
                        <label>Lý do:</label>
                          <textarea id="message" required="required" class="form-control" name="message"
                                    data-parsley-trigger="keyup" data-parsley-minlength="20"
                                    data-parsley-maxlength="100"
                                    data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                    data-parsley-validation-threshold="10"></textarea>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-raised btn-primary">Thêm khuyến mãi</button>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade bs-example-modal-pvc" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog bs-example-modal-pvc">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Thêm phí vận chuyển</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <div class="alert alert-warning" role="alert">
                            <h3>Làm sao để chọn phí vận chuyển đã cấu hình ?</h3>
                            Hãy thêm thông tin khách hàng với địa chỉ giao hàng đầy đủ để thấy các mức phí vận chuyển đã
                            cấu hình.
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                                Miễn phí
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                                Tùy chọn
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <input type="text" placeholder="Tên phí vận chuyển" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <input type="text" placeholder="Đ" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-raised btn-primary">Thêm phí vận chuyển</button>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade modal-kh" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-kh">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Thêm Thông tin khách hàng</h4>
                </div>
                <div class="modal-body">


                    <div class="form-group">
                        <div class="form-group label-floating">
                            <label class="control-label" for="focusedInput2"> Họ và tên</label>
                            <input class="form-control" id="focusedInput2" type="text">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label" for="focusedInput1"> Số điện thoại</label>
                            <input class="form-control" id="focusedInput1" type="text">
                        </div>

                        <div class="form-group label-floating">
                            <label class="control-label" for="focusedInput3">Địa chỉ</label>
                            <input class="form-control" id="focusedInput3" type="text">
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <select id="t" class="form-control">
                                        <option>Chọn khu vực</option>
                                        <option>Hồ Chí Minh</option>
                                        <option>Vũng Tàu</option>
                                        <option>Hà Nội</option>
                                        <option>Bình Định</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select id="q" class="form-control">
                                        <option>Chọn phường xã</option>
                                        <option>Thủ đức</option>
                                        <option>Quận 1</option>
                                        <option>Quận 2</option>
                                        <option>Quận 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group label-floating">
                                <label class="control-label" for="focusedInputnote">Ghi chú</label>
                                <textarea class="form-control" id="focusedInputnote"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-raised btn-primary">Thêm khách hàng</button>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade modal-order" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-order">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Xác nhận</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p>Xác nhận đã thanh toán cho đơn hàng này?
                        </p>

                        <p> Trạng thái thanh toán của đơn hàng là Đã thanh toán.Sau khi đơn hàng đã tạo, bạn không thể
                            thay đổi phương thức hoặc trạng thái thanh toán.
                        </p>

                        <p> Chọn phương thức thanh toán cho đơn hàng này</p>

                        <div class="form-group">
                            <select class="form-control select-payment">
                                <option value="1">Chuyển khoản ngân hàng</option>
                                <option value="2">Thanh toán khi nhận hàng(COD)</option>
                            </select>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label" for="focusedInput1"> Số tiền đã trả xong</label>
                            <input class="form-control" id="focusedInput1" type="text">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-raised btn-primary">Xác nhận</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade modal-order-1" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-order-1">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Xác nhận</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p>Xác nhận đã thanh toán cho đơn hàng này?
                        </p>

                        <p> Trạng thái thanh toán của đơn hàng là Đã thanh toán.Sau khi đơn hàng đã tạo, bạn không thể
                            thay đổi phương thức hoặc trạng thái thanh toán.
                        </p>

                        <p> Chọn phương thức thanh toán cho đơn hàng này</p>

                        <div class="form-group">
                            <select class="form-control select-payment">
                                <option value="1">Chuyển khoản ngân hàng</option>
                                <option value="2">Thanh toán khi nhận hàng(COD)</option>
                            </select>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label" for="focusedInput1"> Đã nhận</label>
                            <input class="form-control" id="focusedInput1" type="text">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label" for="focusedInput2"> Còn lại</label>
                            <input class="form-control" id="focusedInput2" type="text">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-raised btn-primary">Xác nhận</button>
                </div>

            </div>
        </div>
    </div>
    @endsection


    @section('add_scripts')
            <!-- jQuery autocomplete -->
    <script src="{{asset('plugin/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
    <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap-material-datetimepicker.js')}}"></script>
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
        $('#select-tracking').selectize({});
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#date').bootstrapMaterialDatePicker
            ({
                time: false,
                clearButton: true
            });

            $('#time').bootstrapMaterialDatePicker
            ({
                date: false,
                shortTime: false,
                format: 'HH:mm'
            });

            $('#date-format').bootstrapMaterialDatePicker
            ({
                format: 'DD MMMM YYYY - HH:mm',
                lang: 'vi',
            });
            $('#date-fr').bootstrapMaterialDatePicker
            ({
                format: 'DD/MM/YYYY HH:mm',
                lang: 'fr',
                weekStart: 1,
                cancelText: 'ANNULER',
                nowButton: true,
                switchOnClick: true
            });

        });
    </script>
    <!-- Select2 -->
    <script>
        $('#select-kh,#t,#q,.select-payment').selectize({});
    </script>

@endsection